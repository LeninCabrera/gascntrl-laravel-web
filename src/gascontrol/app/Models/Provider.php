<?php

namespace App\Models;

use App\Models\Enums\ProviderFields;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        ProviderFields::Town,
        ProviderFields::Seller,
        ProviderFields::Address,
        ProviderFields::RucNumber,
        ProviderFields::Cellphone,
        ProviderFields::CompanyName,
        ProviderFields::LineBussiness,
        ProviderFields::DgiRegistration,
        ProviderFields::ConventionalTelephone
    ];
}
