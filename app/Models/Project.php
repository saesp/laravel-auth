<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'languages',
        'main_image',
        'repo_link',
        'view_link',
        'completed',
        'release_date',
    ];
}
