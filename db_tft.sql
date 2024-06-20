-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 07:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tft`
--

-- --------------------------------------------------------

--
-- Table structure for table `champions`
--

CREATE TABLE `champions` (
  `id` int(100) NOT NULL,
  `api_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` int(10) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `champions`
--

INSERT INTO `champions` (`id`, `api_name`, `name`, `cost`, `image_url`) VALUES
(1, 'TFT11_Aatrox', 'Aatrox', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_aatrox_mobile.png'),
(2, 'TFT11_Ahri', 'Ahri', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_ahri_mobile.png'),
(3, 'TFT11_Amumu', 'Amumu', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_amumu_mobile.png'),
(4, 'TFT11_Annie', 'Annie', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_annie_mobile.png'),
(5, 'TFT11_Aphelios', 'Aphelios', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_aphelios_mobile.png'),
(6, 'TFT11_Ashe', 'Ashe', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_ashe_mobile.png'),
(7, 'TFT11_Alune', 'Alune', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_alune_mobile.png'),
(8, 'TFT11_Bard', 'Bard', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_bard_mobile.png'),
(9, 'TFT11_Caitlyn', 'Caitlyn', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_caitlyn_mobile.png'),
(10, 'TFT11_ChoGath', 'Cho\'Gath', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_chogath_mobile.png'),
(11, 'TFT11_Darius', 'Darius', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_darius_mobile.png'),
(12, 'TFT11_Galio', 'Galio', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_galio_mobile.png'),
(13, 'TFT11_Garen', 'Garen', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_garen_mobile.png'),
(14, 'TFT11_Hwei', 'Hwei', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_hwei_mobile.png'),
(15, 'TFT11_Illaoi', 'Illaoi', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_illaoi_mobile.png'),
(16, 'TFT11_Irelia', 'Irelia', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_irelia_mobile.png'),
(17, 'TFT11_Janna', 'Janna', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_janna_mobile.png'),
(18, 'TFT11_Kaisa', 'Kai\'Sa', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_kaisa_mobile.png'),
(19, 'TFT11_Kayn', 'Kayn', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_kayn_mobile.png'),
(20, 'TFT11_KhaZix', 'Kha\'Zix', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_khazix_mobile.png'),
(21, 'TFT11_Kindred', 'Kindred', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_kindred_mobile.png'),
(22, 'TFT11_KogMaw', 'Kog\'Maw', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_kogmaw_mobile.png'),
(23, 'TFT11_LeeSin', 'Lee Sin', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_leesin_mobile.png'),
(24, 'TFT11_Lillia', 'Lillia', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_lillia_mobile.png'),
(25, 'TFT11_Lissandra', 'Lissandra', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_lissandra_mobile.png'),
(26, 'TFT11_Lux', 'Lux', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_lux_mobile.png'),
(27, 'TFT11_Malphite', 'Malphite', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_malphite_mobile.png'),
(28, 'TFT11_Morgana', 'Morgana', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_morgana_mobile.png'),
(29, 'TFT11_Neeko', 'Neeko', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_neeko_mobile.png'),
(30, 'TFT11_Ornn', 'Ornn', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_ornn_mobile.png'),
(31, 'TFT11_Qiyana', 'Qiyana', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_qiyana_mobile.png'),
(32, 'TFT11_Senna', 'Senna', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_senna_mobile.png'),
(33, 'TFT11_Sett', 'Sett', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_sett_mobile.png'),
(34, 'TFT11_Shen', 'Shen', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_shen_mobile.png'),
(35, 'TFT11_Riven', 'Riven', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_riven_mobile.png'),
(36, 'TFT11_Sivir', 'Sivir', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_sivir_mobile.png'),
(37, 'TFT11_Soraka', 'Soraka', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_soraka_mobile.png'),
(38, 'TFT11_Sylas', 'Sylas', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_sylas_mobile.png'),
(39, 'TFT11_Syndra', 'Syndra', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_syndra_mobile.png'),
(40, 'TFT11_TahmKench', 'Tahm Kench', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_tahmkench_mobile.png'),
(41, 'TFT11_Teemo', 'Teemo', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_teemo_mobile.png'),
(42, 'TFT11_Thresh', 'Thresh', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_thresh_mobile.png'),
(43, 'TFT11_Tristana', 'Tristana', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_tristana_mobile.png'),
(44, 'TFT11_Udyr', 'Udyr', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_udyr_mobile.png'),
(45, 'TFT11_Volibear', 'Volibear', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_volibear_mobile.png'),
(46, 'TFT11_WuKong', 'Wukong', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_wukong_mobile.png'),
(47, 'TFT11_Yasuo', 'Yasuo', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_yasuo_mobile.png'),
(48, 'TFT11_Yone', 'Yone', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_yone_mobile.png'),
(49, 'TFT11_Yorick', 'Yorick', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_yorick_mobile.png'),
(50, 'TFT11_Zoe', 'Zoe', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_zoe_mobile.png'),
(51, 'TFT11_Zyra', 'Zyra', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_zyra_mobile.png'),
(52, 'TFT11_FortuneYord', 'Kobuko', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_fortuneyord_mobile.png'),
(53, 'TFT11_RekSai', 'Rek\'Sai', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_reksai_mobile.png'),
(54, 'TFT11_Xayah', 'Xayah', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_xayah_mobile.png'),
(55, 'TFT11_Gnar', 'Gnar', 2, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_gnar_mobile.png'),
(56, 'TFT11_Rakan', 'Rakan', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_rakan_mobile.png'),
(57, 'TFT11_Jax', 'Jax', 1, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_jax_mobile.png'),
(58, 'TFT11_Diana', 'Diana', 3, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_diana_mobile.png'),
(59, 'TFT11_Azir', 'Azir', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_azir_mobile.png'),
(60, 'TFT11_Nautilus', 'Nautilus', 4, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_nautilus_mobile.png'),
(61, 'TFT11_XayahRakanDummy', 'Xayah & Rakan', 5, 'https://raw.communitydragon.org/latest/game/assets/ux/tft/championsplashes/tft11_xayahrakandummy_mobile.png');

-- --------------------------------------------------------

--
-- Table structure for table `champion_traits`
--

CREATE TABLE `champion_traits` (
  `id` int(255) NOT NULL,
  `champion_id` int(255) NOT NULL,
  `trait_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `champion_traits`
