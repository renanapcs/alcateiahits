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
define( 'DB_NAME', 'alcateiahits' );

/** MySQL database username */
define( 'DB_USER', 'alcateiahits' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lucro$500.000K' );

/** MySQL hostname */
define( 'DB_HOST', 'alcateiahits.mysql.dbaas.com.br' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'k`o,/e}@AGg[$HFGqhvZY&8KkqQ,1W*XF9]X,|>g6uI0;zK|xLkP30i_jPL*a/]V' );
define( 'SECURE_AUTH_KEY',   '{3!<#[rac)7Jk&;Ou;w09DG`L[c|{i39:bdr1CF[f#4P 2(`e9_+QK^/(;$}p%m#' );
define( 'LOGGED_IN_KEY',     ',7f=eYARWeGuvrmQ]i|F=fFX/[.)WQc:hmJ4YPw;`Az8jUaVY|N6tE~9o7wX^{{K' );
define( 'NONCE_KEY',         'L|<FI`Md!}D[/}SAXqp(ZWG_//>?n%tjAf%-s6V#I=.t:i>=LyDoK3FD)kPz5L&A' );
define( 'AUTH_SALT',         '->[>yff1FK%R%YRza)`o4WYiXSPOVsVk^nSWV6@9s*]-INhv-,Av2s*tvR~Dt*!&' );
define( 'SECURE_AUTH_SALT',  '3&2T.~b;~b**mR,nu_g@^@zB9;B5;y${6ryL=?,7x*l7gELhVlt!`&|d/r~8@oQp' );
define( 'LOGGED_IN_SALT',    'jO{m#c[7-=%zqJ6Qe,Fz_.2fr.cHPWe*{LW_#(%iFGa0_+X%&0zkq2&#EY]eKk/5' );
define( 'NONCE_SALT',        '?ItT)eB{hj<y..K{CFxNt}V$kr|j+yl%kw4swX7)(!3<T=QA>x7}#5q5ThEsyXJ~' );
define( 'WP_CACHE_KEY_SALT', 'l#yZ@Gw 7smVn~QrH8_+Y6log|M5e%oS-AjHC.paz#an0Uzsx~M9{0g%<p-fJFY:' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress1';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
