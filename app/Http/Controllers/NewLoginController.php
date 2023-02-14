<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Helpers\Auth\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Http\Response;
use App\Exceptions\GeneralException;
use App\Http\Controllers\Controller;
use App\Helpers\Frontend\Auth\Socialite;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Events\Frontend\Auth\UserLoggedIn;
use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use App\Events\Frontend\Auth\UserLoggedOut;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Repositories\Frontend\Auth\UserSessionRepository;

class NewLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.auth.loginbaru'
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
            'g-recaptcha-response' => (config('access.captcha.registration') ? ['required',new CaptchaRule] : ''),
        ],[
            'g-recaptcha-response.required' => __('validation.attributes.frontend.captcha'),
        ]);

        if($validator->passes()){
            $credentials = $request->only($this->username(), 'password');
            $authSuccess = \Illuminate\Support\Facades\Auth::attempt($credentials, $request->has('remember'));
            if($authSuccess) {
                $request->session()->regenerate();
                if(auth()->user()->active > 0){
                    if(auth()->user()->isAdmin()){
                        $redirect = 'dashboard';
                    }else{
                        $redirect = 'back';
                    }
                    auth()->user()->update([
                        'last_login_at' => Carbon::now()->toDateTimeString(),
                        'last_login_ip' => $request->getClientIp()
                    ]);
                    if($request->ajax()){
                        return response(['success' => true,'redirect' => $redirect], Response::HTTP_OK);
                    }else{
                        return redirect('/user/dashboard');
                    }
                }else{
                    \Illuminate\Support\Facades\Auth::logout();

                     
                    return Redirect::back()->withErrors(
                        [
                            'success' => false,
                            'salah' => 'Your email or password is incorrect'
                        ]
                    );
                        // Redirect()->back()->with(['msg' => 'The Message'],Response::HTTP_FORBIDDEN);

                        // back()->with(['success', false],Response::HTTP_FORBIDDEN);

                        // response([
                        //     'success' => false,
                        //     'message' => 'Login failed. Account is not active'
                        // ], Response::HTTP_FORBIDDEN);
                }
            }else{
                return 
                 Redirect::back()->withErrors(
                    [
                            'success' => false,
                            'salah' => 'Your email or password is incorrect'
                        ]
                );
                
                    // back()->with(['success', false],Response::HTTP_FORBIDDEN);

                    // response([
                    //     'success' => false,
                    //     'message' => 'Login failed. Account not found'
                    // ], Response::HTTP_FORBIDDEN);
            }

        }


        return  
            Redirect::back()->withErrors(
            [
                    'success' => false,
                    'salah' => 'Your email or password is incorrect'
                ]
        );

        // response(['success'=>false,'errors' => $validator->errors()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
