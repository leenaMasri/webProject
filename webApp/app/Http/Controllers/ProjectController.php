<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class ProjectController extends Controller
{
	public function showProjectPage(){
   return view('projects');
    }
}