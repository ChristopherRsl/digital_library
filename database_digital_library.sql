-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 06:42 AM
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
-- Database: `detikcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `title`, `category`, `description`, `total`, `file`, `cover`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Great Gatsby', 'Fiction', 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway\'s interactions with mysterious millionaire Jay Gatsby and Gatsby\'s obsession to reunite with his former lover, Daisy Buchanan.', 22, 'pdfs/the great gatsby.pdf', 'covers/the great gatsby.jpg', '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(2, 1, 'Holy Mother', 'Mystery', 'Terjadi pembunuhan mengerikan terhadap seorang anak laki-laki di kota tempat Honami tinggal. Korban bahkan diperkosa setelah dibunuh. Berita itu membuat Honami mengkhawatirkan keselamatan putri satu-satunya yang dia miliki. Pihak kepolisian bahkan tidak bisa dia percayai. Apa yang akan dia lakukan untuk melindungi putri tunggalnya itu?', 33, 'pdfs/holy mother.pdf', 'covers/holy mother.jpg', '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(3, 1, 'Harry Potter', 'Fantasy', 'Harry Potter is a series of seven fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.', 44, 'pdfs/harry potter.pdf', 'covers/harry potter.jpg', '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(4, 1, 'Dolor voluptas ullam est.', 'Drama', 'Sit perferendis laborum possimus accusantium. Iusto vero veritatis deleniti provident libero. Eaque aut ut quasi veritatis voluptatibus. Earum et repellendus facilis et molestiae.', 30, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(5, 1, 'Molestias molestiae qui sit rerum.', 'Comics', 'Dolorem et quibusdam possimus temporibus. Excepturi tenetur reiciendis sint hic. Quia quos harum voluptate officia.', 53, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(6, 1, 'Quis deleniti dolorum commodi vitae et.', 'Fantasy', 'Et quia cum nihil voluptatum atque quod. Esse consequatur et similique ipsum omnis ad tempora. Cupiditate sit atque in iste voluptatum nobis. Quia rerum totam sint quisquam.', 71, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(7, 1, 'Cupiditate doloribus dolore amet deserunt debitis.', 'Comics', 'Accusamus voluptatibus officia eveniet. Est sunt illum sed. Ut porro iure consequuntur dolor velit.', 73, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(8, 1, 'Quo et omnis recusandae non veritatis.', 'Poetry', 'Modi et est est et. Modi quae voluptate impedit.', 80, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(9, 1, 'Facilis ipsum laboriosam temporibus fugiat beatae eligendi.', 'Fantasy', 'Non enim ut nesciunt est ullam sint. Molestias culpa voluptatem necessitatibus quasi. Est nobis dolorem at fuga et.', 36, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(10, 1, 'Eum rem error officia.', 'Poetry', 'Sint dolores sit nobis perferendis. Facere mollitia reiciendis sunt unde placeat quasi sed. Saepe et corrupti quia odit voluptatem quaerat sint. Accusantium placeat et quasi odio aut ut.', 65, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(11, 1, 'Dicta quidem provident recusandae esse tempora.', 'Fiction', 'Vero et placeat ducimus iure. Nesciunt cupiditate eaque nihil iure incidunt dolorum quia. Voluptatum iure quo debitis aliquam quisquam modi.', 91, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(12, 1, 'Aut sed qui architecto autem in enim.', 'Fantasy', 'Dolorum qui nobis aut maxime aspernatur et placeat. Ratione quos ab accusamus dolorum ad quasi maiores. Voluptatem nesciunt aspernatur vero ea repudiandae numquam eum.', 71, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(13, 1, 'Et maxime aliquam doloremque odio temporibus eos.', 'Mystery', 'Ducimus eum qui velit nisi est harum qui dolore. Illum dolor omnis facilis voluptatem incidunt beatae. Maiores facilis asperiores soluta numquam et molestiae quis.', 50, NULL, NULL, '2023-07-23 21:27:06', '2023-07-23 21:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bob', 'Bob@gmail.com', '2023-07-23 21:27:05', '$2y$10$qg3pxcX2h.oR0QvqateLBuBwisXCUaZdeckrzBwjIvrT82K4iyBbK', 'user', '6wdwRMZNDi', '2023-07-23 21:27:05', '2023-07-23 21:27:05'),
(2, 'admin', 'admin@gmail.com', '2023-07-23 21:27:06', '$2y$10$tN.8xe4qSbXK9stwDtguiOVO9pSS6/cLk8J2IlIu9UJr4OHKH/qwy', 'admin', 'Wfjfw2vtoJ', '2023-07-23 21:27:06', '2023-07-23 21:27:06'),
(3, 'Detik', 'detik@detik.com', '2023-07-23 21:27:06', '$2y$10$rU2p80mtQveHHzcJJEtIYepAA/f9A6z.qd1SzlitVNIvSRkvyTuTq', 'admin', '3iSQob3yi4', '2023-07-23 21:27:06', '2023-07-23 21:27:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
