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
define('DB_NAME', 'coderjon_ss_dbnameda1');

/** MySQL database username */
define('DB_USER', 'coderjon_ss_dda1');

/** MySQL database password */
define('DB_PASSWORD', 'THNIB2HwMsMI');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '}@nwqHx[Z%%W*/qN>HH|bu[&dGi(JALPNcjqRijrrSqF[*ovmRY+(lISXLC%[fU+?f>K$saUreC^&LYkfPpoQtg]m[B{-%FQ^tYi|GIa)[u!F*gGE){?(()(h_|Bw]}h');
define('SECURE_AUTH_KEY', '@FZnN-)WcD/@^Tf?%O$lNGIr^]zfTX)UI$ru+UTuh>!JqHjpunRi*Tr%oYui@a!WL/B_CQn+PEWw]=VBEYP<^;o+=fqq]?gIC+DX+RLx$;yUH^bQ^?lb?VA(}}!htUhR');
define('LOGGED_IN_KEY', ']D[TcGASiExwB{)]Er@gm;R[fWMOfAV}{c%rTN<+$iz&UgNLDF$wiRbmHLuJGm}PeSsN(X!*dAuZ|Um](?=a/lx)/BGM=|ku&nott%at>eFl&o}FCIVqL<eh<EAwx/oA');
define('NONCE_KEY', 'teuE*M&ldkirGfjG/VMrPasdv[{ow;^+QW@+cDZ/yI-+db(cnI^iG!$FK-Zh}|@iurBys+M(afy%j]tC|<te}xmbY|*!H*L(W@TVM}brFsDK%TaBZdjuon?m/}MW-aBS');
define('AUTH_SALT', '|KnZ=B$>Ii+Y?NP!=VuT_Kn^a&gQZiq}UWC!q^OnUqj<zhD]F-]ACLSLzdA]^;$]gWJ-a>Ab$NbcmdqR&Q-aYRf/v]>i{IymW/nQPUQ+wHIw}j+[Hoh=ug!/OkgG<?R-');
define('SECURE_AUTH_SALT', 'Gln}ZoxQeoMOF)+PLc?nik$PfWmA^V}gmhOpapuP[%%JHgr/b-JZh%A=Z_twoI[scwoVa&+EU%YU(cV@)=ij@SdG[j{QO;OwCjMsRsMsAz|PG+B(Qc|uCA!oYj<?WT}[');
define('LOGGED_IN_SALT', 'wCvF{A)eC]iD>mV]/jFgGSkFq;MYn&?AZ[!zGaF_Ni<YIrpkRn>!d^eXDluP%=i}ahGO{&kdM_@k*@RBW^p+DAT)=s[NBDbS<Is|LfI-{BDSL@}_v}?kwtnQKMQq_$(D');
define('NONCE_SALT', '<RMAk>Nht?r%&aS)l(Ejxr*+@)qN/NErsC(jFhskVQQLyAtYRnXjE<tNR!}!A=S|@EdWbKqaclTrMmFZn&%O^I$MClZmNl*a-Gvn_t>o_?]USS|S|T[gw?cG[/er}u/-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
