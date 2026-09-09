<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        Country::create([
            'name' => 'Indonesia',
            'slug' => 'indonesia',
            'capital' => 'Jakarta',
            'description' => 'Indonesia adalah negara kepulauan terbesar di Asia Tenggara yang memiliki keragaman budaya, tradisi, makanan, dan destinasi wisata.',
            'language' => 'Bahasa Indonesia',
            'flag' => '🇮🇩',
            'latitude' => -2.5489,
            'longitude' => 118.0149,
        ]);

        Country::create([
            'name' => 'Malaysia',
            'slug' => 'malaysia',
            'capital' => 'Kuala Lumpur',
            'description' => 'Malaysia merupakan negara di Asia Tenggara yang memiliki keragaman budaya Melayu, Tionghoa, India, dan berbagai kelompok etnis lainnya.',
            'language' => 'Bahasa Melayu',
            'flag' => '🇲🇾',
            'latitude' => 4.2105,
            'longitude' => 101.9758,
        ]);

        Country::create([
            'name' => 'Singapore',
            'slug' => 'singapore',
            'capital' => 'Singapore',
            'description' => 'Singapore merupakan negara kota yang dikenal dengan perkembangan kota modern, keberagaman budaya, dan kulinernya.',
            'language' => 'English, Malay, Mandarin, Tamil',
            'flag' => '🇸🇬',
            'latitude' => 1.3521,
            'longitude' => 103.8198,
        ]);

        Country::create([
            'name' => 'Thailand',
            'slug' => 'thailand',
            'capital' => 'Bangkok',
            'description' => 'Thailand terkenal dengan budaya, kuil, kuliner, festival, dan berbagai destinasi wisatanya.',
            'language' => 'Thai',
            'flag' => '🇹🇭',
            'latitude' => 15.8700,
            'longitude' => 100.9925,
        ]);

        Country::create([
            'name' => 'Vietnam',
            'slug' => 'vietnam',
            'capital' => 'Hanoi',
            'description' => 'Vietnam memiliki sejarah panjang, budaya yang beragam, kuliner khas, dan berbagai destinasi wisata.',
            'language' => 'Vietnamese',
            'flag' => '🇻🇳',
            'latitude' => 14.0583,
            'longitude' => 108.2772,
        ]);

        Country::create([
            'name' => 'Philippines',
            'slug' => 'philippines',
            'capital' => 'Manila',
            'description' => 'Philippines adalah negara kepulauan dengan kekayaan budaya, tradisi, dan keindahan alam.',
            'language' => 'Filipino, English',
            'flag' => '🇵🇭',
            'latitude' => 12.8797,
            'longitude' => 121.7740,
        ]);

        Country::create([
            'name' => 'Brunei',
            'slug' => 'brunei',
            'capital' => 'Bandar Seri Begawan',
            'description' => 'Brunei merupakan negara kecil di Pulau Kalimantan yang memiliki budaya Melayu dan kekayaan alam.',
            'language' => 'Malay',
            'flag' => '🇧🇳',
            'latitude' => 4.5353,
            'longitude' => 114.7277,
        ]);

        Country::create([
            'name' => 'Cambodia',
            'slug' => 'cambodia',
            'capital' => 'Phnom Penh',
            'description' => 'Cambodia memiliki warisan budaya Khmer yang kaya serta situs sejarah dan wisata yang terkenal.',
            'language' => 'Khmer',
            'flag' => '🇰🇭',
            'latitude' => 12.5657,
            'longitude' => 104.9910,
        ]);

        Country::create([
            'name' => 'Laos',
            'slug' => 'laos',
            'capital' => 'Vientiane',
            'description' => 'Laos dikenal dengan budaya tradisional, kuil Buddha, dan keindahan alamnya.',
            'language' => 'Lao',
            'flag' => '🇱🇦',
            'latitude' => 19.8563,
            'longitude' => 102.4955,
        ]);

        Country::create([
            'name' => 'Myanmar',
            'slug' => 'myanmar',
            'capital' => 'Naypyidaw',
            'description' => 'Myanmar memiliki warisan budaya dan sejarah yang panjang serta beragam tradisi masyarakat.',
            'language' => 'Burmese',
            'flag' => '🇲🇲',
            'latitude' => 21.9162,
            'longitude' => 95.9560,
        ]);

        Country::create([
            'name' => 'Timor-Leste',
            'slug' => 'timor-leste',
            'capital' => 'Dili',
            'description' => 'Timor-Leste merupakan negara di Asia Tenggara dengan keragaman budaya dan tradisi yang unik.',
            'language' => 'Tetum, Portuguese',
            'flag' => '🇹🇱',
            'latitude' => -8.8742,
            'longitude' => 125.7275,
        ]);
    }
}