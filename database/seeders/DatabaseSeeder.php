<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    
        public function run(): void
        {
        // 1. Akun Admin Utama
        \App\Models\User::create([
        'name' => 'Admin Amikom',
        'email' => 'admin@amikom.ac.id',
        'password' => bcrypt('password'),
        'role' => 'admin',
        ]);
        
        // 2. Insert Kategori Event
        $category = \App\Models\Category::create([
        'name' => 'Seminar IT',
        'slug' => 'seminar-it',
        ]);
        $category2 = \App\Models\Category::firstOrCreate([
        'name' => 'Entertaiment',
        'slug' => 'entertaiment',
        ]);

        // tambahan kategori

        $category = \App\Models\Category::firstOrCreate([
            'name' => 'Education & Competition',
            'slug' => 'education-competition',
        ]);

        $category = \App\Models\Category::firstOrCreate([
            'name' => 'Sports & Wellness',
            'slug' => 'sports-wellness',
        ]);

        $category = \App\Models\Category::firstOrCreate([
            'name' => 'Arts & Culture',
            'slug' => 'arts-culture',
        ]);
            
            // 3. Insert Sampel Events
            \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz
            
            yang merdu.',
            
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
            ]);
            
            \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi
            
            inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
            ]);

            \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan

            teknologi masa depan bersama para ahli di bidangnya.',

            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
            ]);

            // tambahan 6 event

            \App\Models\Event::create([
                'category_id' => $category->id,
                'title' => 'PENTAS SENI TAHUNAN: GEMA MUDA',
                'description' => 'Menampilkan bakat-bakat terbaik siswa dalam tari tradisional, band, dan teater kontemporer.',
                'date' => '2026-06-15 08:00:00',
                'location' => 'Aula Serbaguna Sekolah',
                'price' => 25000,
                'stock' => 500,
                'poster_path' => 'posters/pensi-2026.png',
            ]);

            \App\Models\Event::create([
                'category_id' => $category->id,
                'title' => 'SPORTS CHAMPIONSHIP: CLASSMEET 2026',
                'description' => 'Turnamen futsal dan basket antar kelas. Junjung tinggi sportivitas dan raih piala bergilir!',
                'date' => '2026-06-20 07:30:00',
                'location' => 'Lapangan Olahraga Utama',
                'price' => 0, // Gratis untuk siswa
                'stock' => 200,
                'poster_path' => 'posters/sports-day.png',
            ]);

            \App\Models\Event::create([
                'category_id' => $category->id,
                'title' => 'WORKSHOP: STRATEGI LOLOS PTN IMPIAN',
                'description' => 'Bedah materi UTBK dan tips memilih jurusan bersama alumni yang sukses di universitas top.',
                'date' => '2026-05-10 09:00:00',
                'location' => 'Ruang Audio Visual',
                'price' => 15000,
                'stock' => 80,
                'poster_path' => 'posters/seminar-ptn.png',
            ]);

            \App\Models\Event::create([
                'category_id' => $category->id,
                'title' => 'EXPO TEKNOLOGI & SAINS SISWA',
                'description' => 'Pameran proyek inovasi, robotika, dan eksperimen sains hasil karya siswa kelas X-XII.',
                'date' => '2026-05-25 10:00:00',
                'location' => 'Laboratorium Terpadu',
                'price' => 5000,
                'stock' => 150,
                'poster_path' => 'posters/science-expo.png',
            ]);

            \App\Models\Event::create([
                'category_id' => $category->id,
                'title' => 'GEMA RAMADAN: BUKA BERSAMA & BAKSOS',
                'description' => 'Mempererat silaturahmi dengan buka puasa bersama sekaligus penyaluran donasi ke panti asuhan.',
                'date' => '2026-03-20 16:30:00',
                'location' => 'Masjid Sekolah',
                'price' => 30000, // Termasuk paket makan
                'stock' => 300,
                'poster_path' => 'posters/buka-bersama.png',
            ]);

            \App\Models\Event::create([
                'category_id' => $category->id,
                'title' => 'GRADUATION NIGHT: MEMORY TO REMEMBER',
                'description' => 'Malam perpisahan untuk siswa kelas XII. Dresscode: Batik Modern / Formal.',
                'date' => '2026-07-05 19:00:00',
                'location' => 'Grand Ballroom Hotel Mulia',
                'price' => 150000,
                'stock' => 450,
                'poster_path' => 'posters/graduation-2026.png',
            ]);
        }
}

