-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 09:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecole`
--

-- --------------------------------------------------------

--
-- Table structure for table `actualite`
--

CREATE TABLE `actualite` (
  `actualite_id` int(11) NOT NULL,
  `actualite_titre` varchar(225) NOT NULL,
  `actualite_contenu` text NOT NULL,
  `actualite_une` int(11) NOT NULL,
  `actualite_source` varchar(150) NOT NULL,
  `actualite_image` varchar(100) NOT NULL,
  `actualite_slug` varchar(200) NOT NULL,
  `actualite_date` datetime NOT NULL,
  `actualite_ajout_date` date NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actualite`
--

INSERT INTO `actualite` (`actualite_id`, `actualite_titre`, `actualite_contenu`, `actualite_une`, `actualite_source`, `actualite_image`, `actualite_slug`, `actualite_date`, `actualite_ajout_date`, `utilisateur_id`) VALUES
(4, 'hhh jjgtk llgl kkkgt kkjkjtj jjt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis velit ultrices, luctus ante et, tincidunt risus. Proin in arcu et odio gravida commodo at non ipsum. Maecenas commodo, enim quis pulvinar ultrices, est dolor pulvinar ante, sagittis rutrum orci lorem aliquam nulla. Duis tincidunt est quam, ut porta metus molestie nec. Aliquam varius libero non sapien vehicula dapibus. Integer elementum est tempus, lacinia mi vitae, tristique quam. Integer ut tortor sed dolor auctor commodo. Duis mattis metus at dolor auctor, in dapibus nisi efficitur. Nullam enim tellus, feugiat ut augue vel, sodales elementum neque. Cras varius eleifend ante, eget dignissim eros tristique ut. Donec at euismod justo, tincidunt imperdiet libero.\n\nSed orci nulla, mattis vel ultricies sed, mollis et nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur orci augue, porta sit amet erat a, tincidunt ultrices velit. Maecenas in ullamcorper arcu, et venenatis turpis. Morbi vulputate id urna sed congue. Vivamus scelerisque posuere accumsan. Fusce in commodo dui, ornare eleifend tellus. Sed consequat molestie accumsan. Pellentesque porttitor a neque sit amet dignissim. Nam id augue non turpis vulputate fringilla nec sed est. Nunc volutpat a lacus eu rutrum. Nullam eget consectetur mauris. Duis eu blandit ligula.\n\nCurabitur viverra massa pharetra, commodo diam in, vehicula arcu. Nam blandit dui ante, at porta metus congue at. Vestibulum eu mauris id nibh bibendum tincidunt a id libero. In in tempus dolor, maximus lacinia est. Proin pretium ultrices lacus, non dapibus nulla congue ac. Vivamus vitae nisi nisl. Donec nec risus odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur quis leo eros. Mauris rhoncus turpis sit amet lectus aliquam, at tempor odio luctus. Maecenas non massa elit. Maecenas iaculis sem tempus tortor ultrices, a finibus mi placerat. Fusce tempus placerat quam, non efficitur elit eleifend ac. Curabitur tempus lacus a tincidunt finibus. Vestibulum in enim suscipit, laoreet metus quis, elementum augue. Aliquam posuere enim viverra aliquet ultricies.', 1, 'dddddddddddddddddddddddd', '2016_07_16_02_27_06_29590.jpg', 'hhh-jjgtk-llgl-kkkgt-kkjkjtj-jjt-4', '2016-07-16', '2016-07-24', 25),
(6, 'Returns the current time as a UNIX timestamp, referenced either to your server’s local time or any PHP suported timezone, based on the', '<p>his function is identical to PHP’s <a class="reference external" href="http://php.net/manual/en/function.date.php">date()</a> function, except that it lets you use MySQL style date codes, where each code letter is preceded with a percent sign, e.g. <cite>%Y %m %d</cite></p>\r\n<p>The benefit of doing dates this way is that you don’t have to worry about escaping any characters that are not date codes, as you would normally have to do with the <tt class="docutils literal"><span class="pre">date()</span></tt> function.</p>\r\n<p>Example:</p>\r\n<div class="highlight-ci">\r\n<div class="highlight">\r\n<pre><span class="nv">$datestring</span> <span class="o">=</span> <span class="s1">''Year: %Y Month: %m Day: %d - %h:%i %a''</span><span class="p">;</span>\r\n<span class="nv">$time</span> <span class="o">=</span> <span class="nb">time</span><span class="p">();</span>\r\n<span class="k">echo</span> <span class="nx">mdate</span><span class="p">(</span><span class="nv">$datestring</span><span class="p">,</span> <span class="nv">$time</span><span class="p">);<br><br>jjjs</span></pre>\r\n</div>\r\n</div>', 1, 'www.codeigniter.com', '2016_07_25_19_01_06_15588.jpg', 'returns-the-current-time-as-a-unix-timestamp-referenced-either-to-your-server-s-local-time-or-any-php-suported-timezone-based-on-the-6', '2016-07-22 02:45:06', '2016-07-22', 25),
(7, 'hhhndbnj jjd ikd  kmjjds', '<p>vfg25822</p>', 0, 'dddddddddddddddddddddddd', '2016_07_30_23_53_00_28520.jpg', 'hhhndbnj-jjd-ikd-kmjjds-7', '2016-07-25 13:04:16', '2016-07-25', 25),
(8, 'depuis sa promulgation par le Président de la République et sa publication au Journal Officiel de la', '<p>kjkjjjj</p>', 0, 'dddddddddddddddddddddddd', '2016_07_26_08_35_14_16928.jpg', 'depuis-sa-promulgation-par-le-president-de-la-republique-et-sa-publication-au-journal-officiel-de-la-8', '2016-07-26 07:35:15', '2016-07-27', 25),
(9, 'To crack WEP, you''ll need to launch Konsole, BackTrack''s built-in command', '<p>To crack WEP, you''ll need to launch Konsole, BackTrack''s built-in command line. It''s right there on the taskbar in the lower left corner, second button to the right. Now, the commands.</p>\r\n<p>First run the following to get a list of your network interfaces:</p>', 0, 'dddddddddddddddddddddddd', '2016_07_30_23_45_34_4747.jpg', 'to-crack-wep-you-ll-need-to-launch-konsole-backtrack-s-built-in-command- 9', '2016-07-30 22:41:20', '2016-07-30', 25);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_nom` varchar(100) NOT NULL,
  `client_phone` varchar(100) NOT NULL,
  `client_logo` varchar(100) NOT NULL,
  `client_site` varchar(100) NOT NULL,
  `client_date` datetime NOT NULL ,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_nom`, `client_phone`, `client_logo`, `client_site`, `client_date`, `utilisateur_id`) VALUES
