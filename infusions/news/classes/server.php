<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: classes/server.php
| Author: Frederick MC Chan
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/

namespace PHPFusion\News;

abstract class NewsServer {
    public static $news_instance = NULL;

    public static function News() {
        if (empty(self::$news_instance)) {
            self::$news_instance = new NewsView();
        }
        return (object) self::$news_instance;
    }

    public static $news_settings = array();

    public static function get_news_settings() {
        if (empty( self::$news_settings )) {
            self::$news_settings = get_settings("news");
        }
        return self::$news_settings;
    }
}