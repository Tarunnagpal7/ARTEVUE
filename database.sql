CREATE TABLE IF NOT EXISTS `Users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fname` varchar(50) NOT NULL,
 `lname` varchar(50) NOT NULL,
 `number` varchar(10) NOT NULL,
 `email` varchar(50) NOT NULL,
 `address` varchar(100) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );

CREATE TABLE IF NOT EXISTS `contact` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fname` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
  'message' varchar(1000) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );

CREATE TABLE IF NOT EXISTS `arts` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `image` varchar(100) NOT NULL,
 `title` varchar(50) NOT NULL,
 `artist` varchar(50) NOT NULL,
 `type` varchar(50) NOT NULL,
 `price` int NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );

CREATE TABLE IF NOT EXISTS `artists` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `artist_image` varchar(100) NOT NULL,x
 `artist_name` varchar(50) NOT NULL,
 `about` varchar(200) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );
CREATE TABLE IF NOT EXISTS `Buyers` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `art_id` int(11) NOT NULL,
 `purchase_date` datetime NOT NULL,
 PRIMARY KEY (`id`),
 FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`),
 FOREIGN KEY (`art_id`) REFERENCES `arts`(`id`)
);

