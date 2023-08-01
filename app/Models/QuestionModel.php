<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
    use HasFactory;
    
    protected $table  = 'questions';
    protected $casts = [
        'options' => 'object',
        'right_answers' => 'object',
    ];
}
