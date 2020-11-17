-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 06:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myposts`
--

CREATE TABLE IF NOT EXISTS `myposts` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `time` varchar(8) NOT NULL,
  `date` varchar(10) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `myposts`
--

INSERT INTO `myposts` (`id`, `title`, `writer`, `time`, `date`, `text`) VALUES
(1, '5 Peano’s Existence Theorem', 'Admin', '06:25:14', '2016/06/08', 'This section contains two proofs of a classical existence theorem due to Peano.\r\nTheorem 5.1. Suppose f : I × D → IRn is continuous and (t0, y0) ∈ I × D. Then there\r\nexists δ > 0 so that (IVP) has a solution defined on (t0 − δ, t0 + δ).\r\n5.1 First Proof\r\nThe proof will show the existence of a solution on the forward interval [t0, t+δ), the backward\r\ncase being similar.\r\nThe ensuing analysis will call upon various constants that are presently notated. Let\r\n• ε > 0 so that y0 + εB ¯ ⊆ D and [t0, t0 + ε] ⊆ I,\r\n• M = sup{ f(t, y) : y ∈ y0 + εB, ¯ |t − t0| ≤ ε},\r\n• δ < ε\r\nM .'),
(2, '5.1 First Proof', 'Admin', '06:25:39', '2016/06/08', 'For t0 ≤ t ≤ t1, yN,0(t) = y0 + Rtt 0 f(s, y0) ds\r\nfor t1 ≤ t ≤ t2, yN,1(t) = yN,0(t1) + Rtt 12 fs, yN,0(s − h) ds\r\nfor t2 ≤ t ≤ t3, yN,2(t) = yN,1(t2) + Rtt 23 fs, yN,1(s − h) ds\r\n...\r\n...\r\nfor tN−1 ≤ t ≤ tN , yN,N−1(t) = yN,N−2(tN−1) + Rtt N N−1 fs, yN,N−1(s − h) ds\r\nEach yN(·) satisfies the equation\r\nyN(t) = y0 + Zt0t fs, yN(s − h) ds for all t ∈ [t0, t0 + δ], (1)\r\nwhere yN(s − h) is set to the default value of y0 when s ∈ [t0, t0 + h].\r\n1s, yN,0(s − h) ds\r\nfor t2 ≤ t ≤ t3, yN,2(t) = yN,1(t2) + Rtt 23 fs, yN,1(s − h) ds\r\n...\r\n...\r\nfor tN−1 ≤ t ≤ tN , yN,N−1(t) = yN,N−2(tN−1) + Rtt N N−1 fs, yN,N−1(s − h) ds\r\nEach yN(·) satisfies the equation\r\nyN(t) = y0 + Zt0t fs, yN(s − h) ds for all t ∈ [t0, t0 + δ], (1)\r\nwhere yN(s − h) is set to the default value of y0 when s ∈ [t0, t0 + h].\r\n1s, yN,1(s − h) ds\r\n...\r\n...\r\nfor tN−1 ≤ t ≤ tN , yN,N−1(t) = yN,N−2(tN−1) + Rtt N N−1 fs, yN,N−1(s − h) ds\r\nEach yN(·) satisfies the equation\r\nyN(t) = y0 + Zt0t fs, yN(s − h) ds for all t ∈ [t0, t0 + δ], (1)\r\nwhere yN(s − h) is set to the default value of y0 when s ∈ [t0, t0 + h].\r\n1s, yN,N−1(s − h) ds\r\nEach yN(·) satisfies the equation\r\nyN(t) = y0 + Zt0t fs, yN(s − h) ds for all t ∈ [t0, t0 + δ], (1)\r\nwhere yN(s − h) is set to the default value of y0 when s ∈ [t0, t0 + h].\r\n1s, yN(s − h) ds for all t ∈ [t0, t0 + δ], (1)\r\nwhere yN(s − h) is set to the default value of y0 when s ∈ [t0, t0 + h].'),
(3, 'translate', 'nima', '06:26:45', '2016/06/08', 'allegiance: ÙˆÙØ§Ø¯Ø§Ø±ÙŠ\r\nadmirable: Ù‚Ø§Ø¨Ù„ ØªØ­Ø³ÙŠÙ†\r\nhired: Ù…Ø²Ø¯ÙˆØ±\r\ndecent: Ù†Ø¬ÙŠØ¨\r\narrest: ØªÙˆÙ‚ÙŠÙ\r\nuncover: Ú©Ø´Ù Ú©Ø±Ø¯Ù†\r\ndisappoint: Ù†Ø§Ø§Ù…ÙŠØ¯ Ú©Ø±Ø¯Ù†\r\nexcruciating: Ù…Ø´Ù‚Øª Ø¨Ø§Ø±\r\neffort: ØªÙ„Ø§Ø´\r\ninjured: Ù…Ø¬Ø±ÙˆØ­\r\nmarines: ØªÙÙ†Ú¯Ø¯Ø§Ø±Ø§Ù† Ø¯Ø±ÙŠØ§ÙŠÙŠ\r\nstaggering: Ù…ØªÙ†Ø§ÙˆØ¨\r\nattempt: Ú©ÙˆØ´Ø´\r\nsuffer: Ø±Ù†Ø¬ Ø¨Ø±Ø¯Ù†(verb)\r\naltering: ØªØºÙŠÙŠØ±\r\ndiscomfort: Ù†Ø§Ø±Ø§Ø­ØªÙŠ\r\npale: Ø±Ù†Ú¯ Ù¾Ø±ÙŠØ¯Ù‡\r\ncomparison: Ù…Ù‚Ø§ÙŠØ³Ù‡\r\nsynonyms: Ù…ØªØ±Ø§Ø¯Ù\r\nextremist, ultra, intemperate: Ø§ÙØ±Ø§Ø·ÙŠ\r\nflashback: ÙˆÙ‚ÙÙ‡ Ø²Ù…Ø§Ù†ÙŠØŒØ¨Ø§Ø²ØªØ§Ø¨ Ø§Ø´Ø¹Ù‡\r\nharasses: Ø¢Ø²Ø§Ø± Ùˆ Ø§Ø°ÙŠØª\r\nsprite: Ø¬Ù†ØŒ Ø±ÙˆØ­\r\nglitch: Ù‚Ø·Ø¹ÙŠ\r\naddict: Ù…Ø¹ØªØ§Ø¯\r\nspectrum: Ø·ÙŠÙ\r\nrecess: ØªÙ†ÙØ³\r\nepic: Ø­Ù…Ø§Ø³ÙŠ\r\nhyped up: Ù…Ø¹ØªØ§Ø¯ Ú©Ù†Ù†Ø¯Ù‡ØŒÙ…Ø¹ØªØ§Ø¯ Ø¨Ù‡ Ù…ÙˆØ§Ø¯ Ù…Ø®Ø¯Ø±\r\nanticipation: Ù¾ÙŠØ´Ø¨ÙŠÙ†ÙŠØŒØ§Ù†ØªØ¸Ø§Ø±\r\nrightly so: Ø¨Ù‡ Ø¯Ø±Ø³ØªÙŠ\r\nset: Ù…Ø¬Ù…ÙˆØ¹Ù‡ØŒØ¯Ø³ØªÚ¯Ø§Ù‡ØŒ ØºØ±ÙˆØ¨ Ú©Ø±Ø¯Ù†\r\nmental: Ø±ÙˆØ§Ù†ÙŠ\r\nquoted: Ø¨Ù‡ Ù†Ù‚Ù„ Ø§Ø²\r\nquote: Ù†Ù‚Ù„ Ù‚ÙˆÙ„\r\nfailures: Ø´Ú©Ø³Øª Ù‡Ø§\r\nruler: Ø­Ø§Ú©Ù… ØŒ ÙØ±Ù…Ø§Ù†Ø±ÙˆØ§\r\nconfident: Ù…Ø·Ù…Ø¦Ù†ØŒ Ø¯Ù„Ú¯Ø±Ù…\r\ndecishions: ØªØµÙ…ÙŠÙ…Ø§Øª\r\nresponsbility: Ù…Ø³Ø¦ÙˆÙ„ÙŠØªØŒØ¬ÙˆØ§Ø¨Ú¯ÙˆÙŠÙŠ\r\nnominate: Ù†Ø§Ù…Ø²Ø¯ Ú©Ø±Ø¯Ù†ØŒÚ©Ø§Ù†Ø¯ÙŠØ¯ Ø´Ø¯Ù†\r\nOutstanding: Ø¨Ø±Ø¬Ø³ØªÙ‡\r\nupcoming: Ù†Ø²Ø¯ÙŠÚ©\r\nportray: Ø¨Ù‡ ØªØµÙˆÙŠØ± Ù…ÙŠ Ú©Ø´Ø¯\r\ncategory: Ø±Ø¯Ù‡ØŒ Ø¯Ø³ØªÙ‡\r\nknowledge: Ø¹Ù„Ù…ØŒ Ø¯Ø§Ù†Ø´ØŒ Ù…Ø¹Ø±ÙØª\r\nexperience: ØªØ¬Ø±Ø¨Ù‡ØŒ Ø¢Ø²Ù…Ø§ÙŠØ´\r\nsorting: Ù…Ø±ØªØ¨ Ø³Ø§Ø²ÙŠ\r\nfundamental: Ø§Ø³Ø§Ø³ÙŠØŒ Ø§ØµÙ„ÙŠ\r\ntale: Ù‚ØµÙ‡ØŒ Ø¯Ø§Ø³ØªØ§Ù†ØŒ Ø­Ú©Ø§ÙŠØª\r\ntypesetting: Ø­Ø±ÙˆÙ Ú†ÙŠÙ†ÙŠ\r\ncite: Ø§Ø³ØªÙ†Ø§Ø¯ØŒ Ú¯ÙØªÙ†ØŒ Ø°Ú©Ø± Ú©Ø±Ø¯Ù†\r\nrelated: Ù…Ø±Ø¨ÙˆØ·ØŒ ÙˆØ§Ø¨Ø³ØªÙ‡ØŒ Ù…ØªÙ‚Ø§Ø±Ù†\r\ndominated: ØªØ­Øª Ø³Ù„Ø·Ù‡\r\nevolution:  Ø³ÙŠØ± ØªÚ©Ø§Ù…Ù„ÙŠØŒ ØªÚ©Ø§Ù…Ù„\r\ndistribution: ØªÙˆØ²ÙŠØ¹ØŒ Ø¨Ø®Ø´ØŒ Ù¾Ø®Ø´\r\nmulti: Ú†Ù†Ø¯\r\nconfiguration: Ù¾ÙŠÚ©Ø±Ø¨Ù†Ø¯ÙŠØŒ Ø´Ú©Ù„ØŒ ØªØ±ØªÙŠØ¨\r\nloss: Ø¶Ø±Ø±ØŒ Ø®Ø¯Ø´Ù‡ØŒ Ø§ØªÙ„Ø§ÙØŒ ÙÙ‚Ø¯Ø§Ù†\r\nblock: Ø¨Ù„ÙˆÚ©ØŒ Ø§Ù†Ø³Ø¯Ø§Ø¯\r\nLiterate - scholar: Ø¨Ø§Ø³ÙˆØ§Ø¯\r\ninfluence: Ù†ÙÙˆØ°ØŒ ØªØ§Ø«ÙŠØ±ØŒ Ø§Ø¹ØªØ¨Ø§Ø±\r\ngraduate: ÙØ§Ø±Ù‚ Ø§Ù„ØªØ­ØµÙŠÙ„\r\nbill: Ø±Ø³ÙŠØ¯ØŒ Ø§Ø³Ú©Ù†Ø§Ø³\r\npolitely: Ù…ÙˆØ¯Ø¨Ø§Ù†Ù‡\r\nmooring: Ù¾Ù‡Ù„ÙˆÚ¯ÙŠØ±ÙŠ\r\nnarrow: Ø¨Ø§Ø±ÙŠÚ©ØŒ ØªÙ†Ú¯\r\nreward: gift\r\ntape: Ù†ÙˆØ§Ø±\r\ntale (sth) apart: Ø­Ù„ Ú©Ø±Ø¯Ù†\r\nfuse: ÙÙŠÙˆØ²ØŒ ÙÙŠØªÙŠÙ„Ù‡\r\nprove: Ø«Ø§Ø¨Øª Ú©Ø±Ø¯Ù†\r\nloose: Ø´Ù„ØŒ Ø³Ø³ØªØŒ Ú¯Ø´Ø§Ø¯\r\nrule: Ù‚Ø§Ù†ÙˆÙ†ØŒ Ù‚Ø§Ø¹Ø¯Ù‡\r\npond: Ø¯Ø±ÙŠØ§Ú†Ù‡ØŒ Ø¨Ø±Ú©Ù‡\r\nflow: Ø¬Ø±ÙŠØ§Ù†\r\nflew: Ù¾Ø±ÙˆØ§Ø² Ú©Ø±Ø¯\r\nfloat: Ø´Ù†Ø§ÙˆØ±\r\nultra-high: ÙÙˆÙ‚ Ø§Ù„Ø¹Ø§Ø¯Ù‡ Ø¨Ø§Ù„Ø§\r\nmesmerizing: Ù…Ø³Ø­ÙˆØ±\r\nboundary: Ù…Ø±Ø²ØŒ Ø³Ø±Ø­Ø¯\r\nboard: Ù‡ÙŠØ¦Øª Ù…Ø¯ÙŠØ±Ù‡ØŒ ØªØ®ØªÙ‡\r\nconsecutive: Ù…ØªÙˆØ§Ù„ÙŠ\r\nexact: Ø¯Ù‚ÙŠÙ‚ØŒ ØµØ­ÙŠØ­\r\nexploding: Ø§Ù†ÙØ¬Ø§Ø±\r\neffervescent: Ú¯Ø§Ø²Ø¯Ø§Ø±\r\ntablets: Ù‚Ø±Øµ\r\nefferscent tablets: Ù‚Ø±Øµ Ù‡Ø§ÙŠ Ø¬ÙˆØ´Ø§Ù†\r\nnumerous: Ù…ØªØ¹Ø¯Ø¯ØŒ ÙØ±Ø§ÙˆØ§Ù†'),
(4, 'Peanoâ€™s Existence Theorem revisited', 'nima', '06:27:58', '2016/06/08', 'February, 2012\r\nRodrigo LÂ´opez Pouso\r\nDepartamento de AnÂ´alise MatemÂ´atica\r\nFacultade de MatemÂ´aticas,\r\nUniversidade de Santiago de Compostela, Campus Sur\r\n15782 Santiago de Compostela, Spain.\r\nAbstract\r\nWe present new proofs to four versions of Peanoâ€™s Existence Theo\r\nrem for ordinary differential equations and systems. We hope to have\r\ngained readability with respect to other usual proofs. We also intend to\r\nhighlight some ideas due to Peano which are still being used today but\r\nin specialized contexts: it appears that the lower and upper solutions\r\nmethod has one of its oldest roots in Peanoâ€™s paper of 1886.\r\nâ€œLe dimostrazioni finora date dellâ€™esistenza degli integrali delle equazioni\r\ndifferenziali lasciano a desiderare sotto lâ€™aspetto della semplicita `.â€\r\nG. Peano, Sullâ€™integrabilit`a delle equazioni differenziali di primo ordine,\r\nAtti. Accad. Sci. Torino, vol. 21 (1886), 677â€“685.');

-- --------------------------------------------------------

--
-- Table structure for table `mysite`
--

CREATE TABLE IF NOT EXISTS `mysite` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `timeRegister` varchar(8) NOT NULL,
  `dateRegister` varchar(10) NOT NULL,
  `firstname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `passage` mediumtext CHARACTER SET utf8 NOT NULL,
  `Admin` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mysite`
--

INSERT INTO `mysite` (`id`, `username`, `password`, `email`, `timeRegister`, `dateRegister`, `firstname`, `lastname`, `passage`, `Admin`) VALUES
(1, 'Admin', 'administer', 'admin@gmail.com', '08:02:16', '2016/06/08', 'mohammad', 'Adibzadeh', 'i like violin', 'yes'),
(2, 'nima', 'nima78', 'nimkkk@yahoo.com', '08:03:00', '2016/06/08', 'nima', 'kholousi', 'i like cs', 'no'),
(3, 'adib', 'adib78', 'me.adib@chmail.ir', '08:03:35', '2016/06/08', 'ebi', 'adib', 'i like programming', 'yes'),
(4, 'reza19', 'r1e9za', 'reza1999@outlook.com', '08:04:09', '2016/06/08', 'reza', 'moradi', 'i am noob', 'yes'),
(5, 'Omid', 'omidpro', 'incredible@yahoo.com', '08:04:53', '2016/06/08', 'omid', 'heydar', 'i am pro\r\n:P', 'no'),
(6, 'asdasd', 'asdd', 'asdasd@aaa.com', '08:05:38', '2016/06/08', 'asd', 'dsa', 'asd dsaasdasd dsadsadas', 'no'),
(7, 'Unknown', 'nashenas', 'nashenas@unknown.com', '08:07:32', '2016/06/08', ':|nashenas', '', '', 'no'),
(8, 'kian', 'kian84', 'mohammadi.kian@gmail.com', '08:08:09', '2016/06/08', 'kian', 'mohammadi', 'i like sleep', 'no'),
(9, 'kiarash', 'kiarashkhafan', 'kiarash.m@chmail.ir', '08:08:35', '2016/06/08', '', '', '', 'no'),
(10, '', 'wwwwww', 'wwwwwwwwwwwwwwww', '08:16:12', '2016/06/08', 'wwwwwwww', 'wwwwwwww', 'wwwwwww', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
