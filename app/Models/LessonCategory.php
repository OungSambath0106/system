<?php

namespace App\Models;

use App\helpers\AppHelper;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LessonCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getNameAttribute($name)
    {
        if (strpos(url()->current(), '/admin')) {
            return $name;
        }
        return $this->translations[0]->value ?? $name;
    }

    public function course ()
    {
        return $this->belongsTo(Course::class, 'course_id');
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
