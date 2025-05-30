<?php

namespace App\Http\Controllers;
use App\Http\Requests\nsRequest;
use App\Http\Requests\nRequest;
use App\Models\ns;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class nsController extends Controller
{
    public function register(nsRequest $request){
        $request->validated($request->all());
    $ns=ns::create(
        [
            'reg_no'=>$request->reg_no,
             'name'=>$request->name,
             'department'=>$request->department,
             'bloodgroup'=>$request->bloodgroup,
             'DOB'=>$request->DOB,
             'user_name'=>$request->user_name,
             'password'=>$request->password
        ]
        );
    return response()->json([
        'status'=>200,
        'message'=>'registered successfully',
        'token'=>$ns->createToken('API Token',[$ns->name])->plainTextToken,
    ]);
}
    public function login(nRequest $request){
        $validated=$request->validated();
       
            $ns=ns::where('user_name',$request->user_name)
            ->where('password',$request->password)
            ->first();
            if(!$ns){
                return response()->json([
                    'status'=>401,
                    'message'=>'invalid',
                ],401);
            }
         return response()->json([
          'status'=>200,
          'message'=>'login successful',
          'token'=>$ns->createToken('API token')->plainTextToken,
         ]);

                    }  
  public function logout(Request $request)
{
    $user = $request->user();

    if (!$user || !$user->currentAccessToken()) {
        return response()->json([
            'status' => 401,
            'message' => 'Unauthenticated or token not found',
        ], 401);
    }

    $user->currentAccessToken()->delete();

    return response()->json([
        'status' => 200,
        'message' => 'Logged out successfully',
    ]);
}

    }




                     
    


