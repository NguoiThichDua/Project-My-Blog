-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 03:33 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `coding`
--

CREATE TABLE `coding` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` varchar(5555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(5555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noImage.jpg',
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noImage.jpg',
  `image_3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noImage.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coding`
--

INSERT INTO `coding` (`id`, `title`, `introduce`, `body`, `user_id`, `image_1`, `image_2`, `image_3`, `created_at`, `updated_at`) VALUES
(6, 'Hàng Trăm Triệu Máy Tính Windows 10 Dễ Bị Hack Vì Lỗi Nhà Sản Xuất', '<p><em><strong>Windows 10 đ&atilde; qu&aacute; đủ vấn đề cần xử l&yacute;, nhưng c&aacute;c đối t&aacute;c của Microsoft lại khiến t&igrave;nh h&igrave;nh trở n&ecirc;n tồi tệ hơn.</strong></em></p>', '<p>Ng&agrave;y 29/3, SafeBreach đ&atilde; ph&aacute;t hiện lỗi nghi&ecirc;m trọng cho ph&eacute;p tin tặc thay đổi tệp DLL để ti&ecirc;m m&atilde; độc v&agrave;o m&aacute;y t&iacute;nh, từ đ&oacute; kiểm so&aacute;t ho&agrave;n to&agrave;n hệ thống. Dell sau đ&oacute; l&ecirc;n tiếng x&aacute;c nhận v&agrave; tung ra bản v&aacute; v&agrave;o cuối th&aacute;ng trước.</p>\r\n\r\n<p>SpportAssist l&agrave; phần mềm chẩn đo&aacute;n t&igrave;nh trạng sức khỏe phần cứng hệ thống. V&igrave; thế, n&oacute; c&oacute; khả năng truy cập v&agrave;o bộ nhớ vật l&yacute;, PCI, SMBios v&agrave; nhiều chi tiết nhạy cảm kh&aacute;c. Khi đ&atilde; ti&ecirc;m m&atilde; độc v&agrave;o c&ocirc;ng cụ n&agrave;y, hacker r&otilde; r&agrave;ng c&oacute; nhiều cơ hội để kiểm so&aacute;t m&aacute;y t&iacute;nh người d&ugrave;ng.</p>\r\n\r\n<p>Module bị ảnh hưởng tr&ecirc;n SupportAssist l&agrave; một phi&ecirc;n bản của PC-Doctor Toolbox. N&oacute; c&ograve;n được t&igrave;m thấy tr&ecirc;n thiết bị của nhiều nh&agrave; sản xuất kh&aacute;c như Corsair, Staples hay Tobii. D&ugrave; c&aacute;c b&ecirc;n đ&atilde; t&iacute;ch cực t&igrave;m hướng giải quyết nhưng chưa thể xử l&yacute; dứt điểm vấn đề.</p>\r\n\r\n<p>SafeBreach vừa ph&aacute;t hiện th&ecirc;m nhiều trường hợp tương tự. Người d&ugrave;ng Windows 10 kh&ocirc;ng hề biết m&igrave;nh đang gặp nguy hiểm v&igrave; tin d&ugrave;ng c&aacute;c phần mềm gốc của nh&agrave; sản xuất.</p>', 12, 'dellpc1.1561521789.jpeg', 'Windows-10-1803-800x600-696x522.1561517662.png', 'dellpc21.1561517662.jpeg', '2019-06-25 19:54:22', '2019-06-25 21:03:09'),
(7, '2 thư viện HTML5 Player tốt nhất mà bạn nên biết', '<p>Hiện nay như mọi người cũng biết, với&nbsp;<code>HTML5</code>&nbsp;th&igrave; việc ph&aacute;t c&aacute;c Video hay Audio v&ocirc; c&ugrave;ng đơn giản tr&ecirc;n c&aacute;c tr&igrave;nh duyệt, tuy nhi&ecirc;n trong c&aacute;c ứng dụng lớn th&igrave; việc sử dụng c&aacute;c thư viện hỗ trợ khiến cho lập tr&igrave;nh vi&ecirc;n giảm tải khối lượng code đi rất nhiều. Tuy vậy, số lượng c&aacute;c thư viện HTML5 Player rất l&agrave; lớn, để t&igrave;m được một thư viện tốt v&agrave; ph&ugrave; hợp với ứng dụng cũng &iacute;t nhiều ti&ecirc;u tốn đi của bạn kha kh&aacute; thời gian. Ch&iacute;nh v&igrave; vậy, trong b&agrave;i viết n&agrave;y m&igrave;nh sẽ giới thiệu với c&aacute;c bạn một thư số viện Player m&agrave; m&igrave;nh thấy tốt nhất.</p>', '<h2>1. Plyr</h2>\r\n\r\n<p>Đ&acirc;y l&agrave; một thư viện kh&aacute; đơn giản để sử dụng, dễ d&agrave;ng tiếp cận v&agrave; t&ugrave;y chỉnh.&nbsp;<code>Plyr</code>&nbsp;kh&aacute; phổ biến đối với c&aacute;c lập tr&igrave;nh vi&ecirc;n mới bắt đầu cũng như l&acirc;u năm v&igrave; thiết kế nhỏ gọn nhưng n&oacute; xử l&yacute; rất mượt m&agrave;, kể cả đối với c&aacute;c Video c&oacute; k&iacute;ch thước lớn. N&oacute; hỗ trợ cho cả&nbsp;<code>HTML5 Video</code>,&nbsp;<code>HTML5 Audio</code>,&nbsp;<code>Youtue</code>&nbsp;v&agrave;&nbsp;<code>Vimeo</code>.</p>\r\n\r\n<ul>\r\n	<li>Hỗ trợ đầy đủ cho c&aacute;c tr&igrave;nh đọc m&agrave;n h&igrave;nh v&agrave; phụ đề.</li>\r\n	<li>Nền tảng t&ugrave;y biến cao cho ph&eacute;p người d&ugrave;ng thay đổi giao diện t&ugrave;y theo lựa chọn của họ.</li>\r\n	<li>Hỗ trợ responsive cho bất k&igrave; k&iacute;ch thước m&agrave;n h&igrave;nh n&agrave;o.</li>\r\n	<li>Hỗ trợ c&aacute;c ph&iacute;m tắt điều khiển Player tr&ecirc;n b&agrave;n ph&iacute;m.</li>\r\n	<li>Hỗ trợ&nbsp;<code>hls.js</code>,&nbsp;<code>Shaka</code>&nbsp;v&agrave;&nbsp;<code>dash.js</code>&nbsp;cho việc&nbsp;<strong>streaming video, audio</strong>.</li>\r\n	<li>Hỗ trợ đa ng&ocirc;n ngữ (<code>i18n</code>)</li>\r\n	<li>&hellip;.</li>\r\n</ul>\r\n\r\n<p>Đ&acirc;y l&agrave; cứu tinh trong đồ &aacute;n của m&igrave;nh, c&aacute; nh&acirc;n m&igrave;nh cực k&igrave; th&iacute;ch&nbsp;<code>Plyr</code>&nbsp;v&igrave; n&oacute; cực k&igrave; dễ sử dụng cũng như khả năng t&ugrave;y biến rất linh hoạt của n&oacute;. Ngo&agrave;i ra&nbsp;<code>Plyr</code>&nbsp;c&ograve;n hỗ trợ cho một số Framework Frontend như&nbsp;<code>VueJs</code>,&nbsp;<code>ReactJs</code>,&nbsp;<code>Angular</code>,..</p>\r\n\r\n<h2>2. Video.js</h2>\r\n\r\n<p>Đ&acirc;y l&agrave; một thư viện Video player kh&aacute; phổ biến, hiện tại n&oacute; c&oacute; hơn 25k star tr&ecirc;n Github, rất th&iacute;ch hợp cho những người th&iacute;ch Video được thiết kế từ HTML5. N&oacute; được ra mắt từ năm 2010 v&agrave; hiện đang phục vụ trong hơn 400,000 trang web kh&aacute;c nhau.&nbsp;<code>Video.js</code>tu&acirc;n theo c&aacute;c giao thức của&nbsp;<code>Flash Video</code>&nbsp;v&agrave;&nbsp;<code>HTML5 Video</code>, n&oacute; c&ograve;n hỗ trợ cho cả&nbsp;<code>Vimeo</code>v&agrave;&nbsp;<code>Youtube</code>.</p>\r\n\r\n<p>Một số ưu điểm của&nbsp;<code>Video.jS</code>:</p>\r\n\r\n<ul>\r\n	<li>Đơn giản, dễ d&agrave;ng c&agrave;i đặt v&agrave; thiết lập.</li>\r\n	<li>Dễ d&agrave;ng t&ugrave;y chỉnh giao diện player bởi v&igrave; n&oacute; được x&acirc;y dựng bằng CSS v&agrave; HTML.</li>\r\n	<li>Hỗ trợ chế độ ph&aacute;t lại (Playback) tr&ecirc;n m&aacute;y t&iacute;nh v&agrave; điện thoại.</li>\r\n	<li>Với nhiều plugins n&acirc;ng cao hỗ trợ dễ d&agrave;ng c&aacute;c nền tảng truyền th&ocirc;ng v&agrave; x&atilde; hội.</li>\r\n	<li>Hỗ trợ nhiều định dạng Video.</li>\r\n	<li>&hellip;</li>\r\n</ul>\r\n\r\n<p>Nếu ứng dụng của bạn chỉ thi&ecirc;n về việc xử l&yacute; Video th&igrave; đ&acirc;y l&agrave; một Player kh&aacute; tuyệt vời. Tuy nhi&ecirc;n nếu ứng dụng của bạn c&ograve;n cần xử l&yacute; cả Audio nữa th&igrave;&nbsp;<code>Video.js</code>&nbsp;kh&ocirc;ng th&iacute;ch hợp lắm, bởi v&igrave;&nbsp;<code>Video.js</code>&nbsp;kh&ocirc;ng hỗ trợ mạnh đối với Audio.</p>', 12, 'html5-696x522.1561522042.jpeg', 'ec169bdd-4328-4f0f-b2b4-4649381b667d.1561522042.png', '757ff7c5-a463-4e4f-82f4-0734b59a8062.1561522042.png', '2019-06-25 21:07:22', '2019-06-25 21:07:57'),
(8, 'Code, Code Là Tất Cả!! Code Ơi Code Ơi!! Code Là Tất Cả!!', '<blockquote>\r\n<p><em>Hiển nhi&ecirc;n, khi đ&atilde; x&aacute;c định theo đuổi đam m&ecirc; lập tr&igrave;nh, ai cũng rất y&ecirc;u code, th&iacute;ch code, m&ecirc; mẩn với code. V&agrave; việc code thường xuy&ecirc;n sẽ gi&uacute;p ch&uacute;ng ta trở th&agrave;nh một lập tr&igrave;nh vi&ecirc;n giỏi hơn. Những bức h&igrave;nh h&oacute;m hỉnh dưới đ&acirc;y l&agrave; minh chứng cho t&igrave;nh y&ecirc;u bất diệt với ng&agrave;nh lập tr&igrave;nh. Nhưng n&oacute;i g&igrave; th&igrave; n&oacute;i, c&aacute;c bạn vẫn phải c&acirc;n bằng c&ocirc;ng việc với cuộc sống nh&eacute; :))</em></p>\r\n</blockquote>', '<p>Việc n&agrave;y giống như ch&uacute;ng ta sắp đặt lại hệ thống điện trong nh&agrave; theo một c&aacute;ch khoa học hơn nhưng vẫn đảm giữ nguy&ecirc;n vị tr&iacute; v&agrave; chức năng của những c&ocirc;ng tắc, ổ cắm tr&ecirc;n tường. T&ocirc;i muốn lấy v&iacute; dụ n&agrave;y để bạn hiểu rằng, những g&igrave; nh&oacute;m ph&aacute;t triển l&agrave;m với code refactoring ho&agrave;n to&agrave;n &ldquo;nằm trong bức tường&rdquo;, nơi m&agrave; kh&aacute;ch h&agrave;ng ho&agrave;n to&agrave;n kh&ocirc;ng nh&igrave;n hay cảm nhận được; nhưng lại rất quan trọng, đặc biệt trong dự &aacute;n thực h&agrave;nh Agile.&nbsp;<em>&ldquo;T&ocirc;i muốn c&oacute; một ổ cắm điện ở vị tr&iacute; n&agrave;y&rdquo;</em>, sau 10 lần ho&agrave;n th&agrave;nh y&ecirc;u cầu đ&oacute; từ kh&aacute;ch h&agrave;ng, hệ thống d&acirc;y điện chắc chắn sẽ chứa nhiều bất cập v&agrave; kh&ocirc;ng dễ bảo tr&igrave;. Việc sắp đặt lại những d&acirc;y điện n&agrave;y một c&aacute;ch hợp l&yacute; nhưng vẫn đảm bảo được chức năng hiện c&oacute; gi&uacute;p ch&uacute;ng ta sẵn s&agrave;ng cho y&ecirc;u cầu về một ổ cắm điện thứ 11. V&agrave; thật may l&agrave; code refactoring th&igrave; thường kh&ocirc;ng &ldquo;tốn k&eacute;m&rdquo; v&agrave; phức tạp như việc đục c&aacute;c bức tường để sắp đặt lại hệ thống d&acirc;y điện. V&igrave; vậy, ch&uacute;ng ta cũng c&oacute; thể (v&agrave; n&ecirc;n)&nbsp; l&agrave;m việc n&agrave;y thường xuy&ecirc;n.</p>\r\n\r\n<p><strong>Thực hiện code refactoring như thế n&agrave;o?&nbsp;</strong>Vấn đề n&agrave;y thậm ch&iacute; l&agrave; qu&aacute; nhiều cho cả một cuốn s&aacute;ch. Những c&aacute;ch thức đơn giản nhất bạn c&oacute; thể tham khảo tại&nbsp;<a href=\"http://refactoring.com/\" target=\"_new\">http://refactoring.com</a>&nbsp;của huyền thoại Martin Fowler. Tại đ&acirc;y bạn c&oacute; thể tham khảo những kỹ thuật đơn giản nhất v&agrave; dấu hiệu nhận biết một đoạn code c&oacute; thể được refactor; từ chuyện đơn giản nhất như chuyển 2 đoạn code giống nhau th&agrave;nh một h&agrave;m đến sự li&ecirc;n kết giữa c&aacute;c đối tượng nhằm đảm bảo t&iacute;nh hướng đối tượng của chương tr&igrave;nh. Trang web n&agrave;y thực sự hữu &iacute;ch với những hệ thống thiết kế theo tư tưởng hướng đối tượng (ph&ugrave; hợp với đa số những m&atilde; nguồn hiện giờ), nhưng cũng rất tốt với những tư tưởng lập tr&igrave;nh kh&aacute;c.</p>\r\n\r\n<p>Tuy vậy, vẫn sẽ c&oacute; những chuẩn chung để một đoạn code được coi l&agrave; &ldquo;tốt&rdquo; hay &ldquo;dở&rdquo;; v&iacute; dụ, đặt t&ecirc;n biến l&agrave;&nbsp;<em>a</em>&nbsp;l&agrave; điều kh&ocirc;ng chấp nhận được trong ph&aacute;t triển phần mềm (nơi duy nh&acirc;t t&ocirc;i thấy c&aacute;ch đặt t&ecirc;n biến n&agrave;y ph&aacute;t huy t&aacute;c dụng l&agrave; trong những cuộc thi lập tr&igrave;nh với source code ngắn v&agrave; thời gian ganh đua t&iacute;nh bằng mili gi&acirc;y). V&agrave; h&atilde;y nhớ rằng, code refactoring kh&ocirc;ng l&agrave;m thay đổi h&agrave;nh vi của chức năng hay hệ thống; do đ&oacute;, kết quả của việc kiểm thử phải kh&ocirc;ng đổi.</p>', 12, 'code-refactoring-techtalk-696x464.1561523881.jpeg', 'dbzn9sooxih9-696x522.1561523881.jpeg', '250.1561523881.jpeg', '2019-06-25 21:38:01', '2019-06-27 02:00:37'),
(9, 'Chạy Laravel Tinker ngay trên trình duyệt', '<p>Artisan tinker l&agrave; một trong những thứ l&agrave;m n&ecirc;n sức mạnh của Laravel, gi&uacute;p bạn thao t&aacute;c với ứng dụng của m&igrave;nh ngay tr&ecirc;n Terminal. Tuy nhi&ecirc;n khi thực hiện một v&agrave;i đoạn code c&ugrave;ng l&uacute;c hoặc copy/paste code c&oacute; thể g&acirc;y đ&ocirc;i ch&uacute;t kh&oacute; chịu. Sẽ thật tuyệt nếu c&oacute; thể chạy tinker ngay tr&ecirc;n tr&igrave;nh duyệt nhỉ?</p>', '<p>Package n&agrave;y c&oacute; thể cho ph&eacute;p bạn chạy bất kỳ đoạn code n&agrave;o tr&ecirc;n ứng dụng của bạn, thế n&ecirc;n h&atilde;y thận trọng khi c&agrave;i package n&agrave;y tr&ecirc;n m&ocirc;i trường production v&igrave; n&oacute; c&oacute; thể ảnh hưởng đến data đấy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&lt;span class=&quot;token keyword&quot;&gt;return&lt;/span&gt; &lt;span class=&quot;token punctuation&quot;&gt;[&lt;/span&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;token comment&quot;&gt;/*</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; * The web tinker page will be available on this path.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; * Đường dẫn để sử dụng tinker tr&ecirc;n tr&igrave;nh duyệt</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; */&lt;/span&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;token single-quoted-string string&quot;&gt;&#39;path&#39;&lt;/span&gt; &lt;span class=&quot;token operator&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;token operator&quot;&gt;&amp;gt;&lt;/span&gt; &lt;span class=&quot;token single-quoted-string string&quot;&gt;&#39;/tinker&#39;&lt;/span&gt;&lt;span class=&quot;token punctuation&quot;&gt;,&lt;/span&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;token comment&quot;&gt;/*</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; * Possible values are &#39;auto&#39;, &#39;light&#39; and &#39;dark&#39;.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; */&lt;/span&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;token single-quoted-string string&quot;&gt;&#39;theme&#39;&lt;/span&gt; &lt;span class=&quot;token operator&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;token operator&quot;&gt;&amp;gt;&lt;/span&gt; &lt;span class=&quot;token single-quoted-string string&quot;&gt;&#39;auto&#39;&lt;/span&gt;&lt;span class=&quot;token punctuation&quot;&gt;,&lt;/span&gt;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;token comment&quot;&gt;/*</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; * By default this package will only run in local development.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; * Do not change this, unless you know what your are doing.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; * Mặc định package n&agrave;y chỉ hoạt động ở m&ocirc;i trường local, nếu bạn muốn</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; * đổi c&agrave;i đặt n&agrave;y, h&atilde;y đọc lại phần cảnh b&aacute;o b&ecirc;n tr&ecirc;n =))</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; */&lt;/span&gt;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;span class=&quot;token single-quoted-string string&quot;&gt;&#39;enabled&#39;&lt;/span&gt; &lt;span class=&quot;token operator&quot;&gt;=&lt;/span&gt;&lt;span class=&quot;token operator&quot;&gt;&amp;gt;&lt;/span&gt; &lt;span class=&quot;token function&quot;&gt;env&lt;/span&gt;&lt;span class=&quot;token punctuation&quot;&gt;(&lt;/span&gt;&lt;span class=&quot;token single-quoted-string string&quot;&gt;&#39;APP_ENV&#39;&lt;/span&gt;&lt;span class=&quot;token punctuation&quot;&gt;)&lt;/span&gt; &lt;span class=&quot;token operator&quot;&gt;===&lt;/span&gt; &lt;span class=&quot;token single-quoted-string string&quot;&gt;&#39;local&#39;&lt;/span&gt;&lt;span class=&quot;token punctuation&quot;&gt;,&lt;/span&gt;</p>\r\n\r\n<p>&lt;span class=&quot;token punctuation&quot;&gt;]&lt;/span&gt;&lt;span class=&quot;token punctuation&quot;&gt;;&lt;/span&gt;</p>', 12, 'laravel-ernakulam-696x522.1561773138.png', '68747470733a2f2f7370617469652e6769746875622e696f2f6c61726176656c2d7765622d74696e6b65722f6c696768742e706e67.1561773138.png', '68747470733a2f2f7370617469652e6769746875622e696f2f6c61726176656c2d7765622d74696e6b65722f6461726b2e706e67.1561773138.png', '2019-06-28 18:52:18', '2019-06-28 18:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `comment_coding`
--

CREATE TABLE `comment_coding` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coding_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(5555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_coding`
--

