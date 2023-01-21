<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST_AWS", "");
define("CONF_DB_USER_AWS", "");
define("CONF_DB_PASS_AWS", "");
define("CONF_DB_NAME_AWS", "");

define("CONF_DB_HOST", "");
define("CONF_DB_USER", "");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "");

define("CONF_DB_HOST_TEST", "");
define("CONF_DB_USER_TEST", "");
define("CONF_DB_PASS_TEST", "");
define("CONF_DB_NAME_TEST", "");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "");
define("CONF_URL_BASE_TEST", "");
define("CONF_URL_ADMIN", CONF_URL_BASE . "/");

/**
 * SITE
 */
define("CONF_SITE_NAME", "");
define("CONF_SITE_LANG", "");
define("CONF_SITE_DOMAIN", "");
define("CONF_SITE_DESC", "");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "");
define("CONF_SOCIAL_GOOGLE_PAGE", "");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "");
define("CONF_VIEW_THEME_APP", "");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "/storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
//CHAVE EMAIL1 SENBLUE
define("CONF_MAIL_API_KEY", "");
define("CONF_MAIL_HOST", "");
define("CONF_MAIL_PORT", "");
define("CONF_MAIL_USER", "");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "", "" => ""]);
define("CONF_MAIL_SUPPORT", "");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");