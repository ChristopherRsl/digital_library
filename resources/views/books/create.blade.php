@extends('layout')
@section('content')

    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                ADD BOOK
            </h2>
        </header>

        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
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
                    value="{{old('title')}}"
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
                    <option value="Mystery">Mystery</option>
                    <option value="Fantasy">Fantasy</option>
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
                    
                >{{old('description')}}</textarea>
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
                    value="{{old('total')}}"
                />
                @error('total')
                    <p class="text-red text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="file" class="inline-block text-lg mb-2">
                    File PDF
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="file"
                    accept="application/pdf"
                    value="{{old('file')}}"
                />
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
                    value="{{old('cover')}}"
                />
                @error('cover')
                    <p class="text-red text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="bg-blue text-white rounded py-2 px-4 hover:opacity-80"
                >
                    Add Book
                </button>

                <a href="/" class=" text-black ml-4"> Cancel </a>
    
            </div>
        </form>
    </div>
@endsection