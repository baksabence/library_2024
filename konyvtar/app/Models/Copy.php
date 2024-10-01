<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $primaryKey = 'copy_id';
=======
    protected  $primaryKey = 'copy_id';
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568

    protected $fillable = [
        'book_id',
        'hardcovered',
        'publication',
<<<<<<< HEAD
        'status',
=======
        'status'
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
    ];
}
