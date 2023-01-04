<?php

namespace App\Http\Controllers\API\Frontend;

use Auth;
use App\Models\User;
use App\Events\SignupEvent;
use App\Models\UserService;
use App\Uploads\FileUpload;
use Illuminate\Http\Request;
use App\Events\CertificateEvent;
use App\Events\SendMailSMSEvent;
use App\CrudMachanism\MassiveData;
use App\Http\Controllers\Controller;
use App\CrudMachanism\BookingMachanism;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegistrationRequest;

class AuthController extends Controller
{
    public function signUp(RegistrationRequest $request)
    {
        
        // return $request->all();
        
        $validated = $request->validated();    


        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user =  User::create($data);        
        $user_type = $data['user_type'] == 2? "Student":"Partner Agent";        
        $sms = " Hi, {$user->name}, Congratulations! {$user_type} account has been created! Login Credentials email: {$user->email} password: {$request->password}";        
        $user['sms'] = $sms;
        $user['message'] = " You {$user_type} account has been created!";
        $user['password'] = $request->password;
            
        $userData = User::find($user->id);

        event(new CertificateEvent($userData));

        $token = $userData->createToken('vehicle-inventory')->plainTextToken;

        $response = [
            'user'              => $userData,
            'token'             => $token,
            'status'            => true,
            'message'           => 'Registration Success!'
        ];


        return response($response, 201);

    }


    public function login(Request $request)
    {
        
        // return $request->all();
        $user = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);


        $credential = Auth::attempt($request->only('email', 'password'));

       if($credential){

        $user = Auth::user();
        $token = $user->createToken('vehicle-inventory')->plainTextToken;

        $response = [
            'user'              => $user,
            'token'             => $token,
            'status'            => true,
            'message'           => 'Sign In successful!'
        ];

        User::find(Auth::user()->id)->update(['is_online' => 1]);

        return response($response, 201);

       } else {

        return response()->json([
                'message' => 'These credentials do not match our records',
                'status'  => false
        ]);

       }
    
        
    } 

    public function signOut()
    {
        User::find(Auth::user()->id)->update(['is_online' => 0]);
        Auth::logout();
        
        return response()->json([
            'status' => 200,
            'message' => 'Sign Out Successfully!'
        ]);
    }
}
