<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Perawatan & Perbaikan Gedung',
                'short_description' => 'Pemeliharaan rutin dan perbaikan fasilitas gedung agar tetap prima.',
                'description' => 'Kami menyediakan layanan perawatan dan perbaikan gedung secara berkala maupun on-call, mencakup instalasi listrik, plumbing, plafon, hingga struktur bangunan, dikerjakan oleh teknisi berpengalaman.',
                'icon' => 'wrench',
            ],
            [
                'name' => 'Pengadaan Barang',
                'short_description' => 'Solusi pengadaan barang dan kebutuhan operasional perusahaan Anda.',
                'description' => 'Kami membantu proses pengadaan barang mulai dari alat tulis kantor, peralatan operasional, hingga kebutuhan khusus instansi, dengan jaringan supplier terpercaya dan harga kompetitif.',
                'icon' => 'shopping-cart',
            ],
            [
                'name' => 'Manajemen SDM & Parkir',
                'short_description' => 'Pengelolaan tenaga kerja outsourcing dan sistem parkir profesional.',
                'description' => 'Layanan manajemen sumber daya manusia (outsourcing staff) dan pengelolaan area parkir secara terintegrasi, termasuk penempatan tenaga kerja terlatih dan sistem operasional yang tertib.',
                'icon' => 'users',
            ],
            [
                'name' => 'Jasa Keamanan',
                'short_description' => 'Tenaga keamanan profesional untuk gedung, kawasan, dan acara.',
                'description' => 'Menyediakan tenaga security terlatih dan bersertifikat untuk pengamanan gedung, kawasan perkantoran, maupun event, lengkap dengan sistem monitoring dan SOP keamanan yang jelas.',
                'icon' => 'shield',
            ],
            [
                'name' => 'Jasa Desain Interior & Eksterior',
                'short_description' => 'Perencanaan dan desain ruang interior maupun eksterior bangunan.',
                'description' => 'Tim desain kami membantu merancang tata ruang interior dan eksterior yang fungsional dan estetis, mulai dari konsultasi konsep hingga pelaksanaan renovasi.',
                'icon' => 'ruler',
            ],
            [
                'name' => 'Jasa Kebersihan',
                'short_description' => 'Layanan cleaning service harian maupun berkala untuk berbagai fasilitas.',
                'description' => 'Layanan kebersihan profesional untuk gedung perkantoran, fasilitas kesehatan, dan area publik, dengan tenaga terlatih dan standar operasional yang terjaga.',
                'icon' => 'sparkles',
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => Str::slug($service['name'])],
                [
                    'name' => $service['name'],
                    'short_description' => $service['short_description'],
                    'description' => $service['description'],
                    'icon' => $service['icon'],
                    'is_active' => true,
                ]
            );
        }
    }
}
