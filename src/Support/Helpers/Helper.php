<?php

if (!function_exists('hasDisk')) {
    function hasDisk(string $disk): bool
    {
        return in_array($disk, array_keys(config('filesystems.disks')));
    }
}

if (!function_exists('getDisk')) {
    function getDisk(string | null $disk = null): string
    {
        return is_null($disk) || !hasDisk($disk) ? config('filesystems.default') : $disk;
    }
}
