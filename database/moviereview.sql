-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 03:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `foto_berita` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita`, `foto_berita`, `id_user`, `tgl_upload`) VALUES
(3, 'Drakor Night Has Come', 'Drama Korea \"Night Has Come\" dijadwalkan mulai tayang 4 Desember 2023. Drakor bergenre youth thriller ini akan dibintangi Lee Jae In, Kim Woo Seok, Choi Ye Bin, Cha Woo Min, Ahn Ji Ho, Jung So Ri dan masih banyak lagi. Melansir laman Asian Wiki, drakor \"Night Has Come\" menceritakan sekelompok siswa kelas 2 SMA yang terjebak dan terpaksa untuk ikut berpartisipasi dalam sebuah permainan mafia misterius dan mematikan. Para siswa SMA di suatu sekolah mendapat pesan misterius berisi ajakan untuk bermain gim. Kemudian akan muncul sebuah polling pengumpulan suara di mana para siswa diharuskan memilih siapakah mafia sebenarnya dalam game tersebut. Orang yang memperoleh suara terbanyak yang dicurigai sebagai mafia akan terbunuh. Jika mafia terebut gagal untuk dibunuh, maka seluruh siswa lah yang justru akan terbunuh oleh sang mafia. Para pemainnya diminta untuk mencari tahu identitas asli seorang mafia, melakukan vote dan mengeliminasi (membunuh) seseorang sampai menemukan identitas mafia asli. Hal tersebut membuat mereka harus memutuskan bertahan hidup dan menyelamatkan diri dan terbebas dari tuduhan yang dapat merenggut nyawa mereka hingga permainan berakhir. Dapatkah mereka bertahan dan bebas dari game tersebut, dan bisakah mereka menemukan mafia yang asli? Serial \"Night Has Come\"  akan tayang dalam 12 episode dengan durasi 30 menit di setiap episodenya. Serial ini dapat disaksikan para pecinta K-drama melalui berbagai laman layanan streaming seperti Viu dan Video. Drakor menegangkan ini disutradarai oleh Lim Dae Woong. Lim Dae Woong sukses produseri banyak drama series hingga perfilman, seperti Horror Stories (2012), House of the Disappeared (2017)', 'Cuplikan layar 2023-12-12 201047.jpg', 1, '2023-12-13 14:29:02'),
(6, 'Kembali ke Dunia Misterius, Alice in Borderland Sambut Musim Kedua', 'Penggemar seri fiksi ilmiah populer, \"Alice in Borderland,\" dapat bersiap-siap untuk kembali ke dunia misterius yang penuh teka-teki dan tantangan. Setelah kesuksesan luar biasa musim pertamanya, Netflix mengumumkan bahwa musim kedua dari seri ini sedang dalam pengembangan. \"Alice in Borderland\" merupakan adaptasi dari manga berjudul sama karya Haro Aso. Seri ini mengikuti petualangan tiga teman, Arisu, Chishiya, dan Karube, yang terperangkap di dunia paralel yang aneh dan mematikan. Mereka harus menghadapi berbagai macam tantangan hidup-mati untuk bertahan dan mencari jalan pulang. Musim kedua dijanjikan akan memberikan lebih banyak misteri, aksi, dan plot twist yang menegangkan. Karakter-karakter utama akan dihadapkan pada ujian baru yang menguji kemampuan strategi dan keberanian mereka. Dengan dunia paralel yang terus berubah, para penonton dijamin akan disuguhkan dengan alur cerita yang penuh ketegangan dan kejutan. Pencipta dan produser eksekutif, Shinsuke Sato, berbagi antusiasmenya terkait pengembangan musim kedua ini. Ia berjanji untuk memberikan pengalaman yang lebih mendalam dan memuaskan kepada penggemar setia dan juga menarik minat penonton baru. Para penggemar \"Alice in Borderland\" dapat mengharapkan musim kedua ini akan memberikan jawaban atas sejumlah pertanyaan yang tertinggal dari musim sebelumnya sambil tetap mempertahankan daya tarik unik dan atmosfer misterius yang menjadi ciri khasnya. Meskipun tanggal rilis resmi belum diumumkan, kepastian musim kedua ini telah memicu antusiasme yang tinggi di kalangan penggemar setia seri ini.', 'aib.jpeg', 1, '2023-12-13 21:15:32'),
(8, 'Oppenheimer, Penemu Bom Atom yang Menentang Perang Nuklir', 'J. Robert Oppenheimer adalah seorang fisikawan Amerika yang memimpin Proyek Manhattan, proyek pengembangan bom atom selama Perang Dunia II. Ia dikenal sebagai \"Bapak Bom Atom\" karena peran pentingnya dalam proyek tersebut. Oppenheimer lahir di New York City pada tahun 1904. Ia adalah seorang anak jenius yang menunjukkan minatnya pada sains sejak usia dini. Ia belajar di Universitas Harvard dan Universitas Cambridge, dan kemudian menjadi profesor fisika di Universitas California, Berkeley. Oppenheimer adalah seorang fisikawan yang sangat berbakat. Ia memiliki pemahaman yang mendalam tentang teori kuantum, yang merupakan dasar dari fisika nuklir. Ia juga memiliki kemampuan kepemimpinan yang luar biasa, yang membuatnya menjadi pemimpin yang efektif untuk Proyek Manhattan. Proyek Manhattan berhasil mengembangkan bom atom pada tahun 1945. Bom atom tersebut digunakan untuk menjatuhkan dua kota di Jepang, Hiroshima dan Nagasaki, pada akhir perang. Bom atom tersebut menyebabkan kematian ratusan ribu orang dan menimbulkan kerusakan yang luas. Oppenheimer menyesali dampak bom atom tersebut. Ia menjadi seorang penentang perang nuklir dan menyerukan larangan penggunaan senjata nuklir. Ia juga menjadi salah satu pendiri Pugwash Conferences on Science and World Affairs, sebuah organisasi yang mempromosikan perdamaian melalui sains. Oppenheimer meninggal dunia pada tahun 1967. Ia meninggalkan warisan yang kompleks. Ia adalah seorang jenius yang brilian, tetapi juga seorang pria yang bertanggung jawab atas pengembangan senjata yang sangat destruktif. Pada tahun 2023, film biografi Oppenheimer yang disutradarai oleh Christopher Nolan dirilis. Film tersebut dibintangi oleh Cillian Murphy sebagai Oppenheimer. Film tersebut mendapat pujian dari para kritikus dan meraih delapan nominasi Golden Globe Awards, termasuk Film Terbaik, Sutradara Terbaik, dan Aktor Terbaik untuk Murphy. Film Oppenheimer telah membantu meningkatkan kesadaran publik tentang kehidupan dan karya Oppenheimer. Film tersebut memberikan gambaran yang kompleks tentang seorang pria yang luar biasa, tetapi juga seorang pria yang berurusan dengan dilema moral yang berat.', 'opp.jpg', 1, '2023-12-14 10:37:08'),
(9, 'Dark: Serial Fiksi Ilmiah Jerman yang Menggugah', 'Dark adalah serial fiksi ilmiah Jerman yang tayang di Netflix dari tahun 2017 hingga 2020. Serial ini berfokus pada sekelompok orang di kota Winden, Jerman, yang terjerat dalam misteri perjalanan waktu. Serial ini berawal dengan hilangnya dua anak laki-laki di Winden. Penyelidikan yang dilakukan oleh polisi dan warga kota menemukan bahwa hilangnya anak-anak tersebut terkait dengan sebuah portal waktu yang terletak di bawah pembangkit listrik tenaga nuklir di kota tersebut. Portal waktu tersebut menghubungkan tiga era berbeda, yaitu tahun 1953, 1986, dan 2019. Para karakter dalam serial ini pun harus berusaha untuk memecahkan misteri portal waktu tersebut dan mencegah bencana yang akan terjadi. Dark telah mendapat pujian dari para kritikus dan penonton. Serial ini disebut-sebut sebagai salah satu serial fiksi ilmiah terbaik yang pernah dibuat. Dark juga telah memenangkan berbagai penghargaan, termasuk Golden Globe Award untuk Serial TV Terbaik – Drama pada tahun 2020. Salah satu hal yang membuat Dark menarik adalah premisnya yang unik. Serial ini menggabungkan unsur fiksi ilmiah, misteri, dan drama keluarga. Dark juga memiliki karakter yang kompleks dan kisah yang menegangkan. Selain itu, Dark juga memiliki visual yang memukau. Serial ini menggunakan teknik sinematografi yang inovatif untuk menggambarkan perjalanan waktu. Dark telah menjadi salah satu serial Netflix yang paling populer di dunia. Serial ini telah ditonton oleh lebih dari 14 juta orang di seluruh dunia. Dark juga telah menjadi inspirasi bagi berbagai serial fiksi ilmiah lainnya. Dark adalah serial yang wajib ditonton bagi penggemar fiksi ilmiah. Serial ini akan membuat Anda berpikir keras dan merenungkan makna hidup.', 'dark.jpg', 1, '2023-12-14 10:38:52'),
(10, 'Film Horor Swedia \"The Conference\" Raih Pujian Kritikus', 'Film horor asal Swedia, \"The Conference\", yang dirilis di Netflix pada 13 Oktober 2023 lalu, berhasil meraih pujian dari para kritikus. Film ini disutradarai oleh Patrik Eklund dan dibintangi oleh Katia Winter, Adam Lundgren, dan Eva Melander.\r\n\"The Conference\" bercerita tentang sekelompok karyawan yang pergi ke sebuah pulau terpencil untuk menghadiri konferensi pembentukan tim. Namun, konferensi tersebut berubah menjadi malapetaka saat tuduhan korupsi mulai beredar luas. Seorang pembunuh psikopat kemudian mulai memburu para karyawan tersebut satu per satu. Film ini mendapat pujian dari para kritikus karena adegan-adegannya yang menegangkan dan brutal. Selain itu, film ini juga dinilai berhasil mengeksplorasi tema-tema seperti korupsi, balas dendam, dan ketakutan. \"The Conference adalah film horor yang cerdas dan menghibur,\" tulis kritikus film dari The Hollywood Reporter. \"Film ini berhasil membuat penontonnya tegang dan ketakutan dari awal hingga akhir. \"The Conference adalah salah satu film horor terbaik yang saya tonton tahun ini,\" tulis kritikus film dari Variety. \"Film ini memiliki adegan-adegan yang sangat sadis dan brutal, tetapi juga memiliki cerita yang menarik dan mencekam.\"\"The Conference adalah film yang wajib ditonton oleh para penggemar film horor,\" tulis kritikus film dari The New York Times. \"Film ini akan membuat Anda terhibur dan ketakutan sekaligus.\" Di Indonesia, \"The Conference\" juga mendapat sambutan positif dari para penonton. Film ini berhasil menduduki peringkat pertama di Netflix Indonesia selama beberapa hari setelah dirilis.\"Film ini seru banget! Adegan-adegannya menegangkan dan bikin jantung berdebar,\" tulis salah seorang penonton di Twitter. \"Pemeran-pemainnya juga aktingnya bagus,\" tulis penonton lainnya.\"The Conference adalah film horor yang wajib ditonton,\" tulis penonton lainnya. \"Film ini akan membuat Anda terhibur dan ketakutan sekaligus.\"', 'Cuplikan layar 2023-12-14 141507.jpg', 1, '2023-12-14 14:55:49'),
(11, 'Maggie dan Negan Kembali Berpetualang di New York City dalam The Walking Dead: Dead City', 'Serial televisi The Walking Dead: Dead City telah resmi berakhir pada tanggal 15 Desember 2023. Serial ini mengisahkan perjalanan Maggie (Lauren Cohan) dan Negan (Jeffrey Dean Morgan) ke New York City, Amerika Serikat. Serial ini dimulai dengan Maggie dan Negan yang masih dalam perjalanan menuju Alexandria. Mereka berdua masih berjuang untuk mengatasi perbedaan masa lalu mereka. Namun, mereka harus bersatu untuk menghadapi ancaman baru yang datang dari New York City. Di New York City, Maggie dan Negan menemukan sebuah komunitas yang dipimpin oleh seorang wanita bernama Pamela Milton (Carrie Coon). Pamela adalah seorang wanita yang ambisius dan kejam. Ia ingin menjadikan New York City sebagai pusat kekuasaannya. Maggie dan Negan harus bekerja sama untuk menghadapi Pamela dan pengikutnya. Mereka juga harus berhadapan dengan para zombie yang masih berkeliaran di kota tersebut. Serial ini mendapat sambutan positif dari para kritikus dan penggemar. Serial ini dinilai sebagai salah satu spin-off terbaik dari The Walking Dead. Berikut adalah beberapa hal yang menarik dari serial The Walking Dead: Dead City: Perpaduan antara aksi, drama, dan horor yang seimbang. Serial ini menyajikan adegan-adegan aksi yang seru, drama yang menyentuh, dan horor yang menegangkan. Karakter yang kuat dan kompleks. Maggie dan Negan adalah dua karakter yang kompleks dan menarik. Keduanya memiliki masa lalu yang kelam, tetapi mereka juga memiliki sisi yang baik. Setting yang unik. Serial ini mengambil setting di New York City, Amerika Serikat. Kota yang ikonik ini menjadi latar belakang yang menarik untuk cerita serial ini. Secara keseluruhan, The Walking Dead: Dead City adalah serial yang menghibur dan memuaskan. Serial ini merupakan tontonan yang wajib bagi para penggemar The Walking Dead.', 'twd-dead-city.jpg', 1, '2023-12-15 20:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(10) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `tahun` int(10) NOT NULL,
  `sinopsis` text NOT NULL,
  `foto_film` varchar(100) NOT NULL,
  `id_kategori` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `tahun`, `sinopsis`, `foto_film`, `id_kategori`) VALUES
(31, 'Alice in Borderland', 2019, '\"Alice in Borderland\" mengisahkan Ryohei Arisu dan teman-temannya yang terperangkap di dunia paralel misterius, Borderland, setelah peristiwa aneh di Shibuya, Tokyo. Dalam Borderland, mereka harus bertahan hidup melalui permainan mematikan yang diperintah oleh Game Master. Tantangan-tantangan ini menguji tidak hanya keterampilan fisik, tetapi juga kecerdasan dan keberanian pemain.\r\n\r\nArisu, awalnya seorang pemuda tidak ambisius, bertransformasi menjadi pemimpin yang berani dan cerdas dalam upaya mereka untuk keluar dari Borderland. Mereka menjalin persekutuan dengan pemain lain, menghadapi ancaman, dan mengungkap misteri di balik permainan ini. Setiap kemenangan membawa mereka lebih dekat pada kebenaran yang mengejutkan tentang Borderland dan Game Master.\r\n\r\nDengan teka-teki yang membingungkan dan ketegangan yang memuncak, para pemain harus mengatasi ketakutan mereka sendiri dan menentukan nasib mereka dalam dunia yang penuh bahaya. \"Alice in Borderland\" adalah perjalanan penuh tantangan dan pengorbanan, menguji daya tahan dan tekad karakter utama dalam menghadapi misteri yang membingungkan dan seram.', 'Cuplikan layar 2023-12-13 171924.jpg', 21),
(32, 'Openheimer', 2023, 'Oppenheimer adalah film biografi sejarah yang diarahkan oleh Christopher Nolan dan dibintangi oleh Cillian Murphy sebagai J. Robert Oppenheimer, seorang fisikawan Amerika yang memimpin Proyek Manhattan, sebuah upaya rahasia oleh pemerintah Amerika Serikat untuk mengembangkan bom atom selama Perang Dunia II. Film ini dibuka dengan Oppenheimer sebagai seorang anak muda di New Mexico, yang terpesona oleh alam dan sains. Ia kemudian tumbuh menjadi seorang fisikawan jenius yang mengajar di Universitas California, Berkeley. Pada tahun 1942, Oppenheimer direkrut oleh pemerintah Amerika untuk memimpin Proyek Manhattan. Oppenheimer dan timnya bekerja keras untuk mengembangkan bom atom, dan pada tahun 1945, mereka berhasil melakukannya. Bom atom pertama diuji di Trinity Site di New Mexico, dan dua bom atom lainnya dijatuhkan di Hiroshima dan Nagasaki, Jepang. Bom atom ini menyebabkan kematian jutaan orang dan memicu Perang Dingin.', 'op.png', 24),
(34, 'Dark', 2017, '\"Dark\" adalah serial televisi Jerman yang menggabungkan elemen-elemen fiksi ilmiah, misteri, dan perjalanan waktu. Berlatar di kota fiksi Winden, cerita dimulai dengan hilangnya seorang anak, yang membuka pintu menuju lingkaran waktu kompleks yang melibatkan empat keluarga yang terkait erat. Saat misteri hilangnya anak-anak berkembang, rahasia kelam, konspirasi, dan ketidakpastian waktu terungkap. Dalam perjalanan mereka, para karakter mengungkap hubungan antara masa lalu, masa kini, dan masa depan, membentuk narasi yang rumit dan mendalam. Cerita mengeksplorasi dampak keputusan dan tindakan di masa lalu terhadap generasi-generasi mendatang. Dengan penuh teka-teki dan ketegangan, \"Dark\" membentuk sebuah kisah penuh intrik yang menarik penonton ke dalam kegelapan tak terduga, sambil merangkul konsep waktu sebagai elemen sentral yang membentuk takdir para karakter.', 'dark.jpg', 12),
(35, 'Snowden', 2016, '\r\n\"Snowden\" adalah film thriller yang disutradarai oleh Oliver Stone, mengangkat kisah nyata Edward Snowden, seorang mantan kontraktor CIA yang mengguncang dunia pada tahun 2013 dengan mengungkap rahasia besar program pengawasan massal pemerintah Amerika Serikat. Joseph Gordon-Levitt memerankan peran utama sebagai Edward Snowden, seorang pekerja intelijen yang mengalami dilema moral ketika mengetahui praktik pengintaian massal yang melibatkan warga negara biasa. Film ini menggambarkan perjuangan batin Snowden antara kewajibannya sebagai pekerja intelijen dan tanggung jawabnya terhadap masyarakat. Pandangan dalam film ini membongkar lapisan-lapisan ketidaktransparanan pemerintah dan membawa penonton melalui perjalanan yang sulit dan penuh tekanan yang dialami oleh Snowden sejak awal karirnya hingga momen kontroversial pengungkapan informasi rahasia. Dengan ketegangan yang membangun, \"Snowden\" menggambarkan konsekuensi dramatis yang dihadapi oleh individu yang berani mengambil risiko untuk mengungkapkan kebenaran. Film ini tidak hanya mengajukan pertanyaan tentang privasi dan kebebasan, tetapi juga meresapi karakteristik kompleks seorang pemberani modern yang mengubah arah sejarah dengan mengorbankan segalanya demi kebenaran.', 'film-snowden_20160927_232433.jpg', 23),
(36, 'A Quiet Place Part II', 2020, '\r\nA Quiet Place Part II adalah film horor pasca-apokaliptik Amerika yang disutradarai oleh John Krasinski dan ditulis oleh Krasinski dan Scott Beck. Film ini merupakan sekuel dari film A Quiet Place (2018) dan dibintangi oleh Emily Blunt, Millicent Simmonds, dan Noah Jupe. Film ini berlatar belakang beberapa bulan setelah peristiwa film pertama. Evelyn Abbott (Blunt) dan anak-anaknya, Regan (Simmonds), Marcus (Jupe), dan Beau (Cade Woodward), masih berjuang untuk bertahan hidup di dunia yang dikuasai oleh makhluk buta dan pendengaran tajam. Evelyn dan Regan memutuskan untuk meninggalkan rumah mereka dan mencari tempat yang lebih aman. Mereka menemukan sebuah komunitas kecil yang dipimpin oleh Emmett (Cillian Murphy), seorang pria yang pernah berteman dengan Lee Abbott (Krasinski), suami Evelyn. Evelyn dan Regan mulai menyesuaikan diri dengan kehidupan di komunitas tersebut. Namun, mereka segera menyadari bahwa komunitas tersebut bukanlah tempat yang aman seperti yang mereka kira. Film ini melanjutkan kisah keluarga Abbott dengan intensitas yang sama dengan film pertama. Film ini juga mengeksplorasi tema-tema baru, seperti harapan dan perdamaian. A Quiet Place Part II mendapat pujian dari para kritikus. Film ini meraih skor 91% di Rotten Tomatoes dan 7.6/10 di IMDb. Film ini juga meraih kesuksesan di box office, dengan pendapatan kotor lebih dari $341 juta di seluruh dunia. Film ini adalah salah satu film horor terbaik yang pernah dibuat. Film ini menyajikan kisah yang menegangkan dan emosional, dengan penampilan yang memukau dari para aktornya.', 'aqp.jpg', 16),
(37, 'The Conference', 2023, 'Film horor asal Swedia, \"The Conference\", yang dirilis di Netflix pada 13 Oktober 2023 lalu, berhasil meraih pujian dari para kritikus. Film ini disutradarai oleh Patrik Eklund dan dibintangi oleh Katia Winter, Adam Lundgren, dan Eva Melander.\"The Conference\" bercerita tentang sekelompok karyawan yang pergi ke sebuah pulau terpencil untuk menghadiri konferensi pembentukan tim. Namun, konferensi tersebut berubah menjadi malapetaka saat tuduhan korupsi mulai beredar luas. Seorang pembunuh psikopat kemudian mulai memburu para karyawan tersebut satu per satu. Film ini mendapat pujian dari para kritikus karena adegan-adegannya yang menegangkan dan brutal. Selain itu, film ini juga dinilai berhasil mengeksplorasi tema-tema seperti korupsi, balas dendam, dan ketakutan. ', 'Cuplikan layar 2023-12-14 141507.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `foto_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `foto_kategori`) VALUES
(4, 'War', 'documentary.jpg'),
(12, 'Fantasy', 'fantasy.jpg'),
(15, 'Action', 'action.jpg'),
(16, 'Horror', 'horror.jpg'),
(17, 'Comedy', 'comedy.jpg'),
(18, 'Romance', 'romance.jpg'),
(19, 'Crime', 'crime.jpg'),
(21, 'Mystery', 'dark.jpg'),
(22, 'Animation', 'sp.jpg'),
(23, 'Biography', 'snowden.jpg'),
(24, 'Documentary', 'documenter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(10) NOT NULL,
  `judul_review` varchar(100) NOT NULL,
  `isi_review` text NOT NULL,
  `rating` int(10) NOT NULL,
  `id_film` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `judul_review`, `isi_review`, `rating`, `id_film`, `id_user`, `tgl_upload`) VALUES
