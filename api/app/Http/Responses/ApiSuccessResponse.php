<?php

namespace App\Http\Responses;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Support\Responsable;

class ApiSuccessResponse implements Responsable
{
    public function __construct(
        protected mixed $data,
        protected array $metadata,
        protected mixed $logMessage = null,
        protected int   $code = Response::HTTP_OK,
        protected array $headers = [],
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
        if (is_array($this->logMessage)) {
            $this->logMessage = json_encode($this->logMessage);
        }
        Log::info($this->logMessage);
        return response()->json([
            'data' => $this->data,
            'metadata' => $this->metadata
        ], $this->code, $this->headers);
    }
}
