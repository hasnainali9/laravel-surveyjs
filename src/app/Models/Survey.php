<?php

namespace Hasnainali9\LaravelSurveyJs\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

/**
 * Class Survey
 *
 * @package Fruitware/LaravelSurveyJS
 */
class Survey extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'slug', 'json',
    ];

    protected $casts = [
        'json'  =>  'array',
    ];

    /**
     * Survey constructor with custom table name definition
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        if (! isset($this->table)) {
            $this->setTable(config('survey-manager.database.tables.surveys'));
        }

        parent::__construct($attributes);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($survey) {
            $survey->slug = Str::slug($survey->name);

            $latestSlug = static::whereRaw("slug = '$survey->slug' or slug LIKE '$survey->slug-%'")
                                ->latest('id')
                                ->value('slug');
            if ($latestSlug) {
                $pieces = explode('-', $latestSlug);

                $number = intval(end($pieces));

                $survey->slug .= '-'.($number + 1);
            }
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
     public function results()
    {
        return $this->hasMany('Hasnainali9\LaravelSurveyJs\app\Models\SurveyResult', 'survey_id');
    }
}
