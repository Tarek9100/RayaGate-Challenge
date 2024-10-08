<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
	public function index()
	{
		\Log::info("Testing error logging");
		// Trigger a deliberate error (undefined function)
		invalid_function_call();
		return response()->json(['message' => 'This should trigger an error']);
	}



    public function show($id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }

    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
        return response()->json($book, 200);
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return response()->json(null, 204);
    }
}
