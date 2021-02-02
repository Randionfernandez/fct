<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verpeticion(Request $request)
    {
        return var_dump($request);
    }
}