<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table = "questions";
    protected $fillable = ['question'];
    // protected $primarykey = "id";
    // protected $fillable = ['question'];
    protected $guarded = [];

    public function answers_list()
    {
        return $this->hasMany(Answers::class);
    }
}
