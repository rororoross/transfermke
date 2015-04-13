<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_a56g6dnnk6');

/** MySQL database username */
define('DB_USER', 'ylW7ac1oD6OkqLy');

/** MySQL database password */
define('DB_PASSWORD', 'Sq5EAsPsLZPDgSvv');

/** MySQL hostname */
define('DB_HOST', 'viadownercom.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'bR&j]J[Rf$wlgD!Wp@gxI*_A@Du$Q{!BKuV=_W?EMkT-(}UE$H-Y=mbX-//QSdL[@qTwCmVqQQ=W&NNo$)FIkQmk>=oN>]ftl$sTIgew-ZsP%ClE>a{+|G^UrgEPxiU>');
define('SECURE_AUTH_KEY', '{Ms=&Y+UtmW!;rm$r%d)_S{[$SfS^V*rSNVIzFxBDoc;g^EnwN&>miG>-(X{IXY!cp>*RYMLF*?P$^W+;QA?w@^XsJG[[NsuG$<_qTcPCxA>S@*T_U^)lnVvkOqlys=J');
define('LOGGED_IN_KEY', 'y(M!^|HmA$?P{AJT_>ucFbw<MnmRhCaEDkfL*i&}^asQNA?Nlmrl[T;K{c;*lpSfGa>aLpAb(iK&+Xple([e]L>r-!jN%RH-riBj+^Is@CUAp)-vO/eSu<li^>Isz^FX');
define('NONCE_KEY', 'nv[RUlUwY{K=SDn|Bm@z%gde;dym(bH@hLof>RadfLbJgejr]KqDEDjpn>>lB*C^Mu-%q_k)Re}i>yWcRtvyN{hoUk^)$j<sORteOJh_*dw>-wNhZc@qY/D|BYxu}dB+');
define('AUTH_SALT', 'HwQ;k/hCk;L@bB;;VOd-ll|}KJs^TY$JHa+E?=(w{ll(s]<JfhTFe@f%hA}R)A%LiqVQrtK/RVXBzKZLQywZYqi|=!?{gVX)Plxe_t[[DRL!c&FYj]?*xz]qcROFTSUy');
define('SECURE_AUTH_SALT', 'R|!yA^iOhV@Is^%ILLq!y&XBn>{]ReXh*?KYrXID+MMbfUoBdRKu$jN%J+iD<wjpyhddOd$}i<HleX^UN<@hfzh?k+%N^M}Hsz>l_VkuHpLvnoOugpIgL-OR@(Hw}rQR');
define('LOGGED_IN_SALT', '/U!R[f}E;KiCchUh@[E<oJczJ>hEfG!IPcwDu>(HU{<!jtQtLShRDuYJflC?D/KmTXLhNJKxD=EsouHYH=>E{Sxzu%M_Y/ohJ_G|](dCGo-Yy<FLam@b?EyBrlpCFY|)');
define('NONCE_SALT', 'Ly[ytlOgFE[<]=enpR*^>M**a-^bGgFKG@]f|}jLWO>byWBfwL@/?XdSvN@DIDUlkisvj?fcYKoxk&d-[+xiKYwpvvV)]l*?NyKE=]U>H}c<E|WD{p<Jkxv$vLwSlVFz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ngjz_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
