<?php

namespace App\Http\Controllers\Jobeur\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Access\AuthorizationException;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | jobeur that recently registered with the application. Emails may also
    | be re-sent if the jobeur didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect jobeurs after verification.
     *
     * @var string
     */
    protected $redirectTo = '/jobeur';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jobeur.auth');
        $this->middleware('signed')->only('jobeur.verify');
        $this->middleware('throttle:6,1')->only('jobeur.verify', 'resend');
    }

    /**
     * Show the email verification notice.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return $request->user('jobeur')->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view('jobeur.auth.verify');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        if (! hash_equals((string) $request->route('id'), (string) $request->user('jobeur')->getKey())) {
            throw new AuthorizationException;
        }

        if (! hash_equals((string) $request->route('hash'), sha1($request->user('jobeur')->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        if ($request->user('jobeur')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        if ($request->user('jobeur')->markEmailAsVerified()) {
            event(new Verified($request->user('jobeur')));
        }

        return redirect($this->redirectPath())->with('verified', true);
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        if ($request->user('jobeur')->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        $request->user('jobeur')->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }
}
