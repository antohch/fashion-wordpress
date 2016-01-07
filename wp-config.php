<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'fashion');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8{a(D.cE+-UNzs1-/qygfKS+G+Q6pL2tR!yW [M@Og}O|;|4lg8#QYI9imuR7I&a');
define('SECURE_AUTH_KEY',  '7c$YXp!f>Hc+TMkmdzI|~0n<pCm/}~bbT_4p]?fl?f1i`5.iGnUp85 @JZ^MNhV+');
define('LOGGED_IN_KEY',    '@B PI{aIJ|{BFlnig^+o(zUv=j<65wl3(+W];+~GFb-|x>mHWGe[[7F)Y{)U_1&u');
define('NONCE_KEY',        '-0iX1R<!;|xou4ohNT51 cf:+~H98+Wk@[m(P]<@/|*o%P R7]o;S-`rD+_Xcccj');
define('AUTH_SALT',        '*-h2*NJ-69u/)x(+OGT}$swL|vJKodF}KCJ54Da)Kbp[8Z-WEr53<w`i=sRjC]K%');
define('SECURE_AUTH_SALT', '}Sy?]OxomU$$iWI)Y</Ol<MP_o_B4V>]I?iR~4F$TW4BCoc5+,*yC^^X5~_c[ m7');
define('LOGGED_IN_SALT',   ':)F4wMS;QeNo!tpK%(=foDQ5-DOvlr4u77|4p@FYJ{*>pP+!n6Lm4>9EyH>f0#ka');
define('NONCE_SALT',       'R|DnF;ZkjJJB*BbN:E-)8?>Ej@7srJk{AKCy!]g_.7@!L;GGz7r{1#~L[r9,~2 ?');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'fa_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
