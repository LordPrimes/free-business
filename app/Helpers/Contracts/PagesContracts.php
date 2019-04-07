<?php


namespace App\Helpers\Contracts;
use Illuminate\Http\Request;

interface PagesContracts {

    public function show();

    public function addcomments(Request $request);
}