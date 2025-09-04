<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Matikan foreign key sementara
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Kosongkan tabel progress dulu (anak)
        DB::table('course_progress')->truncate();

        // Kosongkan tabel courses
        Course::truncate();

        // Nyalakan lagi foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        

        // =======================
        // BAB 1: PJBL
        // =======================
        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl',
            'title' => 'Naskah Akademik dan Paparan Pembelajaran Mendalam',
            'content' => '<p>Dokumen ini berisi naskah akademik dan paparan pembelajaran mendalam menuju pendidikan bermutu untuk semua. Dokumen-dokumen ini wajib dibaca agar peserta PPG mendapatkan pemahaman kerangka kerja pembelajaran mendalam sebagai landasan menyelesaikan jurnal pembelajaran.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/5f9a7be1-74e6-4c10-a93a-314a6cb507fa-ACC%20Menteri_Nasmik_Pembelajaran%20Mendalam%20(2)_compressed.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Naskah Akademik dan Paparan Pembelajaran Mendalam</a>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/f0931beb-ffa3-495d-939a-89abad76b75a-Paparan%20Pembelajaran%20Mendalam%20V2%20(1)%20(1).pdf" target="_blank" class="text-blue-600 underline">📄 Paparan Pembelajaran Mendalam</p></a>',
            'order' => 2,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-2',
            'title' => 'Pembelajaran Pengantar Pendidikan Anak Berkebutuhan Khusus',
            'content' => '<p>Dokumen ini adalah materi esensial bagi peserta PPG Guru Tertentu memahami pendidikan untuk anak berkebutuhan khusus. Materi esensial ini memuat 2 topik yang berisi tentang keberagaman peserta didik dan pendidikan inklusif. Dengan membaca materi ini, peserta PPG mampu memahami keragaman peserta dan memberikan akomodasi layak sesuai kebutuhan peserta didik. Selain itu, peserta PPG juga mampu memahami ruang lingkup pendidikan inklusif dan implementasinya di sekolah.</p>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/cfa2131d-ea6b-40a2-9434-f8e9cbdd7f04-Buku%20Ajar%20Pengantar%20Pendidikan%20Anak%20Berkebutuhan%20Khusus.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Pendidikan Anak Berkebutuhan Khusus</a></p>',
            'order' => 3,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-3',
            'title' => 'Bagaimana Pembelajaran Model PjBL di SMK Anda?',
            'content' => '<p>Bagian ini berisi penjelasan singkat tentang informasi awal untuk memulai pembelajaran berupa pengamatan video inspirasi.</p>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/07b0bb2e-235b-41b7-8624-72cdb8c73ff1-01%20PPA_SMK_TOPIK1a_Bagaimana%20Pembelajaran%20Model%20PjBL%20di%20SMK%20Anda.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Pembelajaran model PjBL di SMK Anda</a></p>',
            'order' => 4,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-4',
            'title' => 'Video 1.1 Model PjBL di SMK Anda',
            'content' => '<p>Pada bagian ini guru diberikan gambaran awal tentang PjBL dengan menonton video tentang Pembelajaran berbasis Proyek (PjBL). Guru mengamati bagaimana pembelajaran PjBL diterapkan di kelas. Berikut tautan ke video tersebut.</p>
            <p><a href="https://youtu.be/YFhllDmmAk0" target="_blank" class="text-blue-600 underline">🎥 Link Video Model PjBL di SMK </a></p>',
            'order' => 5,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-5',
            'title' => 'Bagaimana Pembelajaran Model PjBL Diterapkan di SMK?',
            'content' => '<p>Pada bagian ini merupakan paparan materi tentang pembelajaran dan asesmen pada model PjBL terdiri dari:</p>
            <ol>
                <li>(1) Prinsip Pembelajaran model Project Based Learning.</li>
                <li>(2) Perencanaan Pembelajaran model PjBL.</li>
                <li>(3) Pelaksanaan Pembelajaran model PjBL.</li>
                <li>(4) Asesmen Pembelajaran model PjBL.</li>
            </ol>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/db132204-e75e-4df1-bbaa-09ccfcd58aca-02%20PPA_SMK_TOPIK1b_Bagaimana%20Pembelajaran%20Model%20PjBL%20Diterapkan%20di%20SMK.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Pembelajaran Model PjBL Diterapkan di SMK</a></p>',
            'order' => 6,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-6',
            'title' => 'Video 1.2 Konsep PjBL',
            'content' => '<p>Video konsep PjBL untuk menguatkan pemahaman Ibu/Bapak guru tentang model pembelajaran PjBL. Ibu/Bapak guru mengamati dan mencatat informasi apa diperoleh dari menonton video. Berikut tautan ke video tersebut.</p>
            <p><a href="https://youtu.be/KYoCNpEDltQ" target="_blank" class="text-blue-600 underline">🎥 Link Video Konsep PjBL</a></p>',
            'order' => 7,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-7',
            'title' => 'Bagaimana Pembelajaran Model PjBL yang efektif?',
            'content' => '<p>Bapak/Ibu Guru diminta mencari partner diskusi (dengan teman sejawat/kepala sekolah/pengawas/praktisi) untuk menelaah video tentang perencanaan dan pengelolaan pembelajaran model PjBL.</p>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/fb23440c-7b29-4bad-bc4e-d7963b3267ee-03%20PPA_SMK_TOPIK1c_Bagaimana%20Pembelajaran%20Model%20%20PjBL%20yang%20Efektif.pdf" target="_blank" class="text-blue-600 underline">📄 Berikut Buku Panduan Pembelajaran</a></p>',
            'order' => 8,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-8',
            'title' => 'Video 1.3 Telaah PjBL',
            'content' => '<p>Pada bagian ini, Ibu/Bapak guru diminta untuk menelaah penerapan pembelajaran model PjBL yang efektif. Ibu/Bapak guru dapat melibatkan rekan sejawat, kepala sekolah, pengawas sekolah, atau praktisi pendidikan. Ibu/Bapak guru memilih salah satu dari kegiatan berikut:</p>
            <ol>
                <li>(1) Menonton video pada tautan yang diberikan, Ibu/Bapak guru melakukan telaah bersama dengan partner Anda tentang model pembelajaran PjBL.</li>
                <li>(2) Menelaah rancangan pembelajaran model PjBL yang pernah Anda kembangkan.</li>
            </ol>
            <p><a href="https://youtu.be/o-qa4WPyflU" target="_blank" class="text-blue-600 underline">🎥 Link Video Telaah PjBL</a></p>',
            'order' => 9,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-9',
            'title' => 'Serba Serbi Penerapan Pembelajaran Model PjBL',
            'content' => '<p>Ibu/Bapak Guru diminta memaparkan hasil telaah video tentang PjBL di atas dengan memilih salah satu cara di bawah:</p>
            <ol>
                <li>(1) Mempublikasikan hasil telaah Anda pada platform media sosial, dan mintalah pendapat dari rekan sejawat.</li>
                <li>(2) Mempublikasikan di grup jejaring rekan sejawat, dan mintalah 1-2 orang rekan Anda memberikan tanggapannya.</li>
                <li>(3) Mempublikasikan di blog pribadi, dan minta rekan Anda untuk memberikan komentar.</li>
                <li>(4) Presentasikan pada rapat guru, dan minta beberapa orang rekan Anda memberikan umpan balik.</li>
            </ol>
            <p><a href="https://youtu.be/o-qa4WPyflU?si=dsX1KIgw3plPSFlI" target="_blank" class="text-blue-600 underline">🎥 Link Video Serba Serbi Penerapan Pembelajaran Model PjBL</a></p>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/4cd03be1-5a50-4b13-855e-80bdcbae8aea-04%20PPA_SMK_TOPIK1d_Serba-serbi%20Penerapan%20Pembelajaran%20%20Model%20PjBL.pdf" target="_blank" class="text-blue-600 underline">📄 Link Dokumen</a></p>',
            'order' => 10,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-10',
            'title' => 'Kelebihan dan Kekurangan Pelaksanaan Pembelajaran Model PjBL di SMK',
            'content' => '<p>Setelah Bapak/Ibu Guru melakukan telaah model pembelajaran PjBL, Bapak/Ibu Guru menuliskan adakah hal-hal yang masih perlu diketahui lebih lanjut? Atau hal lain yang belum pahami? Bapak/Ibu Guru menuliskan jawaban pada kolom yang tersedia.</p>
            <ol>
                <li>(1) Hal yang telah saya pelajari.</li>
                <li>(2) Hal yang ingin saya pelajari lebih lanjut.</li>
                <li>(3) Bagaimana saya mencari informasi tersebut.</li>
            </ol>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/8a7ee94e-240f-4b0c-a537-86980711ed7c-05%20PPA_SMK_TOPIK1e_Kelebihan%20dan%20Kekurangan%20Pelaksanaan%20Pembelajaran%20Model%20PjBL%20di%20SMK.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Kelebihan dan Kekurangan Pembelajaraan PjBL di SMK</a></p>',
            'order' => 11,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-11',
            'title' => 'Bagaimana Keterkaitan Antar Mapel dalam Pembelajaran Model PjBL?',
            'content' => '<p>Pada bagian Koneksi Antarmateri ini, diharapkan Bapak/Ibu Guru membuat hubungan antarmateri yang sedang dipelajari dengan materi lain, mata kuliah lain, atau dengan pengalaman belajar atau mengajar secara komprehensif. Bapak/Ibu Guru juga bisa membuat hubungan antara Pembelajaran Model PjBL dengan model dan konteks pembelajaran lain di SMK seperti Tefa, Kelas Industri, Kelas Kewirausahaan.</p>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/7f8b6ac1-7693-432a-bb0b-bc2926b9f924-06%20PPA_SMK_TOPIK1f_Bagaimana%20Keterkaitan%20Antar%20Mapel%20dalam%20Pembelajaran%20Model%20PjBL.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Keterkaitan Antar Mapel dalam Pembelajaran Model PjBL</a></p>',
            'order' => 12,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'model-pjbl-12',
            'title' => 'Aksi Nyata: Pengalaman Melaksanakan Pembelajaran Model PjBL di SMK',
            'content' => '<p>Bapak/Ibu Guru doiminta membuat rencana pengembangan pembelajaran model PjBL di sekolah, memulai dengan mengikuti pertanyaan pemantik berikut ini.</p>
            <ol>
                <li>(1) Pilihlah bentuk pembelajaran model PjBL seperti apa, yang menurut Anda memiliki peluang untuk dikembangkan di sekolah Anda.</li>
                <li>(2) Buatlah analisis bentuk produk atau jasa yang akan Anda kembangkan di sekolah berdasarkan peluang pasar dan kemampuan daya dukung dalam merealisasikan produk atau layanan jasa yang akan Anda kembangkan.</li>
                <li>(3) Buatlah catatan bagaimana Anda merencanakan, melaksanakan pembelajaran dan asesmen pada pelaksanaan PjBL yang Anda rancang.</li>
            </ol>
            <p><a href="https://storage.googleapis.com/microlearning-public-production/document/18850a16-723c-4df8-be33-eddd423e13d3-07%20PPA_SMK_TOPIK1g_Pengalaman%20Melaksanakan%20Pembelajaran%20Model%20PjBL%20di%20SMK.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Pengalaman Melaksanakan Pembelajaran Model PjBL di SMK </a></p>',
            'order' => 13,
        ]);

        Course::create([
            'section' => 'BAB I: Pembelajaran dan Asesmen Model PjBL',
            'slug' => 'lab-challenge-bab2',
            'title' => 'Latihan Pemahaman BAB I',
            'content' => '<p><a href="https://forms.gle/3Rm6ziWYAuGWiZwz6" target="_blank" class="text-blue-600 underline">Link Latihan Pemahaman BAB I</a></p>',
            'order' => 14,
        ]);

        // BAB 2:Pembelajaran dan asesment Kelas Industri

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-1',
            'title' => 'Video 2.1 Kelas Industri',
            'content' => '<p>Bapak/Ibu Guru mengawali pembelajaran topik 2 dengan menonton video mengenai contoh Kelas Industri berikut.</p><a href="https://youtu.be/u4l97xFi_GY" target="_blank" class="text-blue-600 underline">🎥 Link Video Kelas Industri</a>',
            'order' => 15,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-2',
            'title' => 'Adakah Kelas industri di Sekolah Anda?',
            'content' => '<p>Setelah mengamati video inspiratif tentang konteks pembelajaran Kelas Industri tersebut, Bapak/Ibu Guru menuliskan apa yang tersirat dalam pikiran tentang pembelajaran Kelas Industri.</p><a href="https://storage.googleapis.com/microlearning-public-production/document/57371878-2c61-400c-837e-dd8805406df2-08%20PPA_SMK_TOPIK2a_Adakah%20Kelas%20Industri%20di%20Sekolah%20Anda.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar mengenai Adakah Kelas Industri di Sekolah Anda</a>',
            'order' => 16,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-3',
            'title' => 'Gambaran Kelas Industri di SMK',
            'content' => '<p>Bapak/Ibu Guru membaca materi tentang Pembelajaran dan Asesmen pada Kelas Industri, yang berisi:</p>
            <ol>
                <li>(1) Prinsip pembelajaran dan Asesmen Kelas Industri.</li>
                <li>(2) Perencanaan Pembelajaran Kelas Industri.</li>
                <li>(3) Pelaksanaan Pembelajaran Kelas Industri.</li>
                <li>(4) Asesmen Kelas Industri.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/72178e8b-44ac-4297-aff1-360c04304e47-09%20PPA_SMK_TOPIK2b_%20Gambaran%20Kelas%20Industri%20di%20SMK.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Gambaran Kelas Industri di SMK</a>',
            'order' => 17,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-4',
            'title' => 'Video 2.2 Kelas Industri SMKN 1 Bawang',
            'content' => '<p>Bapak/Ibu Guru diminta mencermati video tentang pembelajaran di Kelas Industri SMKN 1 Bawang, mencatat bagaimana penerapan kegiatan dan asesmen di kelas industri diterapkan serta peran guru dalam pembelajaran.</p><a href="https://youtu.be/xwSEq9ykv6w" target="_blank" class="text-blue-600 underline">🎥 Link Video Kelas Industri SMKN 1 Bawang</a>',
            'order' => 18,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-5',
            'title' => 'Video 2.3 Seleksi Peserta Didik Kelas Industri',
            'content' => '<p>Bapak/Ibu guru menonton video berikut ini memberikan gambaran tentang penyiapan kelas industri, yaitu seleksi calon peserta didik. Simak dan pelajari bagaimana seleksi tersebut dilakukan.</p><a href="https://youtu.be/jAq-hIifAus" target="_blank" class="text-blue-600 underline">🎥 Link Video Seleksi Peserta Didik Kelas Industri</a>',
            'order' => 19,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-6',
            'title' => 'Video 2.4 Kelas Industri Perhotelan',
            'content' => '<p>Bapak/Ibu Guru membahas materi tentang pelaksanaan pembelajaran dan asesmen Kelas Industri, melalui video pada tautan berikut ini Bapak/Ibu Guru menyimak bagaimana penerapan kelas industri di SMK.</p><a href="https://youtu.be/ZlmGVvgJGiY" target="_blank" class="text-blue-600 underline">🎥 Link Video Kelas Industri Perhotelan</a>',
            'order' => 20,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-7',
            'title' => 'Mengapa Harus Kelas Industri?',
            'content' => '
            <p>Pada bagian ini, Bapak/Ibu Guru diminta untuk menelaah penerapan pembelajaran di Kelas Industri. Anda dapat melibatkan rekan sejawat, kepala sekolah, pengawas sekolah atau praktisi pendidikan. Pilihlah salah satu dari kegiatan berikut ini.</p>
            <li>Menonton video pada tautan yang diberikan:</li>
            <a href="https://youtu.be/hajLqSKqG64?si=POqAd2eF2LgfygmY" target="_blank" class="text-blue-600 underline">🎥 Link Video Mengapa Harus Kelas Industri?</a>
            <p>Bila pilihan adalah menonton video, lakukan telaah secara berkelompok melalui diskusi tentang pembelajaran di Kelas Industri yang ditampilkan pada video di atas.</p>
            <li>Menelaah rancangan pembelajaran model PjBL yang pernah Anda kembangkan.</li>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/5fbe18fe-8b76-469b-a20f-e7f0c3e04c23-10%20PPA_SMK_TOPIK2c_%20Mengapa%20Harus%20Kelas%20Industri.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Panduan selengkapnya dapat diunduh disini</a>',
            'order' => 21,
        ]);


        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-8',
            'title' => 'Serba Serbi Kelas Industri',
            'content' => '<p>Pada bagian ini ibu dan bapak guru membagikan hasil kolaborasi dengan rekan sejawat atau kepala sekolah atau pengawas atau praktisi pendidikan yang telah dilakukan. Ada beberapa pilihan kegiatan yang dapat dipilih untuk berbagi hasil kolaborasi dengan memilih salah satu dari alternatif di bawah ini:</p>
            <ol>
                <li>(1) Mempublikasikan hasil telaah Bapak/Ibu guru pada platform media sosial, dan mintalah pendapat dari rekan sejawat Bapak/Ibu guru.</li>
                <li>(2) Mempublikasikan di grup jejaring rekan sejawat, dan mintalah 1-2 orang rekan Bapak/Ibu guru memberikan tanggapan.</li>
                <li>(3) Mempublikasikan di blog pribadi, dan minta rekan sejawat Bapak/Ibu untuk memberikan komentar.</li>
                <li>(4) Presentasikan pada rapat guru, dan minta beberapa orang rekan Bapak/Ibu memberikan umpan balik.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/a27ffb60-0bf0-4128-8558-47f9788878b9-11%20PPA_SMK_TOPIK2d_Serba-serbi%20Kelas%20Industri.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Serba Serbi Kelas Industri</a>',
            'order' => 22,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-9',
            'title' => 'Peluang Penerapan Kelas Industri di SMK',
            'content' => '<p>Setelah Bapak/Ibu Guru mempelajari materi penerapan kelas industri di SMK, Bapak/Ibu Guru menuliskan dalam tabel yang berisi tentang:</p>
            <ol>
                <li>(1) adakah hal-hal yang menarik untuk pelajari atau,</li>
                <li>(2) adakah hal-hal yang belum ditemukan jawabannya.</li>
            </ol>    
            <a href="https://storage.googleapis.com/microlearning-public-production/document/3b8e289c-4a39-427f-8983-98526a9d00ce-12%20PPA_SMK_TOPIK2e_Peluang%20Penerapan%20Kelas%20Industri%20di%20SMK.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Peluang Penerapan Kelas Industri di SMK</a>',
            'order' => 23,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-10',
            'title' => 'Pembelajaran Model PjBL dan Kelas Industri?',
            'content' => '<p>Bapak/Ibu Guru SMK yang hebat, pada bagian ini buatlah peta konsep, infografis atau bentuk visualisasi lainnya yang dapat menggambarkan hubungan antara pembelajaran model PjBL dan kelas industri. Fokuskan visualisasi Anda pada konsep-konsep utama.</p><a href="https://storage.googleapis.com/microlearning-public-production/document/2889aacd-07a1-464c-98b9-b999bc8f6e8c-13%20PPA_SMK_TOPIK2f_Pembelajaran%20Model%20PjBl%20dan%20Kelas%20Industri.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Pembelajaran Model PjBL dan Kelas Industri</a>',
            'order' => 24,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-11',
            'title' => 'Aksi Nyata: Ayo, Buka Kelas Industri di SMK Anda!',
            'content' => '<p>Bapak/Ibu Guru diminta untuk melakukan refleksi terkait materi pembelajaran Kelas Industri di SMK berupa rencana aksi.</p><a href="https://storage.googleapis.com/microlearning-public-production/document/6c4a7e4f-a15b-4371-a0b1-c3b65d3cc226-14%20PPA_SMK_TOPIK2g_Ayo,%20Buka%20Kelas%20Industri%20di%20SMK%20Anda.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Buka Kelas Industri di smk</a>',
            'order' => 25,
        ]);

        course::create([
            'section' => 'BAB II: Pembelajaran dan Asesmen Kelas Industri',
            'slug' => 'kelas-industri-12',
            'title' => 'Latihan Pemahaman BAB II',
            'content' => '<p><a href="https://forms.gle/SjHyHvFeLoRTXsoa6" target="_blank" class="text-blue-600 underline">Link Latihan Pemahaman BAB I</a></p>',
            'order' => 26,
        ]);

        // BAB 3 Pembelajaran dan asesmen kelas kewirausahaan

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-1',
            'title' => 'Gambaran Kelas Kewirausahaan di SMK',
            'content' => '<p>Bapak/Ibu Guru diberikan gambaran awal tentang topik yang ketiga yaitu Pembelajaran dan Asesmen Kelas Kewirausahaan. Bapak/Ibu Guru dijelaskan tujuan pembelajaran yang diharapkan, yaitu diharapkan mampu:</p>
            <ol>
                <li>(1) Menjelaskan prinsip pembelajaran dan asesmen Kelas Kewirausahaan.</li>
                <li>(2) Menerapkan pembelajaran dan asesmen Kelas Kewirausahaan.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/151ff198-33e1-46f8-8878-c72a182cd943-15%20PPA_SMK_TOPIK3a_Gambaran%20Kelas%20Kewirausahaan%20di%20SMK.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Gambaran Kelas Kewirausahaan di SMK</a>',
            'order' => 27,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-2',
            'title' => 'Video 3.1 Pembelajaran Kelas Kewirausahaan (Sekolah Pencetak Wirausaha)',
            'content' => '<p>Untuk mendapatkan gambaran awal materi pada topik ini, Bapak/Ibu Guru diharapkan menyimak video tentang kegiatan pembelajaran dan asesmen di kelas kewirausahaan ini, lalu mengisi pertanyaan reflektif pada teks sebelumnya.</p>
            <a href="https://youtu.be/hGJr_NPu9K8" target="_blank" class="text-blue-600 underline">🎥 Link Video Pembelajaran Kelas Kewirausahaan (Sekolah Pencetak Wirausaha)</a>',
            'order' => 28,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-3',
            'title' => 'Bagaimana Mewujudkan Kelas Kewirausahaan di SMK?',
            'content' => '<p>Bapak/Ibu Guru membahas materi topik 3 yang berisi tentang:</p>
            <ol>
                <li>(1) Prinisp Pembelajaran dan Asesmen Kelas Kewirausahaan di SMK,</li>
                <li>(2) Perencanaan Pembelajaran Kelas Kewirausahaan,</li>
                <li>(3) Pelaksanaan Pembelajaran Kelas Kewirausahaan,</li>
                <li>(4) Asesmen Kelas Kewirausahaan.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/2a9000c3-e135-4808-8d4d-85afff3dba2f-16%20PPA_SMK_TOPIK3b_Bagaimana%20%20Mewujudkan%20%20Kelas%20Kewirausahaan%20%20di%20SMK.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Bagaimana Mewujudkan Kelas Kewirausahaan di SMK</a>',
            'order' => 29,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-4',
            'title' => 'Video 3.2 Kelas Kewirausahaan',
            'content' => '<p>Untuk mengawali pembahasan pada topik ini, Bapak/Ibu Guru mencermati video tentang kelas kewirausahaan pada tautan berikut dan mencatat informasi penting bagaimana guru melaksanakan kegiatan pembelajaran dan asesmen di kelas kewirausahaan. Instruksi pengerjaan selengkapnya dapat merujuk kepada teks sebelumnya.</p>
            <a href="https://youtu.be/s7myefntqfk" target="_blank" class="text-blue-600 underline">🎥 Link Video Kelas Kewirausahaan</a>',
            'order' => 30,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-5',
            'title' => 'Kelas Kewirausahaan sebagai Peluang Wirausaha Peserta Didik Sambil Belajar',
            'content' => 'Pada bagian ini, Bapak/Ibu Guru diminta untuk menelaah penerapan pembelajaran Kelas Kewirausahaan. Anda dapat melibatkan rekan sejawat, kepala sekolah, pengawas sekolah atau praktisi pendidikan. Pilihlah salah satu dari kegiatan berikut ini.</p>
            <ol>
                <li>(1) Menonton video pada tautan yang diberikan.</li>
                <li>(2) Menelaah rancangan pembelajaran Kelas Kewirausahaan yang pernah dikembangkan oleh Bapak/Ibu Guru di SMK.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/a2e77007-219d-44d0-b34b-f84a380934f8-17%20PPA_SMK_TOPIK3c_Kelas%20Kewirausahaan%20sebagai%20Peluang%20Wirausaha%20Peserta%20Didik%20Sambil%20Belajar.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Kewirausahaan sebagai Peluang Wirausaha Peserta Didik Sambil Belajar</a>',
            'order' => 31,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-6',
            'title' => 'Bagaimana Kelas Kewirausahaan Dibangun?',
            'content' => '<p>Pada tahap ini, Anda diminta untuk memaparkan hasil telaah yang dilakukan.

            Ada beberapa pilihan kegiatan yang dapat Anda lakukan untuk memaparkan hasil telaah tersebut:</p>
            <ol>
                <li>(1) Mempublikasikan hasil telaah Anda pada platform media sosial, dan mintalah pendapat dari rekan sejawat Anda.</li>
                <li>(2) Mempublikasikan di grup jejaring rekan sejawat, dan mintalah 1-2 orang rekan Anda memberikan tanggapannya.</li>
                <li>(3) Mempublikasikan di blog pribadi, dan minta rekan Anda untuk memberikan komentar.</li>
                <li>(4) Presentasikan pada rapat guru, dan minta beberapa orang rekan Anda memberikan umpan balik.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/e4635d14-591c-47fe-b72f-230b137531ca-18%20PPA_SMK_TOPIK3d_Bagaimana%20Kelas%20Kewirausahaan%20dibangun.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Bagaimana Kelas Kewirausahaan Dibangun?</a>',
            'order' => 32,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-7',
            'title' => 'Siapkah Sekolah Anda Menyelenggarakan Kelas Kewirausahaan?',
            'content' => '<p>Untuk memperdalam pemahaman Bapak/Ibu Guru tentang prinsip-prinsip pembelajaran dan asesmen yang diterapkan dalam merencanakan, melaksanakan, dan asesmen kelas kewirausahaan, Bapak/Ibu Guru membuat pertanyaan-pertanyaan mengenai hal-hal yang masih belum dipahami, kemudian didiskusikan dengan rekan, dosen atau instruktur tamu. Bapak/Ibu Guru menulis pertanyaan-pertanyaan tersebut pada kolom yang disediakan</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/6c06106e-65fa-4bc5-b9ac-41efd88c1612-19%20PPA_SMK_TOPIK3e_Siapkah%20Sekolah%20Anda%20Menyelenggarakan%20Kelas%20Kewirausahaan.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Siapkah Sekolah Anda Menyelenggarakan Kelas Kewirausahaan</a>',
            'order' => 33,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-8',
            'title' => 'Bagaimana Kolaborasi Antar Mata Pelajaran dalam Kelas Kewirausahaan?',
            'content' => '<p>Bapak/Ibu Guru membuat koneksi antar materi tentang prinsip-prinsip pembelajaran dan asesmen yang diterapkan dalam merencanakan, melaksanakan, dan asesmen Kelas Kewirausahaan. Bapak/Ibu Guru dapat mengaitkan beberapa mata pelajaran yang mendukung perencanaan dan pelaksanaan projek/produk kewirausahaan. Koneksi antar materi ini bisa berupa poster, infografis, atau mind map!</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/feab0475-ddb4-428b-8d93-17c06d7f2303-20%20PPA_SMK_TOPIK3f_Bagaimana%20Kolaborasi%20Antar%20Mata%20Pelajaran%20dalam%20Kelas%20Kewirausahaan.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Bagaimana Kolaborasi Antar Mata Pelajaran dalam Kelas Kewirausahaan</a>',
            'order' => 34,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-9',
            'title' => 'Aksi Nyata: Membangun Jiwa Entrepreneur Semasa Belajar di SMK',
            'content' => '<p>Bapak/Ibu Guru diminta untuk melakukan refleksi terkait materi pembelajaran Kelas Kewirausahaan di SMK berdasarkan pertanyaan: "Bentuk pembelajaran Kelas Kewirausahaan seperti apa yang menurut Bapak/Ibu Guru memiliki peluang untuk dikembangkan di sekolah yang dituangkan dalam rencana aksi nyata pengembangan prinsip pembelajaran dan asesmen Kelas Kewirausahaan?"</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/9721ee88-d357-4b33-9186-e5356b768230-21%20PPA_SMK_TOPIK3g_Membangun%20Jiwa%20Entrepreneur%20semasa%20Belajar%20di%20SMK.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Aksi Nyata: Membangun Jiwa Entrepreneur Semasa Belajar di SMK</a>',
            'order' => 35,
        ]);

        course::create([
            'section' => 'BAB III: Pembelajaran dan Asesmen Kelas Kewirausahaan',
            'slug' => 'Kelas-Kewirausahaan-10',
            'title' => 'Latihan Pemahaman BAB III',
            'content' => '<p><a href="https://forms.gle/q4UaSdXskDMEjUkL6" target="_blank" class="text-blue-600 underline">Link Latihan Pemahaman BAB III</a></p>',
            'order' => 36,
        ]);

        // Bab 4 Pembelajaran dan Asesmen Kelas Tefa

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-1',
            'title' => 'Apa yang Anda Ketahui tentang Kelas Teaching Factory?',
            'content' => '<p>Pada bagian ini, Bapak/Ibu Guru diberikan gambaran awal tentang materi topik 4 Pembelajaran dan Asesmen Kelas Tefa, serta tujuan setelah mempelajari topik ini, yaitu:</p>
            <ol>
                <li>(1) Menjelaskan prinsip pembelajaran dan asesmen Kelas Teaching Factory (Tefa).</li>
                <li>(2) Menerapkan pembelajaran dan asesmen Kelas Tefa.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/8f93ceba-3b99-426a-8556-78a1d6d4f5cc-22%20PPA_SMK_TOPIK4a_Apa%20yang%20Anda%20ketahui%20tentang%20%20Kelas%20Teaching%20Factory.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar tentang Kelas Teaching Factory</a>',
            'order' => 37,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-2',
            'title' => 'Video 4.1 Teaching Factory',
            'content' => '<p>Bapak/Ibu guru dipersilakan menyimak video tentang pembelajaran pada konteks Teaching Factory berikut dan mencatat informasi yang terkait dengan pembelajaran dan asesmen pada Teaching Factory!</p>
            <a href="https://youtu.be/Wag6WcgKO6o" target="_blank" class="text-blue-600 underline">🎥 Link Video Teaching Factory</a>',
            'order' => 38,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-3',
            'title' => 'Bagaimana Desain Kelas Tefa di SMK?',
            'content' => '<p>Pada topik 4 akan membahas tentang Pembelajaran dan Asesmen Kelas Tefa, yang terdiri dari materi:</p>
            <ol>
                <li>(1) Prinsip Pembelajaran dan Asesmen Kelas Teaching Factory,</li>
                <li>(2) Perencanaan Pembelajaran Kelas Tefa,</li>
                <li>(3) Pelaksanaan Pembelajaran Kelas Tefa,</li>
                <li>(4) Asesmen Kelas Tefa.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/2db382a2-e8de-4f09-9be2-ece0928ad140-23%20PPA_SMK_TOPIK4b_Bagaimana%20%20Desain%20Kelas%20Tefa%20di%20SMK.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Bagaimana Desain Kelas Tefa di SMK</a>',
            'order' => 39,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-4',
            'title' => 'Video 4.2 Konsep Teaching Factory',
            'content' => '<p>Sebelum mempelajari lebih jauh tentang teaching factory, Bapak/Ibu Guru mencermati video tentang teaching factory berikut.</p>
            <a href="https://youtu.be/TWaP0FDp42Y" target="_blank" class="text-blue-600 underline">🎥 Link Video Konsep Teaching Factory</a>',
            'order' => 40,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-5',
            'title' => 'Video 4.3 Pemilihan Produk Tefa',
            'content' => '<p>Bapak/Ibu Guru mencermati secara seksama video yang memberikan penjelasan dalam pemilihan produk pada pembelajaran TeFa pada video berikut.</p>
            <a href="https://youtu.be/doIKW70Qpa8" target="_blank" class="text-blue-600 underline">🎥 Link Video Pemilihan Produk Tefa</a>',
            'order' => 41,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-6',
            'title' => 'Video 4.4 Penyusunan Job Sheet',
            'content' => '<p>Bapak/Ibu guru mencermati secara saksama video yang memberikan penjelasan dalam penyusunan job sheet.</p>
            <a href="https://youtu.be/fviBTF7fc74" target="_blank" class="text-blue-600 underline">🎥 Link Video Penyusunan Job Sheet</a>',
            'order' => 42,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-7',
            'title' => 'Video 4.5 Penjadwalan Blok pada Tefa',
            'content' => '<p>Bapak/Ibu guru mencermati video yang memberikan penjelasan mengenai penjadwalan pada kelas TeFA berikut.</p>
            <a href="https://youtu.be/NoKcHbN0P7g" target="_blank" class="text-blue-600 underline">🎥 Link Video Penjadwalan Blok pada Tefa</a>',
            'order' => 43,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-8',
            'title' => 'Mungkinkan Industri/Pabrik di Sekolah Terwujud?',
            'content' => '<p>Pada ruang kolaborasi topik keempat, Bapak/Ibu Guru diminta untuk mencari rekan sejawat (teman sejawat/kepala sekolah/pengawas/praktisi) untuk menjadi rekan diskusi yang mendiskusikan perencanaan dan pengelolaan pada kelas TeFa.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/98af5cf6-d51e-44df-b1c7-25ed0283a19b-27%20PPA_SMK_TOPIK4f_%20Bagaimana%20Integrasi%20Mapel%20Pendukung%20pada%20Kelas%20Tefa.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Mungkinkan Industri/Pabrik di Sekolah Terwujud</a>',
            'order' => 44,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-9',
            'title' => 'Video 4.6. Telaah Teaching Factory',
            'content' => '<p>Bapak/Ibu Guru diminta untuk menemukan perencanaan, pembelajaran dan asesmen dilakukan guru berdasarkan pengamatan video berikut ini.</p>
            <a href="https://youtu.be/Nvbdbj66gwc" target="_blank" class="text-blue-600 underline">🎥 Link Video Telaah Teaching Factory</a>',
            'order' => 45,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-10',
            'title' => 'Tefa, Bagaimana Merancangnya?',
            'content' => '<p>Pada tahap ini, Bapak/Ibu Guru diminta untuk memaparkan hasil telaah yang dilakukan. Ada beberapa pilihan kegiatan yang dapat dilakukan untuk memaparkan hasil telaah tersebut, yaitu:</p>
            <ol>
                <li>(1) Mempublikasikan hasil telaah Anda pada platform media sosial, dan mintalah pendapat dari rekan sejawat Anda</li>
                <li>(2) Mempublikasikan di grup jejaring rekan sejawat, dan mintalah 1-2 orang rekan Anda memberikan tanggapannya.</li>
                <li>(3) Mempublikasikan di blog pribadi, dan minta rekan Anda untuk memberikan komentar.</li>
                <li>(4) Presentasikan pada rapat guru, dan minta beberapa orang rekan Anda memberikan umpan balik.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/591a42c6-9779-4224-836d-54fe49dba47a-25%20PPA_SMK_TOPIK4d_Tefa,%20Bagaimana%20Merancangnya.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Bagaimana Merancangnya</a>',
            'order' => 46,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-11',
            'title' => 'Teaching Factory, Apa Kesulitannya?',
            'content' => '<p>Untuk memperdalam pemahaman tentang prinsip-prinsip pembelajaran dan asesmen yang diterapkan dalam merencanakan, melaksanakan, dan asesmen kelas teaching factory, Bapak/Ibu Guru ditugaskan untuk membuat pertanyaan-pertanyaan mengenai hal-hal yang masih belum dipahami, kemudian didiskusikan dengan rekan, dosen atau instruktur tamu.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/ab03f25c-d450-40c6-9151-553f76c7ddb2-26%20PPA_SMK_TOPIK4e_Teaching%20Factory,%20Apa%20Kesulitannya.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Apa Kesulitannya</a>',
            'order' => 47,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-12',
            'title' => 'Bagaimana Integrasi Mapel Pendukung pada Kelas Tefa?',
            'content' => '<p>Bapak/Ibu Guru membuat koneksi antar materi tentang prinsip-prinsip pembelajaran dan asesmen yang diterapkan dalam merencanakan, melaksanakan, dan asesmen kelas teaching factory. Bapak/Ibu Guru dapat mengaitkan materi pada topik yang lain ataupun mata pelajaran tertentu yang mendukung perencanaan dan pelaksanaan projek/produk teaching factory. Koneksi antar materi ini bisa berupa poster, infografis, atau mind map.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/83ece89f-2f26-42b9-87ce-46a1848eff73-27%20PPA_SMK_TOPIK4f_%20Bagaimana%20Integrasi%20Mapel%20Pendukung%20pada%20Kelas%20Tefa.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Integrasi Mapel Pendukung pada Kelas Tefa</a>',
            'order' => 48,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-13',
            'title' => 'Apa yang Anda Ketahui tentang Kelas Teaching Factory?',
            'content' => '<p>Pada bagian ini, Bapak/Ibu Guru diberikan gambaran awal tentang materi topik 4 Pembelajaran dan Asesmen Kelas Tefa, serta tujuan setelah mempelajari topik ini, yaitu:</p>
            <ol>
                <li>(1) Menjelaskan prinsip pembelajaran dan asesmen Kelas Teaching Factory (Tefa).</li>
                <li>(2) Menerapkan pembelajaran dan asesmen Kelas Tefa.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/8f93ceba-3b99-426a-8556-78a1d6d4f5cc-22%20PPA_SMK_TOPIK4a_Apa%20yang%20Anda%20ketahui%20tentang%20%20Kelas%20Teaching%20Factory.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar tentang Kelas Teaching Factory</a>',
            'order' => 49,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-14',
            'title' => 'Aksi Nyata: Tefa, SMK Pasti Bisa',
            'content' => '<p>Bapak/Ibu Guru diminta untuk melakukan refleksi terkait materi pembelajaran Kelas Tefa di SMK.

            “Bentuk pembelajaran Kelas Tefa seperti apa yang menurut Anda memiliki peluang untuk dikembangkan di sekolah Anda, buatlah rencana aksi nyata pengembangan prinsip pembelajaran dan asesmen Kelas Tefa!"</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/4141fbcb-2996-4db4-bccf-5a48e5b54a2f-28%20PPA_SMK_TOPIK4g_Tefa,%20%20SMK%20Pasti%20Bisa.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Aksi Nyata: Tefa, SMK Pasti Bisa</a>',
            'order' => 50,
        ]);

        course::create([
            'section' => 'BAB IV: Pembelajaran dan Asesmen Kelas Tefa',
            'slug' => 'Kelas-Tefa-15',
            'title' => 'Latihan Pemahaman BAB IV',
            'content' => '<p><a href="https://forms.gle/DHZomvGEEKFxBwccA" target="_blank" class="text-blue-600 underline">Link Latihan Pemahaman BAB IV</a></p>',
            'order' => 51,
        ]);

        // BAB 5 Pembelajaran dan Asessmen Mata Pelajaran PKL.

        course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-1',
            'title' => 'Bagaimana PKL Dilaksanakan di Sekolah Anda?',
            'content' => '<p>Bapak/Ibu Guru dijelaskan tentang tujuan setelah mempelajari topik ini, yaitu Bapak/Ibu Guru mampu:</p>
            <ol>
                <li>(1) Menjelaskan prinsip pembelajaran dan asesmen Praktek Kerja Lapangan (PKL).</li>
                <li>(2) Menerapkan prinsip pembelajaran dan asesmen Mata Pelajaran PKL</li>
            </ol>
            <p>Pertanyaan pemantik:</p>
            <ol>
                <li>(1) Untuk memulai pembahasan tentang materi pada topik kelima ini, apa yang Bapak/Ibu Guru pahami selama ini tentang PKL?</li>
                <li>(2) Tuliskan ekspektasi Bapak/Ibu Guru ketika mempelajari materi pembelajaran dan asesmen PKL sebagai Mapel pada Kurikulum Merdeka.</li>
            </ol>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/b93ee495-e1d1-4034-9a6c-86f8f80ecaa1-29%20PPA_SMK_TOPIK5a_Bagaimana%20PKL%20Dilaksanakan%20di%20Sekolah%20Anda.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Bagaimana PKL Dilaksanakan di Sekolah Anda</a>',
            'order' => 52,
        ]);

        course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-2',
            'title' => 'Sekarang Wajib Tahu PKL adalah Mata Pelajaran di SMK!',
            'content' => '<p>Pada bagian ini dibahas materi tentang:</p>
            <ol>
                <li>(1) Prinsip Pembelajaran dan Asesmen Mata Pelajaran Praktek Kerja Lapangan,</li>
                <li>(2) Perencanaan Pembelajaran Mata Pelajaran PKL,</li>
                <li>(3) Pelaksanaan Pembelajaran Mata Pelajaran PKL,</li>
                <li>(4) Asesmen Mata Pelajaran PKL.</li>
            </ol>
             <a href="https://storage.googleapis.com/microlearning-public-production/document/c49f9906-2d1e-4964-be50-3f919c0c1654-30%20PPA_SMK_TOPIK5b_Sekarang%20Wajib%20Tahu%20PKL%20adalah%20Mata%20Pelajaran%20di%20SMK.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar PKL adalah Mata Pelajaran di SMK</a>',
            'order' => 53,
        ]);

        Course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-3',
            'title' => 'Bagaimana Sebaiknya Implementasi Mapel PKL di Dunia Kerja?',
            'content' => '
                <p>
                    Pada bagian ruang kolaborasi topik kelima, Bapak/Ibu Guru diminta 
                    untuk mencari partner diskusi (dengan teman sejawat/kepala sekolah/pengawas/praktisi) 
                    untuk menyelesaikan tugas berikut:
                </p>

                <p>
                    <b>Diketahui elemen 1 dari Capaian Pembelajaran PKL:</b><br><br>
                    <b>Elemen 1:</b> Internalisasi dan Penerapan Soft Skills<br><br>
                    <b>Capaian Pembelajaran:</b><br>
                    Pada akhir fase F, peserta didik mampu menerapkan etika berkomunikasi secara lisan 
                    dan tulisan, integritas (antara lain jujur, disiplin, komitmen, dan tanggung jawab), 
                    etos kerja, bekerja secara mandiri dan/atau secara tim, kepedulian sosial dan lingkungan, 
                    serta ketaatan terhadap norma, K3LH, dan POS yang berlaku di dunia kerja.
                </p>

                <p>
                    Dari Capaian Pembelajaran, elemen 1 pada CP mata pelajaran PKL, 
                    susunlah tujuan pembelajaran dan alur tujuan pembelajaran. 
                    Jawaban dibuat dalam bentuk presentasi yang menarik, dan dipresentasikan 
                    pada alur merdeka langkah <i>Demonstrasi Kontekstual</i>.
                </p>

                <a href="https://storage.googleapis.com/microlearning-public-production/document/1b5592dc-8ab5-44ba-86ff-74fc0b736b2e-31%20PA_SMK_TOPIK5c_Bagaimana%20Sebaiknya%20Implementasi%20%20Mapel%20PKL%20di%20Dunia%20Kerja.docx.pdf"
                   target="_blank" 
                   class="text-blue-600 underline">
                   📄 Buku Ajar Implementasi Mapel PKL di Dunia Kerja
                </a>
            ',
            'order' => 54,
        ]);

        course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-4',
            'title' => 'Diskusi PKL, Bagaimana Bentuknya?',
            'content' => '<pPada tahap ini, Bapak/Ibu Guru diminta untuk memaparkan hasil kerja berupa TP dan ATP yang disusun berdasarkan Capaian Pembelajaran pada Elemen 1 dari CP mapel PKL.</p>
            <p>Ada beberapa pilihan kegiatan yang dapat Anda lakukan untuk memaparkan hasil kerja tersebut.</p>
            <ol>
                <li>(1) Mempublikasikan hasil telaah Anda pada platform media sosial, dan mintalah pendapat dari rekan sejawat Anda</li>
                <li>(2) Mempublikasikan di grup jejaring rekan sejawat, dan mintalah 1-2 orang rekan Anda memberikan tanggapannya</li>
                <li>(3) Mempublikasikan di blog pribadi, dan minta rekan Anda untuk memberikan komentar</li>
                <li>(4) Presentasikan pada rapat guru, dan minta beberapa orang rakan Anda memberikan umpan balik!</li>
            </ol>
             <a href="https://storage.googleapis.com/microlearning-public-production/document/754dcb9d-1767-4c28-88fd-e27c0260ba58-32%20PPA_SMK_TOPIK5d_Diskusi%20PKL,%20Bagaimana%20Bentuknya.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Diskusi PKL, Bagaimana Bentuknya</a>',
            'order' => 55,
        ]);

        course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-5',
            'title' => 'Sulitkah Melaksanakan Mapel PKL di Dunia Kerja?',
            'content' => '<p>Untuk memperdalam pemahaman Bapak/Ibu guru tentang prinsip-prinsip pembelajaran dan asesmen pada Mapel PKL, ditugaskan untuk membuat pertanyaan-pertanyaan mengenai hal-hal yang masih belum dipahami, kemudian didiskusikan dengan rekan, dosen atau instruktur tamu.</p>
             <a href="https://storage.googleapis.com/microlearning-public-production/document/23be0876-50f4-4660-81eb-471029937127-33%20PPA_SMK_TOPIK5e_Sulitkah%20Melaksanakan%20Mapel%20PKL%20di%20Dunia%20Kerja.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Sulitkah Melaksanakan Mapel PKL di Dunia Kerja</a>',
            'order' => 56,
        ]);

        course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-6',
            'title' => 'Bagaimana Relasi Kelompok Mata Pelajaran terhadap Pencapaian Kompetensi Mapel PKL di Dunia Kerja?',
            'content' => '<p>Pada bagian ini Bapak/Ibu Guru ditugaskan untuk membuat koneksi antar materi tentang pembelajaran dan asesmen pada Mapel PKL. Bapak/Ibu Guru dapat mengaitkan materi pada topik yang lain ataupun mata pelajaran tertentu yang mendukung perencanaan dan pelaksanaan PKL sebagai Mapel. Koneksi antar materi ini bisa berupa poster, infografis, atau mind map.</p>
             <a href="https://storage.googleapis.com/microlearning-public-production/document/2468d010-288f-46cb-b599-80a79c9823e1-34%20PPA_SMK_TOPIK5f_Bagaimana%20%20Relasi%20Kelompok%20Mata%20Pelajaran%20terhadap%20Pencapaian%20Kompetensi%20Mapel%20PKL%20di%20Dunia%20Kerja.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Bagaimana Relasi Kelompok Mata Pelajaran terhadap Pencapaian Kompetensi Mapel PKL di Dunia Kerja</a>',
            'order' => 57,
        ]);

        course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-7',
            'title' => 'Aksi Nyata: Mari, Merancang Mapel PKL Bersama Industri/Dunia Kerja!',
            'content' => '<p>Bapak/Ibu Guru diminta untuk melakukan refleksi terkait materi pembelajaran mata pelajaran PKL di SMK.

“Bentuk pembelajaran mata pada pelajaran PKL seperti apa yang menurut Anda memiliki peluang untuk dikembangkan di sekolah Anda, buatlah rencana aksi nyata pengembangan prinsip pembelajaran dan asesmen mata pelajaran PKL!”</p>
             <a href="https://storage.googleapis.com/microlearning-public-production/document/1cf91100-2437-4d92-a93f-8a581ac44e3b-35%20PPA_SMK_TOPIK5g_Mari,%20Merancang%20Mapel%20PKL%20Bersama%20Industri_Dunia%20Kerja!.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Merancang Mapel PKL Bersama Industri/Dunia Kerja</a>',
            'order' => 58,
        ]);

        course::create([
            'section' => 'BAB V: Pembelajaran dan Asesmen Mata Pelajaran PKL',
            'slug' => 'PKL-8',
            'title' => 'Latihan Pemahaman BAB V',
            'content' => '<p><a href="https://forms.gle/8Gvr1cVgJy2tNDmR6" target="_blank" class="text-blue-600 underline">Link Latihan Pemahaman BAB V</a></p>',
            'order' => 59,
        ]);

    }
}
