<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Notifications\newMember;
 
class TeamController extends Controller
{


public function store(Request $request): RedirectResponse
{
    $validated = Validator::make($request->all(), [
        'name' => 'required|string|unique:teams',
    ]);
 
    if($validated->fails()) {
      return redirect("/team")->withErrors($validated);
  }

  if ($validated) {

    // on récupere l'id du user connecté 
    $id = Auth::id();
    $name = $validated->validated()['name'];

    $team = Team::create(['name'=>$name]);
    $user = User::find($id);
    $user->teams()->syncWithoutDetaching([$team->id]);
    return redirect("/");
  }
    
}

public function joinTeam(Request $request): RedirectResponse
{
    $validated = Validator::make($request->all(), [
        'name' => 'required|string',
    ]);
 
    if($validated->fails()) {
      return redirect("/team")->withErrors($validated);
  }

  if ($validated) {

    // on récupere l'id du user connecté 
    $id = Auth::id();
    $name = $validated->validated()['name'];
    $team = Team::where('name',$name)->first();
    $user = User::find($id);
    $user->teams()->syncWithoutDetaching([$team->id]);
    $notif = new newMember($user->name,$team->name);
    $user->notify($notif);
    return redirect("/");
  }
    
}
}