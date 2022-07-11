<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email:rfc,dns',
            'name' => 'required',
        ]);
        if ($validator->fails()){
            return response()->json(['errors'=>$validator->errors()]);
        }
        if($request->hasFile('file'))
        {
            $file = $request->file;
            $destinationPath = public_path('uploads');
            $file->move($destinationPath,$file->getClientOriginalName());
        // }
        // $data =User::where("email", $request->email)->get();
        // if ($data){
        //      dd("User Already Exist");
        // }
        
        $user = New User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->file=$request->hasFile('file') ? $file->getClientOriginalName() : null;
        $user->description=$request->description;
        $user->save();
        
        return response()->json($user);
    }

    function dldUser($id){

        $data =User::find($id);
        if($data){
            $data->delete();
        }else{
            echo "User Not Exist";
        }
    }
    
}
};