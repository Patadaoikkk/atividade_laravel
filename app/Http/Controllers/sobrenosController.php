<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Require;

class sobrenosController extends Controller{
    public function sobrenos(){
        return view ('site.sobrenos');
    }
}