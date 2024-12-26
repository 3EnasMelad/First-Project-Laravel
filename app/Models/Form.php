<?php

// app/Models/Form.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;


    protected $fillable = ['name'];


    public function fields()
    {
        return $this->hasMany(Field::class);
    }


    public function formEntries()
    {
        return $this->hasMany(FormEntry::class);
    }
}
