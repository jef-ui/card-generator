<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $fillable = [

        'code_card',
        'division_card',
        'office_card',
        'liter_card',
        'gasoline_card',
        'num_card',
        'amount_card',
        'balance_card',
        'invoice_card',
        'plate_number',
        'car_card',
        'purpose_card',
        'request_name_card',
        'received_name_card',
        'position_card',
        'date_card',

    ];
}
