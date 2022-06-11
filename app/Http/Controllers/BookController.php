<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Exception;
use App\Helper\ApiBuilder as Api;

class BookController extends Controller
{
    private $response, $code;

    public function __construct()
    {
        $this->code = 200;
        $this->response = [];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $this->response = Book::paginate(8);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BookRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BookRequest $request)
    {
        try {
            $data = $request->validated();
            $this->response = Book::create($data);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Display the specified resource.
     *
     * @param Book $schoolBook
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Book $schoolBook)
    {
        try {
            $this->response = $schoolBook;
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BookRequest $request
     * @param Book $schoolBook
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BookRequest $request, Book $schoolBook)
    {
        try {
            $this->response = $schoolBook->update($request->validated());
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book $schoolBook
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Book $schoolBook)
    {
        try {
            $this->response = $schoolBook->delete();
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }
}
