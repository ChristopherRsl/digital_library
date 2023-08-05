@extends('layout')
@section('content')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 ">
    

    <div class="ml-4 mb-4 mt-4">
        <x-filter :bookfilter="$books"/>
        
    </div>
    @include('partials._search')
</div>


<div class="lg:grid lg:grid-cols-6 gap-4 space-y-4 md:space-y-0 mx-4">
    

    @unless(count($books)==0)
        @foreach($books as $book)
            <x-book-card :book="$book"/>
        @endforeach
    
    @else
        <h1>No Books available</h1>
    @endunless
</div>

<div class="mt-6 p-4">
    {{$books->links()}}
</div>
@endsection

