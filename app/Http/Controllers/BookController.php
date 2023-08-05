<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BookController extends Controller
{
    //show all books
    public function index(){
        // dd(request()->category);
        return view('books.index', [
            'books' => Book::latest()->filter(request(['category', 'search']))
            ->paginate(12)
        ]);
    }

    //show specific book by id
    public function show(Book $book){
        // dd($book);
        return view('books.show', [
            'book' => $book
        ]);
    }

    //create books
    public function create( ){
        return view("books.create");
        
    }

    //store books
    public function store( Request $request){
        // dd($request->file('logo'));
        $formfields = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'total' => 'required',
            'file' => 'required',
            'cover' => 'required'
        ]);

        // Handle the PDF file upload
        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            $originalFileName = $uploadedFile->getClientOriginalName();
            $formfields['file'] = $uploadedFile->storeAs('pdfs', $originalFileName, 'public');
        }

        // Handle the cover book upload
        if ($request->hasFile('cover')) {
            $uploadedCover = $request->file('cover');
            $originalName = $uploadedCover->getClientOriginalName();
            $formfields['cover'] = $uploadedCover->storeAs('covers', $originalName, 'public');
        }

        $formfields['user_id'] = auth()->id();
        
        Book::create($formfields);
        return redirect('/')->with('message', 'Books Added Successfully');
    }
    public function exportpdf(Book $book)
    {
        // Check if the 'file' column is null
        if (is_null($book->file)) {
            return redirect('/books/'.$book->id)->with('message', 'Error reading file path');

        }

        // Get the file path from the 'file' column in the database
        $filePath = public_path('storage/' . $book->file);
        
        // Check if the file exists in the storage
        if (!file_exists($filePath)) {
            
            return redirect('/books/'.$book->id)->with('message', 'Error reading PDF file');
        }

        // Read the PDF file content
        $pdfContent = file_get_contents($filePath);
                
        // Generate and return the PDF file as a download response
        return response($pdfContent)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="' . basename($book->file) . '"');
    }

    public function edit(Book $book){
        return view('books.edit', [
            'book' => $book
        ]);
    }
    public function update(Request $request, Book $book){

        if (auth()->user()->role === 'user' && $book->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        $formfields = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'total' => 'required',
            'file' => '',
            'cover' => ''
        ]);

        // Handle the PDF file upload
        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            $originalFileName = $uploadedFile->getClientOriginalName();
            $formfields['file'] = $uploadedFile->storeAs('pdfs', $originalFileName, 'public');
        }

        // Handle the cover book upload
        if ($request->hasFile('cover')) {
            $uploadedCover = $request->file('cover');
            $originalName = $uploadedCover->getClientOriginalName();
            $formfields['cover'] = $uploadedCover->storeAs('covers', $originalName, 'public');
        }
    
        $book->update($formfields);
        return redirect('/books/'.$book->id)->with('message', 'Books Updated Successfully');
    }

    public function delete(Book $book){

        if (auth()->user()->role === 'user' && $book->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }

        
        // Delete the PDF file and cover file from the server file system
        if ($book->file && Storage::disk('public')->exists($book->file)) {
            Storage::disk('public')->delete($book->file);
        }
        if ($book->cover && Storage::disk('public')->exists($book->cover)) {
            Storage::disk('public')->delete($book->cover);
        }

        $book->delete();
        return redirect('/')->with('message', 'Books Deleted Successfully');

    }

    public function manage(){
        /** @var \App\Models\User $user */
        $user = auth()->user();

        if ($user->role === "admin") {
            return view('books.manage', ['books' => Book::get()]);
        }

        if ($user->role === "user") {
            return view('books.manage', ['books' => $user->books()->get()]);
        }
    }
}
