<?php

namespace App\Http\Controllers;

use App\Helper\ImageUploadHelper;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        if ($request->validated()) {
            if (is_file($request->file('image'))) {
                $image = ImageUploadHelper::upload($request->file('image'));
            }
            Category::create([
                'name' => $request->input('name'),
                'image' => $image ?? null,
            ]);

            return redirect()->route('category.index');
        }

        return redirect()->back()->withErrors($request->messages());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryRequest $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if ($request->validated()) {
            if (is_file($request->file('image'))) {
                $image = ImageUploadHelper::upload($request->file('image'));
            }
            $category->name = $request->input('name');
            $category->image = $image ?? null;
            $category->save();

            return redirect()->route('category.index');
        }

        return redirect()->back()->withErrors($request->messages());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (is_file($category->image)) {
            unset($category->image);
        }
        $category->delete();

        return redirect()->route('category.index');
    }
}
