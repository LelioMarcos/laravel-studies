<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Story;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'corpo',
        'idUser',
        'idHist',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "idUser");
    }

    public function story()
    {
        return $this->belongsTo(Story::class, "idHsit");
    }
}
