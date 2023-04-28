ALTER TABLE `news` ADD `seo_canonical` TEXT NULL DEFAULT NULL AFTER `seo_index`;
ALTER TABLE `product_categories` ADD `seo_canonical` TEXT NULL DEFAULT NULL AFTER `seo_index`;
ALTER TABLE `products` ADD `seo_canonical` TEXT NULL DEFAULT NULL AFTER `seo_index`;
ALTER TABLE `news_categories` ADD `seo_canonical` TEXT NULL DEFAULT NULL AFTER `seo_index`;
ALTER TABLE `web_pages` ADD `seo_canonical` TEXT NULL DEFAULT NULL AFTER `seo_index`;



