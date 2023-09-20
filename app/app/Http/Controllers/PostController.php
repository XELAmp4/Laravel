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

 
class PostController extends Controller
{

 
    /**
 * Store a new blog post.
 */
public function store(Request $request): RedirectResponse
{
    $validated = Validator::make($request->all(), [
        'url' => 'required|string|url',
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);
 
    // The blog post is valid...
 
    if($validated->fails()) {
      return redirect("/passwd")->withErrors($validated);
  }

  if ($validated) {

    // on récupere l'id du user connecté 
    $id = Auth::id();
    $url = $validated->validated()['url'];
    $mail = $validated->validated()['email'];
    $passwd = $validated->validated()['password'];

    Password::create(['site'=>$url,'login'=>$mail,'password'=>$passwd,'user_id'=>$id]);
    // $file = json_encode($validated->validated());
    // Storage::put(time().'.json', $file); 

    return redirect("/");
  }
    
}
}