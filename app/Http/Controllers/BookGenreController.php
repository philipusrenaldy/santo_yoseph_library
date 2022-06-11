<?php

namespace App\Http\Controllers;

use App\Helper\ApiBuilder as Api;
use App\Http\Requests\BookGenreRequest;
use App\Models\BookGenre;
use Illuminate\Http\Request;
use Exception;

class BookGenreController extends Controller
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
            $this->response = BookGenre::paginate(8);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BookGenreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BookGenreRequest $request)
    {
        try {
            $data = $request->validated();
            $this->response = BookGenre::create($data);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Display the specified resource.
     *
     * @param BookGenre $schoolBook
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(BookGenre $bookGenre)
    {
        try {
            $this->response = $bookGenre;
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BookGenreRequest $request
     * @param BookGenre $bookGenre
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BookGenreRequest $request, BookGenre $bookGenre)
    {
        try {
            $this->response = $bookGenre->update($request->validated());
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BookGenre $bookGenre
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(BookGenre $bookGenre)
    {
        try {
            $this->response = $bookGenre->delete();
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }
}
