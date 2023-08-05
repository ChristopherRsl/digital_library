@extends('layout')
@section('content')

<a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
</a>
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                src="{{$book->cover ? asset('storage/' . $book->cover) : asset('/images/cover.jpg')}}" alt="" 
            />
            <h3 class="text-2xl mb-2">{{$book['title']}}</h3>
            <div class="text-xl font-bold mb-4">{{$book['category']}}</div>
            <div class="text-xl font-bold mb-4">{{$book['total']}}</div>
            
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Description
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                        {{$book['description']}}
                    </p>
                    <a
                        href="/books/{{$book['id']}}/download"
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-file-export"></i>
                        Export PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection