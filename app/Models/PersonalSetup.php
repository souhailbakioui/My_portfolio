<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalSetup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="personal_setup";
    protected $fillable = [
        'profilepic',
        'name',
        'twitter',
        'facebook',
        'instagram',
        'skype',
        'linkedin',
        'github',
        'homewallpaper',
        'professions',
        'location',
        'mobile',
        'emailid',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
