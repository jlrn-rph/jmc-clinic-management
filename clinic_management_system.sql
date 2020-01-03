-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 03:48 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ap_pxName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_regDate` date NOT NULL,
  `ap_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_doctor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ap_specialist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ap_reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consults`
--

CREATE TABLE `consults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patients_id` bigint(20) UNSIGNED NOT NULL,
  `con_dateSxStart` date NOT NULL,
  `con_height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_bp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `con_symptom` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_diagnosis` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dr_regNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_regDate` date NOT NULL,
  `dr_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dr_specialist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_dob` date NOT NULL,
  `dr_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_timeIn` time NOT NULL,
  `dr_timeOut` time NOT NULL,
  `dr_daysAvail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dr_status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `it_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `it_inCount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `it_curCount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laboratories`
--

CREATE TABLE `laboratories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lab_regNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_regDate` date NOT NULL,
  `lab_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_dob` date NOT NULL,
  `lab_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_test` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lab_status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_tests`
--

CREATE TABLE `lab_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lt_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lt_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_28_105929_create_roles_table', 1),
(5, '2019_12_28_140755_create_specialists_table', 1),
(6, '2019_12_30_124909_create_patients_table', 1),
(7, '2019_12_30_140730_create_appointments_table', 1),
(8, '2019_12_30_152621_create_consults_table', 1),
(9, '2019_12_30_161704_create_doctors_table', 1),
(10, '2019_12_30_162352_create_prescriptions_table', 1),
(11, '2019_12_31_082226_create_schedules_table', 1),
(12, '2019_12_31_093619_create_laboratories_table', 1),
(13, '2019_12_31_104453_create_lab_tests_table', 1),
(14, '2019_12_31_110920_create_payments_table', 1),
(15, '2019_12_31_120008_create_items_table', 1),
(16, '2019_12_31_125826_create_suppliers_table', 1),
(17, '2019_12_31_133125_create_purchases_table', 1),
(18, '2019_12_31_135403_create_return_purchases_table', 1);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `px_regNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `px_regDate` date NOT NULL,
  `px_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `px_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `px_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `px_dob` date NOT NULL,
  `px_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `px_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `px_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `px_doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `px_status` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `px_regNumber`, `px_regDate`, `px_image`, `px_name`, `px_address`, `px_dob`, `px_gender`, `px_contact`, `px_email`, `px_doctor`, `px_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-01-02', NULL, 'New patient', 'malabon', '1996-06-02', 'Female', '09090990090', 'patient@patient.com', 'Dr. Chari', 1, NULL, '2020-01-02 00:41:58', '2020-01-02 00:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pay_regNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_regDate` date NOT NULL,
  `pay_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_admission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_consultation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_others` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_subtotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_vat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rx_generic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rx_brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rx_freq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rx_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rx_instruct` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pur_date` date NOT NULL,
  `pur_billNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pur_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pur_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pur_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pur_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return_purchases`
--

CREATE TABLE `return_purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ret_date` date NOT NULL,
  `ret_billNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ret_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ret_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ret_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ret_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sched_doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sched_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sched_fromTime` time NOT NULL,
  `sched_toTime` time NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

CREATE TABLE `specialists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sup_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sup_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '4',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', '4', 'admin@admin.com', NULL, '$2y$10$0yhsBUBF6iNRvQKOZlhEced3hTOa6W/w8PAd8iRKSvkd28KecL4Iq', NULL, NULL, '2020-01-02 00:42:36', '2020-01-02 00:42:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consults`
--
ALTER TABLE `consults`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consults_patients_id_index` (`patients_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_dr_email_unique` (`dr_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratories`
--
ALTER TABLE `laboratories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `laboratories_lab_email_unique` (`lab_email`);

--
-- Indexes for table `lab_tests`
--
ALTER TABLE `lab_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_px_email_unique` (`px_email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_purchases`
--
ALTER TABLE `return_purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialists`
--
ALTER TABLE `specialists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consults`
--
ALTER TABLE `consults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratories`
--
ALTER TABLE `laboratories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_tests`
--
ALTER TABLE `lab_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `return_purchases`
--
ALTER TABLE `return_purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialists`
--
ALTER TABLE `specialists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consults`
--
ALTER TABLE `consults`
  ADD CONSTRAINT `consults_patients_id_foreign` FOREIGN KEY (`patients_id`) REFERENCES `patients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
