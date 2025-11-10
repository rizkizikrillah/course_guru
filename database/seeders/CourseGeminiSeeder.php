<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\CourseGemini;
use Illuminate\Support\Facades\DB;

class CourseGeminiSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseGemini::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseGemini::create([
            'title' => 'BAB I: Pengenalan Dasar Kecerdasan Buatan',
            'slug' => 'bab-1-kecerdasan-buatan',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        // === Subbab: Pengantar CASEL ===
        $subbab1 = CourseGemini::create([
            'title' => 'Pengantar & Gambaran Umum Gemini Academy',
            'slug' => 'gambaran-umum',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        // === Materi di dalam Subbab ===
        CourseGemini::create([
            'title' => 'Perkenalan Program',
            'slug' => 'perkenalan-program',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Perkenalan Program</p>
            <p>Gemini Academy adalah program yang meningkatkan literasi AI, khususnya Gemini, untuk pendidik. Program ini membantu memahami penggunaan AI dalam tugas sehari-hari dan perencanaan kelas. Modul-modulnya mencakup pengenalan AI, penggunaan AI yang aman, serta cara meningkatkan pengajaran dengan Gemini. Tujuan utamanya adalah meningkatkan kreativitas, produktivitas, dan tanggung jawab dalam penggunaan AI. Program ini juga menjelajahi fitur tambahan Gemini dan menyediakan sesi refleksi untuk penerapan dalam pendidikan sehari-hari. Selamat belajar dan menjelajahi AI bersama Gemini!.</p>
                <a href="https://youtu.be/yWgOLPT8FNY" target="_blank" class="text-blue-600 underline">🎥 Link Video Perkenalan Program</a>',
            'parent_id' => $subbab1->id,
        ]);

        CourseGemini::create([
            'title' => 'Slide: Perkenalan Program',
            'slug' => 'slides-perkenalan-program',
            'order' => 2,
            'section' => 'bab-1',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/d126a756-10ac-46e0-836f-443b1c9ee5fa-1.%20Slides%20Perkenalan%20Program.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab1->id,
        ]);

         $subbab2 = CourseGemini::create([
            'title' => 'AI dalam Kehidupan Kita, Apa Saja yang Anda Ketahui?',
            'slug' => 'ai-dalam-kehidupan-kita',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseGemini::create([
            'title' => 'AI dalam Kehidupan Kita, Apa saja yang Anda ketahui?',
            'slug' => 'ai-kehidupan-kita',
            'order' => 3,
            'section' => 'bab-1',
            'content' => '<p>Tahukah Anda bahwa AI sudah digunakan dalam kehidupan kita sehari-hari? Klik teks berikut ini!</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/89170ef4-67c2-4860-b19d-e33d618f56b4-AI%20dalam%20Kehidupan%20Kita%20Apa%20saja%20yang%20Anda%20ketahui.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab2->id,
        ]);

        CourseGemini::create([
            'title' => 'AI dalam Kehidupan Kita, Apa saja yang Anda ketahui? - Video',
            'slug' => 'ai-kehidupan-kita-video',
            'order' => 4,
            'section' => 'bab-1',
            'content' => '<p>Dalam video ini, kita akan mengeksplorasi bagaimana kecerdasan buatan (AI) telah menjadi bagian integral dari kehidupan sehari-hari kita. Pelajari bagaimana AI digunakan dalam Gmail, Google Search, Google Maps, dan masih banyak lagi.</p>
                <a href="https://youtu.be/LWa-3hF8FDU" target="_blank" class="text-blue-600 underline">🎥 Link video AI dalam kehidupan kita.</a>',
            'parent_id' => $subbab2->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: AI dalam Kehidupan Kita, Apa saja yang Anda ketahui?',
            'slug' => 'ai-kehidupan-kita-slides',
            'order' => 5,
            'section' => 'bab-1',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/98438a00-01cd-4332-b11e-0fdcc77edbdd-Salinan%202_%20AI%20dalam%20Kehidupan%20Kita.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab2->id,
        ]);

        $subbab3 = CourseGemini::create([
            'title' => 'Pengantar Kecerdasan Buatan (AI)',
            'slug' => 'kecerdasan-buatan-ai',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseGemini::create([
            'title' => 'Pengantar Kecerdasan Buatan (AI)',
            'slug' => 'kecerdasan-ai',
            'order' => 6,
            'section' => 'bab-1',
            'content' => '<p>Topik AI apa saja yang akan saya pelajari pada bagian ini? Apa saja yang perlu saya ketahui?</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/3ae2d428-6931-4773-9725-37422c431c39-Pengantar%20Kecerdasan%20Buatan%20(AI).pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab3->id,
        ]);

        CourseGemini::create([
            'title' => 'Pengantar Kecerdasan Buatan (AI) - Video',
            'slug' => 'kecerdasan-ai-video',
            'order' => 7,
            'section' => 'bab-1',
            'content' => '<p>Dalam video ini, kita akan membahas dasar-dasar kecerdasan buatan (AI). Pelajari tentang prinsip-prinsip AI Google, konsep dasar Machine Learning (ML), Large Language Models (LLM), Generative AI, dan chatbot multimodal. Temukan bagaimana AI bisa diterapkan dalam pendidikan untuk meningkatkan pengalaman belajar mengajar. Jangan lewatkan!</p>
                <a href="https://youtu.be/5O2vlNrlaMk" target="_blank" class="text-blue-600 underline">🎥 Link video Pengantar Kecerdasan Buatan AI</a>',
            'parent_id' => $subbab3->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Pengantar Kecerdasan Buatan (AI)',
            'slug' => 'kecerdasan-ai-slides',
            'order' => 8,
            'section' => 'bab-1',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/3731dffe-d500-4088-87e6-712ef183d44e-Salinan%203_%20Pengantar%20Kecerdasan%20Buatan%20(AI).pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab3->id,

        ]);

        $subbab4 = CourseGemini::create([
            'title' => 'Menggunakan AI dengan Aman dan Bertanggung Jawab',
            'slug' => 'menggunakan-ai-aman-bertanggung-jawab',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseGemini::create([
            'title' => 'Menggunakan AI dengan Aman dan Bertanggung Jawab',
            'slug' => 'ai-dengan-aman',
            'order' => 9,
            'section' => 'bab-1',
            'content' => '<p>Apa yang perlu dilakukan agar kita dapat menggunakan AI secara aman dan bertanggung jawab? Klik berkas berikut ini.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/d27d9f70-5015-487e-a36d-42a97c3d988a-Menggunakan%20AI%20dengan%20Aman%20dan%20Bertanggung%20Jawab.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab4->id,
        ]);

        CourseGemini::create([
            'title' => 'Menggunakan AI dengan Aman dan Bertanggung Jawab - Video',
            'slug' => 'kecerdasan-ai-aman-video',
            'order' => 10,
            'section' => 'bab-1',
            'content' => '<p>Dalam video ini, kita akan membahas cara menggunakan AI dengan aman dan bertanggung jawab. Pelajari tentang pentingnya privasi data, bagaimana mengatasi bias dalam sistem AI, dan cara memastikan keakuratan tanggapan AI. Kami juga akan menjelaskan konsep halusinasi dalam AI dan bagaimana memverifikasi informasi yang dihasilkan. Tonton sekarang untuk memahami bagaimana menjaga etika dan tanggung jawab dalam penggunaan AI di pendidikan.</p>
                <a href="https://youtu.be/gvgO-inPHf4" target="_blank" class="text-blue-600 underline">🎥 Link video Menggunakan AI dengan Aman dan Bertanggung Jawab</a>',
            'parent_id' => $subbab4->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Menggunakan AI dengan Aman dan Bertanggung Jawab',
            'slug' => 'menggunakan-ai-aman-slides',
            'order' => 11,
            'section' => 'bab-1',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/d77ec350-d3a9-4517-8768-018d29e1f73c-Salinan%204_%20Menggunakan%20AI%20dengan%20Aman%20dan%20Bertanggung%20Jawab.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab4->id,
        ]);

        CourseGemini::create([
            'title' => 'Latihan Pemahaman Bab I',
            'slug' => 'latihan-pemahaman-I',
            'order' => 12,
            'section' => 'bab-1',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab I ini, silahkan di klik link yang ada di bawah</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7hhliCLQdOo528U5EfvwHm7yWn0JBSla608flNW1GGQAJTA/viewform" target="_blank" class="text-blue-600 underline">📄 Link Latihan Pemahaman</a>',
            'parent_id' => $subbab4->id,
        ]);

        $bab2 = CourseGemini::create([
            'title' => 'BAB II: Menggunakan Gemini secara Efektif',
            'slug' => 'bab-2-menggunakan-gemini',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab5 = CourseGemini::create([
            'title' => 'Berkenalan dengan Gemini',
            'slug' => 'berkenalan-dengan-gemini',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        CourseGemini::create([
            'title' => 'Berkenalan dengan Gemini',
            'slug' => 'gemini-intro',
            'order' => 13,
            'section' => 'bab-2',
            'content' => '<p>Fitur apa saja yang dimiliki oleh Gemini? Bagaimana Gemini bisa membantu saya? Klik dokumen berikut ini.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/b70f55a5-b90c-4410-97be-d05f0d34cec7-Berkenalan%20dengan%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab5->id,
        ]);

        CourseGemini::create([
            'title' => 'Berkenalan dengan Gemini - Video',
            'slug' => 'berkenalan-gemini-video',
            'order' => 14,
            'section' => 'bab-2',
            'content' => '<p>Dalam video ini, kita akan berkenalan dengan Gemini, alat AI canggih yang didukung oleh Large Language Model (LLM). Pelajari cara menggunakan Gemini untuk meningkatkan kreativitas dan produktivitas Anda, dari menulis hingga membuat gambar. Temukan berbagai fitur Gemini, seperti mengedit prompt, menampilkan draft, memodifikasi tanggapan, dan mengekspor hasilnya ke berbagai platform.</p>
                <a href="https://youtu.be/V83UG2OaUrY" target="_blank" class="text-blue-600 underline">🎥 Link video Berkenalan dengan Gemini</a>',
            'parent_id' => $subbab5->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Berkenalan dengan Gemini',
            'slug' => 'berkenalan-dengan-gemini-slides',
            'order' => 15,
            'section' => 'bab-2',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/908a4c2c-4406-43a3-8354-4b349f63dc2d-Salinan%205_%20Berkenalan%20dengan%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab5->id,
        ]);

        $subbab6 = CourseGemini::create([
            'title' => 'Cara Menulis Prompts yang Efektif untuk Gemini',
            'slug' => 'cara-menulis-prompt',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        CourseGemini::create([
            'title' => 'Cara Menulis Prompts yang Efektif untuk Gemini',
            'slug' => 'gemini-prompt',
            'order' => 16,
            'section' => 'bab-2',
            'content' => '<p>Bagaimana sih, cara menulis prompt yang efektif? Temukan jawabannya.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/7f88e811-f4d6-4426-a70b-d455981cc211-Cara%20Menulis%20Prompts%20yang%20Efektif%20untuk%20%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab6->id,
        ]);

        CourseGemini::create([
            'title' => 'Cara Menulis Prompts yang Efektif untuk Gemini - Video',
            'slug' => 'menulis-prompt-video',
            'order' => 17,
            'section' => 'bab-2',
            'content' => '<p>Dalam video ini, kita akan membahas cara menulis prompt yang efektif saat berinteraksi dengan AI seperti Gemini. Dalam video ini juga akan ditekankan pentingnya menyertakan elemen-elemen kunci dalam prompt, seperti peran, tugas, format, dan konteks, untuk memastikan hasil yang sesuai dengan kebutuhan pendidikan.</p>
                <a href="https://youtu.be/St3Dvk06gMk" target="_blank" class="text-blue-600 underline">🎥 Link video Cara Menulis Prompts yang Efektif untuk Gemini</a>',
            'parent_id' => $subbab6->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Cara Menulis Prompts yang Efektif untuk Gemini',
            'slug' => 'menulis-prompt-slides',
            'order' => 18,
            'section' => 'bab-2',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan </p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/a7f3f0a7-ab0a-4de1-b724-794c9e27bf6d-Salinan%206_%20Cara%20Menulis%20Prompts%20yang%20Efektif%20untuk%20%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab6->id,
        ]);

        $subbab7 = CourseGemini::create([
            'title' => 'Transformasi Pembelajaran dengan Gemini',
            'slug' => 'transformasi-pembelajaran-gemini',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        CourseGemini::create([
            'title' => 'Transformasi Pembelajaran dengan Gemini',
            'slug' => 'gemini-transformasi',
            'order' => 19,
            'section' => 'bab-2',
            'content' => '<p>Bagaimana Gemini bisa mentransformasi cara saya mengajar? Dapatkan jawabannya.</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/938a1f76-f672-4a14-b3f6-7f11313246e2-Transformasi%20Pembelajaran%20dengan%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab7->id,
        ]);

        CourseGemini::create([
            'title' => 'Transformasi Pembelajaran dengan Gemini - Video',
            'slug' => 'gemini-transformasi-video',
            'order' => 20,
            'section' => 'bab-2',
            'content' => '<p>Dalam video ini, kita akan menyoroti cara menggunakan Gemini untuk mendukung proses asesmen dan penilaian di kelas. Video ini menjelaskan bagaimana Gemini dapat membantu pendidik dalam menyederhanakan pembuatan kuis, rubrik penilaian, dan pelaporan hasil belajar siswa. Dengan memanfaatkan fitur-fitur ini, pendidik dapat meningkatkan kualitas dan konsistensi asesmen serta menghemat waktu dalam mengelola evaluasi siswa.</p>
                <a href="https://youtu.be/Ddp3EpnxGqY" target="_blank" class="text-blue-600 underline">🎥 Link video Transformasi Pembelajaran dengan Gemini</a>',
            'parent_id' => $subbab7->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Transformasi Pembelajaran dengan Gemini',
            'slug' => 'gemin-transforamsi-slides',
            'order' => 21,
            'section' => 'bab-2',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan. </p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/7571c105-5f49-4130-9f42-19c2179c036d-Salinan%207_%20Transformasi%20Pembelajaran%20dengan%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab7->id,
        ]);

        $subbab8 = CourseGemini::create([
            'title' => 'Jelajahi Fitur Tambahan dari Gemini',
            'slug' => 'jelajahi-fitur-tambahan-gemini',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        CourseGemini::create([
            'title' => 'Jelajahi Fitur Tambahan dari Gemini',
            'slug' => 'gemini-fitur',
            'order' => 22,
            'section' => 'bab-2',
            'content' => '<p>Apa lagi fitur tambahan Gemini yang perlu saya ketahui?</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/3dff9ad7-2760-4413-8c05-6c5691062019-Jelajahi%20Fitur%20Tambahan%20dari%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab8->id,
        ]);

        CourseGemini::create([
            'title' => 'Jelajahi Fitur Tambahan dari Gemini - Video',
            'slug' => 'gemini-fitur-video',
            'order' => 23,
            'section' => 'bab-2',
            'content' => '<p>Dalam video ini, kita akan menjelajahi fitur tambahan yang membuat Gemini semakin kuat dan serbaguna. Pelajari cara memberikan umpan balik pada tanggapan AI, menyimpan dan mem-pin percakapan penting, mendengarkan tanggapan Gemini dalam berbagai bahasa, dan membuat serta mengekspor tabel dengan cepat. Temukan bagaimana fitur-fitur ini dapat memudahkan pekerjaan Anda sehari-hari sebagai pendidik. Tonton sekarang dan maksimalkan penggunaan Gemini dalam tugas Anda!</p>
                <a href="https://youtu.be/Kx0cSo-cfSA" target="_blank" class="text-blue-600 underline">🎥 Link video Jelajahi Fitur Tambahan dari Gemini</a>',
            'parent_id' => $subbab8->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Jelajahi Fitur Tambahan dari Gemini ',
            'slug' => 'gemini-fitur-slides',
            'order' => 24,
            'section' => 'bab-2',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan. </p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/c7326f55-e6ca-47b4-8599-520063bdf811-Salinan%208_%20Jelajahi%20Fitur%20Tambahan%20dari%20Gemini.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab8->id,
        ]);

        CourseGemini::create([
            'title' => 'Latihan Pemahaman Bab II',
            'slug' => 'latihan-pemahaman-II',
            'order' => 25,
            'section' => 'bab-2',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab II ini, silahkan di klik link yang ada di bawah</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7hhliCLQdOo528U5EfvwHm7yWn0JBSla608flNW1GGQAJTA/viewform" target="_blank" class="text-blue-600 underline">📄 Link Latihan Pemahaman</a>',
            'parent_id' => $subbab8->id,
        ]);

        $bab3 = CourseGemini::create([
            'title' => 'BAB III: Pembelajaran Lanjutan dan Aksi Nyata',
            'slug' => 'bab-3-pembelajaran-lanjutan',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab9 = CourseGemini::create([
            'title' => 'Referensi Lanjutan',
            'slug' => 'referensi-lanjutan',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        CourseGemini::create([
            'title' => 'Referensi Lanjutan',
            'slug' => 'referensi-lanjutan-materi',
            'order' => 26,
            'section' => 'bab-3',
            'content' => '<p>Saya ingin belajar tentang AI lebih lanjut. Di mana saya bisa mendapatkan sumber belajar yang sesuai?</p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/3e24c53f-2814-4f02-b404-96b03482429b-Referensi%20Lanjutan.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab9->id,
        ]);

        CourseGemini::create([
            'title' => 'Referensi Lanjutan - Video',
            'slug' => 'referensi-lanjutan-video',
            'order' => 27,
            'section' => 'bab-3',
            'content' => '<p>Dalam video ini, kita akan membahas sumber daya dan jalur pembelajaran lanjutan untuk memperdalam pemahaman tentang AI, khususnya terkait dengan Google dan Gemini. Dalam video ini juga akan dibahas cara akses ke laboratorium, pelatihan AI, dan dokumentasi tambahan, serta mendorong peserta untuk menjelajahi berbagai eksperimen dan kursus yang tersedia, guna terus mengembangkan keterampilan dalam menggunakan AI secara efektif dalam pendidikan.</p>
                <a href="https://youtu.be/eTEnxiebqb4" target="_blank" class="text-blue-600 underline">🎥 Link video Referensi Lanjutan</a>',
            'parent_id' => $subbab9->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Referensi Lanjutan ',
            'slug' => 'referensi-lanjutan-slides',
            'order' => 28,
            'section' => 'bab-3',
            'content' => '<p>Unduh berkas berikut untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan. </p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/d0169a7d-ed3d-498f-834d-e507f0676b71-Salinan%209_%20Referensi%20Lanjutan.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>',
            'parent_id' => $subbab9->id,
        ]);

        $subbab10 = CourseGemini::create([
            'title' => 'Refleksi Program',
            'slug' => 'refleksi-program',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        CourseGemini::create([
            'title' => 'Refleksi Program - Video',
            'slug' => 'refleksi-program-video',
            'order' => 29,
            'section' => 'bab-3',
            'content' => '<p>Dalam video ini, kita akan berfokus pada refleksi program, di mana kita diajak untuk merenungkan pembelajaran yang telah dilakukan, mengidentifikasi tantangan, dan merencanakan langkah-langkah berikutnya dalam penggunaan AI di pendidikan. Dalam video ini juga akan ditekankan pentingnya refleksi sebagai alat untuk terus berkembang dan memastikan penggunaan AI yang efektif dan bertanggung jawab di lingkungan pendidikan.</p>
                <a href="https://youtu.be/W72GahgmR98" target="_blank" class="text-blue-600 underline">🎥 Link video Refleksi Program</a>',
            'parent_id' => $subbab10->id,
        ]);

        CourseGemini::create([
            'title' => 'Slides: Refleksi Program',
            'slug' => 'refleksi-program-slides',
            'order' => 30,
            'section' => 'bab-3',
            'content' => '<p> untuk mempelajari lebih lanjut video yang baru saja Anda lihat dan mencoba berbagai latihan atau sumber belajar yang disarankan. </p>
                <a href="https://storage.googleapis.com/microlearning-public-production/document/27c7925b-8076-4827-aec9-ddae32c47d73-Salinan%2010_%20Refleksi%20Program.pdf" target="_blank" class="text-blue-600 underline">📄 Lampiran dapat di unduh disini.</a>
                <p>Anda juga dapat mengisi formulir feedback berikut untuk memberikan saran peningkatan program Gemini Academy ini. Formulir umpan balik ini tidak wajib diisi, namun sangat berarti untuk pengembangan Gemini Academy ke depan menjadi lebih baik dan sesuai untuk para pendidik di Indonesia.</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe00fhAJ3D2bRUnsSlFagRBs_XA-h5qZtLjOJv18MEKk_NOhg/viewform" target="_blank" class="text-blue-600 underline">📄 Link Formulir Feedback</a>',
            'parent_id' => $subbab10->id,
        ]);

        CourseGemini::create([
            'title' => 'Latihan Pemahaman Bab III',
            'slug' => 'latihan-pemahaman-III',
            'order' => 31,
            'section' => 'bab-3',
            'content' => '<p>Bapak dan Ibu guru, silahkan mengikuti test untuk latihan pemahaman pada bab III ini, silahkan di klik link yang ada di bawah</p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7hhliCLQdOo528U5EfvwHm7yWn0JBSla608flNW1GGQAJTA/viewform" target="_blank" class="text-blue-600 underline">📄 Link Latihan Pemahaman</a>',
            'parent_id' => $subbab10->id,
        ]);
    }
};
