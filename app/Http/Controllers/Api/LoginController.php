<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $secret = env('VITE_SECRET_KEY');
        $reglas = [
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];

        $mensajes  = [
            'required' => '* Campo obligatorio',
            'string' => 'Ingrese caracteres alfanuméricos'
        ];


        $this->validate($request,$reglas,$mensajes);

        $credenciales = ['name' => $request->name, 'password' => $request->password];

        $user = User::where('name',$request->name)->first();

        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                if(auth()->attempt($credenciales))
                {
                    $user->last_login = Carbon::now();
                    $user->save();

                    $success['token'] = $user->createToken('token-api')->plainTextToken;
                    $success['user'] = $user->id;

                    return response()->json($success,200);
                }
            }
            $errors = array( 'password' => 'Contraseña Incorrecta');
            return response()->json($errors,422);
        }

        $errors = array( 'name' => 'Usuario no registrado');
        return response()->json($errors,422);
    }

    public function logout(Request $request)
    {
        $user = DB::table('personal_access_tokens')
                ->where('tokenable_id',$request->id)
                ->delete();
        // Auth::user()->tokens->each(function($token,$key){
        //     $token->delete()  ;
        // });

        return response()->json([
            'ok' => 1,
            'mensaje' =>'Sessión cerrada Satisfactoriamiente'
        ], 200);
    }
}
