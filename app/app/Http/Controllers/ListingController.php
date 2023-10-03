<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Password;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;





class ListingController extends Controller
{
    public function listing(): View
    {
        $id = Auth::id();
        $value = Password::where('user_id', $id)->get();
        
        foreach ($value as $key => $val) {
            $value[$key]->password = Crypt::decryptString($val->password);
        }
        return view('listing', ['passwords'=>$value]);
    }
}
