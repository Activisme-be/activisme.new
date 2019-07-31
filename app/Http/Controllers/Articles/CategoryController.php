<?php

namespace App\Http\Controllers\Articles;

use App\Models\Category;
use App\Http\Requests\CategoryFromRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
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

    public function show(Category $category): Renderable
    {
        $posts = $category->articles()->simplePaginate();
        return view('articles.categories.show', compact('category', 'posts'));
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
            $request->user()->logActivity($category, 'Categorieen', "Heeft {$category->naam} aangemaakt als nieuws categorie in de applicatie.");
            $category->create($request->all())->setCreator($request->user());

            if (Category::count() > 0) { // Flash message is only needed when records already on the DB table.
                flash("De nieuws category {$category->naam} is toegevoegd aan " . config('app.name'));
            }
        });

        return redirect()->route('admin.news.categories.overview');
    }

    /**
     * Method for deleting an news category out of the database.
     *
     * @throws \Throwable <- Native PHP class
     *
     * @param  Request  $request  The instance that holds all the request data.
     * @param  Category $category The resource entity from the given category.
     * @return RedirectResponse
     */
    public function destroy(Request $request, Category $category): RedirectResponse
    {
        // The category doesn't has the section called "news" in the database storage.
        // So return the HTTP - NOT FOUND code and stop processing the delete logic.
        abort_if($category->section !== 'news', Response::HTTP_NOT_FOUND);

        // Process logic for the delete request.
        DB::transaction(static function () use ($request, $category): void {
            $category->delete();
            $request->user()->logActivity($category, 'Categorieen', "Heeft {$category->naam} verwijderd als news categorie uit de applicatie.");

            if (Category::count() > 0) {
                flash($category->naam . ' is verwijderd als nieuws categorie in de applicatie.');
            }
        });

        return redirect()->route('admin.news.categories.overview');
    }
}
