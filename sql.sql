-- INSERT INTO `site_details` (`id`, `title`, `key`, `user_id`, `value`, `images`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES (NULL, 'شماره تماس در فوتر سایت', 'phone_call_number', '5', '02144382534', '[]', 'text', '1', '2020-11-10 11:29:46', '2021-01-26 06:13:15', NULL);
--
--
-- INSERT INTO `site_details` (`id`, `title`, `key`, `user_id`, `value`, `images`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES (NULL, ' عنوان شماره تماس در فوتر سایت', 'phone_call_title', '5', 'تماس جهت مشاوره خرید', '[]', 'text', '1', '2020-11-10 11:29:46', '2021-01-26 06:13:15', NULL);
--
--


ALTER TABLE `products` ADD `place_of_delivery` ENUM('store','factory') NOT NULL DEFAULT 'store' AFTER `status`;