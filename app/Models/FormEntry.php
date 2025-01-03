<?php

// app/Models/FormEntry.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEntry extends Model
{
    use HasFactory;


    protected $fillable = ['form_id', 'data'];


    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
