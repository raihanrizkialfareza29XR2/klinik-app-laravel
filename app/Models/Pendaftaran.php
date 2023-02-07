<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pendaftaran';

    protected $table = 'pendaftaran';
    
    protected $guarded = ['id_pendaftaran'];
}
