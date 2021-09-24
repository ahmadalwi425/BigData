-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 07:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bigdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `buletin`
--

CREATE TABLE `buletin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori_buletin` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buletin`
--

INSERT INTO `buletin` (`id`, `cover`, `judul`, `konten`, `id_kategori_buletin`) VALUES
(1, 'img/IMG_6877.JPG', 'Bul1-kat1', 'tes', 1),
(2, 'img/IMG_6877.JPG', 'Bul2-kat2', 'test2', 2),
(3, 'img/IMG_6877.JPG', 'bul3', 'tes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ormawa`
--

CREATE TABLE `daftar_ormawa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_ormawa` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_ormawa`
--

INSERT INTO `daftar_ormawa` (`id`, `id_ormawa`, `id_user`) VALUES
(1, 1, 1),
(9, 1, 1),
(10, 2, 1),
(11, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_kampus`
--

CREATE TABLE `data_kampus` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kampus`
--

INSERT INTO `data_kampus` (`id`, `kategori`, `total`) VALUES
(1, 'Fakultas', 10),
(2, 'Program Studi', 15),
(3, 'Dosen', 2),
(4, 'Mahasiswa', 1000),
(5, 'Himpunan Mahasiswa', 10),
(6, 'Unit Kegiatan Mahasiswa (UKM)', 90),
(7, 'Himpunan Daerah', 8);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_divisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `nama_divisi`, `deskripsi`) VALUES
(1, 'BIGDATA ORGANISASI MAHASISWA', 'Bigdata organisasi mahasiswa merupakan data tentang organisasi mahasiswa di lingkungan Institut Teknologi PLN yang di peroleh dari Biro Kominfo BEM KBM IT-PLN'),
(2, 'BIGDATA KEMENTRIAN BEM KBM IT-PLN', 'Bigdata Kemnetrian merupakan data tentang kementrian yang ada di BEM KBM IT-PLN yang diperoleh dari Biro Kominfo'),
(3, 'BIGDATA BIRO BEM KBM IT-PLN', 'Bigdata Biro merupakan data tentang kebiroan yang ada di BEM KBM IT-PLN yang diperoleh dari Biro Kominfo');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kal`
--

CREATE TABLE `jenis_kal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis_kal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_kal`
--

INSERT INTO `jenis_kal` (`id`, `nama_jenis_kal`) VALUES
(1, 'Hari Libur Nasional'),
(4, 'asddsa');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `jenis_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `jenis_produk`) VALUES
(1, 'Baju'),
(2, 'Sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_jurusan`) VALUES
(1, 'jurusan 1'),
(2, 'jurusan 2'),
(3, 'jurusan 3');

-- --------------------------------------------------------

--
-- Table structure for table `kal_akademik`
--

CREATE TABLE `kal_akademik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_jenis_kal` bigint(20) UNSIGNED NOT NULL,
  `id_tahun_ajar` bigint(20) UNSIGNED NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kal_akademik`
--

INSERT INTO `kal_akademik` (`id`, `nama_kegiatan`, `tgl_mulai`, `tgl_selesai`, `id_jenis_kal`, `id_tahun_ajar`, `id_semester`) VALUES
(1, 'Hari Raya Pancasila', '2021-07-01', '2021-07-03', 1, 1, 1),
(2, 'libur1', '2021-08-21', '2021-08-22', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buletin`
--

CREATE TABLE `kategori_buletin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_buletin`
--

INSERT INTO `kategori_buletin` (`id`, `nama_kategori`) VALUES
(1, 'KAJIAN BEM KBM IT-PLN'),
(2, 'INFOGRAFIS KBM IT-PLN');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_level`) VALUES
(1, 'admin'),
(2, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_08_185102_create_level_table', 1),
(5, '2021_08_08_185201_create_divisi_table', 1),
(6, '2021_08_08_185215_create_subdivisi_table', 1),
(7, '2021_08_08_185229_create_submenu_table', 1),
(8, '2021_08_08_185729_create_kal_akademik_table', 1),
(9, '2021_08_08_185906_create_jenis_kal_table', 1),
(10, '2021_08_08_190137_create_tahun_ajar_table', 1),
(11, '2021_08_08_190550_create_peminjaman_table', 1),
(12, '2021_08_08_190606_create_jurusan_table', 1),
(13, '2021_08_08_190702_create_buletin_table', 1),
(14, '2021_08_09_122057_create_kategori_buletin_table', 1),
(15, '2021_08_09_122454_create_ormawa_table', 1),
(16, '2021_08_09_122536_create_daftar_ormawa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ormawa`
--

CREATE TABLE `ormawa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `nama_ormawa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ormawa`
--

INSERT INTO `ormawa` (`id`, `id_jurusan`, `nama_ormawa`) VALUES
(1, 1, 'ormawa 1'),
(2, 3, 'ormawa 2'),
(3, 2, 'ormawa 3');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `id_produk` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `bukti` varchar(250) DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `tgl_dikembalikan` date DEFAULT NULL,
  `barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `tgl_dikembalikan`, `barang`, `status`) VALUES
