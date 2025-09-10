<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course2;
use Illuminate\Support\Facades\DB;

class Course2Seeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('course2_progress')->truncate();
        Course2::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = Course2::create([
            'title' => 'BAB I: Pentingnya Collaborative for Academic, Social, and Emotional Learning (CASEL)',
            'slug' => 'bab-1-pentingnya-casel',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        // === Subbab: Pengantar CASEL ===
        $subbab1 = Course2::create([
            'title' => 'Pengantar Collaborative for Academic, Social, and Emotional Learning (CASEL)',
            'slug' => 'pengantar-casel',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        // === Materi di dalam Subbab ===
        Course2::create([
            'title' => 'Naskah Akademik dan Paparan Pembelajaran Mendalam',
            'slug' => 'naskah-akademik-dan-paparan',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Dokumen ini berisi naskah akademik dan paparan pembelajaran mendalam menuju pendidikan bermutu untuk semua. Dokumen-dokumen ini wajib dibaca agar peserta PPG mendapatkan pemahaman kerangka kerja pembelajaran mendalam sebagai landasan menyelesaikan jurnal pembelajaran.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/5f9a7be1-74e6-4c10-a93a-314a6cb507fa-ACC%20Menteri_Nasmik_Pembelajaran%20Mendalam%20(2)_compressed.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Akademik</a>',
            'parent_id' => $subbab1->id,
        ]);

        Course2::create([
            'title' => 'Pengantar Collaborative for Academic, Social, and Emotional Learning (CASEL)',
            'slug' => 'buku-ajar-casel',
            'order' => 2,
            'section' => 'bab-1',
            'content' => '<p>Bapak dan Ibu guru yang terhormat. Pada bagian pengantar dan refleksi ini Anda mempelajari lebih jauh pentingnya Collaborative for Academic, Social, and Emotional Learning (CASEL). Untuk mengawali pemahaman CASEL, Anda akan melakukan refleksi pribadi untuk mengenali emosi yang terjadi saat Anda berelasi dengan orang lain dalam kegiatan pembelajaran.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/4c00a472-9ed5-493a-aeaa-540761573829-Materi%201_Pengantar%20Collaborative%20for%20Academic,%20Social,%20and%20Emotional%20Learning%20%20(CASEL).pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar CASEL</a>',
            'parent_id' => $subbab1->id,
        ]);


        $subbab1 = Course2::create([
            'title' => 'Pembelajaran Sosial Emosional',
            'slug' => 'Sosial-Emosional',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        Course2::create([
            'title' => 'Konseptual Pembelajaran Sosial Emosional',
            'slug' => 'konseptual-sosial-Emosional',
            'order' => 3,
            'section' => 'bab-1',
            'content' => '<p>Bagian ini berisi paparan konsep CASEL. Bapak dan ibu guru dapat memahami CASEL dengan membaca penggalan teori CASEL. Untuk memperdalam pemahaman Bapak dan Ibu, disediakan video yang memberikan pengetahuan komponen CASEL dan pembelajarannya.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/d13975e1-fa62-4c0f-a166-b2a87f00f5eb-Topik%201%20B.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Sosial Emosional</a>',
            'parent_id' => $subbab1->id,
        ]);

        Course2::create([
            'title' => 'What is Social and Emotional Learning (SEL)?',
            'slug' => 'Social-and-Emotional Learning',
            'order' => 4,
            'section' => 'bab-1',
            'content' => '<p>Dalam materi ini Anda akan mengenal lebih jauh konsep CASEL. CASEL sangat membantu dalam pembelajaran. Untuk lebih memahami CASEL Bapak dan Ibu dapat menonton video dari sumber referensi berikut.</p>
            <p>Referensi:</p>
            <p>What is Social and Emotional Learning (SEL)? - CASEL -</p>
                <a href="https://youtu.be/Y-XNp3h3h4A?si=UKWILJM0Lftrbj-d" target="_blank" class="text-blue-600 underline">🎥 Link Video What is Social and Emotional Learning (SEL)?</a>',
            'parent_id' => $subbab1->id,
        ]);

        $subbab1 = Course2::create([
            'title' => 'Kompetensi Sosial Emosional dalam Pembelajaran',
            'slug' => 'kompetensi-Emosional',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        Course2::create([
            'title' => 'Kompetensi Sosial Emosional dalam Pembelajaran',
            'slug' => 'sosial-emosional-pembelajaran',
            'order' => 5,
            'section' => 'bab-1',
            'content' => '<p>Bagian kompetensi sosial emosional dalam pembelajaran ini mengajak Bapak dan Ibu mendiskusikan pentingnya komponen pembelajaran sosial emosional. Bapak dan ibu akan mendiskusikan kasus yang dihadapi profil guru bernama Butet termasuk bagaimana penangannya berdasarkan ruang lingkup pembelajaran sosial emosional.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/58fca82f-a2ad-4bb3-908c-996422c2baa4-Materi%203_Kompetensi%20Sosial%20Emosional%20dalam%20Pembelajaran.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar sosial emosional dalam pembelajaran</a>',
            'parent_id' => $subbab1->id,
        ]);

        $subbab1 = Course2::create([
            'title' => 'Penerapan Pembelajaran Sosial Emosional dalam Pembelajaran',
            'slug' => 'penerapan-sosial-emosional',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

         Course2::create([
            'title' => 'Penerapan Pembelajaran Sosial Emosional dalam Pembelajaran',
            'slug' => 'pembelajaran-sosial-emosional',
            'order' => 6,
            'section' => 'bab-1',
            'content' => '<pPada bagian ini Bapak dan Ibu akan diajak untuk mengembangkan kompetensi dalam menyusun strategi atau rancangan pembelajaran yang memuat komponen pembelajaran sosial emosional. Bapak dan Ibu akan diminta menyusun rancangan RPP/Modul Ajar/Perencanaan Layanan BK yang memperhatikan komponen sosial emosional dan karakteristik peserta didik.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/0fedd61d-5fbf-48c6-a826-cd35887d1445-Materi%204_Penerapan%20Pembelajaran%20Sosial%20Emosional%20dalam%20Pembelajaran.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Penerapan Pembelajaran Sosial Emosional</a>',
            'parent_id' => $subbab1->id,
        ]);

        $subbab1 = Course2::create([
            'title' => 'Kajian Reflektif CASEL',
            'slug' => 'kajian-Casel',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        Course2::create([
            'title' => 'Kajian Reflektif CASEL',
            'slug' => 'Reflektif-CASEL',
            'order' => 7,
            'section' => 'bab-1',
            'content' => '<p>Kajian reflektif CASEL ini berisi uraian bagaimana Anda diajak untuk merefleksikan hasil diskusi yang sudah dilakukan apakah hasil diskusi pada kegiatan demonstrasi kontekstual. Anda akan diminta untuk melihat kembali hal apa saja yang menantang atau kesulitan apa yang akan Anda hadapi dalam praktik kompetensi sosial emosional dalam pembelajaran di sekolah.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/9a920c25-8a09-4ef6-8c3d-5477d78ea5a9-Materi%205_Kajian%20Reflektif%20CASEL.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Reflektif CASEL</a>',
            'parent_id' => $subbab1->id,
        ]);

        $subbab1 = Course2::create([
            'title' => 'Integrasi CASEL dalam mata Pelajaran',
            'slug' => 'Integrasi-CASEL',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        Course2::create([
            'title' => 'Integrasi CASEL dalam mata Pelajaran',
            'slug' => 'Casel-dalam-pelajaran',
            'order' => 8,
            'section' => 'bab-1',
            'content' => '<p>Integrasi CASEL dalam mata pelajaran ini merupakan paparan yang akan membantu dalam memahami CASEL lebih jauh dengan mengaitkan dengan modul lain dalam pembelajaran yang Bapak dan Ibu ampu. Bapak dan ibu akan membuat peta pikiran terkait materi yang telah dipelajari dengan modul-modul lain yang telah dipelajari. Bapak dan Ibu akan menemukan sejumlah pertanyaan yang membantu pemahaman koneksi, materi dan modul lain.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/db793c4d-048d-4ed1-b24b-3431a682e612-Materi%206_Integrasi%20%20CASEL%20dalam%20Mata%20Pelajaran.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Integrasi CASEL</a>',
            'parent_id' => $subbab1->id,
        ]);

        $subbab1 = Course2::create([
            'title' => 'Aksi Nyata Pentingnya Collaborative for Academic, Social, & Emotional Learning (CASEL)',
            'slug' => 'CASEL',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        Course2::create([
            'title' => 'Aksi Nyata Pentingnya Collaborative for Academic, Social, & Emotional Learning (CASEL)',
            'slug' => 'pentingnya-casel',
            'order' => 9,
            'section' => 'bab-1',
            'content' => '<p>Bapak dan Ibu guru, pada bagian ini Anda akan membuat aksi nyata atas pemahaman materi CASEL dan penerapannya dengan menyusun RPP/Modul Ajar/Rencana Pelayanan BK. Selain itu, Anda akan melakukan perekaman atas pelaksanaan pembelajaran sosial emosional yang di dalamnya terdapat penerapan CASEL dan juga melakukan perekaman pelaksanaan pembelajaran sesuai ketentuan yang ada.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/38df82e7-f77a-4448-9e36-3cb53c84cc46-Materi%207_Aksi%20Nyata%20%20Pentingnya%20Collaborative%20for%20Academic,%20Social,%20&%20Emotional%20Learning%20(CASEL).pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar pentingnya-casel</a>',
            'parent_id' => $subbab1->id,
        ]);

        Course2::create([
            'title' => 'Latihan Pemahaman BAB I',
            'slug' => 'Latihan-pemahaman-bab1',
            'order' => 10,
            'section' => 'bab-1',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab I ini, silahkan di klik link yang ada di bawah</p>
            <a href="https://forms.gle/3Rm6ziWYAuGWiZwz6" target="_blank" class="text-blue-600 underline">📄 Latihan Pemahaman</a>',
            'parent_id' => $subbab1->id,
        ]);

        $bab2 = Course2::create([
            'title' => 'BAB II: Peran Guru Sebagai Teladan',
            'slug' => 'bab-1-peran-guru',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab2 = Course2::create([
            'title' => 'Peran Guru Sebagai Teladan',
            'slug' => 'guru-sebagai-teladan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        Course2::create([
            'title' => 'Pengantar: Peran Guru Sebagai Teladan',
            'slug' => 'pengantar-guru-teladan',
            'order' => 11,
            'section' => 'bab-2',
            'content' => '<p>Keteladanan guru menjadi kata kunci penting dalam konteks ini. Oleh karena itu, Bapak dan Ibu diajak untuk merefleksikan pengalaman saat di bangku sekolah bagaimana pengalaman Anda saat di bangku sekolah. Bagaimana Bapak dan Ibu menjawab pertanyaan yang menggugah pengalaman itu untuk dijadikan fondasi membentuk keteladanan guru pada diri Bapak dan Ibu.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/03162f5b-a607-4af7-b6c8-a3f09f40ed3b-Materi%202.1_Pengantar%20Peran%20Guru%20Sebagai%20Teladan.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar peran guru sebagai teladan</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab2 = Course2::create([
            'title' => 'Pembelajaran Sosial Emosional dalam Konteks Keteladanan Guru',
            'slug' => 'pembelajaran-sosial-emosional-dalam-konteks-keteladanan-guru',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        Course2::create([
            'title' => 'Pembelajaran Sosial Emosional dalam Konteks Keteladanan Guru',
            'slug' => 'sosial-emosional-keteladanan-guru',
            'order' => 12,
            'section' => 'bab-2',
            'content' => '<p>Materi ini akan menambah pemahaman Bapak dan Ibu pentingnya melaksanakan pembelajaran di kelas dengan memperhatikan empathy, compassion, mindfulness, dan critical inquiry. Bapak dan Ibu akan menyimak tayangan video yang mengulas keempat hal tersebut. Bapak dan Ibu akan dibantu memahami konseptual tersebut dengan bantuan pertanyaan yang tersedia pada tabel.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/91887bcd-899c-4d67-95d7-045939db0922-2.2.a%20Pembelajaran%20Sosial%20Emosional%20dalam%20Konteks%20Keteladanan%20Guru.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar sosial emosional keteladanan guru</a>',
            'parent_id' => $subbab2->id,
        ]);

        Course2::create([
            'title' => 'Materi 2',
            'slug' => 'materi-2',
            'order' => 13,
            'section' => 'bab-2',
            'content' => '<p>Bapak dan ibu guru akan mempelajari lebih lanjut bagaimana potensi diri sebagai agen perubahan dalam lingkungan sekolah. Selain itu, Anda akan diajak untuk mempercayai bahwa sekolah dan pendidik harus fokus untuk meningkatkan kemampuan berpikir kritis dan meningkatkan pemahaman peserta didik. Melalui dua tayangan video yang disediakan, Anda akan semakin diperjelas bagaimana mengembangkan kemampuan sebagai agen pendidikan yang bermakna bagi pengembangan peserta didik.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/5a371a01-d165-4f87-83ba-1d192c86ee46-topik%202%20B%20materi%202.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Materi 2</a>',
            'parent_id' => $subbab2->id,
        ]);

        Course2::create([
            'title' => 'Kolaborasi guru dengan guru BK dalam pengembangan kompetensi SEL di sekolah',
            'slug' => 'kolaborasi-guru-dan-bk',
            'order' => 14,
            'section' => 'bab-2',
            'content' => '<p>Kerja sama antarguru mata pelajaran dan guru BK merupakan hal penting dalam penerapan pembelajaran berbasis sosial emosional. Hal ini akan membangun daya kritis peserta didik dan menciptakan lingkungan mendukung pengembangan peserta didik secara akademik dan nonakademik. Bapak dan ibu guru akan mendapatkan sejumlah informasi bagaimana mengembangkan bentuk-bentuk kolaborasi guru yang dimaksud melalui materi ini.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/11ec30b2-d800-4930-bc08-3f6ede31610f-2.2.c%20Kolaborasi%20guru%20dengan%20guru%20BK%20dalam%20pengembangan%20kompetensi%20SEL.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar kolaborasi guru dan bk</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab2 = Course2::create([
            'title' => 'Kompetensi Guru Sebagai Teladan',
            'slug' => 'Kompetensi-guru',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        Course2::create([
            'title' => 'Kompetensi Guru Sebagai Teladan',
            'slug' => 'guru-sebagai',
            'order' => 15,
            'section' => 'bab-2',
            'content' => '<p>Ruang kolaborasi akan memberikan arahan kepada Bapak dan Ibu untuk mendiskusikan pembelajaran sosial emosional. Ada sejumlah aktivitas pembelajaran yang akan dilakukan mulai dari melihat cuplikan pembelajaran melalui tayangan Laskar Pelangi. Selain itu, Bapak dan Ibu diminta untuk mencari secara mandiri dua cuplikan tanyangan pendidikan yang menjadikan guru sebagai agen perubahan hingga mampu menerapkan pembelajaran sosial emosional. Melalui tayangan itu, Bapak dan Ibu guru akan lebih mampu memahami faktor yang memengaruhi penerapan keterampilan sosial emosional dan hubungannya dengan profesionalisme sebagai guru.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/73148a03-3172-4a4e-b48f-5077f3691274-2.3%20Kompetensi%20Guru%20Sebagai%20Teladan.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Kompetensi Guru Sebagai Teladan</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab2 = Course2::create([
            'title' => 'Guru Sebagai Teladan',
            'slug' => 'guru-teladan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        Course2::create([
            'title' => 'Guru Sebagai Teladan',
            'slug' => 'sebagai-teladan',
            'order' => 16,
            'section' => 'bab-2',
            'content' => '<p>Paparan demonstrasi kontekstual mengarahkan Anda dalam mengembangkan kemampuan untuk merancang pendemonstrasian bagaimana guru berperan dalam pembentukan sosial emosional yang baik di sekolah dan menyusun demonstrasi metode mengelola emosi. Anda diminta mendemontrasikan hasil rancangan tersebut. Selain itu, Anda akan mempraktikkan tiga penerapan teknik mindfulness yang membantu Anda dalam mengembangkan pembelajaran sosial emosional.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/567d9fb7-4105-4be0-aea6-f82b4f853dfd-2.4%20Guru%20Sebagai%20Teladan.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Guru Sebagai Teladan</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab2 = Course2::create([
            'title' => 'Strategi Penerapan Guru Sebagai Teladan',
            'slug' => 'penerapan-sebagai-teladan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        Course2::create([
            'title' => 'Strategi Penerapan Guru Sebagai Teladan',
            'slug' => 'strategi-penerapan',
            'order' => 17,
            'section' => 'bab-2',
            'content' => '<p>Bagian ini akan memberikan informasi konkret kepada Bapak dan Ibu guru bagaimana menerapkan pembelajaran sosial emosional yang diperoleh dari narasumber. Bapak dan Ibu dapat bertanya kepada dosen atau guru yang memiliki praktik baik (guru penggerak misalnya) dalam menerapkan pembelajaran SEL ini. Dengan cara ini Anda akan mendapatkan informasi bagaimana mengenal peserta didik dengan karakteristik peserta didik yang beragam, pendekatan psikologi yang tepat, dan diperkaya oleh pengalaman mengajar khususnya dalam pengembangan pembelajaran berbasis SEL.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/6c5bc0f0-944b-4658-b2e4-dc8dfd910f58-2.5%20Strategi%20Penerapan%20Guru%20Sebagai%20Teladan.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Strategi Guru Sebagai Teladan</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab2 = Course2::create([
            'title' => 'Penerapan Pembelajar Sosial Emosional dalam Konteks Guru Sebagai Teladan',
            'slug' => 'konteks-sebagai-teladan',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        Course2::create([
            'title' => 'Penerapan SEL dalam Konteks Guru Sebagai Teladan',
            'slug' => 'penerapan-SEL',
            'order' => 18,
            'section' => 'bab-2',
            'content' => '<p>Pada bagian penerapan pembelajaran sosial emosional dalam konteks guru sebagai teladan menjadi ruang bagi Bapak dan ibu menghubungkan SEL (Social emotional Learning) dengan hubungan interpersonal, kebahagiaan, metode pembelajaran. Anda akan membuat peta pikiran dalam menghubungan materi yang telah dipelajari dengan materi berikut pada bagian ini.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/59caa821-5573-4ce6-9f38-1e57e6ebea63-2.6%20Penerapan%20Pembelajaran%20Sosial%20Emosional%20dalam%20Konteks%20Guru%20Sebagai%20Teladan.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Penerapan SEL</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab2 = Course2::create([
            'title' => 'Aksi Nyata Peran Guru Sebagai Teladan',
            'slug' => 'aksi-nyata',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        Course2::create([
            'title' => 'Aksi Nyata Peran Guru Sebagai Teladan',
            'slug' => 'aksi-guru-sebagai-teladan',
            'order' => 19,
            'section' => 'bab-2',
            'content' => '<p>Bapak dan Ibu guru akan mendapatkan informasi berupa ringkasan materi yang sudah dipelajari pada topik ini. Selain itu, Anda akan melakukan refleksi terkait pelaksanaan pembelajaran yang mengintegrasikan Empathy, Mindfulness, Compassion and Critical Inquiry. Dengan bantuan pertanyaan pada tabel yang disediakan Anda akan mengidentifikasi tantangan yang mungkin akan dihadapi saat menerapkan Empathy, Mindfulness, Compassion and Critical Inquiry di kelas.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/b051a65f-14f9-460a-aec2-1edf357f37aa-2.7%20Aksi%20Nyata%20Peran%20Guru%20Sebagai%20Teladan.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Aksi Nyata</a>',
            'parent_id' => $subbab2->id,
        ]);

        Course2::create([
            'title' => 'Latihan Pemahaman BAB II',
            'slug' => 'latihan-bab2',
            'order' => 20,
            'section' => 'bab-2',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab II ini, silahkan di klik link yang ada di bawah</p>
            <a href="https://forms.gle/3Rm6ziWYAuGWiZwz6" target="_blank" class="text-blue-600 underline">📄 Latihan Pemahaman BAB II</a>',
            'parent_id' => $subbab2->id,
        ]);

        $bab3 = Course2::create([
            'title' => 'BAB III: Experiential Learning',
            'slug' => 'bab-3-learning',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Pengantar Experiential learning',
            'slug' => 'experiential-learn',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Pengantar Experiential learning',
            'slug' => 'pengantar-learning',
            'order' => 21,
            'section' => 'bab-3',
            'content' => '<p>Bagian pengantar experiential learning ini akan membantu Anda memahami bagaimana experiential learning sangat dibutuhkan dalam menumbuhkan iklim positif dalam pembelajaran atau layanan BK. Anda akan dipandu dengan melakukan refleksi pengalaman masa lalu dalam persiapan hingga melakukan proses pembelajaran di kelas.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/f1527663-22f1-47e9-88dd-e284ac78ea31-3.1%20Pengantar%20Experiential%20learning.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Pengantar Experiential learning</a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Experiential Learning',
            'slug' => 'experiential-learning',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Konseptual Experiential Learning - 1',
            'slug' => 'konseptual-expriental',
            'order' => 22,
            'section' => 'bab-3',
            'content' => '<p>Pada bagian ini Anda akan mempelajari lebih lanjut konsep experiential learning. Dalam pembelajaran mendalam, konsep ini dapat mengembangkan kemampuan kritis peserta didik.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/8b0ffb70-e484-40d4-a40b-812c2ed5bc7d-topik%203%20B.docx_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Konseptual Experiential Learning 1 </a>',
            'parent_id' => $subbab3->id,
        ]);

         Course2::create([
            'title' => 'Konseptual Experiential Learning - 2',
            'slug' => 'konseptual-expriental-learning',
            'order' => 23,
            'section' => 'bab-3',
            'content' => '<p>Pembelajaran Experiential Learning</p>
            <p>(Pembelajaran/eksperiensial/pengalaman) merupakan materi yang akan Anda pelajari pada bagian ini. Anda akan mempelajari siklus pembelajaran Experiential Learning berdasarkan teori Kolb. Anda juga akan mendapatkan informasi terkait tahapan pembelajaran Experiential Learning.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/2eceaffe-8240-4b0d-9a9b-05eebee8be69-Topik%203%20B%20Materi%201.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Konseptual Experiential Learning 2 </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Kompetensi Guru dalam penerapan Experiential Learning',
            'slug' => 'penerapan-experiental',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Kompetensi Guru dalam penerapan Experiential Learning',
            'slug' => 'guru-penerapan-experiental',
            'order' => 24,
            'section' => 'bab-3',
            'content' => '<p>Dalam menjalankan tugas sebagai Guru, kita perlu saling berbagi pengalaman dan berdiskusi. Pada bagian ini anda dapat berdiskusi dengan rekan guru mengenai experiential learning yang sudah atau akan Anda terapkan.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/fe9358a0-6f9d-4a3f-8793-df5bd483c171-topik%203%20C.docx_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Kompetensi Guru dalam penerapan Experiential Learning </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Penerapan Experiential learning dalam Pembelajaran',
            'slug' => 'learning-dalam-pembelajaran',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Penerapan Experiential Learning dalam Mata Pelajaran',
            'slug' => 'experiental-learning-mata-pelajaran',
            'order' => 25,
            'section' => 'bab-3',
            'content' => '<p>Sebagai Guru, kita harus tetap berlatih untuk menjadi Guru yang baik. Demonstrasikan apa yang sudah Anda pelajari supaya kelas Anda menjadi kelas yang positif.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/382f6ad5-2e72-49d3-9a82-5d9268800c01-Topik%203%20D_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Penerapan Experiential Learning dalam Mata Pelajaran </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Strategi Implementasi Experiential Learning dalam Mata Pelajaran',
            'slug' => 'strategi-implementasi',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Strategi Implementasi Experiential Learning dalam MAPEL',
            'slug' => 'strategi-implementasi-mapel',
            'order' => 26,
            'section' => 'bab-3',
            'content' => '<p>Berhenti sejenak untuk evaluasi dan elaborasi perlu dilakukan Guru sebagai pembelajar sepanjang hayat. Elaborasi bertujuan mematangkan konsep yang telah Anda pelajari. Pada bagian ini Anda dapat melakukan elaborasi pemahaman Anda untuk materi ini dan berdasarkan role-play yang Anda lakukan.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/f730153f-6718-4ce7-a622-1394dc2e4026-topik%203%20E_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Strategi Implementasi Experiential Learning dalam MAPEL </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Integrasi Experiential Learning dalam Mata Pelajaran',
            'slug' => 'integrasi-experiental',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Integrasi Experiential Learning dalam Mata Pelajaran',
            'slug' => 'integrasi-experiental-mapel',
            'order' => 27,
            'section' => 'bab-3',
            'content' => '<p>Integrasi experiential learning dalam mata pelajaran merupakan bagian dimana Anda sebagai Guru dapat mengaitkan apa yang telah Anda pelajari dengan materi lain. Mengambil manfaat dan mengembangkan kemampuan yang Anda miliki. Anda dapa membuat mind map, atau infografis lain yang memungkinkan Anda untuk belajar lebih baik.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/768fb1d8-60e4-4b84-b2b4-206ada0fa683-topik%203%20F_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Strategi Integrasi Experiential Learning dalam Mata Pelajaran </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Aksi Nyata Experiential Learning',
            'slug' => 'aksi-nyata-learning',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Aksi Nyata - Experiential Learning',
            'slug' => 'aksi-nyata-experiental',
            'order' => 28,
            'section' => 'bab-3',
            'content' => '<p>Aksi nyata adalah bagian dimana Guru mengaplikasikan apa yang telah dipelajari. Dalam hal ini Guru dapat mengembangkan Rencana Pembelajaran yang lebih baik; mengintegrasikan SEL dengan experiential learning.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/d94cc950-0305-4302-8424-8f54b926a2f1-topik%203%20G_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Aksi Nyata - Experiential Learning </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Gaya Belajar dan Ruang Belajar Peserta Didik',
            'slug' => 'gaya-belajar',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Konseptual Gaya Belajar dan Ruang Belajar Peserta Didik - Experiential Learning - 1',
            'slug' => 'konseptual-gaya-belajar 1',
            'order' => 29,
            'section' => 'bab-3',
            'content' => '<p>Akan ada dua video yang akan Anda tonton untuk melengkapi pemahaman Anda mengenai gaya belajar peserta didik. Setelah video akan dijelaskan mengenai pola asuh dan lingkungan belajar peserta didik yang dapat mempengaruhi kebahagiaan dan kesuksesan peserta didik.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/adb74529-8aca-4e12-8ccf-2c124fffd04d-topik%203%20H%20Materi%201.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Konseptual Gaya Belajar dan Ruang Belajar Peserta Didik - Experiential Learning - 1 </a>',
            'parent_id' => $subbab3->id,
        ]);

        Course2::create([
            'title' => 'Konseptual Gaya Belajar dan Ruang Belajar Peserta Didik - Experiential Learning - 2',
            'slug' => 'konseptual-gaya-belajar 2',
            'order' => 30,
            'section' => 'bab-3',
            'content' => '<p>Pada bagian ini Anda akan menonton dua video berkaitan dengan ruang belajar yang menyenangkan dan sistem ekologi peserta didik. Anda dapat melihat bahwa ruang belajar dan lingkungan yang menyenangkan akan membantu peserta didik menjadi lebih sehat dan berprestasi.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/9f51457f-ccbb-483c-91f3-270b30617682-topik%203%20H%20Materi%202.docx.pdf">📄 Buku Ajar Konseptual Gaya Belajar dan Ruang Belajar Peserta Didik - Experiential Learning - 2 </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Strategi Guru dalam Mengidentifikasi Gaya Belajar Peserta Didik',
            'slug' => 'mengidentifikasi-gaya-belajar',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Kompetensi Guru Dalam Mengidentifikasi Gaya Belajar Peserta Didik',
            'slug' => 'kompetensi-mengidentifikasi-gaya-belajar',
            'order' => 31,
            'section' => 'bab-3',
            'content' => '<p>Pada bagian ini anda akan berdiskusi dengan rekan sejawat. Anda akan diberikan kasus dan juga potongan film Hichki berkenaan dengan peserta didik yang dianggap bandel, dan bagaimana Guru menghadapinya.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/a766dbae-95db-4946-9ed3-1effa50a183e-topik%203%20I.docx_Revisi.pdf">📄 Buku Ajar Kompetensi Guru Dalam Mengidentifikasi Gaya Belajar Peserta Didik </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Gaya Belajar Peserta Didik dan Experiential Learning',
            'slug' => 'peserta-didik-belajar',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Gaya Belajar Peserta Didik dan Experiential Learning',
            'slug' => 'dan-experiental',
            'order' => 32,
            'section' => 'bab-3',
            'content' => '<p>Setelah mempelajari materi dan berdiskusi, Bapak dan Ibu diminta untuk membuat program intervensi/tindakan yang bertujuan untuk merubah perilaku belajar peserta didik. Perilaku yang dimaksud adalah agar peserta didik mengembangkan perilaku positif dalam proses pembelajaran. Selain itu, pengembangan program yang dirancang Bapak dan Ibu diharapkan mampu mempertimbangkan potensi peserta didik dan bukan hanya melihat kelemahannya.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/d4e88ad1-9ecb-491a-8de7-c640aa60fee1-topik%203%20J_Revisi.pdf">📄 Buku Ajar Gaya Belajar Peserta Didik dan Experiential Learning </a>',
            'parent_id' => $subbab3->id,
        ]);

        Course2::create([
            'title' => 'Experiential Learning Dalam Praktik Pembelajaran',
            'slug' => 'experiental-dan-praktik',
            'order' => 33,
            'section' => 'bab-3',
            'content' => '<p>Bagian ini Anda akan diminta mengingat kembali terkait materi yang sudah Anda pelajari dari experiential learning. Anda juga akan menyusun sejumlah daftar pertanyaan yang berelasi dengan penciptaan kondisi pembelajaran yang baik dalam konteks experiential learning.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/e8c68ecb-c5b5-4a0f-927a-e25990702f3d-topik%203%20K_Revisi%20Fix.pdf">📄 Buku Ajar Experiential Learning Dalam Praktik Pembelajaran </a>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = Course2::create([
            'title' => 'Experiential Learning Dalam Praktik Pembelajaran',
            'slug' => 'eksperiental-dalam',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        Course2::create([
            'title' => 'Integrasi Gaya Belajar dan Experiential Learning',
            'slug' => 'integrasi-dan-experiental',
            'order' => 34,
            'section' => 'bab-3',
            'content' => '<p>Integrasi gaya belajar dan experiential learning ini menjadi ruang bagi Anda untuk menguatkan kerangka pengetahuan dan menginternalisasi pengalaman terkait experiential learning. Pengguatan tersebut ditekankan agar keberhasilan pencapaian mata pelajaran yang diampu dapat berhasil. Selain itu, Anda akan menyusun infografis atau peta pikiran terkait materi mengenai experiential learning.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/64fb4010-9d9d-4982-b973-b37ff9c8b027-topik%203%20L_Revisi.pdf">📄 Buku Ajar Integrasi Gaya Belajar dan Experiential Learning </a>',
            'parent_id' => $subbab3->id,
        ]);

        Course2::create([
            'title' => 'Aksi Nyata Experiential Learning',
            'slug' => 'aksi-learning',
            'order' => 35,
            'section' => 'bab-3',
            'content' => '<p>Bagian aksi nyata ini berisi paparan yang mendorong Anda melakukan sejumlah refleksi dan komitmen dalam mengembangkan suasana pembelajaran yang menyenangkan berdasarkan pengalaman. Oleh karena itu, Anda akan diminta menyusun rencana aksi nyata terkait dengan program perubahan perilaku yang akan Anda lakukan di sekolah.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/3c0e065b-267e-4042-b4aa-8a13afed6721-topik%203%20M_Revisi.pdf">📄 Buku Ajar Aksi Nyata Experiential Learning </a>',
            'parent_id' => $subbab3->id,
        ]);

        Course2::create([
            'title' => 'Latihan Pemahaman BAB III',
            'slug' => 'latihan-bab3',
            'order' => 36,
            'section' => 'bab-3',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab III ini, silahkan di klik link yang ada di bawah</p>
            <a href="https://forms.gle/3Rm6ziWYAuGWiZwz6" target="_blank" class="text-blue-600 underline">📄 Latihan Pemahaman BAB II</a>',
            'parent_id' => $subbab3->id,
        ]);

        $bab4 = Course2::create([
            'title' => 'BAB IV: School Well-being',
            'slug' => 'bab-4-well-being',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab4 = Course2::create([
            'title' => 'Pengantar dan Refleksi Diri',
            'slug' => 'refleksi-diri',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        Course2::create([
            'title' => 'Pengantar dan Refleksi Diri - School Well Being',
            'slug' => 'pengantar-refleksi',
            'order' => 37,
            'section' => 'bab-4',
            'content' => '<p>Pada bagian ini, sebagai Guru kita diajak untuk melakukan refleksi diri. Bagaimana pengalaman mengajar selama ini termasuk tantangan yang dihadapi saat mengajar.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/5f1dc70a-bc25-46d9-84d2-da945f22328f-Topik%204%20A.docx.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Pengantar dan Refleksi Diri - School Well Being</a>',
            'parent_id' => $subbab4->id,
        ]);

        $subbab4 = Course2::create([
            'title' => 'School Well-Being',
            'slug' => 'school-well',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        Course2::create([
            'title' => 'School Well-Being',
            'slug' => 'well-being',
            'order' => 38,
            'section' => 'bab-4',
            'content' => '<p>Istilah sejahtera atau bahagia dalam ruang lingkup sekolah kurang mendapat perhatian, padahal hal tersebut sangat penting untuk membentuk karakter peserta didik yang baik dan dapat mempengaruhi kesuksesan mereka. Berikut adalah paparan mengenai School Well-being.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/34507bc3-ca8a-4373-a001-b803b648a69b-Topik%204%20B.docx_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar School Well-Being</a>',
            'parent_id' => $subbab4->id,
        ]);

        $subbab4 = Course2::create([
            'title' => 'Strategi Penerapan School Well-Being',
            'slug' => 'strategi-penerapan-school',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        Course2::create([
            'title' => 'Strategi Penerapan School Well-Being',
            'slug' => 'penerapan-school-well',
            'order' => 39,
            'section' => 'bab-4',
            'content' => '<p>Pada bagian ini, Anda diajak untuk berdiskusi berkenaan dengan pentingnya kebahagiaan di sekolah. Ada berbagai pihak yang dapat terlibat untuk menciptakan lingkungan yang positif tersebut.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/c39ae9d8-df91-4b01-ab0b-986a2d743b81-Topik%204%20C.docx_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Strategi Penerapan School Well-Being</a>',
            'parent_id' => $subbab4->id,
        ]);

         Course2::create([
            'title' => 'Penerapan School Well-Being dalam Pembelajaran',
            'slug' => 'being-pembelajaran',
            'order' => 40,
            'section' => 'bab-4',
            'content' => '<p>Observasi atau pengamatan adalah hal yang penting dalam menciptakan iklim yang positif di kelas dan sekolah. Guru harus memiliki kemampuan pengamatan kritis dan dapat melakukan pencatatan. Keterampilan tersebut sangat dibutuhkan untuk dapat mengidentifikasi masalah di kelas/sekolah.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/5134ee65-7301-4162-9bd4-227e6803f477-Topik%204%20D_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Penerapan School Well-Being dalam Pembelajaran</a>',
            'parent_id' => $subbab4->id,
        ]);

        $subbab4 = Course2::create([
            'title' => 'School Well-Being dalam Praktik Pembelajaran',
            'slug' => 'praktik-well-being',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        Course2::create([
            'title' => 'School Well-Being dalam Praktik Pembelajaran',
            'slug' => 'pembelajaran-well-being',
            'order' => 41,
            'section' => 'bab-4',
            'content' => '<p>Evaluasi terhadap kemampuan dan pengalaman belajar mengajar sebelumnya sangat penting bagi Guru. Pada bagian ini Anda dapat belajar dari narasumber atau teman sejawat untuk mengembangkan kemampuan anda menciptakan sekolah yang sejahtera.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/989b9711-cb55-4e0f-a47d-5fb2d670ef1a-Topik%204%20E_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar School Well-Being dalam Praktik Pembelajaran</a>',
            'parent_id' => $subbab4->id,
        ]);

        $subbab4 = Course2::create([
            'title' => 'Integrasi School-Well-Being di Sekolah',
            'slug' => 'integrasi-well',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        Course2::create([
            'title' => 'Integrasi School Well-Being di Sekolah',
            'slug' => 'integrasi-school',
            'order' => 42,
            'section' => 'bab-4',
            'content' => '<p>Pada bagian ini, Guru dapat menghubungkan materi school well-being dengan materi lain. Guru juga dapat membuat kelas menjadi lebih aktif dengan memahami pentingnya school well-being.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/800a6654-b644-403a-ada5-222c5156d3c1-Topik%204%20F.docx_Revisi%20fix.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Integrasi School Well-Being di Sekolah</a>',
            'parent_id' => $subbab4->id,
        ]);

        $subbab4 = Course2::create([
            'title' => 'Aksi Nyata School Well-Being',
            'slug' => 'aksi-well-being',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        Course2::create([
            'title' => 'Aksi Nyata - School Well-being',
            'slug' => 'aksi-well',
            'order' => 43,
            'section' => 'bab-4',
            'content' => '<p>Konu dan Rimpela memaparkan mengenai pentingnya sekolah yang sejahtera, dalam hal ini dapat mengevaluasi emosi yang dapat menciptakan iklim positif dan menerapkan dalam pembelajaran Anda di kelas.</p>
            <a href="https://storage.googleapis.com/microlearning-public-production/document/dcdb41a7-dd08-407d-9bb0-b9df37eb52d6-Topik%204%20G.docx_Revisi.pdf" target="_blank" class="text-blue-600 underline">📄 Buku Ajar Aksi Nyata - School Well-being</a>',
            'parent_id' => $subbab4->id,
        ]);

        Course2::create([
            'title' => 'Latihan Pemahaman BAB IV',
            'slug' => 'latihan-bab4',
            'order' => 44,
            'section' => 'bab-4',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab IV ini, silahkan di klik link yang ada di bawah</p>
            <a href="https://forms.gle/3Rm6ziWYAuGWiZwz6" target="_blank" class="text-blue-600 underline">📄 Latihan Pemahaman BAB IV</a>',
            'parent_id' => $subbab4->id,
        ]);

    }
}
