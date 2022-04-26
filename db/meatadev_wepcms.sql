-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2022 at 03:53 PM
-- Server version: 10.3.34-MariaDB-log
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meatadev_wepcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `suburb` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `delivery_instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `associated_products`
--

CREATE TABLE `associated_products` (
  `associated_product_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `big_slideshows`
--

CREATE TABLE `big_slideshows` (
  `big_slideshow_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `big_slideshow_slides`
--

CREATE TABLE `big_slideshow_slides` (
  `big_slideshow_slide_id` int(11) NOT NULL,
  `alt_text` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `big_slideshow_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bill_payments`
--

CREATE TABLE `bill_payments` (
  `payment_id` int(11) NOT NULL,
  `invoice_number` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_articles`
--

CREATE TABLE `blog_articles` (
  `blog_article_id` int(11) NOT NULL,
  `main_heading` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image_description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `summary` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `meta_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `payment_gateway` varchar(255) DEFAULT NULL,
  `same_address` tinyint(1) NOT NULL,
  `shipping_region_id` int(11) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `billing_address_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `payment_gateway`, `same_address`, `shipping_region_id`, `discount_id`, `shipping_address_id`, `billing_address_id`) VALUES
(1, '', 1, NULL, NULL, NULL, NULL),
(2, '', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_line_item_links`
--

CREATE TABLE `cart_line_item_links` (
  `cart_line_item_link_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `line_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `configuration_id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL DEFAULT '',
  `default_banner_id` int(10) UNSIGNED DEFAULT NULL,
  `footer_banner_id` int(10) UNSIGNED DEFAULT NULL,
  `analytics_id` varchar(255) NOT NULL DEFAULT '',
  `tag_manager_id` varchar(255) NOT NULL DEFAULT '',
  `google_site_verification` varchar(255) NOT NULL DEFAULT '',
  `recaptcha_site_key` varchar(255) NOT NULL DEFAULT '',
  `recaptcha_secret` varchar(255) NOT NULL DEFAULT '',
  `favicon` varchar(255) DEFAULT NULL,
  `gst_number` varchar(255) NOT NULL DEFAULT '',
  `bank_details` varchar(255) NOT NULL DEFAULT '',
  `free_shipping_threshold` float(8,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`configuration_id`, `site_name`, `phone`, `email`, `address`, `default_banner_id`, `footer_banner_id`, `analytics_id`, `tag_manager_id`, `google_site_verification`, `recaptcha_site_key`, `recaptcha_secret`, `favicon`, `gst_number`, `bank_details`, `free_shipping_threshold`) VALUES
(1, '', '', 'programmer@activatedesign.co.nz', '', NULL, NULL, '', '', '', '', '', NULL, '', '', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `courier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tracking_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `discount_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `amount` float(8,2) NOT NULL,
  `type` varchar(255) NOT NULL,
  `start` date DEFAULT NULL,
  `finish` date DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `extra_contents`
--

CREATE TABLE `extra_contents` (
  `extra_content_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Page/FAQ module';

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `form_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`form_id`, `name`, `recipient`, `button_text`, `response`) VALUES
(1, 'Contact Us', 'programmer@activatedesign.co.nz', 'Send', '<h2>Thank you for contacting us</h2><p>We will reply shortly.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE `form_fields` (
  `form_field_id` int(11) NOT NULL,
  `type` enum('TEXT','EMAIL','PHONE','TEXTAREA','CHECKBOXES','RADIO','SELECT','DATE','UPLOAD','HEADING') NOT NULL,
  `label` varchar(255) NOT NULL,
  `default_value` text NOT NULL,
  `values` text NOT NULL,
  `required` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  `form_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_fields`
--

INSERT INTO `form_fields` (`form_field_id`, `type`, `label`, `default_value`, `values`, `required`, `position`, `form_id`) VALUES
(1, 'TEXT', 'Name', '', '', 1, 10, 1),
(2, 'EMAIL', 'Email', '', '', 1, 30, 1),
(3, 'TEXTAREA', 'Message', '', '', 1, 40, 1),
(4, 'PHONE', 'Phone', '', '', 1, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `form_name` varchar(255) NOT NULL,
  `when` datetime NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `bcc` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `files` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_items`
--

CREATE TABLE `gallery_items` (
  `gallery_item_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `google_maps`
--

CREATE TABLE `google_maps` (
  `map_id` int(11) NOT NULL,
  `address_line_1` varchar(255) NOT NULL,
  `address_line_2` varchar(255) NOT NULL,
  `suburb` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `latitude` decimal(16,13) NOT NULL,
  `longitude` decimal(16,13) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `image_blocks`
--

CREATE TABLE `image_blocks` (
  `image_block_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `image_description` varchar(255) NOT NULL,
  `use_special_background` tinyint(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `line_items`
--

CREATE TABLE `line_items` (
  `line_item_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `display_quantity` tinyint(1) NOT NULL,
  `price` float(8,2) NOT NULL,
  `class` varchar(255) NOT NULL,
  `generator_class_identifier` varchar(255) NOT NULL,
  `generator_identifier` varchar(255) NOT NULL,
  `item_weight` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `line_item_options`
--

CREATE TABLE `line_item_options` (
  `line_item_option_id` int(11) NOT NULL,
  `option_group_name` varchar(255) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `line_item_id` int(11) NOT NULL,
  `option_group_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `thumbnail` varchar(250) DEFAULT NULL,
  `page_title` varchar(250) NOT NULL,
  `meta_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_attributes`
--

CREATE TABLE `menu_attributes` (
  `menu_attribute_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `icon` varchar(250) DEFAULT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_groups`
--

CREATE TABLE `menu_groups` (
  `menu_group_id` int(11) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `menu_item_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `menu_group_id` int(11) DEFAULT NULL,
  `menu_item_price_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_item_attributes`
--

CREATE TABLE `menu_item_attributes` (
  `menu_item_attribute_id` int(11) NOT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `menu_attribute_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu_item_prices`
--

CREATE TABLE `menu_item_prices` (
  `menu_item_price_id` int(11) NOT NULL,
  `menu_item_id` int(11) DEFAULT NULL,
  `price` float(6,2) NOT NULL,
  `label` varchar(250) NOT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `option_groups`
--

CREATE TABLE `option_groups` (
  `option_group_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `option_groups`
--

INSERT INTO `option_groups` (`option_group_id`, `name`, `position`, `active`, `product_id`) VALUES
(1, '', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('pending','paid','dispatched','picked up','archived','') NOT NULL DEFAULT 'pending',
  `date_dispatched` datetime NOT NULL,
  `tracking_code` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_id` int(11) NOT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `billing_address_id` int(11) DEFAULT NULL,
  `courier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_line_item_links`
--

CREATE TABLE `order_line_item_links` (
  `order_line_item_link_id` int(11) NOT NULL,
  `is_normal` tinyint(1) NOT NULL DEFAULT 1,
  `order_id` int(11) NOT NULL,
  `line_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `nav_text` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `main_heading` varchar(72) NOT NULL,
  `meta_description` text NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_type` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `display_on_nav` tinyint(1) NOT NULL,
  `display_on_secondary_nav` tinyint(1) NOT NULL,
  `is_homepage` tinyint(1) NOT NULL,
  `is_error_page` tinyint(1) NOT NULL,
  `redirect_path` varchar(255) NOT NULL COMMENT 'link to somewhere else',
  `internal_redirect` tinyint(1) NOT NULL,
  `external_redirect` tinyint(1) NOT NULL,
  `new_window` tinyint(1) NOT NULL,
  `duplicate` tinyint(1) NOT NULL,
  `original_id` int(11) DEFAULT NULL,
  `no_banner` tinyint(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `parent_id`, `nav_text`, `slug`, `content`, `main_heading`, `meta_description`, `page_title`, `page_type`, `position`, `active`, `display_on_nav`, `display_on_secondary_nav`, `is_homepage`, `is_error_page`, `redirect_path`, `internal_redirect`, `external_redirect`, `new_window`, `duplicate`, `original_id`, `no_banner`, `image`, `image_description`) VALUES
(1, NULL, 'Home', 'home', '', '', '', '', 'Page', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, 0, NULL, 0, NULL, ''),
(2, NULL, 'Shop Meat', 'shop-meat', '', '', '', '', 'Products', 2, 1, 0, 0, 0, 0, '', 0, 0, 0, 0, NULL, 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `page_banners`
--

CREATE TABLE `page_banners` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `responsive_image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Not used by default but an example of a module-specific, non-autocasting table which can be used with /Template/Banners/';

-- --------------------------------------------------------

--
-- Table structure for table `page_section_wrappers`
--

CREATE TABLE `page_section_wrappers` (
  `page_section_wrapper_id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `type` varchar(128) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gateway_label` varchar(255) NOT NULL,
  `amount` float(8,2) NOT NULL,
  `status` enum('pending','success','failure','') NOT NULL DEFAULT 'pending',
  `payment_method` varchar(255) DEFAULT NULL,
  `local_reference` varchar(255) NOT NULL,
  `remote_reference` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  `class` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `priced_product_options`
--

CREATE TABLE `priced_product_options` (
  `product_option_id` int(11) NOT NULL,
  `price` float(6,2) NOT NULL,
  `weight` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `main_heading` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `page_title` varchar(128) NOT NULL,
  `meta_description` text NOT NULL,
  `price` float(6,2) NOT NULL,
  `sale_price` float(6,2) NOT NULL,
  `on_sale` tinyint(1) NOT NULL,
  `weight` float(6,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `priced_option_group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `slug`, `main_heading`, `content`, `code`, `page_title`, `meta_description`, `price`, `sale_price`, `on_sale`, `weight`, `stock`, `active`, `featured`, `priced_option_group_id`) VALUES
(1, 'Product 1', 'product-1', '', '<p>test</p>', '', '', '', 99.00, 0.00, 0, 500.00, 10, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `category_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `main_heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `on_nav` tinyint(1) NOT NULL DEFAULT 0,
  `position` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`category_id`, `parent_id`, `name`, `slug`, `main_heading`, `description`, `content`, `page_title`, `meta_description`, `active`, `on_nav`, `position`, `image`) VALUES
(1, NULL, 'Beef', 'beef', '', '', '', '', '', 1, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category_links`
--

CREATE TABLE `product_category_links` (
  `product_category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category_links`
--

INSERT INTO `product_category_links` (`product_category_id`, `product_id`, `category_id`, `position`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image_description` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

CREATE TABLE `product_options` (
  `product_option_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_tabs`
--

CREATE TABLE `product_tabs` (
  `product_tab_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `redirects`
--

CREATE TABLE `redirects` (
  `redirect_id` int(11) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_requests`
--

CREATE TABLE `reset_password_requests` (
  `reset_password_request_id` int(11) NOT NULL,
  `token_hash` varchar(255) NOT NULL,
  `expires` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resized_images`
--

CREATE TABLE `resized_images` (
  `resized_image_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `resize_type` enum('SCALE','CROP') NOT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `last_accessed` datetime NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_regions`
--

CREATE TABLE `shipping_regions` (
  `shipping_region_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` float(8,2) NOT NULL,
  `weight_based` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_weight_ranges`
--

CREATE TABLE `shipping_weight_ranges` (
  `weight_range_id` int(11) NOT NULL,
  `from_weight` float(6,1) NOT NULL,
  `to_weight` float(6,1) NOT NULL,
  `cost` float(6,2) NOT NULL,
  `shipping_region_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `template_banners`
--

CREATE TABLE `template_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `responsive_image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `position` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template_banners`
--

INSERT INTO `template_banners` (`id`, `parent_id`, `class`, `image`, `responsive_image`, `title`, `text`, `link`, `button`, `active`, `position`) VALUES
(1, 1, 'Products\\CategoryBanner', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0),
(2, 1, 'Products\\ProductBanner', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `template_links`
--

CREATE TABLE `template_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `class` varchar(64) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `open_new_tab` tinyint(1) UNSIGNED DEFAULT NULL,
  `position` tinyint(3) UNSIGNED NOT NULL,
  `active` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `witness` varchar(255) NOT NULL,
  `testimony` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `last_active` datetime NOT NULL DEFAULT current_timestamp(),
  `class` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `cart_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password_hash`, `creation_date`, `last_active`, `class`, `active`, `cart_id`, `address_id`) VALUES
(1, 'Activate Admin', 'ad_dev', '$2y$10$BhhxTOqI4pmyPyZoLyqpiep1SB/yvBFBKKrTjPcBpZCnNbMqxQcMy', '2022-04-25 10:16:33', '2022-04-25 10:16:33', 'Users\\SuperAdministrator', 1, 1, NULL),
(2, 'Matt', 'matt@activatedesign.com', '$2y$10$zCtPJlRv5VBQGvGHesq0G.iNTojxcCAQ568tpKQsepmv13YhRV622', '2022-04-25 22:18:19', '2022-04-25 22:18:19', 'Users\\SuperAdministrator', 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `user_session_id` int(11) NOT NULL,
  `token_hash` varchar(255) NOT NULL,
  `expires` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sessions`
--

INSERT INTO `user_sessions` (`user_session_id`, `token_hash`, `expires`, `user_id`) VALUES
(1, '$2y$10$4DdJADfqYs.QO79ActdMpe.ShCofE.B/L7PZ.GfjsHC2gbQ1vQwWe', '2022-05-25 22:17:07', 1),
(3, '$2y$10$APWQluBS6ZxCG/AD8/A7WOV0VCC60c9JYTMgUCzwn5sm5kDoFAmnC', '2022-05-25 23:39:28', 2),
(4, '$2y$10$qOXZ/zhDNVn/Ad2cFyC/5eRG9IDberpZfnMyFZjl0Xv9bROr6H5cC', '2022-05-26 15:49:08', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `associated_products`
--
ALTER TABLE `associated_products`
  ADD PRIMARY KEY (`associated_product_id`),
  ADD KEY `position` (`position`),
  ADD KEY `from_id` (`from_id`),
  ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `big_slideshows`
--
ALTER TABLE `big_slideshows`
  ADD PRIMARY KEY (`big_slideshow_id`);

--
-- Indexes for table `big_slideshow_slides`
--
ALTER TABLE `big_slideshow_slides`
  ADD PRIMARY KEY (`big_slideshow_slide_id`),
  ADD KEY `big_slideshow_id` (`position`,`big_slideshow_id`);

--
-- Indexes for table `bill_payments`
--
ALTER TABLE `bill_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `blog_articles`
--
ALTER TABLE `blog_articles`
  ADD PRIMARY KEY (`blog_article_id`),
  ADD KEY `slug` (`slug`),
  ADD KEY `active` (`active`);
ALTER TABLE `blog_articles` ADD FULLTEXT KEY `search` (`main_heading`,`content`,`summary`,`author`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `shipping_region_id` (`shipping_region_id`),
  ADD KEY `discount_id` (`discount_id`),
  ADD KEY `shipping_address_id` (`shipping_address_id`),
  ADD KEY `billing_address_id` (`billing_address_id`);

--
-- Indexes for table `cart_line_item_links`
--
ALTER TABLE `cart_line_item_links`
  ADD PRIMARY KEY (`cart_line_item_link_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `line_item_id` (`line_item_id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`configuration_id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discount_id`),
  ADD KEY `code` (`code`),
  ADD KEY `start` (`start`),
  ADD KEY `finish` (`finish`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `extra_contents`
--
ALTER TABLE `extra_contents`
  ADD PRIMARY KEY (`extra_content_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`),
  ADD KEY `active` (`active`),
  ADD KEY `position` (`position`),
  ADD KEY `page_id` (`page_id`);
ALTER TABLE `faqs` ADD FULLTEXT KEY `orm_search_method` (`title`,`text`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`form_field_id`),
  ADD KEY `position` (`position`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD PRIMARY KEY (`gallery_item_id`),
  ADD KEY `gallery_id` (`gallery_id`),
  ADD KEY `active` (`active`),
  ADD KEY `position` (`position`);

--
-- Indexes for table `google_maps`
--
ALTER TABLE `google_maps`
  ADD PRIMARY KEY (`map_id`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `image_blocks`
--
ALTER TABLE `image_blocks`
  ADD PRIMARY KEY (`image_block_id`);

--
-- Indexes for table `line_items`
--
ALTER TABLE `line_items`
  ADD PRIMARY KEY (`line_item_id`),
  ADD KEY `class` (`class`),
  ADD KEY `generator_class_identifier` (`generator_class_identifier`),
  ADD KEY `generator_identifier` (`generator_identifier`);

--
-- Indexes for table `line_item_options`
--
ALTER TABLE `line_item_options`
  ADD PRIMARY KEY (`line_item_option_id`),
  ADD KEY `line_item_id` (`line_item_id`),
  ADD KEY `option_group_id` (`option_group_id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `menu_attributes`
--
ALTER TABLE `menu_attributes`
  ADD PRIMARY KEY (`menu_attribute_id`);

--
-- Indexes for table `menu_groups`
--
ALTER TABLE `menu_groups`
  ADD PRIMARY KEY (`menu_group_id`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`menu_item_id`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `menu_item_attributes`
--
ALTER TABLE `menu_item_attributes`
  ADD PRIMARY KEY (`menu_item_attribute_id`);

--
-- Indexes for table `menu_item_prices`
--
ALTER TABLE `menu_item_prices`
  ADD PRIMARY KEY (`menu_item_price_id`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `option_groups`
--
ALTER TABLE `option_groups`
  ADD PRIMARY KEY (`option_group_id`),
  ADD KEY `position` (`position`),
  ADD KEY `active` (`active`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `reference` (`reference`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `shipping_address_id` (`shipping_address_id`),
  ADD KEY `billing_address_id` (`billing_address_id`),
  ADD KEY `courier_id` (`courier_id`);

--
-- Indexes for table `order_line_item_links`
--
ALTER TABLE `order_line_item_links`
  ADD PRIMARY KEY (`order_line_item_link_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `line_item_id` (`line_item_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `display_on_nav` (`display_on_nav`),
  ADD KEY `active` (`active`),
  ADD KEY `display_on_secondary_nav` (`display_on_secondary_nav`),
  ADD KEY `position` (`position`),
  ADD KEY `page_type` (`page_type`),
  ADD KEY `is_homepage` (`is_homepage`),
  ADD KEY `is_error_page` (`is_error_page`),
  ADD KEY `original_id` (`original_id`);
ALTER TABLE `pages` ADD FULLTEXT KEY `orm_search_method` (`nav_text`,`page_title`,`main_heading`,`content`,`meta_description`);

--
-- Indexes for table `page_banners`
--
ALTER TABLE `page_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `position` (`position`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `page_section_wrappers`
--
ALTER TABLE `page_section_wrappers`
  ADD PRIMARY KEY (`page_section_wrapper_id`),
  ADD KEY `page_id` (`page_id`,`position`),
  ADD KEY `section_id` (`type`,`section_id`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `remote_reference` (`remote_reference`),
  ADD KEY `local_reference` (`local_reference`),
  ADD KEY `status` (`status`),
  ADD KEY `class` (`class`),
  ADD KEY `payment_method` (`payment_method`);

--
-- Indexes for table `priced_product_options`
--
ALTER TABLE `priced_product_options`
  ADD PRIMARY KEY (`product_option_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `slug` (`slug`),
  ADD KEY `active` (`active`),
  ADD KEY `featured` (`featured`),
  ADD KEY `priced_option_group_id` (`priced_option_group_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `slug` (`slug`),
  ADD KEY `active` (`active`),
  ADD KEY `on_nav` (`on_nav`),
  ADD KEY `position` (`position`);

--
-- Indexes for table `product_category_links`
--
ALTER TABLE `product_category_links`
  ADD PRIMARY KEY (`product_category_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `position` (`position`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `active` (`active`),
  ADD KEY `position` (`position`);

--
-- Indexes for table `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`product_option_id`),
  ADD KEY `position` (`position`),
  ADD KEY `active` (`active`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `product_tabs`
--
ALTER TABLE `product_tabs`
  ADD PRIMARY KEY (`product_tab_id`),
  ADD KEY `position` (`position`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `redirects`
--
ALTER TABLE `redirects`
  ADD PRIMARY KEY (`redirect_id`),
  ADD KEY `from` (`from`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `reset_password_requests`
--
ALTER TABLE `reset_password_requests`
  ADD PRIMARY KEY (`reset_password_request_id`),
  ADD KEY `expires` (`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `resized_images`
--
ALTER TABLE `resized_images`
  ADD PRIMARY KEY (`resized_image_id`);

--
-- Indexes for table `shipping_regions`
--
ALTER TABLE `shipping_regions`
  ADD PRIMARY KEY (`shipping_region_id`),
  ADD KEY `position` (`position`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `shipping_weight_ranges`
--
ALTER TABLE `shipping_weight_ranges`
  ADD PRIMARY KEY (`weight_range_id`),
  ADD KEY `position` (`position`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `template_banners`
--
ALTER TABLE `template_banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `position` (`position`),
  ADD KEY `active` (`active`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `template_links`
--
ALTER TABLE `template_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`),
  ADD KEY `active` (`active`),
  ADD KEY `position` (`position`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `active` (`active`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`user_session_id`),
  ADD KEY `expires` (`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `associated_products`
--
ALTER TABLE `associated_products`
  MODIFY `associated_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `big_slideshows`
--
ALTER TABLE `big_slideshows`
  MODIFY `big_slideshow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `big_slideshow_slides`
--
ALTER TABLE `big_slideshow_slides`
  MODIFY `big_slideshow_slide_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bill_payments`
--
ALTER TABLE `bill_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_articles`
--
ALTER TABLE `blog_articles`
  MODIFY `blog_article_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_line_item_links`
--
ALTER TABLE `cart_line_item_links`
  MODIFY `cart_line_item_link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `configuration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_contents`
--
ALTER TABLE `extra_contents`
  MODIFY `extra_content_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `form_field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_items`
--
ALTER TABLE `gallery_items`
  MODIFY `gallery_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `google_maps`
--
ALTER TABLE `google_maps`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_blocks`
--
ALTER TABLE `image_blocks`
  MODIFY `image_block_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `line_items`
--
ALTER TABLE `line_items`
  MODIFY `line_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `line_item_options`
--
ALTER TABLE `line_item_options`
  MODIFY `line_item_option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_attributes`
--
ALTER TABLE `menu_attributes`
  MODIFY `menu_attribute_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_groups`
--
ALTER TABLE `menu_groups`
  MODIFY `menu_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `menu_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_item_attributes`
--
ALTER TABLE `menu_item_attributes`
  MODIFY `menu_item_attribute_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_item_prices`
--
ALTER TABLE `menu_item_prices`
  MODIFY `menu_item_price_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `option_groups`
--
ALTER TABLE `option_groups`
  MODIFY `option_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_line_item_links`
--
ALTER TABLE `order_line_item_links`
  MODIFY `order_line_item_link_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page_banners`
--
ALTER TABLE `page_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_section_wrappers`
--
ALTER TABLE `page_section_wrappers`
  MODIFY `page_section_wrapper_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category_links`
--
ALTER TABLE `product_category_links`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_options`
--
ALTER TABLE `product_options`
  MODIFY `product_option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tabs`
--
ALTER TABLE `product_tabs`
  MODIFY `product_tab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redirects`
--
ALTER TABLE `redirects`
  MODIFY `redirect_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reset_password_requests`
--
ALTER TABLE `reset_password_requests`
  MODIFY `reset_password_request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resized_images`
--
ALTER TABLE `resized_images`
  MODIFY `resized_image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_regions`
--
ALTER TABLE `shipping_regions`
  MODIFY `shipping_region_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_weight_ranges`
--
ALTER TABLE `shipping_weight_ranges`
  MODIFY `weight_range_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_banners`
--
ALTER TABLE `template_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `template_links`
--
ALTER TABLE `template_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `user_session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `associated_products`
--
ALTER TABLE `associated_products`
  ADD CONSTRAINT `associated_products_from_id` FOREIGN KEY (`from_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `associated_products_to_id` FOREIGN KEY (`to_id`) REFERENCES `product_category_links` (`product_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_shipping_region_id` FOREIGN KEY (`shipping_region_id`) REFERENCES `shipping_regions` (`shipping_region_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `cart_line_item_links`
--
ALTER TABLE `cart_line_item_links`
  ADD CONSTRAINT `cart_line_item_links_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_line_item_links_line_item_id` FOREIGN KEY (`line_item_id`) REFERENCES `line_items` (`line_item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_page_id` FOREIGN KEY (`page_id`) REFERENCES `pages` (`page_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD CONSTRAINT `form_fields_form_id` FOREIGN KEY (`form_id`) REFERENCES `forms` (`form_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery_items`
--
ALTER TABLE `gallery_items`
  ADD CONSTRAINT `gallery_items_gallery_id` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`gallery_id`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cart_id` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`cart_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_payment_id` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`payment_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `order_line_item_links`
--
ALTER TABLE `order_line_item_links`
  ADD CONSTRAINT `order_line_item_links_line_item_id` FOREIGN KEY (`line_item_id`) REFERENCES `line_items` (`line_item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_line_item_links_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_original_id` FOREIGN KEY (`original_id`) REFERENCES `pages` (`page_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pages_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `pages` (`page_id`) ON UPDATE CASCADE;

--
-- Constraints for table `page_banners`
--
ALTER TABLE `page_banners`
  ADD CONSTRAINT `page_banners_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `pages` (`page_id`) ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `categories_parent_id` FOREIGN KEY (`parent_id`) REFERENCES `product_categories` (`category_id`) ON UPDATE CASCADE;

--
-- Constraints for table `product_category_links`
--
ALTER TABLE `product_category_links`
  ADD CONSTRAINT `product_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_categories_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON UPDATE CASCADE;

--
-- Constraints for table `reset_password_requests`
--
ALTER TABLE `reset_password_requests`
  ADD CONSTRAINT `reset_password_requests_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD CONSTRAINT `user_sessions_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
