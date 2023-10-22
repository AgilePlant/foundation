<?php

/**
 * |----------------------------------------------------------------------------
 * | Uuid as secondary key and route key
 * |----------------------------------------------------------------------------
 */

namespace Foundation\Traits;

use Illuminate\Support\Str;

class HasUuid
{
    protected string $uuidColumnName = 'uuid';

    protected bool $useUuidAsRouteKey = true;


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$this->uuidColumnName} = (string)Str::orderedUuid();
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return $this->useUuidAsRouteKey ? $this->uuidColumnName : $this->getKeyName();
    }
}
