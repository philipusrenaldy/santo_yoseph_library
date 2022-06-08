<?php
namespace App\Helper;

class ApiBuilder {
    public static function apiRespond($code, $data, $message = null)
    {
        $response['status'] = $code;

        if ($code == 200) {
            $response['message'] = "Success";
        } elseif ($code == 404) {
            $response['message'] = "Not Found";
        } elseif ($code == 400) {
            $response['message'] = "Bad Request";
        } elseif ($code == 401) {
            $response['message'] = "Unauthorized";
        } elseif ($code == 405) {
            $response['message'] = "Method Not Allowed";
        } else {
            $response['message'] = "Internal Server Error";
        }

        if ($message) {
            $response['message'] = $message;
        }

        $response['data'] = $data;
        if ($data instanceof \Illuminate\Pagination\LengthAwarePaginator) {
            $response['data'] = [
                'data'      => $data->getCollection(),
                'paging'    => [
                    'first'         => $data->url(1),
                    'last'          => $data->url($data->lastPage()),
                    'prev'          => $data->previousPageUrl(),
                    'next'          => $data->nextPageUrl(),
                    'current_page'  => $data->currentPage(),
                    "from"          => 1,
                    "last_page"     => $data->lastPage(),
                    "per_page"      => $data->perPage(),
                ]
            ];
        }

        return response()->json($response, $code);
    }

    public static function pagination($response, $type = 'offset')
    {
        if (request()->has("paginate")) {
            if ($type == 'offset') {
                $result = $response->paginate(request()->query("paginate"));
            } else {
                $result = $response->cursorPaginate(request()->query("paginate"))->withQueryString();
            }
        } else if($type == 'collection') {
            $result = $response;
        } else {
            $result = $response->get();
        }
        return $result;
    }
}
