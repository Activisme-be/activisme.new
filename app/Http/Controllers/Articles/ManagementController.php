<?php

namespace App\Http\Controllers\Articles;

use Illuminate\Contracts\Support\Renderable;
use App\Models\Article;
use App\Http\Controllers\Controller;

/**
 * Class ManagementController
 *
 * @package App\Http\Controllers\Articles
 */
class ManagementController extends Controller
{
    /**
     * ManagementController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', '2fa', 'forbid-banned-user', 'portal:application'])->only(['index']);
    }

    /**
     * Method to display the backend overview for the articles.
     *
     * @param  Article $articles The database model class for the news articles.
     * @return Renderable
     */
    public function index(Article $articles): Renderable
    {
        $articles = $articles->latest()->simplePaginate();
        $articleCount = $articles->count();

        return view('articles.backend-overview', compact('articles', 'articleCount'));
    }

    /**
     * Method for displaying the create view of an news article.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('articles.create', [
            'statusTypes' => [0 => 'Ik wil dit bericht bewaren als klad versie.', 1 => 'Ik wil dit bericht publiceren.'],
            'categories'  => [], // TODO: Build up article categorie scaffolding.
        ]);
    }
}
