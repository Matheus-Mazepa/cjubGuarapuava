<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['name', 'cpf', 'address', 'community', 'size_t_shirt', 'phone', 'email', 'birth_date', 'has_special_needs', 'special_needs', 'needs_transport', 'observations', 'workshop_id', 'paid_out', 'babylook', 'arrives_on_friday'];

    public function workshop()
    {
        return $this->belongsTo('App\Model\Workshop');
    }

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = \Carbon\Carbon::createFromFormat('d/m/Y',$value);
    }

    public function setCpfAttribute($value)
    {
        $value = preg_replace('/[^0-9]/', '', $value);
        $this->attributes['cpf'] = $value;
    }


}
