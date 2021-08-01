<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\link;

class FrontendController extends Controller
{
      public function home()
    {
       $master_data = link::where('id','1')->Get();
       $firefly = link::where('id','2')->Get();
       $onedrive = link::where('id','3')->Get();
       $wordpress = link::where('id','4')->Get();
    
      return view ('index', compact('master_data','firefly','onedrive','wordpress'));
    }
}
