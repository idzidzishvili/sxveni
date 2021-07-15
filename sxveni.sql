-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 05:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sxveni`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `servicesid` int(11) NOT NULL,
  `albumid` int(11) NOT NULL,
  `filename` varchar(250) DEFAULT NULL,
  `originalname` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `servicesid`, `albumid`, `filename`, `originalname`) VALUES
(12, 4, 1, '3c4d9e9912d54230c0331cc00dc1d48a.jpg', '1.jpg'),
(13, 4, 1, '9e2a5ae754a6995c9572e654f66c48a2.jpg', '4.jpg'),
(14, 4, 1, 'a5fba42151908fdebbc9663d9dc8e7a6.jpg', '5.jpg'),
(15, 4, 1, 'd6d82a937d2fe5125bc5e321ea9a9227.jpg', '6.jpg'),
(16, 4, 2, '5aacc589bd1174d5a5d37602809a402b.jpg', '7.jpg'),
(17, 4, 2, '29d085fb34accc778854ccdaefee3297.jpg', '8.jpg'),
(18, 4, 2, '867f7c3ffefb605d4ac7abe80079b850.jpg', '9.jpg'),
(19, 4, 2, '72e0fa430bc2786c8b852a78c2a14525.jpg', '10.jpg'),
(20, 4, 3, 'b38c5a5640e3489a153c45d649dd9a70.jpg', '11.jpg'),
(21, 4, 3, '5adbc4da08ed42c5080dfee4d230231a.jpg', '12.jpg'),
(22, 4, 3, 'cef030d1900255f75caf1d66ff40c9d0.jpg', '13.jpg'),
(23, 4, 3, '984f51c52c63fba7ca608faf54a0fa82.jpg', '14.jpg'),
(24, 4, 4, '6954316c6df9f42a692489245a34d51e.jpg', '15.jpg'),
(25, 4, 4, '49c7579700491e633a7ae1734ed93623.jpg', '16.jpg'),
(26, 4, 4, '258ca3b0704b2a9af25774a57ce078d9.jpg', '17.jpg'),
(43, 8, 1, '1078bdc888fc9dd52b2638749912fe9d.jpg', '13.jpg'),
(41, 1, 1, '395dee110db32a45b58ebe05365025e6.png', '9.png'),
(40, 1, 1, 'dc1232370f33b0104fc86481f21b3d28.png', '8.png'),
(42, 1, 1, 'da73e024ac7bcc58bc75bd5683d03e18.jpg', '13.jpg'),
(38, 1, 1, '649e07f7eb9f6cd7b7d817fab0f09e03.png', '1b.png'),
(44, 8, 1, '681af9776557a057c09b8820c68acd76.jpg', '14.jpg'),
(45, 8, 1, '52d0dde7c534846edb82f6633a925ce8.jpg', '15.jpg'),
(46, 8, 1, 'b00d550613d6d86e08bf7446a7475282.jpg', '12.jpg'),
(47, 8, 2, '16e8c0796890ab97af98d6ad66c4af4f.jpg', '21.jpg'),
(48, 8, 2, '83566e88daa0a455f9a8894a12fc1c6a.jpg', '22.jpg'),
(49, 8, 2, '057fec57b0ea679525d5bf90277461e4.jpg', '23.jpg'),
(50, 8, 2, 'e1c1d84bde41d34f779b8c56c3ce506d.jpg', '24.jpg'),
(64, 8, 4, '2caf55b8ea4ca84af0f6dd3dec911de4.jpg', '42.jpg'),
(63, 8, 4, 'b0e75d461e25f59b4ca8830855b8defc.jpg', '41.jpg'),
(62, 8, 3, 'ec05dea30999b21e17d1b404cef6b2e6.jpg', '34.jpg'),
(59, 8, 3, '683fb0fba80887ae7a673e092ba456c3.jpg', '31.jpg'),
(60, 8, 3, '36ebed0dcb9ea97b71884bf725fefac6.jpg', '32.jpg'),
(61, 8, 3, 'd0ef6eb8a5477cabb489ce5d6ac3ec87.jpg', '33.jpg'),
(65, 8, 4, 'da12c38e7bac65a8168c496dd06288e4.jpg', '43.jpg'),
(66, 8, 4, '3b46a7c91a92e67da064573e09ebc291.jpg', '44.jpg'),
(67, 3, 1, 'f8d2304213287c43d2c3ce7eab66f78b.mp3', 'file_34.mp3'),
(68, 3, 1, '714e6c28f39a026c5373e3e0fd4b2fe4.mp3', 'file_31.mp3'),
(69, 3, 1, '4673b8d2979b1c361d54dc1b57142128.mp3', 'file_31.mp3'),
(70, 3, 2, '9f412600c06f6bd2bf78873a871796be.mp3', 'file_32.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `originalname` varchar(250) DEFAULT NULL,
  `filename` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `originalname`, `filename`, `url`) VALUES
(12, 'gucci-logo.png', 'e8c13aa52e85a25a689c6e797c84c210.png', 'http://www.gucci.com'),
(11, 'cocacola.jpg', '5860667eafc6fa999e109e50719a1d83.jpg', 'http://www.coca-cola.com'),
(9, 'amazon.jpg', '480a83bd70c67144d897673db0af3ba9.jpg', 'http://www.amazon.com'),
(10, 'samsung-logo.png', 'b49c24e35a16fbfe0d7311442a4ebb0c.png', 'http://www.samsung.com'),
(13, '309Adidas_logo.jpg', '07edc891644f11691a8b7e7388ba560e.jpg', 'http://www.adidas.com'),
(14, 'fila-shoe-brands-list-logo.jpg', '26c3f87bcecc7f8ca54bdf9c6297bf30.jpg', 'http://www.fila.com'),
(15, '800px-Under_armour_logo.svg.png', '2373c2548d053171879cc1d4ee8a0417.png', 'http://www.under-armour.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `content_type` varchar(20) DEFAULT NULL,
  `issimple` tinyint(1) NOT NULL,
  `name_ge` varchar(250) DEFAULT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `name_ru` varchar(250) DEFAULT NULL,
  `text_ge` text,
  `text_en` text,
  `text_ru` text,
  `file1` varchar(200) DEFAULT NULL,
  `file2` varchar(200) DEFAULT NULL,
  `file3` varchar(200) DEFAULT NULL,
  `file4` varchar(200) DEFAULT NULL,
  `img1` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `img3` varchar(200) DEFAULT NULL,
  `img4` varchar(200) DEFAULT NULL,
  `imgge1` varchar(250) NOT NULL,
  `imgen1` varchar(250) NOT NULL,
  `imgru1` varchar(250) NOT NULL,
  `imgge2` varchar(250) NOT NULL,
  `imgen2` varchar(250) NOT NULL,
  `imgru2` varchar(250) NOT NULL,
  `imgge3` varchar(250) NOT NULL,
  `imgen3` varchar(250) NOT NULL,
  `imgru3` varchar(250) NOT NULL,
  `imgge4` varchar(250) NOT NULL,
  `imgen4` varchar(250) NOT NULL,
  `imgru4` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `content_type`, `issimple`, `name_ge`, `name_en`, `name_ru`, `text_ge`, `text_en`, `text_ru`, `file1`, `file2`, `file3`, `file4`, `img1`, `img2`, `img3`, `img4`, `imgge1`, `imgen1`, `imgru1`, `imgge2`, `imgen2`, `imgru2`, `imgge3`, `imgen3`, `imgru3`, `imgge4`, `imgen4`, `imgru4`) VALUES
(1, 'image', 0, 'ფოტო', 'Photo', 'Фото', 'ფოტოსურათი (ასევე ცნობილი როგორც ფოტო) არის სურათი, რომელიც იქმნება ფოტომგრძნობიარე ზედაპირზე, ჩვეულებრივ, ფოტოგრაფიული ფილმი ან ელექტრონული გამოსახულების სენსორი, მაგალითად CCD ან CMOS ჩიპი. ფოტოების უმეტესობა შექმნილია სმარტფონის / კამერის გამოყენებით, რომელიც იყენებს ობიექტივს სცენის ხილული სინათლის ტალღის სიგრძეზე ფოკუსირებისთვის,', 'A photograph (also known as a photo) is an image created by light falling on a photosensitive surface, usually photographic film or an electronic image sensor, such as a CCD or a CMOS chip. Most photographs are created using a smartphone/camera, which uses a lens to focus the scene\'s visible wavelengths of light into a reproduction of what the human eye would see. The process and practice of creating such images is called photography.', 'Фотография (также известная как фотография) - это изображение, создаваемое светом, падающим на светочувствительную поверхность, обычно на фотопленку или электронный датчик изображения, такой как ПЗС или КМОП-чип. Большинство фотографий создаются с помощью смартфона / камеры, в которых используется объектив для фокусировки видимых длин волн света сцены в воспроизведении', NULL, NULL, NULL, NULL, 'file_11.png', 'file_12.png', 'file_13.png', 'file_14.png', 'file_ge11.jpg', 'file_en11.jpg', 'file_ru11.jpg', 'file_ge12.jpg', 'file_en12.jpg', 'file_ru12.jpg', 'file_ge13.jpg', 'file_en13.jpg', 'file_ru13.jpg', 'file_ge14.jpg', 'file_en14.jpg', 'file_ru14.jpg'),
(2, 'video', 1, 'ვიდეო', 'Video', 'Видео', 'ვიდეო არის ელექტრონული საშუალება, მოძრავი ვიზუალური საშუალებების ჩაწერის, კოპირების, დაკვრის, მაუწყებლობისა და ჩვენებისთვის. [1] ვიდეო პირველად შეიქმნა მექანიკური სატელევიზიო სისტემებისთვის, რომლებიც სწრაფად ჩაანაცვლეს კათოდური სხივების (CRT) სისტემებით, რომლებიც შემდგომ შეიცვალა რამდენიმე ტიპის ბრტყელი პანელის ეკრანებით.', 'Video is an electronic medium for the recording, copying, playback, broadcasting, and display of moving visual media.[1] Video was first developed for mechanical television systems, which were quickly replaced by cathode ray tube (CRT) systems which were later replaced by flat panel displays of several types.', 'Видео - это электронный носитель для записи, копирования, воспроизведения, трансляции и отображения движущихся визуальных носителей. Видео впервые было разработано для механических телевизионных систем, которые были быстро заменены системами с электронно-лучевой трубкой (ЭЛТ), которые позже были заменены плоскими дисплеями нескольких типов.', '1Yjm9HlIaJo', 'qrO4YZeyl0I', '4zHm_6AQ7CY', 'cedoBlUvBlI', 'file_21.jpg', NULL, NULL, NULL, 'file_ge21.jpg', 'file_en21.jpg', 'file_ru21.jpg', 'file_ge22.jpg', 'file_en22.jpg', 'file_ru22.jpg', 'file_ge23.jpg', 'file_en23.jpg', 'file_ru23.jpg', 'file_ge24.jpg', 'file_en24.jpg', 'file_ru24.jpg'),
(3, 'audio', 1, 'აუდიო', 'Audio', 'Аудио', 'აუდიო არის ტერმინი, რომელიც აღწერს ნებისმიერ ხმას ან ხმაურს იმ დიაპაზონში, რომლის მოსმენაც შეუძლია ადამიანის ყურს. იზომება ჰერცებში, აუდიო სიგნალი კომპიუტერზე წარმოიქმნება ხმის ბარათის გამოყენებით და ისმის დინამიკებით ან ყურსასმენებით.', 'Audio is a term used to describe any sound or noise in a range the human ear is capable of hearing. Measured in hertz, the audio signal on a computer is generated using a sound card and heard through speakers or headphones.', 'Аудио - это термин, используемый для описания любого звука или шума в диапазоне, который человеческое ухо может слышать. Аудиосигнал на компьютере, измеряемый в герцах, генерируется с помощью звуковой карты и слышен через динамики или наушники.', 'a9e47302d8b41df824d1ed40b803281f.mp3', '66a4e966c4860666088623d298f31e63.mp3', '76a9bcd89601d559322bd552dff58ec9.mp3', NULL, NULL, NULL, NULL, NULL, 'file_ge31.jpg', '', '', 'file_ge32.jpg', '', '', '', '', '', '', '', ''),
(4, 'video', 1, 'გახმოვანება', 'Dubbing', 'Ozvuchka', 'დუბლირება, მიქსინგი ან ხელახალი ჩაწერა არის პოსტპროდუქციული პროცესი, რომელიც გამოიყენება კინემატოგრაფიასა და ვიდეოს წარმოებაში, რომელშიც დამატებითი ან დამატებითი ჩანაწერები ტუჩის სინქრონიზაციით ხდება და \"ერევა\" ორიგინალ საწარმოო ხმას მზა საუნდტრეკის შესაქმნელად.', 'Dubbing, mixing or re-recording, is a post-production process used in filmmaking and video production in which additional or supplementary recordings are lip-synced and \"mixed\" with original production sound to create the finished soundtrack.', 'Перезапись, микширование или перезапись - это процесс постпроизводства, используемый в кинопроизводстве и видеопроизводстве, при котором дополнительные или дополнительные записи синхронизируются по губам и «смешиваются» с исходным производственным звуком для создания законченного саундтрека.', 'UGF9wn_sGkM', 'RyAy-mH4xqc', '4v9siFXYiBY', '6HyqXjuusHg', 'thumbnail81.png', 'thumbnail82.jpg', 'thumbnail83.png', 'thumbnail84.jpg', 'file_ge41.jpg', 'file_en41.jpg', 'file_ru41.jpg', 'file_ge42.jpg', 'file_en42.jpg', 'file_ru42.jpg', 'file_ge43.jpg', 'file_en43.jpg', 'file_ru43.jpg', 'file_ge44.jpg', 'file_en44.jpg', 'file_ru44.jpg'),
(5, 'video', 1, 'ადაპტაცია', 'Adaptation', 'Адаптация', 'კინოადაპტაცია არის ნაწარმოების ან მოთხრობის, მთლიანად ან ნაწილობრივ გადაცემა მხატვრულ ფილმზე. მიუხედავად იმისა, რომ ხშირად განიხილება წარმოებული ნაწარმოების ტიპად, ბოლო დროს კინოადაპტაციის კონცეპტუალიზაცია მოახდინეს აკადემიურმა მეცნიერებმა, როგორიცაა რობერტ სტამი, როგორც დიალოგის პროცესი.', 'A film adaptation is the transfer of a work or story, in whole or in part, to a feature film. Although often considered a type of derivative work, film adaptation has been conceptualized recently by academic scholars such as Robert Stam as a dialogic process.', 'Киноадаптация - это перевод произведения или рассказа полностью или частично в художественный фильм. Хотя киноадаптация часто считается производным произведением, она была концептуализирована недавно академическими учеными, такими как Роберт Стэм, как диалогический процесс.', 'gwBEmyqOP3o', '5nPWw7sHRVk', 'IZCuACzUTRA', 'RQUeQ-SzQ8k', 'thumbnail71.jpg', 'thumbnail72.jpg', 'thumbnail73.jpg', 'thumbnail74.jpg', 'file_ge51.jpg', 'file_en51.jpg', 'file_ru51.jpg', 'file_ge52.jpg', 'file_en52.jpg', 'file_ru52.jpg', 'file_ge53.jpg', 'file_en53.jpg', 'file_ru53.jpg', 'file_ge54.jpg', 'file_en54.jpg', 'file_ru54.jpg'),
(6, 'video', 1, 'გრაფიკა', 'Graphic', 'Графика', 'კომპიუტერული გრაფიკა ეხება კომპიუტერების დახმარებით სურათების წარმოქმნას. დღეს კომპიუტერული გრაფიკა არის ძირითადი ტექნოლოგია ციფრული ფოტოგრაფიის, კინოს, ვიდეო თამაშების, მობილური ტელეფონისა და კომპიუტერის ეკრანებში და მრავალ სპეციალიზირებულ პროგრამაში. შემუშავებულია მრავალი სპეციალიზებული აპარატურა და პროგრამული უზრუნველყოფა, უმეტეს მოწყობილობების ეკრანებზე კომპიუტერული გრაფიკული აპარატურა მუშაობს.', 'Computer graphics deals with generating images with the aid of computers. Today, computer graphics is a core technology in digital photography, film, video games, cell phone and computer displays, and many specialized applications. A great deal of specialized hardware and software has been developed, with the displays of most devices being driven by computer graphics hardware.', 'Компьютерная графика занимается созданием изображений с помощью компьютеров. Сегодня компьютерная графика является основной технологией цифровой фотографии, кино, видеоигр, дисплеев мобильных телефонов и компьютеров, а также многих специализированных приложений. Было разработано большое количество специализированного оборудования и программного обеспечения, при этом дисплеи большинства устройств управляются аппаратными средствами компьютерной графики.', 'RQUeQ-SzQ8k', 'X5VMxWBgm4k', 'mF_4yxnvyAA', 'zIDpZi-36Qs', 'thumbnail51.jpg', 'thumbnail52.png', 'thumbnail53.jpg', 'thumbnail54.jpg', 'file_ge61.jpg', 'file_en61.jpg', 'file_ru61.jpg', 'file_ge62.jpg', 'file_en62.jpg', 'file_ru62.jpg', 'file_ge63.jpg', 'file_en63.jpg', 'file_ru63.jpg', 'file_ge64.jpg', 'file_en64.jpg', 'file_ru64.jpg'),
(7, 'video', 1, 'ანიმაცია', 'Animation', 'Анимация', 'ანიმაცია არის მეთოდი, როდესაც ფიგურებით მანიპულირება ხდება, რომ მოძრავი სურათები იყოს. ტრადიციულ ანიმაციაში სურათებს ხატავს ან ხატავს ხელით გამჭვირვალე ცელულოიდურ ფურცლებზე, რომ გადაიღოს და გამოფინოს ფილმზე. დღეს ანიმაციების უმეტესობა კომპიუტერში წარმოქმნილი გამოსახულებებით არის შექმნილი.', 'Animation is a method in which figures are manipulated to appear as moving images. In traditional animation, images are drawn or painted by hand on transparent celluloid sheets to be photographed and exhibited on film. Today, most animations are made with computer-generated imagery (CGI).', 'Анимация - это метод, при котором фигуры превращаются в движущиеся изображения. В традиционной анимации изображения рисуются или раскрашиваются вручную на прозрачных целлулоидных листах для фотографирования и демонстрации на пленке. Сегодня большинство анимаций создается с помощью компьютерных изображений (CGI).', '-tDicEZoPsE', '5nPWw7sHRVk', 'IZCuACzUTRA', 'T1DelzsvEeU', 'thumbnail61.jpg', 'thumbnail62.jpg', 'thumbnail63.jpg', 'thumbnail64.jpg', 'file_ge71.jpg', 'file_en71.jpg', 'file_ru71.jpg', 'file_ge72.jpg', 'file_en72.jpg', 'file_ru72.jpg', 'file_ge73.jpg', 'file_en73.jpg', 'file_ru73.jpg', 'file_ge74.jpg', 'file_en74.jpg', 'file_ru74.jpg'),
(8, 'image', 0, 'დიზაინი', 'Design', 'Дизайн', 'დიზაინი არის გეგმა ან სპეციფიკაცია ობიექტის ან სისტემის მშენებლობის ან საქმიანობის ან პროცესის განსახორციელებლად, ან ამ გეგმის ან დაზუსტების შედეგი პროტოტიპის, პროდუქტის ან პროცესის სახით. დიზაინის ზმნა გამოხატავს დიზაინის შემუშავების პროცესს.', 'A design is a plan or specification for the construction of an object or system or for the implementation of an activity or process, or the result of that plan or specification in the form of a prototype, product or process. The verb to design expresses the process of developing a design.', 'Дизайн - это план или спецификация для построения объекта или системы или для реализации деятельности или процесса, или результат этого плана или спецификации в форме прототипа, продукта или процесса. Глагол to design выражает процесс разработки дизайна.', NULL, NULL, NULL, NULL, 'file_41.jpg', 'file_42.jpg', 'file_43.jpg', 'file_44.jpg', 'file_ge81.jpg', 'file_en81.jpg', 'file_ru81.jpg', 'file_ge82.jpg', 'file_en82.jpg', 'file_ru82.jpg', 'file_ge83.jpg', 'file_en83.jpg', 'file_ru83.jpg', 'file_ge84.jpg', 'file_en84.jpg', 'file_ru84.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siteparams`
--

