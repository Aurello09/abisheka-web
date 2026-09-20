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
                'description' => 'PT Abisheka Bangun Sarana melayani pemeliharaan dan perbaikan fasilitas gedung untuk menjaga kondisi bangunan tetap baik dan layak digunakan. Pekerjaan meliputi perbaikan plafon, dinding, lantai, dan pengecatan, serta pemeliharaan instalasi listrik, saluran air, dan pendingin ruangan. Layanan dapat dilaksanakan sebagai program perawatan berkala maupun penanganan atas kerusakan yang terjadi sewaktu-waktu.',
                'image' => 'Perawatan & Perbaikan Gedung.jpg',
                'icon' => 'wrench',
            ],
            [
                'name' => 'Pengadaan Barang',
                'short_description' => 'Solusi pengadaan barang dan kebutuhan operasional perusahaan Anda.',
                'description' => 'Kami membantu pemenuhan kebutuhan barang operasional perusahaan dan instansi, antara lain alat tulis kantor, perlengkapan kebersihan, seragam kerja, serta peralatan penunjang lainnya. Setiap pengadaan dilakukan berdasarkan spesifikasi dan jumlah yang ditetapkan klien, dengan pengiriman sesuai jadwal yang disepakati. Layanan ini tersedia untuk pembelian satu kali maupun pasokan rutin.',
                'image' => 'Pengadaan Barang.jpg',
                'icon' => 'shopping-cart',
            ],
            [
                'name' => 'Manajemen SDM & Parkir',
                'short_description' => 'Pengelolaan tenaga kerja outsourcing dan sistem parkir profesional.',
                'description' => 'Kami menyediakan tenaga kerja alih daya (outsourcing) sesuai kebutuhan klien, mulai dari seleksi dan penempatan hingga pengawasan kinerja dan administrasi kepegawaian. Di samping itu, kami mengelola area perparkiran, mencakup penyediaan petugas, pengaturan lalu lintas kendaraan, dan pelaporan pendapatan parkir secara berkala.',
                'image' => 'Manajemen SDM & Parkir.jpg',
                'icon' => 'users',
            ],
            [
                'name' => 'Jasa Keamanan',
                'short_description' => 'Tenaga keamanan profesional untuk gedung, kawasan, dan acara.',
                'description' => 'Kami menyediakan tenaga pengamanan untuk gedung perkantoran, kawasan, dan penyelenggaraan acara. Tugas personel mencakup penjagaan pos, patroli, pengendalian keluar-masuk orang dan kendaraan, pemantauan CCTV, serta pelaporan kejadian. Jumlah personel dan pengaturan jadwal jaga disesuaikan dengan karakteristik dan kebutuhan masing-masing lokasi.',
                'image' => 'jasa keamanan.jpg',
                'icon' => 'shield',
            ],
            [
                'name' => 'Jasa Desain Interior & Eksterior',
                'short_description' => 'Perencanaan dan desain ruang interior maupun eksterior bangunan.',
                'description' => 'Layanan perencanaan dan perancangan ruang untuk bangunan komersial maupun hunian. Prosesnya diawali dengan konsultasi kebutuhan dan anggaran, dilanjutkan dengan penyusunan denah, gambar kerja, visualisasi tiga dimensi, serta rekomendasi material dan warna. Perancangan mencakup area dalam ruangan (interior) maupun bagian luar bangunan (eksterior), dan dapat dilanjutkan hingga tahap pelaksanaan.',
                'image' => 'Jasa Desain Interior & Eksterior.jpg',
                'icon' => 'ruler',
            ],
            [
                'name' => 'Jasa Kebersihan',
                'short_description' => 'Layanan cleaning service harian maupun berkala untuk berbagai fasilitas.',
                'description' => 'Kami menyediakan layanan kebersihan harian maupun berkala untuk perkantoran, gedung pendidikan, fasilitas kesehatan, dan area komersial. Lingkup pekerjaan meliputi pembersihan ruangan, lantai, toilet, dan kaca, pengelolaan sampah, serta pembersihan setelah pekerjaan renovasi. Petugas beserta perlengkapan kerja disediakan oleh perusahaan.',
                'image' => 'jasa kebersihan.jpg',
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
                    'image' => $service['image'] ?? null,
                    'icon' => $service['icon'],
                    'is_active' => true,
                ]
            );
        }
    }
}
