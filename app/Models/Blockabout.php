<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Blockabout extends Model
{
    use Translatable;
    prortected $table = 'blockabout';
    protected $fillable = ['title','subtitle','text']

    protected $translatable = ['title', 'subtitle', 'text'];
    use HasFactory;
}
