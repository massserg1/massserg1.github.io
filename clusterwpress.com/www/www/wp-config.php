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
define('DB_NAME', 'shopwpress_db');

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
define('AUTH_KEY',         ')4 N0yN%%ddRVT%eW(Hmjwf-4_mH;Q9p40-9Ri<S^1E0hsW{4~h79dUC{8&.:O(6');
define('SECURE_AUTH_KEY',  ',<m$ T|FkY[_}rvS*IX~g-6v#itpf/k21}B#ND3`M3`N=>h8 dRhW>;(2(;%&>Mn');
define('LOGGED_IN_KEY',    'ElLKzrCPwz%l+l_HyzAn2LaFH&Lf=m-1mWcSZrSj}!:<y=oPYoM?sC`C+<*2E&|K');
define('NONCE_KEY',        ',}Z/( `R=hxQc,vC+^+mb!lkg-^F[*=.BKEK4*0Sv:1>`hQJ; 4Q`:7b[yc(cNPN');
define('AUTH_SALT',        'rzEFxQY&Mf*b@N]9bsm<>ztDFw!N7/T!CEVtRy%?sg0weOgw2;/7^,Cw&)U)Of?+');
define('SECURE_AUTH_SALT', 'AzZajBzK1~@~&ZE`XVjDluRW*dXj8~r5?[qoMd V.(z:7|B$jOPaAZA!S/QUd$;b');
define('LOGGED_IN_SALT',   'mBrq;l-Jv2G:D}$:$Nu8|Ei8~2C$/m8~W gx#=O:%BV_DNS},jp5M_8YHo#QNyX<');
define('NONCE_SALT',       'HiiCDZF1NJ4kK+1|)x%D[N<9JHDRG)v%h!n.n;^A)ou;O)}h}T w>y01oc(}7X22');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
