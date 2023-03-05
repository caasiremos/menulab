<?php

namespace App\Http\Responses;

use Throwable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Support\Responsable;

class ApiErrorResponse implements Responsable
{

    public function __construct(
        protected Throwable $throwable,
        protected string    $message,
        protected int       $code = Response::HTTP_INTERNAL_SERVER_ERROR,
        protected array     $headers = [],
    )
    {
    }

    /**
     * Creates HTTP response that represents the object
     * @param Request $request
     * @return JsonResponse
     */
    public function toResponse($request): JsonResponse
    {
        $response = ['message' => $this->message];

        if ($this->throwable && config('app.debug')) {
            $response['debug'] = [
                'exception_message' => $this->throwable->getMessage(),
                'file' => $this->throwable->getFile(),
                'line' => $this->throwable->getLine(),
            ];
        }

        Log::error("{$this->throwable->getMessage()} @ {$this->throwable->getFile()}: {$this->throwable->getLine()}");

        return response()->json($response, $this->code, $this->headers);
    }
}
