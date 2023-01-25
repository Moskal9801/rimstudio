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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'rimstudiowp_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         ' QO{@lxf,915@G:Fh_4Slw<aVk@oE*>MCfv7 RVhF[s5vP,3 rZ[tC(FTaN4_j a' );
define( 'SECURE_AUTH_KEY',  'PJd3A-4|~rX ~7{ms2A@Dp.w&R+=BH$78wKX+<J$/)./~H-hM%n^oVnTW8xmN#Ci' );
define( 'LOGGED_IN_KEY',    '(]h#mQZw&Ab}M<ff(b){u<?BNZx/OyQ?8GMt$jmfHPpaKhv]`=fv_as0a7i3ig#q' );
define( 'NONCE_KEY',        '-hI5SD*$2WW5[YJ&gRU5(ncVr(IBPba`Ine,NC@3K6zCC ;+PL/I( :5APuU@mHW' );
define( 'AUTH_SALT',        '?[H#gLv&L`s^o5ed1|qvR>WvtStbZC/|A ;/;qui>[LEn5lH1Q)0/x|EH~iJH(wX' );
define( 'SECURE_AUTH_SALT', 'lZZ!F6pEX;u1viUW&=N*sYU$X&a=<l1O7L>!jQ0g0@xA`HFLYK4o0/[R0DYIpx>v' );
define( 'LOGGED_IN_SALT',   'EiC{9lS$qCizu<?J|1iNesA4lgA%xPe6T=1%g1]H153|PvE+oC3x$f;qy_5Gv>o^' );
define( 'NONCE_SALT',       'atq!}s(l} [*qh0?;QzDUoXj~oH-KUv^*s2h(YO0qM6nmHwp|X79&2=FwwhaJv5n' );

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
