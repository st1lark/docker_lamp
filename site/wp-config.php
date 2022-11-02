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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'asfasdga' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'docker_lamp_mysql_1' );

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
define( 'AUTH_KEY',         'T|OT(V]}~3tZ mmm|$G!KOG<d3fnta&hRm)RKV 3@]@y&h RA$Ze$pm{l<!X8_sH' );
define( 'SECURE_AUTH_KEY',  'qC!j6F@4r>yy&WO=K|Qkh6,BYg./c?`KnAizZ<Z-+.cn.<{lJDb$NjmxdPS0oJgo' );
define( 'LOGGED_IN_KEY',    '!dPbgLZW+u0Z-IyfIDU ^G0EV/:@cJb$3iK&4i9Vfu?j.3-gkEH7_gF=aaq;Z]?[' );
define( 'NONCE_KEY',        'CP$OE2[w%E_W9ohf858P?aY%N-aavO5dsJK[A&+,bfZU.R|LB.Qq#d(B2f#?Z}_s' );
define( 'AUTH_SALT',        'XV! G5bpZ7n_ec~v<z{^h@,^8>WYpjQk2>;}[VJfBxIzfijHN?d[ )hTFI)!(|&i' );
define( 'SECURE_AUTH_SALT', '~Xk[<-qq^YW;|{[e;z_O4>kbp0BR_I:BxLTtYof8_LLLsf2v;CG_}bYf!HlUDPdH' );
define( 'LOGGED_IN_SALT',   'cp5<`~TJS636`m]`nPW7BI>4[ %:eD7*Uk4HAbf6?rV+7!ZKmy>M#_K:p,:Aw[_U' );
define( 'NONCE_SALT',       ' n<q0NAYr.N:~|S8P;! }?UUFUp/}KU=d-TT?mYhMl?y0#RKt3]=g7PqnplsvFA.' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
