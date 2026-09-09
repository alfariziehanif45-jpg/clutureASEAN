<?php

namespace App\Http\Controllers;

class IndonesiaController extends Controller
{
    private array $cities = [
        'jakarta' => [
            'name' => 'Jakarta',
            'tagline' => 'Metropolitan yang menjadi simpul budaya Nusantara.',
            'culture' => 'Budaya Betawi: ondel-ondel, lenong, tanjidor, dan kerak telor.',
            'diversity' => 'Rumah bagi masyarakat dari seluruh provinsi Indonesia.',
            'coordinates' => [-6.2088, 106.8456]
        ],
        'yogyakarta' => [
            'name' => 'Yogyakarta',
            'tagline' => 'Kota budaya, pendidikan, dan warisan Jawa.',
            'culture' => 'Keraton, batik, wayang, gamelan, dan tradisi Sekaten.',
            'diversity' => 'Perpaduan masyarakat Jawa dengan pelajar dari berbagai daerah.',
            'coordinates' => [-7.7971, 110.3708]
        ],
        'denpasar' => [
            'name' => 'Denpasar',
            'tagline' => 'Pintu gerbang kebudayaan Bali.',
            'culture' => 'Tari Bali, canang sari, gamelan, dan upacara adat Hindu Bali.',
            'diversity' => 'Tradisi Bali berpadu dengan komunitas kreatif dan pendatang.',
            'coordinates' => [-8.6705, 115.2126]
        ],
        'bandung' => [
            'name' => 'Bandung',
            'tagline' => 'Kota kreatif di dataran tinggi Priangan.',
            'culture' => 'Sunda: angklung, jaipong, sisingaan, serta kuliner khas.',
            'diversity' => 'Komunitas seni, pendidikan, dan inovasi yang sangat beragam.',
            'coordinates' => [-6.9175, 107.6191]
        ],
        'makassar' => [
            'name' => 'Makassar',
            'tagline' => 'Kota pelabuhan bersejarah di timur Indonesia.',
            'culture' => 'Budaya Bugis-Makassar, kapal pinisi, dan tari Pakarena.',
            'diversity' => 'Titik pertemuan budaya Sulawesi dan Indonesia timur.',
            'coordinates' => [-5.1477, 119.4327]
        ],
        'medan' => [
            'name' => 'Medan',
            'tagline' => 'Gerbang keragaman Sumatra Utara.',
            'culture' => 'Warisan Melayu Deli serta budaya Batak, Karo, dan Nias.',
            'diversity' => 'Kota multietnis dengan komunitas Batak, Melayu, Tionghoa, Tamil, dan banyak lainnya.',
            'coordinates' => [3.5952, 98.6722]
        ],
        'banda-aceh' => [
            'name' => 'Banda Aceh',
            'tagline' => 'Kota serambi Mekkah di ujung Sumatra.',
            'culture' => 'Tari Saman, rapa’i, dan tradisi Aceh.',
            'diversity' => 'Budaya Aceh berpadu dengan komunitas pesisir dan pendatang.',
            'coordinates' => [5.5483, 95.3238]
        ],
        'palembang' => [
            'name' => 'Palembang',
            'tagline' => 'Warisan maritim Sriwijaya.',
            'culture' => 'Songket, pempek, dan tari Gending Sriwijaya.',
            'diversity' => 'Jejak Melayu, Tionghoa, Arab, dan Nusantara.',
            'coordinates' => [-2.9909, 104.7566],
            'description' => 'Palembang adalah ibu kota Provinsi Sumatra Selatan sekaligus kota tertua di Indonesia berdasarkan Prasasti Kedukan Bukit (683 M). Kota ini dibelah oleh Sungai Musi dan terkenal dengan warisan kebudayaan Kerajaan Kedatuan Sriwijaya serta Kesultanan Palembang Darussalam.',
            'history' => 'Berdiri sejak abad ke-7 sebagai pusat Kedatuan Sriwijaya, Palembang menjadi pusat perdagangan maritim dan penyebaran agama Buddha di Asia Tenggara. Pada abad ke-17, berdiri Kesultanan Palembang Darussalam hingga era kolonialisme Belanda. Setelah kemerdekaan, Palembang terus berkembang menjadi metropolitan utama di Sumatra bagian selatan.',
            'images' => [
                'costume' => 'images/pakaian-palembang.png',
                'tourism' => 'images/wisata-palembang.jpg',
                'food' => 'images/kuliner-palembang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Palembang',
                'items' => [
                    [
                        'name' => 'Aesan Gede', 
                        'desc' => 'Pakaian adat kebesaran yang melambangkan keagungan dan kemewahan Kerajaan Sriwijaya, didominasi warna merah berhias benang emas.',
                        'image' => 'images/aesan-gede.jpg'
                    ],
                    [
                        'name' => 'Aesan Pasangkan', 
                        'desc' => 'Pakaian adat yang lebih anggun dan bersahaja, melambangkan kesucian, keanggunan, dan ketenangan.',
                        'image' => 'images/aesan-pasangkan.png'
                    ],
                    [
                        'name' => 'Baju Pakasang Prabu', 
                        'desc' => 'Busana tradisional yang sering digunakan dalam perayaan atau upacara adat masyarakat Palembang.',
                        'image' => 'images/pakasang-prabu.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Palembang',
                'items' => [
                    ['name' => 'Jembatan Ampera', 'desc' => 'Ikon kebanggaan Palembang yang membentang di atas Sungai Musi dan diresmikan pada tahun 1965.'],
                    ['name' => 'Benteng Kuto Besak (BKB)', 'desc' => 'Benteng peninggalan Kesultanan Palembang Darussalam yang menjadi pusat rekreasi warga di tepi sungai.'],
                    ['name' => 'Pulau Kemaro', 'desc' => 'Pulau legendaris di tengah Sungai Musi dengan Pagoda 9 lantai dan Klenteng Hok Tjiang Rio.']
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Palembang',
                'items' => [
                    ['name' => 'Pempek', 'desc' => 'Olahan daging ikan dan tepung sagu yang disajikan dengan kuah cuko ber cita rasa asam, manis, dan pedas.'],
                    ['name' => 'Tekwan & Model', 'desc' => 'Sajikan olahan ikan berkuah kaldu udang hangat dengan pelengkap bihun, jamur telinga, dan bengkoang.'],
                    ['name' => 'Pindang Patin', 'desc' => 'Masakan sup ikan patin segar berkuah rempah khas dengan rasa gurih, asam, dan pedas.']
                ]
            ],
            'leaders' => [
                ['period' => '1945–1950', 'name' => 'M. Isa'],
                ['period' => '1950–1952', 'name' => 'K.H. Roshan'],
                ['period' => '1952–1955', 'name' => 'R. Husein'],
                ['period' => '1955–1958', 'name' => 'M. A. Ridwan'],
                ['period' => '1958–1960', 'name' => 'R. A. A. Soeriamidjaja'],
                ['period' => '1960–1965', 'name' => 'M. Ali Amin'],
                ['period' => '1965–1966', 'name' => 'M. Thojib'],
                ['period' => '1966–1970', 'name' => 'H. A. Dahlan'],
                ['period' => '1970–1978', 'name' => 'H. M. Rasyad Nawawi'],
                ['period' => '1978–1983', 'name' => 'H. A. Bachtiar Damanik'],
                ['period' => '1983–1993', 'name' => 'H. Cholil Aziz'],
                ['period' => '1993–2003', 'name' => 'H. Husni'],
                ['period' => '2003–2013', 'name' => 'H. Eddy Santana Putra'],
                ['period' => '2013–2023', 'name' => 'H. Harnojoyo'],
                ['period' => '2023–2024', 'name' => 'Ratu Dewa (Pj)'],
                ['period' => '2024–Sekarang', 'name' => 'Ucik Nurbaiti / Pejabat Aktif']
            ]
        ],
        'surabaya' => [
            'name' => 'Surabaya',
            'tagline' => 'Kota pahlawan di Jawa Timur.',
            'culture' => 'Ludruk, remo, dan tradisi Arek.',
            'diversity' => 'Pertemuan budaya Jawa, Madura, Arab, dan Tionghoa.',
            'coordinates' => [-7.2575, 112.7521]
        ],
        'mataram' => [
            'name' => 'Mataram',
            'tagline' => 'Kota utama Pulau Lombok.',
            'culture' => 'Sasak: gendang beleq dan tenun.',
            'diversity' => 'Budaya Sasak, Bali, dan masyarakat kepulauan.',
            'coordinates' => [-8.5833, 116.1167]
        ],
        'pontianak' => [
            'name' => 'Pontianak',
            'tagline' => 'Kota khatulistiwa di Kalimantan Barat.',
            'culture' => 'Warisan Melayu dan Dayak.',
            'diversity' => 'Komunitas Dayak, Melayu, Tionghoa, dan pendatang.',
            'coordinates' => [-0.0263, 109.3425]
        ],
        'banjarmasin' => [
            'name' => 'Banjarmasin',
            'tagline' => 'Kota seribu sungai.',
            'culture' => 'Budaya Banjar dan pasar terapung.',
            'diversity' => 'Kehidupan sungai yang menyatukan banyak komunitas.',
            'coordinates' => [-3.3186, 114.5944]
        ],
        'manado' => [
            'name' => 'Manado',
            'tagline' => 'Kota pesisir Sulawesi Utara.',
            'culture' => 'Waruga, musik kolintang, dan tradisi Minahasa.',
            'diversity' => 'Minahasa, Sangihe, Bolaang Mongondow, dan banyak komunitas lain.',
            'coordinates' => [1.4748, 124.8421]
        ],
        'ambon' => [
            'name' => 'Ambon',
            'tagline' => 'Kota musik di Kepulauan Maluku.',
            'culture' => 'Tifa, totobuang, dan tradisi pela gandong.',
            'diversity' => 'Kekuatan persaudaraan lintas pulau dan agama.',
            'coordinates' => [-3.6547, 128.1906]
        ],
        'jayapura' => [
            'name' => 'Jayapura',
            'tagline' => 'Gerbang Papua di pesisir Teluk Yos Sudarso.',
            'culture' => 'Seni ukir, noken, dan ragam adat Papua.',
            'diversity' => 'Beragam suku asli Papua hidup berdampingan dengan pendatang.',
            'coordinates' => [-2.5916, 140.6690]
        ],
    ];

    private array $regions = [
        'sumatra' => ['name' => 'Sumatra', 'description' => 'Dari Aceh hingga Lampung, wilayah dengan warisan Melayu dan berbagai masyarakat adat.', 'cities' => ['banda-aceh', 'medan', 'palembang']],
        'jawa' => ['name' => 'Jawa', 'description' => 'Pusat sejarah kerajaan, pendidikan, industri, dan kota-kota metropolitan.', 'cities' => ['jakarta', 'bandung', 'yogyakarta', 'surabaya']],
        'bali-nusa-tenggara' => ['name' => 'Bali & Nusa Tenggara', 'description' => 'Kepulauan dengan budaya Hindu Bali, Sasak, dan tradisi masyarakat Nusa Tenggara.', 'cities' => ['denpasar', 'mataram']],
        'kalimantan' => ['name' => 'Kalimantan', 'description' => 'Tanah hutan hujan, sungai besar, serta keragaman Dayak dan Melayu.', 'cities' => ['pontianak', 'banjarmasin']],
        'sulawesi' => ['name' => 'Sulawesi', 'description' => 'Semenanjung maritim dengan budaya Bugis, Makassar, Minahasa, dan banyak lainnya.', 'cities' => ['makassar', 'manado']],
        'maluku-papua' => ['name' => 'Maluku & Papua', 'description' => 'Kepulauan rempah dan tanah Papua yang kaya bahasa, seni, serta tradisi.', 'cities' => ['ambon', 'jayapura']],
    ];

    public function show()
    {
        return view('countries.indonesia', ['regions' => $this->regions]);
    }

    public function region(string $region)
    {
        abort_unless(isset($this->regions[$region]), 404);
        $data = $this->regions[$region];
        $data['cities'] = collect($data['cities'])->mapWithKeys(fn ($city) => [$city => $this->cities[$city]])->all();

        return view('regions.show', ['region' => $data, 'slug' => $region]);
    }

    public function city(string $city)
    {
        abort_unless(isset($this->cities[$city]), 404);

        return view('cities.show', ['city' => $this->cities[$city], 'slug' => $city]);
    }

    public function cityCostumes(string $city)
    {
        abort_unless(isset($this->cities[$city]), 404);

        return view('cities.detail', [
            'city' => $this->cities[$city],
            'type' => 'Pakaian Adat',
            'detail' => $this->cities[$city]['costumes_detail'] ?? null,
            'image' => $this->cities[$city]['images']['costume'] ?? null
        ]);
    }

    public function cityAttractions(string $city)
    {
        abort_unless(isset($this->cities[$city]), 404);

        return view('cities.detail', [
            'city' => $this->cities[$city],
            'type' => 'Wisata',
            'detail' => $this->cities[$city]['attractions_detail'] ?? null,
            'image' => $this->cities[$city]['images']['tourism'] ?? null
        ]);
    }

    public function cityCulinary(string $city)
    {
        abort_unless(isset($this->cities[$city]), 404);

        return view('cities.detail', [
            'city' => $this->cities[$city],
            'type' => 'Kuliner',
            'detail' => $this->cities[$city]['culinary_detail'] ?? null,
            'image' => $this->cities[$city]['images']['food'] ?? null
        ]);
    }
}