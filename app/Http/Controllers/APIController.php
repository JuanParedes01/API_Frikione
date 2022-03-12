<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API;
class APIController extends Controller
{
    public function raiz(){
        
        return redirect()->route('inicio');
    }

    public function inicio()
    {
        $Anime= API::All();
        return view('index',['Anime'=>$Anime]);
        
    }

    public function consultaranime(){
        $Anime = Anime ::all();

        return response()->json(["Estatus" => "Animes_listos","Anime " => $Anime ]);
    }
    
    
    public function getFriki()
    {
        
     $Anime= API::All($id);
        
    }
}
