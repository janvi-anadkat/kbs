<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class FrontendController extends Controller
{
    /**
    * Login Form Submititon
	*
	* @author chandani
	* @param $request array
	* @return json
    */
	public function loginSubmit(Request $request)
	{
		// print_r($request->all());exit;
		$client = new \GuzzleHttp\Client();
$res = $client->request('post', 'https://www.jewells.thetechminers.com/public/api/login',['form_params' => [
				'id'=>NULL,
                'appRole' => 'manager',
                'email'=>$request->email,
                'name'=>NULL,
                'password'=>$request->password,
                'api_token'=>NULL,
                'device_token'=>NULL,
                'phone'=>NULL,
                'verifiedPhone'=>true,
                'address'=>NULL,
                'bio'=>NULL,
                'media'=>NULL,
            ]
        ]);
// print_r($res->getBody());exit;
echo $res->getStatusCode();
// if($res->getStatusCode() == 200){
// 	$body = json_encode($res->getBody());
// 	print_r($res->getBody());exit;
// }
//"200"
echo " working";

//echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
$data = json_decode($res->getBody(),true);
// print_r($data);exit();
if ($data['success'] == true) {
    // Redirect::route('welcome')->with('success',	$data['message'])
	// return back('home')->with('success',	$data['message']);
}
// print_r( json_decode($res->getBody(),true));exit;
	}

	public function registerSubmit(Request $request)
	{
		// $this->validate($request, [
		//     'name' => 'required|min:3|max:50',
		//     'email' => 'email',
		//     'password' => 'min:6|required_with:confirm_password|same:confirm_password',
		// 	'confirm_password' => 'min:6'
		// ]);

		$client = new \GuzzleHttp\Client();
$res = $client->request('post', 'https://www.jewells.thetechminers.com/public/api/register',['form_params' => [
                'appRole' => $request->user_role,
                'email'=>$request->email,
                'name'=>$request->username,
                'password'=>$request->password,
                'api_token'=>NULL,
                'device_token'=>NULL,
                'phone'=>"+91".$request->phone,
                'verifiedPhone'=>true,
                'address'=>NULL,
                'bio'=>NULL,
                'media'=>NULL,
            ]
        ]);
// print_r($res->getBody());exit;

echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
echo $res->getBody();exit;
// {"type":"User"...'

// Send an asynchronous request.
	}



}
