<?php
declare(strict_types=1);

/* ============================================================
   SIMULASI CAT CPNS — PRETEST TKP (45 SOAL)
   ------------------------------------------------------------
   • Jumlah soal    : 45 (Tes Karakteristik Pribadi)
   • Waktu          : 40 menit 30 detik (45 soal x 54 detik)
   • Passing grade  : 166 | Skor maksimal : 225
   • Skema nilai    : tiap opsi bernilai 1-5, kosong = 0
   Cara menjalankan : php -S localhost:8000 index.php
   ============================================================ */

const TOTAL_SOAL    = 45;
const TOTAL_WAKTU   = 2430; // 45 x 54 detik
const PASSING_GRADE = 166;
const SKOR_MAKS     = 225;

function e(string $s): void
{
    echo htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function S(string $topik, string $q, array $opt, string $skor): array
{
    $map = [];
    foreach (str_split($skor, 2) as $p) {
        $map[$p[0]] = (int)$p[1];
    }
    return ['topik' => $topik, 'q' => $q, 'opt' => $opt, 'skor' => $map];
}

function soal_tkp(): array
{
    return [
        1 => S('Jejaring Kerja',
            'Hari ini di kantor Anda akan diadakan rapat besar terkait kebijakan yang akan ditempuh perusahaan dalam rangka meningkatkan pelayanan terhadap masyarakat. Semua karyawan yang mewakili divisi masing-masing diminta menyampaikan ide dan gagasan saat rapat berlangsung. Anda pun telah menyampaikan ide Anda sebagai perwakilan divisi, tetapi rekan yang lain kurang mendukung karena dinilai tidak memiliki perubahan signifikan terhadap perusahaan ke depannya. Sikap Anda adalah ....',
            ['A' => 'Mencoba membicarakan lebih jauh dengan rekan perwakilan divisi yang lain maksud dari gagasan yang Anda ajukan dan dampaknya terhadap perusahaan.',
             'B' => 'Mencari dukungan dari ketua rapat, dengan memberikan data-data yang mendukung gagasan Anda agar diterima.',
             'C' => 'Membicarakan dengan rekan divisi lain untuk memadukan gagasan yang Anda punya.',
             'D' => 'Menggantinya dengan ide lain yang lebih baik dan dapat diterima oleh semua perwakilan divisi.',
             'E' => 'Merumuskan ide tersebut secara detail agar rekan-rekan yang lain mengerti bahwa gagasan Anda akan berdampak baik bagi kemajuan perusahaan.'],
            'C5D4E3A2B1'),

        2 => S('Integritas Diri',
            'Dengan naiknya biaya hidup dan harga barang yang serba mahal serta sulitnya lapangan pekerjaan, masyarakat merasa terjepit masalah perekonomian. Anda sendiri hanya seorang karyawan swasta dengan gaji pas-pasan. Banyak teman Anda meminjam uang di aplikasi online dengan bunga besar, apalagi jika telat membayar bunga bisa melebihi pinjaman. Sikap Anda jika dihadapkan pada permasalahan tersebut adalah ....',
            ['A' => 'Menasihati teman-teman saya agar berhati-hati melakukan pinjaman online meskipun prosedurnya lebih gampang.',
             'B' => 'Tidak ingin melakukan hal yang sama bahkan dalam kondisi terdesak sekalipun.',
             'C' => 'Berusaha agar tidak melakukan peminjaman agar tidak kesulitan saat pembayaran nanti.',
             'D' => 'Mencari tahu detail tentang perusahaan pemberi pinjaman jika suatu saat terpaksa harus meminjam.',
             'E' => 'Mencari tahu sejarah perusahaan dan menasihati teman-teman yang lain agar berhati-hati.'],
            'D5C4B3E2A1'),

        3 => S('Pelayanan Publik',
            'Ketika hendak berangkat ke kantor, Anda melihat banyak sampah berserakan di pinggir jalan dekat tempat pembuangan sampah, mengganggu pandangan dan jalannya kendaraan. Apa yang akan Anda lakukan?',
            ['A' => 'Segera merapikan sampah itu tanpa pikir panjang, demi kepentingan pengguna jalan lain dan masyarakat banyak.',
             'B' => 'Melewati dan membiarkannya begitu saja karena bukan tanggung jawab saya.',
             'C' => 'Memberitahu orang di sekitar jalan untuk memungut sampah tersebut dan membuangnya ke tempat pembuangan sampah.',
             'D' => 'Memvideo dan memfoto lalu memviralkannya di media sosial agar semua orang paham kondisinya.',
             'E' => 'Menelepon pihak berwenang yang bertanggung jawab atas sampah ini.'],
            'E5C4D3A2B1'),

        4 => S('Kreativitas dan Inovasi',
            'Musim kemarau melanda daerah tempat tinggal Anda. Satu-satunya sumber air adalah PDAM, tetapi akhir-akhir ini alirannya sering mati terutama pagi hari saat semua orang membutuhkannya untuk memasak dan mandi. Apa yang akan Anda lakukan?',
            ['A' => 'Mengajukan protes kepada PDAM agar pagi hari aliran air tidak mati karena ini hak warga.',
             'B' => 'Santai saja, saya bisa meminta air kepada tetangga untuk memasak dan mandi.',
             'C' => 'Menggunakan air seadanya untuk memasak dan mandi sebelum berangkat ke kantor agar tidak terlambat.',
             'D' => 'Meminta suami/istri membeli air galon setiap hari untuk kebutuhan memasak dan mandi keluarga.',
             'E' => 'Menampung air di malam hari sebagai cadangan untuk kebutuhan di pagi hari.'],
            'E5D4A3C2B1'),

        5 => S('Pelayanan Publik',
            'Anda karyawan perusahaan jasa transportasi. Siang ini diadakan diskusi singkat dengan pimpinan, dan semua karyawan diminta memberi usulan peningkatan kualitas pelayanan agar makin banyak pelanggan memakai jasa perusahaan. Sikap Anda adalah ....',
            ['A' => 'Mengusulkan agar perusahaan memenuhi semua hal yang diinginkan pelanggan tanpa terkecuali.',
             'B' => 'Mengusulkan adanya jalur khusus untuk ibu hamil, menyusui, dan para lansia.',
             'C' => 'Mengusulkan diskon tiket 50% pada hari libur massal agar banyak pelanggan menggunakan jasa perusahaan.',
             'D' => 'Mengusulkan agar perusahaan menyediakan fasilitas khusus bagi ibu hamil, menyusui, dan lansia.',
             'E' => 'Mengusulkan agar alat transportasi selalu bersih dengan cara merekrut karyawan baru bergaji tinggi.'],
            'D5E4C3B2A1'),

        6 => S('Orientasi kepada Orang Lain',
            'Di kantor saya dikenal sering membantu sesama rekan kerja dalam berbagai permasalahan. Biasanya apa yang akan Anda lakukan saat rekan kerja membutuhkan bantuan Anda?',
            ['A' => 'Langsung memberikan bantuan sesuai kemampuan saya sehingga dapat meringankan beban mereka.',
             'B' => 'Membantu mereka, tetapi saya selesaikan dulu permasalahan saya, baru membantu dengan ikhlas.',
             'C' => 'Bertanya dahulu mengenai permasalahan yang mereka hadapi, jika memungkinkan saya akan membantu.',
             'D' => 'Membantu, tetapi terlebih dahulu berpikir cukup lama untuk mencarikan solusi yang tepat.',
             'E' => 'Bertanya dahulu, jika mampu saya akan membantu setelah menyelesaikan pekerjaan saya sendiri.'],
            'C5E4A3B2D1'),

        7 => S('Profesionalisme',
            'Siang ini Anda menerima panggilan rekrutmen sebuah perusahaan. Di tengah perjalanan Anda melihat kerumunan dan ternyata terjadi kecelakaan tabrak lari, padahal Anda harus segera sampai untuk memulai seleksi. Sikap Anda adalah ....',
            ['A' => 'Tetap melanjutkan perjalanan untuk tepat waktu mengikuti tes pekerjaan.',
             'B' => 'Mengabaikannya karena harus mengikuti tes yang akan dimulai sebentar lagi.',
             'C' => 'Tetap melanjutkan perjalanan setelah yakin ada orang lain yang menolong.',
             'D' => 'Menolongnya, kemudian membawanya ke rumah sakit atau kantor polisi.',
             'E' => 'Mengejar pelaku tabrak lari dan memintanya bertanggung jawab.'],
            'A5B4C3D2E1'),

        8 => S('Semangat Berprestasi',
            'Sebagai peserta lomba dalam HUT perusahaan di tempat saya bekerja yang diikuti semua kolega, saya akan ....',
            ['A' => 'Yang penting saya berpartisipasi mewakili perusahaan saya.',
             'B' => 'Tak cukup berpartisipasi saja, saya harus menjadi juara.',
             'C' => 'Paling penting meningkatkan kebersamaan antara tim dan kolega.',
             'D' => 'Kompetisi menjadi juara itu utama, demi menjaga nama baik perusahaan.',
             'E' => 'Apa pun saya lakukan untuk menjaga kebaikan perusahaan.'],
            'B5D4E3C2A1'),

        9 => S('Kreativitas dan Inovasi',
            'Anda ditugaskan menjadi panitia pameran untuk memperkenalkan produk perusahaan sekaligus menjual beberapa produk untuk melihat respons pembeli. Banyak perusahaan lain ikut serta. Untuk menarik pengunjung, apa yang Anda lakukan?',
            ['A' => 'Memperagakan produk yang berkualitas di etalase agar banyak yang tertarik.',
             'B' => 'Membuat pengunjung nyaman dengan menyediakan tempat duduk dan fasilitas lain di stan.',
             'C' => 'Selalu bersikap ramah terhadap pengunjung yang lewat dan mempersilakan mampir.',
             'D' => 'Membuat konsep stan pameran yang menarik.',
             'E' => 'Membuat stan pameran yang besar agar semua pengunjung bisa muat.'],
            'D5C4B3A2E1'),

        10 => S('Integritas Diri',
            'Anda baru lulus dari universitas luar negeri dan ingin membuka usaha properti. Keluarga berkali-kali tidak mendukung dan meminta Anda melamar ke perusahaan, padahal Anda lebih suka pekerjaan bebas tanpa rutinitas. Sikap Anda adalah ....',
            ['A' => 'Mengikuti saran orang tua dan mengurungkan niat berwirausaha.',
             'B' => 'Meminta orang tua mau mendukung keinginan Anda.',
             'C' => 'Meyakinkan orang tua bahwa Anda bisa sukses dengan berwirausaha.',
             'D' => 'Tetap fokus dengan keinginan karena Anda menyukainya dan sesuai passion.',
             'E' => 'Memantapkan diri sendiri dan fokus mengelola bisnis dengan baik.'],
            'E5D4C3B2A1'),

        11 => S('Orientasi kepada Orang Lain',
            'Di tempat wisata yang sangat ramai, antrean tiket sangat panjang. Anda melihat seorang ibu hamil mengantre sekitar 10 antrean di belakang Anda, tampak sangat lelah dan cuaca panas. Apa yang Anda lakukan?',
            ['A' => 'Meminta ibu tersebut mengambil antrean Anda.',
             'B' => 'Meminta ibu tersebut berpindah ke antrean di depan Anda.',
             'C' => 'Bertukar posisi antrean dengan ibu tersebut.',
             'D' => 'Antre seperti biasa karena kondisi antrean sangat panjang.',
             'E' => 'Menyuruh ibu tersebut antre di dekat Anda.'],
            'C5A4D3E2B1'),

        12 => S('Kreativitas dan Inovasi',
            'Perusahaan harusnya peka terhadap kebutuhan karyawan, bukan hanya menuntut kerja cepat dan tepat. Isu keluarga atau keuangan bisa mengganggu konsentrasi dan menurunkan kinerja karyawan. Harusanya ....',
            ['A' => 'Perusahaan memberikan gaji yang lebih besar kepada karyawan.',
             'B' => 'Memberikan bonus pada karyawan berkinerja bagus.',
             'C' => 'Membuat kebijakan baru, misalnya pinjaman karyawan.',
             'D' => 'Meminta setiap pimpinan divisi membantu bawahan yang bermasalah keuangan.',
             'E' => 'Memberikan akses bagi karyawan untuk berbisnis sampingan di perusahaan.'],
            'C5A4B3D2E1'),

        13 => S('Sosial Budaya',
            'Perusahaan Anda terdiri dari orang-orang berbeda latar belakang. Banyak karyawan muslim mengeluh sulit beribadah karena keterbatasan tempat atau jam ibadah yang bentrok dengan jam kerja. Sikap Anda adalah ....',
            ['A' => 'Memfasilitasi tempat ibadah mereka di lingkungan perusahaan.',
             'B' => 'Mendiskusikan hal ini dengan jajaran pimpinan dan pemilik perusahaan untuk dicari solusinya.',
             'C' => 'Karena pemilik perusahaan non muslim, aturan yang ada harus dipatuhi karyawan.',
             'D' => 'Memberikan kebijakan yang bersifat toleran kepada karyawan.',
             'E' => 'Bersikap toleran dan menyediakan semua fasilitas ibadah karyawan.'],
            'B5E4A3D2C1'),

        14 => S('Kemampuan Menggerakkan dan Mengoordinasi Orang Lain',
            'Banyak karyawan berprestasi di perusahaan yang Anda pimpin mengundurkan diri karena tidak ada kesempatan pengembangan diri, padahal keuangan perusahaan sedang tidak memungkinkan. Jika dibiarkan, perusahaan akan rugi kehilangan SDM bagus. Sikap Anda adalah ....',
            ['A' => 'Memberikan kesempatan pengembangan diri dengan mengikutkan karyawan ke seminar.',
             'B' => 'Memberikan kesempatan pengembangan diri dengan mengikutkan karyawan ke pelatihan.',
             'C' => 'Semua perusahaan ingin karyawannya berkembang, tetapi kondisi keuangan tidak mendukung sehingga hal ini tidak terhindarkan.',
             'D' => 'Pimpinan sendiri memberikan pembekalan agar karyawan bisa berkembang ke arah yang lebih baik.',
             'E' => 'Pemilik perusahaan harusnya lebih peka dan memfasilitasi pengembangan diri karyawan.'],
            'D5E4C3B2A1'),

        15 => S('Jejaring Kerja',
            'Beredar kabar seorang rekan kerja menggelapkan uang penjualan bulanan untuk keperluan pribadi. Ia sudah beberapa hari tidak masuk, dan kabar ini cepat menyebar menjadi buah bibir di kantor. Menurut Anda ....',
            ['A' => 'Perusahaan harus memberikan sanksi tegas terhadap pelaku.',
             'B' => 'Perilaku teman tersebut sudah di luar batas dan dapat merugikan perusahaan.',
             'C' => 'Kabar tersebut belum pasti, jadi saya tidak mau berkomentar lebih jauh.',
             'D' => 'Saya akan mencari kebenaran informasi tersebut sebelum memberikan pendapat.',
             'E' => 'Saya tanyakan kepada teman-teman lain apakah informasi tersebut benar.'],
            'C5D4E3B2A1'),

        16 => S('Semangat Berprestasi',
            'Dosen meminta Anda mengikuti perlombaan yang sebentar lagi diselenggarakan universitas. Dosen menilai Anda memiliki talenta sesuai deskripsi lomba, tetapi Anda tidak menyadarinya. Sikap Anda adalah ....',
            ['A' => 'Berterima kasih kepada dosen karena telah memuji Anda bertalenta.',
             'B' => 'Menerima dan mengembangkan lebih dalam talenta yang Anda miliki.',
             'C' => 'Bersedia mengikuti lomba dan meminta bantuan dosen untuk membimbing Anda.',
             'D' => 'Bersedia asalkan dosen selalu mau membimbing jika menemui permasalahan.',
             'E' => 'Menerima dan mengikuti perlombaan tersebut sebisanya.'],
            'B5C4D3A2E1'),

        17 => S('Kreativitas dan Inovasi',
            'Atasan mempercayakan penyelesaian sebuah masalah kepada Anda karena menilai Anda paling mampu. Namun di tengah jalan, solusi Anda sedikit kurang optimal dari yang diharapkan perusahaan. Yang Anda lakukan adalah ....',
            ['A' => 'Mengubah semua solusi yang ada dan membuat penyelesaian baru.',
             'B' => 'Meminta atasan memberikan waktu lebih untuk memikirkannya.',
             'C' => 'Melakukan modifikasi atas keputusan tersebut; terkadang modifikasi kecil sudah cukup.',
             'D' => 'Mengembalikan tugas tersebut kepada atasan untuk dilimpahkan ke karyawan lain.',
             'E' => 'Memikirkan cara yang paling efektif dari penyelesaian sebelumnya.'],
            'C5E4A3B2D1'),

        18 => S('Kemampuan Menggerakkan dan Mengoordinasi Orang Lain',
            'Anda dimutasi ke cabang baru di luar kota dengan tanggung jawab lebih besar untuk memajukan perusahaan. Cabang tersebut diisi karyawan baru dari daerah yang belum berpengalaman. Yang Anda lakukan adalah ....',
            ['A' => 'Memberitahukan kepada karyawan baru terkait pekerjaan yang harus mereka kerjakan.',
             'B' => 'Menyuruh mereka berinisiatif mengimprovisasi diri dan meningkatkan kualitas kerja.',
             'C' => 'Menyuruh mereka membaca semua tugas mereka dan menerapkannya dalam pekerjaan.',
             'D' => 'Meminta mereka bekerja maksimal dan loyal terhadap perusahaan.',
             'E' => 'Mengomunikasikan sasaran perusahaan dan memotivasi staf untuk mencapainya.'],
            'E5A4C3D2B1'),

        19 => S('Integritas Diri',
            'Beberapa tahun lagi Anda memasuki usia pensiun dari instansi pemerintah. Pengabdian Anda kepada negara selesai dan Anda memasuki babak baru tanpa ikatan pekerjaan. Apa yang Anda rencanakan ketika waktu itu tiba?',
            ['A' => 'Membuka usaha kecil-kecilan di rumah sambil menghabiskan hari tua bersama anak dan cucu.',
             'B' => 'Memiliki tanah di berbagai tempat strategis untuk investasi masa tua.',
             'C' => 'Membuka lapangan kerja bagi orang terdekat dan yang membutuhkan karena sekarang sulit mencari pekerjaan.',
             'D' => 'Memiliki warisan harta yang berguna bagi anak dan cucu kelak.',
             'E' => 'Beristirahat saja setiap hari di rumah menikmati hari tua bersama keluarga.'],
            'A5C4B3D2E1'),

        20 => S('Jejaring Kerja',
            'Saat diskusi divisi, seorang rekan mengusulkan ide yang menurutnya sangat baik, tetapi menurut Anda berisiko besar. Ketika Anda menanggapi, ia merespons dengan sikap tidak baik, seakan tidak mau gagasannya disanggah. Sikap Anda adalah ....',
            ['A' => 'Diam saja dan mengikuti semua gagasannya demi menghindari konflik.',
             'B' => 'Memintanya memberikan gagasan yang lebih realistis dan berisiko kecil.',
             'C' => 'Mengajaknya bicara santai dan fokus pada tujuan awal.',
             'D' => 'Memintanya memikirkan kembali gagasan yang diusulkan.',
             'E' => 'Keluar dari ruang diskusi dan memberitahukan kepada atasan.'],
            'C5D4B3A2E1'),

        21 => S('Jejaring Kerja',
            'Perusahaan Anda memiliki disiplin dan aturan ketat; karyawan dituntut bekerja cepat dan menyelesaikan tugas dengan baik. Anda karyawan baru yang belum terbiasa. Dalam mengerjakan semua pekerjaan di kantor, apa yang Anda lakukan?',
            ['A' => 'Lebih suka bekerja dalam suasana kelompok dan saling bertukar pikiran.',
             'B' => 'Lebih suka bekerja sendiri dan fokus menyelesaikan pekerjaan yang diemban.',
             'C' => 'Melibatkan teman-teman dalam setiap hal kecil terkait pekerjaan.',
             'D' => 'Tekun, teliti, dan bekerja sampai semua pekerjaan cepat diselesaikan.',
             'E' => 'Lebih suka pekerjaan yang memberikan kebebasan waktu yang fleksibel.'],
            'D5A4C3B2E1'),

        22 => S('Profesionalisme',
            'Anda termasuk 3 kandidat karyawan terbaik yang akan dipromosikan. Untuk menentukan yang terbaik, pimpinan memberikan tugas yang belum pernah Anda kerjakan. Bagaimana Anda mengatasinya?',
            ['A' => 'Bekerja sama dengan dua kandidat lain untuk saling membantu.',
             'B' => 'Membaca berbagai referensi yang mendukung penyelesaian tugas tersebut.',
             'C' => 'Membeli buku-buku penunjang di Gramedia untuk memudahkan pemahaman terhadap tugas.',
             'D' => 'Mencari referensi di Google dan jurnal online lalu memakainya agar hasil maksimal.',
             'E' => 'Meminta bantuan dan pencerahan atasan tentang cara mengerjakannya.'],
            'B5D4C3A2E1'),

        23 => S('Jejaring Kerja',
            'Rekan tim Anda dimarahi atasan karena terlambat mengumpulkan tugas tim. Ia bertugas meng-assembly pekerjaan, tetapi semua anggota terlambat mengumpulkan tugas pribadi sehingga ia tidak selesai tepat waktu. Sikap Anda adalah ....',
            ['A' => 'Mendengarkan saja rekan Anda dimarahi, lalu memberinya semangat agar tidak dimasukkan ke hati.',
             'B' => 'Minta maaf kepada teman karena keterlambatan juga disebabkan anggota tim lain.',
             'C' => 'Mengakui kesalahan kepada atasan jika Anda juga turut berkontribusi pada masalah tersebut.',
             'D' => 'Mengakui kesalahan kepada teman dan berjanji tidak mengulanginya lagi.',
             'E' => 'Mengajak rekan Anda membicarakannya dan menghiburnya.'],
            'C5D4B3E2A1'),

        24 => S('Teknologi dan Informasi',
            'Hampir setiap minggu Anda dinas ke luar kota dan harus mempersiapkan barang pribadi hingga dokumen penting. Anda agak pelupa, barang bisa tertinggal, belum lagi risiko rusak atau hilang. Sikap Anda adalah ....',
            ['A' => 'Menyiapkannya jauh-jauh hari agar tidak lupa.',
             'B' => 'Selalu membawa dokumen cadangan di tempat berbeda.',
             'C' => 'Menyimpannya dengan sistem online agar bisa diakses di mana saja.',
             'D' => 'Menyimpan dokumen di dalam hard disk.',
             'E' => 'Tetap mempersiapkan seperti biasa yang Anda lakukan.'],
            'C5D4B3A2E1'),

        25 => S('Integritas Diri',
            'Anda karyawan perusahaan perdagangan dan memahami bahwa Indonesia memiliki "keunggulan mutlak" dalam perdagangan internasional untuk beberapa produk. Apa visi Anda terhadap kondisi tersebut?',
            ['A' => 'Mengusulkan kepada atasan untuk mengoptimalkan perdagangan produk tersebut karena unggul harga dan ketersediaan barang.',
             'B' => 'Hal itu mungkin sudah ditangani karyawan lain, karena di kantor banyak rekan lain.',
             'C' => 'Saya kurang berani mengusulkan sesuatu kepada pimpinan.',
             'D' => 'Saya kurang yakin produk Indonesia mampu bersaing di pasar internasional.',
             'E' => 'Saya tanyakan terlebih dulu pendapat rekan lain mengenai hal ini.'],
            'A5E4C3D2B1'),

        26 => S('Profesionalisme',
            'Instansi Anda mengadakan training yang sangat bermanfaat bagi peningkatan kemampuan, namun dilaksanakan pada hari Sabtu dan Minggu. Sikap Anda ....',
            ['A' => 'Lebih baik mengikuti training yang diadakan bukan pada hari libur.',
             'B' => 'Hari libur adalah hak pegawai untuk bebas dari urusan pekerjaan.',
             'C' => 'Bersedia mengorbankan dua hari libur tersebut untuk mengikuti training.',
             'D' => 'Bersedia mengikuti training namun hanya hari Sabtu saja.',
             'E' => 'Menyarankan pegawai lain yang masih lajang untuk mengikuti training tersebut.'],
            'C5D4E3A2B1'),

        27 => S('Profesionalisme',
            'Saya diminta lembur kerja, padahal sudah berjanji mengantar anak ke pesta ulang tahun sahabatnya. Sikap saya adalah ....',
            ['A' => 'Pulang dengan diam-diam tanpa sepengetahuan pimpinan.',
             'B' => 'Berpura-pura sakit agar diizinkan segera pulang.',
             'C' => 'Menghubungi anak saya dan menjelaskan agar naik taksi saja.',
             'D' => 'Bekerja lembur karena yakin anak saya pasti memaklumi.',
             'E' => 'Meminta izin pimpinan mengantar anak, kemudian kembali ke kantor untuk lembur.'],
            'E5C4D3B2A1'),

        28 => S('Integritas Diri',
            'Saya menggunakan kendaraan dinas tanpa sepengetahuan Kepala Kendaraan pada hari libur, dan secara tidak sengaja menabrakkannya. Tindakan saya adalah ....',
            ['A' => 'Diam-diam menyimpan kendaraan tersebut karena tidak ada yang tahu.',
             'B' => 'Membawa kendaraan ke bengkel, melaporkan kejadian kepada pimpinan, dan menyerahkan segala keputusan kepada pimpinan.',
             'C' => 'Mencoba memperbaiki sendiri kendaraan tersebut.',
             'D' => 'Melaporkan kejadian kepada pimpinan dan siap menerima hukuman.',
             'E' => 'Membawa kendaraan ke bengkel dengan biaya pribadi dan mengembalikannya diam-diam.'],
            'B5D4C3E2A1'),

        29 => S('Sosial Budaya',
            'Anda pindah ke perumahan baru dan melihat keluarga Pak Roni kerap dikucilkan karena perbedaan agama. Sikap Anda adalah ....',
            ['A' => 'Menerima keluarga Pak Roni tinggal, namun menyarankan mereka membatasi kegiatan keagamaan.',
             'B' => 'Menyadarkan tetangga bahwa menerima keberagaman dapat mengancam keharmonisan sosial.',
             'C' => 'Menerima keluarga Pak Roni dengan memberi kesempatan menyampaikan kekecewaan kepada masyarakat.',
             'D' => 'Menyadarkan tetangga bahwa keberagaman agama adalah hal yang tidak perlu dipermasalahkan.',
             'E' => 'Menyadarkan tetangga agar memberi kesempatan keluarga Pak Roni tinggal di perumahan tersebut.'],
            'D5E4C3A2B1'),

        30 => S('Integritas Diri',
            'Anda tidak sengaja merusak fasilitas perusahaan — sebenarnya bukan sepenuhnya kesalahan Anda — dan kebetulan atasan menyaksikan langsung di depan Anda. Sikap Anda adalah ....',
            ['A' => 'Spontan berbicara kepada atasan bahwa fasilitas itu memang sudah rapuh dan rusak.',
             'B' => 'Spontan berbicara sendiri, "Duh, ternyata barangnya sudah rapuh," agar atasan mendengar dan paham sendiri.',
             'C' => 'Refleks berbicara sendiri dengan kata-kata sopan agar atasan memaklumi dan tidak mempermasalahkannya.',
             'D' => 'Langsung berbicara kepada atasan, meminta maaf, dan menjelaskannya.',
             'E' => 'Langsung berbicara kepada atasan, meminta maaf, menjelaskan, dan langsung menggantinya dengan yang baru.'],
            'E5D4C3A2B1'),

        31 => S('Sosial Budaya',
            'Pada pertemuan keluarga dalam rangka merayakan hari Idulfitri, saya akan ....',
            ['A' => 'Berusaha menjajaki peluang mendapatkan kesempatan pengembangan masa depan saya.',
             'B' => 'Mengarahkan pembicaraan agar orang lain mengetahui kelebihan saya.',
             'C' => 'Berusaha memuaskan tamu dengan menjamu sebaik-baiknya.',
             'D' => 'Menunggu kesempatan penawaran pengembangan masa depan.',
             'E' => 'Menjamu dengan ramah sambil menunjukkan kelemahan saya.'],
            'C5E4D3B2A1'),

        32 => S('Integritas Diri',
            'Untuk lebih menjaga privasi dan keamanan dalam menggunakan media sosial, yang Anda lakukan adalah ....',
            ['A' => 'Tidak mengklik tautan yang tidak dikenal.',
             'B' => 'Mengganti password secara berkala.',
             'C' => 'Tidak menggunakan media sosial untuk kepentingan pribadi.',
             'D' => 'Tidak memposting informasi pribadi.',
             'E' => 'Menggunakan fitur yang aman.'],
            'D5C4B3A2E1'),

        33 => S('Profesionalisme',
            'Anda seorang pak pos yang setiap hari mengantarkan barang ke pelanggan tanpa mengetahui isinya. Suatu hari Anda dikomplain karena barang yang diantar keliru. Sikap Anda ....',
            ['A' => 'Mendengarkan dan menjelaskan bahwa Anda hanya pak pos yang bertugas mengantar barang.',
             'B' => 'Mendengarkan dan memberikan solusi supaya kejadian tidak berulang.',
             'C' => 'Mendengarkan, minta maaf, dan bersedia mengantarkan barang yang tepat secepatnya.',
             'D' => 'Mendengarkan saja supaya ia merasa dipahami, setelah itu tidak melakukan apa pun.',
             'E' => 'Minta maaf, mendengarkan, dan memberitahu atasan via telepon jika ada barang keliru.'],
            'E5C4A3B2D1'),

        34 => S('Profesionalisme',
            'Anda teller bank. Saat bank sedang ramai, istri Anda datang meminta diantar ke bandara karena tidak ada yang bisa mengantarkan. Sikap Anda adalah ....',
            ['A' => 'Meminta izin atasan untuk mengantar istri ke bandara.',
             'B' => 'Meminta izin atasan mengantar istri karena tidak ada yang bisa mengantarkan.',
             'C' => 'Menyarankan istri naik angkutan umum menuju bandara karena bank sedang ramai.',
             'D' => 'Meminta istri menunggu karena bank ramai, lalu mengantarnya setelah bank sepi.',
             'E' => 'Meminta teman mengantarkan istri Anda karena bank sedang ramai.'],
            'C5D4E3B2A1'),

        35 => S('Kreativitas dan Inovasi',
            'Anda diminta pimpinan membuat laporan pelaksanaan tugas. Saat akan dicetak, file laporan tiba-tiba corrupt karena virus, padahal pimpinan memintanya segera. Apa yang Anda lakukan?',
            ['A' => 'Segera mencari solusi dari permasalahan tersebut melalui Google.',
             'B' => 'Segera memanggil tim IT untuk menangani permasalahan tersebut.',
             'C' => 'Segera memindahkan file ke dalam flash disk.',
             'D' => 'Segera melapor kepada pimpinan bahwa file terkena virus.',
             'E' => 'Segera meminta teman membantu menangani permasalahan tersebut.'],
            'B5D4A3E2C1'),

        36 => S('Profesionalisme',
            'Edi pegawai baru di pabrik pengolahan kayu. Suatu malam ia tiba-tiba ditugaskan manajernya menyelesaikan tugas rekan yang mendadak keluar, padahal ia belum paham pekerjaannya. Manajer menugaskannya karena kagum pada track record Edi sebagai lulusan terbaik. Apa yang harus dilakukan Edi?',
            ['A' => 'Meminta orang lain mengerjakan asalkan selesai tepat waktu.',
             'B' => 'Segera memulai dan menyelesaikan sebisanya, yang penting selesai.',
             'C' => 'Tidak perlu buru-buru karena itu bukan tugas pokoknya.',
             'D' => 'Segera memulai dan berusaha menyelesaikan tugas itu sesempurna mungkin.',
             'E' => 'Mempertanyakan dan menegosiasi manajernya karena takut hasilnya tidak maksimal.'],
            'D5E4B3A2C1'),

        37 => S('Kemampuan Menggerakkan dan Mengoordinasi Orang Lain',
            'Anda ditunjuk sebagai ketua kegiatan untuk menyiapkan pentas seni ulang tahun perusahaan ke-21, karena tiap kantor cabang harus menampilkan pertunjukan. Tindakan Anda ....',
            ['A' => 'Bekerja keras membentuk panitia persiapan pentas seni.',
             'B' => 'Menunjuk beberapa anggota untuk tampil pada pentas seni.',
             'C' => 'Mengumpulkan seluruh anggota untuk membahas bersama persiapan pentas seni.',
             'D' => 'Melakukan voting untuk mengambil keputusan persiapan pentas seni.',
             'E' => 'Menunjuk beberapa anggota menampilkan pentas seni yang mengangkat kebudayaan bangsa.'],
            'C5D4A3E2B1'),

        38 => S('Integritas Diri',
            'Anda pegawai honorer SD di Desa Mekarsari, mengabdi 10 tahun dengan gaji pas-pasan, dan berharap diangkat menjadi pegawai negeri tanpa tes. Namun pemerintah mengumumkan program pengangkatan satu juta guru melalui jalur P3K. Sikap Anda ....',
            ['A' => 'Menyambut program tersebut karena bertujuan sama dengan PNS untuk menyejahterakan guru.',
             'B' => 'Mengusulkan pemerintah meninjau kembali program tersebut karena merugikan guru.',
             'C' => 'Menyambut program tersebut sambil mempersiapkan diri ikut CPNS tahun depan.',
             'D' => 'Memilih mengikuti CPNS karena usia masih muda dan memenuhi syarat.',
             'E' => 'Ikut persatuan profesi menolak program tersebut dan mendorong rekrutmen jalur CPNS.'],
            'A5C4D3B2E1'),

        39 => S('Integritas Diri',
            'Masyarakat komplek Anda sepakat menutup gerbang keluar-masuk untuk mencegah penyebaran virus. Di saat yang sama, anak Anda yang baru menyelesaikan kuliah di Jakarta ingin pulang. Sikap Anda ....',
            ['A' => 'Meminta izin RT/RW memasukkan anak ke rumah untuk isolasi mandiri di kamar dengan prokes ketat.',
             'B' => 'Menelpon kerabat untuk menampung anak selama komplek ditutup dengan tetap memperhatikan prokes 3M.',
             'C' => 'Meminta anak tidak pulang terlebih dahulu sampai situasi membaik.',
             'D' => 'Meminta anak isolasi mandiri di penginapan, baru boleh masuk rumah dengan persetujuan RT/RW.',
             'E' => 'Meminta anak menginap di tempat sahabatnya sampai situasi membaik dengan prokes 3M.'],
            'D5C4A3B2E1'),

        40 => S('Kreativitas dan Inovasi',
            'Anda pegawai baru di desa terpencil tanpa akses internet, padahal pekerjaan menuntut akses informasi cepat dan akurat untuk percepatan pembangunan. Hal yang Anda lakukan adalah ....',
            ['A' => 'Menghubungi provider internet terdekat seperti Telkom untuk meminta jaringan internet.',
             'B' => 'Berkolaborasi dengan tim IT tempat kerja lama untuk membangun sistem IT modern.',
             'C' => 'Tidak masalah bekerja manual karena saya selalu bisa mengatasi tantangan.',
             'D' => 'Tetap berkreasi sebaik mungkin di lingkungan sesulit apa pun.',
             'E' => 'Membangun sistem IT untuk menyambungkan desa dengan akses informasi ke seluruh dunia.'],
            'E5B4A3D2C1'),

        41 => S('Profesionalisme',
            'Sebagai dokter di RS khusus COVID, Tirta bertaruh nyawa menyelamatkan pasien. Seorang rekan sejawatnya meninggal tertular COVID, sementara Tirta punya anak kecil dan istri ibu rumah tangga. Sikap Tirta seharusnya ....',
            ['A' => 'Selalu menggunakan APD saat bertugas agar tidak tertular.',
             'B' => 'Mengajukan pindah ke RS yang lebih sedikit pasiennya sesuai spesialisasi dan berjanji bekerja maksimal.',
             'C' => 'Tetap bekerja tulus sesuai sumpah dokter meski berisiko tertular.',
             'D' => 'Memahami risiko pekerjaan dan tetap bertugas sesuai perintah.',
             'E' => 'Tidak apa-apa tertular, asal tidak ada penyakit bawaan pasti sembuh.'],
            'C5A4D3E2B1'),

        42 => S('Orientasi kepada Orang Lain',
            'Salah satu rekan kerja Anda terpapar virus corona dan harus isolasi mandiri 14 hari. Hal yang Anda lakukan adalah ....',
            ['A' => 'Mendukungnya secara moral dan mendoakan kesembuhannya.',
             'B' => 'Meminta rekan lain yang terakhir berinteraksi untuk isolasi mandiri dan tes swab.',
             'C' => 'Menggalang donasi dengan rekan kerja untuk membantu ekonomi keluarganya.',
             'D' => 'Menelponnya dan berkata Anda sangat peduli dengannya.',
             'E' => 'Memberikan semangat untuk pulih dan kembali bekerja di kantor.'],
            'A5E4C3B2D1'),

        43 => S('Orientasi kepada Orang Lain',
            'Ketika mendengar tetangga Anda bertikai sesama suami istri, tindakan Anda adalah ....',
            ['A' => 'Tidak ikut campur urusan rumah tangga orang lain dan membantu ketika dibutuhkan.',
             'B' => 'Menawarkan bantuan untuk menyelesaikan permasalahannya.',
             'C' => 'Mengajak anaknya menginap di rumah dan bermain dengan anak Anda.',
             'D' => 'Menawarkan tempat tinggal sementara bagi suami/istrinya sambil menunggu keadaan membaik.',
             'E' => 'Menghubungi pihak keluarganya untuk membantu menyelesaikan pertikaian tersebut.'],
            'C5E4B3D2A1'),

        44 => S('Profesionalisme',
            'Anda resepsionis rumah sakit di Bandung. Banyak keluhan ditujukan ke instansi Anda, padahal tersedia fasilitas keluhan online. Sikap Anda adalah ....',
            ['A' => 'Menerima dan menanggapi keluhan konsumen sembari mengajarkan cara menyampaikan keluhan secara online.',
             'B' => 'Menyelesaikan keluhan konsumen sembari menanyakan kesulitan menyampaikan keluhan secara online.',
             'C' => 'Mendengar keluh kesah konsumen dan mengajarkan cara menyampaikan keluhan secara online.',
             'D' => 'Menerima keluhan para konsumen sembari mengajarkan cara menyampaikan keluhan secara online.',
             'E' => 'Menerima dan menyelesaikan keluhan konsumen sembari menanyakan kesulitan saat menyampaikan keluhan online.'],
            'D5C4A3E2B1'),

        45 => S('Integritas Diri',
            'Seseorang ingin mengirim hewan ternak melalui pelabuhan tetapi tidak memiliki surat kesehatan hewan yang dipersyaratkan. Setelah diperiksa mendalam, hewan tersebut ternyata pembawa penyakit menular. Saya akan ....',
            ['A' => 'Langsung memusnahkan hewan tersebut sesuai prosedur.',
             'B' => 'Menginformasikan kepada pemiliknya bahwa hewan tersebut tidak bisa dikirim dan harus dimusnahkan.',
             'C' => 'Meminta pemilik membawa kembali hewan tersebut dengan syarat harus dimusnahkan.',
             'D' => 'Menginformasikan kepada atasan terkait kasus tersebut.',
             'E' => 'Langsung memusnahkan hewan tersebut sesuai prosedur.'],
            'A5D4E3C2B1'),
    ];
}

/* ================= ROUTING ================= */

$SOAL = soal_tkp();
$aksi = $_POST['aksi'] ?? '';

if ($aksi === 'mulai') {
    $nama = trim((string)($_POST['nama'] ?? ''));
    halaman_ujian($nama !== '' ? $nama : 'Peserta');
} elseif ($aksi === 'selesai') {
    halaman_hasil($SOAL);
} else {
    halaman_awal();
}

/* ================= HALAMAN AWAL ================= */

function halaman_awal(): void
{
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simulasi CAT CPNS — Pretest TKP 45 Soal</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;background:linear-gradient(160deg,#0b3d91,#12294f);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px;color:#1e293b}
.card{background:#fff;border-radius:16px;max-width:640px;width:100%;padding:34px;box-shadow:0 20px 60px rgba(0,0,0,.35)}
h1{font-size:24px;color:#0b3d91}
.sub{color:#64748b;font-size:13px;margin-top:4px}
.infos{display:grid;grid-template-columns:repeat(4,1fr);gap:10px;margin:22px 0}
.inf{background:#f1f5f9;border-radius:10px;padding:12px;text-align:center}
.inf b{display:block;font-size:18px;color:#0b3d91}
.inf span{font-size:11px;color:#64748b}
.gold{background:#fffbeb;border:2px solid #f59e0b;border-radius:12px;padding:14px;font-size:13px;line-height:1.6;margin-bottom:20px}
.gold b{color:#b45309}
ul.rule{margin:0 0 20px 18px;font-size:13px;line-height:1.9;color:#334155}
label{font-size:13px;font-weight:600}
input[type=text]{width:100%;margin:8px 0 18px;padding:12px;border:2px solid #cbd5e1;border-radius:10px;font-size:15px}
input[type=text]:focus{outline:none;border-color:#0b3d91}
.start{width:100%;padding:14px;background:#0b3d91;color:#fff;border:none;border-radius:10px;font-size:16px;font-weight:700;cursor:pointer}
.start:hover{background:#092f70}
@media(max-width:520px){.infos{grid-template-columns:repeat(2,1fr)}}
</style>
</head>
<body>
<div class="card">
  <h1>🖥️ SIMULASI CAT CPNS</h1>
  <div class="sub">Pretest — Tes Karakteristik Pribadi (TKP) • 45 Soal • Sumber: Pretest CPNS.pdf</div>

  <div class="infos">
    <div class="inf"><b>45</b><span>Soal</span></div>
    <div class="inf"><b>40:30</b><span>Menit</span></div>
    <div class="inf"><b>166</b><span>Passing Grade</span></div>
    <div class="inf"><b>225</b><span>Skor Maks</span></div>
  </div>

  <div class="gold">
    ⏱ <b>GOLDEN RULE:</b> Rata-rata waktu murni per soal adalah <b>54 detik</b>. Di dunia nyata patokannya bukan hitungan per nomor, melainkan <b>sisa waktu per subtes</b>. Jika Anda terjebak lebih dari <b>1,5 menit</b> di satu soal, tekan tombol <b>Ragu-Ragu / lewati</b> sekarang juga!
  </div>

  <ul class="rule">
    <li>Setiap jawaban bernilai <b>1 – 5 poin</b>, soal kosong bernilai <b>0</b>.</li>
    <li>Timer berjalan otomatis dan ujian <b>ter-submit otomatis</b> saat waktu habis.</li>
    <li>Jawaban bisa diubah kapan saja sebelum menekan <b>Selesai Ujian</b>.</li>
    <li>Gunakan panel nomor untuk melompat antar soal dengan cepat.</li>
  </ul>

  <form method="post">
    <input type="hidden" name="aksi" value="mulai">
    <label for="nama">Nama Peserta</label>
    <input type="text" id="nama" name="nama" maxlength="40" required placeholder="Tulis nama Anda...">
    <button class="start" type="submit">MULAI UJIAN ▶</button>
  </form>
</div>
</body>
</html>
<?php
}

/* ================= HALAMAN UJIAN ================= */

function halaman_ujian(string $nama): void
{
    $namaE = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
    // Data untuk client HANYA soal + opsi (skor disimpan di server agar tidak bisa dicurangi)
    $soalJs = [];
    foreach (soal_tkp() as $s) {
        $soalJs[] = ['q' => $s['q'], 'o' => $s['opt']];
    }
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ujian Berlangsung — CAT TKP</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',system-ui,sans-serif;background:#eef2f7;color:#22303f}
header{background:linear-gradient(135deg,#0b3d91,#1a5bc4);color:#fff;padding:10px 18px;display:flex;justify-content:space-between;align-items:center;position:sticky;top:0;z-index:50;box-shadow:0 2px 10px rgba(0,0,0,.2)}
.brand{font-weight:700;font-size:15px}
.brand small{display:block;font-weight:400;font-size:11px;opacity:.85}
.hright{display:flex;align-items:center;gap:12px}
.peserta{font-size:13px;background:rgba(255,255,255,.15);padding:6px 12px;border-radius:8px}
.timer{font-size:22px;font-weight:800;background:rgba(255,255,255,.18);padding:6px 14px;border-radius:8px;font-variant-numeric:tabular-nums;min-width:96px;text-align:center}
.timer.warn{background:#f59e0b}
.timer.danger{background:#dc2626;animation:blink 1s infinite}
@keyframes blink{50%{opacity:.5}}
.wrap{max-width:1100px;margin:16px auto;padding:0 14px}
.hint{background:#fffbeb;border:1px solid #f59e0b;border-radius:10px;padding:9px 14px;font-size:12.5px;margin-bottom:14px;color:#92400e}
.layout{display:grid;grid-template-columns:1fr 265px;gap:16px;align-items:start}
@media(max-width:860px){.layout{grid-template-columns:1fr}}
.panel{background:#fff;border-radius:14px;padding:20px;box-shadow:0 1px 5px rgba(16,42,90,.08)}
.qhead{display:flex;justify-content:space-between;align-items:center;margin-bottom:14px;gap:10px;flex-wrap:wrap}
.qno{font-size:14px;color:#64748b}.qno b{color:#0b3d91;font-size:16px}
.flag{border:2px solid #f59e0b;background:#fff;color:#b45309;padding:8px 14px;border-radius:9px;font-weight:700;cursor:pointer;font-size:13px}
.flag.on{background:#f59e0b;color:#fff}
.qtext{font-size:15px;line-height:1.75;margin-bottom:16px}
.opt{display:flex;gap:10px;align-items:flex-start;border:2px solid #e2e8f0;border-radius:11px;padding:12px;margin-bottom:9px;cursor:pointer;transition:.15s;font-size:14px;line-height:1.55}
.opt:hover{border-color:#9db6dd;background:#f6f9ff}
.opt.sel{border-color:#0b3d91;background:#eef4ff}
.opt input{margin-top:3px;accent-color:#0b3d91}
.huruf{min-width:27px;height:27px;border-radius:50%;background:#0b3d91;color:#fff;font-weight:700;display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0}
.nav{display:flex;gap:10px;margin-top:18px;flex-wrap:wrap}
.btn{border:2px solid #cbd5e1;background:#fff;padding:10px 16px;border-radius:10px;font-weight:700;cursor:pointer;font-size:14px}
.btn.primary{background:#0b3d91;border-color:#0b3d91;color:#fff}
.btn.danger{background:#dc2626;border-color:#dc2626;color:#fff;margin-left:auto}
.btn:disabled{opacity:.4;cursor:not-allowed}
.gpanel{background:#fff;border-radius:14px;padding:16px;box-shadow:0 1px 5px rgba(16,42,90,.08);position:sticky;top:70px}
.gpanel h3{font-size:13px;color:#64748b;margin-bottom:10px;text-transform:uppercase;letter-spacing:.5px}
.grid{display:grid;grid-template-columns:repeat(5,1fr);gap:6px}
.grid button{aspect-ratio:1;border:none;border-radius:8px;font-weight:700;cursor:pointer;background:#e2e8f0;color:#334155;font-size:13px}
.grid .ans{background:#16a34a;color:#fff}
.grid .flg{background:#f59e0b;color:#fff}
.grid .cur{outline:3px solid #0b3d91;outline-offset:1px}
.legend{display:flex;flex-wrap:wrap;gap:8px;margin-top:12px;font-size:11px;color:#475569}
.legend i{display:inline-block;width:12px;height:12px;border-radius:3px;margin-right:4px;vertical-align:-1px}
.lc{background:#fff;outline:2px solid #0b3d91}.la{background:#16a34a}.lf{background:#f59e0b}.ln{background:#e2e8f0}
.stat{margin-top:12px;font-size:12.5px;color:#334155;border-top:1px dashed #cbd5e1;padding-top:10px;line-height:1.8}
.modal{position:fixed;inset:0;background:rgba(15,23,42,.6);display:none;align-items:center;justify-content:center;z-index:100}
.modal.show{display:flex}
.mbox{background:#fff;border-radius:14px;padding:26px;max-width:430px;width:92%}
.mbox h3{color:#0b3d91;margin-bottom:12px}
.mbox p{font-size:14px;line-height:1.8;margin-bottom:18px}
.mbtn{display:flex;gap:10px;justify-content:flex-end}
</style>
</head>
<body>

<header>
  <div class="brand">🖥️ SIMULASI CAT CPNS<small>Pretest TKP • 45 Soal</small></div>
  <div class="hright">
    <div class="peserta">👤 <?= $namaE ?></div>
    <div id="timer" class="timer">40:30</div>
  </div>
</header>

<div class="wrap">
  <div class="hint">⏱ <b>Golden rule:</b> ±54 detik/soal. Terjebak lebih dari 1,5 menit di satu soal? Tekan <b>🚩 Ragu-Ragu</b> lalu lompat ke soal berikutnya!</div>
  <div class="layout">
    <main class="panel">
      <div class="qhead">
        <span class="qno">Soal <b id="qNo">1</b> dari <?= TOTAL_SOAL ?> &nbsp;•&nbsp; <span id="qTopik"></span></span>
        <button type="button" id="btnFlag" class="flag">🚩 Ragu-Ragu</button>
      </div>
      <div id="qText" class="qtext"></div>
      <div id="optList"></div>
      <div class="nav">
        <button type="button" id="btnPrev" class="btn">‹ Sebelumnya</button>
        <button type="button" id="btnNext" class="btn primary">Selanjutnya ›</button>
        <button type="button" id="btnFinish" class="btn danger">✔ Selesai Ujian</button>
      </div>
    </main>

    <aside class="gpanel">
      <h3>Navigasi Soal</h3>
      <div id="grid" class="grid"></div>
      <div class="legend">
        <span><i class="lc"></i>Aktif</span>
        <span><i class="la"></i>Terjawab</span>
        <span><i class="lf"></i>Ragu-ragu</span>
        <span><i class="ln"></i>Kosong</span>
      </div>
      <div class="stat" id="stat"></div>
    </aside>
  </div>
</div>

<div id="modal" class="modal">
  <div class="mbox">
    <h3>Konfirmasi Selesai Ujian</h3>
    <p>
      Terjawab : <b id="mIsi">0</b> soal<br>
      Ragu-ragu : <b id="mRg">0</b> soal<br>
      Kosong : <b id="mKosong">0</b> soal<br><br>
      Yakin mengakhiri ujian? Jawaban tidak dapat diubah lagi.
    </p>
    <div class="mbtn">
      <button type="button" class="btn" id="mNo">Kembali</button>
      <button type="button" class="btn primary" id="mYes">Ya, Selesai!</button>
    </div>
  </div>
</div>

<form id="formUjian" method="post" style="display:none">
  <input type="hidden" name="aksi" value="selesai">
  <input type="hidden" name="nama" value="<?= $namaE ?>">
  <input type="hidden" name="sisa_detik" id="inSisa" value="<?= TOTAL_WAKTU ?>">
  <?php for ($i = 1; $i <= TOTAL_SOAL; $i++): ?>
  <input type="hidden" name="jawaban[<?= $i ?>]" id="jawaban_<?= $i ?>" value="">
  <?php endfor; ?>
</form>

<script>
const DATA  = <?= json_encode($soalJs, JSON_UNESCAPED_UNICODE) ?>;
const N     = <?= TOTAL_SOAL ?>;
const TOTAL = <?= TOTAL_WAKTU ?>;
const KEY   = 'cat_tkp_sim_v1';

let idx = 0, answers = {}, flags = {}, sisa = TOTAL, mulai = null, timerId = null, submitted = false;

function initSession(){
  let s = null;
  try { s = JSON.parse(sessionStorage.getItem(KEY) || 'null'); } catch(e){}
  const now = Math.floor(Date.now()/1000);
  if (s && s.aktif && s.mulai){
    mulai = s.mulai;
    answers = s.answers || {};
    flags = s.flags || {};
    idx = Math.min(s.idx || 0, N-1);
    sisa = Math.max(0, TOTAL - (now - mulai));
  } else {
    mulai = now;
    simpan();
  }
  document.getElementById('inSisa').value = sisa;
}
function simpan(){
  try { sessionStorage.setItem(KEY, JSON.stringify({aktif:true, mulai, answers, flags, idx})); } catch(e){}
}
function fmt(s){
  s = Math.max(0, s);
  const m = Math.floor(s/60), d = s%60;
  return String(m).padStart(2,'0') + ':' + String(d).padStart(2,'0');
}
function tick(){
  sisa--;
  const el = document.getElementById('timer');
  el.textContent = fmt(sisa);
  el.className = 'timer' + (sisa <= 60 ? ' danger' : (sisa <= 300 ? ' warn' : ''));
  document.getElementById('inSisa').value = Math.max(0, sisa);
  if (sisa <= 0){ clearInterval(timerId); kirim(); }
}
function kirim(){
  if (submitted) return;
  submitted = true;
  document.getElementById('inSisa').value = Math.max(0, sisa);
  try { sessionStorage.removeItem(KEY); } catch(e){}
  document.getElementById('formUjian').submit();
}
function pilih(h){
  const no = idx + 1;
  answers[no] = h;
  document.getElementById('jawaban_' + no).value = h;
  simpan(); render();
}
function render(){
  const no = idx + 1, s = DATA[idx];
  document.getElementById('qNo').textContent = no;
  document.getElementById('qText').textContent = no + '. ' + s.q;
  const box = document.getElementById('optList');
  box.innerHTML = '';
  for (const h of ['A','B','C','D','E']){
    const label = document.createElement('label');
    label.className = 'opt' + (answers[no] === h ? ' sel' : '');
    const inp = document.createElement('input');
    inp.type = 'radio'; inp.name = 'jw'; inp.checked = answers[no] === h;
    inp.onchange = () => pilih(h);
    const bdg = document.createElement('span'); bdg.className = 'huruf'; bdg.textContent = h;
    const txt = document.createElement('span'); txt.textContent = s.o[h];
    label.append(inp, bdg, txt);
    box.appendChild(label);
  }
  const bf = document.getElementById('btnFlag');
  bf.classList.toggle('on', !!flags[no]);
  bf.textContent = flags[no] ? '🚩 Ragu-Ragu ✓' : '🚩 Ragu-Ragu';
  document.getElementById('btnPrev').disabled = idx === 0;
  document.getElementById('btnNext').disabled = idx === N-1;
  renderGrid(); renderStat();
}
function renderGrid(){
  const g = document.getElementById('grid');
  if (!g.dataset.built){
    for (let i = 1; i <= N; i++){
      const b = document.createElement('button');
      b.type = 'button'; b.textContent = i; b.dataset.n = i;
      b.onclick = () => { idx = i-1; simpan(); render(); };
      g.appendChild(b);
    }
    g.dataset.built = '1';
  }
  [...g.children].forEach(b => {
    const i = +b.dataset.n;
    b.className = (flags[i] ? 'flg' : (answers[i] ? 'ans' : '')) + (i === idx+1 ? ' cur' : '');
  });
}
function renderStat(){
  let isi = 0, rg = 0;
  for (let i = 1; i <= N; i++){ if (answers[i]) isi++; if (flags[i]) rg++; }
  document.getElementById('stat').innerHTML =
    'Terjawab : <b>' + isi + '/' + N + '</b><br>Ragu-ragu : <b>' + rg + '</b><br>Kosong : <b>' + (N-isi) + '</b>';
}

document.getElementById('btnFlag').onclick = () => {
  const no = idx + 1;
  if (flags[no]) delete flags[no]; else flags[no] = true;
  simpan(); render();
};
document.getElementById('btnPrev').onclick = () => { if (idx > 0){ idx--; simpan(); render(); } };
document.getElementById('btnNext').onclick = () => { if (idx < N-1){ idx++; simpan(); render(); } };
document.getElementById('btnFinish').onclick = () => {
  let isi = 0, rg = 0;
  for (let i = 1; i <= N; i++){ if (answers[i]) isi++; if (flags[i]) rg++; }
  document.getElementById('mIsi').textContent = isi;
  document.getElementById('mRg').textContent = rg;
  document.getElementById('mKosong').textContent = N - isi;
  document.getElementById('modal').classList.add('show');
};
document.getElementById('mYes').onclick = kirim;
document.getElementById('mNo').onclick = () => document.getElementById('modal').classList.remove('show');
document.addEventListener('keydown', ev => {
  if (ev.key === 'ArrowRight' && idx < N-1){ idx++; simpan(); render(); }
  else if (ev.key === 'ArrowLeft' && idx > 0){ idx--; simpan(); render(); }
  else if (/^[a-e]$/.test(ev.key.toLowerCase())) pilih(ev.key.toUpperCase());
});

initSession();
document.getElementById('timer').textContent = fmt(sisa);
if (sisa <= 0){ kirim(); } else { timerId = setInterval(tick, 1000); render(); }
</script>
</body>
</html>
<?php
}

/* ================= HALAMAN HASIL ================= */

function halaman_hasil(array $SOAL): void
{
    $nama    = trim((string)($_POST['nama'] ?? 'Peserta'));
    $jwb     = $_POST['jawaban'] ?? [];
    $sisa    = max(0, min(TOTAL_WAKTU, (int)($_POST['sisa_detik'] ?? 0)));
    $dipakai = TOTAL_WAKTU - $sisa;

    $baris = [];
    $total = 0;
    $diisi = 0;

    foreach ($SOAL as $no => $s) {
        $pilih = strtoupper(trim((string)($jwb[$no] ?? '')));
        if (!isset($s['opt'][$pilih])) $pilih = '';
        $poin = $pilih === '' ? 0 : (int)($s['skor'][$pilih] ?? 0);

        $best = 'A';
        foreach ($s['skor'] as $h => $sk) {
            if ($sk > $s['skor'][$best]) $best = $h;
        }
        $total += $poin;
        if ($pilih !== '') $diisi++;
        $baris[$no] = ['pilih' => $pilih, 'poin' => $poin, 'best' => $best, 'bestskor' => $s['skor'][$best]];
    }

    $kosong = TOTAL_SOAL - $diisi;
    $lolos  = $total >= PASSING_GRADE;
    $m      = intdiv($dipakai, 60);
    $d      = $dipakai % 60;
    $rata   = $diisi > 0 ? (int)round($dipakai / $diisi) : 0;

    // rekap per topik
    $topik = [];
    foreach ($SOAL as $no => $s) {
        $t = $s['topik'];
        $topik[$t]['dapat'] = ($topik[$t]['dapat'] ?? 0) + $baris[$no]['poin'];
        $topik[$t]['maks']  = ($topik[$t]['maks'] ?? 0) + 5;
    }
    uasort($topik, fn($a, $b) => ($b['dapat']/$b['maks']) <=> ($a['dapat']/$a['maks']));
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hasil Simulasi — CAT TKP</title>
<style>
*{box-sizing:border-box;margin:0;padding:0}
body{font-family:'Segoe UI',system-ui,sans-serif;background:#eef2f7;color:#22303f}
header{background:linear-gradient(135deg,#0b3d91,#1a5bc4);color:#fff;padding:12px 18px;text-align:center;font-weight:700;position:sticky;top:0;z-index:50}
.wrap{max-width:900px;margin:20px auto;padding:0 14px}
.hero{border-radius:16px;padding:28px;color:#fff;display:flex;justify-content:space-between;align-items:center;gap:16px;flex-wrap:wrap}
.hero.pass{background:linear-gradient(135deg,#15803d,#16a34a)}
.hero.fail{background:linear-gradient(135deg,#b91c1c,#dc2626)}
.nm{font-size:14px;opacity:.9}.lbl{font-size:12px;letter-spacing:2px;opacity:.8;margin-top:8px}
.sc{font-size:52px;font-weight:800;line-height:1.1}.sc small{font-size:20px;font-weight:600;opacity:.85}
.pg{font-size:13px;opacity:.9;margin-top:4px}
.badge{font-size:22px;font-weight:800;border:3px solid #fff;border-radius:14px;padding:14px 22px;transform:rotate(3deg);background:rgba(255,255,255,.14)}
.cards{display:grid;grid-template-columns:repeat(4,1fr);gap:12px;margin:18px 0}
.cd{background:#fff;border-radius:12px;padding:16px;text-align:center;box-shadow:0 1px 5px rgba(16,42,90,.08)}
.cd b{display:block;font-size:22px;color:#0b3d91}.cd span{font-size:12px;color:#64748b}
@media(max-width:640px){.cards{grid-template-columns:repeat(2,1fr)}}
.panel{background:#fff;border-radius:14px;padding:20px;box-shadow:0 1px 5px rgba(16,42,90,.08);margin-bottom:18px}
.panel h2{font-size:16px;color:#0b3d91;margin-bottom:14px}
.trow{display:grid;grid-template-columns:220px 1fr 60px;gap:10px;align-items:center;margin-bottom:10px;font-size:13px}
@media(max-width:640px){.trow{grid-template-columns:1fr 60px}.tname{grid-column:1/-1}}
.tbar{background:#e2e8f0;border-radius:99px;height:12px;overflow:hidden}
.tbar i{display:block;height:100%;background:linear-gradient(90deg,#0b3d91,#3b82f6);border-radius:99px}
.tval{text-align:right;font-weight:700;color:#0b3d91}
details.rv{border:1px solid #e2e8f0;border-radius:10px;margin-bottom:8px;overflow:hidden}
details.rv summary{display:flex;align-items:center;gap:10px;padding:11px 14px;cursor:pointer;font-size:13.5px;background:#f8fafc;list-style:none}
details.rv summary::-webkit-details-marker{display:none}
.no{min-width:30px;height:30px;border-radius:8px;background:#0b3d91;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:12px}
.tp{color:#64748b;font-size:12px}
.pn{margin-left:auto;font-weight:800;padding:4px 10px;border-radius:99px;font-size:12px}
.p5{background:#dcfce7;color:#15803d}.px{background:#fef9c3;color:#a16207}.p0{background:#fee2e2;color:#b91c1c}
.rvb{padding:14px;font-size:13.5px;line-height:1.7;border-top:1px solid #e2e8f0}
.rvo{border:1.5px solid #e2e8f0;border-radius:9px;padding:9px 12px;margin-top:7px;display:flex;gap:8px;flex-wrap:wrap}
.rvo.best{border-color:#16a34a;background:#f0fdf4}
.rvo.mine{border-color:#f59e0b;background:#fffbeb}
.rvo.best.mine{border-color:#16a34a;background:#dcfce7}
.pts{margin-left:auto;font-weight:700;color:#475569;font-size:12px}
.again{display:block;text-align:center;background:#0b3d91;color:#fff;padding:14px;border-radius:12px;text-decoration:none;font-weight:700;margin-bottom:30px}
.again:hover{background:#092f70}
.note{font-size:12.5px;color:#64748b;line-height:1.7}
</style>
</head>
<body>
<header>📊 HASIL SIMULASI CAT CPNS — PRETEST TKP</header>
<div class="wrap">

  <div class="hero <?= $lolos ? 'pass' : 'fail' ?>">
    <div>
      <div class="nm">Peserta: <b><?= e($nama) ?></b></div>
      <div class="lbl">SKOR AKHIR TKP</div>
      <div class="sc"><?= $total ?><small> / <?= SKOR_MAKS ?></small></div>
      <div class="pg">Passing Grade: <?= PASSING_GRADE ?></div>
    </div>
    <div class="badge"><?= $lolos ? 'LOLOS ✔' : 'TIDAK LOLOS ✘' ?></div>
  </div>

  <div class="cards">
    <div class="cd"><b><?= $diisi ?></b><span>Soal Terisi</span></div>
    <div class="cd"><b><?= $kosong ?></b><span>Soal Kosong</span></div>
    <div class="cd"><b><?= $m ?>m <?= $d ?>d</b><span>Waktu Dipakai</span></div>
    <div class="cd"><b><?= $rata ?>d</b><span>Rata-rata / Soal Terisi</span></div>
  </div>

  <?php if ($rata > 54 && $diisi > 0): ?>
  <div class="panel"><p class="note">💡 <b>Evaluasi waktu:</b> rata-rata Anda <?= $rata ?> detik/soal — di atas golden rule <b>54 detik</b>. Latih triase: soal yang memakan >1,5 menit harus langsung ditandai ragu-ragu dan dilewati.</p></div>
  <?php endif; ?>

  <div class="panel">
    <h2>📈 Kinerja per Topik</h2>
    <?php foreach ($topik as $t => $v): $pct = (int)round($v['dapat'] / $v['maks'] * 100); ?>
    <div class="trow">
      <div class="tname"><?= e($t) ?></div>
      <div class="tbar"><i style="width:<?= $pct ?>%"></i></div>
      <div class="tval"><?= $v['dapat'] ?>/<?= $v['maks'] ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="panel">
    <h2>🔍 Pembahasan per Soal</h2>
    <?php foreach ($SOAL as $no => $s): $r = $baris[$no]; ?>
    <details class="rv">
      <summary>
        <span class="no"><?= $no ?></span>
        <span><?= e($s['topik']) ?></span>
        <span class="tp"><?= $r['pilih'] === '' ? '— tidak dijawab —' : 'Jawaban: ' . $r['pilih'] ?></span>
        <span class="pn <?= $r['poin'] === 5 ? 'p5' : ($r['poin'] === 0 ? 'p0' : 'px') ?>"><?= $r['poin'] ?> poin</span>
      </summary>
      <div class="rvb">
        <p><?= e($s['q']) ?></p>
        <?php foreach ($s['opt'] as $h => $t):
            $mine = $r['pilih'] === $h;
            $best = $r['best'] === $h;
        ?>
        <div class="rvo<?= $mine && $best ? ' mine best' : ($best ? ' best' : ($mine ? ' mine' : '')) ?>">
          <b><?= $h ?>.</b> <?= e($t) ?>
          <span class="pts"><?= $s['skor'][$h] ?> poin<?= $best ? ' ⭐ Terbaik' : '' ?><?= $mine ? ' ➤ Pilihanmu' : '' ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </details>
    <?php endforeach; ?>
  </div>

  <a class="again" href="<?= e($_SERVER['PHP_SELF'] ?? '') ?>">🔄 ULANGI SIMULASI</a>
</div>
</body>
</html>
<?php
}
