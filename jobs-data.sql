-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table jobist.jobs: ~13 rows (approximately)
INSERT INTO `jobs` (`id`, `type`, `title`, `description`, `salary`, `location`, `company_name`, `company_description`, `contact_email`, `apply_link`, `contact_phone`, `user_id`) VALUES
	(4, 'Remote', 'Junior frontend dev', 'We are seeking a talented Front-End Developer to join our team in Boston, MA. The ideal candidate will have strong skills in HTML, CSS, and JavaScript, with experience working with modern JavaScript frameworks such as React or Angular.', '10k / m', 'Addis Ababa/ Ethiopia', 'Microhard', 'Microhard the next big thing', 'hr@microhard.com', 'microhard.com', '423525', 2),
	(7, 'Full-Time', 'Senior Node expert', 'We are seeking a talented Front-End Developer to join our team in Boston, MA. The ideal candidate will have strong skills in HTML, CSS, and JavaScript, with experience working with modern JavaScript frameworks such as React or Angular.', '30k / m', 'los angeles', 'Softhard', 'Softhard soft and hard', 'carrers@softhard.com', 'https://softhard.com', '9999999', 3),
	(8, 'Part-Time', 'Database enginner', 'Join our team as a Part-Time Front-End Developer in beautiful Pheonix, AZ. We are looking for a self-motivated individual with a passion for creating engaging user experiences. This position offers flexible hours and the opportunity to work remotely.', '10k / m', 'Pheonix', 'Microhard', 'Microhard the next big thing', 'hr@microhard.com', 'https://microhard.com', '423525', 2),
	(10, 'Full-Time', 'Data Analyst', 'Join our team as a data analyst to help us make data-driven decisions. Responsibilities include analyzing large datasets, creating reports, and presenting insights to stakeholders. Proficiency in SQL and data visualization tools is required.', '$70,000 - $85,000', 'Chicago, IL', 'Data Solutions Inc', ' A data analytics company providing insights and solutions to businesses for better decision-making', 'careers@datasolutions.com', '', '(555) 456-7890', 2),
	(11, 'Full-Time', 'Software Engineer', 'Seeking a highly skilled software engineer with experience in developing scalable web applications. Proficiency in JavaScript, Python, and cloud technologies is required. Responsibilities include designing, coding, testing, and maintaining software solutions.', '$90,000 - $110,000 / Y', 'San Francisco, CA', 'Tech Innovators Inc.', ' A leading technology firm specializing in innovative software solutions for businesses worldwide.', 'careers@techinnovators.com', '', '(555) 123-4567', 3),
	(12, 'Part-Time', 'Graphic Designer', 'Looking for a creative graphic designer with a strong portfolio in digital and print media. Must be proficient in Adobe Creative Suite and have excellent communication skills.', '$30 - $40 per hour', 'Remote', 'Creative Minds Studio', 'A dynamic design studio providing creative solutions to clients in various industries.', 'jobs@creativeminds.com', '', '(555) 987-6543', 3),
	(13, 'Internship', 'Marketing Intern', 'An exciting internship opportunity for students or recent graduates to gain hands-on experience in marketing. Responsibilities include assisting with campaigns, social media management, and market research.', '$15 per hour', 'New York, NY', 'Market Leaders Corp', 'A top marketing firm known for delivering high-impact marketing solutions to leading brands.', 'intern@marketleaders.com', '', '(555) 321-0987', 3),
	(14, 'Part-Time', 'Customer Service Representative', ' Seeking a friendly and efficient customer service representative to handle customer inquiries and provide support. Excellent communication skills and a customer-focused attitude are essential.', '$18 - $22 per hour', 'Remote', 'ServiceFirst Co', 'A customer service provider dedicated to delivering exceptional support to clients worldwide.', 'hr@servicefirst.com', '', '(555) 654-3210', 3),
	(15, 'Part-Time', 'Web Developer', 'We are looking for a skilled web developer to maintain and update our website. Must be proficient in HTML, CSS, and JavaScript. Experience with WordPress is a plus.', '$40 - $50 per hour', 'Remote', 'WebSolutions Inc.', 'A web development agency providing high-quality web solutions to clients.', 'jobs@websolutions.com', '', '(555) 678-9012', 2),
	(16, 'Internship', 'Finance Intern', 'An internship opportunity for students interested in finance. Responsibilities include assisting with financial analysis, budgeting, and reporting. Ideal for those pursuing a career in finance.', '$14 per hour', 'Boston, MA', 'FinancePros Inc.', 'A financial consulting firm offering expert advice and solutions to businesses.', 'intern@financepros.com', '', '', 2),
	(17, 'Remote', 'UX/UI Designe', 'We are hiring a UX/UI designer to create intuitive and engaging user experiences for our digital products. Must have experience with wireframing, prototyping, and user testing.', '$65,000 - $80,000 / year', 'Remote', 'DesignHub LLC', 'A design agency specializing in creating user-centric digital experiences for clients worldwide.', 'hr@designhub.com', '', '', 3),
	(18, 'Full-Time', 'HR Manager', 'We are seeking an experienced HR manager to oversee all aspects of human resources practices and processes. Responsibilities include recruitment, employee relations, and policy implementation.', '$75,000 - $90,000 / year', 'Houston, TX', 'PeopleFirst Corp.', 'A human resources consultancy providing comprehensive HR solutions to businesses of all sizes.', 'careers@peoplefirst.com', '', ' (555) 012-3456', 3),
	(19, 'Internship', 'Social Media Intern', 'Seeking a social media intern to assist with content creation, scheduling posts, and engaging with followers. Ideal for students passionate about social media marketing.', '$12 per hour', 'Los Angeles, CA', 'SocialBuzz LLC', 'A social media agency helping brands build their online presence and engage with their audience.', 'intern@socialbuzz.com', '', '(555) 890-1234', 2);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
