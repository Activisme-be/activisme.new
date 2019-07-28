<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

/**
 * Class PolicyController
 *
 * @package App\Http\Controllers
 */
class PolicyController extends Controller
{
    /**
     * Methode om de privacy verklaring weer te geven.
     *
     * @return Renderable
     */
    public function privacy(): Renderable
    {
        return view('policies.privacy', ['title' => 'Privacy verklaring']);
    }

    /**
     * Methode om de gebruikers voorwaarden van de website weer te geven.
     *
     * @return Renderable
     */
    public function termsOfService(): Renderable
    {
        return view('policies.terms-of-service', ['title' => 'Gebruikersvoorwaarden']);
    }
}
