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
define( 'DB_NAME', 'dors_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x|s-Tg:)Pd3~dH]orf2ma?-m(UKw5Aj!X+RvcF~hj#d(85qv4Vqu#Tc~3,#I=<Lr' );
define( 'SECURE_AUTH_KEY',  'SuBUFZ!CXufQQYJW+C9<z;Wm;g[~$>lndjy8Z_9xc7/5}>pTJh4XfsS;b.!#JL#x' );
define( 'LOGGED_IN_KEY',    'r}Ci4ULX@w>!898+Ew~,80#o KrFw]4/1Zkc%{M[p$PZg[PD)V5oDKZ<->dfM.xq' );
define( 'NONCE_KEY',        ' iC3r/e S5hk3$IypH|ii1/$<D$od8o<yIfJ-ZC]L:>g,Sv(aWxX|.L5~30z9GD+' );
define( 'AUTH_SALT',        'BbHlD_qe(-HlsZI(_q`|cDJ[bp<5vw9m7wSADsLHBY5q(9ybV*%b2Yu7XuD:^L3C' );
define( 'SECURE_AUTH_SALT', 'j5ja:^E$:oSU7]<&u5W$xV]Ph]<zkn!s9$9XdPkoS&>L}*c$P%UBww.z?9LfU2yJ' );
define( 'LOGGED_IN_SALT',   'H(-#u3_HOhpZE#fQPN#K:.t_qdr@TY6Ejio|{*^@z}?bN~+}k+w-J.x`vVer@xM3' );
define( 'NONCE_SALT',       'Vd%b,%uQ6wT1~q0Tc4we(LHQQ%q<{D;l<go8`<!`F[/gp_w%9C|G?e!cK__1$)5F' );

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
