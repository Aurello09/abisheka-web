<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class SiteSetting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static function defaults(): array
    {
        return [
            'company_name'       => 'PT. Abisheka Bangun Sarana',
            'holding_name'       => 'PT Dharma Putra Airlangga',
            'holding_url'        => 'https://dpacorp.id/',
            'footer_description' => 'PT. Abisheka Bangun Sarana siap menjadi mitra strategis Anda dalam merumuskan solusi manajemen fasilitas dan outsourcing tenaga kerja profesional guna mengoptimalkan kinerja operasional bisnis Anda.',
            'phone'              => '082-233-117-485',
            'whatsapp_number'    => '6282233117485',
            'email'              => 'info@abisheka.com',
            'address'            => "Jl. Dr. Soetomo No. 59-61\nSurabaya, 60264",
            'operational_hours'  => 'Senin – Jumat, 08.00 – 17.00 WIB',
            'instagram_url'      => '#',
            'linkedin_url'       => '#',
            'nib'                => '1214000100878',
            'npwp'               => '96.903.975.9-607.000',
            'copyright_text'     => 'PT. Abisheka Bangun Sarana. Seluruh hak cipta dilindungi.',
        ];
    }

    public static function current(): self
    {
        try {
            if (!Schema::hasTable('site_settings')) {
                return new static(static::defaults());
            }

            $setting = static::first();
            if (!$setting) {
                $setting = static::create(static::defaults());
            }

            return $setting;
        } catch (\Throwable $e) {
            return new static(static::defaults());
        }
    }

    public function getCleanWhatsappAttribute(): string
    {
        return preg_replace('/[^0-9]/', '', (string)$this->whatsapp_number);
    }

    public function getCleanPhoneAttribute(): string
    {
        return preg_replace('/[^0-9]/', '', (string)$this->phone);
    }
}
