-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for explore_greece
CREATE DATABASE IF NOT EXISTS `explore_greece` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `explore_greece`;

-- Dumping structure for table explore_greece.dishes
CREATE TABLE IF NOT EXISTS `dishes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table explore_greece.dishes: ~10 rows (approximately)
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
INSERT INTO `dishes` (`id`, `name`, `desc`, `img`) VALUES
	(1, 'Greek salad', 'Greek salad, also known as village salad or horiatiki is the national dish of Greece, consisting of quartered tomatoes, sliced red onions, and chunky slices of cucumber. Depending on the region, there can also be olives, green peppers, capers, feta cheese, oregano, salt, pepper, or a typical dressing made from olive oil and lemon or vinegar.', 'images/Foods/1.jpg'),
	(2, 'Horta salad', 'Horta is a traditional Greek salad consisting of steamed or boiled greens and weeds that are drizzled with lemon juice and olive oil. The greens usually include dandelion, vleeta, nettles, wild spinach, mustard greens, and chicory. The flavor of the salad can be more or less bitter, depending on the plant.', 'images/Foods/2.jpg'),
	(3, 'Tonosalata', 'Though simple in preparation, Greek-style tuna salad is packed with typical Greek flavors. Along with chunks of tuna, the salad mainly incorporates various diced vegetables, and the choice of different additions such as capers, olives, and herbs.', 'images/Foods/3.jpg'),
	(4, 'Patatosalata', 'Greek potato salad is incredibly versatile and can complement various Greek dishes. It usually consists of large bite-sized potato chunks that are coated in a flavorful dressing based on olive oil, mustard, yogurt, or mayonnaise. The salad is easily adapted with various additions that may include different vegetables, boiled eggs, olives, and fresh herbs such as dill or parsley.', 'images/Foods/4.jpg'),
	(5, 'Moussaka', 'Probably the most famous of Greek dishes, moussaka consists of layers of fried aubergine, minced meat and potatoes, topped with a creamy béchamel sauce and then baked until golden brown. Some Greek restaurants will also serve an equally delectable vegetarian version.', 'images/Foods/5.jpg'),
	(6, 'Koulouri', 'Walk around any of the big Greek cities such as Athens or Thessaloniki in the mornings and you’ll often see locals on their way to work munching on koulouri – large soft bread rings covered in sesame seeds. They’re often sold from yellow street carts and eaten on the go with a cup of coffee.', 'images/Foods/6.jpg'),
	(7, 'Gyros', 'A bit like a kebab, a gyros is a typical Greek sandwich. It consists of pieces of meat (usually chicken, pork, lamb or beef) cooked on a rotisserie and wrapped in a flatbread or pita along with salad, onions and a variety of sauces. Vegetarian versions can include grilled halloumi (a salty Cypriot cheese made from a mix of sheep’s and goat’s milk) or feta cheese instead of the meat.', 'images/Foods/7.jpg'),
	(8, 'Fasolatha', 'Another of Greece’s national dishes, although not so well known internationally, is this classic white bean soup. It’s a simple, yet hearty affair consisting of beans, crushed tomatoes, and vegetables such as onions, carrots and celery. It’s often flavoured with thyme, parsley and bay leaves.', 'images/Foods/8.jpg'),
	(9, 'Loukoumades', 'A Greek delicacy loved by children and adults alike, loukoumades are small fried doughnut-like balls drenched in honey syrup and sprinkled with various toppings such as cinnamon or crushed walnuts. People usually order a large plate of them to share with friends or family. This is Greek dining at its very best.', 'images/Foods/9.jpg'),
	(10, 'Galaktoboureko', 'These sweet custard slices, made with layers of flaky phyllo pastry and sprinkled with cinnamon, are worth a visit to Greece alone, even if you don’t do anything else. They’re best eaten warm, straight from the oven.', 'images/Foods/10.jpg');
/*!40000 ALTER TABLE `dishes` ENABLE KEYS */;

-- Dumping structure for table explore_greece.reviews
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `stars` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table explore_greece.reviews: ~2 rows (approximately)
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`id`, `user`, `review`, `stars`) VALUES
	(1, 'Dimitar Stefanov', 'Mnol dobur sait Mirka!!!\r\n', NULL),
	(2, 'Radko_iadi', 'Qk sait mako\r\n\r\nCKTM PILE', NULL),
	(3, 'MiroKotlarov', 'Good site', NULL),
	(4, 'marsonearth', 'mnogo profesionalno', NULL),
	(5, 'Ghost', 'Wow the site is amazing 10/10! Great job with the dishes part of the site!', NULL),
	(6, 'TestAccount', 'stava', NULL);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Dumping structure for table explore_greece.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table explore_greece.users: ~7 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `user`, `password`) VALUES
	(1, 'MiroKotarov', '123456789'),
	(2, 'MiroKotarov', '1234567890'),
	(3, 'MiroKot', '1234567'),
	(4, 'Milko', '123456'),
	(5, 'Test', 'test1234'),
	(6, 'Ghost', 'test123'),
	(7, 'Dimitar Stefanov', 'dimi1603'),
	(8, 'Radko_iadi', 'Server123'),
	(9, 'MiroKotlarov', 'miro23102004'),
	(10, 'marsonearth', 'obi4amzelnik'),
	(11, 'TestAccount', 'Test12345');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
