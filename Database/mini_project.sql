-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 05:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'gauravnegi9634@gmail.com', '29be54a52396750258d886abc5417fda'),
(2, 'charu@gmail.com', '560f9bb94e9f9fc27d85f0175eff2d5c');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `author` varchar(75) NOT NULL,
  `mrp` int(11) NOT NULL,
  `security` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `price` int(3) GENERATED ALWAYS AS (coalesce(`security`,0) + coalesce(`rent`,0)) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `ISBN`, `name`, `img`, `author`, `mrp`, `security`, `rent`, `qty`, `best_seller`, `short_desc`, `description`, `status`) VALUES
(1, 7, '978-9-35-141670-8', 'Gulliver\'s Travels', 'gulliverTravel.jpg', 'Jonathan Swift', 175, 100, 10, 4, 0, 'Gulliver\'s Travels was first published in 1726, and three centuries later it remains in full force. This famous satirical novel is both an adventure story and a devious philosophical reflection on the constitution of modern societies. The shipwrecked Lemuel Gulliver\'s encounters with the tiny Lilliputians, the Brobdingnag giants, the philosophical Houyhnhnms and the brute Yahoos will make the protagonist, like the reader, open his eyes to the raw and true human nature.', 'Jonathan Swift (1667-1745), a great English satirist, wrote his longest and most famous book, Gulliver’s Travels between 1720 and 1725 (published in 1726). The book deals with imaginary voyages of Gulliver among the pigmies (Lilliputians), the giants (Brobdingnagians), the moonstruck philosophers (Laputans), and the race of the talking horses (Houyhnhnms) with their human serfs the Yahoos. Once Swift wrote to Pope, “I heartily hate and detest that animal called man” and his Gulliver’s Travels and Pilgrim’s Progress are the elaboration of that attitude. In his Gulliver’s Travels, he magnifies man into a giant, and then he diminishes him into a mannikin called Lilliput, and then he turns from man altogether to the race of horses called Houyhnhnms and discovers charity and sagacity in them. The Travels have a charm and vivacity that delight old and young. Swift’s comments upon mankind are shrewd and arresting as well as satirical. The style is Swift’s best - clear, easy, tireless and powerful.', 1),
(2, 3, '978-1-54-209413-9', 'One Arranged Marrage', 'newArrival1.jpg', 'Chetan Bhagat', 400, 250, 10, 4, 0, 'One Arranged Murder is the ninth novel and the twelfth book overall written by the Indian author Chetan Bhagat. The novel is the sequel to Bhagat\'s 2018 novel The Girl in Room 105. A sequel to the book named 400 days was released in 2021.', 'Saurabh Maheshwari is engaged to Prerna Malhotra. His wedding is three months away. On the night of karva chauth, however, Prerna is murdered after being pushed from her terrace. With Inspector Vijender Singh and aided by ACP Rana, the case is investigated by Saurabh and Keshav Rajpurohit. They interrogate all the people in the family. Prerna has a cousin sister called Anjali, and Keshav falls in love with her. They initially believe it is Prerna\'s father\'s brother who has murdered her, but it is later revealed that Anjali had actually murdered Prerna in a fit of jealously. It is also revealed that Anjali and Prerna were twins, but since Prerna was better off, Anjali felt incredibly jealous and planned to murder Prerna.', 1),
(3, 12, '978-1-61-268019-4', 'Rich Dad Poor Dad', 'mostViewed2.png', 'Robert T. Kiyosaki', 499, 300, 10, 4, 1, 'Rich Dad Poor Dad is a 1997 book written by Robert Kiyosaki and Sharon Lechter. It advocates the importance of financial literacy (financial education), financial independence and building wealth through investing in assets, real estate investing, starting and owning businesses, as well as increasing one\'s financial intelligence (financial IQ). Rich Dad Poor Dad is written in the style of a set of parables, ostensibly based on Kiyosaki\'s life. The titular \"rich dad\" is his friend\'s father who accumulated wealth due to entrepreneurship and savvy investing, while the \"poor dad\" is claimed to be Kiyosaki\'s own father who he says worked hard all his life but never obtained financial security.', 'It\'s been nearly 25 years since Robert Kiyosaki’s Rich Dad Poor Dad first made waves in the Personal Finance arena.\nIt has since become the #1 Personal Finance book of all time... translated into dozens of languages and sold around the world.\n\nRich Dad Poor Dad is Robert\'s story of growing up with two dads — his real father and the father of his best friend, his rich dad — and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.\n\n20 Years... 20/20 Hindsight\nIn the 20th Anniversary Edition of this classic, Robert offers an update on what we’ve seen over the past 20 years related to money, investing, and the global economy. Sidebars throughout the book will take readers “fast forward” — from 1997 to today — as Robert assesses how the principles taught by his rich dad have stood the test of time.\n\nIn many ways, the messages of Rich Dad Poor Dad, messages that were criticized and challenged two decades ago, are more meaningful, relevant and important today than they were 20 years ago.\n\nAs always, readers can expect that Robert will be candid, insightful... and continue to rock more than a few boats in his retrospective.\n\nWill there be a few surprises? Count on it.\n\nRich Dad Poor Dad...\n• Explodes the myth that you need to earn a high income to become rich\n• Challenges the belief that your house is an asset\n• Shows parents why they can\'t rely on the school system to teach their kids\nabout money\n• Defines once and for all an asset and a liability\n• Teaches you what to teach your kids about money for their future financial\nsuccess', 1),
(13, 18, '978-0-24-149151-5', 'A Promised Land', 'mostViewed3.jpg', 'Barak Obama', 1999, 1400, 10, 4, 1, 'A Promised Land is a memoir by Barack Obama, the 44th President of the United States from 2009 to 2017. Published on November 17, 2020, it is the first of a planned two-volume series. Remaining focused on his political career, the presidential memoir documents Obama\'s life from his early years through the events surrounding the killing of Osama bin Laden in May 2011. The book is 768 pages long and available in digital, paperback, and hardcover formats and has been translated into two dozen languages. There is also a 28-hour audiobook edition that is read by Obama himself.', 'A riveting, deeply personal account of history in the making-from the president who inspired us to believe in the power of democracy\n\n\'Gorgeously written, humorous, compelling, life affirming\' Justin Webb, Mail on Sunday\n\nIn the stirring, highly anticipated first volume of his presidential memoirs, Barack Obama tells the story of his improbable odyssey from young man searching for his identity to leader of the free world, describing in strikingly personal detail both his political education and the landmark moments of the first term of his historic presidency-a time of dramatic transformation and turmoil.\n\nObama takes readers on a compelling journey from his earliest political aspirations to the pivotal Iowa caucus victory that demonstrated the power of grassroots activism to the watershed night of November 4, 2008, when he was elected 44th president of the United States, becoming the first African American to hold the nation\'s highest office.\n\nReflecting on the presidency, he offers a unique and thoughtful exploration of both the awesome reach and the limits of presidential power, as well as singular insights into the dynamics of U.S. partisan politics and international diplomacy. Obama brings readers inside the Oval Office and the White House Situation Room, and to Moscow, Cairo, Beijing, and points beyond. We are privy to his thoughts as he assembles his cabinet, wrestles with a global financial crisis, takes the measure of Vladimir Putin, overcomes seemingly insurmountable odds to secure passage of the Affordable Care Act, clashes with generals about U.S. strategy in Afghanistan, tackles Wall Street reform, responds to the devastating Deepwater Horizon blowout, and authorizes Operation Neptune\'s Spear, which leads to the death of Osama bin Laden.\n\nA Promised Land is extraordinarily intimate and introspective-the story of one man\'s bet with history, the faith of a community organizer tested on the world stage. Obama is candid about the balancing act of running for office as a Black American, bearing the expectations of a generation buoyed by messages of \"hope and change,\" and meeting the moral challenges of high-stakes decision-making. He is frank about the forces that opposed him at home and abroad, open about how living in the White House affected his wife and daughters, and unafraid to reveal self-doubt and disappointment. Yet he never wavers from his belief that inside the great, ongoing American experiment, progress is always possible.\n\nThis beautifully written and powerful book captures Barack Obama\'s conviction that democracy is not a gift from on high but something founded on empathy and common understanding and built together, day by day.\n\n\'What is unexpected in A Promised Land is the former president\'s candour\' David Olusoga, Observer', 1),
(14, 40, '978-1-50-111036-8', 'It Ends with Us', 'newArrival3.jpg', 'Colleen Hoover', 399, 300, 10, 0, 0, 'The newest, highly anticipated novel from beloved #1 New York Times bestselling author, Colleen Hoover. Sometimes it is the one who loves you who hurts you the most. Lily hasn?t always had it easy, but that\'s never stopped her from working hard for the life she wants. She?s come a long way from the small town in Maine where she grew up?she graduated from college, moved to Boston and started her own business. So when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily?s life suddenly seems almost too good to be true. Ryle is assertive, stubborn, maybe even a little arrogant. He?s also sensitive, brilliant and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn?t hurt. Lily can not get him out of her head. But Ryle?s complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his ?no dating? rule, she can not help but wonder what made him that way in the first place. As questions about her new relationship overwhelm her, so do thoughts of Atlas Corrigan?her first love and a link to the past she left behind. He was her kindred spirit, her protector. When Atlas suddenly reappears, everything Lily has built with Ryle is threatened. With this bold and deeply personal novel, Colleen Hoover delivers a heart-wrenching story that breaks exciting new ground for her as a writer. Combining a captivating romance with a cast of all-too-human characters, it ends with us is an unforgettable tale of love that comes at the ultimate price.', 'In this “brave and heartbreaking novel that digs its claws into you and doesn’t let go, long after you’ve finished it” (Anna Todd, New York Times bestselling author) from the #1 New York Times bestselling author of All Your Perfects, a workaholic with a too-good-to-be-true romance can’t stop thinking about her first love.\n\nLily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. She’s come a long way from the small town where she grew up—she graduated from college, moved to Boston, and started her own business. And when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life seems too good to be true.\n\nRyle is assertive, stubborn, maybe even a little arrogant. He’s also sensitive, brilliant, and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn’t hurt. Lily can’t get him out of her head. But Ryle’s complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his “no dating” rule, she can’t help but wonder what made him that way in the first place.\n\nAs questions about her new relationship overwhelm her, so do thoughts of Atlas Corrigan—her first love and a link to the past she left behind. He was her kindred spirit, her protector. When Atlas suddenly reappears, everything Lily has built with Ryle is threatened.\n\nAn honest, evocative, and tender novel, It Ends with Us is “a glorious and touching read, a forever keeper. The kind of book that gets handed down” (USA TODAY).', 1),
(15, 23, '978-0-14-344229-5', 'Life\'s Amazing Secrets', '1545127237_newArrival4.jpg', 'Gaur Gopal Das', 250, 150, 10, 5, 1, 'While navigating their way through Mumbai\'s horrendous traffic, Gaur Gopal Das and his wealthy young friend Harry get talking, delving into concepts ranging from the human condition to finding one\'s purpose in life and the key to lasting happiness.\r\n\r\nWhether you are looking at strengthening your relationships, discovering your true potential, understanding how to do well at work or even how you can give back to the world, Gaur Gopal Das takes us on an unforgettable journey with his precious insights on these areas of life.\r\n\r\nDas is one of the most popular and sought-after monks and life coaches in the world, having shared his wisdom with millions. His debut book, Life\'s Amazing Secrets, distils his experiences and lessons about life into a light-hearted, thought-provoking book that will help you align yourself with the life you want to live.', 'No', 1),
(16, 7, '978-1-84-283255-4', 'The General’s Envoy', '2140619059_generalEnvoy.jpeg', 'Anthony  Conway', 53791, 50000, 300, 2, 1, 'The second thrilling volume of the Caspasian series, set this time in the lawless China of 1925 John Caspasian, hero of The Viceroy\'s Captain, is assigned to Shanghai, a city seething with intrigue and violence as rival Chinese revolutionaries make war on each other. Sent up the Yangtsc to make an alliance with the man the British have picked to stop the \'communist\' Chiang Kai-Shek, Caspasian discovers that the supposed champion of the west is a vicious murderer. The warlord\'s right hand man is the English war hero who saved Caspasian\'s life in the trenches in World War I. So why is he trying to Kill Caspasian now?', 'none', 1),
(17, 0, '978-0-09-957784-3', 'The Black Tide', '1396051893_311YEMuKDCL._SX325_BO1,204,203,200_.jpg', 'Hammond Innes', 49342, 44407, 345, 4, 0, 'From the author of DELTA CONNECTION, THE LONELY SKIER, THE TROJAN HORSE and WRECKERS MUST BREATHE, a thriller about a woman who takes matters into her own hands when yet another ship carrying oil flounders on the rocks around Land\'s End, and she sets off to find the one man who knows the truth.', 'none', 1),
(18, 12, '978-0-32-416862-4', 'Principles of Economics', '1138740780_51sHIn7iIbL._SX401_BO1,204,203,200_.jpg', 'N. Gregory Mankiw', 13910, 10000, 97, 1, 0, 'Students save money when purchasing bundled products. This bundle contains a loose-leaf version of Principles of Economics, 8th Edition, and access to MindTap Economics for 1 term (6 months). With a single login for MindTap, you can connect with your instructor, organize coursework, and have access to a range of study tools, including e-book and apps all in one place! MindTap helps you learn on your terms. Read or listen to textbooks and study with the aid of instructor notifications, flashcards, and practice quizzes.', 'None', 1),
(19, 41, '978-19-3-610794-0', '7 Seconds To Success', '1483558651_4145VVA6yGL._SX317_BO1,204,203,200_.jpg', 'Gary Coffey And Bob Phillips', 41458, 37312, 290, 2, 1, 'Success depends on making a great impression and effectively relating to people. Those first few seconds with someone can make all the difference. Bestselling author Bob Phillips and leadership expert Gary Coffey have distilled the essential skills of reading and understanding people into easy-to-remember principles. Readers will discover the best ways to relate to and connect with individuals, including how to: identify the best approaches to create good will know how to communicate with all personality types spark and keep people?s interest 7 Seconds to Success provides the tools necessary to improve people skills and garner trust. Every interaction can be positive and rewarding!', 'None', 1),
(20, 20, '978-0-07-352935-6', 'Design Of Machinery', '1966742517_51JDN8F3NBL._SX378_BO1,204,203,200_.jpg', 'Robert L. Norton, Milton P. Higgins II', 46616, 42000, 300, 2, 1, 'Laboratory Applications in Microbiology: A Case Study Approach uses real-life case studies as the basis for exercises in the laboratory. This is the only microbiology lab manual focusing on this means of instruction, an approach particularly applicable to the microbiology laboratory. The author has carefully organized the exercises so that students develop a solid intellectual base beginning with a particular technique, moving through the case study, and finally applying new knowledge to unique situations beyond the case study.', 'Design of Machinery has proven to be a favorite of both students and educators across the globe. It is currently used in hundreds of schools in the U.S. and Canada and in many more worldwide in both English and several other languages. The book is praised for its friendly writing style, clear exposition of difficult topics, attractive appearance, thorough and relevant coverage, its emphasis on synthesis and design, and its useful computer programs. The foremost goal of the author is to convey the art of the design process and the fundamentals of kinematics and dynamics in order to prepare students to successfully tackle genuine engineering problems encountered in practice. While both thorough and complete on the topics of analysis, the book also emphasizes the synthesis and design aspects of the subject to a greater degree than any other similar book on the market today. Analytical synthesis of linkages is covered, and cam design is given a more thorough and practical treatment than in any other text.\r\n\r\nIncluded with this text are downloadable videos containing animated models of over 100 of the examples from the text. Students can open, run, interact, and modify these Working Model simulations. Student editions of three custom programs for design and analysis of mechanisms: Linkages, DYNACAM, and MATRIX are also on the book’s website.  Linkages is a new program that incorporates the older programs Fourbar, Fivebar, Sixbar, Slider and Engine. (The programs with the book are limited functionality versions of the professional editions of the same programs available elsewhere on this web site.) Also included are many Matlab models for kinematic analysis.\r\n\r\nThe Sixth Edition has a collection of Master Lecture Videos and Tutorials made by the author over a thirty-year period while teaching at Worcester Polytechnic Institute. There are 82 instructional videos in total. Thirty-four are “50-minute” lectures. Thirty-nine are short “snippets” from the lecture videos that are linked to the relevant topics in a chapter. Seven are demonstrations of machinery or tutorials. Two are laboratory exercises that have been “virtualized” via video demonstration and the provision of test data so that students can simulate the lab.', 1),
(21, 18, '978-1-85-398020-6', 'In Search Of Nikola Tesla', '1520464866_41BGPY5CGQL._SX295_BO1,204,203,200_.jpg', 'F. David Peat', 29633, 25000, 200, 1, 1, '– Dr. Peat gives a scientific perspective to Tesla\'s work, specifically, the wireless power transmission theories. The book is very narritive in his search for the truth about Tesla. His endeavors of searching for info are quite interesting. I recommend the book to any scientist out there. The book was originally published in 1983.', 'none', 1),
(22, 38, '978-0-81-530322-0', 'History Of Astronomy', '1864802571_9780815303220.tif', 'John Lankford', 32418, 30000, 270, 1, 0, '– This new history of astronomy, in the form of an encyclopedia, is a welcome addition to the literature of astronomy. Many of the histories that have been published are now long out of print. Although those early histories are still useful, this volume brings together, in a very readable and pleasant format, much information scattered among several publications. The unique quality of this work is its five-pronged approach to presenting information.\r\nThe first approach, which takes up most of the book, is a historical overview of astronomy. Ancient and medieval periods are covered, but the focus is on the beginnings of the scientific revolution of the seventeenth century to the present. The second approach looks at astronomy as it fits into various national contexts. For example, the reader will find key entries for astronomy in France or Russia or Great Britain, describing milestones of astronomical accomplishments in each of those countries.', 'None', 1),
(23, 35, '185-286-336-6', 'Black Orchid', '1219428166_47700.jpg', 'Neil Gaiman', 22537, 20000, 240, 1, 0, 'From one of the most highly recognised and award winning comic writers on the scene today, Neil Gaiman (Sandman, Death, Violent Cases), and his sometime collaborator, innovative artist Dave McKean (Arkham Asylum, Cages, Violent Cases) comes a haunting and stylish exploration of birth, death and renewal. Both human and flower the heroine, Black Orchid, undertakes a hazardous journey to uncover her true origins, providing a moving ecological parable for our times. This work by Gaiman and Mckean is an early showcase for the talent we know today.', 'None', 1),
(24, 0, '067-404-649-8', 'What Is Mental Illness?', '1979676086_content.jpeg', 'Richard J. Mcnally', 27348, 25000, 250, 0, 0, 'According to a major health survey, nearly half of all Americans have been mentally ill at some point in their lives - more than a quarter in the last year. Can this be true? What exactly does it mean, anyway? What\'s a disorder, and what\'s just a struggle with real life? This lucid and incisive book cuts through both professional jargon and polemical hot air, to describe the intense political and intellectual struggles over what counts as a \'real\' disorder, and what goes into the \'DSM\', the psychiatric bible. Is schizophrenia a disorder? Absolutely. Is homosexuality? It was - till gay rights activists drove it out of the DSM a generation ago. What about new and controversial diagnoses? Is \'social anxiety disorder\' a way of saying that it\'s sick to be shy, or \'female sexual arousal disorder\' that it\'s sick to be tired? An advisor to the DSM, but also a fierce critic of exaggerated overuse, McNally defends the careful approach of describing disorders by patterns of symptoms that can be seen, and illustrates how often the system medicalizes everyday emotional life. Neuroscience, genetics, and evolutionary psychology may illuminate the biological bases of mental illness, but at this point, McNally argues, no science can draw a bright line between disorder and distress. In a pragmatic and humane conclusion, he offers questions for patients and professionals alike to help understand, and cope with, the sorrows and psychopathologies of everyday life.', 'None', 1),
(25, 0, '031-416-886-9', 'Copyright Law: Essential Cases And Materials', '1432725721_31POOaFRdmL._SX355_BO1,204,203,200_.jpg', 'Alfred C.Yen', 45907, 42000, 320, 1, 0, '– This brand-new copyright casebook differs from other copyright law casebooks in a number of respects. First, this casebook emphasizes the essential materials at the heart of the subject. The result is a streamlined and exceptionally clear casebook, in which the main themes, ideas, and theories in this exciting and dynamic field are not obscured by extraneous readings. Second, the casebook takes full advantage of technology by providing access to a companion website containing an extensive library of additional modules, topics, edited cases, notes, problems, and audio-visual materials from cases and hypotheticals for use in class. The book is authored by two experts in the field, who have written extensively about copyright, the arts, and the impact of new technology. The approach is both practical and theoretically sophisticated, with a particular focus on the latest controversies in the field.', 'None', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` mediumint(9) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `status`) VALUES
(3, 'Computing, Internet & Digital Media', 1),
(7, 'Action & Adventure', 1),
(12, 'Business & Economics', 1),
(13, 'Arts,Film & photography', 0),
(14, 'Children\'s & Young Adult', 0),
(15, 'Comics & Mangas', 0),
(16, 'Crime,Horror & Science Fiction', 1),
(18, 'Biographies, Diaries & True Accounts', 1),
(19, 'Crafts, Home & Lifestyle', 1),
(20, 'Engineering', 1),
(21, 'Exam Preparation', 1),
(22, 'Fantasy, Horror & Science Fiction', 1),
(23, 'Health, Family & Personal Development', 1),
(24, 'Health, Fitness & Nutrition', 1),
(25, 'Higher Education Textbooks', 1),
(26, 'Historical Fiction', 1),
(27, 'History', 1),
(28, 'Humour', 0),
(29, 'Language, Linguistics & Writing', 1),
(30, 'Law', 1),
(31, 'Literature & Fiction', 1),
(32, 'Medicine & Health Sciences', 1),
(33, 'School Books', 1),
(34, 'Science & Mathematics', 1),
(35, 'Sciences, Technology & Medicine', 1),
(36, 'Society & Social Sciences', 1),
(37, 'Sports', 1),
(38, 'Textbooks & Study Guides', 1),
(39, 'Travel', 0),
(40, 'Romance', 0),
(41, 'Analysis & Strategy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `message`, `date`) VALUES
(17, 'Rajendra Singh', 'rajendranegi767@gmail.com', 7280980667, 'Loved it', '2021-11-23 15:41:13'),
(18, 'Nikhil Parki', 'nikhilparki31@gmail.com', 9149104828, 'good website loved it', '2021-12-20 07:12:16'),
(19, 'Vaibhav', 'vaibhav@gmail.com', 1234567890, 'Your website is very good.', '2021-12-22 06:11:22'),
(20, 'Mohan', 'mohan@gmail.com', 1234567890, 'This website is mediocre at best. You need to improve a lot of things in this website and I hope you don\'t take this criticism personally. First of all use high quality images in your website so that your site looks more professional.', '2021-12-22 07:03:54'),
(21, 'Raju Srivastav', 'raju@gmail.com', 8372937268, 'Good attempt for your first website. Good luck for your future projects.', '2021-12-22 07:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `pin` int(11) NOT NULL,
  `payment_method` varchar(20) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `payment_status` varchar(20) NOT NULL,
  `order_status` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address`, `address2`, `pin`, `payment_method`, `total`, `payment_status`, `order_status`, `date`, `duration`) VALUES
