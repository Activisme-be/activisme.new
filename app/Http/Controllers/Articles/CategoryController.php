<?php

namespace App\Http\Controllers\Articles;

use App\Models\Category;
use App\Http\Requests\CategoryFromRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        $this->middleware(['auth', '2fa', 'forbid-banned-user', 'portal:application']);
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

    /**
     * Method for storing an ew news article in the application.
     *
     * @throws \Throwable <- Native PHP class
     *
     * @param CategoryFromRequest   $request    The instance that handles the validation and request data
     * @param Category              $category   The category model class from the application.
     * @return RedirectResponse
     */
    public function store(CategoryFromRequest $request, Category $category): RedirectResponse
    {
        DB::transaction(static function () use ($request, $category): void {
            $request->merge(['section' => 'news']);
            $category->create($request->all())->setCreator($request->user());

            if ($category->count() > 0) { // Flash message is only needed when records already on the DB table.
                flash("De nieuws category {$category->naam} is toegevoegd aan " . config('app.name'));
            }
        });

        return redirect()->route('admin.news.categories.overview');
    }
}
