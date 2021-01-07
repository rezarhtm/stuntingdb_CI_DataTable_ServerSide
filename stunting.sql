-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 02:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stunting`
--

-- --------------------------------------------------------

--
-- Table structure for table `partisipan`
--

CREATE TABLE `partisipan` (
  `id` int(10) UNSIGNED NOT NULL,
  `bidan` varchar(255) NOT NULL,
  `puskesmas` varchar(255) NOT NULL,
  `kd_lokasi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_gizi` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL,
  `name_anak` varchar(255) DEFAULT NULL,
  `age_anak` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `pob` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `diarrhea_pre` varchar(255) DEFAULT NULL,
  `diarrhea_post` varchar(255) DEFAULT NULL,
  `fever_pre` varchar(255) DEFAULT NULL,
  `fever_post` varchar(255) DEFAULT NULL,
  `appetite_pre` varchar(255) DEFAULT NULL,
  `appetite_post` varchar(255) DEFAULT NULL,
  `access_posyandu` varchar(255) DEFAULT NULL,
  `circumstances_access_posyandu` varchar(255) DEFAULT NULL,
  `suplemen` varchar(255) DEFAULT NULL,
  `f_pob` varchar(255) DEFAULT NULL,
  `f_dob` varchar(255) DEFAULT NULL,
  `f_ethnic` varchar(255) DEFAULT NULL,
  `f_edu` varchar(255) DEFAULT NULL,
  `f_job` varchar(255) DEFAULT NULL,
  `f_eco` varchar(255) DEFAULT NULL,
  `m_pob` varchar(255) DEFAULT NULL,
  `m_dob` varchar(255) DEFAULT NULL,
  `m_ethnic` varchar(100) DEFAULT NULL,
  `num_child` varchar(255) DEFAULT NULL,
  `num_preg` varchar(255) DEFAULT NULL,
  `freq_preg` varchar(255) DEFAULT NULL,
  `m_weight` varchar(255) DEFAULT NULL,
  `m_height` varchar(255) DEFAULT NULL,
  `m_edu` varchar(255) DEFAULT NULL,
  `m_job` varchar(255) DEFAULT NULL,
  `breastfeeding` varchar(255) DEFAULT NULL,
  `cb_method` varchar(255) DEFAULT NULL,
  `diabete_status` varchar(255) DEFAULT NULL,
  `m_supplement` varchar(255) DEFAULT NULL,
  `m_supplement_type` varchar(255) DEFAULT NULL,
  `last_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partisipan`
--

INSERT INTO `partisipan` (`id`, `bidan`, `puskesmas`, `kd_lokasi`, `status`, `status_gizi`, `reg_date`, `name_anak`, `age_anak`, `sex`, `pob`, `dob`, `diarrhea_pre`, `diarrhea_post`, `fever_pre`, `fever_post`, `appetite_pre`, `appetite_post`, `access_posyandu`, `circumstances_access_posyandu`, `suplemen`, `f_pob`, `f_dob`, `f_ethnic`, `f_edu`, `f_job`, `f_eco`, `m_pob`, `m_dob`, `m_ethnic`, `num_child`, `num_preg`, `freq_preg`, `m_weight`, `m_height`, `m_edu`, `m_job`, `breastfeeding`, `cb_method`, `diabete_status`, `m_supplement`, `m_supplement_type`, `last_update`) VALUES
(860120967, 'Widi Chandra', 'Jagakarsa', '860', '1', 'Gizi Kurang', '2020-12-18 10:02:00', 'Sarah Natalia', '5', 'Perempuan', 'Banten', '2020-07-19', 'Jarang', 'Jarang', 'Jarang', 'Jarang', 'Jarang', 'Jarang', 'Jarang', 'Tidak tahu nilai penting Posyandu dan segala pelayanannya', 'Makanan/minuman berbahan dasar susu', 'Jakarta Selatan', '1990-06-30', 'Jawa Timur', 'SMP atau sederajat', 'Wirausaha', 'Sejahtera', 'Jakarta Pusat', '1989-12-05', 'Betawi', '2', '3', 'Sering', '25', '100', 'SMA atau sederajat', 'Wirausaha', 'Eksklusif 6 bulan', 'Normal dibantu dokter/bidan', 'Tidak', 'Tidak Pernah', 'Multivitamin', '2020-12-18 10:02:00'),
(967020258, 'Widi Chandra', 'Jagakarsa', '967', '0', 'Gizi Kurang', '2020-12-18 09:54:00', 'Bruno Mars', '3', 'Perempuan', 'Jakarta Timur', '2020-12-01', 'Tidak Pernah', 'Jarang', 'Jarang', 'Tidak Pernah', 'Jarang', 'Jarang', 'Sering', 'Sibuk dengan aktivitas lain', 'Buah/sayuran segar', 'Jakarta Utara', '2000-06-12', 'Betawi', 'SMP atau sederajat', 'PNS', 'Pra-sejahtera', 'Tangerang', '1999-11-02', 'Betawi', '5', '4', 'Jarang', '56', '133', 'SD', 'PNS', 'Kurang dari 6 bulan', 'Normal tanpa bantuan dokter/bidan', 'Tidak', 'Jarang', 'Multivitamin', '2020-12-18 09:54:00'),
(985120927, 'Sari Fransiska', 'Jagakarsa', '985', 'Control', 'Gizi Kurang', '2020-06-21 05:12:19', 'Yudi Danista', '12', 'Laki-Laki', 'Jakarta', '2020-06-02', 'Tidak Pernah', 'Jarang', 'Sering', 'Jarang', 'Tidak Pernah', 'Jarang', 'Sering', 'Tidak mengetahui jadwal penyelenggaraan Posyandu', 'Makanan berbahan dasar kacang-kacangan', 'Taman Galaksi', '2020-06-06', 'Betawi', 'SD', 'Wiraswasta', 'Makmur', 'Bintara', '2020-06-06', 'Padang', '2', '2', 'Jarang', '43', '166', 'SMP atau sederajat', 'Wirausaha', 'Kurang dari 6 bulan', 'Normal tanpa bantuan dokter/bidan', 'Tidak', 'Jarang', 'Herbal', NULL),
(986020836, 'Widi Chandra', 'Jagakarsa', '986', 'Case', 'Gizi Baik', '2020-06-26 14:35:12', 'Bayu Winata', '4', 'Laki-Laki', 'Jakarta', '2020-06-06', 'Jarang', 'Jarang', 'Tidak Pernah', 'Jarang', 'Jarang', 'Sering', 'Sering', 'Sibuk dengan aktivitas lain', 'Makanan berbahan dasar kacang-kacangan', 'Hadi Winata', '2020-05-31', 'Lampung', 'SD', 'Wirausaha', 'Sejahtera', 'Tanti Winata', '2020-06-03', NULL, '1', '1', 'Sering', '56', '176', 'Perguruan Tinggi', 'Wirausaha', 'Tidak pernah menyusui anak', 'Normal tanpa bantuan dokter/bidan', 'Ya', 'Sering', 'Herbal', NULL),
(987020363, 'Tari Gunawan', 'Duren Tiga', '987', 'Control', 'Gizi Baik', '2020-06-04 10:24:00', 'Cello Katarina', '4', 'Perempuan', 'Jambi', '2020-06-01', 'Tidak Pernah', 'Jarang', 'Jarang', 'Tidak Pernah', 'Sering', 'Tidak Pernah', 'Sering', 'Tidak ada transportasi', 'Makanan berbahan dasar kacang-kacangan', 'Owen Michael', '2020-06-07', 'Lampung', 'SMP atau sederajat', 'Wiraswasta', 'Makmur', 'Jennie Puspawati', '2020-06-04', NULL, '4', '3', 'Jarang', '66', '165', 'Perguruan Tinggi', 'Lain-lain', '2 tahun penuh', 'Normal tanpa bantuan dokter/bidan', 'Ya', 'Tidak Pernah', 'Zat besi', NULL),
(988020934, 'Arga Saragih', 'Duren Tiga', '988', 'Case', 'Gizi Kurang', '2020-06-26 09:00:17', 'Putri Sitompul', '3', 'Perempuan', 'Medan', '2020-06-07', 'Jarang', 'Jarang', 'Tidak Pernah', 'Sering', 'Sering', 'Sering', 'Jarang', 'Tidak mengetahui jadwal penyelenggaraan Posyandu', 'Makanan/minuman berbahan dasar susu', 'Saka Jamil', '2020-06-07', 'Arab', 'SMA atau sederajat', 'Pegawai Swasta', 'Sejahtera', 'Yola Theo', '2020-06-06', NULL, '3', '3', 'Sering', '53', '166', 'SMP atau sederajat', 'Petani', 'Tidak pernah menyusui anak', 'Normal tanpa bantuan dokter/bidan', 'Tidak', 'Sering', 'Multivitamin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `update_id` int(9) NOT NULL,
  `id` int(9) NOT NULL,
  `date` date NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `head` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update_id`, `id`, `date`, `height`, `weight`, `head`) VALUES
