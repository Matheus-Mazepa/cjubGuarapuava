<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = ['name', 'minister', 'vacancies'];

    public function participants()
    {
        return $this->hasMany('App\Model\Participant');
    }

    public function getAvailableVacanciesAttribute()
    {
        return $this->vacancies - $this->participants()->count();
    }
}
