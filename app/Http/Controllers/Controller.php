<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function pagina1()
    {
        return redirect('https://exemplo.com/pagina1');
    }

    public function pagina2()
    {
        return redirect('https://exemplo.com/pagina2');
    }

    public function pagina3()
    {
        return redirect('https://exemplo.com/pagina3');
    }

    public function pagina4()
    {
        return redirect('https://exemplo.com/pagina4');
    }
}
