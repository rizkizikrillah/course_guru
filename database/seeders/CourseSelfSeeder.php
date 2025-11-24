<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseSelf;
use Illuminate\Support\Facades\DB;

class CourseSelfSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        CourseSelf::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // === Bab I ===
        $bab1 = CourseSelf::create([
            'title' => 'BAB I: Strategi penyampaian materi',
            'slug' => 'bab-1-strategi-penyampaian',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab1 = CourseSelf::create([
            'title' => 'Menyampaikan materi self-dev',
            'slug' => 'materi-self-dev',
            'section' => 'bab-1',
            'content' => null,
            'parent_id' => $bab1->id,
        ]);

        CourseSelf::create([
            'title'     => 'Penyampaian Materi Self Development',
            'slug'      => 'penyampaian-materi-self',
            'order'     => 1,
            'section'   => 'bab-1',
            'content'   => '
        <p>
            Dalam menyampaikan materi self-dev penting untuk :
            <b>Memperkenalkan diri, as to why you are eligible to deliver this content</b>.
            Tujuannya <b>membangun kredibilitas dan kepercayaan siswa</b>, sehingga siswa merasa perlu untuk memperhatikan materi.
        </p>

        <p>Apa sih yang penting dalam menyampaikan materi/bicara di depan umum? Apakah :</p>

        <ol>
            <li>Semangat, suara keras dan berintonasi</li>
            <li>Pembawaan santai, ada humor dan membuat terhibur/tertawa</li>
            <li>Supporting (fasilitas), slide bagus, audio bagus, well prepared</li>
            <li>Interaksi dengan audiens, hadiah-hadiah</li>
        </ol>

        <p>Menurut Bapak dan Ibu yang manakah yang paling penting?</p>

        <p>
            Bahkan ternyata ada narasumber yang tidak melakukan keempat hal di atas,
            namun mampu memikat dan mendapatkan perhatian audiens dengan cara-cara uniknya.
        </p>

        <p>
            Ternyata hal yang paling penting dalam public speaking adalah
            <b>“Be The Best Version of Yourself”</b>.
            Hal yang membuat kita spesial adalah karena :
        </p>

        <ol>
            <li>
                Setiap Bapak/Ibu memiliki <b>Pengalaman</b> yang berbeda,
                maka elaborasi pengalaman itu ke dalam materi-materi selfdev.
                Sehingga experience belajarnya tidak monoton seperti nonton YouTube.
            </li>
            <li>
                Setiap Bapak/Ibu memiliki karakter, keunikan, dan <b>Kelebihan</b> yang berbeda-beda.
            </li>
        </ol>

        <p><b>Tips lainnya :</b></p>

        <ol>
            <li>
                Gunakan bahasa kaummu : gunakan bahasa dan konteks yang dekat dengan siswa,
                lakukan riset jika diperlukan.
            </li>
            <li>
                Persiapan : persiapkan berbagai fasilitas (laptop/speaker/proyektor/ruangan)
                sehingga tidak mengganggu jalannya kegiatan.
            </li>
            <li>
                Jangan Dihapal! : apapun yang disampaikan pahami saja, jangan dihapal.
            </li>
            <li>
                First Impression : berikan hal-hal menarik yang memorable ketika opening dan closing statement.
                Bentuknya bisa gimmick, quotes, atau lainnya.
            </li>
            <li>
                Good Management : sampaikan poin penting materi dengan memperhitungkan durasi dan supporting lainnya,
                sehingga seluruh poin penting dapat tersampaikan dengan efisien.
            </li>
        </ol>

        <p>
            <a 
                href="https://drive.google.com/file/d/1LTn4eMR15_NeJ7Fx4wwEJzddOSvT2Evf/view?usp=sharing"
                target="_blank"
                class="text-blue-600 underline"
            >
                🎥 Training of Trainer : Menit 00.00 - 21.30
            </a>
        </p>',
            'parent_id' => $subbab1->id,
        ]);


        $bab2 = CourseSelf::create([
            'title' => 'BAB II: Urgensi Self Development',
            'slug' => 'bab-2-Urgensi-Self',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => null,
        ]);

        $subbab2 = CourseSelf::create([
            'title' => 'Objective dan Highlight Point ',
            'slug' => 'objective-highlight',
            'section' => 'bab-2',
            'content' => null,
            'parent_id' => $bab2->id,
        ]);
        CourseSelf::create([
            'title' => 'Objective dan Highlight Point Self Development',
            'slug' => 'objective-highlight-point-self',
            'order' => 2,
            'section' => 'bab-2',
            'content' => '<p><b>Objective :</b></p>
                    <ol>
                        <li>Siswa memahami definisi dari self dev</li>
                        <li>Siswa memahami urgensi pembelajaran self dev dan kenapa SMK TI BAZMA memfasilitasinya.</li>
                    </ol>

                    <p><b>Highlight point :</b></p>
                        <ul>
                            <li>Siswa SMK TI BAZMA sebagai penerima beasiswa seharusnya memiliki potensi yang lebih.</li>
                            <li>Selfdev : sebuah usaha untuk menutup gap (kesenjangan) antara kondisi saat ini dengan potensi sesungguhnya melalui serangkaian kegiatan yang terukur</li>
                            <li>Kunci dari self dev adalah mengenal dan mengelola potensi diri</li>
                        </ul>
                        <p>
                            <a href="https://drive.google.com/drive/folders/1y6311izj22M6aXfHwap6TBY-bEokfWXw?usp=drive_link" target="_blank" class="text-blue-600 underline">📄 Power Point :</a>
                        </p>
            
                        <p>
                            <a href="https://drive.google.com/file/d/1LTn4eMR15_NeJ7Fx4wwEJzddOSvT2Evf/view?usp=sharing" target="_blank" class="text-blue-600 underline">🎥 Training of Trainer : Menit 21.30 - end.
                            </a>
                        </p>',
            'parent_id' => $subbab2->id,
        ]);
    }
};
