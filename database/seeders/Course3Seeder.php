<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course3;
use Illuminate\Support\Facades\DB;

class course3Seeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Course3::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = course3::create([
            'title' => 'BAB I: Filsafat Pancasila dan Pemikiran Ki Hajar Dewantara sebagai Landasan Pendidikan Nasional',
            'slug' => 'bab-1-filsafat-pancasila',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        // === Subbab: Pengantar CASEL ===
        $subbab1 = course3::create([
            'title' => 'Mengenal Diri Sendiri - Siapa Dirimu sebagai Guru?',
            'slug' => 'mengenal-diri',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        // === Materi di dalam Subbab ===
        course3::create([
            'title' => 'Naskah Akademik dan Paparan Pembelajaran Mendalam',
            'slug' => 'naskah-akademik-dan-paparan-pembelajaran',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Dokumen ini berisi naskah akademik dan paparan pembelajaran mendalam menuju pendidikan bermutu untuk semua. Dokumen-dokumen ini wajib dibaca agar peserta PPG mendapatkan pemahaman kerangka kerja pembelajaran mendalam sebagai landasan menyelesaikan jurnal pembelajaran.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/5f9a7be1-74e6-4c10-a93a-314a6cb507fa-ACC%20Menteri_Nasmik_Pembelajaran%20Mendalam%20(2)_compressed.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Akademik</a>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/f0931beb-ffa3-495d-939a-89abad76b75a-Paparan%20Pembelajaran%20Mendalam%20V2%20(1)%20(1).pdf" target="_blank" class="text-blue-600 underline">📄 Buku Paparan Mendalam</a>',
            'parent_id' => $subbab1->id,
        ]);

        course3::create([
            'title' => 'Mengenal Diri Sendiri',
            'slug' => 'mengenal-diri-sendiri',
            'order' => 2,
            'section' => 'bab-1',
            'content' => '<p>Sebelum mengikuti materi Filosofi Pendidikan dan Pendidikan Nilai, mari melakukan refleksi lebih dalam lagi dengan menggali apa yang menjadi tujuan kita menjadi guru, apa yang menjadi alasan kita memilih profesi guru, apa motivasi utama kita membaktikan diri menjadi guru. Sambil menengok perjalanan dan pengalaman masa lalu menjadi peserta didik dan kemudian memutuskan untuk menjadi pendidik, mari merenung sejenak dan secara jujur menjawab pertanyaan-pertanyaan reflektif yang disajikan dalam Y-chart berikut.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/2373e409-1f96-4d48-9728-7c01ccf051c8-1.1.1.%20Mengenal%20Diri%20Sendiri.pdf" target="_blank" class="text-blue-600 underline">📄 Document mengenal diri sendiri</a>',
            'parent_id' => $subbab1->id,
        ]);

         course3::create([
            'title' => 'Mengenali Diri dan Perannya Sebagai Pendidik',
            'slug' => 'mengenal-diri-sendiri-dan-peran',
            'order' => 3,
            'section' => 'bab-1',
            'content' => '<p>Setelah menjawab pertanyaan reflektif pada diagram Y di atas dan menuliskan hasil yang diharapkan dengan mengikuti materi ini, mari kita saksikan video mengenai “Mengenali Diri dan Perannya Sebagai Pendidik” berikut ini.</p>
                <a href="https://youtu.be/h6vA4V-rULA">🎥 Video Mengenali diri dan peran sebagai pendidik</a>',
            'parent_id' => $subbab1->id,
        ]);


        $subbab2 = course3::create([
            'title' => 'Pendidikan yang Memerdekakan dan Berpihak pada Peserta Didik',
            'slug' => 'pendidikan-merdeka',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        course3::create([
            'title' => 'Mengenal Pemikiran Ki Hadjar Dewantara',
            'slug' => 'mengenal-ki-hadjar',
            'order' => 4,
            'section' => 'bab-1',
            'content' => '<p>Setelah pada aktivitas sebelumnya Bapak/Ibu mendapatkan gambaran visi pribadi masing-masing dalam bidang pendidikan, mari kita bertanya kembali…</p>
            <p>“Apakah visiku tentang pendidikan sesuai dengan visi pendidikan nasional?”</p>
            <p>“Apakah tujuan pendidikan menurutku, sejalan dengan pemikiran Ki Hadjar Dewantara?”</p>
            <p>“Apakah pendidikan saat ini, sesuai dengan yang aku impikan</p>
            <p>Anda dapat menyaksikan video pada sumber referensi di bawah untuk mengenal pokok-pokok pemikiran Ki Hadjar Dewantara.</p>
            <p>Referensi:</p>
                <a href="https://youtu.be/vtpHp5HDgjs?si=f5npM3-uo-xxl94V" target="_blank" class="text-blue-600 underline">🎥 Video Pemikiran Ki Hadjar Dewantara</a>',
            'parent_id' => $subbab2->id,
        ]);

        course3::create([
            'title' => 'Ki Hajar Dewantara: Pemikiran dan Perjuangannya',
            'slug' => 'ki-hadjar-dewantara',
            'order' => 5,
            'section' => 'bab-1',
            'content' => '<p>Mari lengkapi pemahaman Bapak/Ibu mengenai pemikiran Ki Hadjar Dewantara dengan membaca buku berikut.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/3827dcea-5b51-4514-8aaf-dc27b479ab2c-1.2.2.Buku%20Ki%20Hajar%20Dewantara.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab3 = course3::create([
            'title' => 'Pancasila sebagai Landasan Filosofi Pendidikan Nasional',
            'slug' => 'pancasila-filosofi',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

         course3::create([
            'title' => 'Pancasila - Landasan Filosofi Pendidikan Nasional',
            'slug' => 'landasan-filosofi',
            'order' => 6,
            'section' => 'bab-1',
            'content' => '<p>Bangsa Indonesia memiliki Pancasila sebagai falsafah negara dan ideologi bangsa. Sudah selayaknya Pancasila patut menjadi semangat dalam berkarya pada segala bidang, termasuk di bidang pendidikan. Mari kita pelajari infografis berikut untuk lebih memahami Pancasila sebagai landasan filosofis pendidikan nasional.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/6ff91c38-758d-4f01-93dd-5094565eded6-1.2.1.%20Pancasila%20Landasan%20Filosofis%20Pendidikan%20Nasional.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab3->id,
        ]);

         course3::create([
            'title' => 'Pendidikan Budi Pekerti',
            'slug' => 'budi-pekerti',
            'order' => 7,
            'section' => 'bab-1',
            'content' => '<p></p>Dengan menyadari bahwa salah satu peran pendidikan adalah meneruskan nilai-nilai luhur bangsa dari generasi ke generasi, semakin menambah keyakinan akan perlunya pendidikan karakter dalam kurikulum pembelajaran. Mari kita simak video mengenai Pendidikan Budi Pekerti berikut ini.</p>
                <a href="https://youtu.be/X2rQmVS4vW8" target="_blank" class="text-blue-600 underline">🎥 Link Video</a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab4 = course3::create([
            'title' => 'Penguatan Budi Pekerti melalui Tri Sentra Pendidikan',
            'slug' => 'penguatan-budi',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

         course3::create([
            'title' => 'Sistem Trisentra',
            'slug' => 'Tri-sentra',
            'order' => 8,
            'section' => 'bab-1',
            'content' => '<p>Mari kita simak beberapa berita yang sempat viral di berbagai media sosial.</p>
            <p>“Diduga Hendak Tawuran, 17 Pelajar Sukabumi Diamankan Polisi”</p>
            <p>“5 Kasus Kecanduan Game Online, Bolos Sekolah 4 Bulan Hingga Bunuh Sopir Taksi Untuk Dapat Uang”</p>
            <p>“Miris! Pelajar dan Mahasiswa Banyak Terpapar Judi Online”</p>
            <p>Menyikapi fenomena-fenomena sosial yang terjadi di sekitar kita, semakin memperkuat keyakinan kita akan pentingnya Pancasila sebagai landasan filosofi pendidikan nasional dan perlunya pendidikan budi pekerti, di mana guru dan sekolah tentunya memiliki peran yang cukup besar dalam hal ini.</p>
            <p>Bacalah tulisan Ki Hadjar Dewantara mengenai Tri Sentra Pendidikan untuk memahami pemikiran beliau mengenai pendidikan budi pekerti.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/65990e1d-f3e6-4f6a-84b0-937ef7ac67e0-1.4.1.%20Sistem%20Trisentra.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab4->id,
        ]);

         course3::create([
            'title' => 'Kolaborasi Catur Pusat Pendidikan, Perkuat Karakter Generasi',
            'slug' => 'kolaborasi-catur-pusat',
            'order' => 9,
            'section' => 'bab-1',
            'content' => '<p>Seiring dengan perkembangan zaman, konsep Trisentra Pendidikan juga mengalami perkembangan. Silakan Bapak/Ibu membaca artikel mengenai Catur Pusat Pendidikan untuk lebih memahami peran pendidik dalam penguatan karakter peserta didik, dan diskusikan hal ini dengan teman sejawat untuk mengetahui pendapat mereka mengenai konsep kedua konsep ini.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/78860574-6383-4150-a3a4-6b550844abe1-1.4.2.%20Catur%20Pusat%20Pendidikan.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab4->id,
        ]);

        $subbab5 = course3::create([
            'title' => 'Mendidik sesuai dengan Kodrat Alam dan Kodrat Zaman',
            'slug' => 'mendidik-kodrat',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

         course3::create([
            'title' => 'Kodrat Keadaan',
            'slug' => 'kodrat-1',
            'order' => 10,
            'section' => 'bab-1',
            'content' => '<p>Berbagai fenomena sosial yang melanda generasi muda saat ini tidak lepas dari situasi dan kondisi lingkungan sosial dimana peserta didik berada pada saat ini. Untuk itu pendidikan harus mampu menjawab setiap tantangan sesuai dengan zamannya. Menjadi penting bagi pendidik untuk mendidik sesuai dengan kodrat alam dan kodrat zaman, mari kita simak video berikut untuk lebih memahami bagaimana mendidik sesuai dengan kodrat keadaan.</p>
                <a href="https://youtu.be/VrhrMKyYo98">🎥 Link Video Kodrat Keadaan</a>',
            'parent_id' => $subbab5->id,
        ]);

         course3::create([
            'title' => 'Kodrat Alam',
            'slug' => 'kodrat-2',
            'order' => 11,
            'section' => 'bab-1',
            'content' => '<p>“Segala perubahan yang terjadi pada murid, dihubungkan dengan kodrat keadaan, baik alam maupun zaman”. - Ki Hadjar Dewantara.</p>
            <p>Mari kita simak video mengenai kodrat alam berikut ini.</p>
                <a href="https://youtu.be/JG8KShJjH2c" target="_blank" class="text-blue-600 underline">🎥 Link Video Kodrat Alam</a>',
            'parent_id' => $subbab5->id,
        ]);

         course3::create([
            'title' => 'Kodrat Zaman',
            'slug' => 'kodrat-3',
            'order' => 12,
            'section' => 'bab-1',
            'content' => '<p>Mari kita lengkapi pemahaman kita mengenai mendidik secara kontekstual, sesuai dengan kodrat keadaan dengan menyimal video kodrat zaman berikut.</p>
                <a href="https://youtu.be/KmoBrwAfeA4" target="_blank" class="text-blue-600 underline">🎥 Link Video Kodrat Zaman</a>',
            'parent_id' => $subbab5->id,
        ]);

        $subbab6 = course3::create([
            'title' => 'Bagaimana Mendidik secara Kontekstual',
            'slug' => 'mendidik-kontekstual',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        course3::create([
            'title' => 'Mendidik secara Kontekstual',
            'slug' => 'secara-kontekstual',
            'order' => 13,
            'section' => 'bab-1',
            'content' => '<p>Pemahaman akan pokok pikiran Ki Hadjar Dewantara bahwa upaya pendidikan harus sesuai dengan kodrat keadaan yaitu kodrat alam dan kodrat zaman. Mendidik sesuai kodrat alam dan kodrat zaman menjadikan pendidikan selalu bersifat kontekstual, tidak saja menyesuaikan peserta didik, namun juga latar belakang sosial budaya dan perkembangan zaman. Pokok pikiran Ki Hadjar Dewantara ini sejalan dengan apa yang disampaikan Ali Bin Abu Thalib: “Didiklah anak sesuai dengan zamannya karena mereka hidup pada zamannya bukan pada zamanmu”. Dalam hal ini konsep pendidikan yang diusung oleh Ki Hadjar Dewantara adalah pendidikan yang berpihak pada anak.</p>
            <p>Pelajari ilustrasi berikut, dan rancanglah pembelajaran yang kontekstual dengan kondisi peserta didik pada kasus berikut. Manfaatkan konsep yang sudah dipelajari sebelumnya mengenai peran guru dalam sistem ‘among’ dan ‘pamong’, serta konsep Catur Pusat Pendidikan pada saat menyusun rencana pembelajaran.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/ecb15cd1-ed33-4e40-9fe6-0d7aa2851aee-1.6.1.%20Studi%20Kasus%20Mendidik%20Secara%20Kontekstual.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab6->id,
        ]);

        $subbab7 = course3::create([
            'title' => 'Menyikapi Keberagaman',
            'slug' => 'keberaga-man',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        course3::create([
            'title' => 'Asas Trikon',
            'slug' => 'trikon-1',
            'order' => 14,
            'section' => 'bab-1',
            'content' => '<p>Dalam aktivitas sebelumnya, telah dibahas perlunya menyesuaikan pendidikan dengan kodrat keadaan, yaitu kodrat alam dan kodrat zaman. Termasuk di dalam kodrat keadaan adalah adat istiadat masing-masing peserta didik yang berasal dari bangsa-bangsa yang berbeda perikehidupan sendiri-sendiri seperti disampaikan Ki Hadjar Dewantara dalam Pidato pada Pemberian Gelar Doktor Honoris Causa oleh Universitas Gadjah Mada pada tanggal 19 Desember 1956. Dalam kasus sebelumnya kita melihat bagaimana Ali yang lahir dan besar di masyarakat perkotaan, harus berpindah dan bergaul dengan masyarakat daerah pesisir. Mari kita simak video berikut untuk mengetahui bagaimana menerapkan Asas Trikon dalam menyikapi keberagaman, termasuk perbedaan nilai-nilai yang dianut oleh setiap peserta didik.</p>
                <a href="https://youtu.be/LGpj8VnBTxA" target="_blank" class="text-blue-600 underline">🎥 Link Video Asas Trikon</a>',
            'parent_id' => $subbab7->id,
        ]);
        
        course3::create([
            'title' => 'Keberagaman dan Pengaruh Asing',
            'slug' => 'pengaruh-asing',
            'order' => 15,
            'section' => 'bab-1',
            'content' => '<p>Selain menjadi landasan dalam menerapkan pembelajaran yang kontekstual dan berpusat pada peserta didik, Asas Trikon juga dapat menjadi pedoman dalam menyikapi keberagaman dan pengaruh asing. Simak infografis berikut untuk memahami bagaimana menyikapi keberagaman dan pengaruh asing dengan berlandaskan pada Asas Trikon.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/e74823e3-7222-4ff3-a018-ae0dbc4049a4-1.7.2.Asas%20Trikon.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab7->id,
        ]);

        course3::create([
            'title' => 'Aksi Nyata - Filsafat Pancasila dan Pemikiran Ki Hajar Dewantara sebagai Landasan Pendidikan Nasional',
            'slug' => 'aksi-nyata-1',
            'order' => 16,
            'section' => 'bab-1',
            'content' => '<ol class="list-decimal ml-5">
                                <li>Bagaimana rancangan pembelajaran yang Bapak/Ibu susun secara konkret mewujudkan prinsip pembelajaran yang berpusat pada peserta didik menurut Ki Hadjar Dewantara? Jelaskan langkah-langkah spesifik yang Bapak/Ibu ambil.</li>
                                <li>Pokok-pokok pikiran Ki Hadjar Dewantara mana saja yang secara eksplisit Bapak/Ibu terapkan dalam rancangan pembelajaran ini? Berikan contoh bagaimana penerapan tersebut terlihat dalam kegiatan pembelajaran.</li>
                                <li>Strategi atau metode pembelajaran apa yang Bapak/Ibu pilih untuk mengakomodasi keberagaman kebutuhan dan karakteristik peserta didik dalam rancangan ini? Mengapa Bapak/Ibu memilih strategi tersebut?</li>
                            </ol> 
                            <p>Kemudian, setelah Anda melakukan Aksi Nyata dengan menyelesaikan pertanyaan-pertanyaan di atas, Anda dapat menjawab pertanyaan reflektif berikut:</p>
                            <ol class="list-decimal ml-5">
                                <li>Setelah menyusun rancangan pembelajaran ini, pemahaman baru apa yang Bapak/Ibu dapatkan mengenai konsep pembelajaran yang berpusat pada peserta didik dan relevansinya dengan pemikiran Ki Hadjar Dewantara?</li>
                                <li>Tantangan apa saja yang Bapak/Ibu hadapi saat menyusun rancangan pembelajaran ini? Bagaimana Bapak/Ibu mengatasi tantangan tersebut?</li>
                                <li>Bagaimana rancangan pembelajaran yang Bapak/Ibu susun ini dapat berkontribusi pada peningkatan kualitas pembelajaran di kelas Bapak/Ibu?</li>
                            </ol>',
            'parent_id' => $subbab7->id,
        ]);

        course3::create([
            'title' => 'Latihan Pemahaman Bab 1',
            'slug' => 'latihan-bab1',
            'order' => 17,
            'section' => 'bab-1',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab I ini, silahkan di klik link yang ada di bawah</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeH0rc7ih_x9JhY_Yp2DR5Lf_Fw_2i__v5fbBB7ajpVre92tA/viewform?pli=1" target="_blank" class="text-blue-600 underline">📄 Link Latihan Pemahaman</a>',
            'parent_id' => $subbab7->id,
        ]);

        $bab2 = course3::create([
            'title' => 'BAB II: Makna, Urgensi dan Strategi Internalisasi Pendidikan Nilai dalam Kerangka Pendidikan Nasional',
            'slug' => 'bab-2-makna-urgensi-strategi',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab8 = course3::create([
            'title' => 'Urgensi Pendidikan Nilai',
            'slug' => 'urgensi-nilai',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        course3::create([
            'title' => 'Memahami Kondisi Bangsa Indonesia',
            'slug' => 'memajami-bangsa',
            'order' => 18,
            'section' => 'bab-2',
            'content' => '<p>Sebelum memulai menyelami Pendidikan Nilai sebagai Pondasi Karakter Bangsa, Bapak/Ibu diajak melakukan refleksi terhadap pentingnya pendidikan nilai dalam membangun karakter peserta didik dengan terlebih dahulu menganalisis beberapa artikel berita berikut ini:</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/db0c1afe-693f-4b75-b15e-ead998aec93c-2.1.%20Kumpulan%20Artikel%20tentang%20Kondisi%20Bangsa%20Indonesia%20.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab8->id,
        ]);

        course3::create([
            'title' => 'Apa Peran Saya sebagai Guru',
            'slug' => 'peran-guru',
            'order' => 19,
            'section' => 'bab-2',
            'content' => '<p>Setelah menjawab pertanyaan di bagian sebelumnya, silakan Bapak/Ibu menyimak video berikut.</p>
                <a href="https://youtu.be/oXdS4ZLhWXc" target="_blank" class="text-blue-600 underline">🎥 Link Video Apa Peran Saya sebagai Guru</a>',
            'parent_id' => $subbab8->id,
        ]);

        course3::create([
            'title' => 'Krisis Nilai dan Urgensi Pendidikan Nilai di Indonesia Saat ini',
            'slug' => 'krisis-nilai',
            'order' => 20,
            'section' => 'bab-2',
            'content' => '<p>Setelah Bapak/Ibu memahami kondisi moral bangsa dan kaitannya dengan peran guru dalam membangun kesadaran akan nilai dan membentuk karakter peserta didik melalui aktivitas sebelumnya, silakan Bapak/Ibu telaah mengenai urgensi pendidikan nilai dalam menghadapi fenomena sosial dan tantangan global. Berikut daftar pertanyaan yang dapat membantu Bapak/Ibu dalam melakukan telaahnya:</p>
            <ol class="list-decimal ml-5">
                                <li>Mengapa pendidikan nilai menjadi aspek penting dalam sistem pendidikan saat ini?</li>
                                <li>Bagaimana hubungan antara pendidikan nilai dengan karakter, moral, dan etika dalam kehidupan sehari-hari?</li>
                                <li>Fenomena sosial apa saja yang saat ini menjadi tantangan bagi pendidikan nilai di sekolah?</li>
                                <li>Apa dampak perkembangan teknologi dan media sosial terhadap pembentukan nilai-nilai dalam diri peserta didik?</li>
                                <li> Apa peran pendidikan nilai dalam membentuk peserta didik agar lebih toleran terhadap keberagaman?</li>
                            </ol>
                        <p>Setelah menjawab pertanyaan di atas, silakan lengkapi pemahaman Bapak/Ibu dengan membaca bahan bacaan berikut ini:</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/fe9c9dd5-529f-4d78-8a24-3ec1f5761690-2.2.%20Krisis%20Nilai%20dan%20Urgensi%20Pendidikan%20Nilai%20di%20Indonesia%20Saat%20ini.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab8->id,
        ]);     
        
        $subbab9 = course3::create([
            'title' => 'Nilai-nilai Dasar dalam Pendidikan',
            'slug' => 'nilai-dasar',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        course3::create([
            'title' => 'Nilai-nilai Dasar dalam Pendidikan',
            'slug' => 'nilai-dasar-pendidikan',
            'order' => 21,
            'section' => 'bab-2',
            'content' => '<p>Dalam materi sebelumnya Bapak/Ibu sudah mempelajari beberapa konsep penting dalam pendidikan nilai; yaitu nilai, moral, etika, dan karakter. Nilai merupakan keyakinan dasar tentang apa yang baik, benar, atau diinginkan, sebagai rujukan pilihan dan tindakan, sedangkan karakter adalah perwujudan nilai-nilai yang dimiliki seseorang dalam bentuk perilaku. Hal ini menunjukkan kaitan erat antara karakter yang ditunjukkan seseorang dengan nilai-nilai yang dianutnya. Pertanyaan berikut mungkin muncul dalam benak guru, orang tua maupun masyarakat terkait dengan pendidikan nilai.</p>
            <p>“Nilai-nilai apa yang harus ditanamkan sekolah kepada peserta didiknya?’</p>
            <p>“Mengapa penting bagi semua warga sekolah untuk memiliki nilai yang dijunjung bersama?”</p>
            <p>Mari kita baca artikel berikut untuk membuka wawasan kita tentang perlunya merumuskan nilai-nilai dasar dalam pendidikan.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/166aa37d-d46f-4adc-b4aa-54c797beba97-2.3.%20Nilai-nilai%20Dasar%20dalam%20Pendidikan.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab9->id,
        ]);

        $subbab10 = course3::create([
            'title' => 'Strategi Internalisasi dan Pengembangan Nilai dalam Pembelajaran',
            'slug' => 'strartegi-pengembangan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        course3::create([
            'title' => 'Strategi Internalisasi dan Pengembangan Nilai dalam Proses Pembelajaran',
            'slug' => 'nilai-pembelajaran',
            'order' => 22,
            'section' => 'bab-2',
            'content' => '<p>Setelah Bapak/Ibu memahami makna pendidikan nilai dan urgensi pendidikan nilai dalam menghadapi fenomena sosial dan tantangan global, pada aktivitas ini akan dikaji mengenai bagaimana cara menginternalisasi dan mengembangkan nilai dalam proses pembelajaran. Pendidikan nilai merupakan aspek penting dalam membentuk karakter dan moral peserta didik. Internalisasi nilai dalam proses pembelajaran tidak hanya sekadar mentransfer konsep-konsep moral, tetapi juga menciptakan pengalaman yang memungkinkan peserta didik untuk memahami, menghayati, dan mengamalkan nilai-nilai tersebut dalam kehidupan sehari-hari.</p>
            <p>Selanjutnya untuk meningkatkan kemampuan Bapak/Ibu dalam menginternalisasi dan mengembangkan pendidikan nilai dalam pembelajaran, pelajarilah informasi berikut ini.</p>
                <a href=https://storage.googleapis.com/microlearning-public-production/document/1bbd953a-afc1-4fb5-869a-2a05fb810de2-2.4.%20Strategi%20Internalisasi%20dan%20Pengembangan%20Nilai%20dalam%20Proses%20Pembelajaran.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab10->id,
        ]);

        $subbab11 = course3::create([
            'title' => 'Tujuh Kebiasaan Anak Indonesia Hebat',
            'slug' => '7-kebiasaan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        course3::create([
            'title' => '7 Kebiasaan Anak Indonesia Hebat',
            'slug' => '7-kebiasaan-anak',
            'order' => 23,
            'section' => 'bab-2',
            'content' => '<p>Pendidikan nilai merupakan bagian integral dari pendidikan nasional yang bertujuan membentuk individu yang tidak hanya cerdas secara intelektual, tetapi juga memiliki moralitas dan kepedulian sosial yang tinggi. Dalam menghadapi tantangan sosial dan global, pendidikan nilai menjadi pondasi utama untuk menciptakan masyarakat yang harmonis, adil, dan berkelanjutan. Oleh karena itu, integrasi pendidikan nilai dalam sistem pendidikan harus terus diperkuat agar dapat memberikan dampak positif bagi masa depan bangsa. Dan hal ini juga harus didukung dengan implementasi strategi internalisasi dan pengembangan nilai dalam pembelajaran harus bersifat interaktif, reflektif, dan berbasis pengalaman nyata. Dengan demikian, pendidikan nilai dapat menjadi landasan yang kuat bagi pembentukan karakter generasi bangsa yang lebih baik.</p>
            <p>Salah satu strategi internalisasi nilai yang dapat dilakukan adalah melalui pembiasaan seperti yang telah disampaikan pada materi sebelumnya.</p>
            <p>Mari kita saksikan video tentang 7 Kebiasaan Anak Indonesia Hebat pada sumber referensi di bawah!</p>
            <p>Referensi:</p>
                <a href=https://youtu.be/cozeCsjMV-4?si=uvutJzpMILrVtUYE" target="_blank" class="text-blue-600 underline">🎥 Link Video 7 Kebiasaan Anak Indonesia Hebat</a>',
            'parent_id' => $subbab11->id,
        ]);

        course3::create([
            'title' => 'Gerakan 7 Kebiasaan Anak Indonesia Hebat: Membentuk Generasi Berkarakter',
            'slug' => 'gerakan-7',
            'order' => 24,
            'section' => 'bab-2',
            'content' => '<p>Setelah menyaksikan video di atas, bacalah Siaran Pers Kementerian Pendidikan Dasar dan Menengah Nomor: 657/sipers/A6/XII/2024 tentang Gerakan 7 Kebiasaan Anak Indonesia Hebat: Membentuk Generasi Berkarakter.</p>
                <a href=https://storage.googleapis.com/microlearning-public-production/document/e06a593a-4a8f-4c78-92f7-3d366094bac6-2.5.1.%20Siaran%20Pers%20Gerakan%207%20Kebiasaan%20Anak%20Indonesia%20Hebat.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab11->id,
        ]);
        
         $subbab12 = course3::create([
            'title' => 'Peran Guru dalam Pendidikan Nilai',
            'slug' => 'peran-guru-pendidikan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        course3::create([
            'title' => 'Peran Guru dalam Pendidikan Nilai',
            'slug' => 'pendidikan-nilai',
            'order' => 25,
            'section' => 'bab-2',
            'content' => '<p>Sebagai pendidik, penting bagi Bapak/Ibu untuk memahami bagaimana konsep-konsep dalam pendidikan nilai berhubungan dengan mata kuliah lain serta pengalaman nyata. Pada topik 1 Filsafat Pancasila dan Pemikiran Ki Hajar Dewantara sebagai Landasan Pendidikan Nasional, Bapak/Ibu telah mengeksplorasi peran guru dalam pendidikan dan sistem persekolahan, dan pada topik 2 Makna, Urgensi dan Strategi Internalisasi Pendidikan Nilai dalam Kerangka Pendidikan Nasional, Bapak/Ibu telah mempelajari berbagai strategi internalisasi dan pengembangan nilai. Bagaimana peran guru dalam setiap strategi internalisasi dan pengembangan nilai yang telah dipelajari pada materi sebelumnya?</p>
            <p>Identifikasi peran guru dalam pendidikan nilai dengan mengaitkan materi yang telah dipelajari pada topik 1 dan 2. Tuliskan hasil telaah Bapak/Ibu dalam format berikut:</p>
                <a href=https://storage.googleapis.com/microlearning-public-production/document/dd51bf35-5363-4201-802c-a36a91dac76d-2.6.%20Peran%20Guru%20dalam%20Pendidikan%20Nilai.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab12->id,
        ]);

        $subbab13 = course3::create([
            'title' => 'Komitmen Saya untuk Pendidikan Nilai',
            'slug' => 'komitmen-pendidikan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        course3::create([
            'title' => 'Komitmen saya untuk Pendidikan Nilai',
            'slug' => 'komitmen-nilai',
            'order' => 26,
            'section' => 'bab-2',
            'content' => '<p>Identifikasi peran guru dalam pendidikan nilai dengan mengaitkan materi yang telah dipelajari pada topik 1 dan 2. Tuliskan hasil telaah Bapak/Ibu dalam format berikut:</p>
                <a href=https://storage.googleapis.com/microlearning-public-production/document/bdf79734-ed81-43e8-b3d6-3f2972f89e44-2.7.%20Komitmen%20untuk%20Pendidikan%20Nilai.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab13->id,
        ]);

        course3::create([
            'title' => 'Aksi Nyata - Makna, Urgensi dan Strategi Internalisasi Pendidikan Nilai dalam Kerangka Pendidikan Nasional',
            'slug' => 'aksi-nyata-2',
            'order' => 27,
            'section' => 'bab-2',
            'content' => '<ol class="list-decimal ml-5"><li>Bagaimana Bapak/Ibu menyampaikan materi tersebut kepada anggota komunitas belajar? Metode atau media apa yang Bapak/Ibu gunakan?</li></ol>
            <p>Kemudian, setelah Anda melakukan Aksi Nyata dengan menyelesaikan pertanyaan-pertanyaan di atas, Anda dapat menjawab pertanyaan reflektif berikut:</p>
            <ol class="list-decimal ml-5"><li>Apa saja pembelajaran atau wawasan baru yang Bapak/Ibu peroleh dari pengalaman berbagi pemahaman ini dengan komunitas belajar Bapak/Ibu?</li>
            <li>Tantangan apa saja yang Bapak/Ibu hadapi saat berbagi pemahaman ini? Bagaimana Bapak/Ibu mengatasinya?</li>
            </ol>',
            'parent_id' => $subbab13->id,
        ]);

        course3::create([
            'title' => 'Latihan Pemahaman Bab 2',
            'slug' => 'latihan-bab2',
            'order' => 28,
            'section' => 'bab-2',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab 2 ini, silahkan di klik link yang ada di bawah</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdMKcwvM7Nc-ZRwxnd5vRifHs8WgeAOM2IwESsSrC9jCml9JQ/viewform" target="_blank" class="text-blue-600 underline">📄 Link Latihan Pemahaman</a>',
            'parent_id' => $subbab13->id,
        ]);

        $bab3 = course3::create([
            'title' => 'BAB III: Kode Etik Guru, Apakah Perilaku Guru sebagai Pendidik Perlu Diatur?',
            'slug' => 'bab-3-kode-etik-guru',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => null,
        ]);

        // === Subbab: Pengantar CASEL ===
        $subbab14 = course3::create([
            'title' => 'Apa Perlunya Kode Etik Profesi Untukku?',
            'slug' => 'perlunya-kode-etik',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        course3::create([
            'title' => 'Refleksi atas Pelanggaran Kode Etik Guru dengan 5R',
            'slug' => 'refleksi-pelanggaran',
            'order' => 29,
            'section' => 'bab-3',
            'content' => '<pSetelah mempelajari Topik 1: Filsafat Pancasila dan Pemikiran Ki Hajar Dewantara sebagai Landasan Pendidikan Nasional serta Topik 2: Makna dan Urgensi Pendidikan Nilai dalam Kerangka Pendidikan Nasional semakin membuka mata guru, bahwa sebagai pendidik juga memiliki tanggung jawab untuk menanamkan nilai-nilai apapun mata pelajaran yang diampunya dengan beragam strategi internalisasi. Meskipun guru sudah memiliki pedoman untuk berperilaku secara profesional, bertanggung jawab, dan menjunjung tinggi etika dalam interaksinya dengan berbagai pihak atau biasa disebut sebagai kode etik guru, masih banyak kasus-kasus pelanggaran kode etik yang melibatkan guru, menjadi viral di media massa, seperti guru yang melakukan kekerasan, melanggar norma susila, atau menyalahgunakan profesi. Mengapa hal ini terjadi?</p>
            <p>Mari melakukan perenungan dengan menjawab pertanyaan berikut.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/f73247fb-701d-404b-9046-b110d63531e7-3.1.1.%20Refleksi%20Kasus%20Pelanggaran%20Kode%20Etik.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab14->id,
        ]);


        $subbab15 = course3::create([
            'title' => 'Apa Etika Dasar yang Harus Dijunjung Guru sebagai Pendidik?',
            'slug' => 'etika-dasar',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        course3::create([
            'title' => 'Kode Etik Profesi Guru',
            'slug' => 'profesi-guru-etik',
            'order' => 30,
            'section' => 'bab-3',
            'content' => '<p>Setiap profesi memiliki kode etik karena kode etik tersebut berperan penting dalam menjaga standar moral dan profesionalisme. Kode etik mencerminkan nilai-nilai inti suatu profesi dan bertujuan menciptakan lingkungan kerja yang etis dan harmonis. Setidaknya ada lima alasan mengapa kode etik dibutuhkan, yaitu untuk:</p>
            <ol class="list-decimal ml-5">
            <li>Menjamin integritas dengan membantu memastikan bahwa anggota profesi bertindak dengan jujur, adil, dan bertanggung jawab;</li>
            <li>Membangun kepercayaan publik dengan menunjukkan komitmen terhadap standar tinggi, sehingga meningkatkan kepercayaan masyarakat</li>
            <li>Mengatur perilaku profesional dengan adanya pedoman, anggota profesi tahu batasan yang harus diikuti untuk menjaga nama baik profesi;</li>
            <li>Melindungi pihak yang dilayani yaitu peserta didik dengan membantu melindungi hak dan kepentingan peserta didik; serta</li>
            <li>Menghindari penyalahgunaan wewenang dengan adanya pedoman etika, tindakan yang merugikan atau melanggar aturan dapat dicegah.</li>
            </ol>
            <p>Mari kita identifikasi etika-etika prinsip yang harus dipegang teguh oleh guru dari artikel ilmiah A Code of the Ethical Principles Underlying Teaching as a Professional Activity yang ditulis John Tomlinson dan Vivienne Little dalam Buku Education for Values.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/a6ceb5b2-b768-4617-be2a-8d4316c35336-3.2.1.%20Kode%20Etik%20Profesi%20Guru.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab15->id,
        ]);

        $subbab16 = course3::create([
            'title' => 'Apa yang Dapat Aku Lakukan sebagai Guru?',
            'slug' => 'sebagai-guru',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        course3::create([
            'title' => 'Apa yang Akan Saya Lakukan?',
            'slug' => 'apa-yang-akan',
            'order' => 31,
            'section' => 'bab-3',
            'content' => '<p>Setelah mempelajari 11 etika prinsip profesi guru yang digagas Tomlinson dan Little, tuliskan apa yang dapat dilakukan oleh Bapak/Ibu sebagai guru untuk menegakkan prinsip tersebut. Diskusikan rumusan langkah-langkah atau rencana tindakan yang dapat dilakukan dengan rekan sejawat untuk mendapatkan masukan dan saran agar pendidikan dapat menjunjung kode etik profesi guru.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/abaab1ca-f9db-4563-9101-2c22319d755a-3.3.1.%20Apa%20yang%20akan%20saya%20lakukan.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab16->id,
        ]);

        $subbab17 = course3::create([
            'title' => 'Mari Kita Junjung Kode Etik Guru',
            'slug' => 'mari-junjung',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        course3::create([
            'title' => 'Peraturan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi nomor 67 tahun 2024 tentang Fasilitasi terhadap Organisasi Profesi Guru',
            'slug' => 'peraturan-menteri-pendidikan',
            'order' => 32,
            'section' => 'bab-3',
            'content' => '<p>Bacalah Peraturan Menteri Pendidikan, Kebudayaan, Riset dan Teknologi nomor 67 tahun 2024 tentang Fasilitasi terhadap Organisasi Profesi Guru terutama pasal 8 dan 9. Tambahkan pengetahuan ini kepada kode etika prinsip yang telah dipelajari pada aktivitas sebelumnya. Buatlah rangkuman tentang kode etik profesi guru dari sumber pada aktivitas sebelumnya dan peraturan menteri di atas dalam format infografis. Cetaklah infografis yang telah dibuat di atas kertas dalam ukuran poster, tempelkan di ruang kerja guru agar dapat dilihat oleh semua.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/734f8d50-e9ef-487b-9274-13432f82c531-3.4.1.salinan_Permendikbudristek_Nomor_67_Tahun_2024_tentang_Fasilitasi_terhadap_Organisasi_Profesi_Guru.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab17->id,
        ]);

        $subbab18 = course3::create([
            'title' => 'Telaah Kasus Pelanggaran Kode Etik',
            'slug' => 'telaah-kasus',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        course3::create([
            'title' => 'Contoh Kasus Pelanggaran Kode Etik',
            'slug' => 'kasus-kode-etik',
            'order' => 33,
            'section' => 'bab-3',
            'content' => '<p>Pelajari beberapa kasus pelanggaran kode etik profesi guru di bawah ini. Identifikasi prinsip kode etik yang telah dilanggar. Berikan solusi agar hal tersebut tidak terulang lagi.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/6c9d89b4-5b1f-4f3e-a441-5a9a21e444c1-3.5.1.%20Contoh%20Kasus%20Pelanggaran%20Kode%20Etik.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab18->id,
        ]);

        $subbab19 = course3::create([
            'title' => 'Kode Etik dalam Kerangka Pendidikan Nilai',
            'slug' => 'kerangka-kode-etik',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        course3::create([
            'title' => 'Kode Etik Profesi dalam Pendidikan Nilai',
            'slug' => 'profesi-kode-etik',
            'order' => 34,
            'section' => 'bab-3',
            'content' => '<p>Kaitkan kode etik profesi dengan peran guru dalam pendidikan nilai sebagai upaya untuk melestarikan budaya dan nilai-nilai luhur bangsa. Gunakan diagram X berikut untuk menampilkan hasil analisis keterkaitan materi dengan kerangka 4C.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/00eae834-61fd-40d7-ad76-dcb14894caf9-3.6.1.%20Kode%20Etik%20dalam%20Kerangka%20Pendidikan%20Nilai.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab19->id,
        ]);

        $subbab20 = course3::create([
            'title' => 'Mari Lakukan Aksi Nyata',
            'slug' => 'aksi-nyata-3',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        course3::create([
            'title' => 'Rencana Tindakan Nyata',
            'slug' => 'tindakan-nyata',
            'order' => 35,
            'section' => 'bab-3',
            'content' => '<p>Setelah menyelesaikan keseluruhan materi dalam mata kuliah Filosofi Pendidikan dan Pendidikan Nilai ini, semakin kita menyadari bahwa profesi guru ada profesi yang mulia dan strategis. Seluruh guru, tanpa terkecuali, menjadi ujung tombak dalam mewariskan nilai-nilai luhur budaya Indonesia yang terangkum dalam Pancasila kepada generasi penerus. Guru bukan lagi hanya menjadi sumber pengetahuan saja, karena di abad informasi ini, peserta didik dapat belajar dari mana saja, ada peran guru yang lebih besar dan lebih strategis, yaitu menuntun peserta didik menjalani kodrat hidupnya sebaik mungkin dengan mengenal potensi minat dan bakat peserta didik lebih baik, memfasilitasi proses belajar yang sesuai dengan kebutuhan dan karakter belajarnya, serta membimbing mereka menjadi manusia yang berbudi pekerti mulia.</p>
            <p>Rancanglah 3 aksi nyata yang dapat Bapak/Ibu lakukan dalam menjalankan peran ini. Formulasikan aksi nyata yang konsentris dengan Bapak/Ibu sebagai pusatnya.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/2a13e756-d396-42c7-822f-35a0708e57ef-3.7.%201.Mari%20Lakukan%20Aksi%20Nyata.pdf" target="_blank" class="text-blue-600 underline">📄 Link Document</a>',
            'parent_id' => $subbab20->id,
        ]);

        course3::create([
            'title' => 'Aksi Nyata - Kode Etik Guru, Apakah Perilaku Guru sebagai Pendidik Perlu Diatur?',
            'slug' => 'tindakan-nyata-1',
            'order' => 36,
            'section' => 'bab-3',
            'content' => '<ol class= "list-decimal ml-5">
            <li>Media promosi (audio/visual) apa saja yang Bapak/Ibu gunakan untuk mempromosikan kode etik guru di lingkup kerja Bapak/Ibu? Mengapa Bapak/Ibu memilih media tersebut?</li>
            <li>Bagaimana konten promosi yang Bapak/Ibu buat menyampaikan pesan-pesan utama kode etik guru? Berikan contoh pesan yang Bapak/Ibu sampaikan.</li>
            </ol>
            <p>Kemudian, setelah Anda melakukan Aksi Nyata dengan menyelesaikan pertanyaan-pertanyaan di atas, Anda dapat menjawab pertanyaan reflektif berikut:</p>
            <p>Rancanglah 3 aksi nyata yang dapat Bapak/Ibu lakukan dalam menjalankan peran ini. Formulasikan aksi nyata yang konsentris dengan Bapak/Ibu sebagai pusatnya.</p>
            <ol class= "list-decimal ml-5">
            <li>Pembelajaran apa yang Bapak/Ibu dapatkan selama proses merancang dan melaksanakan promosi kode etik guru ini?</li>
            <li>Tantangan apa saja yang Bapak/Ibu hadapi dalam mempromosikan kode etik guru? Bagaimana Bapak/Ibu mengatasinya?</li>
            <li>Apa langkah selanjutnya yang akan Bapak/Ibu lakukan untuk terus meningkatkan kesadaran dan kepatuhan terhadap kode etik guru di lingkungan kerja Bapak/Ibu?</li>
            </ol>',
            'parent_id' => $subbab20->id,
        ]);

        course3::create([
            'title' => 'Latihan Pemahaman Bab 3',
            'slug' => 'latihan-pemahaman-3',
            'order' => 37,
            'section' => 'bab-3',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab 3 ini, silahkan di klik link yang ada di bawah</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7hhliCLQdOo528U5EfvwHm7yWn0JBSla608flNW1GGQAJTA/viewform" target="_blank" class="text-blue-600 underline">📄 Link Latihan Pemahaman</a>',
            'parent_id' => $subbab20->id,
        ]);

    }
}