CREATE TABLE `siteparams` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text_ge` varchar(250) DEFAULT NULL,
  `text_en` varchar(250) DEFAULT NULL,
  `text_ru` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siteparams`
--

INSERT INTO `siteparams` (`id`, `title`, `text_ge`, `text_en`, `text_ru`) VALUES
(1, 'menu_services', 'სერვისები', 'SERVICES', 'СЕРВИСЫ'),
(2, 'menu_portfolio', 'პორტფოლიო', 'PORTFOLIO', 'ПОРТФОЛИО'),
(3, 'menu_partners', 'პარტნიორები', 'PARTNERS', 'ПАРТНЕРЫ'),
(4, 'menu_contact', 'კონტაქტი', 'CONTACT', 'КОНТАКТ'),
(5, 'address', 'თბილისი, უზნაძის N24', 'Uznadze st, Tbilisi, Georgia', 'Узнадзе, Тбилиси, Грузия'),
(6, 'phone', '(+995) 596366366', NULL, NULL),
(7, 'email', 'info@skhveni.ge', NULL, NULL),
(8, 'Facebook page', 'http://www.facebook.com/iasudhaiudahiasud', NULL, NULL),
(9, 'Instagram page', 'http://www.instagram.com/iasudhaiudahdiasud', NULL, NULL),
(10, 'Linkedin page', 'http://www.linkedin.com/iasudhaiudahdiasud', NULL, NULL),
(11, 'Youtube page', 'http://www.youtube.com/iasudhaiuda8diasud', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'artur', '$2y$10$Pm.R9j0QhGOAbmEQ5a8ewueuRcWVTk9H.xjc2Q.w9JPojrKf8f4q6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteparams`
--
ALTER TABLE `siteparams`
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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siteparams`
--
ALTER TABLE `siteparams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
