<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;

class TodosController extends Controller
{
   public function index(){
   	return todos::all();

   }
}
