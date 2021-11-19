<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Portfolio;
class portfolioController extends Controller
{
   public function GetAll(){
   	return Portfolio::all();
   }
}
