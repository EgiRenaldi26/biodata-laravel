<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class PesertadidikM extends Model
{
    use HasFactory, Searchable;
    protected $table = 'pesertadidik';
    protected $fillable = ['id','nis','namalengkap','jk','nilai'];

    public function searchableAs()
    {
        return 'pesertadidik';
    }

    public function toSearchableArray()
    {
        
        return [
            'namalengkap' =>$this->namalengkap,
        ];
    }

}
