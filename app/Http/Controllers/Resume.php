<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resume;
class Resume extends Controller
{
 public function GetAll(){
  return Resume::all();
   }
}
