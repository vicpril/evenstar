<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'evenstar');

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
define('AUTH_KEY',         'cCN)MM74% rQqA|OY<a6VtzN+z4v,piEC}1U7Hr8- c&/!>?jh.g[ZCm*I*DZQB:');
define('SECURE_AUTH_KEY',  'VQm4!}%g33sbENDVZ![.Qqqb`QLj<>5VR@LeDo|*bGXkh|Hq,i.#wzbiEo3QhO?X');
define('LOGGED_IN_KEY',    'Q2posB+Ne2IW0__5VV|!W}+xLpeKlH&ox&l7F-x/`@|Vl+qfC6PK;fHAC,6tt{g+');
define('NONCE_KEY',        '8a,-g}&h|rpg0jW8dnd!ls2b6^o?@6svByBKlLrBKZ|d3*V)|LpL4t}_w.!YlSjK');
define('AUTH_SALT',        '~WBUCHWGx&T&mMX6<(@{lo3OBLYl[@&,~io,@@%q)XPx>9zSyr[t]_Ls[#<e&4wu');
define('SECURE_AUTH_SALT', '1*.^o:roQCmnUAgzhG: ?}=fB-M{UiA(L.0We`uI`3?>9,x`C$c}d6]UJHF|tS=C');
define('LOGGED_IN_SALT',   'A46/H/6|$z:Oa@}CTKYNO=Df-+QZ!77g6qBzy[U%7<&UKk|0,:|cby*KU/|{pG/i');
define('NONCE_SALT',       'boC~GPNArt`9mHKU-uqAB|;|wn9tL W]Ru}!CHv7V|P8)DL!V4V@cL*v$UcD@ZIF');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
