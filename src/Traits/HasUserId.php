<?php

namespace Atin\LaravelUserable\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUserId
{
    public static function bootHasUserId(): void
    {
        static::creating(static function (Model $model) {
            if (is_null($model->user_id)) {
                $model->user_id = auth()->user()->id;
            }
        });
    }
}