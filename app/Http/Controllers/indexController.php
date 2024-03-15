<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Require;

class IndexController extends Controller{
    public function paginaprin(){
        return view ('site.inicial');
    }
}