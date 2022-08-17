<?php

namespace App\Http\Controllers;

class IndustryController
{
    function page($page=null){
        $view = 'pages.industries.index';
        if($page){
            $view = "pages.industries.$page";
        }
        if(!view()->exists($view)){
            abort(404);
        }
        return view($view);
    }
}
