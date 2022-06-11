<?php

namespace App\Http\Controllers;

use App\Helper\ApiBuilder as Api;
use App\Http\Requests\BookTypeRequest;
use App\Models\BookType;
use Illuminate\Http\Request;
use Exception;

class BookTypeController extends Controller
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
            $this->response = BookType::paginate(8);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BookTypeRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BookTypeRequest $request)
    {
        try {
            $data = $request->validated();
            $this->response = BookType::create($data);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Display the specified resource.
     *
     * @param BookType $bookType
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(BookType $bookType)
    {
        try {
            $this->response = $bookType;
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BookTypeRequest $request
     * @param BookType $bookType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BookTypeRequest $request, BookType $bookType)
    {
        try {
            $this->response = $bookType->update($request->validated());
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param BookType $bookType
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(BookType $bookType)
    {
        try {
            $this->response = $bookType->delete();
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }
}
