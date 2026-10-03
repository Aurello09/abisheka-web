<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('PT. Abisheka Bangun Sarana');
            $table->string('holding_name')->default('PT Dharma Putra Airlangga');
            $table->string('holding_url')->default('https://dpacorp.id/');
            $table->text('footer_description')->nullable();
            $table->string('phone')->default('082-233-117-485');
            $table->string('whatsapp_number')->default('6282233117485');
            $table->string('email')->nullable()->default('info@abisheka.com');
            $table->text('address')->nullable();
            $table->string('operational_hours')->default('Senin – Jumat, 08.00 – 17.00 WIB');
            $table->string('instagram_url')->nullable()->default('#');
            $table->string('linkedin_url')->nullable()->default('#');
            $table->string('nib')->nullable()->default('1214000100878');
            $table->string('npwp')->nullable()->default('96.903.975.9-607.000');
            $table->string('copyright_text')->nullable()->default('PT. Abisheka Bangun Sarana. Seluruh hak cipta dilindungi.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
