<?php

namespace App\Http\Controllers;

use thiagoalessio\TesseractOCR\TesseractOCR;

class TesseractController extends Controller
{
    public function parse() 
    {
        echo (new TesseractOCR(storage_path('images/text.png')))->lang('chi_tra')->run();
    }
}
