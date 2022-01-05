-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 06:45 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no` int(8) NOT NULL,
  `id_admin` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no`, `id_admin`, `nama`, `nama_rek`, `nama_bank`, `no_rek`, `username`, `password`, `email`) VALUES
(4, 'ADM1', 'Muhammad Reza Makarim', 'Reza Makarim', 'Mandiri', '9000123141423333', 'rezam', 'rezam', 'user@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `no` int(8) NOT NULL,
  `nama_depan` varchar(10) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`no`, `nama_depan`, `nama_belakang`, `no_hp`, `email`, `message`) VALUES
(3, 'farhan', 'azra', '085270012121', 'farhanazra02@yahoo.com', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `extra_person`
--

CREATE TABLE `extra_person` (
  `no` int(8) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga_per` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extra_person`
--

INSERT INTO `extra_person` (`no`, `id_anggota`, `jumlah`, `harga_per`) VALUES
(1, 'A1', 1, '500000'),
(2, 'A2', 2, '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `no` int(8) NOT NULL,
  `id_gambar` varchar(10) NOT NULL,
  `ket_gambar` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`no`, `id_gambar`, `ket_gambar`, `gambar`) VALUES
(3, 'G1', 'Indahnya pemandangan laut bali', 'morotai_20170504_164942.jpg'),
(4, 'G2', 'Malioboro di sore hari', '000019-00_malioboro-jogja_malioboro-malam-hari_800x450_ccpdm-min.jpg'),
(5, 'G3', 'Pemandangan Danau Lembang', 'dusun bambu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `no` int(8) NOT NULL,
  `id_kendaraan` varchar(10) NOT NULL,
  `nama_kendaraan` varchar(20) NOT NULL,
  `tipe_kendaraan` varchar(20) NOT NULL,
  `kapasitas` int(10) NOT NULL,
  `harga_kend` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`no`, `id_kendaraan`, `nama_kendaraan`, `tipe_kendaraan`, `kapasitas`, `harga_kend`, `gambar`) VALUES
(3, 'K1', 'Toyota Avanza', 'Mini Bus', 8, '2000000', '0000452693.jpg'),
(4, 'K2', 'Bus Pariwisata', 'Bus', 30, '5000000', 'image_20180131_123155_17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `no` int(8) NOT NULL,
  `id_wisata` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tanggal_pesan` varchar(30) NOT NULL,
  `nama_wisata` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `harga_paket` varchar(20) NOT NULL,
  `nama_pesan` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `id_anggota` varchar(10) NOT NULL,
  `harga_per` varchar(20) NOT NULL,
  `id_kendaraan` varchar(10) NOT NULL,
  `harga_kend` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `no_rek_tour` varchar(50) NOT NULL,
  `total_tf` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`no`, `id_wisata`, `username`, `tanggal_pesan`, `nama_wisata`, `lokasi`, `harga_paket`, `nama_pesan`, `no_hp`, `email`, `seat`, `id_anggota`, `harga_per`, `id_kendaraan`, `harga_kend`, `date`, `nama_rek`, `nama_bank`, `no_rek`, `no_rek_tour`, `total_tf`, `alamat`, `status`) VALUES
(52, 'W2', 'reza', 'Monday, 19-03-2018 / 22:10', 'Karimun Jawa', 'Jepara', '5000000', 'Reza', '085270012121', 'user@yahoo.com', '2', 'A1', '500000', 'K1', '2000000', '2018-03-24', '', '', '', '', '', 'Jl. Mana', 'Belum Di Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `pesan2`
--

CREATE TABLE `pesan2` (
  `no` int(8) NOT NULL,
  `id_wisata` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tanggal_pesan` varchar(30) NOT NULL,
  `nama_wisata` varchar(20) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `harga_paket` varchar(20) NOT NULL,
  `nama_pesan` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `nama_rek` varchar(30) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `no_rek` varchar(20) NOT NULL,
  `no_rek_tour` varchar(50) NOT NULL,
  `total_tf` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan2`
--

INSERT INTO `pesan2` (`no`, `id_wisata`, `username`, `tanggal_pesan`, `nama_wisata`, `lokasi`, `harga_paket`, `nama_pesan`, `no_hp`, `email`, `seat`, `date`, `nama_rek`, `nama_bank`, `no_rek`, `no_rek_tour`, `total_tf`, `alamat`, `status`) VALUES
(4, 'W1', 'reza', 'Monday, 19-03-2018 / 22:01', 'Bali', 'Bali Kota', '7000000', 'Reza', '085270012121', 'user@yahoo.com', '2', '2018-03-20', '', '', '', '', '', 'Jl. Oke', 'Belum Di Bayar'),
(5, 'W3', 'joni', 'Friday, 23-03-2018 / 17:03', 'Lembang', 'Bandung', '4000000', 'joni iskandar', '084534298096', 'joni12@gmailcom', '2', '2018-12-13', 'ijon', 'BCA', '1902134321', 'Reza Makarim - Mandiri - 9000123141423333', '4000000', 'jalan caur', 'Di Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `tourguide`
--

CREATE TABLE `tourguide` (
  `no` int(8) NOT NULL,
  `id_guide` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourguide`
--

INSERT INTO `tourguide` (`no`, `id_guide`, `nama`, `no_hp`, `jk`, `email`, `gambar`) VALUES
(2, 'G1', 'Steven', '085270012121', 'Laki - laki', 'user@yahoo.com', 'mpepe17.jpg'),
(3, 'G2', 'Riana', '085270012122', 'Perempuan', 'user@yahoo.com', 'rbiddy17.jpg'),
(4, 'G3', 'Karin', '085270012123', 'Perempuan', 'user@yahoo.com', 'tour-manager.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `nama`, `username`, `password`, `email`) VALUES
(1, 'Farhan Azra Hasibuan', 'farhan', 'farhan', 'farhanazra02@yahoo.com'),
(5, 'Muhammad Reza Makarim', 'reza', 'reza', 'user@yahoo.com'),
(6, 'rejak', 'rejakk', 'odin', 'rejakgaming@yahoo.com'),
(7, 'joni', 'joni', 'joni', 'joni12@gmailcom');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `no` int(8) NOT NULL,
  `id_wisata` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `rinci` text NOT NULL,
  `deskripsi` text NOT NULL,
  `keterangan` text NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`no`, `id_wisata`, `nama`, `lokasi`, `harga`, `durasi`, `rinci`, `deskripsi`, `keterangan`, `kegiatan`, `tanggal`, `gambar`) VALUES
(4, 'W1', 'Bali', 'Bali Kota', '7000000', '3H2D', '<p><strong style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Puncak Punclut</strong><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">terletak di perbatasan SESKO AU, Kp Cijeruk &amp; Desa Pagerwangi, sebuah tempat wisata kuliner di hari Ahad. Kawasan Punclut sendiri merupakan deretan saung (rumah bambu) yang menyajikan tempat makan masakan Sunda dengan view Kota</span><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><a class=\"mw-redirect\" style=\"background: none; font-family: sans-serif; font-size: 14px; text-decoration-line: none; color: rgb(11, 0, 128);\" title=\"Bandung\" href=\"https://id.wikipedia.org/wiki/Bandung\">Bandung</a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">.</span><br /><strong style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Floating Market Lembang,</strong><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">dahulunya adalah Pemancingan Situ Umar di Desa Lembang, pemancingan ikan paling terkenal dan paling lama berdiri. Sejak 2012 dikelola swasta menjadi objek wisata dengan konsep pasar apung yang sangat digemari.</span><br /><strong style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Farm House Susu Lembang</strong><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, terletak di Jalan Raya Lembang, dengan konsep perkebunan dan peternakan yang didesain dengan latar belakang ala Eropa. Tersedia beberapa fasilitas mulai dari tempat penjualan oleh-oleh dan suvenir, kafe</span><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">indoor</em><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">maupun</span><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">outdoor</em><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, hingga bar. Selain itu, terdapat pula kebun buah dan sayur, tempat parkir, toilet untuk anak-anak, toilet untuk orang dewasa dan toilet untuk lansia atau disabilitas.</span><br /><strong style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Observatorium</strong><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><a class=\"mw-disambig\" style=\"background: none; font-family: sans-serif; font-size: 14px; text-decoration-line: none; color: rgb(11, 0, 128);\" title=\"Bosscha\" href=\"https://id.wikipedia.org/wiki/Bosscha\"><strong>Bosscha</strong></a><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, observatorium tertua di Indonesia yang telah berdiri sejak tahun 1923. Biasa disebut oleh masyarakat sekitar sebagai</span><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Sterwah</em><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">. Wisata sains pendidikan dibuka untuk rombongan.</span><br /><strong style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">BIB Lembang</strong><span style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, sebagai pusat inseminasi buatan tertua di Indonesia juga menyediakan wisata sains pendidikan bagi pelajar dan umum. Di tempat in</span></p>', 'Bali adalah sebuah provinsi di Indonesia. Ibu kota provinsi ini adalah Denpasar.', '<p>Gunung berapi&nbsp;ini terakhir meletus pada&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Maret\" href=\"https://id.wikipedia.org/wiki/Maret\">Maret</a>&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"1963\" href=\"https://id.wikipedia.org/wiki/1963\">1963</a>.&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Gunung Batur\" href=\"https://id.wikipedia.org/wiki/Gunung_Batur\">Gunung Batur</a>&nbsp;juga salah satu gunung yang ada di Bali. Sekitar 30.000 tahun yang lalu, Gunung Batur meletus dan menghasilkan bencana yang dahsyat di&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Bumi\" href=\"https://id.wikipedia.org/wiki/Bumi\">bumi</a>. Berbeda dengan di bagian utara, bagian selatan Bali adalah dataran rendah yang dialiri sungai-sungai.</p>\r\n<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif; font-size: 14px;\">Berdasarkan relief dan topografi, di tengah-tengah Pulau Bali terbentang pegunungan yang memanjang dari barat ke timur dan di antara pegunungan tersebut terdapat gugusan gunung berapi yaitu Gunung Batur dan Gunung Agung serta gunung yang tidak berapi, yaitu Gunung Merbuk, Gunung Patas dan Gunung Seraya. Adanya pegunungan tersebut menyebabkan Daerah Bali secara Geografis terbagi menjadi 2 (dua) bagian yang tidak sama yaitu Bali Utara dengan dataran rendah yang sempit dan kurang landai dan Bali Selatan dengan dataran rendah yang luas dan landai. Kemiringan lahan Pulau Bali terdiri dari lahan datar (0-2%) seluas 122.652 ha, lahan bergelombang (2-15%) seluas 118.339 ha, lahan curam (15-40%) seluas 190.486 ha dan lahan sangat curam (&gt;40%) seluas 132.189 ha. Provinsi Bali memiliki 4 (empat) buah danau yang berlokasi di daerah pegunungan, yaitu&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Danau Beratan\" href=\"https://id.wikipedia.org/wiki/Danau_Beratan\">Danau Beratan</a>&nbsp;atau Bedugul,&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Danau Buyan\" href=\"https://id.wikipedia.org/wiki/Danau_Buyan\">Buyan</a>,&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Danau Tamblingan\" href=\"https://id.wikipedia.org/wiki/Danau_Tamblingan\">Tamblingan</a>, dan&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Danau Batur\" href=\"https://id.wikipedia.org/wiki/Danau_Batur\">Batur</a>. Alam Bali yang indah menjadikan pulau Bali terkenal sebagai daerah wisata.</p>\r\n<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif; font-size: 14px;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Ibu kota\" href=\"https://id.wikipedia.org/wiki/Ibu_kota\">Ibu kota</a>&nbsp;Bali adalah&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Denpasar\" href=\"https://id.wikipedia.org/wiki/Denpasar\">Denpasar</a>. Tempat-tempat penting lainnya adalah&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Ubud\" href=\"https://id.wikipedia.org/wiki/Ubud\">Ubud</a>&nbsp;sebagai pusat&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Seni\" href=\"https://id.wikipedia.org/wiki/Seni\">kesenian</a>&nbsp;dan peristirahatan, terletak di&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Kabupaten Gianyar\" href=\"https://id.wikipedia.org/wiki/Kabupaten_Gianyar\">Kabupaten Gianyar</a>.&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Nusa Lembongan\" href=\"https://id.wikipedia.org/wiki/Nusa_Lembongan\">Nusa Lembongan</a>&nbsp;adalah sebagai salah satu tempat menyelam (diving), terletak di&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Kabupaten Klungkung\" href=\"https://id.wikipedia.org/wiki/Kabupaten_Klungkung\">Kabupaten Klungkung</a>. Sedangkan&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Kuta\" href=\"https://id.wikipedia.org/wiki/Kuta\">Kuta</a>,&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Seminyak\" href=\"https://id.wikipedia.org/wiki/Seminyak\">Seminyak</a>,&nbsp;<a class=\"mw-disambig\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Jimbaran\" href=\"https://id.wikipedia.org/wiki/Jimbaran\">Jimbaran</a>&nbsp;dan&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Nusa Dua\" href=\"https://id.wikipedia.org/wiki/Nusa_Dua\">Nusa Dua</a>&nbsp;adalah beberapa tempat yang menjadi tujuan utama&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Pariwisata\" href=\"https://id.wikipedia.org/wiki/Pariwisata\">pariwisata</a>, baik wisata pantai maupun tempat peristirahatan, spa, dan lain-lain, terletak di&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Kabupaten Badung\" href=\"https://id.wikipedia.org/wiki/Kabupaten_Badung\">Kabupaten Badung</a>.</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>', '<p>Pulau Tidung</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">10.00 &ndash; 10.15 Sampai di dermaga&nbsp;<strong style=\"box-sizing: border-box;\">Pulau Tidung</strong>, kemudian diantar ke Penginapan/Home stay oleh para Guide.</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">10.15 &ndash; 10.30 Unpacking semua barang bawaan, setting kamar tidur, dll</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">10.30 &ndash; 12.00 Acara Bebas</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">12.00 &ndash; 12.45 ISHOMA ( Istirahat, Mandi, Sholat, Makan )</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">12.45 &ndash; 13.00 Setting Alat Snorkling</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">13.00 &ndash; 17.00 Snorkling Time, lamanya snorkling terserah peserta ( biasanya sampai jam 16.00 atau jam 17.00 ) Bagi yang muslim bisa di selingi sholat Ashar.</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">17.00 &ndash; 18.00 Catching Sunset ( bisa di&nbsp;<strong style=\"box-sizing: border-box;\">Pulau Tidung</strong>&nbsp;nya atau dari Perahu Motor bagi yang Sewa Perahu motor )</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">18.00 &ndash; 19.00 Istirahat, sholat</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">19.00 &ndash; 19.30 Acara Santai</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">19.30 &ndash; 20.30 Makan malam sambil Barbeque</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">21.00 &ndash; 24.00 Acara bebas</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">24.00 &ndash; 05.00 Istirahat/Tidur</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>', 'Thursday, 01-03-2018', 'viceroy-bali-L.jpg'),
(5, 'W2', 'Karimun Jawa', 'Jepara', '5000000', '3H2D', '<p>SD&nbsp;(lima di Karimun, tiga di Kemujan dan masing-masing satu di Parang dan Genting),&nbsp;<a class=\"mw-disambig\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Karimunjawa\" href=\"https://id.wikipedia.org/wiki/Karimunjawa\">Karimunjawa</a>&nbsp;juga memiliki satu&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"SMP\" href=\"https://id.wikipedia.org/wiki/SMP\">SMP</a>,&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Madrasah Tsanawiyah\" href=\"https://id.wikipedia.org/wiki/Madrasah_Tsanawiyah\">Madrasah Tsanawiyah</a>&nbsp;(MTs), dan&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"SMK\" href=\"https://id.wikipedia.org/wiki/SMK\">SMK</a>&nbsp;Negeri jurusan Budidaya Rumput Laut serta Teknologi Pengolahan Hasil Perikanan yang merupakan sekolah gratis, serta satu&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Madrasah Aliyah\" href=\"https://id.wikipedia.org/wiki/Madrasah_Aliyah\">Madrasah Aliyah</a>&nbsp;di Penghujan.</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>', 'Karimunjawa adalah kepulauan di Laut Jawa yang termasuk dalam Kabupaten Jepara, Jawa Tengah.', '<p>SD&nbsp;(lima di Karimun, tiga di Kemujan dan masing-masing satu di Parang dan Genting),&nbsp;<a class=\"mw-disambig\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Karimunjawa\" href=\"https://id.wikipedia.org/wiki/Karimunjawa\">Karimunjawa</a>&nbsp;juga memiliki satu&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"SMP\" href=\"https://id.wikipedia.org/wiki/SMP\">SMP</a>,&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Madrasah Tsanawiyah\" href=\"https://id.wikipedia.org/wiki/Madrasah_Tsanawiyah\">Madrasah Tsanawiyah</a>&nbsp;(MTs), dan&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"SMK\" href=\"https://id.wikipedia.org/wiki/SMK\">SMK</a>&nbsp;Negeri jurusan Budidaya Rumput Laut serta Teknologi Pengolahan Hasil Perikanan yang merupakan sekolah gratis, serta satu&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Madrasah Aliyah\" href=\"https://id.wikipedia.org/wiki/Madrasah_Aliyah\">Madrasah Aliyah</a>&nbsp;di Penghujan.</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>', '<p>Pulau Tidung, kemudian diantar ke Penginapan/Home stay oleh para Guide.</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">10.15 &ndash; 10.30 Unpacking semua barang bawaan, setting kamar tidur, dll</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">10.30 &ndash; 12.00 Acara Bebas</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">12.00 &ndash; 12.45 ISHOMA ( Istirahat, Mandi, Sholat, Makan )</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">12.45 &ndash; 13.00 Setting Alat Snorkling</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">13.00 &ndash; 17.00 Snorkling Time, lamanya snorkling terserah peserta ( biasanya sampai jam 16.00 atau jam 17.00 ) Bagi yang muslim bisa di selingi sholat Ashar.</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">17.00 &ndash; 18.00 Catching Sunset ( bisa di&nbsp;<strong style=\"box-sizing: border-box;\">Pulau Tidung</strong>&nbsp;nya atau dari Perahu Motor bagi yang Sewa Perahu motor )</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">18.00 &ndash; 19.00 Istirahat, sholat</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">19.00 &ndash; 19.30 Acara Santai</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">19.30 &ndash; 20.30 Makan malam sambil Barbeque</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">21.00 &ndash; 24.00 Acara bebas</p>\r\n<p style=\"box-sizing: border-box; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12.8px; line-height: 1.4em; padding: 0px; border: 0px; margin: 0px 0px 20px; vertical-align: baseline; color: #333333;\">24.00 &ndash; 05.00 Istirahat/Tidur</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>\r\n<p>\"&gt;</p>', 'Sunday, 04-03-2018', 'pulau-kecil-karimunjawa.jpg'),
(8, 'W3', 'Lembang', 'Bandung', '4000000', '2D1N', '<p><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Puncak Punclut</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">terletak di perbatasan SESKO AU, Kp Cijeruk &amp; Desa Pagerwangi, sebuah tempat wisata kuliner di hari Ahad. Kawasan Punclut sendiri merupakan deretan saung (rumah bambu) yang menyajikan tempat makan masakan Sunda dengan view Kota</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><a class=\"mw-redirect\" style=\"box-sizing: border-box; color: rgb(11, 0, 128); text-decoration-line: none; background: none; font-family: sans-serif; font-size: 14px;\" title=\"Bandung\" href=\"https://id.wikipedia.org/wiki/Bandung\">Bandung</a><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">.</span><br style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\" /><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Floating Market Lembang,</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">dahulunya adalah Pemancingan Situ Umar di Desa Lembang, pemancingan ikan paling terkenal dan paling lama berdiri. Sejak 2012 dikelola swasta menjadi objek wisata dengan konsep pasar apung yang sangat digemari.</span><br style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\" /><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Farm House Susu Lembang</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, terletak di Jalan Raya Lembang, dengan konsep perkebunan dan peternakan yang didesain dengan latar belakang ala Eropa. Tersedia beberapa fasilitas mulai dari tempat penjualan oleh-oleh dan suvenir, kafe</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">indoor</em><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">maupun</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">outdoor</em><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, hingga bar. Selain itu, terdapat pula kebun buah dan sayur, tempat parkir, toilet untuk anak-anak, toilet untuk orang dewasa dan toilet untuk lansia atau disabilitas.</span></p>', 'Lembang adalah sebuah kecamatan di Kabupaten Bandung Barat, Jawa Barat, Indonesia', '<p><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Puncak Punclut</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">terletak di perbatasan SESKO AU, Kp Cijeruk &amp; Desa Pagerwangi, sebuah tempat wisata kuliner di hari Ahad. Kawasan Punclut sendiri merupakan deretan saung (rumah bambu) yang menyajikan tempat makan masakan Sunda dengan view Kota</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><a class=\"mw-redirect\" style=\"box-sizing: border-box; color: rgb(11, 0, 128); text-decoration-line: none; background: none; font-family: sans-serif; font-size: 14px;\" title=\"Bandung\" href=\"https://id.wikipedia.org/wiki/Bandung\">Bandung</a><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">.</span><br style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\" /><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Floating Market Lembang,</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">dahulunya adalah Pemancingan Situ Umar di Desa Lembang, pemancingan ikan paling terkenal dan paling lama berdiri. Sejak 2012 dikelola swasta menjadi objek wisata dengan konsep pasar apung yang sangat digemari.</span><br style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\" /><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Farm House Susu Lembang</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, terletak di Jalan Raya Lembang, dengan konsep perkebunan dan peternakan yang didesain dengan latar belakang ala Eropa. Tersedia beberapa fasilitas mulai dari tempat penjualan oleh-oleh dan suvenir, kafe</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">indoor</em><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">maupun</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">outdoor</em><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, hingga bar. Selain itu, terdapat pula kebun buah dan sayur, tempat parkir, toilet untuk anak-anak, toilet untuk orang dewasa dan toilet untuk lansia atau disabilitas.</span></p>', '<p><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Puncak Punclut</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">terletak di perbatasan SESKO AU, Kp Cijeruk &amp; Desa Pagerwangi, sebuah tempat wisata kuliner di hari Ahad. Kawasan Punclut sendiri merupakan deretan saung (rumah bambu) yang menyajikan tempat makan masakan Sunda dengan view Kota</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><a class=\"mw-redirect\" style=\"box-sizing: border-box; color: rgb(11, 0, 128); text-decoration-line: none; background: none; font-family: sans-serif; font-size: 14px;\" title=\"Bandung\" href=\"https://id.wikipedia.org/wiki/Bandung\">Bandung</a><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">.</span><br style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\" /><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Floating Market Lembang,</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">dahulunya adalah Pemancingan Situ Umar di Desa Lembang, pemancingan ikan paling terkenal dan paling lama berdiri. Sejak 2012 dikelola swasta menjadi objek wisata dengan konsep pasar apung yang sangat digemari.</span><br style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\" /><span style=\"box-sizing: border-box; font-weight: bolder; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Farm House Susu Lembang</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, terletak di Jalan Raya Lembang, dengan konsep perkebunan dan peternakan yang didesain dengan latar belakang ala Eropa. Tersedia beberapa fasilitas mulai dari tempat penjualan oleh-oleh dan suvenir, kafe</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">indoor</em><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">maupun</span><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;</span><em style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">outdoor</em><span style=\"box-sizing: border-box; color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">, hingga bar. Selain itu, terdapat pula kebun buah dan sayur, tempat parkir, toilet untuk anak-anak, toilet untuk orang dewasa dan toilet untuk lansia atau disabilitas.</span></p>', 'Sunday, 11-03-2018', 'dusun bambu.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `extra_person`
--
ALTER TABLE `extra_person`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `id_kendaraan` (`id_kendaraan`);

--
-- Indexes for table `pesan2`
--
ALTER TABLE `pesan2`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tourguide`
--
ALTER TABLE `tourguide`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `extra_person`
--
ALTER TABLE `extra_person`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `pesan2`
--
ALTER TABLE `pesan2`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tourguide`
--
ALTER TABLE `tourguide`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`),
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_kendaraan`) REFERENCES `kendaraan` (`id_kendaraan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
