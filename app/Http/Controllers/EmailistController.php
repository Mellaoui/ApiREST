<?php

namespace App\Http\Controllers;

use App\Models\EmailList;

use Illuminate\Http\Request;

class EmailListController extends Controller
{



    public function add(Request $request)
    {
        $email_list = new EmailList;
        if (EmailList::where('email', $email_list->email)->exists()) {
            abort('404');
        } else {
            $email_list->name = $request->name;
            $email_list->email = $request->email;

            $email_list->save();

            return redirect(route('landing'));
        }
    }
}
