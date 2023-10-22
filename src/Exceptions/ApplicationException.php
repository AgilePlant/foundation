<?php

namespace Foundation\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class ApplicationException extends Exception
{
    abstract public function error(): string;

    abstract public function help(): string;

    abstract public function status(): int;

    public function render(Request $request): Response
    {
        $message = new ExceptionMessage($this->error(), $this->help());

        return response($message->toArray(), $this->status());
    }
}
