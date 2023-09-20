-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 03:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `127_zhaqian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approved` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `approved`) VALUES
(1, 'admin', 'bpsdmp', 1),
(21, 'kura', 'kuri', 1),
(22, 'fadillacantiksekali', '12345', 1),
(24, 'alfa', '22', 1),
(25, 'admin4', '1234', 1),
(27, 'admin5', '455', 1),
(28, 'astra2', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `created_at`) VALUES
(10, 'Alfa', 'zhaqianroufa@gmail.com', 'Alhamdulillah, saya sangat bersyukur menjadi bagian dari Pondok Pesantren Mahasiswa Syafiurrahman di Jember Kota. Di sini, saya merasakan atmosfer ilmiah yang sangat mendukung untuk pengembangan diri dan keagamaan. Para ustadz dan ustadzah sangat peduli dan selalu memberikan bimbingan yang berharga. Fasilitas dan lingkungan yang nyaman juga membuat proses belajar mengajar menjadi lebih menyenangkan. Semoga Pondok Pesantren Mahasiswa Syafiurrahman terus berkembang dan memberikan manfaat yang besar bagi semua santri.', '2023-09-19 14:26:13'),
(11, 'Zopan', 'jopansudahsolat@gmail.com', 'Tinggal di Pondok Pesantren Mahasiswa Syafiurrahman di Jember Kota adalah pengalaman yang luar biasa. Saya merasa dikelilingi oleh komunitas yang penuh semangat dalam mengejar ilmu dan ketakwaan. Selain itu, suasana kekeluargaan di sini membuat saya merasa seperti di rumah sendiri. Terima kasih kepada para ustadz dan ustadzah yang selalu memberikan ilmu dan bimbingan dengan penuh kasih sayang. Saya yakin, di sini adalah tempat yang tepat untuk mengasah potensi dan memperkuat iman.', '2023-09-19 14:27:24'),
(12, 'Aqila', 'cangkangkeong@gmail.com', 'Tinggal di Pondok Pesantren Mahasiswa Syafiurrahman di Jember Kota adalah suatu keberkahan bagi saya. Saya merasa dikelilingi oleh komunitas yang penuh semangat dalam mengejar ilmu dan ketakwaan. Selain itu, suasana kekeluargaan di sini membuat saya merasa seperti di rumah sendiri. Terima kasih kepada para ustadzah yang selalu memberikan ilmu dan bimbingan dengan penuh kasih sayang. Saya yakin, di sini adalah tempat yang tepat untuk mengasah potensi dan memperkuat iman', '2023-09-19 14:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `deskripsi`, `tanggal`, `foto`) VALUES
(21, 'MMA (Meet Mania of Agrabah) - Hari Raya Qurban di PPM', 'Pada suatu hari, dimana setiap umat yang ber-keyakinan muslim sedang memiliki suatu acara  besar-besaran. Yang mana pada hari itu, memiliki beberapa keutamaan yang sangat luar biasa. Yaitu  dengan adanya seorang yang ikut berusaha untuk mendapatkan hewan qurban, maka dirinya akan  mendapatkan pahala yang lebih baik bila dibandingkan dengan adanya seorang yang ikut dalam  peperangan dizaman nabi dahulu ia pulang dalam keadaan tinggal Namanya saja atau bisa diartikan  bahwasanya seorang tersebut wafat dalam peperangan itu. \r\n\r\nHari yang dimaksud itu tepat pada tanggal 10 dzulhijah pada tanggalan hijriah. Yang mana  pada tanggal itu biasa disebut oleh kebanyakan umat dengan sebutan Hari Raya Idul Adha atau juga  biasa disebutkan oleh kebanyakan suku jawa dengan sebutan Riyoyo Besar. Idul adha ini memiliki  sejarah singkat yaitu Ketika Nabi Ibrahim ditugaskan oleh allah pergi jauh meninggalkan istrinya dan  anaknya pada gurun pasir antara bukit sofa dan marwa. Singkat cerita banyak kisah yang telah mereka  lalui dan sampailah pada waktu yang berbahagia bagi keluarga nabi Ibrahim itu. Yang mana setelah  sekian lamanya tak bertemu dengan anak dan istrinya. Pada saat itu mereka akhirnya bertemu juga.  Tak lama, selang beberapa hari dari bertemunya mereka bertiga, Nabi Ibrahim memiliki mimpi untuk  menyembelih anaknya itu sampai diriwayatkan 3 kali mimpian. Lalu Ketika memang dikonfirmasi oleh  bapak kepada anakmya, Tak disangka sangka ternyata jawaban sang anak dengan ketulusan hatinya  mengucapkan bahwa “iya sudah pak, jika memang itu perintah yang allah berikan kepada mu, maka  laksanakanlah.” Lalu benar, dilasanakannya oleh bapak itu untuk menyembelih anaknya. Akan tetapi  karena allah benar-benar tidak tidur, maka si-anak itu ditukarkan dengan domba. Karena sebab itulah setiap tanggal 10 dzulhijah, untuk dapat memeringati hari besar ini yang mana hal ini juga termasuk  dalam melaksanakannya sunnah rasul untuk dapat menyembelih hewan qurban.\r\n\r\n\r\nAlhamdulillah robbal alamin di pondok pesantren mahasiswa ini dapat menyembelih 6 sapi  dengan memiliki tubuh yang lumayan memuaskan yang mana juga merupakan suatu indicator dari  daging sapi yang bobot sangat banyak. Bahkan dikabarkan sampai almari es pada asrama telah  terpenuhkan dengan adanya daging. Maka dari itu dari mahasiswa ini sendiri memiliki inisiatif untuk diadakan acara untuk dapat membarokahkan daging tersebut. \r\n\r\n\r\nDikarenakan hari raya qurban ini merupakan acara tahunan, maka adanya banyak daging  pada lemari es penyimpanan daging tersebut selalu penuh. Maka setiap tahunnya pun juga selalu  diadakannya acara pembarokahan daging ini. Pada mulanya dikenal dengan acara MNM (Meet and  Might). Yang mana setiap tahunnya berbeda beda nama dari acara ini.  \r\n\r\n\r\nPada kesempatan kali ini acara meet and might dilakukan dengan judul acara MMA (Meet  Mania of Agrabah). Dengan pengertian dari meet sendiri dalam Bahasa inggris diberi makna sebagai  suatu pertemuan. Mania dalam bahasa menggambarkan sebagai suasana hati yang sangat riang dan  bersemangat. Adapun pada suku kata yang ketiga yaitu pada suku kata Agrabah yang terinspirasi  dari film aladin yang bertemakan ke-arab araban. Maka dari itu tema dari suasana yang ada di  ruangan acara ini dibentuk sedemikian kreatif dan bagusnya menggambarkan tentang tema ke-arab  araban. \r\n\r\n', '2023-07-13', 'mma.jpg'),
(22, 'Bersih Bersih Pasar Tanjung bertajuk Tangan Hebat 2022', 'Jember (12/12) Pondok Pesantren Mahasiswa (PPM) Syafi’ur Rohman, salah satu ponpes binaan DPD LDII Kab Jember, mengadakan kegiatan Tangan Hebat dengan tema Pasar Sehat Ekonomi Kuat pada hari minggu, 18 Des 2022 di Pasar Tanjung Jember. Gerakan bersih-bersih pasar ini di hadiri oleh kepala UPT Pasar Tanjung, Dinas Perindustrian dan Perdagangan, Polsek Kaliwates, Danramil Kaliwates, Camat Kaliwates dan di ikuti oleh 350 peserta dari unsur masyarakat, para generasi muda serta santri pondok.\r\n\r\n	Tangan hebat yang dilakukan di Pasar Tanjung kemarin merupakan kegiatan peduli lingkungan dari beberapa titik tertentu yang menjadi sorotan public tentang permasalahan lingkungan yang ada di kalangan masyarakat. Secara Geografis, letak dari Pasar Tanjung ini berada pada pusat jalur perindustrian atau perekonomian di Jember. Maka, tak dapat dipungkiri bahwa terdapat banyak warga Jember yang berkumpul di daerah Pasar Tanjung untuk memenuhi kebutuhan hidup sehari-hari.           \r\n\r\n   	Dengan adanya kegiatan Tangan Hebat yang dilakukan oleh sekelompok pemuda LDII dari Pondok Pesantren Mahasiswa Syafiur Rohman (PPMSR) Jember, warga sekitar sangat mengapresiasi kegiatan tersebut. Karena, pada umumnya, siapa sih yang mau membersihkan area Pasar Tanjung yang memang memiliki pencitraan perihal sampah dan kebersihan disana? Kemungkinan besar tidak ada, Karena selain tempatnya yang jarang bersih, suplai bahan untuk menimbulkan tumpukan sampah pun tak dapat terhenti.\r\n\r\n	Kegiatan Tangan Hebat dilaksanakan dengan tujuan supaya menjadikan setiap warga negara Indonesia menjadi lebih sadar akan perihal kebersihan lingkunagan sekitar, dengan dimulai dari Generasi Penerus warga LDII yang harapannya dengan adanya contoh dari warga LDII, masyarakat sekitar pun juga semakin banyak yang mau untuk turut ikut andil dalam kegiatan tersebut.', '2022-12-20', 'tangan-hebat.jpg'),
(23, 'Kegiatan Positif Akhir Tahun Remaja LDII IM FEST', 'I’M FEST ini merupakan kegiatan yang hanya dihadiri oleh seluruh santri PPMSR saja. Karena acara ini merupakan kegiatan intern dari Ponpes tersebut. Menurut hasil wawancara dari beberapa santri dan pengurus pondok PPMSR, kegiatan ini diadakan karena untuk meramut atau mengurusi seluruh santri pondok agar tidak terjadinya keluyuran kesana-kemari yang tidak bermanfaat dan bahkan kegiatan ini diharapkan dapat menghindarkan para generasi muda dari segala bentuk maraknya pergaulan bebas diluaran sana.\r\n\r\n	Kegiatan dari acara  I’M FEST ini sangat memberikan kesan yang positif dari berbagai kalangan remaja maupun dewasa. Mengapa? karena isi dari kegiatan ini memiliki kesan yang bervariatif. Seperti, adanya lomba-lomba yang dapat menimbulkan keseruan antar pemain maupun penonton, ada kegiatan yang bersifat formal yaitu mengaji, dan juga ada kegiatan yang sangat anggun dan menawan. yaitu Mr. Shorban. Kegiatan ini merupakan kegiatan yang sebenarnya memiliki isi atau alur sebagaimana fashion show dari santri laki-laki PPMSR.\r\nI’M FEST ini merupakan kegiatan yang hanya dihadiri oleh seluruh santri PPMSR saja. Karena acara ini merupakan kegiatan intern dari Ponpes tersebut. Menurut hasil wawancara dari beberapa santri dan pengurus pondok PPMSR, kegiatan ini diadakan karena untuk meramut atau mengurusi seluruh santri pondok agar tidak terjadinya keluyuran kesana-kemari yang tidak bermanfaat dan bahkan kegiatan ini diharapkan dapat menghindarkan para generasi muda dari segala bentuk maraknya pergaulan bebas diluaran sana.\r\nKegiatan dari acara  I’M FEST ini sangat memberikan kesan yang positif dari berbagai kalangan remaja maupun dewasa. Mengapa? karena isi dari kegiatan ini memiliki kesan yang bervariatif. Seperti, adanya lomba-lomba yang dapat menimbulkan keseruan antar pemain maupun penonton, ada kegiatan yang bersifat formal yaitu mengaji, dan juga ada kegiatan yang sangat anggun dan menawan. yaitu Mr. Shorban. Kegiatan ini merupakan kegiatan yang sebenarnya memiliki isi atau alur sebagaimana fashion show dari santri laki-laki PPMSR.\r\n', '2023-01-03', 'fest.jpg'),
(24, 'Mahasantri PPM SR Ikut Andil dalam Gelaran Tennis Eksekutif (TEG) Nasional LDII di Jember', 'Pada tanggal 20 Mei 2023, Bupati Jember Hendy Siswanto membuka acara Tennis Eksekutif Games (TEG) Nasional Lembaga Dakwah Islam Indonesia (LDII) di lapangan Gor PKPSO Kaliwates, Jember.\r\n\r\nBupati Jember, Ir. H. Hendy Siswanto, MPU secara resmi memulai Turnamen Eksekutif Games Tennis Nasional LDII (20/5). Dalam pidatonya, Hendy mengungkapkan penghargaan tinggi kepada LDII atas peran aktifnya dalam mempromosikan Jember melalui acara Tennis Nasional yang diikuti oleh 11 provinsi. \"Sebagai Bupati Jember, tugas saya adalah memperkenalkan wisata Jember, budaya Jember, kuliner, dan UMKM Jember melalui acara seperti ini,\" jelas Hendy.\r\n\r\n\r\n\"Saya sangat senang LDII meminta Piala Bupati Jember dalam acara TEG Nasional ini. LDII adalah organisasi yang memiliki hak yang sama dengan organisasi lain. Membangun persaudaraan dan mempererat tali silaturahmi sangat penting,\" ungkap Hendy.\r\n\r\n\r\nHendy juga mengumumkan bahwa pada tanggal 4 hingga 6 Agustus mendatang, Jember akan mengadakan acara internasional yaitu Jember Fashion Carnival (JFC). Selain itu, pada bulan Oktober, akan ada Festival Marching Band Internasional. \"Jadi, nantinya Bapak dan Ibu harus datang lagi ke Jember,\" harap Hendy.\r\n\r\n\r\nHendy menjelaskan bahwa dengan adanya acara-acara seperti itu, harapannya semua potensi yang ada di Jember akan dikenal, dan dengan kedatangan para peserta di Jember, hal tersebut akan meningkatkan kesejahteraan masyarakat. Mereka tidak hanya menikmati keindahan wisata Jember, tetapi juga berkontribusi dalam perekonomian dengan menginap di hotel, berbelanja di UMKM Jember, dan sebagainya.\r\n\r\n\r\n\"Saya akan memberikan bantuan dan fasilitas dalam acara TEG Nasional LDII ini. Saya juga akan mendorong semua organisasi untuk aktif berkegiatan di Jember, baik di tingkat kabupaten, provinsi, nasional, maupun internasional,\" kata Hendy.\r\n\r\n\r\nSementara itu, Ahmad Malik Afandi sebagai tuan rumah melaporkan kepada bupati Jember bahwa TEG Nasional LDII yang diselenggarakan di Jember ini adalah yang ke-16. \"Meskipun belum diikuti oleh seluruh provinsi, peserta dari 11 provinsi ini menjadi kesempatan untuk menjalin silaturahmi bagi warga LDII,\" ujar Malik.\r\n\r\nMalik melaporkan bahwa 11 provinsi tersebut mewakili seluruh wilayah Indonesia, antara lain NTB, Sulsel, Bali, Banten, Kalimantan Utara, Kalimantan Selatan, DKI Jakarta, Jawa Barat, Jawa Tengah, dan Jawa Timur. Terdapat 154 peserta yang akan bertanding selama dua hari di lapangan Tennis yang berkualitas nasional milik Pemerintah Kabupaten Jember. \"Tugas LDII sebagai organisasi adalah berperan aktif dan memberikan kontribusi yang baik\".', '2023-05-20', 'teg.jpg'),
(25, '“Selembar Kertas”  (Temu Wali Santri) 2023', 'Pada tanggal 27 Mei 2023, Pondok Pesantren Mahasiswa Syafi’ur Rohman mengadakan pertemuan wali santri atau bisa disebut dengan TWS (Temu Wali Santri). Kegiatan ini merupakan kali kedua diadakan dilokasi yang sama. TWS tahun ini bertemakan “Selembar Kertas” yang merupakan singkatan dari “Sehari Silaturrohim Bareng Keluarga Santri”\r\n\r\n\r\nKegiatan Temu Wali Santri ini dihadiri oleh ketua Pondok Pesantren Mahasiswa Syafi’ur Rohman yaitu Bapak Dr. apt. Dian Agung Pangaribowo, M.Farm., Bapak Imam Daerah Jember Kota yaitu Bapak Drs. KH. Budiono, M.Si., dan dewan guru yang mengajar di Pondok. terdapat kurang lebih 100 orangtua wali santri yang menghadiri acara ini. \r\nTujuan diadakan kegiatan ini utamanya yaitu untuk mengevaluasi hasil kegiatan belajar mengajar yang telah dilaksanakan dalam satu tahun terakhir, ketertiban santri dalam Pondok dan untuk menjalin silaturrahim antara warga Pondok Pesantren Mahasiswa Syafi’ur Rohman dengan keluarga para santri. \r\n\r\n\r\nTidak hanya itu, di dalamnya terdapat agenda makan bersama, penampilan Qori’ dari salah satu santri yang bernama Yanuar Adi Nandra, penampilan silat ASAD oleh Ilham Bintang dan Farkhan Rama.\r\n\r\n', '2023-06-07', 'sk.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
