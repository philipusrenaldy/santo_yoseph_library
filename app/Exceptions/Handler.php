<?php

namespace App\Exceptions;

use App\Helper\ApiBuilder as Api;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof MethodNotAllowedHttpException) {
            $code = 405;
            $message = "Method Not Allowed";
            $response = [];
            return Api::apiRespond($code, $response, $message);
        } else if ($e instanceof ModelNotFoundException) {
            return Api::apiRespond(404, $e->getMessage(), "Data Not Found");
        } else if ($e instanceof NotFoundHttpException) {
            $code = 404;
            $message = "Endpoint Not Found";
            $response = [];
            return Api::apiRespond($code, $response, $message);
        } else if ($e instanceof BadRequestException) {
            return Api::apiRespond($e->getCode(), [$e->getMessage()], "Bad Request");
        }

        return parent::render($request, $e);
    }
}
