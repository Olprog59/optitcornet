<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormPostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        // $post = Post::find(3);
        // $post->category_id = 2;
        // $post->save();

        // $posts = Post::with('category')->get();
        // foreach ($posts as $post) {
        //     $cat = $post->category?->name;
        // }

        // $cat = Category::find(1);
        //
        // $cat->posts()->where('id', '>', 10)->get();

        // $post = Post::find(2);
        // $post->tags()->createMany([[
        //     'name' => 'Tag 1',
        // ], [
        //     'name' => 'Tag 2',
        // ]]);

        // $post->tags;

        return view('blog.index', [
            'posts' => Post::with('tags', 'category')->paginate(50),
        ]);
    }

    public function show(string $slug, string $post): View|RedirectResponse
    {

        $post = Post::findOrFail($post);
        if ($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->post]);
        }

        return view('blog.show', [
            'post' => $post,
        ]);
    }

    public function create(): View
    {
        $post = new Post();

        return view('blog.create', [
            'post' => $post,
            'categories' => Category::select('id', 'name')->get(),
            'tags' => Tag::select('id', 'name')->get(),
        ]);
    }

    public function store(FormPostRequest $request): RedirectResponse
    {
        $post = Post::create($request->validated());
        $post->tags()->sync($request->validated('tags'));

        return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])->with('success', "L'article a bien été sauvegardé");
    }

    public function edit(Post $post)
    {
        return view('blog.edit', [
            'post' => $post,
            'categories' => Category::select('id', 'name')->get(),
            'tags' => Tag::select('id', 'name')->get(),
        ]);
    }

    public function update(Post $post, FormPostRequest $request): RedirectResponse
    {
        $post->update($request->validated());
        $post->tags()->sync($request->validated('tags'));

        return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])->with('success', "L'article a bien été sauvegardé");
    }
}
