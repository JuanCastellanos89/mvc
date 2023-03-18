<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStore;
use App\Models\Category;
use Illuminate\Http\Request;

class CategorytController extends Controller
{
    public function __construct()
     {
        $this->middleware(['auth','rol.admin']);
     }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('category', 'ASC')->paginate(10);
        return view('dashboard.category.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create',['category' => new Category()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStore $request)
    {
        Category::create($request->validated());
        return back()->with('status', 'Categoria creada con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('dashboard.category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryStore $request, Category $category)
    {
        $category->update($request-> validated());
        return back()->with('status', 'Categoría actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('status', 'Categoría eliminada con éxito');
    }
}
