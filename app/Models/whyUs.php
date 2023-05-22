<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class whyUs extends Model
{
    use HasFactory;
    protected $table = "why_us";
    protected $primaryKey = "id";
    public $timestamp = true;
    protected $fillable = [
        'page_title',
        'page_paragraph',
        'ser1_title',
        'ser1_paragraph',
        'ser2_title',
        'ser2_paragraph',
        'ser3_title',
        'ser3_paragraph',
    ];
}
