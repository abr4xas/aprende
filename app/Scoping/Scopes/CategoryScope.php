<?php

namespace App\Scoping\Scopes;

use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;

class CategoryScope implements Scope
{
    public function apply(Builder $builder, $value)
    {
        return $builder->whereHas('category', function ($builder) use ($value) {
            $builder->whereSlug($value);
        });
    }
}
