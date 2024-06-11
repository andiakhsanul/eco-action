<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteers extends Model
{
    use HasFactory;
    protected $table = 'volunteers';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = ['fname', 'lname', 'email','phone','city','state','postal','article_title'];

    public function getFullNameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }
}
