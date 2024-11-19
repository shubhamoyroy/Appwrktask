<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactionmodel extends Model
{
    protected $table = 'transactionmodels';
    protected $fillable = ['amount','running_balance','description','type'];
}