--

INSERT INTO `champion_traits` (`id`, `champion_id`, `trait_id`) VALUES
(1, 1, 1),
(2, 1, 10),
(3, 1, 18),
(4, 2, 20),
(5, 2, 9),
(6, 3, 15),
(7, 3, 26),
(8, 4, 2),
(9, 4, 21),
(10, 5, 20),
(11, 5, 23),
(12, 6, 15),
(13, 6, 23),
(14, 7, 6),
(15, 7, 21),
(16, 8, 24),
(17, 8, 19),
(18, 9, 1),
(19, 9, 23),
(20, 10, 24),
(21, 10, 27),
(22, 11, 6),
(23, 11, 16),
(24, 12, 28),
(25, 12, 18),
(26, 13, 28),
(27, 13, 26),
(28, 14, 24),
(29, 14, 12),
(30, 15, 1),
(31, 15, 9),
(32, 15, 26),
(33, 16, 28),
(34, 16, 16),
(35, 17, 17),
(36, 17, 21),
(37, 18, 10),
(38, 18, 19),
(39, 19, 1),
(40, 19, 4),
(41, 20, 14),
(42, 20, 4),
(43, 21, 20),
(44, 21, 7),
(45, 21, 4),
(46, 22, 24),
(47, 22, 21),
(48, 22, 23),
(49, 23, 17),
(50, 23, 16),
(51, 24, 24),
(52, 24, 21),
(53, 25, 15),
(54, 25, 9),
(55, 26, 15),
(56, 26, 9),
(57, 27, 14),
(58, 27, 27),
(59, 28, 1),
(60, 28, 8),
(61, 29, 24),
(62, 29, 14),
(63, 29, 9),
(64, 30, 7),
(65, 30, 27),
(66, 31, 14),
(67, 31, 16),
(68, 32, 10),
(69, 32, 23),
(70, 33, 20),
(71, 33, 6),
(72, 33, 26),
(73, 34, 1),
(74, 34, 27),
(75, 35, 28),
(76, 35, 11),
(77, 35, 18),
(78, 36, 28),
(79, 36, 19),
(80, 37, 14),
(81, 37, 11),
(82, 38, 6),
(83, 38, 18),
(84, 39, 20),
(85, 39, 9),
(86, 40, 24),
(87, 40, 18),
(88, 41, 2),
(89, 41, 19),
(90, 42, 20),
(91, 42, 27),
(92, 43, 2),
(93, 43, 16),
(94, 44, 10),
(95, 44, 27),
(96, 44, 25),
(97, 45, 10),
(98, 45, 16),
(99, 46, 22),
(100, 46, 14),
(101, 46, 8),
(102, 47, 20),
(103, 47, 16),
(104, 48, 6),
(105, 48, 4),
(106, 49, 6),
(107, 49, 27),
(108, 50, 2),
(109, 50, 28),
(110, 50, 9),
(111, 51, 28),
(112, 51, 8),
(113, 52, 2),
(114, 52, 18),
(115, 53, 7),
(116, 53, 18),
(117, 54, 17),
(118, 54, 3),
(119, 54, 19),
(120, 55, 7),
(121, 55, 26),
(122, 56, 17),
(123, 56, 3),
(124, 56, 11),
(125, 57, 10),
(126, 57, 26),
(127, 58, 17),
(128, 58, 8),
(129, 59, 7),
(130, 59, 21),
(131, 60, 24),
(132, 60, 26),
(133, 61, 3),
(134, 61, 17),
(135, 61, 5);

-- --------------------------------------------------------

--
-- Table structure for table `comps`
--

