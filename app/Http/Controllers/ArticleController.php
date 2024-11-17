<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('page_admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('page_admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'headline_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'link' => 'required|string',
        ]);

        $imageName = time() . '.' . $request->headline_image->extension();
        $request->headline_image->move(public_path('img_storage/headline_images'), $imageName);

        $headlineImage = 'img_storage/headline_images/' . $imageName;

        Article::create([
            'headline_image' => $headlineImage,
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link,
        ]);

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function show(Article $article)
    {
        return view('page_admin.articles.index', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('page_admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'link' => 'required|url',
            'headline_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Update data artikel
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->link = $validatedData['link'];

        // Handle upload gambar baru jika ada
        if ($request->hasFile('headline_image')) {
            // Hapus gambar lama jika ada
            if ($article->headline_image && file_exists(public_path($article->headline_image))) {
                unlink(public_path($article->headline_image));
            }

            // Upload gambar baru
            $image = $request->file('headline_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/articles'), $imageName);
            $article->headline_image = 'images/articles/' . $imageName;
        }

        $article->save();

        return redirect()->route('articles.index')
            ->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy(Article $article)
    {
        Storage::disk('public')->delete($article->headline_image);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }

    public function deleteImage($id, $image)
    {
        $article = Article::findOrFail($id);
        $additional_images = json_decode($article->additional_images, true);

        if (($key = array_search($image, $additional_images)) !== false) {
            unset($additional_images[$key]);
            $article->additional_images = json_encode(array_values($additional_images));
            $article->save();

            // Hapus file dari storage
            Storage::delete('public/img_storage/additional_images/' . $image);
        }

        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}

