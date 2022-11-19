<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $portfolio = [
            ['title'=>'proyect #1'],
            ['title'=>'proyect #2'],
            ['title'=>'proyect #3'],
            ['title'=>'proyect #4']
        ];
        
        return view('portfolio',compact('portfolio'));
    }
}
