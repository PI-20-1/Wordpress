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
define( 'DB_NAME', 'PR_26_1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'dW! xI&>fREy_oMaf(TDjbxmc<G{S|wF<ExCd@3G?quU_j%Ul4g]L^$(nYi2 F.w' );
define( 'SECURE_AUTH_KEY',  '/lJu//5%%(Ki#.4@<Hv|%=>mXfW&jZ+hiLTW*%NL:Tm:%&$HWm5 ezu._JhvqIO[' );
define( 'LOGGED_IN_KEY',    '(Cj.CJ8WP}}L54/yUTQ:90Ui(os+gsM|K}06BQ5J=u5I2n`_`gA6mtm?~SJ=YL$c' );
define( 'NONCE_KEY',        '`:hrTSiS#<1[O;B8msa-+72.9|krh`Eat&DyOMbR(&z,89Hx_~:Jo;)gV(D?,Pa{' );
define( 'AUTH_SALT',        'bI3VqP1Ilt5H0Pe`6Cu5C}hWANQ.~eyL8KaZ;BMHP&+t=1%q%}!DI/`M8NIuo@ST' );
define( 'SECURE_AUTH_SALT', '5T!Ou_T3pv#-&V|m(Hql9G//qh2.jQ;|$6L:CST$AikBJB$83rlOeZM^dpGnXGdp' );
define( 'LOGGED_IN_SALT',   'nILc7a=YJhq(g|KyJ/,OA-0<jdqR5-wQJ{`sSZ<s94JMLuFZsME*d:x{@M|bku0L' );
define( 'NONCE_SALT',       '$`a&K#(PpJrU)z5r6n7<4K)Sl.`6W[6 {%>6 .6V!sH3iMRz=YbAP$j2jYYo4D)f' );

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
