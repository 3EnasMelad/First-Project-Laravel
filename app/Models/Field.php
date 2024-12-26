<?php

// app/Models/Field.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;


    protected $fillable = ['form_id', 'field_name', 'field_type', 'is_required'];


    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
