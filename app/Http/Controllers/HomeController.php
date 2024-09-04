<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\http\Request;

class HomeController extends Controller{
    public function home(){
        return view('user.home')
        ->with('toko', 'Dicky');
    }
}
?>