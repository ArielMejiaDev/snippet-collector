<?php

namespace App\Http\Controllers\Landing\Newsletter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'newsletter' => ['required', 'email', 'min:2']
        ]);

        try {
            Newsletter::subscribe($request->get('newsletter'));
        } catch (\Exception $exception) {
            return redirect()->back()->with(['success' => trans('landing.newsletter_fail')]);
        }

        return redirect()->back()->with(['success' => trans('landing.newsletter_success')]);
    }
}