(1, 'FINASYS', '49385000', 'logo.png', 'www.ecolemedia.net', '2016-07-19 20:45:59', 25),
(2, 'orange', '55888565', '2016_07_19_21_45_59_29339.jpg', 'www.orange.ci', '2016-07-19 20:45:59', 25);

-- --------------------------------------------------------

--
-- Table structure for table `flash`
--

CREATE TABLE `flash` (
  `flash_id` int(11) NOT NULL,
  `flash_titre` varchar(100) NOT NULL,
  `flash_contenu` varchar(250) NOT NULL,
  `flash_date` datetime NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flash`
--

INSERT INTO `flash` (`flash_id`, `flash_titre`, `flash_contenu`, `flash_date`, `utilisateur_id`) VALUES
(2, 'fffffff', 'gg  hh jjh jjnh hhb', '2016-07-15 09:45:45', 25),
(3, 'fffffff', 'ggg hb jbh jnnbvvg', '2016-07-15 09:46:04', 25);

-- --------------------------------------------------------

--
-- Table structure for table `librairie`
--

CREATE TABLE `librairie` (
  `librairie_id` int(11) NOT NULL,
  `librairie_nom` varchar(225) NOT NULL,
  `librairie_contenu` text NOT NULL,
  `librairie_logo` varchar(225) NOT NULL,
  `librairie_phone` int(11) NOT NULL,
  `librairie_date` datetime NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `librairie_logo2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librairie`
--

INSERT INTO `librairie` (`librairie_id`, `librairie_nom`, `librairie_contenu`, `librairie_logo`, `librairie_phone`, `librairie_date`, `utilisateur_id`, `librairie_logo2`) VALUES
(10, 'librairie de france', '<p>ggg jhgffgjj</p>', '2016_07_25_15_48_20_19565.png', 49385, '2016-07-25 14:48:20', 25, '4500'),
(11, 'librairie de france', '<p>ggg jhgffgjj</p>', '2016_07_25_18_29_34_31961.png', 49385000, '2016-07-25 14:48:20', 25, '6000');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_titre` varchar(225) NOT NULL,
  `media_image` varchar(225) NOT NULL,
  `media_lien` varchar(225) NOT NULL,
  `media_type` varchar(100) NOT NULL,
  `media_slug` varchar(225) NOT NULL,
  `media_category_id` int(11) NOT NULL,
  `media_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_titre`, `media_image`, `media_lien`, `media_type`, `media_slug`, `media_category_id`, `media_date`) VALUES
