<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'image',
        'icon',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Route model binding pakai slug, bukan id.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Bikin link WhatsApp otomatis dengan pesan sesuai nama jasa.
     */
    public function whatsappLink(): string
    {
        $phone = config('services.whatsapp.number', '6282233117485');
        $message = "Halo PT Abisheka Bangun Sarana, saya ingin memesan/menanyakan layanan *{$this->name}*.";

        return 'https://wa.me/' . $phone . '?text=' . urlencode($message);
    }
}
