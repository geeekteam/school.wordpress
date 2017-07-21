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
define('DB_NAME', 'gorpinich-school');

/** Имя пользователя MySQL */
define('DB_USER', 'gorpinich-school');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'r2BmToE7NqZnmrdd');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'PMeZXF`_5U:JbXwC`^[rSoFo1%WCOtMS4nL#<KM1RZCxCX(+(5PYM0M[bM]x6Tr*');
define('SECURE_AUTH_KEY',  '{5Z5])1}IB>hgd3.[N+sJaL_q)}BHuH3z(x2@NKn?j0r)&0JO=Xwb_Bm^}^t,_t]');
define('LOGGED_IN_KEY',    '{~Bm8 H;_y<c;rI~~LEv}0D(H&/n/6l)WH!s5qlfW+gA@&ia^/)cz]C6F$l0ZI%g');
define('NONCE_KEY',        '+ [3rbDF%(G*tW(+`VJHfPhLTS_KS!2b,VV+W&gmTTJ8s-orjZMZip,mS1m@!z+$');
define('AUTH_SALT',        '69qG/]sqq8rxb/:19*nZw@T@>:.V__S|z%um*:;K)>$y0zF=$=kbR+J/-Z)(h$o8');
define('SECURE_AUTH_SALT', 'XLg^KZEIn )ox=S=jHUI6TC%o^SAn=o8/R)C18qK&u1I`-yTx|vy3xuZn^iV6+PL');
define('LOGGED_IN_SALT',   'cFP/u^V6Xbi)|[#TuomkP)s@T@ H!A[ 6ZP-r2}Gv812/D+R?B<h}U}EN^V~@XyW');
define('NONCE_SALT',       'PK-+M]|O8s/-sh[MedAC_e(xIW+E.[t6+|g?i4)qZaxS6Jgy7bg}y:D[R}29E6K.');

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
