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
use phpDocumentor\Reflection\PseudoTypes\True_;

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

    // notifications
    $users = $this->teamMembers($name);
    $notif = new newMember($user->name,$team->name);
    foreach ($users as $key => $userNotified){
        $userNotified->notify($notif);
    }
    return redirect("/");
  }
    
}

/**
 * Récuperer les utilisateurs d'une team
 *
 * @param String   $teamName  Nom de la team dont on veux connaitre les membres
 * 
 * @return Array Tableau des utilisateurs de la team
 */ 
public function teamMembers($teamName){
  $value = Team::where('name', $teamName)->get();
  $teamId = $value[0]->id;
  $dataUsers = Team::find($teamId)->users;
  $users= [];
  foreach ($dataUsers as $key => $user) {
    array_push($users,$user);
  }
  return $users;
}

}