-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 08:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weekday_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_message`
--

CREATE TABLE `about_message` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_message`
--

INSERT INTO `about_message` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'About', 'about description', '2020-02-18 08:34:08'),
(2, 'About', 'dfgdsgfd', '2020-02-18 10:46:00'),
(3, 'About', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci distinctio dolores eligendi eveniet illum impedit itaque, nemo optio repellendus saepe?', '2020-02-18 12:52:40'),
(4, 'About', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-02-18 14:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'Web Design', 'web design is a designsss', '2020-02-12 09:34:50'),
(2, 'Web Development 1', 'Web development is a development', '2020-02-12 09:34:50'),
(23, 'Game Development', 'game is game', '2020-02-17 19:46:50'),
(24, 'UI UX', 'ui ux is a uiux', '2020-02-17 19:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `name`, `email`, `phone`, `address`, `created_at`) VALUES
(1, 'Aung Htet Chon', 'aunghtetchon@gmail.com', '09977157478', 'Hlaing Township,Yangon,Myanmar', '2020-02-18 16:42:54'),
(2, 'Naing Win Aung', 'naingwinaung@gmail.com', '099777344234', 'Hlaing Township , Yangon City , MYANMAR Country', '2020-02-18 16:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `description`, `created_at`) VALUES
(2, 'aung htet chon', 'aunghtetchon@gmail.com', 'hello how are you', '2020-02-18 10:16:29'),
(3, 'aung htet chon', 'aunghtetchon@gmail.com', 'dh', '2020-02-18 16:01:06'),
(4, 'aung htet chon', 'aunghtetchon@gmail.com', 'dh', '2020-02-18 16:01:23');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `category_id`, `user_id`, `created_at`) VALUES
(2, 'aaaaaa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo minus, corporis est, fuga, quo, quasi repellendus asperiores laborum totam impedit tempore? Sint aliquid in tenetur molestiae eligendi fuga ut pariatur?Lorem ipsum dolor sit amet, consect', 1, 1, '2020-02-12 08:40:36'),
(3, 'aaaaaa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo minus, corporis est, fuga, quo, quasi repellendus asperiores laborum totam impedit tempore? Sint aliquid in tenetur molestiae eligendi fuga ut pariatur?', 2, 1, '2020-02-12 09:37:24'),
(4, 'aaaaaaaaaaaa aaaaaaa aaa aaaaaa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo minus, corporis est, fuga, quo, quasi repellendus asperiores laborum totam impedit tempore? Sint aliquid in tenetur molestiae eligendi fuga ut pariatur?', 1, 1, '2020-02-13 08:03:28'),
(6, 'aaaa aaaaa aaaaa aa aaa aaaa aaaaaaaaaaaa aaaaaaaaaaaa aaaaaaaaaaaa ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo minus, corporis est, fuga, quo, quasi repellendus asperiores laborum totam impedit tempore? Sint aliquid in tenetur molestiae eligendi fuga ut pariatur?Lorem ipsum dolor sit amet, consect', 2, 1, '2020-02-13 08:03:51'),
(9, 'aaaaaa', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo minus, corporis est, fuga, quo, quasi repellendus asperiores laborum totam impedit tempore? Sint aliquid in tenetur molestiae eligendi fuga ut pariatur?', 1, 1, '2020-02-14 03:53:57'),
(15, 'Title Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo minus, corporis est, fuga, quo, quasi repellendus asperiores laborum totam impedit tempore? Sint aliquid in tenetur molestiae eligendi fuga ut pariatur?', 2, 1, '2020-02-14 04:10:31'),
(16, 'Title Two', 'as sdd assdsa', 23, 3, '2020-02-18 15:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `title`, `description`, `price`, `user_id`, `created_at`) VALUES
(1, 'Google', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware. It is considered one of the Big Four technology companies, alongside Amazon, Apple, and Facebook.\r\nGoogle was founded in September 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University in California. Together they own about 14 percent of its shares and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a California privately held company on September 4, 1998, in California. Google was then reincorporated in Delaware on October 22, 2002.[12] An initial public offering (IPO) took place on August 19, 2004, and Google moved to its headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google is Alphabet\'s leading subsidiary and will continue to be the umbrella company for Alphabet\'s Internet interests. Sundar Pichai was appointed CEO of Google, replacing Larry Page who became the CEO of Alphabet.\r\n\r\nThe company\'s rapid growth since incorporation has triggered a chain of products, acquisitions, and partnerships beyond Google\'s core search engine (Google Search). It offers services designed for work and productivity (Google Docs, Google Sheets, and Google Slides), email (Gmail), scheduling and time management (Google Calendar), cloud storage (Google Drive), instant messaging and video chat (Duo, Hangouts), language translation (Google Translate), mapping and navigation (Google Maps, Waze, Google Earth, Street View), video sharing (YouTube), note-taking (Google Keep), and photo organizing and editing (Google Photos). The company leads the development of the Android mobile operating system, the Google Chrome web browser, and Chrome OS, a lightweight operating system based on the Chrome browser. Google has moved increasingly into hardware; from 2010 to 2015, it partnered with major electronics manufacturers in the production of its Nexus devices, and it released multiple hardware products in October 2016, including the Google Pixel smartphone, Google Home smart speaker, Google Wifi mesh wireless router, and Google Daydream virtual reality headset. Google has also experimented with becoming an Internet carrier (Google Fiber, Google Fi, and Google Station).[13]', 100, 1, '2020-02-17 01:38:07'),
(2, 'Twitter', 'Twitter is an American microblogging and social networking service on which users post and interact with messages known as \"tweets\". Registered users can post, like, and retweet tweets, but unregistered users can only read them. Twitter\'s origins lie in a \"daylong brainstorming session\" held by board members of the podcasting company Odeo. Jack Dorsey, then an undergraduate student at New York University, introduced the idea of an individual using an SMS service to communicate with a small group.[24][25] The original project code name for the service was twttr, an idea that Williams later ascribed to Noah Glass,[26] inspired by Flickr and the five-character length of American SMS short codes. The decision was also partly due to the fact that the domain twitter.com was already in use, and it was six months after the launch of twttr that the crew purchased the domain and changed the name of the service to Twitter.[27] The developers initially considered \"10958\" as a short code, but later changed it to \"40404\" for \"ease of use and memorability\".[28] Work on the project started on March 21, 2006, when Dorsey published the first Twitter message at 9:50 p.m. Pacific Standard Time (PST): \"just setting up my twttr\".[3] Dorsey has explained the origin of the \"Twitter\" title:\r\n\r\n...we came across the word \'twitter\', and it was just perfect. The definition was \'a short burst of inconsequential information,\' and \'chirps from birds\'. And that\'s exactly what the product was.[29]\r\n\r\nThe first Twitter prototype, developed by Dorsey and contractor Florian Weber, was used as an internal service for Odeo employees[30] and the full version was introduced publicly on July 15, 2006.[12] In October 2006, Biz Stone, Evan Williams, Dorsey, and other members of Odeo formed Obvious Corporation and acquired Odeo, together with its assets — including Odeo.com and Twitter.com — from the investors and shareholders.[31] Williams fired Glass, who was silent about his part in Twitter\'s startup until 2011.[32] Twitter spun off into its own company in April 2007.[33] Williams provided insight into the ambiguity that defined this early period in a 2013 interview:', 150, 0, '2020-02-17 01:39:19'),
(3, 'YouTube', 'For the channel, see YouTube (channel).\r\nYouTube, LLC\r\nThe YouTube logo is made of a red round-rectangular box with a white \"play\" button inside and the word \"YouTube\" written in black.\r\nYouTube homepage.png\r\nType of business	Subsidiary\r\nType of site\r\nVideo hosting service\r\nFounded	February 14, 2005; 15 years ago\r\nHeadquarters	901 Cherry Avenue\r\nSan Bruno, California, United States\r\nCoordinates	37°37′41″N 122°25′35″WCoordinates: 37°37′41″N 122°25′35″W\r\nArea served	Worldwide (excluding blocked countries)\r\nFounder(s)	\r\nChad Hurley\r\nSteve Chen\r\nJawed Karim\r\nKey people	Susan Wojcicki (CEO)\r\nIndustry	\r\nInternet\r\nVideo hosting service\r\nProducts	YouTube Music\r\nYouTube TV\r\nRevenue	US$15 billion (2019)[1]\r\nParent	Google LLC (2006–present)\r\nWebsite	YouTube.com\r\n(see list of localized domain names)\r\nAlexa rank	Steady 2 (Global, January 2020)[2]\r\nAdvertising	Google AdSense\r\nRegistration	\r\nOptional[show]\r\nLaunched	February 14, 2005; 15 years ago\r\nCurrent status	Active\r\nContent license\r\nUploader holds copyright (standard license); Creative Commons can be selected.\r\nWritten in	Python (core/API),[3] C (through CPython), C++, Java (through Guice platform),[4][5] Go,[6] JavaScript (UI)\r\nYouTube is an American video-sharing platform headquartered in San Bruno, California. Three former PayPal employees—Chad Hurley, Steve Chen, and Jawed Karim—created the service in February 2005. Google bought the site in November 2006 for US$1.65 billion; YouTube now operates as one of Google\'s subsidiaries.\r\n\r\nYouTube allows users to upload, view, rate, share, add to playlists, report, comment on videos, and subscribe to other users. It offers a wide variety of user-generated and corporate media videos. Available content includes video clips, TV show clips, music videos, short and documentary films, audio recordings, movie trailers, live streams, and other content such as video blogging, short original videos, and educational videos. Most content on YouTube is uploaded by individuals, but media corporations including CBS, the BBC, Vevo, and Hulu offer some of their material via YouTube as part of the YouTube partnership program. Unregistered users can only watch videos on the site, while registered users are permitted to upload an unlimited number of videos and add comments to videos. Videos deemed potentially inappropriate are available only to registered users affirming themselves to be at least 18 years old.', 100, 0, '2020-02-17 09:53:39'),
(9, 'Google', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware. It is considered one of the Big Four technology companies, alongside Amazon, Apple, and Facebook.\r\nGoogle was founded in September 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University in California. Together they own about 14 percent of its shares and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a California privately held company on September 4, 1998, in California. Google was then reincorporated in Delaware on October 22, 2002.[12] An initial public offering (IPO) took place on August 19, 2004, and Google moved to its headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google is Alphabet\'s leading subsidiary and will continue to be the umbrella company for Alphabet\'s Internet interests. Sundar Pichai was appointed CEO of Google, replacing Larry Page who became the CEO of Alphabet.\r\n\r\nThe company\'s rapid growth since incorporation has triggered a chain of products, acquisitions, and partnerships beyond Google\'s core search engine (Google Search). It offers services designed for work and productivity (Google Docs, Google Sheets, and Google Slides), email (Gmail), scheduling and time management (Google Calendar), cloud storage (Google Drive), instant messaging and video chat (Duo, Hangouts), language translation (Google Translate), mapping and navigation (Google Maps, Waze, Google Earth, Street View), video sharing (YouTube), note-taking (Google Keep), and photo organizing and editing (Google Photos). The company leads the development of the Android mobile operating system, the Google Chrome web browser, and Chrome OS, a lightweight operating system based on the Chrome browser. Google has moved increasingly into hardware; from 2010 to 2015, it partnered with major electronics manufacturers in the production of its Nexus devices, and it released multiple hardware products in October 2016, including the Google Pixel smartphone, Google Home smart speaker, Google Wifi mesh wireless router, and Google Daydream virtual reality headset. Google has also experimented with becoming an Internet carrier (Google Fiber, Google Fi, and Google Station).[13]', 100, 1, '2020-02-17 01:38:07'),
(10, 'Twitter', 'Twitter is an American microblogging and social networking service on which users post and interact with messages known as \"tweets\". Registered users can post, like, and retweet tweets, but unregistered users can only read them. Twitter\'s origins lie in a \"daylong brainstorming session\" held by board members of the podcasting company Odeo. Jack Dorsey, then an undergraduate student at New York University, introduced the idea of an individual using an SMS service to communicate with a small group.[24][25] The original project code name for the service was twttr, an idea that Williams later ascribed to Noah Glass,[26] inspired by Flickr and the five-character length of American SMS short codes. The decision was also partly due to the fact that the domain twitter.com was already in use, and it was six months after the launch of twttr that the crew purchased the domain and changed the name of the service to Twitter.[27] The developers initially considered \"10958\" as a short code, but later changed it to \"40404\" for \"ease of use and memorability\".[28] Work on the project started on March 21, 2006, when Dorsey published the first Twitter message at 9:50 p.m. Pacific Standard Time (PST): \"just setting up my twttr\".[3] Dorsey has explained the origin of the \"Twitter\" title:\r\n\r\n...we came across the word \'twitter\', and it was just perfect. The definition was \'a short burst of inconsequential information,\' and \'chirps from birds\'. And that\'s exactly what the product was.[29]\r\n\r\nThe first Twitter prototype, developed by Dorsey and contractor Florian Weber, was used as an internal service for Odeo employees[30] and the full version was introduced publicly on July 15, 2006.[12] In October 2006, Biz Stone, Evan Williams, Dorsey, and other members of Odeo formed Obvious Corporation and acquired Odeo, together with its assets — including Odeo.com and Twitter.com — from the investors and shareholders.[31] Williams fired Glass, who was silent about his part in Twitter\'s startup until 2011.[32] Twitter spun off into its own company in April 2007.[33] Williams provided insight into the ambiguity that defined this early period in a 2013 interview:', 150, 0, '2020-02-17 01:39:19'),
(12, 'Google', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware. It is considered one of the Big Four technology companies, alongside Amazon, Apple, and Facebook.\r\nGoogle was founded in September 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University in California. Together they own about 14 percent of its shares and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a California privately held company on September 4, 1998, in California. Google was then reincorporated in Delaware on October 22, 2002.[12] An initial public offering (IPO) took place on August 19, 2004, and Google moved to its headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google is Alphabet\'s leading subsidiary and will continue to be the umbrella company for Alphabet\'s Internet interests. Sundar Pichai was appointed CEO of Google, replacing Larry Page who became the CEO of Alphabet.\r\n\r\nThe company\'s rapid growth since incorporation has triggered a chain of products, acquisitions, and partnerships beyond Google\'s core search engine (Google Search). It offers services designed for work and productivity (Google Docs, Google Sheets, and Google Slides), email (Gmail), scheduling and time management (Google Calendar), cloud storage (Google Drive), instant messaging and video chat (Duo, Hangouts), language translation (Google Translate), mapping and navigation (Google Maps, Waze, Google Earth, Street View), video sharing (YouTube), note-taking (Google Keep), and photo organizing and editing (Google Photos). The company leads the development of the Android mobile operating system, the Google Chrome web browser, and Chrome OS, a lightweight operating system based on the Chrome browser. Google has moved increasingly into hardware; from 2010 to 2015, it partnered with major electronics manufacturers in the production of its Nexus devices, and it released multiple hardware products in October 2016, including the Google Pixel smartphone, Google Home smart speaker, Google Wifi mesh wireless router, and Google Daydream virtual reality headset. Google has also experimented with becoming an Internet carrier (Google Fiber, Google Fi, and Google Station).[13]', 100, 1, '2020-02-17 01:38:07'),
(13, 'Twitter', 'Twitter is an American microblogging and social networking service on which users post and interact with messages known as \"tweets\". Registered users can post, like, and retweet tweets, but unregistered users can only read them. Twitter\'s origins lie in a \"daylong brainstorming session\" held by board members of the podcasting company Odeo. Jack Dorsey, then an undergraduate student at New York University, introduced the idea of an individual using an SMS service to communicate with a small group.[24][25] The original project code name for the service was twttr, an idea that Williams later ascribed to Noah Glass,[26] inspired by Flickr and the five-character length of American SMS short codes. The decision was also partly due to the fact that the domain twitter.com was already in use, and it was six months after the launch of twttr that the crew purchased the domain and changed the name of the service to Twitter.[27] The developers initially considered \"10958\" as a short code, but later changed it to \"40404\" for \"ease of use and memorability\".[28] Work on the project started on March 21, 2006, when Dorsey published the first Twitter message at 9:50 p.m. Pacific Standard Time (PST): \"just setting up my twttr\".[3] Dorsey has explained the origin of the \"Twitter\" title:\r\n\r\n...we came across the word \'twitter\', and it was just perfect. The definition was \'a short burst of inconsequential information,\' and \'chirps from birds\'. And that\'s exactly what the product was.[29]\r\n\r\nThe first Twitter prototype, developed by Dorsey and contractor Florian Weber, was used as an internal service for Odeo employees[30] and the full version was introduced publicly on July 15, 2006.[12] In October 2006, Biz Stone, Evan Williams, Dorsey, and other members of Odeo formed Obvious Corporation and acquired Odeo, together with its assets — including Odeo.com and Twitter.com — from the investors and shareholders.[31] Williams fired Glass, who was silent about his part in Twitter\'s startup until 2011.[32] Twitter spun off into its own company in April 2007.[33] Williams provided insight into the ambiguity that defined this early period in a 2013 interview:', 150, 0, '2020-02-17 01:39:19'),
(14, 'YouTube', 'For the channel, see YouTube (channel).\r\nYouTube, LLC\r\nThe YouTube logo is made of a red round-rectangular box with a white \"play\" button inside and the word \"YouTube\" written in black.\r\nYouTube homepage.png\r\nType of business	Subsidiary\r\nType of site\r\nVideo hosting service\r\nFounded	February 14, 2005; 15 years ago\r\nHeadquarters	901 Cherry Avenue\r\nSan Bruno, California, United States\r\nCoordinates	37°37′41″N 122°25′35″WCoordinates: 37°37′41″N 122°25′35″W\r\nArea served	Worldwide (excluding blocked countries)\r\nFounder(s)	\r\nChad Hurley\r\nSteve Chen\r\nJawed Karim\r\nKey people	Susan Wojcicki (CEO)\r\nIndustry	\r\nInternet\r\nVideo hosting service\r\nProducts	YouTube Music\r\nYouTube TV\r\nRevenue	US$15 billion (2019)[1]\r\nParent	Google LLC (2006–present)\r\nWebsite	YouTube.com\r\n(see list of localized domain names)\r\nAlexa rank	Steady 2 (Global, January 2020)[2]\r\nAdvertising	Google AdSense\r\nRegistration	\r\nOptional[show]\r\nLaunched	February 14, 2005; 15 years ago\r\nCurrent status	Active\r\nContent license\r\nUploader holds copyright (standard license); Creative Commons can be selected.\r\nWritten in	Python (core/API),[3] C (through CPython), C++, Java (through Guice platform),[4][5] Go,[6] JavaScript (UI)\r\nYouTube is an American video-sharing platform headquartered in San Bruno, California. Three former PayPal employees—Chad Hurley, Steve Chen, and Jawed Karim—created the service in February 2005. Google bought the site in November 2006 for US$1.65 billion; YouTube now operates as one of Google\'s subsidiaries.\r\n\r\nYouTube allows users to upload, view, rate, share, add to playlists, report, comment on videos, and subscribe to other users. It offers a wide variety of user-generated and corporate media videos. Available content includes video clips, TV show clips, music videos, short and documentary films, audio recordings, movie trailers, live streams, and other content such as video blogging, short original videos, and educational videos. Most content on YouTube is uploaded by individuals, but media corporations including CBS, the BBC, Vevo, and Hulu offer some of their material via YouTube as part of the YouTube partnership program. Unregistered users can only watch videos on the site, while registered users are permitted to upload an unlimited number of videos and add comments to videos. Videos deemed potentially inappropriate are available only to registered users affirming themselves to be at least 18 years old.', 100, 0, '2020-02-17 09:53:39'),
(15, 'Google', 'Google LLC is an American multinational technology company that specializes in Internet-related services and products, which include online advertising technologies, search engine, cloud computing, software, and hardware. It is considered one of the Big Four technology companies, alongside Amazon, Apple, and Facebook.\r\nGoogle was founded in September 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University in California. Together they own about 14 percent of its shares and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a California privately held company on September 4, 1998, in California. Google was then reincorporated in Delaware on October 22, 2002.[12] An initial public offering (IPO) took place on August 19, 2004, and Google moved to its headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google is Alphabet\'s leading subsidiary and will continue to be the umbrella company for Alphabet\'s Internet interests. Sundar Pichai was appointed CEO of Google, replacing Larry Page who became the CEO of Alphabet.\r\n\r\nThe company\'s rapid growth since incorporation has triggered a chain of products, acquisitions, and partnerships beyond Google\'s core search engine (Google Search). It offers services designed for work and productivity (Google Docs, Google Sheets, and Google Slides), email (Gmail), scheduling and time management (Google Calendar), cloud storage (Google Drive), instant messaging and video chat (Duo, Hangouts), language translation (Google Translate), mapping and navigation (Google Maps, Waze, Google Earth, Street View), video sharing (YouTube), note-taking (Google Keep), and photo organizing and editing (Google Photos). The company leads the development of the Android mobile operating system, the Google Chrome web browser, and Chrome OS, a lightweight operating system based on the Chrome browser. Google has moved increasingly into hardware; from 2010 to 2015, it partnered with major electronics manufacturers in the production of its Nexus devices, and it released multiple hardware products in October 2016, including the Google Pixel smartphone, Google Home smart speaker, Google Wifi mesh wireless router, and Google Daydream virtual reality headset. Google has also experimented with becoming an Internet carrier (Google Fiber, Google Fi, and Google Station).[13]', 100, 1, '2020-02-17 01:38:07'),
(20, 'YouTube', 'sdsfdffffffffffffff', 100, 1, '2020-02-18 07:34:57'),
(21, 'Game', 'description', 200, 3, '2020-02-18 08:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_list`
--

INSERT INTO `student_list` (`id`, `name`, `phone`, `major`, `description`, `created_at`) VALUES
(1, 'kyaing', 2147483647, 'ec', 'asds', '2020-02-18 09:21:33'),
(2, 'khin', 9876543, 'english', 'asdfdsg', '2020-02-18 09:50:39'),
(4, 'su su', 98765432, 'English', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '2020-02-18 13:03:25'),
(5, 'NU NU', 98765432, 'English', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-02-18 14:19:10'),
(6, 'kyaw kyaw', 2147483647, 'History', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-02-18 14:20:05'),
(7, 'Aung Aung', 978787878, 'Myanmar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-02-18 14:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('1','2') COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'aung', 'aung@gmail.com', '$2y$10$6e0Wa/e85znd61m/kgCUWOICrs7b/HZH8pWD2ffgTWJ2kR5xv/AOu', '2', '0000-00-00 00:00:00'),
(2, 'aung htet', 'aa@gmail.com', '$2y$10$Q0gQCTaZxmKAacegUJGdI.qD34sKVhMWItouwttjt9cYM9ftcN2du', '2', '0000-00-00 00:00:00'),
(3, 'Admin', 'admin@gmail.com', '$2y$10$.uFlRzxZL4EH5Uvqj3pEpu9vjPONuv5Nw20tpzAdeNwwyT7xHCEje', '1', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_message`
--
ALTER TABLE `about_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
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
-- AUTO_INCREMENT for table `about_message`
--
ALTER TABLE `about_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
