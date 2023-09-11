-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 09:59 PM
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
-- Database: `learningcampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_holidays`
--

CREATE TABLE `academic_holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(150) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `academic_syllabi`
--

CREATE TABLE `academic_syllabi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addexamgrade`
--

CREATE TABLE `addexamgrade` (
  `addexamgrade_id` bigint(20) UNSIGNED NOT NULL,
  `classe` varchar(255) NOT NULL,
  `start_marks` int(11) NOT NULL,
  `end_marks` int(11) NOT NULL,
  `grade_letter` varchar(255) NOT NULL,
  `grade_point` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_contents`
--

CREATE TABLE `add_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_careers`
--

CREATE TABLE `all_careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `deadline` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_notices`
--

CREATE TABLE `all_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `notice` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `board_results`
--

CREATE TABLE `board_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_type` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `total_student` varchar(255) DEFAULT NULL,
  `passed` varchar(255) DEFAULT NULL,
  `passed_persentage` varchar(255) DEFAULT NULL,
  `a_plus` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch_details`
--

CREATE TABLE `branch_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_name` varchar(150) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `city` varchar(150) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `signature` varchar(50) DEFAULT NULL,
  `holiday` varchar(50) DEFAULT NULL,
  `map_iframe` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_details`
--

INSERT INTO `branch_details` (`id`, `short_name`, `branch_name`, `address`, `city`, `zip_code`, `phone`, `fax`, `email`, `signature`, `holiday`, `map_iframe`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CTGBranch', 'Chittagong Branch', 'Masterpara, Maijdee', 'Noakhali', '3800', '01817240585', NULL, 'jsjahidmini@gmail.com', NULL, 'Friday', NULL, '1', '2023-09-01 06:02:55', '2023-09-01 06:02:55'),
(3, 'NKBranch', 'Noakhali Branch', 'Masterpara, Maijdee', 'Noakhali', '3800', '01817240585', NULL, 'jsjahid215@gmail.com', NULL, 'Sunday', NULL, '1', '2023-09-01 06:03:32', '2023-09-01 06:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `breaking_news`
--

CREATE TABLE `breaking_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_type` varchar(255) NOT NULL,
  `class_rank` varchar(255) NOT NULL,
  `class_code` varchar(255) NOT NULL,
  `hasExtraSubject` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_works`
--

CREATE TABLE `class_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `class_work_title` varchar(255) NOT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `assign_date` date NOT NULL,
  `due_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employeetypes`
--

CREATE TABLE `employeetypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dsoa` int(11) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendences`
--

CREATE TABLE `employee_attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `in_time` varchar(255) DEFAULT NULL,
  `out_time` varchar(255) DEFAULT NULL,
  `punch_zone` varchar(255) DEFAULT NULL,
  `attendence_date` date NOT NULL,
  `employee_type` varchar(255) NOT NULL,
  `working_shift` varchar(255) NOT NULL,
  `employee_image` varchar(255) DEFAULT NULL,
  `employee_mobile` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `attendences_status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `empolyee_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_attendences`
--

INSERT INTO `employee_attendences` (`id`, `designation`, `employee_name`, `in_time`, `out_time`, `punch_zone`, `attendence_date`, `employee_type`, `working_shift`, `employee_image`, `employee_mobile`, `month`, `year`, `attendences_status`, `created_at`, `updated_at`, `empolyee_id`) VALUES
(1, 'Hed Teacher', 'Employe1/10009', '9.30', '12.00', 'punch', '2023-09-03', 'Full-time', 'S.M Sarowar', 'image', '123456789', 'September', 2023, '1', '2023-09-01 03:51:03', '2023-09-01 03:51:03', 1004),
(2, ' Teacher', 'Employe2/10987', '9.30', '12.00', 'punch', '2023-09-03', 'Half-time', 'S.M Sarowar', 'image', '123456789', 'September', 2023, '1', '2023-09-01 03:51:39', '2023-09-01 03:51:39', 1003),
(4, 'Hed Teacher', '[value-2]/0', '9.30', '12.00', 'punch', '2023-09-03', 'Full-time', 'S.M Sarowar', 'image', '123456789', 'September', 2023, '1', '2023-09-01 05:04:58', '2023-09-01 05:04:58', 10002),
(5, 'Hed Teacher', '[value-2]/0', '9.30', '12.00', 'punch', '2023-09-03', 'Half-time', 'S.M Sarowar', 'image', '123456789', 'September', 2023, '1', '2023-09-01 05:05:16', '2023-09-01 05:05:16', 10001);

-- --------------------------------------------------------

--
-- Table structure for table `employee_categoris`
--

CREATE TABLE `employee_categoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dsoa` int(11) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_educations`
--

CREATE TABLE `employee_educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noi` varchar(255) DEFAULT NULL,
  `emp_id` bigint(20) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `nod` varchar(255) DEFAULT NULL,
  `major_sub` varchar(255) DEFAULT NULL,
  `extqual` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_payscale_chat_infos`
--

CREATE TABLE `employee_payscale_chat_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_type` varchar(150) DEFAULT NULL,
  `head_type` varchar(150) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_payscale_general_infos`
--

CREATE TABLE `employee_payscale_general_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pay_scale_title` varchar(150) DEFAULT NULL,
  `employee_type` varchar(150) DEFAULT NULL,
  `basic_salary` varchar(255) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_pay_slip_prints`
--

