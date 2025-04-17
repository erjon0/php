CREATE TABLE `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `confirm_password` varchar(255) NOT NULL,
    `is_admin` varchar(255)
)
INSERT INTO `users`(`id`,`name`,`username`,`email`,`password`,`confirm_password`,`is_admin`) VALUES
('elson','elsonm','elsom@gmail.com','23233232','23233232','true'),
('ensar','ensars','ensar@gmail.com','23233232','23233232','false')

    CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `movie_decs` varchar(255) NOT NULL,
  `movie_quality` varchar(255) NOT NULL,
  `movie_rateing` varchar(255) NOT NULL,
  `movie_image` varchar(255) NOT NULL
)
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name_id` varchar(255) NOT NULL,
  `movie_id` varchar(255) NOT NULL,
  `nr_ticket` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `is_aproved` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
)