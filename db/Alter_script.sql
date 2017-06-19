ALTER TABLE `contact_setting` ADD `type` VARCHAR(10) NOT NULL DEFAULT 'smtp' AFTER `password`;

ALTER TABLE `events` ADD `type` VARCHAR(20) NOT NULL DEFAULT 'PROFF_SERVICE' COMMENT 'TYEP WILL BE: PROFF_SERVICE/CLOUD_SOLUTION/CLOUD_SERVICE' AFTER `show_menu`;


RENAME TABLE  `header_contants` TO  `features`;

ALTER TABLE `features` CHANGE `sub_title` `sub_title` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;


RENAME TABLE `events` TO  `services`;

ALTER TABLE `settings` ADD `terms_and_condition_page` TEXT NOT NULL AFTER `google_analytic`, ADD `privacy_page` TEXT NOT NULL AFTER `terms_and_condition_page`;

