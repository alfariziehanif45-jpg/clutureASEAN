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
            'coordinates' => [-6.2088, 106.8456],
            'description' => 'Jakarta adalah pusat pemerintahan, bisnis, dan kebudayaan Indonesia yang berkembang dari sebuah bandar pelabuhan kecil di muara Sungai Ciliwung menjadi salah satu metropolitan terpadat di dunia. Kota ini menjadi rumah bagi masyarakat Betawi asli sekaligus jutaan pendatang dari seluruh penjuru Nusantara.',
            'history' => 'Bermula dari pelabuhan Sunda Kelapa milik Kerajaan Sunda, kota ini direbut Fatahillah pada 22 Juni 1527 dan diganti nama menjadi Jayakarta. VOC menaklukkannya pada 1619 dan membangun Batavia sebagai pusat kolonial Hindia Belanda. Setelah kemerdekaan, namanya diubah menjadi Jakarta dan ditetapkan sebagai ibu kota Republik Indonesia.',
            'images' => [
                'costume' => 'images/pakaian-jakarta.jpg',
                'tourism' => 'images/wisata-jakarta.jpg',
                'food' => 'images/kuliner-jakarta.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Jakarta',
                'items' => [
                    [
                        'name' => 'Baju Sadariah',
                        'desc' => 'Pakaian adat pria Betawi berupa baju koko longgar berwarna polos dipadukan celana batik dan peci.',
                        'image' => 'images/sadariah.jpg'
                    ],
                    [
                        'name' => 'Kebaya Encim Betawi',
                        'desc' => 'Busana wanita Betawi hasil akulturasi budaya Tionghoa dengan bordir warna cerah dan kain batik pesisir.',
                        'image' => 'images/kebaya-encim-betawi.jpg'
                    ],
                    [
                        'name' => 'Pakaian Pengantin Rias Besar Betawi',
                        'desc' => 'Busana pengantin Betawi bergaya Tionghoa-Arab dengan siangko dan mahkota berhias manik-manik.',
                        'image' => 'images/rias-besar-betawi.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Jakarta',
                'items' => [
                    [
                        'name' => 'Monumen Nasional (Monas)',
                        'desc' => 'Tugu setinggi 132 meter yang menjadi simbol perjuangan kemerdekaan Indonesia di jantung kota.',
                        'image' => 'images/monas.jpg'
                    ],
                    [
                        'name' => 'Kota Tua Jakarta',
                        'desc' => 'Kawasan bersejarah bergaya arsitektur Belanda, pusat kota Batavia pada masa kolonial.',
                        'image' => 'images/kota-tua-jakarta.jpg'
                    ],
                    [
                        'name' => 'Taman Impian Jaya Ancol',
                        'desc' => 'Kawasan rekreasi pantai terpadu dengan taman hiburan, akuarium, dan pusat seni budaya.',
                        'image' => 'images/ancol.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Jakarta',
                'items' => [
                    [
                        'name' => 'Kerak Telor',
                        'desc' => 'Telur bakar khas Betawi dengan beras ketan, ebi, dan bawang goreng yang dimasak di atas anglo arang.',
                        'image' => 'images/kerak-telor.jpg'
                    ],
                    [
                        'name' => 'Soto Betawi',
                        'desc' => 'Soto berkuah santan dan susu dengan potongan daging serta jeroan sapi bercita rasa gurih.',
                        'image' => 'images/soto-betawi.jpg'
                    ],
                    [
                        'name' => 'Gado-Gado & Nasi Uduk',
                        'desc' => 'Sayuran rebus berbumbu kacang serta nasi gurih santan khas sarapan masyarakat Jakarta.',
                        'image' => 'images/gado-gado.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1966–1977', 'name' => 'Ali Sadikin'],
                ['period' => '1977–1982', 'name' => 'Tjokropranolo'],
                ['period' => '1982–1987', 'name' => 'R. Soeprapto'],
                ['period' => '1987–1992', 'name' => 'Wiyogo Atmodarminto'],
                ['period' => '1992–1997', 'name' => 'Soerjadi Soedirdja'],
                ['period' => '1997–2007', 'name' => 'Sutiyoso'],
                ['period' => '2007–2012', 'name' => 'Fauzi Bowo'],
                ['period' => '2012–2014', 'name' => 'Joko Widodo'],
                ['period' => '2014–2017', 'name' => 'Basuki Tjahaja Purnama'],
                ['period' => '2017', 'name' => 'Djarot Saiful Hidayat'],
                ['period' => '2017–2022', 'name' => 'Anies Baswedan'],
                ['period' => '2022–2024', 'name' => 'Heru Budi Hartono (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Pramono Anung']
            ]
        ],
        'yogyakarta' => [
            'name' => 'Yogyakarta',
            'tagline' => 'Kota budaya, pendidikan, dan warisan Jawa.',
            'culture' => 'Keraton, batik, wayang, gamelan, dan tradisi Sekaten.',
            'diversity' => 'Perpaduan masyarakat Jawa dengan pelajar dari berbagai daerah.',
            'coordinates' => [-7.7971, 110.3708],
            'description' => 'Yogyakarta adalah ibu kota Daerah Istimewa Yogyakarta yang dipimpin turun-temurun oleh Kesultanan Ngayogyakarta Hadiningrat. Dikenal sebagai Kota Pelajar dan Kota Budaya, Yogyakarta menjadi pusat pelestarian seni, tradisi Jawa, serta pendidikan tinggi di Indonesia.',
            'history' => 'Berdiri pada 13 Maret 1755 setelah Perjanjian Giyanti yang membagi Kerajaan Mataram Islam menjadi Kasunanan Surakarta dan Kasultanan Yogyakarta di bawah Sri Sultan Hamengkubuwono I. Yogyakarta sempat menjadi ibu kota Republik Indonesia pada 1946–1949 saat masa revolusi kemerdekaan.',
            'images' => [
                'costume' => 'images/pakaian-yogyakarta.jpg',
                'tourism' => 'images/wisata-yogyakarta.jpg',
                'food' => 'images/kuliner-yogyakarta.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Yogyakarta',
                'items' => [
                    [
                        'name' => 'Baju Peranakan Yogyakarta',
                        'desc' => 'Busana rakyat sehari-hari berupa kebaya sederhana dan kain jarik batik motif khas Yogyakarta.',
                        'image' => 'images/peranakan-yogyakarta.jpg'
                    ],
                    [
                        'name' => 'Baju Kesatrian',
                        'desc' => 'Pakaian adat pria bangsawan Yogyakarta berupa beskap dan blangkon yang dikenakan pada upacara resmi keraton.',
                        'image' => 'images/kesatrian-yogyakarta.jpg'
                    ],
                    [
                        'name' => 'Paes Ageng Kanigaran',
                        'desc' => 'Busana pengantin kebesaran Keraton Yogyakarta dengan riasan wajah paes dan perhiasan keemasan yang megah.',
                        'image' => 'images/paes-ageng.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Yogyakarta',
                'items' => [
                    [
                        'name' => 'Keraton Ngayogyakarta Hadiningrat',
                        'desc' => 'Istana resmi Kesultanan Yogyakarta yang masih menjadi pusat pemerintahan adat hingga kini.',
                        'image' => 'images/keraton-yogyakarta.jpg'
                    ],
                    [
                        'name' => 'Malioboro',
                        'desc' => 'Jalan legendaris pusat perbelanjaan dan kuliner yang menjadi jantung wisata Kota Yogyakarta.',
                        'image' => 'images/malioboro.jpg'
                    ],
                    [
                        'name' => 'Taman Sari',
                        'desc' => 'Bekas taman pemandian keraton dengan arsitektur perpaduan Jawa, Portugis, dan Tiongkok.',
                        'image' => 'images/taman-sari.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Yogyakarta',
                'items' => [
                    [
                        'name' => 'Gudeg',
                        'desc' => 'Masakan nangka muda yang dimasak dengan santan hingga berwarna cokelat kemerahan, disajikan dengan krecek dan ayam.',
                        'image' => 'images/gudeg.jpg'
                    ],
                    [
                        'name' => 'Bakpia Pathok',
                        'desc' => 'Kue kering berisi kacang hijau atau cokelat yang menjadi oleh-oleh khas paling populer dari Yogyakarta.',
                        'image' => 'images/bakpia.jpg'
                    ],
                    [
                        'name' => 'Sate Klathak & Angkringan',
                        'desc' => 'Sate kambing yang ditusuk jeruji besi serta jajanan malam khas warung angkringan pinggir jalan.',
                        'image' => 'images/sate-klathak.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1945–1988', 'name' => 'Sri Sultan Hamengkubuwono IX'],
                ['period' => '1988–1998', 'name' => 'Masa transisi (Wakil Gubernur/Paku Alam VIII)'],
                ['period' => '1998–Sekarang', 'name' => 'Sri Sultan Hamengkubuwono X']
            ]
        ],
        'denpasar' => [
            'name' => 'Denpasar',
            'tagline' => 'Pintu gerbang kebudayaan Bali.',
            'culture' => 'Tari Bali, canang sari, gamelan, dan upacara adat Hindu Bali.',
            'diversity' => 'Tradisi Bali berpadu dengan komunitas kreatif dan pendatang.',
            'coordinates' => [-8.6705, 115.2126],
            'description' => 'Nama Denpasar sebenarnya muncul dari taman kerajaan kecil, "den" berarti utara, "pasar" ya pasar, jadi maknanya taman di sisi utara pasar. Dari titik sekecil itu kota ini membesar jadi metropolitan terpadat di Bali sekaligus ibu kota provinsi, tempat wisatawan hilir mudik sekaligus warga lokal menggerakkan roda ekonomi pulau tiap harinya.',
            'history' => 'Puri Agung Denpasar dibangun I Gusti Ngurah Made Pemecutan pada tahun 1788, jadi pusat pemerintahan Kerajaan Badung sampai akhirnya Belanda menaklukkannya lewat Perang Puputan Badung, 20 September 1906, peristiwa berdarah yang sampai sekarang masih diperingati lewat berbagai upacara adat. Tahun 1978 wilayah ini naik status jadi kota administratif, lalu resmi berdiri sebagai Kotamadya Daerah Tingkat II melalui UU Nomor 1 Tahun 1992, diresmikan Menteri Dalam Negeri pada 27 Februari tahun yang sama.',
            'images' => [
                'costume' => 'images/pakaian-denpasar.jpg',
                'tourism' => 'images/wisata-denpasar.jpg',
                'food' => 'images/kuliner-denpasar.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Denpasar',
                'items' => [
                    [
                        'name' => 'Payas Agung',
                        'desc' => 'Busana pengantin dan upacara besar Bali yang paling mewah, dilengkapi hiasan kepala Gelungan/Ratu Agung berhias emas.',
                        'image' => 'images/payas-agung.jpg'
                    ],
                    [
                        'name' => 'Payas Madya',
                        'desc' => 'Busana adat tingkat menengah yang dikenakan dalam upacara adat dan keagamaan Bali sehari-hari.',
                        'image' => 'images/payas-madya.jpg'
                    ],
                    [
                        'name' => 'Payas Alit',
                        'desc' => 'Busana adat sederhana yang biasa dipakai warga Bali saat sembahyang ke pura.',
                        'image' => 'images/payas-alit.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Denpasar',
                'items' => [
                    [
                        'name' => 'Pantai Sanur',
                        'desc' => 'Pantai pertama yang berkembang sebagai destinasi wisata di Bali, terkenal dengan panorama matahari terbitnya.',
                        'image' => 'images/pantai-sanur.jpg'
                    ],
                    [
                        'name' => 'Monumen Bajra Sandhi',
                        'desc' => 'Monumen perjuangan rakyat Bali berbentuk lonceng raksasa yang berdiri megah di Lapangan Puputan Renon.',
                        'image' => 'images/bajra-sandhi.jpg'
                    ],
                    [
                        'name' => 'Museum Bali',
                        'desc' => 'Museum tertua di Bali yang menyimpan koleksi seni, benda pusaka, dan sejarah kebudayaan Bali.',
                        'image' => 'images/museum-bali.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Denpasar',
                'items' => [
                    [
                        'name' => 'Babi Guling',
                        'desc' => 'Olahan daging babi utuh yang dipanggang dengan bumbu base genep khas Bali hingga kulitnya renyah.',
                        'image' => 'images/babi-guling.jpg'
                    ],
                    [
                        'name' => 'Lawar',
                        'desc' => 'Campuran sayur, kelapa parut, dan daging cincang berbumbu rempah khas Bali yang kaya rasa.',
                        'image' => 'images/lawar.jpg'
                    ],
                    [
                        'name' => 'Sate Lilit',
                        'desc' => 'Sate ikan cincang berbumbu rempah yang dililitkan pada batang serai atau bambu sebelum dibakar.',
                        'image' => 'images/sate-lilit.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1978–1983', 'name' => 'I Gusti Ngurah Wardana (Wali Kota Administratif)'],
                ['period' => '1983–1987', 'name' => 'I Gusti Putu Rai Andayana (Wali Kota Administratif)'],
                ['period' => '1987–1991', 'name' => 'A.A. Ngurah Gede Agung (Wali Kota Administratif)'],
                ['period' => '1992–1997', 'name' => 'I Made Suwendha'],
                ['period' => '1997–1999', 'name' => 'Kol. Inf. Komang Arsana'],
                ['period' => '1999–2008', 'name' => 'A.A. Ngurah Puspayoga'],
                ['period' => '2008–2015', 'name' => 'Ida Bagus Rai Dharmawijaya Mantra'],
                ['period' => '2016–2021', 'name' => 'Ida Bagus Rai Dharmawijaya Mantra'],
                ['period' => '2021–Sekarang', 'name' => 'I Gusti Ngurah Jaya Negara']
            ]
        ],
        'bandung' => [
            'name' => 'Bandung',
            'tagline' => 'Kota kreatif di dataran tinggi Priangan.',
            'culture' => 'Sunda: angklung, jaipong, sisingaan, serta kuliner khas.',
            'diversity' => 'Komunitas seni, pendidikan, dan inovasi yang sangat beragam.',
            'coordinates' => [-6.9175, 107.6191],
            'description' => 'Bandung adalah ibu kota Provinsi Jawa Barat yang terletak di cekungan dataran tinggi Priangan dikelilingi pegunungan. Dijuluki Kota Kembang dan Paris van Java, Bandung dikenal sebagai pusat kreativitas, mode, pendidikan, serta lokasi bersejarah Konferensi Asia Afrika 1955.',
            'history' => 'Resmi berdiri pada 25 September 1810 setelah Gubernur Jenderal Herman Willem Daendels memerintahkan pembangunan Jalan Raya Pos (Groote Postweg) yang melintasi kawasan ini. Bandung berkembang pesat pada awal abad ke-20 sebagai kota peristirahatan elite Eropa berkat iklim sejuknya, dan pada 1955 menjadi tuan rumah Konferensi Asia Afrika yang bersejarah.',
            'images' => [
                'costume' => 'images/pakaian-bandung.jpg',
                'tourism' => 'images/wisata-bandung.jpg',
                'food' => 'images/kuliner-bandung.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Bandung',
                'items' => [
                    [
                        'name' => 'Baju Pangsi Sunda',
                        'desc' => 'Pakaian adat pria Sunda berwarna hitam sederhana yang identik dengan para petani dan pendekar silat.',
                        'image' => 'images/pangsi-sunda.jpg'
                    ],
                    [
                        'name' => 'Kebaya Sunda',
                        'desc' => 'Busana wanita Sunda yang anggun dipadukan kain batik dan siger sebagai penutup kepala.',
                        'image' => 'images/kebaya-sunda.jpg'
                    ],
                    [
                        'name' => 'Baju Mojang Jajaka',
                        'desc' => 'Busana adat muda-mudi Sunda yang biasa dikenakan dalam acara adat dan pertunjukan budaya.',
                        'image' => 'images/mojang-jajaka.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Bandung',
                'items' => [
                    [
                        'name' => 'Gedung Sate',
                        'desc' => 'Gedung ikonik peninggalan kolonial yang kini menjadi kantor Gubernur Jawa Barat.',
                        'image' => 'images/gedung-sate.jpg'
                    ],
                    [
                        'name' => 'Museum Konferensi Asia Afrika',
                        'desc' => 'Gedung Merdeka bersejarah tempat berlangsungnya Konferensi Asia Afrika 1955.',
                        'image' => 'images/museum-kaa.jpg'
                    ],
                    [
                        'name' => 'Kawah Putih',
                        'desc' => 'Danau kawah vulkanik berwarna putih kehijauan di dataran tinggi Ciwidey, sekitar Bandung Selatan.',
                        'image' => 'images/kawah-putih.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Bandung',
                'items' => [
                    [
                        'name' => 'Batagor',
                        'desc' => 'Bakso tahu goreng yang disiram bumbu kacang, kecap, dan jeruk limau khas Bandung.',
                        'image' => 'images/batagor.jpg'
                    ],
                    [
                        'name' => 'Siomay Bandung',
                        'desc' => 'Olahan ikan tenggiri kukus dengan kentang, telur, dan pare disajikan bumbu kacang.',
                        'image' => 'images/siomay-bandung.jpg'
                    ],
                    [
                        'name' => 'Surabi & Peuyeum',
                        'desc' => 'Kue tradisional dari tepung beras serta olahan tape singkong khas fermentasi ala Priangan.',
                        'image' => 'images/surabi.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1971–1976', 'name' => 'R. Otje Djundjunan'],
                ['period' => '1976–1983', 'name' => 'H. Utju Djoenaedi'],
                ['period' => '1983–1993', 'name' => 'H. Ateng Wahyudi'],
                ['period' => '1993–1998', 'name' => 'H. Wahyu Hamijaya'],
                ['period' => '1998–2003', 'name' => 'H. Aa Tarmana'],
                ['period' => '2003–2013', 'name' => 'H. Dada Rosada'],
                ['period' => '2013–2018', 'name' => 'H. Mochamad Ridwan Kamil, S.T., M.U.D.'],
                ['period' => '2018–2023', 'name' => 'H. Yana Mulyana'],
                ['period' => '2023–2024', 'name' => 'A. Koswara (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Muhammad Farhan, S.H.']
            ]
        ],
        'semarang' => [
            'name' => 'Semarang',
            'tagline' => 'Kota Atlas, pertemuan budaya Jawa dan pesisir utara.',
            'culture' => 'Perpaduan budaya Jawa dan Tionghoa: Gambang Semarang, Warak Ngendog, dan tradisi Dugderan.',
            'diversity' => 'Komunitas Jawa, Tionghoa (Peranakan), Arab, dan pendatang lintas daerah.',
            'coordinates' => [-6.9932, 110.4203],
            'description' => 'Semarang adalah ibu kota Provinsi Jawa Tengah sekaligus kota pelabuhan utama di pesisir utara Jawa. Kota ini dikenal dengan perpaduan arsitektur kolonial di kawasan Kota Lama dan akulturasi budaya Jawa-Tionghoa yang kental.',
            'history' => 'Berdiri sejak abad ke-15 sebagai kawasan pesisir yang berkembang di bawah pengaruh Kesultanan Demak. Pada masa kolonial, Belanda menjadikan Semarang pusat perdagangan penting dengan membangun kawasan Kota Lama (Little Netherland) yang masih berdiri hingga kini.',
            'images' => [
                'costume' => 'images/pakaian-semarang.jpg',
                'tourism' => 'images/wisata-semarang.jpg',
                'food' => 'images/kuliner-semarang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Semarang',
                'items' => [
                    [
                        'name' => 'Baju Jawi Jangkep',
                        'desc' => 'Pakaian adat pria Jawa Tengah berupa beskap, kain jarik, dan blangkon yang melambangkan kewibawaan.',
                        'image' => 'images/jawi-jangkep.jpg'
                    ],
                    [
                        'name' => 'Kebaya Encim',
                        'desc' => 'Busana wanita hasil akulturasi Jawa-Tionghoa dengan bordir halus dan kain batik pesisiran khas Semarang.',
                        'image' => 'images/kebaya-encim.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Semarang',
                'items' => [
                    [
                        'name' => 'Lawang Sewu',
                        'desc' => 'Gedung bersejarah peninggalan Belanda dengan ratusan pintu dan jendela yang menjadi ikon kota.',
                        'image' => 'images/lawang-sewu.jpg'
                    ],
                    [
                        'name' => 'Kota Lama Semarang',
                        'desc' => 'Kawasan bergaya arsitektur Eropa klasik yang dijuluki Little Netherland.',
                        'image' => 'images/kota-lama-semarang.jpg'
                    ],
                    [
                        'name' => 'Kelenteng Sam Poo Kong',
                        'desc' => 'Kelenteng bersejarah peninggalan pelayaran Laksamana Cheng Ho di Nusantara.',
                        'image' => 'images/sam-poo-kong.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Semarang',
                'items' => [
                    [
                        'name' => 'Lumpia Semarang',
                        'desc' => 'Lumpia berisi rebung, telur, dan udang atau ayam, hasil akulturasi kuliner Jawa dan Tionghoa.',
                        'image' => 'images/lumpia-semarang.jpg'
                    ],
                    [
                        'name' => 'Tahu Gimbal',
                        'desc' => 'Tahu goreng dengan lontong, kol, dan udang goreng tepung (gimbal) disiram bumbu kacang.',
                        'image' => 'images/tahu-gimbal.jpg'
                    ],
                    [
                        'name' => 'Wingko Babat & Bandeng Presto',
                        'desc' => 'Kue kelapa manis khas oleh-oleh serta olahan ikan bandeng duri lunak yang menjadi ciri khas kota.',
                        'image' => 'images/wingko-babat.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2000–2010', 'name' => 'H. Sukawi Sutarip, S.H., S.E.'],
                ['period' => '2010–2013', 'name' => 'H. Soemarmo HS'],
                ['period' => '2013–2021', 'name' => 'Hendrar Prihadi, S.E., M.M.'],
                ['period' => '2021–2024', 'name' => 'H. Hevearita Gunaryanti Rahayu'],
                ['period' => '2024–Sekarang', 'name' => 'Agustina Wilujeng Pramestuti']
            ]
        ],
        'serang' => [
            'name' => 'Serang',
            'tagline' => 'Kota Madani di ujung barat Pulau Jawa.',
            'culture' => 'Warisan Kesultanan Banten: debus, panjang mulud, dan seni beladiri Bandrong.',
            'diversity' => 'Masyarakat Sunda Banten berpadu dengan komunitas pesisir dan pendatang.',
            'coordinates' => [-6.1149, 106.1503],
            'description' => 'Serang adalah ibu kota Provinsi Banten yang menyimpan jejak kejayaan Kesultanan Banten sebagai bandar niaga penting jalur rempah pada masa lampau.',
            'history' => 'Berkembang sejak abad ke-16 sebagai pusat Kesultanan Banten yang menguasai jalur perdagangan Selat Sunda. Kota ini terus tumbuh dan resmi menjadi ibu kota Provinsi Banten setelah pemekaran dari Jawa Barat pada tahun 2000.',
            'images' => [
                'costume' => 'images/pakaian-serang.jpg',
                'tourism' => 'images/wisata-serang.jpg',
                'food' => 'images/kuliner-serang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Serang',
                'items' => [
                    [
                        'name' => 'Pangsi',
                        'desc' => 'Pakaian adat pria Banten berwarna hitam sederhana yang melambangkan kesederhanaan dan kekuatan pendekar.',
                        'image' => 'images/pangsi-banten.jpg'
                    ],
                    [
                        'name' => 'Baju Batik Banten',
                        'desc' => 'Busana bermotif batik khas Banten dengan corak yang terinspirasi peninggalan Kesultanan Banten.',
                        'image' => 'images/batik-banten.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Serang',
                'items' => [
                    [
                        'name' => 'Kesultanan Banten Lama',
                        'desc' => 'Kompleks situs bersejarah peninggalan Kesultanan Banten termasuk Masjid Agung Banten.',
                        'image' => 'images/banten-lama.jpg'
                    ],
                    [
                        'name' => 'Benteng Speelwijk',
                        'desc' => 'Benteng peninggalan VOC yang dahulu menjadi pertahanan pesisir kawasan Banten Lama.',
                        'image' => 'images/benteng-speelwijk.jpg'
                    ],
                    [
                        'name' => 'Vihara Avalokitesvara',
                        'desc' => 'Salah satu vihara tertua di Indonesia yang berdiri berdampingan dengan situs Banten Lama.',
                        'image' => 'images/vihara-avalokitesvara.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Serang',
                'items' => [
                    [
                        'name' => 'Sate Bandeng',
                        'desc' => 'Olahan daging ikan bandeng tanpa duri yang dibumbui rempah dan dipanggang di atas bara.',
                        'image' => 'images/sate-bandeng.jpg'
                    ],
                    [
                        'name' => 'Rabeg',
                        'desc' => 'Gulai daging kambing khas Banten dengan cita rasa rempah pekat, konon terinspirasi masakan Timur Tengah.',
                        'image' => 'images/rabeg.jpg'
                    ],
                    [
                        'name' => 'Nasi Sumsum & Emping Menes',
                        'desc' => 'Nasi gurih berlauk sumsum sapi serta emping melinjo renyah khas oleh-oleh Serang.',
                        'image' => 'images/nasi-sumsum.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2007–2008', 'name' => 'H. Bunyamin (Pj)'],
                ['period' => '2008–2013', 'name' => 'H. Bunyamin, S.Sos., M.Si.'],
                ['period' => '2013–2018', 'name' => 'H. Tb. Haerul Jaman, S.E.'],
                ['period' => '2018–2023', 'name' => 'H. Syafrudin, S.Sos., M.Si.'],
                ['period' => '2023–Sekarang', 'name' => 'Yedi Rahmat, S.Sos., M.Si. (Pj)']
            ]
        ],
        'makassar' => [
            'name' => 'Makassar',
            'tagline' => 'Kota pelabuhan bersejarah di timur Indonesia.',
            'culture' => 'Budaya Bugis-Makassar, kapal pinisi, dan tari Pakarena.',
            'diversity' => 'Titik pertemuan budaya Sulawesi dan Indonesia timur.',
            'coordinates' => [-5.1477, 119.4327],
            'description' => 'Makassar adalah ibu kota Provinsi Sulawesi Selatan sekaligus kota metropolitan terbesar di kawasan Indonesia Timur. Pernah dikenal dengan nama Ujung Pandang antara 1971–1999, kota pesisir ini tumbuh dari sebuah bandar niaga kecil di muara Sungai Tallo menjadi salah satu bandar dagang paling ramai di dunia pada abad ke-17, sekaligus titik temu budaya Bugis, Makassar, dan pendatang dari seluruh Indonesia timur.',
            'history' => 'Awal kota dan bandar Makassar berada di muara Sungai Tallo dengan pelabuhan niaga kecil pada penghujung abad ke-15, yang mulanya berada di bawah pengaruh Kerajaan Siang sebelum Kerajaan Tallo bersatu dengan Kerajaan Gowa pada pertengahan abad ke-16. Islam masuk secara resmi setelah ulama Minangkabau, Dato ri Bandang, mengislamkan Raja Gowa Sultan Alauddin dan Raja Tallo pada 1605, hingga digelar shalat Jumat pertama di Masjid Tallo pada 9 November 1607, tanggal yang sejak tahun 2000 ditetapkan sebagai Hari Jadi Kota Makassar. Berkat jaringan dagang yang berpindah dari Malaka setelah direbut Portugis, Makassar tumbuh pesat menjadi bandar niaga dunia berpenduduk lebih dari 100.000 jiwa pada abad ke-17. VOC menguasai kota ini setelah Perang Makassar dan Perjanjian Bongaya 1667, sebelum akhirnya menjadi kota otonom di masa kolonial pada 1918. Sempat berganti nama menjadi Ujung Pandang pada 1971, kota ini kembali memakai nama Makassar sejak 13 Oktober 1999 berdasarkan Peraturan Pemerintah Nomor 86 Tahun 1999.',
            'images' => [
                'costume' => 'images/pakaian-makassar.jpg',
                'tourism' => 'images/wisata-makassar.jpg',
                'food' => 'images/kuliner-makassar.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Makassar',
                'items' => [
                    [
                        'name' => 'Baju Bodo',
                        'desc' => 'Busana wanita Bugis-Makassar berlengan pendek dan longgar dari kain tipis, dipadukan sarung sutra dengan warna melambangkan status sosial pemakainya.',
                        'image' => 'images/baju-bodo.jpg'
                    ],
                    [
                        'name' => 'Jas Tutu',
                        'desc' => 'Pakaian adat pria Makassar berupa jas tertutup berkerah tinggi yang dipadukan sarung sutra dan songkok recca sebagai penutup kepala.',
                        'image' => 'images/jas-tutu-makassar.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Bodo Tope',
                        'desc' => 'Busana pengantin kebesaran Makassar berhias bosara emas dan mahkota yang melambangkan kemakmuran keluarga bangsawan bandar niaga.',
                        'image' => 'images/pengantin-makassar.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Makassar',
                'items' => [
                    [
                        'name' => 'Pantai Losari',
                        'desc' => 'Pantai ikonik di pusat kota yang ramai dikunjungi warga untuk menikmati kuliner dan panorama matahari terbenam di Selat Makassar.',
                        'image' => 'images/pantai-losari.jpg'
                    ],
                    [
                        'name' => 'Benteng Fort Rotterdam',
                        'desc' => 'Benteng peninggalan Kerajaan Gowa yang direbut VOC, kini menjadi museum La Galigo penyimpan sejarah Sulawesi Selatan.',
                        'image' => 'images/fort-rotterdam.jpg'
                    ],
                    [
                        'name' => 'Trans Studio Makassar',
                        'desc' => 'Taman hiburan indoor terbesar di Indonesia yang menjadi destinasi rekreasi keluarga favorit di kawasan timur.',
                        'image' => 'images/trans-studio-makassar.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Makassar',
                'items' => [
                    [
                        'name' => 'Coto Makassar',
                        'desc' => 'Sup jeroan dan daging sapi berkuah kacang tanah yang kaya rempah, disajikan bersama buras atau ketupat.',
                        'image' => 'images/coto-makassar.jpg'
                    ],
                    [
                        'name' => 'Sop Konro',
                        'desc' => 'Sup iga sapi berkuah hitam pekat dari kluwek dan rempah khas Bugis-Makassar yang gurih dan kaya rasa.',
                        'image' => 'images/sop-konro.jpg'
                    ],
                    [
                        'name' => 'Pisang Epe & Es Pisang Ijo',
                        'desc' => 'Pisang bakar yang dipipihkan dengan saus gula merah serta pisang berbalut adonan hijau bersantan khas Makassar.',
                        'image' => 'images/pisang-epe.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1945', 'name' => 'Nadjamuddin'],
                ['period' => '1951–1952', 'name' => 'Sampara Daeng Lili'],
                ['period' => '1952–1957', 'name' => 'Achmad Dara Syachruddin'],
                ['period' => '1957–1959', 'name' => 'M. Junus Daeng Mile'],
                ['period' => '1959–1962', 'name' => 'Latif Daeng Massikki'],
                ['period' => '1962–1965', 'name' => 'H. Aroeppala'],
                ['period' => '1965–1978', 'name' => 'Kol. H. M. Daeng Patompo'],
                ['period' => '1978–1983', 'name' => 'Kol. Abustam'],
                ['period' => '1983–1988', 'name' => 'Kol. Jancy Raib'],
                ['period' => '1988–1993', 'name' => 'Kol. Suwahyo'],
                ['period' => '1994–1999', 'name' => 'H.A. Malik B. Masry, S.E., M.Si.'],
                ['period' => '1999–2004', 'name' => 'Drs. H.B. Amiruddin Maula, S.H., M.Si.'],
                ['period' => '2004–2008', 'name' => 'Ir. H. Ilham Arief Sirajuddin, M.M.'],
                ['period' => '2008–2009', 'name' => 'Ir. H. Andi Herry Iskandar, M.Si. (Pj)'],
                ['period' => '2009–2014', 'name' => 'Ir. H. Ilham Arief Sirajuddin, M.M.'],
                ['period' => '2014–2021', 'name' => 'Ir. H. Mohammad Ramdhan Pomanto'],
                ['period' => '2021–2024', 'name' => 'Ir. H. Mohammad Ramdhan Pomanto'],
                ['period' => '2025–Sekarang', 'name' => 'Munafri Arifuddin']
            ]
        ],
        'medan' => [
            'name' => 'Medan',
            'tagline' => 'Gerbang keragaman Sumatra Utara.',
            'culture' => 'Warisan Melayu Deli serta budaya Batak, Karo, Nias, dan Tionghoa.',
            'diversity' => 'Kota multietnis harmoni dengan komunitas Batak, Melayu, Tionghoa, Jawa, India (Tamil), Minang, dan Banjar.',
            'coordinates' => [3.5952, 98.6722],
            'description' => 'Medan adalah ibu kota Provinsi Sumatra Utara dan merupakan kota terbesar di luar Pulau Jawa. Kota ini tumbuh pesat dari sebuah perkampungan di pertemuan Sungai Deli dan Sungai Babura hingga menjadi pusat perdagangan dan bisnis utama di kawasan barat Indonesia.',
            'history' => 'Didirikan oleh Guru Patimpus Sembiring Pelawi pada 1 Juli 1590 di pertemuan Sungai Deli dan Babura. Medan berkembang pesat pada abad ke-19 setelah Jacobus Nienhuys membuka perkebunan tembakau (Tembakau Deli). Kesultanan Deli yang berpusat di Medan menjadikan kota ini sebagai ibu kota ekonomi, perdagangan, serta pusat pemerintahan Melayu Deli.',
            'images' => [
                'costume' => 'images/pakaian-medan.jpg',
                'tourism' => 'images/wisata-medan.jpg',
                'food' => 'images/kuliner-medan.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Medan',
                'items' => [
                    [
                        'name' => 'Baju Adat Melayu Deli',
                        'desc' => 'Pakaian tradisional pria berupa Teluk Belanga / Baju Cekak Musang yang dilengkapi kain samping songket dan tanjak, melambangkan keanggunan budaya suku Melayu asli Medan.',
                        'image' => 'images/melayu-deli.jpg'
                    ],
                    [
                        'name' => 'Pakaian Adat Batak Karo (Uuis Gara)',
                        'desc' => 'Busana tradisional Karo yang didominasi kain uuis gara berhiaskan warna merah dan keemasan, sering dipakai dalam acara adat dan pesta budaya.',
                        'image' => 'images/uuis-gara.jpg'
                    ],
                    [
                        'name' => 'Pakaian Adat Batak Toba (Ulos)',
                        'desc' => 'Pakaian adat menggunakan perpaduan kain tenun Ulos khas Toba yang melambangkan kehangatan, berkah, dan ikatan kekeluargaan.',
                        'image' => 'images/ulos-toba.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Medan',
                'items' => [
                    [
                        'name' => 'Istana Maimun',
                        'desc' => 'Istana megah peninggalan Kesultanan Deli yang didesain dengan arsitektur perpaduan Melayu, Islam, Spanyol, India, dan Italia.',
                        'image' => 'images/istana-maimun.jpg'
                    ],
                    [
                        'name' => 'Masjid Raya Al-Mashun (Masjid Raya Medan)',
                        'desc' => 'Masjid bersejarah yang dibangun tahun 1906 dengan gaya arsitektur khas Timur Tengah, India, dan Spanyol.',
                        'image' => 'images/masjid-raya-medan.jpg'
                    ],
                    [
                        'name' => 'Maha Vihara Maitreya',
                        'desc' => 'Salah satu vihara terbesar di Asia Tenggara yang terletak di kompleks Cemara Asri, melambangkan kedamaian dan keharmonisan.',
                        'image' => 'images/vihara-maitreya.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Medan',
                'items' => [
                    [
                        'name' => 'Bika Ambon',
                        'desc' => 'Kue khas bercita rasa manis, kenyal, dan berongga yang dibuat dari bahan tepung sagu, telur, gula, serta santan.',
                        'image' => 'images/bika-ambon.jpg'
                    ],
                    [
                        'name' => 'Soto Medan',
                        'desc' => 'Soto berkuah santan gurih berwarna kuning kecokelatan dengan isian daging sapi, ayam, atau jeroan yang disajikan rempah kaya rasa.',
                        'image' => 'images/soto-medan.jpg'
                    ],
                    [
                        'name' => 'Mie Gomak & Lontong Medan',
                        'desc' => 'Mie pedas dengan bumbu rempah andaliman khas Batak serta Lontong Medan dengan tauco, rempeyek, dan keripik kentang pedas.',
                        'image' => 'images/lontong-medan.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1918–1931', 'name' => 'D. Baron Mackay'],
                ['period' => '1931–1935', 'name' => 'J.M. Wesselink'],
                ['period' => '1935–1942', 'name' => 'Mr. C.E.E. Kuntze'],
                ['period' => '1942–1945', 'name' => 'N. Tanaka (Jaman Pendudukan Jepang)'],
                ['period' => '1945–1947', 'name' => 'Luat Siregar'],
                ['period' => '1947–1952', 'name' => 'M. Yusuf'],
                ['period' => '1952–1954', 'name' => 'Djaidin Purba'],
                ['period' => '1954–1958', 'name' => 'Kani Sugondo'],
                ['period' => '1958–1961', 'name' => 'Sjoerkani'],
                ['period' => '1961–1966', 'name' => 'A. M. Amin'],
                ['period' => '1966–1974', 'name' => 'Sukarrahmat'],
                ['period' => '1974–1980', 'name' => 'A. S. Rangkuti'],
                ['period' => '1980–1990', 'name' => 'Agus Salim'],
                ['period' => '1990–2000', 'name' => 'Bachtiar Djafar'],
                ['period' => '2000–2008', 'name' => 'Abdillah'],
                ['period' => '2008–2010', 'name' => 'Rahudman Harahap (Pj) / Syamsul Arifin'],
                ['period' => '2010–2013', 'name' => 'Rahudman Harahap'],
                ['period' => '2013–2015', 'name' => 'Dzulmi Eldin'],
                ['period' => '2016–2019', 'name' => 'Dzulmi Eldin'],
                ['period' => '2019–2021', 'name' => 'Akhyar Nasution (Plt/Definitif)'],
                ['period' => '2021–Sekarang', 'name' => 'Muhammad Bobby Afif Nasution']
            ]
        ],
        'banda-aceh' => [
            'name' => 'Banda Aceh',
            'tagline' => 'Kota serambi Mekkah di ujung Sumatra.',
            'culture' => 'Tari Saman, rapa’i, dan tradisi Aceh.',
            'diversity' => 'Budaya Aceh berpadu dengan komunitas pesisir dan pendatang.',
            'coordinates' => [5.5483, 95.3238],
            'description' => 'Banda Aceh adalah ibu kota Provinsi Aceh sekaligus kota Islam tertua di Asia Tenggara. Berdiri sebagai pusat peradaban dan gerbang masuk penyebaran agama Islam di Nusantara, kota ini dikenal dengan julukan Kota Serambi Mekkah. Banda Aceh membentang di pesisir utara Pulau Sumatra dan pernah menjadi pusat kekuatan maritim Kesultanan Aceh Darussalam.',
            'history' => 'Didirikan pada 22 April 1205 (1 Ramadhan 601 H) oleh Sultan Johan Syah sebagai ibu kota Kesultanan Aceh Darussalam. Pada era kejayaannya di bawah Sultan Iskandar Muda, kota ini berkembang menjadi pusat perdagangan maritim internasional dan pendidikan Islam. Pada era kolonial Belanda, namanya sempat diubah menjadi Kutaraja sebelum akhirnya kembali dinamai Banda Aceh pada tahun 1962. Pada 26 Desember 2004, Banda Aceh diterjang bencana gempa dan tsunami besar, namun berhasil bangkit kembali hingga saat ini.',
            'images' => [
                'costume' => 'images/pakaian-banda-aceh.jpg',
                'tourism' => 'images/wisata-banda-aceh.jpg',
                'food' => 'images/kuliner-banda-aceh.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Banda Aceh',
                'items' => [
                    [
                        'name' => 'Baju Linto Baro',
                        'desc' => 'Pakaian adat pria Aceh terdiri dari Meukasah, celana Sileuweu, kain songket Ie Seumantok, dan penutup kepala Kupiah Meukeutop.',
                        'image' => 'images/linto-baro.jpg'
                    ],
                    [
                        'name' => 'Baju Daro Baro',
                        'desc' => 'Busana wanita Aceh berupa baju Kurung lengan panjang, celana Cekak Musang, perhiasan emas, serta sarung songket khas.',
                        'image' => 'images/daro-baro.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Banda Aceh',
                'items' => [
                    [
                        'name' => 'Masjid Raya Baiturrahman',
                        'desc' => 'Masjid ikonik dan bersejarah yang menjadi simbol kebanggaan dan ketangguhan masyarakat Aceh.',
                        'image' => 'images/masjid-baiturrahman.jpg'
                    ],
                    [
                        'name' => 'Museum Tsunami Aceh',
                        'desc' => 'Museum monumen untuk mengenang bencana tsunami 2004 sekaligus pusat edukasi kebencanaan.',
                        'image' => 'images/museum-tsunami.jpg'
                    ],
                    [
                        'name' => 'PLTD Apung',
                        'desc' => 'Kapal pembangkit listrik seberat 2.600 ton yang terseret gelombang tsunami sejauh 5 km ke daratan.',
                        'image' => 'images/pltd-apung.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Banda Aceh',
                'items' => [
                    [
                        'name' => 'Mie Aceh',
                        'desc' => 'Mie tebal dengan kuah kari gurih pedas kaya rempah disajikan dengan daging sapi, kambing, atau kepiting.',
                        'image' => 'images/mie-aceh.jpg'
                    ],
                    [
                        'name' => 'Ayam Tangkap',
                        'desc' => 'Ayam goreng khas yang digoreng bersama daun temurui (daun kari) dan cabai hijau renyah.',
                        'image' => 'images/ayam-tangkap.jpg'
                    ],
                    [
                        'name' => 'Kuah Rayeuk / Kuah Beulangong',
                        'desc' => 'Gulai daging sapi atau kambing yang dimasak bersama nangka muda dalam kuali besar khas perayaan Aceh.',
                        'image' => 'images/kuah-beulangong.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1957–1959', 'name' => 'Teuku Ali Basyah'],
                ['period' => '1959–1967', 'name' => 'Teuku Oesman Yacoub'],
                ['period' => '1967–1968', 'name' => 'T. Mohd. Syah'],
                ['period' => '1968–1970', 'name' => 'T. Ibrahim'],
                ['period' => '1970–1973', 'name' => 'Teuku Oesman Yacoub'],
                ['period' => '1973–1978', 'name' => 'Drs. Zein Hasjmy'],
                ['period' => '1978–1983', 'name' => 'Drs. Djakfar Ahmad'],
                ['period' => '1983–1993', 'name' => 'Drs. Baharuddin Yahya'],
                ['period' => '1993–1998', 'name' => 'Drs. Said Hussain Al-Haj'],
                ['period' => '1998–1998', 'name' => 'Drs. Muhammad Y'],
                ['period' => '1998–2003', 'name' => 'Drs. Zulkarnain'],
                ['period' => '2003–2004', 'name' => 'Drs. H. Syarifuddin Latief (Pj)'],
                ['period' => '2005–2006', 'name' => 'Ir. Mawardy Nurdin, M.Eng, Sc (Pj)'],
                ['period' => '2006–2007', 'name' => 'Drs. Razali Yussuf (Pj)'],
                ['period' => '2007–2012', 'name' => 'Ir. Mawardy Nurdin, M.Eng, Sc'],
                ['period' => '2012–2012', 'name' => 'Drs. T. Saifuddin TA, M.Si (Pj)'],
                ['period' => '2012–2014', 'name' => 'Ir. Mawardy Nurdin, M.Eng, Sc'],
                ['period' => '2014–2017', 'name' => 'Hj. Illiza Sa\'aduddin Djamal, S.E.'],
                ['period' => '2017–2022', 'name' => 'H. Aminullah Usman, S.E., Ak., M.M.'],
                ['period' => '2022–2023', 'name' => 'H. Bakri Siddiq, S.E., M.Si. (Pj)'],
                ['period' => '2023–2024', 'name' => 'Amiruddin, S.E., M.Si. (Pj)'],
                ['period' => '2024–2025', 'name' => 'Almuniza Kamal, S.STP., M.Si. (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Hj. Illiza Sa\'aduddin Djamal, S.E.']
            ]
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
                    [
                        'name' => 'Jembatan Ampera', 
                        'desc' => 'Ikon kebanggaan Palembang yang membentang di atas Sungai Musi dan diresmikan pada tahun 1965.',
                        'image' => 'images/jembatan-ampera.jpg'
                    ],
                    [
                        'name' => 'Benteng Kuto Besak (BKB)', 
                        'desc' => 'Benteng peninggalan Kesultanan Palembang Darussalam yang menjadi pusat rekreasi warga di tepi sungai.',
                        'image' => 'images/benteng-kuto-besak.jpg'
                    ],
                    [
                        'name' => 'Pulau Kemaro', 
                        'desc' => 'Pulau legendaris di tengah Sungai Musi dengan Pagoda 9 lantai dan Klenteng Hok Tjiang Rio.',
                        'image' => 'images/pulau-kemaro.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Palembang',
                'items' => [
                    [
                        'name' => 'Pempek', 
                        'desc' => 'Olahan daging ikan dan tepung sagu yang disajikan dengan kuah cuko ber cita rasa asam, manis, dan pedas.',
                        'image' => 'images/pempek.jpg'
                    ],
                    [
                        'name' => 'Tekwan & Model', 
                        'desc' => 'Sajikan olahan ikan berkuah kaldu udang hangat dengan pelengkap bihun, jamur telinga, dan bengkoang.',
                        'image' => 'images/tekwan.jpg'
                    ],
                    [
                        'name' => 'Pindang Patin', 
                        'desc' => 'Masakan sup ikan patin segar berkuah rempah khas dengan rasa gurih, asam, dan pedas.',
                        'image' => 'images/pindang-patin.jpg'
                    ]
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
        'padang' => [
            'name' => 'Padang',
            'tagline' => 'Kota bingkuang di pesisir barat Minangkabau.',
            'culture' => 'Budaya Minangkabau: Tari Piring, Rumah Gadang, Randai, dan tradisi Baju Kurung Basiba.',
            'diversity' => 'Komunitas Minangkabau, Nias, Tionghoa, dan pendatang lintas Nusantara.',
            'coordinates' => [-0.9471, 100.4172],
            'description' => 'Padang adalah ibu kota Provinsi Sumatra Barat yang terletak di pesisir barat Pulau Sumatra. Dikenal dengan kuliner khasnya yang mendunia, Padang menjadi pintu gerbang utama menuju keindahan alam Minangkabau.',
            'history' => 'Padang berkembang sejak abad ke-16 sebagai pelabuhan perdagangan rempah dan emas Kesultanan Inderapura. Pada abad ke-17, VOC mendirikan loji perdagangan di Padang, menjadikannya pusat administrasi dan perdagangan pantai barat Sumatra.',
            'images' => [
                'costume' => 'images/pakaian-padang.jpg',
                'tourism' => 'images/wisata-padang.jpg',
                'food' => 'images/kuliner-padang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Padang',
                'items' => [
                    [
                        'name' => 'Pakaian Bundo Kanduang (Suntiang)',
                        'desc' => 'Busana adat wanita Minangkabau berhiaskan mahkota Suntiang yang megah dan Baju Kurung Basiba.',
                        'image' => 'images/bundo-kanduang.jpg'
                    ],
                    [
                        'name' => 'Pakaian Penghulu / Penghulu Minang',
                        'desc' => 'Pakaian adat pria berupa baju hitam saluak, kain samping, dan destar penutup kepala yang melambangkan kepemimpinan.',
                        'image' => 'images/pakaian-penghulu.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Padang',
                'items' => [
                    [
                        'name' => 'Pantai Padang (Taplau)',
                        'desc' => 'Kawasan wisata pantai ikonik di pusat kota yang menawarkan pemandangan matahari terbenam.',
                        'image' => 'images/pantai-padang.jpg'
                    ],
                    [
                        'name' => 'Jembatan Siti Nurbaya',
                        'desc' => 'Jembatan legendaris yang menghubungkan kota tua dengan Gunung Padang dan menjadi simbol legenda Siti Nurbaya.',
                        'image' => 'images/jembatan-siti-nurbaya.jpg'
                    ],
                    [
                        'name' => 'Masjid Raya Sumatra Barat',
                        'desc' => 'Masjid megah dengan arsitektur berbentuk gonjong Rumah Gadang modern tanpa kubah melingkar.',
                        'image' => 'images/masjid-raya-sumbar.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Padang',
                'items' => [
                    [
                        'name' => 'Rendang',
                        'desc' => 'Masakan olahan daging sapi berkuah santan kaya rempah yang dimasak lama hingga menjadi kering dan harum.',
                        'image' => 'images/rendang.jpg'
                    ],
                    [
                        'name' => 'Sate Padang',
                        'desc' => 'Sate daging dan jeroan sapi dengan siraman kuah kental gurih berempah khas Minang.',
                        'image' => 'images/sate-padang.jpg'
                    ],
                    [
                        'name' => 'Soto Padang',
                        'desc' => 'Soto berkuah kaldu sapi bening gurih disajikan dengan daging sapi goreng renyah (dendeng) dan perkedel.',
                        'image' => 'images/soto-padang.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1945–1949', 'name' => 'Abubakar Jaar'],
                ['period' => '1950–1958', 'name' => 'Bagindo Azizchan'],
                ['period' => '1958–1966', 'name' => 'Z. A. St. Pangeran'],
                ['period' => '1966–1971', 'name' => 'Drs. Hasan Basri Durin'],
                ['period' => '1971–1983', 'name' => 'H. Syahrul Ujud, S.H.'],
                ['period' => '1983–1993', 'name' => 'Zuihusli Asroel'],
                ['period' => '1993–2003', 'name' => 'H. Zuielfi Majid'],
                ['period' => '2004–2014', 'name' => 'Dr. H. Fauzi Bahar, M.Si.'],
                ['period' => '2014–2021', 'name' => 'H. Mahyeldi Ansharullah, S.P.'],
                ['period' => '2021–Sekarang', 'name' => 'H. Hendri Septa, B.Bus. (Acc.), M.I.B.']
            ]
        ],
        'pekanbaru' => [
            'name' => 'Pekanbaru',
            'tagline' => 'Kota bertuah pusat kebudayaan Melayu Riau.',
            'culture' => 'Budaya Melayu Riau: Tari Zapin, gurindam, kain tenun Siak, dan pantun.',
            'diversity' => 'Masyarakat Melayu, Minang, Jawa, Batak, dan Tionghoa.',
            'coordinates' => [0.5071, 101.4478],
            'description' => 'Pekanbaru adalah ibu kota Provinsi Riau yang berkembang pesat sebagai pusat perdagangan, jasa, dan industri kelapa sawit serta perminyakan di pesisir timur Sumatra.',
            'history' => 'Berasal dari sebuah pasar (Pekan) yang didirikan oleh para pedagang Minangkabau di tepi Sungai Siak pada abad ke-18. Pekanbaru resmi berdiri pada 23 Juni 1784 di bawah naungan Kesultanan Siak Sri Indrapura.',
            'images' => [
                'costume' => 'images/pakaian-pekanbaru.jpg',
                'tourism' => 'images/wisata-pekanbaru.jpg',
                'food' => 'images/kuliner-pekanbaru.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Pekanbaru',
                'items' => [
                    [
                        'name' => 'Baju Kurung Cekak Musang',
                        'desc' => 'Pakaian pria Melayu Riau berkerah tegak disandingkan dengan kain samping tenun Siak dan tanjak.',
                        'image' => 'images/cekak-musang.jpg'
                    ],
                    [
                        'name' => 'Baju Kebaya Laboh',
                        'desc' => 'Busana wanita Melayu Riau yang anggun panjang hingga bawah lutut dengan selendang halus.',
                        'image' => 'images/kebaya-laboh.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Pekanbaru',
                'items' => [
                    [
                        'name' => 'Masjid Agung An-Nur',
                        'desc' => 'Masjid megah dengan gaya arsitektur mirip Taj Mahal yang menjadi salah satu ikon Provinsi Riau.',
                        'image' => 'images/masjid-annur-pekanbaru.jpg'
                    ],
                    [
                        'name' => 'Istana Siak Sri Indrapura (Sekitar)',
                        'desc' => 'Peninggalan Kesultanan Siak yang kaya akan benda bersejarah bernilai tinggi.',
                        'image' => 'images/istana-siak.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Pekanbaru',
                'items' => [
                    [
                        'name' => 'Gulai Ikan Patin',
                        'desc' => 'Gulai ikan patin berkuah kuning asam pedas khas Melayu Riau.',
                        'image' => 'images/gulai-patin.jpg'
                    ],
                    [
                        'name' => 'Roti Canai & Es Laksamana Mengamuk',
                        'desc' => 'Sajian makanan khas Melayu berupa roti canai gurih dan minuman es buah kuini segar berkuah santan.',
                        'image' => 'images/laksamana-mengamuk.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1957–1962', 'name' => 'Datuk Wan Abdul Rahman'],
                ['period' => '1962–1968', 'name' => 'T. Tengku Muhammad'],
                ['period' => '1968–1981', 'name' => 'H. A. Farial'],
                ['period' => '1981–1991', 'name' => 'H. Ibrahim Arsyad'],
                ['period' => '1991–2001', 'name' => 'H. Oesman Effendi Apan'],
                ['period' => '2001–2011', 'name' => 'H. Herman Abdullah'],
                ['period' => '2012–2022', 'name' => 'Dr. H. Firdaus, S.T., M.T.'],
                ['period' => '2022–Sekarang', 'name' => 'Muflihun, S.STP., M.A.P. (Pj)']
            ]
        ],
        'tanjungpinang' => [
            'name' => 'Tanjungpinang',
            'tagline' => 'Kota Gurindam di Kepulauan Riau.',
            'culture' => 'Sastra Melayu klasik, Gurindam 12, tari Zapin, dan warisan Kerajaan Riau-Lingga.',
            'diversity' => 'Harmoni Melayu, Tionghoa (Teochew/Hokkien), Bugis, dan Laut/Suku Laut.',
            'coordinates' => [0.9167, 104.4500],
            'description' => 'Tanjungpinang adalah ibu kota Provinsi Kepulauan Riau yang terletak di Pulau Bintan. Kota ini menyimpan peninggalan sejarah dan kejayaan sastra Melayu Gurindam 12 karya Raja Ali Haji.',
            'history' => 'Merupakan pusat pemerintahan Kesultanan Riau-Lingga pada abad ke-18 dan ke-19. Tanjungpinang menjadi benteng pertahanan Melayu-Bugis melawan kekuatan kolonial Eropa di Selat Malaka.',
            'images' => [
                'costume' => 'images/pakaian-tanjungpinang.jpg',
                'tourism' => 'images/wisata-tanjungpinang.jpg',
                'food' => 'images/kuliner-tanjungpinang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Tanjungpinang',
                'items' => [
                    [
                        'name' => 'Baju Kurung Teluk Belanga',
                        'desc' => 'Busana tradisional Melayu Kepulauan Riau yang simpel namun sarat makna sopan santun.',
                        'image' => 'images/teluk-belanga-kepri.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Tanjungpinang',
                'items' => [
                    [
                        'name' => 'Pulau Penyengat',
                        'desc' => 'Pulau bersejarah dengan Masjid Raya Sultan Riau yang dibangun menggunakan perekat putih telur.',
                        'image' => 'images/pulau-penyengat.jpg'
                    ],
                    [
                        'name' => 'Gedung Guk Sian / Vihara Ksitigarbha Bodhisattva',
                        'desc' => 'Dikenal sebagai Vihara 1000 Patung Murid Buddha yang sangat megah.',
                        'image' => 'images/vihara-1000-patung.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Tanjungpinang',
                'items' => [
                    [
                        'name' => 'Gonggong',
                        'desc' => 'Sejenis siput laut khas Kepulauan Riau yang disajikan rebus dengan sambal cocol khas.',
                        'image' => 'images/gonggong.jpg'
                    ],
                    [
                        'name' => 'Mie Lendir & Otak-otak Tulang',
                        'desc' => 'Mie berkuah kental dari kacang tanah dan ubi serta otak-otak ikan panggang balut daun kelapa.',
                        'image' => 'images/mie-lendir.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2001–2011', 'name' => 'Hj. Suryatati A. Manan'],
                ['period' => '2013–2018', 'name' => 'H. Lis Darmansyah, S.H.'],
                ['period' => '2018–2020', 'name' => 'H. Syahrul, S.Pd.'],
                ['period' => '2020–2023', 'name' => 'Hj. Rahma, S.IP., M.M.'],
                ['period' => '2023–Sekarang', 'name' => 'Hasan, S.Sos. (Pj)']
            ]
        ],
        'jambi' => [
            'name' => 'Jambi',
            'tagline' => 'Kota Beradat di sepanjang Sungai Batanghari.',
            'culture' => 'Batik Jambi, Tari Sekapur Sirih, Lacak Jambi, dan warisan Kerajaan Melayu Jambi.',
            'diversity' => 'Komunitas Melayu Jambi, Suku Anak Dalam (Kubu), Jawa, Minang, dan Tionghoa.',
            'coordinates' => [-1.6101, 103.6131],
            'description' => 'Jambi adalah ibu kota Provinsi Jambi yang terletak di bagian timur Pulau Sumatra, dialiri oleh Sungai Batanghari yang merupakan sungai terpanjang di Sumatra.',
            'history' => 'Kawasan Jambi merupakan wilayah purba tempat berdirinya Kerajaan Melayu dan pusat pengajaran agama Buddha sebelum era Kedatuan Sriwijaya, sebagaimana dibuktikan oleh kompleks Candi Muaro Jambi.',
            'images' => [
                'costume' => 'images/pakaian-jambi.jpg',
                'tourism' => 'images/wisata-jambi.jpg',
                'food' => 'images/kuliner-jambi.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Jambi',
                'items' => [
                    [
                        'name' => 'Baju Kurung Tangkuluk',
                        'desc' => 'Busana adat wanita Melayu Jambi dipadu penutup kepala Tangkuluk dan sulaman benang emas.',
                        'image' => 'images/pakaian-jambi-adat.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Jambi',
                'items' => [
                    [
                        'name' => 'Jembatan Gentala Arasy',
                        'desc' => 'Jembatan pedestrian berbentuk huruf S di atas Sungai Batanghari lengkap dengan menara museum sejarah Islam.',
                        'image' => 'images/gentala-arasy.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Jambi',
                'items' => [
                    [
                        'name' => 'Tempoyak Ikan Patin',
                        'desc' => 'Masakan olahan fermentasi durian (tempoyak) yang dimasak bersama ikan patin segar.',
                        'image' => 'images/tempoyak-jambi.jpg'
                    ],
                    [
                        'name' => 'Nasi Gemuk',
                        'desc' => 'Nasi gurih beraroma santan dan rempah khas yang disajikan untuk sarapan.',
                        'image' => 'images/nasi-gemuk.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1956–1966', 'name' => 'R. Soedarsono'],
                ['period' => '1966–1978', 'name' => 'Drs. Zainir Haviz'],
                ['period' => '1978–1988', 'name' => 'H. Ashari DS'],
                ['period' => '1988–1998', 'name' => 'Drs. Muhammad Azhari'],
                ['period' => '1998–2008', 'name' => 'Drs. H. Arpan Offset'],
                ['period' => '2008–2013', 'name' => 'Bambang Priyanto'],
                ['period' => '2013–2023', 'name' => 'Dr. H. Syarif Fasha, M.E.'],
                ['period' => '2023–Sekarang', 'name' => 'Sri Purwaningsih, S.H., M.A.P. (Pj)']
            ]
        ],
        'bengkulu' => [
            'name' => 'Bengkulu',
            'tagline' => 'Bumi Rafflesia di pesisir barat Sumatra.',
            'culture' => 'Tradisi Tabut, Tari Tabot, kain Besurek, dan tarian Dol.',
            'diversity' => 'Suku Melayu Bengkulu, Rejang, Serawai, Enggano, dan Jawa.',
            'coordinates' => [-3.7928, 102.2608],
            'description' => 'Bengkulu adalah ibu kota Provinsi Bengkulu yang kaya akan nilai sejarah kemerdekaan dan bentang alam pesisir Samudra Hindia.',
            'history' => 'Pernah dikuasai Inggris (EIC) sejak abad ke-17 sebelum ditukar dengan Singapura kepada Belanda lewat Perjanjian London 1824. Bengkulu juga merupakan tempat pengasingan Soekarno tahun 1938–1942.',
            'images' => [
                'costume' => 'images/pakaian-bengkulu.jpg',
                'tourism' => 'images/wisata-bengkulu.jpg',
                'food' => 'images/kuliner-bengkulu.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Bengkulu',
                'items' => [
                    [
                        'name' => 'Busana Adat Kain Besurek',
                        'desc' => 'Pakaian adat berhiaskan kain bermotif kaligrafi Arab dan Bunga Rafflesia khas Bengkulu.',
                        'image' => 'images/kain-besurek.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Bengkulu',
                'items' => [
                    [
                        'name' => 'Benteng Marlborough',
                        'desc' => 'Benteng peninggalan Inggris terbesar di Asia Tenggara yang menghadap langsung ke Samudra Hindia.',
                        'image' => 'images/fort-marlborough.jpg'
                    ],
                    [
                        'name' => 'Rumah Pengasingan Bung Karno',
                        'desc' => 'Rumah bersejarah tempat Ir. Soekarno menjalani masa pengasingan oleh Belanda.',
                        'image' => 'images/rumah-bung-karno.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Bengkulu',
                'items' => [
                    [
                        'name' => 'Pendap',
                        'desc' => 'Makanan khas dari olahan ikan yang dibumbui rempah dan dibungkus daun talas dimasak berjam-jam.',
                        'image' => 'images/pendap.jpg'
                    ],
                    [
                        'name' => 'Kue Tat & Bagar Hiu',
                        'desc' => 'Kue tradisional khas kerajaan serta gulai daging hiu berbumbu rempah khas Bengkulu.',
                        'image' => 'images/kue-tat.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1956–1960', 'name' => 'M. Soetisko'],
                ['period' => '1980–1990', 'name' => 'H. A. Chalik'],
                ['period' => '1990–2002', 'name' => 'Drs. H. A. Yahya Ahmad'],
                ['period' => '2002–2012', 'name' => 'H. Ahmad Kanedi, S.H., M.H.'],
                ['period' => '2013–2023', 'name' => 'H. Helmi Hasan, S.E.'],
                ['period' => '2023–Sekarang', 'name' => 'Arif Gunadi, M.Si. (Pj)']
            ]
        ],
        'lampung' => [
            'name' => 'Lampung (Bandar Lampung)',
            'tagline' => 'Gerbang utama gerbang selatan Pulau Sumatra.',
            'culture' => 'Kain Tapis, mahkota Siger, Tari Melinting, dan filosofi Fiil Pesenggiri.',
            'diversity' => 'Komunitas suku Lampung (Pepadun dan Saibatin) serta transmigran Jawa, Bali, dan Sunda.',
            'coordinates' => [-5.4500, 105.2667],
            'description' => 'Bandar Lampung adalah ibu kota Provinsi Lampung yang menjadi simpul penghubung darat utama antara Pulau Sumatra dan Pulau Jawa via Pelabuhan Bakauheni - Merak.',
            'history' => 'Gabungan dari dua kota bersejarah Tanjungkarang dan Telukbetung. Kawasan ini terkena dampak dahsyat dari letusan Gunung Krakatau pada tahun 1883 sebelum tumbuh menjadi kota metropolitan modern.',
            'images' => [
                'costume' => 'images/pakaian-lampung.jpg',
                'tourism' => 'images/wisata-lampung.jpg',
                'food' => 'images/kuliner-lampung.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Lampung',
                'items' => [
                    [
                        'name' => 'Pakaian Adat Siger Pepadun & Saibatin',
                        'desc' => 'Busana pengantin berhias kain Tapis sulam benang emas serta mahkota Siger yang megah.',
                        'image' => 'images/pakaian-siger.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Bandar Lampung',
                'items' => [
                    [
                        'name' => 'Puncak Mas & Menara Siger',
                        'desc' => 'Destinasi wisata dataran tinggi dan menara ikonik gerbang Sumatra.',
                        'image' => 'images/menara-siger.jpg'
                    ],
                    [
                        'name' => 'Pantai Mutun & Pahawang (Sekitar)',
                        'desc' => 'Wisata pesisir pantai dan keindahan panorama bahari bawah laut.',
                        'image' => 'images/pahawang.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Lampung',
                'items' => [
                    [
                        'name' => 'Seruit',
                        'desc' => 'Makanan khas Lampung berupa ikan bakar yang diaduk bersama sambal terasi, tempoyak, dan lalapan.',
                        'image' => 'images/seruit.jpg'
                    ],
                    [
                        'name' => 'Kue Sekubal & Engkak',
                        'desc' => 'Kue ketan berlapis santan gurih khas perayaan lebaran masyarakat Lampung.',
                        'image' => 'images/sekubal.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1956–1963', 'name' => 'Sumauro'],
                ['period' => '1969–1981', 'name' => 'H. Fauzi Saleh'],
                ['period' => '1981–1991', 'name' => 'Zulkarnain Subing'],
                ['period' => '1991–2001', 'name' => 'Suharto'],
                ['period' => '2005–2010', 'name' => 'Drs. H. Eddy Sutrisno, M.Pd.'],
                ['period' => '2010–2021', 'name' => 'Drs. H. Herman HN, M.M.'],
                ['period' => '2021–Sekarang', 'name' => 'Hj. Eva Dwiana, S.E.']
            ]
        ],
        'pangkalpinang' => [
            'name' => 'Pangkalpinang',
            'tagline' => 'Kota Beribu Senyuman di Pulau Bangka.',
            'culture' => 'Perpaduan budaya Melayu Bangka dan Tionghoa Hakka (Peranakan Bangka).',
            'diversity' => 'Suku Melayu Bangka, Tionghoa Hakka, Jawa, dan Palembang.',
            'coordinates' => [-2.1333, 106.1167],
            'description' => 'Pangkalpinang adalah ibu kota Provinsi Kepulauan Bangka Belitung yang terletak di pesisir timur Pulau Bangka dan terkenal sebagai pusat penambangan timah sejarah dunia.',
            'history' => 'Didirikan pada tahun 1757 oleh Sultan Mahmud Badaruddin I dari Kesultanan Palembang Darussalam sebagai pusat penambangan dan markas pertahanan (Pangkal) timah.',
            'images' => [
                'costume' => 'images/pakaian-pangkalpinang.jpg',
                'tourism' => 'images/wisata-pangkalpinang.jpg',
                'food' => 'images/kuliner-pangkalpinang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Pangkalpinang',
                'items' => [
                    [
                        'name' => 'Pakaian Adat Paksian',
                        'desc' => 'Busana pengantin khas Bangka perpaduan budaya Melayu dan Tionghoa dengan warna merah/keemasan.',
                        'image' => 'images/paksian-bangka.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Pangkalpinang',
                'items' => [
                    [
                        'name' => 'Museum Timah Indonesia',
                        'desc' => 'Museum penambangan timah satu-satunya di Asia Tenggara yang menempati rumah dinas bersejarah.',
                        'image' => 'images/museum-timah.jpg'
                    ],
                    [
                        'name' => 'Pantai Pasir Padi',
                        'desc' => 'Pantai landai berpasir padat yang menjadi pusat rekreasi warga kota.',
                        'image' => 'images/pasir-padi.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Pangkalpinang',
                'items' => [
                    [
                        'name' => 'Lempah Kuning',
                        'desc' => 'Lauk khas ikan laut berkuah kunyit dan nanas segar bercita rasa asam pedas.',
                        'image' => 'images/lempah-kuning.jpg'
                    ],
                    [
                        'name' => 'Mie Bangka & Otak-otak Bangka',
                        'desc' => 'Sajian mie khas bercitarasa gurih dan otak-otak ikan disajikan bersama sambal tauco.',
                        'image' => 'images/mie-bangka.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1956–1960', 'name' => 'R. Supardi'],
                ['period' => '1993–2003', 'name' => 'H. Sofyan Rebuin'],
                ['period' => '2003–2013', 'name' => 'Drs. H. Zulkarnain Karim, M.M.'],
                ['period' => '2013–2018', 'name' => 'Muhammad Irwansyah'],
                ['period' => '2018–2023', 'name' => 'Maulan Aklil, S.IP., M.Si.'],
                ['period' => '2023–Sekarang', 'name' => 'Lusje Anneke Tabalujan (Pj)']
            ]
        ],
        'surabaya' => [
            'name' => 'Surabaya',
            'tagline' => 'Kota pahlawan di Jawa Timur.',
            'culture' => 'Ludruk, remo, dan tradisi Arek.',
            'diversity' => 'Pertemuan budaya Jawa, Madura, Arab, dan Tionghoa.',
            'coordinates' => [-7.2575, 112.7521],
            'description' => 'Surabaya adalah ibu kota Provinsi Jawa Timur dan kota terbesar kedua di Indonesia. Dijuluki Kota Pahlawan karena peran pentingnya dalam Pertempuran 10 November 1945, Surabaya juga tumbuh menjadi pusat perdagangan, industri, dan pelabuhan utama di kawasan timur Indonesia.',
            'history' => 'Nama Surabaya dikaitkan dengan legenda pertarungan Sura (ikan hiu) dan Baya (buaya). Kota ini telah menjadi bandar pelabuhan penting sejak era Kerajaan Majapahit dan berkembang pesat pada masa kolonial Belanda. Puncaknya, pertempuran heroik arek-arek Suroboyo melawan pasukan Sekutu pada 10 November 1945 menjadikannya dikenang sebagai Hari Pahlawan Nasional.',
            'images' => [
                'costume' => 'images/pakaian-surabaya.jpg',
                'tourism' => 'images/wisata-surabaya.jpg',
                'food' => 'images/kuliner-surabaya.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Surabaya',
                'items' => [
                    [
                        'name' => 'Baju Sakera',
                        'desc' => 'Pakaian adat pria Jawa Timuran berwarna hitam-merah bergaris yang terinspirasi tokoh legendaris Sakera.',
                        'image' => 'images/baju-sakera.jpg'
                    ],
                    [
                        'name' => 'Kebaya Rancongan',
                        'desc' => 'Busana wanita khas pesisir Jawa Timur dengan warna cerah dan kain batik motif pesisiran.',
                        'image' => 'images/kebaya-rancongan.jpg'
                    ],
                    [
                        'name' => 'Baju Cak dan Ning Suroboyo',
                        'desc' => 'Busana adat modern yang dikenakan duta wisata Surabaya dalam berbagai acara kebudayaan kota.',
                        'image' => 'images/cak-ning.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Surabaya',
                'items' => [
                    [
                        'name' => 'Tugu Pahlawan',
                        'desc' => 'Monumen ikonik setinggi 41,15 meter yang mengenang perjuangan arek-arek Suroboyo pada 10 November 1945.',
                        'image' => 'images/tugu-pahlawan.jpg'
                    ],
                    [
                        'name' => 'Jembatan Suramadu',
                        'desc' => 'Jembatan terpanjang di Indonesia yang menghubungkan Surabaya dengan Pulau Madura.',
                        'image' => 'images/suramadu.jpg'
                    ],
                    [
                        'name' => 'House of Sampoerna',
                        'desc' => 'Museum dan pabrik rokok kretek bersejarah bergaya arsitektur kolonial Belanda.',
                        'image' => 'images/house-of-sampoerna.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Surabaya',
                'items' => [
                    [
                        'name' => 'Rawon',
                        'desc' => 'Sup daging sapi berkuah hitam pekat dari kluwek dengan aroma rempah yang khas.',
                        'image' => 'images/rawon.jpg'
                    ],
                    [
                        'name' => 'Rujak Cingur',
                        'desc' => 'Sajian sayuran dan buah dengan irisan cingur (moncong sapi) disiram sambal petis udang.',
                        'image' => 'images/rujak-cingur.jpg'
                    ],
                    [
                        'name' => 'Lontong Balap & Sate Klopo',
                        'desc' => 'Lontong berisi tauge, lentho, dan tahu berkuah kecap khas Surabaya serta sate ayam berbalur kelapa parut.',
                        'image' => 'images/lontong-balap.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1994–2002', 'name' => 'H. Sunarto Sumoprawiro'],
                ['period' => '2002–2010', 'name' => 'Ir. Bambang Dwi Hartono, M.Pd.'],
                ['period' => '2010–2021', 'name' => 'Dr. (H.C.) Tri Rismaharini, S.T., M.T.'],
                ['period' => '2021–Sekarang', 'name' => 'Ir. Eri Cahyadi, M.T.']
            ]
        ],
        'mataram' => [
            'name' => 'Mataram',
            'tagline' => 'Kota utama Pulau Lombok.',
            'culture' => 'Sasak: gendang beleq dan tenun.',
            'diversity' => 'Budaya Sasak, Bali, dan masyarakat kepulauan.',
            'coordinates' => [-8.5833, 116.1167],
            'description' => 'Nama Mataram konon dari kata Sansekerta "mata" dan "aram", kalau digabung kira-kira berarti hiburan untuk ibu pertiwi, ada juga versi lain yang bilang asalnya dari matta-aram, semacam gairah membangun tanah harapan. Julukan Kota Seribu Masjid pun bukan tanpa alasan, sebab hampir tiap penjuru kota berdiri masjid dengan gaya arsitektur yang berbeda-beda, mencerminkan denyut keislaman warga Sasak yang berbaur dengan etnis Bali, Tionghoa, Arab, dan Melayu.',
            'history' => 'Kerajaan Karangasem dari Bali membangun kota ini sekitar tahun 1714, bersamaan dengan Pura Lingsar, memakai rujukan lontar tata ruang Bali seperti Asta Kosala-Kosali. Kota ini sempat jadi pusat kerajaan sebelum ibu kotanya dipindah ke Cakranegara. Baru pada 17 Desember 1958 Mataram ditetapkan sebagai ibu kota Nusa Tenggara Barat, lanjut berstatus kota administratif tahun 1978, dan akhirnya definitif jadi kotamadya lewat UU 4/1993, diresmikan Mendagri Moch. Yogi S. Memet pada 31 Agustus 1993, tanggal yang sampai kini dipakai sebagai hari jadi kota.',
            'images' => [
                'costume' => 'images/pakaian-mataram.jpg',
                'tourism' => 'images/wisata-mataram.jpg',
                'food' => 'images/kuliner-mataram.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Mataram',
                'items' => [
                    [
                        'name' => 'Baju Pegon',
                        'desc' => 'Pakaian adat pria Sasak berupa jas hitam bergaya Eropa yang dipadukan kain songket dan sapuk (ikat kepala).',
                        'image' => 'images/baju-pegon.jpg'
                    ],
                    [
                        'name' => 'Lambung',
                        'desc' => 'Busana adat wanita Sasak berupa baju tanpa lengan berwarna hitam, dipadukan kain songket dan selendang.',
                        'image' => 'images/lambung-sasak.jpg'
                    ],
                    [
                        'name' => 'Pakaian Adat Bali di Mataram',
                        'desc' => 'Busana adat Bali yang juga lazim dikenakan komunitas Bali yang banyak bermukim di Kota Mataram.',
                        'image' => 'images/pakaian-bali-mataram.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Mataram',
                'items' => [
                    [
                        'name' => 'Pura Meru',
                        'desc' => 'Pura Hindu terbesar di Pulau Lombok, peninggalan Kerajaan Karangasem yang megah dan bersejarah.',
                        'image' => 'images/pura-meru.jpg'
                    ],
                    [
                        'name' => 'Taman Mayura',
                        'desc' => 'Taman air peninggalan Kerajaan Karangasem dengan kolam luas dan bale kambang di tengahnya.',
                        'image' => 'images/taman-mayura.jpg'
                    ],
                    [
                        'name' => 'Museum Negeri NTB',
                        'desc' => 'Museum yang menyimpan koleksi budaya dan sejarah masyarakat Sasak, Bali, dan Nusa Tenggara Barat.',
                        'image' => 'images/museum-ntb.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Mataram',
                'items' => [
                    [
                        'name' => 'Ayam Taliwang',
                        'desc' => 'Ayam bakar pedas khas Lombok yang dilumuri bumbu cabai dan terasi yang kaya rasa.',
                        'image' => 'images/ayam-taliwang.jpg'
                    ],
                    [
                        'name' => 'Plecing Kangkung',
                        'desc' => 'Kangkung rebus yang disiram sambal tomat pedas khas Lombok, biasa jadi pendamping Ayam Taliwang.',
                        'image' => 'images/plecing-kangkung.jpg'
                    ],
                    [
                        'name' => 'Sate Rembiga',
                        'desc' => 'Sate daging sapi berbumbu pedas manis khas Mataram yang dipanggang di atas bara arang.',
                        'image' => 'images/sate-rembiga.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1978–1989', 'name' => 'Lalu Mudjitahid'],
                ['period' => '1989–1999', 'name' => 'Lalu Mas\'ud'],
                ['period' => '1999–2004', 'name' => 'Moh. Ruslan'],
                ['period' => '2004–2005', 'name' => 'L. Rifa\'i (Penjabat)'],
                ['period' => '2005–2010', 'name' => 'Moh. Ruslan'],
                ['period' => '2010–2015', 'name' => 'Ahyar Abduh'],
                ['period' => '2015–2016', 'name' => 'Putu Selly Andayani (Penjabat)'],
                ['period' => '2016–2021', 'name' => 'Ahyar Abduh'],
                ['period' => '2021–Sekarang', 'name' => 'Mohan Roliskana']
            ]
        ],
        'bima' => [
            'name' => 'Bima',
            'tagline' => 'Kota Tepian Teluk di ujung timur Pulau Sumbawa.',
            'culture' => 'Warisan Kesultanan Bima: tari Wura Bongi Monca dan rumah adat Uma Lengge.',
            'diversity' => 'Masyarakat Mbojo berpadu dengan pendatang Bugis dan Sasak.',
            'coordinates' => [-8.4629, 118.7273],
            'description' => 'Bima, atau Dana Mbojo dalam sebutan lokalnya, dulu jadi pusat Kesultanan Bima yang berkuasa lebih dari tiga abad lewat 15 sultan berturut-turut. Suku Bima yang menyebut diri Dou Mbojo hidup berdampingan dengan pendatang Makassar, Bugis, Sasak, sampai Bali, campuran itu yang bikin kota di ujung timur Sumbawa ini punya rasa berbeda dibanding kota-kota lain di NTB.',
            'history' => 'Menurut legenda dalam Kitab BO, leluhur raja Bima berasal dari seorang musafir bangsawan Jawa bergelar Sang Bima yang mendarat di Pulau Satonda. Dari situ lahir dinasti yang mengubah sistem kerajaan jadi kesultanan pada 5 Juli 1640, ditandai pelantikan Sultan Abdul Kahir. Sesudah 1951, statusnya berganti jadi daerah swapraja lalu kabupaten, sampai akhirnya dimekarkan resmi menjadi Kota Bima lewat UU Nomor 13 Tahun 2002.',
            'images' => [
                'costume' => 'images/pakaian-bima.jpg',
                'tourism' => 'images/wisata-bima.jpg',
                'food' => 'images/kuliner-bima.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Bima',
                'items' => [
                    [
                        'name' => 'Rimpu',
                        'desc' => 'Cara berbusana khas perempuan Bima yang menutup kepala dan wajah dengan sarung tenun khas, mirip hijab tradisional Mbojo.',
                        'image' => 'images/rimpu.jpg'
                    ],
                    [
                        'name' => 'Baju Adat Pria Bima (Salepe)',
                        'desc' => 'Busana pria berupa jas tertutup yang dipadukan kain tenun khas dan destar penutup kepala.',
                        'image' => 'images/salepe-bima.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Bima',
                        'desc' => 'Busana kebesaran pengantin Bima dengan hiasan emas dan kain tenun khas peninggalan kesultanan.',
                        'image' => 'images/pengantin-bima.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Bima',
                'items' => [
                    [
                        'name' => 'Istana Kesultanan Bima (Asi Mbojo)',
                        'desc' => 'Istana bekas pusat pemerintahan Kesultanan Bima yang kini menjadi museum budaya Mbojo.',
                        'image' => 'images/asi-mbojo.jpg'
                    ],
                    [
                        'name' => 'Pantai Lawata',
                        'desc' => 'Pantai teluk berpasir putih di dekat pusat kota dengan panorama matahari terbenam yang indah.',
                        'image' => 'images/pantai-lawata.jpg'
                    ],
                    [
                        'name' => 'Uma Lengge',
                        'desc' => 'Lumbung tradisional berbentuk kerucut peninggalan masyarakat Bima kuno untuk menyimpan hasil panen.',
                        'image' => 'images/uma-lengge.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Bima',
                'items' => [
                    [
                        'name' => 'Uta Palumara',
                        'desc' => 'Masakan ikan berkuah asam pedas khas Bima yang segar dan kaya rempah.',
                        'image' => 'images/uta-palumara.jpg'
                    ],
                    [
                        'name' => 'Uta Sepi',
                        'desc' => 'Sambal khas berbahan udang kecil (sepi) yang pedas dan gurih, pelengkap makan sehari-hari.',
                        'image' => 'images/uta-sepi.jpg'
                    ],
                    [
                        'name' => 'Manggulu',
                        'desc' => 'Makanan manis tradisional dari pisang, kacang, dan gula aren khas Bima dan Dompu.',
                        'image' => 'images/manggulu.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2003–2010', 'name' => 'H.M. Nur A. Latif'],
                ['period' => '2010–2018', 'name' => 'H.M. Qurais H. Abidin'],
                ['period' => '2018–2023', 'name' => 'H. A. Rahman H. Abidin'],
                ['period' => '2023–2025', 'name' => 'Drs. Mukhtar, M.H. (Penjabat)'],
                ['period' => '2025–Sekarang', 'name' => 'H. A. Rahman H. Abidin']
            ]
        ],
        'kupang' => [
            'name' => 'Kupang',
            'tagline' => 'Gerbang budaya Nusa Tenggara Timur di Pulau Timor.',
            'culture' => 'Musik sasando, tari likurai, dan tenun ikat khas Timor.',
            'diversity' => 'Perpaduan suku Timor, Rote, Sabu, Flores, dan pendatang Tionghoa.',
            'coordinates' => [-10.1772, 123.6070],
            'description' => 'Kupang jadi kota terbesar di Pulau Timor, bertengger di pesisir teluk yang dulu dijadikan Belanda daerah penyangga dengan mendatangkan penduduk dari Rote, Sabu, dan Solor. Sekarang penduduknya makin campur-baur, ada Timor, Helong, Rote, Sabu, Flores, Alor, sampai Tionghoa dan Bali, semua hidup bersama di kota yang jadi gerbang budaya NTT ini.',
            'history' => 'Belanda menetapkan batas kota lewat Staatsblad Nomor 171 tahun 1886, di masa Residen Creeve. Kupang resmi berpisah dari Kabupaten Kupang lewat pengesahan DPR RI pada 25 April 1996, mulanya berstatus Kota Administratif, lalu jadi Kotamadya Daerah Tingkat II lewat UU Nomor 5 Tahun 1996 yang diresmikan Mendagri Mohammad Yogie S.M pada tanggal yang sama, sekaligus melantik Letkol Inf. S.K. Lerik sebagai penjabat wali kota pertamanya.',
            'images' => [
                'costume' => 'images/pakaian-kupang.jpg',
                'tourism' => 'images/wisata-kupang.jpg',
                'food' => 'images/kuliner-kupang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Kupang',
                'items' => [
                    [
                        'name' => 'Baju Adat Timor (Pria)',
                        'desc' => 'Kemeja putih yang dipadukan kain tenun ikat Timor dan penutup kepala Ti\'i Langga.',
                        'image' => 'images/baju-adat-timor.jpg'
                    ],
                    [
                        'name' => 'Kain Tenun Ikat Timor (Wanita)',
                        'desc' => 'Busana wanita berupa selendang dan sarung tenun ikat bermotif khas Timor yang ditenun secara tradisional.',
                        'image' => 'images/tenun-ikat-timor.jpg'
                    ],
                    [
                        'name' => 'Ti\'i Langga',
                        'desc' => 'Topi khas pria Timor berbentuk anyaman daun lontar yang menjadi pelengkap busana adat.',
                        'image' => 'images/tii-langga.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Kupang',
                'items' => [
                    [
                        'name' => 'Pantai Lasiana',
                        'desc' => 'Pantai populer di Kupang dengan deretan pohon lontar khas dan pasir putih yang landai.',
                        'image' => 'images/pantai-lasiana.jpg'
                    ],
                    [
                        'name' => 'Museum Negeri NTT',
                        'desc' => 'Museum yang menyimpan koleksi budaya dan sejarah masyarakat Nusa Tenggara Timur.',
                        'image' => 'images/museum-ntt.jpg'
                    ],
                    [
                        'name' => 'Taman Nostalgia',
                        'desc' => 'Taman kota di tepi pantai yang menjadi pusat rekreasi dan bersantai warga Kupang.',
                        'image' => 'images/taman-nostalgia.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Kupang',
                'items' => [
                    [
                        'name' => 'Se\'i',
                        'desc' => 'Daging asap khas Timor dengan cita rasa gurih dan aroma smoky yang khas.',
                        'image' => 'images/sei-kupang.jpg'
                    ],
                    [
                        'name' => 'Jagung Bose',
                        'desc' => 'Bubur jagung yang dimasak dengan santan dan kacang-kacangan khas masyarakat Timor.',
                        'image' => 'images/jagung-bose.jpg'
                    ],
                    [
                        'name' => 'Kolo',
                        'desc' => 'Nasi yang dimasak dalam ruas bambu, hidangan tradisional khas Nusa Tenggara Timur.',
                        'image' => 'images/kolo.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1986–1997', 'name' => 'Letkol. Inf. S.K. Lerik (Penjabat/Wali Kota Administratif)'],
                ['period' => '1997–2002', 'name' => 'Letkol. Inf. S.K. Lerik'],
                ['period' => '2002–2012', 'name' => 'Daniel Adoe'],
                ['period' => '2012–2017', 'name' => 'Jonas Salean, S.H., M.Si.'],
                ['period' => '2017–2022', 'name' => 'Jefri Riwu Kore'],
                ['period' => '2023–2024', 'name' => 'Fahrensy Funay (Penjabat)'],
                ['period' => '2025–Sekarang', 'name' => 'dr. Christian Widodo']
            ]
        ],
        'pontianak' => [
            'name' => 'Pontianak',
            'tagline' => 'Kota Khatulistiwa di jantung Kalimantan Barat.',
            'culture' => 'Perpaduan budaya Melayu Pontianak, Tionghoa (Tiochiu/Hakka), dan Dayak: Tari Jepin, robat, dan Meriam Karbit.',
            'diversity' => 'Masyarakat Melayu, Tionghoa, Dayak, Bugis, dan Jawa hidup berdampingan di kota persimpangan Sungai Kapuas dan Sungai Landak.',
            'coordinates' => [-0.0263, 109.3425],
            'description' => 'Pontianak adalah ibu kota Provinsi Kalimantan Barat yang terletak nyaris tepat di garis khatulistiwa, sehingga dijuluki Kota Khatulistiwa. Kota ini tumbuh di pertemuan (delta) Sungai Kapuas dan Sungai Landak, menjadikannya pelabuhan sungai tersibuk sekaligus pusat perdagangan, pemerintahan, dan kebudayaan di Kalimantan Barat. Keberagaman warganya, terutama Melayu, Tionghoa, dan Dayak, tercermin lewat semboyan "Pontianak Bersahabat".',
            'history' => 'Kota ini didirikan pada 23 Oktober 1771 oleh Syarif Abdurrahman Alkadrie, yang kemudian menjadi sultan pertama Kesultanan Pontianak, setelah ia membuka permukiman di titik pertemuan dua sungai besar tersebut. Belanda masuk dan mendirikan pos dagang pada 1779, menjadikan Pontianak pusat administrasi Borneo Barat. Setelah kemerdekaan, kota ini berkembang pesat sebagai ibu kota provinsi, memperoleh status kotamadya penuh pada 1953 dan status kota pada 31 Desember 1965. Setiap 23 Oktober diperingati sebagai Hari Jadi Kota Pontianak.',
            'images' => [
                'costume' => 'images/pakaian-pontianak.jpg',
                'tourism' => 'images/wisata-pontianak.jpg',
                'food' => 'images/kuliner-pontianak.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Pontianak',
                'items' => [
                    [
                        'name' => 'Baju Melayu Teluk Belanga',
                        'desc' => 'Pakaian adat pria Melayu Pontianak berkerah bulat dipadukan kain samping songket dan peci atau tanjak.',
                        'image' => 'images/teluk-belanga-pontianak.jpg'
                    ],
                    [
                        'name' => 'Baju Kurung Melayu Pontianak',
                        'desc' => 'Busana wanita Melayu berupa baju kurung longgar dengan kain songket khas Kesultanan Pontianak.',
                        'image' => 'images/baju-kurung-pontianak.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Kesultanan Pontianak',
                        'desc' => 'Busana kebesaran pengantin bercorak Melayu-Arab dengan mahkota dan hiasan emas peninggalan istana Kadriah.',
                        'image' => 'images/pengantin-pontianak.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Pontianak',
                'items' => [
                    [
                        'name' => 'Tugu Khatulistiwa',
                        'desc' => 'Monumen ikonik yang menandai titik nol derajat garis khatulistiwa, tempat wisatawan merasakan fenomena kulminasi matahari.',
                        'image' => 'images/tugu-khatulistiwa.jpg'
                    ],
                    [
                        'name' => 'Keraton Kadriah',
                        'desc' => 'Istana kayu peninggalan Kesultanan Pontianak yang menyimpan benda pusaka dan sejarah berdirinya kota.',
                        'image' => 'images/keraton-kadriah.jpg'
                    ],
                    [
                        'name' => 'Masjid Jami Sultan Syarif Abdurrahman',
                        'desc' => 'Masjid tertua di Pontianak yang berdiri sejak masa berdirinya kota, berarsitektur khas Melayu di tepi Sungai Kapuas.',
                        'image' => 'images/masjid-jami-pontianak.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Pontianak',
                'items' => [
                    [
                        'name' => 'Bubur Pedas',
                        'desc' => 'Bubur khas Melayu Pontianak berisi aneka sayuran dan rempah sangrai dengan cita rasa gurih pedas.',
                        'image' => 'images/bubur-pedas.jpg'
                    ],
                    [
                        'name' => 'Chai Kwe',
                        'desc' => 'Kue dim sum khas Tionghoa Pontianak berisi bengkuang, kucai, atau talas yang dikukus dan digoreng.',
                        'image' => 'images/chai-kwe.jpg'
                    ],
                    [
                        'name' => 'Es Lidah Buaya & Sotong Pangkong',
                        'desc' => 'Minuman segar dari lidah buaya raksasa khas Pontianak serta cumi kering dipanggang dan dipukul yang jadi camilan malam populer.',
                        'image' => 'images/es-lidah-buaya.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1956–1958', 'name' => 'Roeslan'],
                ['period' => '1958–1967', 'name' => 'Aman Sudarma'],
                ['period' => '1967–1975', 'name' => 'Soelaiman'],
                ['period' => '1976–1981', 'name' => 'Njoo Han Siang'],
                ['period' => '1981–1988', 'name' => 'H. Sabirin Muchtar'],
                ['period' => '1988–1998', 'name' => 'Drs. H. Ismail Ratoe Antaka'],
                ['period' => '1998–2008', 'name' => 'H. Buchary Abdurrachman'],
                ['period' => '2008–2018', 'name' => 'H. Sutarmidji, S.H., M.Hum.'],
                ['period' => '2019–2024', 'name' => 'Edi Rusdi Kamtono, S.T., M.T. (Pj/Definitif)'],
                ['period' => '2025–Sekarang', 'name' => 'Edi Rusdi Kamtono, S.T., M.T.']
            ]
        ],
        'banjarmasin' => [
            'name' => 'Banjarmasin',
            'tagline' => 'Kota seribu sungai.',
            'culture' => 'Budaya Banjar: pasar terapung, sasirangan, dan tradisi bapandung.',
            'diversity' => 'Kehidupan sungai yang menyatukan komunitas Banjar, Jawa, Madura, Bugis, dan Tionghoa.',
            'coordinates' => [-3.3186, 114.5944],
            'description' => 'Banjarmasin adalah kota terbesar di Provinsi Kalimantan Selatan yang dijuluki Kota Seribu Sungai karena dibelah oleh Sungai Barito beserta puluhan anak sungainya. Kehidupan masyarakat Banjar sejak dulu erat dengan sungai, terlihat dari tradisi pasar terapung yang masih bertahan hingga kini.',
            'history' => 'Kota ini bermula dari perebutan kekuasaan Kerajaan Daha, ketika Pangeran Samudera (kelak bergelar Sultan Suriansyah) mendirikan pusat pemerintahan baru di tepian Sungai Kuin pada 24 September 1526 dan memeluk Islam, menandai berdirinya Kesultanan Banjar. Belanda kemudian menguasai kota ini pada abad ke-19 setelah Perang Banjar. Banjarmasin resmi menjadi ibu kota Provinsi Kalimantan Selatan setelah kemerdekaan dan terus berkembang sebagai pusat perdagangan sungai terbesar di Kalimantan.',
            'images' => [
                'costume' => 'images/pakaian-banjarmasin.jpg',
                'tourism' => 'images/wisata-banjarmasin.jpg',
                'food' => 'images/kuliner-banjarmasin.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Banjarmasin',
                'items' => [
                    [
                        'name' => 'Baamar Galung Pancar Matahari',
                        'desc' => 'Busana pengantin kebesaran Banjar berhiaskan mahkota bersinar matahari dan kain sasirangan berwarna keemasan.',
                        'image' => 'images/baamar-galung.jpg'
                    ],
                    [
                        'name' => 'Babaju Kun Galung Pacinan',
                        'desc' => 'Busana pengantin Banjar hasil akulturasi budaya Tionghoa dengan kerudung panjang dan warna cerah.',
                        'image' => 'images/babaju-kun-galung.jpg'
                    ],
                    [
                        'name' => 'Baju Sasirangan',
                        'desc' => 'Pakaian sehari-hari dari kain sasirangan, kain celup ikat khas Banjar yang dipercaya memiliki nilai magis dan estetika tinggi.',
                        'image' => 'images/baju-sasirangan.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Banjarmasin',
                'items' => [
                    [
                        'name' => 'Pasar Terapung Lok Baintan',
                        'desc' => 'Pasar tradisional di atas Sungai Martapura tempat pedagang bertransaksi dari atas jukung sejak subuh.',
                        'image' => 'images/pasar-terapung.jpg'
                    ],
                    [
                        'name' => 'Masjid Sultan Suriansyah',
                        'desc' => 'Masjid tertua di Kalimantan Selatan, peninggalan Kesultanan Banjar yang berdiri sejak abad ke-16.',
                        'image' => 'images/masjid-sultan-suriansyah.jpg'
                    ],
                    [
                        'name' => 'Menara Pandang & Siring Sungai Martapura',
                        'desc' => 'Kawasan tepi sungai di pusat kota untuk menikmati panorama Sungai Martapura dan aktivitas warga.',
                        'image' => 'images/menara-pandang.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Banjarmasin',
                'items' => [
                    [
                        'name' => 'Soto Banjar',
                        'desc' => 'Soto berkuah bening beraroma rempah dan susu, disajikan dengan suwiran ayam, telur, dan perkedel.',
                        'image' => 'images/soto-banjar.jpg'
                    ],
                    [
                        'name' => 'Ketupat Kandangan',
                        'desc' => 'Ketupat khas Banjar yang disiram kuah santan berisi ikan gabus atau haruan panggang.',
                        'image' => 'images/ketupat-kandangan.jpg'
                    ],
                    [
                        'name' => 'Ipau & Amparan Tatak',
                        'desc' => 'Kudapan gulungan telur dadar berisi bihun serta kue lapis santan manis khas Banjar.',
                        'image' => 'images/ipau.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1950–1957', 'name' => 'H. Maksid'],
                ['period' => '1957–1960', 'name' => 'Muchtar Idham'],
                ['period' => '1960–1968', 'name' => 'H. Winst Zakaria Achmad'],
                ['period' => '1968–1976', 'name' => 'H. Aberani Sulaiman'],
                ['period' => '1976–1984', 'name' => 'H. Abdul Kadir'],
                ['period' => '1984–1994', 'name' => 'H. Sadjoko'],
                ['period' => '1994–2000', 'name' => 'H. A. Yudhi Wahyuni'],
                ['period' => '2000–2005', 'name' => 'H. Sofyan Arpan'],
                ['period' => '2005–2015', 'name' => 'H. A. Yudhi Wahyuni'],
                ['period' => '2016–2025', 'name' => 'H. Ibnu Sina, S.Ked.'],
                ['period' => '2025–Sekarang', 'name' => 'H. Muhammad Yamin HR']
            ]
        ],
        'singkawang' => [
            'name' => 'Singkawang',
            'tagline' => 'Kota seribu kelenteng di pesisir Kalimantan Barat.',
            'culture' => 'Perayaan Cap Go Meh, budaya Tionghoa Hakka, serta tradisi Dayak dan Melayu.',
            'diversity' => 'Harmoni masyarakat Tionghoa, Dayak, dan Melayu.',
            'coordinates' => [0.9022, 108.9811],
            'description' => 'Singkawang adalah kota di pesisir barat Kalimantan Barat yang menyimpan warisan akulturasi Tionghoa Hakka, Dayak, dan Melayu yang sangat kental. Kota ini dijuluki Kota Seribu Kelenteng dan terkenal di seluruh dunia karena perayaan Cap Go Meh dengan atraksi tatung yang unik.',
            'history' => 'Nama Singkawang berasal dari bahasa Hakka "San Khew Jong" yang berarti kota di pegunungan dekat laut dan muara sungai. Kawasan ini mulai ramai sejak abad ke-18 saat para penambang emas Tionghoa (kongsi) datang atas undangan Kesultanan Sambas dan Mempawah. Pada masa kolonial, Singkawang berkembang menjadi kota dagang penting di pesisir barat Kalimantan, dan resmi menjadi kota otonom terpisah dari Kabupaten Sambas pada 21 Juni 2001.',
            'images' => [
                'costume' => 'images/pakaian-singkawang.jpg',
                'tourism' => 'images/wisata-singkawang.jpg',
                'food' => 'images/kuliner-singkawang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Singkawang',
                'items' => [
                    [
                        'name' => 'Cheongsam/Changshan Tionghoa Singkawang',
                        'desc' => 'Busana tradisional Tionghoa yang dikenakan warga keturunan Hakka saat perayaan Imlek dan Cap Go Meh.',
                        'image' => 'images/cheongsam-singkawang.jpg'
                    ],
                    [
                        'name' => 'Baju Melayu Sambas',
                        'desc' => 'Pakaian adat Melayu pesisir Kalimantan Barat dengan kain songket khas Sambas yang juga dipakai warga Singkawang.',
                        'image' => 'images/melayu-sambas.jpg'
                    ],
                    [
                        'name' => 'Pakaian Adat Dayak Pesisir',
                        'desc' => 'Busana adat Dayak yang dikenakan komunitas Dayak di sekitar Singkawang pada upacara adat dan festival budaya.',
                        'image' => 'images/dayak-pesisir-singkawang.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Singkawang',
                'items' => [
                    [
                        'name' => 'Vihara Tri Dharma Bumi Raya',
                        'desc' => 'Kelenteng tertua dan terbesar di Singkawang yang menjadi pusat perayaan Cap Go Meh setiap tahun.',
                        'image' => 'images/vihara-tri-dharma.jpg'
                    ],
                    [
                        'name' => 'Pantai Pasir Panjang',
                        'desc' => 'Pantai landai berpasir putih yang menjadi destinasi favorit wisatawan lokal maupun mancanegara.',
                        'image' => 'images/pantai-pasir-panjang.jpg'
                    ],
                    [
                        'name' => 'Taman Burung & Bukit Bougenville',
                        'desc' => 'Kawasan wisata alam dan taman bunga bougenville yang menjadi ikon julukan Kota Seribu Bunga.',
                        'image' => 'images/bukit-bougenville.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Singkawang',
                'items' => [
                    [
                        'name' => 'Bakmi Singkawang',
                        'desc' => 'Mie khas dengan tekstur kenyal disajikan kering berminyak babi atau ayam dengan pangsit dan sayuran.',
                        'image' => 'images/bakmi-singkawang.jpg'
                    ],
                    [
                        'name' => 'Choi Pan',
                        'desc' => 'Kudapan kukus berbahan tepung beras berisi bengkuang, kucai, dan rebung, disajikan dengan sambal khas.',
                        'image' => 'images/choi-pan.jpg'
                    ],
                    [
                        'name' => 'Kue Bulan & Kopi Singkawang',
                        'desc' => 'Kue bulan (mooncake) khas perayaan Tionghoa serta kopi bubuk Singkawang yang terkenal harum dan legit.',
                        'image' => 'images/kue-bulan-singkawang.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2001–2002', 'name' => 'Chalikul Bahri (Pj)'],
                ['period' => '2003–2007', 'name' => 'H. Awang Ishak, S.Sos., M.Si.'],
                ['period' => '2007–2012', 'name' => 'Drs. Hasan Karman, M.M.'],
                ['period' => '2013–2018', 'name' => 'H. Awang Ishak, S.Sos., M.Si.'],
                ['period' => '2018–2023', 'name' => 'Tjhai Chui Mie'],
                ['period' => '2023–2025', 'name' => 'Sumastro, S.Pd., M.M. (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Tjhai Chui Mie']
            ]
        ],
        'palangka-raya' => [
            'name' => 'Palangka Raya',
            'tagline' => 'Kota terencana di jantung Kalimantan Tengah.',
            'culture' => 'Warisan budaya Dayak Ngaju: sandung, tari manasai, dan rumah betang.',
            'diversity' => 'Beragam sub-suku Dayak berpadu dengan pendatang Jawa dan Banjar.',
            'coordinates' => [-2.2090, 113.9213],
            'description' => 'Palangka Raya adalah ibu kota Provinsi Kalimantan Tengah yang dikenal sebagai salah satu kota dengan wilayah administratif terluas di Indonesia. Kota ini dirancang khusus sebagai kota modern di tengah hutan Kalimantan dan bahkan pernah diwacanakan sebagai calon ibu kota negara pada era 1950-an.',
            'history' => 'Palangka Raya diresmikan langsung oleh Presiden Sukarno pada 17 Juli 1957 dengan peletakan batu pertama sebagai ibu kota Provinsi Kalimantan Tengah yang baru dibentuk, menggantikan rencana lama menjadikan Banjarmasin sebagai pusat provinsi. Nama "Palangka Raya" berarti "wadah/tempat yang besar dan mulia" dalam bahasa Dayak Ngaju. Kota ini dirancang dengan tata kota modern yang lebar dan lurus, mencerminkan visi Sukarno akan kota masa depan di Kalimantan.',
            'images' => [
                'costume' => 'images/pakaian-palangka-raya.jpg',
                'tourism' => 'images/wisata-palangka-raya.jpg',
                'food' => 'images/kuliner-palangka-raya.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Palangka Raya',
                'items' => [
                    [
                        'name' => 'Baju Adat Dayak Ngaju (Pria)',
                        'desc' => 'Busana pria Dayak Ngaju berupa rompi dan penutup kepala dari kulit kayu nyamu berhiaskan manik-manik dan bulu enggang.',
                        'image' => 'images/dayak-ngaju-pria.jpg'
                    ],
                    [
                        'name' => 'Baju Adat Dayak Ngaju (Wanita)',
                        'desc' => 'Busana wanita Dayak Ngaju dengan rok dan penutup dada dari kulit kayu, dihias manik-manik warna-warni.',
                        'image' => 'images/dayak-ngaju-wanita.jpg'
                    ],
                    [
                        'name' => 'Hiasan Kepala Bulu Enggang',
                        'desc' => 'Mahkota bulu burung enggang yang menjadi simbol kehormatan dan keberanian dalam busana adat Dayak.',
                        'image' => 'images/bulu-enggang.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Palangka Raya',
                'items' => [
                    [
                        'name' => 'Jembatan Kahayan',
                        'desc' => 'Jembatan ikonik yang membentang di atas Sungai Kahayan dan menjadi lambang kebanggaan Kota Palangka Raya.',
                        'image' => 'images/jembatan-kahayan.jpg'
                    ],
                    [
                        'name' => 'Museum Balanga',
                        'desc' => 'Museum yang menyimpan koleksi budaya dan sejarah masyarakat Dayak di Kalimantan Tengah.',
                        'image' => 'images/museum-balanga.jpg'
                    ],
                    [
                        'name' => 'Bukit Tangkiling',
                        'desc' => 'Kawasan perbukitan batu granit unik yang menjadi destinasi trekking dan wisata alam favorit.',
                        'image' => 'images/bukit-tangkiling.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Palangka Raya',
                'items' => [
                    [
                        'name' => 'Juhu Singkah',
                        'desc' => 'Sayur berbahan umbut rotan muda dimasak santan dengan ikan atau daging, cita rasa khas Dayak Ngaju.',
                        'image' => 'images/juhu-singkah.jpg'
                    ],
                    [
                        'name' => 'Kalumpe',
                        'desc' => 'Sayur daun singkong tumbuk yang dimasak dengan terong dan ikan, hidangan khas Kalimantan Tengah.',
                        'image' => 'images/kalumpe.jpg'
                    ],
                    [
                        'name' => 'Wadi',
                        'desc' => 'Ikan atau daging yang difermentasi dengan garam dan beras sangrai, lauk khas yang tahan lama ala Dayak.',
                        'image' => 'images/wadi.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1965–1968', 'name' => 'W. Coenrad'],
                ['period' => '1968–1978', 'name' => 'Lukas Tingkes'],
                ['period' => '1978–1988', 'name' => 'Drs. Lauren Kudam'],
                ['period' => '1988–1998', 'name' => 'Drs. Ampi Karna'],
                ['period' => '1998–2003', 'name' => 'Drs. Sabirin Aripin'],
                ['period' => '2003–2013', 'name' => 'H. Riban Satia, S.Sos., M.Si.'],
                ['period' => '2013–2023', 'name' => 'Dr. Fairid Naparin, S.E., M.Si.'],
                ['period' => '2023–2024', 'name' => 'Hera Nugrahayu, S.T., M.T. (Pj)'],
                ['period' => '2024–Sekarang', 'name' => 'Akhmad Husain, S.Sos., M.Si. (Pj)']
            ]
        ],
        'banjarbaru' => [
            'name' => 'Banjarbaru',
            'tagline' => 'Kota pusat pemerintahan baru Kalimantan Selatan.',
            'culture' => 'Warisan budaya Banjar berpadu dengan kehidupan kota modern.',
            'diversity' => 'Masyarakat Banjar, Dayak, dan pendatang lintas daerah.',
            'coordinates' => [-3.4380, 114.8380],
            'description' => 'Banjarbaru adalah kota terbesar kedua di Kalimantan Selatan yang kini berstatus sebagai ibu kota provinsi menggantikan Banjarmasin. Kota ini dibangun sebagai kawasan permukiman modern dengan udara lebih sejuk dan bebas banjir dibanding Banjarmasin yang berada di dataran rendah rawa.',
            'history' => 'Dibangun sejak 1951 atas prakarsa Gubernur Kalimantan dr. Murjani sebagai kota pengganti yang lebih layak huni menggantikan Banjarmasin yang rawan banjir pasang surut. Nama Banjarbaru berarti "Banjar yang baru". Kota ini resmi menjadi kota otonom terpisah dari Kabupaten Banjar pada 20 April 1999, dan pada 2022 pemerintah menetapkan Banjarbaru sebagai ibu kota baru Provinsi Kalimantan Selatan menggantikan Banjarmasin.',
            'images' => [
                'costume' => 'images/pakaian-banjarbaru.jpg',
                'tourism' => 'images/wisata-banjarbaru.jpg',
                'food' => 'images/kuliner-banjarbaru.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Banjarbaru',
                'items' => [
                    [
                        'name' => 'Baamar Galung Pancar Matahari',
                        'desc' => 'Busana pengantin kebesaran Banjar yang juga dilestarikan di Banjarbaru sebagai ibu kota budaya baru Kalsel.',
                        'image' => 'images/baamar-galung-banjarbaru.jpg'
                    ],
                    [
                        'name' => 'Baju Sasirangan Banjarbaru',
                        'desc' => 'Pakaian sehari-hari dari kain sasirangan bercorak khas yang dikembangkan para perajin di Banjarbaru.',
                        'image' => 'images/sasirangan-banjarbaru.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Banjarbaru',
                'items' => [
                    [
                        'name' => 'Museum Lambung Mangkurat',
                        'desc' => 'Museum negeri yang menyimpan koleksi sejarah, budaya, dan arkeologi Kalimantan Selatan.',
                        'image' => 'images/museum-lambung-mangkurat.jpg'
                    ],
                    [
                        'name' => 'Bukit Berbunga & Taman Van Der Pijl',
                        'desc' => 'Kawasan hijau perbukitan bekas taman peninggalan Belanda yang menjadi ruang publik dan area rekreasi warga.',
                        'image' => 'images/bukit-berbunga.jpg'
                    ],
                    [
                        'name' => 'Taman Bunga Cahaya Bumi Selamat',
                        'desc' => 'Taman bunga penuh warna yang menjadi salah satu ikon wisata baru Banjarbaru.',
                        'image' => 'images/taman-bunga-banjarbaru.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Banjarbaru',
                'items' => [
                    [
                        'name' => 'Soto Banjar Banjarbaru',
                        'desc' => 'Varian soto khas Banjar berkuah bening susu yang juga populer di kota baru ini.',
                        'image' => 'images/soto-banjar-banjarbaru.jpg'
                    ],
                    [
                        'name' => 'Amparan Tatak',
                        'desc' => 'Kue lapis santan manis berbahan pisang atau labu yang menjadi jajanan khas masyarakat Banjar.',
                        'image' => 'images/amparan-tatak.jpg'
                    ],
                    [
                        'name' => 'Gangan Asam Banjar',
                        'desc' => 'Sayur asam khas Banjar berisi ikan dan nanas yang menyegarkan, biasa disantap dengan nasi hangat.',
                        'image' => 'images/gangan-asam.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1999–2000', 'name' => 'H. Rudy Resnawan (Pj)'],
                ['period' => '2000–2005', 'name' => 'H. Rudy Resnawan'],
                ['period' => '2005–2015', 'name' => 'H. Rudy Resnawan'],
                ['period' => '2015–2020', 'name' => 'H. M. Ruzaidin Noor'],
                ['period' => '2021–2024', 'name' => 'H. M. Aditya Mufti Ariffin'],
                ['period' => '2024–2025', 'name' => 'Ali Rakhman, S.Sos., M.M. (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Hj. Erna Lisa Halaby']
            ]
        ],
        'samarinda' => [
            'name' => 'Samarinda',
            'tagline' => 'Kota tepian Sungai Mahakam, ibu kota Kalimantan Timur.',
            'culture' => 'Sarung tenun Samarinda, budaya Kutai, dan tradisi Bugis perantau.',
            'diversity' => 'Perpaduan masyarakat Kutai, Bugis, Banjar, dan Dayak.',
            'coordinates' => [-0.5022, 117.1536],
            'description' => 'Samarinda adalah ibu kota Provinsi Kalimantan Timur yang membentang di kedua tepi Sungai Mahakam. Kota ini dikenal sebagai kota tenun karena Sarung Samarinda yang khas, serta menjadi pusat perdagangan dan jasa terbesar di Kalimantan Timur.',
            'history' => 'Berawal dari kedatangan para perantau Bugis-Wajo pimpinan La Mohang Daeng Mangkona pada 1668 yang menetap di tepian Sungai Mahakam atas izin Kesultanan Kutai Kartanegara. Permukiman ini berkembang pesat menjadi bandar dagang penting berkat lalu lintas Sungai Mahakam, dan pada masa kolonial Belanda menjadi pusat administrasi Afdeling Kutai. Samarinda resmi menjadi kota dan kemudian ditetapkan sebagai ibu kota Provinsi Kalimantan Timur setelah kemerdekaan.',
            'images' => [
                'costume' => 'images/pakaian-samarinda.jpg',
                'tourism' => 'images/wisata-samarinda.jpg',
                'food' => 'images/kuliner-samarinda.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Samarinda',
                'items' => [
                    [
                        'name' => 'Baju Kustim',
                        'desc' => 'Pakaian adat pria Kutai berupa jas tertutup berkerah tinggi yang dikenakan bangsawan Kesultanan Kutai.',
                        'image' => 'images/baju-kustim.jpg'
                    ],
                    [
                        'name' => 'Baju Miskat',
                        'desc' => 'Busana wanita Kutai dengan sarung tenun Samarinda dan hiasan kepala berhias manik-manik.',
                        'image' => 'images/baju-miskat.jpg'
                    ],
                    [
                        'name' => 'Sarung Tenun Samarinda',
                        'desc' => 'Kain sarung tenun benang emas khas Samarinda hasil akulturasi pengrajin Bugis yang menjadi identitas kota.',
                        'image' => 'images/sarung-samarinda.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Samarinda',
                'items' => [
                    [
                        'name' => 'Islamic Center Samarinda',
                        'desc' => 'Masjid megah dengan kubah emas di tepi Sungai Mahakam yang menjadi salah satu masjid terbesar di Indonesia.',
                        'image' => 'images/islamic-center-samarinda.jpg'
                    ],
                    [
                        'name' => 'Jembatan Mahakam',
                        'desc' => 'Jembatan ikonik yang membentang di atas Sungai Mahakam dan menjadi simbol Kota Samarinda.',
                        'image' => 'images/jembatan-mahakam.jpg'
                    ],
                    [
                        'name' => 'Air Terjun Tanah Merah',
                        'desc' => 'Kawasan wisata alam air terjun bertingkat yang menjadi tujuan rekreasi keluarga di pinggiran kota.',
                        'image' => 'images/air-terjun-tanah-merah.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Samarinda',
                'items' => [
                    [
                        'name' => 'Nasi Bekepor',
                        'desc' => 'Nasi gurih dimasak dengan minyak sayur dan ikan asin, dimasak langsung dalam kastrol khas Kutai.',
                        'image' => 'images/nasi-bekepor.jpg'
                    ],
                    [
                        'name' => 'Gence Ruan',
                        'desc' => 'Ikan gabus (haruan) bakar berbumbu sambal khas Kutai dengan cita rasa pedas gurih.',
                        'image' => 'images/gence-ruan.jpg'
                    ],
                    [
                        'name' => 'Amplang',
                        'desc' => 'Kerupuk ikan tenggiri renyah khas Samarinda yang populer sebagai oleh-oleh dari Kalimantan Timur.',
                        'image' => 'images/amplang.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1960–1965', 'name' => 'R. Soekardan'],
                ['period' => '1970–1975', 'name' => 'Drs. H. Ahmad Dahlan'],
                ['period' => '1980–1990', 'name' => 'Drs. H. Waris Husain'],
                ['period' => '1990–1995', 'name' => 'H. Barmawi Waly'],
                ['period' => '1995–2000', 'name' => 'H. Sarwoko'],
                ['period' => '2000–2005', 'name' => 'H. Achmad Amins'],
                ['period' => '2005–2010', 'name' => 'H. Achmad Amins'],
                ['period' => '2010–2015', 'name' => 'H. Syaharie Jaang'],
                ['period' => '2016–2021', 'name' => 'H. Syaharie Jaang'],
                ['period' => '2021–2025', 'name' => 'Dr. H. Andi Harun, S.H., M.H.'],
                ['period' => '2025–Sekarang', 'name' => 'Dr. H. Andi Harun, S.H., M.H.']
            ]
        ],
        'balikpapan' => [
            'name' => 'Balikpapan',
            'tagline' => 'Kota minyak di tepi Selat Makassar.',
            'culture' => 'Perpaduan budaya Kutai, Paser, dan pendatang dari seluruh Indonesia.',
            'diversity' => 'Kota multietnis pekerja industri migas dan perdagangan.',
            'coordinates' => [-1.2379, 116.8529],
            'description' => 'Balikpapan adalah kota terbesar dan pusat bisnis di Provinsi Kalimantan Timur yang dijuluki Kota Minyak karena sejarah panjangnya sebagai pusat industri perminyakan sejak zaman kolonial. Kini Balikpapan juga menjadi kota penyangga utama Ibu Kota Nusantara (IKN) yang berada tidak jauh dari wilayahnya.',
            'history' => 'Nama Balikpapan dikaitkan dengan legenda hilangnya sekeping papan upah pembangunan rumah yang tak kunjung "balik" atau kembali. Titik balik sejarah kota ini terjadi pada 10 Februari 1897 saat sumur minyak pertama berhasil dibor oleh perusahaan Belanda Mathilda, tanggal yang kemudian diperingati sebagai Hari Jadi Kota Balikpapan. Selama Perang Dunia II, kota ini menjadi ajang pertempuran sengit karena kilang minyaknya yang strategis. Setelah kemerdekaan, Balikpapan tumbuh pesat menjadi kota industri dan jasa terbesar di Kalimantan Timur.',
            'images' => [
                'costume' => 'images/pakaian-balikpapan.jpg',
                'tourism' => 'images/wisata-balikpapan.jpg',
                'food' => 'images/kuliner-balikpapan.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Balikpapan',
                'items' => [
                    [
                        'name' => 'Baju Kustim Kutai',
                        'desc' => 'Pakaian adat pria bangsawan Kutai yang juga lazim dikenakan pada upacara adat di Balikpapan.',
                        'image' => 'images/kustim-balikpapan.jpg'
                    ],
                    [
                        'name' => 'Pakaian Adat Paser',
                        'desc' => 'Busana adat suku Paser, penduduk asli sekitar Balikpapan, dengan kain tenun dan hiasan manik khas.',
                        'image' => 'images/pakaian-paser.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Balikpapan',
                'items' => [
                    [
                        'name' => 'Pantai Melawai & Kilo 5',
                        'desc' => 'Pantai populer di pusat kota yang ramai dikunjungi warga untuk menikmati matahari terbenam di Selat Makassar.',
                        'image' => 'images/pantai-melawai.jpg'
                    ],
                    [
                        'name' => 'Hutan Lindung Sungai Wain',
                        'desc' => 'Kawasan konservasi hutan tropis di tengah kota yang menjadi rumah bagi orangutan dan beruang madu.',
                        'image' => 'images/hutan-sungai-wain.jpg'
                    ],
                    [
                        'name' => 'Pantai Manggar Segarasari',
                        'desc' => 'Pantai wisata keluarga dengan pasir putih yang menjadi lokasi favorit rekreasi akhir pekan warga Balikpapan.',
                        'image' => 'images/pantai-manggar.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Balikpapan',
                'items' => [
                    [
                        'name' => 'Kepiting Soka',
                        'desc' => 'Olahan kepiting cangkang lunak yang bisa disantap utuh, digoreng crispy atau dimasak saus khas Balikpapan.',
                        'image' => 'images/kepiting-soka.jpg'
                    ],
                    [
                        'name' => 'Sanggar/Sambal Lala',
                        'desc' => 'Sambal khas berbahan udang atau ikan lala (kerang kecil) dengan cita rasa pedas dan segar dari perairan Balikpapan.',
                        'image' => 'images/sambal-lala.jpg'
                    ],
                    [
                        'name' => 'Nasi Kuning Balikpapan',
                        'desc' => 'Nasi kuning gurih khas sarapan warga Balikpapan yang biasa dijajakan bersama lauk ikan dan sambal goreng.',
                        'image' => 'images/nasi-kuning-balikpapan.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1960–1965', 'name' => 'R. Soewondo'],
                ['period' => '1980–1988', 'name' => 'H. A. Kadir Sablie'],
                ['period' => '1988–1998', 'name' => 'H. Tjutju Sumarna'],
                ['period' => '1998–2001', 'name' => 'H. Herman Rrivai'],
                ['period' => '2001–2006', 'name' => 'H. Imdaad Hamid, S.E.'],
                ['period' => '2006–2011', 'name' => 'H. Imdaad Hamid, S.E.'],
                ['period' => '2011–2016', 'name' => 'H. Rizal Effendi, S.E.'],
                ['period' => '2016–2021', 'name' => 'H. Rizal Effendi, S.E.'],
                ['period' => '2021–2025', 'name' => 'H. Rahmad Mas\'ud, S.E., M.E.'],
                ['period' => '2025–Sekarang', 'name' => 'H. Rahmad Mas\'ud, S.E., M.E.']
            ]
        ],
        'bontang' => [
            'name' => 'Bontang',
            'tagline' => 'Kota industri gas alam di pesisir Kalimantan Timur.',
            'culture' => 'Tradisi nelayan Bugis dan budaya Kutai berpadu kehidupan industri modern.',
            'diversity' => 'Komunitas pekerja migas dari berbagai daerah di Indonesia.',
            'coordinates' => [0.1324, 117.4797],
            'description' => 'Bontang adalah kota kecil namun makmur di pesisir timur Kalimantan Timur yang menjadi pusat industri gas alam cair dan pupuk nasional. Meski wilayahnya tak luas, Bontang tercatat sebagai salah satu kota dengan pendapatan daerah per kapita tertinggi di Indonesia berkat kontribusi industri migasnya.',
            'history' => 'Bontang awalnya merupakan sebuah kampung nelayan kecil Suku Kutai dan Bugis di tepi Teluk Bontang. Wajah kota berubah drastis sejak ditemukannya cadangan gas alam besar dan berdirinya kilang LNG Badak (Badak NGL) pada 1974 serta pabrik pupuk PT Pupuk Kalimantan Timur, yang menarik ribuan pekerja dari seluruh Indonesia. Bontang resmi menjadi kota otonom terpisah dari Kabupaten Kutai pada 12 Oktober 1999 (efektif 2001).',
            'images' => [
                'costume' => 'images/pakaian-bontang.jpg',
                'tourism' => 'images/wisata-bontang.jpg',
                'food' => 'images/kuliner-bontang.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Bontang',
                'items' => [
                    [
                        'name' => 'Baju Kustim Kutai',
                        'desc' => 'Busana adat Kutai yang dilestarikan warga Bontang dalam upacara dan festival budaya kota.',
                        'image' => 'images/kustim-bontang.jpg'
                    ],
                    [
                        'name' => 'Baju Bodo Bugis',
                        'desc' => 'Busana adat khas Bugis yang dikenakan komunitas keturunan Bugis, kelompok pendiri awal permukiman Bontang.',
                        'image' => 'images/baju-bodo-bontang.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Bontang',
                'items' => [
                    [
                        'name' => 'Bontang Kuala',
                        'desc' => 'Perkampungan nelayan di atas air dengan rumah panggung kayu yang menjadi ikon wisata bahari Bontang.',
                        'image' => 'images/bontang-kuala.jpg'
                    ],
                    [
                        'name' => 'Pulau Beras Basah',
                        'desc' => 'Pulau kecil berpasir putih dengan mercusuar tua yang menjadi destinasi snorkeling favorit di Teluk Bontang.',
                        'image' => 'images/pulau-beras-basah.jpg'
                    ],
                    [
                        'name' => 'Taman Nasional Kutai (Sekitar)',
                        'desc' => 'Kawasan konservasi hutan hujan tropis yang berbatasan dengan wilayah Bontang, rumah bagi orangutan Kalimantan.',
                        'image' => 'images/taman-nasional-kutai.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Bontang',
                'items' => [
                    [
                        'name' => 'Sate Uong',
                        'desc' => 'Sate ikan pari khas pesisir Bontang yang dibumbui rempah dan dibakar dengan cita rasa gurih pedas.',
                        'image' => 'images/sate-uong.jpg'
                    ],
                    [
                        'name' => 'Gami Nur',
                        'desc' => 'Olahan gulai ikan laut segar berkuah kuning khas masyarakat pesisir Bontang.',
                        'image' => 'images/gami-nur.jpg'
                    ],
                    [
                        'name' => 'Kerupuk & Amplang Bontang',
                        'desc' => 'Kerupuk dan amplang ikan tenggiri khas hasil laut Bontang yang menjadi oleh-oleh populer.',
                        'image' => 'images/amplang-bontang.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1999–2001', 'name' => 'H. Sofyan Hasdam, S.E. (Pj)'],
                ['period' => '2001–2006', 'name' => 'H. Andi Sofyan Hasdam, S.E.'],
                ['period' => '2006–2011', 'name' => 'H. Andi Sofyan Hasdam, S.E.'],
                ['period' => '2011–2016', 'name' => 'Ir. H. Adi Darma'],
                ['period' => '2016–2021', 'name' => 'Ir. H. Neni Moerniaeni, Sp.OG.'],
                ['period' => '2021–Sekarang', 'name' => 'H. Basri Rase, S.Sos.']
            ]
        ],
        'tarakan' => [
            'name' => 'Tarakan',
            'tagline' => 'Pulau minyak bersejarah di ujung utara Kalimantan.',
            'culture' => 'Budaya Tidung, jejak sejarah Perang Dunia II, dan tradisi pesisir.',
            'diversity' => 'Masyarakat Tidung, Bugis, Jawa, dan Tionghoa di pulau perbatasan.',
            'coordinates' => [3.3273, 117.5830],
            'description' => 'Tarakan adalah kota pulau di pesisir Kalimantan Utara yang menjadi pusat ekonomi dan pintu gerbang utama kawasan perbatasan utara Indonesia. Kota ini menyimpan sejarah panjang sebagai ladang minyak dan medan pertempuran penting pada Perang Dunia II.',
            'history' => 'Wilayah ini semula bagian dari Kesultanan Bulungan yang dihuni Suku Tidung. Perusahaan minyak Belanda BPM mulai mengeksploitasi cadangan minyak Tarakan sejak awal abad ke-20, menjadikannya pulau industri penting. Karena nilai strategisnya, Tarakan menjadi lokasi Pertempuran Tarakan yang sengit antara Jepang dan Sekutu pada 1942 dan 1945 di masa Perang Dunia II. Tarakan resmi menjadi kotamadya pada 15 Desember 1997, dan sejak pembentukan Provinsi Kalimantan Utara pada 2012, kota ini menjadi pusat perekonomian utama provinsi tersebut.',
            'images' => [
                'costume' => 'images/pakaian-tarakan.jpg',
                'tourism' => 'images/wisata-tarakan.jpg',
                'food' => 'images/kuliner-tarakan.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Tarakan',
                'items' => [
                    [
                        'name' => 'Baju Adat Tidung (Pria)',
                        'desc' => 'Busana pria Tidung berupa jas tertutup berwarna cerah dengan penutup kepala khas peninggalan Kesultanan Bulungan-Tidung.',
                        'image' => 'images/adat-tidung-pria.jpg'
                    ],
                    [
                        'name' => 'Baju Adat Tidung (Wanita)',
                        'desc' => 'Busana wanita Tidung dengan kain songket dan hiasan kepala berhias manik-manik dan bunga emas.',
                        'image' => 'images/adat-tidung-wanita.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Tarakan',
                'items' => [
                    [
                        'name' => 'Pantai Amal',
                        'desc' => 'Pantai populer di Tarakan yang terkenal dengan kuliner kepiting dan panorama matahari terbit.',
                        'image' => 'images/pantai-amal.jpg'
                    ],
                    [
                        'name' => 'Hutan Mangrove & Konservasi Bekantan',
                        'desc' => 'Kawasan konservasi hutan bakau di tengah kota yang menjadi habitat bekantan, monyet berhidung panjang khas Kalimantan.',
                        'image' => 'images/konservasi-bekantan.jpg'
                    ],
                    [
                        'name' => 'Museum Rumah Bundar',
                        'desc' => 'Bangunan bersejarah peninggalan era kolonial dan Perang Dunia II yang kini menjadi museum kota.',
                        'image' => 'images/rumah-bundar.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Tarakan',
                'items' => [
                    [
                        'name' => 'Kepiting Soka Tarakan',
                        'desc' => 'Kepiting cangkang lunak khas perairan Tarakan yang dimasak saus tiram, mentega, atau lada hitam.',
                        'image' => 'images/kepiting-soka-tarakan.jpg'
                    ],
                    [
                        'name' => 'Udang Tarakan',
                        'desc' => 'Udang segar hasil tangkapan lokal yang diolah menjadi berbagai hidangan gurih khas pesisir Tarakan.',
                        'image' => 'images/udang-tarakan.jpg'
                    ],
                    [
                        'name' => 'Sate Tarakan',
                        'desc' => 'Sate daging dengan bumbu rempah khas Tarakan yang dipengaruhi cita rasa Bugis dan Tidung.',
                        'image' => 'images/sate-tarakan.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1997–1999', 'name' => 'H. Suhardjo Trianto (Pj)'],
                ['period' => '1999–2004', 'name' => 'H. Jusuf Serang Kasim, S.E.'],
                ['period' => '2004–2009', 'name' => 'H. Jusuf Serang Kasim, S.E.'],
                ['period' => '2009–2014', 'name' => 'dr. H. Udin Hianggio, M.M.'],
                ['period' => '2014–2019', 'name' => 'dr. H. Khairul, M.Kes.'],
                ['period' => '2019–2024', 'name' => 'dr. H. Khairul, M.Kes.'],
                ['period' => '2024–Sekarang', 'name' => 'H. Ferdiansyah, S.STP., M.Si. (Pj)']
            ]
        ],
        'manado' => [
            'name' => 'Manado',
            'tagline' => 'Kota pesisir Sulawesi Utara.',
            'culture' => 'Waruga, musik kolintang, dan tradisi Minahasa.',
            'diversity' => 'Minahasa, Sangihe, Bolaang Mongondow, dan banyak komunitas lain.',
            'coordinates' => [1.4748, 124.8421],
            'description' => 'Manado adalah ibu kota Provinsi Sulawesi Utara yang membentang di Teluk Manado, dikelilingi pegunungan dan berhadapan langsung dengan Taman Nasional Bunaken. Kota yang menjunjung falsafah "Si Tou Timou Tumou Tou" (manusia hidup untuk memanusiakan orang lain) ini menjadi rumah bagi masyarakat Minahasa, Sangihe, Bolaang Mongondow, Tionghoa, dan pendatang lain yang hidup rukun, sehingga Manado juga dijuluki Kota Seribu Gereja dan Kota Tinutuan.',
            'history' => 'Bangsa Spanyol semula mendirikan benteng di Pulau Manado Tua, namun memindahkannya ke Wanua Wenang pada awal abad ke-17 karena wabah penyakit. Sejak saat itu, nama "Manado" mulai populer menggantikan sebutan Wenang dan Pogidon pada 1623. VOC kemudian membangun benteng "De Nederlandsche Vastigheid" pada 1658 di bawah perintah Gubernur Simon Cos. Hari Jadi Kota Manado ditetapkan pada 14 Juli 1623, tanggal yang menggabungkan tiga tonggak sejarah sekaligus: unsur historis tahun 1623 saat nama Manado mulai dipakai, unsur yuridis Juli 1919 ketika Gewest Manado ditetapkan sebagai Staats Gemeente oleh Hindia Belanda, serta unsur heroik Peristiwa Merah Putih 14 Februari 1946 saat rakyat Manado bangkit melawan penjajahan Belanda. Setelah kemerdekaan, statusnya berturut-turut menjadi Daerah Kota (1953), Kotapraja (1957), Kotamadya (1965), hingga akhirnya menjadi Kota Manado sesuai UU Nomor 22 Tahun 1999.',
            'images' => [
                'costume' => 'images/pakaian-manado.jpg',
                'tourism' => 'images/wisata-manado.jpg',
                'food' => 'images/kuliner-manado.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Manado',
                'items' => [
                    [
                        'name' => 'Baju Laku Tepu',
                        'desc' => 'Busana bangsawan Minahasa berbahan beludru dengan sulaman benang emas yang dikenakan warga Manado pada pesta dan upacara adat besar.',
                        'image' => 'images/laku-tepu-manado.jpg'
                    ],
                    [
                        'name' => 'Baju Kebaya Minahasa',
                        'desc' => 'Busana wanita Minahasa yang anggun dipadukan kain tenun bentenan khas Sulawesi Utara.',
                        'image' => 'images/kebaya-minahasa.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Minahasa',
                        'desc' => 'Busana pengantin Minahasa dengan kebaya panjang, kain tenun bentenan, dan perhiasan emas peninggalan tradisi leluhur.',
                        'image' => 'images/pengantin-minahasa-manado.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Manado',
                'items' => [
                    [
                        'name' => 'Taman Nasional Bunaken',
                        'desc' => 'Taman laut kelas dunia dengan terumbu karang dan biota laut yang menjadikan Manado surga diving dan snorkeling.',
                        'image' => 'images/bunaken.jpg'
                    ],
                    [
                        'name' => 'Patung Yesus Memberkati',
                        'desc' => 'Patung raksasa yang menjadi ikon Kota Manado, berdiri megah menghadap Teluk Manado dari kawasan bukit.',
                        'image' => 'images/yesus-memberkati.jpg'
                    ],
                    [
                        'name' => 'Jembatan Soekarno',
                        'desc' => 'Jembatan lengkung ikonik yang membentang di muara Sungai Tondano, menjadi tempat favorit menikmati matahari terbenam.',
                        'image' => 'images/jembatan-soekarno-manado.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Manado',
                'items' => [
                    [
                        'name' => 'Tinutuan (Bubur Manado)',
                        'desc' => 'Bubur sayur khas Manado berisi labu, jagung, dan aneka sayuran hijau, populer sebagai sarapan sehat warga kota.',
                        'image' => 'images/tinutuan-manado.jpg'
                    ],
                    [
                        'name' => 'Cakalang Fufu & Ayam Rica-Rica',
                        'desc' => 'Ikan cakalang asap khas Sulawesi Utara serta olahan ayam berbumbu cabai rica yang pedas menggigit.',
                        'image' => 'images/cakalang-fufu-manado.jpg'
                    ],
                    [
                        'name' => 'Klappertaart & Dabu-Dabu',
                        'desc' => 'Kue custard kelapa muda peninggalan kuliner Belanda serta sambal mentah segar khas pesisir Manado.',
                        'image' => 'images/klappertaart-manado.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1945', 'name' => 'Albertus B. Waworuntu'],
                ['period' => '1985–1995', 'name' => 'N. H. Eman'],
                ['period' => '2000–2005', 'name' => 'Wempie Frederik'],
                ['period' => '2005–2010', 'name' => 'Jimmy Rimba Rogi'],
                ['period' => '2010–2015', 'name' => 'Dr. Ir. Vicky Lumentut'],
                ['period' => '2016–2021', 'name' => 'Dr. Ir. Vicky Lumentut'],
                ['period' => '2021–Sekarang', 'name' => 'Andrei Angouw']
            ]
        ],
        'ambon' => [
            'name' => 'Ambon',
            'tagline' => 'Kota musik di Kepulauan Maluku.',
            'culture' => 'Tifa, totobuang, dan tradisi pela gandong.',
            'diversity' => 'Kekuatan persaudaraan lintas pulau dan agama.',
            'coordinates' => [-3.6547, 128.1906],
            'description' => 'Ambon, yang akrab disapa "Ambon Manise", adalah ibu kota Provinsi Maluku yang terletak di Pulau Ambon dan mengelilingi Teluk Ambon yang dalam dan terlindung. Kota ini dikenal sebagai Kota Musik karena bakat bermusik warganya yang mendunia, sekaligus menjadi simpul perdagangan rempah legendaris yang pernah diperebutkan bangsa-bangsa Eropa.',
            'history' => 'Portugis pertama kali membangun benteng di Ambon pada 1513 untuk menguasai jalur rempah cengkih dan pala. VOC merebut kota ini dari Portugis pada 1605 dan menjadikan Ambon markas besar mereka di kawasan timur Nusantara, dengan Benteng Victoria sebagai pusatnya. Kolonialisme yang berat memicu perlawanan rakyat, termasuk pemberontakan Kapitan Pattimura pada 1817. Setelah kemerdekaan, Ambon sempat diguncang konflik horizontal pada 1999–2002, namun perlahan pulih dan kembali dikenal sebagai kota damai yang menjunjung tradisi pela gandong (persaudaraan antar-negeri).',
            'images' => [
                'costume' => 'images/pakaian-ambon.jpg',
                'tourism' => 'images/wisata-ambon.jpg',
                'food' => 'images/kuliner-ambon.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Ambon',
                'items' => [
                    [
                        'name' => 'Baju Cele',
                        'desc' => 'Pakaian adat khas Ambon berpola kotak-kotak merah, putih, dan hitam yang dikenakan saat tarian Cakalele dan upacara adat negeri.',
                        'image' => 'images/baju-cele.jpg'
                    ],
                    [
                        'name' => 'Baju Kebaya Salele',
                        'desc' => 'Busana wanita Maluku berupa kebaya pendek berwarna cerah yang dipadukan kain salele bermotif kotak khas.',
                        'image' => 'images/kebaya-salele.jpg'
                    ],
                    [
                        'name' => 'Busana Perang Cakalele',
                        'desc' => 'Busana pria berwarna merah lengkap dengan parang dan salawaku (perisai) yang dikenakan dalam tari perang Cakalele.',
                        'image' => 'images/busana-cakalele.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Ambon',
                'items' => [
                    [
                        'name' => 'Pantai Natsepa',
                        'desc' => 'Pantai populer dengan pasir putih dan rujak natsepa yang legendaris, favorit warga dan wisatawan.',
                        'image' => 'images/pantai-natsepa.jpg'
                    ],
                    [
                        'name' => 'Benteng Amsterdam',
                        'desc' => 'Benteng peninggalan VOC di Hila yang menjadi saksi bisu perebutan jalur rempah Ambon.',
                        'image' => 'images/benteng-amsterdam.jpg'
                    ],
                    [
                        'name' => 'Museum Siwalima',
                        'desc' => 'Museum yang menyimpan koleksi sejarah, budaya, dan biota laut khas Provinsi Maluku.',
                        'image' => 'images/museum-siwalima.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Ambon',
                'items' => [
                    [
                        'name' => 'Papeda',
                        'desc' => 'Bubur sagu kenyal yang disantap bersama kuah kuning ikan tongkol atau ikan kakap khas Maluku.',
                        'image' => 'images/papeda.jpg'
                    ],
                    [
                        'name' => 'Ikan Asar',
                        'desc' => 'Ikan cakalang atau tuna yang diasap tradisional di atas bara, disajikan dengan sambal colo-colo pedas segar.',
                        'image' => 'images/ikan-asar.jpg'
                    ],
                    [
                        'name' => 'Kohu-Kohu',
                        'desc' => 'Salad ikan cakalang suwir khas Ambon yang dicampur kelapa parut sangrai, jeruk nipis, dan sayuran segar.',
                        'image' => 'images/kohu-kohu.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1993–2001', 'name' => 'M.J. Papilaya'],
                ['period' => '2001–2006', 'name' => 'M.J. Papilaya'],
                ['period' => '2006–2011', 'name' => 'M.J. Papilaya / Drs. Jacobus Puttileihalat'],
                ['period' => '2011–2021', 'name' => 'Richard Louhenapessy, S.H.'],
                ['period' => '2021–Sekarang', 'name' => 'Bodewin Wattimena']
            ]
        ],
        'sorong' => [
            'name' => 'Sorong',
            'tagline' => 'Kota Minyak, gerbang utama menuju Raja Ampat.',
            'culture' => 'Adat suku Moi dan Maya, berpadu dengan budaya pendatang Maluku, Bugis, dan Jawa.',
            'diversity' => 'Kota paling multietnis di tanah Papua, pertemuan suku asli Papua dan pendatang lintas Nusantara.',
            'coordinates' => [-0.8762, 131.2558],
            'description' => 'Sorong adalah kota terbesar di kawasan Papua bagian barat sekaligus ibu kota Provinsi Papua Barat Daya. Terletak di ujung kepala burung Pulau Papua, Sorong dikenal sebagai Kota Minyak berkat industri perminyakan yang telah berkembang sejak awal abad ke-20, sekaligus menjadi pintu gerbang utama menuju surga bahari Raja Ampat.',
            'history' => 'Wilayah Sorong pada mulanya adalah kampung nelayan kecil suku Moi di pesisir Semenanjung Doberai. Perusahaan minyak Belanda NNGPM (kemudian menjadi bagian dari Royal Dutch Shell) mulai membuka ladang minyak di Sorong pada 1930-an, mengubah kota ini menjadi pusat industri penting Papua. Selama Perang Dunia II, Sorong menjadi ajang pertempuran sengit antara Jepang dan pasukan Sekutu karena nilai strategis kilang minyaknya. Sorong resmi menjadi Kotamadya pada 1996 dan tumbuh pesat sebagai pusat ekonomi Papua Barat, sebelum akhirnya ditetapkan sebagai ibu kota Provinsi Papua Barat Daya yang baru dibentuk pada November 2022.',
            'images' => [
                'costume' => 'images/pakaian-sorong.jpg',
                'tourism' => 'images/wisata-sorong.jpg',
                'food' => 'images/kuliner-sorong.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Sorong',
                'items' => [
                    [
                        'name' => 'Baju Adat Suku Moi',
                        'desc' => 'Busana adat pria berbahan kulit kayu dan anyaman daun sagu yang dipadukan hiasan bulu burung cenderawasih.',
                        'image' => 'images/baju-adat-moi.jpg'
                    ],
                    [
                        'name' => 'Rok Rumbai & Noken',
                        'desc' => 'Busana wanita Papua berupa rok rumbai daun sagu kering yang dipadukan noken, tas rajut tradisional khas Papua.',
                        'image' => 'images/rok-rumbai-sorong.jpg'
                    ],
                    [
                        'name' => 'Hiasan Kepala Bulu Cenderawasih',
                        'desc' => 'Mahkota bulu burung cenderawasih yang menjadi simbol kehormatan dalam upacara adat masyarakat Sorong.',
                        'image' => 'images/mahkota-cenderawasih-sorong.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Sorong',
                'items' => [
                    [
                        'name' => 'Gerbang Kepulauan Raja Ampat',
                        'desc' => 'Pelabuhan dan bandara Sorong menjadi titik keberangkatan utama menuju surga selam dunia di Raja Ampat.',
                        'image' => 'images/gerbang-raja-ampat.jpg'
                    ],
                    [
                        'name' => 'Tugu Pepera',
                        'desc' => 'Monumen bersejarah yang mengenang Penentuan Pendapat Rakyat (Pepera) 1969 di Papua.',
                        'image' => 'images/tugu-pepera.jpg'
                    ],
                    [
                        'name' => 'Pantai Tanjung Kasuari',
                        'desc' => 'Pantai landai berpasir putih di pinggiran kota yang populer untuk berenang dan bersantai warga Sorong.',
                        'image' => 'images/pantai-tanjung-kasuari.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Sorong',
                'items' => [
                    [
                        'name' => 'Papeda Sorong',
                        'desc' => 'Bubur sagu kenyal khas Papua yang disantap bersama kuah kuning ikan laut segar tangkapan nelayan Sorong.',
                        'image' => 'images/papeda-sorong.jpg'
                    ],
                    [
                        'name' => 'Ikan Bakar Colo-Colo',
                        'desc' => 'Ikan segar hasil laut Sorong yang dibakar dan disajikan dengan sambal colo-colo pedas dan segar.',
                        'image' => 'images/ikan-bakar-colo-colo.jpg'
                    ],
                    [
                        'name' => 'Sate Ulat Sagu',
                        'desc' => 'Camilan tradisional Papua berupa ulat sagu yang ditusuk dan dibakar, dianggap sumber protein tinggi oleh masyarakat lokal.',
                        'image' => 'images/sate-ulat-sagu.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1999–2001', 'name' => 'H. Djamin Fabanjo (Pj)'],
                ['period' => '2001–2006', 'name' => 'H. Djamin Fabanjo'],
                ['period' => '2006–2011', 'name' => 'H. Djamin Fabanjo'],
                ['period' => '2011–2016', 'name' => 'H. Lambert Jitmau, S.Sos., M.M.'],
                ['period' => '2017–2022', 'name' => 'H. Lambert Jitmau, S.Sos., M.M.'],
                ['period' => '2022–2024', 'name' => 'George Yarangga, S.E., M.M. (Pj)'],
                ['period' => '2024–Sekarang', 'name' => 'Septinus Lobat']
            ]
        ],
        'tual' => [
            'name' => 'Tual',
            'tagline' => 'Kota kepulauan bahari di jantung Kepulauan Kei, Maluku Tenggara.',
            'culture' => 'Adat Larvul Ngabal masyarakat Kei serta tradisi maritim dan tenun ikat Kei.',
            'diversity' => 'Masyarakat Kei berpadu dengan komunitas Bugis, Buton, dan pendatang pesisir lain.',
            'coordinates' => [-5.6333, 132.7500],
            'description' => 'Tual adalah kota kepulauan yang menjadi pusat pemerintahan dan perdagangan di gugusan Kepulauan Kei, Maluku Tenggara. Dikelilingi laut jernih dan pantai berpasir putih yang halus seperti tepung, Tual dikenal luas sebagai salah satu surga bahari tersembunyi di kawasan timur Indonesia.',
            'history' => 'Masyarakat Kei di kawasan Tual telah hidup dengan hukum adat Larvul Ngabal yang mengatur tatanan sosial masyarakat kepulauan sejak masa pra-kolonial. Pedagang dan misionaris Eropa mulai singgah di Kepulauan Kei sejak abad ke-17, menjadikan Tual titik persinggahan penting jalur pelayaran timur Nusantara. Wilayah ini lama menjadi bagian dari Kabupaten Maluku Tenggara sebelum akhirnya dimekarkan menjadi Kota Tual yang otonom pada 6 April 2007 berdasarkan Undang-Undang Nomor 31 Tahun 2007.',
            'images' => [
                'costume' => 'images/pakaian-tual.jpg',
                'tourism' => 'images/wisata-tual.jpg',
                'food' => 'images/kuliner-tual.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Tual',
                'items' => [
                    [
                        'name' => 'Baju Cele Kei',
                        'desc' => 'Pakaian adat berpola kotak-kotak khas Maluku yang juga dikenakan masyarakat Kei dalam upacara dan tarian adat.',
                        'image' => 'images/baju-cele-kei.jpg'
                    ],
                    [
                        'name' => 'Tenun Ikat Kei',
                        'desc' => 'Kain tenun ikat tradisional khas Kepulauan Kei dengan motif geometris yang ditenun secara turun-temurun.',
                        'image' => 'images/tenun-ikat-kei.jpg'
                    ],
                    [
                        'name' => 'Busana Adat Larvul Ngabal',
                        'desc' => 'Busana kebesaran yang dikenakan para pemangku adat Kei dalam upacara hukum adat Larvul Ngabal.',
                        'image' => 'images/busana-larvul-ngabal.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Tual',
                'items' => [
                    [
                        'name' => 'Pantai Ngurbloat (Pasir Panjang)',
                        'desc' => 'Pantai berpasir putih halus sepanjang lebih dari 3 kilometer yang kerap disebut salah satu pantai terindah Indonesia.',
                        'image' => 'images/pantai-ngurbloat.jpg'
                    ],
                    [
                        'name' => 'Gua Hawang',
                        'desc' => 'Gua alami dengan kolam air tawar jernih kebiruan yang menjadi destinasi wisata alam favorit di Kei Kecil.',
                        'image' => 'images/gua-hawang.jpg'
                    ],
                    [
                        'name' => 'Pulau Bair',
                        'desc' => 'Gugusan pulau karst kecil dengan laguna biru jernih yang menyerupai miniatur Raja Ampat di kawasan timur.',
                        'image' => 'images/pulau-bair.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Tual',
                'items' => [
                    [
                        'name' => 'Kasbi Rebus & Ikan Kuah Kuning',
                        'desc' => 'Singkong rebus yang disantap bersama ikan segar berkuah kuning rempah khas Kepulauan Kei.',
                        'image' => 'images/kasbi-ikan-kuning-tual.jpg'
                    ],
                    [
                        'name' => 'Embal',
                        'desc' => 'Makanan pokok tradisional khas Kei yang dibuat dari singkong beracun (mengkudu/gadung khas Kei) yang diolah khusus.',
                        'image' => 'images/embal.jpg'
                    ],
                    [
                        'name' => 'Ikan Asar Tual',
                        'desc' => 'Ikan cakalang atau tuna asap khas pesisir Maluku yang disajikan dengan sambal colo-colo segar.',
                        'image' => 'images/ikan-asar-tual.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2007–2008', 'name' => 'Drs. Muhammad Djunaidi Rahim (Pj)'],
                ['period' => '2008–2013', 'name' => 'Drs. M.M. Tamher'],
                ['period' => '2013–2018', 'name' => 'Drs. M.M. Tamher'],
                ['period' => '2018–2023', 'name' => 'Adam Rahayaan, S.H.'],
                ['period' => '2023–2025', 'name' => 'Fachruddin Sanaky (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Adam Rahayaan, S.H.']
            ]
        ],
        'parepare' => [
            'name' => 'Parepare',
            'tagline' => 'Kota Bandar Madani di pesisir Sulawesi Selatan.',
            'culture' => 'Warisan pelaut Bugis dan tradisi maritim Ajatappareng.',
            'diversity' => 'Masyarakat Bugis berpadu dengan pendatang lintas daerah.',
            'coordinates' => [-4.0135, 119.6255],
            'description' => 'Parepare adalah kota pelabuhan di pesisir barat Sulawesi Selatan yang menjadi simpul niaga kawasan Ajatappareng, meliputi Sidenreng Rappang, Pinrang, Enrekang, dan Barru. Kota kelahiran mantan Presiden B.J. Habibie ini dikenal sebagai Kota Bandar Madani karena perpaduan denyut pelabuhan, pendidikan, dan nilai-nilai keislaman dalam kehidupan warganya.',
            'history' => 'Wilayah ini pada mulanya berupa perbukitan semak belukar yang berkembang menjadi permukiman pelabuhan kecil di bawah pengaruh Kerajaan Suppa dan kekuasaan Bugis Ajatappareng. Pada masa Hindia Belanda, Parepare berstatus Afdeling yang membawahi lima Onder Afdeling di kawasan Ajatappareng: Barru, Sidenreng Rappang, Enrekang, Pinrang, dan Parepare. Kota ini resmi berstatus Kotamadya sejak pelantikan Wali Kotamadya pertamanya pada 17 Februari 1960, tanggal yang kemudian diperingati sebagai hari jadi kota.',
            'images' => [
                'costume' => 'images/pakaian-parepare.jpg',
                'tourism' => 'images/wisata-parepare.jpg',
                'food' => 'images/kuliner-parepare.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Parepare',
                'items' => [
                    [
                        'name' => 'Baju Bodo Ajatappareng',
                        'desc' => 'Busana wanita Bugis lengan pendek berbahan tipis yang dipadukan sarung sutra khas Ajatappareng dengan warna mencolok.',
                        'image' => 'images/baju-bodo-parepare.jpg'
                    ],
                    [
                        'name' => 'Jas Tutu',
                        'desc' => 'Pakaian adat pria Bugis Parepare berupa jas tertutup dipadukan sarung sutra dan songkok to bone sebagai penutup kepala.',
                        'image' => 'images/jas-tutup-parepare.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Bugis Bandar',
                        'desc' => 'Busana pengantin kebesaran Bugis pesisir dengan hiasan bosara emas, melambangkan status kota niaga Ajatappareng.',
                        'image' => 'images/pengantin-bugis-parepare.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Parepare',
                'items' => [
                    [
                        'name' => 'Pantai Lumpue',
                        'desc' => 'Pantai populer di pusat kota dengan deretan warung kuliner dan panorama matahari terbenam di Selat Makassar.',
                        'image' => 'images/pantai-lumpue.jpg'
                    ],
                    [
                        'name' => 'Monumen Cinta Habibie-Ainun',
                        'desc' => 'Monumen yang mengenang kisah cinta B.J. Habibie dan Ainun, putra daerah kebanggaan Parepare.',
                        'image' => 'images/monumen-habibie-ainun.jpg'
                    ],
                    [
                        'name' => 'Pelabuhan Nusantara Parepare',
                        'desc' => 'Pelabuhan bersejarah yang menjadi pusat niaga dan penghubung Parepare dengan pulau-pulau lain di Indonesia timur.',
                        'image' => 'images/pelabuhan-parepare.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Parepare',
                'items' => [
                    [
                        'name' => 'Nasu Cemba',
                        'desc' => 'Olahan daging kerbau atau sapi berkuah asam khas Ajatappareng yang dimasak dengan buah cemba (asam jawa muda).',
                        'image' => 'images/nasu-cemba.jpg'
                    ],
                    [
                        'name' => 'Kue Bageya & Sarabba',
                        'desc' => 'Kue kering renyah khas oleh-oleh Parepare serta minuman jahe hangat berempah khas malam pesisir.',
                        'image' => 'images/sarabba.jpg'
                    ],
                    [
                        'name' => 'Ikan Bakar Lumpue',
                        'desc' => 'Ikan segar hasil tangkapan nelayan lokal yang dibakar dengan bumbu khas dan disantap di tepi Pantai Lumpue.',
                        'image' => 'images/ikan-bakar-lumpue.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1960–1966', 'name' => 'Andi Sapada Mappangile (Wali Kotamadya pertama)'],
                ['period' => '1966–1975', 'name' => 'H. Muhammad Saleh'],
                ['period' => '1975–1980', 'name' => 'Drs. H. Nadjamuddin Aras'],
                ['period' => '1980–1988', 'name' => 'H. Andi Sinring'],
                ['period' => '1988–1998', 'name' => 'Drs. H. A. Kube Dauda'],
                ['period' => '1998–2013', 'name' => 'H. Zain Katoe / H. Sjamsu Alam'],
                ['period' => '2013–2023', 'name' => 'H. Taufan Pawe, S.H.'],
                ['period' => '2023–2024', 'name' => 'Akbar Ali, S.STP., M.Adm.Kp. (Pj)'],
                ['period' => '2024–2025', 'name' => 'Abdul Hayat Gani (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Tasming Hamid']
            ]
        ],
        'palopo' => [
            'name' => 'Palopo',
            'tagline' => 'Kota adat Kedatuan Luwu di teluk Bone.',
            'culture' => 'Warisan Kedatuan Luwu, salah satu kerajaan tertua di Sulawesi Selatan.',
            'diversity' => 'Masyarakat Luwu, Bugis, dan Toraja.',
            'coordinates' => [-2.9925, 120.1972],
            'description' => 'Palopo adalah kota di pesisir Teluk Bone yang menjadi pusat pemerintahan Kedatuan/Kerajaan Luwu, salah satu dari empat kerajaan tertua di jazirah Sulawesi Selatan. Kota ini dikenal sebagai tempat Islam pertama kali diterima secara resmi oleh sebuah kerajaan di Sulawesi Selatan, menjadikannya pusat peradaban Islam Tana Luwu.',
            'history' => 'Palopo pada mulanya adalah pusat Kedatuan Luwu yang menurut tradisi lisan La Galigo merupakan kerajaan tertua di Sulawesi Selatan. Pada 15 Februari 1605, Datu Luwu memeluk Islam yang disyiarkan para mubalig, menjadikan Luwu wilayah pertama di Sulawesi Selatan yang resmi berstatus Islam. Setelah era kerajaan, kota ini berkembang menjadi ibu kota Kabupaten Luwu sebelum akhirnya dimekarkan menjadi Kota Palopo yang otonom pada 2 Juli 2002 berdasarkan Undang-Undang Nomor 11 Tahun 2002.',
            'images' => [
                'costume' => 'images/pakaian-palopo.jpg',
                'tourism' => 'images/wisata-palopo.jpg',
                'food' => 'images/kuliner-palopo.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Palopo',
                'items' => [
                    [
                        'name' => 'Baju Adat Kedatuan Luwu (Simboleng)',
                        'desc' => 'Busana kebesaran keturunan bangsawan Luwu dengan sanggul simboleng dan hiasan emas yang menandakan derajat kebangsawanan Kedatuan.',
                        'image' => 'images/simboleng-luwu.jpg'
                    ],
                    [
                        'name' => 'Baju Bodo Luwu',
                        'desc' => 'Busana wanita Bugis Luwu berlengan pendek yang dipadukan sarung sutra khas tenun Luwu.',
                        'image' => 'images/baju-bodo-luwu.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Luwu',
                        'desc' => 'Busana pengantin kebesaran Luwu dengan mahkota dan perhiasan emas peninggalan tradisi Kedatuan.',
                        'image' => 'images/pengantin-luwu.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Palopo',
                'items' => [
                    [
                        'name' => 'Museum Batara Guru',
                        'desc' => 'Bekas istana Kedatuan Luwu yang kini menjadi museum penyimpan benda pusaka kerajaan.',
                        'image' => 'images/museum-batara-guru.jpg'
                    ],
                    [
                        'name' => 'Masjid Tua Palopo',
                        'desc' => 'Masjid tertua di Tana Luwu, saksi bisu masuknya Islam pertama kali di kawasan ini.',
                        'image' => 'images/masjid-tua-palopo.jpg'
                    ],
                    [
                        'name' => 'Pantai Labombo',
                        'desc' => 'Pantai wisata di tepi Teluk Bone yang populer sebagai tempat bersantai warga Palopo.',
                        'image' => 'images/pantai-labombo.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Palopo',
                'items' => [
                    [
                        'name' => 'Kapurung',
                        'desc' => 'Makanan berbahan dasar sagu dicampur sayuran dan ikan atau udang berkuah asam pedas khas Tana Luwu.',
                        'image' => 'images/kapurung.jpg'
                    ],
                    [
                        'name' => 'Dange',
                        'desc' => 'Kue tradisional dari sagu dan kelapa parut yang dipanggang dalam cetakan tanah liat khas Luwu.',
                        'image' => 'images/dange.jpg'
                    ],
                    [
                        'name' => 'Ikan Bakar Bone & Sambal Dabu-Dabu',
                        'desc' => 'Ikan segar hasil tangkapan Teluk Bone yang dibakar dan disajikan dengan sambal dabu-dabu pedas segar.',
                        'image' => 'images/ikan-bakar-bone.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2002–2003', 'name' => 'Beddu Amang (Pj)'],
                ['period' => '2003–2013', 'name' => 'H. P. A. Tenriadjeng'],
                ['period' => '2013–2023', 'name' => 'H. M. Judas Amir'],
                ['period' => '2023–2024', 'name' => 'Firmanza DP (Pj)'],
                ['period' => '2024–2025', 'name' => 'Muchtar Ali Yusuf (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Naili Trisal']
            ]
        ],
        'bitung' => [
            'name' => 'Bitung',
            'tagline' => 'Kota pelabuhan internasional di ujung Sulawesi Utara.',
            'culture' => 'Tradisi pelaut dan budaya Minahasa pesisir.',
            'diversity' => 'Perpaduan Minahasa, Sangihe, dan pendatang dari berbagai daerah.',
            'coordinates' => [1.4451, 125.1817],
            'description' => 'Bitung adalah kota pelabuhan terbesar di Sulawesi Utara yang menghadap langsung ke Laut Maluku dan Samudra Pasifik. Berkat pelabuhan samuderanya, Bitung berkembang sebagai pusat industri perikanan dan pintu gerbang ekspor kawasan timur Indonesia, sekaligus menjadi titik keberangkatan menuju Taman Nasional Bunaken dan Selat Lembeh.',
            'history' => 'Nama Bitung berasal dari pohon "witung" yang dahulu tumbuh lebat di sekitar pesisir. Kawasan ini berkembang pesat pada masa kolonial Belanda ketika dibangun pelabuhan alam yang dalam untuk mendukung perdagangan kopra dan hasil bumi Minahasa. Bitung resmi menjadi kotamadya terpisah dari Kabupaten Minahasa pada 10 April 1975, dan sejak itu tumbuh menjadi salah satu pelabuhan internasional utama di Indonesia bagian timur.',
            'images' => [
                'costume' => 'images/pakaian-bitung.jpg',
                'tourism' => 'images/wisata-bitung.jpg',
                'food' => 'images/kuliner-bitung.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Bitung',
                'items' => [
                    [
                        'name' => 'Baju Adat Minahasa Laku Tepu',
                        'desc' => 'Busana adat Minahasa berwarna cerah yang juga dilestarikan warga Bitung dalam upacara dan festival budaya kota.',
                        'image' => 'images/laku-tepu-bitung.jpg'
                    ],
                    [
                        'name' => 'Baju Adat Sangihe',
                        'desc' => 'Busana adat masyarakat Sangihe yang bermukim di pesisir Bitung, dengan kain tenun dan hiasan manik laut.',
                        'image' => 'images/adat-sangihe.jpg'
                    ],
                    [
                        'name' => 'Wuraga',
                        'desc' => 'Pakaian tari perang Minahasa berwarna merah-hitam yang melambangkan keberanian para pelaut dan pejuang pesisir.',
                        'image' => 'images/wuraga.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Bitung',
                'items' => [
                    [
                        'name' => 'Selat Lembeh',
                        'desc' => 'Surga muck diving dunia dengan biota laut langka yang menjadi incaran penyelam dari seluruh dunia.',
                        'image' => 'images/selat-lembeh.jpg'
                    ],
                    [
                        'name' => 'Pelabuhan Bitung',
                        'desc' => 'Pelabuhan samudra tersibuk di Sulawesi Utara sekaligus gerbang penyeberangan menuju kepulauan Sangihe dan Talaud.',
                        'image' => 'images/pelabuhan-bitung.jpg'
                    ],
                    [
                        'name' => 'Taman Nasional Tangkoko',
                        'desc' => 'Kawasan konservasi hutan hujan tropis yang menjadi habitat tarsius dan yaki (monyet hitam Sulawesi).',
                        'image' => 'images/tangkoko.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Bitung',
                'items' => [
                    [
                        'name' => 'Cakalang Fufu',
                        'desc' => 'Ikan cakalang asap khas Sulawesi Utara yang diolah dari hasil tangkapan nelayan Bitung.',
                        'image' => 'images/cakalang-fufu.jpg'
                    ],
                    [
                        'name' => 'Woku Ikan Bitung',
                        'desc' => 'Olahan ikan segar berkuah kuning berempah khas Minahasa dengan aroma daun kemangi dan jeruk purut.',
                        'image' => 'images/woku-ikan.jpg'
                    ],
                    [
                        'name' => 'Dabu-Dabu Lilang & Nasi Jaha',
                        'desc' => 'Sambal mentah pedas segar khas pesisir serta nasi bakar dalam bambu berbumbu santan.',
                        'image' => 'images/dabu-dabu-lilang.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1975–1980', 'name' => 'A. Watupongoh (Pj)'],
                ['period' => '1980–1990', 'name' => 'Drs. J. Suak'],
                ['period' => '1990–2000', 'name' => 'Drs. F. Sondakh'],
                ['period' => '2000–2005', 'name' => 'Ir. J. A. Waworuntu'],
                ['period' => '2005–2010', 'name' => 'Hanny Sondakh'],
                ['period' => '2010–2020', 'name' => 'Max Jonathan Lomban'],
                ['period' => '2021–2024', 'name' => 'Maurits Mantiri'],
                ['period' => '2025–Sekarang', 'name' => 'Hengky Honandar']
            ]
        ],
        'tomohon' => [
            'name' => 'Tomohon',
            'tagline' => 'Kota bunga di dataran tinggi Minahasa.',
            'culture' => 'Tradisi Minahasa: Festival Bunga Tomohon dan tari Kabasaran.',
            'diversity' => 'Masyarakat Minahasa dengan kekayaan tradisi pertanian dataran tinggi.',
            'coordinates' => [1.3305, 124.8386],
            'description' => 'Tomohon adalah kota berhawa sejuk di lereng Gunung Lokon dan Mahawu yang dijuluki Kota Bunga karena hamparan perkebunan hortikultura dan bunganya yang subur. Kota ini menjadi pusat pariwisata alam sekaligus pusat pertanian dataran tinggi Minahasa.',
            'history' => 'Tomohon telah menjadi pusat permukiman Minahasa sejak masa pra-kolonial berkat kesuburan tanah vulkaniknya. Pada masa Hindia Belanda, kota ini berkembang sebagai pusat pendidikan misi zending dengan berdirinya sekolah-sekolah teologi dan keguruan. Tomohon resmi memisahkan diri dari Kabupaten Minahasa dan menjadi kota otonom pada 4 Agustus 2003 berdasarkan Undang-Undang Nomor 10 Tahun 2003.',
            'images' => [
                'costume' => 'images/pakaian-tomohon.jpg',
                'tourism' => 'images/wisata-tomohon.jpg',
                'food' => 'images/kuliner-tomohon.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Tomohon',
                'items' => [
                    [
                        'name' => 'Baju Kabasaran',
                        'desc' => 'Busana perang tradisional Minahasa berwarna merah menyala yang dikenakan penari Kabasaran dalam upacara adat.',
                        'image' => 'images/kabasaran.jpg'
                    ],
                    [
                        'name' => 'Baju Laku Tepu',
                        'desc' => 'Busana bangsawan Minahasa berbahan beludru dengan hiasan sulaman emas, biasa dipakai dalam pesta adat.',
                        'image' => 'images/laku-tepu-tomohon.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Minahasa',
                        'desc' => 'Busana pengantin Minahasa dengan kebaya panjang dan kain tenun bentenan khas Sulawesi Utara.',
                        'image' => 'images/pengantin-minahasa.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Tomohon',
                'items' => [
                    [
                        'name' => 'Bukit Kasih Kanonang',
                        'desc' => 'Kawasan wisata rohani dengan salib raksasa dan rumah ibadah lima agama di puncak bukit berkawah belerang.',
                        'image' => 'images/bukit-kasih.jpg'
                    ],
                    [
                        'name' => 'Gunung Lokon & Danau Linow',
                        'desc' => 'Gunung berapi aktif serta danau tiga warna yang berubah warna akibat kandungan mineral belerang.',
                        'image' => 'images/danau-linow.jpg'
                    ],
                    [
                        'name' => 'Pasar Bunga & Kebun Bunga Kakaskasen',
                        'desc' => 'Kawasan penghasil aneka bunga hias yang menjadi ikon julukan Kota Bunga.',
                        'image' => 'images/kebun-bunga-kakaskasen.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Tomohon',
                'items' => [
                    [
                        'name' => 'Tinutuan (Bubur Manado)',
                        'desc' => 'Bubur sayur khas Sulawesi Utara berisi labu, jagung, dan aneka sayuran, populer sebagai sarapan sehat.',
                        'image' => 'images/tinutuan.jpg'
                    ],
                    [
                        'name' => 'RW & Sayur Woku',
                        'desc' => 'Olahan daging berbumbu rempah pedas serta sayur berkuah kuning khas dapur Minahasa.',
                        'image' => 'images/sayur-woku.jpg'
                    ],
                    [
                        'name' => 'Klappertaart Tomohon',
                        'desc' => 'Kue custard kelapa muda lembut khas peninggalan kuliner Belanda yang populer sebagai oleh-oleh.',
                        'image' => 'images/klappertaart.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2003–2005', 'name' => 'Freddy H. Sompotan (Pj)'],
                ['period' => '2005–2015', 'name' => 'Jefferson S. M. Rumajar'],
                ['period' => '2015–2021', 'name' => 'Jimmy F. Eman, S.E., Ak.'],
                ['period' => '2021–2024', 'name' => 'Caroll Joram Azarias Senduk'],
                ['period' => '2025–Sekarang', 'name' => 'Caroll Joram Azarias Senduk']
            ]
        ],
        'kotamobagu' => [
            'name' => 'Kotamobagu',
            'tagline' => 'Kota di jantung tanah Bolaang Mongondow.',
            'culture' => 'Warisan Kerajaan Bolaang Mongondow dan tarian adat Mopatuju.',
            'diversity' => 'Masyarakat Mongondow berpadu dengan pendatang Minahasa dan Gorontalo.',
            'coordinates' => [0.7313, 124.3173],
            'description' => 'Kotamobagu adalah kota yang dikepung wilayah Kabupaten Bolaang Mongondow di jazirah selatan Sulawesi Utara, menjadikannya pusat perdagangan dan pemerintahan bagi kawasan Bolaang Mongondow Raya.',
            'history' => 'Kotamobagu semula merupakan pusat Kerajaan Bolaang Mongondow yang berdiri sejak abad ke-16. Pada masa kolonial Belanda, wilayah ini menjadi Onder Afdeling Bolaang Mongondow. Setelah kemerdekaan, Kotamobagu berkembang menjadi ibu kota Kabupaten Bolaang Mongondow sebelum akhirnya dimekarkan menjadi kota otonom pada 23 Mei 2007 berdasarkan Undang-Undang Nomor 4 Tahun 2007.',
            'images' => [
                'costume' => 'images/pakaian-kotamobagu.jpg',
                'tourism' => 'images/wisata-kotamobagu.jpg',
                'food' => 'images/kuliner-kotamobagu.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Kotamobagu',
                'items' => [
                    [
                        'name' => 'Baju Mokodoludut',
                        'desc' => 'Busana kebesaran raja dan bangsawan Bolaang Mongondow berwarna kuning keemasan sebagai lambang kekuasaan.',
                        'image' => 'images/mokodoludut.jpg'
                    ],
                    [
                        'name' => 'Baju Mbanua',
                        'desc' => 'Busana adat rakyat biasa Bolaang Mongondow yang lebih sederhana, dikenakan dalam kegiatan adat sehari-hari.',
                        'image' => 'images/mbanua.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Mongondow',
                        'desc' => 'Busana pengantin kebesaran dengan hiasan kepala dan perhiasan emas peninggalan Kerajaan Bolaang Mongondow.',
                        'image' => 'images/pengantin-mongondow.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Kotamobagu',
                'items' => [
                    [
                        'name' => 'Taman Adipura Boki Malayahi',
                        'desc' => 'Taman kota yang menjadi ruang publik dan pusat kegiatan warga Kotamobagu.',
                        'image' => 'images/taman-boki-malayahi.jpg'
                    ],
                    [
                        'name' => 'Air Terjun Kadar',
                        'desc' => 'Air terjun alami di pinggiran kota yang menjadi tujuan wisata alam favorit keluarga.',
                        'image' => 'images/air-terjun-kadar.jpg'
                    ],
                    [
                        'name' => 'Museum Adat Bolaang Mongondow',
                        'desc' => 'Museum yang menyimpan benda pusaka dan sejarah Kerajaan Bolaang Mongondow.',
                        'image' => 'images/museum-mongondow.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Kotamobagu',
                'items' => [
                    [
                        'name' => 'Binte Biluhuta Mongondow',
                        'desc' => 'Sup jagung manis berkuah santan dengan taburan ikan cakalang khas dataran Bolaang Mongondow.',
                        'image' => 'images/binte-mongondow.jpg'
                    ],
                    [
                        'name' => 'Ilabulo Mongondow',
                        'desc' => 'Olahan sagu dan hati ayam berbumbu khas yang dibungkus daun pisang dan dipanggang.',
                        'image' => 'images/ilabulo-mongondow.jpg'
                    ],
                    [
                        'name' => 'Kue Cucur & Kopi Mongondow',
                        'desc' => 'Kudapan manis tradisional serta kopi robusta hasil perkebunan dataran tinggi Bolaang Mongondow.',
                        'image' => 'images/kopi-mongondow.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2007–2008', 'name' => 'Nixon Watak (Pj)'],
                ['period' => '2008–2018', 'name' => 'Djelantik Mokodompit'],
                ['period' => '2018–2023', 'name' => 'Tatong Bara'],
                ['period' => '2023–2024', 'name' => 'Asripan Nani (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Tatong Bara']
            ]
        ],
        'palu' => [
            'name' => 'Palu',
            'tagline' => 'Kota teluk di jantung Sulawesi Tengah.',
            'culture' => 'Budaya Kaili: tari Dero dan tenun khas Donggala.',
            'diversity' => 'Masyarakat Kaili, Bugis, dan pendatang lintas Sulawesi.',
            'coordinates' => [-0.8917, 119.8707],
            'description' => 'Palu adalah ibu kota Provinsi Sulawesi Tengah yang membentang di sepanjang Teluk Palu dan dibelah oleh Sungai Palu. Kota ini dikenal sebagai salah satu kota terpanas di Indonesia karena posisinya yang diapit pegunungan, sekaligus menjadi pusat pemerintahan, pendidikan, dan perdagangan Sulawesi Tengah.',
            'history' => 'Palu berkembang dari permukiman masyarakat Kaili yang hidup di sepanjang aliran Sungai Palu sejak berabad-abad lalu, dengan Kerajaan Palu sebagai salah satu kerajaan lokal berpengaruh. Pada masa kolonial Belanda, Palu menjadi pusat afdeling di kawasan teluk. Kota ini resmi menjadi kotamadya pada 1978 dan berkembang pesat sebagai ibu kota provinsi. Pada 28 September 2018, Palu diguncang gempa bumi dan tsunami besar yang menimbulkan kerusakan luas, namun kota ini terus bangkit membangun kembali kehidupan warganya.',
            'images' => [
                'costume' => 'images/pakaian-palu.jpg',
                'tourism' => 'images/wisata-palu.jpg',
                'food' => 'images/kuliner-palu.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Palu',
                'items' => [
                    [
                        'name' => 'Baju Nggembe',
                        'desc' => 'Busana adat wanita Kaili berlengan pendek dengan warna cerah, biasa dipakai oleh gadis remaja dalam upacara adat.',
                        'image' => 'images/nggembe.jpg'
                    ],
                    [
                        'name' => 'Baju Koje',
                        'desc' => 'Busana adat pria Kaili berupa jas tertutup dipadukan celana panjang dan penutup kepala siga.',
                        'image' => 'images/koje.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Kaili',
                        'desc' => 'Busana pengantin kebesaran suku Kaili dengan hiasan emas dan kain tenun Donggala yang mewah.',
                        'image' => 'images/pengantin-kaili.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Palu',
                'items' => [
                    [
                        'name' => 'Jembatan Kuning Palu (Ponulele)',
                        'desc' => 'Jembatan lengkung ikonik yang membentang di atas Teluk Palu dan menjadi lambang kebanggaan kota.',
                        'image' => 'images/jembatan-ponulele.jpg'
                    ],
                    [
                        'name' => 'Pantai Talise',
                        'desc' => 'Pantai populer di pusat kota yang ramai dikunjungi warga untuk menikmati suasana Teluk Palu.',
                        'image' => 'images/pantai-talise.jpg'
                    ],
                    [
                        'name' => 'Museum Sis Aljufri',
                        'desc' => 'Museum yang menyimpan koleksi budaya dan sejarah masyarakat Kaili dan Sulawesi Tengah.',
                        'image' => 'images/museum-sis-aljufri.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Palu',
                'items' => [
                    [
                        'name' => 'Kaledo',
                        'desc' => 'Sup kaki sapi berkuah asam pedas khas Palu yang disantap bersama singkong rebus.',
                        'image' => 'images/kaledo.jpg'
                    ],
                    [
                        'name' => 'Uta Dada',
                        'desc' => 'Olahan ayam berkuah santan kuning berbumbu rempah khas suku Kaili.',
                        'image' => 'images/uta-dada.jpg'
                    ],
                    [
                        'name' => 'Sarabba & Duo Kaili',
                        'desc' => 'Minuman jahe hangat serta camilan khas berbahan pisang dan kelapa dari kawasan pesisir Palu.',
                        'image' => 'images/duo-kaili.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1978–1979', 'name' => 'Ny. Chalik (Pj)'],
                ['period' => '1979–1984', 'name' => 'H. Zaenal Alamsyah'],
                ['period' => '1984–1994', 'name' => 'Nurdin Lataruva'],
                ['period' => '1994–1999', 'name' => 'Baso Lamakarate'],
                ['period' => '2000–2015', 'name' => 'Rusdy Mastura'],
                ['period' => '2016–2020', 'name' => 'Hidayat'],
                ['period' => '2021–2024', 'name' => 'Hadianto Rasyid (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Hadianto Rasyid']
            ]
        ],
        'kendari' => [
            'name' => 'Kendari',
            'tagline' => 'Kota teluk di jantung Sulawesi Tenggara.',
            'culture' => 'Budaya Tolaki dan tradisi adat Kabuenga.',
            'diversity' => 'Masyarakat Tolaki, Muna, Buton, dan Bugis.',
            'coordinates' => [-3.9985, 122.5127],
            'description' => 'Kendari adalah ibu kota Provinsi Sulawesi Tenggara yang mengelilingi Teluk Kendari, sebuah teluk alami yang menjadi pelabuhan sekaligus ikon kota. Kota ini berkembang pesat sebagai pusat pemerintahan, perdagangan, dan pendidikan di jazirah tenggara Sulawesi.',
            'history' => 'Kendari bermula dari permukiman masyarakat Tolaki di tepi Teluk Kendari, dengan Kerajaan Konawe sebagai salah satu kekuatan lokal berpengaruh sebelum masa kolonial. Belanda mendirikan pos dagang di Kendari pada akhir abad ke-19 karena letaknya yang strategis sebagai pelabuhan alam. Kendari resmi menjadi ibu kota Provinsi Sulawesi Tenggara sejak provinsi ini terbentuk pada 1964, dan berstatus kotamadya penuh sejak 1995 berdasarkan Undang-Undang Nomor 6 Tahun 1995.',
            'images' => [
                'costume' => 'images/pakaian-kendari.jpg',
                'tourism' => 'images/wisata-kendari.jpg',
                'food' => 'images/kuliner-kendari.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Kendari',
                'items' => [
                    [
                        'name' => 'Babu Nggawi',
                        'desc' => 'Busana adat wanita Tolaki berwarna cerah dengan hiasan manik-manik khas Sulawesi Tenggara.',
                        'image' => 'images/babu-nggawi.jpg'
                    ],
                    [
                        'name' => 'Babu Kandiu',
                        'desc' => 'Busana adat pria Tolaki berupa jas tertutup dipadukan celana panjang dan destar penutup kepala.',
                        'image' => 'images/babu-kandiu.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Tolaki',
                        'desc' => 'Busana pengantin kebesaran suku Tolaki dengan mahkota dan perhiasan emas peninggalan adat Kabuenga.',
                        'image' => 'images/pengantin-tolaki.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Kendari',
                'items' => [
                    [
                        'name' => 'Teluk Kendari',
                        'desc' => 'Teluk alami di jantung kota yang menjadi ikon dan pusat aktivitas pelabuhan serta rekreasi warga.',
                        'image' => 'images/teluk-kendari.jpg'
                    ],
                    [
                        'name' => 'Jembatan Bahteramas',
                        'desc' => 'Jembatan megah yang membentang di atas Teluk Kendari dan menjadi kebanggaan Sulawesi Tenggara.',
                        'image' => 'images/jembatan-bahteramas.jpg'
                    ],
                    [
                        'name' => 'Masjid Al-Alam',
                        'desc' => 'Masjid apung terbesar di Indonesia timur yang berdiri di tepi Teluk Kendari.',
                        'image' => 'images/masjid-al-alam.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Kendari',
                'items' => [
                    [
                        'name' => 'Sinonggi',
                        'desc' => 'Makanan berbahan sagu kental yang disantap bersama ikan kuah kuning dan sayuran khas Tolaki.',
                        'image' => 'images/sinonggi.jpg'
                    ],
                    [
                        'name' => 'Kabuto & Kasoami',
                        'desc' => 'Olahan singkong yang dikukus dan dibentuk kerucut, makanan pokok tradisional masyarakat pesisir Sultra.',
                        'image' => 'images/kasoami-kendari.jpg'
                    ],
                    [
                        'name' => 'Ikan Parende',
                        'desc' => 'Ikan kuah kuning asam pedas segar khas Sulawesi Tenggara yang kaya rempah.',
                        'image' => 'images/ikan-parende.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1995–1998', 'name' => 'H. Masmuddin (Pj)'],
                ['period' => '1998–2007', 'name' => 'H. Askar Jaya'],
                ['period' => '2007–2017', 'name' => 'Ir. H. Asrun, M.Eng.Sc.'],
                ['period' => '2017–2022', 'name' => 'Sulkarnain Kadir'],
                ['period' => '2022–2025', 'name' => 'Parinringi (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Siska Karina Imran']
            ]
        ],
        'baubau' => [
            'name' => 'Baubau',
            'tagline' => 'Kota benteng Kesultanan Buton di Sulawesi Tenggara.',
            'culture' => 'Warisan Kesultanan Buton dan Benteng Keraton Buton, salah satu benteng terluas di dunia.',
            'diversity' => 'Masyarakat Buton, Muna, dan pendatang pesisir.',
            'coordinates' => [-5.4667, 122.6000],
            'description' => 'Baubau adalah kota pelabuhan di Pulau Buton yang menyimpan warisan megah Kesultanan Buton, salah satu kerajaan Islam terbesar di kawasan timur Nusantara. Benteng Keraton Buton yang mengelilingi kota lama tercatat sebagai salah satu benteng terluas di dunia.',
            'history' => 'Baubau berdiri sebagai pusat Kesultanan Buton sejak abad ke-16, setelah Kerajaan Buton mengubah sistem pemerintahannya menjadi kesultanan Islam dengan konstitusi adat Martabat Tujuh. Benteng Keraton Buton dibangun mengelilingi bukit kota lama sebagai pusat pemerintahan dan pertahanan. Setelah era kesultanan berakhir pasca kemerdekaan, Baubau berkembang menjadi kota dagang penting di jalur pelayaran timur Indonesia dan resmi menjadi kota otonom pada 21 Juni 2001.',
            'images' => [
                'costume' => 'images/pakaian-baubau.jpg',
                'tourism' => 'images/wisata-baubau.jpg',
                'food' => 'images/kuliner-baubau.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Baubau',
                'items' => [
                    [
                        'name' => 'Baju Kombo',
                        'desc' => 'Busana kebesaran Sultan dan bangsawan Buton berwarna kuning keemasan yang melambangkan status kesultanan.',
                        'image' => 'images/baju-kombo.jpg'
                    ],
                    [
                        'name' => 'Baju Adat Wanita Buton',
                        'desc' => 'Busana wanita Buton dengan kain tenun khas Buton dan hiasan kepala tradisional.',
                        'image' => 'images/adat-wanita-buton.jpg'
                    ],
                    [
                        'name' => 'Busana Pengantin Adat Buton',
                        'desc' => 'Busana pengantin kebesaran Buton dengan hiasan emas dan songkok to bunggu peninggalan kesultanan.',
                        'image' => 'images/pengantin-buton.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Baubau',
                'items' => [
                    [
                        'name' => 'Benteng Keraton Buton',
                        'desc' => 'Benteng bersejarah terluas di dunia yang mengelilingi kota lama, peninggalan megah Kesultanan Buton.',
                        'image' => 'images/benteng-keraton-buton.jpg'
                    ],
                    [
                        'name' => 'Pantai Kamali',
                        'desc' => 'Pantai populer di pusat kota yang menjadi ruang publik dan tempat bersantai warga Baubau.',
                        'image' => 'images/pantai-kamali.jpg'
                    ],
                    [
                        'name' => 'Masjid Agung Keraton Buton',
                        'desc' => 'Masjid tua di dalam kompleks benteng yang menjadi pusat ibadah dan syiar Islam Kesultanan Buton.',
                        'image' => 'images/masjid-keraton-buton.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Baubau',
                'items' => [
                    [
                        'name' => 'Kasoami',
                        'desc' => 'Makanan pokok tradisional dari singkong yang dikukus dan dibentuk kerucut, khas masyarakat Buton.',
                        'image' => 'images/kasoami-baubau.jpg'
                    ],
                    [
                        'name' => 'Kambewe & Sate Gogos',
                        'desc' => 'Kudapan berbahan singkong parut serta sate ikan bakar berbumbu khas pesisir Buton.',
                        'image' => 'images/sate-gogos.jpg'
                    ],
                    [
                        'name' => 'Karasi',
                        'desc' => 'Kue kering tradisional Buton berbentuk sarang yang digoreng dan disiram gula merah.',
                        'image' => 'images/karasi.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2001–2002', 'name' => 'Ridwan Zakariah (Pj)'],
                ['period' => '2002–2017', 'name' => 'MZ Amirul Tamim'],
                ['period' => '2018–2023', 'name' => 'AS Tamrin'],
                ['period' => '2023–2025', 'name' => 'Muh. Rasman Manafi (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Yusran Fahim']
            ]
        ],
        'gorontalo' => [
            'name' => 'Gorontalo',
            'tagline' => 'Kota Serambi Madinah di Sulawesi bagian utara.',
            'culture' => 'Adat istiadat Gorontalo yang kental dengan nilai syariat Islam.',
            'diversity' => 'Masyarakat Gorontalo berpadu dengan pendatang Bugis dan Minahasa.',
            'coordinates' => [0.5412, 123.0595],
            'description' => 'Gorontalo adalah ibu kota Provinsi Gorontalo yang dijuluki Kota Serambi Madinah karena kehidupan masyarakatnya yang lekat dengan filosofi adat "adati hula-hula to sara\'a, sara\'a hula-hula to Kuru\'ani", yaitu adat bersendikan syariat, syariat bersendikan Al-Qur\'an.',
            'history' => 'Gorontalo tumbuh dari Kerajaan Gorontalo, salah satu dari lima kerajaan (Pohala\'a) yang tergabung dalam Persekutuan Limo Lo Pohala\'a. Islam masuk dan berkembang kuat di Gorontalo sejak abad ke-16 hingga membentuk falsafah adat yang menyatu dengan syariat Islam. Pada masa kolonial Belanda, Gorontalo menjadi pusat afdeling penting di kawasan utara Sulawesi. Kota ini resmi berstatus kotamadya sejak 1959 dan kini menjadi ibu kota Provinsi Gorontalo yang terbentuk pada tahun 2000.',
            'images' => [
                'costume' => 'images/pakaian-gorontalo.jpg',
                'tourism' => 'images/wisata-gorontalo.jpg',
                'food' => 'images/kuliner-gorontalo.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Gorontalo',
                'items' => [
                    [
                        'name' => 'Billue Lo Tinelo',
                        'desc' => 'Busana pengantin kebesaran wanita Gorontalo berwarna ungu dengan hiasan emas bersulam benang khas kerajaan.',
                        'image' => 'images/billue-lo-tinelo.jpg'
                    ],
                    [
                        'name' => 'Baju Adat Pria Gorontalo (Makuta)',
                        'desc' => 'Busana pria bangsawan Gorontalo lengkap dengan mahkota makuta dan kain sarung songket.',
                        'image' => 'images/makuta-gorontalo.jpg'
                    ],
                    [
                        'name' => 'Baju Biliu',
                        'desc' => 'Busana adat wanita Gorontalo yang dikenakan dalam upacara adat Mopotilantahu sebagai simbol kesucian.',
                        'image' => 'images/baju-biliu.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Gorontalo',
                'items' => [
                    [
                        'name' => 'Benteng Otanaha',
                        'desc' => 'Benteng peninggalan Portugis di atas bukit yang menghadap langsung ke Danau Limboto.',
                        'image' => 'images/benteng-otanaha.jpg'
                    ],
                    [
                        'name' => 'Danau Limboto',
                        'desc' => 'Danau besar yang menjadi ikon dan sumber kehidupan masyarakat Gorontalo sejak dahulu kala.',
                        'image' => 'images/danau-limboto.jpg'
                    ],
                    [
                        'name' => 'Masjid Walima Emas Baiturrahim',
                        'desc' => 'Masjid ikonik dengan kubah emas yang menjadi simbol julukan Kota Serambi Madinah.',
                        'image' => 'images/masjid-walima-emas.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Gorontalo',
                'items' => [
                    [
                        'name' => 'Binte Biluhuta',
                        'desc' => 'Sup jagung manis berkuah santan dengan taburan ikan cakalang dan udang, hidangan khas Gorontalo.',
                        'image' => 'images/binte-biluhuta.jpg'
                    ],
                    [
                        'name' => 'Ilabulo',
                        'desc' => 'Olahan sagu dan hati ayam berbumbu khas yang dibungkus daun pisang lalu dipanggang.',
                        'image' => 'images/ilabulo-gorontalo.jpg'
                    ],
                    [
                        'name' => 'Sate Tuna & Perkedel Nike',
                        'desc' => 'Sate ikan tuna segar serta perkedel dari ikan nike (ikan kecil khas Danau Limboto).',
                        'image' => 'images/perkedel-nike.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1959–1966', 'name' => 'A. Hippy (Wali Kotapraja pertama)'],
                ['period' => '1966–1976', 'name' => 'Rasyid Naki'],
                ['period' => '1976–1986', 'name' => 'H. Nani Wartabone'],
                ['period' => '1986–1996', 'name' => 'Medi Botutihe'],
                ['period' => '1996–2001', 'name' => 'Alwi Hasan'],
                ['period' => '2001–2008', 'name' => 'Medi Botutihe'],
                ['period' => '2008–2018', 'name' => 'Adhan Dambea'],
                ['period' => '2019–2024', 'name' => 'Marten Taha'],
                ['period' => '2025–Sekarang', 'name' => 'Adhan Dambea']
            ]
        ],
        'mamuju' => [
            'name' => 'Mamuju',
            'tagline' => 'Ibu kota Provinsi Sulawesi Barat di teluk Mandar.',
            'culture' => 'Budaya Mandar: sandeq, kalindaqdaq, dan tenun sutra Mandar.',
            'diversity' => 'Masyarakat Mandar berpadu dengan pendatang Bugis, Toraja, dan Jawa.',
            'coordinates' => [-2.6785, 118.8885],
            'description' => 'Mamuju adalah ibu kota Provinsi Sulawesi Barat yang membentang di pesisir Teluk Mamuju menghadap Selat Makassar. Secara administratif berstatus Kabupaten, Mamuju menjadi pusat pemerintahan provinsi termuda di Sulawesi sekaligus jantung budaya maritim suku Mandar.',
            'history' => 'Mamuju semula merupakan wilayah Kerajaan Mamuju, salah satu kerajaan yang tergabung dalam konfederasi Pitu Ba\'bana Binanga bersama kerajaan-kerajaan Mandar lainnya. Pada masa kolonial Belanda, Mamuju menjadi bagian dari afdeling Mandar. Wilayah ini kemudian berkembang menjadi Kabupaten Mamuju setelah kemerdekaan, dan pada 5 Oktober 2004 resmi ditetapkan sebagai ibu kota Provinsi Sulawesi Barat, provinsi hasil pemekaran dari Sulawesi Selatan.',
            'images' => [
                'costume' => 'images/pakaian-mamuju.jpg',
                'tourism' => 'images/wisata-mamuju.jpg',
                'food' => 'images/kuliner-mamuju.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Mamuju',
                'items' => [
                    [
                        'name' => 'Baju Pattuqduq Towaine',
                        'desc' => 'Busana pengantin wanita Mandar berwarna cerah dengan hiasan bandang emas dan mahkota songkok guttu.',
                        'image' => 'images/pattuqduq-towaine.jpg'
                    ],
                    [
                        'name' => 'Baju Todiang Boyang',
                        'desc' => 'Busana adat pria Mandar berupa jas tertutup dipadukan sarung sutra tenun Mandar.',
                        'image' => 'images/todiang-boyang.jpg'
                    ],
                    [
                        'name' => 'Sarung Sutra Mandar',
                        'desc' => 'Kain tenun sutra khas Mandar bermotif kotak-kotak yang menjadi identitas budaya Mamuju.',
                        'image' => 'images/sarung-sutra-mandar.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Mamuju',
                'items' => [
                    [
                        'name' => 'Pantai Manakarra',
                        'desc' => 'Pantai ikonik di pusat kota Mamuju dengan panorama matahari terbenam di Selat Makassar.',
                        'image' => 'images/pantai-manakarra.jpg'
                    ],
                    [
                        'name' => 'Perahu Sandeq',
                        'desc' => 'Perahu layar tercepat khas suku Mandar yang menjadi ikon budaya maritim dan sering ditampilkan dalam lomba tahunan.',
                        'image' => 'images/perahu-sandeq.jpg'
                    ],
                    [
                        'name' => 'Bukit Salabose',
                        'desc' => 'Kawasan perbukitan di pinggiran kota yang menjadi lokasi wisata alam dan spot foto matahari terbenam.',
                        'image' => 'images/bukit-salabose.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Mamuju',
                'items' => [
                    [
                        'name' => 'Jepa',
                        'desc' => 'Makanan pokok tradisional Mandar berbahan singkong parut yang dipanggang di atas tungku tanah liat.',
                        'image' => 'images/jepa.jpg'
                    ],
                    [
                        'name' => 'Bau Piapi',
                        'desc' => 'Ikan tuna atau cakalang yang dimasak dengan bumbu asam pedas khas dapur Mandar.',
                        'image' => 'images/bau-piapi.jpg'
                    ],
                    [
                        'name' => 'Golla Kambu',
                        'desc' => 'Kudapan manis dari gula aren dan kelapa parut yang dibungkus daun jagung kering.',
                        'image' => 'images/golla-kambu.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2005–2015', 'name' => 'H. Suhardi Duka'],
                ['period' => '2016–2021', 'name' => 'H. Habsi Wahid'],
                ['period' => '2021–2024', 'name' => 'Sitti Sutinah Suhardi'],
                ['period' => '2024–2025', 'name' => 'Zulkifli Manggazali (Pj)'],
                ['period' => '2025–Sekarang', 'name' => 'Sitti Sutinah Suhardi']
            ]
        ],
        'manokwari' => [
            'name' => 'Manokwari',
            'tagline' => 'Kota Injil di Teluk Doreri, Papua Barat.',
            'culture' => 'Sejarah masuknya Injil pertama kali di Papua serta budaya adat Arfak.',
            'diversity' => 'Masyarakat Arfak dan pesisir Papua berpadu dengan pendatang.',
            'coordinates' => [-0.8615, 134.0620],
            'description' => 'Manokwari adalah ibu kota Provinsi Papua Barat yang membentang di sepanjang Teluk Doreri, dikelilingi Pegunungan Arfak yang hijau. Kota ini dijuluki Kota Injil karena menjadi titik pertama masuknya agama Kristen ke tanah Papua, sekaligus menjadi pusat pemerintahan, pendidikan, dan perdagangan di kawasan Kepala Burung Papua.',
            'history' => 'Manokwari mencatat tonggak sejarah besar pada 5 Februari 1855, ketika dua misionaris Jerman, Carl Wilhelm Ottow dan Johann Gottlob Geissler, mendarat di Pulau Mansinam dan memulai penyebaran agama Kristen pertama di tanah Papua, tanggal yang kini diperingati sebagai Hari Pekabaran Injil. Belanda kemudian membangun pos pemerintahan di Manokwari pada akhir abad ke-19. Selama Perang Dunia II, kota ini sempat diduduki Jepang sebelum direbut kembali pasukan Sekutu pada 1944. Setelah Indonesia mengambil alih Papua Barat pada 1963, Manokwari terus berkembang dan pada 2003 ditetapkan sebagai ibu kota Provinsi Papua Barat yang baru dimekarkan.',
            'images' => [
                'costume' => 'images/pakaian-manokwari.jpg',
                'tourism' => 'images/wisata-manokwari.jpg',
                'food' => 'images/kuliner-manokwari.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Manokwari',
                'items' => [
                    [
                        'name' => 'Baju Adat Suku Arfak',
                        'desc' => 'Busana adat pria Arfak berbahan kulit kayu dan anyaman yang dihiasi bulu burung cenderawasih sebagai simbol keberanian.',
                        'image' => 'images/adat-arfak.jpg'
                    ],
                    [
                        'name' => 'Rok Rumbai & Noken',
                        'desc' => 'Busana wanita Papua berupa rok rumbai daun sagu yang dipadukan noken anyaman khas Manokwari.',
                        'image' => 'images/rok-rumbai-manokwari.jpg'
                    ],
                    [
                        'name' => 'Hiasan Kepala Bulu Cenderawasih',
                        'desc' => 'Mahkota bulu burung cenderawasih yang menjadi lambang kehormatan dalam upacara adat masyarakat Manokwari.',
                        'image' => 'images/mahkota-cenderawasih-manokwari.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Manokwari',
                'items' => [
                    [
                        'name' => 'Tugu Jasa Pekabaran Injil Pulau Mansinam',
                        'desc' => 'Monumen bersejarah di Pulau Mansinam yang menandai titik pertama masuknya Injil ke tanah Papua pada 1855.',
                        'image' => 'images/tugu-mansinam.jpg'
                    ],
                    [
                        'name' => 'Pantai Pasir Putih Manokwari',
                        'desc' => 'Pantai berpasir putih di sepanjang Teluk Doreri yang menjadi tempat bersantai favorit warga kota.',
                        'image' => 'images/pantai-manokwari.jpg'
                    ],
                    [
                        'name' => 'Taman Wisata Alam Gunung Meja',
                        'desc' => 'Kawasan hutan lindung di tengah kota yang menjadi paru-paru hijau sekaligus destinasi trekking Manokwari.',
                        'image' => 'images/gunung-meja.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Manokwari',
                'items' => [
                    [
                        'name' => 'Papeda Manokwari',
                        'desc' => 'Bubur sagu kenyal yang disantap bersama kuah kuning ikan laut segar khas pesisir Manokwari.',
                        'image' => 'images/papeda-manokwari.jpg'
                    ],
                    [
                        'name' => 'Ikan Kuah Kuning',
                        'desc' => 'Ikan segar berkuah kunyit dan rempah yang menjadi lauk utama pendamping papeda di Papua Barat.',
                        'image' => 'images/ikan-kuah-kuning.jpg'
                    ],
                    [
                        'name' => 'Sagu Lempeng & Sate Ulat Sagu',
                        'desc' => 'Kudapan sagu panggang kering serta sate ulat sagu yang menjadi camilan khas tradisional Papua.',
                        'image' => 'images/sagu-lempeng.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2001–2005', 'name' => 'Drs. Dominggus Mandacan'],
                ['period' => '2005–2010', 'name' => 'Drs. Dominggus Mandacan'],
                ['period' => '2010–2015', 'name' => 'Demas Wonda'],
                ['period' => '2015–2020', 'name' => 'Demas Wonda'],
                ['period' => '2021–2024', 'name' => 'Hermus Indou, S.IP., M.Si.'],
                ['period' => '2024–Sekarang', 'name' => 'Edison Siyou, S.T., M.M. (Pj)']
            ]
        ],
        'nabire' => [
            'name' => 'Nabire',
            'tagline' => 'Kota pesisir di Teluk Cenderawasih, Papua Tengah.',
            'culture' => 'Tradisi adat suku Mee dan masyarakat pesisir Papua.',
            'diversity' => 'Masyarakat asli Papua dan pendatang dari berbagai daerah.',
            'coordinates' => [-3.3667, 135.4833],
            'description' => 'Nabire adalah kota pesisir yang menghadap langsung ke Teluk Cenderawasih, salah satu kawasan konservasi laut terbesar di Indonesia. Kini Nabire berstatus sebagai ibu kota Provinsi Papua Tengah, provinsi hasil pemekaran yang menjadikan kota ini pusat pemerintahan baru di pedalaman timur Papua.',
            'history' => 'Nabire pada mulanya adalah permukiman kecil masyarakat suku Mee dan Wate di pesisir Teluk Cenderawasih. Belanda mendirikan pos pemerintahan di kawasan ini pada pertengahan abad ke-20 sebagai bagian dari administrasi Nugini Belanda sebelum integrasi Papua ke Indonesia pada 1963. Nabire kemudian berkembang menjadi ibu kota Kabupaten Nabire, dan pada 25 April 2022 resmi ditetapkan sebagai ibu kota Provinsi Papua Tengah yang baru dibentuk melalui Undang-Undang Nomor 15 Tahun 2022.',
            'images' => [
                'costume' => 'images/pakaian-nabire.jpg',
                'tourism' => 'images/wisata-nabire.jpg',
                'food' => 'images/kuliner-nabire.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Nabire',
                'items' => [
                    [
                        'name' => 'Baju Adat Suku Mee',
                        'desc' => 'Busana adat pria suku Mee berbahan kulit kayu dan anyaman serat alami yang dihiasi manik-manik dan bulu burung.',
                        'image' => 'images/adat-mee.jpg'
                    ],
                    [
                        'name' => 'Rok Rumbai & Noken Nabire',
                        'desc' => 'Busana wanita Papua berupa rok rumbai daun sagu kering dan noken anyaman khas pesisir Nabire.',
                        'image' => 'images/rok-rumbai-nabire.jpg'
                    ],
                    [
                        'name' => 'Hiasan Kepala Adat Papua Tengah',
                        'desc' => 'Mahkota bulu burung dan manik-manik yang dikenakan dalam upacara adat masyarakat pedalaman Papua Tengah.',
                        'image' => 'images/hiasan-kepala-nabire.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Nabire',
                'items' => [
                    [
                        'name' => 'Taman Nasional Teluk Cenderawasih',
                        'desc' => 'Taman laut terbesar di Indonesia yang menjadi rumah bagi hiu paus dan terumbu karang yang masih alami.',
                        'image' => 'images/teluk-cenderawasih.jpg'
                    ],
                    [
                        'name' => 'Pantai Nabire',
                        'desc' => 'Pantai landai di pusat kota yang menjadi tempat bersantai favorit warga dan wisatawan.',
                        'image' => 'images/pantai-nabire.jpg'
                    ],
                    [
                        'name' => 'Air Terjun Wanggar',
                        'desc' => 'Air terjun alami di pedalaman Nabire yang menjadi destinasi wisata alam segar bagi warga kota.',
                        'image' => 'images/air-terjun-wanggar.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Nabire',
                'items' => [
                    [
                        'name' => 'Papeda Nabire',
                        'desc' => 'Bubur sagu kenyal yang disantap bersama kuah kuning ikan tongkol atau kakap segar khas Teluk Cenderawasih.',
                        'image' => 'images/papeda-nabire.jpg'
                    ],
                    [
                        'name' => 'Ikan Bakar Manokwari Style',
                        'desc' => 'Ikan segar hasil tangkapan laut Nabire yang dibakar dan disajikan dengan sambal khas Papua.',
                        'image' => 'images/ikan-bakar-nabire.jpg'
                    ],
                    [
                        'name' => 'Petatas & Keladi Rebus',
                        'desc' => 'Umbi ubi jalar dan keladi rebus yang menjadi makanan pokok tradisional masyarakat pedalaman Papua.',
                        'image' => 'images/petatas-nabire.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2000–2010', 'name' => 'Drs. Ausilius You Asso, M.M. (Bupati)'],
                ['period' => '2010–2020', 'name' => 'Isaias Douw, S.Pd., M.M. (Bupati)'],
                ['period' => '2021–2024', 'name' => 'Mesak Magai, S.IP. (Bupati)'],
                ['period' => '2024–Sekarang', 'name' => 'Wempi Wetipo (Pj. Gubernur Papua Tengah)']
            ]
        ],
        'jayawijaya' => [
            'name' => 'Jayawijaya (Wamena)',
            'tagline' => 'Kota di Lembah Baliem, jantung pegunungan tengah Papua.',
            'culture' => 'Budaya suku Dani: Festival Lembah Baliem dan pakaian adat koteka.',
            'diversity' => 'Masyarakat Dani, Lani, dan Yali di dataran tinggi Papua.',
            'coordinates' => [-4.0925, 138.9386],
            'description' => 'Wamena adalah ibu kota Kabupaten Jayawijaya yang terletak di Lembah Baliem, dataran tinggi subur di jantung Pegunungan Tengah Papua pada ketinggian sekitar 1.600 meter di atas permukaan laut. Kota ini menjadi pusat budaya suku Dani, Lani, dan Yali yang masih menjaga tradisi leluhur secara kuat, sekaligus menjadi gerbang utama menuju keindahan Lembah Baliem yang legendaris.',
            'history' => 'Lembah Baliem baru diketahui dunia luar pada 1938 ketika ekspedisi Richard Archbold menemukan kawasan subur berpenduduk padat ini dari udara, mengejutkan dunia karena sebelumnya dianggap tak berpenghuni. Belanda kemudian mendirikan pos pemerintahan di Wamena pada 1954 sebagai pusat administrasi Nugini Belanda di pedalaman. Setelah integrasi Papua ke Indonesia pada 1963, Wamena berkembang menjadi ibu kota Kabupaten Jayawijaya dan pusat penyelenggaraan Festival Budaya Lembah Baliem tahunan yang mendunia sejak 1989.',
            'images' => [
                'costume' => 'images/pakaian-wamena.jpg',
                'tourism' => 'images/wisata-wamena.jpg',
                'food' => 'images/kuliner-wamena.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Jayawijaya (Wamena)',
                'items' => [
                    [
                        'name' => 'Koteka',
                        'desc' => 'Penutup alat vital pria suku Dani yang terbuat dari labu kuning kering (holim), simbol identitas budaya Lembah Baliem.',
                        'image' => 'images/koteka.jpg'
                    ],
                    [
                        'name' => 'Rok Rumbai Yokal',
                        'desc' => 'Busana wanita suku Dani berupa rok rumbai dari serat kulit kayu atau rumput kering khas pegunungan tengah Papua.',
                        'image' => 'images/yokal-wamena.jpg'
                    ],
                    [
                        'name' => 'Busana Perang & Hiasan Bulu',
                        'desc' => 'Busana perang tradisional Dani berhiaskan bulu burung dan cat tubuh yang dikenakan dalam upacara adat serta Festival Lembah Baliem.',
                        'image' => 'images/busana-perang-dani.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Jayawijaya (Wamena)',
                'items' => [
                    [
                        'name' => 'Lembah Baliem',
                        'desc' => 'Dataran tinggi subur yang menjadi rumah tradisional suku Dani, terkenal lewat Festival Budaya Lembah Baliem setiap Agustus.',
                        'image' => 'images/lembah-baliem.jpg'
                    ],
                    [
                        'name' => 'Desa Adat Suku Dani',
                        'desc' => 'Perkampungan tradisional dengan rumah honai berbentuk kerucut yang masih dihuni masyarakat Dani hingga kini.',
                        'image' => 'images/desa-dani.jpg'
                    ],
                    [
                        'name' => 'Museum Mumi Jiwika',
                        'desc' => 'Situs mumi alami suku Dani berusia ratusan tahun yang menjadi daya tarik wisata budaya di sekitar Wamena.',
                        'image' => 'images/mumi-jiwika.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Jayawijaya (Wamena)',
                'items' => [
                    [
                        'name' => 'Bakar Batu',
                        'desc' => 'Tradisi memasak babi dan ubi jalar bersama batu panas yang dikubur di dalam tanah, dilakukan dalam upacara adat besar suku Dani.',
                        'image' => 'images/bakar-batu.jpg'
                    ],
                    [
                        'name' => 'Ubi Jalar & Petatas',
                        'desc' => 'Makanan pokok utama masyarakat Lembah Baliem yang ditanam di ladang-ladang subur dataran tinggi Wamena.',
                        'image' => 'images/ubi-jalar-wamena.jpg'
                    ],
                    [
                        'name' => 'Sayur Lilin & Daun Singkong',
                        'desc' => 'Sayuran hijau khas pegunungan tengah Papua yang biasa disantap sebagai pendamping ubi dan daging babi.',
                        'image' => 'images/sayur-lilin.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2000–2008', 'name' => 'David Hubi, S.H. (Bupati)'],
                ['period' => '2008–2013', 'name' => 'John Wempi Wetipo, S.Sos., M.PA. (Bupati)'],
                ['period' => '2013–2018', 'name' => 'John Wempi Wetipo, S.Sos., M.PA. (Bupati)'],
                ['period' => '2018–2023', 'name' => 'Jhon Richard Banua, S.Sos. (Bupati)'],
                ['period' => '2023–Sekarang', 'name' => 'Marthen Yogi (Pj Bupati)']
            ]
        ],
        'merauke' => [
            'name' => 'Merauke',
            'tagline' => 'Kota paling timur Indonesia di tepi Papua Selatan.',
            'culture' => 'Tradisi suku Marind dan wilayah lumbung pangan Papua.',
            'diversity' => 'Masyarakat Marind berpadu dengan transmigran Jawa dan Bali.',
            'coordinates' => [-8.4667, 140.4000],
            'description' => 'Merauke adalah kota paling timur di Indonesia yang terletak di dataran rendah rawa dekat perbatasan Papua Nugini. Kini berstatus sebagai ibu kota Provinsi Papua Selatan, Merauke dikenal sebagai lumbung pangan Papua berkat hamparan sawah luas yang dikelola masyarakat asli Marind dan transmigran dari berbagai daerah.',
            'history' => 'Merauke didirikan Belanda pada 1902 sebagai pos militer untuk menghentikan praktik perburuan kepala (headhunting) antarklan suku Marind yang kerap melintasi perbatasan dengan wilayah jajahan Inggris di Papua Nugini. Kota ini kemudian berkembang menjadi pusat administrasi kolonial di ujung selatan Papua. Setelah integrasi ke Indonesia pada 1963, Merauke tumbuh sebagai kota pertanian dan perdagangan penting, dan pada 25 April 2022 resmi ditetapkan sebagai ibu kota Provinsi Papua Selatan yang baru dimekarkan.',
            'images' => [
                'costume' => 'images/pakaian-merauke.jpg',
                'tourism' => 'images/wisata-merauke.jpg',
                'food' => 'images/kuliner-merauke.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Merauke',
                'items' => [
                    [
                        'name' => 'Baju Adat Suku Marind',
                        'desc' => 'Busana adat pria Marind berbahan anyaman serat alami yang dihiasi bulu burung kasuari dan cenderawasih.',
                        'image' => 'images/adat-marind.jpg'
                    ],
                    [
                        'name' => 'Rok Rumbai & Noken Merauke',
                        'desc' => 'Busana wanita Papua berupa rok rumbai daun sagu dan noken anyaman khas suku Marind.',
                        'image' => 'images/rok-rumbai-merauke.jpg'
                    ],
                    [
                        'name' => 'Hiasan Kepala Bulu Kasuari',
                        'desc' => 'Mahkota bulu burung kasuari yang menjadi simbol kehormatan dalam upacara adat masyarakat Marind.',
                        'image' => 'images/mahkota-kasuari.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Merauke',
                'items' => [
                    [
                        'name' => 'Taman Nasional Wasur',
                        'desc' => 'Kawasan konservasi yang dijuluki "Serengeti-nya Papua" karena padang savana luas dan satwa khas seperti kanguru pohon dan rusa.',
                        'image' => 'images/taman-nasional-wasur.jpg'
                    ],
                    [
                        'name' => 'Tugu Kilometer Nol Merauke',
                        'desc' => 'Monumen yang menandai titik paling timur wilayah Indonesia di perbatasan dengan Papua Nugini.',
                        'image' => 'images/tugu-nol-merauke.jpg'
                    ],
                    [
                        'name' => 'Pantai Lampu Satu',
                        'desc' => 'Pantai di muara Sungai Maro yang menjadi tempat bersantai favorit warga Merauke di sore hari.',
                        'image' => 'images/pantai-lampu-satu.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Merauke',
                'items' => [
                    [
                        'name' => 'Papeda Merauke',
                        'desc' => 'Bubur sagu kenyal khas Papua yang disantap bersama kuah kuning ikan air tawar segar dari Sungai Maro.',
                        'image' => 'images/papeda-merauke.jpg'
                    ],
                    [
                        'name' => 'Udang Selingkuh',
                        'desc' => 'Udang air tawar besar berkaki mirip kepiting yang menjadi hidangan khas kebanggaan Merauke.',
                        'image' => 'images/udang-selingkuh.jpg'
                    ],
                    [
                        'name' => 'Sagu Bakar & Kue Bagea',
                        'desc' => 'Olahan sagu panggang serta kue kering sagu khas oleh-oleh masyarakat pesisir selatan Papua.',
                        'image' => 'images/sagu-bakar-merauke.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '2000–2010', 'name' => 'Drs. Johanes Gluba Gebze (Bupati)'],
                ['period' => '2010–2015', 'name' => 'Drs. Romanus Mbaraka, M.T. (Bupati)'],
                ['period' => '2016–2021', 'name' => 'Drs. Frederikus Gebze, M.M. (Bupati)'],
                ['period' => '2021–Sekarang', 'name' => 'Drs. Romanus Mbaraka, M.T. (Bupati)'],
                ['period' => '2024–Sekarang', 'name' => 'Apolo Safanpo (Pj. Gubernur Papua Selatan)']
            ]
        ],
        'jayapura' => [
            'name' => 'Jayapura',
            'tagline' => 'Gerbang Papua di pesisir Teluk Yos Sudarso.',
            'culture' => 'Seni ukir, noken, dan ragam adat Papua.',
            'diversity' => 'Beragam suku asli Papua hidup berdampingan dengan pendatang.',
            'coordinates' => [-2.5916, 140.6690],
            'description' => 'Jayapura adalah ibu kota Provinsi Papua yang membentang indah di sepanjang pesisir Teluk Yos Sudarso, diapit perbukitan hijau dan lautan Pasifik. Kota ini menjadi pusat pemerintahan, pendidikan, dan ekonomi terbesar di tanah Papua, sekaligus rumah bagi masyarakat asli Papua yang hidup berdampingan dengan pendatang dari seluruh Nusantara.',
            'history' => 'Kota ini didirikan oleh Kolonial Belanda pada 7 Maret 1910 dengan nama Hollandia, dinamai oleh administratur Jan van Kampen. Selama Perang Dunia II, Hollandia menjadi markas besar Jenderal Douglas MacArthur dan pangkalan utama pasukan Sekutu di Pasifik Barat Daya. Setelah integrasi ke Indonesia, kota ini berganti nama menjadi Kota Baru (1962), lalu Sukarnopura (1963), sebelum akhirnya ditetapkan menjadi Jayapura pada 1968, yang berarti "kota kemenangan" dalam bahasa Sanskerta. Jayapura terus berkembang sebagai ibu kota Provinsi Papua hingga kini.',
            'images' => [
                'costume' => 'images/pakaian-jayapura.jpg',
                'tourism' => 'images/wisata-jayapura.jpg',
                'food' => 'images/kuliner-jayapura.jpg',
            ],
            'costumes_detail' => [
                'title' => 'Macam-Macam Pakaian Adat Kota Jayapura',
                'items' => [
                    [
                        'name' => 'Baju Adat Port Numbay',
                        'desc' => 'Busana adat pria pesisir Jayapura berbahan anyaman dan kulit kayu, dihiasi bulu burung cenderawasih dan manik-manik laut.',
                        'image' => 'images/adat-port-numbay.jpg'
                    ],
                    [
                        'name' => 'Rok Rumbai & Noken Jayapura',
                        'desc' => 'Busana wanita Papua berupa rok rumbai daun sagu dan noken anyaman tangan khas pesisir Teluk Yos Sudarso.',
                        'image' => 'images/rok-rumbai-jayapura.jpg'
                    ],
                    [
                        'name' => 'Hiasan Kepala Bulu Cenderawasih',
                        'desc' => 'Mahkota bulu burung cenderawasih yang menjadi lambang kehormatan dalam upacara adat masyarakat Jayapura.',
                        'image' => 'images/mahkota-cenderawasih-jayapura.jpg'
                    ]
                ]
            ],
            'attractions_detail' => [
                'title' => 'Macam-Macam Destinasi Wisata Jayapura',
                'items' => [
                    [
                        'name' => 'Danau Sentani',
                        'desc' => 'Danau terbesar di Papua dengan desa-desa terapung dan Festival Danau Sentani yang digelar tahunan.',
                        'image' => 'images/danau-sentani.jpg'
                    ],
                    [
                        'name' => 'Tugu MacArthur',
                        'desc' => 'Monumen bersejarah peninggalan Perang Dunia II yang mengenang markas Jenderal Douglas MacArthur di Ifar Gunung.',
                        'image' => 'images/tugu-macarthur.jpg'
                    ],
                    [
                        'name' => 'Pantai Base-G',
                        'desc' => 'Pantai berpasir putih dengan air jernih yang menjadi tempat rekreasi favorit warga Jayapura.',
                        'image' => 'images/pantai-base-g.jpg'
                    ]
                ]
            ],
            'culinary_detail' => [
                'title' => 'Macam-Macam Kuliner Khas Jayapura',
                'items' => [
                    [
                        'name' => 'Papeda Jayapura',
                        'desc' => 'Bubur sagu kenyal yang disantap bersama kuah kuning ikan laut segar khas pesisir Teluk Yos Sudarso.',
                        'image' => 'images/papeda-jayapura.jpg'
                    ],
                    [
                        'name' => 'Ikan Bakar Kuah Kuning',
                        'desc' => 'Ikan segar hasil tangkapan laut Jayapura yang dimasak dengan kuah kunyit rempah khas Papua.',
                        'image' => 'images/ikan-kuah-kuning-jayapura.jpg'
                    ],
                    [
                        'name' => 'Aunu Senebre',
                        'desc' => 'Olahan nasi dengan ikan teri dan kelapa parut sangrai, hidangan khas masyarakat pesisir Sentani.',
                        'image' => 'images/aunu-senebre.jpg'
                    ]
                ]
            ],
            'leaders' => [
                ['period' => '1993–2000', 'name' => 'Drs. Cliff Frans Ondi (Wali Kotamadya)'],
                ['period' => '2000–2007', 'name' => 'M.R. Kambu, S.E., M.M.'],
                ['period' => '2007–2012', 'name' => 'Drs. Benhur Tomi Mano, M.M.'],
                ['period' => '2012–2022', 'name' => 'Drs. Benhur Tomi Mano, M.M.'],
                ['period' => '2022–2023', 'name' => 'Frans Pekey, S.E., M.M. (Pj)'],
                ['period' => '2023–Sekarang', 'name' => 'Dr. Frans Pekey, S.E., M.M.']
            ]
        ],
    ];

    private array $regions = [
        'sumatra' => [
            'name' => 'Sumatra', 
            'description' => 'Dari Aceh hingga Lampung, wilayah dengan warisan Melayu dan berbagai masyarakat adat.', 
            'cities' => [
                'banda-aceh', 
                'medan', 
                'padang', 
                'pekanbaru', 
                'tanjungpinang', 
                'jambi', 
                'palembang', 
                'bengkulu', 
                'lampung', 
                'pangkalpinang'
            ]
        ],
        'jawa' => ['name' => 'Jawa', 'description' => 'Pusat sejarah kerajaan, pendidikan, industri, dan kota-kota metropolitan.', 'cities' => ['jakarta', 'bandung', 'yogyakarta', 'surabaya', 'semarang', 'serang']],
        'bali-nusa-tenggara' => ['name' => 'Bali & Nusa Tenggara', 'description' => 'Kepulauan dengan budaya Hindu Bali, Sasak, dan tradisi masyarakat Nusa Tenggara.', 'cities' => ['denpasar', 'mataram', 'bima', 'kupang']],
        'kalimantan' => ['name' => 'Kalimantan', 'description' => 'Tanah hutan hujan, sungai besar, serta keragaman Dayak dan Melayu.', 'cities' => ['pontianak', 'banjarmasin', 'singkawang', 'palangka-raya', 'banjarbaru', 'samarinda', 'balikpapan', 'bontang', 'tarakan']],
        'sulawesi' => ['name' => 'Sulawesi', 'description' => 'Semenanjung maritim dengan budaya Bugis, Makassar, Minahasa, dan banyak lainnya.', 'cities' => ['makassar', 'manado', 'parepare', 'palopo', 'bitung', 'tomohon', 'kotamobagu', 'palu', 'kendari', 'baubau', 'gorontalo', 'mamuju']],
        'maluku-papua' => ['name' => 'Maluku & Papua', 'description' => 'Kepulauan rempah dan tanah Papua yang kaya bahasa, seni, serta tradisi.', 'cities' => ['ambon', 'tual', 'jayapura', 'sorong', 'manokwari', 'nabire', 'jayawijaya', 'merauke']],
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