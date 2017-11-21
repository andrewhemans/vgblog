<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vagaroblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_9UYP]yVvwJblgzI)ge<,^/G[/K.94-c$L!8Xtk,<<!+aGbXM>pi#+|!gJ}5(zI8');
define('SECURE_AUTH_KEY',  '>D0-{H}4!d-/#|=~Fuj:H7TRE-Z^7KBeL{o(x8TK^NHv&J&nKyRzPHd)%nV/#Aq!');
define('LOGGED_IN_KEY',    '3l*#~hW[HNAhKw8(0T41Uv:*mW:vm9<d@Rj6cv/-?CXo!TP2SQrJGF[a@d(Kr]kZ');
define('NONCE_KEY',        '5hn4SU3mSuZ-W$-u;sm*6]Q:z>Yfi_`?dv>QXO]0`rl2G@7`gBaQD.Oki*+Y2?GY');
define('AUTH_SALT',        'v>Fb:4$KTWt0E5I@dI$~sIv|PeF fMW(KrKdblFfHsx_*i -L1y@h>X#D8;[FFKo');
define('SECURE_AUTH_SALT', '11_%e+Ajc);6|_Mbl]{m3iLBw^nzGtLthG*cbYcpdW@r$%HWIkU_G[|0/4p^F}TV');
define('LOGGED_IN_SALT',   '~GQ:;Qc$W$OzK}6+r;y1fFq2rk78vD=?KUB0ZhR6F.!rjja)!DfL3tpU3zDqz`%[');
define('NONCE_SALT',       'jGTp LZ?2. ei!GR&mzSWq__>ZYxy}>LfSmA/YMN@&6i94TAz$0iJu`D_K@j[cG2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
