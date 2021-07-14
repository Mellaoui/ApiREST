<?php

namespace App\Http\Controllers;

use App\Models\Emailist;

use Illuminate\Http\Request;

class EmailistController extends Controller
{



    public function add(Request $request)
    {
        $emailist = new Emailist;
        if(Emailist::where('email', $emailist->email)->exists()){
            abort('404');
        }else{
            $emailist->name = $request->name;
            $emailist->email = $request->email;

            $emailist->save();

            return redirect(route('main-page'));
        }

    }
}