INSERT INTO `comment_coding` (`id`, `coding_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 8, 12, NULL, 'This is comment for coding with id 6', '2019-06-26 19:22:35', '2019-06-26 19:22:35'),
(21, 8, 12, NULL, '<p>what the hell</p>', '2019-06-27 05:30:16', '2019-06-27 05:30:16'),
(22, 8, 14, NULL, '<p>lạ nhỉ</p>\r\n\r\n<p>&nbsp;</p>', '2019-06-27 05:30:55', '2019-06-27 05:30:55'),
(23, 8, 12, NULL, '<p>ừ k&igrave; qu&aacute; h&agrave;</p>', '2019-06-27 05:31:07', '2019-06-27 05:31:07'),
(24, 8, 14, NULL, '<p>chat th&ecirc;m xem n&agrave;o</p>', '2019-06-27 05:31:55', '2019-06-27 05:31:55'),
(25, 8, 12, NULL, '<p>để chat th&ecirc;m c&aacute;i nữa</p>', '2019-06-27 05:32:45', '2019-06-27 05:32:45'),
(26, 8, 14, NULL, '<p>vẫn thấy n&agrave;y</p>', '2019-06-27 05:32:58', '2019-06-27 05:32:58'),
(27, 8, 12, NULL, '<p>vậy sao n&atilde;y h&ocirc;ng thấy ta</p>', '2019-06-27 05:33:14', '2019-06-27 05:33:14'),
(28, 8, 14, NULL, '<p>&eacute;o biết lu&ocirc;n</p>', '2019-06-27 05:33:35', '2019-06-27 05:33:35'),
(29, 8, 12, NULL, '<p>vẫn chat được đ&acirc;y n&agrave;y</p>', '2019-06-27 05:33:47', '2019-06-27 05:33:47'),
(30, 8, 14, NULL, '<p>sợ thật</p>', '2019-06-27 05:34:02', '2019-06-27 05:34:02'),
(31, 8, 12, NULL, '<p>xong</p>', '2019-06-27 05:34:17', '2019-06-27 05:34:17'),
(32, 9, 12, NULL, '<p>Alo</p>', '2019-07-01 03:24:01', '2019-07-01 03:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `comment_forum`
--

CREATE TABLE `comment_forum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_forum`
--

INSERT INTO `comment_forum` (`id`, `forum_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(28, 16, 12, NULL, '<p>Bạn muốn<strong> hỏi g&igrave;.</strong>...?</p>', '2019-06-25 05:29:07', '2019-06-25 05:29:07'),
(29, 16, 14, NULL, '<p><em>M&igrave;nh muốn hỏi học sql th&igrave; bắt đầu từ đ&acirc;u....!</em></p>', '2019-06-25 05:29:43', '2019-06-25 05:29:43'),
(30, 14, 14, NULL, '<p><em><strong>c&aacute;m ơn b&aacute;c</strong></em></p>', '2019-06-25 05:30:11', '2019-06-25 05:30:11'),
(31, 16, 12, NULL, '<p><em>bạn c&oacute; biết <strong><span class=\"marker\">google.com</span></strong> h&ocirc;ng...?&nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_160x56dp.png\" style=\"height:53px; width:150px\" /></em></p>', '2019-06-25 05:37:19', '2019-06-25 05:37:19'),
(32, 14, 12, NULL, '<blockquote>\r\n<ul>\r\n	<li>\r\n	<pre>\r\n<ins>kh&ocirc;ng c&oacute; g&igrave; ;p</ins></pre>\r\n	</li>\r\n</ul>\r\n</blockquote>', '2019-06-25 05:47:09', '2019-06-25 05:47:09'),
(33, 13, 12, NULL, '<p>haizz</p>', '2019-06-26 21:07:19', '2019-06-26 21:07:19'),
(34, 16, 12, NULL, '<p><em>&agrave; m&igrave;nh hiểu &yacute; bạn rồi</em></p>', '2019-06-26 21:28:10', '2019-06-26 21:28:10'),
(35, 16, 14, NULL, '<p>hahahaha</p>', '2019-06-27 05:21:14', '2019-06-27 05:21:14'),
(36, 10, 12, NULL, '<p>Nh&igrave;n kh&oacute; qu&aacute;</p>', '2019-07-01 03:32:37', '2019-07-01 03:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `comment_news`
--

CREATE TABLE `comment_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(5555) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_news`
--

INSERT INTO `comment_news` (`id`, `news_id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(5, 3, 14, NULL, '<p>h&ecirc;loo</p>', '2019-06-27 20:45:10', '2019-06-27 20:45:10'),
(6, 4, 12, NULL, '<p>haha AI ng&agrave;y c&agrave;ng ph&aacute;t triển m&agrave;</p>', '2019-06-27 21:04:20', '2019-06-27 21:04:20'),
(7, 5, 12, NULL, '<p>Tuyệt dời &ocirc;ng mặt giời</p>', '2019-07-01 03:11:23', '2019-07-01 03:11:23'),
(10, 3, 12, NULL, '<p>1</p>', '2019-07-03 21:40:01', '2019-07-03 21:40:01'),
(11, 3, 12, NULL, '<p>He l&ocirc; l&ocirc;</p>', '2019-07-12 09:31:42', '2019-07-12 09:31:42'),
(12, 4, 15, NULL, '<p>Đ&acirc;y l&agrave; comment</p>', '2019-07-20 05:54:45', '2019-07-20 05:54:45'),
(13, 4, 15, NULL, '<p><s><em><strong>Comment thứ 2</strong></em></s></p>', '2019-07-20 05:55:00', '2019-07-20 05:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(9999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `title`, `body`, `user_id`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Chia sẽ các bác link github animation', '<p><a href=\"http://github.com/nguoiThichDua\">http://github.com/nguoiThichDua</a></p>', 12, 'share-de-mang-nhung-noi-dung-vui-va-co-gia-tri-den-nguoi-khac-anh-internet-tin8-4.1561193939.png', '2019-06-22 01:58:59', '2019-06-22 01:58:59'),
(9, 'Cần tư vấn về ngành IT ạ ~~', '<p>Ng&agrave;nh IT cực k&igrave; rộng lớn... n&ecirc;n e cần tư vấn ng&agrave;nh n&agrave;y ạ</p>', 12, 'SOFTWARE-IT_V2.1561193994.jpeg', '2019-06-22 01:59:54', '2019-06-22 01:59:54'),
(10, 'Có lỗi mà hông biết lí do...!', '<p>Code lỗi d&ograve;ng 52 m&agrave; e h&ocirc;ng biết sao lỗi lu&ocirc;n</p>', 12, 'dd4a080102a6201c834cf3236fa35d5c80841ff8_1_690x387.1561194034.png', '2019-06-22 02:00:34', '2019-06-22 02:00:34'),
(11, 'Học C# thì nên bắt đầu từ đâu ạ', '<p>Hihi e mới học lập tr&igrave;nh</p>', 12, 'CSharp.1561194082.jpeg', '2019-06-22 02:01:22', '2019-06-22 02:01:22'),
(13, 'Tâm sự đêm khuya', '<p>buồn qu&aacute; trời lu&ocirc;n</p>', 12, 'QC1.1561294035.jpeg', '2019-06-23 05:47:15', '2019-06-23 06:47:16'),
(14, 'Share kho animation hay ho', '<ul>\r\n	<li><a href=\"https://github.com/NguoiThichDua/\">https://github.com/NguoiThichDua/</a></li>\r\n</ul>', 12, 'share-de-mang-nhung-noi-dung-vui-va-co-gia-tri-den-nguoi-khac-anh-internet-tin8-4.1561294085.png', '2019-06-23 05:48:05', '2019-06-23 05:48:05'),
(16, 'Hỏi về các câu lệnh SQL ạ', '<ul>\r\n	<li>Phần mềm được Microsoft ph&aacute;t triển dựa tr&ecirc;n RDBMS.</li>\r\n	<li>Cũng l&agrave; một ORDBMS (Hệ quản trị cơ sở dữ liệu quan hệ đối tượng).</li>\r\n	<li>Một nền tảng độc lập.</li>\r\n	<li>Phần mềm sử dụng cả giao diện d&ograve;ng lệnh v&agrave; giao diện GUI.</li>\r\n	<li>Hỗ trợ ng&ocirc;n ngữ&nbsp;<a href=\"htttps://quantrimang.com/sql\" target=\"_blank\">SQL</a>&nbsp;(trước đ&acirc;y l&agrave; SEQUEL - ng&ocirc;n ngữ truy vấn tiếng Anh c&oacute; cấu tr&uacute;c) - vốn l&agrave; sản phẩm của IBM</li>\r\n</ul>', 14, 'sql.1561436375.png', '2019-06-24 21:19:35', '2019-06-24 21:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_19_022813_create_contact_table', 1),
(4, '2019_06_20_015735_add_background_image_to_users_table', 2),
(5, '2019_06_20_030859_add_info_to_users_table', 3),
(6, '2019_06_20_041214_add_cover_name_to_users_table', 4),
(8, '2019_06_22_020944_create_forum_table', 5),
(9, '2019_06_24_063247_create_comment_forum_table', 6),
(12, '2019_06_26_005015_create_table_coding', 7),
(15, '2019_06_27_015417_create_comment_coding_table', 8),
(16, '2019_06_28_005911_create_news_table', 9),
(17, '2019_06_28_022134_create_comment_news_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` varchar(5555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_1` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noImage.jpg',
  `image_2` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noImage.jpg',
  `image_3` varchar(555) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noImage.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `introduce`, `body`, `user_id`, `image_1`, `image_2`, `image_3`, `created_at`, `updated_at`) VALUES
(3, '20 triệu lao động sản xuất có thể mất việc vì robot vào năm 2030', '<p>Theo h&atilde;ng nghi&ecirc;n cứu Oxford Economics, robot đang tr&ecirc;n đ&agrave; &ldquo;hủy diệt&rdquo; gần 1/10 lực lượng lao động sản xuất to&agrave;n cầu.</p>', '<p>D&ugrave; tự động h&oacute;a c&oacute; thể gia tăng sức mạnh cho to&agrave;n ng&agrave;nh c&ocirc;ng nghiệp, n&oacute; c&oacute; xu hướng tạo ra bất b&igrave;nh đẳng lớn hơn khi người lao động tập trung tại một số ng&agrave;nh v&agrave; quốc gia nhất định sẽ bị mất việc l&agrave;m. Theo b&aacute;o c&aacute;o của h&atilde;ng nghi&ecirc;n cứu Oxford Economics, robot c&oacute; thể khiến 20 triệu vị tr&iacute; sản xuất biến mất v&agrave;o năm 2030.</p>\r\n\r\n<p>Những lao động dễ mất việc nhất sống tại n&ocirc;ng th&ocirc;n, nơi c&oacute; nhiều khu c&ocirc;ng nghiệp. Theo Oxford Economics, Oregon l&agrave; bang bị ảnh hưởng lớn nhất tại Mỹ, c&ograve;n tại Anh c&oacute; thể l&agrave; Cumbria.</p>\r\n\r\n<p>Tại nhiều nước, những khu vực như vậy thường bị bỏ lại ph&iacute;a sau trong khi đ&ocirc; thị ng&agrave;y một ph&aacute;t triển. C&aacute;c động lực n&agrave;y sinh ra ph&acirc;n cực ch&iacute;nh trị, nhấn mạnh tầm quan trọng của ch&iacute;nh s&aacute;ch nhằm giảm nhẹ t&aacute;c động của robot h&oacute;a tại c&aacute;c v&ugrave;ng dễ bị ảnh hưởng.</p>\r\n\r\n<p>B&aacute;o c&aacute;o của tổ chức cho thấy sự chuyển dịch cơ cấu trong thị trường lao động đang đặt ra c&aacute;c th&aacute;ch thức mới khi nhiều c&ocirc;ng việc được tự động h&oacute;a. Theo đ&oacute;, hơn một nửa c&ocirc;ng nh&acirc;n trong c&aacute;c nh&agrave; m&aacute;y của Mỹ đ&atilde; bị robot thay thế trong hai thập kỷ qua l&agrave;m trong ba lĩnh vực: vận tải, x&acirc;y dựng v&agrave; bảo tr&igrave;, quản trị v&agrave; văn ph&ograve;ng.</p>\r\n\r\n<p>Oxford Economics nhận định c&aacute;c th&agrave;nh phố như London, Tokyo, Paris v&agrave; Seoul bị ảnh hưởng &iacute;t hơn, d&ugrave; vậy một số trung t&acirc;m sản xuất truyền thống sẽ biến mất.</p>', 12, 'photo1561531184956-1561531185160-crop-15615311977901323730548.jpg-696x522.1561694064.png', 'aijobs-696x522.1561694064.jpeg', 'ai3.1561694064.jpeg', '2019-06-27 18:45:47', '2019-07-01 03:06:35'),
(4, 'Casino ở Hội An sẽ có công nghệ nhận diện các “con bạc” có khả năng thua lớn', '<p>Nh&agrave; c&aacute;i lu&ocirc;n lu&ocirc;n thắng &ndash; v&agrave; họ sẽ c&ograve;n mạnh hơn với tr&iacute; tuệ nh&acirc;n tạo.</p>', '<p>Một số c&ocirc;ng ty kinh doanh s&ograve;ng bạc lớn nhất thế giới ở Macau đang bắt đầu triển khai c&aacute;c camera ẩn với c&ocirc;ng nghệ nhận dạng khu&ocirc;n mặt, chip poker kỹ thuật số v&agrave; b&agrave;n baccarat để theo d&otilde;i h&agrave;ng triệu kh&aacute;ch h&agrave;ng của họ, xem ai l&agrave; người c&oacute; khả năng mất nhiều tiền nhất.</p>\r\n\r\n<p>C&ocirc;ng nghệ mới sẽ sử dụng c&aacute;c thuật to&aacute;n ph&acirc;n t&iacute;ch h&agrave;nh vi kh&aacute;ch h&agrave;ng tại b&agrave;n cược để x&aacute;c định khẩu vị rủi ro của họ. N&oacute;i chung, khẩu vị rủi ro c&agrave;ng cao, con bạc c&agrave;ng c&oacute; khả năng thua lớn v&agrave; s&ograve;ng bạc c&agrave;ng kiếm được nhiều tiền hơn, đ&ocirc;i khi gấp 10 lần.</p>\r\n\r\n<p>C&ocirc;ng nghệ cao l&agrave; một giải ph&aacute;p th&ocirc;ng minh khi hoạt động kinh doanh s&ograve;ng bạc ng&agrave;y c&agrave;ng gặp nhiều kh&oacute; khăn khi ng&agrave;nh c&ocirc;ng nghiệp n&agrave;y c&oacute; dấu hiệu tăng trưởng ng&agrave;y c&agrave;ng chậm chạp, chịu &aacute;p lực bởi c&aacute;c biến động kinh tế v&agrave; sự gi&aacute;m s&aacute;t của cơ quan quản l&yacute;.</p>\r\n\r\n<p>Ở những trung t&acirc;m casino lớn nhất thế giới như Macau hay Las Vegas, nơi hoạt động kinh doanh đ&atilde; b&atilde;o h&ograve;a, hai nh&agrave; điều h&agrave;nh s&ograve;ng bạc &ndash; Sands Corp v&agrave; MGM Resorts International &ndash; đ&atilde; bắt đầu triển khai một số c&ocirc;ng nghệ n&agrave;y tr&ecirc;n c&aacute;c b&agrave;n cược của họ.</p>\r\n\r\n<p>Theo một số nguồn tin, ba c&ocirc;ng ty kh&aacute;c, Wynn Macau Ltd., Galaxy Entertainment Group Ltd. v&agrave; Melco Resorts &amp; Entertainment Ltd., đang thảo luận với c&aacute;c nh&agrave; cung cấp về việc triển khai c&ocirc;ng nghệ tr&ecirc;n.</p>', 12, '11-hinh3_qlfn-696x522.1561694521.png', 'casino-phu-quoc-1-1559017240030578949647.1561694521.jpeg', 'aijobs-696x522.1561694521.jpeg', '2019-06-27 21:02:01', '2019-06-27 21:02:01'),
(5, 'Kaspersky: 38% người dùng sẽ từ bỏ mạng xã hội để bảo vệ quyền riêng tư khi trực tuyến', '<p>B&aacute;o c&aacute;o gần đ&acirc;y của Kaspersky &ldquo;Người d&ugrave;ng c&oacute; tự &ldquo;b&aacute;n khống&rdquo; quyền ri&ecirc;ng tư của họ khi trực tuyến?&rdquo;, 38% người d&ugrave;ng cho biết sẽ từ bỏ mạng x&atilde; hội để bảo vệ quyền ri&ecirc;ng tư của họ tr&ecirc;n Internet.</p>', '<p>Những lo ngại xung quanh việc r&ograve; rỉ dữ liệu đ&atilde; khiến người d&ugrave;ng lo lắng hơn trong c&aacute;ch thức sử dụng th&ocirc;ng tin c&aacute; nh&acirc;n khi online. B&aacute;o c&aacute;o đ&atilde; chỉ ra v&igrave; sao th&ocirc;ng tin c&aacute; nh&acirc;n dần trở n&ecirc;n v&ocirc; c&ugrave;ng qu&yacute; gi&aacute; đối với người d&ugrave;ng, nhất l&agrave; trong thời đại Internet đang b&ugrave;ng nổ như hiện nay.</p>\r\n\r\n<p>Những mạng x&atilde; hội, như Facebook, Instagram hay Twitter, đang cực kỳ phổ biến trong cuộc sống của ch&uacute;ng ta, với số người d&ugrave;ng mạng x&atilde; hội chiếm đến 82% (theo b&aacute;o c&aacute;o của Kaspersky). Để lấy dữ liệu từ người d&ugrave;ng, c&aacute;c nền tảng truyền th&ocirc;ng x&atilde; hội mang đến cho họ nhiều cơ hội thể hiện bản th&acirc;n, giao tiếp với bạn b&egrave; v&agrave; gia đ&igrave;nh, cũng như t&igrave;m hiểu tin tức, kh&aacute;m ph&aacute; &yacute; tưởng v&agrave; xu hướng mới m&agrave; kh&ocirc;ng cần ra khỏi nh&agrave;.</p>\r\n\r\n<p>Mặc d&ugrave; được hưởng nhiều lợi &iacute;ch như vậy, một số người d&ugrave;ng vẫn muốn từ bỏ mạng x&atilde; hội nếu việc n&agrave;y gi&uacute;p họ bảo vệ quyền ri&ecirc;ng tư khi trực tuyến.</p>\r\n\r\n<p>Điều đ&oacute; c&oacute; nghĩa l&agrave; 12% người d&ugrave;ng sẽ kh&ocirc;ng thể tiếp tục tham gia những tr&ograve; chơi giải tr&iacute; như &ldquo;bạn tr&ocirc;ng giống người nổi tiếng n&agrave;o?&rdquo; hoặc &ldquo;bữa ăn y&ecirc;u th&iacute;ch của bạn l&agrave; g&igrave;?&rdquo;, v&igrave; họ phải cung cấp th&ocirc;ng tin c&aacute; nh&acirc;n nếu muốn biết c&acirc;u trả lời.</p>\r\n\r\n<p>Ngo&agrave;i ra, kh&ocirc;ng d&ugrave;ng mạng x&atilde; hội cũng c&oacute; nghĩa 58% người d&ugrave;ng sẽ kh&ocirc;ng thể đăng nhập hay x&aacute;c minh t&agrave;i khoản website muốn truy cập một c&aacute;ch nhanh ch&oacute;ng v&agrave; tiện lợi như hiện nay khi họ d&ugrave;ng Facebook để đăng nhập cho nhiều website.</p>', 12, '943236_800x600_b-696x522.1561694630.jpeg', '190327-privacy-report-0.1561694630.png', 'photo1561531184956-1561531185160-crop-15615311977901323730548.jpg-696x522.1561694630.png', '2019-06-27 21:03:50', '2019-06-27 21:03:50'),
(6, 'Google I/O Extended Hanoi 2019 – Sự kiện công nghệ không thể bỏ lỡ dành cho lập trình viên', '<p><strong>Ngày h&ocirc;̣i c&ocirc;ng nghệ đ&aacute;ng mong chờ nhất m&ugrave;a h&egrave; n&agrave;y Google I/O Extended Hanoi​ 2019 đã chính thức quay trở lại!</strong></p>', '<p><strong>Google I/O Extended Hanoi 2019</strong>​ l&agrave; sự kiện mở rộng từ&nbsp;<strong>Google I/O</strong>​ tại Mountain View (California, Hoa Kỳ), được tổ chức thường ni&ecirc;n bởi&nbsp;<strong>Google Developer Group Hanoi</strong>​ (GDG Hanoi)&nbsp;nhằm giúp cộng đồng lập tr&igrave;nh vi&ecirc;n v&agrave; c&aacute;c bạn trẻ y&ecirc;u th&iacute;ch c&ocirc;ng nghệ tại Việt Nam cũng như Google Fans có th&ecirc;m ki&ecirc;́n thức chuy&ecirc;n s&acirc;u và t&igrave;m hiểu về những t&iacute;nh năng c&ocirc;ng nghệ mới của Google.&nbsp;</p>\r\n\r\n<p>Với những chủ đ&ecirc;̀ h&acirc;́p d&acirc;̃n và n&ocirc;̉i b&acirc;̣t được chia sẻ m&ocirc;̣t cách chuy&ecirc;n s&acirc;u bởi g&acirc;̀n 20 chuy&ecirc;n gia hàng đ&acirc;̀u v&ecirc;̀ c&ocirc;ng ngh&ecirc;̣ từ các qu&ocirc;́c gia khác nhau, sự ki&ecirc;̣n lu&ocirc;n nh&acirc;̣n được r&acirc;́t nhi&ecirc;̀u sự quan t&acirc;m từ c&ocirc;̣ng đ&ocirc;̀ng l&acirc;̣p trình vi&ecirc;n tại Vi&ecirc;̣t Nam và thu hút hơn 1000 người tham dự m&ocirc;̃i năm. B&ecirc;n cạnh đó, Ngày h&ocirc;̣i còn di&ecirc;̃n ra những hoạt đ&ocirc;̣ng thú vị như Q&amp;A, Teabreak, Networking giúp người tham dự có cơ h&ocirc;̣i&nbsp;đ&ecirc;̉ giao lưu, mở rộng mối quan hệ với cộng đồng lập tr&igrave;nh vi&ecirc;n v&agrave; t&igrave;m kiếm cơ hội việc l&agrave;m từ c&aacute;c tập đo&agrave;n c&ocirc;ng nghệ h&agrave;ng đầu.</p>\r\n\r\n<p>Cùng đi&ecirc;̉m qua các chủ đ&ecirc;̀ n&ocirc;̉i b&acirc;̣t c&ugrave;ng c&aacute;c diễn giả sẽ chia sẻ trong sự ki&ecirc;̣n&nbsp;<strong>Google I/O Extended Hanoi​ 2019&nbsp;</strong>nhé:</p>\r\n\r\n<p><strong>What&rsquo;s new in Android &ndash;&nbsp;</strong><em>I&ntilde;aki Villar (</em>Google Developer Expert for Android/Kotlin)</p>\r\n\r\n<p><strong>TensorFlow Lite: On-Device for mobile and IoT devices &ndash;&nbsp;</strong><em>Jason Zaman</em></p>\r\n\r\n<p>(Leader cộng đồng TensorFlow SIG-Build,Gentoo Linux Developer v&agrave; Machine Learning Engineer tại Light)</p>\r\n\r\n<p><strong>AutoML Natural Language: From Zero to Hero &ndash;&nbsp;</strong><em>Ralph Vincent Regalado</em></p>\r\n\r\n<p>(CEO, Founder của Senti Techlabs)&nbsp;</p>\r\n\r\n<p><strong>Exploring CameraX Jetpack Library &ndash;&nbsp;</strong><em>Hassan Abid&nbsp;</em>(Lead Software Engineer)</p>', 12, 'Screen-Shot-2019-06-28-at-11.36.53-AM-696x527.1561714295.png', '190327-privacy-report-0.1561714295.png', 'dellpc1.1561714295.jpeg', '2019-06-28 02:31:35', '2019-06-28 02:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'noImage.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `background_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'noImage.jpg',
  `info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `image`, `remember_token`, `created_at`, `updated_at`, `background_image`, `info`, `cover_name`) VALUES
(12, 'Sơn Nguyễn', 'nbhs.it.98@gmail.com', NULL, '$2y$10$qiPi0bkbecwRwL6KD0sWWuuv9fsHoaY5q.vNujhFlDcLGuH7aSsQG', 1, 'photo-1-15607590121601356861985.1561191937.jpeg', NULL, '2019-06-22 01:22:37', '2019-06-23 04:46:26', 'QC5.1561290386.jpeg', 'Nguyễn Bình Hồng Sơn', 'Người Thích Đùa'),
(14, 'Nguyễn Bình Hồng Sơn', 'sonnguyenit.998@gmail.com', NULL, '$2y$10$xQ9Z3FshjvFB7SnTwL3Jc.xCozI33jk/JY6xJWCamnTXCk5nHvdh.', NULL, '6227882fbfbb55e50caa.1561368704.jpeg', 'eI3wAZHn89usLsWXXB1Bik2OxwB64nmgOSLr1uPI4gbjS0IpAT3rcQykUgGS', '2019-06-24 02:30:20', '2019-06-24 02:31:44', 'CCBP4.1561368704.jpeg', 'Joker B', 'Người Thích Đùa'),
(15, 'Sơn Nguyễn', 'jokerBOT98@gmail.com', NULL, '$2y$10$ER3rQQ7Nh1F1d9IDi8womuEglXkh4JDnR.fD0U38D50uLfvoJOh9e', NULL, '6227882fbfbb55e50caa.1563627448.jpeg', NULL, '2019-07-20 05:54:26', '2019-07-20 05:57:28', 'QC5.1563627448.jpeg', 'Sơn Nguyễn', 'Người Thích Đùa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coding`
--
ALTER TABLE `coding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_coding`
--
ALTER TABLE `comment_coding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_forum`
--
ALTER TABLE `comment_forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_news`
--
ALTER TABLE `comment_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `coding`
--
ALTER TABLE `coding`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment_coding`
--
ALTER TABLE `comment_coding`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comment_forum`
--
ALTER TABLE `comment_forum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `comment_news`
--
ALTER TABLE `comment_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
