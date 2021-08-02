<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidCase extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'cases', 'report_date'
    ];
}
