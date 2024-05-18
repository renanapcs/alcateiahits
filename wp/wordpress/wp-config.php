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
define( 'AUTH_KEY',          '5`KXbgy7?Z9lBSqJx}v[)2dFr$jJp 1vi}<C|/lM.{+^{I#SZQ@e:tS#r<bvMrn?' );
define( 'SECURE_AUTH_KEY',   '[UJ[r%aX[;-*~~omBUeh1VVGZ=2P+1$0x&FdUcllXalm$VJqn,18obl|3yOb3C8/' );
define( 'LOGGED_IN_KEY',     '%uqZKyGVG}3-O]%^eL=P,WJ_*KkwBMa`K|wUs~XQM o(RT@g)T&J:+_)n!K{0})<' );
define( 'NONCE_KEY',         '8vLu4UGsR^r*}}:~RAQQdal>g%9B^Lgx0,!4?Iwjnk6a;v= ue@R47Fqr7~Ix7vA' );
define( 'AUTH_SALT',         'gn;xwj?SlAYZT,?j,Fz_,m N`x:.(WrB7V5HV9FvZha/!f4R(KM& =M-YQvDKdYn' );
define( 'SECURE_AUTH_SALT',  '&UOXjK!IDhOV.s/m&8FiyVa&=i}^=SkhR<Un&d3LIo~X:V:hw/cYK4<uk]d+/Rl/' );
define( 'LOGGED_IN_SALT',    'ZO9: rA:L$%2o/+&{xvu<WM3WYp/]M|>#cpsJMv6#{Z9KBi(Z$:J#Fq#QxG%0u}l' );
define( 'NONCE_SALT',        '7e=}lzXglU~*u~BC6ZL4OG4B-y`PfDs!GXM~F}9}7w)cShW!}&P.mFc<8v`OgI[f' );
define( 'WP_CACHE_KEY_SALT', 'z6P$5:!q50{:sbQ:Up%}t&~2+S.A+b~nSPC3uZ[[{zib5M*6U`8.;zsb#5[Ka}}=' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpress_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
