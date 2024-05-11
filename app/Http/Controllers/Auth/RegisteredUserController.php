<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'adresse'=>['required'],
            'telephone'=>['required'],
            // 'role' => ['required','not-in: -- Veuillez selectionner --'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],
        [
            'nom.required'=>'le champs nom est obligatoire !',
            'prenom.required'=>'le champs prenom est obligatoire !',
            'email.required'=>'le champs email est obligatoire !',
            'adresse.required'=>'L\'adresse est obligatoire !',
            'telephone.required'=>'Le téléphone est obligatoire !',
            'password.required'=>'le champs password est obligatoire !',
            // 'role.required'=>'Veuillez selectionner une option pour continuer'
        ]
    );

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            // 'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
