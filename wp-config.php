<?php

$abspath=str_replace('/rhernandez','/wp-config',ABSPATH);
include($abspath.'/rhernandez.php');
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
define('DB_NAME', $db_name);

/** Tu nombre de usuario de MySQL */
define('DB_USER', $db_user);

/** Tu contraseña de MySQL */
define('DB_PASSWORD', $db_password);

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST',  $db_host);

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
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
define('AUTH_KEY',         's|*tHY={#]>=oC]LfZkeC^;hQxdKF0,L{l7rv~B!nLi``}jNHfPDrbBi7K~ne6C{');
define('SECURE_AUTH_KEY',  'Bx.1qm/6xE;,#E@Rt=1bxoD+gka82;AaZ`<ow<D0#FssC?djd@ ;?7~4>+#S9{q4');
define('LOGGED_IN_KEY',    'CIT<2MSAn>B$s2`fC(PECujsYHErN2.OA7M63GPOR&y9I;56;KM)38d1YPoJAeCM');
define('NONCE_KEY',        '%dt0v_Nzgu`^z}1KPv-yAbt1sA)7:~ 4e:uE4dV-,ofn,OD a~gp5bS~O?N*V{n2');
define('AUTH_SALT',        'GnSqkYM32ybeYm33UQPN=(dPB}SN!ow+edZVWky`,-Uo]FVZa*E<[<6=nWrV7d=+');
define('SECURE_AUTH_SALT', '{aYw! 9hB?9@NvwQ& -6q[NBB;+}o0T2opY,Al!$62cRU|@9d[<1kt~H&NKQ2WMY');
define('LOGGED_IN_SALT',   'mW*k9b4BP7.cfzr/UjWW9cy8DO4?wbwKi[ai<$C06$>q{w*P$/$6=mPbO1Kb9%.[');
define('NONCE_SALT',       '/UVJf~AZy#^N>E `>UJD;xhg(mq1g4eahH%/pIV(PC6TpHZHI8kQijp9wyXzcF^k');

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
