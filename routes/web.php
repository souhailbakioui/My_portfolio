<?php

use App\Models\AboutusSetup;
use Illuminate\Support\Facades\Route;
use App\Models\PersonalSetup;
use App\Models\Resume;
use App\Models\Skill;
use App\Models\BasicSetup;
use App\Models\Userinfo;
use App\Models\AdminUsers;
use App\Models\Portfolio;




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
Route::resource('Contact','ContactController')->only(['store']);
Route::get('/', function () {
//dd(Skill::all(),AboutusSetup::first(),PersonalSetup::first(),Resume::all(),Userinfo::all(),AdminUsers::first());
// 	$skils = DB::table('Skills')->get();
// $data=	DB::select(
// 	'SELECT DISTINCT * FROM aboutus_setup,admin_users,basic_setup,contact,personal_setup,portfolio,resume,skills,userinfo')[0];
// $Resume=DB::table('Resume')->get();
// $portfolio=DB::table('portfolio')->get();
// $portfolio=DB::table('portfolio')->get();

return view('home',['BasicSetup'=>BasicSetup::first(),
                    'PersonalSetup'=>PersonalSetup::first()
                    ,'AboutusSetup'=>AboutusSetup::first(),
                    'Skills'=>Skill::all(),
                    'Resume'=>Resume::all(),
                    'portfolio'=>Portfolio::all()]);


})->name('index');

route::get('/test',function(){
    return PersonalSetup::all()->toArray();
});
