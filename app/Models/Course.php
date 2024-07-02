<?php

namespace App\Models;

use App\helpers\AppHelper;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getTitleAttribute($title)
    {
        if (strpos(url()->current(), '/admin')) {
            return $title;
        }
        return $this->translations->where('key', 'title')->sortDesc()->first()->value ?? $title;
    }

    public function getDescriptionAttribute($description)
    {
        if (strpos(url()->current(), '/admin')) {
            return $description;
        }
        return $this->translations->where('key', 'description')->sortDesc()->first()->value ?? $description;
    }

    public function lessonCategories()
    {
        return $this->hasMany(LessonCategory::class);
    }

    public function translations()
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('translate', function (Builder $builder) {
            $builder->with(['translations' => function ($query) {
                if (strpos(url()->current(), '/api')) {
                    return $query->where('locale', App::getLocale());
                } else {
                    return $query->where('locale', AppHelper::default_lang());
                }
            }]);
        });
    }
}
