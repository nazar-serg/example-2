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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OpenServer\domains\example\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'examplewp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':Hj/?a3!au16YmeLiSH{Tg)ho&]k-tYW$$?.ZA>j 2`bGx@l&vlIFXuXBO%afSZZ' );
define( 'SECURE_AUTH_KEY',  'an*ps53o1$MNurH3}G(~Q;Iohq;R6<|-OupzC2C.xEhT(7h( A&do-4xiJiAwSQL' );
define( 'LOGGED_IN_KEY',    'pti|WI2F^3fx0X]Z=ypkI~&,j A4}i/DP=BrW{.m<OeSriMI6yre|vy;hI[c`-1c' );
define( 'NONCE_KEY',        'l@uMx)NYof%bWXohbwS14ByV_j%.UMV:wz5_Dn&eWD?ImT]7:<JL_2RnUi;O,`9!' );
define( 'AUTH_SALT',        '6lf[XRk=[Nj8WI8UL]*S>a`O9ArqTB&, fwe13AM{XDR*-U=:=*_&+)Jw~j2tEbF' );
define( 'SECURE_AUTH_SALT', 'A+dR,.# +j9S=Dq0@A:Ft? <ci2 L6++1Je(Azm:b-mr:4w&:}v7xFWrpRZ^K4._' );
define( 'LOGGED_IN_SALT',   '!>noYw)yB4D4?C=G-+jh1Z}W9kj(.q4ipg|*V0/GI?cG#Tih(OD^/R9FdI5AqV):' );
define( 'NONCE_SALT',       '@]>Mg-2qfI]d`ol5;38AR/CvQf+3U~7of,$yT}g:6qgOtq<uDta%p_U$@Re7A-PW' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
