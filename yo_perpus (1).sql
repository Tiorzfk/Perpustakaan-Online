-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2015 pada 10.31
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yo_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `yo_anggota`
--

CREATE TABLE IF NOT EXISTS `yo_anggota` (
  `id_anggota` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_telp` int(10) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `yo_anggota`
--

INSERT INTO `yo_anggota` (`id_anggota`, `nama`, `username`, `password`, `alamat`, `email`, `no_telp`, `photo`, `level`) VALUES
(2, 'dudung', 'dudung', 'dudung', 'bandung', 'dudung@yahoo.com', 3212321, 'avatar.jpg', 'user'),
(10, 'user', 'user123', 'user', 'asdas', 'a@yahoo.com', 123, 'boi.jpg', 'user'),
(12, 'Tioreza Febrian', 'tio', 'reza', 'Bandung', 'tiorezafk@yahoo.com', 0, 'a.jpg', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yo_buku`
--

CREATE TABLE IF NOT EXISTS `yo_buku` (
  `id_buku` int(3) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `Isbn` int(30) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `date` date NOT NULL,
  `kd_pengarang` varchar(10) NOT NULL,
  `kd_penerbit` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data untuk tabel `yo_buku`
--

INSERT INTO `yo_buku` (`id_buku`, `judul`, `Isbn`, `tahun_terbit`, `jumlah`, `date`, `kd_pengarang`, `kd_penerbit`, `deskripsi`, `gambar`, `status`) VALUES
(55, 'Matematikaa', 1231, 2011, 1, '2014-11-30', '1', '1', 'a', '1.jpg', 0),
(56, 'Laskar Pelangi', 1342, 2014, 3, '2014-11-30', '1', '1', 'asdasdas asdas', '2.jpg', 0),
(57, 'Perahu Kertas', 12312, 2001, 5, '2014-11-30', '2', '4', 'sadasd asdsa  asdas', '3.jpg', 0),
(58, 'Asik asik jos', 12312, 2003, 4, '2014-11-30', '2', '4', 'sadasd asdsa  asdas', '4.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `yo_peminjaman`
--

CREATE TABLE IF NOT EXISTS `yo_peminjaman` (
  `id_peminjam` int(5) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `pengarang` varchar(15) NOT NULL,
  `penerbit` varchar(15) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tahun_terbit` varchar(10) NOT NULL,
  `isbn` int(15) NOT NULL,
  `judul_buku` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `deskripsi` varchar(40) NOT NULL,
  `gambar` varchar(15) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id_peminjam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data untuk tabel `yo_peminjaman`
--

INSERT INTO `yo_peminjaman` (`id_peminjam`, `id_buku`, `id_anggota`, `pengarang`, `penerbit`, `tgl_pinjam`, `tahun_terbit`, `isbn`, `judul_buku`, `username`, `nama`, `deskripsi`, `gambar`, `status`) VALUES
(37, 56, 2, 'Sapri Sihombing', 'PT.Perahu      ', '2015-01-18', '2014      ', 1342, 'Laskar Pelangi      ', 'dudung              ', 'dudung         ', 'asdasdas asdas                          ', '2.jpg          ', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `yo_penerbit`
--

CREATE TABLE IF NOT EXISTS `yo_penerbit` (
  `kd_penerbit` int(5) NOT NULL AUTO_INCREMENT,
  `penerbit` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_penerbit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `yo_penerbit`
--

INSERT INTO `yo_penerbit` (`kd_penerbit`, `penerbit`) VALUES
(1, 'PT.Perahu'),
(2, 'PT.SikAsik'),
(3, 'PT.Tahu'),
(4, 'PT.Lampu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yo_pengarang`
--

CREATE TABLE IF NOT EXISTS `yo_pengarang` (
  `kd_pengarang` int(5) NOT NULL AUTO_INCREMENT,
  `pengarang` varchar(20) NOT NULL,
  PRIMARY KEY (`kd_pengarang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `yo_pengarang`
--

INSERT INTO `yo_pengarang` (`kd_pengarang`, `pengarang`) VALUES
(1, 'Sapri Sihombing'),
(2, 'Tatalu Lala'),
(3, 'Minang Kubo'),
(4, 'Oda Bidada'),
(5, 'Kutu tutung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `yo_pengembalian`
--

CREATE TABLE IF NOT EXISTS `yo_pengembalian` (
  `id_kembali` int(3) NOT NULL AUTO_INCREMENT,
  `id_pinjam` int(3) NOT NULL,
  `tgl_kembali` varchar(10) NOT NULL,
  `denda` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kembali`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `yo_pengembalian`
--

INSERT INTO `yo_pengembalian` (`id_kembali`, `id_pinjam`, `tgl_kembali`, `denda`) VALUES
(5, 37, '2015-01-18', '-');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
