<?php

namespace Hasnainali9\LaravelSurveyJS\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SurveyResult
 *
 * @package Hasnainali9/LaravelSurveyJS
 */
class SurveyResult extends Model
{
    protected $fillable = [
        'survey_id',
        'user_id',
        'ip_address',
        'json',
    ];
    protected $casts = [
        'json' => 'array',
    ];

    /**
     * Survey constructor with custom table name definition
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        if (!isset($this->table)) {
            $this->setTable(config('survey-manager.database.tables.survey_results'));
        }

        parent::__construct($attributes);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo('Fruitware\LaravelSurveyJS\LaravelSurveyJS\Models\Survey', 'survey_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(config('survey-manager.user_model'), 'user_id');
    }
}
