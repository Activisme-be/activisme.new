<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers\Articles
 */
class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', '2fa', 'forbid-banned-user', 'portal:application'])->only(['index']);
    }

    /**
     * Method for displaying the news article categories overview page.
     *
     * @param  Category $categories The database model class for the news categories
     * @return Renderable
     */
    public function index(Category $categories): Renderable
    {
        $baseQuery = $categories->newQuery()->whereSection('news');
        return view('articles.categories.backend-overview', ['categoryCount' => $baseQuery->count(), 'categories' => $baseQuery->simplePaginate()]);
    }

    /**
     * Method for displaying the news category create page.
     *
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('articles.categories.create');
    }

    public function store(CategoryFormRequest $request, Category $category): RedirectResponse
    {

    }
}
