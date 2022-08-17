<?php

namespace App\Http\Controllers;

class PageController
{
    function page($page=null){
        $view = 'pages.index';
        if($page){
            $view = "pages.$page";
        }
        if(!view()->exists($view)){
            abort(404);
        }
        return view($view);
    }
}
