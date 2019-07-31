<?php

namespace App\Http\Controllers\Articles;

use App\Http\Requests\ArticleFormRequest;
use App\Models\Category;
use DB;
use Illuminate\Contracts\Support\Renderable;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

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
        $articles = $articles->latest('publicatie_datum')->simplePaginate();
        $articleCount = $articles->count();

        return view('articles.backend-overview', compact('articles', 'articleCount'));
    }

    /**
     * Method for displaying the create view of an news article.
     *
     * @param  Category $categories The database model for the categories in the application.
     * @return Renderable
     */
    public function create(Category $categories): Renderable
    {
        return view('articles.create', [
            'statusTypes' => [0 => 'Ik wil dit bericht bewaren als klad versie.', 1 => 'Ik wil dit bericht publiceren.'],
            'categories'  => $categories->pluck('naam', 'id'),
        ]);
    }

    /**
     * Method for storing the news article in the application.
     *
     * @throws \Throwable <- Native PHP class
     *
     * @param ArticleFormRequest $input     The form request class that handles the validation and holds request data.
     * @param Article            $article   Database model class for the news articles.
     * @return RedirectResponse
     */
    public function store(ArticleFormRequest $input, Article $article): RedirectResponse
    {
        $input->merge(['category_id' => $input->category_id]);

        DB::transaction(static function () use ($input, $article): void {
            $article = $article->create($input->all())->setCreator($input->user());
            $input->user()->logActivity($article, 'Nieuwsberichten', "Heeft een nieuwsbericht toegevoegd met de titel {$article->titel}");
        });

        return redirect()->route('admin.news.overview');
    }
}
