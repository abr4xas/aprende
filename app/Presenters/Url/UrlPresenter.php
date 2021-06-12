<?php

namespace App\Presenters\Url;

use Illuminate\Database\Eloquent\Model;

class UrlPresenter
{
    protected Model $model;
    protected string $modelName;

    public function __construct(Model $model, string $modelName)
    {
        $this->model = $model;
        $this->modelName = $modelName;
    }

    public function __get($key)
    {
        if (method_exists($this, $key)) {
            return $this->$key();
        }

        return $this->$key;
    }

    public function show(): string
    {
        return route("{$this->modelName}.show", $this->model);
    }
}
