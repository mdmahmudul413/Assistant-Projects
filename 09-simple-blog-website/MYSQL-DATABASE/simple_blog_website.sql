-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 09:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `image`, `description`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(7, 1, 'This is Blog One', 'blog-images/1681674722.jpg', '<h2 style=\"margin: 0.5em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 600; font-stretch: inherit; font-size: 2rem; line-height: 1.38; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">Benefits of Blogging one</h2><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.78; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">There are a variety of reasons why your business should blog. These all explain why it’s a beneficial time investment and addition to your business’s branding, marketing, and sales efforts.</p><ul style=\"margin: 1em 0px 0.25em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; list-style: none; color: rgb(46, 71, 93);\"><li style=\"margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 1.75; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Rank on search engines and build authority online</span>&nbsp;so your content and website appear first on the search engine results page, or SERP, when people look up specific terms and keywords.&nbsp;<a href=\"https://human.marketing/?utm_source=HubSpot&amp;utm_medium=referral&amp;utm_campaign=Topic_Cluster\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">Human Marketing</a>&nbsp;does this well with their mix of blogs and&nbsp;<a href=\"https://blog.hubspot.com/marketing/what-is-a-pillar-page?_ga=2.29787320.64004374.1566500811-1493293515.1553017609&amp;hubs_content=blog.hubspot.com/marketing/blog-examples&amp;hubs_content-cta=pillar%20pages\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">pillar pages</a>&nbsp;(or topic clusters).</li></ul><ul style=\"margin: 1em 0px 0.25em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; list-style: none; color: rgb(46, 71, 93);\"><li style=\"margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 1.75; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Drive organic traffic to your website</span>, social media profiles, and other forms of content in a way that feels natural and doesn’t interrupt your audience.&nbsp;<a href=\"https://www.getsmartacre.com/pillar-content-increased-organic-traffic/\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">Cloud Elements</a>&nbsp;is an example of a company that has seen an increase in organic traffic due to&nbsp;<a href=\"https://blog.cloud-elements.com/\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">their blog</a>.</li></ul><ul style=\"margin: 1em 0px 0.25em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; list-style: none; color: rgb(46, 71, 93);\"><li style=\"margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 1.75; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Educate your leads and customers</span>&nbsp;by helping them stay informed on industry trends and development, and educated about your products, services, and how you can solve their challenges.</li></ul><ul style=\"margin: 1em 0px 0.25em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; list-style: none; color: rgb(46, 71, 93);\"><li style=\"margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 1.75; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Contribute to your inbound marketing tactics</span>&nbsp;so you can avoid having your content feel pushy and “salesy”.&nbsp;<a href=\"https://www.manobyte.com/growth-strategy/grand-rapids-chair-inbound-growth-story\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">Grand Rapids Chair</a>&nbsp;is an example of a company that uses&nbsp;<a href=\"https://blog.grandrapidschair.com/\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">their blog</a>&nbsp;to improve their inbound growth.<a href=\"https://www.manobyte.com/growth-strategy/grand-rapids-chair-inbound-growth-story\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\"></a></li></ul><ul style=\"margin: 1em 0px 0.25em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; list-style: none; color: rgb(46, 71, 93);\"><li style=\"margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1rem; line-height: 1.75; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Convert leads and prospects into customers</span>&nbsp;by including helpful and educational information in your blogs so they can understand why your product or service is right for them.</li></ul>', 0, 0, 0, '2023-04-16 13:48:29', '2023-04-16 13:52:02'),
(8, 1, 'This is Blog Two', 'blog-images/1681674778.jpg', '<h3 style=\"margin: 0.5em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.5rem; line-height: 1.42; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">What do successful blogs have in common?</h3><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.78; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Successful blogs have a specific purpose that’s clear to readers.</span>&nbsp;Whether or not a blog relates directly to the product or service the company sells, each blog has a defined purpose readily apparent to readers. You’ll notice this is often the main takeaway for the examples we’re about to review.</p><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.78; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">Now, let’s dive in.</p><h3 style=\"margin: 0.5em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.5rem; line-height: 1.42; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">Marketing Blogs</h3><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.78; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">Marketing blogs cover a wide array of topics related to inbound marketing, social media, content creation, and organic growth. They may focus on one specific field within marketing or cover broad, industry-related trends to help you develop a marketing strategy specific to your business.</p>', 0, 0, 0, '2023-04-16 13:52:58', '2023-04-16 13:52:58'),
(9, 1, 'This is Blog Three', 'blog-images/1681682917.jpg', '<h3 style=\"margin: 0.5em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.5rem; line-height: 1.42; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">Marketing Blogs</h3><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.78; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">Marketing blogs cover a wide array of topics related to inbound marketing, social media, content creation, and organic growth. They may focus on one specific field within marketing or cover broad, industry-related trends to help you develop a marketing strategy specific to your business.</p><h4 style=\"margin: 0.5em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.375rem; line-height: 1.45; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\">1. DWDigitaWeb Blog</h4><p style=\"margin: 1em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.78; font-family: &quot;Lexend Deca&quot;, sans-serif; vertical-align: baseline; color: rgb(46, 71, 93);\"><a href=\"https://www.digitaweb.com/\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">DWDigitaWeb</a>&nbsp;is an inbound marketing agency. Their&nbsp;<a href=\"https://www.digitaweb.com/blog\" rel=\"noopener\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(11, 132, 132);\">blog</a>&nbsp;educates marketers on useful inbound tactics to help them grow their business and drive organic traffic. They write about lead generation, SEO, and how to use your blog to convert readers into customers.</p>', 0, 0, 0, '2023-04-16 16:08:37', '2023-04-16 16:08:37'),
(10, 1, 'This is Blog Four', 'blog-images/1681688945.jpg', '<h3 id=\"viewer-2iqlc\" class=\"_3qMKZ _1j-51 _1FoOD _3M0Fe Z63qyL roLFQS public-DraftStyleDefault-block-depth0 fixed-tab-size public-DraftStyleDefault-text-ltr\" style=\"font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: var(--ricos-custom-h3-font-weight,unset); font-stretch: inherit; font-size: var(--ricos-custom-h3-font-size,24px); line-height: 1.38; font-family: var(--ricos-custom-h3-font-family,unset); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; min-height: var(--ricos-custom-h3-min-height,30px); color: rgb(0, 0, 0); white-space: pre-wrap;\"><span class=\"_2PHJq public-DraftStyleDefault-ltr\" style=\"font: inherit; background: transparent; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; display: block;\"><span style=\"font: inherit; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: var(--ricos-custom-h3-background-color,unset); border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit;\"><a data-hook=\"linkViewer\" href=\"https://www.zionadventurephotog.com/\" target=\"_blank\" rel=\"noopener noreferrer noopener\" class=\"_3Bkfb _1lsz7\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; color: var(--ricos-custom-link-color,var(--ricos-action-color,#0261ff)); font-family: var(--ricos-custom-link-font-family,unset); font-size: var(--ricos-custom-link-font-size,unset); font-style: var(--ricos-custom-link-font-style,unset); font-weight: var(--ricos-custom-link-font-weight,unset); line-height: var(--ricos-custom-link-line-height,unset); min-height: var(--ricos-custom-link-min-height,unset);\">Zion Adventure Photog</a></span></span></h3><div type=\"h3\" data-hook=\"rcv-block31\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; color: rgb(0, 0, 0); font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; font-size: 16px; white-space: pre-wrap;\"></div><div id=\"viewer-b7pdu\" class=\"mm8Nw _1j-51 roLFQS _1FoOD _3M0Fe Z63qyL roLFQS public-DraftStyleDefault-block-depth0 fixed-tab-size public-DraftStyleDefault-text-ltr\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; font-size: var(--ricos-custom-p-font-size,unset); line-height: 1.5; min-height: var(--ricos-custom-p-min-height,unset); color: rgb(0, 0, 0); white-space: pre-wrap;\"><span class=\"_2PHJq public-DraftStyleDefault-ltr\" style=\"font: inherit; background: transparent; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; display: block;\"><span style=\"font: inherit; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: var(--ricos-custom-p-background-color,unset); border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit;\"><br role=\"presentation\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit;\"></span></span></div><div type=\"empty-line\" data-hook=\"rcv-block32\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; color: rgb(0, 0, 0); font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; font-size: 16px; white-space: pre-wrap;\"></div><p id=\"viewer-8lq5\" class=\"mm8Nw _1j-51 roLFQS _1FoOD _3M0Fe Z63qyL roLFQS public-DraftStyleDefault-block-depth0 fixed-tab-size public-DraftStyleDefault-text-ltr\" style=\"font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: var(--ricos-custom-p-font-size,unset); line-height: 1.5; font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; min-height: var(--ricos-custom-p-min-height,unset); color: rgb(0, 0, 0); white-space: pre-wrap;\"><span class=\"_2PHJq public-DraftStyleDefault-ltr\" style=\"font: inherit; background: transparent; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; display: block;\"><span style=\"font: inherit; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: var(--ricos-custom-p-background-color,unset); border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit;\">When you\'re first approaching the question of<a data-hook=\"linkViewer\" href=\"https://www.wix.com/blog/2021/02/how-to-start-a-blog/\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"_3Bkfb _1lsz7\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; color: var(--ricos-custom-link-color,var(--ricos-action-color,#0261ff)); font-family: var(--ricos-custom-link-font-family,unset); font-size: var(--ricos-custom-link-font-size,unset); font-style: var(--ricos-custom-link-font-style,unset); font-weight: var(--ricos-custom-link-font-weight,unset); line-height: var(--ricos-custom-link-line-height,unset); min-height: var(--ricos-custom-link-min-height,unset);\"> how to start a blog</a>, check out Zion Adventure Photog. The blog has a dual purpose: owner Arika’s photography portfolio and establishing her expertise of the Zion area. With these, she’s able to<a data-hook=\"linkViewer\" href=\"https://www.wix.com/blog/2020/12/how-to-make-money-blogging/\" target=\"_blank\" rel=\"noopener noreferrer\" class=\"_3Bkfb _1lsz7\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; cursor: pointer; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; color: var(--ricos-custom-link-color,var(--ricos-action-color,#0261ff)); font-family: var(--ricos-custom-link-font-family,unset); font-size: var(--ricos-custom-link-font-size,unset); font-style: var(--ricos-custom-link-font-style,unset); font-weight: var(--ricos-custom-link-font-weight,unset); line-height: var(--ricos-custom-link-line-height,unset); min-height: var(--ricos-custom-link-min-height,unset);\"> make money blogging</a>.\r\n\r\nThe blog’s ruggedly playful green and yellow color scheme evokes nature and sunshine. The blog’s homepage features visual testimonials of happy clients enjoying their adventures. She embeds her Instagram Feed directly onto her site, spreading the word about her service and drawing people deeper into her brand.</span></span></p><div type=\"paragraph\" data-hook=\"rcv-block33\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; color: rgb(0, 0, 0); font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; font-size: 16px; white-space: pre-wrap;\"></div><div id=\"viewer-bd4h2\" class=\"mm8Nw _1j-51 roLFQS _1FoOD _3M0Fe Z63qyL roLFQS public-DraftStyleDefault-block-depth0 fixed-tab-size public-DraftStyleDefault-text-ltr\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; font-size: var(--ricos-custom-p-font-size,unset); line-height: 1.5; min-height: var(--ricos-custom-p-min-height,unset); color: rgb(0, 0, 0); white-space: pre-wrap;\"><span class=\"_2PHJq public-DraftStyleDefault-ltr\" style=\"font: inherit; background: transparent; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; display: block;\"><span style=\"font: inherit; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: var(--ricos-custom-p-background-color,unset); border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit;\"><br role=\"presentation\" style=\"-webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit;\"></span></span></div><div type=\"empty-line\" data-hook=\"rcv-block34\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; color: rgb(0, 0, 0); font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; font-size: 16px; white-space: pre-wrap;\"></div><p id=\"viewer-6htg2\" class=\"mm8Nw _1j-51 roLFQS _1FoOD _3M0Fe Z63qyL roLFQS public-DraftStyleDefault-block-depth0 fixed-tab-size public-DraftStyleDefault-text-ltr\" style=\"font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: var(--ricos-custom-p-font-size,unset); line-height: 1.5; font-family: madefor-text, helveticaneuew01-45ligh, helveticaneuew02-45ligh, helveticaneuew10-45ligh, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; min-height: var(--ricos-custom-p-min-height,unset); color: rgb(0, 0, 0); white-space: pre-wrap;\"><span class=\"_2PHJq public-DraftStyleDefault-ltr\" style=\"font: inherit; background: transparent; border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit; direction: ltr; display: block;\"><span style=\"font: inherit; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: var(--ricos-custom-p-background-color,unset); border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); box-sizing: inherit;\">The blog design mirrors its content in depth and expertise. Detailed posts provide detailed guidance on activities such as canyoneering and hiking. From the written content, it’s clear that Arika is an expert in her field, and the visuals confirm her photography skills.</span></span></p>', 0, 0, 0, '2023-04-16 17:49:05', '2023-04-16 17:49:05'),
(11, 1, 'This is Blog Five', 'blog-images/1681689073.jpg', '<h3 style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 1.875rem; font-weight: 600; margin: 2.5rem 0px 0.6em; color: var(--tw-prose-headings); font-family: &quot;Libre Franklin&quot;, Freesans, Helmet, sans-serif; line-height: 1.3;\">What is collagen?</h3><p style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(30, 30, 30); font-family: &quot;Roboto Slab&quot;, &quot;Times New Roman&quot;, Times, serif; font-size: 16px;\">Collagen is a major structural protein in our tissues. It\'s found in skin, hair, nails, tendons, cartilage, and bones. Collagen works with other substances, such as hyaluronic acid and elastin, to maintain skin elasticity, volume, and moisture. It also helps make up proteins such as keratin that form skin, hair, and nails.</p><p><div class=\"inline-ad not-prose\" style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 4rem; margin-top: 4rem; color: rgb(30, 30, 30); font-family: &quot;Roboto Slab&quot;, &quot;Times New Roman&quot;, Times, serif; font-size: 16px;\"></div></p><p style=\"border: 0px solid rgb(206, 206, 206); box-sizing: border-box; --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin: 1.25em 0px; color: rgb(30, 30, 30); font-family: &quot;Roboto Slab&quot;, &quot;Times New Roman&quot;, Times, serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Our bodies naturally produce collagen using the amino acids from protein-rich or collagen-rich foods like bone broth, meat, and fish. But aging, sun damage, smoking, and alcohol consumption all decrease collagen production.</p>', 0, 0, 0, '2023-04-16 17:50:47', '2023-04-16 17:51:13'),
(12, 1, 'This is Blog Six', 'blog-images/1681689122.jpg', '<h3 style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 1.875rem; font-weight: 600; margin: 2.5rem 0px 0.6em; color: var(--tw-prose-headings); font-family: &quot;Libre Franklin&quot;, Freesans, Helmet, sans-serif; line-height: 1.3;\">What does the science say about collagen drinks and supplements?</h3><p style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; color: rgb(30, 30, 30); font-family: &quot;Roboto Slab&quot;, &quot;Times New Roman&quot;, Times, serif; font-size: 16px;\">Research on skin includes:</p><ul style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; list-style-position: initial; list-style-image: initial; margin: 1.25em 0px; padding: 0px 0px 0px 1.625em; color: rgb(30, 30, 30); font-family: &quot;Roboto Slab&quot;, &quot;Times New Roman&quot;, Times, serif; font-size: 16px;\"><li style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0.5em; margin-top: 0.5em; padding-left: 0.375em;\">A&nbsp;<a href=\"https://pubmed.ncbi.nlm.nih.gov/33742704/\" style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(165, 28, 48); text-decoration-line: underline; margin-top: 1.25em;\">review and analysis</a>&nbsp;of 19 studies, published in the&nbsp;<em style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: &quot;Libre Franklin&quot;, Freesans, Helmet, sans-serif;\">International Journal of Dermatology</em>, that had a total of 1,125 participants. Those who used collagen supplements saw an improvement in the firmness, suppleness, and moisture content of the skin, with wrinkles appearing less noticeable. That sounds promising, but it\'s unclear if these skin improvements were actually due to collagen. Most of the trials used commercially available supplements that contained more than collagen: vitamins, minerals, antioxidants, coenzyme Q<span style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; bottom: -0.25em; margin-bottom: 1.25em;\">10</span>, hyaluronic acid, and chondroitin sulfate were among the additional ingredients.</li><li style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-bottom: 0.5em; margin-top: 0.5em; padding-left: 0.375em;\">A few randomized, controlled trials (see&nbsp;<a href=\"https://pubmed.ncbi.nlm.nih.gov/26840887/\" style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(165, 28, 48); text-decoration-line: underline; margin-top: 1.25em;\">here</a>&nbsp;and&nbsp;<a href=\"https://www.researchgate.net/publication/282266135_Clinical_effects_of_ingesting_collagen_hydrolysate_on_facial_skin_properties_-A_randomized_placebo-controlled_double-blind_trial-#:~:text=Results%3A%20Significant%20improvements%20in%20facial,adverse%20effects%20during%20the%20study\" style=\"border: 0px solid rgb(206, 206, 206); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(165, 28, 48); text-decoration-line: underline; margin-bottom: 1.25em;\">here</a>) show that drinking collagen supplements with high amounts of the peptides prolylhydroxyproline and hydroxyprolylglycine can improve skin moisture, elasticity, wrinkles, and roughness. But large, high-quality studies are needed to learn whether commercially available products are helpful and safe to use long-term.</li></ul>', 0, 0, 0, '2023-04-16 17:52:02', '2023-04-16 17:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `blog_id`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 7, 1, NULL, NULL),
(5, 7, 2, NULL, NULL),
(6, 8, 1, NULL, NULL),
(7, 9, 2, NULL, NULL),
(8, 10, 4, NULL, NULL),
(9, 10, 5, NULL, NULL),
(10, 11, 1, NULL, NULL),
(11, 11, 4, NULL, NULL),
(12, 12, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(3, 7, 1, NULL, NULL),
(5, 7, 2, NULL, NULL),
(6, 8, 1, NULL, NULL),
(7, 9, 2, NULL, NULL),
(8, 10, 1, NULL, NULL),
(9, 10, 4, NULL, NULL),
(10, 11, 2, NULL, NULL),
(11, 11, 3, NULL, NULL),
(12, 11, 4, NULL, NULL),
(13, 12, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Fashion', 'Men\'s Fashion', 'category-images/banner-6.jpg', 1, '2023-04-15 14:23:08', '2023-04-15 14:23:08'),
(2, 'Woman\'s Fashion', 'Woman\'s Fashion Description', 'category-images/banner-4.jpg', 1, '2023-04-15 14:23:22', '2023-04-15 14:23:22'),
(4, 'PHP', 'PHP Description', 'category-images/banner-5.jpg', 1, '2023-04-16 13:54:51', '2023-04-16 13:55:04'),
(5, 'Childs Fashion', 'Childs Fashion Description', 'category-images/4.jpg', 1, '2023-04-16 17:41:36', '2023-04-16 17:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `category_blogs`
--

CREATE TABLE `category_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_blogs`
--

INSERT INTO `category_blogs` (`id`, `blog_id`, `category_id`, `created_at`, `updated_at`) VALUES
(9, 5, 2, '2023-04-16 04:30:42', '2023-04-16 04:30:42'),
(10, 4, 1, '2023-04-16 05:47:03', '2023-04-16 05:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_15_092638_create_sessions_table', 1),
(11, '2023_04_15_114726_create_tags_table', 2),
(12, '2023_04_15_181103_create_categories_table', 2),
(13, '2023_04_15_190908_create_blogs_table', 3),
(14, '2023_04_15_231055_create_category_blogs_table', 4),
(15, '2023_04_15_231106_create_tag_blogs_table', 4),
(16, '2023_04_16_190851_create_blog_category_table', 5),
(17, '2023_04_16_191103_create_blog_tag_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('US3ln1batz53s0zWcPwUj29hBI1dffLwe05KQYhn', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.42', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWjRMRVZtbUQ1bEVjcGp3cTczbmVxbWpGc0Ztalk2YXdYUlRmSW9LVSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VyL2VkaXQvMyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkRFRBTUpLanZUL3I3Ym9mNzVPakI1ZVVNMkRucjhqckdrcHZCaXpSbU56VDladU92WlBtMUsiO30=', 1681717078);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web', 'Web Description', 1, '2023-04-15 14:22:22', '2023-04-15 14:22:22'),
(2, 'Sports', 'Sports Description', 1, '2023-04-15 14:22:42', '2023-04-15 14:22:42'),
(3, 'Laravel', 'Laravel Description', 1, '2023-04-16 13:53:57', '2023-04-16 13:53:57'),
(4, 'Cyber', 'Cyber Description', 1, '2023-04-16 17:36:39', '2023-04-16 17:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `tag_blogs`
--

CREATE TABLE `tag_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_blogs`
--

INSERT INTO `tag_blogs` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2023-04-15 17:58:01', '2023-04-15 17:58:01'),
(2, 4, 2, '2023-04-15 17:58:02', '2023-04-15 17:58:02'),
(3, 5, 2, '2023-04-16 04:30:42', '2023-04-16 04:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Mahmud', 'admin@admin.com', 1, NULL, '$2y$10$DTAMJKjvT/r7bof75OjB5eUM2Dnr8jrGkpvBizRmNzT9ZuOvZPm1K', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-15 03:33:05', '2023-04-15 03:33:05'),
(3, 'Mahadi', 'editor@editor.com', 2, NULL, '$2y$10$Uc9Q8qWVp.j7KBmYSxl/fOCVvfpnc9g3VMWIm9sLV32pexS3QJA62', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-17 01:28:09', '2023-04-17 01:28:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_blogs`
--
ALTER TABLE `category_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_blogs`
--
ALTER TABLE `tag_blogs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag_blogs`
--
ALTER TABLE `tag_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
