<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhatWeDo;

class WhatWeDoController extends Controller
{
    public function index($id = null)
    {
        if($id == null){
            $whatWedos = WhatWeDo::all();
        }else{
            $whatWedo = WhatWeDo::find($id);
            return $this->respondWithSuccess("Data",$whatWedo);
        }
        return view('what_we_do.index', compact('whatWedos'));
    }
}
