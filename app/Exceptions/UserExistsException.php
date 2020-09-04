<?php

namespace App\Exceptions;

use Exception;

class UserExistsException extends Exception
{
    protected $message = "User already exists.";

    protected $code = 404;

    /**
     * Render an API exception into an JSON response.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function render()
    {
        return response()->json([
            'message' => $this->message,
            'code' => $this->code,
        ]);
    }
}
