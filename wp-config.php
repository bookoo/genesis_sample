<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'genesis');

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
define('AUTH_KEY',         'Tj[-I0}k%v.UN[| O}+@I4&l[yK|4jX1}G,?C-~@iA^9M`6[s0C``t#--BKes0<,');
define('SECURE_AUTH_KEY',  '|O|:[n$(q2MQPbBS/G(G?:rn||+)VmQ^RFE<K#b0Ed.z|wl<0u+vP+wXpy6R3S`s');
define('LOGGED_IN_KEY',    '*9G+)UnM4x#s|ccxR~^D.W^zs*q xP/J^WggZ5XD8L|;z ~hM2mSS0>DIASJuo@l');
define('NONCE_KEY',        'G4K=*Y$ec(pk={m!YmyhQ|gcv&-H{~O(r|)g&+EW:YFn,Y;)8k/Nmwt_]%Jfs-hQ');
define('AUTH_SALT',        'dV^]Pt||).s`*iQ(3 KoBCR@UuX2+/ZBflnF6r]0LQ~g;/WWc2}w*#`vrxnS`Oa8');
define('SECURE_AUTH_SALT', '>S|+t9aULC)Gw+y#-6P-|UvP0CD5tK- FBxm_|N2`XW<#4z Jl;QC5LZEWBTcAP;');
define('LOGGED_IN_SALT',   'u:KwW_<Jsc^vD|dPGyVrqgP0W30(<=ZSg@h]tA5J-%cj37Uy>T+XV/ A y;PWr{[');
define('NONCE_SALT',       'GyxEU^;1fAx=3nQ2;DnobHf9>.LO)D-]Q5g[s_-<8{):A5_X|yTJ`jF-ZgKopt$?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
