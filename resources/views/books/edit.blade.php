@extends('layout')
@section('content')
<div
    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            EDIT BOOK
        </h2>
        <p class="mb-4">{{$book['title']}}</p>
    </header>

    <form method="POST" action="/books/{{$book['id']}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label
                for="title"
                class="inline-block text-lg mb-2"
                >Book Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                value="{{$book['title']}}"
            />
            @error('title')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        

        <div class="mb-6">
            <label for="category" class="inline-block text-lg mb-2">Category</label>
            <select class="border border-gray-200 rounded p-2 w-full" name="category">
                <option value="Fiction">Fiction</option>
                <option value="Non-fiction">Non-fiction</option>
                <option value="Poetry">Poetry</option>
                <option value="Drama">Drama</option>
                <option value="Comics">Comics</option>
                <option value="Romance">Romance</option>
                <option value="Mystery ">Mystery </option>
                <option value="Fantasy">Fantasy</option>
                <option value="{{$book['category']}}" selected>{{$book['category']}} (old)</option>
            </select>

            @error('category')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Book Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
                
            >{{$book['description']}}</textarea>
            @error('description')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="total"
                class="inline-block text-lg mb-2"
                >Total </label
            >
            <input
                type="number"
                class="border border-gray-200 rounded p-2 w-full"
                name="total"
                value="{{$book['total']}}"
            />
            @error('total')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="file" class="inline-block text-lg mb-2">
                File PDF
            </label>
            @php
                $filePath = $book->file; 
                $fileName = basename($filePath); 
            @endphp
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="file"
                accept="application/pdf"
                value="{{$fileName}}"
            />
            <p>Selected File: {{ $fileName }}</p>
            @error('file')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="cover" class="inline-block text-lg mb-2">
                Book Cover
            </label>
            
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="cover"
                accept="image/png, image/gif, image/jpeg, image/jpg"
                
            />
            <img
                class="w-48 mr-6 mb-6"
                src="{{$book->cover ? asset('storage/' . $book->cover) : asset('/images/cover.jpg')}}" alt="" 
            />
            @error('cover')
                <p class="text-red text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                class="bg-blue text-white rounded py-2 px-4 hover:opacity-80"
            >
                Update Book
            </button>

            <a href="/" class=" text-black ml-4"> Cancel </a>

        </div>
    </form>
</div>
@endsection