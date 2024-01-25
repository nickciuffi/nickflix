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
    public function registerUser(Request $request){
        try{
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
            $email = $request->email;
            $password = $request->password;
            if(!$email || !$password){
                return redirect()->back()->with('error', 'Você precisa enviar o email e a senha para efetuar o login');
            }
            $response = User::where([['email', $email]])->();
            if(!$response){
                return redirect()->back()->with('error', 'Usuário não encontrado');
            }
            if(Hash::check($password, $response->password)){
                return redirect()->back()->with('success', 'Usuário Logado');
            }
            else{
                return redirect()->back()->with('error', 'Senha incorreta');
            }
        }

            catch(QueryException $e){
                return redirect()->back()->with('error', 'Algo deu errado');
            }
    }
}
