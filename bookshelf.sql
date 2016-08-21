-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 09:13 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminname`, `password`) VALUES
(1, 'Admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `id` int(200) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `pdf_file` varchar(200) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `level` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`id`, `Author`, `description`, `category`, `image`, `pdf_file`, `Title`, `level`) VALUES
(1, ' Oladipo Onaolapo Francisca (P', 'ABSTRACT: Water scarcity is one of the major problems facing major cities of the world and wastage during transmission has been\r\nidentified as a major culprit; this is one of the motivations for this research, to deploy computing techniques in creating a barrier to\r\nwastage in order to not only provide more financial gains and energy saving, but also help the environment and water cycle which in\r\nturn ensures that we save water for our future. We presented our research in embedding a control system into an automatic water\r\npump controller through the use of different technologies in its design, development, and implementation...', 'Hardware books', '1c.JPG', '1C_Microcontroller.pdf', 'Microcontroller based Automatic controller', 100),
(4, 'Habt Wander', 'Nowadays, compression plays a major role in any media delivery infrastructure. In\r\nvideo streaming it is especially important as high-definition uncompressed video can\r\nconsume as much as one gigabit per second for a single stream. Video codecs such as\r\nH.264 and VC-1 have made viewing high-quality video at low bit rates possible.\r\nHowever, for the best viewing experience, content providers are required to produce\r\nmultiple versions of the captured stream at various bit rates for adaptive streaming, and\r\nat various resolutions to fit the screens of many different viewer devices.', 'Hardware books', 'mult.JPG', 'Multi-GPU System-500.pdf', 'video capture,encoding and streaming in a multiGPU system', 500),
(5, 'Marthin weeds', 'A machine operation in which a\r\nwork part is fed past a rotating\r\ncylindrical tool with multiple\r\nedges. (milling machine)', 'Hardware books', 'operate.JPG', 'operations.pdf', 'Machine operations and machine tools', 300),
(6, 'Mrs Akinlade', 'Guass law for magnetic fields\r\nThe simplest magnetic structure that can exist is a magnetic dipole\r\n(magnetic monople do not exist).', 'lecture notes', 'maxwell.JPG', 'maxwells-equationmagnetism-of-matter-100.pdf', 'Maxwells equation, Magnetism of matter', 100),
(7, 'Prof. Olaniyi', 'A Spherical Capacitor Figure above also represent cross section of two\r\nconcentric spherical shells of radii a and b . A sphere of radius r ,concentric\r\nwith the spherical shells represents the Gaussian surface. This gives...', 'lecture notes', 'phy102compnote-100.JPG', 'phy102compnote-100.pdf', 'capacity', 100),
(8, 'Eileen Martin', 'â€¢ Writing scripts that interact with the operating system\r\nâ€¢ Multithreading\r\nâ€¢ PCA & applications\r\nâ€¢ Discussion of this weekâ€™s assignment', 'lecture notes', 'lecture7py.JPG', 'Presentation7-400.pdf', 'Introduction to python', 100),
(9, 'Paul Fenwick Jacinta Richardso', 'â€¢ CGI stands for Common Gateway Interface.\r\nâ€¢ HTTP stands for Hypertext Transfer Protocol. This is the protocol used for transferring documents\r\nand other files via the World Wide Web.\r\nâ€¢ HTTP clients (web browsers) send requests to HTTP (web) servers, which are answered with\r\nHTTP responses.\r\nâ€¢ All HTTP responses consist of headers and content.', 'software books', 'webdev-300.JPG', 'webdev-300.pdf', 'web development with perl', 200),
(10, 'Benjamin Zores', ' Java framework services and apps rely on Connectivity Manager\r\nand have no clue what Ethernet route/connection actually means.\r\n- Except for some apps (e.g. Browser, which relies on native implementation).\r\nâ€¢ Barely no Android device features Ethernet\r\n- Except from some obscure Chinese tablets.', 'Networking books', 'dive into andr.JPG', 'Dive_Into_Android_Networking-_Adding_Ethernet_Connectivity-300.pdf', 'Dive Into Android Networking: Adding Ethernet Connectivity', 400),
(11, 'Author knob', ' Complete serial-to-Wi-Fi wireless connectivity solution including\r\nnetwork processor, media access controller and air interface', 'Networking books', 'socke.JPG', 'SocketWireless Wi-Fi-500.pdf', 'socketwireless', 300),
(12, 'Author knob', 'The wireless revolution is underway, and devices based on radio\r\ntechnologies are expected to become a significant market in the next\r\nseveral years. Mobile phones, cordless phones, walkie-talkies, car\r\ndoor openers, and ...', 'Networking books', 'tech.JPG', 'TechBriefWireless-100.pdf', 'Bluetooth and wi-fi', 500),
(13, 'Luke corper', 'Edges: four easy options\r\nâ€¢ list of vertex pairs\r\nâ€¢ vertex-indexed adjacency arrays (adjacency matrix)\r\nâ€¢ vertex-indexed adjacency lists\r\nâ€¢ vertex-indexed adjacency SETs\r\nSame as undirected graph\r\nBUT\r\norientation of edges ', 'software books', '13.JPG', '13DirectedGraphs-300.pdf', 'Directed Graphs', 400),
(14, 'Thomas H. Cormen Charles E. Le', 'The vast majority of algorithms in this book are serial algorithms suitable for\r\nrunning on a uniprocessor computer in which only one instruction executes at a\r\ntime. ...', 'software books', '97802.JPG', '9780262033848_sch_0001-200.pdf', 'Introduction to Algorithms', 500),
(15, 'Radha Guha, Ph.D, UCI', 'Tim Berners Leeâ€™s vision of the Semantic Web or Web 3.0 is to transform the World Wide Web into an intelligent web\r\nsystem of structured, linked data which can be queried and inferred as a whole by the computers themselves. This grand vision of the\r\nweb is materializing many innovative use of the web.', 'software books', 'semanticjournalpaper-400.JPG', 'semanticjournalpaper-400.pdf', 'SOFTWARE ENGINEERING ON SEMANTIC WEB AND CLOUD COMPUTING PLATFORM', 0),
(16, 'Radha Guha, Ph.D, UCI', 'Tim Berners Leeâ€™s vision of the Semantic Web or Web 3.0 is to transform the World Wide Web into an intelligent web\r\nsystem of structured, linked data which can be queried and inferred as a whole by the computers themselves. This grand vision of the\r\nweb is materializing many innovative use of the web.', 'software books', 'semanticjournalpaper-400.JPG', 'semanticjournalpaper-400.pdf', 'SOFTWARE ENGINEERING ON SEMANTIC WEB AND CLOUD COMPUTING PLATFORM', 300),
(17, 'Stan Matwin', 'Goals of this course\r\nâ€¢ to convey and teach basic concepts of\r\nMachine Learning (ML) and Data Mining (DM)\r\nâ€¢ to outline interesting areas of current and\r\nfuture research\r\nâ€¢ to provide hands-on DM experience to\r\nstudents...', 'software books', 'set.JPG', 'set1.pdf', 'Data Mining and Concept Learning', 0),
(18, 'Thomas B. Gendreau', 'Software applications designed with a three-tiered architecture consisting of a web based\r\nuser interface, a logic layer and a database back end are very common. A natural place to\r\nintroduce this architecture into the ...', 'software books', 'Using Python  Django and MySQL in a Database-300.JPG', 'Using Python  Django and MySQL in a Database-300.pdf', 'Using Python, Django and MySQL in a Database Course', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
