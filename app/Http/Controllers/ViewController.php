<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Contracts\PagesContracts;

class ViewController extends Controller implements PagesContracts
{
    public function show()
    {
        return 'ggg';
    }
}
