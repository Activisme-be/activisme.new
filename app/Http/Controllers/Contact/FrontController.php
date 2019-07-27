<?php

namespace App\Http\Controllers\Contact;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormNotification;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

/**
 * Class FrontController
 *
 * @package App\Http\Controllers\Contact
 */
class FrontController extends Controller
{
    /**
     * Methode om de contact pagina weer te geven.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('contact.form', ['title' => 'Contact']);
    }

    /**
     * Methode om het formulier op te slaan in de applicatie en notificatie mail te verzenden.
     *
     * @param ContactFormRequest $formRequest   De formulier validatie instantie.
     * @return RedirectResponse
     */
    public function store(ContactFormRequest $formRequest): RedirectResponse
    {
        Mail::send(new ContactFormNotification($formRequest));
        flash('Bedankt voor je bericht! We nemen spoedig contact met je op alsdat nodig is.');

        return redirect()->route('guest.contact');
    }
}
