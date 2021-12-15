<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7W%3wYLHD;#_|]EYaZI7(b0r8al_/u.s(-,z]#dqxm7_$JDTyjSjcM/osFeRf4h~' );
define( 'SECURE_AUTH_KEY',  '5Nr1KO652EjG)_yZQY32E),kirILN5+c&*<#}qc&Mz)wVe3@f]ZzZ liKt4_9`%z' );
define( 'LOGGED_IN_KEY',    'AF>vq@(%7ehg8cDBd*fY&/G^CKZxf.8k_euAr=|S`HX1aow]~F>MI/h@eVPk LJp' );
define( 'NONCE_KEY',        'E?]fo(A5jo8 .v`5;(hQd)H.qRX@eJgmvn5(A62e3h<f?ef2!oOP(||~k&;`(|GY' );
define( 'AUTH_SALT',        '[l{bTf*7_+mSP~-h8yDFk77H)+E4uOQS,B[Iy-L<)H?wn@Qt+W6R<3chkwYr$;y0' );
define( 'SECURE_AUTH_SALT', '|zV?5G~,NX_304Yq8y2QZ`=D+$A+t|LoF^%$`:mhhKOxrfJ3t](a|3nj 86$@9,)' );
define( 'LOGGED_IN_SALT',   '(2hpKQZv7}(,_Ox0fOoZK77wsq([?DDnD|FX+vm!jXgiayhMaH|.LYgh+:W1KSEU' );
define( 'NONCE_SALT',       'i60G>OZ<{W*&[5!mp2~z=E*!:o4:2mpXdlul80YQhc[.&-xLn`*Ym%Lc0D1Dzj8H' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
