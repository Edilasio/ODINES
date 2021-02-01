<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Rol;
use App\Models\User;
use App\Models\Odine;

class UserController extends Controller
{
    public function store(Request $request)
    {        
        $idOdine = Odine::getId($request->odine);
        $idRol = Rol::getId($request->rol);

        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->estado_id = 1;
        $user->odine_id = $idOdine;
        $user->rol_id = $idRol;
        $user->save();

        if($user == null)
        {
             return redirect()
                        ->route('registerForm') 
                        ->with('Erro','Não foi possível registrar o utilizador.');
        }
        else{
            return redirect()
                        ->route('registerForm') 
                        ->with('Êxito','O utilizador foi registrado.');
        }
    }

    public function editProfile(Request $request)
    {                

        if( $request->password != Auth::user()->password )
        {    
            $senha = Hash::make($request->password);
            if( $request->file('foto') ){
                $foto = User::setphoto($request->foto);
                $update = auth()->user()->update(['name' => $request->name, 
                                                  'lastname' => $request->lastname, 
                                                  'email' => $request->email, 
                                                  'password' => $senha, 'photo' => $foto,
                        ]);
                
                if($update)
                    return redirect()
                        ->route('profileForm')
                        ->with('Êxito','Perfil atualizado.');

            }else{
                $update = auth()->user()->update(['name' => $request->name, 
                                                  'lastname' => $request->lastname, 
                                                  'email' => $request->email, 
                                                  'password' => $senha,
                        ]);
                        if($update)
                            return redirect()
                                ->route('profileForm')
                                ->with('Êxito','Perfil atualizado.');                
            }            
        }
        elseif( $request->file('foto') ){
                $foto = User::setphoto($request->foto);
                $update = auth()->user()->update(['name' => $request->name, 
                                                'lastname' => $request->lastname, 
                                                'email' => $request->email, 
                                                'photo' => $foto,
                        ]);
                        if($update)
                            return redirect()
                                ->route('profileForm')
                                ->with('Êxito','Perfil atualizado.');
                   
        }  

        return redirect()
                        ->route('profileForm')
                        ->with('Erro','Falha ao atualizar o perfil.');
            
    }
    
    public function storeSolicit(Request $request)
    {        
        $idOdine = Auth::user()->odine_id;        

        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->estado_id = 6;
        $user->odine_id = $idOdine;        
        $user->save();

        if($user == null)
        {
             return redirect()
                        ->route('solicitForm') 
                        ->with('Erro','Não foi possível fazer a solicitação do utilizador.');
        }
        else{
            return redirect()
                        ->route('solicitForm') 
                        ->with('Êxito','A solicitação de usuário foi registrada.');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('index');
        }

        return back()->withErrors([
            'Erro' => 'As credenciais usadas não estão registradas.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function emaildRecovery(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }

    public function passwordRecovery(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:8',
        ]);
        
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );
        
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}
