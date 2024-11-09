-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 11:58 AM
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
-- Database: `wbicad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_about_options`
--

CREATE TABLE `wbinc_about_options` (
  `ID` int(11) NOT NULL,
  `option_name` text NOT NULL,
  `option_value` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wbinc_about_options`
--

INSERT INTO `wbinc_about_options` (`ID`, `option_name`, `option_value`, `created_date`, `updated_date`) VALUES
(11, 'about_content', '<p>The Information and Cultural Affairs Department is created to disseminate Information of public importance; maintain cordial relationship between the Government and public; nurture as well as promote rich as well as esthetic wealth of Bengal; create an encouraging ambience in the fields of Art &amp; Couture, Literature &amp; Languages, Films and Festivals and preserve Historical as well as Archaeological objects and monuments for overall development of Society.</p>\r\n\r\n<p>A good number of officers of this Department has been serving Public Relation Officer in other Departments of the State Government including Kolkata Police, and West Bengal Police Directorate. The Press Secretary to the Hon&rsquo;ble Governor is provided from this Department.</p>\r\n\r\n<p>This Department has been committed to inspire young talents and provide various supports to the experienced ones to ventilate their creative potentialities through its various academies, auditoria, society, autonomous institutions and other bodies, besides the following 4 (four) directorates.</p>\r\n', '2024-04-19 12:13:23', '2024-06-12 13:27:08'),
(12, 'about_image', 'uploads/about_cms/7880878829441713529409.webp', '2024-04-19 12:13:23', '2024-04-19 12:23:29'),
(13, 'mission_vision_content', '<h2><strong>Our Vision</strong></h2>\r\n\r\n<p>Instrumentation of information and vibrant cultural heritage of Bengal to achieve the zenith of mutual understandings, respect and achievements as well as to keep up the intention of Biswabangla.</p>\r\n\r\n<h2><strong>Our Mission</strong></h2>\r\n\r\n<ol>\r\n	<li>Citizen centric dissemination of information to develop awareness on basic needs and duties in socio-economic arena to uplift the all-square profiles of commoners;</li>\r\n	<li>Publish and provide necessary information to citizens for availing different services and facilities as and when provided by the State;</li>\r\n	<li>Spread out the cultural aroma of Bengal through exhibition, exploration and exchange of the treasures therein;</li>\r\n	<li>Rejuvenating the dying arts and cultures of Bengal and evolving the process of its restoration in mainstream;</li>\r\n	<li>Nourishing research and development of different forms of existing arts and culture by providing necessary infrastructure and facilities;</li>\r\n	<li>Developing the celluloid vibes of Bengal;</li>\r\n	<li>Exploration of archeological remains, restoration of ethnographic and historical structures and catering the glorious past of Bengal for generations in roll.</li>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<ol>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', '2024-04-19 12:34:40', '2024-06-13 05:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_act_rules`
--

CREATE TABLE `wbinc_act_rules` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `documents` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_act_rules`
--

INSERT INTO `wbinc_act_rules` (`ID`, `title`, `documents`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Handbook of Circulars Vol. II Finance Department', 'uploads/act_rules/2714628683821713788433.pdf', '1', '2024-04-22 12:20:33', '2024-04-22 12:20:33'),
(2, 'Technician studio rent orderr-3359-ICA(N)_9_9_2020', 'uploads/act_rules/4151530003071713788457.pdf', '1', '2024-04-22 12:20:57', '2024-04-22 12:20:57'),
(3, 'WBFR', 'uploads/act_rules/6234756528801713788473.pdf', '1', '2024-04-22 12:21:13', '2024-04-22 12:21:13'),
(4, 'WBSR-Part-II', 'uploads/act_rules/9318394765611713788489.pdf', '1', '2024-04-22 12:21:29', '2024-04-22 12:21:29'),
(5, 'WBSR_Part-1', 'uploads/act_rules/6048031339701713788501.pdf', '1', '2024-04-22 12:21:41', '2024-04-22 12:21:41'),
(6, 'West Bengal Cinema Regulation Act Manual', 'uploads/act_rules/10673070622591713788544.pdf', '1', '2024-04-22 12:22:24', '2024-04-22 12:22:24'),
(7, 'West Bengal Cinemas Regulation Act 1992', 'uploads/act_rules/268481957861713788556.pdf', '1', '2024-04-22 12:22:36', '2024-04-22 12:22:36'),
(8, 'West Bengal Financial Rules', 'uploads/act_rules/7978033733091713788571.pdf', '1', '2024-04-22 12:22:51', '2024-04-22 12:22:51'),
(9, 'West Bengal Treasury Rules', 'uploads/act_rules/5766464183561713788594.pdf', '1', '2024-04-22 12:23:14', '2024-04-22 12:23:14');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_archive`
--

CREATE TABLE `wbinc_archive` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `documents` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_archive`
--

INSERT INTO `wbinc_archive` (`ID`, `title`, `documents`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Birbhum', 'uploads/archive/9907582385611714731674.pdf', '1', '2024-05-03 10:21:14', '2024-05-03 10:21:14'),
(2, 'Hooghly', 'uploads/archive/10590227665341714731700.pdf', '1', '2024-05-03 10:21:40', '2024-05-03 10:21:40'),
(3, 'Howrah', 'uploads/archive/9142420605851714731711.pdf', '1', '2024-05-03 10:21:51', '2024-05-03 10:21:51'),
(4, 'Jalpaiguri', 'uploads/archive/8621983026311714731731.pdf', '1', '2024-05-03 10:22:11', '2024-05-03 10:22:11'),
(5, 'Jhargram', 'uploads/archive/10424710097521714731744.pdf', '1', '2024-05-03 10:22:24', '2024-05-03 10:22:24'),
(6, 'Malda', 'uploads/archive/9911877312891714731758.pdf', '1', '2024-05-03 10:22:38', '2024-05-03 10:22:38'),
(7, 'Murshidabad', 'uploads/archive/4382408484061714731787.pdf', '1', '2024-05-03 10:23:07', '2024-05-03 10:23:08'),
(8, 'North 24 Parganas', 'uploads/archive/9648235050721714731811.pdf', '1', '2024-05-03 10:23:31', '2024-05-03 10:23:31'),
(9, 'Paschim Medinipur', 'uploads/archive/2544769118451714731826.pdf', '1', '2024-05-03 10:23:46', '2024-05-03 10:23:46'),
(10, 'Purba Medinipur', 'uploads/archive/8048077565111714731841.pdf', '1', '2024-05-03 10:24:01', '2024-05-03 10:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_budget`
--

CREATE TABLE `wbinc_budget` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `documents` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_budget`
--

INSERT INTO `wbinc_budget` (`ID`, `title`, `documents`, `status`, `created_date`, `updated_date`) VALUES
(10, 'Budget Book of I&CA Department 2023 bp17', 'uploads/budget/1455486379221713789991.pdf', '1', '2024-04-22 12:46:31', '2024-04-22 12:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_department_heads`
--

CREATE TABLE `wbinc_department_heads` (
  `ID` int(11) NOT NULL,
  `designation` text NOT NULL,
  `title` text NOT NULL,
  `address` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `fax` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_department_heads`
--

INSERT INTO `wbinc_department_heads` (`ID`, `designation`, `title`, `address`, `contact`, `fax`, `image`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Minister-in-charge', 'Mamata Banerjee', 'Nabanna, 14th Floor,325, Sarat Chatterjee Road, Mandirtala,Shibpur, Howrah-711102', '(033) 2214-5555, 2214-3101', '(033) 2214-3528', 'uploads/contacts/10784162731491714740898.webp', '1', '2024-05-03 12:39:38', '2024-08-31 11:02:26'),
(2, 'Minister-of-State', 'Shri Indranil Sen', 'Nabanna (9th Floor),325, Sarat Chatterjee Road,Shibpur, Howrah-711102', '(033)2250-1023, (033) 2250-1024', '(033) 2214-4422', 'uploads/contacts/4299847702021714741079.webp', '1', '2024-05-03 12:39:38', '2024-09-25 10:34:52'),
(3, 'Secretary ', 'Shri Santanu Basu, IAS', 'Nabanna (9th Floor),325, Sarat Chatterjee Road,Shibpur, Howrah-711102', '(033)2214 3614, (033)2253 5201', '(033)2253 5201', 'uploads/contacts/2843598143901714741156.webp', '1', '2024-05-03 12:40:08', '2024-07-06 09:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_department_officers`
--

CREATE TABLE `wbinc_department_officers` (
  `ID` int(11) NOT NULL,
  `designation` text NOT NULL,
  `title` text NOT NULL,
  `address` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `fax` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_department_officers`
--

INSERT INTO `wbinc_department_officers` (`ID`, `designation`, `title`, `address`, `contact`, `fax`, `image`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Spl. Secretary & E.O. Director of Culture', 'Kaushik Basak, WBCS, (Exe)', 'Room No. 908, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', '', '', 'uploads/contacts/2824531215791714742941.webp', '1', '2024-05-03 13:29:01', '2024-09-25 10:41:21'),
(2, 'Addl. Secretary & E.O. Director of Film', 'Amlanjyoti Saha, WBCS, (Exe)', 'Room No. 908, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', '', '', 'uploads/contacts/676664115711721209460.webp', '1', '2024-05-03 13:21:44', '2024-09-25 10:41:21'),
(3, 'Addl. Secretary & E.O. Director of Archeology', 'Amlanjyoti Saha, WBCS, (Exe)', 'Nabanna (9th Floor),325, Sarat Chatterjee Road,Shibpur, Howrah-711102', '', '', 'uploads/contacts/1183723100481714742834.webp', '1', '2024-05-03 13:27:14', '2024-09-25 10:41:21'),
(4, 'Director of Information & Ex-officio Additional Secretary & CEO, Nandan', 'Sharmistha Banerjee, WBCS, (Exe)', 'Room No. 908, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', '', '', 'uploads/contacts/10779212125581714742972.webp', '1', '2024-05-03 13:29:32', '2024-09-25 10:42:52'),
(5, 'Addl. Secretary & Managing Director Basumati Corporation Ltd ', 'Debasis Biswas, WBCS, (Exe)', 'Room No. 909, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', '', '', 'uploads/contacts/5985451076361721899930.webp', '1', '2024-05-03 13:28:33', '2024-09-25 11:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_directorates`
--

CREATE TABLE `wbinc_directorates` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `about_image` text NOT NULL,
  `about_directorate` text NOT NULL,
  `directorate_name` text NOT NULL,
  `directorate_designation` text NOT NULL,
  `directorate_office_address` text NOT NULL,
  `directorate_image` text NOT NULL,
  `directorate_brief` text NOT NULL,
  `bottom_content` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_directorates`
--

INSERT INTO `wbinc_directorates` (`ID`, `title`, `about_image`, `about_directorate`, `directorate_name`, `directorate_designation`, `directorate_office_address`, `directorate_image`, `directorate_brief`, `bottom_content`, `created_date`, `updated_date`) VALUES
(1, 'Directorate of Information', 'uploads/directorates/7867118542461714552251.webp', '<p>The Information Directorate is entrusted with the responsibility of disseminating information of public importance, maintaining public relation, generating public awareness about different issues of great significance, propagating policy and programmes of the Government, ventilating news and views of the State Government, co-coordinating media related issues, releasing advertisements on behalf of the State Government through its various wings in Kolkata and other offices stretching from sub-division to district level and also gather information about the socio-economic and cultural situation and public opinion of the society from grass root level. It has frequently organized awareness campaign on numerous social issues and advocates for National integration. This Directorate is looking after the matters related to the official languages of the State.</p>\r\n\r\n<p>All advertisements of the State Government are released through Information Directorate. It arranges for Press conference and issue Press Accreditation Card.</p>\r\n', 'Smt. Sharmistha Banerjee, WBCS (Exe)', 'Director of Information & Ex-officio Additional Secretary & CEO, Nandan', 'Room No. 902, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', 'uploads/directorates/361728647321721206499.webp', '<p>It has a State hospitality wing which facilitates guests and dignitaries during their visit in the State. It organizes the State ceremonies as well as birth and death anniversaries of many notable persons.</p>\r\n\r\n<p>The landing webpage of the State &ndash; &ldquo;Egiye Bangla&rdquo; is manned by Information Directorate which is also looking after the other official pages of the State Government on social media platform.</p>\r\n\r\n<p>This Directorate has regularly published the mouthpiece of the State Government &ndash; &ldquo;Paschimbanga&rsquo;.</p>\r\n\r\n<hr />\r\n<h4>Name of the Offices under Information Directorate are :</h4>\r\n\r\n<ul>\r\n	<li>Kolkata Information Centre, Kolkata</li>\r\n	<li>Information Centre at Delhi</li>\r\n	<li>Information Centre at Siliguri</li>\r\n	<li>District Information &amp; Cultural Office, South 24 paraganas</li>\r\n	<li>District Information &amp; Cultural Office, North 24 paraganas</li>\r\n	<li>District Information &amp; Cultural Office, Howrah</li>\r\n	<li>District Information &amp; Cultural Office, Hooghly</li>\r\n	<li>District Information &amp; Cultural Office, Nadia</li>\r\n	<li>District Information &amp; Cultural Office, Birbhum</li>\r\n	<li>District Information &amp; Cultural Office, Murshidabad</li>\r\n	<li>District Information &amp; Cultural Office, Malda</li>\r\n	<li>District Information &amp; Cultural Office, Uttar Dinajpur</li>\r\n	<li>District Information &amp; Cultural Office, Dakshin Dinajpur</li>\r\n	<li>District Information &amp; Cultural Office, Darjeeling</li>\r\n	<li>District Information &amp; Cultural Office, Kalimpong</li>\r\n	<li>District Information &amp; Cultural Office, Jalpaiguri</li>\r\n	<li>District Information &amp; Cultural Office, Alipurduar</li>\r\n	<li>District Information &amp; Cultural Office, Cooch Behar</li>\r\n	<li>District Information &amp; Cultural Office, Purba Medinipur</li>\r\n	<li>District Information &amp; Cultural Office, Paschim Medinipur</li>\r\n	<li>District Information &amp; Cultural Office, Purba Bardhaman</li>\r\n	<li>District Information &amp; Cultural Office, Paschim Bardhaman</li>\r\n	<li>District Information &amp; Cultural Office, Bankura</li>\r\n	<li>District Information &amp; Cultural Office, Purulia</li>\r\n	<li>Sub Divisional Information &amp; Cultural Office in 63 Sub Divisions</li>\r\n</ul>\r\n\r\n<h2><strong>The multifaceted activities of the Information Directorate can be categorized in the following manner:</strong></h2>\r\n\r\n<h5>1. Social Welfare Schemes -</h5>\r\n\r\n<h4>a) Lok Prasar Prakalpa:</h4>\r\n\r\n<p>The State Government has launched &lsquo;Lok Prasar Prakalpa&rsquo; (LPP) in the year of 2014 with a view to revitalizing the Folk Arts of Bengal as well as ensuring a steady means of livelihood for the State&rsquo;s folk artistes. Their talent is utilized in a coherent campaign to spread the developmental initiatives of the Government across the State and improving the socio-economic condition of the folk artistes. More than 1 lakh 94 thousand folk artistes have so far been registered to receive financial assistance in the form of Retainer Fees, Pension and Performance Fees.</p>\r\n\r\n<p>Every registered folk artiste within the age group of 18 to 60 years receives Rs. 1000/- per month as &lsquo;Retainer Fees&rsquo;, whereas &lsquo;Pension&rsquo; of equal amount is granted to the folk artistes for those who have crossed the age of 60 years. Besides, &lsquo;Performance Fees&rsquo; @ Rs. 1,000/- per day is also provided to each artiste when such performance is called for. Retainers fees and Pension is being disbursed directly to the bank accounts of the beneficiaries through Jai Bangla Portal. Performance fees is also paid directly to the bank accounts of the beneficiaries through Treasuries of different Districts.</p>\r\n\r\n<p>The enlisted folk artistes propagate different flagship programmes of the State Government such as Kanyashree, Rupashree, Sabuj Sathi, Duare Sarkar, ParaySamadhan, Manobik Pension etc through their performances. Besides they also campaign for creating awareness among the people on various public awareness issues like prevention of vector borne disease, digital ration cards etc. This project has brought tremendous enthusiasm among the folk artistes of Bengal by beckoning them from the abyss of oblivion to the glory of self-reliance.</p>\r\n\r\n<h4>b) State Welfare Scheme for Purohit:</h4>\r\n\r\n<p>State Government has introduced State Welfare Scheme for Purohits in 2020 in order to provide financial assistance @Rs. 1,500/- per month, for their livelihood considering their importance in social, cultural and community functions, taking into consideration that most of them are now in financially distressed condition.</p>\r\n\r\n<p>So far, more than 28,000 beneficiaries have been included under this scheme till introduction and the monthly financial assistance is being disbursed directly to the bank accounts of the beneficiaries through Jai Bangla Portal.</p>\r\n\r\n<h4>c) West Bengal Pension Scheme for the Journalists, 2018</h4>\r\n\r\n<p>has been introduced with effect from 1stApril, 2018 to provide a monthly financial assistance @ Rs. 2500/- for the journalists who have attained 60 years of age and are facing acute financial hardship. So far, more than 160 journalists have been endowed with this benefit</p>\r\n\r\n<h4>d) Swasthya Sathi Scheme for Cable Operators:</h4>\r\n\r\n<p>With a view to providing social security to the pervasive yet unorganized sector of Cable TV distribution network, in 2018-19, the benefit of the State-funded &lsquo;Swasthya Sathi&#39; Health Insurance Scheme has been extended to all Cable TV Operators, Sub-operators, their workers and families. So far more than 20,000 numbers of primary members have been provided with the Swastha Sathi Card with total number of members are 50,000 approx. The total number of persons to be covered under the scheme is around 1 lakh 80 thousand.</p>\r\n\r\n<h5>2) State Ceremonies, other ceremonies and observance of Birth &amp; Death anniversaries:</h5>\r\n\r\n<h4>a) Republic Day Celebration &amp; Observance of Independence Day:</h4>\r\n\r\n<p>Republic Day and Independence Day was observed solemnly at Red Road, Kolkata along with District and Sub-Divisions.</p>\r\n\r\n<h4>b) International Mother Language Day:</h4>\r\n\r\n<p>International Mother Language Day was observed at Deshopriyo Park, Kolkata and different districts of the State on 21st February 2023. Eminent Artistes and general public participated in these programmes spontaneously.</p>\r\n\r\n<h4>c) Martyr&#39;s Day was observed on 30thJanuary,</h4>\r\n\r\n<p>2023 to pay tribute to Mahatma Gandhi on his death anniversary in solemn manner in all districts and sub-divisions of the state. The State Level programme was organised at Gandhi Ghat, Barrackpore. Floral tributes were also paid at the Statue of Mahatma Gandhi at Mayo Road, Kolkata.</p>\r\n\r\n<h4>d) Observance of 125th birth anniversary of Netaji Subhash Chandra Bose:</h4>\r\n\r\n<p>To commemorate the 125th Birth Anniversary of Netaji Subhas Chandra Bose, Government of West Bengal has constituted a committee under the chairmanship of Hon&rsquo;ble Chief Minister, West Bengal. Eminent economists &amp; Noble awardee Shri Amartya Sen and Shri Abhijit Binayak Bandyopadhyay along with other eminent personalities from various sectors have been included in the committee and most of the decisions of the committee have already been implemented and rests are under different phases of implementation.</p>\r\n\r\n<h4>e) Observance of Birth Anniversary of Kabi Bhanu Bhakt:</h4>\r\n\r\n<p>The Govt. of West Bengal observed the birth anniversary of great Nepali poet Bhanu Bhakt at Darjeeling and the same was observed also at West Bengal Legislative Assembly, Kolkata.</p>\r\n\r\n<h4>f) Celebrating their birth anniversaries :</h4>\r\n\r\n<p>The State Govt. has continued to remember as well as honour the contribution of the distinguished personalities by celebrating their birth anniversaries. The Department has observed the birth anniversaries of Swami Vivekananda, Kazi Nazrul Islam, Iswar Chandra Vidyasagar, Sister Nivedita, Nellie Sengupta, Shyamal Mitra, Michael Madhusudan Dutta, Binod Bihari Mukhopadhyay, Subhash Mukhopadhyay, Jibanananda Das, Jatindra Mohon Sengupta, Girish Ghosh, Surya Sen, Leslie Claudius, Ustad Bade Ghulam Ali Khan, Suchitra Sen, Pt. Ravishankar, Prafulla Chandra Sen, Jamini Roy, Dr. B R Ambedkar, Satin Sen, Henry Louis Vivian Derozio, Manna Dey, Satyajit Ray, Soumitra Chattopadhyay, Supriya Devi, Pankaj Mullick, Gurusaday Dutta, Upendra Kishore Roy Chowdhury, Manik Bandopadhyay, Raja Rammohun Roy, Ramkinkar Bej, Rash Behari Bose, Hemanta Mukhopadhyay, Bankim Chandra Chattopadhyay, R.D. Burman, Asutosh Mukhopadhyay, Dr. Prasanta Chandra Mahalanabis, Dr. Bidhan Chandra Roy, Dr. Shyamaprasad Mukhopadhyay, Satya Ranjan Bakshi, Dwijendralal Ray, Tarasankar Bandopadhyay, Rajanikanta Sen, Acharya P.C. Roy, Kishore Kumar, Birendra Krishna Bhadra, Abanindra Nath Tagore, Rishi Aurobinda, Sukanta Bhattacharya, Rajiv Gandhi, Jyotirindra Nandy, Gostha Pal, Debabrata Biswas, Sambhu Mitra, Mother Teresa, Rituparno Ghosh, Sailen Manna, Uttam Kumar, Dr. S. Radhakrishnan, Premendra Mitra, Sarat Chandra Bose, Sunil Gangopadhyay, BibhutiBhushan Bandyopadhyay, Sarat Ch. Chattopadhyay, GourKhyapa, Gaganendra Nath Tagore, Suchitra Mitra, Rani Rasmoni, Dr. Nilaratan Sarkar, Sachin Dev Burman, Mahatma Gandhi, Leela Roy, Hemanta Bose, Dr. Meghnad Saha, Chhabi Bandyopadhyay, Begum Akhtar, Jaiparakash Narayan, Atul Prasad Sen, Sukumar Roy, Ritwik Ghatak, C.R. Das, Haradhan Bandyopadhyay, Abul Kalam Azad, Jawaharlal Nehru, Birsha Munda, Indira Gandhi, Salil Chowdhury, Debaki Kumar Basu, Jagadish Ch. Basu, Khudiram Basu, Uday Shankar, Keshab Chandra Nag , Prafulla Chaki, Pretilata Waddedar, Kalpana Dutta, Martyr Jatindra Nath Mukherjee, Beena Das, Dwijen Mukhopadhyay, Pranab Mukherjee and Jatileshwar Mukhopadhyay. Besides, janmatithi of Sri Sri Ramakrishna and Maa Sarada are also observed at Nabanna, the State Secretariat.</p>\r\n\r\n<h4>g) Observing death anniversaries:</h4>\r\n\r\n<p>Death anniversaries of Masterda Surya Sen, Rash Behari Bose, Mahatma Gandhi, Bhabani Bhattacharya, Dr. Meghnad Saha, Hemanta Bose, Sarat Chandra Bose, Bhagat Singh, Satin Sen, PrafullaChaki, AsutoshMukhopadhyay, C.R. Das, Anil Kumar Das, Dr. Shyamaprasad Mukhopadhyay, Michael Madhusudan Dutta, Asit Ranjan Bhattacharya, J.M. Sengupta, Uttam Kumar, Kanailal Bhattacharya, Dr. Bidhan Chandra Roy, Iswar Chandra Vidyasagar, Rabindra Nath Tagore , Khudiram Basu, KaziNazrul Islam, Ustad Allauddin Khan, Baghajatin, Jatin Das, Pritilata Waddedar, Raja Ram Mohun Roy, Dr. B.R. Ambedkar, Martyr Matangini Hazra, Henry Louis Vivian Derozio, Leela Roy, Hemchandra Ghosh were also observed by I&amp;CA Department.</p>\r\n\r\n<h4>(h) I &amp; CA Department also observed Binay-Badal-Dinesh Day,</h4>\r\n\r\n<p>Hool Divas, International Mother Language Day, National Maritime Day, Sahid Dibas, David Hare Day, Baleswar Day, Martyr&rsquo;s Day, INA Day with reverence.</p>\r\n\r\n<h5>3) Hospitality:</h5>\r\n\r\n<p>Department of Information &amp; Cultural Affairs also plays a pivotal role in extending State Hospitality and perform Protocol responsibilities during the visit of dignitaries from all over the country and abroad. Around 650 dignitaries have visited the State during 2022-23 who have been declared as State Guests.</p>\r\n\r\n<h5>4) Advertisements:</h5>\r\n\r\n<p>Advertisements of all the Government Departments are centrally released to print and electronic media by I&amp;CA Department. The process of releasing advertisements and tender notices is being carried out round the year. Social media interfaces like Facebook, Twitter, Instagram and other digital platforms are adopted as new channels for paramount percolation of Government advertisements. Besides, Govt. messages and achievements are displayed through various LED walls in Kolkata and in the districts.</p>\r\n\r\n<h5>5) LED Tableaux:</h5>\r\n\r\n<p>In order to disseminate the various developmental messages in the remote areas of the district through audio visual mode, LED mount tableau were displayed which has attracted attention of people and has become very popular.</p>\r\n\r\n<h5>6) Publications:</h5>\r\n\r\n<p>Paschimbanga Magazine: During last Financial Year one special edition of Paschimbanga was released in English &amp; Bengali. The publication of Santhali &amp; Hindi editions is in progress.</p>\r\n\r\n<h5>7) Exhibitions:</h5>\r\n\r\n<p>Information and Cultural Affairs Department organizes exhibitions at national, state and district levels throughout the year. Central Exhibitions and Poster Exhibitions are arranged in various Fairs and Festivals to cater the messages on different flagship programmes of the Government throughout the State.</p>\r\n\r\n<p>The exhibitions were organized on the occasion of different State Level Ptrogrammes like Sangeet Mela, Little Magazine Fair etc. Tableau in the Republic Day Parade, Independence Day Parade at Kolkata and Fairs at Delhi are special programme of this Exhibition wing.</p>\r\n\r\n<h5>8) Information Networking and Media Management:</h5>\r\n\r\n<p>The Information &amp; Cultural Affairs Department is entrusted with dissemination of various administrative news, notifications; circulars etc. of the Government to the media and to arrange press conferences, issue Press Accreditation Cards etc. to the journalists throughout the State. This Department oversees the media management during different official functions of the Government.</p>\r\n\r\n<p>E-mail, SMS and Social media applications have been introduced for easier, faster and better communication with the media houses and journalists. Recently, various govt. advertisements are being released in various social media like Facebook, Twitter and Instagram along with the empanelled websites. As a result of such maneuver, the reach of the Government messages has increased manifolds. Official Tweeter handles are used by all the District and Sub Divisional level officers in a most effective manner.</p>\r\n\r\n<h5>9) Official Portal of the Government of West Bengal:</h5>\r\n\r\n<h5>&nbsp;</h5>\r\n\r\n<p>The official Portal of the Government of West Bengal &lsquo;egiyebangla.gov.in&rsquo;, is designed, developed and hosted by the Information &amp; Cultural Affairs Department. The objective of the portal is to provide a single window access to the information and services provided by the different Departments of the Government of West Bengal. The &lsquo;Egiye Bangla&rsquo; website has been re-designed to make it more attractive and user friendly and presently having around 60,000 viewers per day on an average.</p>\r\n', '', '2024-05-01 09:24:56', '2024-09-25 11:36:43');
INSERT INTO `wbinc_directorates` (`ID`, `title`, `about_image`, `about_directorate`, `directorate_name`, `directorate_designation`, `directorate_office_address`, `directorate_image`, `directorate_brief`, `bottom_content`, `created_date`, `updated_date`) VALUES
(2, 'Directorate of Culture', 'uploads/directorates/7604315872201714568454.webp', '<p>For centuries, the cultural heritage of Bengal has been a keystone of its identity. It is the land of Lalon Fakir and of Rabindranath Tagore, the land of Patachitra storytellers and of Satyajit Ray, the land of &#39;Jatra&#39; with its mass appeal and of Group Theatre which seeks an exclusive audience in tune with global sensibilities, the land of the vibrancy of folk forms like Purulia Chhau and the calmness of the Bishnupur Gharana of classical music. The traditional and modern forms of Art thrive on exploration of common factors and contrasts and a continuous process of exchange which enrich each other.</p>\r\n\r\n<p>The Directorate of Culture is working to boost that rich legacy by regularly organizing festivals and events on various genres like music, literature, theatre, fine arts, and dance, apart from promoting the wide-ranging folk varieties of the state. It focuses on nurturing new talents, providing a platform to artistes and organizations and ensuring assistance to artistes who are elderly and belong to the financially weaker strata. A number of academies and institutes operate under the Directorate, to ensure promotion of languages spoken in the state and representation to all sections of the society.</p>\r\n', 'Kaushik Basak, WBCS, (Exe)', 'Spl. Secretary & E.O. Director of Culture', 'Room No. 908, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', 'uploads/directorates/4713638386571714568454.webp', '<hr />\r\n<h4>Name of the Academies and Institutions under Culture Directorate are :</h4>\r\n\r\n<ul>\r\n	<li>Paschimbanga Bangla Academy</li>\r\n	<li>Paschimbanga Folk and Tribal Cultural Centre (FTCC)</li>\r\n	<li>Paschimbanga Natya Academy</li>\r\n	<li>Paschimbanga Jatra Academy</li>\r\n	<li>Paschimbanga Rajya sangeet Academy</li>\r\n	<li>Paschimbanga Baul Academy ( situated at Joydev, Birbhum)</li>\r\n	<li>Paschimbanga Sishu Kishore Academy</li>\r\n	<li>Paschimbanga Kazi Nazrul Islam Academy</li>\r\n	<li>Rajya Charukala Parshad</li>\r\n	<li>Paschimbanaga Kabita Academy</li>\r\n	<li>Paschimbanga Dalit Sahitya</li>\r\n	<li>Paschimbanga Rajbangshi Bhasa Academy</li>\r\n	<li>Paschimbanga Hindi Academy</li>\r\n	<li>Manbhum Cultural Academy</li>\r\n	<li>Paschimbanga Nritya Academy</li>\r\n	<li>Paschimbanga Kamtapuri Bhasa Academy</li>\r\n	<li>Paschimbanga Birsa Munda Academy</li>\r\n	<li>Folk Entertainment Section</li>\r\n	<li>Minerva Natyasanskriti Charchakendra</li>\r\n	<li>Bhaskar Bhavan\r\n	<ul>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h4>(ii) Name of the Auditoria under Culture Directorate are :</h4>\r\n\r\n<ul>\r\n	<li>Rabindra Sadan</li>\r\n	<li>Madhusudan Mancha</li>\r\n	<li>Girish Mancha</li>\r\n	<li>Sisir Mancha</li>\r\n	<li>Uttirna, Alipore, Kolkata</li>\r\n	<li>Mahajati Sadan</li>\r\n	<li>University Institute Auditorium</li>\r\n	<li>Rabindra Okakura Bhavan ( Under Pachimbanga Bangla Academy)</li>\r\n	<li>Bangla Academy Sabhaghar ( Under Pachimbanga Bangla Academy)</li>\r\n	<li>Jibananda Sabhaghar ( Under Pachimbanga Bangla Academy)</li>\r\n	<li>Abanindranath Sabhaghar (Under Rajya Charukala Parshad)</li>\r\n	<li>Minerva Hall</li>\r\n	<li>Triptimitra Sabhaghar (( Under Pachimbanga Natya Academy)</li>\r\n	<li>Dinobandhu Mancha ( Siliguri)</li>\r\n	<li>Rabindra Bhavan, Chuchura, Hooghly</li>\r\n	<li>Rabindra Bhavan Krishnanagar, Nadia</li>\r\n	<li>Rabindra Bhavan, Ranaghat, Nadia</li>\r\n	<li>Rabindra Sadan, Berhampore, Murshidabad</li>\r\n	<li>Rabindra Bhavan, Suri, Birbhum</li>\r\n	<li>Rabindra Bhavan, Malda</li>\r\n	<li>Rabindra Bhavan,Balurghat</li>\r\n	<li>Rabindra Bhavan, Purulia\r\n	<ul>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h4>(iii) Name of the Exhibition Hall under Culture Directorate are :</h4>\r\n\r\n<ul>\r\n	<li>Gaganendra Padarshasala, Kolkata</li>\r\n	<li>Abanindra Padarshashala, Chandannagar\r\n	<ul>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>The multifaceted activities of the Culture Directorate can be categorized in the following manner:</strong></h2>\r\n\r\n<h5>1. Social Welfare Schemes -</h5>\r\n\r\n<h4>(i) Literary and Cultural Pension Scheme:</h4>\r\n\r\n<p>In order to provide financial assistance to aged and financially weaker artistes, the State Government provides the same under the Financial Assistance to distinguished persons of Arts and Letters. So far more than 115 aged artists including model have been provided monthly financial assistance under the Scheme.</p>\r\n\r\n<h4>(ii) Financial Assistance to Jatra Artistes:</h4>\r\n\r\n<p>In this era of multi-dimensional techno-based entertainment, we had almost lost our proud culture of Jatra. To infuse vitality into our cultural heritage, the State Government provides one-time financial assistance to distressed and aged Jatra artist @Rs. 25,000/- each.</p>\r\n\r\n<h4>(iii) Lok Prasar Prakalpa:</h4>\r\n\r\n<p>The State Government has launched &lsquo;Lok Prasar Prakalpa&rsquo; (LPP) in the year of 2014 with a view to revitalizing the Folk Arts of Bengal as well as ensuring a steady means of livelihood for the State&rsquo;s folk artistes. Their talent is utilized in a coherent campaign to spread the developmental initiatives of the Government across the State and improving the socio-economic condition of the folk artistes. More than 1 lakh 94 thousand folk artistes have so far been registered to receive financial assistance in the form of Retainer Fee, Pension and Performance Fee.</p>\r\n\r\n<p>Every registered folk artiste within the age group of 18 to 60 years receives Rs. 1000/- per month as &lsquo;Retainer Fee&rsquo;, whereas &lsquo;Pension&rsquo; of equal amount is granted to the folk artistes for those who have crossed the age of 60 years. Besides, &lsquo;Performance Fee&rsquo; @ Rs. 1,000/- per day is also provided to each artiste when such performance is called for. Retainers fees and Pension is being disbursed directly to the bank accounts of the beneficiaries through Jai Bangla Portal. Performance fess is also paid directly to the bank accounts of the beneficiaries through Treasuries of different Districts. Both Information and Culture Directorate are engaged to implement this project.</p>\r\n\r\n<p>The enlisted folk artistes propagate different flagship programmes of the State Government such as Kanyashree, Rupashree, Sabuj Sathi, Duare Sarkar, ParaySamadhan, Manobik Pension etc through their performances. Besides they also campaign for creating awareness among the people on various public awareness issues like prevention of vector borne disease, digital ration cards etc. This project has brought tremendous enthusiasm among the folk artistes of Bengal by beckoning them from the abyss of oblivion to the glory of self-reliance.</p>\r\n\r\n<h5>2. Fairs and Festivals:</h5>\r\n\r\n<h4>a) Durga Puja Carnival (Red Road Carnival):</h4>\r\n\r\n<p>I &amp; CA Department, Govt. of WB organized &ldquo;Durga Puja Carnival&rdquo; every year on Red Road, Kolkata from 2016. Immersion ceremony with Durga idols is the main objective . Colorful tableaux, performance of flamboyant dancers, Artistes of different zoners and feet-tapping musical performances by a host of artists. Approx hundreds of idols of different Puja Committees and more than 5,000 performers, participated in the grand show at Red Road. More than 20,000 spectators, including a huge number of foreign guests and delegates, invited in the wake of the festival being recognized as an intangible heritage by UNESCO. In all the districts, Durga Puja Carnival held had evoked a huge response among the citizens.</p>\r\n\r\n<h4>b) Durga Puja of Kolkata receives UNESCO Heritage Tag:</h4>\r\n\r\n<p>Durga Puja of Kolkata has been included in UNESCO&rsquo;s 2021 list of &lsquo;Intangible Cultural Heritage of Humanity&rsquo;. To commemorate this achievement on 1st September, 2022 a mega rally comprised of around one lakh people led by the Hon&rsquo;ble Chief Minister, West Bengal from Jorasanko to Red Road was organized followed by a big cultural programme at Red Road where the State Government felicited to UNESCO representatives.</p>\r\n\r\n<h4>c) Bangla Sangeet Mela:</h4>\r\n\r\n<p>&lsquo;Bangla Sangeet Mela&rsquo; has become a platform to spread the message of unity through rich cultural language and melody of Bengal. &lsquo;Bangla Sangeet Mela&rsquo; was held between 25th December 2023 &amp; 1st January 2024, simultaneously at 10 venues located in various places of Kolkata and witnessed participation of about 4,000 artistes, musicians and anchors of West Bengal.</p>\r\n\r\n<h4>d) Biswa Bangla Loko-Sanskriti Utsav:</h4>\r\n\r\n<p>Biswa Bangla Loko-Sanskriti Utsav was organized at Rabindra Sadan-Nandan Complex from 25th December, 2023 to 1st January, 2023. District Level Loksanskriti Festivals were also held in the month of September 2023 to December 2023 along with Jatra pala.</p>\r\n\r\n<h4>e) PoushUtsav:</h4>\r\n\r\n<p>Poush Utsav was organized during 25th December, 2023 to 1st January 2024 in three different venues. 800 singers and musicians took part in the Festival. Huge number of artisans and members of Self Help Groups also participated.</p>\r\n\r\n<h4>f) Bangla Moder Gorbo:</h4>\r\n\r\n<p>Information &amp; Cultural Affairs Department organized a 3-day long programme in all 22 districts between November, 2023 &amp; January, 2024 under the banner head &lsquo;Bangla Moder Gorbo&rsquo; to spread the message of the developmental schemes undertaken by the present Government so that the common people can avail it to the maximum. Artistes, both from Kolkata and local areas along with the LPP folk artistes, took part in the programmes. An exhibition titled &lsquo;Muktir Sangrame Bangla&rsquo; was also displayed at each of the venues; which were highly appreciated by people. Participation from all walks of life made this festival a grand success and provided huge scope to a large number of folk artistes to stage their folk genres.</p>\r\n\r\n<h4>g) Paschim Banga Charukala Utsav:</h4>\r\n\r\n<p>Paschim Banga Charukala Utsav-2023 has been organised from 2nd November 2023 to 9th November 2023, by Rajya Charukala Parshad at Nandan-Rabindra Sadan Complex and Gaganendra Shilpa Pradarshashala. More than 500 artistes participated in the Charukala Utsav.</p>\r\n\r\n<h4>h) Natya Mela:</h4>\r\n\r\n<p>The Paschim Banga Natya Academy has organized 23rd Natya Mela from 3rd February 2024 to 12th February, 2024 at Rabindra Sadan, Sisir Mancha, Madhusudan Mancha, Girish Mancha, Minerva Theatre, University Institute, Rabindra Tirtha Newtown, Tripti Mitra Natyagriha and at Natya Academy Open Air Theatre.</p>\r\n\r\n<h4>i) Sahitya Utsav-O-Little Magazine Mela :</h4>\r\n\r\n<p>Paschimbanga Bangla Academy organized &lsquo;Sahitya Utsav-O-Little Magazine Mela&rsquo; from 10th January 2024 to 14th January 2023 at Rabindra Sadan-Nandan Campus. 450 nos. stalls were made and more than 700 poets, editors, literary persons had participated in this festival from all over the State.</p>\r\n\r\n<h4>j) Jatra Utsav:</h4>\r\n\r\n<p>Paschimbanga Jatra Academy organized &lsquo;Jatra Utsav&rdquo; from 24th November 2023 26th November 2023 at Ektara Mukta Mancha and Rabindra Sadan and continued till 22nd December 2023 at Phani Bhusan Vidyabinod Jatra Mancha, Bagbazar, Kolkata. 32 number of Jatras are to be staged during this period. &lsquo;Jatra Utsav&rdquo; was also held at Bara Kachari Maidan, Barasat on 25th November 2023.</p>\r\n\r\n<h4>k) Kabita Utsav:</h4>\r\n\r\n<p>Paschimbanga Kabita Academy organized &lsquo;Kabita Utsav&rdquo; from 4th Jnauary 2024 to 6th January 2024 at Ektara Mukta Mancha and Rabindra Sadan, Bangla Academy Sabhaghar, Jibananda sabhaghar, Abanindra Sabhaghar . More than 700 Poet and Recitation artistes were taken part in this programme</p>\r\n\r\n<h4>l) Classical Musical Conference:</h4>\r\n\r\n<p>Paschimbanga Rajya Sangeet Academy organized &lsquo;Classical Musical Conference&rdquo; from 19th January 2024 to 21st January 2024 at Ektara Mukta Mancha . Eminent Classical Artistes were taken part in this highly popular Music Conference.</p>\r\n\r\n<h4>m) Kolkata International Children&rsquo;s&rsquo; Film Festival:</h4>\r\n\r\n<p>Paschimbanga Shishu Kishore Academy organized 10th edition of &lsquo;Kolkata International Children&rsquo;s&rsquo; Film Festival&rdquo; from 25th January 2024 to 29th January 2024 at 8 different venues all over Kolkata and Bidhannagar including Nan dan, Rabindra Sadan, Ektara Mukta mancha, SisirMancha, rabindra Okakura Bhaavan. Apart from that Master Class at Nandan- IV and Exhibition &ldquo; Hate Kolome Cinema&rdquo; was held in Gaganendra Padarshashala. Over thousand Child delegates were taken part and apart from that thousands of children attend the programme by using daily passes on daily basis. 131 Films from 31 Countries were screened during this KICFF</p>\r\n\r\n<h4>n) Observance of International Mother Language Day:</h4>\r\n\r\n<p>International Mother Language Day is held annually on 21st February State wide to promote awareness of linguistic and cultural diversity and multilingualism. In Kolkata, State level programme held at Deshapriya Park every years. Honorable Chief Minister kindly grace the occasion every years. Eminent Persons from all Cultural and Social sectors are participated in this programme.</p>\r\n\r\n<h4>o) Chotoder Boi Mela :</h4>\r\n\r\n<p>Paschimbanga Shishu Kishore Academy organized &ldquo;Chotoder Boi Mela&rdquo; from 13th to 17th September 2023 at Rabindra Sadan- Nandan Complex.</p>\r\n\r\n<h4>p) Sharad Boi Parban:</h4>\r\n\r\n<p>Paschimbanga Bangla Academy organized &lsquo;Sharad Boi Parban&rsquo; from 29th September 2023 to 6th October 2023 in association with Publishers and Guild at Rabindra Sadan-Nandan Campus. 100 nos. stalls were made and more than 300 poets, editors, literary persons had participated in this festival from all over the State.</p>\r\n\r\n<h4>q) National Theatre Festival :</h4>\r\n\r\n<p>Minerva Natya Sanskrity Charcha Kendra organized &lsquo;National Theatre Festival&rsquo; from 30th September 2023 to 6th October 2023 at Rabindra Sadan. National level Theatre Teams were taken Part in this festival. Eminent Theatre personalities from all over the country were taken part in this festival.</p>\r\n\r\n<h5>3. Observance of birth and death Anniversaries of Rabindranath Tagore:</h5>\r\n\r\n<p>The Department had observed &lsquo;Pochisey Baisakh&rsquo; on 9th May 2023 by way of garlanding the statue and portrait of Rabindranath Tagore at Dhanadhanya Stadium and Rabindra Sadan Campus, followed by presentation of Rabindra Sangeet by eminent artistes through online programme. The day was also observed in all districts and sub-divisions. Rabindra Smriti Puraskar were awarded to eminent literary personalities on this day. Thereafter, &lsquo;Kabi Pakshya&rsquo; also held from 10th May 2022 to 24th May 2022 at Rabindra Sadan, Sisir Mancha, Ektara Mukta Mancha and Bangla Academy Sabhagriha.</p>\r\n\r\n<h5>4. &lsquo;Baishe Shraban&rsquo;</h5>\r\n\r\n<p>was also commemorated as death anniversary of Rabindranath Tagore in Kolkata and all other districts and sub-divisions to pay homage to the Kabiguru. &lsquo;22se Shraban&rsquo; also held as State level programme from 8th August 2023 to 11th August 2023 at Rabindra Sadan, Sisir Mancha, Ektara Mukta Mancha and Bangla Academy Sabhagriha.</p>\r\n\r\n<h5>5. Observance of Birth &amp; Death Anniversary of Kazi Nazrul Islam:</h5>\r\n\r\n<p>The birth anniversary was observed on 26th May&rsquo;23 at Nazrul Tirtha, New Town, Kolkata and in all districts &amp; Sub-divisions. Thereafter, &lsquo;Nazrul Janmotsov&rsquo; was also held from 27th May 2023 to 29th May 2023 at Rabindra Sadan, Sisir Mancha, Ektara Mukta Mancha and Bangla Academy Sabhagriha.</p>\r\n\r\n<p>Death Anniversary was also observed on 29thAugust&rsquo;23 and 30th August 2023 at Sisir Mancha, Kolkata and in all districts &amp; Sub-divisions.</p>\r\n\r\n<h5>6. Observance of Birth Anniversary of Kabi Bhanu Bhakt:</h5>\r\n\r\n<p>The Govt. of West Bengal observed the birth anniversary of great Nepali poet Bhanu Bhakt at Darjeeling and the same was observed also at West Bengal Legislative Assembly, Kolkata.</p>\r\n\r\n<h5>7. Observance of 75th year of India&rsquo;s Independence &amp; 150th birth anniversary of Rishi Aurobindo:</h5>\r\n\r\n<h5>8. Publications:</h5>\r\n\r\n<h4>a) Paschim Banga Bangla Academy:</h4>\r\n\r\n<p>This Academy published &lsquo;Bibhutibhusan &lsquo;Chaturbhashik Abhidhan&rsquo; (Bengali-English-Hindi-Urdu language); &lsquo;Vivekananda-O-Samakalin Bharat; &lsquo;Michael Madhusudan Dutta-Phire Dekha&rsquo;; &lsquo;Chandrabotir Ramayan&rsquo;; &lsquo;Galpe Galpe Subhas Chandra&rsquo;.</p>\r\n\r\n<h4>b) Folk and Tribal Cultural Centre :</h4>\r\n\r\n<p>This Institution published different books on Folk and Tribal Culture and Music. Daily Bulletin LOKO SANSKRITY BARTA is published on regular basis.</p>\r\n\r\n<h4>c) Digitisation of manuscripts:</h4>\r\n\r\n<p>Digitisation of manuscripts of eminent authors of Bengal has been undertaken by Paschim Banga Bangla Academy (PBBA). So far 65,000 pages have been digitised, which includes manuscripts, letters and notes from eminent Bengali novelists like Rabindranath Tagore, Manik Bandyopadhyay, Bibhutibhushan Bandyopadhyay, Amritalal Basu, Annada Shankar Ray, Leela Majumdar, Leela Ray, Tarashankar Bandyopadhyay. Rare &lsquo;Punthis&rsquo; have also been digitized. The Department has envisaged the digitisation of the invaluable books, documents, audio-visual material kept in the libraries of the various Cultural Academies under itself, in order to preserve the rich cultural legacy of the State.</p>\r\n\r\n<h5>9. Academies and other Organizations:</h5>\r\n\r\n<p>A good number of Academies has been set up by the State Government under Information and Cultural Affairs Department with specific purpose to promote tradition and culture of the State. The name of organizations and their prime objectives are the following:</p>\r\n\r\n<h4>a) Kamtapuri Bhasha Academy:</h4>\r\n\r\n<p>To develop and nurture the Kamtapuri Language, the Government has set up Kamtapuri Bhasha Academy. The Academy has initiated the work of compilation of a dictionary on Kamtapuri language and preparation of syllabus for Kamtapuri language for the primary level in schools. The Academy has already submitted the syllabus framed in Kamtapuri Language for primary education to the Education Department for their consideration. I&amp;CA Department released fund time to time in favour of the Academy for promotion and development of Kamtapuri Language and Culture.</p>\r\n\r\n<h4>b) Manbhum Cultural Academy:</h4>\r\n\r\n<p>To preserve and develop the rich cultural heritage of Manbhum area the Manbhum Cultural Academy is set up at Purulia.</p>\r\n\r\n<h4>c) Paschimbanga Baul Academy:</h4>\r\n\r\n<p>Baul is one of the prominent folk-forms of West Bengal. To promote this folk form, a Baul Academy is set up at Joydeb, Ilambazar in the year 2017 to undertake the activities like Baul Utsab, Seminar, and Workshop. The construction of Baul Academy Bhawan has been completed by Birbhum Zilla Parishad and it has already been inaugurated.</p>\r\n\r\n<h4>d) Paschimbanga Natya Academy:</h4>\r\n\r\n<p>Paschim Banga Natya Academy is set to develop skill and expertise in the field of theatre. The Academy has taken initiatives to document and archive the theatre history of Bengal, to disseminate information regarding its theoretical and historical understanding, to promote and project significant creativity in the field. The Natya Academy conducts annual theatre festivals, seminars and public lectures and training workshops and publishes research works and other books on Bengali drama. It confers Dinabandhu Puraskar and Girish Puraskar, two most prestigious awards in the field of theatrical excellence in the state, for production playwriting, acting, direction, stagecraft, design and music. This year, the 23rd Natya Mela was held during the month of February 2024.</p>\r\n\r\n<h4>e) Paschimbanga Kazi Nazrul Islam Academy:</h4>\r\n\r\n<p>In order to preserve and nurture the invaluable literary and cultural contributions of Kazi Nazrul Islam, the Nazrul Academy was set up in 2011. The Academy has published the comprehensive works of Kazi Nazrul Islam. The Academy has observed Nazrul Janma Utsav and &lsquo;Nazrul Prayan Dibas&rsquo; in Kolkata and all other districts and sub-divisions.</p>\r\n\r\n<h4>f) Paschimbanga Kabita Academy:</h4>\r\n\r\n<p>This has been set up in 2016 with a view to promote and nurture the poetic excellences in the field of Bengali literature. Workshop on poetry was organized in different districts to popularize poetry and recitation among the school/ college students. KabitaUtsav organized by the Kabita Academy is scheduled to be held on and from 4th to 6th January 2024. About 700 Poets and Reciters are expected to participate in the ensuing festival.</p>\r\n\r\n<h4>g) West Bengal State Music Academy:</h4>\r\n\r\n<p>Among other regular activities for the enhancement of the long treasured musical heritage of Bengal, the Academy has scheduled for organization of &lsquo;Classical Musical Conference&rsquo; on and from 19th to 21st January at Ektara Mukta Mancha, Kolkata. About 100 Vocalists and Instrumentalists are likely to participate. Beside this, this academy also organized &lsquo;Dui Shikhar&rsquo;; Youth Classical Conference&rsquo;; &lsquo;Dance Drama Festival&rsquo; etc.</p>\r\n\r\n<h4>h) Paschimbanga Nritya Academy :</h4>\r\n\r\n<p>This Academy was set-up in the year 2019. This newly created academy organized &lsquo;Uday Shankar Dance Festival&rsquo; at Madhusudan Mancha.</p>\r\n\r\n<h4>i) Paschimbanga Bangla Academy:</h4>\r\n\r\n<p>The Academy is entrusted with the responsibility of reforming Bengali spelling and grammar, compiling dictionaries, encyclopedias and terminologies and promoting Bengali language and culture. The Bangla Academy has earned an excellent reputation for publication of noted literacy gems of Sri RabindraNath Tagore, Manik Bandyopadhyay, Kazi Nazrul Islam etc.</p>\r\n\r\n<p>The Bangla Academy has been successful in extending its activities and programs to different districts of West Bengal and even to other states in India. In Kolkata, the Bangla Academy organises different programs in collaboration with prestigious organizations like Bangiya Sahitya Parishad, Sahitya Academy, Publishers and Book Sellers&#39; Guild, Eastern Zonal Cultural Centre, National Book Trust and also with different universities and cultural organizations.</p>\r\n\r\n<p>In order to promote small newspapers and magazines, the Kolkata Little Magazine Mela &amp; Literary Festival was organized by the Academy at Rabindra Sadan-Nandan Prangan during 10th to 14th January 2024, where around 450 little magazines have participated. About 700 Writers, Poets, Elocutionists and other dignitaries representing different field of culture have graced the occasion. Academy also observed birth anniversary of Suniti Chottopadhyay, Sakti Chattopadhyay and others.</p>\r\n\r\n<h4>j) Sishu Kishore Academy:</h4>\r\n\r\n<p>This Academy has been set up to promote various art and literary activities among the children. This Academy organized Sishu Kishore Utsav at Balurrghat, Dakshin Dinajpur in the month of January 2024. The Academy has published Chabite Vidyasagar Jiboni&rsquo;, &lsquo;Chira Sabuj Lekha Sera Rahasya&rsquo;, &lsquo;Sera Chara Kabita&rsquo;, &lsquo;Ghanadar Ajab Jabeda, regular issue of Quarterly magazine &lsquo;Chira Sabuj Lekha&rsquo; during the last financial year. Paschimbanga Shishu Kishore Academy organized 10th edition of &lsquo;Kolkata International Children&rsquo;s&rsquo; Film Festival&rdquo; from 25th January 2024 to 29th January 2024 at 8 different venues all over Kolkata and Bidhannagar including Nan dan, Rabindra Sadan, Ektara Mukta mancha, SisirMancha, rabindra Okakura Bhaavan. Apart from that Master Class at Nandan- IV and Exhibition &ldquo; Hate Kolome Cinema&rdquo; was held in Gaganendra Padarshashala.</p>\r\n\r\n<h4>k) Minerva NatyaSanskriti Charcha Kendra:</h4>\r\n\r\n<p>Minerva Natya Sanskriti Charcha Kendra has formed repertory theatre for research on theatre production with an emphasis on social issues and has engaged repertory artistes to stage their recent theatre production &lsquo;Cherry Orchard&rsquo;. Apart from that, National Theatre Festival is also organized by this Kendra in every year.</p>\r\n\r\n<h4>l) Rajya Charukala Parshad:</h4>\r\n\r\n<p>Rajya Charukala Parshad strives for preservation and improvement of rich heritage of fine arts of Bengal. The Parshad organizes Paschimbanga Charukala Utsav-every year. One-time financial assistance will be disbursed to 50 Charu Shilpi @ Rs. 12,000/- each and @ Rs. 40,000/- each to visual art organizations. The Parshad disburses monthly pension to 115 financially distressed eminences of the field of Culture.</p>\r\n\r\n<h4>m) Paschimbanga Jatra Academy:</h4>\r\n\r\n<p>Paschimbanga Jatra Academy has been setup to revitalize the Jatra culture of Bengal. Jatra Utsav was organised from 24th November to 26th November 2023 at Ektara Mukta Mancha and Rabindra Sadan and continued till 22nd December 2023 at Phani Bhusan Vidyabinod Jatra Mancha, Bagbazar, Kolkata. 32 number of Jatras were staged during this period. &lsquo;Jatra Utsav&rdquo; was also held at Boro Kachari Maidan, Barasat on 25th November 2023. In order to revitalize the Jatra Culture, the Govt. of West Bengal has reduced and simplified the tax collection system for organizing Jatra programme.</p>\r\n\r\n<h4>n) Folk and Tribal Cultural Centre:</h4>\r\n\r\n<p>Folk &amp; Tribal Festivals were held in the different parts of the State. Annual Folk &amp; Tribal Festival was held in Lokogram on 6th December, 2023. Regular publication of journal is also being made.</p>\r\n\r\n<h4>o) Rajbanshi Bhasa Academy:</h4>\r\n\r\n<p>&#39;Rajbanshi Bhasa Academy was set up in Cooch Behar in the year of 2012. The Academy has commemorated &lsquo;Rajbanshi Divas&rsquo; on 28thOctober, 2023. The celebration was marked by literary seminar, recitation of poetry in Rajbangshi language and token felicitation to the renowned personalities. Like every year, the birth and death Anniversaries of Thakur Panchanan Barma were observed with due reverence. State Government released financial assistance in favour of the Academy for promotion and development of Rajbanshi Language and Culture.</p>\r\n\r\n<h4>p) Paschimbanga Dalit Sahitya Academy:</h4>\r\n\r\n<p>The State Government has set up Paschimbanga Dalit Sahitya Academy in the year 2020 for promotion, preservation and nurturing of Dalit literature and culture. Since inception the Academy has organised &lsquo;Dalit Sahitya Sammelan&rsquo; at Krishnagar, Alipurduar, Cooch Behal and Medinipur. Apart from it, the Academy also conducted workshop for Dalit writers and editors at Rabindra-Okakura Bhavan. Seminar was also organised by the Academy at Raiganj in collaboration with Raiganj University.</p>\r\n\r\n<p>This academy organized &lsquo;Dalit Sahitya Utsav&rsquo; at Rabindra Sadan-Nandan Complex in every year in the month of April . More than 70 Dalit Patra-Patrika and 200 Dalit poets, literary person were participated in this utsav. The Department has released financial assistance in favour of the Academy for undertaking literacy works for Dalit community.</p>\r\n\r\n<h4>q) Paschimbanga Hindi Academy:</h4>\r\n\r\n<p>In order to promote and develop Hindi language and literature, the State Government has reconstituted &lsquo;Paschimbanga Hindi Academy&rsquo;. The State Government has allotted financial assistance time to time for undertaking Hindi literacy works as well as cultural activities. The Academy has organised National Hindi Drama Festival&rsquo;.</p>\r\n\r\n<h5>10. Awards and Sammans: State Government is incessant in its effort to recognize and promote the champions in the different fields of art and culture:</h5>\r\n\r\n<h4>a) Banga Bhushan and Banga Bibhushan Awards:</h4>\r\n\r\n<p>The State government has initiated these awards as the highest Civilian honour conferred upon distinguished persons of eminence, who have excelled in different fields of human endeavor, covering art &amp; culture, literature, Public Administration &amp; Public Service etc.</p>\r\n\r\n<h4>b) Biswa Bangla Sharad Samman, 2023:</h4>\r\n\r\n<p>To promote the indigenous art &amp; culture of Bengal and maintain peace &amp; tranquility during the festive season of Bengal, the State Government has conferred &lsquo;Biswa Bangla Sharad Samman&rsquo; to different Puja organizers throughout the State. Different categories of &lsquo;Sharad Samman&rsquo; were conferred upon 100 different Puja committees of Kolkata and 300 other puja committees from the Districts to encourage celebration of Durga Puja with grandeur.</p>\r\n\r\n<h4>c) Shanti Gopal &amp; Tapan Kumar Puraskar:</h4>\r\n\r\n<p>Shanti Gopal &amp; Tapan Kumar Puraskar are conferred upon eminent Jatra artistes in the inaugural programme of the Jatra Utsav held at Ektara mancha on 24th January 2023.</p>\r\n\r\n<h2><strong>Awards of different Academies :</strong></h2>\r\n\r\n<p>for contribution in the fields of literature, culture, fine arts, folk-arts, Awards of different Academies have been conferred upon on 26th May every year in the programme of Birth Anniversary of Kazi Nazrul Islam on 26th May or Annual Festival of concerned Academy:</p>\r\n\r\n<ul>\r\n	<li>Nazrul Smriti Puraskar, ( Paschimbanga Bangla Academy)</li>\r\n	<li>Bankim Smriti Puraskar, ( Paschimbanga Bangla Academy)</li>\r\n	<li>Vidyasagar Smriti Puraskar, ( Paschimbanga Bangla Academy)</li>\r\n	<li>Girish Puraskar, ( Paschimbanga Natya Academy)</li>\r\n	<li>Dinabandhu Puraskar, ( Paschimbanga Natya Academy)</li>\r\n	<li>Abonindranath Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Ramkinkar Baij Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Charukala Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Binod Behari Mukhopadhya Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Alauddin Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Uday Shankar Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Girija Shankar Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Gyanprakash Ghosh Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Thakur Panchanan Barma Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Raghunath Murmu Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Sudhi Pradhan Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Lalan Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Bina Dasgupta Puraskar, ( Paschimbanga Jatra Academy)</li>\r\n	<li>Shambhu Mitra Puraskar, ( Paschimbanga Natya Academy)</li>\r\n	<li>Pannalal Bhattacharya Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Upendra Kishore Roy Chowdhury Puraskar ( Paschimbanga Shishu Kishore Academy)</li>\r\n	<li>Vidyasagar Puraskar ( Paschimbanga Shishu Kishore Academy)</li>\r\n	<li>Kaji Sabyasachi Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Subhash Mukhopadhyay Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Sunil Gangopadhyay Samman( Paschimbanga Kabita Academy)</li>\r\n	<li>Binoy Majumder Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Niladri sekhar Basu Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Abul Kashem Rahimmuddin Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Shilpi Maha Samman ( Rajya Charukala Parshad)</li>\r\n	<li>Shilpi Samman ( Rajya Charukala Parshad)</li>\r\n	<li>Shilpo Oitihasik o Kala Samalochak Samman ( Rajya Charukala Parshad)</li>\r\n</ul>\r\n', '<h2><strong>Auditoria in Kolkata Under I&amp;CA Deptt</strong></h2>\r\n\r\n<div class=\"mb-3 table-responsive\">\r\n<table class=\"table table-striped\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Sl No.</th>\r\n			<th scope=\"col\">Name of the Auditorium</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">1</th>\r\n			<td>Rabindra Sadan, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2</th>\r\n			<td>Mahajati Sadan, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">3</th>\r\n			<td>Madhusudan Mancha, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">4</th>\r\n			<td>Girish Mancha, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">5</th>\r\n			<td>Sisir Mancha, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">6</th>\r\n			<td>Rabindra Okakura Bhavan</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">7</th>\r\n			<td>Phanibhusan Bidyabinod Jatra Mancha, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">8</th>\r\n			<td>Bangla Academy Sabhaghar</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">9</th>\r\n			<td>Jibananda Sabhaghar</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">10</th>\r\n			<td>Abanindra Sabhaghar</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">11</th>\r\n			<td>Minerva Theatre Tripti Mitra Sabhaghar</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">12</th>\r\n			<td>Mahajati Sadan</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">13</th>\r\n			<td>University Institute Auditorium</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">14</th>\r\n			<td>Gaganendra Padarshashala, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">15</th>\r\n			<td>Abanindra Shipla Padarshashala, Chandannagar, Hooghly</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">16</th>\r\n			<td>Dinobandhu Mancha, Siliguri</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<h2><strong>Rabindra Bhavans/Sadans in Other Districts in West Bengal</strong></h2>\r\n\r\n<div class=\"mb-3 rabindra_bha_dist table-responsive\">\r\n<table class=\"table table-striped\">\r\n	<thead>\r\n		<tr>\r\n			<th>Sl No.</th>\r\n			<th>Name of Rabindra Bhavan / Rabindra Sadan</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th>1</th>\r\n			<td>Rabindra Bhavan, Suri Birbhum</td>\r\n		</tr>\r\n		<tr>\r\n			<th>2</th>\r\n			<td>Rabindra Bhavan, Balurghat, Dakshin Dinajpur</td>\r\n		</tr>\r\n		<tr>\r\n			<th>3</th>\r\n			<td>Rabindra Bhavan, Chinsurah, Hooghly</td>\r\n		</tr>\r\n		<tr>\r\n			<th>4</th>\r\n			<td>Rabindra Bhavan, Malda</td>\r\n		</tr>\r\n		<tr>\r\n			<th>5</th>\r\n			<td>Rabindra Sadan, Baharampur, Murshidabad</td>\r\n		</tr>\r\n		<tr>\r\n			<th>6</th>\r\n			<td>Rabindra Bhavan, Ranaghat Nadia</td>\r\n		</tr>\r\n		<tr>\r\n			<th>7</th>\r\n			<td>Rabindra Bhavan, Krishnanagar, Nadia</td>\r\n		</tr>\r\n		<tr>\r\n			<th>8</th>\r\n			<td>Rabindra Bhavan, Bardhaman, Purba Bardhaman</td>\r\n		</tr>\r\n		<tr>\r\n			<th>9</th>\r\n			<td>Rabindra Bhavan, Purulia</td>\r\n		</tr>\r\n		<tr>\r\n			<th>10</th>\r\n			<td>Rabindra Bhavan, Raiganj, Uttar Dinajpur</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<h2><strong>Cinema Halls in West Bengal</strong></h2>\r\n\r\n<table class=\"table table-striped\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Sl No.</th>\r\n			<th scope=\"col\">Cinema Hall Name</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">1</th>\r\n			<td>Nandan-I, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2</th>\r\n			<td>Nandan-II, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">3</th>\r\n			<td>Nandan-III, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">4</th>\r\n			<td>Radha Studio, Kolkata</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2024-05-01 09:24:56', '2024-07-17 10:37:48');
INSERT INTO `wbinc_directorates` (`ID`, `title`, `about_image`, `about_directorate`, `directorate_name`, `directorate_designation`, `directorate_office_address`, `directorate_image`, `directorate_brief`, `bottom_content`, `created_date`, `updated_date`) VALUES
(3, 'Directorate of Films', 'uploads/directorates/7768654590901714568780.webp', '<p>The Film Directorate is the primary agency for maintaining cordial relations with the film and television industry and plays a major role for the development and progress of the same in Bengal through multifarious activities. The rich heritage of the State&rsquo;s film legacy is consistently projected and looked after all throughout the year by this directorate through sustained efforts. The Kolkata International Film Festival, filming destination at the West Bengal Tele Akademy in Baruipur, commercial screening of Bengali films at subsidized rates at Nandan and Radha Studio, a 2-year diploma course on film making at Roopkala Kendra, digitization and restoration work of cinematograph films preserved at the State Government owned Film Vaults at the Cinema Centenary Building and Rupayan and shooting activities for films and television at the Technicians&rsquo; Studio are the units of functionality for this directorate.</p>\r\n\r\n<p>This directorate also runs the Film Workers&rsquo; Welfare Fund for distinguished cine worker and a medical insurance for the cine artistes, technicians and their family members.</p>\r\n', 'Amlanjyoti Saha, WBCS, (Exe)', 'Addl. Secretary & E.O. Director of Film', 'Room No. 908, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', 'uploads/directorates/6732479418851721206652.webp', '<hr />\r\n<h4>1) Name of the Offices under Film Directorate are :</h4>\r\n\r\n<div class=\"justify-content-center mb-2 row\">\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\"><img alt=\"...\" class=\"card-img-top img-fluid\" src=\"https://www.wbicad.in/images/nandan2.webp\" />\r\n<div class=\"card-body text-center\">\r\n<h5>Nandan, West Bengal Film Centre</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\"><img alt=\"...\" class=\"card-img-top img-fluid\" src=\"https://wbicad.in/images/nandan2.webp\" />\r\n<div class=\"card-body text-center\">\r\n<h5>Office of the Kolkata Chalachitra Utsab at Nandan</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\"><img alt=\"...\" class=\"card-img-top img-fluid\" src=\"https://wbicad.in/images/radha-studio.webp\" />\r\n<div class=\"card-body text-center\">\r\n<h5>Radha Studio and Cinema Centinary Building, Tollygunj</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\"><img alt=\"...\" class=\"card-img-top img-fluid\" src=\"https://wbicad.in/images/Technician\'s-Studio.webp\" />\r\n<div class=\"card-body text-center\">\r\n<h5>Technician Studio</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\"><img alt=\"...\" class=\"card-img-top img-fluid\" src=\"https://wbicad.in/images/roop_kala_kendra.webp\" />\r\n<div class=\"card-body text-center\">\r\n<h5>Roop Kala Kendra, Salt Lake</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\"><img alt=\"...\" class=\"card-img-top img-fluid\" src=\"https://wbicad.in/images/Rupayan.webp\" />\r\n<div class=\"card-body text-center\">\r\n<h5>Rupayan, West Bengal Film Dev. Corporation Ltd</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\"><img alt=\"...\" class=\"card-img-top img-fluid\" src=\"https://wbicad.in/images/tele-academy1.webp\" />\r\n<div class=\"card-body text-center\">\r\n<h5>West Bengal Tele Academy, Baruipur</h5>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"justify-content-center mb-4 row\">\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\">\r\n<div class=\"card-body text-center\">\r\n<h5>West Bengal Cinema Publicity Material Censor Board</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\">\r\n<div class=\"card-body text-center\">\r\n<h5>West Bengal Film Academy</h5>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-4 mb-3\">\r\n<div class=\"card card_box\">\r\n<div class=\"card-body text-center\">\r\n<h5>Board of Management of Film Workers&rsquo; Welfare Fund</h5>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<h4>2) Kolkata International Film Festival:</h4>\r\n\r\n<p>The Kolkata International Film Festival (KIFF) is Flagship programme of Government of West Benhgal. Kolkata International Film Festival (KIFF) has become truly international, with its growing profile and signature that has being acknowledged globally. The 29th edition of Kolkata International Film Festival (KIFF) was inaugurated on December 5, 2023 with a colourful inauguration in star studded Netaji Indoor Stadium and continued till December 15th. It gets a participation of more than 200 films including foreign films from different Countries in 23 screening venues. Besides, there was an exhibition on Mrinal Sen and on the memory of Dev Anand to pay tribute to their birth Centinary and the entire event was conducted most successfully.</p>\r\n\r\n<h4>3) Tele Samman Award Ceremony:</h4>\r\n\r\n<p>For felicitating actors/technicians of Television for their outstanding performance, this award ceremony is being held every year. The Award Ceremony took place at Dhanadhanya auditorium, Alipore.</p>\r\n\r\n<h4>4) Mahanayak Uttam Kumar Award Ceremony:</h4>\r\n\r\n<p>The Award ceremony was held on 24th July every year in a grand manner. Eminent film personalities were felicitated in this award ceremony.</p>\r\n\r\n<h4>5) Medical Benefit Scheme for the Cine and Television Artistes/ Technicians /Workers:</h4>\r\n\r\n<p>State Government pays full premium for extending Group Health Insurance coverage, to around 7500 thousand of Cine and Television Artistes/ Technicians /Workers and their family members. The total number of beneficiaries is about 45 thousand. The State Government has enhanced the coverage under this scheme from Rs. 1.5 lakhs to Rs. 5 lakhs to cover the critical illnesses. The scheme also provides Rs.1 lakh Personal Accident coverage for the primary members. Total number of beneficiaries is approximately 25 thousands.</p>\r\n\r\n<h4>6) Infrastructure Development</h4>\r\n\r\n<p>a) Construction of the West Bengal Tele Academy Complex at Baruipur: It has cost involvement of Rs. 137.56 crore. This is a state-of-the-art infrastructure being implemented by KMDA which will strive for the all-round development of the State&rsquo;s television industry. The Academy will offer modern studio floors for shooting and production of television serials and will also introduce academic courses related to different aspects of the television industry. So far, an amount of Rs. 130.42 Crore has been released out of budgetary provision and so far, 4 studio floors and Administrative Block have been completed. The Studio was inaugurated on 10th March, 2022 as first of its kind in the Eastern India and booking of the studios has also commenced.</p>\r\n\r\n<p>b) Radha studio, Chalachitra Satabarsha Bhaban (Cinema Centenary Building) at Tollygunge: The Government is all set to present a completely revamped Chalachitra Satabarsha Bhaban to the Film lovers of Bengal. A new G+5 building is under construction with proposed film museum and gallery. Other structure has been completed by PWD. The State Film Archive and Film Vault has already been set up to preserve State produced feature and documentary films in celluloid and other formats. The Preview Theatre i.e. Radha Studio at Chalachitra Satabarsha Bhaban has been thoroughly renovated. Commercial shows at Radha Studio is running from 6 th May, 2022 under supervision of Nandan.</p>\r\n\r\n<h4>7) Film Appreciation Course:</h4>\r\n\r\n<p>Film Appreciation Course has been introduced from the year 1987. The course has been designed to ignite passion among the participants towards various aspects of films and simultaneously to gain knowledge about films. The course is very much popular among the cine lovers. It is held Kolkata information Centre every year with 70 participants.</p>\r\n\r\n<h4>8) Digitization and restoration of Cinematograph Films (Celluloid) of State Film Archive:</h4>\r\n\r\n<p>4(four) nos. cinematograph films made by and on legendary filmmaker Satyajit Ray have been successfully digitized. Apart from that 11 Celluloid features films and 30 Celluloid short films have been taken up for digitization and restoration with collaboration of National Film Archive of India (NFAI), Pune from the end of Chalachitra Satabarsha Bhavan. All these 4(four) digitized films have been screened during KIFF and other cinema festivals. Simultaneously, the State Govt. has taken initiative to digitize and restore all Govt. produced films being preserved in the State Film Archive at Chalachitra Satabarsha Bhavan.</p>\r\n\r\n<h2><strong>Details of Offices under Film Directorate </strong></h2>\r\n\r\n<div class=\"equalheight justify-content-center mb-3 row\">\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>Nandan, West Bengal Film Centre</h2>\r\n\r\n<p><strong>Registered office address &ndash;</strong> 1/1 AJC Bose Road, Kolkata &ndash; 700020</p>\r\n\r\n<p><strong>Working office address --</strong> 1/1 AJC Bose Road, Kolkata &ndash; 700020</p>\r\n\r\n<p>West Bengal Nandan, West Bengal Film Centre has undertaken to discharge the following functions:</p>\r\n\r\n<ul>\r\n	<li>To encourage the development of the art of film, other incidental matters</li>\r\n	<li>To promote and encourage Film entertainment industry by organising different Film Festivals with different Cine Societies anmd Film Clubs and Organisations.</li>\r\n	<li>To educate on the subject of audio-visual media in entertainment industry including organizing film related activities &amp; to impart extensive training on the technicalities of film making.</li>\r\n	<li>To establish contact and maintain cultural association with the masters of the art of film making, film organizations and act as a bridge for cultural exchange in respect of film making.</li>\r\n</ul>\r\n\r\n<h4>Name &amp; designation of the officers with mobile no &ndash;</h4>\r\n\r\n<ul>\r\n	<li>Smt. Sharmistha Banerjee, WBCS (Exe.) Chief Executive Officer, Nandan</li>\r\n	<li>Smt. Suprina Blone, WBICS, Executive Officer, Nandan</li>\r\n	<li>Shri Sanjib De, WBA&amp;AS, Accounts Officer, Nandan</li>\r\n</ul>\r\n\r\n<p><strong>Contact no</strong> (033) 2223 - 1210</p>\r\n\r\n<p><strong>Email address &ndash;</strong> <a href=\"mailto:director@kif.in\">director@kif.in</a>, <a href=\"mailto:Office@kiff.in\">Office@kiff.in</a> , <a href=\"mailto:Treasurer@kff.in\">Treasurer@kff.in</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>Office of the Kolkata Chalachitra Utsab at Nandan</h2>\r\n\r\n<p><strong>Kolkata International Film Festival &ndash;</strong> The Kolkata International Film Festival (KIFF) is Flagship programme of Government of West Bengal</p>\r\n\r\n<p><strong>Registered office address --</strong> 1/1 AJC Bose Road, Kolkata &ndash; 700020</p>\r\n\r\n<p><strong>Working office address --</strong> 1/1 AJC Bose Road, Kolkata &ndash; 700020</p>\r\n\r\n<p>The Kolkata International Film Festival is an annual film festival held in Kolkata, India. Founded in 1995, it is the third oldest international film festival in India.</p>\r\n\r\n<h4>Name &amp; designation of the officers with mobile no &ndash;</h4>\r\n\r\n<ul>\r\n	<li>a. Smt&nbsp;Sharmistha Bandyopadhyay, Director, KIFF &amp; Chief Executive Officer, Nandan and Addl. Secretary</li>\r\n	<li>b. Shri Sanjib Dey, Treasurer, KIFF &amp; Accounts Officer, Nandan</li>\r\n</ul>\r\n\r\n<p><strong>Contact no</strong> (033) 2223 - 1210</p>\r\n\r\n<p><strong>Email address &ndash;</strong> <a href=\"mailto:director@kif.in\">director@kif.in</a>, <a href=\"mailto:Office@kiff.in\">Office@kiff.in</a> , <a href=\"mailto:Treasurer@kff.in\">Treasurer@kff.in</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>Technicians&rsquo; Studio</h2>\r\n\r\n<p>The renovated and reconstructed West Bengal Board for Technicians&#39; Studio is providing state of the art infrastructural facilities including 4 AC Shooting Floors, 2 non-AC Shooting Floors and supporting areas to Film and Television industry. AC make-up rooms, office rooms, dining halls, costume rooms and other facilities are provided to the shooting crew members during shooting of Feature Films, TV serials, Advertisements, Web Series etc. which are going on regularly. 2 nos. non-AC Shooting Floors will be converted to AC Floors soon depending upon the vacancy in those respective floors.</p>\r\n\r\n<h4>Name and designation of the Officers &ndash;</h4>\r\n\r\n<ul>\r\n	<li>Chairman, West Bengal Board for Technicians&rsquo; Studio</li>\r\n	<li>Vice Chairman, West Bengal Board for Technicians&rsquo; Studio</li>\r\n	<li>Shri Sekhar Banerjee, WBICS, Member Secretary-in-Charge and CEO, West Bengal Board for Technicians&#39; Studio</li>\r\n</ul>\r\n\r\n<p><strong>Contact no</strong> 033 2471 4119, 033 2421 7874</p>\r\n\r\n<p><strong>Email address &ndash;</strong> <a href=\"mailto:studiotechnicians@gmail.com\">studiotechnicians@gmail.com </a></p>\r\n<a class=\"btn btn-primary mb-4\" href=\"pdf/New-Board-of-Technicians-Studio.pdf\" target=\"_blank\">New Board of Technicians Studio</a></div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>West Bengal Cinema Publicity Material Censor Board</h2>\r\n\r\n<p><strong>Registered office address &ndash;</strong> 4, Baburam Ghosh Road, Kolkata &ndash; 700 040.</p>\r\n\r\n<p>West Bengal Cinema Publicity Material Censor Board was formed under the provisions of &ldquo;The West Bengal (Compulsory Censorship Of Film Publicity Materials) Act, 1974&rdquo;. If any distributor, producer or exhibitor of a film wants to display publicity materials / posters in the lobby of a cinema house or outside the cinema house or in any public place, any publicity material, he shall make an application to the Board along with requisite fee. After careful examination the board will give permission for display. After getting this permission he may apply before the CBFC (Central Board for Film Certification) for final censor certificate.</p>\r\n\r\n<h4>Name and designation of the Officers &ndash;</h4>\r\nMember Secretary, West Bengal Cinema Publicity Material Censor Board\r\n\r\n<p><strong>Contact no</strong> 033 2471 4119, 033 2421 7874</p>\r\n\r\n<p><strong>Email address &ndash;</strong> <a href=\"mailto:studiotechnicians@gmail.com\">studiotechnicians@gmail.com</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>Board of Management of Film Workers&rsquo; Welfare Fund</h2>\r\n\r\n<p><strong>Registered office address &ndash;</strong> 4, Baburam Ghosh Road, Kolkata &ndash; 700 040.</p>\r\n\r\n<p>Benevolent financial assistance is provided to the distressed film technicians, artist and workers of the film industry in west Bengal, who are not employees of any institution / organization and who do not receive any retirement benefits. In recognition of the services rendered to the industry and also to relieve them of their distress.</p>\r\n\r\n<h4>Name and designation of the Officers &ndash;</h4>\r\n\r\n<ul>\r\n	<li>Chairman, Board of Management of Film Workers&rsquo; Welfare Fund</li>\r\n	<li>Member Secretary, Board of Management of Film Workers&rsquo; Welfare Fund</li>\r\n</ul>\r\n\r\n<p><strong>Contact no</strong> 033 2471 4119, 033 2421 7874</p>\r\n\r\n<p><strong>Email address &ndash;</strong> <a href=\"mailto:fwwf.ica@gmail.com\">fwwf.ica@gmail.com</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>West Bengal Film Academy</h2>\r\n\r\n<p><strong>Registered office address &ndash;</strong> Nabanna, 9<sup>th</sup> Floor (Room no 906), Deptt of I&amp;CA, 325, Sarat Chatterjee Road, Mandirtala, Shibpur, Howrah-711102</p>\r\n\r\n<p>The mandate of the Film Academy is as follows:</p>\r\n\r\n<ul>\r\n	<li>To encourage and promote development of films.</li>\r\n	<li>To act as an umbrella body/ think for all issues related to the film industry.</li>\r\n	<li>To promote and develop film related infrastructure in the State.</li>\r\n	<li>To advise on suitable policy interventions on issues related to the film sector, including constraints faced by the producers, Distributors, Exhibitors and others.</li>\r\n	<li>To promote welfare of the artists, technicians and other professionals of the film industry.</li>\r\n	<li>To facilitate creation of employment opportunities related to film sector.</li>\r\n	<li>To advise on various ongoing schemes such as Group Mediclaim and Personal Accident Insurance Scheme for the Cine and Television Artists and Workers, Modernisation of Technicians Studio, Preservation &amp; Digitisation of Films, Development of Nandan (State Art Film Centre), etc.</li>\r\n	<li>To advise on development of Roopkala Kendro, West Bengal Film Development Corporation Ltd, Cinema Centenary Building, and other institutions related to the film sector.</li>\r\n	<li>To guide in observance of Cinemas Regulation Act/ Rules in the State.</li>\r\n</ul>\r\n\r\n<h5>Name and designation of the Officers -</h5>\r\n\r\n<ul>\r\n	<li>Chairman, West Bengal Film Academy</li>\r\n	<li>Member Secretary &amp; Convenor , West Bengal Film Academy, (The Director of Films, I&amp;CA Department)</li>\r\n</ul>\r\n\r\n<p><strong>Email address &ndash;</strong> <a href=\"mailto:wbfilmacademy.ica@gmail.com\">wbfilmacademy.ica@gmail.com</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>Roopkala Kendro</h2>\r\n\r\n<p><strong>Registered office address &ndash;</strong> Block-GM, Sector-V, Salt Lake City, Kolkata-700091.</p>\r\n\r\n<p>The two main pillars of the Institute are the Training Wing and the Production Wing. Roopkala Kendro offers a 2 year Post Graduate Diploma in 6(six) streams of Direction, Motion Picture Photography, Editing, Sound Design, Development Communication and Animation Creation &amp; Direction. The uniqueness of the course is that students are trained through a learning by-doing method and there is immense scope for hands-on skills building. Roopkala Kendro&#39;s mandate of addressing challenges and concerns faced by marginalized, vulnerable and disadvantages sections of the population forms the focus of all production related activities. This wing has manifold purpose; it conducts participatory communication research, develop and designs communication strategies, designs social campaigns, plans and produces campaign outputs - print, audio and video materials. On the one hand, the focus is on design multiple media oriented campaign using innovative, need-based and popular medium from folk songs, puppets, flex-on-wheels, street drama to broadcasting participatory audio programs and jingles, television spots and video films.</p>\r\n\r\n<h5>Name and designation of the Officers -</h5>\r\n\r\n<ul>\r\n	<li>Shri Santanu Basu, IAS,<br />\r\n	Secretary, Department of Information &amp; Cultural Affairs, Goverment of West Bengal and Chairman, Roopkala Kendro</li>\r\n	<li>Shri Mitra Chatterjee, OSD &amp; Ex-officio Special Secretary and Director &amp; CEO, Roopkala Kendro</li>\r\n	<li>Shri Kaushik Nandi, WBICS Joint Director-in-Charge, Roopkala Kendro</li>\r\n</ul>\r\n\r\n<p><strong>Contact no :</strong>&nbsp;033-4001 2110</p>\r\n\r\n<p><strong>Email&nbsp;&ndash;</strong> <a href=\"mailto:roopkalakendro@yahoo.com\">roopkalakendro@yahoo.com</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>Chalachchitra Satabarsha Bhaban (Cinema Centenary Building) and Radha Studio</h2>\r\n\r\n<p><strong>Registered office address &ndash;</strong> 72, Deshpran Sashmal Road, Tollygunge, Kolkata &ndash; 700033, (Land Mark: Alongside M.R. Bangur M.S. Hospital)</p>\r\n<strong>The CCB houses and maintains the following:- </strong>\r\n\r\n<ul>\r\n	<li>Film Vaults (4 Nos. cold storage units) for preservation of Black &amp; White and Colour films in celluloid and Film Checking room.</li>\r\n	<li>Ultrasonic Film cleaning Unit.</li>\r\n	<li>Film Digitization and Restoration work Unit.</li>\r\n	<li>Car Garage of I&amp;CA Deptt. for Officials vehicles.</li>\r\n	<li>Film Shooting Floor (Presently occupied by Exhibition Wing of I&amp;CA Deptt)</li>\r\n	<li>VIP Conference room.</li>\r\n	<li>A 146 seat Cinema Hall in the premises, named &quot;Radha Studio&quot; which runs regular film shows on a daily basis.</li>\r\n	<li>Work in Progress: A new G+M+5 multipurpose Building being constructed within the premises which will house the West Bengal Film Museum &amp; Archive.</li>\r\n	<li>A permanent Exhibition Gallery of the Legendary Mahanayak Uttam Kumar and Shri Satyajit Ray, located at the 2nd floor.</li>\r\n	<li>Staff Quarters for departmental Staff.</li>\r\n	<li>Medical Dispensary for Cine workers from Labour Welfare Organization.</li>\r\n</ul>\r\n\r\n<h5>Besides, the CCB is involved in:</h5>\r\n\r\n<ul>\r\n	<li>Organising of Film Appreciation course annually at KIC, Kolkata</li>\r\n	<li>The Cinema Centenary Building is one of the Venues of Kolkata International Film Festival and Kolkata International Children Film Festival conducted every year by the Deptt.</li>\r\n</ul>\r\n\r\n<h5>Name &amp; Designation of the Officers:</h5>\r\n\r\n<ul>\r\n	<li>Smt. Lipika Banerjee, WBICS, Executive Officer, Cinema Centenary Building (CCB)</li>\r\n	<li>Rabindranath Dash (Maintenance Engineer &amp; Chief Manager (Lab) CCB &amp; WBFDCL).</li>\r\n</ul>\r\n\r\n<p><strong>Contact no</strong> 033-2473-1942</p>\r\n\r\n<p><strong>Email address &ndash;</strong> <a href=\"mailto:ccbiandca@gmail.com\">ccbiandca@gmail.com</a>, <a href=\"mailto:dashrabindranath@gmail.com\">dashrabindranath@gmail.com</a></p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6 mb-4\">\r\n<div class=\"whitebox\">\r\n<h2>Rupayan, West Bengal Film Development Corporation Ltd</h2>\r\n\r\n<p><strong>Registered office address &ndash;</strong> Block-GN, Sector-V, Salt Lake City, Kolkata-700106</p>\r\n\r\n<p>The West Bengal Colour Film and Sound Laboratory Corporation Limited was set-up for the development of film industry in West Bengal on 5th July, 1980. Subsequently, the name was changed to West Bengal Film Development Corporation Limited (WBFDCL) on 1st July, 1983. Later, in the year 1986, the film sound recording studio of the WBFDCL was named &#39;Rupayan.</p>\r\n\r\n<h5>Name and designation of the Officers:</h5>\r\n\r\n<ul>\r\n	<li>Shri Santanu Basu, IAS,Secretary, Department of Information &amp; Cultural Affairs, Goverment of West Bengal and Chairman, West Bengal Film Development Corporation Ltd.(WBFDCL)</li>\r\n	<li>Shri Mitra Chatterjee, OSD &amp; Ex-officio Special Secretary and Managing Director, West Bengal Film Development Corporation Ltd. (WBFDCL)</li>\r\n	<li>Shri Amlan Maitra, Accounts Officer-in-Charge, West Bengal Film Development Corporation Ltd. (WBFDCL)</li>\r\n</ul>\r\n\r\n<p><strong>Email &ndash;</strong> <a href=\"mailto:wbfdclrupayan@gmail.com\">wbfdclrupayan@gmail.com</a></p>\r\n</div>\r\n</div>\r\n</div>\r\n', '<h2><strong>Cinema Halls in West Bengal</strong></h2>\r\n\r\n<table class=\"table table-striped\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Sl No.</th>\r\n			<th scope=\"col\">Cinema Hall Name</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<th scope=\"row\">1</th>\r\n			<td>Nandan-I, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">2</th>\r\n			<td>Nandan-II, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">3</th>\r\n			<td>Nandan-III, Kolkata</td>\r\n		</tr>\r\n		<tr>\r\n			<th scope=\"row\">4</th>\r\n			<td>Radha Studio, Kolkata</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2024-05-01 09:24:56', '2024-09-14 05:34:49'),
(4, 'Directorate Of Archaeology And Museums', 'uploads/directorates/9669341961541714568953.webp', '<p>The Directorate of Archaeology and Museums has been looking after ancient and historical monuments as well as conducts excavation works regularly to unearth archaeological sites and remains either by itself or encouraging educational institutions of repute to explore these objectives</p>\r\n\r\n<p>Apart from State Archaeological Museum in Kolkata this Directorate has six District level museums where invaluable antiquities are well preserved and displayed to the common men.</p>\r\n\r\n<p>This Directorate publishes books regularly and has had its own publication namely &ldquo;Purabritya&rdquo;.</p>\r\n', 'Amlanjyoti Saha, WBCS, (Exe)', 'Addl. Secretary & E.O. Director of Archeology', 'Room No. 909, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', 'uploads/directorates/8186390667551714568953.webp', '<hr />\r\n<h5>1) Archaeological Infrastructure:</h5>\r\n\r\n<p>Archeological Excavation: Major archaeological Excavation of ancient Buddhist Site at Moghalmari, Paschim Medinipur and at Garh Mandaran, Goghat, Hooghly has been taken up.</p>\r\n\r\n<h5>2) Restoration and Conservation:</h5>\r\n\r\n<h4>a) Identification and Declaration of Heritage Buildings &amp; State Protected Monuments etc.:</h4>\r\n\r\n<p>As many as 228 buildings have been declared as Heritage Buildings until 2021-22. Persistent endeavor is being made for further identification of Heritage Buildings. Apart from that 110 sites have been declared as State Protected Monument. Recently, Rani Shiromoni Garh, Shalboni, Paschim Medinipur and Gumghar, Bankura has been declared as State Protected Monuments.</p>\r\n\r\n<h4>b) Restoration &amp; Conservation of State Protected Monuments, Heritage Buildings &amp; State Archaeological Museum:</h4>\r\n\r\n<ul>\r\n	<li>West Bengal Heritage Commission with the technical support from PWD, has completed the work of renovation of the birth Place of Vidyasagar at Birsingha village and the preservation of the hostel building at Birsingha.</li>\r\n	<li>Conservation and Restoration of Gope Palace, Medinipur, Buddhist Monastery, Jagjibanpur Malda, Sculpture Shed Suissa, Baghmundi, Purulia, Ruined Mosque, Bajua, Santoshpur, Goghat, Hooghly are almost complete.</li>\r\n	<li>&nbsp;Major Archaeological Excavation works in different areas have been made, like Buddhist Site at Moghalmari, Dantan, Paschim Medinipur and at Garh Mandaran, Goghat, Hooghly.</li>\r\n	<li>The State Archaeological Museum has been upgraded with KIOSK, beautification, Security enhancement etc. during this period and a number of new collection have been made.</li>\r\n	<li>Conservation and Restoration projects like Badshahi Mosque at Natunhaat, Mongalkot, Purba Bardhaman and Wooden Mast of Bandel Church, Hooghly have been completed.</li>\r\n	<li>Conservation &amp; Restoration of following projects: Buddhist Monastery at Jagjibanpur, Malda. Phase I completed and Phase II started, Durga Temple at Bali Dewanganj Goghat, Hooghly, Ruined Mosque at Bajua Santoshpur, Goghat, Hooghly and Sculpture shed at Suissa, Bagmundi, Purulia have been completed.</li>\r\n	<li>Restoration work of Henry Martyn&rsquo;s Pagoda, Serampore, Hooghly and Buddhist site at Moghalmari, Paschim Medinipur are among the notable efforts.</li>\r\n	<li>For the protection and preservation of the historical relics and artifacts discovered at Chandraketugarh in North 24 Parganas, a modern museum has been set up by Tourism Department, which is being taken over by I&amp; CA Department.</li>\r\n	<li>Restoration of Buxaduar Fort Phase I completed and Phase II work started.</li>\r\n</ul>\r\n\r\n<h4>3) West Bengal Heritage Commission:</h4>\r\n\r\n<p>The West Bengal Heritage Commission has declared 244 buildings, monuments, precincts and sites as heritage till 2022 and also declared Coochbehar &amp; Nabadwip towns as places of heritage buildings/temples/sites/precincts etc. where 154 sites in Coochbehar and 105 sites in Nabadwip have been identified as heritage.</p>\r\n\r\n<p>Different projects viz, renovation and rejuvenation of identified tanks/water bodies, laying of underground power cables for the core zone, drainage/sewerage and solid waste management, improvement of street lighting with LED lights, traffic management, suitable for an ideal heritage town and fixing up of blue plaques to the heritage properties, erection of iconic heritage gates at Nabadwip town and Coochbehar town are being implemented by different departments of the Government.</p>\r\n\r\n<p>The Commission has the following ongoing projects of restoration &amp; conservation being executed by P.W.D:</p>\r\n\r\n<ul>\r\n	<li>Restoration &amp; Conservation of Katherin Graham Memorial Chapel, Kalimpong. The project is expected to be completed in December 2023.</li>\r\n	<li>Restoration &amp; conservation of temples/ monuments (9 sites) at Garh Panchokot, Purulia. The project is expected completion by September 2023,</li>\r\n	<li>Restoration &amp; conservation of Grace Cottage, Krishnanagar. The project is to be completed by March 2023.</li>\r\n	<li>Restoration of Gouripur House, Kalimpong. After completion of tendering process, work order is going to be issued by P.W.D.</li>\r\n</ul>\r\n\r\n<p>Notable Archaeological publications:</p>\r\n\r\n<p>Those are released this year includes the 2nd volume of Directorate of Archaeology and Museums&rsquo; annual journal, &lsquo;Puravritta 2&rsquo; and bulletin of the said Directorate.</p>\r\n', '', '2024-05-01 09:24:56', '2024-05-01 13:09:13'),
(5, 'Basumati Corporation Limited', 'uploads/directorates/8529801929831714569077.webp', '<p>Formerly known as Basumati Sahitya Mandir, was established in the year 1887 by Late Upendra Nath Mukherjee. Since its early days, Basumati has published hundreds of books of abiding merit on diverse subjects in Bengali language. The treasure trove of the publications of &lsquo;Basumati&rsquo;, which is inseparable from the literary heritage of Bengali language, has still maintained its modern digital print edition. Role of &lsquo;Basumati&rsquo; during freedom struggle of India and association of almost all the stalwarts of Bengal with Basumati deserves it to be regarded as a heritage institution. The major functions of Basumati Corporation Limited (BCL) at present are, printer and publisher of its cache of books on Indology, Religion, Literature etc. and Masik Basumati and job work printer for various Departments of the Government, including composing and printing of Paschimbanga and West Bengal. More than 200 years old heritage building of Basumati Corporation Limited has been repaired and renovated. Under the aegis of the present Government, Basumati is engaged in heritage preservation on one hand and earning revenue through high quality job-printing works on the other.</p>\r\n', 'Debasis Biswas, WBCS, (Exe)', 'Addl. Secretary & Managing Director Basumati Corporation Ltd', 'Room No. 909, Nabanna, 9th Floor, 325, S.C Road, Howrah-711102', 'uploads/directorates/156832293201721991019.webp', '', '', '2024-05-01 09:24:56', '2024-09-25 11:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_directorate_office`
--

CREATE TABLE `wbinc_directorate_office` (
  `ID` int(11) NOT NULL,
  `directorate_id` tinyint(4) NOT NULL,
  `office_name` text NOT NULL,
  `officers_name` text NOT NULL,
  `designation` text NOT NULL,
  `email` text DEFAULT NULL,
  `contact` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_directorate_office`
--

INSERT INTO `wbinc_directorate_office` (`ID`, `directorate_id`, `office_name`, `officers_name`, `designation`, `email`, `contact`, `address`, `status`, `created_date`, `updated_date`) VALUES
(1, 1, 'Director of Information ', 'SMT. SHARMISTHA BANERJEE, WBCS(Exe.)', 'Director of Information & ex-officio Additional Secretary & CEO, Nandan', 'ica-dept@wb.gov.in ', '033–2253–5112', '9th Floor. Nabanna , HRBC Building. Howrah.', '1', '2024-05-01 12:38:32', '2024-09-30 09:27:34'),
(2, 1, 'Kolkata Information Centre', 'PRADIP KUMAR SARKAR, WBICS', 'Joint Director of Information', 'kic.westbengal@gmail.com', '033–2223–2929', 'Kolkata Information Centre,1/1, A.J.C. Bose Road,Kolkata, Pin–700 020\r\n', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(3, 1, 'Office of the Assistant Director of Information, Darjeeling', 'PASSANG DORJEE BAL, WBICS', 'Deputy Director of Information, Darjeeling', 'adidarjeeling@gmail.com', '0354–2253195', 'Old Secretariat Building, Darjeeling, Pin–734101', '1', '2024-05-01 12:38:32', '2024-09-24 10:29:12'),
(4, 1, 'Office of the Assistant Director of Information, Siliguri', 'PASSANG DORJEE BAL, WBICS', 'DEPUTY DIRECTOR OF INFORMATION', 'adisiliguri2013@gmail.com', '0353–2523398', 'Dinabandhu Mancha,Sachin Sarkar Sarani Road, Ward–17, Old Matigara,\r\nSiliguri, Pin–734 001', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(5, 1, 'Office of the District Information &amp; Cultural Officer, Alipurduar', 'SAMIM JAMAN, WBICS', 'DICO, ALIPURDUAR', 'sdico.apd@gmail.com &amp; dicoalipurduar@gmail.com', '03564–291435', 'P.O.- Alipurduar Court,Suryanagar, Pin– 736 121', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(6, 1, 'Office of the District Information & Cultural Officer,Coochbehar', 'ANGIRA DUTTA', 'DICO, COOCHBEHAR', 'dicocob2011@gmail.com', '03582–228331', 'Victor Palace, Sagar Dighi Square, Temple Street, Pin–736 101', '1', '2024-05-01 12:38:32', '2024-09-12 06:22:21'),
(7, 1, 'Office of the District Information &amp; Cultural Officer,Jalpaiguri', 'SWARUP BISWAS, WBICS', 'DICO, JALPAIGURI', 'dicojalpaiguri@gmail.com', '03561–230277', 'Sarojendra Deb Raykat Kala Kendra (Art Gallery), Hakimpara, Pin–735 101\r\n', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(8, 1, 'Office of the District Information &amp; Cultural Office,Darjeeling', 'KHANDOMA BHUTIA,WBICS', 'DICO, DARJEELING', 'dicodarjeeling@gmail.com', '0354–225319', 'Old Secretariat Building, Darjeeling, Pin–734 101', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(9, 1, 'Office of the District Information & Cultural Officer,Kalimpong', 'SATABDI JOARDAR, WBICS', 'DICO, KALIMPONG', 'dicokalimpong@gmail.com', '0354–2254060,  03552–255409', 'Town Hall, Post + P.S.- Kalimpong, Pin–734 301', '1', '2024-05-01 12:38:32', '2024-09-30 09:25:16'),
(10, 1, 'Office of the District Information & Cultural Officer,Uttar Dinajpur', 'SUBHAM CHAKRABORTY', ' DICO, UTTAR DINAJPUR', 'dicouttardinajpur@ gmail.com', '03523–252717', 'Karnojora, Raigunj, Dist-Uttar Dinajpur Pin–733 130', '1', '2024-05-01 12:38:32', '2024-09-26 09:32:13'),
(11, 1, 'Office of the District Information &amp; Cultural Officer, Dakshin Dinajpur', 'RAJESH KUMAR MONDAL,WBICS', 'DICO, DAKSHIN DINAJPUR', 'dico.dakshidinajpur@gmail.com', '03522–255277', 'Balurghat Rabindra Bhawan, Balurghat, Pin–733 101', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(12, 1, 'Office of the District Information & Cultural Officer, Malda', 'ABHIJIT BISWAS', 'DICO, MALDA', 'dicomalda@gmail.com', '03512–220477', 'Netaji Commercial Market (Rathbari), Pin–732 101', '1', '2024-05-01 12:38:32', '2024-09-26 09:32:48'),
(13, 1, 'Office of the District Information & Cultural Officer,Murshidabad', 'PROBAL BASAK,WBICS', 'DICO, MURSHIDABAD', 'dicomurshidabad06@gmail.com', '03482221005', '', '1', '2024-05-01 12:38:32', '2024-09-25 10:49:16'),
(14, 1, 'Office of the District Information &amp; Cultural Officer,Nadia', 'SUBHAMOY MITRA,WBICS', 'DICO, NADIA', 'diconadia12@gmail.com', '03472–252460', 'Krishnanagore Rabindra Bhaban M.M.Ghosh Street,Krishnanagar, Pin–741 101\r\n', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(15, 1, 'Office of the District Information & Cultural Officer, North 24 Parganas', 'PALLAB PAUL,WBICS', 'DICO, NORTH 24 PGS', 'dico12n24pgs@gmail.com', '033–2552–3354', 'Rishi Bankim Sarani, (Kachari Maidan) Barasat,Pin–700 124', '1', '2024-05-01 12:38:32', '2024-09-25 10:45:29'),
(16, 1, 'Office of the District Information & Cultural Officer, South 24 Parganas', 'ANANYA MAJUMDAR,WBICS', 'DICO, SOUTH 24 PGS', 'dicos24pgs@gmail.com', '033–2479–3585', 'Minority Bhavan (4th Floor), 12, Biplabi Kanailal Bhattacharjee Sarani,Alipore,Kolkata–700 027', '1', '2024-05-01 12:38:32', '2024-09-25 10:45:49'),
(17, 1, 'Office of the District Information &amp; Cultural Officer, Howrah', 'SOMASREE PAL,WBICS', 'DICO, HOWRAH', 'dicohowrah2018@gmail.com', '033–2637–8339', 'Howrah Hat Complex 28, Nityadhan Mukherjee Road, Pin–711 101', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(18, 1, 'Office of the District Information &amp; Cultural Officer,Purba Medinipur\r\n', 'MAHUA MALLICK,WBICS', 'DICO, PURBA MEDINIPUR', 'purbamedinipurdico@gmail.com', '03228–266113', 'Thana More, Raja Bazar, Tamluk, Dist- Purba Medinipur Pin–721636', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(19, 1, 'Office of the District Information &amp; Cultural Officer,Paschim Medinipur\r\n', 'BARUN MONDAL, WBICS', 'DICO, PASCHIM MEDINIPUR', 'dicopaschimmedinipur@gmail.com', '03222–275594', 'Zilla Parishad Complex, Medinipur, Dist- Paschim Medinipur Pin–721101\r\n', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(20, 1, 'Office of the District Information & Cultural Officer, Purulia', 'SIDDHARTHA CHAKRABORTY, WBICS', 'DICO, PURULIA', 'dicopurulia@gmail.com', '03252–222452', 'Kachari Road, Near DM office, Purulia,Pin–723 101', '1', '2024-05-01 12:38:32', '2024-09-25 10:47:05'),
(21, 1, 'Office of the District Information &amp; Cultural Officer, Bankura', 'GANESH HANSDA,WBICS', 'DICO, BANKURA', 'dicobankura@gmail.com', '03242–251075', 'Schooldanga, Gandhi Bichar Parishad, Bankura,Pin–722101', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(22, 1, 'Office of the District Information &amp; Cultural Officer,Hooghly', 'PRADIPTA ACHARYA,WBICS', 'DICO, HOOGLY', 'hooghlydico@gmail.com', '033–2680–2338', 'Chinsurah Rabindra Bhawan, Chinsurah, Pin–712 102', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(23, 1, 'Office of the District Information &amp; Cultural Officer,Purba Bardhaman\r\n', 'RAMSHANKAR MONDAL,WBICS', 'DICO, PURBA BARDHAMAN', 'dico.bwn@gmail.com', '0342–2665745', '3rd Floor, Treasury Building, Court Compound, Burdwan, Pin–713 101', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(24, 1, 'Office of the District Information &amp; Cultural Officer,Paschim Bardhaman\r\n', 'AZIZUR RAHAMAN,WBICS', 'DICO, PASCHIM BARDHAMAN', 'schimbardhaman@gmail.com', '0341–2251179', 'Office of the DICO, Paschim Bardhaman, Ashoka Mansion, 2nd Floor,\r\nBurnpur Road, Asansol, Paschim Bardhaman, Pin: 713304', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(25, 1, 'Office of the District Information &amp; Cultural Officer, Birbhum', 'ARITRA CHAKRABORTY,WBICS', 'DICO, BIRBHUM', 'birbhumdico@gmail.com', '03462–256307', 'Sidhu Kanhu Bhaban (Old Circuit House), P.O.-Suri, Dist- Birbhum,\r\nPIN-731101', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(26, 1, 'Office of the District Information &amp; Cultural Officer, Jhargram', 'SANTU BISWAS,WBICS', 'DICO, JHARGRAM', 'dicojhargram@gmail.com', '03221-255043', '461/10, Pandit Raghunath Murmu Sarani, Raghunathpur, Jhargram, PIN-\r\n721507', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(28, 1, 'Office of the Sub Divisional Information Cultural Officer, Mathabhanga', 'ANIRBAN SAIN', 'SDICO, MATHABHANGA', 'sdicomtb@gmail.com', '03583255254', 'Sitalkuchi Road, Pachagar,PostMathabhanga, Coochbehar, Pin736 146', '1', '2024-05-01 12:38:32', '2024-09-26 09:33:17'),
(29, 1, 'Office of the Sub Divisional Information Cultural Officer, Mekhliganj.\r\n', 'PRAJNA SAHA', 'SDICO, MEKHLIGANJ', 'sdicomkg@gmail.com', '03584255223', 'Ward No.7, Paschim Para, PostMekhliganj, Coochbehar, Pin735 304', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(30, 1, 'SubDivisional Information Cultural Officer, Siliguri', 'JAYANTA KUMAR MALLICK, WBICS', 'SDICO-in-Charge, SILIGURI', 'sdicosiliguri@gmail.com', '0353-2515160', 'Mainak Tourist Lodge, Annex Building, Post+P.S. Pradhan Nagar, Siliguri,\r\nPin734 003', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(31, 1, 'SubDivisional Information Cultural Officer,Kandi', 'ARUN KUMAR DUTTA (A.C)', 'SDICO, KANDI', 'sdicokandi@gmail.com', '03484255461', 'Kandi Kalibari Road, Near State Bank, PostKandi, District Murshidabad,Pin742 137', '1', '2024-05-01 12:38:32', '2024-09-26 09:33:55'),
(33, 1, 'SubDivisional Information Cultural Officer,Jangipur.', 'MRINAL KANTI ROY', 'SDICO, JANGIPUR.', 'sdicojangipur3@gmail.com', '03483266052', 'Gopal Nagar, Raghunathgunj, Beside H.P. Gas Office, DistrictMurshidabad, Pin742 225', '1', '2024-05-01 12:38:32', '2024-09-26 09:36:52'),
(40, 1, 'SubDivisional Information Cultural Officer, Diamond Harbour', 'BRATI BISWAS (DUTTA)', 'SDICO,DIAMOND HARBOUR.', 'sdicodh@gmail.com', '03174255241', 'Jal Tank Para, Diamond Harbour, DistrictSouth 24 Parganas, Pin-743 331\r\n', '1', '2024-05-01 12:38:32', '2024-05-01 12:38:32'),
(42, 1, 'SubDivisional Information Cultural Officer, Kakdwip', 'DEBAJYOTI PAUL', 'SDICO, KAKDWIP.', 'sdicokakdwip@gmail.com', '03210255673', 'VillBerarchak, PostKakdwip-Kalinagar, P.S.Harwood Point Costal, Dist-Sout 24-Pgs, Pin-743 347', '1', '2024-05-01 12:38:32', '2024-09-26 09:38:13'),
(48, 1, 'SubDivisional Information Cultural Officer, Ghatal', 'TANWISHRI MAJHI', 'SDICO, GHATAL.', 'sdicoghatal@gmail.com', '03225244447', 'Kushpata (Employment Exchange Office Building),Post- Ghatal,District-Paschim Medinipur,Pin-721 212', '1', '2024-05-01 12:38:32', '2024-09-26 09:43:19'),
(49, 1, 'SubDivisional Information Cultural Officer, Bishnupur', 'SOUMI DAS', 'SDICO, BISHNUPUR.', 'sdicobsp@gmail.com', '03244252066', 'Gramin Hat(1st Floor), Naboday Pally, Bishnupur Dist Bankura,Pin-722 122', '1', '2024-05-01 12:38:32', '2024-09-26 09:43:54'),
(50, 1, 'SubDivisional Information Cultural Officer, Khatra', 'ARKA DAS', 'SDICO,KHATRA.', 'sdicokhatra@gmail.com', '03243256195', 'Gurusaday Mancha , Post Khatra, DistrictBankura, Pin722 140', '1', '2024-05-01 12:38:32', '2024-09-26 09:44:42'),
(51, 1, 'SubDivisional Information Cultural Officer, Serampore', 'ANWESA GANGULY', 'SDICO, SERAMPORE.', 'sdicoserampore@gmail.com', '03326522006', 'Danish Government House (Court Compound), Serampore, Dist- Hooghly, PIN-712201', '1', '2024-05-01 12:38:32', '2024-09-26 09:46:09'),
(52, 1, 'SubDivisional Information Cultural Officer, Arambag', 'DIPANKAR DEY(AC)', 'SDICO, ARAMBAGH.', 'sdicoabg@gmail.com', '03211255195', 'Arambagh Vibekananda Handicrafts Organization Building (1st Floor), WardNo.-3, Arambagh, Hooghly, PIN- 712601', '1', '2024-05-01 12:38:32', '2024-09-26 10:21:52'),
(53, 1, 'SubDivisional Information Cultural Officer,Katwa', 'SHAMBHU CHARAN MONDAL (AC)', 'SDICO, KATWA .', 'sdicokatwa@gmail.com', '03453255067', 'Madhabitala, Katwa District- Purba Bardhaman, Pin-713 130', '0', '2024-05-01 12:38:32', '2024-09-25 11:05:08'),
(54, 1, 'SubDivisional Information Cultural Officer,Kalna', 'ASIT GHOSAL', 'SDICO, KALNA.', 'sdicokalna@gmail.com', '03454255060', 'Dangapara, Post- Kalna, District- Purba Bardhaman,Pin-713 409', '1', '2024-05-01 12:38:32', '2024-09-26 10:08:54'),
(55, 1, 'SubDivisional Information Cultural Officer, Durgapur', 'SAYANWITA MAITY', 'SDICO, DURGAPUR.', 'sdicodgp@gmail.com', '03432546218', 'D.M.C. Building, City Centre,Post- Durgapur,District- PaschimBardhaman,Pin- 713 216', '1', '2024-05-01 12:38:32', '2024-09-26 10:09:43'),
(56, 1, 'SubDivisional Information Cultural Officer,Bolpur', 'NILUFA PARVIN', 'SDICO, BOLPUR.', 'sdicobolpur@gmail.com', '03463252985', 'Mistry Para, Post Bolpur,District- Birbhum,Pin- 731 204', '1', '2024-05-01 12:38:32', '2024-09-26 10:10:47'),
(57, 1, 'SubDivisional Information Cultural Officer, Rampurhat', 'ASADUJJAMAN JIA', 'SDICO, RAMPURHAT.', 'sdicorampurhat13@ gmail.com', '03461255091', 'Saradapally, Sitaram Rice Mill Road,P.O.- Rampurhat, District- BirbhumPin 731 224', '1', '2024-05-01 12:38:32', '2024-09-26 10:19:43'),
(58, 5, 'Basumati Corporation Limited', 'Shri Debasis Biswas, WBCS (Exe.)', ' Addl. Secretary & Managing Director Basumati Corporation Ltd ', 'basumati.corp@gmail.com', '', '166, B.B. Ganguly Street, Kolkata-700012', '1', '2024-05-01 13:13:01', '2024-10-04 09:55:49'),
(59, 4, 'Director of Archaeology , Deptt. of I&CA', 'Shri Amlanjyoti Saha, WBCS (Exe.)', 'Addl. Secretary & e.o. Director Archeology', 'pbheritage@gmail.com', '(033) 2445-0083/ 2445-0037/', '1, Satyen Roy Road, P.O.- Behala, Kolkata- 700034', '1', '2024-05-01 13:13:53', '2024-10-04 09:43:29'),
(60, 4, 'West Bengal Heritage Commission', '<ul><li>Shri Amlanjyoti Saha, WBCS (Exe.)</li><li> Shri Kajal Bhattacharya, WBICS</li></ul>', '<ul><li>Secretary, West Bengal Heritage Commission</li><li>Joint Director-in-Charge, West Bengal Heritage Commission</li></ul>', 'pbheritage@gmail.com', '(033) 2445-0083/ 2445-0037/ (033) 2445-0083/ 2445-0037', '1, Satyen Roy Road, P.O.- Behala, Kolkata- 700034', '1', '2024-05-01 13:14:45', '2024-10-04 09:44:39'),
(61, 4, 'CASTEI', '<ul><li>Shri Sekhar Banerjee,WBICS</li><li>Shri Rajarshi Moitra, WBICS</li></ul>', '<ul><li>Member Secretary-in-Charge, CASTEI</li><li>Administrative Officer-in-Charge, CASTEI</li></ul>', 'mem.secy.castei@gmail.com ', '(033) 2397-0260  (033) 2396-0145', '1, Satyen Roy Road, P.O.- Behala, Kolkata- 700034', '1', '2024-05-01 13:15:23', '2024-10-04 09:42:40'),
(62, 3, 'Director of Films, Deptt. of I&CA', 'Shri Amlanjyoti Saha', 'Additional Secretary & Ex-officio Director of Films', 'icafilms7@gmail.com', '', 'Nabanna, 325, Sarat Chatterjee Road, Howrah-711102', '1', '2024-05-01 13:17:26', '2024-09-25 11:24:31'),
(63, 3, 'West Bengal Film Centre, Nandan', '<ul><li>Smt. Sharmistha Banerjee</li><li>Shri Sanjib De</li></ul>', '<ul><li>Chief Executive Officer, Nandan</li><li>Accounts Officer, Nandan</li></ul>', '<ul><li>sharmisthabanerjee1996@gmail.com</li><li>treasurer@kiff.in</li></ul>', '', '<ul><li>Nandan, 1/1 Acharya Jagadish Chandra Bose Road, Kolakata-700020</li><li>Nandan, 1/1, Acharya Jagadish Chandra Bose Road, Kolakata-700020</li></ul>', '1', '2024-05-01 13:18:11', '2024-10-03 08:58:33'),
(64, 3, 'Roopkala Kendro [Film and Social Communication Institute]', 'Shri Mitra Chatterjee', 'OSD & Ex-officio Special Secretary and Director & CEO, Roopkala Kendro', 'icafilms7@gmail.com', '', 'Nabanna, 325, Sarat Chatterjee Road, Howrah-711102', '1', '2024-05-01 13:18:59', '2024-09-25 11:25:42'),
(65, 3, 'West Bengal Film Development Corporation Limited [WBFDCL]', 'Shri Mitra Chatterjee', 'Additional Secretary & Ex-officio Director of Films ', 'icafilms7@gmail.com', '', 'Nabanna, 325, Sarat Chatterjee Road, Howrah-711102 ‘Rupayan’ Colour Film Laboratory Complex, Sector-IV (Near Nicco Park), Kolkata-700091', '1', '2024-05-01 13:19:47', '2024-09-25 11:25:58'),
(66, 3, 'Technicians’ Studio', 'Shri Sekhar Banerjee, WBICS ', 'Member Secretary-in-Charge and CEO, West Bengal Board of Technicians’ Studio', 'studiotechnicians@gmail.com', '', '4, Baburam Ghosh Road, Kolkata- 700040', '1', '2024-05-01 13:20:54', '2024-09-27 08:26:59'),
(67, 3, 'West Bengal Tele Academy', 'Shri Mitendra Kumar Chhetri, WBICS', 'Administrative Officer-in-charge, West Bengal Tele Academy', 'wbteleacademy@gmail.com', '', 'Happy Valley, Chakarbar, Dhopagachi, Baruipur, South 24 Parganas, Kolkata - 700145', '1', '2024-05-01 13:21:36', '2024-09-27 08:27:54'),
(68, 3, 'Cinema Centenary Building [CCB]', 'Smt. Lipika Banerjee, WBICS', ' Executive Officer, Cinema Centenary Building (CCB)', 'ccbiandca@gmail.com', '', 'Cinema Centenary Building, 72, Deshpran Sashmal Road, Kolkata-700033', '1', '2024-05-01 13:22:14', '2024-09-27 08:28:29'),
(69, 2, 'Director of Culture, Deptt. of I&CA', 'Sri Kaushik Basak', 'Spl Secretary and e.o. Director of Culture', 'dirculturewb@gmail.com', '033-2253-5116', 'Room-908, Nabanna, 325, Sharat Chatterjee Road, Howrah-711102', '1', '2024-05-02 09:40:47', '2024-05-02 09:40:47'),
(70, 2, 'Birsa Munda Academy', 'Shri Santu Biswas', 'Member Secretary-in-Charge', 'bma.jhargram@gmail.com', '03221-255043/9147770390', '460/10, Pandit Raghunath Murmu Sarani, Raghunathpur, Jhargram, Pin-721507', '1', '2024-05-02 09:41:46', '2024-05-02 09:41:46'),
(71, 2, 'Calcutta University Institute Auditorium', 'Shri Giridhari Saha', 'Member Secretary-in-Charge', 'cuiauditorium@gmail.com', '033-2241-6214/9147770346', '7, Bankim Chatterjee Street, College Square, Kolkata-700073', '1', '2024-05-02 09:42:33', '2024-05-02 09:42:33'),
(72, 2, 'Folk & Tribal Cultural Centre', 'Shri Kaustav Tarafdar', 'Secretary-in-Charge', 'secretaryftcc@gmail.com loksanskriti@live.com', '033-2426-2727/ 9147770314', '‘Lokogram\', Nitai Nagar, Chhitkalikapur, Kolkata-700099', '1', '2024-05-02 09:43:14', '2024-05-02 09:43:14'),
(73, 2, 'Folk Entertainment Section', 'Shri Sanjay Chakrabarty', 'Administrative Officer-in-Charge', 'lokoranjansakha@gmail.com', '033-2241-8614/9147770353', '166, C.R. Avenue, Kolkata-700007', '1', '2024-05-02 09:43:53', '2024-05-02 09:43:53'),
(74, 2, 'Girish Mancha', 'Shri Giridhari Saha', 'Administrative Officer-in-Charge', 'girishmanchakolkata@gmail.com', '033-2554-4895/9147770346', '76/1, Bagbazar Street, Kolkata – 700003', '1', '2024-05-02 09:44:31', '2024-05-02 09:44:31'),
(75, 2, 'Kamtapuri Bhasha Academy', 'Shri Cyprinus Buskey', 'Member Secretary', 'kamtapuribhasaacademy@gmail.com', '03561-230277', 'Bibadi Lane, Indira Colony, Jalpaiguri, Pin-735101', '1', '2024-05-02 09:45:09', '2024-10-04 11:01:45'),
(76, 2, 'Madhusudan Mancha', 'Shri Sanjay Chakrabarty', 'Administrative Officer-in-Charge	', 'mmanchaica@gmail.com', '033-2423-7148/9147770353', '2, Gariahat Road (South), Dhakuria, Kolkata-700068', '1', '2024-05-02 09:45:54', '2024-05-02 09:45:54'),
(77, 2, 'Mahajati Sadan', 'Mr. Nurul Huda', 'Secretary', 'secretarymahajatisadan@ gmail.com', '033-2241-1807/1809 (M) 9147770352', '166, Chittaranjan Avenue, Kolkata-700007', '1', '2024-05-02 09:46:32', '2024-10-04 10:57:23'),
(78, 2, 'Manbhum Cultural Academy', 'Shri Siddhartha Chakraborty', 'Member Secretary-in-Charge', 'mcapurulia2018@gmail.com', '03252-222452/9147770405', 'Office of the District Information & Cultural Officer, Purulia, Near DM Collectorate, Opposite DRDC Building, Pin-723101', '1', '2024-05-02 09:47:23', '2024-05-02 09:47:23'),
(79, 2, 'Minerva Natyasanskriti Charchakendra', 'Shri Tapan Sarkar', 'Secretary-in-Charge', 'minervarepertorytheatre@ gmail.com', '033-2555-0910/0009/ 9147770316', '6, Utpal Dutta Sarani, Kolkata-700006', '1', '2024-05-02 09:48:36', '2024-05-02 09:48:36'),
(80, 2, 'Paschim Banga Dalit Sahitya Academy', 'Shri Anup Kumar Gayen', 'Member Secretary', 'pbdsakademi20@gmail.com', '9147770342', '3rd Floor, Hemanta Bhawan, B.B.D. Bag, Kolkata –700001', '1', '2024-05-02 09:49:29', '2024-05-02 09:49:29'),
(81, 2, 'Paschim Banga Kazi Nazrul Islam Academy', 'Smt. Mandakranta Mahalanabis', 'Member Secretary-in-Charge', 'pbkazinazrulislamacademy@gmail.com', '9147770332', 'Uttirna, 1st Floor, 1A, Reformatory Street, Alipore, Kolkata-7000027', '1', '2024-05-02 09:50:12', '2024-05-02 09:50:12'),
(82, 2, 'Paschimbanga Bangla Academy', 'Shri Basudev Ghosh', 'Secretary', 'bakademi2010@gmail.com deputydirectorculture@gmail.com', '033-2223-9978/1985 (M) 9147770310', '1/1, A.J.C. Bose Road, Kolkata-700020', '1', '2024-05-02 09:51:00', '2024-05-02 09:51:00'),
(83, 2, 'Paschimbanga Baul Academy', 'Shri Aritra Chakrabarti', 'Member Secretary-in-Charge', 'birbhumdico@gmail.com', '03462-256307', 'Village-Joydev-Kenduli, Block Ilambazar, Birbhum-731214', '1', '2024-05-02 09:51:55', '2024-10-04 11:00:56'),
(84, 2, 'Paschimbanga Hindi Academy', 'Shri Giridhari Saha', 'Member Secretary-in-Charge', 'pbhindiacademyoffice@gmail.com', '9147770346', '3rd Floor, Hemanta Bhawan, B.B.D. Bag, Kolkata–700001', '1', '2024-05-02 09:54:30', '2024-05-02 09:54:30'),
(87, 2, 'Paschimbanga Natya Academy', 'Shri Debkumar Hazra', 'Member-Secretary-in-Charge', 'pbnatya.akademi@gmail.com', '033-2223-1132/4786 (M) 9147770312', '1/1, A.J.C. Bose Road, Kolkata-700020', '1', '2024-05-02 09:56:34', '2024-05-02 09:56:34'),
(90, 2, 'Rabindra Okakura Bhavan', 'Shri Devasis Dutta', 'Administrative Officer', 'rabindraokakura21@gmail.com devasisdutta@gmail.com', '033-2337-4999/ (M) 9147770339', '27/A/1, Salt lake, Sector-I, GD Block, Kolkata-64', '1', '2024-05-02 09:58:59', '2024-05-02 09:58:59'),
(91, 2, 'Rabindra Sadan', 'Shri Pradip Kumar Sarkar', 'Administrative Officer-in-Charge', 'rabindrasadan@gmail.com', '	033-2223-9917', 'Herasim Lebedeff Sarani, Kolkata-700020', '1', '2024-05-02 09:59:35', '2024-10-04 11:00:22'),
(92, 2, 'Rajbanshi Bhasha Academy', 'Shri Deepak Kerketta', 'Secretary', 'dicocob2011@gmail.com', '03582-228331/ (M) 9147770421', 'Office of the District Information & Cultural Officer, Victor Palace, Sagardighi, P.O. & Dist. Cooch Behar', '1', '2024-05-02 10:00:28', '2024-05-02 10:00:28'),
(93, 2, 'Rajya Charukala Parshad', 'Shri Soumen Khamrui', 'Executive Officer', 'rajyacharukalaparshad@ gmail.com khamruiart@gmail.com', '033-2223-5317/5454', '1/1, A.J.C. Bose Road, Kolkata-700020', '1', '2024-05-02 10:01:21', '2024-10-04 10:58:44'),
(94, 2, 'Shishu Kishore Academy', 'Smt. Mandakranta Mahalanabis', 'Secretary-in Charge', 'skakademi@gmail.com', '9147770332', 'Uttirna, 1st Floor, 1A, Reformatory Street, Alipore, Kolkata-7000027', '1', '2024-05-02 10:02:07', '2024-05-02 10:02:07'),
(95, 2, 'Siliguri Dinabandhu Mancha', 'Shri Passang Dorjee Bal', 'DDI & In-charge ADI, SLIC & Dinabandhu Mancha', 'adisiliguri.2013@gmail.com', '0353-2523398/ (M) 9147770317', 'State Level Information Centre, Hakimpara, Siliguri Darjeeling -734001', '1', '2024-05-02 10:02:58', '2024-05-02 10:02:58'),
(96, 2, 'Sisir Mancha', 'Shri Tapan Tarafder', 'Administrative Officer-in-Charge', 'sisirmancha@gmail.com', '033-2223-6813/9147770330', '1/1 A.J.C.Bose Rd, Kolkata-700020', '1', '2024-05-02 10:03:56', '2024-05-02 10:03:56'),
(97, 2, 'Uttirna', 'Shri Debkumar Hazra', 'Administrative Officer', '', '9147770312', '1A, Reformatory Street, Alipore, Kolkata-700027', '1', '2024-05-02 10:04:45', '2024-05-02 10:04:45'),
(99, 1, 'SubDivisional Information Cultural Officer, Domkal', 'RAJDIP SARKAR', 'SDICO, DOMKAL', 'Not Available', '9147770411', 'Domkal, Khan Saheb Para,Pin-742 303', '1', '2024-09-25 10:51:41', '2024-09-26 11:01:59'),
(100, 1, 'SubDivisional Information Cultural Officer, Tehatta', 'BISWAJIT BISWAS', 'SDICO, TEHATTA', 'sdicotehatta@gmail.com', '9147770380', '', '1', '2024-09-25 10:52:29', '2024-09-26 10:22:36'),
(101, 1, 'SubDivisional Information Cultural Officer, Ranaghat', 'ANUSREE GOSWAMI', 'SDICO, RANAGHAT', 'sdicoranaghat@gmailcom', '9147770379', '', '1', '2024-09-25 10:53:15', '2024-09-26 10:23:16'),
(102, 1, 'SubDivisional Information Cultural Officer,Kalyani', 'PARAMITA MALAKAR', 'SDICO, KALYANI', 'sdicokalyani@gmail.com', '9147770381', '', '1', '2024-09-25 10:54:00', '2024-09-26 10:23:59'),
(104, 1, 'SubDivisional Information Cultural Officer, Bidhannagar', 'BISWANATH KHAN', 'SDICO, BIDHANNAGAR', 'sdicobidhannagar@gmail.com', '9147770373', '', '1', '2024-09-25 10:55:25', '2024-09-26 10:24:43'),
(105, 1, 'SubDivisional Information Cultural Officer, Bongaon', 'NANDI BARDHAN MONDAL', 'SDICO, BONGAON', 'sdicobongaon24pgs@gmail.com', '9147770376', '', '1', '2024-09-25 10:56:01', '2024-09-26 10:25:28'),
(106, 1, 'SubDivisional Information Cultural Officer, Basirhat', 'RAMA RANI DUTTA', 'SDICO, BASIRHAT', 'sdicobasirhat@gmail.com', '9147770375', '', '1', '2024-09-25 10:56:30', '2024-09-26 10:26:06'),
(107, 1, 'SubDivisional Information Cultural Officer,Canning', 'MD. AINUL HAQUE', 'SDICO, CANNING', 'sdicocng@gmail.com', '9147770370', '', '1', '2024-09-25 10:56:58', '2024-09-26 10:26:53'),
(108, 1, 'SubDivisional Information Cultural Officer, Uluberia', 'NARAYAN CH ROY', 'SDICO, ULUBERIA.', 'sdicouluberia2012@gmail.com', '9147770358', '', '1', '2024-09-25 10:57:24', '2024-09-26 10:27:40'),
(109, 1, 'SubDivisional Information Cultural Officer,Amta', 'MOUSUMI ROY', 'SDICO, AMTA', 'sdicoamta@gmail.com', '9147770359', '', '1', '2024-09-25 10:57:58', '2024-09-26 10:28:26'),
(110, 1, 'SubDivisional Information Cultural Officer, Haldia', 'RITUPARNA HALDER', 'SDICO, HALDIA', 'haldiasdico@gmail.com', '9147770383', '', '1', '2024-09-25 11:00:44', '2024-09-26 10:59:02'),
(111, 1, 'SubDivisional Information Cultural Office, Kanthi / Contai', 'AYON KR BISWAS', 'SDICO, KANTHI/CONTAI', 'sdicocontai@gmail.com', '3220255061', 'Monaharchak, Post Kanthi District- Purba Medinipur, Pin-721 401', '1', '2024-09-25 11:01:19', '2024-09-26 09:40:41'),
(112, 1, 'SubDivisional Information Cultural Office, Egra', 'SHAHIN SARIAR ANSARY', 'SDICO, EGRA.', 'sdicoegra.pm@ gmail.com', '3220244904', 'Post- Egra, (Near Egra P.S.),District- Purba Medinipur,Pin- 721 429', '1', '2024-09-25 11:01:53', '2024-09-26 09:42:08'),
(118, 1, 'SubDivisional Information Cultural Officer,Katwa', 'SUSMITA MUKHEJEE', 'SDICO, KATWA', 'sdicokatwa@gmail.com', '9147770394', '', '1', '2024-09-25 11:05:38', '2024-09-26 10:29:35'),
(123, 2, 'Paschimbanga Jatra Academy', 'Lipika Banerjee', 'Secretary-in-Charge', 'paschimbangajatraacademy@gmail.com', '(033)-2530-4562 / 9147770316', '76/1, Bagbazar Street, Kolkata–700003', '1', '2024-09-25 11:30:00', '2024-09-27 09:05:56'),
(124, 2, 'Paschimbanga Kabita Academy', 'Smt. Mandakranta Mahalanabis', 'Secretary -in-Charge', 'kabitaacademywb@gmail.com', '033-2223-0131', 'Kolkata Information Centre, 2nd floor, 1/1, A.J.C. Bose Road, Kolkata-700020', '1', '2024-09-25 11:31:55', '2024-10-04 10:59:05'),
(125, 2, 'Paschimbanga Nritya Academy', 'Katha Das', 'Secretary-in-Charge', 'wbstatemusicacademy@gmail.com', '033-2417-9502/ (M) 9147770327', '36, Prince Anwar Shah Road, Kolkata-700033', '1', '2024-09-25 11:33:05', '2024-09-25 11:33:05'),
(126, 2, 'Paschimbanga Rajya Sangeet Academy', 'Surya Banerjee', 'Secretary-in-Charge', 'wbstatemusicacademy@gmail.com', '033-2417-9502/ (M) 9147770327', '36, Prince Anwar Shah Road, Kolkata-700033', '1', '2024-09-25 11:34:12', '2024-09-25 11:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_events`
--

CREATE TABLE `wbinc_events` (
  `ID` int(11) NOT NULL,
  `event_id` tinyint(6) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `gallery_image` text NOT NULL,
  `venue` text NOT NULL,
  `event_date` text NOT NULL,
  `post_order_no` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_events`
--

INSERT INTO `wbinc_events` (`ID`, `event_id`, `title`, `content`, `image`, `gallery_image`, `venue`, `event_date`, `post_order_no`, `status`, `created_date`, `updated_date`) VALUES
(1, 0, 'Uttam Kumar Smarane', '', 'uploads/events/2276276139501721657031.webp', 'a:1:{i:0;s:42:\"uploads/events/3881846357531721657031.webp\";}', 'Dhono Dhanyo Auditorium, Alipore', '24th July, 2024', 1, '', '2024-07-22 14:01:15', '2024-11-09 10:45:13'),
(2, 0, '7th National Theatre Festival', '<p><strong><u><a href=\"https://wbicad.in/events/7th_national_theatre_festival.pdf\" target=\"_blank\">Click here to download the form.</a></u></strong></p>\r\n', 'uploads/events/4186149367121721656937.webp', 'a:1:{i:0;s:42:\"uploads/events/2417374739511721656937.webp\";}', 'Minerva Natya Sanskriti Charcha Kendra', '17th Aug, 2024', 2, '', '2024-07-22 09:03:04', '2024-11-09 10:45:13'),
(3, 0, 'Kothaye O Gaane', '', 'uploads/events/4870330610781721388397.webp', 'a:1:{i:0;s:43:\"uploads/events/10707388196671721388397.webp\";}', 'Rabindra Sadan', '19 - 20th July, 2024', 4, '', '2024-07-19 11:26:37', '2024-11-09 10:45:13'),
(4, 0, 'Kabiguru Smarone', '', 'uploads/events/6414912848121722940904.webp', 'a:1:{i:0;s:42:\"uploads/events/4099733189021722940959.webp\";}', 'Rabindrasadan, Sisir Mancha, Ektara Mukta Mancha, Bangla Academy Sovaghor', '7th - 12th August,2024', 3, '', '2024-08-06 10:41:44', '2024-11-09 10:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_event_category`
--

CREATE TABLE `wbinc_event_category` (
  `ID` int(11) NOT NULL,
  `event_category` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_event_category`
--

INSERT INTO `wbinc_event_category` (`ID`, `event_category`, `created_date`, `updated_date`) VALUES
(1, 'Past Events', '2024-07-19 11:15:38', '2024-07-19 11:15:43'),
(2, 'Upcoming Events', '2024-07-19 11:16:15', '2024-07-19 11:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_home_banner`
--

CREATE TABLE `wbinc_home_banner` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_home_banner`
--

INSERT INTO `wbinc_home_banner` (`ID`, `title`, `image`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Banner1', 'uploads/home_banner/8538942169151713779413.webp', '1', '2024-04-22 09:50:13', '2024-04-22 09:50:13'),
(2, 'Banner2', 'uploads/home_banner/5079592465941713779530.webp', '1', '2024-04-22 09:52:10', '2024-04-22 09:52:10'),
(3, 'Banner3', 'uploads/home_banner/1253606172191713779548.webp', '1', '2024-04-22 09:52:28', '2024-04-22 09:52:28'),
(6, 'Banner6', 'uploads/home_banner/4959511846651713779596.webp', '1', '2024-04-22 09:53:16', '2024-04-22 09:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_home_options`
--

CREATE TABLE `wbinc_home_options` (
  `ID` int(11) NOT NULL,
  `option_name` text NOT NULL,
  `option_value` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wbinc_home_options`
--

INSERT INTO `wbinc_home_options` (`ID`, `option_name`, `option_value`, `created_date`, `updated_date`) VALUES
(1, 'about_heading', 'About Information and Cultural Affairs Department', '2024-04-18 09:43:15', '2024-06-13 05:05:19'),
(2, 'about_left_image', 'uploads/home_cms/10505765562341713436170.webp', '2024-04-18 09:43:15', '2024-04-18 10:29:30'),
(3, 'about_content', '<p>The Information and Cultural Affairs Department was conceived with a view for the preservation and promotion of unique and vibrant heritage of Bengal and Bengali intellect.</p>\r\n\r\n<p>This Department has intricately been involved with the timely and effective dissemination of messages of the Government to the public, which it serves.</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://wbicad.in/directorates/information.php\"><strong>Information</strong></a></li>\r\n	<li><a href=\"https://wbicad.in/directorates/culture.php\"><strong>Culture</strong></a></li>\r\n	<li><a href=\"https://wbicad.in/directorates/film.php\"><strong>Film</strong></a></li>\r\n	<li><a href=\"https://wbicad.in/directorates/archaeology.php\"><strong>Archaeology</strong></a></li>\r\n</ul>\r\n', '2024-04-18 09:43:48', '2024-06-07 13:41:39'),
(4, 'about_right_image', 'a:6:{i:0;s:44:\"uploads/home_cms/5730386814191713515515.webp\";i:1;s:44:\"uploads/home_cms/5136650153751713515515.webp\";i:2;s:44:\"uploads/home_cms/3737819064831713515515.webp\";i:3;s:44:\"uploads/home_cms/7117486065901713515605.webp\";i:4;s:44:\"uploads/home_cms/3120557918381713515605.webp\";i:5;s:44:\"uploads/home_cms/8054242585431713515605.webp\";}', '2024-04-18 09:43:48', '2024-04-19 08:33:25'),
(5, 'mission_vision_heading', 'Mission & Vision', '2024-04-18 09:44:10', '2024-06-13 05:10:24'),
(6, 'mission_vision_content', '<p><strong>Vision:</strong></p>\r\n\r\n<p>Instrumentation of information and vibrant cultural heritage of Bengal to achieve the zenith of mutual understandings, respect and achievements as well as to keep up the intention of Biswabangla.</p>\r\n\r\n<p><strong>Mission:</strong></p>\r\n\r\n<ol>\r\n	<li>Citizen centric dissemination of information to develop awareness on basic needs and duties in socio-economic arena to uplift the all-square profiles of commoners;</li>\r\n	<li>Publish and provide necessary information to citizens for availing different services and facilities as and when provided by the State;</li>\r\n	<li>Spread out the cultural aroma of Bengal through exhibition, exploration and exchange of the treasures therein;</li>\r\n	<li>Rejuvenating the dying arts and cultures of Bengal and evolving the process of its restoration in mainstream;</li>\r\n	<li>Nourishing research and development of different forms of existing arts and culture by providing necessary infrastructure and facilities;</li>\r\n	<li>Developing the celluloid vibes of Bengal;</li>\r\n	<li>Exploration of archeological remains, restoration of ethnographic and historical structures and catering the glorious past of Bengal for generations in roll.</li>\r\n</ol>\r\n', '2024-04-18 09:44:10', '2024-04-18 13:57:00'),
(7, 'bottom_left_image', 'uploads/home_cms/10240275584291713436890.webp', '2024-04-18 09:44:29', '2024-04-18 10:41:30'),
(8, 'bottom_right_image', 'uploads/home_cms/8720678262421713436890.webp', '2024-04-18 09:44:29', '2024-04-18 10:41:30'),
(9, 'cm_image', 'uploads/home_cms/3168610962821713436824.webp', '2024-04-18 10:34:51', '2024-04-18 10:40:24'),
(10, 'cm_info', '<p>Mamata Banerjee</p>\r\n\r\n<p>Hon&#39;ble CM, Government of West Bengal</p>\r\n', '2024-04-18 10:34:51', '2024-04-18 10:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_institution`
--

CREATE TABLE `wbinc_institution` (
  `ID` int(11) NOT NULL,
  `directorate_id` tinyint(4) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `gallery_image` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_institution`
--

INSERT INTO `wbinc_institution` (`ID`, `directorate_id`, `title`, `image`, `gallery_image`, `status`, `created_date`, `updated_date`) VALUES
(1, 1, 'Kolkata Information Centre (KIC)', 'uploads/institution/6099558412321714557809.webp', '', '1', '2024-05-01 10:03:29', '2024-05-01 10:12:31'),
(2, 1, 'Information Centre Siliguri (Dinabandhu Mancha)- SIC', 'uploads/institution/9213722450031714558908.webp', '', '1', '2024-05-01 10:21:48', '2024-05-01 10:21:48'),
(3, 2, 'Rabindra Sadan', 'uploads/institution/5707985815331714560158.webp', '', '1', '2024-05-01 10:42:38', '2024-05-01 10:42:38'),
(4, 2, 'Madhusudan Mancha', 'uploads/institution/2543361787041714644505.webp', '', '1', '2024-05-02 10:08:25', '2024-05-02 10:08:25'),
(5, 2, 'Girish Mancha', 'uploads/institution/9127744960851714644542.webp', '', '1', '2024-05-02 10:09:02', '2024-05-02 10:09:02'),
(6, 2, 'Mahajati Sadan', 'uploads/institution/10298135846071714644593.webp', '', '1', '2024-05-02 10:09:53', '2024-05-02 10:09:53'),
(7, 2, 'Rabindra Okakura Bhavan', 'uploads/institution/7813084100871714644658.webp', '', '1', '2024-05-02 10:10:58', '2024-05-02 10:10:58'),
(8, 2, 'Paschimbanga Bangla Akademi', 'uploads/institution/9141620938011714644693.webp', '', '1', '2024-05-02 10:11:33', '2024-05-02 10:11:33'),
(9, 2, 'Sisir Mancha', 'uploads/institution/2610167131881714644743.webp', '', '1', '2024-05-02 10:12:23', '2024-05-02 10:12:23'),
(10, 2, 'West Bengal State Music Academy', 'uploads/institution/868981836011714644771.webp', '', '1', '2024-05-02 10:12:51', '2024-05-02 10:12:51'),
(11, 2, 'Paschim Banga Natya Akademi', '', '', '1', '2024-05-02 10:14:02', '2024-05-02 10:14:02'),
(12, 2, 'Rajya Charukala Parshad - Charukala Bhavan', 'uploads/institution/2048387424681714644897.webp', '', '1', '2024-05-02 10:14:57', '2024-05-02 10:14:57'),
(13, 2, 'Gaganendra Shilpa Pradarshashala', 'uploads/institution/6200604395021714644941.webp', '', '1', '2024-05-02 10:15:41', '2024-05-02 10:15:41'),
(14, 3, 'Nandan', 'uploads/institution/5682872888251714645153.webp', '', '1', '2024-05-02 10:19:13', '2024-05-02 10:19:14'),
(15, 3, 'Radha Studio', 'uploads/institution/6010203515171714645408.webp', '', '1', '2024-05-02 10:23:28', '2024-05-02 10:23:28'),
(16, 3, 'Roopkala Kendro', 'uploads/institution/383986479381714645547.webp', '', '1', '2024-05-02 10:25:47', '2024-05-02 10:25:47'),
(17, 3, 'Technician\'s Studio', 'uploads/institution/4666008429841714645658.webp', 'a:5:{i:0;s:47:\"uploads/institution/6545133693011714647964.webp\";i:1;s:46:\"uploads/institution/132067131191714647964.webp\";i:2;s:47:\"uploads/institution/7432255197321714648107.webp\";i:3;s:47:\"uploads/institution/4915594249091714648107.webp\";i:4;s:46:\"uploads/institution/104200654701714648107.webp\";}', '1', '2024-05-02 10:26:30', '2024-05-02 11:08:27'),
(18, 3, 'West Bengal Tele Academy', 'uploads/institution/10968651855441714645742.webp', 'a:3:{i:0;s:47:\"uploads/institution/3720243953271714648222.webp\";i:1;s:47:\"uploads/institution/9170639598681714648222.webp\";i:2;s:47:\"uploads/institution/5257086519711714648222.webp\";}', '1', '2024-05-02 10:29:02', '2024-05-02 11:10:22'),
(19, 3, 'Rupayan', 'uploads/institution/7036135702411714645767.webp', 'a:11:{i:0;s:47:\"uploads/institution/4483352077411714648329.webp\";i:1;s:46:\"uploads/institution/307962462821714648329.webp\";i:2;s:47:\"uploads/institution/2240600311681714648329.webp\";i:3;s:47:\"uploads/institution/1481994737161714648329.webp\";i:4;s:47:\"uploads/institution/2015961650641714648329.webp\";i:5;s:47:\"uploads/institution/5226678498491714648329.webp\";i:6;s:47:\"uploads/institution/7539125719101714648329.webp\";i:7;s:47:\"uploads/institution/3118965272011714648329.webp\";i:8;s:46:\"uploads/institution/121944176101714648329.webp\";i:9;s:47:\"uploads/institution/5427355548921714648329.webp\";i:10;s:47:\"uploads/institution/6633663143251714648329.webp\";}', '1', '2024-05-02 10:29:27', '2024-05-02 11:12:09'),
(20, 4, 'West Bengal Heritage Commission', 'uploads/institution/1505689114851714648447.webp', '', '1', '2024-05-02 11:14:07', '2024-05-02 11:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_notice`
--

CREATE TABLE `wbinc_notice` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `documents` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_notice`
--

INSERT INTO `wbinc_notice` (`ID`, `title`, `date`, `documents`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Notification for CASTE 123', '19-12-2023', 'uploads/notice/2324264136341713787746.pdf', '1', '2024-04-22 12:09:06', '2024-08-28 12:15:30'),
(2, 'Notification for WBHC', '19-12-2023', 'uploads/notice/4728826378771713787772.pdf', '1', '2024-04-22 12:09:32', '2024-08-28 12:15:37'),
(3, 'Policy of persons with disabilities for I& CA Deptt', '22-07-2024', 'uploads/notice/3968582751521721726342.pdf', '1', '2024-07-23 09:19:02', '2024-08-28 12:15:40'),
(4, 'Notice for Invitation of independence day celebration', '12-08-2024', 'uploads/notice/7618110465751723463035.pdf', '1', '2024-08-12 11:43:55', '2024-08-28 12:33:02'),
(5, 'Notice for availing one-time financial assistance for old, infirm, financially weak jatra artists & technicians by Paschimbanga Jatra Akademi for F.Y 2024-2025', '28-08-2024', 'uploads/notice/6876238109841725257440.pdf', '1', '2024-08-28 12:13:22', '2024-09-02 06:10:40'),
(6, 'BBSS 2024 - Winners List', '09-10-2024', 'uploads/notice/4068914701661728561542.pdf', '1', '2024-10-09 13:35:04', '2024-10-10 11:59:02'),
(7, 'Notice for recruitment of retired government drivers', '24-11-2024', 'uploads/notice/4575421677151729849188.pdf', '1', '2024-10-25 09:39:48', '2024-10-25 09:39:48'),
(8, 'Notice for recruitment of retired government drivers', '28-10-2024', 'uploads/notice/9309963201681730798884.pdf', '1', '2024-11-05 09:28:04', '2024-11-05 09:30:11'),
(9, 'hghghjjh', '6-11-2024', 'uploads/notice/9019742929571730875844.pdf', '1', '2024-11-06 06:50:44', '2024-11-06 07:17:36'),
(10, 'ikjhiuh', '31-12-2024', 'uploads/notice/4554070324401730887448.pdf', '1', '2024-11-06 10:04:08', '2024-11-06 10:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_options`
--

CREATE TABLE `wbinc_options` (
  `ID` int(11) NOT NULL,
  `option_name` text NOT NULL,
  `option_value` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wbinc_options`
--

INSERT INTO `wbinc_options` (`ID`, `option_name`, `option_value`, `created_date`, `updated_date`) VALUES
(1, 'website_name', 'Information and Cultural Affiars Department', '2024-02-24 10:12:09', '2024-06-13 12:41:43'),
(2, 'website_url', 'http://localhost/wbicad/', '2024-02-24 10:12:09', '2024-11-06 06:44:00'),
(3, 'email', 'ica-dept@wb.gov.in', '2024-02-24 10:12:09', '2024-06-16 15:21:46'),
(4, 'phone_no', '9999999999', '2024-02-24 10:12:09', '2024-06-14 09:01:38'),
(5, 'whatsapp_no', '9999999999', '2024-02-24 10:12:09', '2024-06-14 08:22:43'),
(6, 'smtp_host', '', '2024-02-24 10:12:09', '2024-02-24 10:12:09'),
(7, 'smtp_port', '', '2024-02-24 10:12:09', '2024-02-24 10:12:09'),
(8, 'smtp_username', '', '2024-02-24 10:12:09', '2024-02-24 10:12:09'),
(9, 'smtp_password', '', '2024-02-24 10:12:09', '2024-02-24 10:12:09'),
(10, 'logo', 'a:3:{s:8:\"fullPath\";s:52:\"uploads/common/82054d6321a11dfe3dd37d828fe99934.webp\";s:4:\"file\";s:37:\"82054d6321a11dfe3dd37d828fe99934.webp\";s:6:\"status\";i:1;}', '2024-02-27 07:55:25', '2024-04-04 12:15:47'),
(11, 'favicon', 'a:3:{s:8:\"fullPath\";s:52:\"uploads/common/a04a4cb92c81392289422d3d67121284.webp\";s:4:\"file\";s:37:\"a04a4cb92c81392289422d3d67121284.webp\";s:6:\"status\";i:1;}', '2024-02-27 07:55:25', '2024-04-04 12:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_other_officers`
--

CREATE TABLE `wbinc_other_officers` (
  `ID` int(11) NOT NULL,
  `officer_name` text NOT NULL,
  `holding_post` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_other_officers`
--

INSERT INTO `wbinc_other_officers` (`ID`, `officer_name`, `holding_post`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Balai Krishna Mondal, WB A&AS ', 'A.O. & e.o. Dy. Secretary', '1', '2024-05-03 13:45:46', '2024-05-15 13:41:24'),
(2, 'Gora Chand Chowdhury', 'A.O., F.T.C.C.', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(3, 'Sanjib Dey, WB A&amp;AS', 'Accounts Officer, NANDAN', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(4, 'Kaustav Tarafder, WBICS', 'Sr. Additional Director of Culture', '1', '2024-05-03 13:45:46', '2024-09-25 10:34:15'),
(5, 'Manab Bandyopadhyay, WBICS', 'Additional Director of Films', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(6, 'Nabarun Sareswari, WBICS', 'Additional Director of Information', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(7, 'Sanjay Chakraborty, WBICS', 'Administrative Officer, Sisir Mancha', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(8, 'Deb Kumar Hazra, WBICS', 'Administrative Officer, Uttirno', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(9, 'Debasis Dutta, WBICS', 'Adminstrative officer, Rabindra Okakura Bhavan', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(10, 'Lipika Banerjee, WBICS', 'Adminstrative officer, W.B Tele Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(11, 'Arunabha Mitra, WBICS ', 'Dy. Director of Information', '1', '2024-05-03 13:45:46', '2024-09-25 10:33:55'),
(12, 'Bhaskar Jyoti Bera, WBICS', 'Dy. Director of Information', '1', '2024-05-03 13:45:46', '2024-09-25 10:33:23'),
(13, 'Rajarshi Moitra, WBICS', 'Assistant Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(14, 'Rana Debdas, WBICS', 'Assistant Director of Information', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(15, 'Supriya Chakraborty, WB A&amp;AS', 'Assistant Financial Advisor', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(16, 'Jayanta Kr. Saha', 'Assistant Information Officer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(17, 'Mousumi Sengupta', 'Assistant Information Officer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(18, 'Sarbani Acharya', 'Assistant Information Officer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(19, 'Somali Panda', 'Assistant Information Officer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(20, 'Zainul Abedin', 'Assistant Information Officer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(21, 'Ajit Kisku', 'Assistant Information Officer, Editorial Section', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(22, 'Ratul Datta', 'Assistant Information Officer, Editorial Section', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(23, 'Mousumi Roy, WBSS', 'Assistant Secretary', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(24, 'Somenath Kar,WBSS', 'Assistant Secretary', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(25, 'Prabir Kumar Mondal', 'Asstt. Engineer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(26, 'Asim Das', 'Bengali Translator, Editorial Section', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(27, 'Sumita De, WBICS', 'Chief of News Bureau', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(28, 'Sangram Guha', 'Copy Writer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(29, 'Subhro Chakraborty', 'Deputy Director (Small Savings)', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(30, 'Subhendu Mondal, WB A&amp;AS', 'Deputy Director of Archaeology &amp; Museums', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(31, 'Giridhari Saha, WBICS', 'Deputy Director of Culture', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(32, 'Mandakranta Mahalanbish, WBICS', 'Deputy Director of Culture', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(33, 'Kushal Chakraborty, WBICS', 'Deputy Director of Film', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(34, 'Samapti Dutta, WBICS', 'Deputy Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(35, 'Surya Banerjee, WBICS', 'Deputy Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(36, 'Pasang Dorji Bal, WBICS', 'Deputy Director of Information, Darjeeling', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(37, 'Sudip Kumar Das, WBSS', 'Deputy Secretary', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(38, 'Subhro Chakraborty', 'Dy. Director of Information (Small Savings)', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(39, 'Goutam Chakraborty', 'Editor of Publication', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(40, 'Supriya Roy', 'Editor of publication', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(41, 'Rijurekha Chakravarty', 'Editor-West Bengal', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(42, 'Amit Sen', 'Executive Assistant to Hon’ble M.O.S', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(43, 'Santanu Das', 'Executive Engineer (Electrical)', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(44, 'Mitendra Kumar Chhetri, WBICS', 'Executive Officer, Cinema Centenary Building', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(45, 'Suprina Blon, WBICS', 'Executive Officer, West Bengal Film Centre, Nandan', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(46, 'Sudip Sinha, WB A&amp;AS', 'Financial Advisor', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(47, 'Jayprakash Mishra', 'Hindi Sub - Editor', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(48, 'Tapan Tarafder , WBICS', 'Joint Director of Culture', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(49, 'Sekhar Banerjee, WBICS', 'Joint Director of Film and Secretary, CASTEI', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(51, 'Jagadish Chandra Roy, WBICS', 'Joint Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(52, 'Jayasri Mondal Pal, WBICS', 'Joint Director of Information', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(53, 'Kalpendu Mukherjee, WBICS', 'Joint Director of Information', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(54, 'Karunamoyee Bhoumik, WBICS', 'Joint Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(55, 'Kaushik Nandi, WBICS', 'Joint Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(56, 'Manas Kr Das, WBICS', 'Joint Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(57, 'Pradip Kumar Sarkar, WBICS', 'Joint Director of Information ', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(58, 'Dipanwita Mandal, WBICS', 'Member Secretary, Birsa Munda Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(59, 'Cyprianus Baskey, WBICS', 'Member Secretary, Kamtapuri Bhasa Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(60, 'Manasi Mondal', 'Member Secretary, Manbhum Cultural Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(61, 'Anup Kumar Gayen, WBICS', 'Member Secretary, Paschimbanga Dalit Sahitya Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(62, 'Utpal Pal, WBICS', 'Member Secretary, Paschimbanga Hindi Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(63, 'Santanu Chakraborty, WBICS', 'Member Secretary, Paschimbanga Kazi Nazrul Islam Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(64, 'Deepak Kerketta, WBICS', 'Member Secretary, Rajbangshi Bhasa Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(65, 'Malabika Goswami, WBICS', 'Member Secretary, W.B. Tele Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(75, 'Swarup Malik, WBCS (Exe.)', 'Private Secretary to Hon’ble HMOS', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(77, 'Smarajit Pramanik', 'Research Officer', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(78, 'Debasis Halder, WBICS', 'Secretary, FTCC', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(79, 'Kajal Bhattacharya, WBICS', 'Secretary, Paschiimbanga Natya Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(80, 'Basudev Ghose, WBICS', 'Secretary, Paschim Banga Bangla Akademi', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(82, 'Sunandita Dasgupta, WBICS', 'Secretary, Paschimbanga Kabita Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(83, 'Katha Das , WBICS', 'Secretary, Paschimbanga Nritya Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(84, 'Munmun Hore Sinha, WBICS', 'Secretary, Paschimbanga Rajya Sangeet Academy', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46'),
(86, 'Arijit Chowdhury', 'Registrar', '1', '2024-05-03 13:45:46', '2024-09-25 10:32:57'),
(90, 'Subrata Biswas, WBLS', 'Special Law Officer &amp; e.o. Dy. Secretary', '1', '2024-05-03 13:45:46', '2024-05-03 13:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_publication`
--

CREATE TABLE `wbinc_publication` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `documents` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_publication`
--

INSERT INTO `wbinc_publication` (`ID`, `title`, `date`, `documents`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Lokobarta (April-June Issue 23)', '20-07-2023', 'uploads/publication/7590533875911714734706.pdf', '1', '2024-05-03 10:55:09', '2024-05-03 11:11:46'),
(2, 'West Bengal Book 2021', '15-06-2022', 'uploads/publication/3639179951491714734735.pdf', '1', '2024-05-03 10:56:38', '2024-05-03 11:12:15'),
(3, 'West Bengal Book 2021 - Special Edition', '15-06-2022', 'uploads/publication/171648539821714734780.pdf', '1', '2024-05-03 10:57:42', '2024-05-03 11:13:00'),
(4, 'West Bengal Book, August - October 2018', '14-07-2022', 'uploads/publication/7081950012961714733932.pdf', '1', '2024-05-03 10:58:52', '2024-05-03 10:58:52'),
(5, 'West Bengal Book, February - May 2018', '14-07-2022', 'uploads/publication/3996000083991714734026.pdf', '1', '2024-05-03 11:00:26', '2024-05-03 11:00:27'),
(6, 'West Bengal Book, July - November 2019', '15-06-2022', 'uploads/publication/3390834392571714734086.pdf', '1', '2024-05-03 11:01:25', '2024-05-03 11:01:27'),
(7, 'West Bengal Book, June - July 2018', '14-07-2022', 'uploads/publication/1383858260851714734151.pdf', '1', '2024-05-03 11:02:31', '2024-05-03 11:02:32'),
(8, 'West Bengal Book, March - June 2019', '14-07-2022', 'uploads/publication/6287521461361714734228.pdf', '1', '2024-05-03 11:03:48', '2024-05-03 11:03:48'),
(9, 'West Bengal Book, November 2017 - January 2018', '14-07-2022', 'uploads/publication/4844700145671714734268.pdf', '1', '2024-05-03 11:04:28', '2024-05-03 11:04:28'),
(10, 'West Bengal Book, November 2018 - February 2019 ', '14-07-2022', 'uploads/publication/10372914754641714734320.pdf', '1', '2024-05-03 11:05:20', '2024-07-06 07:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_publication_category`
--

CREATE TABLE `wbinc_publication_category` (
  `ID` int(11) NOT NULL,
  `publication_category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_rti`
--

CREATE TABLE `wbinc_rti` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `documents` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_rti`
--

INSERT INTO `wbinc_rti` (`ID`, `title`, `documents`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Department', 'uploads/rti/2032436108321714732538.pdf', '1', '2024-05-03 10:35:38', '2024-05-03 10:35:38'),
(2, 'Directorate of Information', 'uploads/rti/7410586977891714732561.pdf', '1', '2024-05-03 10:36:01', '2024-05-03 10:36:01'),
(3, 'Directorate of Culture', 'uploads/rti/1861016625481714732642.pdf', '1', '2024-05-03 10:37:22', '2024-05-03 10:37:22'),
(4, 'Directorate of Films', 'uploads/rti/4769468839741726042362.pdf', '1', '2024-05-03 10:37:54', '2024-09-11 08:12:42'),
(5, 'Directorate of Archaeology', 'uploads/rti/4561766261921714732702.pdf', '1', '2024-05-03 10:38:22', '2024-05-03 10:38:22'),
(6, 'Disclosure of Information us 4 of the RTI Act 2005  i.c.w KIC', 'uploads/rti/4202910899501725622990.pdf', '1', '2024-09-06 11:43:10', '2024-09-06 11:44:54'),
(7, 'Disclosure of Information of Roopkala Kendro US 4 of  RTI Act', 'uploads/rti/2130986764531727251879.pdf', '1', '2024-09-25 08:11:19', '2024-09-25 08:12:09'),
(8, 'hello', 'uploads/rti/3528462916511730886506.pdf', '1', '2024-11-06 09:48:26', '2024-11-06 09:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_schemes`
--

CREATE TABLE `wbinc_schemes` (
  `ID` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_schemes`
--

INSERT INTO `wbinc_schemes` (`ID`, `title`, `content`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Social Welfare Schemes', '<h4>Lok Prasar Prakalpa:</h4>\r\n\r\n<p>The State Government has launched &lsquo;Lok Prasar Prakalpa&rsquo; (LPP) in the year of 2014 with a view to revitalizing the Folk Arts of Bengal as well as ensuring a steady means of livelihood for the State&rsquo;s folk artistes. Their talent is utilized in a coherent campaign to spread the developmental initiatives of the Government across the State and improving the socio-economic condition of the folk artistes. More than 1 lakh 94 thousand folk artistes have so far been registered to receive financial assistance in the form of Retainer Fees, Pension and Performance Fees.</p>\r\n\r\n<p>Every registered folk artiste within the age group of 18 to 60 years receives Rs. 1000/- per month as &lsquo;Retainer Fees&rsquo;, whereas &lsquo;Pension&rsquo; of equal amount is granted to the folk artistes for those who have crossed the age of 60 years. Besides, &lsquo;Performance Fees&rsquo; @ Rs. 1,000/- per day is also provided to each artiste when such performance is called for. Retainers fees and Pension is being disbursed directly to the bank accounts of the beneficiaries through Jai Bangla Portal. Performance fees is also paid directly to the bank accounts of the beneficiaries through Treasuries of different Districts.</p>\r\n\r\n<p>The enlisted folk artistes propagate different flagship programmes of the State Government such as Kanyashree, Rupashree, Sabuj Sathi, Duare Sarkar, ParaySamadhan, Manobik Pension etc through their performances. Besides they also campaign for creating awareness among the people on various public awareness issues like prevention of vector borne disease, digital ration cards etc. This project has brought tremendous enthusiasm among the folk artistes of Bengal by beckoning them from the abyss of oblivion to the glory of self-reliance.</p>\r\n\r\n<h4>State Welfare Scheme for Purohit:</h4>\r\n\r\n<p>State Government has introduced State Welfare Scheme for Purohits in 2020 in order to provide financial assistance @Rs. 1,500/- per month, for their livelihood considering their importance in social, cultural and community functions, taking into consideration that most of them are now in financially distressed condition.</p>\r\n\r\n<p>So far, more than 28,000 beneficiaries have been included under this scheme till introduction and the monthly financial assistance is being disbursed directly to the bank accounts of the beneficiaries through Jai Bangla Portal.</p>\r\n\r\n<h4>West Bengal Pension Scheme for the Journalists, 2018:</h4>\r\n\r\n<p>It has been introduced with effect from 1stApril, 2018 to provide a monthly financial assistance @ Rs. 2500/- for the journalists who have attained 60 years of age and are facing acute financial hardship. So far, more than 160 journalists have been endowed with this benefit</p>\r\n\r\n<h4>Medical Benefit Scheme for the Cine and Television Artistes/ Technicians /Workers:</h4>\r\n\r\n<p>State Government pays full premium for extending Group Health Insurance coverage, to around 7500 thousand of Cine and Television Artistes/ Technicians /Workers and their family members. The total number of beneficiaries is about 45 thousand. The State Government has enhanced the coverage under this scheme from Rs. 1.5 lakhs to Rs. 5 lakhs to cover the critical illnesses. The scheme also provides Rs.1 lakh Personal Accident coverage for the primary members. For 2022-23 initiative has been taken to continue the scheme which is under process. Projected annual premium would be of Rs. 2,02,96,287/- for procuring policy for 3,951 primary members. Total number of beneficiaries would be 23,706.</p>\r\n\r\n<h4>Literary and Cultural Pension Scheme:</h4>\r\n\r\n<p>In order to provide financial assistance to aged and financially weaker artistes, the State Government provides the same under the Financial Assistance to distinguished persons of Arts and Letters. So far 115 aged artists including model have been provided monthly financial assistance under the Scheme.</p>\r\n\r\n<h4>Financial Assistance to Jatra Artistes:</h4>\r\n\r\n<p>In this era of multi-dimensional techno-based entertainment, we had almost lost our proud culture of Jatra. To infuse vitality into our cultural heritage, the State Government provides one-time financial assistance to distressed and aged Jatra artist @Rs. 25,000/- each.</p>\r\n\r\n<h4>Swasthya Sathi Scheme for Cable Operators:</h4>\r\n\r\n<p>With a view to providing social security to the pervasive yet unorganized sector of Cable TV distribution network, in 2018-19, the benefit of the State-funded &lsquo;Swasthya Sathi&#39; Health Insurance Scheme has been extended to all Cable TV Operators, Sub-operators, their workers and families. So far more than 20,000 numbers of primary members have been provided with the Swastha Sathi Card with total number of members are 50,000 approx. The total number of persons to be covered under the scheme is around 1 lakh 80 thousand.</p>\r\n', '1', '2024-05-03 08:04:49', '2024-05-03 09:27:00'),
(2, 'Awards and Sammans', '<p>State Government is incessant in its effort to recognize and promote the champions in the different fields of art and culture:</p>\r\n\r\n<h4>a) Banga Bhushan and Banga Bibhushan Awards:</h4>\r\n\r\n<p>The State government has initiated these awards as the highest Civilian honour conferred upon distinguished persons of eminence, who have excelled in different fields of human endeavor, covering art &amp; culture, literature, Public Administration &amp; Public Service etc.</p>\r\n\r\n<h4>b) Biswa Bangla Sharad Samman, 2023:</h4>\r\n\r\n<p>To promote the indigenous art &amp; culture of Bengal and maintain peace &amp; tranquility during the festive season of Bengal, the State Government has conferred &lsquo;Biswa Bangla Sharad Samman&rsquo; to different Puja organizers throughout the State. Different categories of &lsquo;Sharad Samman&rsquo; were conferred upon 100 different Puja committees of Kolkata and 300 other puja committees from the Districts to encourage celebration of Durga Puja with grandeur.</p>\r\n\r\n<h4>c) Shanti Gopal &amp; Tapan Kumar Puraskar:</h4>\r\n\r\n<p>Shanti Gopal &amp; Tapan Kumar Puraskar are conferred upon eminent Jatra artistes in the inaugural programme of the Jatra Utsav held at Ektara mancha on 24th January 2023.</p>\r\n\r\n<h4>d) Tele Samman Award Ceremony:</h4>\r\n\r\n<p>For felicitating actors/technicians of Television for their outstanding performance, this award ceremony is being held every year. The Award Ceremony took place at Dhanadhanya auditorium, Alipore.</p>\r\n\r\n<h4>e) Mahanayak Uttam Kumar Award Ceremony:</h4>\r\n\r\n<p>The Award ceremony was held on 24th July every year in a grand manner. Eminent film personalities were felicitated in this award ceremony.</p>\r\n\r\n<h2><strong>Awards of different Academies :</strong></h2>\r\n\r\n<p>for contribution in the fields of literature, culture, fine arts, folk-arts, Awards of different Academies have been conferred upon on 26th May every year in the programme of Birth Anniversary of Kazi Nazrul Islam on 26th May or Annual Festival of concerned Academy:</p>\r\n\r\n<ul>\r\n	<li>Nazrul Smriti Puraskar, ( Paschimbanga Bangla Academy)</li>\r\n	<li>Bankim Smriti Puraskar, ( Paschimbanga Bangla Academy)</li>\r\n	<li>Vidyasagar Smriti Puraskar, ( Paschimbanga Bangla Academy)</li>\r\n	<li>Girish Puraskar, ( Paschimbanga Natya Academy)</li>\r\n	<li>Dinabandhu Puraskar, ( Paschimbanga Natya Academy)</li>\r\n	<li>Abonindranath Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Ramkinkar Baij Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Charukala Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Binod Behari Mukhopadhya Puraskar, ( Paschimbanga Rajya Charukala Parshad)</li>\r\n	<li>Alauddin Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Uday Shankar Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Girija Shankar Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Gyanprakash Ghosh Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Thakur Panchanan Barma Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Raghunath Murmu Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Sudhi Pradhan Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Lalan Puraskar, ( Folk and Tribal Cultural Centre)</li>\r\n	<li>Bina Dasgupta Puraskar, ( Paschimbanga Jatra Academy)</li>\r\n	<li>Shambhu Mitra Puraskar, ( Paschimbanga Natya Academy)</li>\r\n	<li>Pannalal Bhattacharya Puraskar, ( Paschimbanga Rajya Sangeet Academy)</li>\r\n	<li>Upendra Kishore Roy Chowdhury Puraskar ( Paschimbanga Shishu Kishore Academy)</li>\r\n	<li>Vidyasagar Puraskar ( Paschimbanga Shishu Kishore Academy)</li>\r\n	<li>Kaji Sabyasachi Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Subhash Mukhopadhyay Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Sunil Gangopadhyay Samman( Paschimbanga Kabita Academy)</li>\r\n	<li>Binoy Majumder Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Niladri sekhar Basu Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Abul Kashem Rahimmuddin Samman ( Paschimbanga Kabita Academy)</li>\r\n	<li>Shilpi Maha Samman ( Rajya Charukala Parshad)</li>\r\n	<li>Shilpi Samman ( Rajya Charukala Parshad)</li>\r\n	<li>Shilpo Oitihasik o Kala Samalochak Samman ( Rajya Charukala Parshad)</li>\r\n</ul>\r\n', '1', '2024-05-03 08:04:49', '2024-05-03 09:32:21'),
(4, 'Infrastructure Development', '<h4>Construction of the West Bengal Tele Akademi Complex at Baruipur:</h4>\r\n\r\n<p>It has cost involvement of Rs. 137.56 crore. This is a state-of-the-art infrastructure being implemented by KMDA which will strive for the all-round development of the State&rsquo;s television industry. The Akademi will offer modern studio floors for shooting and production of television serials and will also introduce academic courses related to different aspects of the television industry. So far, an amount of Rs. 130.42 Crore has been released out of budgetary provision and so far, 4 studio floors and Administrative Block have been completed. The Studio was inaugurated on 10th March, 2022 as first of its kind in the Eastern India and booking of the studios has also commenced.</p>\r\n\r\n<h4>Chalachitra Satabarsha Bhaban (Cinema Centenary Building) at Tollygunge:</h4>\r\n\r\n<p>The Government is all set to present a completely revamped Chalachitra Satabarsha Bhaban to the Film lovers of Bengal. A new G+5 building is under construction involving a project cost of Rs. 21.38 crore with proposed film museum and gallery. Other structure has been completed by PWD and so far Rs.8.94 Crore has been released. The State Film Archive and Film Vault has already been set up to preserve State produced feature and documentary films in celluloid and other formats. The Preview Theatre i.e. Radha Studio at Chalachitra Satabarsha Bhaban has been thoroughly renovated. Commercial shows at Radha Studio is running from 6 th May, 2022 under supervision of Nandan.</p>\r\n\r\n<h4>Upgradation and New Constructions at Rajya Sangeet Akademi,</h4>\r\n\r\n<p>featuring the latest amenities and technical facilities to provide better infrastructure to the film and television ventures of the State, is in the full swing including work of Construction of Proposed Amphitheatre, Artistes&rsquo; Cottage &amp; Multistoried Office Complex-cum-Guest House within WBSMA Campus with cost involvement of Rs. 18.56 crore. So far Rs.10.00 Crore has been released to PWD for this purpose.</p>\r\n\r\n<h4>Archaeological Infrastructure:</h4>\r\n\r\n<p>Archeological Excavation: Major archaeological Excavation of ancient Buddhist Site at Moghalmari, Paschim Medinipur and at Garh Mandaran, Goghat, Hooghly has been taken up.</p>\r\n\r\n<h4>Renovation, Modernization, Upgradation and repair of Rabindra Bhawan, Balurghat,</h4>\r\n\r\n<p>has also been undertaken by the Department.</p>\r\n', '1', '2024-05-03 08:06:21', '2024-05-03 09:38:21'),
(5, 'Restoration and Conservation', '<h4>Identification and Declaration of Heritage Buildings &amp; State Protected Monuments etc.:</h4>\r\n\r\n<p>As many as 228 buildings have been declared as Heritage Buildings until 2021-22. Persistent endeavor is being made for further identification of Heritage Buildings. Apart from that 110 sites have been declared as State Protected Monument. Recently, Rani Shiromoni Garh, Shalboni, Paschim Medinipur and Gumghar, Bankura has been declared as State Protected Monuments.</p>\r\n\r\n<h4>Restoration &amp; Conservation of State Protected Monuments, Heritage Buildings &amp; State Archaeological Museum:</h4>\r\n\r\n<ol>\r\n	<li>West Bengal Heritage Commission with the technical support from PWD, has completed the work of renovation of the birth Place of Vidyasagar at Birsingha village and the preservation of the hostel building at Birsingha.</li>\r\n	<li>Conservation and Restoration of Gope Palace, Medinipur, Buddhist Monastery, Jagjibanpur Malda, Sculpture Shed Suissa, Baghmundi, Purulia, Ruined Mosque, Bajua, Santoshpur, Goghat, Hooghly are almost complete.</li>\r\n	<li>Major Archaeological Excavation works in different areas have been made, like Buddhist Site at Moghalmari, Dantan, Paschim Medinipur and at Garh Mandaran, Goghat, Hooghly.</li>\r\n	<li>The State Archaeological Museum has been upgraded with KIOSK, beautification, Security enhancement etc. during this period and a number of new collection have been made.</li>\r\n	<li>Conservation and Restoration projects like Badshahi Mosque at Natunhaat, Mongalkot, Purba Bardhaman and Wooden Mast of Bandel Church, Hooghly have been completed.</li>\r\n	<li>Conservation &amp; Restoration of following projects: Buddhist Monastery at Jagjibanpur, Malda. Phase I completed and Phase II started, Durga Temple at Bali Dewanganj Goghat, Hooghly, Ruined Mosque at Bajua Santoshpur, Goghat, Hooghly and Sculpture shed at Suissa, Bagmundi, Purulia have been completed.</li>\r\n	<li>Restoration work of Henry Martyn&rsquo;s Pagoda, Serampore, Hooghly and Buddhist site at Moghalmari, Paschim Medinipur are among the notable efforts.</li>\r\n	<li>For the protection and preservation of the historical relics and artifacts discovered at Chandraketugarh in North 24 Parganas, a modern museum has been set up by Tourism Department, which is being taken over by I&amp; CA Department.</li>\r\n	<li>Restoration of Buxaduar Fort Phase I completed and Phase II work started.</li>\r\n</ol>\r\n', '1', '2024-05-03 08:06:21', '2024-05-03 09:40:50'),
(6, 'Other major initiatives', '<h4>LED Tableaux:</h4>\r\n\r\n<p>In order to disseminate the various developmental messages in the remote areas of the district through audio visual mode, LED mount tableau were displayed which has attracted attention of people and has become very popular.</p>\r\n\r\n<h4>Digitisation of manuscripts of eminent authors</h4>\r\n\r\n<p>of Bengal has been undertaken by Paschim Banga Bangla Akademi (PBBA). So far 65,000 pages have been digitised, which includes manuscripts, letters and notes from eminent Bengali novelists like Rabindranath Tagore, Manik Bandyopadhyay, Bibhutibhushan Bandyopadhyay, Amritalal Basu, Annada Shankar Ray, Leela Majumdar, Leela Ray, Tarashankar Bandyopadhyay. Rare &lsquo;Punthis&rsquo; have also been digitized. The Department has envisaged the digitisation of the invaluable books, documents, audio-visual material kept in the libraries of the various Cultural Academies under itself, in order to preserve the rich cultural legacy of the State.</p>\r\n\r\n<h4>Observance of 75th year of India&rsquo;s Independence &amp; 150th birth anniversary of Rishi Aurobindo:</h4>\r\n\r\n<p>In order to commemorate the 75th year of India&rsquo;s Independence a 39 members committee under the chairmanship of Hon&rsquo;ble Chief Minister and other dignitaries / experts in various fields has been constituted. A permanent Exhibition has been set up by I&amp;CA Department at the Alipur Independence Museum in this regard.</p>\r\n\r\n<h4>Digitization and restoration of Cinematograph Films (Celluloid) of State Film Archive:</h4>\r\n\r\n<p>4(four) nos. cinematograph films made by and on legendary filmmaker Satyajit Ray have been successfully digitized. Apart from that 11 Celluloid features films and 30 Celluloid short films have been taken up for digitization and restoration with collaboration of National Film Archive of India (NFAI), Pune from the end of Chalachitra Satabarsha Bhavan. All these 4(four) digitized films have been screened during KIFF and other cinema festivals. Simultaneously, the State Govt. has taken initiative to digitize and restore all Govt. produced films being preserved in the State Film Archive at Chalachitra Satabarsha Bhavan.</p>\r\n', '1', '2024-05-03 08:07:09', '2024-05-03 09:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_tenders`
--

CREATE TABLE `wbinc_tenders` (
  `ID` int(11) NOT NULL,
  `department` text NOT NULL,
  `description` text NOT NULL,
  `date_of_issue` text NOT NULL,
  `last_date_of_receipt` text NOT NULL,
  `documents` text NOT NULL,
  `link` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wbinc_tenders`
--

INSERT INTO `wbinc_tenders` (`ID`, `department`, `description`, `date_of_issue`, `last_date_of_receipt`, `documents`, `link`, `status`, `created_date`, `updated_date`) VALUES
(4, 'Information & Cultural Affairs', 'Tender Notice for printing of book on Soumitra Chatterjee for 27th Kolkata International Film Festival.', '25-11-2023', '02-12-2024', '', 'https://www.wb.gov.in/upload/TENDER-211125103538934.pdf', '1', '2024-04-30 11:48:15', '2024-04-30 11:48:15'),
(5, ' Information & Cultural Affairs', 'Tender Notice for maintenance, repair and servicing of water purifiers.', '03-11-2023', '29-11-2024', '', 'https://www.wb.gov.in/upload/TENDER-211118134602561.pdf', '1', '2024-04-30 11:56:38', '2024-04-30 11:56:38'),
(6, 'Information & Cultural Affairs', 'Tender Notice for beautification and maintenance of garden with necessary equipments and plants, inside Technicians’ Studio, Information Cultural Affairs Department, Government of West Bengal.', '28-10-2023', '12-11-2024', '', 'https://www.wb.gov.in/upload/TENDER-211028124824662.pdf', '1', '2024-04-30 11:57:27', '2024-04-30 11:57:27'),
(8, 'Information & Cultural Affairs', 'Tender Notice for the Publication of “Puravritta Volume 2”.', '27-09-2023', '08-10-2024', '', 'https://www.wb.gov.in/upload/TENDER-210927125534133.pdf', '1', '2024-04-30 12:01:01', '2024-04-30 12:01:01'),
(9, 'Information & Cultural Affairs', 'Tender Notice for the Publication of “Puravritta Volume 3”', '27-09-2023', '08-10-2024', '', 'https://www.wb.gov.in/upload/TENDER-210927125633488.pdf', '1', '2024-04-30 12:01:44', '2024-04-30 12:01:44'),
(10, 'Information & Cultural Affairs', 'Tender Notice for Operation and monitoring of 13 nos. Air Conditioners and 6 Humidity Control Units of Film Vaults, Cinema Centenary Building.', '13-09-2023', '20-09-2024', '', 'https://www.wb.gov.in/upload/TENDER-210913112736706.pdf', '1', '2024-04-30 12:02:34', '2024-04-30 12:02:34'),
(11, 'Information & Cultural Affairs', 'Tender Notice regarding publication of “Puravritta volume 3” in English.', '07-09-2023', '14-09-2024', '', 'https://www.wb.gov.in/upload/TENDER-210907132723060.pdf', '1', '2024-04-30 12:03:08', '2024-04-30 12:03:08'),
(12, 'Information & Cultural Affairs', 'Tender Notice regarding publication of “Puravritta volume 2” in Bengali.', '07-09-2023', '14-09-2024', '', 'https://www.wb.gov.in/upload/TENDER-210907132802044.pdf', '1', '2024-04-30 12:03:50', '2024-04-30 12:03:50'),
(13, 'Information & Cultural Affairs', 'Tender Notice for empanelment of architectsconsultants in West Bengal Heritage Commission.', '02-09-2023', '30-09-2024', '', 'https://www.wb.gov.in/upload/TENDER-210902102127482.pdf', '1', '2024-04-30 12:04:33', '2024-04-30 12:04:33'),
(14, 'Information & Cultural Affairs', 'Tender Notice for Ctp (making) plates.', '31-08-2023', '14-09-2024', '', 'https://www.wb.gov.in/upload/TENDER-210908120635560.pdf', '1', '2024-04-30 12:05:52', '2024-04-30 12:05:52'),
(15, 'Information & Cultural Affairs', 'Quotation notice for Audit of the Final Accounts with reference to all relevant books, documents etc.', '09-08-2023', '16-08-2024', '', 'https://www.wb.gov.in/upload/TENDER-210809194233125.pdf', '1', '2024-04-30 12:06:55', '2024-04-30 12:06:55'),
(16, 'Information & Cultural Affairs', 'Tender Notice for Audit of Final Accounts with reference to all relevant books, documents etc.', '26-07-2023', '28-08-2024', '', 'https://www.wb.gov.in/upload/TENDER-210728161619974.pdf', '1', '2024-04-30 12:08:22', '2024-04-30 12:08:22'),
(17, 'Information & Cultural Affairs', 'Tender notice for the empanelment of star or non-star category Hotels and reputed Guest houses in Kolkata.', '19-07-2023', '02-08-2024', '', 'https://www.wb.gov.in/upload/TENDER-210719192633061.pdf', '1', '2024-04-30 12:11:22', '2024-04-30 12:11:22'),
(18, 'Information & Cultural Affairs', 'Tender Notice for supply of stationeries including computer stationeries.', '25-02-2023', '04-03-2024', '', 'https://www.wb.gov.in/upload/TENDER-210225105721738.pdf', '1', '2024-04-30 12:12:03', '2024-04-30 12:12:03'),
(19, 'Information & Cultural Affairs', 'Tender Notice for procurement of a LaserJet cartridge compatible Fax Machine.', '25-02-2023', '04-03-2024', '', 'https://www.wb.gov.in/upload/TENDER-210225112955995.pdf', '1', '2024-04-30 12:13:30', '2024-04-30 12:13:30'),
(20, 'Information & Cultural Affairs', 'Tender Notice for supplying of printing ink OS Kajal Black and old cloth, cotton make.', '22-12-2023', '30-12-2024', '', 'https://www.wb.gov.in/upload/TENDER-201231080858682.pdf', '1', '2024-04-30 12:26:44', '2024-04-30 12:26:44'),
(21, 'Information & Cultural Affairs', 'Tender Notice for supplying of Chemicals (Plate making and machine).', '22-12-2023', '30-12-2024', '', 'https://www.wb.gov.in/upload/TENDER-201231081005335.pdf', '1', '2024-04-30 12:27:41', '2024-04-30 12:27:41'),
(22, 'Information & Cultural Affairs', 'E-tender notice for supplying of chemical materials.', '26-11-2023', '08-12-2024', '', 'https://www.wb.gov.in/upload/TENDER-201203123413871.pdf', '1', '2024-04-30 12:28:35', '2024-04-30 12:28:35'),
(23, 'Information & Cultural Affairs', 'E-tender notice for supplying of printing and clothing materials.', '25-11-2023', '07-12-2024', '', 'https://www.wb.gov.in/upload/TENDER-201203123542436.pdf', '1', '2024-04-30 12:29:31', '2024-04-30 12:29:31'),
(24, 'Information & Cultural Affairs', 'E-tender notice for preparation of books of accounts, final accounts and furnishing auditor’s report for ‘West Bengal Tele Academy.', '13-11-2023', '27-11-2024', '', 'https://www.wb.gov.in/upload/TENDER-201115060541992.pdf', '1', '2024-04-30 12:30:37', '2024-04-30 12:30:37'),
(35, 'Information & Cultural Affairs', 'Tender notice for supplying of tiffin packets, small handmade bags with approved logo', '13-06-2024', '25-06-2024', 'uploads/tenders/3210814303281718446654.pdf', '', '1', '2024-06-15 10:17:34', '2024-06-15 11:16:41'),
(36, 'Information & Cultural Affairs ', 'Tender notice for Standy', '13-06-2024', '25-06-2024', 'uploads/tenders/4820891797781718450568.pdf', '', '1', '2024-06-15 11:22:48', '2024-06-15 11:22:48'),
(37, 'Information & Cultural Affairs', 'Tender notice for Supplying manpower  for still  & videography ', ' 13-06-2024', '25-06-2024', 'uploads/tenders/7911479767261718450722.pdf', '', '1', '2024-06-15 11:25:22', '2024-06-15 11:25:22'),
(38, 'Information & Cultural Affairs', 'Tender notice for Printing & Supplying of Invitation cards with envelope, Identity cards for Artistes', '13-06-2024', '25-06-2024', 'uploads/tenders/2258161798141718450881.pdf', '', '1', '2024-06-15 11:28:01', '2024-06-15 11:28:01'),
(39, 'Information & Cultural Affairs', 'Tender notice for printing &  supplying of folders & supplying of tiffin packets', '02/07/2024', '09/07/2024', 'uploads/tenders/5611702187311720004957.pdf', '', '1', '2024-07-03 11:09:17', '2024-07-06 06:34:15'),
(40, ' Information & Cultural Affairs', 'Tender Notice for Repairing Work', '', '', 'uploads/tenders/9433260311191721657401.pdf', '', '1', '2024-07-22 14:10:01', '2024-07-22 14:10:01'),
(42, 'Information & Cultural Affairs', 'Tender Notice for Repairing Work', '01-08-2024', '06-08-2024', 'uploads/tenders/4371015625961722500153.pdf', '', '1', '2024-08-01 08:15:53', '2024-08-01 08:15:53'),
(43, 'Information & Cultural Affairs', 'Proposal for Condemnation of Any Item or Vehicle', '', '', 'uploads/tenders/9353629450551722945014.pdf', '', '1', '2024-08-06 11:50:14', '2024-08-06 11:50:14'),
(44, 'Information & Cultural Affairs', 'Quotation for Videography', '21-08-2024', '23-08-2024', 'uploads/tenders/2009962368051723018900.pdf', '', '1', '2024-08-07 08:21:40', '2024-08-07 08:21:40'),
(45, 'Information & Cultural Affairs', 'Quotation Notice Office Stationary', '01-09-2024', '05-10-2024', 'uploads/tenders/9176671506661723019046.pdf', '', '1', '2024-08-07 08:24:06', '2024-08-07 08:24:06'),
(46, 'Information & Cultural Affairs', 'Quotation Notice for Supply of PA System from the bona fide and reputed agencies for Gandhiji birth anniversary at Gandhi Ghat, Barrackpore', '09/09/2024', '', 'uploads/tenders/5596221617221726041736.pdf', '', '1', '2024-09-11 08:02:16', '2024-09-11 08:08:06'),
(47, 'Information & Cultural Affairs', 'Quote Notice for Floral Decoration from the Bonafide and reputed agencies to decorate the statue of Mahatma Gandhi at Mayo Road for Gandhiji\'s birth anniversary', '09/09/2024', '', 'uploads/tenders/5945062847301726042035.pdf', '', '1', '2024-09-11 08:07:15', '2024-09-11 08:07:29'),
(48, 'Information & Cultural Affairs', 'Quote Notice for Floral Decoration from the Bonafide and reputed agencies to decorate the statue of Mahatma Gandhi at Gandhi Bhaban, Beliaghata, for Gandhiji\'s birth anniversary', '09/09/2024', '', 'uploads/tenders/6152380448851726042141.pdf', '', '1', '2024-09-11 08:09:01', '2024-09-11 08:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_users`
--

CREATE TABLE `wbinc_users` (
  `ID` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_email` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wbinc_users`
--

INSERT INTO `wbinc_users` (`ID`, `user_name`, `user_pass`, `user_email`, `status`, `created_date`, `updated_date`) VALUES
(1, 'WbicadAdmin', '$2y$10$i8EpiTvn8w2e1Conx2urQ.2fuLD0uq3Kk8qVqwGSnyfjqAIwGAFve', 'admin@admin.com', '1', '2024-02-22 07:06:47', '2024-05-04 07:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `wbinc_users_log`
--

CREATE TABLE `wbinc_users_log` (
  `user_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','inactive') NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wbinc_about_options`
--
ALTER TABLE `wbinc_about_options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_act_rules`
--
ALTER TABLE `wbinc_act_rules`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_archive`
--
ALTER TABLE `wbinc_archive`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_budget`
--
ALTER TABLE `wbinc_budget`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_department_heads`
--
ALTER TABLE `wbinc_department_heads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_department_officers`
--
ALTER TABLE `wbinc_department_officers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_directorates`
--
ALTER TABLE `wbinc_directorates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_directorate_office`
--
ALTER TABLE `wbinc_directorate_office`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_events`
--
ALTER TABLE `wbinc_events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_event_category`
--
ALTER TABLE `wbinc_event_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_home_banner`
--
ALTER TABLE `wbinc_home_banner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_home_options`
--
ALTER TABLE `wbinc_home_options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_institution`
--
ALTER TABLE `wbinc_institution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_notice`
--
ALTER TABLE `wbinc_notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_options`
--
ALTER TABLE `wbinc_options`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_other_officers`
--
ALTER TABLE `wbinc_other_officers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_publication`
--
ALTER TABLE `wbinc_publication`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_publication_category`
--
ALTER TABLE `wbinc_publication_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_rti`
--
ALTER TABLE `wbinc_rti`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_schemes`
--
ALTER TABLE `wbinc_schemes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_tenders`
--
ALTER TABLE `wbinc_tenders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_users`
--
ALTER TABLE `wbinc_users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wbinc_users_log`
--
ALTER TABLE `wbinc_users_log`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wbinc_about_options`
--
ALTER TABLE `wbinc_about_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wbinc_act_rules`
--
ALTER TABLE `wbinc_act_rules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wbinc_archive`
--
ALTER TABLE `wbinc_archive`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wbinc_budget`
--
ALTER TABLE `wbinc_budget`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wbinc_department_heads`
--
ALTER TABLE `wbinc_department_heads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wbinc_department_officers`
--
ALTER TABLE `wbinc_department_officers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wbinc_directorates`
--
ALTER TABLE `wbinc_directorates`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wbinc_directorate_office`
--
ALTER TABLE `wbinc_directorate_office`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `wbinc_events`
--
ALTER TABLE `wbinc_events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wbinc_event_category`
--
ALTER TABLE `wbinc_event_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wbinc_home_banner`
--
ALTER TABLE `wbinc_home_banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wbinc_home_options`
--
ALTER TABLE `wbinc_home_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wbinc_institution`
--
ALTER TABLE `wbinc_institution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wbinc_notice`
--
ALTER TABLE `wbinc_notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wbinc_options`
--
ALTER TABLE `wbinc_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wbinc_other_officers`
--
ALTER TABLE `wbinc_other_officers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `wbinc_publication`
--
ALTER TABLE `wbinc_publication`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wbinc_publication_category`
--
ALTER TABLE `wbinc_publication_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wbinc_rti`
--
ALTER TABLE `wbinc_rti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wbinc_schemes`
--
ALTER TABLE `wbinc_schemes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wbinc_tenders`
--
ALTER TABLE `wbinc_tenders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `wbinc_users`
--
ALTER TABLE `wbinc_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
