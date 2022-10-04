<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserTokenController extends Controller
{
    public function __invoke(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'divice_name' => 'required'
        ]);
        $email = $request->get('email');
        $user = User::where('email',$email)->first();
        if(empty($user)){
            throw new Exception("El email no existe o no coincide con los registros");
        }
        //dd($request->divice_name);
        if(Hash::check($request->password,$user->password)){
            //dd('hola');
            return response()->json([
                'token' => $user->createToken($request->divice_name)->plainTextToken,
            ]);
        }
    }


    public function ___toString(){
        return 'Objeto correcto';
    }
}
