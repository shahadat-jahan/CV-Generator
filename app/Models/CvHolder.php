<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CvHolder extends Model
{
    use HasFactory;

    protected $table = 'cv_holder';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'birthday',
        'father_name',
        'mother_name',
        'profile_picture',
    ];
}
