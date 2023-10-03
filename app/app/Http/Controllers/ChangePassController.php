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
 
class ChangePassController extends Controller
{

 
public function store(Request $request, int $idpass): RedirectResponse
{
    $validated = Validator::make($request->all(), [
        'password' => 'required|string',
    ]);
 
    // The blog post is valid...
 
    if($validated->fails()) {
      return redirect("/changepasswd")->withErrors($validated);
  }

  if ($validated) {

    // on récupere l'id du user connecté 
    $passwd = Crypt::encryptString($validated->validated()['password']);

    Password::where('id', $idpass)->update(['password'=>$passwd]);
    return redirect("/");
  }
    
}

public function getID($idpass){
    return view('changepasswd', ['idpass'=>$idpass]);
}
}