(72006195, 985120927, '2020-06-01', 11, 11, 11),
(72006505, 985120927, '2020-06-04', 44, 44, 44),
(72006543, 985120927, '2020-06-06', 50, 55, 60),
(72006600, 985120927, '2020-06-02', 22, 22, 22),
(72006920, 985120927, '2020-06-03', 33, 33, 33),
(72007315, 986020836, '2020-07-06', 12, 12, 12),
(72007348, 987020363, '2020-07-04', 24, 25, 26),
(72007442, 985120927, '2020-07-20', 101, 101, 101),
(72007469, 987020363, '2020-07-02', 14, 13, 15),
(72007643, 985120927, '2020-07-18', 100, 100, 100),
(72007846, 988020934, '2020-07-19', 35, 36, 37),
(72007897, 987020363, '2020-07-08', 33, 34, 35),
(72007960, 988020934, '2020-07-18', 16, 16, 16),
(72007964, 988020934, '2020-07-04', 15, 14, 15),
(72012269, 967020258, '2020-12-18', 20, 20, 20),
(72012578, 986020836, '2021-01-01', 110, 110, 110),
(72012611, 986020836, '2020-12-31', 100, 100, 100),
(72012621, 986020836, '2021-01-09', 333, 333, 333);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(7) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_category` varchar(255) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `reg_date` date NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `password`, `user_email`, `user_category`, `tag`, `reg_date`, `last_update`) VALUES
(1000001, 'Admin Dinas Kesehatan', '21232f297a57a5a743894a0e4a801fc3', 'admin@asd.asd', 'DINKES', NULL, '2020-12-13', '2020-12-13 08:10:39'),
(1120114, 'Jagakarsa', '21232f297a57a5a743894a0e4a801fc3', 'fivefive@asd.asd', 'PUSKESMAS', 'Admin Dinas Kesehatan', '2020-12-15', '2020-12-17 14:35:02'),
(1120418, 'Dondy Ginanjar', '92575c476597abfb8598c83541d3fb7d', 'dondy@asd.asd', 'PUSKESMAS', 'Admin Dinas Kesehatan', '2020-12-13', '2020-12-17 03:24:45'),
(1120520, 'Duren Tiga', '21232f297a57a5a743894a0e4a801fc3', 'tiga@asd.asd', 'PUSKESMAS', 'Admin Dinas Kesehatan', '2020-12-15', '2020-12-17 14:34:49'),
(1220338, 'Widi Chandra', '21232f297a57a5a743894a0e4a801fc3', 'widi@asd.asd', 'BIDAN', 'Jagakarsa', '2020-12-18', '2020-12-18 01:34:05'),
(1220811, 'Sari Fransiska', '21232f297a57a5a743894a0e4a801fc3', 'sari@asd.asd', 'BIDAN', 'Jagakarsa', '2020-12-18', '2020-12-18 01:34:54'),
(1220936, 'Tari Gunawan', 'f024197cc16a7c1eda2e4c677616051d', 'tari@asd.asd', 'BIDAN', 'Duren Tiga', '2020-12-13', '2020-12-17 15:14:20'),
(1220946, 'Arga Saragih', '21232f297a57a5a743894a0e4a801fc3', 'arga@asd.asd', 'BIDAN', 'Duren Tiga', '2020-12-17', '2020-12-17 09:33:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partisipan`
--
ALTER TABLE `partisipan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`update_id`,`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
