<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  function serviceDetail($slug) {
 


    
if ($slug == 'calibration') {
    return view('frontend.calibration');
  } 
  elseif ($slug == 'temperature-mapping-thermal-validation') {
    return view('frontend.temperature-mapping-thermal-validation');
}
  elseif ($slug == 'hvac-lafs-clean-room-validation') {
    return view('frontend.hvac-lafs-clean-room-validation');
}
  elseif ($slug == 'computer-system-validation') {
    return view('frontend.computer-system-validation');
}
  elseif ($slug == 'compressed-air-nitrogen-air-validation') {
    return view('frontend.compressed-air-nitrogen-air-validation');
}
  elseif ($slug == 'steam-quality-test') {
    return view('frontend.steam-quality-test');
  }
  else{
  return view('frontend.404');

    

}


        return view('frontend.service-details');

  }
}
