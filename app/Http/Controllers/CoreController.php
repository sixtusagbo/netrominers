<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CoreController extends Controller
{
    /**
     * Display the base home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'plans' => Plan::all(),
        ];

        return view('core.welcome', $data);
    }

    /**
     * Display the about page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('core.about');
    }

    /**
     * Display the why_us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function why_us()
    {
        return view('core.why_us');
    }

    /**
     * Display the forex_trading page.
     *
     * @return \Illuminate\Http\Response
     */
    public function forex_trading()
    {
        return view('core.forex_trading');
    }

    /**
     * Display the commitments page.
     *
     * @return \Illuminate\Http\Response
     */
    public function commitments()
    {
        return view('core.commitments');
    }

    /**
     * Display the stratagies page.
     *
     * @return \Illuminate\Http\Response
     */
    public function stratagies()
    {
        return view('core.stratagies');
    }

    /**
     * Display the affiliate page.
     *
     * @return \Illuminate\Http\Response
     */
    public function affiliate()
    {
        return view('core.affiliate');
    }

    /**
     * Display the faq page.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('core.faq');
    }

    /**
     * Display the contact page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('core.contact');
    }

    /**
     * Send contact message.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function send_contact(Request $request)
    {
        $values = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Notification::route('mail', config('myglobals.admin.email', 'mail.mirolic@gmail.com'))->notify($values);

        return response('Okay, Message sent');
    }

    /**
     * Display the security page.
     *
     * @return \Illuminate\Http\Response
     */
    public function security()
    {
        return view('core.security');
    }

    /**
     * Display the terms page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('core.terms');
    }
}