(1, 1, '2021-08-02', '2021-08-05', '2021-08-23', 'Papan Tulis', 'dikembalikan'),
(2, 1, '2021-08-24', '2021-08-26', NULL, 'Buku', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_jenis_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `id_penjual` bigint(20) UNSIGNED NOT NULL,
  `rekening` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_jenis_produk`, `nama_produk`, `stok`, `harga`, `gambar`, `id_penjual`, `rekening`) VALUES
(1, 2, 'Sneaker edit', 4, 350000, 'img/IMG_6877.JPG', 2, '12312'),
(2, 1, 'Baju Kemeja', 5, 150000, 'img/IMG_6877.JPG', 1, '234234');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 'Ganjil'),
(2, 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `subdivisi`
--

CREATE TABLE `subdivisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_subdivisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_divisi` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subdivisi`
--

INSERT INTO `subdivisi` (`id`, `nama_subdivisi`, `id_divisi`) VALUES
(1, 'Bigdata BEM KBM IT-PLN', 1),
(2, 'Bigdata UKM', 1),
(3, 'Bigdata Himpunan Mahasiswa', 1),
(4, 'Bigdata Himpunan Daerah', 1),
(5, 'ADKESMA', 2),
(6, 'DEDMAS', 2),
(7, 'EKOKRAF', 2),
(8, 'HARMAWA', 2),
(9, 'KASTRAT', 2),
(10, 'AGAMA', 2),
(11, 'PSDM', 2),
(12, 'KPP', 2),
(13, 'P&K', 2),
(14, 'RISTEK', 2),
(15, 'SENBUDORA', 2),
(16, 'KESEKRETARIATAN', 3),
(17, 'INVENTARIS', 3),
(18, 'KEUANGAN', 3);

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_subdiv` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `id_subdiv`, `judul`, `konten`) VALUES
(1, 1, 'qwd', 'sdad'),
(2, 1, 'asdsad', '<p>asdasdasasfad</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajar`
--

CREATE TABLE `tahun_ajar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajar`
--

INSERT INTO `tahun_ajar` (`id`, `tahun_ajar`) VALUES
(1, '2020/2021'),
(2, '2021/2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(11) NOT NULL,
  `id_level` bigint(20) UNSIGNED NOT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `nama`, `email`, `email_verified_at`, `password`, `no_hp`, `id_level`, `id_jurusan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 123123, 'user1', 'user@user.com', NULL, '$2y$10$xJ1hv4KmzcyQXot4kUfZdOfhO4mRt60Tc7zZy3VEpJ4RLkY8Lw8Ae', 5674563, 1, 1, NULL, '2021-08-11 07:12:26', '2021-08-11 07:12:26'),
(2, 112233, 'user2', 'user2@user.com', NULL, '$2y$10$xJ1hv4KmzcyQXot4kUfZdOfhO4mRt60Tc7zZy3VEpJ4RLkY8Lw8Ae', 237832, 2, 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buletin`
--
ALTER TABLE `buletin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori_buletin` (`id_kategori_buletin`);

--
-- Indexes for table `daftar_ormawa`
--
ALTER TABLE `daftar_ormawa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ormawa` (`id_ormawa`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indexes for table `data_kampus`
--
ALTER TABLE `data_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_kal`
--
ALTER TABLE `jenis_kal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kal_akademik`
--
ALTER TABLE `kal_akademik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis_kal` (`id_jenis_kal`),
  ADD KEY `id_tahun_ajar` (`id_tahun_ajar`),
  ADD KEY `id_semester` (`id_semester`);

--
-- Indexes for table `kategori_buletin`
--
ALTER TABLE `kategori_buletin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawa`
--
ALTER TABLE `ormawa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pembeli` (`id_pembeli`),
  ADD KEY `id_barang` (`id_produk`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penjual` (`id_penjual`),
  ADD KEY `id_jenis_produk` (`id_jenis_produk`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subdivisi`
--
ALTER TABLE `subdivisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_subdiv` (`id_subdiv`);

--
-- Indexes for table `tahun_ajar`
--
ALTER TABLE `tahun_ajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buletin`
--
ALTER TABLE `buletin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_ormawa`
--
ALTER TABLE `daftar_ormawa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_kampus`
--
ALTER TABLE `data_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_kal`
--
ALTER TABLE `jenis_kal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kal_akademik`
--
ALTER TABLE `kal_akademik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_buletin`
--
ALTER TABLE `kategori_buletin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ormawa`
--
ALTER TABLE `ormawa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subdivisi`
--
ALTER TABLE `subdivisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahun_ajar`
--
ALTER TABLE `tahun_ajar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buletin`
--
ALTER TABLE `buletin`
  ADD CONSTRAINT `buletin_ibfk_1` FOREIGN KEY (`id_kategori_buletin`) REFERENCES `kategori_buletin` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `daftar_ormawa`
--
ALTER TABLE `daftar_ormawa`
  ADD CONSTRAINT `daftar_ormawa_ibfk_1` FOREIGN KEY (`id_ormawa`) REFERENCES `ormawa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_ormawa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kal_akademik`
--
ALTER TABLE `kal_akademik`
  ADD CONSTRAINT `kal_akademik_ibfk_1` FOREIGN KEY (`id_jenis_kal`) REFERENCES `jenis_kal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kal_akademik_ibfk_2` FOREIGN KEY (`id_tahun_ajar`) REFERENCES `tahun_ajar` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kal_akademik_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ormawa`
--
ALTER TABLE `ormawa`
  ADD CONSTRAINT `ormawa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `users` (`id`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis_produk`) REFERENCES `jenis_produk` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_penjual`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `subdivisi`
--
ALTER TABLE `subdivisi`
  ADD CONSTRAINT `subdivisi_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`id_subdiv`) REFERENCES `subdivisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
