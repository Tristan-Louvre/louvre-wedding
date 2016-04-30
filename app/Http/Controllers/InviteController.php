<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\InviteRequest;

class InviteController extends Controller
{
    /**
     * Email the invite request
     *
     * @param InviteRequest $request
     * @return mixed
     */
    public function sendInviteEmail(InviteRequest $request)
    {
        $data = $request->only('fullName', 'attendance', 'comment');

        Mail::send('emails.invite', $data, function ($message) use ($data) {
            $message->to('margueritebredell@gmail.com')
                    ->cc('byron.victor.jones@gmail.com')
                    ->subject('Wedding Invite Information');
        });

        return back();
//            ->withSuccess("Thank you for your message. It has been sent.");
    }
}
