<?php
$connection = mysqli_connect("localhost", "root", "");
if (!$connection){
    $errorMessage = urldecode("متاسفیم. ارتباط برقرار نشد");
    header("Location: login.php?error=$errorMessage");
    exit();
}


$sqlDB = "create database if not exists sport_club2";
$sqlTable1 = "CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `national_code` varchar(10) NOT NULL UNIQUE,
  `pass` varchar(255) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
$sqlTable2 = "CREATE TABLE `times` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` enum('8-10','10-12','12-14','14-16','16-18','18-20','20-22') NOT NULL,
  `is_available` tinyint(1) DEFAULT 1,
  UNIQUE (`date`, `time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
$sqlTable3 = "CREATE TABLE `reservations` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `has_payed` tinyint(1) DEFAULT 0,
  `tracking_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
$sqlRelations = "ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`time_id`) REFERENCES `times` (`id`) ON DELETE CASCADE;";
$sqlAdmin = "INSERT INTO `users` (`id`, `name`, `national_code`, `pass`, `birthdate`, `email`, `phone`, `isAdmin`) VALUES
(1, 'admin', '1234567890', '$2y$10$3Tc3vWfbaROuGI4F5Yvm6OmVjeoj1TBJrTAxWP4WiuQP9ZCa0k4KK', '2005-02-16', '', '09122340943', '1');";

$resultDB = mysqli_query($connection, $sqlDB);
$connection = mysqli_connect("localhost", "root", "", "sport_club2");
if (!$connection){
    $errorMessage = urldecode("متاسفیم. ارتباط برقرار نشد");
    $connection->close();
    header("Location: login.php?error=$errorMessage");
    exit();
}
$resultTable1 = mysqli_query($connection, $sqlTable1);
$resultTable2 = mysqli_query($connection, $sqlTable2);
$resultTable3 = mysqli_query($connection, $sqlTable3);
$resultRelations = mysqli_query($connection, $sqlRelations);
$resultAdmin = mysqli_query($connection, $sqlAdmin);

if ($resultDB) {
    if ($resultTable1) {
        if ($resultTable2) {
            if ($resultTable3) {
                if ($resultRelations) {
                    if ($resultAdmin) {
                        $connection->close();
                        header("Location: login.php");
                        exit();
                    }
                }
            }
        }
    }
}
$connection->close();
header("Location: login.php");
exit();


?>