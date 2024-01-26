<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    public function checkIfUserExists($email): bool{
        $response = User::where([['email', $email]])->first();
        return !!$response;
    }

    public function registerUser(Request $request){
        try{
            $customMessages = [
                'email.required' => 'O campo de email é obrigatório',
                'email.email' => 'Email inválido',
                'name.required' => 'O campo de nome é obrigatório',
                'name.min' => 'O nome deve ter pelo menos 3 caracteres',
                'password.required' => 'O campo de senha é obrigatório',
                'password.min' => 'A senha deve ter pelo menos :min caracteres',
                'password.max' => 'A senha deve ter no máximo :max caracteres',
            ];
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6|max:20',
                'name' => 'required|min:3'
            ], $customMessages);
            $userExists = $this->checkIfUserExists($request->email);
            if($userExists){
                return redirect()->back()->with('error', 'Usuário já existe');
            }
            $user = new User;
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('/login')->with('success', 'Conta registrada');
        }
        catch(QueryException $e){
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }

    public function loginUser(Request $request){
        try{
            $customMessages = [
                'email.required' => 'O campo de email é obrigatório',
                'email.email' => 'Email inválido',
                'password.required' => 'O campo de senha é obrigatório',
            ];
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ], $customMessages);

            $email = $request->email;
            $password = $request->password;

            $response = User::where([['email', $email]])->first();
            if(!$response){
                return redirect()->back()->with('error', 'Usuário não encontrado');
            }
            if(Hash::check($password, $response->password)){
                session()->put('userName', $response->name);
                session()->put('userEmail', $response->email);
                session()->put('userId', $response->id);
                session()->put('userIsAdmin', $response->is_admin);
                return redirect()->route('home')->with('success', 'Usuário Logado');
            }
            else{
                return redirect()->back()->with('error', 'Senha incorreta');
            }
        }

            catch(QueryException $e){
                return redirect()->back()->with('error', 'Algo deu errado');
            }
        }

        public function logoutUser(){
            session()->forget('userName');
            session()->forget('userId');
            session()->forget('userEmail');
            return redirect()->back()->with('success', 'Conta desconectada');
        }
        public static function isLogged(): bool{
            if(session('userName') && session('userId') && session('userEmail')){
                return true;
            }
            return false;
        }
        public static function isAdmin(): bool{
            if(session('userName') && session('userId') && session('userEmail') && session('userIsAdmin') == '1'){
                return true;
            }
            return false;
        }
    }
