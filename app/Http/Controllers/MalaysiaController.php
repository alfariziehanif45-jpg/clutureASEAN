<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalaysiaController extends Controller
{
    private function getMalaysiaData()
    {
        return [
            'states' => [
                'selangor' => [
                    'name' => 'Selangor',
                    'description' => 'Negeri termaju dan terpadat di Malaysia dengan pusat ekonomi yang pesat.',
                    'cities' => [
                        'shah-alam' => [
                            'name' => 'Shah Alam',
                            'state' => 'Selangor',
                            'coordinates' => [3.0738, 101.5183],
                            'description' => 'Shah Alam adalah ibu negeri Selangor yang terkenal dengan tata kota yang teratur, taman-taman hijau, dan Masjid Sultan Salahuddin Abdul Aziz Shah.',
                            'diversity_culture' => 'Masyarakat Shah Alam terdiri dari mayoritas Melayu, Tionghoa, dan India. Kebudayaannya kaya akan tradisi Islam-Melayu, seni ukir, dan festival multikultural.',
                            'history' => 'Dahulu merupakan perkebunan kelapa sawit bernama Sungai Rusam, Shah Alam diresmikan sebagai ibu negeri Selangor pada tahun 1978 menggantikan Kuala Lumpur.',
                            'leaders' => [
                                ['period' => '2000 – 2002', 'name' => 'Dato\' Haji Abu Sujak Haji Mahmud'],
                                ['period' => '2002 – 2004', 'name' => 'Dato\' Haji Salamon Selamat'],
                                ['period' => '2004 – 2008', 'name' => 'Dato\' Haji Ramli Mahmud'],
                                ['period' => '2008 – 2011', 'name' => 'Dato\' Haji Mazalan Hashim'],
                                ['period' => '2011 – 2013', 'name' => 'Dato\' Haji Mohd Jaafar Mohd Atan'],
                                ['period' => '2013 – 2018', 'name' => 'Dato\' Ahmad Zaharin Mohd Saad'],
                                ['period' => '2018 – 2021', 'name' => 'Dato\' Haji Haris Kasim'],
                                ['period' => '2021 – 2023', 'name' => 'Dato\' Haji Zamani Ahmad Mansor'],
                                ['period' => '2023 – Sekarang', 'name' => 'Dato\' Haji Cheremi Tarman']
                            ],

                            // LIST PAKAIAN ADAT
                            'clothing_list' => [
                                [
                                    'title' => 'Baju Melayu Cekak Musang',
                                    'description' => 'Pakaian adat pria Melayu dengan kerah tegak berikatan lima kerabu. Dihiasi Sampin kain songket khas Selangor yang dipakai di pinggang.',
                                    'image' => 'images/malaysia/baju-melayu.jpg'
                                ],
                                [
                                    'title' => 'Baju Kurung Teluk Belanga',
                                    'description' => 'Busana tradisional wanita yang longgar dan santun, dipadukan dengan kain sarung ikatan ombak mengalun yang menjadi ciri khas keanggunan Melayu.',
                                    'image' => 'images/malaysia/baju-kurung.jpg'
                                ],
                                [
                                    'title' => 'Baju Kebaya Selangor',
                                    'description' => 'Busana kebaya panjang berkain tebal bersulam kedaerahan yang sering dipakai oleh wanita kerabat bangsawan dan acara adat resmi di Selangor.',
                                    'image' => 'images/malaysia/kebaya-selangor.jpg'
                                ]
                            ],

                            // LIST WISATA KHAS
                            'attractions_list' => [
                                [
                                    'title' => 'Masjid Sultan Salahuddin Abdul Aziz Shah',
                                    'description' => 'Dikenal sebagai Masjid Biru, merupakan masjid terbesar di Malaysia dengan kubah biru megah dan 4 menara pencakar langit bertema Islam-Melayu.',
                                    'image' => 'images/malaysia/masjid-biru.jpg'
                                ],
                                [
                                    'title' => 'Taman Tasik Shah Alam',
                                    'description' => 'Taman rekreasi tasik buatan seluas puluhan hektar yang dilengkapi wahana air, taman bunga, dan jembatan gantung nan asri.',
                                    'image' => 'images/malaysia/tasik-shah-alam.jpg'
                                ],
                                [
                                    'title' => 'i-City Shah Alam',
                                    'description' => 'Kawasan wisata teknologi lampu LED digital modern, taman tema air, dan museum lilin terbesar di negeri Selangor.',
                                    'image' => 'images/malaysia/icity.jpg'
                                ]
                            ],

                            // LIST KULINER KHAS
                            'culinary_list' => [
                                [
                                    'title' => 'Nasi Ambeng Selangor',
                                    'description' => 'Nasi gurih tradisi khas hasil akulturasi Jawa-Melayu yang disajikan di tampah bersama ayam semur, serundeng, mi goreng, dan sambal tempe.',
                                    'image' => 'images/malaysia/nasi-ambeng.jpg'
                                ],
                                [
                                    'title' => 'Lontong Klang / Selangor',
                                    'description' => 'Sajikan lontong dengan kuah lodeh santan gurih melimpah, sayur labu, telur rebus, dan kuah sambal sotong khas pantai barat.',
                                    'image' => 'images/malaysia/lontong.jpg'
                                ],
                                [
                                    'title' => 'Mee Rebus Selangor',
                                    'description' => 'Mi kuning yang disiram kuah kental gurih manis berbumbu ubi jalar, disajikan dengan tahu goreng, telur, tauge, dan perasan jeruk kunci.',
                                    'image' => 'images/malaysia/mee-rebus.jpg'
                                ]
                            ]
                        ]
                    ]
                ],

                'johor' => [
                    'name' => 'Johor',
                    'description' => 'Negeri paling selatan Semenanjung Malaysia, berbatasan langsung dengan Singapura dan menjadi salah satu pusat industri terbesar negara.',
                    'cities' => [
                        'johor-bahru' => [
                            'name' => 'Johor Bahru',
                            'state' => 'Johor',
                            'coordinates' => [1.4927, 103.7414],
                            'description' => 'Johor Bahru adalah ibu negeri Johor, kota terbesar kedua di Malaysia yang menjadi gerbang lintas batas utama menuju Singapura.',
                            'diversity_culture' => 'Masyarakat Johor Bahru terdiri dari Melayu Johor, Tionghoa, India, serta komunitas migran lintas batas karena kedekatannya dengan Singapura.',
                            'history' => 'Berkembang dari kawasan pelabuhan kecil menjadi ibu kota Kesultanan Johor pada abad ke-19 di bawah pemerintahan Sultan Abu Bakar.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Johor', 'description' => 'Baju Melayu bergaya longgar khas Johor dengan sampin songket yang lebih pendek dibanding daerah lain.', 'image' => 'images/malaysia/baju-melayu-johor.jpg'],
                                ['title' => 'Kebaya Labuh Johor', 'description' => 'Kebaya panjang bersulam benang emas yang dikenakan wanita bangsawan Johor pada upacara adat resmi.', 'image' => 'images/malaysia/kebaya-labuh-johor.jpg'],
                                ['title' => 'Baju Kurung Riau-Johor', 'description' => 'Busana wanita berpotongan lurus dipengaruhi budaya Riau-Lingga, dipakai dengan selendang tudung litup.', 'image' => 'images/malaysia/baju-kurung-johor.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Istana Bukit Serene', 'description' => 'Istana kediaman rasmi Sultan Johor dengan menara ikonik yang menjadi simbol kota Johor Bahru.', 'image' => 'images/malaysia/istana-bukit-serene.jpg'],
                                ['title' => 'Kota Iskandar', 'description' => 'Kawasan pembangunan raksasa modern Johor yang menjadi pusat pemerintahan dan bisnis baru negeri.', 'image' => 'images/malaysia/kota-iskandar.jpg'],
                                ['title' => 'Legoland Malaysia', 'description' => 'Taman hiburan keluarga bertema Lego pertama di Asia yang menjadi daya tarik wisata utama Johor.', 'image' => 'images/malaysia/legoland.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Laksa Johor', 'description' => 'Laksa unik berkuah rempah kental menyerupai pasta spageti, disajikan dengan mi beras dan sambal khas.', 'image' => 'images/malaysia/laksa-johor.jpg'],
                                ['title' => 'Mee Bandung Muar', 'description' => 'Mi kuning berkuah pekat merah rempah udang, disajikan dengan telur, tauge, dan sayuran segar.', 'image' => 'images/malaysia/mee-bandung.jpg'],
                                ['title' => 'Otak-otak Muar', 'description' => 'Adonan ikan berbumbu rempah dibungkus daun kelapa lalu dibakar, menjadi oleh-oleh khas kota Muar.', 'image' => 'images/malaysia/otak-otak.jpg']
                            ]
                        ]
                    ]
                ],

                'kedah' => [
                    'name' => 'Kedah',
                    'description' => 'Dikenal sebagai "Jelapang Padi" Malaysia karena hamparan sawah luas, sekaligus salah satu kerajaan Melayu tertua di Semenanjung.',
                    'cities' => [
                        'alor-setar' => [
                            'name' => 'Alor Setar',
                            'state' => 'Kedah',
                            'coordinates' => [6.1214, 100.3673],
                            'description' => 'Alor Setar adalah ibu negeri Kedah, pusat pemerintahan Kesultanan Kedah yang dikelilingi hamparan sawah padi luas.',
                            'diversity_culture' => 'Masyarakat mayoritas Melayu Kedah dengan komunitas Tionghoa dan India, budaya agraris yang kental mewarnai kehidupan sehari-hari.',
                            'history' => 'Menjadi pusat pemerintahan Kesultanan Kedah, salah satu kerajaan Melayu tertua yang telah berdiri sejak abad ke-2 Masehi menurut catatan sejarah.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Cekak Musang Kedah', 'description' => 'Baju Melayu berkerah tegak khas Kedah, dipadukan sampin bermotif limar tenunan lokal.', 'image' => 'images/malaysia/baju-melayu-kedah.jpg'],
                                ['title' => 'Baju Kurung Kedah', 'description' => 'Baju kurung longgar berbahan ringan yang sesuai iklim agraris, sering bermotif bunga sawah.', 'image' => 'images/malaysia/baju-kurung-kedah.jpg'],
                                ['title' => 'Baju Sikat Kedah', 'description' => 'Busana tradisional wanita Kedah berpotongan ketat di badan dengan hiasan sulaman perak.', 'image' => 'images/malaysia/baju-sikat.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Menara Alor Setar', 'description' => 'Menara telekomunikasi tertinggi di Kedah dengan dek pandang menghadap hamparan sawah kota.', 'image' => 'images/malaysia/menara-alor-setar.jpg'],
                                ['title' => 'Masjid Zahir', 'description' => 'Salah satu masjid tertua dan termegah di Malaysia dengan arsitektur kubah bergaya Moor.', 'image' => 'images/malaysia/masjid-zahir.jpg'],
                                ['title' => 'Pekan Rabu', 'description' => 'Pasar malam tradisional legendaris yang menjajakan hasil bumi dan kerajinan khas Kedah.', 'image' => 'images/malaysia/pekan-rabu.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Laksa Kedah', 'description' => 'Laksa berkuah asam pedas ikan dengan bumbu serai dan daun kesum khas utara Malaysia.', 'image' => 'images/malaysia/laksa-kedah.jpg'],
                                ['title' => 'Nasi Ulam Kedah', 'description' => 'Nasi campur sayuran mentah beraroma rempah, disajikan dengan sambal belacan dan ikan goreng.', 'image' => 'images/malaysia/nasi-ulam.jpg'],
                                ['title' => 'Gulai Siput Sedut', 'description' => 'Hidangan siput air tawar dimasak kuah santan pedas, kuliner khas warung tepi sawah Kedah.', 'image' => 'images/malaysia/gulai-siput.jpg']
                            ]
                        ]
                    ]
                ],

                'kelantan' => [
                    'name' => 'Kelantan',
                    'description' => 'Dijuluki "Serambi Mekah", negeri di pantai timur ini dikenal sebagai pusat kebudayaan dan kerajinan tradisional Melayu.',
                    'cities' => [
                        'kota-bharu' => [
                            'name' => 'Kota Bharu',
                            'state' => 'Kelantan',
                            'coordinates' => [6.1254, 102.2381],
                            'description' => 'Kota Bharu adalah ibu negeri Kelantan yang menjadi pusat kerajinan tradisional, batik, dan seni pertunjukan Melayu klasik.',
                            'diversity_culture' => 'Masyarakat mayoritas Melayu Kelantan dengan dialek dan tradisi khas seperti wayang kulit, silat, dan tarian mak yong.',
                            'history' => 'Merupakan pusat Kesultanan Kelantan lama, dikenal sebagai bandar raya budaya yang tetap mempertahankan tradisi Melayu klasik hingga kini.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Kurung Kelantan', 'description' => 'Baju kurung bercorak lebih cerah dan berani dibanding daerah lain, ciri khas gaya Kelantan.', 'image' => 'images/malaysia/baju-kurung-kelantan.jpg'],
                                ['title' => 'Baju Melayu Kelantan', 'description' => 'Baju Melayu dipadukan kain songket Kelantan bermotif pucuk rebung yang mewah.', 'image' => 'images/malaysia/baju-melayu-kelantan.jpg'],
                                ['title' => 'Tudung Lintang', 'description' => 'Kain selendang penutup kepala tradisional wanita Kelantan yang dililit dengan gaya khas.', 'image' => 'images/malaysia/tudung-lintang.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Pasar Siti Khadijah', 'description' => 'Pasar tradisional legendaris yang dikelola pedagang wanita, menjual hasil bumi dan kerajinan Kelantan.', 'image' => 'images/malaysia/pasar-siti-khadijah.jpg'],
                                ['title' => 'Istana Jahar', 'description' => 'Istana kayu bersejarah yang kini menjadi museum adat istiadat kerajaan Kelantan.', 'image' => 'images/malaysia/istana-jahar.jpg'],
                                ['title' => 'Pantai Cahaya Bulan', 'description' => 'Pantai berpasir putih dengan pohon kelapa berjajar, tempat rekreasi favorit warga Kota Bharu.', 'image' => 'images/malaysia/pantai-cahaya-bulan.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Nasi Kerabu', 'description' => 'Nasi berwarna biru dari bunga telang disajikan dengan ulam-ulaman, ikan goreng, dan sambal budu.', 'image' => 'images/malaysia/nasi-kerabu.jpg'],
                                ['title' => 'Nasi Dagang', 'description' => 'Nasi pulut dimasak santan disajikan dengan gulai ikan tongkol dan acar pekat khas pantai timur.', 'image' => 'images/malaysia/nasi-dagang.jpg'],
                                ['title' => 'Ayam Percik', 'description' => 'Ayam panggang berlumur kuah santan pedas manis, hidangan khas acara dan perayaan Kelantan.', 'image' => 'images/malaysia/ayam-percik.jpg']
                            ]
                        ]
                    ]
                ],

                'melaka' => [
                    'name' => 'Melaka',
                    'description' => 'Negeri bersejarah bekas pusat Kesultanan Melaka dan jalur perdagangan dunia, kini situs Warisan Dunia UNESCO.',
                    'cities' => [
                        'melaka-city' => [
                            'name' => 'Bandar Melaka',
                            'state' => 'Melaka',
                            'coordinates' => [2.1896, 102.2501],
                            'description' => 'Bandar Melaka adalah kota bersejarah tempat berdirinya Kesultanan Melaka, kini menjadi situs Warisan Dunia UNESCO yang kaya peninggalan kolonial.',
                            'diversity_culture' => 'Perpaduan budaya Melayu, Tionghoa Peranakan (Baba-Nyonya), India, dan Portugis menjadikan Melaka kota multikultural yang unik.',
                            'history' => 'Didirikan oleh Parameswara sekitar tahun 1400 sebagai pelabuhan dagang penting, silih berganti dikuasai Portugis, Belanda, dan Inggris.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Kebaya Nyonya Melaka', 'description' => 'Kebaya renda tipis khas Peranakan Baba-Nyonya, dipadukan kain batik sarung dan kasut manik.', 'image' => 'images/malaysia/kebaya-nyonya.jpg'],
                                ['title' => 'Baju Melayu Melaka', 'description' => 'Baju Melayu klasik dipadukan sampin songket bermotif pengaruh perdagangan lintas budaya Melaka.', 'image' => 'images/malaysia/baju-melayu-melaka.jpg'],
                                ['title' => 'Sarung Batik Melaka', 'description' => 'Kain batik bermotif khas hasil akulturasi budaya pesisir yang dipakai dalam upacara adat.', 'image' => 'images/malaysia/sarung-batik-melaka.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'A Famosa', 'description' => 'Reruntuhan benteng peninggalan Portugis abad ke-16 yang menjadi ikon sejarah kota Melaka.', 'image' => 'images/malaysia/a-famosa.jpg'],
                                ['title' => 'Jonker Street', 'description' => 'Jalan bersejarah pusat perdagangan antik dan pasar malam khas komunitas Peranakan Tionghoa.', 'image' => 'images/malaysia/jonker-street.jpg'],
                                ['title' => 'Menara Taming Sari', 'description' => 'Menara pandang berputar setinggi 80 meter yang menawarkan pemandangan panorama kota Melaka.', 'image' => 'images/malaysia/taming-sari.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Chicken Rice Ball', 'description' => 'Nasi ayam dibentuk bulatan kecil, sajian khas Peranakan yang legendaris di Melaka.', 'image' => 'images/malaysia/chicken-rice-ball.jpg'],
                                ['title' => 'Laksa Nyonya', 'description' => 'Laksa berkuah santan pedas dengan campuran udang kering dan rempah khas Peranakan.', 'image' => 'images/malaysia/laksa-nyonya.jpg'],
                                ['title' => 'Ikan Bakar Umbai', 'description' => 'Ikan segar bakar bumbu rempah khas kawasan pesisir Umbai, disantap bersama sambal pedas.', 'image' => 'images/malaysia/ikan-bakar-umbai.jpg']
                            ]
                        ]
                    ]
                ],

                'negeri-sembilan' => [
                    'name' => 'Negeri Sembilan',
                    'description' => 'Negeri dengan adat Minangkabau yang masih kuat, terbentuk dari konfederasi sembilan luak keturunan Sumatera.',
                    'cities' => [
                        'seremban' => [
                            'name' => 'Seremban',
                            'state' => 'Negeri Sembilan',
                            'coordinates' => [2.7297, 101.9381],
                            'description' => 'Seremban adalah ibu negeri Negeri Sembilan yang dikenal dengan arsitektur atap rumah gadang bergonjong khas adat Minangkabau.',
                            'diversity_culture' => 'Masyarakat keturunan Minangkabau berdampingan dengan komunitas Tionghoa dan India, adat perpatih masih dipraktikkan hingga kini.',
                            'history' => 'Dibentuk dari konfederasi sembilan luak yang dipimpin sistem adat perpatih oleh perantau Minangkabau dari Sumatera Barat.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Kurung Ekor Ikan', 'description' => 'Baju kurung berpotongan meruncing di bagian belakang menyerupai ekor ikan, khas Negeri Sembilan.', 'image' => 'images/malaysia/baju-ekor-ikan.jpg'],
                                ['title' => 'Baju Melayu Atap Gonjong', 'description' => 'Baju Melayu dipadukan tengkolok berbentuk menyerupai atap rumah gadang bergonjong.', 'image' => 'images/malaysia/baju-melayu-ns.jpg'],
                                ['title' => 'Tengkolok Negeri Sembilan', 'description' => 'Penutup kepala lelaki berbentuk lancip khas adat Minangkabau-Negeri Sembilan.', 'image' => 'images/malaysia/tengkolok-ns.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Muzium Adat Negeri Sembilan', 'description' => 'Museum berarsitektur rumah gadang yang memamerkan warisan adat perpatih Minangkabau.', 'image' => 'images/malaysia/muzium-adat.jpg'],
                                ['title' => 'Lake Garden Seremban', 'description' => 'Taman kota berdanau luas dengan jembatan gantung, favorit rekreasi keluarga di Seremban.', 'image' => 'images/malaysia/lake-garden.jpg'],
                                ['title' => 'Kampung Air Garam', 'description' => 'Perkampungan tradisional dengan rumah-rumah kayu bergaya adat Negeri Sembilan yang masih terjaga.', 'image' => 'images/malaysia/kampung-air-garam.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Rendang Negeri Sembilan', 'description' => 'Rendang pedas dan pekat menggunakan cili padi lebih banyak, ciri khas masakan Minangkabau lokal.', 'image' => 'images/malaysia/rendang-ns.jpg'],
                                ['title' => 'Masak Lemak Cili Api', 'description' => 'Hidangan santan pedas dengan cabai rawit, sering dipadukan ikan atau ayam kampung.', 'image' => 'images/malaysia/masak-lemak.jpg'],
                                ['title' => 'Daging Salai', 'description' => 'Daging yang diasapi hingga kering, diolah kembali menjadi gulai pedas khas Negeri Sembilan.', 'image' => 'images/malaysia/daging-salai.jpg']
                            ]
                        ]
                    ]
                ],

                'pahang' => [
                    'name' => 'Pahang',
                    'description' => 'Negeri terluas di Semenanjung Malaysia, kaya akan hutan hujan tropis, pegunungan, dan garis pantai timur yang panjang.',
                    'cities' => [
                        'kuantan' => [
                            'name' => 'Kuantan',
                            'state' => 'Pahang',
                            'coordinates' => [3.8077, 103.3260],
                            'description' => 'Kuantan adalah ibu negeri Pahang yang terletak di muara Sungai Kuantan, dikenal dengan pantai indah dan hasil laut segarnya.',
                            'diversity_culture' => 'Mayoritas penduduk Melayu Pahang dengan komunitas Orang Asli, Tionghoa, dan India yang hidup berdampingan.',
                            'history' => 'Menjadi pusat administrasi Kesultanan Pahang dan berkembang sebagai kota pelabuhan penting sejak era kolonial.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Pahang', 'description' => 'Baju Melayu klasik dipadukan sampin tenunan lokal khas negeri Pahang.', 'image' => 'images/malaysia/baju-melayu-pahang.jpg'],
                                ['title' => 'Baju Kurung Pahang', 'description' => 'Baju kurung longgar bermotif flora khas pesisir timur Semenanjung.', 'image' => 'images/malaysia/baju-kurung-pahang.jpg'],
                                ['title' => 'Tanjak Pahang', 'description' => 'Penutup kepala lelaki berbentuk lipatan tinggi khas bangsawan Pahang.', 'image' => 'images/malaysia/tanjak-pahang.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Pantai Teluk Cempedak', 'description' => 'Pantai populer di pusat kota Kuantan dengan pasir putih dan suasana matahari terbenam yang indah.', 'image' => 'images/malaysia/teluk-cempedak.jpg'],
                                ['title' => 'Masjid Negeri Sultan Ahmad Shah', 'description' => 'Masjid negeri megah berkubah emas yang menjadi ikon religius kota Kuantan.', 'image' => 'images/malaysia/masjid-sultan-ahmad-shah.jpg'],
                                ['title' => 'Taman Negara Pahang', 'description' => 'Salah satu hutan hujan tropis tertua di dunia, rumah bagi kanopi walk dan satwa liar Malaysia.', 'image' => 'images/malaysia/taman-negara.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Gulai Tempoyak Ikan Patin', 'description' => 'Ikan patin dimasak kuah durian fermentasi (tempoyak) pedas, hidangan khas sungai Pahang.', 'image' => 'images/malaysia/gulai-tempoyak.jpg'],
                                ['title' => 'Sata Kuantan', 'description' => 'Olahan ikan berbumbu rempah dibungkus daun pisang lalu dipanggang, jajanan khas Kuantan.', 'image' => 'images/malaysia/sata.jpg'],
                                ['title' => 'Keropok Lekor', 'description' => 'Kerupuk ikan kenyal khas pantai timur, digoreng dan disajikan dengan saus cili manis.', 'image' => 'images/malaysia/keropok-lekor.jpg']
                            ]
                        ]
                    ]
                ],

                'perak' => [
                    'name' => 'Perak',
                    'description' => 'Negeri bekas kejayaan tambang timah, kaya arsitektur kolonial dan gua-gua batu kapur yang menakjubkan.',
                    'cities' => [
                        'ipoh' => [
                            'name' => 'Ipoh',
                            'state' => 'Perak',
                            'coordinates' => [4.5975, 101.0901],
                            'description' => 'Ipoh adalah ibu negeri Perak yang dikenal sebagai "Kota Tin" berkat kejayaan penambangan timah pada abad ke-19 hingga ke-20.',
                            'diversity_culture' => 'Percampuran budaya Melayu, Tionghoa (khususnya komunitas Kantonis), dan India sangat kental terlihat dalam kuliner dan arsitektur kota.',
                            'history' => 'Berkembang pesat pada era penambangan timah, meninggalkan bangunan-bangunan bergaya kolonial Inggris yang megah di pusat kota.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Teluk Belanga Perak', 'description' => 'Baju Melayu berkerah bundar khas Perak, dipadukan sampin bermotif tenunan lembah Kinta.', 'image' => 'images/malaysia/baju-melayu-perak.jpg'],
                                ['title' => 'Baju Kurung Perak', 'description' => 'Baju kurung sederhana dengan warna-warna lembut, mencerminkan keanggunan khas negeri Perak.', 'image' => 'images/malaysia/baju-kurung-perak.jpg'],
                                ['title' => 'Cheongsam Peranakan Ipoh', 'description' => 'Busana Tionghoa modifikasi lokal yang dikenakan komunitas Peranakan kota Ipoh pada perayaan.', 'image' => 'images/malaysia/cheongsam-ipoh.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => "Kellie's Castle", 'description' => 'Istana megah tak selesai peninggalan pengusaha Skotlandia, kini destinasi wisata sejarah misterius.', 'image' => 'images/malaysia/kellies-castle.jpg'],
                                ['title' => 'Gua Tempurung', 'description' => 'Gua batu kapur raksasa dengan lorong-lorong alami yang menjadi lokasi wisata petualangan populer.', 'image' => 'images/malaysia/gua-tempurung.jpg'],
                                ['title' => 'Concubine Lane', 'description' => 'Gang bersejarah pusat kuliner dan suvenir yang ramai dengan bangunan tua bergaya Tionghoa.', 'image' => 'images/malaysia/concubine-lane.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Ipoh Hor Fun', 'description' => 'Kwetiau lembut khas Ipoh disiram kuah udang gurih, dilengkapi suwiran ayam dan tauge.', 'image' => 'images/malaysia/hor-fun.jpg'],
                                ['title' => 'Tauge Ayam Ipoh', 'description' => 'Ayam rebus lembut disajikan dengan tauge renyah khas air mata Ipoh yang jernih.', 'image' => 'images/malaysia/tauge-ayam.jpg'],
                                ['title' => 'Dim Sum Ipoh', 'description' => 'Beragam hidangan dim sum ala Kantonis yang menjadi favorit sarapan warga Ipoh.', 'image' => 'images/malaysia/dim-sum-ipoh.jpg']
                            ]
                        ]
                    ]
                ],

                'perlis' => [
                    'name' => 'Perlis',
                    'description' => 'Negeri terkecil di Malaysia, kawasan agraris subur di perbatasan Thailand dengan gua-gua batu kapur.',
                    'cities' => [
                        'kangar' => [
                            'name' => 'Kangar',
                            'state' => 'Perlis',
                            'coordinates' => [6.4414, 100.1986],
                            'description' => 'Kangar adalah ibu negeri Perlis, kota kecil yang tenang dan dikelilingi sawah padi serta perbukitan batu kapur.',
                            'diversity_culture' => 'Mayoritas Melayu dengan pengaruh budaya Thailand-Melayu yang khas karena letaknya di perbatasan negara.',
                            'history' => 'Dahulu berada di bawah pengaruh Kerajaan Thailand sebelum menjadi negeri Melayu di bawah naungan Inggris pada awal abad ke-20.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Perlis', 'description' => 'Baju Melayu sederhana bercorak khas utara, dipengaruhi tenunan perbatasan Thailand-Malaysia.', 'image' => 'images/malaysia/baju-melayu-perlis.jpg'],
                                ['title' => 'Baju Kurung Perlis', 'description' => 'Baju kurung ringan berwarna cerah, cocok dengan iklim agraris negeri Perlis.', 'image' => 'images/malaysia/baju-kurung-perlis.jpg'],
                                ['title' => 'Baju Kebaya Perlis', 'description' => 'Kebaya pendek bersulam sederhana yang dipakai wanita Perlis pada acara adat.', 'image' => 'images/malaysia/kebaya-perlis.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Gua Kelam', 'description' => 'Gua batu kapur sepanjang ratusan meter dengan jambatan kayu melintasi sungai bawah tanah.', 'image' => 'images/malaysia/gua-kelam.jpg'],
                                ['title' => 'Kompleks Sejarah Kota Kayang', 'description' => 'Kawasan makam diraja bersejarah yang menyimpan warisan Kesultanan Perlis.', 'image' => 'images/malaysia/kota-kayang.jpg'],
                                ['title' => 'Tasik Melati', 'description' => 'Danau rekreasi dengan taman burung dan wahana air, tempat wisata favorit keluarga di Kangar.', 'image' => 'images/malaysia/tasik-melati.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Laksa Kangar', 'description' => 'Laksa berkuah asam pedas ikan air tawar, versi khas negeri Perlis di ujung utara.', 'image' => 'images/malaysia/laksa-kangar.jpg'],
                                ['title' => 'Nasi Ulam Perlis', 'description' => 'Nasi campur dedaunan segar dan sambal belacan, hidangan sehari-hari masyarakat Perlis.', 'image' => 'images/malaysia/nasi-ulam-perlis.jpg'],
                                ['title' => 'Rojak Perlis', 'description' => 'Rujak buah dan sayur berkuah kacang pedas manis dengan sentuhan khas perbatasan utara.', 'image' => 'images/malaysia/rojak-perlis.jpg']
                            ]
                        ]
                    ]
                ],

                'pulau-pinang' => [
                    'name' => 'Pulau Pinang',
                    'description' => 'Negeri pulau di pantai barat laut, terkenal dengan kota Warisan Dunia UNESCO George Town dan surga kuliner jalanan.',
                    'cities' => [
                        'george-town' => [
                            'name' => 'George Town',
                            'state' => 'Pulau Pinang',
                            'coordinates' => [5.4141, 100.3288],
                            'description' => 'George Town adalah ibu negeri Pulau Pinang, kota Warisan Dunia UNESCO yang terkenal dengan seni jalanan dan kekayaan kuliner.',
                            'diversity_culture' => 'Perpaduan budaya Melayu, Tionghoa Peranakan (Baba-Nyonya), India, dan Eurasia menjadikan George Town kota paling multikultural di pantai barat.',
                            'history' => 'Didirikan oleh Francis Light pada tahun 1786 sebagai pelabuhan bebas Inggris pertama di Asia Tenggara.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Kebaya Nyonya Penang', 'description' => 'Kebaya renda halus khas Peranakan Penang, dipadukan kain batik dan kasut manik bordir.', 'image' => 'images/malaysia/kebaya-nyonya-penang.jpg'],
                                ['title' => 'Baju Melayu Penang', 'description' => 'Baju Melayu klasik dipadukan sampin bermotif pengaruh pelabuhan dagang George Town.', 'image' => 'images/malaysia/baju-melayu-penang.jpg'],
                                ['title' => 'Sari India Penang', 'description' => 'Busana sari warna-warni yang dikenakan komunitas India Tamil di kawasan Little India Penang.', 'image' => 'images/malaysia/sari-penang.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Kek Lok Si Temple', 'description' => 'Kuil Buddha terbesar di Malaysia dengan pagoda tujuh tingkat dan patung Dewi Kwan Yin raksasa.', 'image' => 'images/malaysia/kek-lok-si.jpg'],
                                ['title' => 'Penang Street Art', 'description' => 'Mural-mural dinding ikonik yang tersebar di gang-gang tua George Town, favorit wisatawan berfoto.', 'image' => 'images/malaysia/penang-street-art.jpg'],
                                ['title' => 'Penang Hill', 'description' => 'Bukit dengan kereta funikular menuju puncak, menawarkan pemandangan kota George Town dari ketinggian.', 'image' => 'images/malaysia/penang-hill.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Char Kway Teow', 'description' => 'Kwetiau goreng dengan udang, telur, dan kucai yang digoreng cepat dengan api besar khas Penang.', 'image' => 'images/malaysia/char-kway-teow.jpg'],
                                ['title' => 'Assam Laksa', 'description' => 'Laksa berkuah asam ikan tenggiri dengan taburan daun kesum dan udang kering, ikon kuliner Penang.', 'image' => 'images/malaysia/assam-laksa.jpg'],
                                ['title' => 'Nasi Kandar', 'description' => 'Nasi disiram campuran berbagai kuah kari, hidangan warisan komunitas India Muslim Penang.', 'image' => 'images/malaysia/nasi-kandar.jpg']
                            ]
                        ]
                    ]
                ],

                'sabah' => [
                    'name' => 'Sabah',
                    'description' => 'Negeri di Pulau Borneo bagian utara, dikenal sebagai "Tanah di Bawah Bayu" dengan kekayaan alam dan keragaman etnis pribumi.',
                    'cities' => [
                        'kota-kinabalu' => [
                            'name' => 'Kota Kinabalu',
                            'state' => 'Sabah',
                            'coordinates' => [5.9804, 116.0735],
                            'description' => 'Kota Kinabalu adalah ibu negeri Sabah, gerbang menuju Gunung Kinabalu dan kekayaan alam bawah laut Borneo.',
                            'diversity_culture' => 'Masyarakat multietnis terdiri dari Kadazan-Dusun, Bajau, Melayu, Tionghoa, dan berbagai suku pribumi Borneo lainnya.',
                            'history' => 'Dahulu bernama Jesselton pada era Kesultanan Borneo Utara Britania, kemudian berganti nama menjadi Kota Kinabalu pada tahun 1968.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Sinuangga Kadazan-Dusun', 'description' => 'Busana adat hitam bersulam manik dan logam perak khas suku Kadazan-Dusun, etnis terbesar Sabah.', 'image' => 'images/malaysia/sinuangga.jpg'],
                                ['title' => 'Baju Bajau Sabah', 'description' => 'Busana berwarna cerah dengan hiasan manik khas suku Bajau, komunitas laut di pesisir Sabah.', 'image' => 'images/malaysia/baju-bajau.jpg'],
                                ['title' => 'Baju Rungus', 'description' => 'Busana adat suku Rungus dengan gelang dan kalung manik berlapis-lapis yang khas.', 'image' => 'images/malaysia/baju-rungus.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Gunung Kinabalu', 'description' => 'Gunung tertinggi di Malaysia dan situs Warisan Dunia UNESCO, favorit para pendaki dari seluruh dunia.', 'image' => 'images/malaysia/gunung-kinabalu.jpg'],
                                ['title' => 'Pulau Manukan', 'description' => 'Pulau kecil bertaman laut jernih di Taman Tunku Abdul Rahman, populer untuk snorkeling.', 'image' => 'images/malaysia/pulau-manukan.jpg'],
                                ['title' => 'Tanjung Aru', 'description' => 'Pantai populer di pusat kota Kota Kinabalu, terkenal dengan pemandangan matahari terbenam.', 'image' => 'images/malaysia/tanjung-aru.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Hinava', 'description' => 'Ikan mentah segar berbumbu jeruk nipis dan cabai, hidangan khas suku Kadazan-Dusun.', 'image' => 'images/malaysia/hinava.jpg'],
                                ['title' => 'Tuaran Mee', 'description' => 'Mi goreng kering renyah khas kota Tuaran, disajikan dengan telur dan sayuran segar.', 'image' => 'images/malaysia/tuaran-mee.jpg'],
                                ['title' => 'Sup Bening Butod', 'description' => 'Sup jantung batang sagu bersama daging, kuliner tradisional khas Sabah yang unik.', 'image' => 'images/malaysia/butod.jpg']
                            ]
                        ]
                    ]
                ],

                'sarawak' => [
                    'name' => 'Sarawak',
                    'description' => 'Negeri terluas di Malaysia yang terletak di Pulau Borneo, dijuluki "Bumi Kenyalang" dengan kekayaan budaya suku Dayak.',
                    'cities' => [
                        'kuching' => [
                            'name' => 'Kuching',
                            'state' => 'Sarawak',
                            'coordinates' => [1.5535, 110.3593],
                            'description' => 'Kuching adalah ibu negeri Sarawak yang dijuluki "Kota Kucing", dikenal dengan tepi sungai yang indah dan kekayaan budaya Dayak.',
                            'diversity_culture' => 'Masyarakat multietnis terdiri dari Iban, Bidayuh, Melayu Sarawak, Tionghoa, dan berbagai kelompok Orang Ulu.',
                            'history' => 'Berkembang di bawah pemerintahan Dinasti Brooke ("Raja Putih") sejak tahun 1841 sebagai pusat pemerintahan Kerajaan Sarawak.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Iban Ngepan', 'description' => 'Busana adat perang suku Iban berhiaskan manik-manik dan bulu burung enggang yang megah.', 'image' => 'images/malaysia/ngepan.jpg'],
                                ['title' => 'Baju Bidayuh Sarawak', 'description' => 'Busana adat suku Bidayuh dengan anyaman rotan dan hiasan bulu khas dataran tinggi Borneo.', 'image' => 'images/malaysia/baju-bidayuh.jpg'],
                                ['title' => 'Baju Melayu Sarawak', 'description' => 'Baju Melayu dengan corak songket Sarawak yang dipengaruhi motif alam Borneo.', 'image' => 'images/malaysia/baju-melayu-sarawak.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Sarawak Cultural Village', 'description' => 'Perkampungan budaya hidup yang menampilkan rumah panjang berbagai suku asli Sarawak.', 'image' => 'images/malaysia/cultural-village.jpg'],
                                ['title' => 'Bako National Park', 'expression' => '', 'description' => 'Taman nasional tertua Sarawak dengan hutan hujan, tebing laut, dan bekantan liar.', 'image' => 'images/malaysia/bako.jpg'],
                                ['title' => 'Kuching Waterfront', 'description' => 'Promenade tepi Sungai Sarawak yang ramai dengan kafe dan pemandangan Istana Fort Margherita.', 'image' => 'images/malaysia/kuching-waterfront.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Kolo Mee', 'description' => 'Mi kering khas Kuching disajikan dengan potongan daging babi panggang atau ayam dan minyak bawang.', 'image' => 'images/malaysia/kolo-mee.jpg'],
                                ['title' => 'Laksa Sarawak', 'description' => 'Laksa berkuah rempah kaya sambal belacan dan santan, berbeda dari laksa daerah lain di Malaysia.', 'image' => 'images/malaysia/laksa-sarawak.jpg'],
                                ['title' => 'Kek Lapis Sarawak', 'description' => 'Kue lapis berwarna-warni dengan pola rumit, oleh-oleh khas Sarawak yang terkenal hingga mancanegara.', 'image' => 'images/malaysia/kek-lapis.jpg']
                            ]
                        ]
                    ]
                ],

                'terengganu' => [
                    'name' => 'Terengganu',
                    'description' => 'Negeri pantai timur Semenanjung dengan tradisi nelayan, kerajinan tangan, dan pulau-pulau wisata yang memukau.',
                    'cities' => [
                        'kuala-terengganu' => [
                            'name' => 'Kuala Terengganu',
                            'state' => 'Terengganu',
                            'coordinates' => [5.3117, 103.1324],
                            'description' => 'Kuala Terengganu adalah ibu negeri Terengganu, pusat kerajinan tradisional dan gerbang menuju pulau-pulau wisata pantai timur.',
                            'diversity_culture' => 'Mayoritas Melayu Terengganu dengan tradisi nelayan dan kerajinan tangan seperti songket dan tenunan yang masih dilestarikan.',
                            'history' => 'Berkembang sebagai pusat Kesultanan Terengganu dan pelabuhan dagang penting di pantai timur sejak abad ke-18.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Kurung Cekak Musang Terengganu', 'description' => 'Baju kurung dipadukan songket Terengganu bermotif pucuk rebung yang megah.', 'image' => 'images/malaysia/baju-kurung-terengganu.jpg'],
                                ['title' => 'Baju Kurung Kekwa/Limar', 'description' => 'Baju kurung berbahan kain limar tenunan tangan khas Terengganu dengan motif bunga cengkih.', 'image' => 'images/malaysia/baju-limar.jpg'],
                                ['title' => 'Songket Terengganu', 'description' => 'Kain tenun mewah bersulam benang emas, dipakai pada acara adat dan perkawinan.', 'image' => 'images/malaysia/songket-terengganu.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Pulau Redang', 'description' => 'Pulau tropis dengan pantai pasir putih dan terumbu karang jernih, surga snorkeling dan diving.', 'image' => 'images/malaysia/pulau-redang.jpg'],
                                ['title' => 'Muzium Negeri Terengganu', 'description' => 'Museum terbesar di Malaysia yang menyimpan warisan budaya dan sejarah maritim Terengganu.', 'image' => 'images/malaysia/muzium-terengganu.jpg'],
                                ['title' => 'Masjid Terapung Kuala Ibai', 'description' => 'Masjid unik yang tampak mengapung di atas muara sungai, ikon religius Kuala Terengganu.', 'image' => 'images/malaysia/masjid-terapung.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Nasi Dagang Terengganu', 'description' => 'Nasi pulut santan disajikan dengan gulai ikan tongkol pedas, sarapan khas pantai timur.', 'image' => 'images/malaysia/nasi-dagang-tganu.jpg'],
                                ['title' => 'Keropok Lekor Terengganu', 'description' => 'Kerupuk ikan kenyal asli Terengganu, digoreng garing dan dimakan dengan saus cili.', 'image' => 'images/malaysia/keropok-lekor-tganu.jpg'],
                                ['title' => 'Satar', 'description' => 'Olahan ikan berbumbu dibungkus daun pisang lalu dibakar, kudapan khas Terengganu.', 'image' => 'images/malaysia/satar.jpg']
                            ]
                        ]
                    ]
                ],

                'kuala-lumpur' => [
                    'name' => 'Wilayah Persekutuan Kuala Lumpur',
                    'description' => 'Ibu kota federal Malaysia dan pusat ekonomi utama negara, rumah bagi ikon Menara Kembar Petronas.',
                    'cities' => [
                        'kuala-lumpur' => [
                            'name' => 'Kuala Lumpur',
                            'state' => 'Wilayah Persekutuan Kuala Lumpur',
                            'coordinates' => [3.1390, 101.6869],
                            'description' => 'Kuala Lumpur adalah ibu kota federal Malaysia, metropolis modern yang menjadi pusat ekonomi, politik, dan budaya negara.',
                            'diversity_culture' => 'Kota paling multietnis di Malaysia dengan komunitas Melayu, Tionghoa, India, dan ekspatriat internasional hidup berdampingan.',
                            'history' => 'Bermula sebagai kampung pelombong timah di pertemuan Sungai Gombak dan Sungai Klang pertengahan abad ke-19, kini menjadi metropolis global.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Modern Kuala Lumpur', 'description' => 'Baju Melayu bergaya kontemporer yang dipadukan dengan aksesori modern, populer di ibu kota.', 'image' => 'images/malaysia/baju-melayu-kl.jpg'],
                                ['title' => 'Cheongsam Tionghoa KL', 'description' => 'Busana Tionghoa modern yang sering dikenakan komunitas Tionghoa KL saat perayaan Tahun Baru Imlek.', 'image' => 'images/malaysia/cheongsam-kl.jpg'],
                                ['title' => 'Sari Punjabi KL', 'description' => 'Busana India Punjabi berwarna-warni yang dikenakan komunitas India di kawasan Brickfields.', 'image' => 'images/malaysia/sari-punjabi.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Menara Kembar Petronas', 'description' => 'Gedung kembar tertinggi di dunia yang menjadi ikon paling terkenal Malaysia di panggung internasional.', 'image' => 'images/malaysia/petronas-towers.jpg'],
                                ['title' => 'Batu Caves', 'description' => 'Kompleks gua kapur dengan kuil Hindu dan patung Dewa Murugan raksasa berwarna emas.', 'image' => 'images/malaysia/batu-caves.jpg'],
                                ['title' => 'Menara KL', 'description' => 'Menara telekomunikasi dengan dek observasi yang menawarkan pemandangan 360 derajat kota Kuala Lumpur.', 'image' => 'images/malaysia/menara-kl.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Nasi Lemak KL', 'description' => 'Nasi santan pandan disajikan dengan sambal, ikan bilis, kacang, dan telur, hidangan nasional Malaysia.', 'image' => 'images/malaysia/nasi-lemak.jpg'],
                                ['title' => 'Satay Kajang', 'description' => 'Sate daging bakar berbumbu rempah khas Kajang yang kini identik dengan kuliner Kuala Lumpur.', 'image' => 'images/malaysia/satay-kajang.jpg'],
                                ['title' => 'Char Kway Teow KL', 'description' => 'Versi kwetiau goreng ala Kuala Lumpur yang populer di gerai-gerai kaki lima ibu kota.', 'image' => 'images/malaysia/ckt-kl.jpg']
                            ]
                        ]
                    ]
                ],

                'labuan' => [
                    'name' => 'Wilayah Persekutuan Labuan',
                    'description' => 'Pulau pelabuhan bebas cukai di lepas pantai Sabah yang kini menjadi pusat keuangan luar pesisir Malaysia.',
                    'cities' => [
                        'labuan-town' => [
                            'name' => 'Bandar Labuan',
                            'state' => 'Wilayah Persekutuan Labuan',
                            'coordinates' => [5.2831, 115.2308],
                            'description' => 'Bandar Labuan adalah pusat kota Wilayah Persekutuan Labuan, pulau pelabuhan bebas cukai di lepas pantai Sabah.',
                            'diversity_culture' => 'Perpaduan masyarakat Melayu, Kadazan-Dusun, dan Tionghoa hidup berdampingan di kawasan pesisir yang tenang ini.',
                            'history' => 'Diserahkan kepada Inggris pada tahun 1846 dan berkembang sebagai pelabuhan batu bara, kini menjadi pusat keuangan luar pesisir Malaysia.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Labuan', 'description' => 'Baju Melayu sederhana khas kawasan pesisir pulau, dipadukan sampin bercorak laut.', 'image' => 'images/malaysia/baju-melayu-labuan.jpg'],
                                ['title' => 'Baju Kadazan Labuan', 'description' => 'Busana adat Kadazan-Dusun yang juga dikenakan komunitas pribumi di Labuan.', 'image' => 'images/malaysia/baju-kadazan-labuan.jpg'],
                                ['title' => 'Baju Kurung Labuan', 'description' => 'Baju kurung ringan bermotif laut yang cocok dengan iklim tropis kepulauan Labuan.', 'image' => 'images/malaysia/baju-kurung-labuan.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Labuan Bird Park', 'description' => 'Taman burung tropis terbesar di Malaysia Timur dengan koleksi burung eksotik dari seluruh dunia.', 'image' => 'images/malaysia/labuan-bird-park.jpg'],
                                ['title' => 'Chimney Labuan', 'description' => 'Struktur cerobong bata bersejarah peninggalan era penambangan batu bara kolonial.', 'image' => 'images/malaysia/chimney-labuan.jpg'],
                                ['title' => 'Pantai Layang-Layangan', 'description' => 'Pantai tenang dengan pemandangan matahari terbenam, favorit rekreasi warga Labuan.', 'image' => 'images/malaysia/layang-layangan.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Sup Ikan Labuan', 'description' => 'Sup ikan segar berkuah bening rempah, hidangan khas nelayan pulau Labuan.', 'image' => 'images/malaysia/sup-ikan-labuan.jpg'],
                                ['title' => 'Ambuyat Labuan', 'description' => 'Bubur sagu kental yang disantap dengan saus asam pedas, kuliner khas Borneo pesisir.', 'image' => 'images/malaysia/ambuyat.jpg'],
                                ['title' => 'Satay Labuan', 'description' => 'Sate daging dengan bumbu kacang khas pulau, populer di warung-warung tepi laut Labuan.', 'image' => 'images/malaysia/satay-labuan.jpg']
                            ]
                        ]
                    ]
                ],

                'putrajaya' => [
                    'name' => 'Wilayah Persekutuan Putrajaya',
                    'description' => 'Pusat pemerintahan federal Malaysia dengan perencanaan kota modern, taman, dan bangunan pemerintahan megah.',
                    'cities' => [
                        'putrajaya' => [
                            'name' => 'Putrajaya',
                            'state' => 'Wilayah Persekutuan Putrajaya',
                            'coordinates' => [2.9264, 101.6964],
                            'description' => 'Putrajaya adalah pusat pemerintahan federal Malaysia, kota terencana modern dengan taman-taman dan bangunan administrasi megah.',
                            'diversity_culture' => 'Dihuni komunitas pegawai pemerintahan dari berbagai etnis Malaysia yang bekerja di kota administrasi ini.',
                            'history' => 'Dibangun sejak tahun 1995 sebagai kota pemerintahan baru untuk menggantikan fungsi administratif Kuala Lumpur.',
                            'leaders' => [],
                            'clothing_list' => [
                                ['title' => 'Baju Melayu Formal Putrajaya', 'description' => 'Baju Melayu formal yang lazim dikenakan pegawai pemerintahan pada acara resmi di Putrajaya.', 'image' => 'images/malaysia/baju-melayu-putrajaya.jpg'],
                                ['title' => 'Baju Kurung Putrajaya', 'description' => 'Baju kurung rapi bergaya formal yang dikenakan pegawai wanita di lingkungan pemerintahan.', 'image' => 'images/malaysia/baju-kurung-putrajaya.jpg'],
                                ['title' => 'Baju Batik Rasmi', 'description' => 'Kemeja batik resmi yang menjadi seragam identitas nasional di acara kenegaraan Putrajaya.', 'image' => 'images/malaysia/baju-batik-rasmi.jpg']
                            ],
                            'attractions_list' => [
                                ['title' => 'Masjid Putra', 'description' => 'Masjid merah muda ikonik di tepi Danau Putrajaya, salah satu masjid paling difoto di Malaysia.', 'image' => 'images/malaysia/masjid-putra.jpg'],
                                ['title' => 'Jambatan Seri Wawasan', 'description' => 'Jembatan kabel modern berbentuk unik yang menjadi simbol arsitektur futuristik Putrajaya.', 'image' => 'images/malaysia/seri-wawasan.jpg'],
                                ['title' => 'Taman Botani Putrajaya', 'description' => 'Taman botani luas dengan koleksi flora tropis dan kawasan rekreasi keluarga.', 'image' => 'images/malaysia/taman-botani.jpg']
                            ],
                            'culinary_list' => [
                                ['title' => 'Nasi Lemak Putrajaya', 'description' => 'Nasi lemak khas gerai-gerai populer di sekitar kompleks pemerintahan Putrajaya.', 'image' => 'images/malaysia/nasi-lemak-putrajaya.jpg'],
                                ['title' => 'Soto Putrajaya', 'description' => 'Sup soto berbumbu rempah yang menjadi hidangan sarapan favorit warga kota administrasi ini.', 'image' => 'images/malaysia/soto-putrajaya.jpg'],
                                ['title' => 'Kuih Tradisional Putrajaya', 'description' => 'Aneka kue tradisional Melayu yang dijajakan di pasar dan bazar sekitar Putrajaya.', 'image' => 'images/malaysia/kuih-putrajaya.jpg']
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    // Method Halaman Utama Malaysia
    public function index()
    {
        $data = $this->getMalaysiaData();

        return view('countries.malaysia', [
            'data' => $data
        ]);
    }

    // Method Wilayah/Region (Mengatasi error undefined method showRegion)
    public function showRegion($slug)
    {
        $data = $this->getMalaysiaData();
        
        if (!isset($data['states'][$slug])) {
            abort(404);
        }

        return view('states.malaysia_state', [
            'state' => $data['states'][$slug],
            'stateSlug' => $slug
        ]);
    }

    // Method Detail Kota
    public function showCity($slug)
    {
        $cityData = $this->findCityBySlug($slug);
        if (!$cityData) abort(404);
        return view('cities.malaysia_show', ['city' => $cityData, 'slug' => $slug]);
    }

    // Sub-halaman Pakaian Adat
    public function cityCostumes($slug)
    {
        $cityData = $this->findCityBySlug($slug);
        if (!$cityData) abort(404);
        return view('cities.malaysia_detail', [
            'city'       => $cityData,
            'title_page' => 'Macam-Macam Pakaian Adat Kota ' . $cityData['name'],
            'items'      => $cityData['clothing_list'] ?? []
        ]);
    }

    // Sub-halaman Wisata Khas
    public function cityAttractions($slug)
    {
        $cityData = $this->findCityBySlug($slug);
        if (!$cityData) abort(404);
        return view('cities.malaysia_detail', [
            'city'       => $cityData,
            'title_page' => 'Macam-Macam Wisata Khas Kota ' . $cityData['name'],
            'items'      => $cityData['attractions_list'] ?? []
        ]);
    }

    // Sub-halaman Kuliner Khas
    public function cityCulinary($slug)
    {
        $cityData = $this->findCityBySlug($slug);
        if (!$cityData) abort(404);
        return view('cities.malaysia_detail', [
            'city'       => $cityData,
            'title_page' => 'Macam-Macam Kuliner Khas Kota ' . $cityData['name'],
            'items'      => $cityData['culinary_list'] ?? []
        ]);
    }

    // Helper pencarian kota berdasarkan slug
    private function findCityBySlug($slug)
    {
        $data = $this->getMalaysiaData();
        foreach ($data['states'] as $state) {
            if (isset($state['cities'][$slug])) {
                return $state['cities'][$slug];
            }
        }
        return null;
    }
}