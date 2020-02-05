-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 01:57 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majles11`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `AdminFullName` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminPhone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminPassword` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdminLastLogin` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminFullName`, `AdminPhone`, `AdminPassword`, `AdminLastLogin`) VALUES
(1, 'محمدرضا اسماعیلی', '09120572107', '827ccb0eea8a706c4c34a16891f84e7b', '');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `AgentId` int(11) NOT NULL,
  `AgentFullName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AgentPhone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AgentPassword` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '827ccb0eea8a706c4c34a16891f84e7b',
  `AgentStateId` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`AgentId`, `AgentFullName`, `AgentPhone`, `AgentPassword`, `AgentStateId`) VALUES
(13, 'پشتیبان آذربایجان شرقی', '041', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(16, 'پشتیبان آذربایجان غربی', '044', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(17, 'پشتیبان اردبیل', '045', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(18, 'پشتیبان اصفهان', '031', '827ccb0eea8a706c4c34a16891f84e7b', 4),
(19, 'پشتیبان البرز', '026', '827ccb0eea8a706c4c34a16891f84e7b', 5),
(20, 'پشتیبان ایلام', '084', '827ccb0eea8a706c4c34a16891f84e7b', 6),
(21, 'پشتیبان بوشهر', '077', '827ccb0eea8a706c4c34a16891f84e7b', 7),
(22, 'پشتیبان تهران', '021', '827ccb0eea8a706c4c34a16891f84e7b', 8),
(23, 'پشتیبان چهارمحال و بختیاری', '038', '827ccb0eea8a706c4c34a16891f84e7b', 9),
(24, 'پشتیبان خراسان رضوی', '051', '827ccb0eea8a706c4c34a16891f84e7b', 11),
(25, 'پشتیبان خراسان جنوبی', '056', '827ccb0eea8a706c4c34a16891f84e7b', 10),
(26, 'پشتیبان خراسان شمالی', '058', '827ccb0eea8a706c4c34a16891f84e7b', 10),
(27, 'پشتیبان خوزستان', '061', '827ccb0eea8a706c4c34a16891f84e7b', 13),
(28, 'پشتیبان زنجان', '024', '827ccb0eea8a706c4c34a16891f84e7b', 14),
(29, 'پشتیبان سمنان', '023', '827ccb0eea8a706c4c34a16891f84e7b', 15),
(30, 'پشتیبان سیستان و بلوچستان', '054', '827ccb0eea8a706c4c34a16891f84e7b', 16),
(31, 'پشتیبان فارس', '071', '827ccb0eea8a706c4c34a16891f84e7b', 17),
(32, 'پشتیبان قم', '025', '827ccb0eea8a706c4c34a16891f84e7b', 19),
(33, 'پشتیبان قزوین', '028', '827ccb0eea8a706c4c34a16891f84e7b', 18),
(34, 'پشتیبان کردستان', '087', '827ccb0eea8a706c4c34a16891f84e7b', 20),
(35, 'پشتیبان کرمان', '034', '827ccb0eea8a706c4c34a16891f84e7b', 21),
(36, 'پشتیبان کرمانشاه', '083', '827ccb0eea8a706c4c34a16891f84e7b', 22),
(37, 'پشتیبان کهگیلویه و بویراحمد', '074', '827ccb0eea8a706c4c34a16891f84e7b', 23),
(38, 'پشتیبان گلستان', '017', '827ccb0eea8a706c4c34a16891f84e7b', 24),
(39, 'پشتیبان گیلان', '013', '827ccb0eea8a706c4c34a16891f84e7b', 25),
(40, 'پشتیبان لرستان', '066', '827ccb0eea8a706c4c34a16891f84e7b', 26),
(41, 'پشتیبان مازندران', '011', '827ccb0eea8a706c4c34a16891f84e7b', 27),
(42, 'پشتیبان مرکزی', '086', '827ccb0eea8a706c4c34a16891f84e7b', 28),
(43, 'پشتیبان هرمزگان', '076', '827ccb0eea8a706c4c34a16891f84e7b', 29),
(44, 'پشتیبان همدان', '081', '827ccb0eea8a706c4c34a16891f84e7b', 30),
(45, 'پشتیبان یزد', '035', '827ccb0eea8a706c4c34a16891f84e7b', 31),
(46, 'پشتیبان سایت اقلیت های مذهبی', '09120572107', '52883377da5367bc9205062d52c08dbc', 32);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `CandidateId` bigint(20) NOT NULL,
  `CandidateStatus` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'CandidateRegister',
  `CandidateFirstName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateLastName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateNationalCode` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidatePhone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateScore` int(11) NOT NULL DEFAULT '0',
  `CandidateRecordsScore` int(11) NOT NULL DEFAULT '0',
  `CandidateRolesScore` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '(JSON format)',
  `CandidateSignScore` int(11) NOT NULL DEFAULT '0',
  `CandidateExamResultStatus` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateStateId` int(11) NOT NULL,
  `CandidateCityId` int(11) NOT NULL,
  `CandidateConstituencyStateId` int(11) DEFAULT NULL,
  `CandidateConstituencyCityId` int(11) DEFAULT NULL,
  `CandidateElectionId` bigint(20) NOT NULL,
  `CandidatePassword` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateFatherName` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateBirthDate` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateGender` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateMaritalStatus` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateReligion` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateBornStateId` int(11) DEFAULT NULL,
  `CandidateBornCityId` int(11) DEFAULT NULL,
  `CandidateFatherBornStateId` int(11) DEFAULT NULL,
  `CandidateFatherBornCityId` int(11) DEFAULT NULL,
  `CandidateMotherBornStateId` int(11) DEFAULT NULL,
  `CandidateMotherBornCityId` int(11) DEFAULT NULL,
  `CandidateAddressStateId` int(11) DEFAULT NULL,
  `CandidateAddressCityId` int(11) DEFAULT NULL,
  `CandidateAddressPart` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateAddressCityPart` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateAddressVillage` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateAddressVillagePart` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateAddress` text COLLATE utf8mb4_unicode_ci,
  `CandidateLandLinePhone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateProfileImage` longtext COLLATE utf8mb4_unicode_ci,
  `CandidateResumeForViewStatus` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Reject',
  `CreateDateTime` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`CandidateId`, `CandidateStatus`, `CandidateFirstName`, `CandidateLastName`, `CandidateNationalCode`, `CandidatePhone`, `CandidateScore`, `CandidateRecordsScore`, `CandidateRolesScore`, `CandidateSignScore`, `CandidateExamResultStatus`, `CandidateStateId`, `CandidateCityId`, `CandidateConstituencyStateId`, `CandidateConstituencyCityId`, `CandidateElectionId`, `CandidatePassword`, `CandidateFatherName`, `CandidateBirthDate`, `CandidateGender`, `CandidateMaritalStatus`, `CandidateReligion`, `CandidateBornStateId`, `CandidateBornCityId`, `CandidateFatherBornStateId`, `CandidateFatherBornCityId`, `CandidateMotherBornStateId`, `CandidateMotherBornCityId`, `CandidateAddressStateId`, `CandidateAddressCityId`, `CandidateAddressPart`, `CandidateAddressCityPart`, `CandidateAddressVillage`, `CandidateAddressVillagePart`, `CandidateAddress`, `CandidateLandLinePhone`, `CandidateProfileImage`, `CandidateResumeForViewStatus`, `CreateDateTime`) VALUES
(52, 'CandidateAccepted', 'میثم', 'سعیدی', '0323329609', '09362118168', 25, 65, '[{"Key":"Lawmaker","Value":"4"},{"Key":"Evaluator","Value":"5"},{"Key":"Persuasive","Value":"6"},{"Key":"Link","Value":"7"},{"Key":"Moderator","Value":"8"}]', 45, 'Accepted', 8, 548, 8, 548, 59, '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(53, 'CandidateResumeMarked', 'حمید', 'حسنی', '4284861972', '09127403828', 1000000, 1000000, NULL, 1000000, NULL, 8, 548, 8, 548, 59, '1fbf965eed68cc489b46d264542e874e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(54, 'CandidateResumeMarked', 'فرید', 'دوستی', '4500767282', '09188433351', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '608fdb62993de05257849ef60d1884c2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(55, 'CandidateResumeMarked', 'علی', 'رضا زاده همدانی', '0942481526', '09153242879', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'cce76a2a39ae1438185e2e4ae8fe9b78', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(56, 'CandidateResumeMarked', 'سجاد', 'حیات الغیب', '6139972582', '09163609579', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '1aa103c9ed56eda4bf63c6d67ff203b5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(57, 'CandidateResumeMarked', 'حمید', 'پاکپور', '0533019941', '09183689021', 100000, 100000, NULL, 100000, NULL, 8, 548, 8, 548, 59, '3820229a71642ca26e46955c7a193d5c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(58, 'CandidateResumeMarked', 'عبدالحمید', 'اربابی', '5979537856', '09155453585', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '56c869169d4340279653b66ef111d504', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(62, 'CandidateResumeMarked', 'اسحق', 'شاهوزی', '0323329608', '09155477882', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'c586dbabb8a5d67805cc30334eff0edf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(63, 'CandidateResumeMarked', 'علی', 'مولوی', '0014682931', '09121674372', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'fa9f29e0beab3020d2339e44eb62a192', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(64, 'CandidateResumeMarked', 'رضا', 'فرخ شاهی نیا', '3255858356', '09188854980', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '7f9429f91b4dd780af666cac0b290e5b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(65, 'CandidateResumeMarked', 'محسن', 'زارعی', '3254952723', '09128308743', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd7bad8174b553772cda389742619b345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(66, 'CandidateResumeMarked', 'رحیم', 'هاتفی عین الدین', '1719615993', '09141305336', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2534203069b669c59a5f959fb3ac7c68', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(67, 'CandidateResumeMarked', '.', 'پورحبیبی', '512751315', '09127492261', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd164f9520a588f3a868e264f062b52b8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(68, 'CandidateResumeMarked', '.', 'شمشیربند', '744444446', '09119518776', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '77cc284e224fd1feb58177462c4265e3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(69, 'CandidateResumeMarked', '.', 'رجبیان', '535562217', '09397611400', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '0fa7c614ac3a699d34512199bc60399a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(70, 'CandidateResumeMarked', 'مجتبی', 'ذاکریان', '0651900395', '09151603380', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2bf2d5fe73e685f02ebe490c62908131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(71, 'CandidateResumeMarked', 'محمد', 'ذکاوت', '4232075496', '09125475185', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '958d045c33b0e0239190cac1dce03ac0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(72, 'CandidateResumeMarked', 'روح الله', 'خزایی', '111111171', '09109902503', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '11afa5e7e91d55bd46d2b780807382a7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(73, 'CandidateResumeMarked', 'مهدی', 'مهدوی نژاد', '4430657696', '09132539081', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'c58be7ad1bfde467792fb6b342693721', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(74, 'CandidateResumeMarked', 'سجاد', 'محمدی شمیم', '4011523240', '09188160980', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '26a28b67b58c28ed54a0a6235f265589', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(75, 'CandidateResumeMarked', '.', 'ترحمی', '444445544', '09194312245', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f73d65dba057c65860388901472bafed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(76, 'CandidateResumeMarked', 'محمد علی', 'ربیعی', '0653205961', '09151630497', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '5f8f74012bc8f623ef4a2c9976ba7de4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(77, 'CandidateResumeMarked', 'مهدی', 'متین پور', '0651949726', '09159644911', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f0cf65a06b802044096222673c1f7232', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(78, 'CandidateResumeMarked', 'علی', 'درودی', '2180736649', '09112555525', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '1780e90ee549dea28930c57b091af51c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(79, 'CandidateResumeMarked', '.', 'بنی فاطمه', '71050000', '09113753032', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2edd4649f5e41a142e3b87fa22054baf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(80, 'CandidateResumeMarked', 'محمد جواد', 'ساوری', '2110011114', '09113737308', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'c688b947094bb49b6416ff4f8ef07082', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(81, 'CandidateResumeMarked', 'رحمن', 'حاج غریبی', '5589774969', '09181710282', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '40cd2a8180dc9e83c0c1d232ea617a02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(82, 'CandidateResumeMarked', 'عبدالسعید', 'حقیقی مقدم', '4189489905', '09107701990', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3dbca97ab0b51aefe69dea4a674b1e36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(83, 'CandidateResumeMarked', 'محمد', 'خواجوی', '1841573469', '09100556207', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'e69ad8ad2be2bc9f1cd7b30f9afdc389', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(84, 'CandidateResumeMarked', '.', 'دهرابپور', '560007000', '09171411399', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '67f2b581ef4d2ee5ee2ae1e8e0b5b342', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(85, 'CandidateResumeMarked', '.فردین', 'صالحی', '4620553980', '09123519386', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '5a69a15103a885783e66909aa598c577', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(86, 'CandidateResumeMarked', 'رحمان', 'بیات', '555053555', '09124444444', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3f68547e6e356a21171ae95ff42f2f6c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(88, 'CandidateResumeMarked', 'امین', 'ملک نژاد یزدی', '0941248798', '09125471963', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '1583f18727a59afffaadaa8d62e2444f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(89, 'CandidateResumeMarked', 'عبدالله', 'مشکنانی', '600900002', '09122008734', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'fb9057b088f23f6b610ed4cf359bbd8f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(90, 'CandidateResumeMarked', 'نوید', 'قرینه', '333333373', '09166114552', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'bb6afd3b508982915ea8adbe12a3fcc3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(91, 'CandidateResumeMarked', 'محمدباقر', 'بیات', '0559861516', '09127981198', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '9355de27e9c61be3692c82f54f696cd8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(92, 'CandidateResumeMarked', 'سید عبدالله', 'رضوی', '900004010', '09122490460', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ced8cc32613a8f1b61031d1d77697f25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(93, 'CandidateResumeMarked', 'عباس', 'نداف زاده', '3000001', '09126852082', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'a92ada15b197a54e42bc71401aae92aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(94, 'CandidateResumeMarked', 'سمیه', 'گلپور', '666606366', '09126940349', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '8a0138f5fe8ff3f1e40e3c5899cc5eb8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(95, 'CandidateResumeMarked', 'سید پژمان', 'امین مدنی', '832000000', '09125706895', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'dae9bc364294e2c3e559055752602339', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(96, 'CandidateResumeMarked', 'زینب', 'وثوقی', '700000089', '09193996351', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '13375f63cfff9884ecdfded935cbc9b3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(97, 'CandidateResumeMarked', 'حبیب الله', 'گل محمدی', '0600000044', '09120272303', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '0342ce2fcd5ff947fc90c89d7fa1f5b8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(98, 'CandidateResumeMarked', 'مجید', 'دانشور', '0051434148', '09125601813', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f22ba8eb5021fbe2daba8098872ff025', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(100, 'CandidateResumeMarked', 'حجت الله', 'الماسی', '0920400000', '09183394608', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '8cdaf70db406f28807e8a835a8bf3a2c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(101, 'CandidateResumeMarked', 'سیدعلی', 'محسنیان', '0072815639', '09126408262', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2a28e9a90617e99b0872da1641ce61aa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(102, 'CandidateResumeMarked', 'منوچهر', '.', '0010100008', '09307589881', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '562816c561397335bcebf09c6a0f4f41', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(103, 'CandidateResumeMarked', 'علی اصغر', 'طیبی', '0070000700', '09121835382', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '082f7f325b684a06be80acc5028d5855', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(104, 'CandidateResumeMarked', 'سیدعباس', 'حسنی', '6479391551', '09128702186', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd3f2ee4f8d20a37d24b109572b61fec1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(105, 'CandidateResumeMarked', 'یارا', 'حاجی حسن', '0885888588', '09106702897', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '723fdb0b34b2863a12e88398d8d7017e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(106, 'CandidateResumeMarked', 'محسن', 'نیکخوی', '0400003007', '09125275001', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '1dac2211c7ee159896b5fe2a8e5f7fbf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(107, 'CandidateResumeMarked', 'داریوش', 'روحانی', '0799000000', '09121598675', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b1a7b513a1ab9e9cd5c7836e6a25c0f1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(108, 'CandidateResumeMarked', 'امیر', 'طریقت', '4723213937', '09352254149', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '6b3c30854142b1550709bfc50fa3162c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(110, 'CandidateResumeMarked', 'مسعود', 'امامی', '0040200000', '091454100000', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'da16cc28a0f70142005863f2f769b934', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(111, 'CandidateResumeMarked', 'محمدرضا', 'زین الدینی', '0008000220', '09125907617', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '67d95a741a9082a0f6f4df5549fa9803', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(112, 'CandidateResumeMarked', 'محمد', 'اکبرزاده طلوتی', '2063927995', '09355171882', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '7c59cb565f5183c24ae502587c23582d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(113, 'CandidateResumeMarked', 'محمد امین', 'سلیمی', '0310939895', '09382173443', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '461b6ee0ba5f6814dbcb0e7cdd5dc28c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(114, 'CandidateResumeMarked', 'محمد', 'ناطق گلستان', '0943383501', '09153587009', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f89acdbc8eb5299a3458d38bfb38a006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(115, 'CandidateResumeMarked', 'معصومه', 'زیبایی نژاد', '2297976127', '09127965540', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f1361734179c52a03507598529232a68', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(116, 'CandidateResumeMarked', 'امیر', 'عزیزی', '1757067851', '0910334467', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '5a5db0c0c997697a14012d0275635a8d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(117, 'CandidateResumeMarked', 'امیر', 'عزیزی', '7523953980', '09190334467', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ab3a00f8798e615aa1cbc70c199ce79b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(119, 'CandidateResumeMarked', 'مصطفی', 'رفسنجانی مقدم', '0940930919', '09354799922', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd1112be4253ab35ff995669041e5bef0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(120, 'CandidateResumeMarked', 'محمد حسن', 'آزما', '4132444473', '09125264949', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '422530fe0cf09660de4456cd089bfabd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(121, 'CandidateResumeMarked', 'عباس', 'عباس خزاعی', '2371991910', '09214344505', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '65eeb55adbaef5178ab5a41b62f7e16a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(122, 'CandidateResumeMarked', 'احمدرضا', 'اسكندري', '4911262540', '09124088218', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ef6a1f8cce52286d433474758a6e3914', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(123, 'CandidateResumeMarked', 'حمید', 'مقدم', '2060412889', '09122728708', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'bb9652d053e657db3d24b09c3f9a91ac', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(124, 'CandidateResumeMarked', 'الهی بخش', 'گوری', '3701230420', '09151982541', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '7621920f3e45bafd330e8e2c5718f290', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(125, 'CandidateResumeMarked', 'سمیه', 'کاظمیان', '0930842618', '09123935271', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2a00b5865e3dc3c8310e986cf72a5e7a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(126, 'CandidateResumeMarked', 'مریم', 'کاکاوندی', '3258481857', '09124038843', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '8bb9471daa28fd8ec6158de407923c74', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(127, 'CandidateResumeMarked', 'سیدحسین', 'ساداتی', '5258888738', '09155453029', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f686b98f10af35ce21d751e070a12c4b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(128, 'CandidateResumeMarked', 'محمداکرم', 'هودیانی', '3591466141', '09151471462', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '76d291a0afbf8fbd7195fadec4bd63e3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(129, 'CandidateResumeMarked', 'احمد', 'تقوائی نجیب', '0064677877', '09122177150', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '40db74c10bf74a00ae13847288896419', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(130, 'CandidateResumeMarked', 'محسن', 'حق شناس', '4320692578', '09123823875', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '7698127ea90bb40bc8af891a6644ffae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(131, 'CandidateResumeMarked', 'حمیدرضا', 'مهدوی ارفع', '0057522121', '09054101823', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '123cc3019df27d7fd80cf5fd4071eaa7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(132, 'CandidateResumeMarked', 'عیسی', 'زارعی', '3422119851', '09102149780', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '96755ccc5ebfd0f863460ea16379b906', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(133, 'CandidateResumeMarked', 'محمد سعید', 'مفیدی', '0067243053', '09122406484', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd5586a33c964907130ad06cf2ea8fb50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(134, 'CandidateResumeMarked', 'رضی', 'افلاطونی', '4321335701', '09123813190', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '790e59f9e478d240fc5144bd00f8d482', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(135, 'CandidateResumeMarked', 'فرشاد', 'فرشاد ملکانی', '0070650640', '0070650640', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd9479a87cef8b0b277b656ee9455e3c1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(136, 'CandidateResumeMarked', 'امیرموسی', 'زارعی', '3421853551', '09177657943', 0, 0, NULL, 0, NULL, 29, 876, 29, 876, 197, '98acb1363416f5217116c8aa97156042', 'غلام', '1362/04/20', 'Male', 'Married', 'IslamShia', 29, 876, 13, 639, 29, 876, 29, 876, 'مرکزی', 'میناب', '', '', 'بلوار دانشگاه کوچه ۳۷', '07642282795', NULL, 'Reject', '1398/08/20 10:00:00'),
(138, 'CandidateResumeMarked', 'محسن', 'ستیز نارویی', '3672250562', '009155473987', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '290da083c14fa41f426456bd20fba47a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(139, 'CandidateResumeMarked', 'علی', 'کریمی', '4939567672', '09149317757', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '878693205b57360232292cf1f9340754', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(140, 'CandidateResumeMarked', 'صادق', 'خانی علی اکبری', '3252261863', '09128947974', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2b192a78326f009de3cc1c000127e0f4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(141, 'CandidateResumeMarked', 'امیر', 'جعفرپور', '0940761262', '09158040849', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '5c5570dd7de48032c57e2ca9b1ad59b7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(142, 'CandidateResumeMarked', 'حسین', 'رمضانی', '1292650834', '09131653476', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'a8c9627dfba4469b924fa28b3e674a9a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(143, 'CandidateResumeMarked', 'سید آرش', 'وکیلیان', '0070936420', '09192001994', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '87da5940ba85a6698165b72c17371038', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(144, 'CandidateResumeMarked', 'علی', 'رویگر', '3051840531', '09133921120', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '0dc06a374e36c56fda7680a7d599a4c5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(145, 'CandidateResumeMarked', 'سید مرتضی', 'سید مهدی جاسبی', '0056721341', '09123061148', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'c453c0e7d6015b2f46eca5249bc7e3b0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(146, 'CandidateResumeMarked', 'معصومه', 'حاج حسینی', '0066899532', '09123141760', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '12927608f4520dde68bf7183b6f56570', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(147, 'CandidateResumeMarked', 'سیاوش', 'فتح الهی دهکردی', '3934545947', '09124891075', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '486f0d3282f3494195194ee0d1c7940f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(148, 'CandidateResumeMarked', 'مسعود', 'حسنی', '1755825153', '09128578266', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '30ec517217d2a842289302fb681fccd9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(149, 'CandidateResumeMarked', 'محمد', 'امین', '3256290711', '09124107419', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b227d31b54253c8a2dd0a4e7baa2610f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(150, 'CandidateResumeMarked', 'احمد', 'توکلی راد', '0939351013', '09128040460', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3246fccaed2140aa771f9f74bf5bfbb3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(151, 'CandidateResumeMarked', 'حجت', 'سلطانی زرندی', '2991591579', '09137566421', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'efcfdac5376eadcb53c3bdaeea07b62a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(152, 'CandidateResumeMarked', 'ثمانه', 'یزدانی', '0320189813', '09122089646', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '9466f528572cb048bfd1fd34558fb9ab', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(153, 'CandidateResumeMarked', 'محمد', 'روزبهانی', '0386260087', '09192510191', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3b1dd6fe4976e7ffaff00f8cf1cd00e6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(155, 'CandidateResumeMarked', 'حسین', 'محسنی', '0078775515', '09127245387', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b83f784846856d503691d3c38d5935db', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(157, 'CandidateResumeMarked', 'علیرضا', 'آقاخانی آتباتان', '1718205457', '09144318834', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '283d0d997de84f77d50d990c35e29d85', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(158, 'CandidateResumeMarked', 'علیرضا', 'سعیدی', '0451612124', '09123903504', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3dc26bd7a5c15dc17e2840811fff8e34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(159, 'CandidateResumeMarked', 'سمیه', 'سلگی', '3962105281', '09192501944', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '34b8dfb5b13edf31f18e795357e3274c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(160, 'CandidateResumeMarked', 'محمدحسن', 'حسین زاده', '2121547193', '09122592554', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '83fc178580eaad957333b73705e44135', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(161, 'CandidateResumeMarked', 'کامل', 'داودی', '2872045651', '09120930535', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f3e3352ffd1d320f2f0fbcb1754a09f3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(163, 'CandidateResumeMarked', 'سیدیزدان', 'حبیبی', '3240786370', '09192509135', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '938373fafc63f934e342683da057c670', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(164, 'CandidateResumeMarked', 'علی', 'محمودی', '5197886099', '09144274330', 0, 0, NULL, 0, NULL, 1, 453, 1, 453, 13, 'deddace15161c91670e4df0362dd1cae', 'گلمحمد', '1362/03/15', 'Male', 'Married', 'IslamShia', 1, 453, 1, 444, 1, 453, 1, 453, 'مرکزی', 'کلیبر', '', '', 'کلیبر روستای یوزبند', '04144435295', NULL, 'Reject', '1398/08/20 10:00:00'),
(165, 'CandidateResumeMarked', 'روح اله', 'اخوان', '2949482929', '09126880541', 0, 0, NULL, 0, NULL, 2, 479, 2, 479, 27, '4f350cdf76a49b7500e4fdb534cd5c8d', 'عبداله', '1358/06/28', 'Male', 'Married', 'IslamShia', 2, 479, 2, 479, 2, 479, 8, 548, 'مرکزی', 'تهران', '', '', 'خانی آباد', '88533333', NULL, 'Reject', '1398/08/20 10:00:00'),
(166, 'CandidateResumeMarked', 'محمدتقی', 'ایرانی', '4070258183', '09126260583', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '74e8d85f6c60ff0debfede3d6868c2cb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(167, 'CandidateResumeMarked', 'محمد', 'فتخی', '0421105003', '09124922921', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '654356032815c88bc60ae9ea6075b842', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(168, 'CandidateResumeMarked', 'فتح الله', 'ملکی', '3931453340', '09124450984', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '4891dea8395ed943f1717544ef1379c1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(169, 'CandidateResumeMarked', 'مهین', 'مطری زاده', '1818910179', '09122399726', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3f940b1220cedf6a9ed4270a0de23bd9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(170, 'CandidateResumeMarked', 'محمد مهدی', 'طاهری', '0453647073', '09126065378', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '47e5be42fd6af5d4d663d4f35b5269da', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(173, 'CandidateResumeMarked', 'عبدالمطلب', 'آریانسب', '1753692466', '09058259220', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '75106d6d6b9cc443f50ba07079c7ef49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(174, 'CandidateResumeMarked', 'حسین', 'خسروی', '3961910944', '09188527990', 0, 0, NULL, 0, NULL, 30, 887, 30, 887, 203, 'ed9651895a32c73c8a98f0887f0e54fb', 'محمد حسن', '1362/11/07', 'Male', 'Single', 'IslamShia', 30, 887, 30, 887, 30, 887, 30, 887, 'مرکزی', 'نهاوند', '', '', 'نهاوند شهرک طالقانی', '00', NULL, 'Reject', '1398/08/20 10:00:00'),
(175, 'CandidateResumeMarked', 'مهیار', 'خادم', '4910903305', '09125379463', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2598f22267cc02108a42c0eb5a7efa38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(176, 'CandidateResumeMarked', 'اسماعیل', 'بلعیده ای', '5259728068', '09155451225', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '5a1f64bce576d7155edb8a9c930fd91d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(177, 'CandidateResumeMarked', 'بابک', 'افقهی', '0532332997', '09122992349', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '4ac7e9a9a888f878b4c0da38d9256b6a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(178, 'CandidateResumeMarked', 'مجید', 'اصغرزاده', '2140470176', '09199116717', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd8b3ad46fe387b8222184c64a41b0faa', 'علی اصغر', '1349/07/02', 'Male', 'Married', 'IslamShia', 27, 834, 27, 834, 27, 834, 8, 548, 'منطقه ۴', 'تهران', '', '', 'تهرانپارس .بلوار پروین .میدان پروین .خ خیری .ک حق خواه پ ۱۶', '02177874172', NULL, 'Reject', '1398/08/20 10:00:00'),
(179, 'CandidateResumeMarked', 'سيدعليرضا', 'سيدوكيلي', '0071234624', '09123750065', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'c359f7f53bcadce2b0422c51d8d921b4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(180, 'CandidateResumeMarked', 'احمد', 'حقی', '4072411531', '09169691726', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '686d431dabd4237302646d938132eae3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(181, 'CandidateResumeMarked', 'علیمردانی', 'پوریا علیمردانی', '0060827424', '09122371107', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '823d13e0a620389a353bb56847df8733', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(182, 'CandidateResumeMarked', 'میثم', 'اشتاد', '3875165241', '09188152341', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b4ce0d6a2556bb43f10572475b3084c8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(183, 'CandidateResumeMarked', 'علي', 'كارگران', '4569514669', '09125320291', 0, 0, NULL, 0, NULL, 15, 664, 15, 664, 106, '7e50dbad31ce8a8e7489527d029f0c06', 'قدرت', '01/01/1360', 'Male', 'Married', 'IslamShia', 15, 664, 15, 664, 15, 664, 15, 664, 'مركزي', 'سمنان', '', '', 'بلوار شهيد نوروزي - خيابان ماندگار - 125', '02333280020', NULL, 'Reject', '1398/08/20 10:00:00'),
(184, 'CandidateResumeMarked', 'علی باقر', 'طاهری نیا', '4189035246', '09128587052', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '6d320c63845958edac0e3cd10410938d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(185, 'CandidateResumeMarked', 'مهدي', 'پورحجت', '4520082439', '09226879695', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '5f2239b0f2f5e217b7a9d1befac4563c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(186, 'CandidateResumeMarked', 'قاسم', 'نوهوای', '3651304906', '09152706587', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'd081a06e7e9e5e0339adee2098878e7f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(187, 'CandidateResumeMarked', 'علی', 'مهمدانی', '3580091174', '09159981400', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '8dfe4ca516a78ebd46f0a568376e2056', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(188, 'CandidateResumeMarked', 'علیرضا', 'قربانی', '4591184005', '09120732411', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '51aafbdd52746e8f33d08d8935de9fd6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 10:00:00'),
(190, 'CandidateResumeMarked', 'مصطفی', 'صفاری زاده', '3051851663', '09193593573', 0, 0, NULL, 0, NULL, 21, 755, 21, 755, 141, 'd9ac519af644abd5bfad1cde7eded94a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/19 19:54:30'),
(191, 'CandidateResumeMarked', 'حبیب', 'کراری', '0069162700', '09981065871', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ccf4e8d0ffb0e1a9fb65f71b82e09037', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 11:04:05'),
(192, 'CandidateResumeMarked', 'اعظم', 'امانی', '0680336273', '09354434832', 0, 0, NULL, 0, NULL, 12, 619, 12, 619, 85, '65c09bf7114a2bb4feb27c582aa81c60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/20 22:30:17'),
(193, 'CandidateResumeMarked', 'مهران', 'ابراهیمی زاده', '2992552275', '09138449152', 0, 0, NULL, 0, NULL, 21, 762, 21, 762, 145, '3f0c08e4a9e80759e286cf362ddc3e9c', 'علی', '1352/05/21', 'Male', 'Married', 'IslamShia', 21, 762, 21, 762, 21, 762, 21, 762, 'مرکزی کرمان', 'شهرکرمان', '', '', 'بلوارجمهوری اسلامی شهرک اکباتان بلوک bتربیت بدنی طبقه 2 واحد6', '03432154215', NULL, 'Reject', '1398/08/21 08:31:59'),
(194, 'CandidateResumeMarked', 'فاطمه', 'یزدانپور کیکانلو', '0750192801', '09035940683', 0, 0, NULL, 0, NULL, 12, 620, 12, 620, 85, '23e03af48205a2fa61b27c21aad89f03', 'محمد تقی', '1380/11/16', 'Female', 'Single', 'IslamShia', 12, 620, 12, 620, 12, 619, 12, 620, 'گرمه', 'رباط قره بیل', '', '', 'رباط قره بیل،کوچه لاله،پلاک۱۰', '09915001506', NULL, 'Reject', '1398/08/21 19:20:34'),
(195, 'CandidateResumeMarked', 'مائده', 'غفاری نژاد', '2889786455', '09199642183', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b6ec89ed6b1e0f8b8905f0468791b87b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/21 22:32:43'),
(196, 'CandidateResumeMarked', 'سلمان', 'عامری', '4591364828', '09359060226', 0, 0, NULL, 0, NULL, 15, 664, 15, 664, 106, '47fa917deb23f7781cd07f8d84aae414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/21 22:45:02'),
(200, 'CandidateResumeMarked', 'امیرعلی', 'زارعی', '1719237735', '09144448487', 0, 0, NULL, 0, NULL, 1, 448, 1, 448, 10, '2a3ca82e290cf073b704d8f12fce33fa', 'اورجعلی', '1360/02/02', 'Male', 'Married', 'IslamShia', 1, 446, 1, 446, 2, 472, 1, 448, 'تبریز', 'تبریز', '', '', 'نصف راه مجتمع مسکونی شهید چمران بلوک 25', '04134403792', NULL, 'Reject', '1398/08/22 18:14:25'),
(201, 'CandidateResumeMarked', 'سید حسین', 'رضوی پور', '2200688741', '09127211619', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'efeb2e458413cc73a4c5d00c127e430c', 'سید مهدی', '1363/05/30', 'Male', 'Married', 'IslamShia', 27, 853, 27, 853, 27, 854, 8, 548, 'مرکزی', 'تهران', '', '', 'طرشت، خیابان بایندریها، بن بست دهبان پلاک 12', '66030727', NULL, 'Reject', '1398/08/23 09:11:18'),
(202, 'CandidateResumeMarked', 'سعیدرضا', 'فرزانه', '0075639483', '09127253352', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '556fc325974713306bfbfd2b2d0df8c1', 'اسداله', '25/04/1363', 'Male', 'Married', 'IslamShia', 8, 548, 4, 510, 4, 510, 8, 548, 'تهران', 'تهران', '', '', 'خ دماوند مسیل جاجرود  شورا 145', '02183532135', NULL, 'Reject', '1398/08/23 11:22:25'),
(203, 'CandidateResumeMarked', 'محمد', 'حیاتی', '4549863234', '09188426063', 0, 0, NULL, 0, NULL, 26, 826, 26, 826, 176, '73c6e568ad033c2b4c9b350a5d785c4b', 'احمد', '1362/10/11', 'Male', 'Married', 'IslamShia', 6, 535, 6, 535, 6, 535, 26, 826, 'مرکزی', 'خرم آباد', '', '', 'خ شصت متری, خ گلشن ۳, کوچه آسمان ساختمان آرتین, طبقه ۵', '06633120066', NULL, 'Reject', '1398/08/23 15:49:11'),
(204, 'CandidateResumeMarked', 'وحید', 'مقیمی', '2282544013', '09364523444', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, 'd6373095830124bc6ea3ff43e7183414', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/23 15:54:54'),
(205, 'CandidateResumeMarked', 'علی', 'جدی', '0828718873', '09155514548', 0, 0, NULL, 0, NULL, 12, 624, 12, 624, 86, '1076712e0de4bd8e3f3bd04bd025bb50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/24 11:24:41'),
(206, 'CandidateResumeMarked', 'علیرضا', 'شیخی', '0070238146', '09124574182', 0, 0, NULL, 0, NULL, 8, 557, 8, 557, 62, 'aa2173373fbcee3675b391d8d3457f58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/24 17:10:02'),
(207, 'CandidateResumeMarked', 'آرش', 'منوچهری', '3240283328', '09333400990', 0, 0, NULL, 0, NULL, 29, 873, 29, 873, 196, '0335c7018e68acab7964dfaa358b7b50', 'غلامرضا', '1369/01/08', 'Male', 'Single', 'IslamShia', 22, 781, 22, 781, 22, 781, 29, 873, 'چارک', 'کیش', '', '', 'روبروی مرکز خرید دامون طبقه فوقانی حسینیه قرآن و عترت', '07644467144', NULL, 'Reject', '1398/08/24 18:43:25'),
(208, 'CandidateResumeMarked', 'علیرضا', 'تهرانی', '4890140638', '09215453932', 0, 0, NULL, 0, NULL, 25, 816, 25, 816, 169, '2bd83ac1c77f129578ee0a29be651870', 'سعید', '1366/10/15', 'Male', 'Single', 'IslamShia', 8, 548, 31, 898, 8, 548, 25, 816, 'بخش شماره 1', 'شهر شماره 1', '', '', 'آدرس شماره 1', '02177435897', NULL, 'Reject', '1398/08/25 08:12:23'),
(209, 'CandidateResumeMarked', 'روح اله', 'جمشیدی', '4999557861', '09122395589', 0, 0, NULL, 0, NULL, 27, 839, 27, 839, 183, '20d82cae1e4bcd36e4aed9bc5f431226', 'قدرت اله', '1359/11/22', 'Male', 'Married', 'IslamShia', 27, 839, 27, 839, 27, 839, 8, 548, 'شمیران', 'تهران', '', '', 'بلوار ارتش شهرک شهید محلاتی', '02122490354', NULL, 'Reject', '1398/08/25 08:46:09'),
(211, 'CandidateResumeMarked', 'الیاس', 'ظریف همراهیان محمدی', '0940035782', '09152459617', 0, 0, NULL, 0, NULL, 11, 612, 11, 612, 82, '70125c7a8a4b24fb06e89227432767d5', 'غلامحسین', '1363/03/18', 'Male', 'Married', 'IslamShia', 11, 612, 10, 582, 11, 612, 11, 612, 'مرکزی', 'مشهد', '', '', 'بلوار هدایت 9 پلاک ۲۵', '05137345560', NULL, 'Reject', '1398/08/25 12:41:19'),
(212, 'CandidateResumeMarked', 'امیر', 'ذاکری', '0731567544', '09034628813', 0, 0, NULL, 0, NULL, 11, 584, 11, 584, 72, '67ef480766e8202dfebb77dad8fd951f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/08/25 15:16:44'),
(213, 'CandidateResumeMarked', 'امیر', 'زمردی', '4133225945', '09360980956', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f9941cdedf458e6120c6772ff09c5b84', 'محمدرضا', '1365/01/22', 'Male', 'Married', 'IslamShia', 26, 824, 26, 826, 26, 824, 8, 548, 'شمیرانات', 'تهران', '', '', 'خیابان شریعتی دوراهی قلهک خیابان یخچال روبروی پارک موزه آب پلاک 86', '02122606252', NULL, 'Reject', '1398/09/03 16:46:45'),
(216, 'CandidateResumeMarked', 'محمدباقر', 'رستمي', '0680289593', '09025850091', 0, 0, NULL, 0, NULL, 12, 617, 12, 617, 85, '9a5fc5e7b9091f3ddaca9bb7eb1656d5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/05 09:54:52'),
(217, 'CandidateResumeMarked', 'محمد جواد', 'کاظمی', '2291853465', '09107002869', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, '1f0a97dd998e28bd292d22b04128452c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/05 19:45:57'),
(220, 'CandidateResumeMarked', 'امیر', 'محمدی راستین', '4011538523', '09185004818', 0, 0, NULL, 0, NULL, 30, 888, 30, 888, 204, '78aaf5d2c374b8d06782e3e2379f1aa5', 'حاجعلی', '1361/09/18', 'Male', 'Married', 'IslamShia', 30, 888, 30, 881, 30, 881, 30, 888, 'مرکزی', 'همدان', '', '', 'شهرک مدرس_ خیابان عدالت_ کوچه طلوع بهمن', '08138292773', NULL, 'Reject', '1398/09/06 10:32:42'),
(222, 'CandidateResumeMarked', 'مایکل', 'مقدم', '0014977958', '09123333807', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '6e945967da3a3f3bb3d158fae9eecba3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/06 22:44:54'),
(223, 'CandidateResumeMarked', 'علیرضا', 'عباس نیا', '0902290738', '09127221365', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'a7d559c2f0fa3e218dc3daa08a2b7b98', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/07 17:38:10'),
(224, 'CandidateResumeMarked', 'رضا', 'عباسی', '0061467499', '09102353523', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'dc8805489bf35756774c5d120ad310c4', 'رمضان', '1354/12/5', 'Male', 'Married', 'IslamShia', 8, 548, 27, 853, 27, 854, 8, 548, 'مرکزی', 'تهران', '', '', 'خیابان قزوین، کوچه شهید قاقازانی، بن‌بست سالم، پلاک۵، واحد٧', '02155737003', NULL, 'Reject', '1398/09/07 20:14:00'),
(225, 'CandidateResumeMarked', 'مهران', 'فتح اله زاده اردبیلی', '0074516231', '09393739049', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '1495967b12904592e0f23629df691b9d', 'قربانعلی', '1363/09/28', 'Male', 'Married', 'IslamShia', 8, 548, 3, 482, 3, 482, 8, 548, 'تهران', 'تهران', '', '', 'خیابان شریعتی، نرسیده به سید خندان، خیابان اشراقی، پلاک 23، واحد4', '88517944', NULL, 'Reject', '1398/09/07 21:31:30'),
(226, 'CandidateResumeMarked', 'محمدطیب', 'صادق', '6529963324', '09190041002', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ec161efe71df3b314b7dfce4c0d1f603', 'حبیب', '1364/06/27', 'Male', 'Married', 'IslamShia', 10, 576, 10, 576, 10, 576, 8, 548, 'تهران', 'تهران', '', '', 'بلوار شاهد خیابان 182شرقی خیابان معینی نژاد کوچه نصیری کوچه امامت پلاک 30واحد 3', '02177335638', NULL, 'Reject', '1398/09/07 22:30:31'),
(227, 'CandidateResumeMarked', 'علی', 'زارعی', '4031503431', '09183110801', 0, 0, NULL, 0, NULL, 30, 883, 30, 883, 199, '0cf8bb75e8b7e9bc20d823fe0700b349', 'حبیب اله', '1354/06/03', 'Male', 'Married', 'IslamShia', 30, 883, 30, 883, 30, 883, 30, 882, 'مرکزی', 'بهار', '', 'علیصدر', 'بهار شهرک فرهنگیان', '08134226571', NULL, 'Reject', '1398/09/07 22:36:13');
INSERT INTO `candidate` (`CandidateId`, `CandidateStatus`, `CandidateFirstName`, `CandidateLastName`, `CandidateNationalCode`, `CandidatePhone`, `CandidateScore`, `CandidateRecordsScore`, `CandidateRolesScore`, `CandidateSignScore`, `CandidateExamResultStatus`, `CandidateStateId`, `CandidateCityId`, `CandidateConstituencyStateId`, `CandidateConstituencyCityId`, `CandidateElectionId`, `CandidatePassword`, `CandidateFatherName`, `CandidateBirthDate`, `CandidateGender`, `CandidateMaritalStatus`, `CandidateReligion`, `CandidateBornStateId`, `CandidateBornCityId`, `CandidateFatherBornStateId`, `CandidateFatherBornCityId`, `CandidateMotherBornStateId`, `CandidateMotherBornCityId`, `CandidateAddressStateId`, `CandidateAddressCityId`, `CandidateAddressPart`, `CandidateAddressCityPart`, `CandidateAddressVillage`, `CandidateAddressVillagePart`, `CandidateAddress`, `CandidateLandLinePhone`, `CandidateProfileImage`, `CandidateResumeForViewStatus`, `CreateDateTime`) VALUES
(228, 'CandidateResumeMarked', 'بهنام', 'ملکی', '5089552622', '09123002654', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'dc0b4225df7822499d167f8e0dee43fd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/07 23:41:54'),
(229, 'CandidateResumeMarked', 'عبدالرحمن', 'معاشر', '2298643202', '09123069000', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2813b7875f3dce1a26034b3a61dd6683', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/08 06:19:44'),
(230, 'CandidateResumeMarked', 'سهيل', 'صيادي', '2219161811', '09391557689', 0, 0, NULL, 0, NULL, 27, 841, 27, 841, 184, '026293621e38787e184d1d37e12210ce', 'علی اکبر', '1361/01/04', 'Male', 'Married', 'IslamShia', 27, 841, 5, 521, 27, 841, 8, 548, 'منطقه 5', 'Tehran', '', '', 'فلکه دوم شهران-بلوار شهران- خیابان ششم غربی-پلاک 7', '02144358458', NULL, 'Reject', '1398/09/08 10:59:30'),
(231, 'CandidateResumeMarked', 'حسن', 'بلندیان', '4479773908', '09120890086', 0, 0, NULL, 0, NULL, 31, 898, 31, 898, 208, 'b6ace76e288c8f6371c221740643e005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/08 11:19:10'),
(232, 'CandidateResumeMarked', 'هادی', 'سعید', '0011778121', '09192228388', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'df67765d858e4f2dc2d8d073d6877686', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/08 14:53:58'),
(233, 'CandidateResumeMarked', 'فرشاد', 'فرهادی', '0533417368', '08123784193', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3c9483efc27f18094fd5497d289717cd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/08 15:05:40'),
(234, 'CandidateResumeMarked', 'سلمان', 'اسکندری', '4622551071', '09121486984', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'fd7a1725cc45b06bcc4e61e38fbcea8a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/08 19:01:05'),
(235, 'CandidateResumeMarked', 'اسداله', 'اسداله اسدبیگی', '3979525171', '09125240748', 0, 0, NULL, 0, NULL, 5, 524, 5, 524, 51, 'ee8c33a7da4fa145237b4148aabc7e83', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/08 19:37:04'),
(236, 'CandidateResumeMarked', 'مهدی', 'والوریان', '0069106223', '09121717398', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '125ed2064cdf7f9e74457a74abe1b95f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/09 02:12:34'),
(237, 'CandidateResumeMarked', 'امین', 'علی اکبری', '1219917540', '09124759123', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'f1181adbb3c78665a6ffda89b753e906', 'مرتضی', '1367/01/01', 'Male', 'Single', 'IslamShia', 4, 509, 4, 509, 4, 509, 8, 548, '1', 'تهران', '', '', 'خیابان حافظ', '02177711199', NULL, 'Reject', '1398/09/09 10:20:49'),
(238, 'CandidateResumeMarked', 'مصطفی', 'آخوندی', '5429956813', '09139135868', 0, 0, NULL, 0, NULL, 21, 755, 21, 755, 141, '492d4caa0526c0130c689b9048f2c821', 'علی', '1359/02/18', 'Male', 'Married', 'IslamShia', 21, 755, 21, 755, 21, 755, 31, 898, 'مرکزی', 'یزد', '', '', 'یزد', '03538225172', NULL, 'Reject', '1398/09/09 10:32:35'),
(239, 'CandidateResumeMarked', 'افشین', 'حقی کنگرشاهی', '4132279367', '09127749390', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'bbbaf9a1642dc0f49ae1dc2b6096c1a4', 'حسین رضا', '1360/12/10', 'Male', 'Married', 'IslamShia', 26, 824, 22, 783, 26, 824, 8, 548, 'تهران', 'تهران', '', '', 'خیابان شریعتی روبروی مترو قلهک کوچه سجاد بن بست سلیمی پلاک۳ واحد۵', '02122642111', NULL, 'Reject', '1398/09/09 11:19:11'),
(240, 'CandidateResumeMarked', 'حمید', 'حبیبی', '0076515321', '09128048779', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'a2526f75761e0d07cd330aadb88f69ef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/09 13:01:02'),
(241, 'CandidateResumeMarked', 'سیدحسین', 'تقی نظری', '0070606676', '09122892290', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '09de123959dc8666dbc644fcffdffc2b', 'سیداحمد', '1353/03/25', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 8, 548, 8, 548, 'شهران', 'تهران', '', '', 'شهران شمالی - روبروی نیروگاه - مجتمع مسکونی شهران', '44364173', NULL, 'Reject', '1398/09/09 16:59:28'),
(243, 'CandidateResumeMarked', 'زکی', 'زحمتکش', '2722647117', '09112420573', 0, 0, NULL, 0, NULL, 25, 810, 25, 810, 165, '8e675b4b5b46da9646afcbf29f716dc2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 10:46:18'),
(244, 'CandidateAccepted', 'محمدرضا', 'اسماعیلی', '4900354376', '09120572107', 25, 45, '[{"Key":"Link","Value":"70.63"},{"Key":"Evaluator","Value":"71.93"},{"Key":"Lawmaker","Value":"69.47"},{"Key":"Persuasive","Value":"69.25"},{"Key":"Moderator","Value":"76"}]', 35, 'Accepted', 3, 482, 3, 482, 30, '6a5c5436c458438a9f01a3ef4aa1c6f7', 'صابر', '1352/12/02', 'Male', 'Married', 'IslamShia', 16, 673, 14, 548, 8, 548, 3, 482, 'تهران', 'تهران', '', '', 'تهران خیابان جمالی', '02165228155', 'http://localhost:8080/Majless/uploads/113fff7986ac4e35d3b90d42480d797e_1.jpg', 'Accept', '1398/09/10 10:54:16'),
(246, 'CandidateResumeMarked', 'جلیل', 'محبی', '4280838488', '09126344280', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b263086c486125d9d54fea630858f5e2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 11:34:25'),
(247, 'CandidateResumeMarked', 'روح الله', 'ناصرزاده', '0058793798', '09122140028', 0, 0, NULL, 0, NULL, 6, 527, 6, 527, 52, 'dbc9ea1868c0edd81e802fecee1fe6fa', 'صیدکریم', '1357/11/20', 'Male', 'Married', 'IslamShia', 8, 548, 6, 530, 6, 530, 6, 527, 'مرکزی', 'ایلام', '', '', 'جانبازان بلوار صیاد کوچه ستایش', '084333542', NULL, 'Reject', '1398/09/10 11:35:17'),
(248, 'CandidateResumeMarked', 'سید احسان', 'عسکری', '4230581009', '09177414890', 0, 0, NULL, 0, NULL, 23, 785, 23, 785, 153, 'c75a39eb52bc764692356bb11b386c4b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 12:07:02'),
(249, 'CandidateResumeMarked', 'مهرداد', 'عظیمی', '1754898882', '09183411217', 0, 0, NULL, 0, NULL, 6, 527, 6, 527, 52, 'cdd4609cf9995b6d597f58ddae024b35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 12:24:41'),
(250, 'CandidateResumeMarked', 'هانیه', 'حسین', '0480262322', '09123739682', 0, 0, NULL, 0, NULL, 8, 549, 8, 549, 59, '6babc3f66def78dd0c279c413e784a39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 12:34:55'),
(251, 'CandidateResumeMarked', 'مازیار', 'کامیاب حصاری', '0063722097', '09128442852', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '1160abe9c7051495ff6436d1bab628e3', 'کامران', '1363/01/01', 'Male', 'Single', 'IslamShia', 8, 548, 11, 584, 8, 548, 8, 550, 'شمیرانات', 'تهران', '', '', 'محمودیه خیابان مهر پلاک۳۱', '26231741', NULL, 'Reject', '1398/09/10 13:18:37'),
(252, 'CandidateResumeMarked', 'اردوان', 'پروین', '2390973329', '09171224532', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b23c7462085a03fcd9ad48295f10724c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 13:27:34'),
(253, 'CandidateResumeMarked', 'محمد حسین', 'نادری', '0075219085', '09124088379', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'acfe2aed1835a0c66387bd6063bdbee7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 13:34:54'),
(254, 'CandidateResumeMarked', 'امین', 'احمدی', '4189670022', '09127913108', 0, 0, NULL, 0, NULL, 26, 826, 26, 826, 176, 'b2fc6f87bf611bbf40bb7b7d287150a4', 'حاتم', '1358/06/12', 'Male', 'Married', 'IslamShia', 26, 826, 26, 829, 26, 829, 26, 826, 'مرکزی', 'خرم آباد', '', '', 'خرم آباد خیابان جلال آل احمد جنب چشم پزشکی', '06633241010', NULL, 'Reject', '1398/09/10 14:18:05'),
(255, 'CandidateResumeMarked', 'حسین', 'نوری', '4888997934', '09128152214', 0, 0, NULL, 0, NULL, 24, 803, 24, 803, 161, '8892b696d43559f4cec6e45461b9845b', 'مهدی', '1362/06/30', 'Male', 'Married', 'IslamShia', 24, 803, 24, 803, 24, 803, 8, 548, 'منطقه 17', 'تهران', '', '', 'تهران، منطقه 17، فلاح،خیابان آقاجانی،کوچه مسجد جامع ابوذر،کوچه شهید برادران اکبری،پلاک 34، واحد 1', '02155137871', NULL, 'Reject', '1398/09/10 17:57:26'),
(256, 'CandidateResumeMarked', 'سید نادر', 'موسوی', '4669270141', '09139825006', 0, 0, NULL, 0, NULL, 9, 572, 9, 572, 67, '26b7e18afd14a1bef2fdf4fd711908d9', 'سید نصیر', '1355/02/05', 'Male', 'Married', 'IslamShia', 9, 572, 9, 572, 9, 572, 9, 572, 'مرکزی', 'لردگان', '', '', 'لردگان', '0383', NULL, 'Reject', '1398/09/10 17:59:06'),
(257, 'CandidateResumeMarked', 'حسن', 'محجوب', '1063891361', '9‌153525980', 0, 0, NULL, 0, NULL, 11, 614, 11, 614, 83, 'c37067db6db354a94ed4b02c3c64f50c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 22:17:08'),
(258, 'CandidateResumeMarked', 'سعید', 'باقری', '3801772977', '09188732137', 0, 0, NULL, 0, NULL, 30, 888, 30, 888, 204, '56e49bf46f20ea6e7c1fa329c4b7c35a', 'هادی', '1366/06/01', 'Male', 'Married', 'IslamShia', 20, 742, 20, 742, 20, 742, 30, 888, 'همدان', 'همدان', '', '', 'همدان شهرک مدرس کوچه کوثر ۱ پلاک ۸', '08138290505', NULL, 'Reject', '1398/09/10 22:46:17'),
(259, 'CandidateResumeMarked', 'کامران', 'فولادوند', '4072398111', '09122159586', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'b5c5f8cf2c4eb100cfe937b1ee8e4d99', 'جمشید', '1360/03/16', 'Male', 'Married', 'IslamShia', 8, 548, 26, 829, 26, 829, 8, 548, 'مرکزی', 'تهران', '', '', 'سازمان برنامه شمالی', '02144444444', NULL, 'Reject', '1398/09/10 22:52:46'),
(260, 'CandidateResumeMarked', 'علی', 'شیرین زاد', '0056895933', '09121728158', 0, 0, NULL, 0, NULL, 5, 524, 5, 524, 51, '05fd31b0f496236480fbbe1e8773b2e7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/10 23:14:52'),
(261, 'CandidateResumeMarked', 'ابراهیم', 'صیدی پیری', '4188953667', '09127015157', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '7737b1de95adcf597ec5f9c845a3d124', 'علی رحم', '1353/03/04', 'Male', 'Married', 'IslamShia', 26, 829, 26, 829, 26, 829, 8, 548, 'جنت اباد شمالی', 'تهران', '', '', 'جنت اباد شمالی-خیابان علامه طباطبایی-بهاران دوم -پلاک6واحد1', '44436777', NULL, 'Reject', '1398/09/11 09:10:46'),
(262, 'CandidateResumeMarked', 'غلامرضا', 'البوغبیش مکسری', '6629881699', '09390358210', 0, 0, NULL, 0, NULL, 13, 643, 13, 643, 96, 'c9c25e2515f9daed9830d2e1c8281d42', 'محمد', '01/10/1362', 'Male', 'Married', 'IslamShia', 13, 644, 13, 644, 13, 643, 13, 644, 'مرکزی', 'رامشیر', '', '', 'رامشیر خ امام علی ک مهاجر -پ26', '06143598028', NULL, 'Reject', '1398/09/11 17:21:56'),
(263, 'CandidateResumeMarked', 'بهرام', 'بهرام برزگر', '2142371779', '09126972870', 0, 0, NULL, 0, NULL, 27, 834, 27, 834, 180, 'eab1631df136fb14a8b234b4da2fc373', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/11 17:49:55'),
(264, 'CandidateResumeMarked', 'فرناز', 'اینانلو', '0311892337', '09109527756', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2e5dccd4f256d110e6d14b6e627c2e85', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/11 19:52:02'),
(265, 'CandidateResumeMarked', 'Hamed', 'Ranjbar', '2130252877', '09363874303', 0, 0, NULL, 0, NULL, 27, 834, 27, 834, 180, 'eaa15cfd9538098f7370595a7737023d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/11 22:45:41'),
(266, 'CandidateResumeMarked', 'حمید', 'خدری', '0058208811', '09123462292', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '440a6b2f3a07b7b03583407a4296392b', 'علی اصغر', '1352/12/23', 'Male', 'Married', 'IslamShia', 8, 548, 30, 886, 30, 886, 8, 548, 'منطقه۴', 'تهران', '', '', 'میدان هروی خیابان شهید افشاری کوچه شهبد مومنی نژاد پ۳۸ طبقه۵ واحد۹', '02122762084', NULL, 'Reject', '1398/09/12 06:31:36'),
(267, 'CandidateResumeMarked', 'کاظم', 'موسوی', '3934463525', '09186575994', 0, 0, NULL, 0, NULL, 28, 865, 28, 865, 193, '861ce53164aed343b203e0e1621206e3', 'محمد', '1365/04/02', 'Male', 'Married', 'IslamShia', 30, 886, 30, 886, 30, 886, 28, 865, 'زالیان', 'جدید مهاجران', '', '', 'خیابان میلاد،کوچه میلاد۷،پلاک ۲۱۷،کدپستی 3991985324', '08638625250', NULL, 'Reject', '1398/09/12 12:36:15'),
(269, 'CandidateResumeMarked', 'مریم', 'آخوندی', '0019842139', '09392259768', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'c1d09123e451131e25841eff4850288b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/12 14:55:04'),
(270, 'CandidateResumeMarked', 'سید مهدی', 'رضوی پور', '2200360215', '09123378433', 0, 0, NULL, 0, NULL, 27, 853, 27, 853, 188, 'caa7e55db5c9c8f61ab522489c4b29ae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/12 23:08:39'),
(271, 'CandidateResumeMarked', 'محمدحسين', 'زرينه', '0071080864', '09123401744', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ccd669abddfc35e6708e6258a9253029', 'روح اله', '1361/05/2', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 8, 548, 8, 548, 'مركزي', 'تهران', '', '', 'شهران- كوهسار- مجتمع مسكوني الهيه', '44319808', NULL, 'Reject', '1398/09/13 12:19:45'),
(272, 'CandidateResumeMarked', 'ناصر', 'کاظمی', '4898347193', '09122117379', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'fb84167194d8e64e0516fd2974bde8d2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/13 13:48:02'),
(273, 'CandidateResumeMarked', 'فاطمه', 'پاسبان', '0937755893', '09153137020', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '6090a3775c78ace63da0ef89d915ce97', 'غلامرضا', '1346/10/08', 'Female', 'Single', 'IslamShia', 11, 612, 11, 612, 11, 612, 8, 548, 'تهران', 'تهران', '', '', 'شهرزیبا- خ مرادی پلاک 60', '44147638', NULL, 'Reject', '1398/09/13 22:04:32'),
(274, 'CandidateResumeMarked', 'بهار', 'تقی زاده', '0017952018', '09374716827', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ca4c627c8ef32e6a214bb89637ac49f3', 'محمد حسین', '1373/09/24', 'Female', 'Single', 'IslamShia', 8, 548, 8, 548, 1, 448, 8, 550, 'لواسانات', 'لواسان', '', '', 'بلوار امام خمینی، خیابان پاسداران، خیابان چمران، پلاک ۲۱', '02126542867', NULL, 'Reject', '1398/09/14 14:37:02'),
(275, 'CandidateResumeMarked', 'علیرضا', 'کاظمی', '1229730192', '09133195474', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ab3202d087a250c371ae36bc8a89d22c', 'حسن', '1361/04/10', 'Male', 'Married', 'IslamShia', 4, 510, 4, 902, 4, 510, 8, 548, 'منطقه 14', 'تهران', '', '', 'بزرگراه محلاتی شاه ابادی جنوب خیابان گلشناس خیابان میرمحمدی برج امید', '36622846', NULL, 'Reject', '1398/09/14 15:12:16'),
(276, 'CandidateResumeMarked', 'ابوالفضل', 'آتش جامه', '0639262341', '09129377914', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '0f193a6834000b1130b715fb0de4bb7a', 'محمد', '1351/05/07', 'Male', 'Married', 'IslamShia', 12, 616, 12, 616, 11, 596, 8, 548, 'مرکزی', 'مرکزی', '', '', 'تهران میدان هروی خ وفامنش خ جمالی غربی پلاک ۸۹  ساختمان بیتا', '02187117757', NULL, 'Reject', '1398/09/14 16:18:35'),
(277, 'CandidateResumeMarked', 'حمزه', 'مقدسی', '0069969302', '09192915417', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '129c32b5d92fb7f69db909ff2302ba23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/14 19:12:42'),
(278, 'CandidateResumeMarked', 'صصطفی', 'رئیسی', '0035034696', '09121764130', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ff4111c47ab90572fc4fd9f029f5bcfb', 'محمد', '1342/6/20', 'Male', 'Married', 'IslamShia', 8, 548, 4, 513, 4, 513, 8, 548, '13', 'تهران', '', '', 'خیابان پیروزی خیابان دوم نیروی هوائی کوچه 2/34 پلاک 19', '77460911', NULL, 'Reject', '1398/09/14 22:37:31'),
(279, 'CandidateResumeMarked', 'سینا', 'شهریاری مقدم', '3660188514', '09128904474', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '4cdb96b09cd6246a300a3f50a7276326', 'محمدامین', '1369/09/01', 'Male', 'Single', 'IslamShia', 16, 689, 16, 689, 16, 689, 8, 548, 'مرکزی', 'تهران', '', '', 'شریعتی خیابان پلیس، کوچه شیرازی، پلاک ۲۲', '02188422882', NULL, 'Reject', '1398/09/15 00:40:25'),
(280, 'CandidateResumeMarked', 'م', 'الف', '3308937913', '09100323780', 0, 0, NULL, 0, NULL, 22, 782, 22, 782, 152, 'c44a471bd78cc6c2fea32b9fe028d30a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/15 08:55:45'),
(281, 'CandidateResumeMarked', 'فرشاد', 'سیفی', '4072618578', '09161612297', 0, 0, NULL, 0, NULL, 26, 826, 26, 826, 176, 'ad11389ef7f39ed0bfc21bccda7624ba', 'عبدالعظیم', '1356/02/18', 'Male', 'Married', 'IslamShia', 26, 826, 26, 826, 26, 826, 26, 826, 'مرکزی', 'خرم آباد', '', '', 'خیابان ناصرخسرو، خیابان شهیدان پارسا، ساختمان استقلال', '06633230741', NULL, 'Reject', '1398/09/15 14:16:15'),
(282, 'CandidateResumeMarked', 'رحمت اله', 'نوروزي', '2269398904', '09111774568', 0, 0, NULL, 0, NULL, 24, 795, 24, 795, 157, '246a500015d0dd51da978b4d6c672503', 'حسینعلی', '1353/06/01', 'Male', 'Married', 'IslamShia', 24, 795, 15, 668, 11, 601, 8, 548, 'کن', 'تهران', '', '', 'تهران شهران بلوارکوهسارشرک الهیه الهیه 14', '44352512', NULL, 'Reject', '1398/09/16 09:27:24'),
(283, 'CandidateResumeMarked', 'سید نعیم', 'اورازانی', '0070736510', '09125034612', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '2c27cadb7752570163b5c8b04317746d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/16 09:35:40'),
(284, 'CandidateResumeMarked', 'سیدکاظم', 'بحرینی', '1375722931', '09355118152', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, 'ea61281f2400b0e7f31cd316cc613b6d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/16 09:35:42'),
(285, 'CandidateResumeMarked', 'روح اله', 'روح اله ا‌کبری', '0558501982', '09193777608', 0, 0, NULL, 0, NULL, 28, 862, 28, 862, 191, '88bc4cedd28085ef4a7f5a8b6172358b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/16 09:40:07'),
(286, 'CandidateResumeMarked', 'سید مرتضی', 'موسویان', '0046464417', '09121054591', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '71c668363de7732142556de8b2388aeb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/16 12:52:53'),
(287, 'CandidateResumeMarked', 'زینب', 'محمدی', '4072499188', '09125934579', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'dff722d187adba69e465f0ee1d736842', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/16 13:12:21'),
(288, 'CandidateResumeMarked', 'مهدس', 'حیاتی', '4549878533', '09189898192', 0, 0, NULL, 0, NULL, 6, 530, 6, 530, 52, '28507021df189358683a8c55b9582045', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/16 20:39:19'),
(289, 'CandidateResumeMarked', 'روح الله', 'عبدخاني', '5349941755', '09193123926', 0, 0, NULL, 0, NULL, 6, 534, 6, 534, 53, 'bb3eb746bb27b6057eb7d6953db8c494', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/16 22:35:47'),
(290, 'CandidateResumeMarked', 'علی', 'طاهری', '2295392284', '09122181680', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'c4a6fcdb733132b87cea02f09f8095e5', 'رجبعلی', '1356/02/03', 'Male', 'Married', 'IslamShia', 17, 712, 17, 718, 17, 718, 8, 548, 'تهران', 'تهران', '', '', 'بلوار کشاورز', '22120252', NULL, 'Reject', '1398/09/17 07:24:03'),
(291, 'CandidateResumeMarked', 'ولی اله', 'همتی', '0057267448', '09352258636', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '99a9ae2898065692150041fabc31cc50', 'علی', '1351/03/30', 'Male', 'Married', 'IslamShia', 8, 548, 1, 461, 3, 482, 8, 548, '5', 'ت', '', '', 'ته', '88647060', NULL, 'Reject', '1398/09/17 07:48:10'),
(292, 'CandidateResumeMarked', 'هوشنگ', 'رهنمامتین', '3252369508', '09185601342', 0, 0, NULL, 0, NULL, 22, 781, 22, 781, 151, '45e72cf6ad8328914f6a1f1650474c6d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/17 12:35:45'),
(293, 'CandidateResumeMarked', 'رمضانعلی', 'سنگدوینی', '2122119136', '09113712066', 0, 0, NULL, 0, NULL, 24, 800, 24, 800, 159, 'af145c4a2fe741a16876efe70a5fdf75', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/17 13:08:24'),
(294, 'CandidateResumeMarked', 'احسان', 'خامنوی خیابانی', '0451247167', '09127475471', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'abc0cade86250ecf7c0376d5c1ccd947', 'محمدجواد', '1358/02/28', 'Male', 'Married', 'IslamShia', 8, 548, 1, 448, 8, 548, 8, 548, 'مرکزی', 'تهران', '', '', 'خیابان شهید کلاهدوز (دولت) کوچه اله وردی آذر کوچه امیر کوچه کشور خدیو پلاک2', '22636235', NULL, 'Reject', '1398/09/17 14:20:08'),
(295, 'CandidateResumeMarked', 'محمد جواد', 'احمدی', '2181716129', '09112578527', 0, 0, NULL, 0, NULL, 24, 800, 24, 800, 159, 'efffabf19d109d7733647e35c3bed203', 'قدرت', '1365/06/30', 'Male', 'Married', 'IslamShia', 24, 800, 27, 838, 27, 838, 24, 800, 'مرکزی', 'گرگان', '', '', 'گرگانپارس', '01732147311', NULL, 'Reject', '1398/09/17 19:35:46'),
(296, 'CandidateResumeMarked', 'ابوالقاسم', 'رئیسی', '0385090218', '09121788145', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '517f8ad2e8aaf1e4b2439d4a578cb61d', 'محمد', '1339/10/01', 'Male', 'Married', 'IslamShia', 8, 548, 4, 513, 4, 513, 8, 548, 'تهران', 'تهران', '', '', 'خیابان پیروزی، خیابان نبرد شمالی، میدان نبرد، خیابان گلابتون، خیابان امام حسن(ع)، کوچه امام حسن پنجم، پلاک 2، طبقه 5', '33174015', NULL, 'Reject', '1398/09/17 21:33:39'),
(297, 'CandidateResumeMarked', 'محمد مهدي', 'ظريفكارفرد', '2301186393', '09178586877', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, 'f1dc5ee5e62aad59ff84d5efd72a891b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/18 15:17:09'),
(298, 'CandidateResumeMarked', 'حمزه', 'صفربیگی', '4501205679', '09183424376', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'af5aa9e89916eb7b15a6c6c359848ffd', 'محمد', '1366/6/19', 'Male', 'Married', 'IslamShia', 6, 527, 6, 527, 6, 527, 8, 548, 'منطقه 14', 'تهران', '', '', 'بلوار پاسدار گمنام-میدان سراسیاب-برج باغ سفید-واحد 1224', '02188116081', NULL, 'Reject', '1398/09/19 08:22:25'),
(299, 'CandidateResumeMarked', 'محمد', 'مختارجوزانی', '0063055015', '09122002377', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '6ae4f0913bdd6aff3578a512e70c24c7', 'حمید', '21/06/1360', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 30, 886, 8, 548, 'مرکز', 'تهران', '', '', 'تهران خ زنجان شمالی کوچه صالحی اصل پ۸واحد ۲', '02166521268', NULL, 'Reject', '1398/09/19 12:00:53'),
(300, 'CandidateResumeMarked', 'حسين', 'حمزوي', '1209564051', '09133228662', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, '74cd740893b0e76c5c461d1297cfbed9', 'نورعلي', '1352/06/20', 'Male', 'Married', 'IslamShia', 4, 497, 17, 712, 17, 712, 4, 902, 'مركزي', 'بهارستان', '', '', 'بهارستان - ميدان امام علي - خيابان مالك اشتر - سايت جانبازان پلاك 311', '09130368662', NULL, 'Reject', '1398/09/19 15:09:40'),
(301, 'CandidateResumeMarked', 'سيدمجتبي', 'حسيني', '3871240176', '09125724180', 0, 0, NULL, 0, NULL, 30, 888, 30, 888, 204, '8baa2c1d492362bea31b5adc18f8518e', 'سيديحيي', '1361/12/10', 'Male', 'Married', 'IslamShia', 30, 888, 14, 656, 20, 736, 30, 888, 'مركزي', 'همدان', '', '', 'ابتداي شكريه', '38321259', NULL, 'Reject', '1398/09/19 18:28:30'),
(302, 'CandidateResumeMarked', 'علی', 'نجاتبخش اصفهانی', '1290039844', '09122198079', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '82692d351a9a689940eab63ea8ffb6dc', 'احمد', '1333/01/01', 'Male', 'Married', 'IslamShia', 4, 902, 4, 902, 4, 902, 8, 548, 'ازگل شهرک شهید محلاتی', 'تهران', '', '', 'تهران  جاده لشکرک مینی سی تی شهرک شهید محلاتی فاز 2  خ نصر 11  بلوک 42 ورودی سوم پلاک 6', '22447447', NULL, 'Reject', '1398/09/19 19:55:38'),
(303, 'CandidateResumeMarked', 'حمزه', 'سلیمانی', '4969778701', '09187192450', 0, 0, NULL, 0, NULL, 22, 782, 22, 782, 152, 'eb4b1a8b2d15bb78f27a4f5ba8ffc7b1', 'اسد', '1363/06/28', 'Male', 'Married', 'IslamShia', 22, 783, 22, 783, 22, 783, 22, 783, 'مرکزی', 'کرمانشاه', '', '', 'فرهنگیان فاز۲ کوی دوم پشت زردلانی آپارتمان زرین ۷ واحد ۳', '08334412232', NULL, 'Reject', '1398/09/19 21:01:05'),
(305, 'CandidateResumeMarked', 'مهدی', 'عباسی شاهکوه', '4592159888', '09195499110', 0, 0, NULL, 0, NULL, 15, 668, 15, 668, 107, '6966d0ba3e2ae285bb623f4bf16bc6ea', 'فریدون', '1366/01/17', 'Male', 'Married', 'IslamShia', 15, 668, 24, 800, 24, 800, 15, 668, 'مرکزی', 'شاهرود', '', '', 'خیابان ابوریحان کوچه شهید فریدون عباسی شاهکوه فرعی شهید جوادی پور پلاک4', '00000000', NULL, 'Reject', '1398/09/21 00:02:54'),
(306, 'CandidateResumeMarked', 'مریم', 'حقی', '2181349320', '09113545267', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3f5b4c874ddce45d3a783dbd026f456c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/21 16:12:13'),
(307, 'CandidateResumeMarked', 'قباد', 'جدی دانا', '4010875771', '09126938049', 0, 0, NULL, 0, NULL, 8, 557, 8, 557, 62, '2475c69d9d3bf8e6c04d53f97c26ee66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/21 17:11:49'),
(308, 'CandidateResumeMarked', 'محمد', 'عابدی', '4030381227', '09188197989', 0, 0, NULL, 0, NULL, 30, 883, 30, 883, 199, '26a54b52182f8b59775cde4063ef8372', 'عزت اله', '1355/04/02', 'Male', 'Married', 'IslamShia', 30, 883, 30, 883, 30, 883, 30, 883, 'مرکزی', 'کبودراهنگ', '', '', 'شهرستان کبودراهنگ روستای داقداق آباد خیابان شهدا', '08135340496', NULL, 'Reject', '1398/09/21 17:19:36'),
(309, 'CandidateResumeMarked', 'بهزاد', 'مهدوي', '1461782287', '09144513537', 0, 0, NULL, 0, NULL, 3, 482, 3, 482, 30, 'cef0de3130e7a5b302cee6b2688f4ee1', 'حسين', '1354/12/20', 'Male', 'Married', 'IslamShia', 3, 482, 3, 482, 3, 482, 3, 482, 'مركزي اردبيل', 'اردبیل', '', '', 'اردبيل خيابان عطايي كوچه 1', '09144513537', NULL, 'Reject', '1398/09/21 18:07:14'),
(310, 'CandidateResumeMarked', 'رسول', 'ملایی', '1502228246', '09033265111', 0, 0, NULL, 0, NULL, 1, 444, 1, 444, 7, '8319eb1718fd2ff2635a9b0ed474e22f', 'حمدا', '1359/09/25', 'Male', 'Single', 'IslamShia', 1, 444, 1, 444, 1, 444, 1, 444, 'اهر', 'اهر', '', '', 'اهر', '44220239', NULL, 'Reject', '1398/09/21 18:40:45'),
(311, 'CandidateResumeMarked', 'محمدحسین', 'علی بخشی', '0082185530', '09124775085', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3d9bf0c10242c360b8aada87b9844c35', 'غلامرضا', '1365/06/09', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 8, 548, 8, 548, 'تهران', 'تهران', '', '', 'خیابان نیروهوایی', '88096011', NULL, 'Reject', '1398/09/21 19:35:39'),
(312, 'CandidateResumeMarked', 'محمدحسن', 'شمس', '2283401097', '09981053768', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, '81d9ccb417a18f414fe6ee48e5d08cb6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/21 23:07:50'),
(313, 'CandidateResumeMarked', 'علیرضا', 'متقی بصیر', '3861183838', '09184974139', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, 'd5f924cee8ad28744c30690549415957', 'حسین', '1379/06/29', 'Male', 'Single', 'IslamShia', 30, 888, 30, 888, 30, 888, 17, 712, 'شیراز', 'شیراز', '', '', 'میدان ارم،دانشگاه شیراز،خوابکاه مفتح', '09184974139', NULL, 'Reject', '1398/09/22 03:45:12'),
(314, 'CandidateResumeMarked', 'علیرضا', 'عقیقی', '3871433632', '09181111320', 0, 0, NULL, 0, NULL, 30, 888, 30, 888, 204, 'f6a83d66d70b18bc70ebf1fb390ea924', 'محمد', '1355/05/20', 'Male', 'Married', 'IslamShia', 30, 888, 30, 888, 30, 888, 30, 881, 'مرکزی', 'همدان', '', '', 'سی متری سعیدیه مجتمع مسکونی مهدیه بلوک آ۳ واحد ۱۶۸', '08138212230', NULL, 'Reject', '1398/09/22 06:50:52'),
(315, 'CandidateResumeMarked', 'حمیدرضا', 'شیخ ویسی', '4869098857', '09123841142', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'de242276558e61f5ba2cc866c3aeb251', 'غلامعلی', '1357/06/10', 'Male', 'Married', 'IslamShia', 24, 803, 16, 689, 24, 803, 8, 548, '11', '22', '', '', 'مجتمع ادارات حکمت 4 پلاک 7', '36351381', NULL, 'Reject', '1398/09/22 12:06:07'),
(316, 'CandidateResumeMarked', 'حامد', 'قهرمانیان', '0072307994', '09123210702', 0, 0, NULL, 0, NULL, 14, 653, 14, 653, 101, '742849d7b322e9bcb88c2db83fd76802', 'حسن', '1363/06/26', 'Male', 'Married', 'IslamShia', 8, 548, 14, 653, 14, 653, 14, 653, 'مرکزی ابهر', 'ابهر', '', '', 'ابهر طالقانی جنوبی خ مطهری کوچه دهک ... تهران منطقه ۱۷ خ شهید پاکی پلاک ۱۸۲', '02166633623', NULL, 'Reject', '1398/09/22 15:34:59'),
(317, 'CandidateResumeMarked', 'شهلا', 'روزبهانی', '4218655294', '09131661834', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, 'ad9a98fdb2977ce94b9b125f443ea64d', 'حبیب الله', '1347/06/20', 'Female', 'Married', 'IslamShia', 26, 824, 26, 824, 26, 830, 4, 902, 'اصفهان', 'اصفهان', '', '', 'اصفهان سپاهان شهر بلوارشاهد خیابان الوند۴کوچه الفت نبش فصاحت پلاک۱۱طبقه سوم', '0316505779', NULL, 'Reject', '1398/09/22 21:34:40'),
(318, 'CandidateResumeMarked', 'مسعود', 'اصلانی', '1159013055', '09125881801', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'efc6af62d46c96c8d0ef88948549edab', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/22 21:36:02'),
(319, 'CandidateResumeMarked', 'سید امیر عباس', 'افشار امین', '0070005923', '09126143574', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ab4cf3540dbc1700c22ab58b919fe5cc', 'سید حسین', '1361/03/07', 'Male', 'Single', 'IslamShia', 8, 548, 8, 548, 8, 548, 8, 548, '5', 'تهران', '', '', 'خیابان شهید بهشتی خیابان پاکستان کوچه چهاردهم پلاک 16 واحد منفی یک', '02188732991', NULL, 'Reject', '1398/09/23 10:37:40'),
(320, 'CandidateResumeMarked', 'امین', 'یادگاری', '4072347612', '09121834437', 0, 0, NULL, 0, NULL, 26, 826, 26, 826, 176, '4e7c5e55d7b59f1328b148c1ce6c2415', 'سبزوار', '1358/03/15', 'Male', 'Married', 'IslamShia', 26, 826, 26, 829, 26, 829, 26, 826, 'مرکزی', 'خرم آباد', '', '', 'خیابان ولیعصر - سی متری شهید پژوهنده - یاسمن ۱۲ پلاک ۱۱', '06633224680', NULL, 'Reject', '1398/09/23 17:22:45'),
(321, 'CandidateResumeMarked', 'معصومه', 'آقایی', '2753440999', '09352774154', 0, 0, NULL, 0, NULL, 19, 735, 19, 735, 132, '7503f17c33b1743edcc8466b0f18dad8', 'عزیز', '1334/01/26', 'Female', 'Married', 'IslamShia', 2, 465, 2, 465, 2, 465, 19, 735, 'شهرک قدس', 'قم', '', '', 'شهرک قدس ولیعصر شرقی کوچه 81 پلاک 22 طبقه سوم', '32406173', NULL, 'Reject', '1398/09/23 20:29:03'),
(322, 'CandidateResumeMarked', 'محمود', 'کریم ابادی', '5739620155', '09127903770', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '18b441104c3bf69fa273b6ebbc162681', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 12:59:57'),
(323, 'CandidateResumeMarked', 'محمد رضا', 'میرشکار', '1090304889', '09166053578', 0, 0, NULL, 0, NULL, 13, 627, 13, 627, 89, '42e9fa040d5b0d5d7e9d06b274e8f698', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 14:09:35'),
(324, 'CandidateResumeMarked', 'ابولفضل', 'شيخنا', '0382060717', '09354745978', 0, 0, NULL, 0, NULL, 19, 735, 19, 735, 132, '577f339b5f47cf3f8b95d23b9e9a031d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 14:12:08'),
(325, 'CandidateResumeMarked', 'مهدی', 'کوهجانی', '0702583881', '09159014683', 0, 0, NULL, 0, NULL, 11, 588, 11, 588, 73, '48fd295f081fad760497a93e60337d1c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 14:37:13'),
(326, 'CandidateResumeMarked', 'رضا', 'نوری', '3610623810', '09360219556', 0, 0, NULL, 0, NULL, 16, 689, 16, 689, 112, '65c8b40803ae55895dea9e01f9c50d77', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 14:56:05'),
(327, 'CandidateResumeMarked', 'محمد', 'اسدی', '0942839609', '09387802545', 0, 0, NULL, 0, NULL, 11, 612, 11, 612, 82, '7632647c1e41ecdce0ba576dd569291a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 15:00:28'),
(328, 'CandidateResumeMarked', 'شهباز', 'معاونی تربتی', '0700404805', '09153333520', 0, 0, NULL, 0, NULL, 11, 588, 11, 588, 73, '851fa8da98e8b3fb2ea60ee94d2d99dc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 15:42:26'),
(329, 'CandidateResumeMarked', 'حامد', 'اسکندری', '0069167419', '09122064486', 0, 0, NULL, 0, NULL, 8, 557, 8, 557, 62, '2e9ea2a5b89d1c440a2afdbebb7a2e1a', 'حمید', '1356/05/02', 'Male', 'Married', 'IslamShia', 8, 548, 19, 735, 8, 548, 8, 557, 'اندیشه', 'اندیشه', '', '', 'فاز ۴ اندیشه بلوار شورای شرقی  خیابان بهمن مجتمع گلریزان', '65348662', NULL, 'Reject', '1398/09/24 15:57:44'),
(330, 'CandidateResumeMarked', 'رضا', 'حسن زاده', '0942726332', '09154443522', 0, 0, NULL, 0, NULL, 11, 612, 11, 612, 82, '155781287802530340250a59f8c246b5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 15:59:41'),
(331, 'CandidateResumeMarked', 'احمد', 'میلانلویی', '0639521177', '09121445025', 0, 0, NULL, 0, NULL, 12, 616, 12, 616, 84, '0122d16d819585db9b45a18b01517062', 'موسی', '1352/01/3', 'Male', 'Married', 'IslamShia', 12, 616, 12, 616, 12, 616, 8, 548, 'مرکزی', 'تهران', '', '', 'زعفرانیه. آصف. خ رامکوه', '88333867', NULL, 'Reject', '1398/09/24 16:04:53'),
(332, 'CandidateResumeMarked', 'مهدی', 'حیدری', '0579724905', '09358053800', 0, 0, NULL, 0, NULL, 28, 862, 28, 862, 191, 'a4b48183bee61c818c5ada030035048f', 'ابوالفضل', '1358/06/10', 'Male', 'Married', 'IslamShia', 28, 867, 28, 867, 8, 549, 28, 862, 'مرکزی', 'خمین', '', '', 'خیابان طالقانی', '08646227943', NULL, 'Reject', '1398/09/24 16:09:13'),
(333, 'CandidateResumeMarked', 'سید محسن', 'حسینی', '4989693523', '09124468661', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '189c815f02e3fb900eea3f33a24cd431', 'سید حسین', '1361/11/22', 'Male', 'Married', 'IslamShia', 27, 835, 27, 852, 27, 852, 8, 548, 'تجریش', 'تهران', '', '', 'میدان اختیاریه', '021', NULL, 'Reject', '1398/09/24 16:13:56'),
(334, 'CandidateResumeMarked', 'مهرداد', 'غفاری هریوند', '0921512491', '09303202330', 0, 0, NULL, 0, NULL, 11, 612, 11, 612, 82, '251142995e8d6322f797d36c756a8af9', 'عباس', '1367/06/30', 'Male', 'Single', 'IslamShia', 11, 612, 10, 573, 8, 548, 11, 612, 'مرکزی', 'مشهد', '', '', 'قاسم آباد - امامیه27 - پلاک 4 - طبقه دوم', '36622892', NULL, 'Reject', '1398/09/24 16:17:24'),
(336, 'CandidateResumeMarked', 'آرش', 'شفیع پور', '1850277370', '09052585946', 0, 0, NULL, 0, NULL, 13, 637, 13, 637, 92, '0a5dece63dae13b0cb298e5068cb7e38', 'فریدون', '1373/05/16', 'Male', 'Single', 'IslamShia', 13, 637, 13, 637, 13, 637, 13, 637, 'مرکزی', 'بهبهان', '', '', 'خیابان شریعتی', '06152831914', NULL, 'Reject', '1398/09/24 16:34:29'),
(337, 'CandidateResumeMarked', 'داوود', 'حسن زاده', '0944934323', '09159054008', 0, 0, NULL, 0, NULL, 11, 612, 11, 612, 82, '593bc931dac8fbacbe63dc898c4f8b5e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 19:22:55'),
(338, 'CandidateResumeMarked', 'محمد', 'قیصری', '1272338746', '09136451257', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, 'ea5292a324b3aece4a2dbabf59adcd60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 19:30:23'),
(339, 'CandidateResumeMarked', 'محمدکاظم', 'رستمی', '1200025520', '09135544780', 0, 0, NULL, 0, NULL, 4, 497, 4, 497, 39, '7b0f698f26b797a3598a7310fb31af85', 'محمود', '1368/08/30', 'Male', 'Married', 'IslamShia', 4, 497, 4, 497, 17, 712, 4, 497, 'وردشت', '', 'دره شور', 'ده نسا علیا', 'سمیرم روستای دهنسا اولیا', '03153666505', NULL, 'Reject', '1398/09/24 20:29:36'),
(340, 'CandidateResumeMarked', 'علی', 'بابکی', '2143078145', '09113201773', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'abfeacc1ae87e74eafd6acd283900cfa', 'عابد', '1356/04/09', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 8, 548, 8, 548, '۷', 'تهران', '', '', 'تهران', '02188406578', NULL, 'Reject', '1398/09/24 20:34:13'),
(341, 'CandidateResumeMarked', 'مهدی', 'محامدی', '2020063581', '09198675437', 0, 0, NULL, 0, NULL, 24, 800, 24, 800, 159, '1363f5a7fc5ffeab42d5ecc9c02f6519', 'محرم', '1368/01/01', 'Male', 'Married', 'IslamShia', 24, 800, 24, 802, 24, 802, 24, 800, 'مرکزی', 'گرگان', '', '', 'شهرداری', '09198675437', NULL, 'Reject', '1398/09/24 20:41:37'),
(342, 'CandidateResumeMarked', 'آمید', 'زارعی', '3410083138', '09396760391', 0, 0, NULL, 0, NULL, 29, 876, 29, 876, 197, 'cffd3727fb88cc5693fce1aa54b771ad', 'غلام', '1367/undefined/06', 'Male', 'Married', 'IslamShia', 29, 876, 29, 876, 29, 876, 29, 876, 'بندزرک', 'میناب', '', '', 'میناب', '09396760391', NULL, 'Reject', '1398/09/24 21:04:48'),
(343, 'CandidateResumeMarked', 'علی', 'نعیمی', '3540126181', '09102309832', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '117c164d0e53b5ff5938127699c0a331', 'حمید', '1360/12/24', 'Male', 'Married', 'IslamShia', 7, 537, 7, 537, 7, 537, 8, 548, 'تهران', 'تهران', '', 'تهران', 'تهران', '02144502720', NULL, 'Reject', '1398/09/24 21:21:10'),
(344, 'CandidateResumeMarked', 'مجتبی', 'محمدپور', '6510049521', '09152212709', 0, 0, NULL, 0, NULL, 11, 589, 11, 589, 73, '1d08fb10db7f1d133b03e478afdf525c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 21:29:46'),
(345, 'CandidateResumeMarked', 'سیده ندا', 'غرویان', '1381751792', '09148453310', 0, 0, NULL, 0, NULL, 1, 448, 1, 448, 10, 'f40b4c621de80d007dec44a6452b8145', 'سیدهادی', '1367/01/05', 'Female', 'Married', 'IslamShia', 1, 448, 1, 448, 1, 448, 1, 448, 'تبریز_ مرکزی', 'تبریز', '', '', 'شهرک باغمیشه', '04136687111', NULL, 'Reject', '1398/09/24 21:43:45'),
(346, 'CandidateResumeMarked', 'amin', 'heudari', '4622196425', '09368325748', 0, 0, NULL, 0, NULL, 9, 569, 9, 569, 66, '84cfcdcd79e5debebfcd30e012620324', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 23:01:37'),
(347, 'CandidateResumeMarked', 'جعفر', 'محمدی', '2889381129', '09125149336', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, 'ed5376a58a9948e3fea3bb75fbfa1ddd', 'احمد', '1360/05/10', 'Male', 'Married', 'IslamSoni', 2, 468, 2, 468, 2, 468, 8, 548, 'مرکزی', 'تهران', '', '', 'همت غرب، کاشان جنوب، میدان موج، ورودی شرقی دریاچه چیتگر', '02144716180', NULL, 'Reject', '1398/09/24 23:03:41'),
(348, 'CandidateResumeMarked', 'عقیل', 'جاسمیان بقلانی', '2431992837', '09366660041', 0, 0, NULL, 0, NULL, 4, 493, 4, 493, 37, 'd68bf13da4e8f36b9ce82303b396caa6', 'یونس', '1361/07/30', 'Male', 'Single', 'IslamShia', 17, 724, 13, 625, 13, 625, 4, 493, 'مرکزی', 'شاهین شهر', '', '', 'گلدیس فاز 5 انتهای بلور یادگار امام خیابان پرستار پلاک 18', '03145264110', NULL, 'Reject', '1398/09/24 23:05:31'),
(349, 'CandidateResumeMarked', 'حسنعلی', 'جعفری', '2380125090', '09172038679', 0, 0, NULL, 0, NULL, 17, 727, 17, 727, 128, 'cd9720c793c5147e0a6605132369a77c', 'غلامعلی', '1369/10/26', 'Male', 'Married', 'IslamShia', 17, 727, 17, 727, 17, 727, 17, 727, 'ماهور', 'نوراباد', '', '', 'خومه زار خ شریعتی روبروی پارک', '071222222', NULL, 'Reject', '1398/09/24 23:10:14'),
(350, 'CandidateResumeMarked', 'محمد مهدی', 'دالوند', '4060763489', '09202208910', 0, 0, NULL, 0, NULL, 26, 826, 26, 826, 176, '253420f0530a3f462dd57a8c1660106e', 'رستم', '1368/08/09', 'Male', 'Single', 'IslamShia', 26, 826, 26, 826, 26, 826, 26, 826, 'مرکزی', 'خرم آباد', '', '', 'خرم آباد', '32657856', NULL, 'Reject', '1398/09/24 23:17:47'),
(351, 'CandidateResumeMarked', 'محمد امین', 'فلاح', '4420654686', '09135258850', 0, 0, NULL, 0, NULL, 21, 762, 21, 762, 145, 'c3bddba011331bff1371ea0dbbd5d355', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/24 23:18:28'),
(352, 'CandidateResumeMarked', 'حسین', 'محمدی', '0014260646', '09030768570', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '9f316ad1ccc9dac868c69a1fa24f078b', 'حسن', '1356/01/16', 'Male', 'Married', 'IslamShia', 8, 547, 8, 548, 8, 548, 8, 548, 'تهران', 'تهران', '', '', 'جنت آباد شمالی', '02144814692', NULL, 'Reject', '1398/09/24 23:54:47'),
(353, 'CandidateResumeMarked', 'علیرضا', 'عبدالرسول', '2240105801', '09119626774', 0, 0, NULL, 0, NULL, 24, 800, 24, 800, 159, '287a7ec88880a746d6c53e44d60fff97', 'رضا', '1371/01/27', 'Male', 'Married', 'IslamShia', 24, 800, 24, 800, 24, 800, 24, 800, 'بهاران', 'گرگان', '', '', 'گرگان_گلشهر', '01732524580', NULL, 'Reject', '1398/09/25 00:17:12'),
(354, 'CandidateResumeMarked', 'نحند', 'توحیدی', '2590792530', '09118149661', 0, 0, NULL, 0, NULL, 25, 810, 25, 810, 165, '3ce493c1c00946d1559d162e7e0a92c8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 00:52:41'),
(355, 'CandidateResumeMarked', 'علیرضا', 'دباغ', '0022468145', '09369701002', 0, 0, NULL, 0, NULL, 18, 729, 18, 729, 129, '066d3bfe4649d19354b8f74d1a7c14ba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 01:33:36'),
(356, 'CandidateResumeMarked', 'وحید', 'رافتی', '2754763546', '09393079174', 0, 0, NULL, 0, NULL, 5, 524, 5, 524, 51, '600d464da704c1e69b58a9275291320e', 'محمد', '1369/03/14', 'Male', 'Married', 'IslamShia', 15, 663, 7, 537, 9, 563, 5, 524, 'کرج', 'کرج', '', '', 'شب شب', '07136254895', NULL, 'Reject', '1398/09/25 01:35:56'),
(357, 'CandidateResumeMarked', 'کامران', 'حیدری', '2298785635', '09337075850', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, '07d5737c064b441760762f6c2d3f1050', 'منوچهر', '1362/12/09', 'Male', 'Single', 'IslamShia', 17, 712, 17, 712, 17, 712, 17, 712, 'شیراز', 'شیراز', '', '', 'خیابان 18 انقلاب - کوچه 16 - پلاک 6', '07132328543', NULL, 'Reject', '1398/09/25 02:01:57'),
(358, 'CandidateResumeMarked', 'حجت الله', 'صدیف', '0603275494', '09128762900', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '1f3693da1a6cc355d32e0c89568ea966', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 07:54:09'),
(359, 'CandidateResumeMarked', 'محمدحسن', 'جلالی', '1142299244', '09131133660', 0, 0, NULL, 0, NULL, 4, 511, 4, 511, 45, '15ab1ec91e273efc2bb82aa19c0b7f7e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 09:29:01'),
(360, 'CandidateResumeMarked', 'امیرحسین', 'اکبردماوندی', '0060476125', '09391191424', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '27642a6cdf834b60034246e48f8c3444', 'ناصر', '1358/11/13', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 8, 548, 8, 548, 'تهران', 'تهران', '', '', 'کارگر جنوبی', '66950947', NULL, 'Reject', '1398/09/25 10:03:02'),
(361, 'CandidateResumeMarked', 'محمدجواد', 'اسدسنگابی فرد', '2297739133', '60183774566', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, '62deb7adba4fa2761c8f74551e73a61c', 'محمدرضا', '1360/05/14', 'Male', 'Married', 'IslamShia', 17, 712, 17, 712, 17, 712, 17, 712, 'شیراز', 'شیراز', '', '', 'فارس شیراز شهرک گلستان .بلوار غدیر جنوبی .بلوار گل ارا  .کوچه 8 .اخر کوچه سمت راست درب روبرو', '07136205718', NULL, 'Reject', '1398/09/25 10:17:22'),
(362, 'CandidateResumeMarked', 'سجاد', 'به پسند', '0072263598', '09194999429', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '07558860cfb8a55d36090e58e22bd4ca', 'قدرت اله', '1363/01/27', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 28, 856, 8, 548, 'تهران', 'تهران', '', '', 'خیابان قزوین خیابان شهید عرب خیابان پهلوانی  خیابان شهید نوروزی کوچه هشید الهویی پلاک 3', '55798691', NULL, 'Reject', '1398/09/25 11:57:01'),
(363, 'CandidateResumeMarked', 'مهدی', 'اسماعیلی', '6229915596', '09133161653', 0, 0, NULL, 0, NULL, 4, 494, 4, 494, 37, '7a7c885d5a928b04939941056546e723', 'غلامعلی', '1361/06/30', 'Male', 'Single', 'IslamShia', 4, 494, 4, 494, 4, 494, 4, 494, 'میمه', 'میمه', '', '', 'خیابان سعدی کوچه شهید خوبان کدپستی۸۳۵۱۸۴۶۸۱۳', '03145422120', NULL, 'Reject', '1398/09/25 13:08:03'),
(364, 'CandidateResumeMarked', 'مستانه', 'محتشم علی آبادی', '6559841261', '09170634357', 0, 0, NULL, 0, NULL, 17, 712, 17, 712, 209, '8c46d7c95af97e2e71e95dab7a65f765', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 14:09:02'),
(365, 'CandidateResumeMarked', 'دانیال', 'مختارنژاد', '4980023088', '09112183406', 0, 0, NULL, 0, NULL, 27, 836, 27, 836, 182, '819839678eec2a166839082e254bd6b3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 14:23:56'),
(366, 'CandidateResumeMarked', 'محمد مهدی', 'جلالیان', '0014459345', '09125831669', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '75a6e7aac8f45b1cc9cfbaede8a31c6a', 'مجتبی', '1370/12/05', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 8, 548, 8, 548, 'تهران', 'تهران', '', '', 'شهرک شهید بهشتی', '77829810', NULL, 'Reject', '1398/09/25 14:53:38'),
(367, 'CandidateResumeMarked', 'ابوالفضل', 'نجاتی', '0933392931', '09155099005', 0, 0, NULL, 0, NULL, 11, 612, 11, 612, 82, 'dc7423efea3680501111816baf9b024e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 15:25:50'),
(368, 'CandidateResumeMarked', 'حسین', 'هادی', '0830067787', '09387154174', 0, 0, NULL, 0, NULL, 4, 493, 4, 493, 37, 'f84f9bfbeecd20b1a2e76b86486a4567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 15:30:24'),
(369, 'CandidateResumeMarked', 'سمیرا', 'ذالی', '5600059957', '09102935779', 0, 0, NULL, 0, NULL, 19, 735, 19, 735, 132, 'e48171618ef30b49347582da57386bd9', 'حکمعلی', '1374/06/23', 'Female', 'Single', 'IslamShia', 14, 657, 14, 657, 14, 657, 19, 735, 'قم', 'قم', '', '', 'نیروگاه ، شیخ آباد ، خیابان معصومیه جنوبی', '09102935779', NULL, 'Reject', '1398/09/25 15:38:32'),
(370, 'CandidateResumeMarked', 'حمیدرضا', 'شیخ باقری', '0081973314', '09123363618', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '5c7daaa04b8f7c065e3f40c7709bc746', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 15:43:30'),
(371, 'CandidateResumeMarked', 'یاسر', 'اخوندی', '1287373100', '09130225115', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, '49b89d35f714942958c282b152bfe916', 'حسن', '1363/06/02', 'Male', 'Married', 'IslamShia', 4, 902, 4, 902, 4, 902, 4, 902, '۳', 'اصفهان', '', '', 'خیابان عبدالرزاق پلاک ۹۰', '03134462674', NULL, 'Reject', '1398/09/25 15:46:16'),
(372, 'CandidateResumeMarked', 'جواد', 'شاكر', '6199677651', '09125511537', 0, 0, NULL, 0, NULL, 19, 735, 19, 735, 132, '46a12189a216f3704613696eba34b4bc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 16:00:40'),
(373, 'CandidateResumeMarked', 'مهدی', 'دادفر', '006+644', '09122541547', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '3a0cc35404603dbef9a1df9d0cff0213', 'محمد', '1356/06/28', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 26, 824, 8, 548, 'مرکزی', 'تهران', '', '', 'شهرک اکباتان -', '02144665522', NULL, 'Reject', '1398/09/25 16:08:25'),
(374, 'CandidateResumeMarked', 'حسین', 'کیانی', '1272920925', '09135086735', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, '5640ba5f54891eab41b407bd781b5af1', 'محمد حسین', '1360/05/09', 'Male', 'Married', 'IslamShia', 4, 902, 4, 902, 4, 902, 4, 902, 'اصفهان', 'اصفهان', '', '', 'اصفهان خیابان بزرگمهر کوچه شادی پلاک ۸', '32254676', NULL, 'Reject', '1398/09/25 17:29:10');
INSERT INTO `candidate` (`CandidateId`, `CandidateStatus`, `CandidateFirstName`, `CandidateLastName`, `CandidateNationalCode`, `CandidatePhone`, `CandidateScore`, `CandidateRecordsScore`, `CandidateRolesScore`, `CandidateSignScore`, `CandidateExamResultStatus`, `CandidateStateId`, `CandidateCityId`, `CandidateConstituencyStateId`, `CandidateConstituencyCityId`, `CandidateElectionId`, `CandidatePassword`, `CandidateFatherName`, `CandidateBirthDate`, `CandidateGender`, `CandidateMaritalStatus`, `CandidateReligion`, `CandidateBornStateId`, `CandidateBornCityId`, `CandidateFatherBornStateId`, `CandidateFatherBornCityId`, `CandidateMotherBornStateId`, `CandidateMotherBornCityId`, `CandidateAddressStateId`, `CandidateAddressCityId`, `CandidateAddressPart`, `CandidateAddressCityPart`, `CandidateAddressVillage`, `CandidateAddressVillagePart`, `CandidateAddress`, `CandidateLandLinePhone`, `CandidateProfileImage`, `CandidateResumeForViewStatus`, `CreateDateTime`) VALUES
(375, 'CandidateResumeMarked', 'حسین', 'گلپایگانی', '0480853037', '09398510776', 0, 0, NULL, 0, NULL, 30, 887, 30, 887, 203, 'a94acee5f48b1bab6ef691f716b927dc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 17:55:02'),
(376, 'CandidateResumeMarked', 'عرفامه', 'رهگذر', '4911588977', '09125685538', 0, 0, NULL, 0, NULL, 5, 524, 5, 524, 51, '6a8010c7d06e7de7cc7a69b4b0b1d077', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 17:59:54'),
(377, 'CandidateResumeMarked', 'امین', 'اقرلو', '0018640001', '09124229620', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '307110f109cd0dfb47e250ddd09d547b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 18:02:46'),
(378, 'CandidateResumeMarked', 'حسین', 'چراغی', '4030525921', '09372369818', 0, 0, NULL, 0, NULL, 30, 885, 30, 885, 201, 'e5d1d871f431588e4a2507c37f48b158', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 19:26:31'),
(379, 'CandidateResumeMarked', 'احمد', 'گلچین', '2050675062', '09305414969', 0, 0, NULL, 0, NULL, 27, 835, 27, 835, 181, 'b4ad67941f0e7596475efcfd749c8531', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 19:48:25'),
(380, 'CandidateResumeMarked', 'امیر', 'محبعلی نژاد', '4900221112', '09122568099', 0, 0, NULL, 0, NULL, 8, 557, 8, 557, 62, 'ebcd989bf080e7c5f587d207026d7bcd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 19:57:11'),
(381, 'CandidateResumeMarked', 'جعفر', 'شفیعی مظفری', '6839843203', '09174177716', 0, 0, NULL, 0, NULL, 17, 905, 17, 905, 121, 'fc7d74bb4aad100d65a3598e63a568c8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 22:42:42'),
(382, 'CandidateResumeMarked', 'محمد مهدی', 'پویان فر', '0123456789', '09136291024', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, '31693cce44320b9ca0ab6a26693cf6b8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/25 23:12:35'),
(383, 'CandidateResumeMarked', 'محمد مهدی', 'جلالی', '1273296321', '09360763567', 0, 0, NULL, 0, NULL, 4, 902, 4, 902, 36, '35ef7eaba48befe3751b94fb5e4aca6d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/26 00:01:42'),
(384, 'CandidateResumeMarked', 'حامد', 'احمدی', '0453387829', '09012044698', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '609c7b76e0b61fc80dc202739ad5549c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/26 00:20:29'),
(385, 'CandidateResumeMarked', 'مهدی', 'برجیسیان', '3873559994', '09189129896', 0, 0, NULL, 0, NULL, 30, 888, 30, 888, 204, '87037f43c4e69f87a902540e92da2f61', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/26 06:45:51'),
(386, 'CandidateResumeMarked', 'سجاد', 'انتشاری', '1080026851', '09139309070', 0, 0, NULL, 0, NULL, 4, 516, 4, 516, 48, 'dceeefce1e249a47bb2dab917c1c104e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/26 08:31:16'),
(387, 'CandidateResumeMarked', 'علی اصغر', 'مصطفوی', '3150475767', '09396967709', 0, 0, NULL, 0, NULL, 21, 764, 21, 764, 146, 'c36739477a42eac56ed7b277fbec8e32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/26 08:55:53'),
(389, 'CandidateResumeMarked', 'محمد محسن', 'صدر', '4188923520', '09129237229', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '7a163eae7bae97d04346740cd3bb3b98', 'نورالدین', '1357/04/23', 'Male', 'Married', 'IslamShia', 26, 829, 26, 829, 26, 829, 8, 548, 'مرکزی', 'تهران', '', '', 'استاد معین - پلاک 172', '02166021347', NULL, 'Reject', '1398/09/26 09:18:26'),
(390, 'CandidateResumeMarked', 'محدثه', 'محمدی تبار', '0016194047', '09197035191', 0, 0, NULL, 0, NULL, 5, 524, 5, 524, 51, '02a9b93b8ee4c8a108716f1ac96a3979', 'حسین', '1355/05/05', 'Female', 'Married', 'IslamShia', 1, 451, 3, 482, 2, 465, 5, 524, '1', '', 'قلقلک', 'دوم', 'ا منتاتنات نامتام اتا امتنامت ات امتا تمتاتا اتا متنانت امنا', '02636937595', NULL, 'Reject', '1398/09/26 09:21:04'),
(391, 'CandidateResumeMarked', 'عرفانه', 'ملکیان دماوندی', '0015504670', '09120747203', 0, 0, NULL, 0, NULL, 8, 548, 8, 548, 59, '0442e78e863a9565d7267e28c72c1654', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/09/26 10:02:23'),
(392, 'CandidateResumeMarked', 'علی اصغر', 'حبیبی خاوه', '0370884515', '09196634589', 0, 0, NULL, 0, NULL, 19, 735, 19, 735, 132, 'e20674732a78dec49ea89e211e4255d3', 'ابراهیم', '1365/04/05', 'Male', 'Married', 'IslamShia', 19, 735, 19, 735, 19, 735, 19, 735, 'قم', 'کهک', '', '', 'خ جهاد', '02534224413', NULL, 'Reject', '1398/09/26 10:39:57'),
(393, 'CandidateResumeMarked', 'دکتر جواد', 'وطنی شعاع', '4051604977', '09120750599', 0, 0, NULL, 0, NULL, 30, 882, 30, 882, 199, '9697731f099381342b5e1c9dcc02fe3d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/10/08 13:19:34'),
(395, 'CandidateResumeAccepted', 'مهدی', 'صیادشیرازی', '4000127489', '09123655569', 0, 0, NULL, 0, NULL, 3, 486, 3, 486, 31, '00774e8f13dfe95864825a5a8bbe86a7', 'علی', '1361/01/16', 'Male', 'Married', 'IslamShia', 8, 548, 8, 548, 8, 548, 3, 486, 'لببلبلاببا', '', 'بلابلاب', 'لابلابلابلا', 'بلابلابلا', '02144444444', NULL, 'Reject', '1398/11/08 15:30:36'),
(396, 'CandidateRegister', 'سعید', 'محولاتی', '0902502417', '09158279127', 0, 0, NULL, 0, NULL, 14, 653, 14, 653, 101, '4d255293332ab508f719562ba79b0e45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reject', '1398/10/24 15:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_academic_background`
--

CREATE TABLE `candidate_academic_background` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateGrade` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'مقطع تحصیلی',
  `CandidateUniversityLevelType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نوع مرکز آموزشی',
  `CandidateSchoolMajor` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'رشته تحصیلی دبیرستان',
  `CandidateUniversityName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نام دانشگاه',
  `CandidateDepartment` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'گروه تحصیلی',
  `CandidateMajor` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'رشته تحصیلی',
  `CandidateStudyStatus` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'وضعیت تحصیل'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_academic_background`
--

INSERT INTO `candidate_academic_background` (`RowId`, `CandidateId`, `CandidateGrade`, `CandidateUniversityLevelType`, `CandidateSchoolMajor`, `CandidateUniversityName`, `CandidateDepartment`, `CandidateMajor`, `CandidateStudyStatus`) VALUES
(109, 148, 'Hozeh3', 'SeminaryLevelType', '', 'نام دانشگاه 2', '', '', 'Graduated'),
(110, 148, 'DoctoryTakhasosi', 'Others', '', 'نام مرکز آموزشی', 'ForeignLanguagesDepartment', '2', 'Student'),
(111, 148, 'KarshenasiArshad', 'AbroadLevelType', '', 'نام دانشگاه 1', 'VeterinaryMedicineDepartment', '2', 'Student'),
(112, 148, 'Diplom', '', 'Ensani', '', '', '', 'Student'),
(114, 150, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'امیر کبیر', 'TechnicalEngineeringDepartment', '12', 'Graduated'),
(116, 193, 'Karshenasi', 'PayamNooruniversityLevelType', '', 'پیام نور کرمان', 'HumanitiesDepartment', '3', 'Graduated'),
(117, 189, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'امیرکبیر', 'TechnicalEngineeringDepartment', '12', 'Graduated'),
(118, 196, 'KarshenasiArshad', 'profitLevelType', '', 'فضیلت', 'HumanitiesDepartment', '18', 'Graduated'),
(120, 195, 'Hozeh2', 'SeminaryLevelType', '', '', '', '', 'Student'),
(126, 197, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'داشلببیل', 'HumanitiesDepartment', '18', 'Graduated'),
(134, 198, 'KarshenasiArshad', 'AbroadLevelType', '', 'قزوین', 'TechnicalEngineeringDepartment', '12', 'Graduated'),
(135, 199, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'قزوین', 'TechnicalEngineeringDepartment', '12', 'Graduated'),
(136, 200, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'ارومیه', 'HumanitiesDepartment', '4', 'Graduated'),
(137, 174, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'بوعلی سینا', 'AgricultureNaturalResourcesDepartment', '3', 'Graduated'),
(140, 202, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'آزاد رودهن', 'HumanitiesDepartment', '18', 'Student'),
(141, 203, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'صنعتی شاهرود', 'TechnicalEngineeringDepartment', '14', 'Graduated'),
(142, 207, 'KarshenasiArshad', 'GovernmentCampus', '', 'پردیس بین الملل دانشگاه صنعتی شریف', 'TechnicalEngineeringDepartment', '11', 'Student'),
(147, 208, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'دانشگا ه شماره 4', 'HumanitiesDepartment', '15', 'Graduated'),
(148, 209, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'واحد قایمشهر', 'HumanitiesDepartment', '18', 'Graduated'),
(152, 211, 'KarshenasiArshad', 'PayamNooruniversityLevelType', '', 'پیام نور مشهد', 'HumanitiesDepartment', '4', 'Graduated'),
(153, 164, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'امیرکبیر', 'TechnicalEngineeringDepartment', '14', 'Student'),
(154, 183, 'DoctoryTakhasosi', 'GovernmentCampus', '', 'سمنان', 'TechnicalEngineeringDepartment', '10', 'Graduated'),
(156, 214, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'قزوین', 'TechnicalEngineeringDepartment', '12', 'Graduated'),
(161, 219, 'DoctoryHerfei', 'Others', '', 'لاتلاتلات', 'ArtDepartment', '2', 'Student'),
(162, 219, 'KarshenasiArshad', 'AbroadLevelType', '', 'تالتلت', 'VeterinaryMedicineDepartment', '4', 'Graduated'),
(163, 219, 'Kardani', 'SeminaryLevelType', '', 'دااتلاتلات', '', '', 'Graduated'),
(164, 219, 'Diplom', '', 'Ensani', '', '', '', 'Student'),
(165, 221, 'DoctoryHerfei', '', '', 'آزاد', 'HumanitiesDepartment', '14', 'Graduated'),
(169, 238, 'KarshenasiArshad', 'Others', '', 'دولتی- نیمه حضوری', 'HumanitiesDepartment', '18', 'Graduated'),
(170, 237, 'Karshenasi', 'AzadUniversityLevelType', '', 'تهران جنوب', 'TechnicalEngineeringDepartment', '15', 'Graduated'),
(171, 237, 'KarshenasiArshad', 'GovernmentCampus', '', 'گیلان', 'HumanitiesDepartment', '18', 'Graduated'),
(172, 213, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'واحد بروجرد', 'HumanitiesDepartment', '18', 'Graduated'),
(173, 239, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'کرج', 'HumanitiesDepartment', '5', 'Graduated'),
(176, 241, 'Karshenasi', 'Others', '', 'سازمان مدیریت صنعتی', 'TechnicalEngineeringDepartment', '11', 'Graduated'),
(178, 178, 'DoctoryTakhasosi', 'GovernmentCampus', '', 'دانشگاه تهران', 'HumanitiesDepartment', '3', 'Student'),
(180, 220, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'دانشگاه بوعلی سینا همدان', 'HumanitiesDepartment', '1', 'Graduated'),
(182, 201, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'علامه طباطبایی', 'HumanitiesDepartment', '11', 'Student'),
(183, 245, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'لدذل', 'ForeignLanguagesDepartment', '2', 'Graduated'),
(185, 247, 'DoctoryTakhasosi', '', '', '', 'TechnicalEngineeringDepartment', '10', 'Graduated'),
(187, 251, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'دانشگاه ازاد واحد علوم تحقیقات یزد', 'TechnicalEngineeringDepartment', '14', 'Graduated'),
(188, 254, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'دانشگاه آزاد اسلامی واحد بروجرد', 'HumanitiesDepartment', '18', 'Graduated'),
(189, 230, 'Karshenasi', 'GovernmentdailyLevelType', '', 'ارومیه', 'TechnicalEngineeringDepartment', '3', 'Student'),
(190, 230, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'آزاد اهر', 'TechnicalEngineeringDepartment', '3', 'Graduated'),
(193, 255, 'DoctoryHerfei', 'GovernmentdailyLevelType', '', 'دانشگاه علوم پزشکی شهید بهشتی (ره)', 'MedicalDepartment', '5', 'Graduated'),
(195, 256, 'Hozeh3', 'SeminaryLevelType', '', '', '', '', 'Graduated'),
(199, 259, 'KarshenasiArshad', 'VirtualgovernmentLevelType', '', 'موسسه اموزش عالی ایرانیان', 'TechnicalEngineeringDepartment', '3', 'Graduated'),
(201, 261, 'KarshenasiArshad', 'profitLevelType', '', 'موسسه غیر انتفاعی ناصر خسرو', 'HumanitiesDepartment', '4', 'Graduated'),
(202, 262, 'KarshenasiArshad', 'PayamNooruniversityLevelType', '', '', 'HumanitiesDepartment', '18', 'Graduated'),
(204, 266, 'KarshenasiArshad', 'Others', '', 'دانشکده کارآفرینی دانشگاه تهران', 'HumanitiesDepartment', '20', 'Graduated'),
(205, 268, 'DoctoryHerfei', 'AbroadLevelType', '', 'بیلیبلیبل', 'ForeignLanguagesDepartment', '2', 'Graduated'),
(206, 267, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'واحد همدان', 'HumanitiesDepartment', '18', 'Student'),
(207, 258, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'آزاد اسلامی همدان', 'HumanitiesDepartment', '18', 'Student'),
(208, 258, 'Karshenasi', 'GovernmentdailyLevelType', '', 'دانشگاه صنعتی سهند', 'TechnicalEngineeringDepartment', '8', 'Graduated'),
(209, 258, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'دانشگاه ازاد علوم و تحقیقات', 'HumanitiesDepartment', '18', 'Graduated'),
(211, 165, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'آزاد ', 'HumanitiesDepartment', '18', 'Student'),
(212, 273, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'الزهرا', 'HumanitiesDepartment', '11', 'Graduated'),
(214, 274, 'Karshenasi', 'PayamNooruniversityLevelType', '', '', 'HumanitiesDepartment', '5', 'Graduated'),
(216, 276, 'DoctoryTakhasosi', 'GovernmentnightLevelType', '', 'علم و صنعت', 'TechnicalEngineeringDepartment', '8', 'Graduated'),
(219, 278, 'DoctoryTakhasosi', 'profitLevelType', '', 'ادیان و مذاهب قم', 'HumanitiesDepartment', '1', 'Graduated'),
(221, 136, 'DoctoryTakhasosi', 'GovernmentCampus', '', 'تهران', 'HumanitiesDepartment', '9', 'Graduated'),
(222, 279, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'دانشگاه صنعتی امیرکبیر', 'TechnicalEngineeringDepartment', '19', 'Graduated'),
(223, 285, 'KarshenasiArshad', 'AppliedScienceLevelType', '', 'فرهنگ و هنر واحد ۱۴', 'ArtDepartment', '', 'Graduated'),
(227, 282, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'تهران جنوب  واحد کیش', 'HumanitiesDepartment', '15', 'Student'),
(228, 225, 'KarshenasiArshad', 'PayamNooruniversityLevelType', '', 'پیام نور مرکز', 'HumanitiesDepartment', '1', 'Graduated'),
(229, 225, 'KarshenasiArshad', 'VirtualgovernmentLevelType', '', 'تهران', 'HumanitiesDepartment', '18', 'Graduated'),
(231, 289, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', '', 'HumanitiesDepartment', '11', 'Student'),
(232, 290, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'IIEES ', '', '', 'Student'),
(234, 291, 'Karshenasi', '', '', '', '', '', 'Graduated'),
(236, 224, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'تهران مرکزی', 'TechnicalEngineeringDepartment', '3', 'Graduated'),
(248, 275, 'Karshenasi', 'GovernmentdailyLevelType', '', 'صنعت نفت', 'TechnicalEngineeringDepartment', '19', 'Graduated'),
(249, 275, 'KarshenasiArshad', 'AbroadLevelType', '', 'IFP', 'TechnicalEngineeringDepartment', '19', 'Graduated'),
(250, 275, 'DoctoryHerfei', 'AbroadLevelType', '', 'هریوت وات', 'TechnicalEngineeringDepartment', '19', 'Graduated'),
(251, 275, 'FogDoctory', 'AbroadLevelType', '', 'هریوت وات', 'TechnicalEngineeringDepartment', '19', 'Graduated'),
(252, 295, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'دانشگاه آزاد علی آبادکتول ', 'HumanitiesDepartment', '18', 'Graduated'),
(253, 296, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'علوم پزشکی بقیه الله', 'HumanitiesDepartment', '6', 'Graduated'),
(255, 298, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'تهران جنوب', 'HumanitiesDepartment', '15', 'Student'),
(258, 299, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'تهران مرکز', 'HumanitiesDepartment', '15', 'Graduated'),
(259, 300, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'دهاقان', 'HumanitiesDepartment', '18', 'Graduated'),
(261, 303, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'واحد کرمانشاه . اسلام آباد غرب ', 'HumanitiesDepartment', '5', 'Graduated'),
(267, 271, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'دانشگاه تهران-دانشكده مديريت ', 'HumanitiesDepartment', '18', 'Graduated'),
(268, 271, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', ' تهران مركزي', 'HumanitiesDepartment', '18', 'Student'),
(269, 304, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'قزوین', 'TechnicalEngineeringDepartment', '12', 'Graduated'),
(271, 302, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'دانشگاه قم و امام حسین 2 دکتری دارم', 'HumanitiesDepartment', '18', 'Graduated'),
(274, 305, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'شاهرود', 'HumanitiesDepartment', '15', 'Graduated'),
(276, 309, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'علوم و تحقيقات تهران -اردبيل', 'HumanitiesDepartment', '18', 'Graduated'),
(278, 311, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'علم و صنعت', 'TechnicalEngineeringDepartment', '21', 'Graduated'),
(279, 310, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'دانشگاه تبریز', 'HumanitiesDepartment', '6', 'Student'),
(280, 301, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', '', 'HumanitiesDepartment', '18', 'Graduated'),
(282, 226, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'علوم و تحقیقات تهران ', 'TechnicalEngineeringDepartment', '13', 'Graduated'),
(283, 313, 'Karshenasi', 'GovernmentdailyLevelType', '', 'شیراز', 'HumanitiesDepartment', '4', 'Student'),
(285, 308, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'آزاد واحد قم', 'HumanitiesDepartment', '18', 'Student'),
(290, 315, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'تهران مرکز', 'HumanitiesDepartment', '1', 'Graduated'),
(291, 316, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'واحد قزوین', 'HumanitiesDepartment', '18', 'Student'),
(292, 314, 'DoctoryTakhasosi', 'PayamNooruniversityLevelType', '', 'مرکز دکتری دانشگاه پیام نور', 'HumanitiesDepartment', '18', 'Graduated'),
(294, 317, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'دانشگاه آزاد واحد علوم و تحقیقات  تهران', 'ScienceDepartment', '4', 'Graduated'),
(296, 319, 'Karshenasi', 'AzadUniversityLevelType', '', 'تهران مرکزی', 'HumanitiesDepartment', '15', 'Graduated'),
(297, 319, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'پژوهشکده امام خمینی (ره)', 'HumanitiesDepartment', '15', 'Graduated'),
(298, 319, 'DoctoryTakhasosi', '', '', 'شاهد', 'HumanitiesDepartment', '15', 'Student'),
(299, 320, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'واحد الکترونیکی تهران', 'HumanitiesDepartment', '18', 'Graduated'),
(301, 321, 'DoctoryTakhasosi', 'GovernmentCampus', '', 'قم', 'HumanitiesDepartment', '16', 'Student'),
(302, 227, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'واحد همدان', 'HumanitiesDepartment', '6', 'Graduated'),
(303, 294, '', '', '', '', '', '', 'Student'),
(304, 294, 'Hozeh2', 'SeminaryLevelType', '', 'حوزه علمیه قم', '', '', 'Student'),
(305, 294, 'Hozeh1', 'SeminaryLevelType', '', 'حوزه علمیه قم', '', '', 'Graduated'),
(306, 294, 'Karshenasi', 'GovernmentdailyLevelType', '', 'صنعتی خواجه نصیر', 'TechnicalEngineeringDepartment', '15', 'Graduated'),
(307, 294, 'KarshenasiArshad', 'profitLevelType', '', 'اصول الدین', 'HumanitiesDepartment', '1', 'Graduated'),
(308, 294, 'DoctoryTakhasosi', 'AzadUniversityLevelType', '', 'واحد علوم تحقیقات تهران', 'HumanitiesDepartment', '1', 'Student'),
(309, 332, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'اراک', 'HumanitiesDepartment', '10', 'Graduated'),
(310, 331, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'واحد کرج', 'TechnicalEngineeringDepartment', '22', 'Graduated'),
(311, 333, 'KarshenasiArshad', 'VirtualgovernmentLevelType', '', 'تهران', 'HumanitiesDepartment', '18', 'Graduated'),
(316, 334, 'KarshenasiArshad', 'profitLevelType', '', 'خاوران', 'TechnicalEngineeringDepartment', '3', 'Graduated'),
(317, 336, 'Kardani', 'AzadUniversityLevelType', '', '', 'ArtDepartment', '5', 'Graduated'),
(318, 340, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'تهران', 'TechnicalEngineeringDepartment', '15', 'Graduated'),
(319, 341, 'Hozeh3', 'SeminaryLevelType', '', 'حوزه علمیه', '', '', 'Graduated'),
(322, 342, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'یزد', 'TechnicalEngineeringDepartment', '9', 'Student'),
(323, 343, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'تهران جنوب', 'ArtDepartment', '5', 'Student'),
(325, 345, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'آزاد بناب', 'TechnicalEngineeringDepartment', '15', 'Graduated'),
(326, 347, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'دانشگاه صنعتی شریف', 'TechnicalEngineeringDepartment', '12', 'Graduated'),
(327, 349, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'کنگان ', 'TechnicalEngineeringDepartment', '10', 'Graduated'),
(328, 350, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'تهران', 'TechnicalEngineeringDepartment', '10', 'Graduated'),
(329, 352, 'Kardani', 'GovernmentdailyLevelType', '', 'باهنر', 'TechnicalEngineeringDepartment', '3', 'Graduated'),
(330, 353, 'KarshenasiArshad', 'GovernmentnightLevelType', '', 'گلستان', 'TechnicalEngineeringDepartment', '10', 'Graduated'),
(331, 356, 'DoctoryHerfei', 'GovernmentdailyLevelType', '', '', 'HumanitiesDepartment', '15', 'Graduated'),
(333, 357, 'Kardani', 'GovernmentnightLevelType', '', 'آموزشکده فنی شیراز (شهید باهنر)', 'TechnicalEngineeringDepartment', '12', 'Student'),
(335, 363, 'Karshenasi', 'AzadUniversityLevelType', '', 'خوراسگان', 'HumanitiesDepartment', '5', 'Graduated'),
(337, 362, 'KarshenasiArshad', 'VirtualgovernmentLevelType', '', 'پردیس فارابی  دانشگاه تهران', 'HumanitiesDepartment', '18', 'Graduated'),
(338, 366, 'KarshenasiArshad', 'AppliedScienceLevelType', '', 'واحد ۴۸', 'ArtDepartment', '10', 'Graduated'),
(339, 371, 'Diplom', '', 'Tajrobi', '', '', '', 'Student'),
(340, 373, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'واحد زنجان', 'HumanitiesDepartment', '18', 'Graduated'),
(341, 369, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'قم', 'ScienceDepartment', '2', 'Student'),
(342, 374, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'دانشگاه اصفهان', 'TechnicalEngineeringDepartment', '16', 'Graduated'),
(343, 361, 'DoctoryHerfei', 'AbroadLevelType', '', 'دانشگاه مالایا ', 'TechnicalEngineeringDepartment', '10', 'Student'),
(344, 339, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'دانشگاه آزاد اسلامی واحد نجف آباد', 'TechnicalEngineeringDepartment', '3', 'Graduated'),
(362, 390, 'DoctoryTakhasosi', 'GovernmentdailyLevelType', '', 'تهران', 'HumanitiesDepartment', '11', 'Student'),
(363, 392, 'DoctoryHerfei', 'GovernmentdailyLevelType', '', 'علوم پزشکی تهران', 'MedicalDepartment', '6', 'Graduated'),
(364, 388, 'DoctoryHerfei', 'PayamNooruniversityLevelType', '', 'دانشگاه شماره 2', 'TechnicalEngineeringDepartment', '15', 'Student'),
(365, 388, 'KarshenasiArshad', 'AzadUniversityLevelType', '', 'دانشگاه شماره 1', 'ScienceDepartment', '2', 'Graduated'),
(366, 388, 'Hozeh2', 'SeminaryLevelType', '', 'االلل', '', '', 'Graduated'),
(367, 389, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'تربیت مدرس ', 'TechnicalEngineeringDepartment', '11', 'Graduated'),
(368, 394, 'KarshenasiArshad', 'GovernmentdailyLevelType', '', 'تهران', 'TechnicalEngineeringDepartment', '10', 'Graduated'),
(369, 395, 'DoctoryHerfei', 'AbroadLevelType', '', 'بیلبیلیبل', 'ScienceDepartment', '3', 'Graduated'),
(379, 244, 'Diplom', '', 'Ensani', '', '', '', 'Graduated');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_articles`
--

CREATE TABLE `candidate_articles` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateArticleTitle` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateArticleLevel` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateArticleMagazineTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateArticlePublishMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateArticlePublishYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_articles`
--

INSERT INTO `candidate_articles` (`RowId`, `CandidateId`, `CandidateArticleTitle`, `CandidateArticleLevel`, `CandidateArticleMagazineTitle`, `CandidateArticlePublishMonth`, `CandidateArticlePublishYear`) VALUES
(8, 148, 'مقاله شماره 3', 'Scopus', 'مجله شماره 3', 'Mehr', 1333),
(9, 148, 'مقاله شماره 2', 'ScientificTaroviji', 'مجله شماره 2', 'Mordad', 1319),
(10, 148, 'مقاله شماره 1', 'Scopus', 'مجله شماره 1', 'Farvardin', 1315),
(11, 196, 'توانمند سازی کارکنان خاتم الاوصیاء', 'ScientificResearch', 'داخلی ورخارجی', 'Mehr', 1397),
(12, 198, 'مقاله خودم', 'Scopus', 'مجله خودم', 'Farvardin', 1397),
(13, 174, 'High Quality RNA Isolation from Leaf, Shell, Root Tissues and Callus of Hazelnut (Corylus avellana L.) ', 'ISC', 'of Nuts 8(2):89-95, 2017', 'Farvardin', 1396),
(14, 174, 'انتقال ژن لوسیفراز حشره شب‌تاب به گیاه کلزا', 'ScientificResearch', 'مجله فن آوری زیستی در کشاورزی همدان', 'Tir', 1391),
(15, 174, 'کشاورزی پایدار در قرآن کریم ', 'ScientificResearch', 'مجله کشاورزی پایدار تبریز', 'Farvardin', 1390),
(16, 174, 'ارزیابی ویژگی‌های بوم جورهای عناب ( Ziziphus jujube Mill.) بومی ایران و تعیین روابط ژنتیکی آنها', 'ScientificResearch', 'مجله علوم و فنون باغبانی ایران جلد 12 شماره 3 سال 1390 ', 'Farvardin', 1390),
(17, 174, ' بهينه سازي روش كشت بافت و سيستم انتقال ژن در گياه كاهو(Lactuca sativa L.)', 'ScientificResearch', 'نشريه علوم باغباني(علوم و صنايع كشاورزي)', 'Farvardin', 1389),
(18, 174, 'موفقیت هاي کشاورزي مولکولی  (Molecular farming) ایران', 'ScientificResearch', 'مجله علمی – پژوهشی بیوتکنولوژي کشاورزي جلد 1 شماره 1 1388', 'Farvardin', 1388),
(20, 214, 'تست', 'ScientificTaroviji', 'تست', 'Farvardin', 1396),
(22, 219, 'بلابلابا', 'Scopus', 'بلابلا', 'Aban', 1394),
(23, 219, 'بلابلابلا', 'ISC', 'بابلابلا', 'Mordad', 1370),
(24, 221, 'منت', 'Scopus', 'منت', 'Farvardin', 1398),
(25, 238, 'تاثیر ابهام هدف سازمانی بر روحیه کارکنان', 'ScientificResearch', 'مدیریت دولتی دانشگاه تهران', 'Aban', 1398),
(26, 239, 'شیوه های جبران خسارت اشخاص ثالث در حوادث هوایی ', 'ScientificResearch', 'حقوق خصوصی', 'Azar', 1397),
(27, 230, 'Performance Evaluation of Sequential Spectrum Handoff in Cognitive Radio Networks', 'ISI', 'International Journal of Communication Systems (ISI) John Wiley & Sons Publication', 'Mordad', 1391),
(28, 255, 'ارزیابی مصرف آمفوتریسین b در بیماران سرطانی بیمارستان طالقانی تهران', 'Scopus', 'همایش داروسازی بالینی ساری', 'Bahman', 1389),
(35, 273, ' Introducing and Analyzing Egg Marketing Management (Case study: Alborz Province)', 'ScientificResearch', 'Journal of Novel Applied Sciences (JNASCI) 12/02/2014 Saeed Ebrahimzadeh Mabood , Fatemeh Pasban and Reza Moghaddasi', 'Farvardin', 1393),
(36, 273, 'Poverty Reduction: Empowerment Approach through Developing Small Businesses and Entrepreneurship', 'ScientificResearch', 'International Journal of Management StudiesISSN: 0127-8983 Vol. 4., March 2015. 173-18 Authors: Abbas Laki, Fatemeh. Paseban and Amir.Mohammadinejad', 'Farvardin', 1394),
(37, 273, 'تعیین کارایی اقتصادی و ارائه الگوی مناسب پرورش زنبور عسل در شهرستان رودسر', 'ScientificResearch', 'فصلنامه تحقیقات کاربردی در علوم دامی', 'Farvardin', 1397),
(38, 273, 'عوامل موثر بر تغییرات نرخ ارز واقعی و تاثیر آن بر شاخص رقابت پذیری در اقتصاد ایران(۹۲-۱۳۵۸)', 'ScientificResearch', 'فصلنامه علوم اقتصادی، دوره 9، شماره 32', 'Farvardin', 1394),
(62, 275, 'Seismic History Matching of Nelson: An Investigation of 4D Signature Calibration', 'ISI', 'SPE Reservoir Evaluation & Engineering', 'Aban', 1390),
(63, 275, 'Schemes for automatic history matching of reservoir modelling: A case of Nelson oilfield in UK', 'ISI', 'Petroleum exploration and development', 'Mehr', 1391),
(64, 275, 'Optimal Parameter Updating in Assisted History Matching Using Streamlines as a Guide', 'ISI', 'Oil & Gas Science and Technology ', 'Aban', 1392),
(65, 275, 'Improved normalization of time-lapse seismic data using NRMS repeatability data to improve automatic production and seismic history matching in the Nelson field', 'ISI', 'Geophysical Prospecting', 'Aban', 1393),
(66, 275, 'An analytical investigation into effects of fracture dispersion coefficients and thermal conductivity on geothermally fractured reservoirs', 'ScientificResearch', 'Amirkabir journal of mechanical engineering', 'Mordad', 1396),
(67, 275, 'Accurate analytical model for determination of effective diffusion coefficient of polymer electrolyte fuel cells by designing compact Loschmidt cells', 'ISI', 'Fuel ', 'Shahrivar', 1396),
(68, 275, 'Analytical study of fluid flow modeling by diffusivity equation including the quadratic pressure gradient term', 'ISI', 'Computers and Geotechnics', 'Farvardin', 1396),
(69, 275, 'Fluid flow in fractured reservoirs: Exact analytical solution for transient dual porosity model with variable rock matrix block size', 'ISI', 'Journal of Petroleum Science and Engineering', 'Farvardin', 1397),
(70, 275, 'An exact analytical model for fluid flow through finite rock matrix block with special saturation function', 'ISI', 'Journal of Hydrology', 'Farvardin', 1397),
(71, 275, 'Development of new analytical model for series and parallel triple porosity models and providing transient shape factor between different regions', 'ISI', 'Journal of Hydrology', 'Mehr', 1398),
(72, 275, 'Fluid Flow in Fractured Reservoirs: Estimation of Fracture Intensity Distribution, Capillary Diffusion Coefficient and Shape Factor from Saturation Data', 'ISI', 'Journal of Hydrology', 'Esfand', 1398),
(73, 275, 'Modeling of Transient Shape Factor in Fractured Reservoirs Considering the Effect of Heterogeneity, Pressure-Dependent Properties and Quadratic Pressure Gradient', 'ISI', 'Oil & Gas Science and Technology', 'Esfand', 1398),
(75, 278, 'عمار یاسر', 'ScientificResearch', '', 'Farvardin', 1398),
(77, 304, 'تست', 'ScientificTaroviji', 'تست', 'Farvardin', 1398),
(78, 302, 'آینده در قلمرو حضرت مهدی', 'ScientificResearch', 'دانشگاه اسلامی', 'Shahrivar', 1390),
(79, 305, '• تبارشناسی و برابر نهاد نظریه‌ی جاهلیت مدرن در اندیشه سیاسی آیت‌الله خامنه‌ای', 'Scopus', 'سیاست پژوهی', 'Khordad', 1397),
(80, 305, '• نسبت‌سنجی پوشش پدیده داعش و مسأله فلسطین در پایگاه‌های خبری جمهوری اسلامی', 'Scopus', 'مطالعات فلسطین', 'Mehr', 1396),
(81, 305, '• بازخوانی منازعه دولت و جامعه از انقلاب مشروطه تا ظهور رضاشاه', 'Scopus', 'ممالک محروسه', 'Bahman', 1394),
(82, 305, '• نفوذ به مثابه تعین تخاصم گفتمانی غرب با انقلاب اسلامی ایران', 'Scopus', 'مطالعات سیاسی', 'Esfand', 1394),
(83, 305, '• بررسی تناقض‌های تصمیم‌سازان آمریکایی در برابر انقلاب ایران بر اساس نظریه تصمیم‌گیری', 'ISC', 'مطالعات سیاسی', 'Khordad', 1390),
(84, 305, '• جنبش نرم افزاری به مثابه صدور انقلاب', 'ScientificTaroviji', 'راهبرد توسعه', 'Khordad', 1392),
(85, 305, '• پیامدهای ساخت دولت مدرن پهلوی اول بر جامعه شبکه ای', 'ISC', 'مطالعات سیاسی', 'Shahrivar', 1392),
(86, 305, '• بایسته‌های تولید ثروت در زیست ایمانی و سبک زندگی شیعی', 'ScientificTaroviji', 'راهبرد توسعه', 'Esfand', 1393),
(87, 305, '• ستیهندگی جامعه مدنی شبکه‌ای و دولت در ایران', 'ScientificResearch', 'پژوهشنامه علوم سیاسی', 'Esfand', 1393),
(88, 305, '• دولت و مشکله کنترل اجتماعی در ایران (1320ـ1304)', 'ScientificResearch', 'دولت پژوهی', 'Esfand', 1394),
(89, 305, '• کنشگر و کنش‌پذیر در بیداری اسلامی؛ از منظر گفتمان امام خمینی', 'ScientificTaroviji', 'بیداری اسلامی', 'Esfand', 1393),
(90, 305, '• نسبت‌سنجی ایدئولوژی دولت مدرن و یوتوپیاهای اجتماعی در عصر پهلوی', 'ScientificResearch', 'جامعه شناسی تاریخی', 'Esfand', 1397),
(91, 305, '• نسبت سنجی مناسبات قدرت دولت و جامعه در ایرانِ‌ پیشامدرن', 'ScientificResearch', 'دولت پژوهی', 'Aban', 1398),
(92, 310, 'رابطه ویژگیهای شخصیت با ودپنداره تحصیلی وخودکار آمدی ریاضی دانش آموزان تبریز', 'ScientificResearch', 'داخلی', 'Shahrivar', 1396),
(96, 301, 'طراحي مدل ارزيابي اثربخشي دولت الكترونيك', 'ScientificResearch', 'فصل نامه علوم اجتماعي', 'Mordad', 1398),
(97, 301, 'شناسايي نقاط اسيب پذير شبكه شركت اب و فاضلاب', 'ISI', 'Lifecycle biology', 'Farvardin', 1392),
(98, 301, 'طراحي توسعه سبك زندگي از منظر كسب و كارهاي نوپا', 'ScientificResearch', 'فصل نامه علوم اجتماعي', 'Farvardin', 1397),
(99, 226, 'امکان سنجی بازیافت آب و استفاده مجدد از رواناب در سطح منطقه 8 شهر تهران با استفاده از نرم افزار واترجمز ', 'Scopus', 'پایان نامه مقطع کارشناسی ارشد ', 'Shahrivar', 1395),
(100, 308, 'اثر پیگمالیون', 'ScientificTaroviji', 'مدیریت مدرسه', 'Mehr', 1394),
(101, 316, 'ارزش افزوده اقتصادی )EVA )معياری توانا برای سنجش بازده سهام', 'Scopus', 'دنیای اقتصاد ', 'Aban', 1390),
(102, 316, '»راهکارهای تحقق بانکداری نوين و کاربردشان در بازار رقابتی بانکها', 'Scopus', 'بانک قوامین', 'Mordad', 1391),
(103, 316, 'Application of Economic Value Added (EVA) In Stock Return Evaluation of Accepted Oil  Productions Companies in the Tehran Stock Exchange (TSE).2013. JOKULL Journal. ISLAND (ISI)', 'ISI', 'JOKULL Journal. ISLAND', 'Farvardin', 1393),
(104, 316, 'بررسی رابطه جذب سپرده سرمایه گذاری با ارزش افزوده اقتصادی بانکها', 'ScientificResearch', '', 'Farvardin', 1395),
(105, 316, 'بررسی مدل نوسانگر هارمونیک کوانتومی برای پیش بینی بازار سهام', 'ScientificResearch', 'راهبرد مدیریت مالی', 'Farvardin', 1398),
(106, 316, 'کاربرد ارزش افزوده اقتصادی در سنجش بازده سهام', 'ScientificResearch', 'مطالعات کمی در مدیریت', 'Khordad', 1390),
(175, 314, 'مباني، رويكرد ها و روشهاي نظام ارزشي و عملكرد شغلي كاركنان بانكهاي لرستان', 'ScientificResearch', 'پژوهش های کاربردی در مدیریت', 'Tir', 1397),
(176, 314, 'نقش استراتژي هاي سازماني در تعهد كاري كارمندان بانك ملي بروجرد', 'Scopus', 'مدیریت، حسابداری و اقتصاد', 'Mehr', 1397),
(177, 314, 'تبیین نقش هوش اخلاقی بر رهبری فروتنانه', 'ScientificResearch', 'اخلاق در علوم و فناوری', 'Dey', 1398),
(178, 314, ' Effect of Personality Characteristics\' Dimensions on Ethical Leadership', 'ISI', 'International Journal of Ethics & Society (IJES', 'Shahrivar', 1398),
(179, 314, 'تبیین نقش ارزش‎های اخلاقی  با رضایت و وفاداري مشتريان با در نظر گرفتن نقش میانجی رفتارشهروندی سازمانی', 'ScientificResearch', 'اخلاق در علوم و فناوری', 'Dey', 1397),
(180, 314, 'اثرمیانجی اخلاق کاری در ارتباط رهبری اخلاقی و عدالت سازمانی با اشتیاق شغلی', 'ScientificResearch', 'اخلاق در علوم و فناوری', 'Farvardin', 1395),
(181, 314, 'رابطه بین شاخص‎های انتصاب و ارتقای مدیران با رضایتمندی کارکنان و مدیران سطوح پایین', 'ScientificResearch', 'پژوهشی مدیریت توسعه و تحول', 'Esfand', 1398),
(182, 314, 'تعیین ارتباط برخی ویژگی‎های اخلاقی شخصیت خرده‎فروش بر وفاداری به برند', 'ScientificResearch', 'اخلاق در علوم و فناوری', 'Mehr', 1396),
(183, 314, 'بررسی رابطه برخی متغیرهای اخلاقی با سلامت سازمانی', 'ScientificResearch', 'اخلاق در علوم و فناوری', 'Dey', 1395),
(184, 314, 'ارائه و تبیین پیش آیندهای موثر بر فرآیند شکل گیری تکلیف گرایی سازمانی', 'ScientificResearch', 'مدیریت سازمان های دولتی', 'Esfand', 1398),
(185, 314, 'واکاوی پیش آیندهای مرتبط با جوکاری اخلاقی با رویکرد تکلیف مداری', 'ScientificResearch', 'اخلاق در علوم و فناوری', 'Tir', 1394),
(186, 314, 'بررسي تاثير ابعاد بازاريابي عصبي در ابعاد و گسترش بازار مصرف محصول', 'ScientificResearch', 'مطالعات كمي در مديريت', 'Esfand', 1398),
(187, 314, 'Analyzing the influence of sales promotion on customer purchasing behavior', 'ISC', '. International Journal of Economics & Management Sciences', 'Farvardin', 1395),
(188, 314, ' Analyzin The Impact Of Promotio Mix On cosumers purchase decision. Applied Mathematics in Engineering, Management and Technology', 'ISI', 'Advanced Social Humanities and Management', 'Bahman', 1394),
(189, 314, 'Investigating the Effect of Social Mobile commerce on Brand Loyalty', 'ISI', 'Revista Publicando', 'Esfand', 1398),
(190, 314, 'Investigating the Effect of Social Mobile commerce on Brand Loyalty (Case study Apple Brand Customers)', 'ISI', 'Opción', 'Mehr', 1397),
(191, 314, 'Investigating the effect of staffs moral values on customers loyalty and satisfaction', 'ISI', 'A journal of multidisciplinary research', 'Azar', 1394),
(192, 314, 'Evaluation and Analysis of Intellectual Capital and Strategies for Enhancing It in NationalWater andWastewater Engineering Company', 'ISI', 'Bulletin of Environment, Pharmacology and Life Sciences', 'Aban', 1393),
(193, 314, 'Evaluation of the Information Security Management Systemin TehranWater and Sewage Company and Identification of Vulnerabilities according to ISO 17799, Bulletin of Environment, Pharmacology and Life Sciences', 'ISI', 'Bulletin of Environment, Pharmacology and Life Sciences', 'Aban', 1393),
(194, 317, '..... Effect of acerbic acid on ', 'Scopus', 'Acta media', 'Farvardin', 1395),
(198, 319, 'جهانی سازی و مقاومت خاورمیانه', 'Scopus', 'دانشگاه های ولز و بریتانیا-کسب مقام اول ', 'Farvardin', 1397),
(199, 319, 'ارائه مفهوم پوپولیست مثبت برای جوامع خاورمیانه و پسا کومونیست در دانشگاه علوم سیاسی بلگراد و اخذ گواهی علمی رسمی این مقاله', 'Scopus', 'دانشگاه بلگراد', 'Farvardin', 1397),
(200, 319, 'تباین بازاریابی ساسی و توسعه اقتصادی ایران و نقش آن در امید اجتماعی', 'Scopus', 'برای موسسه رحمان انجام و در کنفرانس ملی امید اجتماعی ارادئه گردید', 'Farvardin', 1396),
(201, 321, 'ارزیابی علم دینی از دیدگاه شهید مطهری و آیت الله جوادی آملی', 'Scopus', 'حکمت صدرایی', 'Farvardin', 1398),
(202, 388, 'بلابلاب', 'ScientificResearch', 'بابلابلا', 'Mordad', 1384),
(203, 395, 'بلابلا', 'ScientificResearch', 'بلابلابلابلا', 'Mordad', 1326),
(205, 244, 'تدبیر اجتماعی', 'Scopus', 'اجتماع و مردم', 'Farvardin', 1393);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_badge`
--

CREATE TABLE `candidate_badge` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CandidateType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Special/Normal',
  `CandidateBadge` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_badge`
--

INSERT INTO `candidate_badge` (`RowId`, `CandidateId`, `CandidateType`, `CandidateBadge`) VALUES
(11, 40959, 'Special', 'SilverMerit'),
(13, 40959, 'Special', 'Obligation'),
(14, 93644, 'Special', 'GoldenMerit'),
(16, 93644, 'Special', 'SilverTransparency'),
(17, 23601, 'Special', 'GoldenMerit'),
(18, 23601, 'Special', 'SilverTransparency'),
(19, 37737, 'Special', 'GoldenMerit'),
(20, 37737, 'Special', 'GoldenTransparency');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_books`
--

CREATE TABLE `candidate_books` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateBookTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateBookPublisher` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateBookPublishMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateBookPublishYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_books`
--

INSERT INTO `candidate_books` (`RowId`, `CandidateId`, `CandidateBookTitle`, `CandidateBookPublisher`, `CandidateBookPublishMonth`, `CandidateBookPublishYear`) VALUES
(16, 148, 'کتاب شماره 2', 'ناشر شماره 2', 'Shahrivar', 1378),
(17, 148, 'کتاب شماره 1', 'ناشر شماره 1', 'Farvardin', 1380),
(18, 197, 'کتاب شماره 1', 'ناشر شماره ', 'Farvardin', 1382),
(19, 198, 'کتاب خودم', 'خودم', 'Farvardin', 1398),
(20, 208, 'کتاب شماره 1', 'ناشر شماره 1', 'Shahrivar', 1383),
(22, 209, 'چهل حدیث', 'نشر مهربان نیکا', 'Farvardin', 1391),
(23, 209, 'اخلاق حرفه ای', 'انتشارات زعیم', 'Farvardin', 1392),
(27, 214, 'تست', 'تست', 'Farvardin', 1395),
(29, 219, 'بلالبابل', 'بلابلابلا', 'Khordad', 1380),
(30, 219, 'بلبیابلاب', 'بلابلابلا', 'Mordad', 1360),
(31, 163, '', '', 'Farvardin', 1398),
(32, 221, 'منت', 'منت', 'Farvardin', 1398),
(36, 178, 'علل خستگی در ورزشکاران', 'اسماء', 'Mordad', 1388),
(37, 178, 'تاریخچه پرچم ایران ', 'اسماء', 'Azar', 1388),
(38, 178, 'معیارهای یادگیری اولیه کودک ', 'صبح سحر', 'Shahrivar', 1395),
(39, 220, 'بیدارگر', 'اسرا', 'Farvardin', 1386),
(40, 255, 'نکات کاربردی در نسخ بیماری های غدد', 'کهکشان علم', 'Bahman', 1397),
(42, 259, '', '', 'Farvardin', 1398),
(43, 266, 'مبانی امنیت فردی در فضای مجازی', 'هنوز به چاپ نرسیده', 'Farvardin', 1398),
(51, 273, 'زنان و توسعه ', 'مركز تحقيقات استراتژيك ', 'Farvardin', 1388),
(52, 273, 'کشت فراسرزمینی ', 'موسسه پژوهشهای برنامه ریزی، اقتصاد کشاورزی و توسعه روستایی ', 'Aban', 1394),
(53, 273, 'جایگاه بخش کشاورزی در اقتصاد ملی و استانی ', 'موسسه پژوهشهای برنامه ریزی، اقتصاد کشاورزی و توسعه روستایی', 'Aban', 1394),
(54, 273, 'اصلاح نظام تعرفه اي بخش كشاورزي ايران ', 'اتاق بازرگاني تهران ', 'Farvardin', 1391),
(58, 225, 'راهنمای کاربردی و عملی GAMIFICATION', 'دیباگران', 'Esfand', 1396),
(59, 289, 'برنامه ريزي و توسعه اقتصادي', 'طلايي', 'Farvardin', 1389),
(60, 290, 'آیین نامه طراحی لرزه ای سازه ها و تاسیسات صنعت نفت', 'کویر', 'Mordad', 1395),
(61, 278, 'گلشن علماء و طلاب شهر فرخی', '', 'Farvardin', 1398),
(62, 278, 'چهل حدبث مدیریت', '', 'Farvardin', 1398),
(63, 278, 'ورزش بانوان در اسلام', '', 'Farvardin', 1398),
(64, 278, 'تاریخ اسلام', '', 'Farvardin', 1398),
(65, 278, 'جعاله در اسلام وحقوق ایران', 'دفتر تبلیغات تهران', 'Farvardin', 1379),
(66, 227, 'هوش هیجانی و سلامت روان', 'خوارزمی', 'Shahrivar', 1395),
(67, 303, '', '', 'Farvardin', 1398),
(68, 304, 'تست', 'تست', 'Farvardin', 1398),
(78, 302, 'الگوی نظارت راهبردی در مدیریت کلان', 'جباری', 'Ordibehsht', 1398),
(79, 302, 'مدیریت کنترل استراتژیک', 'جباری', 'Shahrivar', 1392),
(80, 302, 'برند حلال ', 'جهاد دانشگاهی', 'Tir', 1398),
(81, 302, 'مدیریت اسلامی', 'جباری در قم', 'Farvardin', 1391),
(82, 305, 'تربیت توحیدی با روضه های حسینی', 'نشر هاجر قم', 'Azar', 1398),
(83, 310, 'آشنایی با مفاهیمی از شخصیت و خودپنداره ', 'پژوهشهای دانشگاه', 'Shahrivar', 1396),
(84, 315, 'فعالیتهای علمی و آموزشی  ( تدریس ، تالیف کتاب و مقاله و... :  گذراندن بیش از 1000 ساعت دوره آموزشی:   (طی دوره های تخصصی شغلی ، مدیریت ، فرهنگی ، آموزشی ، سیاسی ، پدافند و... در وزارتخانه های : آموزش و پرورش ، کشور و فرهنگ و ارشاد اسلامی ) طی دوره آموزشی', '', 'Farvardin', 1398),
(88, 314, 'رفتار شهروندی سازمانی یا رفتارهای فرانقشی', 'دانش مانا', 'Shahrivar', 1396),
(89, 317, 'اطلس جانورشناسی ', 'کنکاش', 'Farvardin', 1391),
(90, 319, 'ایهام تنتخاب تا ابهام واقعیت', 'اندیشه ناب', 'Khordad', 1398),
(91, 321, '-', '', 'Farvardin', 1398),
(93, 388, 'یابلاب', 'ابلابلا', 'Azar', 1301),
(94, 388, 'بلابلا', 'بلابلابا', 'Tir', 1314),
(95, 389, 'دیپلماسی رسانه ای هوشمند', 'نشر دا د', 'Mordad', 1396),
(96, 395, 'بلابلاب', 'لابلابلا', 'Khordad', 1383),
(98, 244, 'چمانگاه', 'چشمه', 'Farvardin', 1398);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_conference`
--

CREATE TABLE `candidate_conference` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateConferenceTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateConferenceLevel` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateConferenceAcceptType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateConferenceMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateConferenceYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_conference`
--

INSERT INTO `candidate_conference` (`RowId`, `CandidateId`, `CandidateConferenceTitle`, `CandidateConferenceLevel`, `CandidateConferenceAcceptType`, `CandidateConferenceMonth`, `CandidateConferenceYear`) VALUES
(8, 148, 'عنوان همایش 2', 'International', 'AbstractPrinting', 'Mehr', 1335),
(9, 148, 'عنوان همایش 1', 'Internal', 'Poster', 'Dey', 1387),
(10, 198, 'همایش خودم', 'International', 'Lecture', 'Farvardin', 1398),
(11, 174, 'همایش کاربرد کودهای آلی در باغبانی و کشاورزی پایدار 1388', 'Internal', 'AbstractPrinting', 'Farvardin', 1388),
(12, 174, 'کنگره زراعت و اصلاح نباتات ایران دانشگاه شهید بهشتی 1389', 'Internal', 'Poster', 'Ordibehsht', 1389),
(13, 174, 'هفتمین کنگره علوم باغبانی ایران شهریور 90 دانشگاه صنعتی اصفهان', 'Internal', 'AbstractPrinting', 'Shahrivar', 1390),
(14, 174, 'همایش ملی گیاهان دارویی اسفند 89 مازندارن', 'Internal', 'AbstractPrinting', 'Esfand', 1389),
(17, 214, 'تست', 'International', 'Lecture', 'Farvardin', 1398),
(18, 219, 'بلابلابا', 'Internal', 'AbstractPrinting', 'Mordad', 1382),
(19, 219, 'بلبلابا', 'Internal', 'Poster', 'Azar', 1359),
(20, 221, 'تمتهمت', 'Internal', 'Poster', 'Farvardin', 1398),
(22, 178, '', 'International', 'Lecture', 'Farvardin', 1398),
(23, 251, '', 'International', 'PrintArticle', 'Tir', 1391),
(24, 262, 'چالش ها و راهکاری مدیریتی', 'Internal', 'Lecture', 'Farvardin', 1398),
(25, 271, 'كانون توسعه مهارت هاي رايانه اي', 'Internal', 'Lecture', 'Shahrivar', 1384),
(27, 273, 'پدافند غیرعامل', 'Internal', 'Lecture', 'Tir', 1397),
(28, 273, 'زنان ', 'Internal', 'Lecture', 'Esfand', 1397),
(33, 275, 'SPE/EUROPEC , Amsterdam', 'International', 'Lecture', 'Khordad', 1388),
(34, 275, 'SPE EUROPEC Conference, Barcelona, Spain', 'International', 'Lecture', 'Khordad', 1389),
(35, 275, 'SPE EUROPEC/EAGE Annual Conference and Exhibition, Vienna', 'International', 'Lecture', 'Khordad', 1390),
(36, 275, 'Offshore Europe, Aberdeen', 'International', 'Poster', 'Shahrivar', 1390),
(37, 275, 'The production and development conference and exhibition, DEVEX', 'International', 'Poster', 'Farvardin', 1392),
(38, 275, 'SPE EUROPEC/EAGE Annual Conference and Exhibition, Copenhagen, Denmark', 'International', 'Lecture', 'Khordad', 1391),
(39, 304, 'تست', 'International', 'Lecture', 'Farvardin', 1398),
(40, 302, 'حکمرانی متعالی', 'International', 'PrintArticle', 'Aban', 1398),
(42, 305, 'مفهوم شناسی سبک زندگی', 'Internal', 'PrintArticle', 'Azar', 1391),
(43, 305, 'شهید مدرس؛ نماینده دیروز، الگوی امروز', 'Internal', 'Lecture', 'Esfand', 1392),
(44, 305, 'امر به معروف و نهی از منکر', 'Internal', 'Lecture', 'Mordad', 1393),
(45, 305, 'دیپلماسی هسته ای', 'Internal', 'PrintArticle', 'Azar', 1393),
(46, 305, 'به شهادت سکوت', 'Internal', 'AbstractPrinting', 'Ordibehsht', 1394),
(47, 305, 'همایش سالانه انجمن علوم اسیاسی ایران', 'Internal', 'AbstractPrinting', 'Esfand', 1396),
(48, 305, 'کارنامه چهل‌ساله جمهوری اسلامی ایران؛ چالش‌ها، فرصت‌ها و راهکارها', 'International', 'AbstractPrinting', 'Aban', 1398),
(49, 305, 'تمدن نوین اسلامی', 'Internal', 'AbstractPrinting', 'Esfand', 1398),
(50, 305, 'مطالعات ایران معاصر', 'International', 'PrintArticle', 'Ordibehsht', 1398),
(51, 310, 'آسیب شناسی نظام آموزشی کشور ', 'Internal', 'PrintArticle', 'Shahrivar', 1396),
(67, 301, 'سمپوزيوم confenis', 'International', 'PrintArticle', 'Farvardin', 1389),
(68, 301, 'نظام پيشنهادات كشور', 'Internal', 'PrintArticle', 'Mehr', 1396),
(69, 301, 'ارتباط صنعت با فناوري اطلاعات', 'Internal', 'Lecture', 'Khordad', 1393),
(70, 301, 'شهروند الكترونيك', 'Internal', 'Lecture', 'Tir', 1389),
(71, 301, 'شهرالكترونيك', 'Internal', 'Lecture', 'Farvardin', 1388),
(72, 301, 'پالس هاي پنهان', 'Internal', 'Lecture', 'Ordibehsht', 1385),
(227, 314, 'بررسي كيفيت خدمات فراهم شده براي بيماران مزمن كليوي شهر همدان با استفاده از الگوي سروكوال', 'Internal', 'PrintArticle', 'Khordad', 1396),
(228, 314, 'بررسي ارزيابي عملكرد كاركنان شركت شهرك هاي صنعتي استان همدان از نظرسازگاري استراتژيك', 'Internal', 'PrintArticle', 'Khordad', 1396),
(229, 314, 'بررسي عوامل فردگرايي و جمع گرايي موثر بر خريد آنلاين (مورد مطالعه شهروندان شهر قروه)', 'Internal', 'PrintArticle', 'Dey', 1396),
(230, 314, 'سنجش رابطه بين مديريت تحول گرا، فرايند نوآوري و عملكرد بهره وري(مطالعه موردي كمينه امداد امام شهرستان بانه)', 'Internal', 'PrintArticle', 'Dey', 1396),
(231, 314, 'نقش ميانجي مشاركت مشتريان در ارتباط بين حمايت از مشتريان و ارزش درك شده مشتري', 'Internal', 'PrintArticle', 'Esfand', 1396),
(232, 314, 'بررسي تاثير رضايت شغلي و وجدان كاري بر رفتارهاي شهروندي سازماني كاركنان با نقش ميانجي گري امنيت شغلي در كاركنان شركت توزيع نيروي برق همدان', 'Internal', 'PrintArticle', 'Mordad', 1395),
(233, 314, 'بسترسازي براي موفقيت مديريت ارتباط با مشتري (مطالعه موردي يك شركت بيمه)', 'Internal', 'PrintArticle', 'Tir', 1395),
(234, 314, 'بررسي رابطه رهبري اخلاقي با اعتماد سازماني در پيام نور همدان', 'Internal', 'PrintArticle', 'Dey', 1395),
(235, 314, 'بررسي رابطه ي ميان ساختار سازماني و كارآفريني سازماني در ادارات شهرستان فامنين استان همدان', 'Internal', 'PrintArticle', 'Bahman', 1392),
(236, 314, 'بازاريابي عصبي تحولي در بهبود فضاي كسب و كار', 'Internal', 'PrintArticle', 'Bahman', 1392),
(237, 314, 'چالش ها، راهكارها و مفاهيم كارآفريني در انكوباتورها', 'Internal', 'PrintArticle', 'Tir', 1390),
(238, 314, 'چيستي كارآفريني و عوامل مؤثر بر كارآفريني كارآفرينان', 'Internal', 'Lecture', 'Tir', 1390),
(239, 314, 'بررسي رابطه سرمايه فكري با نوآوري سازماني', 'Internal', 'PrintArticle', 'Ordibehsht', 1397),
(240, 314, 'استراتژي دانشگاه ها در رويكرد توسعه كارآفريني در عصر دانش', 'Internal', 'PrintArticle', 'Tir', 1390),
(241, 314, 'نقش فناوری اطلاعات و ارتباطات در توسعه گردشگری', 'Internal', 'PrintArticle', 'Ordibehsht', 1397),
(242, 314, 'بررسی تاثیر عوامل فردی، سازمانی و ساختاری بر سلامت اداری و مالی', 'Internal', 'PrintArticle', 'Esfand', 1397),
(243, 314, 'كارآفريني رويكردي نو در استراتژي دانشگاه ها', 'Internal', 'PrintArticle', 'Tir', 1390),
(244, 314, 'بررسی میزان رضایتمندی گردشگران داخلی از سفر به شهر همدان در شهریور سال 90', 'Internal', 'PrintArticle', 'Esfand', 1391),
(245, 314, 'بررسي اختلال و عدم قطعيت در زنجيره تامين حلقه-بسته', 'International', 'AbstractPrinting', 'Farvardin', 1393),
(246, 317, 'سیزدهمین کنفرانس بین المللی زیست شناسی ایران', 'International', 'Lecture', 'Shahrivar', 1384),
(248, 319, 'کنفرانس ملی امید اجتماعی', 'Internal', 'PrintArticle', 'Farvardin', 1396),
(249, 388, 'بلاباب', 'Internal', 'Poster', 'Tir', 1336),
(250, 395, 'بلابلابلا', 'Internal', 'PrintArticle', 'Tir', 1301),
(252, 244, 'همایش خرداد 57', 'International', 'Lecture', 'Farvardin', 1398);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_documents`
--

CREATE TABLE `candidate_documents` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CandidateDocumentName` varchar(80) NOT NULL,
  `CandidateDocumentUrl` varchar(512) NOT NULL,
  `CreateDateTime` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_documents`
--

INSERT INTO `candidate_documents` (`RowId`, `CandidateId`, `CandidateDocumentName`, `CandidateDocumentUrl`, `CreateDateTime`) VALUES
(13, 244, 'SocialCaltural', 'http://localhost:8080/Majless/uploads/2c79f9b6d1de762eab14530a9f8699e0_Screenshot__1_.png', '1398/11/15 11:46:21'),
(15, 244, 'Political', 'http://localhost:8080/Majless/uploads/930f6276b1ae2dbd938b5004b6e50bee_Screenshot__2_.png', '1398/11/15 11:46:21'),
(64, 244, 'Skills', 'http://localhost:8080/Majless/uploads/f4ac12ca450a2d7e62d4c2fee3a08d46_bg.jpg?ud=1398/11/16 10:48:11', '1398/11/16 10:48:11'),
(68, 244, 'Science', 'http://localhost:8080/Majless/uploads/9ec6f60a414cc38da641b4cfdb206e99_1.jpg?ud=1398/11/16 10:48:58', '1398/11/16 10:48:59'),
(69, 244, 'Acceptance', 'http://localhost:8080/Majless/uploads/e5bae28aa8b7048ec583e5bc694f04ac_1.jpg?ud=1398/11/16 10:49:51', '1398/11/16 10:49:51'),
(81, 244, 'JobHistory', 'http://localhost:8080/Majless/uploads/63d8bec878c996920afc60c0d37e3358_bg.jpg?ud=1398/11/16 11:05:04', '1398/11/16 11:05:04'),
(87, 244, 'AcademicBackground', 'http://localhost:8080/Majless/uploads/50bd5631f499abb2f0be94d6a75fccee_1.jpg?ud=1398/11/16 11:18:57', '1398/11/16 11:18:57'),
(88, 244, 'Commitment', 'http://localhost:8080/Majless/uploads/b9b0fa736d063e90bc66927f989a182f_1.jpg?ud=1398/11/16 17:18:58', '1398/11/16 17:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_election_promise`
--

CREATE TABLE `candidate_election_promise` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CandidateElectionPromise` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_election_promise`
--

INSERT INTO `candidate_election_promise` (`RowId`, `CandidateId`, `CandidateElectionPromise`) VALUES
(15, 244, 'آسفالت جاده ها'),
(16, 244, 'اختلاس حداقل 4 میلیادری');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_exam_payment`
--

CREATE TABLE `candidate_exam_payment` (
  `RowId` int(11) NOT NULL,
  `PaymentCandidateId` int(11) NOT NULL,
  `PaymentExamId` int(11) DEFAULT NULL,
  `PaymentCandidateRequestedStatus` varchar(80) DEFAULT NULL,
  `PaymentPrice` int(11) NOT NULL DEFAULT '0',
  `PaymentReferenceId` varchar(80) DEFAULT NULL,
  `PaymentStatus` varchar(80) NOT NULL,
  `PaymentType` varchar(80) DEFAULT NULL COMMENT 'Exam/Help',
  `PaymentToken` varchar(80) DEFAULT NULL,
  `CreateDateTime` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_exam_request`
--

CREATE TABLE `candidate_exam_request` (
  `RequestId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `ExamId` bigint(20) NOT NULL,
  `ExamState` varchar(80) CHARACTER SET latin1 NOT NULL DEFAULT 'Pend' COMMENT '(Pend/Absence/Presence/Done)',
  `CreateDateTime` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_exam_request`
--

INSERT INTO `candidate_exam_request` (`RequestId`, `CandidateId`, `ExamId`, `ExamState`, `CreateDateTime`) VALUES
(4, 304, 4, 'Done', '1398/09/20 14:18:59'),
(5, 304, 5, 'Done', '1398/09/20 14:21:09'),
(6, 304, 6, 'Done', '1398/09/20 14:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_invention`
--

CREATE TABLE `candidate_invention` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateInventionTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateInventionField` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateInventionRegisterNumber` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateInventionDescription` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_invention`
--

INSERT INTO `candidate_invention` (`RowId`, `CandidateId`, `CandidateInventionTitle`, `CandidateInventionField`, `CandidateInventionRegisterNumber`, `CandidateInventionDescription`) VALUES
(8, 148, 'عنوان اختراع 3', 'حوزه ابداع 3', 'شماره ثبت 3', 'شرح اختراع 3'),
(9, 148, 'عنوان اختراع 1', 'حوزه ابداع 1', 'شماره ثبت 1', 'شرح اختراع 1'),
(10, 198, 'اختراع خودم', 'خونه مون', '786786', 'اختراع خودم می باشد'),
(12, 214, 'تست', 'تست', 'تست', 'بل بلسیبلس یبلسیب ل'),
(14, 219, 'بلابلا', 'بلابلبل', 'بلابلاب', 'بلابلا'),
(15, 219, 'بلابلا', 'بلابلاب', 'لابلابا', 'بلابلابلا'),
(16, 221, 'منت', 'منت', 'منتمنتمنتنمت', 'منت'),
(17, 304, 'تست', 'تست', '879878', 'بل یب لیل یسبل سیبل '),
(18, 302, 'نشان درجه 3  از دست معاون رئیس جمهوری', 'کار آفرینی', 'مدال درجه 3 اهداء کردند', ''),
(19, 388, 'بلابل', 'بلابلابا', 'بلابلابلا', 'ببلابلابلا'),
(20, 395, 'بلابلا', 'بلاباب', 'لابابا', 'بابابا'),
(22, 244, 'لامث ال ای دی', 'برق', '4456-ب', 'کاهش مصرف برق تا 80 درصد');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_invite`
--

CREATE TABLE `candidate_invite` (
  `RowId` int(11) NOT NULL,
  `CandidateCode` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidatePreName` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateFullName` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateStateId` int(11) DEFAULT '0',
  `CandidateElectionId` int(11) DEFAULT NULL,
  `CandidateProfileImage` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateInstaAccount` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateInviteCount` int(11) NOT NULL DEFAULT '0',
  `CreateDateTime` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_job_hostory`
--

CREATE TABLE `candidate_job_hostory` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateJobTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateJobCompanyTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateStartJobMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateStartJobYear` int(11) NOT NULL,
  `CandidateEndJobMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateEndJobYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_job_hostory`
--

INSERT INTO `candidate_job_hostory` (`RowId`, `CandidateId`, `CandidateJobTitle`, `CandidateJobCompanyTitle`, `CandidateStartJobMonth`, `CandidateStartJobYear`, `CandidateEndJobMonth`, `CandidateEndJobYear`) VALUES
(37, 148, 'شغل شماره 2', 'شغل شماره 3', 'Ordibehsht', 1395, 'Khordad', 1398),
(38, 148, 'شغل شماره 2', 'شغل شماره 2', 'Khordad', 1391, 'Khordad', 1393),
(39, 148, 'سابقه شغلی 1', 'نام سازمان 1', 'Farvardin', 1343, 'Mordad', 1383),
(43, 193, 'کارمند', 'ورزش وجوانان', 'Farvardin', 1378, 'Farvardin', 1398),
(44, 189, 'برنامه نویس وب', 'سازمان اول', 'Farvardin', 1393, 'Farvardin', 1396),
(46, 195, '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(47, 195, '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(49, 196, 'معاون', 'سازمان هنری و رسانه ای اوج،باشگاه رشد جوان استان سمنان', 'Ordibehsht', 1397, 'Aban', 1398),
(50, 196, 'معاون امور شهرستان ها و رصد', 'سازمان فضای مجازی سراج', 'Tir', 1396, 'Aban', 1398),
(51, 196, 'مسئول پشتیبانی  ', 'ستاد عتبات عالیات استان کردستان', 'Tir', 1392, 'Esfand', 1392),
(52, 196, 'معاون جذب ، شناسایی و رصد', 'جبهه فرهنگی انقلاب اسلامی استان سمنان', 'Shahrivar', 1395, 'Esfand', 1397),
(53, 196, 'کارشناس ستاد صیانت از حریم امنیت عمومی و حقوق شهروندی', 'استانداری استان سمنان', 'Farvardin', 1390, 'Shahrivar', 1395),
(54, 196, 'مشاور مدیر کل اجتماعی و فرهنگی', 'استانداری استان سمنان', 'Farvardin', 1390, 'Shahrivar', 1395),
(55, 196, 'کارشناس آمار', 'استانداری استان سمنان', 'Farvardin', 1393, 'Mordad', 1395),
(56, 196, 'کارشناس فرهنگی', 'دفتر نماینده ولی فقیه در سنندج', 'Dey', 1398, 'Tir', 1391),
(57, 196, 'کارشناس ارزیابی محیطی', 'دفتر نماینده ولی فقیه در سنندج', 'Farvardin', 1390, 'Mehr', 1392),
(58, 197, 'شغل شماره 1', 'سازمان شماره 1', 'Farvardin', 1305, 'Farvardin', 1335),
(60, 198, 'کارشناس تست', 'فرهیختگان جوان', 'Farvardin', 1396, 'Farvardin', 1398),
(62, 199, 'کارشناس تست', 'فرهیختگان', 'Farvardin', 1396, 'Farvardin', 1398),
(63, 200, 'نظامی', 'عقیدتی سیاسی ارتش', 'Azar', 1376, 'Azar', 1398),
(64, 203, 'هیات علمی دانشکاه لرستان', 'دانشگاه لرستان', 'Mehr', 1393, 'Mehr', 1398),
(65, 207, 'پشتیبان فنی IT', 'شرکت کیش تیا', 'Mehr', 1396, 'Esfand', 1398),
(66, 208, 'شغل شماره 1', 'سازمان شماره 1', 'Shahrivar', 1398, 'Farvardin', 1398),
(68, 209, 'مدیرکل فناوری اطلاعات', 'دانشگاه مذاهب اسلامی', 'Farvardin', 1397, 'Shahrivar', 1398),
(69, 209, 'مدیرکل انتشارات و مرکزاسناد', 'دانشگاه مذاهب اسلامی', 'Esfand', 1396, 'Shahrivar', 1398),
(70, 209, 'شهردار', 'شهرداری نکا', 'Shahrivar', 1395, 'Aban', 1396),
(71, 209, 'مدیرعامل', 'حمل و نقل و ترافیک', 'Shahrivar', 1387, 'Khordad', 1391),
(72, 211, 'مدیر مالی', 'بهبود گستر سانیا', 'Ordibehsht', 1395, 'Aban', 1397),
(78, 164, 'مدیر عامل', 'کاوش گستر', 'Bahman', 1395, 'Farvardin', 1398),
(79, 164, 'کارشناس ارشد و مدیر پروژه', 'کاوش گستر ارساباران', 'Aban', 1398, 'Farvardin', 1398),
(80, 164, 'کارشناس معدن', 'معدن مس سونگون', 'Mehr', 1389, 'Mehr', 1391),
(81, 183, 'معاون عمراني ', 'دانشگاه آزاد اسلامي واحد گرمسار', 'Shahrivar', 1387, 'Farvardin', 1392),
(82, 183, 'عضو هيات علمي دانشگاه', 'دانشگاه آزاد اسلامي واحد گرمسار', 'Esfand', 1390, 'Farvardin', 1394),
(83, 183, 'عضو هيات علمي دانشگاه', 'دانشگاه آزاد اسلامي واحد دامغان', 'Bahman', 1394, 'Farvardin', 1398),
(85, 214, 'کارشناس تست', 'تست', 'Farvardin', 1391, 'Farvardin', 1398),
(89, 219, 'ابلابا', 'بابلاب', 'Tir', 1394, 'Tir', 1383),
(90, 219, 'سیبیبب', 'یبلیبلی', 'Tir', 1331, 'Shahrivar', 1360),
(91, 219, 'شغل شماره 1', 'سازمان شماره 1', 'Shahrivar', 1313, 'Shahrivar', 1311),
(92, 221, 'طراح سایت', 'وبدیزاین', 'Farvardin', 1393, 'Aban', 1398),
(102, 237, 'مشاور رئیس پارک علم و فناوری خراسان', 'پارک علم و فناوری خراسان', 'Azar', 1397, 'Esfand', 1398),
(103, 237, 'کارشناس ارشد مهندسی، پژوهش و فناوری', 'وزارت نفت', 'Farvardin', 1391, 'Farvardin', 1398),
(105, 213, 'کارشناس ارشد بررسی منابع و سامانه تامین کالای وزارت نفت', 'وزارت نفت', 'Khordad', 1394, 'Azar', 1398),
(106, 213, 'کارشناس تدوین سیاستها و نظارت بر طرحهای ساخت داخل', 'وزارت نفت', 'Khordad', 1384, 'Azar', 1398),
(107, 213, 'کارشناس سفارشات ', 'شرکت ملی مناطق نفتخیز جنوب', 'Shahrivar', 1391, 'Khordad', 1384),
(108, 213, 'رئیس دفتر رئیس بنیاد شهید و امور ایثارگران ', 'بنیاد شهید و امور ایثارگران شهرستان بروجرد', 'Mehr', 1388, 'Mordad', 1391),
(109, 213, 'کارشناس آموزش ', 'بنیاد شهید و امور ایثارگران شهرستان بروجرد', 'Mehr', 1388, 'Mordad', 1391),
(110, 213, 'کارشناس و بازرس مسکن مهر', 'اداره تعاون شهرستان بروجرد', 'Farvardin', 1387, 'Shahrivar', 1388),
(111, 238, 'مشاور فرماندار', 'فرمانداری تفت', 'Farvardin', 1389, 'Shahrivar', 1389),
(112, 238, 'بازرس و دبیر شورای هماهنگی مدیریت بحران', 'فرمانداری مهریز', 'Azar', 1393, 'Farvardin', 1398),
(113, 238, 'کارشناس امنیتی و انتظامی', 'فرمانداری یزد', 'Khordad', 1393, 'Azar', 1393),
(114, 238, 'بازرسی و ارزیابی عملکرد', 'فرمانداری اردکان', 'Bahman', 1391, 'Khordad', 1393),
(115, 238, 'بازرس  و مسئول ملاقاتهای مردمی دفتر ارتباطات مردمی استاندار', 'استانداری یزد', 'Mordad', 1389, 'Farvardin', 1391),
(116, 239, 'کارمند', 'بانک رفاه', 'Aban', 1388, 'Esfand', 1398),
(139, 241, 'مدیرعامل', 'شرکت فریزهند', 'Mordad', 1385, 'Azar', 1398),
(153, 178, '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(154, 178, 'مشاور بنیاد مدیر عامل', 'بنیاد قرانی خانواده', 'Mehr', 1393, 'Mehr', 1397),
(155, 178, 'مدیر منابع انسانی', 'مجمع هتل های بین المللی لاله تهران‌', 'Shahrivar', 1395, 'Azar', 1396),
(156, 178, 'عضو هیئت رئیسه فدراسیون اسکواس ', 'وزارت ورزس  ', 'Esfand', 1391, 'Mehr', 1397),
(157, 178, 'رئیس انجمن اسکواش ', 'وزارت اموزش و پرورش ', 'Esfand', 1390, 'Mehr', 1397),
(158, 178, 'کارشناس مسئول استان', 'اداره کل اموزش و پرورش شهرستانهای تهران‌', 'Shahrivar', 1384, 'Aban', 1384),
(159, 178, 'رئیس ترببت بدنی ', 'آموزش و پرورش ', 'Shahrivar', 1377, 'Shahrivar', 1384),
(160, 178, 'کارشناس مسئول حراست وزارت ورزس ', 'وزارت ورزش', 'Azar', 1384, 'Esfand', 1388),
(161, 178, 'رئیس اداره حراست دانشگاه ', 'دانشگاه تهران ', 'Mehr', 1389, 'Ordibehsht', 1394),
(162, 178, 'دبیر', 'اموزش و پرورش ', 'Bahman', 1369, 'Farvardin', 1398),
(163, 178, 'مدرس دانشگاه ', 'دانشگاه ازاد', 'Mehr', 1393, 'Farvardin', 1398),
(164, 178, 'مدزس دانشگاه', 'علمی کاربردی سوره', 'Mehr', 1394, 'Farvardin', 1398),
(165, 178, 'مدرس دانشگاه', 'دانشگاه فرهنگیان ', 'Mehr', 1397, 'Farvardin', 1398),
(167, 220, 'کارشناس مسئول فرهنگی و هنری', 'آموزش و پرورش ', 'Mehr', 1389, 'Farvardin', 1398),
(184, 245, 'اال', 'ددذ', 'Shahrivar', 1398, 'Farvardin', 1398),
(187, 251, 'مدیر عامل', 'فولاد معدن پاسارگاد', 'Esfand', 1389, 'Aban', 1398),
(192, 254, 'مدیر اجرائی و عامل ذیحساب ', 'نهاد نمایندگی مقام معظم رهبری در دانشگاه لرستان', 'Ordibehsht', 1382, 'Farvardin', 1385),
(193, 254, 'مشاور مردمی استاندار ', 'استانداری لرستان', 'Farvardin', 1385, 'Shahrivar', 1385),
(194, 254, 'مشاو و مدیر کل بازرسی و رسیدگی بشکایات', 'استانداری لرستان', 'Shahrivar', 1385, 'Farvardin', 1389),
(195, 254, 'مدیر کل اداری مالی ', 'استانداری لرستان', 'Farvardin', 1389, 'Farvardin', 1390),
(196, 254, 'قائم مقام معاونت توسعه مدیریت و پشتیبانی ', 'دانشگاه لرستان', 'Farvardin', 1390, 'Esfand', 1391),
(197, 254, 'مدیر امور مالی ', ' دانشگاه لرستان', 'Esfand', 1391, 'Farvardin', 1393),
(198, 254, 'کارشناس پژوهشی دانشکده علوم پایه ', 'دانشگاه لرستان', 'Azar', 1393, 'Esfand', 1395),
(199, 254, 'مشاور نماینده مردم خرم آباد در مجلس شورای اسلامی', 'مجلس شورای اسلامی', 'Esfand', 1395, 'Esfand', 1397),
(200, 254, 'کارشناس آموزش گروه آمار دانشکده علوم پایه', 'دانشگاه لرستان', 'Esfand', 1397, 'Azar', 1398),
(201, 230, 'مدیر برق و ابزار دقیق', 'شرکت صنایع غذایی مائده', 'Mordad', 1388, 'Esfand', 1388),
(202, 230, 'کارشناس فروش ابزار دقیق', 'شرکت کامپیوتری برگ', 'Ordibehsht', 1389, 'Farvardin', 1390),
(203, 230, 'سوپروایزر ابزار دقیق', 'شرکت بونیز سازه و فرینه صنعت', 'Farvardin', 1390, 'Dey', 1391),
(204, 230, 'سوپروایزر ابزار دقیق', 'شرکت سنا اندیشه', 'Dey', 1391, 'Dey', 1391),
(205, 230, 'سرپرست دفتر فنی', 'شرکت فنپا', 'Dey', 1391, 'Esfand', 1391),
(206, 230, 'مدیر پروژه', 'شرکت اندیشه نگاران کیا', 'Farvardin', 1392, 'Dey', 1394),
(207, 230, 'مدیر اجرایی طرح ملی نصب سامانه های ثبت تخلفات راهنمایی و رانندگی در کل کشور', 'شرکت رهکام ایرانیان-شرکت گسترش الکترونیک مبین ایران- ستاد اجرایی فرمان امام', 'Dey', 1394, 'Azar', 1398),
(209, 256, 'معاونت پرورشی و تربیت بدنی', 'آموزش و پرورش ', 'Khordad', 1394, 'Farvardin', 1398),
(214, 255, 'دکتر داروساز', 'داروخانه افق', 'Azar', 1397, 'Aban', 1398),
(215, 255, 'دکتر داروساز', 'داروخانه امت', 'Khordad', 1396, 'Aban', 1397),
(216, 255, 'دکتر داروساز', 'داروخانه اتحاد', 'Khordad', 1394, 'Ordibehsht', 1396),
(217, 255, 'دکتر داروساز', 'داروخانه بهبودی', 'Shahrivar', 1393, 'Khordad', 1394),
(224, 259, 'مدیرعامل', 'شرکت زیگورات ویونا', 'Farvardin', 1392, 'Farvardin', 1398),
(255, 261, 'مشاور ارشد مالیات و بیمه', 'بدر برق', 'Khordad', 1391, 'Esfand', 1397),
(256, 261, 'مشاور ارشد مالیات', 'اندیشه کاران مهام', 'Farvardin', 1390, 'Esfand', 1397),
(257, 261, '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(258, 261, 'معاونت مالی و اداری', 'فهندژ', 'Ordibehsht', 1387, 'Esfand', 1397),
(259, 261, 'مشاور ارشد بیمه ای و مشاور ارشد مالیاتی', 'قهوه ست', 'Shahrivar', 1390, 'Esfand', 1397),
(260, 261, 'مشاور ارشد مالیاتی', 'دیکا اسیا', 'Farvardin', 1390, 'Esfand', 1397),
(261, 261, 'مشاور ارشد مالیاتی', 'سازه پردازی', 'Shahrivar', 1384, 'Esfand', 1397),
(262, 261, 'مدیر مالی و اداری', 'شرکته مهندسی توان گستر دقیق', 'Mehr', 1380, 'Esfand', 1397),
(263, 262, 'کارشناس نیروی انسانی', 'آموزش و پرورش ', 'Farvardin', 1388, 'Farvardin', 1398),
(291, 266, 'مدیر محتوا ', 'رهیاب', 'Bahman', 1387, 'Tir', 1393),
(292, 267, 'کارمند رسمی وزارت نفت', 'پالایشگاه امام خمینی شازند', 'Mehr', 1391, 'Esfand', 1398),
(293, 258, 'معاون بهره بردری و تعمیرات ناحیه گاز رزن', 'وزارت نفت_شرکت گاز ', 'Mehr', 1398, 'Azar', 1398),
(294, 258, 'نوبتکار ارشد بهره برداری', 'وزارت نفت_مجتمع گاز پارس جنوبی', 'Bahman', 1392, 'Shahrivar', 1398),
(295, 258, 'کارشناس تحقیق و توسعه', 'قرار گاه خاتم الانبیا', 'Khordad', 1391, 'Mordad', 1392),
(300, 165, 'رئیس انتصابات و ترفیعات ', 'وزارت نفت ', 'Ordibehsht', 1386, 'Farvardin', 1398),
(301, 273, 'هیات علمی ', 'موسسه پژوهش های برنامه ریزی و اقتصاد کشاورزی', 'Farvardin', 1377, 'Azar', 1398),
(304, 276, 'رییس برنامه ریزی و کنترل تولید', 'شرکت ملی گاز ایران', 'Mordad', 1398, 'Esfand', 1398),
(307, 278, 'وکیل دادگستری', 'دادگستری', 'Farvardin', 1398, 'Farvardin', 1398),
(309, 136, 'دبیر', 'آموزش و پرورش', 'Mehr', 1389, 'Farvardin', 1398),
(318, 285, 'معاون مدیر کل تشکیلات ، منابع انسانی و آموزش', 'ستاد مدیریت حمل و نقل و سوخت کشور', 'Tir', 1394, 'Farvardin', 1398),
(333, 281, 'دبیر اجرایی سومین جشنواره ملی موسیقی خناگران انقلاب اسلامی', 'حوزه هنری لرستان', 'Mehr', 1391, 'Farvardin', 1398),
(334, 281, 'دبیر اجرایی دومین جشنواره سراسری موسیقی خناگران انقلاب اسلامی', 'حوزه هنری لرستان', 'Bahman', 1390, 'Farvardin', 1398),
(335, 281, 'دبیر اجرایی سومین جشنواره منطقه ای موسیقی نواهای حماسی دفاع مقدس', 'حوزه هنری لرستان', 'Mehr', 1386, 'Farvardin', 1398),
(336, 281, 'دبیر اجرایی نخستین جشنواره سراسری موسیقی خناگران انقلاب اسلامی', 'حوزه هنری لرستان', 'Bahman', 1389, 'Farvardin', 1398),
(337, 281, 'مدیر اجرایی اولین جشنواره منطقه ای نواهای حماسی دفاع مقدس', 'حوزه هنری لرستان', 'Mehr', 1384, 'Farvardin', 1398),
(338, 281, 'مدیر اجرایی دومین جشنواره منطقه ای نواهای حماسی دفاع مقدس', 'حوزه هنری لرستان', 'Shahrivar', 1385, 'Farvardin', 1398),
(339, 281, 'قائم مقام کمیته موسیقی سومین جشنواره آثار و تولیدات ', 'حوزه هنری کشور', 'Dey', 1390, 'Farvardin', 1398),
(340, 281, 'نایب رییس شورای اسلامی شهر خرم آباد', 'شورای اسلامی شهر خرم آباد', 'Shahrivar', 1394, 'Shahrivar', 1395),
(341, 281, 'عضو هیئت امناء', 'انجمن موسیقی لرستان', 'Farvardin', 1392, 'Farvardin', 1398),
(342, 281, 'رییس کمیته ی فرهنگ و هنر', 'مجمع مشورتی کمیسیونهای فرهنگی اجتماعی کلان شهرها و مراکز استانها', 'Mehr', 1392, 'Shahrivar', 1393),
(343, 281, 'رییس کمیسیون فرهنگی اجتماعی و زیست شهری شورای اسلامی شهر خرم آباد', 'شورای اسلامی شهر خرم آباد', 'Azar', 1392, 'Azar', 1393),
(344, 281, 'عضو شورای اسلامی شهر خرم آباد', 'شورای اسلامی شهر خرم آباد', 'Shahrivar', 1392, 'Shahrivar', 1396),
(345, 281, 'سرپرست معاونت فرهنگی هنری', 'حوزه هنری لرستان', 'Shahrivar', 1393, 'Farvardin', 1398),
(346, 281, 'مسول واحد موسیقی حوزه هنری لرستان', 'حوزه هنری لرستان', 'Dey', 1385, 'Farvardin', 1398),
(348, 282, 'نماینده دوره نهم', 'مجلس شورای اسلامی', 'Khordad', 1391, 'Khordad', 1395),
(352, 225, 'مدرس، مدیر آموزش، مشاور', 'کانون فرهنگی آموزش ، موسسه خوارزمی،...', 'Khordad', 1384, 'Azar', 1387),
(353, 225, 'مدیر تولید، مدیر مشتریان و ...', 'شرکت خدمات انفورماتیک راهبر', 'Azar', 1387, 'Bahman', 1390),
(354, 225, 'مدیر اجرایی و کنترل پروژه ها...', 'شرکت داده پردازان دوران', 'Esfand', 1390, 'Esfand', 1398),
(355, 275, 'هیات علمی', 'دانشگاه صنعتی امیرکبیر', 'Mehr', 1391, 'Azar', 1398),
(356, 289, 'بازرس', 'سازمان بازرسي كل كشور', 'Farvardin', 1391, 'Ordibehsht', 1398),
(357, 290, 'کارشناس ارشد', 'وزارت نفت', 'Ordibehsht', 1385, 'Farvardin', 1398),
(358, 291, 'کارشناس', 'بانک', 'Khordad', 1378, 'Farvardin', 1398),
(363, 224, 'مدرس دروس ایمنی و تخصصی', 'شرکت برق منطقه‌ای تهران، همکاری ادامه دارد. ', 'Farvardin', 1396, 'Farvardin', 1398),
(364, 224, 'عضو کمیته HSE', 'شرکت برق منطقه‌ای تهران، همکاری ادامه دارد. ', 'Farvardin', 1398, 'Farvardin', 1398),
(365, 224, 'عضو کمیته آموزش', 'شرکت برق منطقه‌ای تهران، همکاری ادامه دارد. ', 'Shahrivar', 1392, 'Farvardin', 1398),
(366, 224, 'مسئول  پست برق ٢٣٠ کیلوولت', 'شرکت برق منطقه‌ای تهران، همکاری ادامه دارد. ', 'Aban', 1378, 'Esfand', 1398),
(373, 295, 'مسئول روابط عمومی ', 'اداره کل تعاون کار و رفاه اجتماعی استان گلستان ', 'Azar', 1395, 'Azar', 1398),
(374, 295, 'مسئول تحول اداری', 'اداره‌ کل تعاون کار و رفاه اجتماعی استان گلستان ', 'Khordad', 1392, 'Azar', 1395),
(375, 295, 'مسئول دفتر مدیرکل ', 'اداره کل تعاون کار و رفاه اجتماعی استان گلستان ', 'Ordibehsht', 1390, 'Khordad', 1392),
(376, 295, 'مسئول روابط عمومی ', 'اداره کل تعاون کار و رفاه اجتماعی استان گلستان ', 'Ordibehsht', 1389, 'Ordibehsht', 1390),
(383, 299, 'کارمند', 'آتش نشانی تهران', 'Aban', 1383, 'Farvardin', 1398),
(384, 300, 'كارمند', 'وزارت نفت', 'Mordad', 1377, 'Azar', 1398),
(386, 303, 'کارمند . ', 'استانداری کرمانشاه ', 'Mehr', 1389, 'Farvardin', 1398),
(399, 271, 'مسئول شبكه و امنيت اطلاعات', 'مجتمع فني تهران - غرب', 'Farvardin', 1385, 'Farvardin', 1388),
(400, 271, 'حسابرس و حسابدار شركت هاي خصوصي ', 'شركت هاي طبي ، صنعتي و ...', 'Farvardin', 1380, 'Farvardin', 1398),
(401, 271, 'عضو هيات رئيسه 7 نفره شوراياران  و دبير كارگروه  برنامه ريزي و اقتصاد شهري ', 'شوراي شهر تهران  منطقه 5', 'Farvardin', 1380, 'Farvardin', 1398),
(402, 271, 'مدير تسهيلات و تعهدات بين الملل حوزه مركزي بانك ', ' معاونت بين الملل بانك خصوصي', 'Farvardin', 1388, 'Azar', 1398),
(404, 304, 'کارشناس تست', 'فرهیختگان', 'Farvardin', 1396, 'Farvardin', 1398),
(443, 305, 'مدرس دانشگاه', 'مرکز علوم اسلامی دانشگاهیان شاهرود', 'Bahman', 1393, 'Bahman', 1398),
(445, 309, 'مدير توسعه صنعتي و كارآفريني', 'شركت شهركهاي صنعتي استان اردبيل', 'Dey', 1385, 'Farvardin', 1398),
(447, 311, 'معلم', 'مدرسه', 'Tir', 1398, 'Khordad', 1398),
(448, 310, 'ازاد', 'ازاد', 'Farvardin', 1398, 'Farvardin', 1387),
(449, 301, 'مديركل زيرساخت', 'اب و فاضلاب تهران', 'Ordibehsht', 1384, 'Farvardin', 1398),
(456, 226, 'کارشناس و بازرس بهداشت محیط', 'مرکز بهداشت شهرستان قائنات ', 'Shahrivar', 1388, 'Mordad', 1389),
(457, 226, 'بارزس و کارشناس بهداشت محیط', 'بیمارستان ', 'Shahrivar', 1390, 'Farvardin', 1391),
(458, 226, 'کارشناس دفتر محیط زیست منطق 8', 'شهرداری تهران ', 'Ordibehsht', 1391, 'Dey', 1391),
(459, 226, 'مسؤل پیگیری معاونت خدمات شهری منطقه 8', 'شهرداری تهران ', 'Dey', 1391, 'Esfand', 1395),
(460, 226, 'ناظر فضای سبز ناحیه ۳ منطقه 8', 'شهرداری تهران ', 'Esfand', 1395, 'Ordibehsht', 1397),
(461, 226, 'کارشناس دفتر قائم مقام منطقه 8', 'شهرداری تهران ', 'Ordibehsht', 1397, 'Ordibehsht', 1398),
(462, 226, 'کارشناس دفتر شهردار منطقه 8', 'شهرداری تهران ', 'Ordibehsht', 1398, 'Azar', 1398),
(470, 308, 'مدیر دبیرستان', 'آموزش و پرورش', 'Mehr', 1376, 'Farvardin', 1398),
(492, 315, ' معاون امور موسسات فرهنگی قرآن وعترت ', 'وزارت فرهنگ و ارشاد اسلامی ', 'Shahrivar', 1393, 'Azar', 1398),
(493, 315, ' رئیس گروه فرهنگی و اجتماعی استانداری تهران', 'استانداری تهران ', 'Aban', 1392, 'Shahrivar', 1393),
(494, 315, 'سرپرست اداره کل  امور اجتماعی استانداری تهران', 'استانداری تهران ', 'Mehr', 1392, 'Aban', 1392),
(495, 315, 'معاون مدیرکل فرهنگی و اجتماعی استانداری تهران', 'استانداری تهران ', 'Shahrivar', 1388, 'Shahrivar', 1392),
(496, 315, 'قائم مقام و معاون اداره کل فرهنگ و ارشاد اسلامی استان تهران ', 'فرهنگ و ارشاد اسلامی ', 'Bahman', 1386, 'Shahrivar', 1388),
(497, 315, 'رئیس اداره فرهنگ و ارشاد اسلامی شهرستان پاکدشت', 'وزارت فرهنگ و ارشاد اسلامی ', 'Mehr', 1384, 'Bahman', 1386),
(498, 315, 'کارشناس هیات مرکزی گزینش وزارت آموزش و پرورش', 'آموزش و پرورش ', 'Farvardin', 1378, 'Mehr', 1384),
(500, 316, 'نویسنده', 'موسسه فرهنگی نگاه نو', 'Farvardin', 1381, 'Esfand', 1387),
(501, 316, 'مشاور مالی و مهندسی محصول', 'بانکهای بزرگ کشور', 'Farvardin', 1390, 'Esfand', 1398),
(502, 316, 'مدیرعامل', 'موسسه مشاوره مالی و کسب و کار نیک یار کنکاش', 'Dey', 1397, 'Esfand', 1398),
(503, 316, 'مدیر بازرگانی', 'شرکت سدید یدک خودرو', 'Khordad', 1388, 'Mordad', 1389),
(504, 316, 'مدیر تحقیقات بازار', 'شرکت بهین گستر آسیا', 'Mordad', 1389, 'Farvardin', 1390),
(505, 316, 'رئیس اداره کل بازاریابی و طراحی محصول', 'بانک قوامین', 'Ordibehsht', 1390, 'Esfand', 1398),
(506, 314, 'معاونت اداری و مالی', 'اداره کل ارشاد اسلامی استان همدان', 'Farvardin', 1389, 'Shahrivar', 1389),
(507, 314, 'رئیس دانشگاه', 'پیام نور فامنین', 'Esfand', 1393, 'Ordibehsht', 1392),
(508, 314, 'هیات علمی دانشگاه ', 'پیام نور', 'Bahman', 1384, 'Farvardin', 1398),
(510, 317, 'عضوهیات علمی', 'دانشگاه آزاد اسلمی', 'Dey', 1370, 'Dey', 1398),
(532, 319, 'کارشناس مالی و عضو هیئت مدیره', 'سبد گردان ایرانیان', 'Mordad', 1392, 'Farvardin', 1393),
(533, 319, 'مدیر اجرایی-راه اندازی فاز یک تولید آلبومین انسانی', 'گروه سرمایه گذاری اندیشه', 'Farvardin', 1388, 'Esfand', 1388),
(534, 319, 'موسس و عضو هیئت مدیره-کارشناس ارشد', 'گروه بازاریابی سیاسی اندیشه', 'Bahman', 1397, 'Esfand', 1398),
(535, 319, 'موسس و عضو هیئت میره و کارشناس ارشد', 'شرکت معاملات بین الملل رشنو', 'Mehr', 1397, 'Esfand', 1398),
(536, 319, 'عضو هیئت مدیره-مدیر ارشد', 'بیمارستان اندیشه ( شرکت اندیشه طب ایرانیان)', 'Shahrivar', 1388, 'Ordibehsht', 1395),
(537, 319, 'مذیر عامل-مدیر ارشد', 'گروه سرمایه گذاری اندیشه', 'Mordad', 1398, 'Esfand', 1391),
(538, 320, 'کارشناس مسئول فرهنگی', 'زندانها', 'Bahman', 1379, 'Farvardin', 1398),
(539, 321, 'هنر آموز', 'فنی حرفه ای', 'Mehr', 1376, 'Shahrivar', 1385),
(540, 321, 'مدیر دبیرستان', 'آموزش و پرورش', 'Mehr', 1366, 'Khordad', 1368),
(541, 302, 'معاون پژوهش', 'مرکز پژوهشی پیامبر اعظم ص', 'Azar', 1394, 'Azar', 1398),
(542, 302, 'مدیرکل امور مناطق', 'دانشگاه پیام نور', 'Dey', 1391, 'Mordad', 1392),
(543, 302, 'مدیر کل حوزه ریاست', 'دانشگاه پیام نور', 'Ordibehsht', 1389, 'Shahrivar', 1391),
(544, 302, 'مدیر کل نظارت و ارزیابی', 'وزارت علوم -دانشگاه پیام نور', 'Mordad', 1385, 'Dey', 1389),
(545, 302, 'مدیرکل', 'ریاست جمهوری -ستاد آزادگان', 'Azar', 1373, 'Shahrivar', 1378),
(546, 302, 'مدیرکل', 'بنیاد مسکن', 'Shahrivar', 1371, 'Azar', 1375),
(547, 302, 'معاون استاندار ', 'وزارت کشور', 'Khordad', 1366, 'Ordibehsht', 1369),
(548, 227, 'معاون اداری و مالی و مدیریت منابع دانشگاه ', 'دانشگاه فنی و حرفه ای استان همدان', 'Mehr', 1397, 'Dey', 1398),
(549, 227, 'مدیر امور اجرایی دانشکده فنی و حرفه ای مراکز پسران ودختران همدان ', 'دانشگاه فنی و حرفه ای', 'Khordad', 1396, 'Mehr', 1397),
(550, 227, 'مامور به مجلس شورای اسلامی', 'مجلس شورای اسلامی', 'Shahrivar', 1393, 'Khordad', 1396),
(551, 227, 'رییس آموزش و پرورش منطقه و مدیر آموزش و پرورش شهرستان', 'وزارت آموزش و پرورش', 'Tir', 1385, 'Farvardin', 1393),
(552, 227, 'کارشناس ارزیابی و کارشناس حراست ', 'وزارت آموزش و. پرورش', 'Mehr', 1374, 'Tir', 1385),
(553, 227, 'دبیر', 'وزارت آموزش و پرورش', 'Mehr', 1372, 'Mehr', 1374),
(554, 294, 'مدرس دانشگاه', 'دانشگاه فنی و حرفه ای ', 'Esfand', 1393, 'Esfand', 1398),
(555, 294, 'کارشناس (اداره خدمات کارشناسی و اطلاعات مدیریتی)', 'نهاد ریاست جمهوری', 'Farvardin', 1390, 'Esfand', 1391),
(556, 294, 'مدیر صنایع خودرویی', 'ستاد میدریت حمل و نقل و سوخت', 'Farvardin', 1392, 'Dey', 1395),
(557, 294, 'مدیر صنایع ریلی', 'ستاد مدیریت حمل و نقل و سوخت', 'Farvardin', 1392, 'Dey', 1395),
(558, 294, 'کارشناس امور فرهنگی', 'وزارت علوم، تحقیقات و فناوری', 'Dey', 1395, 'Esfand', 1398),
(559, 332, 'دبیر', 'آموزش و پرورش', 'Shahrivar', 1377, 'Mehr', 1398),
(560, 333, 'سرپرست بازرگانی خارجی و مدیر ترخیص', 'هیات امنای صرفه جویی ارزی وزارت بهداشت', 'Ordibehsht', 1388, 'Mehr', 1398),
(561, 333, 'معاون بازرگانی و سرپرست دفتر', 'شرکت ملی کشت و صنعت و دامپروری پارس', 'Mehr', 1380, 'Ordibehsht', 1385),
(566, 334, 'کارشناس مهندسی پروژه', 'نیان الکترونیک', 'Dey', 1394, 'Azar', 1398),
(572, 345, 'کنترل کیفیت', 'متالورژی پودری سهند_ همکاری ادامه دارد', 'Tir', 1398, 'Azar', 1398),
(573, 345, 'مسئول برنامه ریزی و کنترل پروژه   ', 'شرکت تفت کوبان آذرمهر', 'Mehr', 1393, 'Farvardin', 1398),
(574, 347, 'مدیر عامل', 'شرکت دانش‌بنیان سامانه‌نگار آتنا', 'Mordad', 1394, 'Farvardin', 1398),
(575, 350, 'معلم', 'آموزش و پرورش', 'Tir', 1397, 'Shahrivar', 1398),
(580, 362, 'مسئول کنترل پروژه', 'سامان صنعت بروج', 'Farvardin', 1386, 'Esfand', 1387),
(581, 362, 'معلم دینی', 'دبیرستان شریف', 'Mehr', 1397, 'Esfand', 1398),
(582, 362, 'معلم دینی', 'مدرسه ممتاز ایران', 'Mehr', 1390, 'Shahrivar', 1395),
(583, 362, 'کارشناس مسئول فروش', 'مگاموتور', 'Shahrivar', 1389, 'Esfand', 1398),
(584, 369, 'دبیر ریاضی', 'آموزش و پرورش', 'Farvardin', 1393, 'Farvardin', 1398),
(585, 339, 'کارشناس سیستم کنترل و ابزار دقیق', 'شرکت راه اندازی و بهره برداری صنایع نفت', 'Khordad', 1396, 'Azar', 1398),
(586, 339, 'کارشناس ابزار دقیق و سیستم کنترل', 'شرکت پیشگامان پرکاس پارس', 'Esfand', 1395, 'Khordad', 1396),
(594, 390, 'تست', 'تعست', 'Farvardin', 1389, 'Farvardin', 1393),
(611, 392, 'دندانپزشکی', 'مطب', 'Farvardin', 1395, 'Esfand', 1398),
(612, 388, 'عنوان شماره 1', 'سازمان شماره 1', 'Mehr', 1396, 'Azar', 1362),
(621, 389, '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(622, 389, 'عضو هیات مدیره و مدیر عامل به پخش دارو ', 'توسعه صنایع بهشهر ', 'Esfand', 1397, 'Esfand', 1398),
(623, 389, 'مدیر پشتیبانی و منابع انسانی ', 'گروه توسعه ملی ', 'Tir', 1397, 'Esfand', 1398),
(624, 389, 'مدیر کل روابط عمومی و عضو هیات رییسه ', 'سازمان مرکزی دانشگاه پیام نور ', 'Aban', 1392, 'Mehr', 1397),
(625, 389, 'معاون مدیر کل فناوری اطلاعات ', 'دانشگاه پیام نور ', 'Farvardin', 1392, 'Mehr', 1392),
(626, 389, 'عضو هیات علمی ', 'دانشگاه پیام نور ', 'Mehr', 1390, 'Esfand', 1398),
(627, 389, 'دبیر ', 'آموزش و پرورش لرستان', 'Mehr', 1376, 'Mehr', 1390),
(628, 389, 'مدیر فناوری اطلاعات ', 'آموزش و پرورش  لرستان الشتر ', 'Mehr', 1386, 'Mehr', 1388),
(629, 394, 'عنوان 2', 'سازمان 2', 'Ordibehsht', 1367, 'Mehr', 1333),
(630, 394, 'عنوان ', 'سازمان', 'Tir', 1390, 'Khordad', 1356),
(631, 395, 'بابلابابل', 'بلابلابلاب', 'Azar', 1310, 'Mordad', 1309),
(640, 244, 'طراح سایت', 'وبدیزاین', 'Ordibehsht', 1393, 'Tir', 1396),
(641, 244, 'طراح سایت555', 'وبدیزاین', 'Ordibehsht', 1390, 'Farvardin', 1393);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_military`
--

CREATE TABLE `candidate_military` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CandidateMilitaryStatus` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateExemptTitle` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateExemptDescription` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateMilitaryEndMonth` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateMilitaryEndYear` int(11) DEFAULT NULL,
  `CandidateMilitaryEndArea` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateMilitaryEndAreaTitle` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_military`
--

INSERT INTO `candidate_military` (`RowId`, `CandidateId`, `CandidateMilitaryStatus`, `CandidateExemptTitle`, `CandidateExemptDescription`, `CandidateMilitaryEndMonth`, `CandidateMilitaryEndYear`, `CandidateMilitaryEndArea`, `CandidateMilitaryEndAreaTitle`) VALUES
(40, 148, 'BuyService', 'Educational', '', 'Tir', 1354, 'Police', 'نام سایر '),
(42, 193, 'CardService', '', 'Mehr', '1375', 0, '', NULL),
(44, 189, 'CardService', '', 'Farvardin', 'Farvardin', 1300, 'Army', ''),
(45, 196, 'CardService', '', '', 'Shahrivar', 1389, 'Corps', ''),
(46, 195, '', '', 'Farvardin', '1300', 0, '', NULL),
(47, 197, 'Exempt', 'Medical', '', 'Farvardin', 1300, 'Army', ''),
(48, 199, 'Exempt', 'Guarantee', '', 'Farvardin', 1300, 'Army', ''),
(49, 200, 'CardService', '', '', 'Farvardin', 1300, 'Army', ''),
(50, 174, 'CardService', '', '', 'Aban', 1391, 'Corps', ''),
(52, 202, 'Exempt', 'Medical', '', 'Farvardin', 1300, 'Army', ''),
(53, 203, 'Exempt', 'Others', 'فرزند جانباز ایثارگر', 'Farvardin', 1300, 'Army', ''),
(54, 207, 'Included', '', '', 'Farvardin', 1300, 'Army', ''),
(57, 208, 'CardService', '', '', 'Mehr', 1386, 'Corps', ''),
(58, 209, 'Exempt', 'Others', 'تبصره رهبری', 'Farvardin', 1300, 'Army', ''),
(59, 211, 'CardService', '', '', 'Farvardin', 1389, 'Army', ''),
(60, 164, 'Exempt', 'Others', 'سه برادری', 'Farvardin', 1300, 'Army', ''),
(61, 183, 'Exempt', 'Guarantee', '', 'Farvardin', 1300, 'Army', ''),
(63, 214, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(64, 219, 'CardService', '', '', 'Aban', 1338, 'Corps', ''),
(65, 221, 'Exempt', 'Educational', '', 'Farvardin', 1398, 'Army', ''),
(68, 237, 'CardService', '', '', 'Shahrivar', 1390, 'Corps', ''),
(69, 238, 'Exempt', 'Others', 'خانواده شهدا', 'Farvardin', 1398, 'Army', ''),
(70, 213, 'Exempt', 'Others', 'فرزند شهید', 'Farvardin', 1398, 'Army', ''),
(71, 239, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(75, 241, 'BuyService', '', '', 'Farvardin', 1398, 'Army', ''),
(77, 178, 'CardService', '', '', 'Farvardin', 1388, 'Others', 'اموزش و پرورش '),
(79, 220, 'CardService', '', '', 'Farvardin', 1386, 'Corps', ''),
(81, 201, 'Exempt', 'Others', 'فرزند جانباز ایثارگر', 'Farvardin', 1300, 'Army', ''),
(83, 245, 'Exempt', 'Medical', 'Farvardin', 'Farvardin', 1398, 'Army', ''),
(84, 230, 'CardService', '', '', 'Dey', 1397, 'Police', ''),
(85, 247, 'CardService', '', '', 'Dey', 1382, 'Corps', ''),
(87, 251, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(88, 254, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(91, 255, 'CardService', '', '', 'Esfand', 1391, 'DepartmentDefense', ''),
(92, 256, 'CardService', '', '', 'Tir', 1383, 'Others', 'اداره ارشاد اسلامی'),
(95, 259, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(97, 261, 'Exempt', 'Others', 'عفو مقام معظم رهبری', 'Farvardin', 1398, 'Army', ''),
(98, 262, 'CardService', '', '', 'Farvardin', 1398, 'Corps', ''),
(100, 266, 'CardService', '', '', 'Khordad', 1374, 'Police', ''),
(101, 268, 'Exempt', 'Educational', '', 'Farvardin', 1398, 'Army', ''),
(102, 267, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(103, 258, 'Exempt', 'Others', 'عفو رهبری', 'Farvardin', 1398, 'Army', ''),
(105, 165, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(108, 276, 'BuyService', '', '', 'Farvardin', 1398, 'Army', ''),
(111, 278, 'CardService', '', '', 'Tir', 1379, 'Corps', ''),
(113, 136, 'CardService', '', '', 'Tir', 1396, 'Police', ''),
(114, 279, 'CardService', '', '', 'Tir', 1398, 'Army', ''),
(115, 281, 'CardService', '', '', 'Azar', 1377, 'Corps', ''),
(116, 285, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(120, 282, 'Exempt', '', '', 'Farvardin', 1398, 'Army', ''),
(121, 225, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(122, 275, 'CardService', '', '', 'Khordad', 1392, 'DepartmentDefense', ''),
(123, 289, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(124, 290, 'Exempt', 'Others', 'تبصره۲', 'Farvardin', 1398, 'Army', ''),
(126, 291, 'CardService', '', '', 'Aban', 1377, 'Army', ''),
(128, 224, 'CardService', '', '', 'Khordad', 1378, 'Army', ''),
(130, 295, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(131, 296, 'CardService', '', '', 'Mordad', 1364, 'Corps', ''),
(133, 298, 'CardService', '', '', 'Khordad', 1391, 'Corps', ''),
(136, 299, 'CardService', '', '', 'Tir', 1382, 'Army', ''),
(137, 300, 'CardService', '', '', 'Esfand', 1365, 'Corps', ''),
(139, 303, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(142, 271, 'CardService', '', '', 'Shahrivar', 1382, 'Army', ''),
(144, 304, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(145, 302, 'Exempt', 'Others', '', 'Farvardin', 1398, 'Army', ''),
(149, 305, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(151, 309, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(154, 311, 'Exempt', 'Others', 'ایثارگری پدر عزیزم', 'Farvardin', 1398, 'Army', ''),
(155, 310, 'Dey', '', 'Farvardin', '1398', 0, '', NULL),
(156, 301, 'CardService', '', '', 'Mehr', 1382, 'Corps', ''),
(157, 226, 'CardService', '', '', 'Mordad', 1389, 'Corps', ''),
(158, 313, 'Included', '', '', 'Farvardin', 1398, 'Army', ''),
(160, 308, 'Exempt', 'Others', 'معافیت خدمت بعنوان معلم', 'Farvardin', 1398, 'Army', ''),
(164, 315, 'Exempt', 'Others', 'آموزش و پرورش ', 'Farvardin', 1398, 'Army', ''),
(165, 316, 'CardService', '', '', 'Farvardin', 1388, 'Army', ''),
(166, 314, 'CardService', '', '', 'Bahman', 1381, 'Corps', ''),
(167, 319, 'Exempt', 'Others', 'سن پدر و تک پسر', 'Farvardin', 1398, 'Army', ''),
(168, 320, 'Exempt', 'Others', '', 'Farvardin', 1398, 'Army', ''),
(169, 227, 'Exempt', 'Others', 'تعهد خدمت - معافیت رهبری', 'Farvardin', 1398, 'Army', ''),
(170, 294, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(171, 332, 'Exempt', 'Others', 'دبیری', 'Farvardin', 1398, 'Army', ''),
(172, 331, 'CardService', '', '', 'Farvardin', 1379, 'Corps', ''),
(173, 333, 'CardService', '', '', 'Azar', 1387, 'Army', ''),
(178, 334, 'CardService', '', '', 'Shahrivar', 1394, 'Army', ''),
(179, 336, 'CardService', '', '', 'Tir', 1398, 'Police', ''),
(180, 340, 'CardService', '', '', 'Farvardin', 1398, 'Army', ''),
(181, 341, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(183, 342, 'CardService', '', '', 'Ordibehsht', 1393, 'Army', ''),
(184, 343, 'CardService', '', '', 'Khordad', 1396, 'Corps', ''),
(186, 347, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(187, 350, 'Exempt', 'Others', '', 'Farvardin', 1398, 'Army', ''),
(188, 352, 'CardService', '', '', 'Farvardin', 1370, 'Corps', ''),
(189, 353, 'Exempt', 'Educational', '', 'Farvardin', 1398, 'Army', ''),
(190, 356, 'CardService', '', '', 'Farvardin', 1398, 'Army', ''),
(191, 357, 'CardService', '', '', 'Mehr', 1388, 'Army', ''),
(192, 360, 'BuyService', '', '', 'Farvardin', 1398, 'Army', ''),
(193, 348, 'CardService', '', '', 'Esfand', 1394, 'Army', ''),
(194, 363, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(195, 362, 'CardService', '', '', 'Mordad', 1389, 'Corps', ''),
(196, 366, 'Exempt', 'Others', '', 'Farvardin', 1398, 'Army', ''),
(197, 371, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(198, 373, 'CardService', '', '', 'Ordibehsht', 1381, 'Police', ''),
(199, 374, 'CardService', '', '', 'Mehr', 1380, 'Army', ''),
(200, 361, 'CardService', '', '', 'Tir', 1381, 'Corps', ''),
(201, 339, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(205, 390, 'CardService', '', '', 'Farvardin', 1398, 'Corps', ''),
(206, 392, 'CardService', '', '', 'Esfand', 1397, 'Corps', ''),
(208, 388, 'Exempt', 'Guarantee', '', 'Farvardin', 1398, 'Army', ''),
(210, 389, 'Exempt', 'Others', 'تعهد خدمت در آموزش پروش بوده ام و کارت را دریافت نمو ده ام ', 'Farvardin', 1398, 'Army', ''),
(211, 394, 'Exempt', 'Medical', '', 'Farvardin', 1398, 'Army', ''),
(212, 395, 'CardService', '', '', 'Farvardin', 1398, 'Corps', ''),
(214, 244, 'Serving', '', '', 'Ordibehsht', 1382, 'Corps', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_politic_record`
--

CREATE TABLE `candidate_politic_record` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CandidateActivityType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'قالب فعالیت',
  `CandidateActivityTypeOtherOrganizationTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نام مجموعه اگر قالب فعالیت سایر انتخاب شد',
  `CandidateElectionType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نوع انتخابات',
  `CandidateElectionPeriod` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'دوره انتخابات',
  `CandidateElectionListName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نام نامزد / لیست',
  `CandidateHeadquarterActivityTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'عنوان همکاری وقتی قالب فعالیت هیئ نظارت و اجرایی ستاد انتخابات باشد',
  `CandidateMediaType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'قالب رسانه',
  `CandidateMediaTypeTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'عنوان قالب رسانه اگر قالب رسانه سایر انتخاب شد',
  `CandidateMediaTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نام رسانه',
  `CandidateMediaActivityType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نوع فعالیت رسانه',
  `CandidateResponsibility` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'مسئولیت',
  `CandidateMemberShip` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'عضویت',
  `CandidateMediaStartMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ماه شروع همکاری',
  `CandidateMediaStartYear` int(11) NOT NULL COMMENT 'سال شروع همکاری',
  `CandidateMediaEndMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ماه پایان همکاری',
  `CandidateMediaEndYear` int(11) NOT NULL COMMENT 'سال پایان همکاری',
  `CandidateActivityDescription` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'توضیحات'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_politic_record`
--

INSERT INTO `candidate_politic_record` (`RowId`, `CandidateId`, `CandidateActivityType`, `CandidateActivityTypeOtherOrganizationTitle`, `CandidateElectionType`, `CandidateElectionPeriod`, `CandidateElectionListName`, `CandidateHeadquarterActivityTitle`, `CandidateMediaType`, `CandidateMediaTypeTitle`, `CandidateMediaTitle`, `CandidateMediaActivityType`, `CandidateResponsibility`, `CandidateMemberShip`, `CandidateMediaStartMonth`, `CandidateMediaStartYear`, `CandidateMediaEndMonth`, `CandidateMediaEndYear`, `CandidateActivityDescription`) VALUES
(44, 148, 'CandidatesCampaign', '', 'President', '2', 'لیست شماره 2', '', '', '', '', '', 'مسئولیت شماره 1', '', 'Farvardin', 1300, 'Farvardin', 1300, 'توضیحات شماره 2'),
(45, 148, 'Group', '', 'President', '', '', '', '', '', '', '', 'مسئولیت شماره 1', 'Official', 'Farvardin', 1300, 'Farvardin', 1300, 'توضیحات شماره 1'),
(47, 193, 'SupervisoryBoard', '', 'President', '9', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(48, 189, 'CandidatesCampaign', '', 'President', '5', 'امید', '', '', '', '', '', 'مسئولیت 1', '', 'Farvardin', 1300, 'Farvardin', 1300, 'مسئولیت 2'),
(49, 195, '', '', '', '', '', '', '', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(50, 196, 'SupervisoryBoard', '', 'President', '10', '', 'SupervisoryBoard', '', '', '', '', 'بازرس', '', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(51, 196, 'Others', ' شبکه یاران استان', '', '', '', '', '', '', '', '', 'مسئول دفتر', 'Official', 'Azar', 1397, 'Aban', 1398, ''),
(52, 197, 'SupervisoryBoard', '', 'CouncilExperts', '4', '', 'ExecutiveCommittee', '', '', '', '', 'مسئول شماره 1', '', 'Farvardin', 1300, 'Farvardin', 1300, 'توضیح شماره 1'),
(53, 198, 'CandidatesCampaign', '', 'President', '11', 'نمیگم', '', '', '', '', '', 'مدیریت', '', 'Farvardin', 1300, 'Farvardin', 1300, 'ندارددددددد'),
(54, 199, 'Group', '', '', '', '', '', '', '', '', '', 'مدیریت', 'Official', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(55, 200, 'CandidatesCampaign', '', '', '', '', '', '', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(56, 203, 'Media', '', '', '', '', '', 'Voice', '', 'شبکه افلاک لرستان', 'کارشناس مجری برنامه تحلیل بیانیه گام دوم انقلاب در چهل جلسه', 'کارشناس مجری', '', 'Tir', 1398, 'Esfand', 1398, ''),
(57, 207, 'Media', '', '', '', '', '', 'NewSite', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300, 'بنده دانشجوی اخراجی دانشگاه صنعتی شریف هستم، دلیلش هم نگرفتن جایزه از معاونت فرهنگی سازمان منطقه آزاد کیش بود و بعد از اون حاشیه‌هایی برایم درست شد و در نهایت دو ترم مشروط و اخراج ظالمانه، به این دلیل که هیچ پشتیبانی نداشتم که مجوز ادامه تحصیل بگیرم در ک'),
(58, 208, 'Others', 'نام شماره 1', '', '', '', '', '', '', '', '', 'شماره 1', 'Voluntary', 'Aban', 1357, 'Dey', 1351, 'توضیح شماره 1'),
(59, 209, 'SupervisoryBoard', '', 'CityCouncil', '5', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(60, 209, 'SupervisoryBoard', '', 'CouncilExperts', '5', '', 'SupervisoryBoard', '', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(61, 209, 'SupervisoryBoard', '', 'Parliament', '', '', 'SupervisoryBoard', '', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300, ''),
(62, 211, 'Others', '', '', '', '', '', '', '', '', '', 'سرباز', 'Voluntary', 'Dey', 1388, 'Farvardin', 1389, 'فعالیت سیاسی نداشته ام'),
(63, 183, 'Group', '', '', '', '', '', '', '', '', '', 'كانون دانشگاهيان ايران اسلامي ', 'Official', 'Farvardin', 1300, 'Farvardin', 1300, 'عضو اصلي استان سمنان'),
(64, 183, 'Group', '', '', '', '', '', '', '', '', '', 'مجمع اتلاف نيروهاي انقلاب اسلامي سمنان', 'Official', 'Farvardin', 1300, 'Farvardin', 1300, 'عضو اصلي'),
(66, 214, 'Group', '', 'President', '', '', '', '', '', '', '', 'مدیر', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, 'برشبسیب سیشب شسیب ش'),
(67, 219, 'Others', 'تنمتنمتنم', '', '', '', '', '', '', '', '', 'تنمتنمتنم', 'Voluntary', 'Azar', 1370, 'Dey', 1372, 'تنمتنمتنم'),
(68, 219, 'SupervisoryBoard', '', 'President', '3', '', 'SupervisoryBoard', '', '', '', '', 'اتناتن', '', 'Farvardin', 1398, 'Farvardin', 1398, 'اتناتن'),
(69, 219, 'CandidatesCampaign', '', 'Parliament', '5', 'تاناتناتن', '', '', '', '', '', 'تاناتن', '', 'Farvardin', 1398, 'Farvardin', 1398, 'اناتناتن'),
(70, 219, 'Group', '', '', '', '', '', '', '', '', '', 'لاتلاتلات', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, 'لاتلتلتلت'),
(71, 221, 'Group', '', '', '', '', '', '', '', '', '', 'نمتمنت', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, 'منتمنت'),
(107, 237, 'SupervisoryBoard', '', 'CityCouncil', '5', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(108, 237, 'SupervisoryBoard', '', 'CouncilExperts', '5', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(109, 237, 'SupervisoryBoard', '', 'Parliament', '10', '', 'ExecutiveCommittee', '', '', '', '', 'نماینده فرماندار', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(110, 237, 'SupervisoryBoard', '', 'Parliament', '9', '', 'ExecutiveCommittee', '', '', '', '', 'نماینده فرماندار', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(111, 237, 'SupervisoryBoard', '', 'President', '12', '', 'ExecutiveCommittee', '', '', '', '', 'نماینده فرماندار', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(112, 237, 'SupervisoryBoard', '', 'President', '11', '', 'ExecutiveCommittee', '', '', '', '', 'نماینده فرماندار', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(113, 237, 'SupervisoryBoard', '', 'President', '10', '', 'ExecutiveCommittee', '', '', '', '', 'نماینده فرماندار در منطقه 7', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(121, 238, 'CandidatesCampaign', '', 'President', '11', 'جلیلی', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(122, 238, 'CandidatesCampaign', '', 'President', '12', 'رییسی', '', '', '', '', '', 'فضای مجازی', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(123, 213, 'Media', '', 'President', '', '', '', 'NewSite', '', 'دعوت ', 'مهمان برنامه دعوت ماه رمضان 98', 'مهمان دعوت', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(124, 213, 'Group', '', 'President', '', '', '', '', '', '', '', 'تشکل ایثارگران ', 'Voluntary', 'Farvardin', 1398, 'Farvardin', 1398, 'به صورت افتخاری در جهت رفع مشکل ایثارگران '),
(125, 213, 'CandidatesCampaign', '', 'Parliament', '10', 'آقای دکتر کامران دستجردی', '', '', '', '', '', 'هماهنگ کننده ', '', 'Farvardin', 1398, 'Farvardin', 1398, 'حوزه ایثارگران '),
(126, 213, 'CandidatesCampaign', '', 'Parliament', '10', 'آقای دکتر بروجردی - آقای عباس گودرزی ', '', '', '', '', '', 'هماهنگ کننده ', '', 'Farvardin', 1398, 'Farvardin', 1398, 'حوزه جوانان در فضای مجازی'),
(127, 213, 'CandidatesCampaign', '', 'Parliament', '9', 'آقای دکتر بروجردی - آقای بهرام بیرانوند', '', '', '', '', '', 'هماهنگ کننده ', '', 'Farvardin', 1398, 'Farvardin', 1398, 'رسانه و جوانان '),
(128, 213, 'CandidatesCampaign', '', 'Parliament', '8', 'آقای دکتر بروجردی - آقای دکتر یحیوی ', '', '', '', '', '', 'هماهنگ کننده ', '', 'Farvardin', 1398, 'Farvardin', 1398, 'حوزه جوانان '),
(129, 213, 'CandidatesCampaign', '', 'Parliament', '7', 'آقای دکتر بروجردی - آقای مهندس نظام الاسلامی ', '', '', '', '', '', 'هماهنگ کننده ', '', 'Farvardin', 1398, 'Farvardin', 1398, 'حوزه جوانان '),
(130, 239, 'Others', 'فناوری تکنولوژی ریاست جمهوری', '', '', '', '', '', '', '', '', '', 'Voluntary', 'Aban', 1384, 'Khordad', 1385, ''),
(143, 178, 'SupervisoryBoard', '', 'CityCouncil', '', '', 'ExecutiveCommittee', '', '', '', '', 'نایب رئیس صندوق', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(144, 178, 'SupervisoryBoard', '', 'President', '9', '', 'SupervisoryBoard', '', '', '', '', 'بازرس', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(145, 178, 'SupervisoryBoard', '', 'President', '8', 'مجید اصغرزاده', 'ExecutiveCommittee', '', '', '', '', 'نایب رئیس صندوق', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(149, 220, 'Others', '', 'President', '', '', '', '', '', '', '', '', 'Voluntary', 'Farvardin', 1378, 'Farvardin', 1398, ''),
(153, 245, 'Others', 'ادل', '', '', '', '', '', '', '', '', 'لدذ', 'Voluntary', 'Farvardin', 1398, 'Farvardin', 1398, 'الل'),
(154, 251, 'Others', '', '', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(156, 256, 'SupervisoryBoard', '', 'President', '12', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(165, 255, 'CandidatesCampaign', '', 'Parliament', '8', 'اصولگریان', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(166, 255, 'CandidatesCampaign', '', 'Parliament', '9', 'اصولگریان', '', '', '', '', '', 'عضو ستاد ', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(167, 255, 'CandidatesCampaign', '', 'Parliament', '10', 'دکتر حسین نوری', '', '', '', '', '', 'کاندیدای مجلس از حوزه انتخابیه مینودشت', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(168, 255, 'CandidatesCampaign', '', 'President', '12', 'آیت الله رئیسی', '', '', '', '', '', 'عضو ستاد نخبگان', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(169, 255, 'CandidatesCampaign', '', 'President', '11', 'دکتر سعید جلیلی', '', '', '', '', '', 'عضو ستاد نخبگان دکتر جلیلی', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(170, 255, 'CandidatesCampaign', '', 'President', '10', 'دکتر محمود احمدی نژاد', '', '', '', '', '', 'عضو ستاد دکتر محمود احمدی نژاد', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(171, 255, 'CandidatesCampaign', '', 'President', '9', 'دکتر محمود احمدی نژاد', '', '', '', '', '', 'عضو ستاد', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(172, 255, 'Group', '', '', '', '', '', '', '', '', '', 'عضو', 'Voluntary', 'Farvardin', 1398, 'Farvardin', 1398, 'عضو جبهه پایداری'),
(173, 259, 'Others', '', '', '', '', '', '', '', '', '', '', 'Voluntary', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(174, 262, 'CandidatesCampaign', '', 'President', '12', 'قالیباف ', '', '', '', '', '', 'عادی', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(190, 254, 'Media', '', '', '', '', '', '', '', '', '', 'نشریات مکتوب اعم از روزنامه ها  و هفته نامه ها و ماهنامه ها و  نشریات دانشجوئی را در کدام فیلد وارد کنیم ؟ نشریات دانشجویی ', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(191, 254, 'Media', '', 'President', '10', 'دکتر احمدی نژاد ', '', '', '', '', '', 'قائم مقام ستاد استان لرستان', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(192, 254, 'SupervisoryBoard', '', 'Parliament', '8', '', '', '', '', '', '', 'عضو و دبیر هیئت بازرسی انتخابات استان ', '', 'Farvardin', 1398, 'Farvardin', 1398, 'هر انتخاباتی دارای سه رکن: 1.هیئت اجرائی 2. هیئت بازرسی و 3. هیئت نظارت است و فیلد هیئت بازرسی باید در عنوان همکاری اضافه شود '),
(193, 254, 'CandidatesCampaign', '', 'CityCouncil', '3', 'رایحه خوش خدمت استان ', '', '', '', '', '', 'عضو شورای یازده نفره استان', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(194, 254, 'CandidatesCampaign', '', 'President', '9', 'دکتر احمدی نژاد', '', '', '', '', '', 'قاءم مقام ستاد استان لرستان و مسئول کمیته نظارت ستاد ', '', 'Farvardin', 1398, 'Farvardin', 1398, 'دور اول و دوم'),
(195, 165, '', '', '', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(196, 165, 'SupervisoryBoard', '', 'President', '9', '', 'ExecutiveCommittee', '', '', '', '', 'بازرس ', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(197, 165, 'Group', '', '', '', '', '', '', '', '', '', 'دبیر حزب جمعیت جوانان انقلاب اسلامی استان زنجان ', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(198, 273, 'Media', '', '', '', '', '', 'Journals', '', 'شرق - تجارت فردا - دنیای اقتصاد - تجارت نیوز و ...', 'نویسنده', 'نویسنده', '', 'Farvardin', 1380, 'Azar', 1398, ''),
(201, 278, '', '', 'President', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(204, 281, 'Group', '', '', '', '', '', '', '', '', '', 'عدالت طلبان ایران (لرستان)', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(206, 282, 'Group', '', 'President', '', '', '', '', '', '', '', 'عضو', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, 'جامعه اسلامی فرهنگیان'),
(207, 225, '', '', '', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(209, 289, 'CandidatesCampaign', '', 'Parliament', '9', 'روح الله عبدخاني', '', '', '', '', '', 'كانديدا', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(210, 290, 'CandidatesCampaign', '', 'CouncilExperts', '5', 'آیت الله حائری شیرازی', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(214, 224, 'SupervisoryBoard', '', 'President', '12', '', 'SupervisoryBoard', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(218, 275, 'Others', 'گفتمان انقلاب اسلامی', 'President', '', '', '', '', '', '', '', 'عضو کارگروه نفت و گاز', 'Voluntary', 'Farvardin', 1392, 'Esfand', 1398, ''),
(219, 295, 'SupervisoryBoard', '', 'President', '12', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(220, 295, 'SupervisoryBoard', '', 'Parliament', '9', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(221, 298, 'Media', '', '', '', '', '', 'Journals', '', 'خبرگزاری فارس', '', '', '', 'Farvardin', 1396, 'Farvardin', 1398, ''),
(224, 299, 'SupervisoryBoard', '', 'President', '9', '', 'SupervisoryBoard', '', '', '', '', 'قائم مقام منطقه ۱۰ تهران', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(225, 303, 'SupervisoryBoard', '', '', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(226, 304, 'Group', '', '', '', '', '', '', '', '', '', 'مدیریت', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, 'تا تانتیایب تنبام نتیاب تشماسنتاب شتنامیتاش سمیتاشت مسایت'),
(227, 302, 'Others', '', '', '', '', '', '', '', '', '', '', 'Official', 'Dey', 1362, 'Aban', 1385, 'ناجا و سپاه و در دانشگاه کرسیه های نقد و نظریه و بصیرت افزایی'),
(230, 305, 'Media', '', '', '', '', '', 'Voice', '', 'رادیو', 'کارشناس', 'کارشناس برنامه رادیویی', '', 'Bahman', 1397, 'Bahman', 1397, ''),
(231, 305, 'Media', '', 'President', '', '', '', 'Voice', '', 'سیمای سمنان', 'کارشناس', 'کارشناس تلویزیونی', '', 'Azar', 1397, 'Mordad', 1398, ''),
(233, 309, 'CandidatesCampaign', '', 'Parliament', '10', 'صديف بدري', '', '', '', '', '', 'كميته صنعت', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(236, 310, '', '', 'President', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(243, 301, 'CandidatesCampaign', '', 'CityCouncil', '4', 'سيدمجتبي حسيني', '', '', '', '', '', 'كانديدا', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(244, 301, 'CandidatesCampaign', '', 'CityCouncil', '5', 'اصغر سليماني', '', '', '', '', '', 'عضو ستاد', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(245, 301, 'CandidatesCampaign', '', 'Parliament', '10', 'حميدرضا حاجي بابايي', '', '', '', '', '', 'مسئول نظرسنجي-اتاق فكر-سخنران', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(251, 226, 'SupervisoryBoard', '', 'President', '12', '', 'SupervisoryBoard', '', '', '', '', 'ناظر صندوق سیار', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(252, 226, 'SupervisoryBoard', '', 'Parliament', '10', '', 'SupervisoryBoard', '', '', '', '', 'ناظر', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(253, 226, 'SupervisoryBoard', '', 'Parliament', '9', '', 'ExecutiveCommittee', '', '', '', '', 'کاربر رایانه', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(254, 226, 'SupervisoryBoard', '', 'President', '11', '', 'ExecutiveCommittee', '', '', '', '', 'کاربر رایانه', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(255, 313, 'CandidatesCampaign', '', 'President', '12', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(273, 308, 'CandidatesCampaign', '', 'President', '10', 'دکتر جلیلی', '', '', '', '', '', 'مسئول ستاد فرهنگیان شهر کبودراهنگ', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(274, 316, 'Group', '', '', '', '', '', '', '', '', '', '', 'Voluntary', 'Farvardin', 1398, 'Farvardin', 1398, 'شرکت در انتخابات  شورای شهر تهران'),
(275, 314, '', '', 'President', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(276, 314, 'SupervisoryBoard', '', 'President', '10', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(277, 314, 'SupervisoryBoard', '', 'CityCouncil', '4', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(278, 314, 'SupervisoryBoard', '', 'Parliament', '8', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(280, 317, 'Others', 'بسیج اساتید', 'President', '', '', '', '', '', '', '', 'مشاور عالی رییس بسیج اساتید استان اصفها ن عضو شورای عالی بسیجن ', 'Official', 'Khordad', 1379, 'Dey', 1398, 'همکاری همچنان ادامه دارد'),
(283, 319, 'Others', 'مرکز تحقیقات استراتژیک', 'President', '', '', '', '', '', '', '', 'حامی و تامین مالی تهیه تدوین و چاپ کتاب امنیت ملی و نظام اقتصادی به کوشش دکتر حسن روحانی', 'Voluntary', 'Farvardin', 1390, 'Farvardin', 1390, 'حامی و تامین مالی تهیه تدوین و چاپ کتاب امنیت ملی و نظام اقتصادی به کوشش دکتر حسن روحانی در مرکز تحقیقات استراتژیک مجمع تشخیص مصلحت نظام'),
(284, 320, 'CandidatesCampaign', '', 'President', '12', 'آیت الله رئیسی', '', '', '', '', '', 'رئیس ستاد', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(285, 227, 'Group', '', 'President', '', '', '', '', '', '', '', 'قائم مقام', 'Voluntary', 'Farvardin', 1398, 'Farvardin', 1398, 'کانون تربیت اسلامی استان همدان '),
(286, 227, 'SupervisoryBoard', '', 'President', '9', '', 'ExecutiveCommittee', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, 'در تمام انتخابات از سال 74 بعنوان عوامل اجرایی ، عضو هیات اجرایی و ناظر حضور داشته ام '),
(287, 294, 'SupervisoryBoard', '', 'Parliament', '6', '', 'ExecutiveCommittee', '', '', '', '', 'منشی', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(288, 294, 'SupervisoryBoard', '', 'President', '12', '', 'ExecutiveCommittee', '', '', '', '', 'نماینده فرماندار', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(289, 294, 'SupervisoryBoard', '', 'President', '8', '', 'SupervisoryBoard', '', '', '', '', 'ناظر', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(294, 334, '', '', 'President', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(300, 345, 'Media', '', '', '', '', '', 'NewSite', '', 'اینستاگرام', 'فعالیت مدنی و شهروندی با موضعیت بحث پیرامون عدالتخواهی', 'شهروندی', '', 'Farvardin', 1396, 'Azar', 1398, 'فعالیت مدنی و شهروندی با موضعیت بحث پیرامون عدالتخواهی بصورت ناشناس'),
(303, 350, 'CandidatesCampaign', '', 'President', '12', 'رییسی', '', '', '', '', '', '', 'Official', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(305, 353, 'CandidatesCampaign', '', 'Parliament', '9', 'دکتر محمد جواد نظری مهر', '', '', '', '', '', 'فعالیت در ستاد به صورت محدود به دلایل خاص', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(306, 353, 'CandidatesCampaign', '', 'Parliament', '8', 'دکتر محمد جواد نظری مهر', '', '', '', '', '', 'مسئول ستاد', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(307, 357, 'SupervisoryBoard', '', 'President', '9', '', 'SupervisoryBoard', '', '', '', '', 'ناظر صندوق آرا', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(308, 362, 'Media', '', '', '', '', '', 'NewSite', '', 'انقلابگرام', 'ادمین', 'ادمین', '', 'Farvardin', 1394, 'Dey', 1398, ''),
(309, 362, 'Media', '', '', '', '', '', 'NewSite', '', 'کانال تلگرامی بازتاب', 'تولید و توزیع محتوا', 'ادمین', '', 'Farvardin', 1391, 'Esfand', 1395, 'سایت بازتاب با شکایت حسین فریدون برادر رئیس جمهور بسته شد'),
(310, 362, 'SupervisoryBoard', '', 'President', '10', '', 'SupervisoryBoard', '', '', '', '', 'ناظر صندوق', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(311, 362, 'Media', '', '', '', '', '', 'Journals', '', 'الف', 'یادداشت نویس', 'نداشتم', '', 'Farvardin', 1393, 'Farvardin', 1398, ''),
(312, 371, 'CandidatesCampaign', '', 'President', '10', 'احمدی نژاد', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(313, 369, '', '', '', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(314, 339, 'CandidatesCampaign', '', 'President', '11', 'سعید جلیلی', '', '', '', '', '', 'عضو ستاد جوانان', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(315, 339, 'SupervisoryBoard', '', 'President', '11', '', 'ExecutiveCommittee', '', '', '', '', 'رئیس صندوق', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(321, 388, 'Others', 'نام شماره 1', 'President', '', '', '', '', '', '', '', 'شماره 1', 'Voluntary', 'Dey', 1390, 'Tir', 1308, 'توضیح شماره 1'),
(322, 388, 'Media', '', 'President', '', '', '', 'Journals', '', 'رسانه شماره 1', 'فعالیت شماره 1', 'شماره 1', '', 'Dey', 1354, 'Mehr', 1307, ''),
(323, 388, 'CandidatesCampaign', '', 'President', '3', 'نامزد شماره 1', '', '', '', '', '', 'شماره 1', '', 'Farvardin', 1398, 'Farvardin', 1398, 'توضیح شماره 1'),
(324, 390, 'Media', '', '', '', '', '', 'Voice', '', 'ب سیب شیسب', 'یب یب شیب شی', 'بی شیسب شیبش یبش ب', '', 'Farvardin', 1394, 'Farvardin', 1398, 'یب شیبش یش یبش یب ش'),
(333, 389, '', '', 'President', '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(334, 389, 'SupervisoryBoard', '', 'CouncilExperts', '4', '', 'ExecutiveCommittee', '', '', '', '', 'هیات اجرایی ', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(335, 389, 'SupervisoryBoard', '', 'President', '10', '', 'ExecutiveCommittee', '', '', '', '', 'مسول فنی انتخابات شهرستان سلسله', '', 'Farvardin', 1398, 'Farvardin', 1398, ''),
(336, 389, 'Media', '', 'President', '', '', '', 'Journals', '', 'یوپنا (خبرگزاری دانشگاه پیام نور )', 'موسس و مدیر مسول ', '', '', 'Aban', 1394, 'Dey', 1397, ''),
(337, 395, 'SupervisoryBoard', '', 'Parliament', '2', '', 'ExecutiveCommittee', '', '', '', '', 'بلابلابلابلا', '', 'Farvardin', 1398, 'Farvardin', 1398, 'بلابلابلابلا'),
(340, 244, 'CandidatesCampaign', '', 'President', '9', 'کرامت', '', '', '', '', '', 'شیپورچی', '', 'Farvardin', 1398, 'Farvardin', 1398, '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_post`
--

CREATE TABLE `candidate_post` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `PostId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_bank_account`
--

CREATE TABLE `candidate_price_bank_account` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `BankAccountTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'عنوان بانک یا مؤسسه',
  `BankAccountCountryId` int(11) NOT NULL COMMENT 'کشور',
  `BankAccountPrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'مبلغ ',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_bank_account`
--

INSERT INTO `candidate_price_bank_account` (`RowId`, `CandidateId`, `BankAccountTitle`, `BankAccountCountryId`, `BankAccountPrice`, `ForWho`) VALUES
(1, 239, 'بانک رفاه', 103, '2. MI', 'Self'),
(2, 178, 'ملی‌ ، ملت ', 103, '. HZ', 'Self'),
(3, 178, 'بانک شهر .بانک مسکن ', 103, '. 0', 'Child'),
(4, 178, 'بانک شهر .بانک مسکن ', 103, '.30 MI', 'Wife'),
(5, 267, 'بانک تجارت', 103, '6. MI', 'Self'),
(6, 304, 'ملت', 103, '1.000 MI', 'Self'),
(7, 226, 'انصار', 103, '090.000 MI', 'Self'),
(8, 226, 'مسکن', 103, '450.000 HZ', 'Child'),
(9, 339, 'کشاورزی', 103, '5. MI', 'Self'),
(13, 244, '897987', 103, '2.4 MI', 'Self'),
(14, 244, '4', 142, '7.5 ML', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_credit_debtor`
--

CREATE TABLE `candidate_price_credit_debtor` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `DebotrPrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'جمع کل بدهکاری ',
  `CreditPrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'جمع کل بستانکاری ',
  `DebotrDescription` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'توضیحات برای بدهکاری ',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_credit_debtor`
--

INSERT INTO `candidate_price_credit_debtor` (`RowId`, `CandidateId`, `DebotrPrice`, `CreditPrice`, `DebotrDescription`, `ForWho`) VALUES
(1, 178, '0. MI', '0.600 MI', 'بدهی و طلبکاری بابت خرید و فروش در بازار هست .', 'Self'),
(2, 241, '0.0 HZ', '.0 ML', '', 'Self'),
(3, 258, '0.0 HZ', '0.0 HZ', '', 'Self'),
(4, 267, '0.0 HZ', '0.0 HZ', '', 'Self'),
(5, 267, '0.0 HZ', '0.0 HZ', '', 'Wife'),
(6, 267, '0.0 HZ', '0.0 HZ', '', 'Child'),
(7, 165, '0.0 HZ', '0.0 HZ', '', 'Self'),
(8, 299, '0.0 HZ', '0.0 HZ', '', 'Self'),
(9, 303, '0.0 HZ', '0.0 HZ', '', 'Self'),
(10, 304, '500.0 HZ', '1.0 MI', 'تا نتانمتا تنامنتا تنماتنا تمانتا تنمانتا نان \r\n تمتن متکمنت منتکم ', 'Self'),
(11, 226, '100.000 MI', '0.0 HZ', 'بدهکاری به بانک ها در غالب وام', 'Self'),
(12, 339, '45.0 MI', '2.0 MI', 'دو فقره وام به مبلغ 15و 30میلیون ', 'Self'),
(13, 339, '0.0 HZ', '0.0 HZ', '', 'Wife'),
(14, 339, '0.0 HZ', '0.0 HZ', '', 'Child'),
(16, 244, '2.2 MI', '2.2 HZ', '', 'Wife'),
(17, 244, '4.3 MI', '5.2 ML', 'بدهکاری بانکی', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_election`
--

CREATE TABLE `candidate_price_election` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `ElectionPlacePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '-	هزینه دایر کردن محل ستاد انتخابات ',
  `ElectionFlockPrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '-	هزینه برپایی تجمعات عمومی مرتبط با اهداف انتخاباتی ',
  `ElectionAdvertisePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '-	هزینه تبلیغات مجاز در رسانه ها ',
  `ElectionStaffPrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '-	هزینه و حق الزحمه عوامل اجرایی و کارشناسی در ',
  `ElectionAllPrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '-	جمع کل هزینه های انتخاباتی ',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_election`
--

INSERT INTO `candidate_price_election` (`RowId`, `CandidateId`, `ElectionPlacePrice`, `ElectionFlockPrice`, `ElectionAdvertisePrice`, `ElectionStaffPrice`, `ElectionAllPrice`, `ForWho`) VALUES
(5, 178, '100.100 MI', '0.0 HZ', '0.0 HZ', '0.0 HZ', '. MI', 'Self'),
(6, 239, '0.0 MI', '0.0 MI', '0.0 HZ', '0.0 HZ', '0.0 MI', 'Self'),
(7, 220, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(8, 256, '200.0 MI', '100.0 HZ', '100.0 MI', '0.0 MI', '400.0 MI', 'Self'),
(9, 256, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Wife'),
(10, 256, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Child'),
(11, 258, '500.0 MI', '100.0 MI', '20.0 MI', '20.0 MI', '650.0 MI', 'Self'),
(12, 267, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(13, 267, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Wife'),
(14, 267, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Child'),
(16, 165, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(17, 276, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(19, 244, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Child'),
(20, 289, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(21, 289, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Wife'),
(23, 299, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(24, 301, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(25, 303, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(26, 304, '1.0 MI', '1.0 MI', '1.0 MI', '1.0 MI', '1.0 MI', 'Self'),
(28, 226, '0.0 MI', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Self'),
(29, 339, '5.0 MI', '5.0 MI', '1.0 MI', '1.0 MI', '12.0 MI', 'Self'),
(30, 339, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Wife'),
(31, 339, '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', '0.0 HZ', 'Child'),
(34, 244, '3.2 ML', '5.4 MI', '7.6 ML', '9.8 MI', '11.10 ML', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_fee`
--

CREATE TABLE `candidate_price_fee` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `FeeType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'عنوان ',
  `FeePercent` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'درصد سهم از مالکیت معنوی',
  `FeeOwnershipStartDate` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'زمان شروع مالکیت معنوی',
  `FeeAverageInYear` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'میزان درآمد متوسط سالیانه از مالکیت معنوی ',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_fee`
--

INSERT INTO `candidate_price_fee` (`RowId`, `CandidateId`, `FeeType`, `FeePercent`, `FeeOwnershipStartDate`, `FeeAverageInYear`, `ForWho`) VALUES
(1, 304, 'Book', '6', '1396', '2. MI', 'Self'),
(4, 244, 'Art', '8', '1379', '8.7 MI', 'Self'),
(5, 244, 'Book', '5', '1398', '7.5 MI', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_goods`
--

CREATE TABLE `candidate_price_goods` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `GoodsType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نوع کالا ',
  `GoodsCount` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'حجم/وزن/تعداد کالا',
  `GoodsOwnershipStartDate` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'زمان شروع مالکیت ',
  `GoodsBuyTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش حدودی در زمان شروع مالکیت',
  `GoodsNowTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش حدودی در زمان حاضر',
  `GoodsOwnershipPercent` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'درصد سهم از مالکیت',
  `RealEstateOwnershipType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نحوه مالکیت ',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_goods`
--

INSERT INTO `candidate_price_goods` (`RowId`, `CandidateId`, `GoodsType`, `GoodsCount`, `GoodsOwnershipStartDate`, `GoodsBuyTimePrice`, `GoodsNowTimePrice`, `GoodsOwnershipPercent`, `RealEstateOwnershipType`, `ForWho`) VALUES
(1, 304, 'Jewelry', '20', '1396', '10. MI', '10. MI', '6', 'Buy', 'Self'),
(3, 226, 'Jewelry', '100 گرم', '1398', '. 0', '. 0', '6', 'Buy', 'Wife'),
(6, 244, 'OtherCommercialGoods', '2', '1398', '4.4 ML', '2.2 MI', '5', 'gift', 'Self'),
(7, 244, 'Coins', '1', '1398', '4.2 MI', '5.1 ML', '2', 'gift', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_income`
--

CREATE TABLE `candidate_price_income` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `AverageMonthIncome` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'درآمد متوسط ماهیانه',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_income`
--

INSERT INTO `candidate_price_income` (`RowId`, `CandidateId`, `AverageMonthIncome`, `ForWho`) VALUES
(2, 239, '5.0 MI', 'Self'),
(3, 178, '0.5 MI', 'Self'),
(4, 220, '4.0 MI', 'Self'),
(5, 256, '3.500 MI', 'Self'),
(7, 258, '4.0 MI', 'Self'),
(8, 267, '6.0 MI', 'Self'),
(9, 267, '0.0 HZ', 'Wife'),
(10, 267, '0.0 HZ', 'Child'),
(11, 165, '7.0 MI', 'Self'),
(13, 299, '.0 MI', 'Self'),
(14, 303, '0.0 HZ', 'Self'),
(15, 304, '3.0 MI', 'Self'),
(16, 226, '006.500 MI', 'Self'),
(18, 339, '5.0 MI', 'Self'),
(19, 339, '0.0 HZ', 'Wife'),
(20, 339, '0.0 HZ', 'Child'),
(21, 345, '1.900 MI', 'Self'),
(22, 345, '900.0 HZ', 'Wife'),
(27, 244, '6.3 ML', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_invest`
--

CREATE TABLE `candidate_price_invest` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `InvestTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نام شرکت یا موسسه',
  `InvestDate` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'سال شروع ماکلیت',
  `InvestBuyTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش حدودی کل سهام در زمان شروع مالکیت',
  `InvestNowTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش حدودی کل سهام در زمان حال',
  `InvestOwnershipType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نحوه مالکیت ',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_invest`
--

INSERT INTO `candidate_price_invest` (`RowId`, `CandidateId`, `InvestTitle`, `InvestDate`, `InvestBuyTimePrice`, `InvestNowTimePrice`, `InvestOwnershipType`, `ForWho`) VALUES
(1, 178, 'سهام عدالت', '1383', '. 0', '. 0', 'gift', 'Self'),
(2, 267, 'سازمان بورس و اوراق بهادار', '1398', '5. MI', '5. MI', 'Buy', 'Self'),
(4, 165, 'بورس', '1398', '2. MI', '3. MI', 'Buy', 'Self'),
(5, 304, 'تست', '1390', '50. MI', '40. MI', 'Buy', 'Self'),
(6, 339, 'بورس', '1398', '15. MI', '14. 0', 'Buy', 'Self'),
(9, 244, '6', '1398', '8.8 MI', '9.9 MI', 'Buy', 'Self'),
(10, 244, '5', '1398', '5.3 MI', '6.4 MI', 'Buy', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_realestates`
--

CREATE TABLE `candidate_price_realestates` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `RealEstateType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نوع املاک',
  `RealEstateCountryId` int(11) NOT NULL COMMENT 'کشور',
  `RealEstateStateId` int(11) NOT NULL COMMENT 'استان',
  `RealEstateCityId` int(11) NOT NULL COMMENT 'شهر',
  `RealEstateAddress` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'آدرس اجمالی',
  `RealEstateExtent` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'متراژ',
  `RealEstateExtentUnit` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'واحد متراز',
  `RealEstateOwnershipDate` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'زمان خرید ملک',
  `RealEstateBuyTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش ملک در زمان خرید',
  `RealEstateNowTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش ملک در زمان حاضر',
  `RealEstatePortion` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'سهم بر حسب دانگ',
  `RealEstateOwnershipType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نحوه مالکیت',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_realestates`
--

INSERT INTO `candidate_price_realestates` (`RowId`, `CandidateId`, `RealEstateType`, `RealEstateCountryId`, `RealEstateStateId`, `RealEstateCityId`, `RealEstateAddress`, `RealEstateExtent`, `RealEstateExtentUnit`, `RealEstateOwnershipDate`, `RealEstateBuyTimePrice`, `RealEstateNowTimePrice`, `RealEstatePortion`, `RealEstateOwnershipType`, `ForWho`) VALUES
(1, 221, 'Residential', 107, 0, 0, '5757', '5', 'Hektar', '1398', '5.5 HZ', '5.5 HZ', '4', 'Buy', 'Self'),
(2, 221, 'Official', 103, 2, 465, '', '0542', 'Hektar', '1381', '4.4 HZ', '4.4 MI', '45', 'Buy', 'Self'),
(3, 221, 'Commercial', 103, 3, 482, 'l;l;n', '1', 'SquareMeters', '1398', '1.1 ML', '1.1 HZ', '1', 'Inheritance', 'Self'),
(4, 239, 'Residential', 103, 5, 524, 'کرج جهان نما میدان یاس نرگس ۴ پلاک ۴ واحد ۱', '', 'SquareMeters', '1392', '220. MI', '580. 0', '6', 'Buy', 'Self'),
(6, 178, 'Residential', 103, 27, 834, 'امل .خ هراز .افتاب ۳۵', '125', 'SquareMeters', '1398', '.500 MI', '. 0', '6', 'Dowry', 'Wife'),
(7, 241, 'Residential', 103, 8, 548, 'شهران شمالی', '135', 'SquareMeters', '1380', '.300 MI', '12. MI', '', 'Buy', 'Self'),
(8, 178, 'Agriculture', 103, 27, 834, 'امل .جاده قدیم آمل و بابل.روستای چنگ میان', '10000', 'SquareMeters', '1377', '.50 MI', '. 0', '6', 'Inheritance', 'Self'),
(9, 256, 'Residential', 103, 9, 572, '', '240', 'SquareMeters', '1390', '250. MI', '. 0', '6', 'Buy', 'Self'),
(10, 256, 'Residential', 103, 0, 0, '', '', 'SquareMeters', '1398', '. 0', '. 0', '', 'Buy', 'Self'),
(11, 256, 'Residential', 103, 0, 0, '', '', 'SquareMeters', '1398', '. 0', '. 0', '', 'Buy', 'Self'),
(13, 259, 'Residential', 103, 8, 548, '', '', 'SquareMeters', '1388', '. 0', '. 0', '', 'Buy', 'Self'),
(14, 258, 'Residential', 103, 30, 888, 'شهرک مدرس خیابان توحید غربی پلاک ۳۸ مجتمع نور', '', 'SquareMeters', '1396', '150. MI', '900. MI', '3', 'Buy', 'Self'),
(15, 165, 'Residential', 103, 8, 548, 'خانی آباد. خیابان لطیفی ', '130', 'SquareMeters', '1397', '500. MI', '600. MI', '6', 'Buy', 'Self'),
(16, 289, 'Residential', 103, 0, 0, '', '', 'SquareMeters', '1398', '. 0', '. 0', '', 'Buy', 'Self'),
(17, 289, 'Residential', 103, 0, 0, '', '', 'SquareMeters', '1398', '. 0', '. 0', '', 'Buy', 'Self'),
(18, 289, 'Residential', 103, 0, 0, '', '', 'SquareMeters', '1398', '. 0', '. 0', '', 'Buy', 'Self'),
(20, 299, 'Residential', 103, 8, 548, 'دریان نو نهم پ ۸', '', 'SquareMeters', '1396', '500. MI', '700. 0', '3', 'Buy', 'Self'),
(21, 304, 'Residential', 103, 5, 524, 'یب لسیل سیبلسیبل ', '100', 'SquareMeters', '1390', '325.000 MI', '325.000 MI', '6', 'Buy', 'Self'),
(22, 226, 'Residential', 103, 8, 548, 'پردیس،فاز11، زون 4 شمالی، طراوت11', '86', 'SquareMeters', '1396', '100.000 MI', '400.000 MI', '6', 'Buy', 'Self'),
(23, 339, 'Residential', 103, 4, 497, 'سمیرم روستای ده نسا علیا', '140', 'SquareMeters', '1395', '20. MI', '50. 0', '6', 'Inheritance', 'Self'),
(28, 244, 'Industrial', 234, 0, 0, '11111', '9', 'Hektar', '1398', '4.4 ML', '2.2 MI', '6', 'Dowry', 'Self'),
(29, 244, 'Residential', 103, 2, 465, '54645555555555555', '150', 'SquareMeters', '1398', '13.2 HZ', '10.6 ML', '6', 'Inheritance', 'Self');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_price_vehicle`
--

CREATE TABLE `candidate_price_vehicle` (
  `RowId` int(11) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `VehicleType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نوع وسیله نقلیه',
  `VehicleOwnershipDate` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'زمان مالکیت',
  `VehicleOwnershipType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نحوه مالکیت',
  `VehicleBuyTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش زمان خرید',
  `VehicleNowTimePrice` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ارزش فعلی',
  `VehiclePortion` int(80) NOT NULL COMMENT 'سهم',
  `ForWho` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_price_vehicle`
--

INSERT INTO `candidate_price_vehicle` (`RowId`, `CandidateId`, `VehicleType`, `VehicleOwnershipDate`, `VehicleOwnershipType`, `VehicleBuyTimePrice`, `VehicleNowTimePrice`, `VehiclePortion`, `ForWho`) VALUES
(1, 239, 'Vehicles', '1392', 'Buy', '14. MI', '28. MI', 6, 'Self'),
(2, 256, 'Vehicles', '1396', 'Buy', '80. MI', '. 0', 0, 'Self'),
(3, 259, 'Motorcycle', '1398', 'Buy', '. 0', '. 0', 0, 'Self'),
(4, 259, 'Vehicles', '1398', 'Buy', '. 0', '. 0', 0, 'Self'),
(5, 267, 'Vehicles', '1396', 'Buy', '5. MI', '5. MI', 0, 'Self'),
(6, 276, 'Vehicles', '1388', 'Buy', '17. MI', '50. MI', 0, 'Self'),
(8, 299, 'Vehicles', '1392', 'Buy', '. 0', '80. MI', 6, 'Self'),
(9, 304, 'Vehicles', '1390', 'Buy', '50.000 MI', '50.0 MI', 6, 'Self'),
(10, 226, 'Vehicles', '1398', 'Buy', '056.000 MI', '060.000 MI', 6, 'Self'),
(11, 339, 'Vehicles', '1394', 'Buy', '27. MI', '35. 0', 6, 'Self'),
(17, 244, 'Vehicles', '1398', 'Buy', '5.5 HZ', '2.2 ML', 1, 'Self'),
(18, 244, 'Vehicles', '1398', 'Buy', '8.5 HZ', '9.6 HZ', 6, 'Self'),
(19, 244, 'Motorcycle', '1398', 'gift', '30.150 ML', '400.35 HZ', 3, 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_report_abuse`
--

CREATE TABLE `candidate_report_abuse` (
  `ReportId` bigint(20) NOT NULL,
  `ReportCandidateId` bigint(20) NOT NULL,
  `ReportFullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReportTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReportPhone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReportContent` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReportIp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreateDateTime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Visited` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_report_abuse`
--

INSERT INTO `candidate_report_abuse` (`ReportId`, `ReportCandidateId`, `ReportFullName`, `ReportTitle`, `ReportPhone`, `ReportContent`, `ReportIp`, `CreateDateTime`, `Visited`) VALUES
(1, 244, 'ثلقس', 'لقثس', 'لقثس', 'لقثس', '::1', '1398/10/18 13:12:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_research`
--

CREATE TABLE `candidate_research` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateResearchTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateResearchEmployer` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateResearchWorker` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateResearchResponsibility` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateResearchMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateResearchYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_research`
--

INSERT INTO `candidate_research` (`RowId`, `CandidateId`, `CandidateResearchTitle`, `CandidateResearchEmployer`, `CandidateResearchWorker`, `CandidateResearchResponsibility`, `CandidateResearchMonth`, `CandidateResearchYear`) VALUES
(23, 148, 'طرح شماره 3', 'کارفرما شماره 3', 'مجری شماره 3', 'مسئولیت شماره 3', 'Tir', 1311),
(24, 148, 'طرح شماره 2', 'کارفرما شماره 2', 'مجری شماره 2', 'مسئولیت شماره 2', 'Dey', 1305),
(25, 148, 'طرح شماره 1', 'کارفرما شماره 1', 'مجری شماره 1', 'مسئولیت شماره 1', 'Mehr', 1315),
(26, 198, 'طرح خودم', 'خودم', 'خودم', 'مدیریت', 'Farvardin', 1395),
(28, 214, 'تست', 'تست', 'تست', 'تست', 'Farvardin', 1396),
(29, 219, 'لبابلابلا', 'بلابلا', 'بلابلا', 'بلابلا', 'Mordad', 1393),
(30, 221, 'مت', 'منت', 'منت', 'منت', 'Farvardin', 1398),
(32, 273, 'شناسایی فرصت های شغلی و تولیدی در مناطق روستایی کشور (استان یزد و کرمان)', 'شرکت مشاوره پایدرای طبیعت ', 'فاطمه پاسبان', 'مجری', 'Farvardin', 1398),
(33, 273, 'ارزيابي عملكرد  صندوقهای حمایت از توسعه فعالیتهای کشاورزی زنان روستایی و عشایری و اثرسنجي فعاليتهاي آن بر توليد و ساختار اقتصادي و اجتماعي خانوار', 'شرکت مادر تخصصی صندوق حمایت از توسعه سرمایه گذاری در بخش کشاورزی', 'فاطمه پاسبان', 'محری', 'Shahrivar', 1398),
(34, 304, 'تست', 'تست', 'تست', 'تست', 'Farvardin', 1398),
(35, 302, 'ساخت ابزار میزان اهتمام مردم به امر به معروف', 'ستاد احیای امر به معروف', 'دکتر علی نجاتبخش', 'مجری', 'Mordad', 1397),
(36, 305, '• بررسی و استخراج دانش تجربی نیروهای تیپ دوازده قائم (عج) در عملیات مرصاد', 'معاونت دانش و پژوهش سپاه سمنان', 'مهدی عباسی شاهکوه', 'مجری و نویسنده مسئول', 'Bahman', 1398),
(41, 314, 'تدوین سند راهبردی توسعه بقاع متبرکه استان همدان  به منظور تبدیل شدن به قطبهای فرهنگی استان همدان', 'اوقاف و امور خیریه استان همدان', 'علیرضا عقیقی', 'مجری', 'Esfand', 1398),
(42, 314, 'بررسی رابطه فرهنگ سازمانی با استقرار مدیریت دانش', 'داشگاه پیام نور', 'علیرضا عقیقی', 'علیرضا عقیقی', 'Shahrivar', 1386),
(43, 314, 'طراحی الگوی ارزيابی اثربخشی دوره‌های آموزشی كاركنان شركت توزيع نيروي برق استان همدان', 'شركت توزيع نيروي برق استان همدان', 'علیرضا عقیقی', 'مجری', 'Farvardin', 1398),
(44, 314, 'تدوین سند توسعه تجارت خارجی استان کرمانشاه', 'استاتداری کرمانشاه', 'علیرضا عقیقی', 'مجری', 'Bahman', 1398),
(45, 314, 'ارایه و تبیین مدل رهبری فروتنانه با رویکرد اسلامی', 'دانشگاه پیام نور استان همدان', 'علیرضا عقیقی', 'مجری', 'Shahrivar', 1398),
(46, 317, 'تاثیر عصاره رازیانه برباروری ماهی گوپی', 'دانشگاه آزاد واحد فلاورجان', 'شهلا روزبهانی ', 'مجری', 'Farvardin', 1391),
(49, 319, 'کامپوزیت-کسب رتبه چهارم در حوزه دستاوردهای کامپوزیت', 'دانشگاه صنعتی امیر کبیر', 'سید امیر عباس افشار امین', 'پژوهشگر و مجری پروژه', 'Farvardin', 1398),
(50, 319, 'بازاریابی سیاسی در جمهوری اسلامی', 'شخصی', 'سید امیر عباس افشار امین', 'پژوهشگر ارشد', 'Farvardin', 1398),
(52, 388, 'بلب', 'بلاببل', 'ابلابلا', 'بلابلاب', 'Aban', 1300),
(53, 388, 'بابابا', 'بلابلاب', 'لابلابلا', 'بلابلابلا', 'Tir', 1324),
(54, 395, 'بلابل', 'ابلابلابل', 'ابلابلا', 'بلابلابلا', 'Shahrivar', 1307),
(56, 244, 'برونریزی', 'چشمه', 'مهندس علوی', 'برنامه ریز', 'Farvardin', 1398);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_roles`
--

CREATE TABLE `candidate_roles` (
  `RoleId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `Role` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_roles`
--

INSERT INTO `candidate_roles` (`RoleId`, `CandidateId`, `Role`) VALUES
(349, 50, 'Candidate'),
(350, 50, 'Elite'),
(351, 50, 'Sponsor'),
(352, 51, 'Candidate'),
(353, 51, 'Elite'),
(354, 51, 'Sponsor'),
(355, 52, 'Candidate'),
(356, 52, 'Elite'),
(357, 52, 'Sponsor'),
(376, 59, 'Candidate'),
(377, 59, 'Elite'),
(378, 59, 'Sponsor'),
(379, 60, 'Candidate'),
(380, 60, 'Elite'),
(381, 60, 'Sponsor'),
(382, 61, 'Candidate'),
(383, 61, 'Elite'),
(384, 61, 'Sponsor'),
(400, 67, 'Candidate'),
(401, 67, 'Elite'),
(402, 67, 'Sponsor'),
(403, 68, 'Candidate'),
(404, 68, 'Elite'),
(405, 68, 'Sponsor'),
(406, 69, 'Candidate'),
(407, 69, 'Elite'),
(408, 69, 'Sponsor'),
(415, 72, 'Candidate'),
(416, 72, 'Elite'),
(417, 72, 'Sponsor'),
(424, 75, 'Candidate'),
(425, 75, 'Elite'),
(426, 75, 'Sponsor'),
(436, 79, 'Candidate'),
(437, 79, 'Elite'),
(438, 79, 'Sponsor'),
(451, 84, 'Candidate'),
(452, 84, 'Elite'),
(453, 84, 'Sponsor'),
(457, 86, 'Candidate'),
(458, 86, 'Elite'),
(459, 86, 'Sponsor'),
(460, 87, 'Candidate'),
(461, 87, 'Elite'),
(462, 87, 'Sponsor'),
(466, 89, 'Candidate'),
(467, 89, 'Elite'),
(468, 89, 'Sponsor'),
(469, 90, 'Candidate'),
(470, 90, 'Elite'),
(471, 90, 'Sponsor'),
(475, 92, 'Candidate'),
(476, 92, 'Elite'),
(477, 92, 'Sponsor'),
(478, 93, 'Candidate'),
(479, 93, 'Elite'),
(480, 93, 'Sponsor'),
(481, 94, 'Candidate'),
(482, 94, 'Elite'),
(483, 94, 'Sponsor'),
(484, 95, 'Candidate'),
(485, 95, 'Elite'),
(486, 95, 'Sponsor'),
(487, 96, 'Candidate'),
(488, 96, 'Elite'),
(489, 96, 'Sponsor'),
(490, 97, 'Candidate'),
(491, 97, 'Elite'),
(492, 97, 'Sponsor'),
(496, 99, 'Candidate'),
(497, 99, 'Elite'),
(498, 99, 'Sponsor'),
(499, 100, 'Candidate'),
(500, 100, 'Elite'),
(501, 100, 'Sponsor'),
(505, 102, 'Candidate'),
(506, 102, 'Elite'),
(507, 102, 'Sponsor'),
(508, 103, 'Candidate'),
(509, 103, 'Elite'),
(510, 103, 'Sponsor'),
(514, 105, 'Candidate'),
(515, 105, 'Elite'),
(516, 105, 'Sponsor'),
(517, 106, 'Candidate'),
(518, 106, 'Elite'),
(519, 106, 'Sponsor'),
(520, 107, 'Candidate'),
(521, 107, 'Elite'),
(522, 107, 'Sponsor'),
(526, 109, 'Candidate'),
(527, 109, 'Elite'),
(528, 109, 'Sponsor'),
(529, 110, 'Candidate'),
(530, 110, 'Elite'),
(531, 110, 'Sponsor'),
(532, 111, 'Candidate'),
(533, 111, 'Elite'),
(534, 111, 'Sponsor'),
(547, 116, 'Candidate'),
(548, 116, 'Elite'),
(549, 116, 'Sponsor'),
(550, 117, 'Candidate'),
(551, 117, 'Elite'),
(552, 117, 'Sponsor'),
(610, 137, 'Candidate'),
(611, 137, 'Elite'),
(612, 137, 'Sponsor'),
(661, 154, 'Candidate'),
(662, 154, 'Elite'),
(663, 154, 'Sponsor'),
(667, 156, 'Candidate'),
(668, 156, 'Elite'),
(669, 156, 'Sponsor'),
(685, 162, 'Candidate'),
(686, 162, 'Elite'),
(687, 162, 'Sponsor'),
(712, 171, 'Candidate'),
(713, 171, 'Elite'),
(714, 171, 'Sponsor'),
(715, 172, 'Candidate'),
(716, 172, 'Elite'),
(717, 172, 'Sponsor'),
(769, 190, 'Candidate'),
(770, 190, 'Elite'),
(771, 190, 'Sponsor'),
(778, 190, 'Sponsor'),
(779, 191, 'Candidate'),
(780, 191, 'Elite'),
(781, 192, 'Elite'),
(784, 193, 'Sponsor'),
(787, 194, 'Elite'),
(788, 195, 'Sponsor'),
(789, 196, 'Elite'),
(804, 197, 'Candidate'),
(805, 197, 'Sponsor'),
(821, 198, 'Candidate'),
(822, 198, 'Elite'),
(823, 198, 'Sponsor'),
(883, 199, 'Candidate'),
(884, 199, 'Elite'),
(885, 199, 'Sponsor'),
(891, 200, 'Elite'),
(892, 200, 'Sponsor'),
(904, 202, 'Elite'),
(905, 202, 'Sponsor'),
(907, 203, 'Elite'),
(908, 204, 'Sponsor'),
(909, 205, 'Candidate'),
(910, 206, 'Sponsor'),
(914, 207, 'Candidate'),
(915, 207, 'Elite'),
(916, 207, 'Sponsor'),
(931, 208, 'Candidate'),
(936, 189, 'Candidate'),
(937, 189, 'Sponsor'),
(938, 209, 'Candidate'),
(939, 209, 'Elite'),
(940, 210, 'Elite'),
(941, 210, 'Sponsor'),
(946, 211, 'Candidate'),
(947, 212, 'Candidate'),
(961, 215, 'Candidate'),
(962, 215, 'Elite'),
(963, 215, 'Sponsor'),
(964, 216, 'Candidate'),
(995, 214, 'Candidate'),
(996, 214, 'Elite'),
(997, 214, 'Sponsor'),
(998, 217, 'Elite'),
(999, 217, 'Sponsor'),
(1000, 218, 'Candidate'),
(1001, 218, 'Elite'),
(1002, 218, 'Sponsor'),
(1018, 219, 'Candidate'),
(1019, 219, 'Elite'),
(1020, 219, 'Sponsor'),
(1025, 221, 'Candidate'),
(1026, 221, 'Elite'),
(1027, 222, 'Elite'),
(1028, 223, 'Candidate'),
(1029, 223, 'Elite'),
(1038, 228, 'Candidate'),
(1039, 228, 'Elite'),
(1040, 229, 'Elite'),
(1041, 229, 'Sponsor'),
(1044, 231, 'Candidate'),
(1045, 231, 'Elite'),
(1046, 231, 'Sponsor'),
(1047, 232, 'Candidate'),
(1048, 232, 'Elite'),
(1049, 233, 'Candidate'),
(1050, 233, 'Elite'),
(1051, 234, 'Elite'),
(1052, 235, 'Candidate'),
(1053, 235, 'Elite'),
(1054, 236, 'Candidate'),
(1055, 236, 'Elite'),
(1069, 237, 'Candidate'),
(1070, 237, 'Elite'),
(1073, 213, 'Candidate'),
(1074, 238, 'Candidate'),
(1075, 238, 'Elite'),
(1078, 239, 'Candidate'),
(1079, 239, 'Elite'),
(1083, 240, 'Elite'),
(1084, 240, 'Sponsor'),
(1091, 241, 'Candidate'),
(1092, 241, 'Elite'),
(1093, 241, 'Sponsor'),
(1094, 242, 'Candidate'),
(1100, 220, 'Candidate'),
(1101, 220, 'Elite'),
(1102, 220, 'Sponsor'),
(1112, 201, 'Candidate'),
(1113, 201, 'Elite'),
(1114, 201, 'Sponsor'),
(1115, 243, 'Candidate'),
(1116, 243, 'Sponsor'),
(1121, 245, 'Candidate'),
(1122, 245, 'Sponsor'),
(1127, 246, 'Sponsor'),
(1129, 247, 'Candidate'),
(1130, 248, 'Candidate'),
(1131, 249, 'Candidate'),
(1132, 250, 'Candidate'),
(1137, 251, 'Candidate'),
(1138, 252, 'Candidate'),
(1139, 253, 'Sponsor'),
(1141, 254, 'Elite'),
(1142, 254, 'Sponsor'),
(1145, 230, 'Candidate'),
(1146, 230, 'Elite'),
(1153, 255, 'Candidate'),
(1155, 256, 'Sponsor'),
(1158, 257, 'Candidate'),
(1162, 259, 'Sponsor'),
(1163, 260, 'Candidate'),
(1167, 261, 'Candidate'),
(1169, 262, 'Candidate'),
(1170, 262, 'Elite'),
(1171, 263, 'Candidate'),
(1172, 264, 'Sponsor'),
(1175, 265, 'Sponsor'),
(1178, 266, 'Candidate'),
(1179, 266, 'Sponsor'),
(1183, 268, 'Candidate'),
(1184, 268, 'Elite'),
(1185, 268, 'Sponsor'),
(1186, 269, 'Candidate'),
(1190, 258, 'Candidate'),
(1191, 270, 'Candidate'),
(1194, 272, 'Sponsor'),
(1197, 267, 'Candidate'),
(1198, 267, 'Elite'),
(1199, 267, 'Sponsor'),
(1204, 273, 'Candidate'),
(1207, 274, 'Sponsor'),
(1213, 276, 'Elite'),
(1214, 276, 'Sponsor'),
(1216, 277, 'Sponsor'),
(1221, 278, 'Candidate'),
(1226, 279, 'Elite'),
(1227, 279, 'Sponsor'),
(1228, 280, 'Candidate'),
(1232, 281, 'Elite'),
(1233, 281, 'Sponsor'),
(1235, 283, 'Sponsor'),
(1236, 284, 'Sponsor'),
(1237, 285, 'Candidate'),
(1244, 286, 'Candidate'),
(1245, 287, 'Candidate'),
(1248, 282, 'Candidate'),
(1249, 282, 'Elite'),
(1254, 225, 'Candidate'),
(1255, 225, 'Elite'),
(1256, 275, 'Candidate'),
(1257, 288, 'Candidate'),
(1258, 289, 'Candidate'),
(1260, 290, 'Candidate'),
(1263, 291, 'Sponsor'),
(1267, 53, 'Candidate'),
(1268, 53, 'Elite'),
(1269, 53, 'Sponsor'),
(1270, 54, 'Candidate'),
(1271, 54, 'Elite'),
(1272, 54, 'Sponsor'),
(1273, 55, 'Candidate'),
(1274, 55, 'Elite'),
(1275, 55, 'Sponsor'),
(1276, 56, 'Candidate'),
(1277, 56, 'Elite'),
(1278, 56, 'Sponsor'),
(1279, 57, 'Candidate'),
(1280, 57, 'Elite'),
(1281, 57, 'Sponsor'),
(1282, 58, 'Candidate'),
(1283, 58, 'Elite'),
(1284, 58, 'Sponsor'),
(1285, 62, 'Candidate'),
(1286, 62, 'Elite'),
(1287, 62, 'Sponsor'),
(1288, 63, 'Candidate'),
(1289, 63, 'Elite'),
(1290, 63, 'Sponsor'),
(1291, 64, 'Candidate'),
(1292, 64, 'Elite'),
(1293, 64, 'Sponsor'),
(1294, 65, 'Candidate'),
(1295, 65, 'Elite'),
(1296, 65, 'Sponsor'),
(1297, 66, 'Candidate'),
(1298, 66, 'Elite'),
(1299, 66, 'Sponsor'),
(1300, 70, 'Elite'),
(1301, 71, 'Candidate'),
(1302, 71, 'Elite'),
(1303, 71, 'Sponsor'),
(1304, 73, 'Candidate'),
(1305, 73, 'Elite'),
(1306, 73, 'Sponsor'),
(1307, 74, 'Candidate'),
(1308, 74, 'Elite'),
(1309, 74, 'Sponsor'),
(1310, 76, 'Candidate'),
(1311, 76, 'Elite'),
(1312, 76, 'Sponsor'),
(1313, 77, 'Candidate'),
(1314, 77, 'Elite'),
(1315, 77, 'Sponsor'),
(1316, 78, 'Candidate'),
(1317, 78, 'Elite'),
(1318, 78, 'Sponsor'),
(1319, 80, 'Candidate'),
(1320, 80, 'Elite'),
(1321, 80, 'Sponsor'),
(1322, 81, 'Candidate'),
(1323, 81, 'Elite'),
(1324, 81, 'Sponsor'),
(1325, 82, 'Candidate'),
(1326, 82, 'Elite'),
(1327, 82, 'Sponsor'),
(1328, 83, 'Candidate'),
(1329, 83, 'Elite'),
(1330, 83, 'Sponsor'),
(1331, 85, 'Sponsor'),
(1332, 88, 'Candidate'),
(1333, 88, 'Elite'),
(1334, 88, 'Sponsor'),
(1335, 91, 'Sponsor'),
(1336, 98, 'Sponsor'),
(1337, 101, 'Sponsor'),
(1338, 104, 'Sponsor'),
(1339, 108, 'Sponsor'),
(1340, 112, 'Candidate'),
(1341, 112, 'Elite'),
(1342, 112, 'Sponsor'),
(1343, 113, 'Candidate'),
(1344, 113, 'Elite'),
(1345, 113, 'Sponsor'),
(1346, 114, 'Elite'),
(1347, 115, 'Candidate'),
(1348, 115, 'Elite'),
(1349, 115, 'Sponsor'),
(1350, 118, 'Candidate'),
(1351, 119, 'Elite'),
(1352, 120, 'Elite'),
(1353, 121, 'Elite'),
(1354, 122, 'Sponsor'),
(1355, 123, 'Sponsor'),
(1356, 124, 'Candidate'),
(1357, 125, 'Elite'),
(1358, 125, 'Sponsor'),
(1359, 126, 'Sponsor'),
(1360, 127, 'Elite'),
(1361, 128, 'Elite'),
(1362, 129, 'Candidate'),
(1363, 129, 'Elite'),
(1364, 130, 'Elite'),
(1365, 131, 'Candidate'),
(1366, 131, 'Elite'),
(1367, 132, 'Candidate'),
(1368, 133, 'Elite'),
(1369, 133, 'Sponsor'),
(1370, 134, 'Elite'),
(1371, 135, 'Elite'),
(1372, 135, 'Sponsor'),
(1373, 136, 'Candidate'),
(1374, 138, 'Elite'),
(1375, 138, 'Sponsor'),
(1376, 139, 'Elite'),
(1377, 140, 'Candidate'),
(1378, 141, 'Candidate'),
(1379, 141, 'Elite'),
(1380, 141, 'Sponsor'),
(1381, 142, 'Candidate'),
(1382, 142, 'Elite'),
(1383, 142, 'Sponsor'),
(1384, 144, 'Sponsor'),
(1385, 143, 'Elite'),
(1386, 145, 'Candidate'),
(1387, 146, 'Candidate'),
(1388, 146, 'Elite'),
(1389, 147, 'Elite'),
(1390, 147, 'Sponsor'),
(1391, 148, 'Elite'),
(1392, 148, 'Sponsor'),
(1393, 150, 'Sponsor'),
(1394, 151, 'Sponsor'),
(1395, 152, 'Candidate'),
(1396, 152, 'Elite'),
(1397, 152, 'Sponsor'),
(1398, 153, 'Candidate'),
(1399, 155, 'Candidate'),
(1400, 155, 'Elite'),
(1401, 155, 'Sponsor'),
(1402, 157, 'Candidate'),
(1403, 158, 'Candidate'),
(1404, 159, 'Candidate'),
(1405, 159, 'Elite'),
(1406, 159, 'Sponsor'),
(1407, 160, 'Candidate'),
(1408, 161, 'Candidate'),
(1409, 149, 'Candidate'),
(1410, 149, 'Elite'),
(1411, 149, 'Sponsor'),
(1412, 163, 'Sponsor'),
(1413, 164, 'Candidate'),
(1414, 164, 'Elite'),
(1415, 164, 'Sponsor'),
(1416, 165, 'Candidate'),
(1417, 166, 'Candidate'),
(1418, 167, 'Elite'),
(1419, 167, 'Sponsor'),
(1420, 168, 'Candidate'),
(1421, 169, 'Candidate'),
(1422, 170, 'Candidate'),
(1423, 170, 'Elite'),
(1424, 170, 'Sponsor'),
(1425, 173, 'Candidate'),
(1426, 173, 'Sponsor'),
(1427, 174, 'Candidate'),
(1428, 174, 'Elite'),
(1429, 174, 'Sponsor'),
(1430, 175, 'Elite'),
(1431, 176, 'Elite'),
(1432, 177, 'Candidate'),
(1433, 177, 'Elite'),
(1434, 178, 'Candidate'),
(1435, 179, 'Elite'),
(1436, 180, 'Candidate'),
(1437, 181, 'Candidate'),
(1438, 181, 'Elite'),
(1439, 181, 'Sponsor'),
(1440, 182, 'Sponsor'),
(1441, 183, 'Candidate'),
(1442, 183, 'Elite'),
(1443, 183, 'Sponsor'),
(1444, 184, 'Candidate'),
(1445, 185, 'Elite'),
(1446, 186, 'Elite'),
(1447, 186, 'Sponsor'),
(1448, 187, 'Elite'),
(1449, 188, 'Sponsor'),
(1450, 292, 'Candidate'),
(1451, 293, 'Candidate'),
(1457, 224, 'Candidate'),
(1458, 224, 'Elite'),
(1460, 297, 'Sponsor'),
(1461, 295, 'Candidate'),
(1463, 296, 'Candidate'),
(1466, 298, 'Candidate'),
(1473, 299, 'Candidate'),
(1478, 300, 'Sponsor'),
(1483, 303, 'Candidate'),
(1484, 271, 'Candidate'),
(1502, 304, 'Candidate'),
(1503, 304, 'Elite'),
(1504, 304, 'Sponsor'),
(1518, 305, 'Candidate'),
(1519, 306, 'Sponsor'),
(1520, 307, 'Sponsor'),
(1527, 309, 'Candidate'),
(1528, 309, 'Elite'),
(1529, 309, 'Sponsor'),
(1533, 311, 'Sponsor'),
(1535, 310, 'Candidate'),
(1536, 301, 'Candidate'),
(1537, 312, 'Sponsor'),
(1538, 226, 'Candidate'),
(1539, 226, 'Elite'),
(1541, 313, 'Sponsor'),
(1545, 308, 'Candidate'),
(1553, 315, 'Candidate'),
(1557, 314, 'Candidate'),
(1558, 316, 'Candidate'),
(1559, 316, 'Elite'),
(1561, 318, 'Sponsor'),
(1563, 317, 'Candidate'),
(1565, 319, 'Candidate'),
(1567, 320, 'Sponsor'),
(1571, 321, 'Candidate'),
(1573, 227, 'Candidate'),
(1574, 227, 'Elite'),
(1575, 227, 'Sponsor'),
(1576, 294, 'Candidate'),
(1577, 302, 'Candidate'),
(1578, 322, 'Sponsor'),
(1579, 323, 'Sponsor'),
(1580, 324, 'Sponsor'),
(1581, 325, 'Sponsor'),
(1582, 326, 'Candidate'),
(1583, 327, 'Sponsor'),
(1584, 328, 'Sponsor'),
(1586, 330, 'Sponsor'),
(1588, 329, 'Sponsor'),
(1590, 332, 'Sponsor'),
(1592, 331, 'Candidate'),
(1593, 333, 'Sponsor'),
(1596, 335, 'Sponsor'),
(1600, 334, 'Candidate'),
(1602, 336, 'Sponsor'),
(1603, 337, 'Candidate'),
(1604, 338, 'Sponsor'),
(1607, 340, 'Candidate'),
(1610, 341, 'Candidate'),
(1612, 342, 'Candidate'),
(1615, 343, 'Candidate'),
(1616, 343, 'Sponsor'),
(1617, 344, 'Candidate'),
(1618, 344, 'Sponsor'),
(1620, 345, 'Sponsor'),
(1622, 346, 'Sponsor'),
(1625, 347, 'Candidate'),
(1627, 349, 'Candidate'),
(1629, 351, 'Sponsor'),
(1631, 350, 'Candidate'),
(1633, 352, 'Candidate'),
(1640, 353, 'Sponsor'),
(1641, 354, 'Sponsor'),
(1642, 355, 'Candidate'),
(1644, 356, 'Candidate'),
(1647, 357, 'Sponsor'),
(1648, 358, 'Sponsor'),
(1649, 359, 'Candidate'),
(1651, 360, 'Sponsor'),
(1653, 348, 'Candidate'),
(1654, 348, 'Elite'),
(1661, 362, 'Candidate'),
(1662, 364, 'Sponsor'),
(1663, 363, 'Sponsor'),
(1664, 365, 'Sponsor'),
(1666, 366, 'Candidate'),
(1667, 366, 'Sponsor'),
(1668, 367, 'Candidate'),
(1669, 368, 'Sponsor'),
(1671, 370, 'Sponsor'),
(1673, 371, 'Sponsor'),
(1674, 372, 'Sponsor'),
(1677, 369, 'Sponsor'),
(1679, 374, 'Candidate'),
(1680, 375, 'Candidate'),
(1681, 376, 'Sponsor'),
(1682, 377, 'Candidate'),
(1683, 377, 'Sponsor'),
(1684, 378, 'Sponsor'),
(1685, 361, 'Elite'),
(1686, 361, 'Sponsor'),
(1687, 379, 'Sponsor'),
(1688, 380, 'Candidate'),
(1689, 380, 'Sponsor'),
(1690, 339, 'Candidate'),
(1691, 381, 'Sponsor'),
(1692, 382, 'Sponsor'),
(1693, 383, 'Sponsor'),
(1694, 384, 'Candidate'),
(1695, 385, 'Sponsor'),
(1696, 386, 'Sponsor'),
(1697, 387, 'Sponsor'),
(1720, 388, 'Candidate'),
(1721, 388, 'Sponsor'),
(1744, 391, 'Sponsor'),
(1745, 390, 'Candidate'),
(1746, 390, 'Elite'),
(1748, 392, 'Candidate'),
(1749, 389, 'Candidate'),
(1750, 373, 'Elite'),
(1751, 393, 'Candidate'),
(1760, 394, 'Candidate'),
(1761, 394, 'Sponsor'),
(1770, 395, 'Sponsor'),
(1783, 244, 'Candidate'),
(1784, 244, 'Elite'),
(1785, 396, 'Candidate');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_skills`
--

CREATE TABLE `candidate_skills` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `SkillType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SkillLevel` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SkillLearnType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_skills`
--

INSERT INTO `candidate_skills` (`RowId`, `CandidateId`, `SkillType`, `SkillLevel`, `SkillLearnType`) VALUES
(41, 148, 'مدیریت پروژه', 'Professional', 'TrainingCourse'),
(42, 148, 'داستان نویسی', 'Beginner', 'Experimental'),
(43, 148, 'برنامه نویسی', 'SemiProfessional', 'Experimental'),
(44, 189, 'برنامه هویسی', 'SemiProfessional', 'TrainingCourse'),
(46, 195, 'فرهنگی ', 'SemiProfessional', 'Experimental'),
(48, 196, 'نشریات الکترونیکی', 'SemiProfessional', 'TrainingCourse'),
(49, 196, 'تربیت مربی کودک و نوجوان', 'SemiProfessional', 'TrainingCourse'),
(50, 196, 'سواد رسانه ای', 'SemiProfessional', 'TrainingCourse'),
(51, 196, 'ورد', 'SemiProfessional', 'TrainingCourse'),
(52, 196, 'Icdl', 'SemiProfessional', 'TrainingCourse'),
(53, 198, 'تعمیرات مبل', 'SemiProfessional', 'Experimental'),
(54, 199, 'تعمیرات مبل', 'SemiProfessional', 'Experimental'),
(57, 200, 'ورزشی', 'Professional', 'TrainingCourse'),
(58, 200, 'مجری گری و سخنرانی', 'Professional', 'Experimental'),
(60, 207, 'IT شبکه و شبکه‌های اجتماعی و تبلیغات میدانی و فن بیان', 'SemiProfessional', 'Experimental'),
(61, 208, 'مهارت شماره 1', 'Professional', 'TrainingCourse'),
(62, 208, 'مهارت شماره 1', 'SemiProfessional', 'TrainingCourse'),
(67, 209, 'آموزش مهارت های فردی ', 'SemiProfessional', 'TrainingCourse'),
(68, 209, 'مهارت ارتباطی', 'Professional', 'Experimental'),
(69, 209, 'مدیریت برنامه ریزی', 'SemiProfessional', 'TrainingCourse'),
(70, 209, 'فن بیان', 'Professional', 'TrainingCourse'),
(72, 211, 'آشنایی با مشاغل تولیدی حسابداری و مدیریت مالی', 'Professional', 'Experimental'),
(74, 183, 'فني و مهندسي و عمراني', 'Professional', 'Experimental'),
(75, 210, 'برنامه هویسی', 'Beginner', 'Experimental'),
(77, 214, 'تست', 'SemiProfessional', 'Experimental'),
(78, 219, 'لاتلات', 'Beginner', 'Experimental'),
(79, 219, 'بتبتلات', 'Professional', 'Experimental'),
(80, 219, 'لابلاا', 'SemiProfessional', 'Experimental'),
(81, 221, 'گمگم', 'SemiProfessional', 'Experimental'),
(82, 221, 'مکتمکت', 'Beginner', 'TrainingCourse'),
(93, 237, 'تدریس دروس مدیریت و ریاضی در دانشگاه علمی و کاربردی', 'SemiProfessional', 'Experimental'),
(94, 237, 'دوره مهارت ICDL پیشرفته', 'SemiProfessional', 'Experimental'),
(95, 237, 'نرم افزارهای مکانیک', 'SemiProfessional', 'TrainingCourse'),
(96, 238, 'کار با نرم افزارهای مختلف', 'Professional', 'Experimental'),
(118, 213, '', '', ''),
(119, 213, 'o آشنایی با نرم افزار  Microsoft Office Excel', 'Professional', 'TrainingCourse'),
(120, 213, 'o آشنایی با نرم افزار  Microsoft Office Word', 'Professional', 'TrainingCourse'),
(121, 213, 'فن بیان و اصول مذاکره ', 'Professional', 'TrainingCourse'),
(122, 213, 'o سيستم طبقه بندي و استاندارد كالا', 'Beginner', 'TrainingCourse'),
(123, 213, 'o آشنايي با HSE', 'Beginner', 'TrainingCourse'),
(124, 213, 'o پدافند غيرعامل', 'SemiProfessional', 'TrainingCourse'),
(125, 213, 'o ايمني و آتش نشاني عمومي', 'Beginner', 'TrainingCourse'),
(126, 213, 'o مقررات اداري و استخدامي شركت¬هاي بزرگ نفتي بين المللي', 'SemiProfessional', 'TrainingCourse'),
(127, 213, 'o مديريت بر مبناي ارزش¬ها و اخلاق حرفه¬اي ', 'SemiProfessional', 'TrainingCourse'),
(128, 213, 'o مقررات پرسنلي و اداري كار', 'SemiProfessional', 'TrainingCourse'),
(129, 213, 'o اخلاق حرفه¬اي كارگزارهاي اسلامي', 'SemiProfessional', 'TrainingCourse'),
(130, 213, 'o آموزش مهارت¬هاي ده گانه كار در سازمان', 'SemiProfessional', 'TrainingCourse'),
(131, 213, 'o گزارش نويسي و مكاتبات اداري ', 'SemiProfessional', 'TrainingCourse'),
(132, 213, 'o پيشگيري از آسيب¬هاي اجتماعي', 'SemiProfessional', 'TrainingCourse'),
(133, 213, 'o فرهنگ و الگوهاي رفتاري در سازمان', 'SemiProfessional', 'TrainingCourse'),
(134, 213, 'o آشنايي با فرهنگ و الگوي رفتاري درصنعت نفت', 'Professional', 'TrainingCourse'),
(135, 213, 'o اصول كمك¬هاي اوليه مقدماتي', 'Professional', 'TrainingCourse'),
(136, 213, 'o دوره طرح تكريم ارباب رجوع و احترام به مراجعين', 'Professional', 'TrainingCourse'),
(137, 213, 'o آشنايي باصنعت نفت ', 'Professional', 'Experimental'),
(138, 213, 'o آشنايي با سامانه EP', 'Professional', 'Experimental'),
(139, 239, 'نمایشی', 'SemiProfessional', 'Experimental'),
(156, 241, 'برنامهدنپیسی', 'Professional', 'Experimental'),
(157, 178, 'کامپیوتر', 'SemiProfessional', 'TrainingCourse'),
(158, 178, 'ورزشی', 'SemiProfessional', 'TrainingCourse'),
(159, 178, 'ورزشی ، ', 'Professional', 'Experimental'),
(161, 220, 'هنری، فرهنگی، نویسندگی، شعر، زبان', 'SemiProfessional', 'TrainingCourse'),
(168, 245, 'للب', 'Beginner', 'Experimental'),
(171, 251, 'مدیریت کلان', 'Professional', 'Experimental'),
(172, 230, 'مدیریت پروژه', 'Professional', 'Experimental'),
(179, 255, 'سخنرانی در مورد بصیرت افزایی جامعه', 'Professional', 'Experimental'),
(180, 255, 'ترجمه متون تخصصی', 'Professional', 'Experimental'),
(181, 255, 'مهارت های هفتگانه', 'SemiProfessional', 'Experimental'),
(184, 259, 'مدیریت پروژه', 'Professional', 'TrainingCourse'),
(186, 261, 'مشاور ارشد مالیات  و بیمه و حسابرسی', 'Professional', 'Experimental'),
(187, 262, 'حسابداری ', 'SemiProfessional', 'Experimental'),
(192, 266, 'کوچینگ و مربی گیری', 'Professional', 'Experimental'),
(193, 266, 'سخنرانی و فن بیان', 'Professional', 'TrainingCourse'),
(194, 266, 'آموزش و تدریس', 'Professional', 'Experimental'),
(195, 266, 'تامین محتوا و تولید ارزشهای مفهومی', 'Professional', 'Experimental'),
(196, 165, '', '', ''),
(197, 165, 'مربی تیراندازی ', 'Professional', 'Experimental'),
(198, 165, 'ارزیاب جایزه ملی مدیریت انرژی ', 'Professional', 'TrainingCourse'),
(199, 165, 'مدیریت حوزه های انرژی نفت و گاز', 'Professional', 'Experimental'),
(200, 165, 'کامپیوتر ', 'Professional', 'TrainingCourse'),
(201, 165, 'مدیریت و سرپرستی', 'Professional', 'Experimental'),
(205, 273, 'نرم افزار مرتبط با رشته', 'Professional', 'Experimental'),
(206, 273, 'زبان انگلیسی ', 'SemiProfessional', 'Experimental'),
(208, 278, 'سخنران', 'Professional', 'Experimental'),
(210, 281, 'موسیقی', 'Professional', 'Experimental'),
(221, 225, 'مدیریت تولید', 'Professional', 'TrainingCourse'),
(222, 225, 'مدیریت اجرایی', 'Professional', 'Experimental'),
(223, 225, 'مدیریت پروژه', 'Professional', 'Experimental'),
(224, 225, 'مدیریت آموزش', 'Professional', 'Experimental'),
(225, 225, 'کنترل پروژه', 'Professional', 'TrainingCourse'),
(226, 289, 'مدرس', 'Professional', 'TrainingCourse'),
(227, 291, '', '', ''),
(229, 224, 'مدرس سواد رسانه‌ای ', 'SemiProfessional', 'TrainingCourse'),
(230, 224, 'تحلیل‌گر مسائل سیاسی، فن بیان عالی، آشنا به سواد رسانه‌ای و تدریس در این زمینه ', 'SemiProfessional', 'Experimental'),
(236, 295, 'عکاسی', 'SemiProfessional', 'Experimental'),
(237, 295, 'خبرنویسی', 'SemiProfessional', 'Experimental'),
(238, 295, 'اجرا و سخنوری', 'Professional', 'Experimental'),
(239, 295, 'ICDL', 'SemiProfessional', 'TrainingCourse'),
(248, 299, 'طراحی پمپهای آبرسانی', 'Professional', 'Experimental'),
(254, 303, '', '', ''),
(264, 275, 'مطالعات مهندسي نفت مخازن', 'Professional', 'Experimental'),
(265, 275, 'ارزيابي فني پروژه هاي نفتي', 'Professional', 'Experimental'),
(266, 275, 'مديريت پروژه', 'SemiProfessional', 'Experimental'),
(267, 275, 'زبان عربي', 'Beginner', 'Experimental'),
(268, 275, 'تسلط به زبان انگليسي', 'Professional', 'Experimental'),
(269, 304, 'فتوشاپ', 'Professional', 'Experimental'),
(277, 305, 'تایپ', 'SemiProfessional', 'Experimental'),
(278, 305, 'کار با رایانه', 'Beginner', 'Experimental'),
(279, 305, 'تدریس روش تحقیق', 'SemiProfessional', 'Experimental'),
(288, 301, 'مديريت تكنولوژي', 'SemiProfessional', 'TrainingCourse'),
(289, 301, 'فناوري اطلاعات', 'Professional', 'Experimental'),
(290, 301, 'مديريت دانش', 'SemiProfessional', 'Experimental'),
(291, 301, 'مديريت كسب و كار', 'Professional', 'Experimental'),
(305, 226, 'فضای مجازی ', 'SemiProfessional', 'TrainingCourse'),
(306, 226, 'نظارت و پیگیری', 'SemiProfessional', 'Experimental'),
(307, 226, 'کار با رایانه', 'SemiProfessional', 'TrainingCourse'),
(308, 226, 'زبان انگلیسی', 'SemiProfessional', 'TrainingCourse'),
(309, 313, '', '', ''),
(310, 308, 'مهارت های 7 گانه ADSL', 'SemiProfessional', 'TrainingCourse'),
(311, 316, 'تدوین استراتژی و برنامه ریزی عملیاتی', 'Professional', 'Experimental'),
(312, 316, 'تحلیل های مالی و اقتصاد کلان دولتی، صنعتی و خدماتی', 'Professional', 'TrainingCourse'),
(313, 316, 'طراحی محصولات مالی و بانکی', 'Professional', 'Experimental'),
(314, 316, 'اقتصاد مهندسی', 'Professional', 'TrainingCourse'),
(315, 316, 'بودجه ریزی استراتژیک', 'Professional', 'Experimental'),
(317, 317, 'تدریس وسخنرانی', 'Professional', 'Experimental'),
(327, 319, 'مذیر اجرایی،ساخت،برآورد سهام بندی مراکز بهداشتی و درمانی', 'Professional', 'Experimental'),
(328, 319, 'تامین مالی پروژه های نفت و گاز و عمرانی', 'SemiProfessional', 'Experimental'),
(329, 319, 'icdl', 'SemiProfessional', 'TrainingCourse'),
(330, 320, '', 'Professional', 'Experimental'),
(331, 321, 'گفتمان نقد و بررسی', 'SemiProfessional', 'Experimental'),
(332, 302, '', '', ''),
(333, 333, 'زبان انگلیسی', 'SemiProfessional', 'TrainingCourse'),
(334, 333, 'تجارت بین الملل', 'SemiProfessional', 'TrainingCourse'),
(335, 333, 'کامپیوتر', 'SemiProfessional', 'Experimental'),
(364, 345, 'اجتماعی و فرهنگی', 'Professional', 'Experimental'),
(365, 357, 'طراحی وب ', 'Professional', 'Experimental'),
(366, 357, 'برنامه نویسی و نشر کامپیوتری', 'SemiProfessional', 'TrainingCourse'),
(367, 362, 'رسانه و فضای مجازی', 'SemiProfessional', 'Experimental'),
(368, 371, '', 'Beginner', 'TrainingCourse'),
(370, 369, '', '', ''),
(371, 369, 'تدریس', 'SemiProfessional', 'Experimental'),
(372, 339, 'کشاورزی', 'Professional', 'Experimental'),
(373, 339, 'دامداری', 'Professional', 'TrainingCourse'),
(374, 339, 'زبان انگلیسی', 'SemiProfessional', 'Experimental'),
(375, 339, 'تکواندو', 'Professional', 'TrainingCourse'),
(376, 339, 'خوشنویسی', 'Professional', 'Experimental'),
(383, 388, 'لاتلاتلاتلات', 'Professional', 'TrainingCourse'),
(384, 388, 'لاتلات', 'SemiProfessional', 'Experimental'),
(385, 388, 'الاتلاتلات', 'SemiProfessional', 'Experimental'),
(386, 390, 'ب شیبش ب', 'SemiProfessional', 'Experimental'),
(392, 389, '', '', ''),
(393, 389, 'مدیریت اقتصادی ', 'Professional', 'Experimental'),
(394, 389, 'مدیرت بنگاهای اقتصادی ', 'Professional', 'Experimental'),
(395, 389, 'مدیریت پروژه فناوری ', 'Professional', 'Experimental'),
(396, 395, 'اابابلا', 'Professional', 'Experimental'),
(403, 244, 'مهارت 4', 'Professional', 'TrainingCourse'),
(404, 244, 'برنامه نویسی', 'Beginner', 'Experimental');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_social_record`
--

CREATE TABLE `candidate_social_record` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CandidateActivityFieldType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'زمینه فعالیت',
  `CandidateActivityFieldOtherTypeTitle` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'اگر زمینه فعالیت سایر انتخاب شود عنوان زمینه فعالیت در این جا ذخیره می شود',
  `CandidateOrganizationName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نام مجموعه',
  `CandidateMemberShipType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'نوع عضویت',
  `CandidateMemberShipDescription` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'توضیحات',
  `CandidateBasijType` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'نوع بسیج اگر زمینه فعالیت بسیج بود',
  `CandidateBasijTypeOtherTitle` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateMobilMembershipType` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateBasijAreaTitle` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'نام حوزه بسیج اگر زمینه فعالیت بسیج بود',
  `CandidateActivityStartMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ماه آغاز فعالیت',
  `CandidateActivityStartYear` int(11) NOT NULL COMMENT 'سال آغاز فعالیت',
  `CandidateActivityEndMonth` varchar(80) CHARACTER SET latin1 NOT NULL COMMENT 'ماه پایان فعالیت',
  `CandidateActivityEndYear` int(11) NOT NULL COMMENT 'سال پایان فعالیت'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_social_record`
--

INSERT INTO `candidate_social_record` (`RowId`, `CandidateId`, `CandidateActivityFieldType`, `CandidateActivityFieldOtherTypeTitle`, `CandidateOrganizationName`, `CandidateMemberShipType`, `CandidateMemberShipDescription`, `CandidateBasijType`, `CandidateBasijTypeOtherTitle`, `CandidateMobilMembershipType`, `CandidateBasijAreaTitle`, `CandidateActivityStartMonth`, `CandidateActivityStartYear`, `CandidateActivityEndMonth`, `CandidateActivityEndYear`) VALUES
(115, 148, 'Mobilization', '', 'نام فعالیت جهادی', 'Official', 'توضیحات 1', 'schools', '', 'Active', 'نام حوزه 1', 'Farvardin', 1313, 'Shahrivar', 1349),
(116, 148, 'University', '', 'نام مجموعه 2', 'Voluntary', 'توضیحات 2', '', '', '', '', 'Farvardin', 1303, 'Khordad', 1309),
(117, 148, 'Charity', '', 'نام مجموعه 1', 'Official', 'توضیحات 1', '', '', '', '', 'Farvardin', 1315, 'Aban', 1332),
(119, 193, 'TheMosque', '', '', 'Voluntary', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300),
(121, 189, 'University', '', 'نام مجموعه', 'Official', 'توضیحات 1', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1317),
(122, 195, 'Mobilization', '', '', '', '', 'Others', 'بسیج طلاب', 'Active', 'حوزه مقاومت حضرت خدیجه سلام الله علیها', 'Bahman', 1394, 'Farvardin', 1300),
(123, 195, 'Mobilization', '', '', '', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300),
(124, 196, 'JihadistActivities', '', 'سپاه', 'Voluntary', 'اردوهای جهادی', '', '', '', '', 'Tir', 1389, 'Aban', 1398),
(125, 196, 'Semen', '', 'موسسه امید انتظار', 'Voluntary', '', '', '', '', '', 'Ordibehsht', 1394, 'Aban', 1398),
(126, 196, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'علی ابن ابیطالب', 'Khordad', 1376, 'Aban', 1398),
(127, 197, 'Mobilization', '', '', '', '', 'schools', '', 'Active', 'حوزه شماره 1', 'Farvardin', 1356, 'Farvardin', 1371),
(128, 198, 'Mobilization', '', '', '', '', 'University', '', 'Active', '', 'Farvardin', 1390, 'Farvardin', 1398),
(129, 199, 'Mobilization', '', '', '', '', 'University', '', 'Active', '', 'Farvardin', 1390, 'Farvardin', 1398),
(130, 200, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Farvardin', 1375, 'Esfand', 1398),
(134, 174, 'Others', 'رابط فرهنگی خوابگاه', 'نهاد مقام معظم رهبری در دانشگاه تربیت مدرس', 'Voluntary', '', '', '', '', '', 'Aban', 1386, 'Aban', 1387),
(135, 174, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'تربیت مدرس تهران', 'Aban', 1386, 'Tir', 1389),
(136, 174, 'Mobilization', '', 'دانشگاه رازی کرمانشاه', 'Voluntary', 'معاونت فرهنگی', 'University', '', 'Active', 'رازی کرمانشاه', 'Mehr', 1381, 'Mehr', 1385),
(137, 203, 'University', '', 'هیات فرهنگی مذهبی اساتید', 'Official', 'عضو شورای مرکزی هیات مذهبی اساتید', '', '', '', '', 'Mordad', 1398, 'Farvardin', 1398),
(138, 207, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'بسیج دانشجویی جزیره کیش', 'Mehr', 1394, 'Esfand', 1398),
(140, 208, 'Mobilization', '', '', '', '', 'Others', 'سایر شماره 1', 'Kadr', 'حوزه شماره 1', 'Bahman', 1385, 'Dey', 1338),
(141, 209, 'Others', 'عضو شورای ستاد نمازجمعه', 'نمازجمعه نکا', 'Voluntary', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300),
(142, 209, 'TheMosque', '', '', 'Official', '', '', '', '', '', 'Farvardin', 1300, 'Farvardin', 1300),
(143, 209, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Farvardin', 1370, 'Farvardin', 1300),
(144, 211, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'پایگاه شهید نوعدوست', 'Farvardin', 1378, 'Bahman', 1385),
(149, 164, 'Schools', '', 'انجمن اسلامی', 'Voluntary', 'دو سال عضو عیات مرکزی', '', '', '', '', 'Mehr', 1378, 'Khordad', 1380),
(150, 164, 'University', '', 'جنبش دانشجویان عدالتخواه', 'Voluntary', 'عضو هیات موسس', '', '', '', '', 'Mehr', 1386, 'Shahrivar', 1388),
(151, 164, 'Mobilization', '', '', '', '', 'University', '', 'Normal', 'شهید باهنر کرمان', 'Mehr', 1381, 'Mordad', 1384),
(152, 164, 'University', '', 'انجمن سلامی دانشجویان مستقل', 'Voluntary', 'سه سال عضو شورای مرکزی و یک سال دبیر', '', '', '', '', 'Mehr', 1381, 'Mordad', 1384),
(153, 183, 'Others', 'مجمع اتلاف نيروهاي انقلاب اسلامي سمنان', 'سياسي و اجتماعي', 'Official', '', '', '', '', '', 'Aban', 1398, 'Esfand', 1398),
(154, 183, 'University', '', 'كانون دانشگاهيان ايران اسلامي - استان سمنان', 'Official', '', '', '', '', '', 'Farvardin', 1397, 'Esfand', 1398),
(155, 183, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'بسيج اساتيد', 'Farvardin', 1392, 'Farvardin', 1393),
(156, 183, 'Mobilization', '', '', '', '', 'University', '', 'Normal', 'بسيج اساتيد', 'Farvardin', 1390, 'Farvardin', 1398),
(158, 214, 'Mobilization', '', '', '', '', 'University', '', 'Active', '', 'Farvardin', 1390, 'Farvardin', 1398),
(161, 219, 'Others', 'بلابلابلا', 'ابابلابا', 'Official', 'بلابلابلا', '', '', '', '', 'Mehr', 1371, 'Dey', 1349),
(162, 219, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'سیلیبلیل', 'Tir', 1396, 'Mehr', 1359),
(163, 221, 'Mobilization', '', '', '', '', 'schools', '', 'Active', 'منتنمت', 'Farvardin', 1391, 'Farvardin', 1398),
(197, 237, 'Others', 'ناظر افتخاری پلیس راهور', 'پلیس راهور', 'Voluntary', 'با حکم سردار مومنی', '', '', '', '', 'Farvardin', 1392, 'Farvardin', 1396),
(198, 237, 'Councils', '', 'شورای شهر محله خواجه نصیر', 'Official', 'عضو اصلی و هیئت رئیسه شورایاری و جانشین دبیر محله', '', '', '', '', 'Farvardin', 1388, 'Esfand', 1398),
(199, 237, 'ReligiousCommittees', '', 'جوانان علی اکبر', 'Voluntary', '', '', '', '', '', 'Farvardin', 1389, 'Esfand', 1398),
(200, 237, 'Semen', '', 'کودکان اوتیسم', 'Voluntary', 'مشاور مدیرعامل سمن', '', '', '', '', 'Farvardin', 1393, 'Farvardin', 1398),
(201, 237, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '121 صابر ناحیه قدس', 'Farvardin', 1385, 'Esfand', 1398),
(202, 238, 'University', '', 'شورای فرهنگی دانشگاه', 'Official', '', '', '', '', '', 'Farvardin', 1385, 'Bahman', 1387),
(203, 238, 'University', '', 'نهاد نمایندگی رهبری', 'Voluntary', '', '', '', '', '', 'Mehr', 1377, 'Khordad', 1381),
(204, 238, 'Mobilization', '', '', '', '', 'Urban', '', 'Kadr', 'شهید صادقی', 'Bahman', 1387, 'Esfand', 1388),
(205, 238, 'Mobilization', '', '', '', '', 'University', '', 'Kadr', 'بسیج دانشجویی دانشگاه تربیت مدرس', 'Mehr', 1394, 'Ordibehsht', 1397),
(206, 238, 'Mobilization', '', '', '', '', 'University', '', 'Kadr', 'امام رضا دانشگاه آزاد یزد', 'Aban', 1377, 'Khordad', 1381),
(207, 238, 'Mobilization', '', '', '', '', 'University', '', 'Kadr', 'بسیج دانشجویی دانشگاه شیخ بهایی', 'Esfand', 1384, 'Bahman', 1387),
(208, 213, 'University', '', 'انجمن اسلامی دانشگاه آزاد اسلامی واحد بروجرد ', 'Voluntary', 'عضو افتخاری انجمن اسلامی ', '', '', '', '', 'Mehr', 1384, 'Shahrivar', 1388),
(209, 213, 'RedCrescent', '', 'انجمن هلال احمر دانشگاه ', 'Voluntary', 'عضو افتخاری انجمن هلال احمر دانشگاه ', '', '', '', '', 'Mehr', 1384, 'Shahrivar', 1388),
(210, 213, 'TheMosque', '', 'مسجد محمد زسول الله بروجرد ', 'Voluntary', 'هماهنگ کننده مراسمات ', '', '', '', '', 'Shahrivar', 1378, 'Shahrivar', 1391),
(211, 213, 'University', '', 'انجمن بسوی مهدویت ', 'Voluntary', 'کارهای فرهنگ در راستای ظهور امام زمان (عج) ', '', '', '', '', 'Mehr', 1384, 'Shahrivar', 1391),
(212, 213, 'Others', 'حرم امامزاده صالح تجریش', 'امامزاده تجریش', 'Voluntary', 'خادم افتخاری حرم امامزاده صالح تجریش', '', '', '', '', 'Farvardin', 1396, 'Azar', 1398),
(213, 213, 'Mobilization', '', '', '', '', 'Others', 'کارمندی', 'Normal', 'پایگاه شهید عسگری', 'Tir', 1384, 'Azar', 1398),
(214, 213, 'Mobilization', '', '', '', '', 'Others', 'کارمندی', 'Normal', 'پایگاه شهید تندگویان ', 'Shahrivar', 1391, 'Khordad', 1394),
(215, 213, 'ReligiousCommittees', '', 'هیئت انصار المهدی ', 'Official', 'عضو هیئت موسس هیئت انصار المهدی شهرستان بروجرد', '', '', '', '', 'Farvardin', 1380, 'Azar', 1398),
(216, 239, 'CulturalCenter', '', 'شاهد', 'Voluntary', '', '', '', '', '', 'Farvardin', 1375, 'Khordad', 1389),
(235, 241, 'Others', 'هام المنفعه', 'خودکردان', 'Voluntary', '', '', '', '', '', 'Farvardin', 1370, 'Farvardin', 1376),
(236, 178, 'Mobilization', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(237, 178, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'دانشگاه تهران', 'Farvardin', 1398, 'Ordibehsht', 1394),
(238, 178, 'Councils', '', 'محله باغ صبا تهران', 'Official', 'بارزس شورا ', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(239, 178, 'Mobilization', '', '', '', '', 'Others', 'سازمان تربیت بدنی', 'Kadr', 'سازمان تربیت بدنی ', 'Azar', 1384, 'Esfand', 1388),
(240, 178, 'Mobilization', '', '', '', '', 'schools', '', 'Kadr', 'اموزش و پرورش ناحیه ۱ ری ', 'Mehr', 1376, 'Shahrivar', 1384),
(241, 178, 'RedCrescent', '', 'شهر ری', 'Voluntary', 'عضو و مدرس در سطح مدار', '', '', '', '', 'Mehr', 1377, 'Mehr', 1378),
(242, 220, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'حوزه شهری', 'Farvardin', 1377, 'Farvardin', 1398),
(267, 245, 'Councils', '', 'الل', 'Official', 'ادا', '', '', '', '', 'Shahrivar', 1398, 'Farvardin', 1398),
(268, 251, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'حوزه ۱۴۱ محرم', 'Bahman', 1382, 'Farvardin', 1386),
(269, 254, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'دانشگاه لرستان ', 'Esfand', 1378, 'Farvardin', 1384),
(271, 256, 'Mobilization', '', '', '', '', 'Others', '', 'Active', '', 'Khordad', 1375, 'Farvardin', 1398),
(276, 255, 'JihadistActivities', '', 'کاروان از خراسان تا فلسطین', 'Voluntary', 'هدف کاروان جهت دهی راهپیمایی اربعین به سمت آزادسازی قدس است', '', '', '', '', 'Khordad', 1393, 'Farvardin', 1398),
(277, 255, 'JihadistActivities', '', 'نهضت عدالتخواهان ولایتمدار', 'Voluntary', 'کارهای عدالتخواهی، مبارزه با زمین خواری که مدیریت نهضت به عهده طلبه سیرجانی معروف است.', '', '', '', '', 'Khordad', 1391, 'Farvardin', 1398),
(278, 255, 'Mobilization', '', 'دانشکده داروسازی', 'Voluntary', '', 'University', '', 'Active', 'دانشکده داروسازی', 'Mehr', 1382, 'Bahman', 1389),
(279, 255, 'Mobilization', '', '', '', '', 'Others', '', 'Active', 'مالک اشتر', 'Tir', 1376, 'Farvardin', 1398),
(280, 259, 'Mobilization', '', '', '', '', 'Others', '', 'Others', '', 'Farvardin', 1398, 'Farvardin', 1398),
(283, 261, 'TheMosque', '', 'راهیان نور', 'Voluntary', '', 'Urban', '', 'Active', 'ولیعصر فیروز اباد', 'Farvardin', 1375, 'Esfand', 1397),
(284, 262, 'Semen', '', 'جمعیت دانش آموختگان  دانشگاهی', 'Voluntary', '', '', '', '', '', 'Farvardin', 1390, 'Farvardin', 1396),
(285, 266, 'JihadistActivities', '', 'حوزه علوم اسلامی دانشگاهیان', 'Voluntary', 'مشاور فعالیت عای جهادی و اقدامات کارآفرینانه', '', '', '', '', 'Farvardin', 1397, 'Shahrivar', 1397),
(286, 266, 'CulturalCenter', '', 'ابن سینا', 'Voluntary', 'مدرس مبانی امنیت در فضای مجازی', '', '', '', '', 'Shahrivar', 1398, 'Azar', 1398),
(287, 266, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'حوزه ۱۵۳ عاشورا پایگاه شهید قائمی', 'Farvardin', 1384, 'Farvardin', 1398),
(288, 266, 'Charity', '', 'رهروان سیره علوی', 'Voluntary', 'مشاور حوزه مدیریت ', '', '', '', '', 'Farvardin', 1395, 'Esfand', 1398),
(295, 165, '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(296, 165, 'Semen', '', 'خانه توسعه پایدار یادگاران ماندگار ', 'Official', 'برای فرزندان شهدا ', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(297, 165, 'Schools', '', 'انجمن اولیا و مربیان ', 'Official', '', '', '', '', '', 'Farvardin', 1392, 'Farvardin', 1394),
(298, 165, 'JihadistActivities', '', 'بنیاد خادم الشهدا ', 'Voluntary', '', '', '', '', '', 'Farvardin', 1397, 'Azar', 1398),
(299, 165, 'ReligiousCommittees', '', 'دانشگاه شاهد', 'Voluntary', '', '', '', '', '', 'Farvardin', 1378, 'Farvardin', 1383),
(300, 165, 'Mobilization', '', '', '', '', 'University', '', 'Active', '', 'Farvardin', 1379, 'Farvardin', 1383),
(301, 165, 'RedCrescent', '', 'هلال احمر ', 'Voluntary', '', '', '', '', '', 'Farvardin', 1375, 'Farvardin', 1380),
(302, 273, 'Charity', '', 'انجمن احیا', 'Voluntary', '', '', '', '', '', 'Farvardin', 1397, 'Azar', 1398),
(307, 278, 'University', '', 'دانشگاه آزاد و شهید بهشتی', 'Voluntary', '', '', '', '', '', 'Farvardin', 1368, 'Farvardin', 1394),
(309, 136, 'Mobilization', '', '', '', '', 'University', '', 'Normal', '', 'Farvardin', 1382, 'Farvardin', 1384),
(310, 285, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'صنعتی شریف', 'Mehr', 1376, 'Tir', 1382),
(314, 282, 'Mobilization', '', '', '', '', 'Others', '', 'Active', 'شهیدچمران کارواموراجتماعی ', 'Dey', 1388, 'Tir', 1390),
(320, 225, 'Others', 'دانش آموخته حوزه دانشجویی', 'حوزه دانشجویی شهید بهشتی', '', '', '', '', '', '', 'Farvardin', 1384, 'Farvardin', 1387),
(321, 225, 'Others', 'ساخت فیلم کوتاه', 'انجمن سینمای جوان', '', '', '', '', '', '', 'Farvardin', 1388, 'Farvardin', 1389),
(322, 225, 'Mobilization', '', '', '', '', 'schools', '', 'Active', 'دبیرستان مروی', 'Farvardin', 1379, 'Farvardin', 1381),
(324, 289, 'Mobilization', '', '', '', '', 'Others', '', 'Active', '', 'Farvardin', 1373, 'Farvardin', 1398),
(325, 290, 'Mobilization', '', '', '', '', 'Urban', '', 'Normal', '', 'Farvardin', 1398, 'Farvardin', 1398),
(334, 224, 'University', '', 'دانشگاه غیرانتفاعی صدرالمتألهین (صدرا) ', 'Voluntary', '', '', '', '', '', 'Mehr', 1393, 'Tir', 1396),
(335, 224, 'University', '', 'دانشگاه غیرانتفاعی آل‌طه ', 'Official', 'مدرس، همکاری ادامه دارد. ', '', '', '', '', 'Mehr', 1396, 'Farvardin', 1398),
(336, 224, 'TheMosque', '', 'مسجد امام حسن‌عسکری علیه‌السلام ', 'Official', 'هیأت امنا، همکاری ادامه دارد. ', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(337, 224, 'Mobilization', '', '', '', '', 'Others', 'بسیج مهندسین برق منطقه‌ای تهران ', 'Active', 'برق منطقه‌ای تهران، همکاری ادامه دارد. ', 'Dey', 1378, 'Esfand', 1398),
(345, 275, 'JihadistActivities', '', 'طبيب مسير', 'Voluntary', '', '', '', '', '', 'Mehr', 1397, 'Esfand', 1398),
(346, 275, 'University', '', 'دانشگاه صنعتي اميركبير', 'Official', '', '', '', '', '', 'Mehr', 1391, 'Esfand', 1398),
(347, 275, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'امير المومنين عليه السلام', 'Farvardin', 1398, 'Esfand', 1398),
(349, 295, '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(350, 295, 'Others', 'قرآنی', 'جبهه فعالان قرآنی', 'Voluntary', '', '', '', '', '', 'Farvardin', 1394, 'Azar', 1398),
(351, 295, 'Mobilization', '', '', '', '', 'Others', '', 'Kadr', '', 'Ordibehsht', 1389, 'Azar', 1398),
(361, 298, 'Schools', '', 'مدارس سطح استان', 'Voluntary', '', '', '', '', '', 'Farvardin', 1394, 'Farvardin', 1398),
(362, 298, 'Semen', '', 'طلایه داران عرصه امید', 'Official', '', '', '', '', '', 'Farvardin', 1393, 'Farvardin', 1398),
(363, 298, 'University', '', 'مدرس', 'Official', '', '', '', '', '', 'Farvardin', 1397, 'Farvardin', 1398),
(364, 298, 'ReligiousCommittees', '', 'هیات محبان علی ابن ابی طالب', 'Voluntary', '', '', '', '', '', 'Farvardin', 1380, 'Farvardin', 1398),
(365, 298, 'University', '', 'بسیج اساتید', 'Voluntary', '', '', '', '', '', 'Farvardin', 1397, 'Farvardin', 1398),
(366, 298, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Farvardin', 1380, 'Farvardin', 1398),
(367, 298, 'JihadistActivities', '', 'قرارگاه جهادی امام رضا ع', 'Voluntary', '', '', '', '', '', 'Farvardin', 1390, 'Farvardin', 1398),
(375, 299, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '۲۱۹ شهری', 'Ordibehsht', 1375, 'Farvardin', 1398),
(376, 300, 'Mobilization', '', '', '', '', 'Others', 'ادارات', 'Active', 'امام علي ع', 'Tir', 1364, 'Farvardin', 1398),
(377, 303, 'Mobilization', '', '', '', '', 'Others', '', 'Active', 'کارمندی ', 'Farvardin', 1382, 'Farvardin', 1398),
(390, 271, 'Schools', '', 'مدرسه ميعاد', 'Voluntary', 'تربيت ', '', '', '', '', 'Farvardin', 1390, 'Azar', 1398),
(391, 271, 'JihadistActivities', '', 'بازسازي مناطق سيل و زلزله زده', 'Voluntary', ' پشتيباني و آماد /آموزشي / فرهنگي  و عمراني  و اعزام نيرو ', '', '', '', '', 'Farvardin', 1396, 'Farvardin', 1398),
(392, 271, 'ReligiousCommittees', '', 'هيات نورالزهرا (س) و 14 معصوم ', 'Official', 'تاسيس 1393 ', '', '', '', '', 'Farvardin', 1393, 'Azar', 1398),
(393, 271, 'TheMosque', '', 'مسجد جامع الزهرا(س)', 'Official', 'عضو هيات امناء و دبير كارگروه فرهنگي  و مدير مالي ', '', '', '', '', 'Farvardin', 1389, 'Azar', 1398),
(394, 271, 'Councils', '', 'شوراياري محله بهاران منطقه 5', 'Official', 'عضو هيات امنا،شورايار و مدير خانه فناوري اطلاعات', '', '', '', '', 'Farvardin', 1389, 'Azar', 1398),
(395, 271, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '101', 'Farvardin', 1380, 'Azar', 1398),
(396, 304, 'Mobilization', '', '', '', '', 'University', '', 'Active', '', 'Farvardin', 1391, 'Farvardin', 1396),
(397, 302, 'University', '', 'روابط عمومی و حوزه نهادنمایندگی رهبری و پدافند غیر عامل', 'Official', '', '', '', '', '', 'Dey', 1385, 'Shahrivar', 1392),
(400, 305, 'Semen', '', 'امید انتظار', 'Official', 'عضو هیات مدیره', '', '', '', '', 'Aban', 1395, 'Azar', 1398),
(401, 305, 'ReligiousCommittees', '', 'هیات الشهدا', 'Voluntary', '', '', '', '', '', 'Farvardin', 1387, 'Esfand', 1398),
(403, 309, 'Mobilization', '', '', '', '', 'Others', 'بسيج مهندسين استان اردبيل', 'Others', 'اردبيل', 'Farvardin', 1392, 'Farvardin', 1398),
(407, 310, '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(408, 310, 'ReligiousCommittees', '', '', 'Voluntary', '', '', '', '', '', 'Farvardin', 1370, 'Farvardin', 1379),
(409, 310, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Farvardin', 1373, 'Farvardin', 1380),
(424, 301, 'ReligiousCommittees', '', 'ميدان ٧٢', 'Voluntary', '', '', '', '', '', 'Mehr', 1390, 'Esfand', 1398),
(425, 301, 'University', '', '', 'Voluntary', '', '', '', '', '', 'Mehr', 1392, 'Khordad', 1394),
(426, 301, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Ordibehsht', 1375, 'Esfand', 1398),
(427, 301, 'Charity', '', 'انجمن حمايت از بيماران كليوي همدان', 'Voluntary', '', '', '', '', '', 'Farvardin', 1390, 'Esfand', 1398),
(436, 226, 'ReligiousCommittees', '', 'محبان الرضا علیه السلام ', 'Voluntary', 'مسؤل رسانه و تبلیغات', '', '', '', '', 'Farvardin', 1392, 'Azar', 1398),
(437, 226, 'Mobilization', '', '', '', '', 'schools', '', 'Active', '', 'Farvardin', 1381, 'Shahrivar', 1382),
(438, 226, 'Mobilization', '', '', '', '', 'Others', '', 'Active', '', 'Tir', 1394, 'Azar', 1398),
(439, 226, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Dey', 1382, 'Tir', 1394),
(459, 308, 'Mobilization', '', '', '', '', 'Others', 'محلات', 'Active', 'حوزه مقاومت3 شهید نوری', 'Mehr', 1371, 'Azar', 1398),
(460, 315, 'Others', 'سوابق اجرایی ، فرهنگی ، اجتماعی و سیاسی : ', '', '', ' معاون نمونه اداره کل فرهنگ و ارشاد اسلامی استان تهران – سال 88 دبیراجرایی کنگره 450 شهید شهرستان پاکدشت و پارچین – سال82  مسئول دفتر ستاد احیاء امر به معروف و نهی از منکر شهرستان پاکدشت – سال 82 ', '', '', '', '', 'Farvardin', 1376, 'Azar', 1398),
(461, 316, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'هسته علمی مدیریت صنعتی', 'Mehr', 1383, 'Bahman', 1386),
(476, 314, 'Mobilization', '', '', '', '', 'Others', 'گردان عاشورا', 'Active', '', 'Farvardin', 1374, 'Azar', 1398),
(477, 314, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'بسیج اساتید', 'Bahman', 1384, 'Azar', 1398),
(478, 314, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'بسیج دانشجویی', 'Mehr', 1374, 'Khordad', 1384),
(479, 314, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Mehr', 1369, 'Azar', 1398),
(480, 314, 'ReligiousCommittees', '', 'محبین الزهرا مسجد حضرت آیت الله نجفی', 'Voluntary', '', '', '', '', '', 'Farvardin', 1370, 'Azar', 1398),
(481, 314, 'TheMosque', '', 'هیات امنای مسجد ایت الله نجفی همدان', 'Voluntary', '', 'University', '', 'Active', '', 'Mehr', 1376, 'Azar', 1382),
(482, 317, 'Mobilization', '', '', '', '', 'University', '', 'Kadr', 'بسیج اساتید استان اصفهان ', 'Khordad', 1379, 'Dey', 1398),
(493, 319, 'Others', 'کسب عنوان جوانترین چهره در حوزه اقتصاد سلامت', 'موسسه اندیشه طب ایرانیان', 'Official', 'به علت ارائه طرح کاهش هزینه های درمان در بخش خصوصی', '', '', '', '', 'Farvardin', 1390, 'Esfand', 1392),
(494, 319, 'Others', 'فرهنگ نامه فرهنگی ایران', 'به سفارش معاونت اجتماعی مرکز تحقیقات استراتژیک مجمع تشخیص مصلحت', 'Official', 'اینجانب حامی پروزه بوده ام', '', '', '', '', 'Farvardin', 1390, 'Esfand', 1390),
(495, 319, 'Others', 'مدیر اجرایی', 'خانه سالمندان اندیشه', 'Official', 'این خانه سالمندان در منطقه زعفرانیه تهران تاسیس و مورد بهره برداری قرار گرفت و سپس ببه جهاد دانشگاهی واگذار گردید', '', '', '', '', 'Farvardin', 1390, 'Esfand', 1390),
(496, 319, 'ReligiousCommittees', '', 'هیئت و انجمن اسلامی اتحادیه صنف درود گران', 'Voluntary', '', '', '', '', '', 'Farvardin', 1370, 'Esfand', 1398),
(497, 320, 'Others', 'کارشناس فرهنگی هنری', 'سازمان زندانها', 'Official', '', '', '', '', '', 'Bahman', 1379, 'Farvardin', 1398),
(498, 227, 'JihadistActivities', '', 'بسیج سازندگی ', 'Voluntary', '', '', '', '', '', 'Tir', 1385, 'Azar', 1398),
(499, 227, 'Others', 'فرهنگی و مذهبی', 'بنیاد مهدویت ', 'Voluntary', 'مسئول آموزش ', '', '', '', '', 'Mehr', 1385, 'Mehr', 1395),
(500, 227, 'Others', 'تشکل ', 'کانون تربیت اسلامی', 'Voluntary', 'قائم مقام', '', '', '', '', 'Tir', 1397, 'Azar', 1398),
(501, 227, 'ReligiousCommittees', '', '', 'Voluntary', '', '', '', '', '', 'Farvardin', 1374, 'Azar', 1398),
(502, 227, 'Charity', '', 'امید نیکان بهار', 'Official', 'رییس هیات مدیره', '', '', '', '', 'Shahrivar', 1398, 'Azar', 1398),
(503, 227, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'شهید مفتح', 'Khordad', 1396, 'Azar', 1398),
(504, 227, 'Mobilization', '', '', '', '', 'schools', '', 'Active', 'فرهنگیان', 'Mehr', 1376, 'Khordad', 1396),
(505, 294, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'بسیج اساتید', 'Farvardin', 1396, 'Esfand', 1398),
(506, 294, 'Mobilization', '', '', '', '', 'Others', 'بسیج کارمندان', 'Active', 'وزارت علوم', 'Farvardin', 1390, 'Esfand', 1398),
(507, 294, 'TheMosque', '', 'مسجد نور قیطریه', 'Official', 'عضو هیئت امناء مسجد نور قیطریه (نماینده جوانان)', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(508, 294, 'Schools', '', 'مجتمع آموزشی مفید', 'Official', 'تدریس و فعالیتهای فوق برنامه', '', '', '', '', 'Mehr', 1376, 'Mehr', 1380),
(509, 294, 'CulturalCenter', '', 'فرهنگسرای مترو', 'Official', 'مشاور فرهنگي مديريت مراكز فرهنگي هنري مترو تهران(فرهنگسرای مترو)', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(510, 294, 'Mobilization', '', '', '', '', 'University', '', 'Kadr', 'دانشگاه خواجه نصیر', 'Mehr', 1376, 'Tir', 1381),
(511, 294, 'Others', 'عضو و مسؤول دبیرخانه شورای امر به معروف و نهی از منکر', 'وزارت علوم، تحقیقات و فناوری', 'Official', '', '', '', '', '', 'Farvardin', 1396, 'Esfand', 1398),
(512, 332, '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(513, 333, '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(518, 334, 'Mobilization', '', '', '', '', 'schools', '', 'Normal', '', 'Mehr', 1380, 'Shahrivar', 1386),
(527, 345, 'University', '', 'نهاد رهبری', 'Voluntary', 'در جلسات کرسی های آزاد اندیشی', '', '', '', '', 'Mehr', 1387, 'Khordad', 1390),
(528, 345, 'Mobilization', '', '', '', '', 'University', '', 'Normal', 'دانشگاه تبریز', 'Mehr', 1386, 'Khordad', 1390),
(529, 345, 'Mobilization', '', '', '', '', 'schools', '', 'Active', 'مدرسه نمونه دولتی امام حسن مجتبی', 'Mehr', 1381, 'Khordad', 1385),
(530, 345, 'University', '', 'کانون منتظران', 'Voluntary', 'در راستای ترویج فرهنگ مهدویت و انتظار', '', '', '', '', 'Mehr', 1388, 'Khordad', 1390),
(532, 347, 'Others', 'عضو هیات مدیره', 'نظام صنفی رایانه‌ای', 'Official', '', '', '', '', '', 'Dey', 1396, 'Azar', 1398),
(533, 347, 'Charity', '', 'موسسه نیکوکاری مهربانه', 'Official', 'عضو هیات موسس و هیات مدیره', '', '', '', '', 'Farvardin', 1394, 'Azar', 1398),
(535, 350, 'Mobilization', '', '', '', '', 'University', '', 'Kadr', 'رازی', 'Farvardin', 1398, 'Farvardin', 1398),
(539, 353, 'JihadistActivities', '', 'پایگاه بسیج شهید عبدالله رسولی ', 'Voluntary', '', '', '', '', '', 'Shahrivar', 1397, 'Esfand', 1398),
(540, 353, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Farvardin', 1396, 'Esfand', 1398),
(541, 357, 'TheMosque', '', 'مسجد الصادق علیه السلام', 'Voluntary', 'برگزاری مراسمات مذهبی', '', '', '', '', 'Mehr', 1379, 'Esfand', 1383),
(542, 357, 'Schools', '', 'اتحادیه انجمنهای اسلامی دانش آموزان شیراز ', 'Voluntary', 'شرکت در جلسات آموزشی ', '', '', '', '', 'Mehr', 1379, 'Khordad', 1380),
(543, 357, 'Mobilization', '', '', '', '', 'Urban', '', 'Kadr', 'حوزه یک امام علی علیه السلام', 'Mordad', 1380, 'Shahrivar', 1381),
(544, 357, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', 'حوزه مقاومت پنج بسیج شیراز', 'Mehr', 1379, 'Mordad', 1380),
(545, 362, 'Others', 'یادداشت نویس', 'سایت الف', 'Voluntary', 'نوشتن یادداشت های فرهنگی و سیاسی', '', '', '', '', 'Farvardin', 1392, 'Dey', 1398),
(546, 362, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '227 آل طه', 'Farvardin', 1378, 'Dey', 1398),
(547, 362, 'TheMosque', '', 'مسجد جامع المهدی', 'Voluntary', 'برگزاری نشست ها و مراسمات سیاسی', '', '', '', '', 'Farvardin', 1392, 'Esfand', 1398),
(548, 362, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'دانشگاه آزاد شهرری', 'Mehr', 1381, 'Shahrivar', 1386),
(549, 362, 'Schools', '', 'دبیرستان چمران', 'Voluntary', 'فعالیت فرهنگی و گاهی تدریس', '', '', '', '', 'Mehr', 1382, 'Shahrivar', 1384),
(550, 371, 'Mobilization', '', '', '', '', 'schools', '', 'Normal', '', 'Ordibehsht', 1375, 'Esfand', 1390),
(551, 369, 'Mobilization', '', '', '', '', 'University', '', 'Normal', 'قم', 'Mehr', 1398, 'Esfand', 1398),
(552, 339, 'Others', 'همکاری برای ایجاد گروه جوانان نخبه و انقلابی صنعت نفت وگاز', 'حزب الله نفت و گاز', 'Voluntary', '', '', '', '', '', 'Shahrivar', 1396, 'Azar', 1398),
(553, 339, 'ReligiousCommittees', '', 'هییت محبان مهدی ', 'Official', 'خیریه مذهبی و فرهنگی جوانان', '', '', '', '', 'Tir', 1393, 'Azar', 1398),
(554, 339, 'Charity', '', 'خیریه شهدای قشقایی', 'Official', 'خیریه مجازی', '', '', '', '', 'Ordibehsht', 1398, 'Azar', 1398),
(555, 339, 'Charity', '', 'خیریه شهید محمد رفیعی', 'Official', 'خیریه مجازی ', '', '', '', '', 'Mehr', 1397, 'Azar', 1398),
(559, 388, 'Mobilization', '', '', '', '', 'schools', '', 'Kadr', 'حوزه شماره 1', 'Khordad', 1395, 'Tir', 1395),
(560, 388, 'Charity', '', 'مجموعه شماره 1', 'Official', 'توضیح ', '', '', '', '', 'Aban', 1396, 'Azar', 1326),
(569, 390, 'JihadistActivities', '', 'بسیج', 'Official', '40564', '', '', '', '', 'Farvardin', 1391, 'Farvardin', 1395),
(570, 392, 'Mobilization', '', '', '', '', 'Urban', '', 'Active', '', 'Farvardin', 1390, 'Esfand', 1398),
(574, 389, '', '', '', '', '', '', '', '', '', 'Farvardin', 1398, 'Farvardin', 1398),
(575, 389, 'Mobilization', '', '', '', '', 'Others', 'بسیج فرهنگیان ', 'Active', 'فرهنگیان ', 'Mehr', 1376, 'Mehr', 1390),
(576, 389, 'Mobilization', '', '', '', '', 'University', '', 'Active', 'دانشگاه پیام نور ', 'Mehr', 1390, 'Esfand', 1398),
(577, 394, 'Charity', '', 'بیبلیلبل', 'Voluntary', 'لالباببلبا', '', '', '', '', 'Mordad', 1352, 'Mehr', 1372),
(578, 395, 'Semen', '', 'بلابلابلا', 'Voluntary', 'بلبلابلابا', '', '', '', '', 'Shahrivar', 1386, 'Mordad', 1386),
(580, 244, 'Others', 'عنوان سایر', 'نام مجموعه سایر', 'Official', 'توصیحات سایر', '', '', '', '', 'Mordad', 1382, 'Tir', 1395);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_special`
--

CREATE TABLE `candidate_special` (
  `RowId` int(11) NOT NULL,
  `CandidateCode` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidatePreName` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateFullName` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateStateId` int(11) DEFAULT '0',
  `CandidateElectionId` int(11) DEFAULT NULL,
  `CandidateProfileImage` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateInstaAccount` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CandidateInviteCount` int(11) NOT NULL DEFAULT '0',
  `CandidateHasAccepted` tinyint(4) NOT NULL DEFAULT '1',
  `CandidateRefId` int(11) DEFAULT NULL,
  `CandidateTotalScore` int(11) NOT NULL DEFAULT '0',
  `CreateDateTime` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_special`
--

INSERT INTO `candidate_special` (`RowId`, `CandidateCode`, `CandidatePreName`, `CandidateFullName`, `CandidateStateId`, `CandidateElectionId`, `CandidateProfileImage`, `CandidateInstaAccount`, `CandidateInviteCount`, `CandidateHasAccepted`, `CandidateRefId`, `CandidateTotalScore`, `CreateDateTime`) VALUES
(14, '23601', 'جناب آقای', 'سید محمود نبویان', 8, 59, 'b4f19ccd474a347d8e46b82a786fe0f4_______________________________.jpg', NULL, 8, 0, 71, 2100000, '1398/11/08 10:14:26'),
(15, '52673', 'جناب آقای', 'غلامرضا تاجگردون', 23, 155, '91cec7bd92a5abc4f9faf622f913ccc6________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:06:50'),
(17, '92328', 'جناب آقای', 'محسن علیجانی زمانی', 8, 59, 'de218c1196e9c1543f043656457b3220___________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:07:59'),
(18, '19151', 'جناب آقای', 'محمدحسن قدیری ابیانه', 8, 59, '7f91793b2421183becda104a4b8954e0________________________________________.jpg', NULL, 0, 0, NULL, 0, '1398/10/09 15:08:28'),
(19, '90807', 'جناب آقای', 'محمود بهمنی', 5, 50, '011b947f85dce89f7ad8aaa560df0352______________________.jpg', NULL, 1, 1, NULL, 0, '1398/10/09 15:09:00'),
(20, '69859', 'جناب آقای', 'حسین رضازاده', 17, 124, '1ab8c9438b82d1dda7008753b5100759_Hoseyn_Rezazade.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:09:31'),
(21, '63226', 'جناب آقای', 'حمیدرضا پشنگ', 16, 111, '5da7bd925fa4d12d3ccad93c8a3556c0_Hamidreza_Pashang.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:10:43'),
(22, '92573', 'جناب آقای', 'سیدشهاب‌الدین صدر', 8, 59, 'e1dc1ad3a164bd11d633d5b9401cb9e9___________________________.jpg', NULL, 0, 0, NULL, 0, '1398/10/09 15:12:35'),
(23, '66889', 'جناب آقای', 'عبدالحمید خدری', 7, 54, '6edfb4eeee0e8e78ada161ad632dc378_Abdolhamid_Khedri.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:12:53'),
(24, '33505', 'سرکار خانم', 'لاله افتخاری', 8, 59, '779e92a06f660a33dd27306fe642f2cc________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:13:08'),
(25, '88791', 'جناب آقای', 'محمد خدابخشی', 26, 173, 'f0ddf13a6395d4b49aa91c960590b95e_Mohammad_Khodabakhshi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:13:31'),
(26, '94803', 'جناب آقای', 'محمد شاهی عربلو', 8, 61, '00f43fcbd469f14786b36697a267a233_Mohammad_ShahiArablu.jpg', NULL, 5, 1, NULL, 0, '1398/10/09 15:13:52'),
(27, '23109', 'جناب آقای', 'محمدسعید احدیان', 8, 59, '194f42bbe0bbdfb7d911bff3c0286812______________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:14:07'),
(28, '82053', 'جناب آقای', 'مصطفی سوادکوهی', 8, 59, 'dc7a9958c5fbf9be286e8797d19a50dd_Mostafa_Savadkuhi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:14:26'),
(29, '98711', 'جناب آقای', 'همایون سامیح', 32, 214, '6360e631915dca029846f9752758f075_Homayun_Samih.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:14:51'),
(30, '11779', 'جناب آقای', 'ارسلان فتحی پور', 1, 13, '5555d03305d79e43521a5d762b09835f_____________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:15:16'),
(31, '46653', 'جناب آقای', 'حجت الله دمیاد', 22, 151, '57cb2a88b2498f454022f6b708eed13e___________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:25:38'),
(32, '88942', 'جناب آقای', 'رحمت الله بیگدلی', 8, 59, 'ccbb3ce39ff987bd9472ffe046869316_Rahmatolah_Bigdeli.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:26:48'),
(33, '67675', 'جناب آقای', 'رضا تقی پور', 8, 59, '5d85bc68e819881a99b3d281a92c3c04_____________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:27:06'),
(34, '54439', 'سرکار خانم', 'زهره الهیان', 8, 59, '30428bc4771489b9525ad878e563361b______________________.jpg', NULL, 0, 0, NULL, 0, '1398/10/09 15:27:31'),
(35, '89708', 'جناب آقای', 'سیدابوالقاسم رئوفیان', 8, 59, '03634abee2c263b8ca52f9cf1fd6ad8c_Abolghasem_Raoofiyan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:28:06'),
(36, '62608', 'جناب آقای', 'سیدقاسم جاسمی', 22, 151, '0a1dc61125bca5506b74211b44179d3e___________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:28:27'),
(37, '15369', 'جناب آقای', 'عسگر جلالیان', 7, 57, '179370c185b717bdff5e21ad99399304_Asgar_Jalaliyan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:28:53'),
(38, '28720', 'جناب آقای', 'علی خضریان', 8, 59, '68ba3aeac21c5a773ff1836bbf3f863e____________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:29:05'),
(39, '59463', 'جناب آقای', 'علیرضا دهقان', 4, 45, '3a0ce9ec0e6a2cf9aa33198af7fc5554_Alireza_Dehghan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:31:59'),
(40, '56488', 'جناب آقای', 'علیرضا رحیمی', 8, 59, '2caeb9dec13de5fb18f1707692e1a514_Alireza_Rahimi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:32:15'),
(41, '96481', 'جناب آقای', 'علیرضا محجوب', 8, 59, '1aca58a7ea18a51975ab79fc282300d5________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:32:28'),
(42, '55560', 'جناب آقای', 'مالک شریعتی', 8, 59, 'b7b5b5962c05a4d365b464135d32553d_Malek_Shariati.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:32:44'),
(43, '88104', 'جناب آقای', 'محمد سلیمانی', 8, 59, 'f7f09ee13dbaaf8bfdbb168ac1d046fe_Mohammad_Soleymani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:32:56'),
(44, '79021', 'جناب آقای', 'محمدحسن طریقت منفرد', 8, 59, 'f2a7e5c2a6811d86abc4c1f1d06e36ac_MohammadHasan_TarighatMonfared.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:33:11'),
(45, '60699', 'جناب آقای', 'محمدرضا امیری کهنوج', 25, 166, '69512ad98b5a3998ec1b1d32601e4bc0_MohammadReza_AmiriKahnuj.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:34:12'),
(46, '30895', 'جناب آقای', 'مرتضی آقاتهرانی', 8, 59, 'b5db6933907c8081963724b49edc7694______________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:34:24'),
(47, '82820', 'جناب آقای', 'نصرالله جهانگرد', 8, 59, 'b82242c9531e755da0f151879d0af63e______________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:34:39'),
(48, '93644', 'جناب آقای', 'ابوالفضل سروش', 8, 59, '952639b94f04242b8b0a1fb13817d618__________________________.jpg', NULL, 0, 1, NULL, 2100000, '1398/10/09 15:34:49'),
(49, '62709', 'جناب آقای', 'ابوالفضل ظهره‌وند', 8, 59, '00fd141e63ce75335ba6520a1a69caa6_Abualfazl_Zohrevand.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:35:00'),
(50, '75665', 'جناب آقای', 'بهروز بنیادی', 8, 59, '5e66d4f2cf19e69edc110c8732ba1591_Behruz_Bonyadi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:35:14'),
(51, '85797', 'جناب آقای', 'حمید رسایی', 8, 59, '9ced86fa24c41bdd25705ffd524049ab_Hamid_Rasaei.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:35:27'),
(52, '18794', 'جناب آقای', 'داریوش قنبری', 8, 59, 'cd6e93cd2a8e19b3a0043cf36f40a574_Daryush_Ghanbari.jpeg', NULL, 0, 1, NULL, 0, '1398/10/09 15:35:38'),
(53, '32200', 'جناب آقای', 'داود محمدی', 18, 131, '248ef68211e05a69c4b0cd2d92e79654_Davud_Mohammadi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:36:04'),
(54, '85805', 'جناب آقای', 'سیدعلی ادیانی', 8, 59, '96d1af0faac38aeb56f5a392ab8a3b06_Seyed_Ali_Adyani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:37:44'),
(55, '94223', 'جناب آقای', 'علیرضا منادی سفیدان', 1, 10, '8c2b41e812861ab2b03e8e7d08c113f2_Alireza_Monadi_Sefidan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:38:03'),
(56, '87909', 'جناب آقای', 'کارن خانلری', 32, 211, '3e672c1d6e44515e479576026b6a600c_Karen_Khanlari.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:38:24'),
(57, '33859', 'جناب آقای', 'مجید فهمیده', 8, 59, '2300d184089863f6aa0412f53edec0ad_Majid_Fahmide.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:38:35'),
(58, '92254', 'جناب آقای', 'محمدرضا خباز', 8, 59, '0fa5107a980745265f9c823385c2ce4c________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:38:51'),
(59, '60287', 'جناب آقای', 'محمدرضا راه چمنی', 8, 59, '3749e376c73402e0c6e4953fd7ab0565_Mohammadreza_RahChamani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:39:02'),
(60, '39426', 'جناب آقای', 'محمدصادق کوشکی', 8, 59, '25f0550194c20a646a40543674d09b46____________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:39:17'),
(61, '87373', 'جناب آقای', 'مهدی شیخ', 8, 59, '387a1a0f32dea368fac611124bb38de7________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:39:33'),
(62, '80949', 'جناب آقای', 'مهرداد بائوج لاهوتی', 25, 172, 'b75406bb73ab6e6f4f5573b268bc508b_Mehrdada_Lahuti.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:40:03'),
(63, '71174', 'جناب آقای', 'احمد مازنی', 8, 59, '7faa4b97fb463424d8b5338e5600d12a____________________.jpg', NULL, 2, 1, NULL, 0, '1398/10/09 15:40:13'),
(64, '16784', 'سرکار خانم', 'آذر منصوری', 8, 59, 'fdb8d4aae4aaefa0d9fd481961f2b0b1____________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:40:23'),
(65, '77431', 'جناب آقای', 'بیژن نوباوه', 8, 59, '3f281a92404ae5e7c0b75de8efd16169_Bijan_Nobave.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:40:34'),
(66, '82828', 'جناب آقای', 'رامین مهمان‌پرست', 8, 59, '42e922fdf2e9e580316cc8da810684ae_Ramin_MehmanParast.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:40:46'),
(67, '79073', 'جناب آقای', 'سیدمصطفی میرسلیم', 8, 59, 'feda5cd024cdfe644d6419e2f46c836e_Mostafa_Mirsalim.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:40:57'),
(68, '28418', 'جناب آقای', 'علی اصغر یوسف نژاد', 8, 59, '7f3f84d35100f1c5aea6950c8753427a_Aliasghar_Yusef_Nezhad.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:41:24'),
(69, '23719', 'جناب آقای', 'علی شکوری راد', 8, 59, '2262628aa7321028c62d7d658215249b_________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:41:42'),
(70, '83828', 'جناب آقای', 'علی کیهانیان', 8, 59, '050b3d2e730f12dd4d33bf709e574aec_Ali_Keyhanian.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:41:58'),
(71, '81172', 'جناب آقای', 'کامبیز مهدی زاده', 1, 10, 'b2a445b9f3f082c1d83e6c20fc624784_Kambiz_Mahdizade.jpeg', NULL, 0, 1, NULL, 0, '1398/10/09 15:42:10'),
(72, '37767', 'جناب آقای', 'محمدرضا بادامچی', 8, 59, '4bf75fa854d5e8aabc0d879ad1df4ec7______________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:52:00'),
(73, '80924', 'جناب آقای', 'احمد پروایی', 25, 169, '2ad463f2937416109bfdcde93c5b6281_Ahmad_Parvaei.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:52:28'),
(74, '24886', 'جناب آقای', 'اقبال شاکری', 8, 59, '7a71b52ccee1bac0936fe8f480ff3241_Eghbal_Shakeri.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:54:15'),
(75, '29657', 'جناب آقای', 'بهروز نعمتی', 8, 59, 'b56ba2977bb438157c0f865a3e322d3f_Behruz_Nemati.jpeg', NULL, 0, 1, NULL, 0, '1398/10/09 15:55:01'),
(76, '53269', 'جناب آقای', 'حسین سبحانی‌نیا', 11, 83, '8e5bf9d9672610e3ebc142e0edc01bad_Hoseyn_SobhaniNiya.jpg', NULL, 1, 1, NULL, 0, '1398/10/09 15:55:43'),
(77, '88736', 'جناب آقای', 'حسین نقاشی', 8, 59, 'dcd9e5325d3d06ad4ece96b63ba5fc22_Hoseyn_Naghashi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:55:57'),
(78, '71940', 'سرکار خانم', 'سیده حمیده زرآبادی', 18, 131, '0e49bdbda8e1abe91f3d8b8cdfca8479_Hamide_ZarAbadi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:56:16'),
(79, '11716', 'جناب آقای', 'غلامرضا خواجه سروی', 8, 59, 'd94f172abbd3fcc4184ec603a3a35f46_GholamReza_Khajesarvi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:56:30'),
(80, '38361', 'جناب آقای', 'سیدمحمد حسینی', 8, 59, '0ec63b053594e6f59504c8bee8831fab_SeyedMohammad_Hoseyni.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:56:47'),
(81, '21840', 'جناب آقای', 'سیدمهدی هاشمی', 8, 59, '2b53ca4538508fe906bd2d13c47db99c_Mahdi_Hashemi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:57:02'),
(82, '75928', 'جناب آقای', 'سیدنظام‌الدین موسوی', 8, 59, '6f05533c4e3329d6cc0419b87ba541a7______________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:57:33'),
(83, '69537', 'جناب آقای', 'سیدیوسف مرادی', 8, 59, '531c2f86e0120ddc301b4cf562a85560__________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:57:48'),
(84, '91480', 'جناب آقای', 'صادق خلیلیان', 8, 59, 'dca340db47e01be773e76c25b0d42ef3_Sadegh_Khaliliyan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:58:02'),
(85, '79925', 'جناب آقای', 'علی عباسپور تهرانی‌فر', 8, 59, '94eecf0d8272ac74762e247d634b747e_Ali_Abbaspour.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:58:20'),
(86, '22788', 'جناب آقای', 'علی مطهری', 8, 59, 'a9cc7a3afe5d187bfb265802cbf7c9ef__________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:59:24'),
(87, '20307', 'جناب آقای', 'غلامرضا انصاری', 8, 59, 'd29832990895bf64157cc4a6dbe5dac4_Gholamreza_Ansari.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:59:41'),
(88, '86063', 'جناب آقای', 'غلامرضا حیدری', 8, 59, 'a82fc127ed807007e0c3756c405e7404_Gholamreza_Heydari.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 15:59:58'),
(89, '57677', 'سرکار خانم', 'فاطمه رهبر', 8, 59, 'f8c8f604c4219dcf97c74c41a548992e____________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:00:10'),
(90, '33455', 'جناب آقای', 'سید فرید موسوی', 8, 59, '238eecf059cf5b5c2de302f40326c5b9_Farid_Musavi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:00:25'),
(91, '86214', 'جناب آقای', 'فریدون عباسی', 17, 124, '535015c530e7174661333d6fe1dbd3e8_Fereydun_Abbasi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:00:47'),
(92, '30549', 'جناب آقای', 'محسن پیرهادی', 8, 59, '4359446e6ad893812702b4afae60eb25_Mohsen_Pirhadi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:07:25'),
(93, '64786', 'جناب آقای', 'محمد عباسی', 8, 59, '31ab2a538e121c1db5313f8301a44322_Mohammad_Abbasi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:07:44'),
(94, '93869', 'جناب آقای', 'محمدحسین حسین‌زاده بحرینی', 11, 82, '25c7d7c473388a7046944a4122ff7ca6________________________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:08:54'),
(95, '84446', 'جناب آقای', 'محمدرضا نجفی', 8, 59, 'cd793a8e4fbe496cfe67018c6108d4e5_MohammadReza_Najafi.jpeg', NULL, 0, 1, NULL, 0, '1398/10/09 16:09:14'),
(96, '68375', 'جناب آقای', 'محمدعلی وکیلی', 8, 59, 'ef7d861baaee49971e3ff150b843a435_mohammadali_vakili.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:09:27'),
(97, '75937', 'جناب آقای', 'محمود صادقی', 8, 59, '519f39480f6f88999fcae0cd973ac0a1______________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:09:46'),
(98, '54967', 'جناب آقای', 'مصطفی کواکبیان', 8, 59, '738b0b47f03ddea35eb309e8b464629b____________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:09:57'),
(99, '57189', 'جناب آقای', 'ابراهیم انصاریان', 8, 59, '5161da2ba88ed42f2920b976960cad66_Ebrahim_Ansariyan.jpg', NULL, 3, 1, NULL, 0, '1398/10/09 16:10:46'),
(100, '27979', 'جناب آقای', 'احمد امیرآبادی فراهانی', 19, 132, 'badc7fddfb70ce3d3ed01d1b6b4b0fe3_Ahmad_Amirabadi_Farahani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:12:01'),
(101, '20818', 'جناب آقای', 'احمد حکیمی‌پور', 8, 59, '6eb6e77ac0c54a21fbd2b7970c962fbb_Ahmad_HakimiPur.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:12:15'),
(102, '82685', 'جناب آقای', 'احمد نقیب زاده', 8, 59, '96969007ee60cdd47547c961fd0c5517_Ahmad_Naghibzade.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:13:31'),
(103, '91631', 'سرکار خانم', 'الهام امین زاده', 8, 59, 'bebdc4a63ca9a77b9acb36d7f22a969f_Elham_AminZade.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:13:44'),
(104, '52797', 'جناب آقای', 'الیاس حضرتی', 8, 59, 'f25182154074472a01089b214d90cb1e______________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:14:02'),
(105, '54118', 'جناب آقای', 'الیاس نادران', 8, 59, '1925f5bf28b88473ab4ad21727b94295_Elyas_Naderan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:14:22'),
(106, '27962', 'جناب آقای', 'امیرابراهیم رسولی', 8, 59, 'f67ab7737db9369772bdecf5334c90b1_AmirEbrahim_Rasuli.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:14:33'),
(107, '49960', 'سرکار خانم', 'پروانه مافی', 8, 59, '0e999434034cabb92024e34a16809a24_Parvane_Mafi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:14:42'),
(108, '61267', 'جناب آقای', 'حسن بیادی', 8, 59, 'cf2fadee79265e18e1f108450cfca755_Hasan_Bayadi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:14:51'),
(109, '15523', 'جناب آقای', 'حسن عابدی جعفری', 8, 59, 'bbd8fd4252f756cac9c7b5bbea398d4d_Hasan_Abedi_Jafari.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:15:01'),
(110, '56735', 'جناب آقای', 'حسن کامران', 4, 36, 'a22753035b95e6c4fc67f74bf70c2586_Hasan_Kamran.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:15:21'),
(111, '19363', 'جناب آقای', 'حسین راغفر', 18, 129, 'a6dcfad7c161def3719d51102b4ceb0f_Hoseyn_Raghfar.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:15:47'),
(112, '16828', 'جناب آقای', 'حسین مظفر', 8, 59, 'a75004ea1b06593145c8887eefc9f38c_Hoseyn_Mozaffar.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:16:10'),
(113, '59721', 'جناب آقای', 'حیدرعلی عابدی', 4, 36, '586e9d4f87de9c02b2fc112669ec49e9_HeydarAli_Abedi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:16:47'),
(114, '19942', 'جناب آقای', 'سعید زیباکلام', 8, 59, '51080a03f46fd2032be1df4da0e887e1_Saeid_Zibakalam.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:16:58'),
(115, '42027', 'سرکار خانم', 'سهیلا جلودارزاده', 8, 59, '0f861f4de24cf3498e79a91c6f8901ae________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:17:17'),
(116, '17915', 'جناب آقای', 'سیدحسن موسوی تبریزی', 8, 59, '047134e6477d0a565e1083bcd8eb41b8_Seyed_Hasan_Musavi_Tabrizi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:17:32'),
(117, '26399', 'جناب آقای', 'شهروز برزگر', 2, 24, '73341c57fd2cd2d658d277d272bcc79d_Shahruz_Barzegar.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:17:46'),
(118, '83520', 'سرکار خانم', 'طیبه سیاوشی', 8, 59, 'fc405c1769a31f379f28023b5d7617f2_Tayyebe_Siavoshi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:18:00'),
(119, '25141', 'جناب آقای', 'عبدالحسین روح‌الامینی', 8, 59, '2f8694144c6ec26ece9cdb5ebd4f9459_AbdolHoseyn_Ruholamini.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:18:12'),
(120, '27968', 'جناب آقای', 'علی شاهرخی', 26, 179, '4d8b68bfce18d915ce6e4f11d7ca1f52_Ali_Shahrokhi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:18:33'),
(121, '70246', 'جناب آقای', 'علی صوفی', 8, 59, 'f6d9bf6adee11968b8364127e0c522e5_Ali_Sufi.jpeg', NULL, 0, 1, NULL, 0, '1398/10/09 16:18:45'),
(122, '98406', 'جناب آقای', 'علیرضا زاکانی', 19, 132, 'b3e39f9dbe13dc44e76de93295b3233c_Alireza_Zakani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:19:00'),
(123, '10892', 'سرکار خانم', 'فاطمه ذوالقدر', 8, 59, '6299002cc7f372c46e12d08a04267dff_Fateme_Zolghadr.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:19:20'),
(124, '55422', 'سرکار خانم', 'فاطمه سعیدی', 8, 59, '98eb8492e132d55a4c41c7423c1c44ed_Fateme_Saeidi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:19:31'),
(125, '30948', 'سرکار خانم', 'فریده اولاد قباد', 8, 59, 'a57c1731700b0e976df5061988d2ecf0_Faride_Oladghobad.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:19:44'),
(126, '50539', 'جناب آقای', 'قاسم میرزایی نکو', 8, 60, 'f720c85b58b92dbc7c80bb524fac5ada_Ghasem_Mirzaei_Neku.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:19:55'),
(127, '86467', 'جناب آقای', 'قدرت‌الله علیخانی', 18, 129, 'd2ec600c1cac884c8d70754a8d432334_Ghodratollah_Alikhani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:20:12'),
(128, '63717', 'جناب آقای', 'مجتبی ذوالنوری', 19, 132, '41c4aa99fcede772ff66cc6019a575b1_Mojtaba_Zonnuri.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:20:29'),
(129, '63193', 'جناب آقای', 'محمدعلی پورمختار', 30, 199, '88211c125e8f33645b9fd487683a7057_Mohammad_PurMokhtar.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:20:49'),
(130, '60855', 'جناب آقای', 'محمدباقر قالیباف', 8, 59, 'ad06a45f3cb7147d787a3739c5879efd________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:21:06'),
(131, '24054', 'جناب آقای', 'محمدجواد ابطحی', 8, 59, 'b5cfb644733087d63b2ac566ed262dd0_MohammadJavad_Abtahi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:21:23'),
(132, '61289', 'جناب آقای', 'محمدحسین رجبی دوانی', 8, 59, '2669637598e247d5bd211307ce0bfd64_MohammadHoseyn_RajabiDavani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:23:59'),
(133, '96668', 'جناب آقای', 'محمدحسین مقیمی', 8, 59, '22feea63df646434744689a5fa67805f_MohammadHoseyn_Moghimi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:24:09'),
(134, '25292', 'جناب آقای', 'محمدعلی افشانی', 8, 59, '45da222c00733abe4e780badba65f99c_Mohammadali_Afshani.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:24:20'),
(135, '90840', 'جناب آقای', 'مسعود زریبافان', 8, 59, '2e05ea9383bd422e9a865523e7733e96_Masud_Zaribafan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:24:32'),
(136, '11576', 'جناب آقای', 'موسی غضنفرآبادی', 21, 139, '1ae26a823bd5af29625ef4aa6fb2edc6_Musa_GhazanfarAbadi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:24:48'),
(137, '16061', 'جناب آقای', 'مهدی کوچک زاده', 8, 59, 'e4de10fd652bf7a4a774181f76b37c19___________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:25:58'),
(138, '64788', 'سرکار خانم', 'ناهید تاج الدین', 4, 36, '7c0d7783663eab5e1666890cd5f11b6b_Nahid_Tajeddin.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:26:19'),
(139, '59012', 'سرکار خانم', 'نیره اخوان', 4, 36, '968d998dd0f68195b234385e1c69b600_Nayyere_Akhavan.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:26:42'),
(140, '13015', 'جناب آقای', 'وحید یامین پور', 8, 59, '67988819bf43c8fd081d3007c04bd9a6___________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:26:58'),
(141, '21060', 'جناب آقای', 'احمد آریایی نژاد', 30, 204, '06aa629b5c8827327c96d8476609cbbe_Ahmad_AriyaeNezhad.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:27:31'),
(142, '75280', 'جناب آقای', 'احمدرضا دستغیب', 8, 59, 'ff8bc4bfeedcd062597a666ee58de1d0_AhmadReza_DastGheyb.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:28:13'),
(143, '15759', 'جناب آقای', 'جواد امام', 8, 59, '988c42cf0a537902032e596dbd625683_Javad_Emam.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:28:38'),
(144, '29044', 'جناب آقای', 'سید محمدمهدی پورفاطمی', 7, 56, '5eeb68646ed3159f1644ae2c8475c4f5_SeyedMohammadMahdi_PurFatemi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:28:59'),
(145, '86352', 'جناب آقای', 'سیروس پاک‌فطرت', 17, 209, '6de4e4f873c79fa911dcddf1feafecfc_Sirus_PakFetrat.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:30:00'),
(146, '87706', 'جناب آقای', 'مجید انصاری', 8, 59, '93f5ebe320ca6dea8af593bbb71251cf______________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:30:16'),
(147, '93268', 'جناب آقای', 'محمدرضا تابش', 31, 205, '0c92e60fb648f9b11b6fb09c5a0f50da_Mohammadreza_Tabesh.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:30:38'),
(148, '68101', 'جناب آقای', 'میثم پیله‌فروش', 18, 131, 'f113d665dba618fa5953910e7d95a208_Meysam_PileForush.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:30:53'),
(149, '51624', 'جناب آقای', 'ابراهیم اصغرزاده', 8, 59, 'af87848dcbbc73e05acbe90162fdd9ae_Ebrahim_Asgharzade.jpg', NULL, 0, 0, NULL, 0, '1398/10/09 16:31:06'),
(150, '88002', 'سرکار خانم', 'الهه راستگو', 8, 59, 'abbe3d5fa389d5eae3e2e4b4fe169e01______________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:31:17'),
(151, '18725', 'جناب آقای', 'امیرحسین قاضی زاده هاشمی', 11, 82, 'a228efa349f84b92f4962d4ad4d73a1e_Amirhoseyn_Ghazizade_Hashemi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:31:39'),
(152, '93622', 'جناب آقای', 'جواد کریمی قدوسی', 11, 82, 'f3c4c347c78425d2fd0dce863ac411cf_MohammadJavad_KarimiGhoddusi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:31:52'),
(153, '71564', 'جناب آقای', 'حمیدرضا حاجی بابایی', 30, 204, '5f7f9d8d040f748707570a68d015805c_____________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:32:06'),
(154, '17108', 'سرکار خانم', 'سکینه الماسی', 7, 54, 'b2220fc050f08f89bd815f9a65fbdc60_Sakine_Almasi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:32:29'),
(155, '14320', 'جناب آقای', 'سیدمجید حسینی', 11, 82, '3b9ed2732c2acb8e68ddc957279e90c7____________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:32:54'),
(156, '24046', 'جناب آقای', 'شمس‌الدین حسینی', 8, 59, '20e30c7e1a193424c29d8752dd0fce20_____________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:33:06'),
(157, '75860', 'جناب آقای', 'عبدالرضا مصری', 22, 151, 'e0c0382167f25fe24ee92435c0841b25__________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:33:23'),
(158, '40959', 'جناب آقای', 'علی نیکزاد', 3, 30, '4d9f4149b375602ec236f3e4744036a2____________________.jpg', NULL, 0, 1, NULL, 1010000, '1398/10/09 16:33:39'),
(159, '77239', 'جناب آقای', 'فرشاد مهدی‌پور', 8, 59, 'b07833b5d868444691c3e15fd1496f92___________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:33:51'),
(160, '92809', 'جناب آقای', 'قاسم روانبخش', 31, 208, '88d8d23e51a4fde2e6b83d8414bbad2c_Ghasem_Ravanbakhsh.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:34:09'),
(161, '39198', 'جناب آقای', 'محمدمهدی زاهدی', 21, 145, '7769d1d56cbc91551eedea06b4b50046_MohammadMahdi_Zahedi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:35:19'),
(162, '10494', 'جناب آقای', 'محمدرضا پورابراهیمی', 21, 145, 'e5ed2bb25a0e3a8e847550153011a124_Mohammadreza_PurEbrahimi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:35:39'),
(163, '69669', 'جناب آقای', 'مسعود پزشکیان', 1, 10, 'be38802322e0f84d93f2a5260b5dd364__________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:35:56'),
(164, '38350', 'جناب آقای', 'منصور حقیقت پور', 3, 30, '59f7b29b505928ed31b0571be6f4f118_Mansur_Haghighatpur.jpg', NULL, 2, 1, NULL, 0, '1398/10/09 16:36:20'),
(165, '71268', 'جناب آقای', 'محمدصادق شهبازی', 8, 59, '9172f41767f978f6b1279404936aa17d______________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:36:30'),
(166, '91650', 'جناب آقای', 'نصرالله پژمانفر', 11, 82, '7ea8fe931154dc99de0eb34ccfd0f517______________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:37:02'),
(167, '78799', 'جناب آقای', 'میثم مهدیار', 4, 45, '3ae65be05d482945f56ea3bbe821e61b______________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:37:17'),
(168, '94105', 'جناب آقای', 'محمدرضا اصنافی', 8, 59, '43814e53e2decd8eb369162e821c2d38____________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:37:36'),
(169, '56755', 'جناب آقای', 'ابراهیم عزیزی', 22, 151, '1ecc370eae9ab56e651459b77420ead7__________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:37:51'),
(170, '45364', 'جناب آقای', 'محمد رشیدی', 22, 151, 'ad7f7ac798dee9e1aa660ecfc10ca5eb____________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:38:04'),
(171, '56815', 'جناب آقای', 'سیدسعید حیدری طیب', 22, 151, '20098bce27d286fc50e5b1235a9fe736_________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:38:33'),
(172, '88513', 'سرکار خانم', 'شهیندخت مولاوردی', 8, 59, '8c0d7ed235518ba74c6caf177f500585_Shahindokht_Molaverdi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:38:55'),
(173, '15347', 'جناب آقای', 'مهدی وکیل پور', 8, 59, 'e27f3ee9907fd33ddc4ea0b54186ec26_Mahdi_Vakilpur.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:39:49'),
(174, '37575', 'جناب آقای', 'احمد صفری', 22, 151, '146915058731e359c8fca55dc9333461__________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:40:05'),
(175, '90906', 'جناب آقای', 'امیر تفرشی', 8, 59, '202766299d8fcfcfb0d477e5bec1b30f_Amir_Tafreshi.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:40:22'),
(176, '75011', 'جناب آقای', 'وحید اشتری', 8, 59, '8cb8e69c6b7435707667130f9b3a3a25____________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/09 16:40:35'),
(177, '71113', 'جناب آقای', 'مهدی طغیانی', 4, 36, '289680a06cb5d9fad15461e092d6edb3_Mahdi_Toghyani.jpg', NULL, 0, 1, NULL, 0, '1398/10/10 21:40:08'),
(178, '75962', 'جناب آقای', 'عباس پاپی‌زاده', 13, 94, 'c66f35b750e75b306f765f4b897d340f__________________________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/10 21:45:29'),
(179, '98921', 'جناب آقای', 'سیداحمد غفاری قره‌باغی', 2, 20, '946f80a1c9da37f8f259050735ee6ea2__________________________________.jpg', NULL, 0, 0, NULL, 0, '1398/10/10 23:46:35'),
(180, '39032', 'جناب آقای', 'محمدرضا امیرحسن‌‌خانی', 10, 71, 'befbb584eb742ea1796c1cd25b0f3143________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/10 22:17:57'),
(181, '55510', 'جناب آقای', 'محمدرضا امیرحسن‌خانی', 10, 71, 'c18876e298feea6ce301397d74efed09________________________.jpg', NULL, 0, 1, NULL, 0, '1398/10/10 22:19:36'),
(182, '77563', 'جناب آقای', 'محمدرضا اسماعیلی', 8, 58, '5381bc453ea4077104345549862e3610_1.jpg', NULL, 2, 1, NULL, 0, '1398/10/17 09:42:51'),
(184, '77714', 'جناب آقای', 'نعغل', 4, 35, '6ea3ab0d46b91c1448d780e3f75ce045_1.jpg', NULL, 1, 1, NULL, 0, '1398/10/17 14:56:11'),
(185, '14935', 'جناب آقای', 'kuyg', 2, 20, 'edfdbdaafcbc2db4a284c93f3e0cf07a_1.jpg', 'yyyyyyyy', 2, 1, NULL, 0, '1398/10/17 14:56:54'),
(186, '14097', 'جناب آقای', 'liugilug', 4, 35, '43cfe191e915715becf91e28f14eeb6c_1.jpg', '', 0, 1, NULL, 0, '1398/10/17 14:59:55'),
(187, '32461', 'جناب آقای', 'خهکت', 4, 35, '0e177ce4b982ee92d707f90ba090351d_1.jpg', '', 0, 1, NULL, 0, '1398/10/17 15:36:24'),
(188, '37737', 'جناب آقای', 'محمدرضا اسماعیلی', 8, 62, 'd6fbbee6f23b2375434c92248a22fa68_1.jpg', '', 0, 1, 244, 2200000, '1398/11/16 13:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_translation`
--

CREATE TABLE `candidate_translation` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` bigint(20) NOT NULL,
  `CandidateTranslationType` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateTranslationTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateTranslationPublisher` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateTranslationMonth` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CandidateTranslationYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_translation`
--

INSERT INTO `candidate_translation` (`RowId`, `CandidateId`, `CandidateTranslationType`, `CandidateTranslationTitle`, `CandidateTranslationPublisher`, `CandidateTranslationMonth`, `CandidateTranslationYear`) VALUES
(10, 148, 'Article', 'عنوان ترجمه شماره 2', 'ناشر ترجمه 2', 'Mehr', 1395),
(11, 148, 'Book', 'عنوان ترجمه شماره 1', 'ناشر ترجمه 1', 'Khordad', 1394),
(12, 198, 'Article', 'خودم', 'خودم', 'Farvardin', 1398),
(14, 214, 'Article', 'تست', 'تست', 'Farvardin', 1396),
(16, 219, 'Article', 'باباب', 'ابلابلا', 'Aban', 1381),
(17, 219, 'Book', 'بابلا', 'ابلابلا', 'Shahrivar', 1384),
(18, 221, 'Article', 'منت', 'نمت', 'Farvardin', 1398),
(19, 178, 'Book', 'معیارهای یادگیری اولیه کودک ', 'صبح سحر ', 'Farvardin', 1395),
(20, 225, 'Book', 'استاندارد PMBOK  نسخه ششم', 'دیباگران', 'Esfand', 1397),
(21, 304, 'Book', 'تست', 'تست', 'Farvardin', 1398),
(22, 302, 'Book', 'سیستمهای کاربردی', 'مرکز پژوهشی تمدن اسلامی وآذرفر', 'Shahrivar', 1397),
(28, 314, 'Book', 'خدا در کار', 'جهاد دانشگاهی', 'Esfand', 1398),
(29, 314, 'Book', 'کارآفرینان کارآفرین متولد می شوند،رهبران رهبر', 'چهاد دانشگاهی', 'Esfand', 1398),
(30, 314, 'Book', 'رهبری فروتنانه: قدرت روابط ، باز بودن و اعتماد', 'جهاد دانشگاهی', 'Esfand', 1398),
(31, 314, 'Book', 'دولت الکترونیک مفاهیم و کاربردها', 'دانشگاه آزاد ', 'Ordibehsht', 1390),
(32, 388, 'Book', 'بلابلا', 'بابلا', 'Mordad', 1325),
(42, 389, 'Article', '', '', 'Farvardin', 1398),
(43, 389, 'Article', 'مدیریت دانش ', 'دانشگاه پیام نور ', 'Shahrivar', 1394),
(44, 389, 'Article', 'تکنیک های شبیه سازی کامپیوتری ', 'جها د دانشگاهی ', 'Farvardin', 1396),
(45, 389, 'Book', 'هوش مصنوعی ', 'جهاد دانشگاهی ', 'Aban', 1397),
(46, 395, 'Book', 'بلابلابل', 'ابلابلاب', 'Tir', 1307),
(49, 244, 'Article', 'دستگاه های الکتریکی', 'منطیق', 'Farvardin', 1398);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_veteran`
--

CREATE TABLE `candidate_veteran` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `IsActive` int(11) NOT NULL,
  `CandidateVeteranFamilyTitle` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(Self/Wife/Parents/Children/SisterBrother)',
  `CandidateVeteranType` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(Veteran/Liberation/Martyr)',
  `CandidateVeteranPercent` int(11) NOT NULL DEFAULT '0',
  `CandidateVeteranMonth` int(11) NOT NULL DEFAULT '0',
  `CandidateVeteranYear` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_veteran`
--

INSERT INTO `candidate_veteran` (`RowId`, `CandidateId`, `IsActive`, `CandidateVeteranFamilyTitle`, `CandidateVeteranType`, `CandidateVeteranPercent`, `CandidateVeteranMonth`, `CandidateVeteranYear`) VALUES
(71, 148, 1, 'Self', 'Liberation', 0, 1, 5),
(72, 148, 0, 'Wife', '', 0, 0, 0),
(73, 148, 1, 'Children', 'Veteran', 40, 0, 0),
(74, 148, 0, 'Parents', '', 0, 0, 0),
(75, 148, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(76, 189, 0, 'Self', '', 0, 0, 0),
(77, 189, 0, 'Wife', '', 0, 0, 0),
(78, 189, 0, 'Children', '', 0, 0, 0),
(79, 189, 0, 'Parents', '', 0, 0, 0),
(80, 189, 0, 'SisterBrother', '', 0, 0, 0),
(86, 195, 0, 'Self', '', 0, 0, 0),
(87, 195, 0, 'Wife', '', 0, 0, 0),
(88, 195, 0, 'Children', '', 0, 0, 0),
(89, 195, 1, 'Parents', 'Veteran', 0, 0, 0),
(90, 195, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(101, 196, 0, 'Self', '', 0, 0, 0),
(102, 196, 0, 'Wife', '', 0, 0, 0),
(103, 196, 0, 'Children', '', 0, 0, 0),
(104, 196, 0, 'Parents', '', 0, 0, 0),
(105, 196, 0, 'SisterBrother', '', 0, 0, 0),
(106, 198, 1, 'Self', 'Veteran', 45, 0, 0),
(107, 198, 1, 'Wife', 'Veteran', 40, 0, 0),
(108, 198, 0, 'Children', '', 0, 0, 0),
(109, 198, 0, 'Parents', '', 0, 0, 0),
(110, 198, 0, 'SisterBrother', '', 0, 0, 0),
(111, 199, 1, 'Self', 'Veteran', 45, 0, 0),
(112, 199, 0, 'Wife', '', 0, 0, 0),
(113, 199, 0, 'Children', '', 0, 0, 0),
(114, 199, 0, 'Parents', '', 0, 0, 0),
(115, 199, 0, 'SisterBrother', '', 0, 0, 0),
(126, 200, 0, 'Self', '', 0, 0, 0),
(127, 200, 0, 'Wife', '', 0, 0, 0),
(128, 200, 0, 'Children', '', 0, 0, 0),
(129, 200, 0, 'Parents', '', 0, 0, 0),
(130, 200, 0, 'SisterBrother', '', 0, 0, 0),
(131, 174, 0, 'Self', '', 0, 0, 0),
(132, 174, 0, 'Wife', '', 0, 0, 0),
(133, 174, 0, 'Children', '', 0, 0, 0),
(134, 174, 0, 'Parents', '', 0, 0, 0),
(135, 174, 0, 'SisterBrother', '', 0, 0, 0),
(136, 202, 0, 'Self', '', 0, 0, 0),
(137, 202, 0, 'Wife', '', 0, 0, 0),
(138, 202, 0, 'Children', '', 0, 0, 0),
(139, 202, 0, 'Parents', '', 0, 0, 0),
(140, 202, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(151, 203, 0, 'Self', '', 0, 0, 0),
(152, 203, 0, 'Wife', '', 0, 0, 0),
(153, 203, 0, 'Children', '', 0, 0, 0),
(154, 203, 0, 'Parents', 'Veteran', 25, 0, 0),
(155, 203, 0, 'SisterBrother', '', 0, 0, 0),
(161, 207, 0, 'Self', '', 0, 0, 0),
(162, 207, 0, 'Wife', '', 0, 0, 0),
(163, 207, 0, 'Children', '', 0, 0, 0),
(164, 207, 0, 'Parents', '', 0, 0, 0),
(165, 207, 0, 'SisterBrother', '', 0, 0, 0),
(166, 208, 1, 'Self', 'Veteran', 45, 0, 0),
(167, 208, 1, 'Wife', 'Liberation', 0, 12, 2),
(168, 208, 1, 'Children', 'Martyr', 0, 0, 0),
(169, 208, 1, 'Parents', 'Liberation', 45, 0, 0),
(170, 208, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(186, 209, 0, 'Self', '', 0, 0, 0),
(187, 209, 0, 'Wife', '', 0, 0, 0),
(188, 209, 0, 'Children', '', 0, 0, 0),
(189, 209, 1, 'Parents', 'Veteran', 0, 0, 0),
(190, 209, 0, 'SisterBrother', '', 0, 0, 0),
(191, 211, 0, 'Self', '', 0, 0, 0),
(192, 211, 0, 'Wife', '', 0, 0, 0),
(193, 211, 0, 'Children', '', 0, 0, 0),
(194, 211, 0, 'Parents', '', 0, 0, 0),
(195, 211, 0, 'SisterBrother', '', 0, 0, 0),
(196, 164, 0, 'Self', '', 0, 0, 0),
(197, 164, 0, 'Wife', '', 0, 0, 0),
(198, 164, 0, 'Children', '', 0, 0, 0),
(199, 164, 0, 'Parents', '', 0, 0, 0),
(200, 164, 0, 'SisterBrother', '', 0, 0, 0),
(216, 183, 0, 'Self', '', 0, 0, 0),
(217, 183, 0, 'Wife', '', 0, 0, 0),
(218, 183, 0, 'Children', '', 0, 0, 0),
(219, 183, 0, 'Parents', '', 0, 0, 0),
(220, 183, 0, 'SisterBrother', '', 0, 0, 0),
(226, 214, 1, 'Self', 'Liberation', 0, 5, 0),
(227, 214, 1, 'Wife', 'Veteran', 45, 0, 0),
(228, 214, 0, 'Children', '', 0, 0, 0),
(229, 214, 0, 'Parents', '', 0, 0, 0),
(230, 214, 0, 'SisterBrother', '', 0, 0, 0),
(231, 219, 1, 'Self', 'Veteran', 50, 0, 0),
(232, 219, 1, 'Wife', 'Martyr', 0, 0, 0),
(233, 219, 1, 'Children', 'Liberation', 0, 10, 1),
(234, 219, 1, 'Parents', 'Martyr', 0, 0, 0),
(235, 219, 1, 'SisterBrother', 'Liberation', 0, 10, 2),
(236, 221, 1, 'Self', 'Liberation', 0, 1, 2),
(237, 221, 0, 'Wife', '', 0, 0, 0),
(238, 221, 0, 'Children', '', 0, 0, 0),
(239, 221, 0, 'Parents', '', 0, 0, 0),
(240, 221, 0, 'SisterBrother', '', 0, 0, 0),
(261, 237, 0, 'Self', '', 0, 0, 0),
(262, 237, 0, 'Wife', '', 0, 0, 0),
(263, 237, 0, 'Children', '', 0, 0, 0),
(264, 237, 0, 'Parents', '', 0, 0, 0),
(265, 237, 0, 'SisterBrother', '', 0, 0, 0),
(266, 238, 0, 'Self', '', 0, 0, 0),
(267, 238, 0, 'Wife', '', 0, 0, 0),
(268, 238, 0, 'Children', '', 0, 0, 0),
(269, 238, 0, 'Parents', '', 0, 0, 0),
(270, 238, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(281, 213, 0, 'Self', '', 0, 0, 0),
(282, 213, 0, 'Wife', '', 0, 0, 0),
(283, 213, 1, 'Children', 'Martyr', 0, 0, 0),
(284, 213, 0, 'Parents', '', 0, 0, 0),
(285, 213, 0, 'SisterBrother', '', 0, 0, 0),
(301, 239, 0, 'Self', '', 0, 0, 0),
(302, 239, 0, 'Wife', '', 0, 0, 0),
(303, 239, 1, 'Children', 'Martyr', 0, 0, 0),
(304, 239, 1, 'Parents', 'Martyr', 0, 0, 0),
(305, 239, 1, 'SisterBrother', '', 0, 0, 0),
(321, 241, 0, 'Self', '', 0, 0, 0),
(322, 241, 0, 'Wife', 'Martyr', 0, 0, 0),
(323, 241, 0, 'Children', '', 0, 0, 0),
(324, 241, 0, 'Parents', '', 0, 0, 0),
(325, 241, 0, 'SisterBrother', '', 0, 0, 0),
(326, 178, 0, 'Self', '', 0, 0, 0),
(327, 178, 0, 'Wife', '', 0, 0, 0),
(328, 178, 0, 'Children', '', 0, 0, 0),
(329, 178, 0, 'Parents', '', 0, 0, 0),
(330, 178, 0, 'SisterBrother', '', 0, 0, 0),
(336, 220, 0, 'Self', '', 0, 0, 0),
(337, 220, 0, 'Wife', '', 0, 0, 0),
(338, 220, 0, 'Children', '', 0, 0, 0),
(339, 220, 1, 'Parents', '', 0, 0, 0),
(340, 220, 1, 'SisterBrother', '', 0, 0, 0),
(381, 245, 1, 'Self', 'Veteran', 80, 0, 0),
(382, 245, 1, 'Wife', 'Martyr', 0, 0, 0),
(383, 245, 0, 'Children', '', 0, 0, 0),
(384, 245, 0, 'Parents', '', 0, 0, 0),
(385, 245, 0, 'SisterBrother', '', 0, 0, 0),
(401, 251, 0, 'Self', '', 0, 0, 0),
(402, 251, 0, 'Wife', '', 0, 0, 0),
(403, 251, 0, 'Children', '', 0, 0, 0),
(404, 251, 0, 'Parents', '', 0, 0, 0),
(405, 251, 0, 'SisterBrother', '', 0, 0, 0),
(406, 230, 0, 'Self', '', 0, 0, 0),
(407, 230, 0, 'Wife', '', 0, 0, 0),
(408, 230, 0, 'Children', '', 0, 0, 0),
(409, 230, 0, 'Parents', '', 0, 0, 0),
(410, 230, 0, 'SisterBrother', '', 0, 0, 0),
(411, 256, 0, 'Self', '', 0, 0, 0),
(412, 256, 0, 'Wife', '', 0, 0, 0),
(413, 256, 0, 'Children', '', 0, 0, 0),
(414, 256, 0, 'Parents', '', 0, 0, 0),
(415, 256, 0, 'SisterBrother', '', 0, 0, 0),
(421, 255, 0, 'Self', '', 0, 0, 0),
(422, 255, 0, 'Wife', '', 0, 0, 0),
(423, 255, 0, 'Children', '', 0, 0, 0),
(424, 255, 0, 'Parents', '', 0, 0, 0),
(425, 255, 0, 'SisterBrother', '', 0, 0, 0),
(451, 259, 0, 'Self', '', 0, 0, 0),
(452, 259, 0, 'Wife', '', 0, 0, 0),
(453, 259, 0, 'Children', '', 0, 0, 0),
(454, 259, 1, 'Parents', '', 0, 0, 0),
(455, 259, 0, 'SisterBrother', '', 0, 0, 0),
(466, 261, 0, 'Self', '', 0, 0, 0),
(467, 261, 0, 'Wife', '', 0, 0, 0),
(468, 261, 0, 'Children', '', 0, 0, 0),
(469, 261, 0, 'Parents', '', 0, 0, 0),
(470, 261, 0, 'SisterBrother', '', 0, 0, 0),
(476, 262, 0, 'Self', '', 0, 0, 0),
(477, 262, 0, 'Wife', '', 0, 0, 0),
(478, 262, 0, 'Children', '', 0, 0, 0),
(479, 262, 1, 'Parents', 'Veteran', 0, 0, 0),
(480, 262, 0, 'SisterBrother', '', 0, 0, 0),
(491, 266, 0, 'Self', '', 0, 0, 0),
(492, 266, 0, 'Wife', '', 0, 0, 0),
(493, 266, 0, 'Children', '', 0, 0, 0),
(494, 266, 0, 'Parents', '', 0, 0, 0),
(495, 266, 0, 'SisterBrother', '', 0, 0, 0),
(496, 267, 0, 'Self', '', 0, 0, 0),
(497, 267, 0, 'Wife', '', 0, 0, 0),
(498, 267, 0, 'Children', '', 0, 0, 0),
(499, 267, 1, 'Parents', 'Martyr', 0, 0, 0),
(500, 267, 0, 'SisterBrother', '', 0, 0, 0),
(501, 258, 0, 'Self', '', 0, 0, 0),
(502, 258, 0, 'Wife', '', 0, 0, 0),
(503, 258, 0, 'Children', '', 0, 0, 0),
(504, 258, 1, 'Parents', 'Veteran', 45, 0, 0),
(505, 258, 0, 'SisterBrother', '', 0, 0, 0),
(511, 165, 0, 'Self', '', 0, 0, 0),
(512, 165, 0, 'Wife', '', 0, 0, 0),
(513, 165, 1, 'Children', 'Martyr', 0, 0, 0),
(514, 165, 0, 'Parents', '', 0, 0, 0),
(515, 165, 0, 'SisterBrother', '', 0, 0, 0),
(516, 273, 0, 'Self', '', 0, 0, 0),
(517, 273, 0, 'Wife', '', 0, 0, 0),
(518, 273, 0, 'Children', '', 0, 0, 0),
(519, 273, 0, 'Parents', '', 0, 0, 0),
(520, 273, 0, 'SisterBrother', '', 0, 0, 0),
(551, 276, 0, 'Self', '', 0, 0, 0),
(552, 276, 0, 'Wife', '', 0, 0, 0),
(553, 276, 0, 'Children', '', 0, 0, 0),
(554, 276, 0, 'Parents', '', 0, 0, 0),
(555, 276, 1, 'SisterBrother', 'Veteran', 5, 0, 0),
(621, 136, 0, 'Self', '', 0, 0, 0),
(622, 136, 0, 'Wife', '', 0, 0, 0),
(623, 136, 0, 'Children', '', 0, 0, 0),
(624, 136, 0, 'Parents', '', 0, 0, 0),
(625, 136, 0, 'SisterBrother', '', 0, 0, 0),
(656, 282, 0, 'Self', '', 0, 0, 0),
(657, 282, 0, 'Wife', '', 0, 0, 0),
(658, 282, 0, 'Children', '', 0, 0, 0),
(659, 282, 0, 'Parents', '', 0, 0, 0),
(660, 282, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(666, 225, 0, 'Self', '', 0, 0, 0),
(667, 225, 0, 'Wife', '', 0, 0, 0),
(668, 225, 0, 'Children', '', 0, 0, 0),
(669, 225, 0, 'Parents', '', 0, 0, 0),
(670, 225, 0, 'SisterBrother', '', 0, 0, 0),
(671, 289, 0, 'Self', '', 0, 0, 0),
(672, 289, 0, 'Wife', '', 0, 0, 0),
(673, 289, 0, 'Children', '', 0, 0, 0),
(674, 289, 0, 'Parents', '', 0, 0, 0),
(675, 289, 0, 'SisterBrother', '', 0, 0, 0),
(676, 291, 0, 'Self', '', 0, 0, 0),
(677, 291, 0, 'Wife', '', 0, 0, 0),
(678, 291, 0, 'Children', '', 0, 0, 0),
(679, 291, 0, 'Parents', '', 0, 0, 0),
(680, 291, 0, 'SisterBrother', '', 0, 0, 0),
(686, 224, 0, 'Self', '', 0, 0, 0),
(687, 224, 0, 'Wife', '', 0, 0, 0),
(688, 224, 0, 'Children', '', 0, 0, 0),
(689, 224, 0, 'Parents', '', 0, 0, 0),
(690, 224, 0, 'SisterBrother', '', 0, 0, 0),
(691, 294, 0, 'Self', '', 0, 0, 0),
(692, 294, 0, 'Wife', '', 0, 0, 0),
(693, 294, 0, 'Children', '', 0, 0, 0),
(694, 294, 0, 'Parents', '', 0, 0, 0),
(695, 294, 0, 'SisterBrother', '', 0, 0, 0),
(696, 275, 0, 'Self', '', 0, 0, 0),
(697, 275, 0, 'Wife', '', 0, 0, 0),
(698, 275, 0, 'Children', '', 0, 0, 0),
(699, 275, 0, 'Parents', '', 0, 0, 0),
(700, 275, 0, 'SisterBrother', '', 0, 0, 0),
(701, 295, 0, 'Self', '', 0, 0, 0),
(702, 295, 0, 'Wife', '', 0, 0, 0),
(703, 295, 0, 'Children', '', 0, 0, 0),
(704, 295, 0, 'Parents', '', 0, 0, 0),
(705, 295, 0, 'SisterBrother', '', 0, 0, 0),
(711, 278, 0, 'Self', '', 0, 0, 0),
(712, 278, 0, 'Wife', '', 0, 0, 0),
(713, 278, 0, 'Children', '', 0, 0, 0),
(714, 278, 0, 'Parents', '', 0, 0, 0),
(715, 278, 0, 'SisterBrother', '', 0, 0, 0),
(716, 227, 0, 'Self', '', 0, 0, 0),
(717, 227, 0, 'Wife', '', 0, 0, 0),
(718, 227, 0, 'Children', '', 0, 0, 0),
(719, 227, 0, 'Parents', '', 0, 0, 0),
(720, 227, 0, 'SisterBrother', '', 0, 0, 0),
(726, 299, 0, 'Self', '', 0, 0, 0),
(727, 299, 0, 'Wife', '', 0, 0, 0),
(728, 299, 0, 'Children', '', 0, 0, 0),
(729, 299, 0, 'Parents', '', 0, 0, 0),
(730, 299, 0, 'SisterBrother', '', 0, 0, 0),
(736, 300, 1, 'Self', 'Veteran', 10, 0, 0),
(737, 300, 0, 'Wife', '', 0, 0, 0),
(738, 300, 0, 'Children', '', 0, 0, 0),
(739, 300, 0, 'Parents', '', 0, 0, 0),
(740, 300, 0, 'SisterBrother', '', 0, 0, 0),
(751, 301, 0, 'Self', '', 0, 0, 0),
(752, 301, 0, 'Wife', '', 0, 0, 0),
(753, 301, 0, 'Children', '', 0, 0, 0),
(754, 301, 0, 'Parents', '', 0, 0, 0),
(755, 301, 0, 'SisterBrother', '', 0, 0, 0),
(756, 303, 0, 'Self', '', 0, 0, 0),
(757, 303, 0, 'Wife', '', 0, 0, 0),
(758, 303, 0, 'Children', '', 0, 0, 0),
(759, 303, 0, 'Parents', '', 0, 0, 0),
(760, 303, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(766, 271, 0, 'Self', '', 0, 0, 0),
(767, 271, 0, 'Wife', '', 0, 0, 0),
(768, 271, 0, 'Children', '', 0, 0, 0),
(769, 271, 0, 'Parents', '', 0, 0, 0),
(770, 271, 0, 'SisterBrother', '', 0, 0, 0),
(781, 305, 0, 'Self', '', 0, 0, 0),
(782, 305, 0, 'Wife', '', 0, 0, 0),
(783, 305, 1, 'Children', 'Martyr', 0, 0, 0),
(784, 305, 0, 'Parents', '', 0, 0, 0),
(785, 305, 0, 'SisterBrother', '', 0, 0, 0),
(786, 317, 0, 'Self', '', 0, 0, 0),
(787, 317, 0, 'Wife', '', 0, 0, 0),
(788, 317, 0, 'Children', '', 0, 0, 0),
(789, 317, 0, 'Parents', '', 0, 0, 0),
(790, 317, 1, 'SisterBrother', 'Veteran', 30, 0, 0),
(791, 320, 0, 'Self', '', 0, 0, 0),
(792, 320, 0, 'Wife', '', 0, 0, 0),
(793, 320, 0, 'Children', '', 0, 0, 0),
(794, 320, 0, 'Parents', '', 0, 0, 0),
(795, 320, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(796, 321, 0, 'Self', '', 0, 0, 0),
(797, 321, 1, 'Wife', 'Veteran', 0, 0, 0),
(798, 321, 0, 'Children', '', 0, 0, 0),
(799, 321, 0, 'Parents', '', 0, 0, 0),
(800, 321, 0, 'SisterBrother', '', 0, 0, 0),
(801, 302, 1, 'Self', 'Veteran', 30, 0, 0),
(802, 302, 0, 'Wife', '', 0, 0, 0),
(803, 302, 0, 'Children', '', 0, 0, 0),
(804, 302, 0, 'Parents', '', 0, 0, 0),
(805, 302, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(816, 363, 0, 'Self', '', 0, 0, 0),
(817, 363, 0, 'Wife', '', 0, 0, 0),
(818, 363, 1, 'Children', 'Liberation', 0, 7, 0),
(819, 363, 0, 'Parents', '', 0, 0, 0),
(820, 363, 0, 'SisterBrother', '', 0, 0, 0),
(821, 339, 1, 'Self', '', 0, 0, 0),
(822, 339, 1, 'Wife', '', 0, 0, 0),
(823, 339, 1, 'Children', '', 0, 0, 0),
(824, 339, 1, 'Parents', '', 0, 0, 0),
(825, 339, 1, 'SisterBrother', '', 0, 0, 0),
(826, 388, 1, 'Self', 'Liberation', 0, 2, 3),
(827, 388, 1, 'Wife', 'Veteran', 20, 0, 0),
(828, 388, 1, 'Children', 'Martyr', 0, 0, 0),
(829, 388, 1, 'Parents', '', 0, 0, 0),
(830, 388, 1, 'SisterBrother', 'Veteran', 50, 0, 0),
(836, 389, 0, 'Self', '', 0, 0, 0),
(837, 389, 0, 'Wife', '', 0, 0, 0),
(838, 389, 0, 'Children', '', 0, 0, 0),
(839, 389, 0, 'Parents', '', 0, 0, 0),
(840, 389, 0, 'SisterBrother', '', 0, 0, 0),
(841, 395, 1, 'Self', 'Veteran', 50, 0, 0),
(842, 395, 0, 'Wife', '', 0, 0, 0),
(843, 395, 0, 'Children', '', 0, 0, 0),
(844, 395, 0, 'Parents', '', 0, 0, 0),
(845, 395, 1, 'SisterBrother', 'Martyr', 0, 0, 0),
(866, 244, 0, 'Self', '', 0, 0, 0),
(867, 244, 1, 'Wife', 'Veteran', 50, 0, 0),
(868, 244, 0, 'Children', '', 0, 0, 0),
(869, 244, 1, 'Parents', 'Martyr', 0, 0, 0),
(870, 244, 0, 'SisterBrother', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_wordpress_accounts`
--

CREATE TABLE `candidate_wordpress_accounts` (
  `RowId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CandidateUserName` varchar(80) NOT NULL,
  `CandidatePassword` varchar(80) NOT NULL,
  `CreateDateTime` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityId` bigint(20) NOT NULL,
  `CityStateId` bigint(20) NOT NULL COMMENT 'from table state',
  `CityName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityId`, `CityStateId`, `CityName`) VALUES
(444, 1, 'اهر'),
(445, 1, 'هریس'),
(446, 1, 'بستان آباد'),
(447, 1, 'بناب'),
(448, 1, 'تبریز'),
(449, 1, 'آذرشهر'),
(450, 1, 'اسکو'),
(451, 1, 'سراب'),
(452, 1, 'شبستر'),
(453, 1, 'کلیبر'),
(456, 1, 'مراغه'),
(457, 1, 'عجب شیر'),
(458, 1, 'مرند'),
(459, 1, 'جلفا'),
(460, 1, 'ملکان'),
(461, 1, 'میانه'),
(462, 1, 'هشترود'),
(463, 1, 'چارااویماق'),
(464, 1, 'ورزقان'),
(465, 2, 'ارومیه'),
(466, 2, 'بوکان'),
(467, 2, 'پیرانشهر'),
(468, 2, 'سردشت'),
(469, 2, 'خوی'),
(471, 2, 'سلماس'),
(472, 2, 'ماکو'),
(473, 2, 'چالدران'),
(476, 2, 'مهاباد'),
(477, 2, 'میاندوآب'),
(478, 2, 'شاهین دژ'),
(479, 2, 'تکاپ'),
(480, 2, 'نقده'),
(481, 2, 'اشنویه'),
(482, 3, 'اردبیل'),
(483, 3, 'نمین'),
(484, 3, 'نیر'),
(485, 3, 'سرعین'),
(486, 3, 'پارس آباد'),
(487, 3, 'بیله سوار'),
(488, 3, 'خلخال'),
(489, 3, 'کوثر'),
(490, 3, 'گرمی'),
(491, 3, 'مشگین دشت'),
(492, 4, 'اردستان'),
(493, 4, 'شاهین شهر'),
(494, 4, 'میمه'),
(495, 4, 'بربخوار'),
(496, 4, 'خمینی شهر'),
(497, 4, 'سمیرم'),
(498, 4, 'شهرضا'),
(501, 4, 'فریدن'),
(502, 4, 'چادگان'),
(503, 4, 'فریدونشهر'),
(506, 4, 'فلاورجان'),
(507, 4, 'کاشان'),
(508, 4, 'آران و بیدگل'),
(509, 4, 'گلپایگان'),
(510, 4, 'خوانسار'),
(511, 4, 'لنجان'),
(512, 4, 'مبارکه'),
(513, 4, 'نائین'),
(516, 4, 'نجف آباد'),
(517, 4, 'تیران'),
(518, 4, 'کرون'),
(519, 4, 'نطنز'),
(521, 5, 'ساوجبلاغ'),
(522, 5, 'نظر آباد'),
(523, 5, 'طالقان'),
(524, 5, 'کرج'),
(525, 5, 'اشتهارد'),
(526, 5, 'فردیس'),
(527, 6, 'ایلام'),
(528, 6, 'ایوان'),
(529, 6, 'چرداول'),
(530, 6, 'مهران'),
(532, 6, 'شیروان'),
(533, 6, 'دهلران'),
(534, 6, 'دره شهر'),
(535, 6, 'آبدانان'),
(537, 7, 'بوشهر'),
(538, 7, 'گناوه'),
(539, 7, 'دیلم'),
(540, 7, 'دشتستان'),
(541, 7, 'دشتی'),
(542, 7, 'تنگستان'),
(543, 7, 'کنگان'),
(544, 7, 'دیر'),
(545, 7, 'جم'),
(547, 8, 'پاکدشت'),
(548, 8, 'تهران'),
(549, 8, 'ری'),
(550, 8, 'شمیرانات'),
(551, 8, 'اسلامشهر'),
(553, 8, 'دماوند'),
(554, 8, 'فیروزکوه'),
(555, 8, 'رباط کریم'),
(557, 8, 'شهریار'),
(560, 8, 'ورامین'),
(563, 9, 'اردل'),
(564, 9, 'فارسان'),
(565, 9, 'کوهرنگ'),
(568, 9, 'بروجن'),
(569, 9, 'شهرکرد'),
(572, 9, 'لردگان'),
(573, 10, 'بیرجند'),
(574, 10, 'درمیان'),
(576, 10, 'قائنات'),
(578, 10, 'نهبندان'),
(579, 10, 'سربیشه'),
(580, 10, 'فردوس'),
(581, 10, 'سرایان'),
(582, 10, 'طبس'),
(584, 11, 'تربت جام'),
(585, 11, 'تایباد'),
(588, 11, 'تربیت حیدریه'),
(589, 11, 'مه ولات'),
(591, 11, 'چناران'),
(593, 11, 'خواف'),
(594, 11, 'رشتخوار'),
(595, 11, 'درگز'),
(596, 11, 'سبزوار'),
(601, 11, 'فریمان'),
(602, 11, 'سرخس'),
(605, 11, 'قوچان'),
(606, 11, 'فاروج'),
(607, 11, 'کاشمر'),
(608, 11, 'خلیل آباد'),
(610, 11, 'گناباد'),
(612, 11, 'مشهد'),
(613, 11, 'کلات'),
(614, 11, 'نیشابور'),
(616, 12, 'اسفراین'),
(617, 12, 'بجنورد'),
(618, 12, 'مانه'),
(619, 12, 'سملقان'),
(620, 12, 'جاجرم'),
(624, 12, 'شیروان'),
(625, 13, 'آبادن'),
(626, 13, 'اندیمشک'),
(627, 13, 'اهواز'),
(631, 13, 'ایذه'),
(633, 13, 'بندر ماهشهر'),
(634, 13, 'امیدیه'),
(635, 13, 'هندیجان'),
(637, 13, 'بهبهان'),
(639, 13, 'خرمشهر'),
(640, 13, 'دزفول'),
(641, 13, 'دشت آزادگان'),
(643, 13, 'رامهرمز'),
(644, 13, 'رامشیر'),
(645, 13, 'شادگان'),
(646, 13, 'شوش'),
(647, 13, 'شوشتر'),
(648, 13, 'گتوند'),
(649, 13, 'مسجد سلیمان'),
(650, 13, 'لالی'),
(653, 14, 'ابهر'),
(654, 14, 'خرمدره'),
(656, 14, 'خدابنده'),
(657, 14, 'زنجان'),
(658, 14, 'طارم'),
(660, 14, 'ایجرود'),
(663, 15, 'دامغان'),
(664, 15, 'سمنان'),
(665, 15, 'مهدی شهر'),
(668, 15, 'شاهرود'),
(671, 15, 'گرمسار'),
(673, 16, 'ایرانشهر'),
(674, 16, 'سرباز'),
(675, 16, 'دلگان'),
(681, 16, 'چابهار'),
(683, 16, 'کنارک'),
(685, 16, 'خاش'),
(689, 16, 'زابل'),
(690, 16, 'زهک'),
(694, 16, 'زاهدان'),
(695, 16, 'سراوان'),
(699, 17, 'آباده'),
(700, 17, 'بوانات'),
(701, 17, 'خرم بید'),
(702, 17, 'نی ریز'),
(703, 17, 'استهبان'),
(704, 17, 'اقلید'),
(705, 17, 'جهرم'),
(706, 17, 'داراب'),
(707, 17, 'زرین دشت'),
(708, 17, 'سپیدان'),
(712, 17, 'شیراز'),
(713, 17, 'فسا'),
(714, 17, 'فیروزآباد'),
(715, 17, 'فراشبند'),
(716, 17, 'قیر'),
(717, 17, 'کارزین'),
(718, 17, 'کازرون'),
(719, 17, 'لارستان'),
(720, 17, 'خنج'),
(723, 17, 'مهر'),
(724, 17, 'مرودشت'),
(725, 17, 'پاسارگاد'),
(726, 17, 'ارسنجان'),
(727, 17, 'ممسنی'),
(729, 18, 'بوئین زهرا'),
(731, 18, 'تاکستان'),
(732, 18, 'قزوین'),
(733, 18, 'آبیک'),
(734, 18, 'البرز'),
(735, 19, 'قم'),
(736, 20, 'بیجار'),
(737, 20, 'سقز'),
(738, 20, 'بانه'),
(739, 20, 'سنندج'),
(740, 20, 'دیواندره'),
(741, 20, 'کامیاران'),
(742, 20, 'قروه'),
(744, 20, 'مریوان'),
(745, 20, 'سروآباد'),
(746, 21, 'بافت'),
(749, 21, 'بم'),
(753, 21, 'جیرفت'),
(754, 21, 'عنبرآباد'),
(755, 21, 'رفسنجان'),
(757, 21, 'زرند'),
(758, 21, 'کوهبنان'),
(759, 21, 'سیرجان'),
(760, 21, 'بردسیر'),
(761, 21, 'شهر بابک'),
(762, 21, 'کرمان'),
(763, 21, 'راور'),
(764, 21, 'کهنوج'),
(765, 21, 'منوجان'),
(766, 21, 'رودبار جنوب'),
(767, 21, 'قلعه گنج'),
(769, 22, 'اسلام آباد غرب'),
(770, 22, 'دالاهو'),
(771, 22, 'پاوه'),
(772, 22, 'جوانرود'),
(773, 22, 'ثلاث باباجانی'),
(774, 22, 'روانسر'),
(777, 22, 'سنقر'),
(778, 22, 'قصر شیرین'),
(779, 22, 'سرپل ذهاب'),
(780, 22, 'گیلان غرب'),
(781, 22, 'کرمانشاه'),
(782, 22, 'کنگاور'),
(783, 22, 'صحنه'),
(784, 22, 'هرسین'),
(785, 23, 'بویراحمد'),
(786, 23, 'دنا'),
(787, 23, 'کهگیلویه'),
(788, 23, 'بهمئی'),
(791, 23, 'گچساران'),
(793, 24, 'رامیان'),
(794, 24, 'آزادشهر'),
(795, 24, 'علی آباد'),
(796, 24, 'کردکوی'),
(797, 24, 'ترکمن'),
(798, 24, 'بندر گز'),
(800, 24, 'گرگان'),
(801, 24, 'آق قلا'),
(802, 24, 'گنبد کاووس'),
(803, 24, 'مینودشت'),
(804, 24, 'کلاله'),
(805, 24, 'مراوه تپه'),
(807, 25, 'آستارا'),
(808, 25, 'آستانه اشرفیه'),
(809, 25, 'بندر انزلی'),
(810, 25, 'رشت'),
(811, 25, 'رودبار'),
(812, 25, 'رودسر'),
(813, 25, 'املش'),
(814, 25, 'صومعه سرا'),
(815, 25, 'طوالش'),
(816, 25, 'رضوانشهر'),
(817, 25, 'ماسال'),
(818, 25, 'فومن'),
(819, 25, 'شفت'),
(820, 25, 'لاهیجان'),
(821, 25, 'سیاهکل'),
(822, 25, 'لنگرود'),
(823, 26, 'الیگودرز'),
(824, 26, 'بروجرد'),
(825, 26, 'پلدختر'),
(826, 26, 'خرم آباد'),
(828, 26, 'دلفان'),
(829, 26, 'سلسله'),
(830, 26, 'دورود'),
(831, 26, 'ازنا'),
(832, 26, 'کوهدشت'),
(834, 27, 'آمل'),
(835, 27, 'بابل'),
(836, 27, 'بابلسر'),
(838, 27, 'بهشهر'),
(839, 27, 'نکا'),
(840, 27, 'گلوگاه'),
(841, 27, 'تنکابن'),
(842, 27, 'رامسر'),
(844, 27, 'ساری'),
(846, 27, 'قائمشهر'),
(847, 27, 'سوادکوه'),
(848, 27, 'جویبار'),
(851, 27, 'نور'),
(852, 27, 'محمودآباد'),
(853, 27, 'نوشهر'),
(854, 27, 'چالوس'),
(856, 28, 'اراک'),
(857, 28, 'کمیجان'),
(859, 28, 'تفرش'),
(860, 28, 'آشتیان'),
(862, 28, 'خمین'),
(863, 28, 'ساوه'),
(864, 28, 'زرندیه'),
(865, 28, 'شازند'),
(866, 28, 'محلات'),
(867, 28, 'دلیجان'),
(868, 29, 'بندر عباس'),
(869, 29, 'قشم'),
(870, 29, 'ابوموسی'),
(871, 29, 'حاجی آباد'),
(872, 29, 'خمیر'),
(873, 29, 'بندر لنگه'),
(874, 29, 'بستک'),
(876, 29, 'میناب'),
(877, 29, 'رودان'),
(878, 29, 'جاسک'),
(881, 30, 'اسدآباد'),
(882, 30, 'بهار'),
(883, 30, 'کبودرآهنگ'),
(884, 30, 'تویسرکان'),
(885, 30, 'رزن'),
(886, 30, 'ملایر'),
(887, 30, 'نهاوند'),
(888, 30, 'همدان'),
(890, 31, 'اردکان'),
(891, 31, 'تفت'),
(892, 31, 'میبد'),
(893, 31, 'مهریز'),
(894, 31, 'بافق'),
(895, 31, 'ابرکوه'),
(896, 31, 'خاتم'),
(898, 31, 'یزد'),
(902, 4, 'اصفهان'),
(903, 17, 'سروستان'),
(904, 17, 'خرامه'),
(905, 17, 'کوار'),
(906, 32, 'اصفهان، یزد، خوزستان، فارس، کرمان، هرمزگان، سیستان و بلوچستان، لرستان، چهارمحال و بختیاری، بوشهر، کهگیلویه و بویراحمد'),
(907, 32, 'تهران، آذربایجان شرقی، آذربایجان غربی، اردبیل، ایلام، خراسان، زنجان، سمنان، قزوین، قم، کردستان، کرمانشاه، گلستان، گیلان، مازندران، مرکزی، همدان'),
(908, 32, 'زرتشتیان سراسر کشور'),
(909, 32, 'کلیمیان سراسر کشور'),
(910, 32, 'مسیحیان آشوری و کلدانی سراسر کشور');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `ContentId` bigint(20) NOT NULL,
  `ContentTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContentBrief` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContentDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContentImage` varchar(2048) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContentAttachment` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContentAuthor` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContentAuthorPhone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContentAuthorEmail` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContentCategoryId` bigint(20) NOT NULL,
  `ContentStatus` int(11) NOT NULL DEFAULT '0',
  `CreateDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_category`
--

CREATE TABLE `content_category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryId` int(11) NOT NULL,
  `ISO` varchar(4) NOT NULL,
  `FaName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryId`, `ISO`, `FaName`) VALUES
(1, 'AFG', 'افغانستان'),
(2, 'ALA', 'جزایر آلند'),
(3, 'ALB', 'آلبانی'),
(4, 'DZA', 'الجزایر'),
(5, 'ASM', 'ساموای آمریکا'),
(6, 'AND', 'آندورا'),
(7, 'AGO', 'آنگولا'),
(8, 'AIA', 'آنگویلا'),
(9, 'ATA', 'جنوبگان'),
(10, 'ATG', 'آنتیگوا و باربودا'),
(11, 'ARG', 'آرژانتین'),
(12, 'ARM', 'ارمنستان'),
(13, 'ABW', 'آروبا'),
(14, 'AUS', 'استرالیا'),
(15, 'AUT', 'اتریش'),
(16, 'AZE', 'جمهوری آذربایجان'),
(17, 'BHS', 'باهاما'),
(18, 'BHR', 'بحرین'),
(19, 'BGD', 'بنگلادش'),
(20, 'BRB', 'باربادوس'),
(21, 'BLR', 'بلاروس'),
(22, 'BEL', 'بلژیک'),
(23, 'BLZ', 'بلیز'),
(24, 'BEN', 'بنین'),
(25, 'BMU', 'برمودا'),
(26, 'BTN', 'پادشاهی بوتان'),
(27, 'BOL', 'بولیوی'),
(28, 'BIH', 'بوسنی و هرزگوین'),
(29, 'BWA', 'بوتسوانا'),
(30, 'BVT', 'جزیره بووه'),
(31, 'BRA', 'برزیل'),
(32, 'IOT', 'قلمرو اقیانوس هند بر'),
(33, 'BRN', 'برونئی'),
(34, 'BGR', 'بلغارستان'),
(35, 'BFA', 'بورکینافاسو'),
(36, 'BDI', 'بوروندی'),
(37, 'KHM', 'کامبوج'),
(38, 'CMR', 'کامرون'),
(39, 'CAN', 'کانادا'),
(40, 'CPV', 'کیپ ورد'),
(41, 'CYM', 'جزایر کیمن'),
(42, 'CAF', 'جمهوری آفریقای مرکزی'),
(43, 'TCD', 'چاد'),
(44, 'CHL', 'شیلی'),
(45, 'CHN', 'چین'),
(46, 'CXR', 'جزیره کریسمس'),
(47, 'CCK', 'جزایر کوکوس'),
(48, 'COL', 'کلمبیا'),
(49, 'COM', 'کومور'),
(50, 'COG', 'جمهوری کنگو'),
(51, 'COD', 'جمهوری دموکراتیک کنگ'),
(52, 'COK', 'جزایر کوک'),
(53, 'CRI', 'کاستاریکا'),
(54, 'CIV', 'ساحل عاج'),
(55, 'HRV', 'کرواسی'),
(56, 'CUB', 'کوبا'),
(57, 'CYP', 'قبرس'),
(58, 'CZE', 'جمهوری چک'),
(59, 'DNK', 'دانمارک'),
(60, 'DJI', 'جیبوتی'),
(61, 'DMA', 'دومینیکا'),
(62, 'DOM', 'جمهوری دومینیکن'),
(63, 'ECU', 'اکوادور'),
(64, 'EGY', 'مصر'),
(65, 'SLV', 'السالوادور'),
(66, 'GNQ', 'گینه استوایی'),
(67, 'ERI', 'اریتره'),
(68, 'EST', 'استونی'),
(69, 'ETH', 'اتیوپی'),
(70, 'FLK', 'جزایر فالکند'),
(71, 'FRO', 'جزایر فارو'),
(72, 'FJI', 'فیجی'),
(73, 'FIN', 'فنلاند'),
(74, 'FRA', 'فرانسه'),
(75, 'GUF', 'گویان فرانسه'),
(76, 'PYF', 'پولی‌نزی فرانسه'),
(77, 'ATF', 'سرزمین‌های قطب جنوب '),
(78, 'GAB', 'گابون'),
(79, 'GMB', 'گامبیا'),
(80, 'GEO', 'گرجستان'),
(81, 'DEU', 'آلمان'),
(82, 'GHA', 'غنا'),
(83, 'GIB', 'جبل طارق'),
(84, 'GRC', 'یونان'),
(85, 'GRL', 'گرینلند'),
(86, 'GRD', 'گرنادا'),
(87, 'GLP', 'جزیره گوادلوپ'),
(88, 'GUM', 'گوآم'),
(89, 'GTM', 'گواتمالا'),
(90, 'GGY', 'گرنزی'),
(91, 'GIN', 'گینه'),
(92, 'GNB', 'گینه بیسائو'),
(93, 'GUY', 'گویان'),
(94, 'HTI', 'هائیتی'),
(95, 'HMD', 'جزیره هرد و جزایر مک'),
(96, 'VAT', 'واتیکان'),
(97, 'HND', 'هندوراس'),
(98, 'HKG', 'هنگ کنگ'),
(99, 'HUN', 'مجارستان'),
(100, 'ISL', 'ایسلند'),
(101, 'IND', 'هند'),
(102, 'IDN', 'اندونزی'),
(103, 'IRN', 'ایران'),
(104, 'IRQ', 'عراق'),
(105, 'IRL', 'جمهوری ایرلند'),
(106, 'IMN', 'جزیره من'),
(107, 'ISR', 'اسرائیل'),
(108, 'ITA', 'ایتالیا'),
(109, 'JAM', 'جامائیکا'),
(110, 'JPN', 'ژاپن'),
(111, 'JEY', 'جرسی'),
(112, 'JOR', 'اردن'),
(113, 'KAZ', 'قزاقستان'),
(114, 'KEN', 'کنیا'),
(115, 'KIR', 'کیریباتی'),
(116, 'PRK', 'کره شمالی'),
(117, 'KOR', 'کره جنوبی'),
(118, 'KWT', 'کویت'),
(119, 'KGZ', 'قرقیزستان'),
(120, 'LAO', 'لائوس'),
(121, 'LVA', 'لتونی'),
(122, 'LBN', 'لبنان'),
(123, 'LSO', 'لسوتو'),
(124, 'LBR', 'لیبریا'),
(125, 'LIE', 'لیختن‌اشتاین'),
(126, 'LTU', 'لیتوانی'),
(127, 'LUX', 'لوکزامبورگ'),
(128, 'MAC', 'ماکائو'),
(129, 'MKD', 'مقدونیه'),
(130, 'MDG', 'ماداگاسکار'),
(131, 'MWI', 'مالاوی'),
(132, 'MYS', 'مالزی'),
(133, 'MDV', 'مالدیو'),
(134, 'MLI', 'مالی'),
(135, 'MLT', 'مالت'),
(136, 'MHL', 'جزایر مارشال'),
(137, 'MTQ', 'مارتینیک'),
(138, 'MRT', 'موریتانی'),
(139, 'MUS', 'موریس'),
(140, 'MYT', 'مایوت'),
(141, 'MEX', 'مکزیک'),
(142, 'FSM', 'ایالات فدرال میکرونز'),
(143, 'MDA', 'مولداوی'),
(144, 'MCO', 'موناکو'),
(145, 'MNG', 'مغولستان'),
(146, 'MNE', 'مونته‌نگرو'),
(147, 'MSR', 'مونتسرات'),
(148, 'MAR', 'مراکش'),
(149, 'MOZ', 'موزامبیک'),
(150, 'MMR', 'میانمار'),
(151, 'NAM', 'نامیبیا'),
(152, 'NRU', 'نائورو'),
(153, 'NPL', 'نپال'),
(154, 'NLD', 'هلند'),
(155, 'ANT', 'آنتیل هلند'),
(156, 'NCL', 'کالدونیای جدید'),
(157, 'NZL', 'نیوزیلند'),
(158, 'NIC', 'نیکاراگوئه'),
(159, 'NER', 'نیجر'),
(160, 'NGA', 'نیجریه'),
(161, 'NIU', 'نیووی'),
(162, 'NFK', 'جزیره نورفولک'),
(163, 'MNP', 'جزایر ماریانای شمالی'),
(164, 'NOR', 'نروژ'),
(165, 'OMN', 'عمان'),
(166, 'PAK', 'پاکستان'),
(167, 'PLW', 'پالائو'),
(168, 'PSE', 'فلسطین'),
(169, 'PAN', 'پاناما'),
(170, 'PNG', 'پاپوآ گینه نو'),
(171, 'PRY', 'پاراگوئه'),
(172, 'PER', 'پرو'),
(173, 'PHL', 'فیلیپین'),
(174, 'PCN', 'جزایر پیت‌کرن'),
(175, 'POL', 'لهستان'),
(176, 'PRT', 'پرتغال'),
(177, 'PRI', 'پورتوریکو'),
(178, 'QAT', 'قطر'),
(179, 'REU', 'رئونیون'),
(180, 'ROU', 'رومانی'),
(181, 'RUS', 'روسیه'),
(182, 'RWA', 'رواندا'),
(183, 'BLM', 'سنت بارثلمی'),
(184, 'SHN', 'سینت هلینا'),
(185, 'KNA', 'سنت کیتس و نویس'),
(186, 'LCA', 'سنت لوسیا'),
(187, 'MAF', 'سنت مارتین'),
(188, 'SPM', 'سنت پیر و ماژلان'),
(189, 'VCT', 'سنت وینسنت و گرنادین'),
(190, 'WSM', 'ساموآ'),
(191, 'SMR', 'سن مارینو'),
(192, 'STP', 'سائوتومه و پرنسیپ'),
(193, 'SAU', 'عربستان سعودی'),
(194, 'SEN', 'سنگال'),
(195, 'SRB', 'صربستان'),
(196, 'SYC', 'سیشل'),
(197, 'SLE', 'سیرالئون'),
(198, 'SGP', 'سنگاپور'),
(199, 'SVK', 'اسلواکی'),
(200, 'SVN', 'اسلوونی'),
(201, 'SLB', 'جزایر سلیمان'),
(202, 'SOM', 'سومالی'),
(203, 'ZAF', 'آفریقای جنوبی'),
(204, 'SGS', 'جورجیای جنوبی و جزای'),
(205, 'ESP', 'اسپانیا'),
(206, 'LKA', 'سری‌لانکا'),
(207, 'SDN', 'سودان'),
(208, 'SUR', 'سورینام'),
(209, 'SJM', 'سوالبارد و یان ماین'),
(210, 'SWZ', 'سوازیلند'),
(211, 'SWE', 'سوئد'),
(212, 'CHE', 'سوئیس'),
(213, 'SYR', 'سوریه'),
(214, 'TJK', 'تاجیکستان'),
(215, 'TZA', 'تانزانیا'),
(216, 'THA', 'تایلند'),
(217, 'TLS', 'تیمور شرقی'),
(218, 'TGO', 'توگو'),
(219, 'TKL', 'توکلائو'),
(220, 'TON', 'تونگا'),
(221, 'TTO', 'ترینیداد و توباگو'),
(222, 'TUN', 'تونس'),
(223, 'TUR', 'ترکیه'),
(224, 'TKM', 'ترکمنستان'),
(225, 'TCA', 'جزایر تورکس و کایکوس'),
(226, 'TUV', 'تووالو'),
(227, 'UGA', 'اوگاندا'),
(228, 'UKR', 'اوکراین'),
(229, 'ARE', 'امارات متحده عربی'),
(230, 'GBR', 'بریتانیا'),
(231, 'USA', 'ایالات متحده آمریکا'),
(232, 'UMI', 'جزایر کوچک حاشیه‌ای '),
(233, 'URY', 'اروگوئه'),
(234, 'UZB', 'ازبکستان'),
(235, 'VUT', 'وانواتو'),
(236, 'VEN', 'ونزوئلا'),
(237, 'VNM', 'ویتنام'),
(238, 'VGB', 'جزایر ویرجین انگلستا'),
(239, 'VIR', 'جزایر ویرجین ایالات '),
(240, 'WLF', 'والیس و فوتونا'),
(241, 'ESH', 'صحرای غربی'),
(242, 'YEM', 'یمن'),
(243, 'ZMB', 'زامبیا'),
(244, 'ZWE', 'زیمبابوه');

-- --------------------------------------------------------

--
-- Table structure for table `election_location`
--

CREATE TABLE `election_location` (
  `ElectionId` int(11) NOT NULL,
  `ElectionName` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ElectionStateId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `election_location`
--

INSERT INTO `election_location` (`ElectionId`, `ElectionName`, `ElectionStateId`) VALUES
(7, 'اهر و هریس', 1),
(8, 'بستان آباد', 1),
(9, 'بناب', 1),
(10, 'تبریز ، آذرشهر و اسکو', 1),
(11, 'سراب', 1),
(12, 'شبستر', 1),
(13, 'کلیبر، خدا آفرین و بخش هوراند', 1),
(14, 'مراغه ، عجب شیر', 1),
(15, 'مرند و جلفا', 1),
(16, 'ملکان', 1),
(17, 'میانه', 1),
(18, 'هشترود و چاراویماق', 1),
(19, 'ورزقان', 1),
(20, 'ارومیه', 2),
(21, 'بوکان', 2),
(22, 'پیرانشهر و سردشت', 2),
(23, 'خوی و چایپاره', 2),
(24, 'سلماس', 2),
(25, 'ماکو، چالدران، پلدشت و شوط', 2),
(26, 'مهاباد', 2),
(27, 'میاندوآب و تکاب', 2),
(28, 'شاهین دژ', 2),
(29, 'نقده و اشنویه', 2),
(30, 'اردبیل ، نمین، نیر و سرعین', 3),
(31, 'پارس آباد و بیله سوار', 3),
(32, 'خلخال و کوثر', 3),
(33, 'گرمی', 3),
(34, 'مشگین دشت', 3),
(35, 'اردستان', 4),
(36, 'اصفهان', 4),
(37, 'شاهین شهر، میمه و برخوار', 4),
(38, 'خمینی شهر', 4),
(39, 'سمیرم', 4),
(40, 'شهرضا، دهاقان و دهستان دره شور', 4),
(41, 'فریدن، چادگان ، فریدونشهر،بوئین و میاندشت', 4),
(42, 'فلاورجان', 4),
(43, 'کاشان و آران بیدگل', 4),
(44, 'گلپایگان و خوانسار', 4),
(45, 'لنجان', 4),
(46, 'مبارکه', 4),
(47, 'نایین،خور و بیابانک', 4),
(48, 'نجف آباد ، تیران و کرون', 4),
(49, 'نطنز و بخش قمصر', 4),
(50, 'ساوجبلاغ ، نظرآباد و طالقان', 5),
(51, 'کرج، اشتهارد و فردیس', 5),
(52, 'ایلام،ایوان،چرداول،مهران، ملکشاهی و شیروان', 6),
(53, 'دهلران ، دره شهر، آبدانان و بدره', 6),
(54, 'بوشهر ، گناوه و دیلم', 7),
(55, 'دشتستان', 7),
(56, 'دشتی و تنگستان', 7),
(57, 'کنگان، دیر، جم و عسلویه', 7),
(58, 'پاکدشت', 8),
(59, 'تهران،ری،شمیرانات، اسلامشهر و پردیس', 8),
(60, 'دماوند و فیروزکوه', 8),
(61, 'رباط کریم و بهارستان', 8),
(62, 'شهریار، قدس و ملارد', 8),
(63, 'ورامین، پیشوا و قرچک', 8),
(64, 'اردل،فارسان،کوهرنگ، کیار و دهستان دستگرد', 9),
(65, 'بروجن', 9),
(66, 'شهرکرد،بن و سامان', 9),
(67, 'لردگان', 9),
(68, 'بیرجند، درمیان و خوسف', 10),
(69, 'قائنات و زیرکوه', 10),
(70, 'نهبندان و سربیشه', 10),
(71, 'فردوس ، سرایان، طبس و بشرویه', 10),
(72, 'تربت جام ، تایباد و باخرز', 11),
(73, 'تربت حیدریه ، مه ولات وزاوه', 11),
(74, 'چناران و بینالود', 11),
(75, 'خواف و رشتخوار', 11),
(76, 'درگز', 11),
(77, 'سبزوار، جغتاي، جوین، خوشاب و داورزن', 11),
(78, 'فریمان،سرخس، بخشهاي احمد آبادورضویه', 11),
(79, 'قوچان و فاروج', 11),
(80, 'کاشمر، خلیل آباد و بردسکن', 11),
(81, 'گناباد و بجستان', 11),
(82, 'مشهد و کلات', 11),
(83, 'نیشابور و فیروزه', 11),
(84, 'اسفراین', 12),
(85, 'بجنورد ، مانه، سملقان،جاجرم،گرمه ، راز و جرگلان', 12),
(86, 'شیروان', 12),
(87, 'آبادان', 13),
(88, 'اندیمشک', 13),
(89, 'اهواز ، باوی، حمیدیه و کارون', 13),
(90, 'ایذه و باغملک', 13),
(91, 'بندرماهشهر ، امیدیه ،هندیجان و بخش جولکی', 13),
(92, 'بهبهان و آغاجاری', 13),
(93, 'خرمشهر', 13),
(94, 'دزفول', 13),
(95, 'دشت آزادگان و هویزه', 13),
(96, 'رامهرمز و رامشیر', 13),
(97, 'شادگان', 13),
(98, 'شوش', 13),
(99, 'شوشتر و گتوند', 13),
(100, 'مسجدسلیمان ، لالی، هفتگل و اندیکا', 13),
(101, 'ابهر ، خرمدره و سلطانیه', 14),
(102, 'خدابنده', 14),
(103, 'زنجان و طارم', 14),
(104, 'ماهنشان ، ایجرود ، دهستانهای بوغداکندی و قلتوق', 14),
(105, 'دامغان', 15),
(106, 'سمنان ،مهدی شهر، سرخه و شهمیرزاد', 15),
(107, 'شاهرود،میامی و بسطام', 15),
(108, 'گرمسار و آرادان', 15),
(109, 'ایرانشهر،سرباز، دلگان، فنوج ، بخشهای بنت، لاشار، آشار و آهوران', 16),
(110, 'چابهار ، نیک شهر، کنارک و قصرقند', 16),
(111, 'خاش، میرجاوه، بخشهای نصرت آباد وکورین', 16),
(112, 'زابل ، زهک،هیرمند،نیمروز و هامون', 16),
(113, 'زاهدان', 16),
(114, 'سراوان ،سیب ، سوران و مهرستان', 16),
(115, 'آباده ، بوانات و خرم بید', 17),
(116, 'نی ریز و استهبان', 17),
(117, 'اقلید', 17),
(118, 'جهرم', 17),
(119, 'داراب و زرین دشت', 17),
(120, 'سپیدان', 17),
(121, 'سروستان ، خرامه و کوار', 17),
(122, 'فسا', 17),
(123, 'فیروزآباد، فراشبند و قیر و کارزین', 17),
(124, 'کازرون', 17),
(125, 'لارستان ، خنج و گراش', 17),
(126, 'لامرد و مهر', 17),
(127, 'مرودشت ، پاسارگاد و ارسنجان', 17),
(128, 'ممسنی و رستم', 17),
(129, 'بوئین زهرا و آوج', 18),
(130, 'تاکستان', 18),
(131, 'قزوین ، آبیک و البرز', 18),
(132, 'قم', 19),
(133, 'بیجار', 20),
(134, 'سقز و بانه', 20),
(135, 'سنندج ، دیواندره و کامیاران', 20),
(136, 'قروه و دهگلان', 20),
(137, 'مریوان و سروآباد', 20),
(138, 'بافت، رابر و ارزوئیه', 21),
(139, 'بم، ریگان، فهرج و نرماشیر', 21),
(140, 'جیرفت و عنبرآباد', 21),
(141, 'رفسنجان وانار', 21),
(142, 'زرند و کوهبنان', 21),
(143, 'سیرجان و بردسیر', 21),
(144, 'شهربابک', 21),
(145, 'کرمان و راور', 21),
(146, 'کهنوج ، منوجان، رودبار جنوب، قلعه گنج و فاریاب', 21),
(147, 'اسلام آباد غرب و دالاهو', 22),
(148, 'پاوه،جوانرود،ثلاث باباجانی، روانسر و دهستانهاي سر قلعه و جیگران', 22),
(149, 'سنقر', 22),
(150, 'قصرشیرین،سرپل ذهاب وگیلانغرب', 22),
(151, 'کرمانشاه', 22),
(152, 'کنگاور ، صحنه وهرسین', 22),
(153, 'بویراحمد و دنا', 23),
(154, 'کهگیلویه ، بهمئی،چرام و لنده', 23),
(155, 'گچساران و باشت', 23),
(156, 'رامیان و آزادشهر', 24),
(157, 'علی آباد', 24),
(158, 'کردکوي، ترکمن، بندرگز وگمیشان', 24),
(159, 'گرگان و آق قلا', 24),
(160, 'گنبد کاووس', 24),
(161, 'مینودشت، کلاله، مراوه تپه و گالیکش', 24),
(162, 'آستارا', 25),
(163, 'آستانه اشرفیه', 25),
(164, 'بندرانزلی', 25),
(165, 'رشت', 25),
(166, 'رودبار', 25),
(167, 'رودسر و املش', 25),
(168, 'صومعه سرا', 25),
(169, 'طوالش ، رضوانشهر و ماسال', 25),
(170, 'فومن و شفت', 25),
(171, 'لاهیجان و سیاهکل', 25),
(172, 'لنگرود', 25),
(173, 'الیگودرز', 26),
(174, 'بروجرد', 26),
(175, 'پلدختر', 26),
(176, 'خرم آباد ودوره', 26),
(177, 'دلفان و سلسله', 26),
(178, 'دورود و ازنا', 26),
(179, 'کوهدشت و رومشکان', 26),
(180, 'آمل', 27),
(181, 'بابل', 27),
(182, 'بابلسر و فریدونکنار', 27),
(183, 'بهشهر و نکا و گلوگاه', 27),
(184, 'تنکابن ، رامسر و عباس آباد', 27),
(185, 'ساری و میاندورود', 27),
(186, 'قائمشهر،سوادکوه، جویبار، سیمرغ', 27),
(187, 'نور و محمودآباد', 27),
(188, 'نوشهر ، چالوس و کلاردشت', 27),
(189, 'اراك ، کمیجان و خنداب', 28),
(190, 'تفرش ، آشتیان و فراهان', 28),
(191, 'خمین', 28),
(192, 'ساوه و زرندیه', 28),
(193, 'شازند', 28),
(194, 'محلات و دلیجان', 28),
(195, 'بندرعباس،قشم ، ابوموسی ، حاجی آباد و خمیر', 29),
(196, 'بندرلنگه و بستک و پارسیان', 29),
(197, 'میناب ، رودان، جاسک،سیریک وبشاگرد', 29),
(198, 'اسدآباد', 30),
(199, 'بهار و کبودرآهنگ', 30),
(200, 'تویسرکان', 30),
(201, 'رزن', 30),
(202, 'ملایر', 30),
(203, 'نهاوند', 30),
(204, 'همدان وفامنین', 30),
(205, 'اردکان', 31),
(206, 'تفت و میبد', 31),
(207, 'مهریز،بافق،ابرکوه، خاتم وبهاباد', 31),
(208, 'یزد ،اشکذر، بخش ندوشن و دهستان سورک', 31),
(209, 'شیراز', 17),
(210, 'مسیحیان ارمنی جنوب', 32),
(211, 'مسیحیان ارمنی شمال', 32),
(212, 'مسیحیان آشوری و کلدانی', 32),
(213, 'زرتشتیان', 32),
(214, 'کلیمیان', 32);

-- --------------------------------------------------------

--
-- Table structure for table `election_location_city`
--

CREATE TABLE `election_location_city` (
  `RowId` int(11) NOT NULL,
  `ElectionId` bigint(20) NOT NULL,
  `ElectionCityId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `election_location_city`
--

INSERT INTO `election_location_city` (`RowId`, `ElectionId`, `ElectionCityId`) VALUES
(21, 7, 444),
(22, 7, 445),
(23, 8, 446),
(24, 9, 447),
(25, 10, 448),
(26, 10, 449),
(27, 10, 450),
(28, 11, 451),
(29, 12, 452),
(30, 13, 453),
(31, 14, 456),
(32, 14, 457),
(33, 15, 458),
(34, 15, 459),
(35, 16, 460),
(36, 17, 461),
(37, 18, 462),
(38, 18, 463),
(39, 19, 464),
(40, 20, 465),
(41, 21, 466),
(42, 22, 467),
(43, 22, 468),
(44, 23, 469),
(45, 24, 471),
(46, 25, 472),
(47, 25, 473),
(48, 26, 476),
(49, 27, 477),
(50, 27, 479),
(51, 28, 478),
(52, 29, 480),
(53, 29, 481),
(54, 30, 482),
(55, 30, 483),
(56, 30, 484),
(57, 30, 485),
(58, 31, 486),
(59, 31, 487),
(60, 32, 488),
(61, 32, 489),
(62, 33, 490),
(64, 34, 491),
(65, 35, 492),
(66, 36, 902),
(67, 37, 493),
(68, 37, 494),
(69, 37, 495),
(70, 38, 496),
(71, 39, 497),
(72, 40, 498),
(73, 41, 501),
(74, 41, 502),
(75, 41, 503),
(76, 42, 506),
(77, 43, 507),
(78, 43, 508),
(79, 44, 509),
(80, 44, 510),
(81, 45, 511),
(82, 46, 512),
(83, 47, 513),
(84, 48, 516),
(85, 48, 517),
(86, 48, 518),
(87, 49, 519),
(88, 50, 521),
(89, 50, 522),
(90, 50, 523),
(91, 51, 524),
(92, 51, 525),
(93, 51, 526),
(98, 52, 527),
(99, 52, 528),
(100, 52, 529),
(101, 52, 530),
(102, 52, 532),
(103, 53, 533),
(104, 53, 534),
(105, 53, 535),
(106, 54, 537),
(107, 54, 538),
(108, 54, 539),
(109, 55, 540),
(110, 56, 541),
(111, 56, 542),
(112, 57, 543),
(113, 57, 544),
(114, 57, 545),
(115, 58, 547),
(116, 59, 548),
(117, 59, 549),
(118, 59, 550),
(119, 59, 551),
(120, 60, 553),
(121, 60, 554),
(122, 61, 555),
(123, 62, 557),
(124, 63, 560),
(125, 64, 563),
(126, 64, 564),
(127, 64, 565),
(128, 65, 568),
(129, 66, 569),
(130, 67, 572),
(131, 68, 573),
(132, 68, 574),
(133, 69, 576),
(134, 70, 578),
(135, 70, 579),
(138, 71, 580),
(139, 71, 581),
(140, 71, 582),
(141, 72, 584),
(142, 72, 585),
(143, 73, 588),
(144, 73, 589),
(145, 74, 591),
(146, 75, 593),
(147, 75, 594),
(148, 76, 595),
(149, 77, 596),
(150, 78, 601),
(151, 78, 602),
(152, 79, 605),
(153, 79, 606),
(154, 80, 607),
(155, 80, 608),
(156, 81, 610),
(157, 82, 612),
(158, 82, 613),
(159, 83, 614),
(160, 84, 616),
(161, 85, 617),
(162, 85, 618),
(163, 85, 619),
(164, 85, 620),
(165, 86, 624),
(166, 87, 625),
(167, 88, 626),
(168, 89, 627),
(169, 90, 631),
(170, 91, 633),
(171, 91, 634),
(172, 91, 635),
(173, 92, 637),
(174, 93, 639),
(175, 94, 640),
(176, 95, 641),
(177, 96, 643),
(178, 96, 644),
(179, 97, 645),
(180, 98, 646),
(181, 99, 647),
(182, 99, 648),
(183, 100, 649),
(184, 100, 650),
(185, 101, 653),
(186, 101, 654),
(187, 102, 656),
(188, 103, 657),
(189, 103, 658),
(190, 104, 660),
(191, 105, 663),
(192, 106, 664),
(193, 106, 665),
(194, 107, 668),
(195, 108, 671),
(196, 109, 673),
(197, 109, 674),
(198, 109, 675),
(199, 110, 681),
(200, 110, 683),
(201, 111, 685),
(202, 112, 689),
(203, 112, 690),
(204, 113, 694),
(205, 114, 695),
(206, 115, 699),
(207, 115, 700),
(208, 115, 701),
(209, 116, 702),
(210, 116, 703),
(211, 117, 704),
(212, 118, 705),
(213, 119, 706),
(214, 119, 707),
(215, 120, 708),
(216, 121, 903),
(217, 121, 904),
(218, 121, 905),
(219, 122, 713),
(223, 123, 714),
(224, 123, 715),
(225, 123, 716),
(226, 123, 717),
(227, 124, 718),
(228, 125, 719),
(229, 125, 720),
(230, 126, 723),
(231, 127, 724),
(232, 127, 725),
(233, 127, 726),
(234, 128, 727),
(235, 129, 729),
(236, 130, 731),
(237, 131, 732),
(238, 131, 733),
(239, 131, 734),
(240, 132, 735),
(241, 133, 736),
(242, 134, 737),
(243, 134, 738),
(244, 135, 739),
(245, 135, 740),
(246, 135, 741),
(247, 136, 742),
(248, 137, 744),
(249, 137, 745),
(250, 138, 746),
(251, 139, 749),
(252, 140, 753),
(253, 140, 754),
(254, 141, 755),
(255, 142, 757),
(256, 142, 758),
(257, 143, 759),
(258, 143, 760),
(259, 144, 761),
(260, 145, 762),
(261, 145, 763),
(262, 146, 764),
(263, 146, 765),
(264, 146, 766),
(265, 146, 767),
(266, 147, 769),
(267, 147, 770),
(268, 148, 771),
(269, 148, 772),
(270, 148, 773),
(271, 148, 774),
(272, 149, 777),
(273, 150, 778),
(274, 150, 779),
(275, 150, 780),
(276, 151, 781),
(277, 152, 782),
(278, 152, 783),
(279, 152, 784),
(280, 153, 785),
(281, 153, 786),
(282, 154, 787),
(283, 154, 788),
(284, 155, 791),
(285, 156, 793),
(286, 156, 794),
(287, 157, 795),
(288, 158, 796),
(289, 158, 797),
(290, 158, 798),
(291, 159, 800),
(292, 159, 801),
(293, 160, 802),
(294, 161, 803),
(295, 161, 804),
(296, 161, 805),
(297, 162, 807),
(298, 163, 808),
(299, 164, 809),
(300, 165, 810),
(301, 166, 811),
(302, 167, 812),
(303, 167, 813),
(304, 168, 814),
(305, 169, 815),
(306, 169, 816),
(307, 169, 817),
(308, 170, 818),
(309, 170, 819),
(310, 171, 820),
(311, 171, 821),
(312, 172, 822),
(313, 173, 823),
(314, 174, 824),
(315, 175, 825),
(316, 176, 826),
(317, 177, 828),
(318, 177, 829),
(319, 178, 830),
(320, 178, 831),
(321, 179, 832),
(322, 180, 834),
(323, 181, 835),
(324, 182, 836),
(325, 183, 838),
(326, 183, 839),
(327, 183, 840),
(328, 184, 841),
(329, 184, 842),
(330, 185, 844),
(331, 186, 846),
(332, 186, 847),
(333, 186, 848),
(334, 187, 851),
(335, 187, 852),
(336, 188, 853),
(337, 188, 854),
(338, 189, 856),
(339, 189, 857),
(340, 190, 859),
(341, 190, 860),
(342, 191, 862),
(343, 192, 863),
(344, 192, 864),
(345, 193, 865),
(346, 194, 866),
(347, 194, 867),
(348, 195, 868),
(349, 195, 869),
(350, 195, 870),
(351, 195, 871),
(352, 195, 872),
(353, 196, 873),
(354, 196, 874),
(355, 197, 876),
(356, 197, 877),
(357, 197, 878),
(358, 198, 881),
(359, 199, 882),
(360, 199, 883),
(361, 200, 884),
(362, 201, 885),
(363, 202, 886),
(364, 203, 887),
(365, 204, 888),
(366, 205, 890),
(367, 206, 891),
(368, 206, 892),
(369, 207, 893),
(370, 207, 894),
(371, 207, 895),
(372, 207, 896),
(373, 208, 898),
(374, 209, 712),
(375, 210, 906),
(376, 211, 907),
(377, 212, 910),
(378, 213, 908),
(379, 214, 909);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ExamId` int(11) NOT NULL,
  `ExamPlaceId` int(11) NOT NULL,
  `ExamType` varchar(254) CHARACTER SET latin1 NOT NULL COMMENT '(FirstStep/SecondStep)',
  `ExamCapacity` int(11) NOT NULL DEFAULT '0',
  `ExamDate` varchar(254) CHARACTER SET latin1 NOT NULL,
  `ExamTime` varchar(254) CHARACTER SET latin1 NOT NULL,
  `ExamAgentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ExamId`, `ExamPlaceId`, `ExamType`, `ExamCapacity`, `ExamDate`, `ExamTime`, `ExamAgentId`) VALUES
(1, 1, 'FirstStep', 9, '1398/9/5', '14:00', 19),
(2, 1, 'SecondStep', 14, '1398/9/5', '15:00', 19),
(3, 2, 'Evaluation', 9, '1398/9/5', '16:00', 0),
(4, 3, 'FirstStep', 4, '1398/9/20', '14:00', 19),
(5, 4, 'SecondStep', 4, '1398/9/20', '15:00', 19),
(6, 5, 'Evaluation', 4, '1398/9/20', '16:00', 0),
(7, 6, 'FirstStep', 12, '1398/10/2', '08:00', 22),
(8, 6, 'FirstStep', 12, '1398/10/5', '08:00', 22),
(9, 6, 'FirstStep', 12, '1398/10/6', '08:00', 22),
(10, 6, 'FirstStep', 12, '1398/10/9', '08:00', 22),
(11, 6, 'FirstStep', 12, '1398/10/12', '08:00', 22),
(12, 6, 'FirstStep', 12, '1398/10/13', '08:00', 22),
(13, 6, 'FirstStep', 12, '1398/10/16', '08:00', 22),
(14, 6, 'FirstStep', 12, '1398/10/19', '08:00', 22),
(15, 6, 'FirstStep', 12, '1398/10/20', '08:00', 22),
(16, 6, 'FirstStep', 12, '1398/10/23', '08:00', 22),
(17, 6, 'FirstStep', 12, '1398/10/26', '08:00', 22),
(18, 6, 'FirstStep', 12, '1398/10/27', '08:00', 22),
(19, 6, 'FirstStep', 29, '1398/10/30', '08:00', 22);

-- --------------------------------------------------------

--
-- Table structure for table `exam_places`
--

CREATE TABLE `exam_places` (
  `ExamPlaceId` int(11) NOT NULL,
  `ExamPlaceTitle` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ExamPlaceAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ExamPlaceMapImage` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ExamPlaceDefaultCapacity` int(11) NOT NULL DEFAULT '0',
  `ExamPlaceStateId` int(11) NOT NULL,
  `ExamPlaceAgentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_places`
--

INSERT INTO `exam_places` (`ExamPlaceId`, `ExamPlaceTitle`, `ExamPlaceAddress`, `ExamPlaceMapImage`, `ExamPlaceDefaultCapacity`, `ExamPlaceStateId`, `ExamPlaceAgentId`) VALUES
(3, 'آزمون مرحله اول', 'سرشسی شسیشسیب', '4655bce7659ccf64393e67cfb3865f68_6-164.jpg', 5, 5, 19),
(4, 'آزمون مرحله دوم', 'ی سیشبسیب شی ب', 'aa06f0b2586335d7943dc28f1766c889_04.jpg', 5, 5, 19),
(6, 'موسسه هدایت فرهیختگان جوان', 'خیابان حافط خیابان جامی کوچه محمدبیگ پلاک 14', 'd81719e979d8789e13113abe23169e51_HFJ-Place.jpg', 12, 8, 22);

-- --------------------------------------------------------

--
-- Table structure for table `form_contact`
--

CREATE TABLE `form_contact` (
  `RowId` bigint(20) NOT NULL,
  `ContactFullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactSubject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ContactPhone` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactIP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Visited` int(11) NOT NULL DEFAULT '0',
  `CreateDateTime` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_contact`
--

INSERT INTO `form_contact` (`RowId`, `ContactFullName`, `ContactTitle`, `ContactSubject`, `ContactContent`, `ContactPhone`, `ContactIP`, `Visited`, `CreateDateTime`) VALUES
(2, 'رضا عباسی', 'عدم ارسال پیامک', 'Other', 'با سلام و احترام\nاینجانب ثبت نام انجام دادم ولی پیامکی برایم ارسال نشد.', NULL, '80.210.174.40', 1, ''),
(3, 'مهدیه خادم', '', 'CS', 'سلام\nممکنه در روند بررسی و ارزیابی مدل شماقراربگیریم امانتیجه روفقط به خودمون بگین و اعلام عمومی نشود؟', NULL, '2.182.118.140', 1, ''),
(5, '', '', '', 'لبیابابابا', '', '46.209.65.34', 0, ''),
(6, 'مصطفی آخوندی', 'نامزد', 'Other', 'با سلام متاسفانه هرچه برای ورود به سایت اقدام می کنم می گوید اطلاعات نامعتبر است،  امکان ورود با گزینه فراموشی رمز هم وجود ندارد.  حتی گرینه ثبت نام جدید را هم انتخاب کردم ولی می گوید اطلاعات قبلا ثبت شده است ولی به هیچ روشی نمی شود وارد سایت شد', '09139135868', '5.120.4.86', 1, ''),
(7, 'محمدرضا اسماعیلی', 'تست', 'PeopleReport', 'تست', '09120572107', '2.191.220.58', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `login_records`
--

CREATE TABLE `login_records` (
  `RowId` bigint(20) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `LoginDate` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LoginAccessToken` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_records`
--

INSERT INTO `login_records` (`RowId`, `CandidateId`, `LoginDate`, `LoginAccessToken`) VALUES
(5, 304, '1398/09/20 14:00:23', 'oQIGePEmLNqb7jgzsxtK4DRv5nHSZM9c'),
(6, 302, '1398/09/20 14:07:40', '6cIZ0V5z7gS1LPCqBAxwDu8im3Wo4vGQ'),
(7, 304, '1398/09/20 14:26:48', 'CtWkpAHnxFmMJilRNvGh245OLSKIw1D8'),
(8, 244, '1398/09/20 15:38:07', 'Ly0FPH5KWanGJklZ4AtVd7vM3BCjiNIO'),
(9, 302, '1398/09/20 16:14:04', 'g4sw3k2EoR0i7eX8VuSDBhbNW9vcKIUC'),
(10, 244, '1398/09/20 16:14:08', 'PEDhMtoRSyZrLlA8X0mbcuVp324F5qHi'),
(11, 302, '1398/09/20 17:42:25', 'oIJ1Y9NBDWirLFp8Mu526V0lZOten37H'),
(12, 302, '1398/09/20 20:39:59', 'aNLXqH9eOU0zWtGf35467VonPYj8vpux'),
(13, 305, '1398/09/21 00:03:44', 'VhfRsaS7Aj6rPpD4Ju2iMb9YyI3n15E8'),
(14, 308, '1398/09/21 17:20:31', 'bNgF2ImH8ynipMUlEhVvPcfjAR4rDoOd'),
(15, 201, '1398/09/21 17:34:00', 'FGnBN5CKUm6eaR8p7gbOISEhJdiPlL2A'),
(16, 309, '1398/09/21 18:07:51', 'AQyJd02FglZmI4OU1CV6e9RvHkW7NrMx'),
(17, 310, '1398/09/21 18:41:51', 'bklKuTJUnW8o5aRH6ximLPG90g2VIB3p'),
(18, 311, '1398/09/21 19:36:16', 'vgRkUFxPHiBWbXQSl2TLGrCMuncEtDKJ'),
(19, 310, '1398/09/21 21:09:21', '8rjACxbmV2qB97S5hayPksZTJeEH3vgo'),
(20, 301, '1398/09/21 22:20:32', 'BSQ2y0uGUwJgVi5HzCZEDRK19OvNt6kd'),
(21, 224, '1398/09/21 23:10:51', 'KsYV0fNUc8R3o5bAqyzwki4vIPeHdCT9'),
(22, 226, '1398/09/21 23:19:53', 'nys1dgTSPaNrM28zA6thYQOUX4bG9DVv'),
(23, 313, '1398/09/22 03:45:54', 'rL1hbY9lgtpE4SPCHKcDnxMs28y5evoT'),
(24, 314, '1398/09/22 06:51:26', 's1a8UKrle35JFqjmdtuPWLTio9IQXyO6'),
(25, 308, '1398/09/22 10:28:02', 'eIW451B2kSv3lOTfpArDjZ0buKExdJHV'),
(26, 315, '1398/09/22 12:07:49', 'qwPMmUbFfa79x5kL4BZVSvWGiT3hc2R0'),
(27, 315, '1398/09/22 13:35:33', 'OWeSL8Rf7r5n2GagK4yDwx30sVlP6CAQ'),
(28, 315, '1398/09/22 13:44:36', 'KZEHwMNnOAX0BquveLC4GpIzbTtmJV8Q'),
(29, 316, '1398/09/22 15:41:05', '9B6W8p4LzcqkrOGAUfQHugyRiED7amj0'),
(30, 314, '1398/09/22 16:08:57', 'dEkuZBj5OstA2DgbThaR3F018iSywoIJ'),
(31, 317, '1398/09/22 21:36:05', '4FEPfVqKnNG7WM9xXmJBetdziOCgh5sR'),
(32, 225, '1398/09/23 10:10:41', 'IF1nkcKUtwufG4g25Mz7miJLVdbBCW9Y'),
(33, 319, '1398/09/23 10:38:45', 'WB2wMZpyPFGrudesn3f7xa1SLCKtchHl'),
(34, 294, '1398/09/23 11:40:06', 'Ld8YBXlrRep3ZsaHc1AiIMoEWgmNDU96'),
(35, 226, '1398/09/23 15:36:35', 'eouMytsUNJ7np1k5vbwr0xZgBYjRP2da'),
(36, 226, '1398/09/23 15:36:52', 'D5sdbfaumKGjM20gZ3p69RTicBvL8l1X'),
(37, 320, '1398/09/23 17:23:18', 'T1CMF4faIDJ6qQjEsi29LOPzHWndglGR'),
(38, 321, '1398/09/23 20:30:28', 'NHJwf1OZdLeFxjnr6SmMoPGXCi3UBYgE'),
(39, 302, '1398/09/23 23:04:53', 'GXDW9Z7gprd3jxchlkLe01UVOHCfFbKm'),
(40, 227, '1398/09/24 01:05:40', 'ipEXH2Wu7fo5esZyFw6jDxkOrg9tBC4v'),
(41, 178, '1398/09/24 09:06:04', 'Zt7AN8DECMwuIJX0PWb16KcBdL2lnhfT'),
(42, 302, '1398/09/24 12:45:43', 'rLGeyXqEOHc62ozYMJd8fmk37Tjh0RtA'),
(43, 322, '1398/09/24 13:01:02', 'bqvG6rAkUFDW32pNosIX9zSxg8Zwfh0Y'),
(44, 323, '1398/09/24 14:10:32', 'ohGLW4AETCIXUruvDJxkj8sm0Ma6w7Yc'),
(45, 326, '1398/09/24 14:56:49', 'qeCkIs216wdQOGgvNzEPmn5K9MLi4J0p'),
(46, 327, '1398/09/24 15:01:19', 'xvR92pBEoWrK3LqweC01ImlSMPuNzTgy'),
(47, 329, '1398/09/24 15:58:54', 'rYDf6pVRTtjJa4HoCBEqIGUN7QwAWX58'),
(48, 331, '1398/09/24 16:05:40', 'LtzFxfg8c9wBVXP6npKCY4bk3aRmTA1r'),
(49, 332, '1398/09/24 16:09:58', 'T7O1jfyNmtWYGEgI6VRxCU39AsianMqr'),
(50, 333, '1398/09/24 16:14:38', 'dKJ0bElpsAUkqZoSr9G6txjDV28vI7Bc'),
(51, 334, '1398/09/24 16:18:01', 'cWvUhBEfKy1GAqDw75rlspZ0iI9oemFj'),
(52, 335, '1398/09/24 16:24:26', '2qWnbZpFDC3OxzKILwvH5ctsu7P6meol'),
(53, 336, '1398/09/24 16:35:12', 'f10iEDhAHCqWbQkp6BPKUgaMXJsoYGm9'),
(54, 244, '1398/09/24 16:53:21', '159CaSVQTkesiufIONcqEDFyb73j6wpv'),
(55, 225, '1398/09/24 18:04:14', 'iNvIdk1BKY6EV7rfnWGLO502Zxyqh3aM'),
(56, 337, '1398/09/24 19:23:32', '7WOgnKxk5o1UwPu0YCH6q3NjfiB9QXRs'),
(57, 337, '1398/09/24 19:28:48', '7TIZz9qjJEB2eGvVb1pgu8RPMnmQwAkD'),
(58, 338, '1398/09/24 19:30:51', 'LDaRcTBunfAhb1pYSqFxCrokjyXKd7is'),
(59, 339, '1398/09/24 20:30:12', '2G7NYgbaCI4VOJnEkemDsh8PqTyM5Qzd'),
(60, 340, '1398/09/24 20:34:54', '8tbBp9o0ETYx4HGLZrShkw7NRnUdqOX5'),
(61, 341, '1398/09/24 20:42:10', 'T80wzmEInqeJC2YKDadlrLWFuAO13ofS'),
(62, 342, '1398/09/24 21:05:24', 'PDp0mMo4gVsnxCSjQLTvcFHaebhOw13Y'),
(63, 343, '1398/09/24 21:22:03', 'Diw1mUjdZklvtGEKSONusy58LWYBcobh'),
(64, 344, '1398/09/24 21:30:15', 'hwiZaKzM6mrUjfgbtLxnu0vEc7NX3PsG'),
(65, 345, '1398/09/24 21:44:27', '6zbyPDBYOLIRpe8xZ71UfSgTHjhNa0JG'),
(66, 339, '1398/09/24 21:46:28', 'Q9ksZfRH85K23JzTpFYmjPy0vaCoVwUg'),
(67, 346, '1398/09/24 23:02:28', 'UGejTaR8vgJHSXnBmAMPyfKQ29osDlO4'),
(68, 347, '1398/09/24 23:04:12', 'IsJYjp0yHrhPidC5NOvVBXRZc2486oUE'),
(69, 346, '1398/09/24 23:05:17', '1ulsk3AGzbYVmL84dUBaQ62p5cNqPOXe'),
(70, 348, '1398/09/24 23:06:06', 'lHbhLX0YJucivsmRMrGqtQy1IgTV37de'),
(71, 349, '1398/09/24 23:11:02', 'KgZwcHLGy6YQpb14idq0ED5MvXanAOz2'),
(72, 350, '1398/09/24 23:18:13', 'yCRsHfbwnOeLZ7qGoM9W4SAKdB0rFgTJ'),
(73, 351, '1398/09/24 23:19:00', 'vSFUqsbAuKPRwNhB8WmVd57kzfn2CZeM'),
(74, 352, '1398/09/24 23:55:20', 'pAck9ufWaZLYw8gF7vO4X1UjyDrSNRE6'),
(75, 353, '1398/09/25 00:17:39', 'OTf0yRuh8LDEkBpagNQKj9iYvzA31HWb'),
(76, 354, '1398/09/25 00:55:17', 'ivk0YWyfCNsleoac8pAw4mVX7bJSHBnQ'),
(77, 356, '1398/09/25 01:36:34', '1eEuKmfhstbV6xcUByCNH9zpPdXGJanQ'),
(78, 357, '1398/09/25 02:02:43', 'CNb9kRFOWmrDo20uHx5iEUJYycntBLMV'),
(79, 359, '1398/09/25 09:29:47', 'vbQwhM2AdojDsGaJg94L8xlr30VKTzUq'),
(80, 360, '1398/09/25 10:03:44', 'v3n6FsDqpGXUMB25Ofi4QPLSaydke8AY'),
(81, 361, '1398/09/25 10:18:13', 'kqHMDtGcKLrjOslNhyZua26BzfAJ1pd8'),
(82, 244, '1398/09/25 10:25:11', 'qtdkH35vzfsrQS6JK8DiLXFj92BWCnIy'),
(83, 294, '1398/09/25 10:36:40', 'X9VQD3BgWj6hGikMF2ftzuObdCTnoUml'),
(84, 348, '1398/09/25 11:52:12', 'TyijNC7nhgOz20fBdtVc5LwGeDxo3R9l'),
(85, 362, '1398/09/25 12:03:12', 'SMsiRIxXAmBOLuFQr7JKj45T0qDC3kly'),
(86, 363, '1398/09/25 13:08:58', 'dj0sxbBUCXkDNOchWuHKwnpQm69VYZRE'),
(87, 363, '1398/09/25 13:28:05', 'CJNyEklQ81vZupdfcPjT2Xx3GMriR67A'),
(88, 363, '1398/09/25 14:14:45', 'M4yd7vJukiTjS6OUN1spD5IWBaHlX2F9'),
(89, 365, '1398/09/25 14:24:31', 'kNwst8BxlWcKnD4v3TbYaRy6L5MjI1md'),
(90, 361, '1398/09/25 14:44:28', 'UOt01MBZmsKivHIe3oDSfPwAaWcyQ52j'),
(91, 366, '1398/09/25 14:54:12', 'njLyxIagQOSp2dEWTi0z5tblemBN6KH1'),
(92, 367, '1398/09/25 15:26:31', 'G3guSU25eM1ITinlJRHNpFYbmPdKvqZO'),
(93, 369, '1398/09/25 15:39:10', 'NqyUDbRA5wFVd7OCYnMuzSr1jal4G80c'),
(94, 370, '1398/09/25 15:44:04', 'EuCi3rdDc07GUyjJagSo9HvPV8fRQThp'),
(95, 371, '1398/09/25 15:47:01', 'ewWb8o0ugDXnqNOtTmCYMi9B1rSy4pzQ'),
(96, 372, '1398/09/25 16:01:17', 'N2hW7ijP1UZxA5GOl8oS9XvnBmfMgpDH'),
(97, 373, '1398/09/25 16:09:05', '7CTcbvWlHmBNU1DhatRs0YZqiFL4P86f'),
(98, 374, '1398/09/25 17:30:42', 'newa507xJRglQdbKoYLA4TI8MFDistkp'),
(99, 375, '1398/09/25 17:55:42', 'F9mRfjOWtD1rxcYpL70JsB2Sw8Uahzni'),
(100, 376, '1398/09/25 18:00:29', 'brdhjBIoR1NMuvZkPilYcgS46fnyW8Ke'),
(101, 377, '1398/09/25 18:04:03', 'kj8ahUVitIqECylwQdpA4RYMvD9Wcze0'),
(102, 378, '1398/09/25 19:27:20', 'mOvyqliDXI9x2706hAY5VwJMWPTE4bHg'),
(103, 379, '1398/09/25 19:48:52', 'BozYn2Ts7jAGvVOQ34yJ19SPKhpLulE0'),
(104, 380, '1398/09/25 19:57:27', 'OMSGrTpPnK09ofF4gUEsbq5QeYwI2jZm'),
(105, 363, '1398/09/25 21:01:56', 'QNJeZphHsmPO7uFcKy2aDxnqoW635A8R'),
(106, 381, '1398/09/25 22:43:59', 'o3lQj87yw02iD9NBcbPYd41tVXrfGOJK'),
(107, 244, '1398/09/25 23:10:46', 'viQ8KqRHynMGLpFDPrd59Igk2ScafWYV'),
(108, 244, '1398/09/25 23:11:37', '7B98PcedWYKO5wlTmA1hvRDy4CzqINgE'),
(109, 382, '1398/09/25 23:12:55', 'F6g9XtdxYJArjPEy2DbNpvCVwzIMuRm7'),
(110, 136, '1398/09/25 23:51:41', 'lJCqEtPW520jvVk1mhUrRnAIMGgOuXZD'),
(111, 316, '1398/09/25 23:56:46', 'SRFijCBZ9XOzKQP62avk5ynhesVYpWdA'),
(112, 383, '1398/09/26 00:02:13', 'jEKAzSaNd2GVlwrpWLZi3th4e9T6q0Ds'),
(113, 384, '1398/09/26 00:20:51', 'QUqyW9IDTCeXKVMiJAYmSaEgoxwBLspk'),
(114, 387, '1398/09/26 08:56:55', 'ekIszgB0Uj61PQ2oL9n5JcYKMZCpxOwr'),
(115, 244, '1398/09/26 09:15:55', 'RWJOzylQi4g6ucjSKTNBZtCfGnvbE587'),
(116, 388, '1398/09/26 09:16:51', 'Ju6VgoijS4rLBpOUhDP0NFcwYTmHnab1'),
(117, 389, '1398/09/26 09:19:01', 'cFVp4kDCPZob6EnvWAdyeSIs0wGiQqrz'),
(118, 390, '1398/09/26 09:22:05', 'D4Kg2rLyFhBoRkEWNPY5CJj8mxatcMST'),
(119, 244, '1398/09/26 09:34:00', 'Zey7D25GKP6xiNkhnJT3r1mzCRsO94H8'),
(120, 391, '1398/09/26 10:03:05', 'YyTFj7BnELaZxH8GhkJ1rmdK6NqQtD2M'),
(121, 392, '1398/09/26 10:42:34', 'mw18kaWFNGBtcS5CxOV43XE9RzPTAojq'),
(122, 388, '1398/09/26 11:03:54', 'bvGPBz18qFl3KDytjOsMIU6XpYdkVNAo'),
(123, 394, '1398/09/26 13:20:26', 'fnDKpt23ml6SCRgMPjiWxAJGBHuwTIyQ'),
(124, 395, '1398/09/26 15:30:55', 'gbLRc9aXU5nltks1VedQq8AMpoHz7vx2'),
(125, 395, '1398/09/26 15:52:54', 'vF38qyS0BVRejICLO4K5QZbrW7TulAMD'),
(126, 244, '1398/09/26 16:04:50', 'pZlb6XYgRKW5ucDJi2hA1y9rfCne7xsE'),
(127, 244, '1398/09/26 16:19:01', '3laF9q7czSHV01BCuNnkJvKt24mpZAYr'),
(128, 244, '1398/09/26 16:27:09', 'RNrkq2fup48sTD0MPmCSVJeY9LOBzKAQ'),
(129, 244, '1398/09/26 16:27:35', 'zA5ZRg1hInL2kUd4qOeXlTWba8vPYKo0'),
(130, 395, '1398/09/26 16:29:47', 'y219KPAXoshWSGFqdn4emiN0lLDUHRf5'),
(131, 244, '1398/09/27 11:17:21', 'a59BeogwtCvxnRrG4yJj1UShmLpF2HfZ'),
(132, 244, '1398/09/30 08:13:18', 'xFBdK2ebV5gnTh63UQXZt7EpLsMzCDAO'),
(133, 244, '1398/10/01 09:16:57', 'M2CZ7qTygv6ca1RN85fseYrKpd0bjxBl'),
(134, 244, '1398/10/02 13:24:26', 'TzmAcsN654OKDMIBEy2bFZaRegvhHt9k'),
(135, 244, '1398/10/11 13:56:02', 'DbRJMIogvK527lVZzq8fL4UnuFQEWhwk'),
(136, 244, '1398/10/18 08:42:59', '6FKhRxlNSeva7fkr9Y10VUW4EXi3q5Im'),
(137, 244, '1398/10/21 15:43:53', '5ivDklL6ezcHPYQ4Txh1pXo9gbU3SCAf'),
(138, 244, '1398/10/22 10:10:55', '92ktYrCa3NU8voWne7Xm6ZSsRbflOwK5'),
(139, 244, '1398/10/23 09:41:50', 'PyG8tpN7lfYFhaTSBDKkAdrzZ1xjLv2W'),
(140, 244, '1398/10/23 13:06:52', 'qFV0bd6kLCyjmGBXaigr4t5OIUWP7of9'),
(141, 244, '1398/10/24 15:03:25', 'UPl1bAjnxBgQRZDkNTFXMVH872sCdv6u'),
(142, 396, '1398/10/24 15:06:23', 'G3hTJM851asfSQNkAuEbVjz0rW49yB6x'),
(143, 244, '1398/10/28 15:11:57', 'u5BFXh8JDZ2d3CSWzHjnr0wosbV6UpQL'),
(144, 244, '1398/10/29 10:09:18', 'pWmE07DSLkBPC2wy1ZaHON8TnoUQGfrX'),
(145, 244, '1398/11/12 15:28:48', 'x4XNEotTr6FnhDPkGdwCepv2Qmac1jgH'),
(146, 244, '1398/11/13 08:02:26', 'kUNWAzgJCGl24eDiX7vFrdobpw6Y0MSc'),
(147, 244, '1398/11/13 09:05:02', '8oIf7bpDT6MQeZrNvx2ylzSEjqCK5Xs0'),
(148, 244, '1398/11/14 11:32:04', 'wJ8K6HgTdpf4kZNL2yiomWlvC3ABD5GM'),
(149, 244, '1398/11/15 09:41:30', 'fshuePobRCJBIVF4r1vt729EGkim0ZqH'),
(150, 244, '1398/11/16 09:32:11', 'rAgaQjNbtmCGYqDPcWKJvUTyBdI69427'),
(151, 244, '1398/11/16 17:15:29', 'UxBSK1XQ9Guvkhozeg5ZFAVjcsdIiDqW');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `PageId` bigint(20) NOT NULL,
  `PageTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PageContent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreateDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifyDateTime` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PageAgentId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `PostId` bigint(20) NOT NULL,
  `PostTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PostContent` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `PostImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreateDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ModifyDateTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PostAgentId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StateId` bigint(20) NOT NULL,
  `StateName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StateId`, `StateName`) VALUES
(1, 'آذربایجان شرقی'),
(2, 'آذربایجان غربی'),
(3, 'اردبيل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ايلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال و بختیاری'),
(10, 'خراسان جنوبی'),
(11, 'خراسان رضوی'),
(12, 'خراسان شمالی'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سیستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوين'),
(19, 'قم'),
(20, 'كردستان'),
(21, 'كرمان'),
(22, 'كرمانشاه'),
(23, 'کهگیلویه و بویراحمد'),
(24, 'گلستان'),
(25, 'گيلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مرکزی'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'يزد'),
(32, 'اقلیت های مذهبی');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`AgentId`),
  ADD UNIQUE KEY `AgentPhone` (`AgentPhone`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`CandidateId`),
  ADD UNIQUE KEY `MPNationalCode` (`CandidateNationalCode`);

--
-- Indexes for table `candidate_academic_background`
--
ALTER TABLE `candidate_academic_background`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_articles`
--
ALTER TABLE `candidate_articles`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_badge`
--
ALTER TABLE `candidate_badge`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_books`
--
ALTER TABLE `candidate_books`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_conference`
--
ALTER TABLE `candidate_conference`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_documents`
--
ALTER TABLE `candidate_documents`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_election_promise`
--
ALTER TABLE `candidate_election_promise`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_exam_payment`
--
ALTER TABLE `candidate_exam_payment`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_exam_request`
--
ALTER TABLE `candidate_exam_request`
  ADD PRIMARY KEY (`RequestId`);

--
-- Indexes for table `candidate_invention`
--
ALTER TABLE `candidate_invention`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_invite`
--
ALTER TABLE `candidate_invite`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_job_hostory`
--
ALTER TABLE `candidate_job_hostory`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_military`
--
ALTER TABLE `candidate_military`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_politic_record`
--
ALTER TABLE `candidate_politic_record`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_post`
--
ALTER TABLE `candidate_post`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_bank_account`
--
ALTER TABLE `candidate_price_bank_account`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_credit_debtor`
--
ALTER TABLE `candidate_price_credit_debtor`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_election`
--
ALTER TABLE `candidate_price_election`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_fee`
--
ALTER TABLE `candidate_price_fee`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_goods`
--
ALTER TABLE `candidate_price_goods`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_income`
--
ALTER TABLE `candidate_price_income`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_invest`
--
ALTER TABLE `candidate_price_invest`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_realestates`
--
ALTER TABLE `candidate_price_realestates`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_price_vehicle`
--
ALTER TABLE `candidate_price_vehicle`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_report_abuse`
--
ALTER TABLE `candidate_report_abuse`
  ADD PRIMARY KEY (`ReportId`);

--
-- Indexes for table `candidate_research`
--
ALTER TABLE `candidate_research`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_roles`
--
ALTER TABLE `candidate_roles`
  ADD PRIMARY KEY (`RoleId`);

--
-- Indexes for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_social_record`
--
ALTER TABLE `candidate_social_record`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_special`
--
ALTER TABLE `candidate_special`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_translation`
--
ALTER TABLE `candidate_translation`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_veteran`
--
ALTER TABLE `candidate_veteran`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `candidate_wordpress_accounts`
--
ALTER TABLE `candidate_wordpress_accounts`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityId`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ContentId`);

--
-- Indexes for table `content_category`
--
ALTER TABLE `content_category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `election_location`
--
ALTER TABLE `election_location`
  ADD PRIMARY KEY (`ElectionId`),
  ADD UNIQUE KEY `ElectionName` (`ElectionName`);

--
-- Indexes for table `election_location_city`
--
ALTER TABLE `election_location_city`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ExamId`);

--
-- Indexes for table `exam_places`
--
ALTER TABLE `exam_places`
  ADD PRIMARY KEY (`ExamPlaceId`);

--
-- Indexes for table `form_contact`
--
ALTER TABLE `form_contact`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `login_records`
--
ALTER TABLE `login_records`
  ADD PRIMARY KEY (`RowId`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`PageId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`PostId`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StateId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `AgentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `CandidateId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;
--
-- AUTO_INCREMENT for table `candidate_academic_background`
--
ALTER TABLE `candidate_academic_background`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;
--
-- AUTO_INCREMENT for table `candidate_articles`
--
ALTER TABLE `candidate_articles`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;
--
-- AUTO_INCREMENT for table `candidate_badge`
--
ALTER TABLE `candidate_badge`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `candidate_books`
--
ALTER TABLE `candidate_books`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT for table `candidate_conference`
--
ALTER TABLE `candidate_conference`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `candidate_documents`
--
ALTER TABLE `candidate_documents`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `candidate_election_promise`
--
ALTER TABLE `candidate_election_promise`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `candidate_exam_payment`
--
ALTER TABLE `candidate_exam_payment`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidate_exam_request`
--
ALTER TABLE `candidate_exam_request`
  MODIFY `RequestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `candidate_invention`
--
ALTER TABLE `candidate_invention`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `candidate_invite`
--
ALTER TABLE `candidate_invite`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidate_job_hostory`
--
ALTER TABLE `candidate_job_hostory`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;
--
-- AUTO_INCREMENT for table `candidate_military`
--
ALTER TABLE `candidate_military`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `candidate_politic_record`
--
ALTER TABLE `candidate_politic_record`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;
--
-- AUTO_INCREMENT for table `candidate_post`
--
ALTER TABLE `candidate_post`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `candidate_price_bank_account`
--
ALTER TABLE `candidate_price_bank_account`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `candidate_price_credit_debtor`
--
ALTER TABLE `candidate_price_credit_debtor`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `candidate_price_election`
--
ALTER TABLE `candidate_price_election`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `candidate_price_fee`
--
ALTER TABLE `candidate_price_fee`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `candidate_price_goods`
--
ALTER TABLE `candidate_price_goods`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `candidate_price_income`
--
ALTER TABLE `candidate_price_income`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `candidate_price_invest`
--
ALTER TABLE `candidate_price_invest`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `candidate_price_realestates`
--
ALTER TABLE `candidate_price_realestates`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `candidate_price_vehicle`
--
ALTER TABLE `candidate_price_vehicle`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `candidate_report_abuse`
--
ALTER TABLE `candidate_report_abuse`
  MODIFY `ReportId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `candidate_research`
--
ALTER TABLE `candidate_research`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `candidate_roles`
--
ALTER TABLE `candidate_roles`
  MODIFY `RoleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1786;
--
-- AUTO_INCREMENT for table `candidate_skills`
--
ALTER TABLE `candidate_skills`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;
--
-- AUTO_INCREMENT for table `candidate_social_record`
--
ALTER TABLE `candidate_social_record`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=581;
--
-- AUTO_INCREMENT for table `candidate_special`
--
ALTER TABLE `candidate_special`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT for table `candidate_translation`
--
ALTER TABLE `candidate_translation`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `candidate_veteran`
--
ALTER TABLE `candidate_veteran`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=871;
--
-- AUTO_INCREMENT for table `candidate_wordpress_accounts`
--
ALTER TABLE `candidate_wordpress_accounts`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=911;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `ContentId` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content_category`
--
ALTER TABLE `content_category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;
--
-- AUTO_INCREMENT for table `election_location`
--
ALTER TABLE `election_location`
  MODIFY `ElectionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
--
-- AUTO_INCREMENT for table `election_location_city`
--
ALTER TABLE `election_location_city`
  MODIFY `RowId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `ExamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `exam_places`
--
ALTER TABLE `exam_places`
  MODIFY `ExamPlaceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `form_contact`
--
ALTER TABLE `form_contact`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `login_records`
--
ALTER TABLE `login_records`
  MODIFY `RowId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `PageId` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `PostId` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StateId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