CREATE TABLE `employee_pay_slip_prints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_type` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_personals`
--

CREATE TABLE `employee_personals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `national_id` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `matarial_status` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `present_add` text DEFAULT NULL,
  `permanant_add` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_professionals`
--

CREATE TABLE `employee_professionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `employeetype_id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `employee_idnumber` varchar(255) DEFAULT NULL,
  `designation_id` bigint(20) NOT NULL,
  `workingshift_id` bigint(20) NOT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `divice_serial` varchar(255) DEFAULT NULL,
  `rfid_card` varchar(255) DEFAULT NULL,
  `tracking_id` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `pre_inst` varchar(255) DEFAULT NULL,
  `pre_des` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_charts`
--

CREATE TABLE `employee_salary_charts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_type` varchar(255) DEFAULT NULL,
  `payroll_head` varchar(255) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_payments`
--

CREATE TABLE `employee_salary_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_type` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary_reports`
--

CREATE TABLE `employee_salary_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_type` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exampart`
--

CREATE TABLE `exampart` (
  `exampart_id` bigint(20) UNSIGNED NOT NULL,
  `exampart_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examterm`
--

CREATE TABLE `examterm` (
  `examterm_id` bigint(20) UNSIGNED NOT NULL,
  `examterm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `account_id` bigint(20) UNSIGNED NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `account_category` varchar(255) NOT NULL,
  `account_parents` varchar(255) NOT NULL,
  `account_code` varchar(255) NOT NULL,
  `account_head` varchar(255) NOT NULL,
  `account_period` varchar(255) NOT NULL,
  `has_child` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` bigint(20) UNSIGNED NOT NULL,
  `gender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_informations`
--

CREATE TABLE `general_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) DEFAULT NULL,
  `eiin_no` varchar(150) DEFAULT NULL,
  `institue_name` varchar(255) DEFAULT NULL,
  `slogan` varchar(150) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `favicon` varchar(50) DEFAULT NULL,
  `banner` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `why_choose_institute` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_works`
--

CREATE TABLE `home_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `home_work_title` varchar(255) NOT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `assign_date` date NOT NULL,
  `due_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hw_submits`
--

CREATE TABLE `hw_submits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `home_work_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `submit_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institute_settings`
--

CREATE TABLE `institute_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook_page` varchar(150) DEFAULT NULL,
  `youtube_video` varchar(150) DEFAULT NULL,
  `admin_theme` varchar(150) DEFAULT NULL,
  `website_theme` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_settings`
--

INSERT INTO `institute_settings` (`id`, `facebook_page`, `youtube_video`, `admin_theme`, `website_theme`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '#008B8B', 'Defult Theme', '2023-09-03 11:50:13', '2023-09-03 11:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `leason_plans`
--

CREATE TABLE `leason_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `leason_title` varchar(255) NOT NULL,
  `chapter` varchar(255) NOT NULL,
  `page_number` varchar(255) NOT NULL,
  `view_url` varchar(255) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `leason_plan_detail` varchar(255) NOT NULL,
  `assign_date` date NOT NULL,
  `due_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_modules`
--

CREATE TABLE `leave_modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employeetype_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `leave_days` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `live_classes`
--

CREATE TABLE `live_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `class_topic` varchar(255) NOT NULL,
  `class_date` date NOT NULL,
  `class_time` time NOT NULL,
  `duration` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_leaves`
--

CREATE TABLE `manage_leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_type` varchar(255) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `leave_type_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_days` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_entry_blank_sheet`
--

CREATE TABLE `marks_entry_blank_sheet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `exam_term` varchar(255) NOT NULL,
  `exam_part` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_entry_exam`
--

CREATE TABLE `marks_entry_exam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `exam_term` varchar(255) NOT NULL,
  `exam_part` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks_entry_subject`
--

CREATE TABLE `marks_entry_subject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `exam_term` varchar(255) NOT NULL,
  `exam_part` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mediums`
--

