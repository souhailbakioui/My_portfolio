<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skills;
use App\Models\Resume;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$skils = DB::table('Skills')->get();
$data=	DB::select(
	'SELECT DISTINCT * FROM aboutus_setup,admin_users,basic_setup,contact,personal_setup,portfolio,resume,skills,userinfo')[0];
$Resume=DB::table('Resume')->get();
$portfolio=DB::table('portfolio')->get();
$portfolio=DB::table('portfolio')->get();
//print_r($portfolio);
/*foreach ($Resume as $r) {
	//if($r->category=='e')
echo($r->title."<br>");
}
*/

//print_r($data->emailid);
return view('home',['data'=>$data,'Skills'=>Skills::all(),'Resume'=>$Resume,'portfolio'=>$portfolio]);


});

Route::get('/ff','portfolioController@GetAll');