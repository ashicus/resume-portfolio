<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'resume_local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rainman680');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'yt=jN,<xxYc|/lvyOf_#jnRq%hIJIFk55x--sq WWxXcq#KSr80W4X:~+;~[P/*F');
define('SECURE_AUTH_KEY',  '5ctST*s69NSvcB]M:}3_iBpE<l-x-k-k(fm~dvV(#{|wz!|CetIU;VWOK84}x6R5');
define('LOGGED_IN_KEY',    'm+m$f-d71#=}E=eCsUzOS^smR>H;!]Xm{=PQzc&0qd|QvjPkMj1%j0#R+:q:==^A');
define('NONCE_KEY',        'aN+b`#fTd7]KFc2aA@5._Z8KCoCksi!&IzAz50{V;JM%JyJAIQ&c2vh}E+IF|iW-');
define('AUTH_SALT',        'DK[37/n+zFR^t/Y{~4Ezr+?m[R3r94NcP[hF^a6Bu+K[Zz$^c3-MsZsi$#CRUu-|');
define('SECURE_AUTH_SALT', 'vu)l*;U_,OX)<A=6D}Kc+DCH$uHlO$^g(3%~Og&od%W|h+;iUM<j*!&d1eX,FlAv');
define('LOGGED_IN_SALT',   ']>p,rybv/aO9e[T<3-#fI8I=Ijs<&fCl4WQ<I5 %#y*{N:GLnbL$ry+X5aHCO|2A');
define('NONCE_SALT',       '<E=x8++*H+n6D _fG ;|syIbE9-qJ-`@j0;!6F[O^[NI9:eO)s`G=^=HNr_/!N)!');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
