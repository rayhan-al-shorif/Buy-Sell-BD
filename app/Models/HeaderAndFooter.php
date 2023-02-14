<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderAndFooter extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_logo',
        'favicon',
        'email',
        'phone',
        'twitter',
        'facebook',
        'linkedin',
        'instagram',
        'footer_title',
    ];
}
