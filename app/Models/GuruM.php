<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruM extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $fillable = ['id','nip','namaguru','mapel'];
}
