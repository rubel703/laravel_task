<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.category.index',['categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::createCategory($request);
        return back()->with('notification', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        return view('backend.category.edit', ['category' => Category::find($id)]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        Category::updateCategory($request, $id);
        return to_route('category.index')->with('notification', 'Category Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Category::deleteUser($id);
        return back()->with('notification', 'Category deleted successfully.');
    }
}
