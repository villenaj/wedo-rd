<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appPos extends Model
{
    use HasFactory;
    protected $connection="mysql_event2";

    protected $table = "tbl_position";
    protected $primaryKey = "id";
    public $timestamps = false;
}
