<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChapterQuiz extends Model
{
    use HasFactory;
    protected $fillable = [
    	'chapter_no',
    	'quiz_no',
    ];	
}
