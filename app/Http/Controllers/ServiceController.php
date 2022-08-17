<?php

namespace App\Http\Controllers;

class ServiceController
{
    function page($page=null){
        $view = 'pages.services.index';
        if($page){
            $view = "pages.services.$page";
        }
        if(!view()->exists($view)){
            abort(404);
        }
        return view($view);
    }
}
