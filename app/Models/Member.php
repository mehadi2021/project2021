<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
protected  $fillable=['date',
                                  'member_code',
                                  'center',
                                  'member_name',
                                  'h_name',
                                  'mother_name',
                                  'birth',
                                  'phone_num',
                                  'h_phone'];

}
