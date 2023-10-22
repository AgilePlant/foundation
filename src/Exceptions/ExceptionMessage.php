<?php

namespace Foundation\Exceptions;

use JsonSerializable;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Contracts\Support\Arrayable;

class ExceptionMessage implements JsonSerializable, Jsonable, Arrayable
{
    public function __construct(private string $error = '', private string $help = "")
    {
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toJson($options = 0): bool|string
    {
        $jsonEncode = json_encode($this->jsonSerialize(), $options);

        throw_unless($jsonEncode, JsonEncodeFailException::class);

        return $jsonEncode;
    }

    public function toArray()
    {
        return [
            'error' => $this->error,
            'help' => $this->help
        ];
    }

}
