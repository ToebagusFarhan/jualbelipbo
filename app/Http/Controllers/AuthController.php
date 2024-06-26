<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $credentials = request(['email', 'password']);


        if (auth()->attempt($credentials)) {
           $token = Auth::guard('api')->attempt($credentials);
           return response()->json([
            'success' => true,
            'message' => 'Login Successfully',
            'token' => $token
        ]);
        }
        
        return response()->json([
            'success' => false,
            'message' => 'Wrong email or password'
        ]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_member' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'detail_alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'password' => 'required|same:konfirmasi_password',
            'konfirmasi_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $request->all();
        $input["password"] = bcrypt($request->password);
        unset($input['konfirmasi_password']);
        $Member = Member::create($input);

        return response()->json([
            'data' => $Member
        ]);
    }

    public function login_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $credentials = request->only('email', 'password');

        $member = Member::where('email', $request->email)->first();

        if ($member) {
            if (Hash::check($request->password, $member->password)) {
                $request->session()->regenerate();
                return response()->json([
                    'message' => "Login Succesfully",
                    'data' => $member
                ]);           

            } else {
                return response()->json([
                    'message' => 'Kamu Siapa?',
                    'data' => 'Wrong email or password'
                ]); 
            }
        } else {
            return response()->json([
                'message' => 'Kamu Siapa?',
                'data' => 'Wrong email or password'
            ]);
        }
    }

    public function logout()
    {
        Session::flush();

        redirect('/login');
    }
    
    public function logout_member()
    {
        Session::flush();

        redirect('/login-member');
    }

}