<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Utils for working with consistent API response.
 */
class ApiUtil
{
    public static function abort(
        string $message,
        array $errors = [],
        int $code = Response::HTTP_BAD_REQUEST
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }

    /**
     * Helper function for returning structured JSON success response.
     *
     * @param  string  $message  Response message
     * @param  mixed  $data  Response data
     * @param  int  $code  HTTP response code
     */
    public static function success(
        string $message = 'Your request has been successfully processed.',
        mixed $data = [],
        int $code = Response::HTTP_OK
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'content' => $data,
        ], $code);
    }

    /**
     * Helper function for returning structured JSON failure response.
     *
     * @param  string  $message  Response message
     * @param  mixed  $data  Response data
     * @param  int  $code  HTTP response code
     * @param  array  $errors  response errors
     */
    public static function failure(
        string $message = 'Something went wrong. Please try again later or contact us.',
        mixed $data = [],
        int $code = Response::HTTP_BAD_REQUEST,
        array $errors = [],
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'errors' => $errors,
            'content' => $data,
        ], $code);
    }

    /**
     * Helper function for returning structured JSON crash response.
     *
     * @param  string  $message  Response message
     * @param  int  $code  HTTP response code
     * @param  array  $errors  response errors
     */
    public static function crash(
        string $message = 'Our system crashed. Check back after some time.',
        int $code = Response::HTTP_INTERNAL_SERVER_ERROR,
        array $errors = [],
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }

    /**
     * Helper function for returning structured JSON not found response.
     *
     * @param  string  $message  Response message
     * @param  int  $code  HTTP response code
     * @param  array  $errors  response errors
     */
    public static function notFound(
        string $message = "We couldn't find any info against your request.",
        int $code = Response::HTTP_NOT_FOUND,
        array $errors = [],
    ): JsonResponse {
        return response()->json([
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }
}
