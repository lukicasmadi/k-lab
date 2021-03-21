<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function data()
    {
        $model = Article::with(['user' => function ($query) {
            $query->select('id', 'email', 'name');
        }, 'category']);

        return datatables()->eloquent($model)->toJson();
    }

    public function index()
    {
        return view('article.index');
    }

    public function add()
    {
        $category = Category::pluck('name', 'id');
        return view('article.add', compact('category'));
    }

    public function save_process(ArticleRequest $request)
    {

        $data = [
            'uuid' => genUuid(),
            'topic' => $request->topic,
            'desc' => $request->desc,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'created_by' => myUserId(),
        ];

        if(request()->hasFile('small_img')) {
            $file = $request->file('small_img');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            Storage::put("/public/upload/article/".$randomName, File::get($file));
            $data['small_img'] = $randomName;
        }

        if(request()->hasFile('big_img')) {
            $file = $request->file('big_img');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            Storage::put("/public/upload/article/".$randomName, File::get($file));
            $data['big_img'] = $randomName;
        }

        Article::create($data);

        flash('Your data has been saved')->success();
        return redirect()->route('article_index');
    }

    public function edit(Article $articleUuid)
    {
        $category = Category::pluck('name', 'id');
        return view('article.edit', compact('articleUuid', 'category'));
    }

    public function update(ArticleRequest $articleUuid)
    {

        $data = [
            'topic' => request('topic'),
            'desc' => request('desc'),
            'status' => request('status'),
            'category_id' => request('category_id'),
            'updated_by' => myUserId(),
        ];

        if(request()->hasFile('small_img')) {
            $file = $articleUuid->file('small_img');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            Storage::put("/public/upload/article/".$randomName, File::get($file));
            $data['small_img'] = $randomName;
        }

        if(request()->hasFile('big_img')) {
            $file = $articleUuid->file('big_img');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            Storage::put("/public/upload/article/".$randomName, File::get($file));
            $data['big_img'] = $randomName;
        }

        Article::whereId(request('id'))->update($data);

        flash('Your data has been updated')->success();
        return redirect()->route('article_index');
    }

    public function delete(Article $articleUuid)
    {
        $articleUuid->delete();
        flash('Your data has been deleted')->success();
        return redirect()->route('article_index');
    }
}
