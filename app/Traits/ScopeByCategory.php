<?php

namespace App\Traits;

use App\Scoping\Scopes\CategoryScope;

/**
 * Scopes
 */
trait ScopeByCategory
{
    protected function scopes()
    {
        return [
            'category' => new CategoryScope()
        ];
    }
}
