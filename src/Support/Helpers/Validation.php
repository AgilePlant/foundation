<?php

namespace Foundation\Support\Helpers;

use Illuminate\Support\Facades\Validator;

class Validation
{
    /**
     * |------------------------------------------------------------------------
     * | URL (Uniform Resource Locator)
     * |------------------------------------------------------------------------
     */

    /**
     * @param string $url
     * @param bool $secure
     * @return bool
     */
    public static function isHttpURL(string $url, bool $secure = false): bool
    {
        return Validator::make(
            ['data' => $url],
            ['data' => $secure ? 'url:https' : 'url:http,https']
        )->passes();
    }

    /**
     * @param string $url
     * @return bool
     */
    public static function isSecureHttpURL(string $url): bool
    {
        return self::isHttpURL($url, true);
    }

}
