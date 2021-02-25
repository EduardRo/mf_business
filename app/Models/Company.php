<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // use HasFactory;
    protected $fillable = [
    'user_id',
    'company_name', 
    'company_regcom',
    'company_fiscalcode', 
    'company_capital',
    'company_city',
    'company_address',
    'company_contact',
    'company_email',
    'company_phone',
    'company_bank',
    'company_bank_account'];
}