CREATE TABLE `mediums` (
  `medium_id` bigint(20) UNSIGNED NOT NULL,
  `medium_name` varchar(255) NOT NULL,
  `medium_code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menues`
--

CREATE TABLE `menues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `left_colum` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_06_123503_create_routines_table', 1),
(7, '2023_08_06_123557_create_classes_table', 1),
(8, '2023_08_06_123609_create_shifts_table', 1),
(9, '2023_08_06_123627_create_sections_table', 1),
(10, '2023_08_06_123638_create_teachers_table', 1),
(11, '2023_08_06_123651_create_subjects_table', 1),
(12, '2023_08_06_174816_create_leave_modules_table', 1),
(13, '2023_08_06_221216_create_employeetypes_table', 1),
(14, '2023_08_06_221314_create_designations_table', 1),
(15, '2023_08_06_231948_create_workingshifts_table', 1),
(16, '2023_08_07_153818_create_general_informations_table', 1),
(17, '2023_08_07_154356_create_manage_leaves_table', 1),
(18, '2023_08_07_161048_create_institute_settings_table', 1),
(19, '2023_08_07_191439_create_branch_details_table', 1),
(20, '2023_08_07_203500_create_academic_holidays_table', 1),
(21, '2023_08_09_170928_create_finance_table', 1),
(22, '2023_08_09_175501_create_payroll_heads_table', 1),
(23, '2023_08_09_191904_create_home_works_table', 1),
(24, '2023_08_09_192043_create_employee_payscale_general_infos', 1),
(25, '2023_08_09_192102_create_employee_payscale_chat_infos', 1),
(26, '2023_08_10_063409_create_class_works_table', 1),
(27, '2023_08_10_073211_create_leason_plans_table', 1),
(28, '2023_08_10_151817_create_academic_syllabi_table', 1),
(29, '2023_08_10_190311_create_live_classes_table', 1),
(30, '2023_08_11_194437_create_employee_salary_charts_table', 1),
(31, '2023_08_12_170743_create_hw_submits_table', 1),
(32, '2023_08_13_153541_create_my_groups_table', 1),
(33, '2023_08_13_153541_create_sms_groups_table', 1),
(34, '2023_08_13_194926_create_employee_salary_payments', 1),
(35, '2023_08_13_195051_create_employee_salary_reports_table', 1),
(36, '2023_08_13_195124_create_employee_pay_slip_prints_table', 1),
(37, '2023_08_14_191455_create_student_monthly_fees_table', 1),
(38, '2023_08_14_202756_create_student_fees_table', 1),
(39, '2023_08_14_210549_create_student_waviers_table', 1),
(40, '2023_08_15_164300_create_sms_contacts_table', 1),
(41, '2023_08_15_171552_create_sms_students_details_table', 1),
(42, '2023_08_15_171609_create_sms_employees_details_table', 1),
(43, '2023_08_15_171619_create_sms_custom_details_table', 1),
(44, '2023_08_15_180854_create_student_admission_fees_table', 1),
(45, '2023_08_15_200013_create_student_fee_collections_table', 1),
(46, '2023_08_16_220410_create_gender_table', 1),
(47, '2023_08_16_220529_create_religion_table', 1),
(48, '2023_08_16_235904_create_student_admission_table', 1),
(49, '2023_08_17_140036_create_exam_term_table', 1),
(50, '2023_08_17_140047_create_exam_part_table', 1),
(51, '2023_08_17_182312_create_student_attendences_table', 1),
(52, '2023_08_18_193936_create_sms_details_reports_table', 1),
(53, '2023_08_19_192119_create_mediums_table', 1),
(54, '2023_08_19_201833_create_groups_table', 1),
(55, '2023_08_19_214016_create_sessions_table', 1),
(56, '2023_08_20_094418_create_add_exam_grade_table', 1),
(57, '2023_08_20_193909_create_marks_entry_blank_sheet_table', 1),
(58, '2023_08_20_194335_create_marks_entry_blank_subject_table', 1),
(59, '2023_08_20_194631_create_marks_entry_exam_table', 1),
(60, '2023_08_23_085058_create_events_table', 1),
(61, '2023_08_23_143657_create_change_class_data_type_in_marks_entry_blank_sheet_table', 1),
(62, '2023_08_23_144920_create_change_class_data_type_in_marks_entry_blank_subject_table', 1),
(63, '2023_08_23_145148_create_change_class_data_type_in_marks_entry_exam_table', 1),
(64, '2023_08_29_180543_create_permission_tables', 1),
(65, '2023_08_07_052813_create_employee_professionals_table', 2),
(66, '2023_08_07_052943_create_employee_personals_table', 2),
(67, '2023_08_07_053011_create_employee_educations_table', 2),
(68, '2023_08_08_183616_create_recivebouchers_table', 2),
(69, '2023_08_08_184121_create_paymentbouchers_table', 2),
(70, '2023_08_15_174157_create_slide_shows_table', 2),
(71, '2023_08_15_174443_create_messages_table', 2),
(72, '2023_08_15_174525_create_menues_table', 2),
(73, '2023_08_15_174554_create_breaking_news_table', 2),
(74, '2023_08_15_174637_create_add_contents_table', 2),
(75, '2023_08_15_174732_create_albums_table', 2),
(76, '2023_08_15_174827_create_galleries_table', 2),
(77, '2023_08_15_174935_create_news_table', 2),
(78, '2023_08_15_175223_create_all_notices_table', 3),
(79, '2023_08_15_175312_create_all_careers_table', 3),
(80, '2023_08_15_175405_create_board_results_table', 3),
(81, '2023_08_15_175425_create_links_table', 3),
(82, '2023_08_15_175509_create_social_media_table', 3),
(83, '2023_08_31_173442_create_employee_attendences_table', 3),
(84, '2023_09_01_165555_create_submenuses_table', 3),
(85, '2023_09_01_171214_create_employee_categoris_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `my_groups`
--

CREATE TABLE `my_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_img` varchar(255) DEFAULT NULL,
  `group_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `news` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentbouchers`
--

CREATE TABLE `paymentbouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `boucher_no` varchar(255) DEFAULT NULL,
  `transaction_date` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `select_head` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_heads`
--

CREATE TABLE `payroll_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories` varchar(150) DEFAULT NULL,
  `absent_deductions` varchar(150) DEFAULT NULL,
  `parents` varchar(255) DEFAULT NULL,
  `heads` varchar(255) DEFAULT NULL,
  `payroll_code` varchar(150) DEFAULT NULL,
  `payroll_period` varchar(255) DEFAULT NULL,
  `has_child` varchar(150) DEFAULT NULL,
  `status` varchar(150) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', 'dashboard', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(2, 'institute', 'web', 'global_settings_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(3, 'branch', 'web', 'global_settings_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(4, 'sms_setting', 'web', 'global_settings_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(5, 'academic_holiday', 'web', 'global_settings_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(6, 'all_session', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(7, 'all_medium', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(8, 'all_shift', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(9, 'all_class', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(10, 'all_section', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(11, 'all_group', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(12, 'all_subject', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(13, 'academic_calender', 'web', 'academic_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(14, 'student_admission', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(15, 'print_admission_form', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(16, 'current_student_list', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(17, 'archive_student_list', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(18, 'current_student_search', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(19, 'archive_student_search', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(20, 'student_switch_process', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(21, 'student_migration_process', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(22, 'print_student_id_card', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(23, 'student_biometric_export', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(24, 'print_student_testimonial', 'web', 'student_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(25, 'general_routine', 'web', 'routine_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(26, 'dynamic_routine', 'web', 'routine_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(27, 'view_routine', 'web', 'routine_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(28, 'todays_attendence_student', 'web', 'student_attendence_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(29, 'manual_attendence_student', 'web', 'student_attendence_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(30, 'absent_student_list_student', 'web', 'student_attendence_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(31, 'daily_attendence_summery_student', 'web', 'student_attendence_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(32, 'monthly_attendence_summery_student', 'web', 'student_attendence_module', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(33, 'todays_attendence_employee', 'web', 'employee_attendence_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(34, 'manual_attendence_employee', 'web', 'employee_attendence_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(35, 'attendence_details_employee', 'web', 'employee_attendence_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(36, 'daily_attendence_summery_employee', 'web', 'employee_attendence_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(37, 'monthly_attendence_summery_employee', 'web', 'employee_attendence_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(38, 'employee_type', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(39, 'all_designation', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(40, 'working_shift', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(41, 'add_employee', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(42, 'all_employee_list', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(43, 'employee_search', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(44, 'employee_id_card', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(45, 'employee_export', 'web', 'hr_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(46, 'leave_types', 'web', 'leave_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(47, 'leave_entry', 'web', 'leave_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(48, 'manage_leaves', 'web', 'leave_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(49, 'payroll_head', 'web', 'payroll_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(50, 'employee_payscale', 'web', 'payroll_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(51, 'employee_salary_chart', 'web', 'payroll_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(52, 'generate_salary_chart', 'web', 'payroll_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(53, 'employee_salary_payment', 'web', 'payroll_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(54, 'employee_salary_report', 'web', 'payroll_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(55, 'employee_payslip_print', 'web', 'payroll_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(56, 'grade_points_exam', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(57, 'exam_terms', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(58, 'exam_part', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(59, 'assign_exam', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(60, 'exam_routine', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(61, 'exam_eligibilities', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(62, 'exam_seat_plan', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(63, 'exam_admit_card', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(64, 'exam_attendence_blank', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(65, 'exam_attendence_subject', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(66, 'exam_attendence_exam', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(67, 'manage_working_days', 'web', 'exam_setting_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(68, 'grade_points_result', 'web', 'result_module', '2023-09-01 06:00:40', '2023-09-01 06:00:40'),
(69, 'marks_blank_sheet', 'web', 'result_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(70, 'marks_entry_subject', 'web', 'result_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(71, 'marks_entry_exam', 'web', 'result_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(72, 'students_merit_list', 'web', 'result_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(73, 'students_report_card', 'web', 'result_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(74, 'students_wise_transcript', 'web', 'result_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(75, 'account_head', 'web', 'finance_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(76, 'add_account_head', 'web', 'finance_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(77, 'admission_fee', 'web', 'student_accounts_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(78, 'monthly_fee', 'web', 'student_accounts_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(79, 'student_fee', 'web', 'student_accounts_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(80, 'student_waiver', 'web', 'student_accounts_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(81, 'fee_collection', 'web', 'student_accounts_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(82, 'fee_recollection', 'web', 'student_accounts_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(83, 'print_collection_invoice', 'web', 'student_accounts_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(84, 'receive_voucher', 'web', 'accounts_voucher_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(85, 'payment_voucher', 'web', 'accounts_voucher_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(86, 'daily_collection', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(87, 'fees_collection', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(88, 'student_dues', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(89, 'student_ledger', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(90, 'student_weiver', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(91, 'accounts_ledger', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(92, 'trial_balance', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(93, 'cash_book', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(94, 'bank_book', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(95, 'balance_sheet', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(96, 'payable_or_receivable', 'web', 'finance_reports_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(97, 'live_class', 'web', 'learning_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(98, 'home_work_list', 'web', 'learning_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(99, 'hw_submit', 'web', 'learning_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(100, 'submitted_hw_list', 'web', 'learning_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(101, 'class_work_list', 'web', 'learning_module', '2023-09-01 06:00:41', '2023-09-01 06:00:41'),
(102, 'cw_submitted', 'web', 'learning_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(103, 'leason_plan_list', 'web', 'learning_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(104, 'academic_syllabus', 'web', 'learning_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(105, 'slideshow_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(106, 'message_corner', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(107, 'all_menu_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(108, 'all_content_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(109, 'breaking_news', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(110, 'all_album_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(111, 'all_gallery_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(112, 'all_news_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(113, 'all_events_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(114, 'all_notice_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(115, 'all_career_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(116, 'board_result_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(117, 'usefull_link_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(118, 'social_media_list', 'web', 'website_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(119, 'all_user_list', 'web', 'user_management_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(120, 'manage_user_role', 'web', 'user_management_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(121, 'sms_user_student', 'web', 'user_management_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(122, 'sms_user_employee', 'web', 'user_management_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(123, 'my_groups', 'web', 'promotional_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(124, 'my_contacts', 'web', 'promotional_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(125, 'import_contacts', 'web', 'promotional_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(126, 'send_custom_sms', 'web', 'promotional_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42'),
(127, 'send_details_report', 'web', 'promotional_module', '2023-09-01 06:00:42', '2023-09-01 06:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recivebouchers`
--

CREATE TABLE `recivebouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `boucher_no` varchar(255) DEFAULT NULL,
  `transaction_date` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `select_head` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `religion_id` bigint(20) UNSIGNED NOT NULL,
  `religion_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'web', '2023-09-01 06:00:39', '2023-09-01 06:00:39'),