CREATE TABLE `comps` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comp_details`
--

CREATE TABLE `comp_details` (
  `id` int(11) NOT NULL,
  `id_champion` int(11) NOT NULL,
  `id_comp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comp_trait_details`
--

CREATE TABLE `comp_trait_details` (
  `id` int(11) NOT NULL,
  `id_trait` int(11) NOT NULL,
  `id_comp` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traits`
--

CREATE TABLE `traits` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `min_units` varchar(255) NOT NULL,
  `max_units` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traits`
--

INSERT INTO `traits` (`id`, `name`, `min_units`, `max_units`, `image_url`) VALUES
(1, 'Ghostly', '2,4,6,8', '3,5,7,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_ghostly.png'),
(2, 'Fortune', '3,5,7', '4,6,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_fortune.png'),
(3, 'Lovers', '1', '1', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_lovers.png'),
(4, 'Reaper', '2,4', '3,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_reaper.png'),
(5, 'Trickshot/Altruist', '1', '25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_trickshot/altruist.png'),
(6, 'Umbral', '2,4,6,9', '3,5,8,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_umbral.png'),
(7, 'Dryad', '2,4,6', '3,5,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_dryad.png'),
(8, 'Sage', '2,3,4,5', '2,3,4,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_sage.png'),
(9, 'Arcanist', '2,4,6,8', '3,5,7,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_arcanist.png'),
(10, 'Inkshadow', '3,5,7', '4,6,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_inkshadow.png'),
(11, 'Altruist', '2,3,4', '2,3,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_altruist.png'),
(12, 'Artist', '1', '25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_artist.png'),
(13, 'Exalted', '3,5', '4,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_exalted.png'),
(14, 'Heavenly', '2,3,4,5,6,7', '2,3,4,5,6,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_heavenly.png'),
(15, 'Porcelain', '2,4,6', '3,5,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_porcelain.png'),
(16, 'Duelist', '2,4,6,8', '3,5,7,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_duelist.png'),
(17, 'Dragonlord', '2,3,4,5', '2,3,4,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_dragonlord.png'),
(18, 'Bruiser', '2,4,6,8', '3,5,7,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_bruiser.png'),
(19, 'Trickshot', '2,4', '3,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_trickshot.png'),
(20, 'Fated', '3,5,7,10', '4,6,9,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_fated.png'),
(21, 'Invoker', '2,4,6', '3,5,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_invoker.png'),
(22, 'Great', '1', '25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_great.png'),
(23, 'Sniper', '2,4,6', '3,5,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_sniper.png'),
(24, 'Mythic', '3,5,7,10', '4,6,9,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_mythic.png'),
(25, 'Spirit Walker', '1', '25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_spirit walker.png'),
(26, 'Warden', '2,4,6', '3,5,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_warden.png'),
(27, 'Behemoth', '2,4,6', '3,5,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_behemoth.png'),
(28, 'Storyweaver', '3,5,7,10', '4,6,9,25000', 'https://raw.communitydragon.org/latest/game/assets/ux/tft/dynamicui/set11/trait_storyweaver.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `champions`
--
ALTER TABLE `champions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `champion_traits`
--
ALTER TABLE `champion_traits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comps`
--
ALTER TABLE `comps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_details`
--
ALTER TABLE `comp_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_trait_details`
--
ALTER TABLE `comp_trait_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traits`
--
ALTER TABLE `traits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `champions`
--
ALTER TABLE `champions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `champion_traits`
--
ALTER TABLE `champion_traits`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `comps`
--
ALTER TABLE `comps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comp_details`
--
ALTER TABLE `comp_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comp_trait_details`
--
ALTER TABLE `comp_trait_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traits`
--
ALTER TABLE `traits`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE comps ADD CONSTRAINT comps_users_FK FOREIGN KEY (created_by) REFERENCES users(id);
RENAME TABLE comp_details TO comp_champion_details;

ALTER TABLE comp_champion_details ADD CONSTRAINT comp_champion_details_champions_FK FOREIGN KEY (id_champion) REFERENCES champions(id);
ALTER TABLE comp_champion_details ADD CONSTRAINT comp_champion_details_comps_FK FOREIGN KEY (id_comp) REFERENCES comps(id);

ALTER TABLE comp_trait_details ADD CONSTRAINT comp_trait_details_traits_FK FOREIGN KEY (id_trait) REFERENCES traits(id);
ALTER TABLE comp_trait_details ADD CONSTRAINT comp_trait_details_comps_FK FOREIGN KEY (id_comp) REFERENCES comps(id);

ALTER TABLE champion_traits ADD CONSTRAINT champion_traits_champions_FK FOREIGN KEY (champion_id) REFERENCES champions(id);
ALTER TABLE champion_traits ADD CONSTRAINT champion_traits_traits_FK FOREIGN KEY (trait_id) REFERENCES traits(id);

ALTER TABLE users MODIFY COLUMN password varchar(200) NOT NULL;
ALTER TABLE users ADD CONSTRAINT users_unique UNIQUE KEY (username);

