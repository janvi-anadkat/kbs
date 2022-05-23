<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;


class MarketAPIController extends Controller
{
    /**
    * Login Form Submititon
	*
	* @author chandani
	* @param $request array
	* @return json
    */
	public function marketgetdata(Request $request)
	{
		// print_r($request->all());exit;
		$client = new \GuzzleHttp\Client();
$res = $client->request('get', 'https://www.jewells.thetechminers.com/public/api/markets/show/65',['form_params' => [
    'name' => $request->name,
    'description'=>$request->description,
    'address'=>$request->address,
    'api_token'=>NULL,
    'plus_code'=>$request->plus_code,
    'latitude'=>$request->latitude,
    'longitude'=>$request->longitude,
    'map_zoom'=>$request->map_zoom,
    'phone'=>"+91".$request->phone,
    'mobile'=>"+91".$request->mobile,
    'information'=>$request->information,
    'delivery_fee'=>$request->delivery_feex,
            ]
        ]);
// print_r($res->getBody());exit;

echo $request->name;
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

	public function marketSubmit(Request $request)
	{
        echo "<pre>";
        echo($request->name);
        echo($request->description);
        echo($request->address);
        echo($request->plus_code);

        $client = new \GuzzleHttp\Client();
     $res = $client->request('post', 'https://www.jewells.thetechminers.com/public/api/markets/store',['form_params' => [
                'name' => $request->name,
                'description'=>$request->description,
                'address'=>$request->address,
                'api_token'=>NULL,
                'plus_code'=>$request->plus_code,
                'latitude'=>$request->latitude,
                'longitude'=>$request->longitude,
                'map_zoom'=>$request->map_zoom,
                'phone'=>"+91".$request->phone,
                'mobile'=>"+91".$request->mobile,
                'information'=>$request->information,
                'delivery_fee'=>$request->delivery_feex,
            ]
        ]);

echo "<pre>";
 print_r($res->getBody());

echo $res->getStatusCode();
// exit;
// "200"
//echo $res->getHeader('content-type')[0];
// 'application/json; charset=utf8'
//echo $res->getBody();exit;
// {"type":"User"...'

// Send an asynchronous request.
	}
}
