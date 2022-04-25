<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileImage extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'profile_image';
    protected $fillable = [
        'id',
        'fk_user',
        'image',
        'deleted_at'
    ];
}
