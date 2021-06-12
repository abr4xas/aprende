<?php

namespace App\Models;

use App\Presenters\Url\UrlPresenter;
use App\Traits\CanBeScoped;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelSubscribe\Traits\Subscribable;

class Course extends Model
{
    use HasFactory;
    use CanBeScoped;
    use Subscribable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'price',
        'slug',
    ];

    protected $appends = [
        'url',
    ];

    public function getUrlAttribute()
    {
        return new UrlPresenter($this, 'course');
    }
}
