<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\CourseKurself;
use Illuminate\Support\Facades\DB;

class CourseKurSelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseKurself::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseKurself::create([
            'title' => 'BAB I: Mandiri ',
            'slug' => 'bab-1-mandiri',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab1 = CourseKurself::create([
            'title' => 'Proactive',
            'slug' => 'mandiri-proactive',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseKurself::create([
            'title' => 'Materi Proactive',
            'slug' => 'proactive-intro',
            'order' => 1,
            'section' => 'bab-1',
            'content' => '<p>Silahkan di saksikan file dan video</p>
                <p><a href="https://docs.google.com/presentation/d/1aMDnxIBIr1YDZwED_Dkco8yYrwi15Rq3/edit?usp=sharing&ouid=102587695286882410911&rtpof=true&sd=true" target="_blank" class="text-blue-600 underline">Power point : 📄2 Proaktif.pptx</a></p>
                <p><a href="https://drive.google.com/file/d/1hatQ1ddG66OimGK3o-szMUnl2p_B3S6s/view?usp=sharing" target="_blank" class="text-blue-600 underline">Training of trainer : 🎥video1070262103.mp4 00.00 - 01.00</a></p>',
            'parent_id' => $subbab1->id,
        ]);
        

        $subbab1 = CourseKurself::create([
            'title' => 'Know Yourself',
            'slug' => 'mengenal-yourself',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseKurself::create([
            'title' => 'Materi Know Yourself',
            'slug' => 'know-yourself-materi',
            'order' => 2,
            'section' => 'bab-1',
            'content' => '<p>Dalam menyampaikan materi tentang know yourself pahami bahwa siswa mungkin belum menemukan minat dan bakatnya. Maka akui hal-hal kecil yang dimiliki dan disampaikan oleh siswa dengan terus memberikan dorongan agar siswa mencoba berbagai hal positif.</p>
            <p>Highlight point yang bisa ditambahkan selain dalam materi trainer, yaitu tentang kuadran aktivitas. Hal ini dapat membantu siswa memetakan minat, bakat, hobi, maupun kompetensinya. Serta mampu memetakan aktivitas yang hanya membuang waktu.</p>
                <p><a href="https://www.16personalities.com/" target="_blank" class="text-blue-600 underline">📄 Tools : https://www.16personalities.com/ </a></p>
                <p><a href="https://drive.google.com/file/d/1yc3ViqsFJ7EJACwgfQma-U4KbXjhQcHt/view?usp=drive_link" target="_blank" class="text-blue-600 underline">Worksheet : 📄Worksheet SELF DEV.pdf</a></p>
                <p><a href="https://docs.google.com/presentation/d/1A5hCH4AqHSOPGWPaCEZagHNgwXB8dMKM/edit?usp=drive_link&ouid=102587695286882410911&rtpof=true&sd=true" target="_blank" class="text-blue-600 underline">Power point : 📄3 Know Yourself.pptx</a></p>
                <p><a href="https://drive.google.com/file/d/1hatQ1ddG66OimGK3o-szMUnl2p_B3S6s/view?usp=sharing" target="_blank" class="text-blue-600 underline">Training of trainer : 🎥video1070262103.mp4 01.00 - end</a></p>',
            'parent_id' => $subbab1->id,
        ]);

        $subbab1 = CourseKurself::create([
            'title' => 'Menentukan Tujuan',
            'slug' => 'menentukan-tujuan',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseKurself::create([
            'title' => 'Materi Menentukan Tujuan',
            'slug' => 'menentukan-tujuan-intro',
            'order' => 3,
            'section' => 'bab-1',
            'content' => '<p>Silahkan di saksikan beberapa file dan video</p>
                <p><a href="https://drive.google.com/drive/folders/1vB4ylklm0A553EvFUO1Nqzx4Ig7umrEM" target="_blank" class="text-blue-600 underline">Menentukan Tujuan Angkatan 2 : 📄CITA MULIA #2</a></p>
                <p><a href="https://docs.google.com/presentation/d/1gNxFmlzt7JphIJReMGyAfPTTa7ilZdRD/edit?usp=drive_link&ouid=102587695286882410911&rtpof=true&sd=true" target="_blank" class="text-blue-600 underline">Power point : 📄4 Menentukan tujuan.pptx</a></p>
                <p><a href="https://drive.google.com/file/d/1IIsyx0wCWaumxHXtVjzeA9e4MA7_a046/view?usp=sharing" target="_blank" class="text-blue-600 underline">🎥Training of trainer : 🎥video1493165157.mp4</a></p>',
            'parent_id' => $subbab1->id,
        ]);

        $bab2 = CourseKurself::create([
            'title' => 'BAB II: Gigih',
            'slug' => 'bab-2-gigih',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Self Discipline',
            'slug' => 'mengenal-self-discipline',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        

        $subbab2 = CourseKurself::create([
            'title' => 'Active Learning & Learning Strategies',
            'slug' => 'active-learning-strategies',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Agile Mindset',
            'slug' => 'mengenal-agile-mindset',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Manajemen Risiko & Ekspektasi',
            'slug' => 'mengenal-manajemen-risiko',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Stress Tolerance',
            'slug' => 'mengenal-stress-tolerance',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $subbab2 = CourseKurself::create([
            'title' => 'Titik Jenuh',
            'slug' => 'mengenal-titik-jenuh',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);

        $bab3 = CourseKurself::create([
            'title' => 'BAB III: Mudah Bergaul',
            'slug' => 'bab-3-mudah-bergaul',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab3 = CourseKurself::create([
            'title' => 'Makhluk Sosial',
            'slug' => 'malukah-sosial',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        CourseKurself::create([
            'title' => 'Materi Makhluk Sosial',
            'slug' => 'makhluk-sosial-materi',
            'order' => 10,
            'section' => 'bab-3',
            'content' => '<p>Siswa SMK TI BAZMA seluruhnya laki laki, berdasarkan observasi dan pengalaman selama membersamai kecendrungan yang dimiliki adalah tertutup terhadap minat, bakat dan beberapa hal personal lainnya. Dampaknya adalah enggan untuk meminta bantuan, cendrung tidak ingin dipandang lemah atau tidak mampu.</p>
            <p>
                Hal tersebut bisa jadi adalah dampak dari perspektif sosial-budaya dimana masyarakat seringnya memberikan penghargaan atas hasil, bukan proses. Laki-laki cenderung dipuji setelah sukses, bukan ketika sedang berjuang. Maka mereka belajar menyembunyikan prosesnya dan akan muncul ketika hasilnya dapat dipamerkan.
            </p>
            <p>
                Selain hal tersebut, kurangnya role model yang ekspresif, figur laki-laki di sekitar siswa juga bisa jadi pendiam, sibuk bekerja dan jarang menunjukkan sisi reflektif. Sehingga mereka tidak memiliki teladan bagaimana menyampaikan kekuatan, meminta bantuan, tanpa kehilangan harga diri. 
                Maka menjadi penting untuk membangun budaya support system yang nyaman, membiasakan budaya refleksi, membangun teamwork yang terbuka dan menuntut kolaborasi dengan komunikasi emosional.
            </p>
            <p>
                Manusia penting untuk saling membutuhkan bahkan sejak awal dilahirkannya. Bahkan untuk bisa mencapai best version dari tujuan manusia juga kita akan membutuhkan bantuan dan interaksi dari orang lain.
            </p>
            <p>
                Highlight point dalam materi ini yaitu menekankan bahwa manusia membutuhkan interaksi dengan orang lain untuk memenuhi kebahagiaan sejatinya. Karena kebahagiaan sejati berasal dari hubungan sosial yang bermakna. <b>Elaborasi materi ini menggunakan cerita-cerita personal yang relate dengan kondisi ini.</b>
            </p>
            <p>
                Di akhir materi sebagai refleksi minta siswa untuk memvisualkan tokoh yang telah membantu hidup kita sampai saat ini. Minta tuliskan dari keluarga dan dari luar keluarga, bisa juga disampaikan di lingkungan SMK TI BAZMA sebagai bentuk insight untuk meningkatkan kualitas kenyamanan pembelajaran.
            </p>
            <p>
                <a 
                    href="https://docs.google.com/presentation/d/1ptYsWyzYgcBWNwWS-6onyi4B8PPu7xAg/edit?usp=sharing&ouid=102587695286882410911&rtpof=true&sd=true" target="_blank" class="text-blue-600 underline">📄 Power Point: 11 Makhluk Sosial.pptx
                </a>
            </p>
            <p>
                <a 
                    href="https://drive.google.com/file/d/1yVoptP6m0kYURiZbtisrc0ZgnfAV-748/view?usp=sharing" target="_blank" class="text-blue-600 underline">🎥 Training of Trainer: video1144044832.mp4 00.00 - 37.00
                </a>
            </p>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = CourseKurself::create([
            'title' => 'The Art of Collaboration',
            'slug' => 'art-of-collaboration',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        CourseKurself::create([
            'title' => 'Materi The Art of Collaboration',
            'slug' => 'Art-of-collaboration-intro',
            'order' => 11,
            'section' => 'bab-3',
            'content' => '<p>Dalam menyampaikan materi ini, emphasis agar siswa bisa points out makna dari kolaborasi bahwa berbeda dengan kerjasama. Kolaborasi ini memberikan penekanan bahwa dia ‘meleburkan’ elemen yang berbeda sehingga dapat menjadi kesatuan yang memiliki nilai lebih. Masing2 elemen dengan peran dan keunggulan yang berbeda menciptakan hal baru yang berbeda. Sedangkan, kerjasama mengerjakan hal yang sama secara bersama sama untuk mencapai tujuan yang sama.</p>
            <p>
                Agar komunikatif dan kita bisa lebih mengenal dan memahami siswa, minta siswa yang menyebutkan contoh tren kolaborasi yang siswa amati belakangan. Coba juga tanya siswa jika mereka punya pengalaman melakukan kolaborasi.
            </p>
                <p>
                    <a href="https://docs.google.com/presentation/d/16UHy74A4_YWe1i0SizgM4foO-ddDn50I/edit?usp=drive_link&ouid=102587695286882410911&rtpof=true&sd=true" target="_blank" class="text-blue-600 underline">Power Point : 📄12 The Art of Collaboration.pptx
                    </a>
                </p>
                <p>
                    <a href="https://drive.google.com/file/d/1yVoptP6m0kYURiZbtisrc0ZgnfAV-748/view?usp=sharing" target="_blank" class="text-blue-600 underline">Training of Trainer : 🎥video1144044832.mp4 37.00 - 1.24.43
                    </a>
                </p>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = CourseKurself::create([
            'title' => 'Komunikasi Efektif',
            'slug' => 'mengenal-komunikasi-efektif',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        CourseKurself::create([
            'title' => 'Materi Komunikasi Efektif',
            'slug' => 'komunikasi-efektif-materi',
            'order' => 12,
            'section' => 'bab-3',
            'content' => '<p>“Teman-teman, setiap hari kita sebenarnya sudah berkomunikasi—entah lewat bicara, chat, emoji, atau bahkan bahasa tubuh. Tapi, pernah nggak kalian merasa sudah menjelaskan sesuatu, tapi orang lain tetap salah paham? Atau sebaliknya, kalian mendengar seseorang berbicara, tapi pesan yang masuk ke kalian berbeda dari maksudnya?</p>
            <p>
                Nah, di sinilah pentingnya komunikasi efektif. Bukan sekadar berbicara, tetapi bagaimana pesan yang kita sampaikan benar-benar diterima sesuai maksudnya. Hari ini kita akan belajar bagaimana membuat komunikasi menjadi lebih jelas, lebih bermakna, dan lebih berdampak, baik di sekolah maupun di dunia kerja nanti.”
            </p>
            <p>
                <a href="https://docs.google.com/presentation/d/11hKxMr8V5AhY6JB41D8gy3EYPSe3t2u7/edit?usp=drive_link&ouid=102587695286882410911&rtpof=true&sd=true" target="_blank" class="text-blue-600 underline">Power point : 📄13 Komunikasi Efektif.pptx
                </a>
            </p>
            <p>
                <a href="https://drive.google.com/file/d/1LTn4eMR15_NeJ7Fx4wwEJzddOSvT2Evf/view?usp=sharing" target="_blank" class="text-blue-600 underline">Training of Trainer : 🎥8_2025-02-14 08.19.13 ToT Self Development Bazma
                </a>
            </p>',
            'parent_id' => $subbab3->id,
        ]);

        $subbab3 = CourseKurself::create([
            'title' => 'Interpersonal Skill',
            'slug' => 'mengenal-interpersonal-skill',
            'section' => 'bab-3',
            'content' => null,
            'parent_id' => $bab3->id,
        ]);

        CourseKurself::create([
            'title' => 'Materi Interpersonal Skill',
            'slug' => 'interpersonal-skill-materi',
            'order' => 13,
            'section' => 'bab-3',
            'content' => '<p>Interpersonal skill adalah kemampuan untuk berinteraksi dan berkomunikasi dengan orang lain secara efektif. Kemampuan ini sangat penting dalam berbagai aspek kehidupan, baik dalam lingkungan sosial maupun profesional. Dengan memiliki interpersonal skill yang baik, seseorang dapat membangun hubungan yang positif, bekerja sama dengan orang lain, dan menyelesaikan konflik dengan lebih efektif.</p>
            <p>
                Beberapa komponen utama dari interpersonal skill meliputi:
            </p>
            <ol>
                <li>
                    Komunikasi Verbal dan Non-Verbal: Kemampuan untuk menyampaikan pesan dengan jelas melalui kata-kata, intonasi suara, serta bahasa tubuh.
                </li>
                <li>
                    Empati: Kemampuan untuk memahami dan merasakan perasaan orang lain, sehingga dapat merespons dengan cara yang sesuai.
                </li>
                <li>
                    Mendengarkan Aktif: Kemampuan untuk benar-benar mendengarkan apa yang dikatakan orang lain tanpa menginterupsi, serta memberikan umpan balik yang relevan.
                </li>
                <li>
                    Kerjasama Tim: Kemampuan untuk bekerja sama dengan orang lain dalam mencapai tujuan bersama, menghargai kontribusi setiap anggota tim.
                </li>
                <li>
                    Penyelesaian Konflik: Kemampuan untuk mengelola dan menyelesaikan perbedaan pendapat atau konflik dengan cara yang konstruktif, sehingga seluruh poin penting dapat tersampaikan dengan efisien.
                </li>
            </ol>

            <p>
                <a 
                    href="https://docs.google.com/presentation/d/1k43jkdr13S5gFYM0QUkqR1y57FpS2n9_/edit?usp=drive_link&ouid=102587695286882410911&rtpof=true&sd=true" target="_blank" class="text-blue-600 underline">
                    Power Point : 📄14 Interpersonal Skill.pptx
                </a>
            </p>',
            'parent_id' => $subbab3->id,
        ]);

        $bab4 = CourseKurself::create([
            'title' => 'BAB IV: Profesional',
            'slug' => 'bab-4-profesional',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Management Skill',
            'slug' => 'mengenal-management-skill',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Problem Solving',
            'slug' => 'mengenal-problem-solving',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Critical Thinking',
            'slug' => 'mengenal-critical-thinking',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Continious Improvement',
            'slug' => 'mengenal-continious-improvement',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Presentation Skill',
            'slug' => 'mengenal-presentation-skill',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);

        $subbab4 = CourseKurself::create([
            'title' => 'Creating CV & Portfolio',
            'slug' => 'creating-cv-portfolio',
            'section' => 'bab-4',
            'content' => null,
            'parent_id' => $bab4->id,
        ]);
    }
};