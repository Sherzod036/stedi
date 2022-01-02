<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Resources\CategoryResource;
use \App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lang_id = $request->header('X-LOCALE');

        $categories = Category::where('lang_id', $lang_id)->get();

        $api_resources = CategoryResource::collection($categories);

        return response()->json([
            'message' => 'success',
            'data' => $api_resources,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $uploaded_file = $request->image_path->store('uploads', 'public');

        $category = new Category;

        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->image_path = $request->image_path->hashName();
        $category->icon = $request->icon;
        $category->lang_id = $request->header('X-LOCALE');

        return $category->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
