<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Resume;

class SkillsController extends Controller
{
   public function GetAll(){
  print_r( Resume::all());
   }
}
