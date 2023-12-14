<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Password;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use function PHPUnit\Framework\isNull;

class ChangePassController extends Controller
{

 
public function store(Request $request, int $idpass): RedirectResponse
{
    $validated = Validator::make($request->all(), [
        'password' => 'nullable|string',
    ]);
 
    // The blog post is valid...
 
    if($validated->fails()) {
      dd('zut ca fait chier');
      return redirect("/changepasswd")->withErrors($validated);
  }

  if ($validated) {

    // on récupere l'id du user connecté 
    if ($validated->validated()['password'] != null) {
      $passwd = Crypt::encryptString($validated->validated()['password']);
      Password::where('id', $idpass)->update(['password'=>$passwd]);
    }
    
    return redirect("/");
  }
    
}

public function getID($idpass){
    $teams = Auth::user()->teams;
    return view('changepasswd', ['idpass'=>$idpass,'teams'=>$teams]);
}
}