(2, 'Admin', 'web', '2023-09-01 06:05:28', '2023-09-01 06:05:28'),
(3, 'Teacher', 'web', '2023-09-01 06:06:53', '2023-09-01 06:06:53'),
(4, 'Employee', 'web', '2023-09-01 06:07:40', '2023-09-01 06:07:40'),
(5, 'user', 'web', '2023-09-02 20:35:57', '2023-09-02 20:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 3),
(7, 1),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3),
(13, 1),
(13, 3),
(13, 5),
(14, 1),
(14, 2),
(14, 3),
(14, 5),
(15, 1),
(15, 3),
(15, 5),
(16, 1),
(16, 2),
(16, 3),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(18, 2),
(18, 3),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 2),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(26, 1),
(26, 3),
(27, 1),
(27, 2),
(27, 3),
(27, 5),
(28, 1),
(28, 3),
(29, 1),
(29, 3),
(30, 1),
(30, 3),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 2),
(33, 4),
(34, 1),
(34, 2),
(34, 4),
(35, 1),
(35, 2),
(35, 4),
(36, 1),
(36, 2),
(36, 4),
(37, 1),
(37, 2),
(37, 4),
(38, 1),
(38, 2),
(38, 4),
(39, 1),
(39, 2),
(39, 4),
(40, 1),
(40, 2),
(40, 4),
(41, 1),
(41, 2),
(41, 4),
(42, 1),
(42, 2),
(42, 4),
(43, 1),
(43, 2),
(43, 4),
(44, 1),
(44, 2),
(44, 4),
(45, 1),
(45, 2),
(45, 4),
(46, 1),
(47, 1),
(47, 5),
(48, 1),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 3),
(57, 1),
(57, 3),
(57, 5),
(58, 1),
(58, 3),
(58, 5),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(60, 5),
(61, 1),
(61, 3),
(61, 5),
(62, 1),
(62, 3),
(62, 5),
(63, 1),
(63, 3),
(63, 5),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 2),
(75, 4),
(76, 1),
(76, 2),
(76, 4),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(86, 4),
(87, 1),
(87, 2),
(87, 4),
(88, 1),
(88, 2),
(88, 4),
(89, 1),
(89, 2),
(89, 4),
(90, 1),
(90, 2),
(90, 4),
(91, 1),
(91, 2),
(91, 4),
(92, 1),
(92, 2),
(92, 4),
(93, 1),
(93, 2),
(93, 4),
(94, 1),
(94, 2),
(94, 4),
(95, 1),
(95, 2),
(95, 4),
(96, 1),
(96, 2),
(96, 4),
(97, 1),
(97, 3),
(98, 1),
(98, 3),
(98, 5),
(99, 1),
(99, 3),
(99, 5),
(100, 1),
(100, 3),
(100, 5),
(101, 1),
(101, 3),
(102, 1),
(102, 3),
(103, 1),
(103, 3),
(103, 5),
(104, 1),
(104, 3),
(104, 5),
(105, 1),
(105, 2),
(106, 1),
(106, 2),
(107, 1),
(107, 2),
(108, 1),
(108, 2),
(109, 1),
(109, 2),
(110, 1),
(110, 2),
(111, 1),
(111, 2),
(112, 1),
(112, 2),
(113, 1),
(113, 2),
(114, 1),
(114, 2),
(115, 1),
(115, 2),
(116, 1),
(116, 2),
(117, 1),
(117, 2),
(118, 1),
(118, 2),
(119, 1),
(119, 2),
(120, 1),
(121, 1),
(121, 2),
(122, 1),
(122, 2),
(123, 1),
(123, 2),
(123, 3),
(123, 4),
(124, 1),
(124, 2),
(125, 1),
(125, 2),
(125, 3),
(125, 4),
(126, 1),
(126, 2),
(126, 3),
(126, 4),
(127, 1),
(127, 2);

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `routine_id` bigint(20) UNSIGNED NOT NULL,
  `routine_day` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_type` varchar(255) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `break_time` varchar(255) NOT NULL,
  `start_break_time` varchar(255) NOT NULL,
  `end_break_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `class_type` varchar(255) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `session_name` int(11) NOT NULL,
  `session_code` int(11) NOT NULL,
  `is_fiscal_year` varchar(255) NOT NULL,
  `is_current_session` varchar(255) NOT NULL,
  `result_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `class_type` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `green_limit` varchar(255) NOT NULL,
  `orange_limit` varchar(255) NOT NULL,
  `red_limit` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide_shows`
