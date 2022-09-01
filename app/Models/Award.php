<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $table        = "award";
    protected $primaryKey   = "id";
    public $incrementing    = true;
    public $timestamps      = false;

    protected $fillable = [
        "name",
        "image",
        "type",
        "poin"
    ];
}
