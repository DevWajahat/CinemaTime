-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 05:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movie_tickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin') DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Wajahat', 'admin@gmail.com', 'admin', 'admin', '2024-08-17 17:55:34'),
(41, 'wajjaha', 'wajahatdeveloper0@gmail.com', 'admin', '', '2024-08-26 17:58:47'),
(42, 'aaba', 'wajahatdeveloper0@gmal.com', 'admins', '', '2024-08-26 18:01:36'),
(43, 'abbas', 'wajahatdeveloper@gmail.com', 'admin', '', '2024-08-26 18:10:14'),
(44, 'hammad012', 'hammadurrehman1954@gmail.com', 'Hammad@123', '', '2024-08-31 08:15:53'),
(46, 'carapijo', 'tibikil@mailinator.com', 'Pa$$w0rd!', '', '2024-08-31 08:18:14'),
(47, 'mukhtar', 'mukhtar@gmail.com', 'admin', '', '2024-09-02 11:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `showtime_id` int(11) NOT NULL,
  `number_of_tickets` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `GP_rating` text NOT NULL,
  `runtime` varchar(10) NOT NULL,
  `trailer_url` text DEFAULT NULL,
  `poster_url` varchar(255) DEFAULT NULL,
  `starring` text NOT NULL,
  `Genres` text NOT NULL,
  `Tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `rating`, `GP_rating`, `runtime`, `trailer_url`, `poster_url`, `starring`, `Genres`, `Tags`) VALUES
(1, 'Avengers', 'Earths Mightiest Heroes stand as the planets first line of defense against the most powerful threats in the universe. The Avengers began as a group of extraordinary individuals who were assembled to defeat Loki and his Chitauri army in New York City.', '4.7', 'PG-13', '2h 23m', 'https://youtu.be/eOrNdBpGMv8?si=Tnd5YAmJQAnvBNWh', 'upload/1725107673.jpg', 'Scarlett Johansson, Jeremy Renner, Cobie Smulders', 'Action/Adventure', '#Scarlett Johansson #JeremyRenner #CobieSmulders'),
(4, 'The Matrix', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.', '8.7', 'All ages', '136 minute', 'https://youtu.be/vKQi3bBA1y8?si=NDkfJnYc72KJgNtu', 'upload/1725108585.jfif', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving', 'Sci-Fi, Action', 'dystopia, artificial intelligence, simulation, hacker'),
(5, 'Forrest Gump ', 'The story of Forrest Gump, a simple man with good intentions, who inadvertently becomes involved in several major historical events of the 20th century, while only wanting to be reunited with his childhood sweetheart Jenny.', '3.0', 'PG-13', '2h 1m', 'https://youtu.be/bLvqoHBptjg?si=cooWx0KQleCn0QXx', 'upload/1725108832.jfif', 'Tom Hanks, Robin Wright, Gary Sinise, Sally Field', 'Drama, Romance', 'love, historical, inspirational, heartwarming'),
(6, 'The Shawshank Redemption', 'Two imprisoned men bond over several years, finding solace and eventual redemption through acts of common decency.', '9.3', 'R', '142 minute', 'https://www.youtube.com/watch?v=6hB3S9bIaco', 'upload/1725109048.jfif', 'Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler', 'Drama', 'prison, friendship, hope, escape'),
(7, 'Gladiator', 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.', '8.5', 'R ', '155 minute', 'https://www.youtube.com/watch?v=kVrqfYjkTdQ', 'upload/1725127359.jfif', ' Russell Crowe, Joaquin Phoenix, Connie Nielsen, Oliver Reed', 'Action, Adventure, Drama', 'shipwreck, love story, tragedy, historical'),
(8, 'Pulp Fiction', 'The lives of two mob hitmen, a boxer, a gangster, and his wife intertwine in four tales of violence and redemption.', '8.9', 'R', '154 minute', 'https://www.youtube.com/watch?v=s7EdQ4FqbhY', 'upload/1725127640.jfif', 'John Travolta, Uma Thurman, Samuel L. Jackson, Bruce Willis', 'Crime, Drama', 'crime, nonlinear narrative, hitman, dark comedy'),
(9, 'The Godfather', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', '9.2', 'R', '175 minute', 'https://www.youtube.com/watch?v=sY1S34973zA', 'upload/1725127857.jfif', 'Marlon Brando, Al Pacino, James Caan, Diane Keaton', 'Crime, Drama', 'mafia, power, family, legacy'),
(10, 'The Lord of the Rings: The Fellowship of the Ring ', 'A meek Hobbit and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.', '8.8', 'PG-13', '178 minute', 'https://www.youtube.com/watch?v=sY1S34973zA', 'upload/1725128926.jfif', 'Elijah Wood, Ian McKellen, Orlando Bloom, Viggo Mortensen', 'Adventure, Drama, Fantasy', 'quest, Middle-earth, epic, friendship'),
(11, 'Star Wars', 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee, and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.', '8.5', 'All ages', '121 minute', 'https://www.youtube.com/watch?v=vZ734NWnAHA', 'upload/1725129287.png', 'Mark Hamill, Harrison Ford, Carrie Fisher, Alec Guinness', 'Action, Adventure, Fantasy', 'space opera, rebellion, Jedi, galactic empire'),
(32, 'Frozen', 'When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinte winter, her sister Anna teams up with a mountain man, his playful reindeer, and a snowman to change the weather condition.', '3.3', '13+', '1hr 42 min', 'https://youtu.be/TbQm5doF_Uc?si=q73wuAr-sCMvzmZk', 'upload/1725133194.jpg', 'Kristan Bell, Idina menzel, Jonathan Groff', 'Animation', 'Animation, Adventure, Comedy'),
(33, 'The Conjuring', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark in their farmhouse', '4.4', '16+', '1h 52min', 'https://youtu.be/k10ETZ41q5o?si=0W5q7CprhA5eCjg5', 'upload/1725257579.jpg', 'Patrick Wilson, Vera Farminga, Ron LivingSton', 'Horror', 'Horror, Mystery, Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `review_text` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `theatre_id` int(11) DEFAULT NULL,
  `show_date` date NOT NULL,
  `show_time` time NOT NULL,
  `class_type` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`id`, `movie_id`, `theatre_id`, `show_date`, `show_time`, `class_type`, `price`, `created_at`) VALUES
(5, 4, 5, '2024-09-02', '14:00:00', 'Economy', '800.00', '2024-09-02 05:12:25'),
(7, 7, 5, '2024-09-04', '15:18:00', 'Premium', '400.00', '2024-09-02 05:16:13'),
(9, 5, 6, '2024-09-16', '17:30:00', 'Premium', '2000.00', '2024-09-02 05:17:55'),
(11, 6, 7, '2024-09-10', '00:05:00', 'Premium', '1500.00', '2024-09-02 05:18:44'),
(12, 10, 7, '2024-09-27', '13:51:00', 'VIP', '1290.00', '2024-09-02 05:19:48'),
(13, 11, 4, '2024-09-28', '12:37:00', 'Premium', '1200.00', '2024-09-02 05:20:43'),
(14, 1, 6, '2024-09-15', '15:25:00', 'Economy', '600.00', '2024-09-02 05:21:50'),
(15, 8, 5, '2024-09-13', '17:22:00', 'Premium', '800.00', '2024-09-02 05:23:10'),
(16, 4, 6, '2024-09-11', '15:23:00', 'Premium', '1200.00', '2024-09-02 05:23:55'),
(17, 33, 5, '2024-09-09', '15:30:00', 'VIP', '900.00', '2024-09-02 15:13:52');

-- --------------------------------------------------------

--
-- Table structure for table `theaters`
--

CREATE TABLE `theaters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theaters`
--

INSERT INTO `theaters` (`id`, `name`, `location`, `created_at`) VALUES
(4, 'Galaxy Cinema', 'Saddar, Karachi', '0000-00-00 00:00:00'),
(5, 'Regal Cinemas', 'Clifton, Karachi', '0000-00-00 00:00:00'),
(6, 'CineStar', 'Gulshan-e-Iqbal, Karachi', '0000-00-00 00:00:00'),
(7, 'Mega Movies', 'Silver Screen', '0000-00-00 00:00:00'),
(8, 'City Cinema', 'Korangi, Karachi', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` enum('user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `age`, `created_at`, `role`) VALUES
(2, 'hyder', 'admin@gmail.com', 'admin', 19, '2024-08-28 10:34:34', 'user'),
(3, 'Ali', 'ali@gmail.com', 'admin', 17, '0000-00-00 00:00:00', ''),
(4, 'muneeza', 'muneeza@gmail.com', '1234', 19, '0000-00-00 00:00:00', '');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `before_insert_users` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
    SET NEW.password = MD5(NEW.password);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_showtime_date_unique` (`user_id`,`showtime_id`,`booking_date`),
  ADD KEY `fk_showtime` (`showtime_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `theatre_id` (`theatre_id`);

--
-- Indexes for table `theaters`
--
ALTER TABLE `theaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `theaters`
--
ALTER TABLE `theaters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `fk_showtime` FOREIGN KEY (`showtime_id`) REFERENCES `showtime` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `showtime_ibfk_2` FOREIGN KEY (`theatre_id`) REFERENCES `theaters` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
