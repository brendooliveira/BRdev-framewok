<?php
/**
 * DATABASE
*/

//const DATA_LAYER_CONFIG = [
//    "driver" => "pgsql",
//    "host" => "localhost",
//    "port" => "5432",
//    "dbname" => "datalayer",
//    "username" => "postgres",
//    "passwd" => "",
//    "options" => [
//        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//        PDO::ATTR_CASE => PDO::CASE_NATURAL
//    ],
//];



const CONF_DB_HOST = "localhost";
const CONF_DB_USER = "root";
const CONF_DB_PASS = "";
const CONF_DB_NAME = "coffecode";


//CONF AWS S3
const CONF_AWS_KEY = "";
const CONF_AWS_SECRET = "";
const CONF_AWS_REGION = "sa-east-1";
const CONF_AWS_BUCKET = "s3-";

/**
 * PROJECT URLs
 */
const CONF_URL_BASE = "https://meusite.com.br";
const CONF_URL_TEST = "https://localhost/brdev-framework";
const CONF_THUMB_AWS_S3 = "https://s3-seunaws.amazonaws.com";

const BOT_TELEGRAM_TOKEN = "-----";
const ID_CHANEL_TELEGRAN = "@----";

/**
 * SITE
 */
const CONF_SITE_NAME = "Coffe Code";
const CONF_SITE_TITLE = "Framework Coffe Code";
const CONF_SITE_DESC = "Faça suas aplicações com o melhor Framework";
const CONF_SITE_LANG = "pt_BR";
const CONF_SITE_DOMAIN = "cofecode.com.br";


/**
 * SOCIAL
 */
const CONF_SOCIAL_TWITTER_CREATOR = "@creator";
const CONF_SOCIAL_TWITTER_PUBLISHER = "@creator";

/**
 * DATES
 */
const CONF_DATE_BR = "d/m/Y H:i:s";
const CONF_DATE_APP = "Y-m-d H:i:s";

/**
 * PASSWORD
 */
const CONF_PASSWD_MIN_LEN = 8;
const CONF_PASSWD_MAX_LEN = 40;
const CONF_PASSWD_ALGO = PASSWORD_DEFAULT;
const CONF_PASSWD_OPTION = ["cost" => 10];

/**
 * VIEW
 */
const CONF_VIEW_PATH = __DIR__ . "/../../shared/views";
const CONF_VIEW_EXT = "php";
const CONF_VIEW_THEME = "welcome";
const CONF_VIEW_APP = "app";

/**
 * UPLOAD
 */
const CONF_UPLOAD_DIR = "storage";
const CONF_UPLOAD_IMAGE_DIR = "images";
const CONF_UPLOAD_FILE_DIR = "files";
const CONF_UPLOAD_MEDIA_DIR = "medias";

/**
 * IMAGES
 */
const CONF_IMAGE_CACHE = CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache";
const CONF_IMAGE_SIZE = 2000;
const CONF_IMAGE_QUALITY = ["jpg" => 75, "png" => 5];

/**
 * MAIL
 */
const CONF_MAIL_HOST = "smtp.sendgrid.net";
const CONF_MAIL_PORT = "587";
const CONF_MAIL_USER = "apikey";
const CONF_MAIL_PASS = "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";
const CONF_MAIL_SENDER = ["name" => "Robson V. Leite", "address" => "sender@email.com"];
const CONF_MAIL_SUPPORT = "sender@support.com";
const CONF_MAIL_OPTION_LANG = "br";
const CONF_MAIL_OPTION_HTML = true;
const CONF_MAIL_OPTION_AUTH = true;
const CONF_MAIL_OPTION_SECURE = "tls";
const CONF_MAIL_OPTION_CHARSET = "utf-8";