(8, 'Alice in Borderland: Series Spektakuler', '\"Alice in Borderland\" adalah sebuah seri yang memikat dengan kombinasi cerita misteri yang menegangkan dan karakter yang berkembang secara signifikan. Terinspirasi dari manga Jepang dengan pengaturan di dunia paralel yang mematikan, seri ini mengeksplorasi tema survival dengan tambahan elemen permainan maut yang intens. Pertama-tama, karakter utama, Ryohei Arisu, mengalami perkembangan yang menarik dari seorang pemuda apatis menjadi seorang pemimpin yang berani. Perubahan ini memberikan dimensi emosional yang kuat pada narasi, memungkinkan penonton merasa terhubung dengan perjuangan dan pertumbuhan karakter. Dengan setiap episode, penonton diperkenalkan pada tantangan-tantangan kreatif dan berbahaya di dunia Borderland yang diciptakan dengan baik. Keberagaman permainan mempertahankan ketegangan dan membuat penonton tetap terlibat. Sementara itu, hubungan antara karakter-karakter utama dan karakter pendukung juga memberikan lapisan dramatis yang menyentuh hati. Seri ini berhasil menggabungkan elemen cerita psikologis dengan aksi yang mendebarkan, mengeksplorasi konsep kehidupan dan kematian melalui lensa permainan maut yang memerlukan strategi dan keberanian. Dengan produksi yang solid dan plot yang terus berkembang, \"Alice in Borderland\" adalah pilihan yang sangat menarik bagi pecinta cerita seru dan penuh teka-teki.', 9, 31, 1, '2023-12-13 17:00:19'),
(9, 'Oppenhimer: Film Terbaik 2023', 'Film Oppenheimer adalah sebuah kisah yang kompleks dan menarik tentang seorang pria yang mengubah dunia. Film ini disutradarai dengan apik oleh Christopher Nolan dan dibintangi dengan cemerlang oleh Cillian Murphy. Film ini adalah sebuah karya penting tentang sejarah dan moralitas. Berikut adalah beberapa hal yang saya sukai dari film ini: Akting Cillian Murphy yang luar biasa. Murphy secara sempurna menangkap kompleksitas Oppenheimer, dari kecerdasan dan dedikasi ilmiahnya hingga kegelisahan moralnya tentang dampak bom atom. Sutradaraan Christopher Nolan yang brilian. Nolan menggunakan teknik sinematik yang inovatif untuk menciptakan suasana yang dramatis dan menegangkan. Penggambaran yang kuat tentang dampak bom atom. Film ini menunjukkan dengan jelas kengerian dan kehancuran yang ditimbulkan oleh bom atom. Tentu saja, film ini juga memiliki beberapa kekurangan. Durasi film yang panjang (tiga jam) dapat membuat beberapa orang menjadi bosan. Selain itu, film ini tidak selalu mudah diikuti, terutama bagi mereka yang tidak memiliki pengetahuan tentang Proyek Manhattan. Secara keseluruhan, Oppenheimer adalah sebuah film yang bagus dan penting. Film ini memberikan gambaran yang mendalam tentang kehidupan dan karya J. Robert Oppenheimer, serta dampak bom atom.', 9, 32, 1, '2023-12-13 17:37:53'),
(10, 'Series Time Travel Terumit', '\"Dark\" adalah mahakarya televisi yang memukau dan menghipnotis penonton dengan kisahnya yang rumit, gelap, dan penuh misteri. Dengan tiga musim yang brilian, serial ini berhasil menggabungkan elemen ilmu pengetahuan, filsafat, dan drama psikologis menjadi satu narasi yang penuh kecerdasan dan ketegangan. Cerita dimulai dengan hilangnya seorang anak di kota kecil Winden, dan segera kita terseret ke dalam labirin waktu yang membingungkan. Penulisnya berhasil memadukan kecerdasan konsep perjalanan waktu dengan pengembangan karakter yang mendalam. Hubungan keluarga yang kompleks, rahasia tersembunyi, dan pilihan hidup yang sulit menjadi dasar cerita yang menarik. Penggunaan simbol dan motif, seperti pohon keluarga, jam, dan warna, memberikan kedalaman artistik pada setiap adegan. Jalinan hubungan antarwaktu dan dimensi menambah lapisan misteri yang terasa semakin kompleks seiring berjalannya waktu. Akting para pemain, khususnya Jonas Kahnwald (diperankan oleh Louis Hofmann), sangat kuat dan mampu membawa penonton merasakan setiap emosi yang terlibat dalam perjalanan mereka. Sutradara Baran bo Odar dan Jantje Friese berhasil menciptakan atmosfer gelap yang sesuai dengan tema keseluruhan serial.', 8, 34, 1, '2023-12-13 20:49:47'),
(11, 'Rekomendasi Film Tentang Cyber Security', '\"Snowden,\" garapan Oliver Stone, adalah sebuah karya yang menggugah, mendebarkan, dan merangsang pikiran. Film ini menghadirkan narasi mendalam tentang keberanian dan konsekuensi yang dihadapi oleh Edward Snowden dalam mengungkapkan kebenaran tersembunyi di balik praktik pengintaian massal pemerintah Amerika Serikat. Joseph Gordon-Levitt tampil gemilang sebagai Snowden, menangkap esensi karakternya dengan penuh kepekaan emosional. Dengan tata sinematografi yang mendukung, Stone berhasil menciptakan atmosfer tegang, intens, dan penuh intrik. Penceritaan yang cermat memberikan wawasan mendalam tentang kompleksitas keputusan yang dihadapi Snowden, serta perjuangannya yang melibatkan moralitas, loyalitas, dan hasrat untuk menjaga kebebasan individu. Film ini sukses membangun ketegangan sepanjang jalan, menjelajahi sisi pribadi dan profesional Snowden. Pemeran pendukung seperti Shailene Woodley, sebagai Lindsay Mills, juga memberikan penampilan yang kuat, menambah dimensi kemanusiaan pada narasi. Dalam konteks politik dan sosial, \"Snowden\" memberikan tantangan kepada penonton untuk merenungkan implikasi dari kebijakan pemerintah terhadap privasi dan keamanan. Stone tidak hanya menyajikan cerita biografi, tetapi juga memberikan komentar tajam terhadap realitas era digital dan hubungan antara warga dan pemerintah. Meskipun beberapa kritikus menilai film ini bersikap terlalu simpatik terhadap Snowden, \"Snowden\" tetap merupakan sebuah karya yang memukau, memberikan pandangan mendalam tentang kisah kontroversial yang mempertanyakan batas-batas antara keamanan nasional dan hak asasi individu.', 10, 35, 1, '2023-12-14 10:29:57'),
(12, 'A Quiet Place Part II: Harapan di Tengah Kegelapan', 'A Quiet Place Part II adalah sekuel yang sangat baik dari film pertamanya. Film ini melanjutkan kisah keluarga Abbott dengan intensitas dan ketegangan yang sama. Film ini juga mengeksplorasi tema-tema baru, seperti harapan dan perdamaian. A Quiet Place Part II dibuka dengan adegan flashback yang menampilkan Lee Abbott (John Krasinski), suami Evelyn, saat pertama kali menghadapi makhluk buta dan pendengaran tajam yang telah menguasai dunia. Adegan ini memberikan latar belakang yang penting untuk memahami motivasi karakter dan konflik dalam film. Setelah adegan flashback, film ini berfokus pada Evelyn (Emily Blunt) dan Regan (Millicent Simmonds). Evelyn dan Regan memutuskan untuk meninggalkan rumah mereka dan mencari tempat yang lebih aman. Mereka menemukan sebuah komunitas kecil yang dipimpin oleh Emmett (Cillian Murphy), seorang pria yang pernah berteman dengan Lee. Komunitas ini awalnya tampak seperti tempat yang aman. Namun, Evelyn dan Regan segera menyadari bahwa komunitas ini bukanlah tempat yang sempurna. Mereka menghadapi ancaman dari dalam dan luar komunitas. A Quiet Place Part II menyajikan kisah yang menegangkan dan emosional. Film ini akan membuat Anda merasa tegang dan sedih. Penampilan para aktornya juga sangat memukau. Emily Blunt dan Millicent Simmonds memberikan penampilan yang luar biasa sebagai ibu dan anak yang berjuang untuk bertahan hidup. Film ini juga mengeksplorasi tema-tema baru, seperti harapan dan perdamaian. Film ini menunjukkan bahwa bahkan di dunia yang penuh dengan kegelapan, masih ada harapan untuk masa depan yang lebih baik. A Quiet Place Part II adalah film horor yang wajib ditonton. Film ini adalah salah satu film terbaik yang dirilis pada tahun 2021. Jika Anda menyukai film horor, maka Anda pasti akan menyukai A Quiet Place Part II.', 8, 36, 1, '2023-12-14 10:53:06'),
(14, 'The Conference: Horror Slasher yang Brutal dan Sadis', 'The Conference (2023) adalah film horor slasher asal Swedia yang disutradarai oleh Erik Richter Strand. Film ini berkisah tentang sekelompok pegawai pemerintah daerah yang melakukan retret kerja di sebuah resor sederhana di pedesaan. Namun, retret tersebut berubah menjadi malapetaka ketika seorang pembunuh misterius mulai menghabisi mereka satu per satu. Secara keseluruhan, The Conference adalah film horor slasher yang cukup menghibur. Film ini memiliki alur cerita yang sederhana namun efektif, serta adegan-adegan pembunuhan yang brutal dan sadis. Adegan-adegan tersebut dikemas dengan baik sehingga mampu membuat penonton merasa ngeri dan tegang. Salah satu kelebihan The Conference adalah karakter-karakternya yang relatable dan kompleks. Penonton dapat merasakan empati terhadap para korban, bahkan ketika mereka melakukan kesalahan. Hal ini membuat penonton lebih terlibat dalam cerita dan lebih merasakan ketegangannya. Selain itu, The Conference juga memiliki beberapa kejutan yang cukup menarik. Kejutan-kejutan ini membantu menjaga ketegangan cerita dan membuat penonton tetap terhibur. Namun, The Conference juga memiliki beberapa kekurangan. Salah satu kekurangannya adalah kurangnya pengembangan karakter. Beberapa karakter dalam film ini terasa terlalu datar dan tidak terlalu menarik. Selain itu, The Conference juga memiliki beberapa adegan yang terasa terlalu klise. Beberapa adegan pembunuhan dalam film ini terasa seperti sudah pernah dilihat sebelumnya. Secara keseluruhan, The Conference adalah film horor slasher yang cukup menghibur. Film ini cocok untuk penggemar film horor slasher yang mencari film dengan adegan-adegan pembunuhan yang brutal dan sadis.', 8, 37, 1, '2023-12-20 21:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `trailer`
--

CREATE TABLE `trailer` (
  `id_trailer` int(10) NOT NULL,
  `link` varchar(100) NOT NULL,
  `id_review` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trailer`
--

INSERT INTO `trailer` (`id_trailer`, `link`, `id_review`) VALUES
(1, 'https://www.youtube.com/watch?v=AmPgF6f6LeE', 8),
(10, 'https://www.youtube.com/watch?v=uYPbbksJxIg', 9),
(11, 'https://www.youtube.com/watch?v=BpdDN9d9Jio', 12),
(12, 'https://www.youtube.com/watch?v=ESEUoa-mz2c', 10),
(13, 'https://www.youtube.com/watch?v=B9hpl8e-lQ4', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$AvHIa2A.hQrlue/DBeYfRuoV4whik3HMrXR9N9fA3GkMa8csnI2Le', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `film_ibfk_1` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `trailer`
--
ALTER TABLE `trailer`
  ADD PRIMARY KEY (`id_trailer`),
  ADD UNIQUE KEY `id_review` (`id_review`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trailer`
--
ALTER TABLE `trailer`
  MODIFY `id_trailer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trailer`
--
ALTER TABLE `trailer`
  ADD CONSTRAINT `trailer_ibfk_1` FOREIGN KEY (`id_review`) REFERENCES `review` (`id_review`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
