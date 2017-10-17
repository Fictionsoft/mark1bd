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
//define('DB_NAME', 'mark1bd_webdb');
define('DB_NAME', 'fictions_mark1bd');

/** MySQL database username */
define('DB_USER', 'fictions_mark1bd');

/** MySQL database password */
define('DB_PASSWORD', 'b3p9%Lu)zvA^');

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
define('AUTH_KEY',         't`:#YPJ+D4K@f2=,;h+k.WI|v@Jm)M,rCB+,/J-r=<D:,JiP:kYs!CtMvn,PE>0-');
define('SECURE_AUTH_KEY',  'E`66dWHF7o;Vj`Sj-p!:oUsk/Jpy?xlT&D0kc V95%AxrCM@B$,AnC<6+fUVK(()');
define('LOGGED_IN_KEY',    'dX+)DpU~Z_9f/({2>j!<Jf#,fQiI`qsvWT%<K&S-WDvvzlP4suX*8j=^zS<0Ptv ');
define('NONCE_KEY',        'CZ]>vH+p=K:Kb%-ReP*UBe|fxTRl*u_%j9g{=eGg^twxuSVagPr6-HvS7lMt<G]-');
define('AUTH_SALT',        'SbzxvzK?0m`Agw%6jh1]Qga!+JlNQ}}u,9QY6h]Y$%J|Gj;BncBo*p1_>h>K@GN=');
define('SECURE_AUTH_SALT', ';Z=3p[4vtk_n.n_!u6+R}|GCTC#PMs@v6zR,7N9[W7`<uBwt:4`z5T6;~.o<_::~');
define('LOGGED_IN_SALT',   't@~~3zERcT8RBY5q-2vwGGV;Z76NxeQjoXsNB6wWUS+ kO#n]g>1-;V-H4$KX}0K');
define('NONCE_SALT',       'Ytm9Q%`BCfu>V~qA `HLmp|`WCWJTUT|[6?bV~/ eQ&ZQ/2pd3q @AfRA^*N2Q&+');

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
