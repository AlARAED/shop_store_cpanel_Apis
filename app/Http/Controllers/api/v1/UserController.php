<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function login(Request $request){
        if (!isset($request->email)) return apiError('shop.emailrequired');
        if (!isset($request->password)) return apiError('shop.passwordrequired');


        if (\Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = \Auth::user();
//            $lastpath= url('/uploads', $user->image);

            $success['items'] = $user;
            $success['items']['token'] = $user->createToken('MyApp')->accessToken;
//            $success['items']['image'] = $lastpath;

            return apiSuccess($success);


        } else {
            return apiError('shop.usernotfound');
        }

    }

    public function test(){

        return 'alaa';

    }

    public function GetStore($id){

        $User =User::Where('id',$id)->Where('id',$id)->with('subcategories','products')->first();
        if($User->is_block==0) {
            $message = '';

            $status = true;
            $response = ['status' => $status, 'items' => $User, 'message' => $message];
        }
        else{
            $message = __('shop.Storenotavailbale');

            $status = true;
            $response = ['status' => $status, 'items' => '', 'message' => $message];
        }
        return response()->json($response);

    }




    public function GetStorediscounts(){

        $User =User::where('discount_value','<>','null')->where('is_block',0)->orderBy('discount_value', 'desc')
            ->get();

        $success['items'] = $User;
//            $success['items']['image'] = $lastpath;

        return apiSuccess($success);


    }

    public function laststorediscounts(){

        $User =User::where('discount_value','<>','null')->where('is_block',0)->orderBy('discount_value', 'desc')
            ->limit(5)
            ->get();

        $success['items'] = $User;
//            $success['items']['image'] = $lastpath;

        return apiSuccess($success);


    }

}