(1, '222', '2016_08_15_19_37_36_29159.jpg', '', 'photo', '222-1', 3, '0000-00-00 00:00:00'),
(2, '', '2016_08_15_19_45_17_9749.jpg', 'https://www.youtube.com/watch?v=6EInO2rcwcE', 'video', 'jeff-deberlin-2', 2, '0000-00-00 00:00:00'),
(3, 'jjhhdd jnhhhjjhd', '2016_08_15_19_46_35_19754.jpg', '', 'photo', 'jjhhdd-jnhhhjjhd-3', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `media_category`
--

CREATE TABLE `media_category` (
  `media_category_id` int(11) NOT NULL,
  `media_category_titre` varchar(225) NOT NULL,
  `media_category_desc` varchar(225) NOT NULL DEFAULT '',
  `media_category_slug` varchar(225) NOT NULL,
  `media_category_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_category`
--

INSERT INTO `media_category` (`media_category_id`, `media_category_titre`, `media_category_desc`, `media_category_slug`, `media_category_date`) VALUES
(2, 'fete de l independance a yamoussokro le show etait vraiment showwwwwwww', '0', 'fete-de-l-independance-a-yamoussokro-le-show-etait-vraiment-showwwwwwww-2', '2016-08-12'),
(3, 'c etait vraiment cool', '0', 'c-etait-vraiment-cool-3', '2016-08-12'),
(4, 'hhd  jjd', '', 'hhd-jjd-4', '2016-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `publicite`
--

CREATE TABLE `publicite` (
  `publicite_id` int(11) NOT NULL,
  `publicite_nom` varchar(100) NOT NULL,
  `position_id` int(11) NOT NULL,
  `publicite_date_debut` datetime NOT NULL,
  `publicite_date_fin` datetime NOT NULL,
  `publicite_image` varchar(100) NOT NULL,
  `publicite_url` varchar(200) NOT NULL,
  `publicite_status` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicite`
--

INSERT INTO `publicite` (`publicite_id`, `publicite_nom`, `position_id`, `publicite_date_debut`, `publicite_date_fin`, `publicite_image`, `publicite_url`, `publicite_status`, `client_id`, `utilisateur_id`) VALUES
(1, 'FINASYS', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016_07_19_21_50_20_24613.jpg', 'www.ecolemedia.net', 0, 1, 25),
(2, 'apply day', 1, '2016-07-22 22:04:37', '2016-08-23 22:04:37', '2016_07_19_22_04_37_26106.jpg', 'www.orange.ci', 1, 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pub_position`
--

CREATE TABLE `pub_position` (
  `pub_position_id` int(11) NOT NULL,
  `pub_position_nom` varchar(100) NOT NULL,
  `pub_position_desc` varchar(225) NOT NULL,
  `pub_position_url` varchar(200) NOT NULL,
  `pub_position_image` varchar(100) NOT NULL,
  `pub_position_longueur` int(11) NOT NULL,
  `pub_position_largeur` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `pub_position_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pub_position`
--

INSERT INTO `pub_position` (`pub_position_id`, `pub_position_nom`, `pub_position_desc`, `pub_position_url`, `pub_position_image`, `pub_position_longueur`, `pub_position_largeur`, `utilisateur_id`, `pub_position_date`) VALUES
(1, 'TOP BANNER', 'top pub', 'www.ecolemedia.net', '2016_07_19_21_50_20_24613.jpg', 2050, 300, 25, '2016-07-19 20:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_nom` varchar(100) NOT NULL,
  `utilisateur_prenoms` varchar(100) NOT NULL,
  `utilisateur_login` varchar(100) NOT NULL,
  `utilisateur_password` varchar(225) NOT NULL,
  `utilisateur_status` int(11) NOT NULL,
  `utilisateur_role` int(11) NOT NULL,
  `utilisateur_phone` varchar(100) NOT NULL,
  `utilisateur_date_creation` datetime NOT NULL,
  `utilisateur_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_id`, `utilisateur_nom`, `utilisateur_prenoms`, `utilisateur_login`, `utilisateur_password`, `utilisateur_status`, `utilisateur_role`, `utilisateur_phone`, `utilisateur_date_creation`, `utilisateur_email`) VALUES
(3, 'cedric', 'assoumou', 'cedric', '25f9e794323b453885f5181f1b624d0b', 0, 0, '588855555555555', '2016-07-12 10:20:14', 'k.hachef@yahoo.fr'),
(25, 'ferdinand', 'ndjomon', 'admin', '25f9e794323b453885f5181f1b624d0b', 0, 0, '254688554', '2016-07-12 12:50:30', 'k.hachef@yahoo.fr');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_titre` varchar(100) NOT NULL,
  `video_lien` varchar(100) NOT NULL,
  `video_une` int(11) NOT NULL,
  `video_slug` varchar(150) NOT NULL,
  `video_date` datetime NOT NULL,
  `utilisateur_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_titre`, `video_lien`, `video_une`, `video_slug`, `video_date`, `utilisateur_id`) VALUES
(1, 'test1  jjdjjd fffff', 'https://www.youtube.com/watch?v=RodRgz8RLPc', 0, 'test1-jjdjjd-fffff-1', '2016-07-14 12:45:24', 25),
(2, 'test1 gggggh  jjdjjd fffff', 'https://www.youtube.com/watch?v=RodRgz8RLPc', 1, 'test1-gggggh-jjdjjd-fffff-2', '2016-07-14 13:04:23', 25),
(3, 'Matin Bonheur de RTI 1 du 19 juillet 2016 avec Marième Touré- Partie 3', 'https://www.youtube.com/watch?v=RodRgz8RLPc', 0, 'matin-bonheur-de-rti-1-du-19-juillet-2016-avec-marieme-toure-partie-3-3', '2016-07-19 17:19:51', 25),
(5, 'test1  jjdjjd fffff', 'https://www.youtube.com/watch?v=RodRgz8RLPc', 0, 'test1-jjdjjd-fffff-5', '2016-07-21 12:51:55', 25),
(6, 'Education Nationale: Le Ministre Kandia Camara échangent avec les Inspecteurs Généraux', 'https://www.youtube.com/watch?v=RodRgz8RLPc', 0, 'education-nationale-le-ministre-kandia-camara-echangent-avec-les-inspecteurs-generaux-6', '2016-07-21 13:34:10', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`actualite_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `flash`
--
ALTER TABLE `flash`
  ADD PRIMARY KEY (`flash_id`);

--
-- Indexes for table `librairie`
--
ALTER TABLE `librairie`
  ADD PRIMARY KEY (`librairie_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `media_category`
--
ALTER TABLE `media_category`
  ADD PRIMARY KEY (`media_category_id`);

--
-- Indexes for table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`publicite_id`);

--
-- Indexes for table `pub_position`
--
ALTER TABLE `pub_position`
  ADD PRIMARY KEY (`pub_position_id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`utilisateur_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `actualite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `flash`
--
ALTER TABLE `flash`
  MODIFY `flash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `librairie`
--
ALTER TABLE `librairie`
  MODIFY `librairie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `media_category`
--
ALTER TABLE `media_category`
  MODIFY `media_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `publicite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pub_position`
--
ALTER TABLE `pub_position`
  MODIFY `pub_position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;