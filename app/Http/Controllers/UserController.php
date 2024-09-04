<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function show($id, $nama){
        return view('user.profil')
        ->with('id', $id)
        ->with('nama', $nama);
    }
}
?>