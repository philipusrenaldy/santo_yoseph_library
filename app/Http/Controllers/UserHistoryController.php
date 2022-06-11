<?php

namespace App\Http\Controllers;

use App\Helper\ApiBuilder as Api;
use App\Http\Requests\UserHistoryRequest;
use App\Models\UserHistory;
use Illuminate\Http\Request;
use Exception;

class UserHistoryController extends Controller
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
            $this->response = UserHistory::paginate(8);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserHistoryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(UserHistoryRequest $request)
    {
        try {
            $data = $request->validated();
            $this->response = UserHistory::create($data);
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Display the specified resource.
     *
     * @param UserHistory $userHistory
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(UserHistory $userHistory)
    {
        try {
            $this->response = $userHistory;
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserHistoryRequest $request
     * @param userHistory $userHistory
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UserHistoryRequest $request, userHistory $userHistory)
    {
        try {
            $this->response = $userHistory->update($request->validated());
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UserHistory $userHistory
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(UserHistory $userHistory)
    {
        try {
            $this->response = $userHistory->delete();
        } catch (Exception $e) {
            $this->code = 500;
            $this->response = $e->getMessage();
        }
        return Api::apiRespond($this->code, $this->response);
    }
}
