<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::with('category');

        if ($request->search) {
            $books->where('judul', 'like', '%' . $request->search . '%');
        }

        if ($request->category) {
            $books->where('category_id', $request->category);
        }

        $books = $books->get();
        $categories = Category::with('books')->get();

        return view('books.index', compact('books', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        $categories = Category::all();
        return view('books.edit', compact('book','categories'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}