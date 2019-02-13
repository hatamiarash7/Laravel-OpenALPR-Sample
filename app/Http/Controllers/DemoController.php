<?php

namespace App\Http\Controllers;

use Hatamiarash7\OpenALPR\Facades\OpenALPR;

class DemoController extends Controller
{
    public function demo()
    {
        $data = OpenALPR::recognize("https://valegion.org/wp-content/uploads/2015/09/FUSION-LICENSE-PLATE-PIC.jpg");

        return view('demo', compact('data'));
    }
}