(7, 5, 'Nayagaon Polio', 'Shimla Bypass Road', 248004, 'COD', 350, 'success', 4, '2021-11-27 16:05:35', 20),
(8, 6, 'Near Govt. Hospital, Nayagaon Polio, Shimla Bypass Road', 'Deheradun', 248007, 'COD', 1500, 'success', 6, '2021-11-28 19:29:06', 20),
(9, 5, 'Near Govt. Hospital, Nayagaon Polio, Shimla Bypass Road', 'Deheradun', 248007, 'COD', 450, 'success', 3, '2021-12-09 09:44:24', 15),
(10, 5, 'Near Govt.', '', 24800766, 'COD', 400, 'success', 3, '2021-12-11 12:32:06', 10),
(11, 5, 'Near Govt. Hospital, Nayagaon Polio, Shimla Bypass Road', '', 248007, 'COD', 280, 'success', 4, '2021-12-11 15:44:22', 13),
(13, 5, 'Near Govt. Hospital, Nayagaon Polio, Shimla Bypass Road', '', 248007, 'COD', 200, 'success', 2, '2021-12-11 16:07:44', 10),
(14, 5, 'Near Govt. Hospital, Nayagaon Polio, Shimla Bypass Road', 'bgfgh', 248007, 'COD', 22400, 'success', 6, '2021-12-23 05:16:32', 10),
(15, 5, 'Near Govt. Hospital, Nayagaon Polio, Shimla Bypass Road', 'hftgfgh', 248007, 'COD', 27500, 'success', 1, '2021-12-28 13:01:53', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `book_id`, `price`, `time`) VALUES
(6, 7, 3, 350, 0),
(7, 8, 13, 1500, 0),
(8, 9, 3, 450, 15),
(9, 10, 14, 400, 10),
(10, 11, 15, 280, 13),
(12, 13, 1, 200, 10),
(13, 14, 23, 22400, 10),
(14, 15, 24, 27500, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `status_name`) VALUES
(4, 'Cancelled'),
(5, 'Delivered'),
(1, 'Pending'),
(2, 'Processing'),
(6, 'Returned'),
(3, 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `doj` datetime NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `doj`, `password`) VALUES
(5, 'Gaurav Singh', 'gauravnegi9634@gmail.com', 9368963477, '2021-11-23 15:36:35', '29be54a52396750258d886abc5417fda'),
(6, 'Charu Rawat', 'charu@gmail.com', 1234567890, '2021-11-25 15:10:27', '560f9bb94e9f9fc27d85f0175eff2d5c'),
(9, 'Gaurav Sharma', 'gs0896614@gmail.com', 7830508740, '2021-12-13 05:10:00', '29be54a52396750258d886abc5417fda'),
(10, 'Nikhil Parki', 'nikhilparki31@gmail.com', 9156104828, '2021-12-20 07:10:52', '350d89c1cd6592bbbd1ed2e8a4f3ddba'),
(11, 'Vaibhav Pradhan', 'vaibhav@gmail.com', 1234567890, '2021-12-22 06:10:12', '23b431acfeb41e15d466d75de822307c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`,`ISBN`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_status_name_uindex` (`status_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
