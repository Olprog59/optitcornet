<form action="" method="post">
    @csrf
    @method($post->id ? 'PATCH' : 'POST')
    <div>
        <label for="title">Titre</label>
        <input type="text" id="title" name="title", value="{{ old('title', $post->title) }}">
        @error('title')
            {{ $message }}
        @enderror
    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text" id="slug" name="slug", value="{{ old('slug', $post->slug) }}">
        @error('slug')
            {{ $message }}
        @enderror
    </div>
    <div>
        <label for="content">Catégorie</label>
        <textarea name="content" id="content">{{ old('content', $post->content) }}</textarea>
        @error('content')
            {{ $message }}
        @enderror

    </div>
    <div>
        <label for="category">Catégorie</label>
        <select id="category" name="category_id">
            <option value="">Sélectionner une catégorie</option>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}"
                        @selected(old('category_id', $post->category_id) == $cat->id)>{{ $cat->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            {{ $message }}
        @enderror

    </div>
    @php
        $tagsIds = $post->tags()->pluck('id');
    @endphp
    <div>
        <label for="tag">Catégorie</label>
        <select id="tag" name="tags[]" multiple>
            @foreach ($tags as $tag)
                <option @selected($tagsIds->contains($tag->id)) value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        @error('tags')
            {{ $message }}
        @enderror

    </div>
    <button>
        @if ($post->id)
            Modifier
        @else
            Enregistrer
        @endif
    </button>
</form>
