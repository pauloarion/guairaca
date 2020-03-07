<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
      Log::warning('Entrando na página inicial de login.');
      return view('login.index');
    }
    public function entrar(Request $req)
    {
      $dados = $req->all();
      if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
        return redirect()->route('admin.passengers');
      }

      return redirect()->route('site.login');
    }
    public function sair()
    {
      Auth::logout();
      return redirect()->route('site.home');
    }
}