--

CREATE TABLE `slide_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_contacts`
--

CREATE TABLE `sms_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `contact_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_custom_details`
--

CREATE TABLE `sms_custom_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `sms_body` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_details_reports`
--

CREATE TABLE `sms_details_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sms_type` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `sms_body` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_employees_details`
--

CREATE TABLE `sms_employees_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `sms_body` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_groups`
--

CREATE TABLE `sms_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_img` varchar(255) NOT NULL,
  `group_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_students_details`
--

CREATE TABLE `sms_students_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `sms_body` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Session` int(11) NOT NULL,
  `Shift` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `migrated_session` varchar(255) NOT NULL,
  `migrated_class` varchar(255) NOT NULL,
  `migrated_shift` varchar(255) NOT NULL,
  `migrated_section` varchar(255) NOT NULL,
  `DeviceSerialMAC` int(11) DEFAULT NULL,
  `StudentId` int(11) NOT NULL,
  `TrackingID` int(11) DEFAULT NULL,
  `RFIDCardNo` varchar(255) DEFAULT NULL,
  `AttendanceSMS` tinyint(1) DEFAULT NULL,
  `NameEnglish` varchar(255) NOT NULL,
  `BloodGroup` varchar(255) NOT NULL,
  `NameBengali` varchar(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `DeviceSerialMACPersonal` int(11) DEFAULT NULL,
  `StudentIdPersonal` int(11) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PresentAddress` varchar(255) NOT NULL,
  `ParmanantAddress` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `FatherPhone` varchar(255) NOT NULL,
  `MotherPhone` varchar(255) NOT NULL,
  `FatherNID` varchar(255) DEFAULT NULL,
  `MotherNID` varchar(255) DEFAULT NULL,
  `FatherProfession` varchar(255) NOT NULL,
  `MotherProfession` varchar(255) NOT NULL,
  `FatherDesignation` varchar(255) NOT NULL,
  `MotherDesignation` varchar(255) NOT NULL,
  `OfficeNameAddressFather` varchar(255) DEFAULT NULL,
  `OfficeNameAddressMother` varchar(255) DEFAULT NULL,
  `FatherOfficeContactNo` varchar(255) DEFAULT NULL,
  `MotherOfficeContactNo` varchar(255) DEFAULT NULL,
  `FatherPhoto` varchar(255) DEFAULT NULL,
  `MotherPhoto` varchar(255) DEFAULT NULL,
  `GuardianType` varchar(255) DEFAULT NULL,
  `GuardianProfession` varchar(255) DEFAULT NULL,
  `GuardianName` varchar(255) NOT NULL,
  `GuardianDesignation` varchar(255) DEFAULT NULL,
  `RelationWithStudent` varchar(255) DEFAULT NULL,
  `GuardianOfficeContactNo` varchar(255) DEFAULT NULL,
  `GuardianPhone` varchar(255) NOT NULL,
  `OfficeNameAddress` varchar(255) NOT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_admission_fees`
--

CREATE TABLE `student_admission_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` int(11) NOT NULL,
  `student_class` varchar(255) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `student_name_id` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_attendences`
--

CREATE TABLE `student_attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_in` int(11) DEFAULT NULL,
  `time_out` int(11) DEFAULT NULL,
  `punch_in_zone` varchar(255) DEFAULT NULL,
  `section` varchar(255) NOT NULL,
  `session` int(11) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_mobil` int(11) NOT NULL,
  `absent_status` varchar(255) NOT NULL DEFAULT '1',
  `verson` varchar(255) DEFAULT NULL,
  `middle_punches` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_roll` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attendences`
--

INSERT INTO `student_attendences` (`id`, `student_id`, `roll`, `class`, `student_name`, `shift`, `date`, `time_in`, `time_out`, `punch_in_zone`, `section`, `session`, `guardian_name`, `guardian_mobil`, `absent_status`, `verson`, `middle_punches`, `created_at`, `updated_at`, `student_roll`) VALUES
(1, 1083, 109, 'Six', 'Student50', 'Day', '2015-01-07', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '0', 'Bangla', 'middle', '2023-08-07 06:15:26', '2023-08-08 21:06:19', 0),
(2, 101, 1, 'Six', 'Student1', 'Day', '2023-08-08', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '1', 'Bangla', 'middle', '2023-08-07 06:18:53', '2023-08-08 20:31:35', 0),
(3, 102, 2, 'Six', 'Student12', 'Day', '2023-08-01', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '0', 'Bangla', 'middle', '2023-08-07 06:20:56', '2023-08-08 21:06:33', 0),
(4, 103, 3, 'SixEn', 'Student12', 'Morning', '2023-08-08', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '0', 'English', 'middle', '2023-08-07 06:28:37', '2023-08-07 06:28:37', 0),
(5, 104, 32, 'FiveEn', 'Student12', 'Morning', '2023-08-07', 9, 12, 'punch', 'B', 2019, 'Student1', 1228505, '0', 'English', 'middle', '2023-08-07 06:29:50', '2023-08-07 06:29:50', 0),
(6, 105, 398, 'FiveEn', 'Student19', 'Morning', '2023-08-08', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '0', 'English', 'middle', '2023-08-07 06:34:27', '2023-08-07 06:34:27', 0),
(7, 108, 3098, 'FiveEn', 'Student19', 'Morning', '2023-08-08', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '0', 'English', 'middle', '2023-08-07 07:40:00', '2023-08-07 07:40:00', 0),
(8, 1008, 398, 'FiveEn', 'Student19', 'Morning', '2023-08-08', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '0', 'English', 'middle', '2023-08-07 07:40:51', '2023-08-07 07:40:51', 0),
(9, 10988, 38, 'FiveEn', 'Student19', 'Morning', '2023-08-08', 9, 12, 'punch', 'A', 2019, 'Student1', 1228505, '0', 'English', 'middle', '2023-08-07 09:17:56', '2023-08-07 09:17:56', 0),
(10, 8008, 80, 'Six', 'Student9', 'Morning', '2023-09-03', 9, 12, 'punch', 'B', 2019, 'Student1', 1228505, '1', 'English', 'middle', '2023-08-07 20:40:38', '2023-08-07 20:40:38', 6),
(11, 808, 860, 'Six', 'Student098', 'Morning', '2023-09-03', 9, 12, 'punch', 'B', 2019, 'Student1', 1228505, '1', 'English', 'middle', '2023-08-07 20:50:16', '2023-08-07 20:50:16', 5),
(12, 808, 860, 'Bangla_Six', 'Student098', 'Morning', '2023-09-03', 9, 12, 'punch', 'B', 2019, 'Student1', 1228505, '1', 'English', 'middle', '2023-08-19 03:16:21', '2023-08-19 07:17:10', 4),
(13, 8008, 86, 'Bangla_Six', 'Student98', 'Morning', '2023-09-03', 9, 12, 'punch', 'B', 2019, 'Student1', 2147483647, '1', 'English', 'middle', '2023-08-19 03:18:13', '2023-08-25 21:24:05', 3),
(14, 8208, 860, 'Bangla_Six', 'Student08', 'Morning', '2023-09-03', 9, 12, 'punch', 'B', 2023, 'Student1', 2147483647, '1', 'English', 'middle', '2023-08-19 03:19:34', '2023-08-25 21:24:05', 2),
(15, 82089, 860, 'Bangla_Six', 'Student08', 'Morning', '2023-09-03', 9, 12, 'punch', 'B', 2023, 'Student1', 2147483647, '1', 'English', 'middle', '2023-08-19 06:40:33', '2023-08-25 21:25:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` int(11) NOT NULL,
  `student_class` varchar(255) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `student_name_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_collections`
--

CREATE TABLE `student_fee_collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` int(11) NOT NULL,
  `student_class` varchar(255) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `fees_month` varchar(255) NOT NULL,
  `student_name_id` varchar(255) NOT NULL,
  `total_fee` int(11) NOT NULL,
  `paid_fee` int(11) NOT NULL,
  `due_fee` int(11) NOT NULL,
  `folio_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_monthly_fees`
--

CREATE TABLE `student_monthly_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` int(11) NOT NULL,
  `student_class` varchar(255) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `student_name_id` varchar(255) NOT NULL,
  `Education` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_waviers`
--

CREATE TABLE `student_waviers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` int(11) NOT NULL,
  `student_class` varchar(255) NOT NULL,
  `shift_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `student_name_id` varchar(255) NOT NULL,
  `fees_type` varchar(255) NOT NULL,
  `waived_month` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `wavier` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `class_type` varchar(255) NOT NULL,
  `subject_Type` varchar(255) NOT NULL,
  `is_optional` varchar(255) NOT NULL,
  `combined_subject` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `full_marks` varchar(255) NOT NULL,
  `result_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submenuses`
--

CREATE TABLE `submenuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_menu` bigint(20) NOT NULL,
  `sub_menu` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT 'user',
  `branch_id` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneNumber`, `role`, `branch_id`, `branch_name`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super_admin@learningcampus.com', '01817240585', 'super_admin', NULL, NULL, NULL, '$2y$10$b.ivHdhHhSyDn50N1sdZ7.xZ7bc8U9aw5xdIvYtBUV/06vm8Uavpu', NULL, '2023-09-01 05:59:23', '2023-09-01 05:59:23'),
(2, 'John Doe', 'admin@learningcampus.com', '01817240585', 'Admin', '3', 'Noakhali Branch', NULL, '$2y$10$BBP6dsycJ8tSRxweX.gwjektpDiR.nHIIGniBiUE0KHyu95uoBM4W', NULL, '2023-09-01 06:08:50', '2023-09-01 06:08:50'),
(3, 'William Shakespeer', 'teacher@learningcampus.com', '01817240585', 'Teacher', '1', 'Chittagong Branch', NULL, '$2y$10$19RCczquC92bzoSxgHoxu.sLPHfwZjuyu.8cTcYc4KGD8UUF4Rj/K', NULL, '2023-09-01 06:09:42', '2023-09-01 06:09:42'),
(4, 'Anna Frank', 'employee@learningcampus.com', '01817240585', 'Employee', '1', 'Chittagong Branch', NULL, '$2y$10$j6kPPb1bRwTe65e/P4d00uZ7e0BNwhjdDnKgQCaxOxtEtrrqPvT/i', NULL, '2023-09-01 06:10:12', '2023-09-01 06:10:12'),
(5, 'Sultan Ahmed', 'jsjahid796@gmail.com', '01817240585', 'user', '1', 'Chittagong Branch', NULL, '$2y$10$2nZksW.ay.tEQtHB/j9fieOZX3hDyrSueM88nB.33tIhuQ3EReQD.', NULL, '2023-09-02 20:37:59', '2023-09-02 20:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `workingshifts`
--

CREATE TABLE `workingshifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `green_limit` varchar(255) DEFAULT NULL,
  `orange_limit` varchar(255) DEFAULT NULL,
  `red_limit` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_holidays`
--
ALTER TABLE `academic_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `academic_syllabi`
--
ALTER TABLE `academic_syllabi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addexamgrade`
--
ALTER TABLE `addexamgrade`
  ADD PRIMARY KEY (`addexamgrade_id`);

--
-- Indexes for table `add_contents`
--
ALTER TABLE `add_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_careers`
--
ALTER TABLE `all_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_notices`
--
ALTER TABLE `all_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_results`
--
ALTER TABLE `board_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_details`
--
ALTER TABLE `branch_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch_details_email_unique` (`email`);

--
-- Indexes for table `breaking_news`
--
ALTER TABLE `breaking_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_works`
--
ALTER TABLE `class_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeetypes`
--
ALTER TABLE `employeetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_attendences`
--
ALTER TABLE `employee_attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_categoris`
--
ALTER TABLE `employee_categoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_educations`
--
ALTER TABLE `employee_educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_payscale_chat_infos`
--
ALTER TABLE `employee_payscale_chat_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_payscale_general_infos`
--
ALTER TABLE `employee_payscale_general_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_pay_slip_prints`
--
ALTER TABLE `employee_pay_slip_prints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_personals`
--
ALTER TABLE `employee_personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_professionals`
--
ALTER TABLE `employee_professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary_charts`
--
ALTER TABLE `employee_salary_charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary_payments`
--
ALTER TABLE `employee_salary_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_salary_reports`
--
ALTER TABLE `employee_salary_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exampart`
--
ALTER TABLE `exampart`
  ADD PRIMARY KEY (`exampart_id`);

--
-- Indexes for table `examterm`
--
ALTER TABLE `examterm`
  ADD PRIMARY KEY (`examterm_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `general_informations`
--
ALTER TABLE `general_informations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `general_informations_email_unique` (`email`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `home_works`
--
ALTER TABLE `home_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hw_submits`
--
ALTER TABLE `hw_submits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_settings`
--
ALTER TABLE `institute_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leason_plans`
--
ALTER TABLE `leason_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_modules`
--
ALTER TABLE `leave_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_classes`
--
ALTER TABLE `live_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_leaves`
--
ALTER TABLE `manage_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks_entry_blank_sheet`
--
ALTER TABLE `marks_entry_blank_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks_entry_exam`
--
ALTER TABLE `marks_entry_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks_entry_subject`
--
ALTER TABLE `marks_entry_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediums`
--
ALTER TABLE `mediums`
  ADD PRIMARY KEY (`medium_id`);

--
-- Indexes for table `menues`
--
ALTER TABLE `menues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `my_groups`
--
ALTER TABLE `my_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `paymentbouchers`
--
ALTER TABLE `paymentbouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payroll_heads`
--
ALTER TABLE `payroll_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recivebouchers`
--
ALTER TABLE `recivebouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`routine_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`shift_id`);

--
-- Indexes for table `slide_shows`
--
ALTER TABLE `slide_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_contacts`
--
ALTER TABLE `sms_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_custom_details`
--
ALTER TABLE `sms_custom_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_details_reports`
--
ALTER TABLE `sms_details_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_employees_details`
--
ALTER TABLE `sms_employees_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_groups`
--
ALTER TABLE `sms_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_students_details`
--
ALTER TABLE `sms_students_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission_fees`
--
ALTER TABLE `student_admission_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendences`
--
ALTER TABLE `student_attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fees`
--
ALTER TABLE `student_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_fee_collections`
--
ALTER TABLE `student_fee_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_monthly_fees`
--
ALTER TABLE `student_monthly_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_waviers`
--
ALTER TABLE `student_waviers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `submenuses`
--
ALTER TABLE `submenuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workingshifts`
--
ALTER TABLE `workingshifts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_holidays`
--
ALTER TABLE `academic_holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `academic_syllabi`
--
ALTER TABLE `academic_syllabi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addexamgrade`
--
ALTER TABLE `addexamgrade`
  MODIFY `addexamgrade_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_contents`
--
ALTER TABLE `add_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_careers`
--
ALTER TABLE `all_careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_notices`
--
ALTER TABLE `all_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `board_results`
--
ALTER TABLE `board_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_details`
--
ALTER TABLE `branch_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `breaking_news`
--
ALTER TABLE `breaking_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_works`
--
ALTER TABLE `class_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employeetypes`
--
ALTER TABLE `employeetypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_attendences`
--
ALTER TABLE `employee_attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_categoris`
--
ALTER TABLE `employee_categoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_educations`
--
ALTER TABLE `employee_educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_payscale_chat_infos`
--
ALTER TABLE `employee_payscale_chat_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_payscale_general_infos`
--
ALTER TABLE `employee_payscale_general_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_pay_slip_prints`
--
ALTER TABLE `employee_pay_slip_prints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_personals`
--
ALTER TABLE `employee_personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_professionals`
--
ALTER TABLE `employee_professionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_salary_charts`
--
ALTER TABLE `employee_salary_charts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_salary_payments`
--
ALTER TABLE `employee_salary_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_salary_reports`
--
ALTER TABLE `employee_salary_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exampart`
--
ALTER TABLE `exampart`
  MODIFY `exampart_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examterm`
--
ALTER TABLE `examterm`
  MODIFY `examterm_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `account_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_informations`
--
ALTER TABLE `general_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_works`
--
ALTER TABLE `home_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hw_submits`
--
ALTER TABLE `hw_submits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institute_settings`
--
ALTER TABLE `institute_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leason_plans`
--
ALTER TABLE `leason_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_modules`
--
ALTER TABLE `leave_modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `live_classes`
--
ALTER TABLE `live_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_leaves`
--
ALTER TABLE `manage_leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks_entry_blank_sheet`
--
ALTER TABLE `marks_entry_blank_sheet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks_entry_exam`
--
ALTER TABLE `marks_entry_exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks_entry_subject`
--
ALTER TABLE `marks_entry_subject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediums`
--
ALTER TABLE `mediums`
  MODIFY `medium_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menues`
--
ALTER TABLE `menues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `my_groups`
--
ALTER TABLE `my_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentbouchers`
--
ALTER TABLE `paymentbouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll_heads`
--
ALTER TABLE `payroll_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recivebouchers`
--
ALTER TABLE `recivebouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `religion_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `routine_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `shift_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide_shows`
--
ALTER TABLE `slide_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_contacts`
--
ALTER TABLE `sms_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_custom_details`
--
ALTER TABLE `sms_custom_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_details_reports`
--
ALTER TABLE `sms_details_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_employees_details`
--
ALTER TABLE `sms_employees_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_groups`
--
ALTER TABLE `sms_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_students_details`
--
ALTER TABLE `sms_students_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_admission_fees`
--
ALTER TABLE `student_admission_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_attendences`
--
ALTER TABLE `student_attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_fees`
--
ALTER TABLE `student_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_fee_collections`
--
ALTER TABLE `student_fee_collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_monthly_fees`
--
ALTER TABLE `student_monthly_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_waviers`
--
ALTER TABLE `student_waviers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submenuses`
--
ALTER TABLE `submenuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workingshifts`
--
ALTER TABLE `workingshifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
