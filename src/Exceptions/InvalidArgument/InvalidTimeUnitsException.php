<?php

namespace Foundation\Exceptions\InvalidArgument;

use Foundation\Exceptions\ApplicationException;
use Illuminate\Http\Response;

class InvalidTimeUnitsException extends ApplicationException
{
    public function error(): string
    {
        return trans('invalid_argument_time_units_error');
    }

    public function help(): string
    {
        return trans('invalid_argument_time_units_help');
    }

    public function status(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }


}
