<?php

namespace Foundation\Exceptions;

use Foundation\Exceptions\ApplicationException;
use Illuminate\Http\Response;

class JsonEncodeFailException extends ApplicationException
{
    public function error(): string
    {
        return trans('foundation::exception.json_encode_fail_error');
    }

    public function help(): string
    {
        return trans('foundation::exception.json_encode_fail_help');
    }

    public function status(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }

}
