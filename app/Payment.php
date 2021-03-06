<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $fillable = ['price','description', 'user_id', 'user_type', 'user_code', 'email','mobile','callbackURL','authority','refId','extraDetail','Token','RetrivalRefNo','SystemTraceNo','status'];
    protected $dates = ['deleted_at'];

}
