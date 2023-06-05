<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmkmRegistration extends Model
{
    use HasFactory;
    protected $table = 'umkm_registration';
    public $timestamps= false;
    protected $guarded = [];
}
