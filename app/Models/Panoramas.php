<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panoramas extends Model
{
    use Translatable;
    protected $table = 'panoramas';
    protected $fillable = ['panotitle','panodescription','panosmmimage','panoslag','panoequi'];

    protected $translatable = ['panotitle', 'panodescription', 'panoslag'];
    use HasFactory;

}
