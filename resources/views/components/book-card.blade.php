@props(['book'])
<div class="bg-gray-50 border border-gray-200 rounded p-2">
    <div class="flex flex-col md:items-center">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$book->cover ? asset('storage/' . $book->cover) : asset('/images/cover.jpg')}}" alt="" 
            
            
            {{-- src={{asset("images/holyMother.jpg")}} --}}
            {{-- src="data:image;base64,{{ base64_encode($book->cover) }}" --}}
            
        />
        <div>
            <h3 class="text-2xl font-bold mb-4 ">
                <a href="/books/{{$book['id']}}">Title : {{$book['title']}}</a>
            </h3>
            <div class="text-xl">Category : {{$book['category']}}</div>
            <div class="text-xl">Total : {{$book['total']}}</div>
        </div>
    </div>
</div>