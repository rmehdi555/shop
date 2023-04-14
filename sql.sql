
ALTER TABLE `product_categories` ADD `seo_title` TEXT NULL DEFAULT NULL AFTER `tags`, ADD `seo_description` TEXT NULL DEFAULT NULL AFTER `seo_title`, ADD `seo_follow` INT NOT NULL DEFAULT '1' AFTER `seo_description`, ADD `seo_index` INT NOT NULL DEFAULT '1' AFTER `seo_follow`;
UPDATE `product_categories` set `seo_title` = title where 1;
UPDATE `product_categories` set `seo_description` = description where 1;

ALTER TABLE `products` ADD `seo_title` TEXT NULL DEFAULT NULL AFTER `tags`, ADD `seo_description` TEXT NULL DEFAULT NULL AFTER `seo_title`, ADD `seo_follow` INT NOT NULL DEFAULT '1' AFTER `seo_description`, ADD `seo_index` INT NOT NULL DEFAULT '1' AFTER `seo_follow`;
UPDATE `products` set `seo_title` = title where 1;
UPDATE `products` set `seo_description` = description where 1;


ALTER TABLE `news` ADD `seo_title` TEXT NULL DEFAULT NULL AFTER `tags`, ADD `seo_description` TEXT NULL DEFAULT NULL AFTER `seo_title`, ADD `seo_follow` INT NOT NULL DEFAULT '1' AFTER `seo_description`, ADD `seo_index` INT NOT NULL DEFAULT '1' AFTER `seo_follow`;
UPDATE `news` set `seo_title` = title where 1;
UPDATE `news` set `seo_description` = description where 1;


ALTER TABLE `news_categories` ADD `seo_title` TEXT NULL DEFAULT NULL AFTER `tags`, ADD `seo_description` TEXT NULL DEFAULT NULL AFTER `seo_title`, ADD `seo_follow` INT NOT NULL DEFAULT '1' AFTER `seo_description`, ADD `seo_index` INT NOT NULL DEFAULT '1' AFTER `seo_follow`;
UPDATE `news_categories` set `seo_title` = title where 1;
UPDATE `news_categories` set `seo_description` = description where 1;


ALTER TABLE `web_pages` ADD `seo_title` TEXT NULL DEFAULT NULL AFTER `status`, ADD `seo_description` TEXT NULL DEFAULT NULL AFTER `seo_title`, ADD `seo_follow` INT NOT NULL DEFAULT '1' AFTER `seo_description`, ADD `seo_index` INT NOT NULL DEFAULT '1' AFTER `seo_follow`;
UPDATE `web_pages` set `seo_title` = title where 1;
UPDATE `web_pages` set `seo_description` = title where 1;




