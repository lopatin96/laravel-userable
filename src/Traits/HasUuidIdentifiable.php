<?php

namespace Atin\LaravelUserable\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUserable
{
    public static function bootHasUserable(): void
    {
        static::creating(static function (Model $model) {
            if (is_null($model->user_id)) {
                $model->uuid = auth()->user()->id;
            }
        });
    }
}