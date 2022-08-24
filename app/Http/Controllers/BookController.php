<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\UserHistory;
use Carbon\Carbon;
use Exception;
use Response;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::query();
        if (request()->has('search')) {
            $search = \request('search');
            $books->where('book_name', 'like', "%" . $search . "%");
        }
        $books = $books->paginate(4);
        return view('sites.dashboard.library', ['books' => $books]);
    }

    public function store(BookRequest $request)
    {
        $data = $request->except(['file', 'cover_book']);
        $data['published_at'] = Carbon::now();
        if (isset($request->cover_book)) {
            $file = $request->file('cover_book');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/cover_book';
            $file->move($destinationPath, $fileName);
            $data['path_img'] = $fileName;
        }

        if (isset($request->file)) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/book';
            $file->move($destinationPath, $fileName);
            $data['path_file'] = $fileName;
        }

        Book::create($data);
        return redirect('/library');
    }

    public function show(Book $schoolBook)
    {
        return view('sites.dashboard.book_detail', ['books' => $schoolBook]);
    }

    public function form_page()
    {
        return view('sites.dashboard.library_form');
    }

    public function form_page_edit(Book $schoolBook)
    {
        return view('sites.dashboard.library_form_edit', ['data' => $schoolBook]);
    }

    public function update(BookRequest $request, Book $schoolBook)
    {
        $this->response = $schoolBook->update($request->validated());
        return redirect('/library');
    }

    public function destroy(Book $schoolBook)
    {
        $schoolBook->delete();
        return redirect('/library');
    }

    public function book_read($id)
    {
        UserHistory::create([
            'user_id'   => \auth()->user()->id,
            'book_id'   => $id,
            'date'      => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        $buku = Book::query()->where('id', $id)->first();
        return Response::make(file_get_contents('book/' . $buku->path_file), 200, [
            'content-type' => 'application/pdf',
        ]);
    }
}