<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'hdm721877525_db');

/** MySQL数据库用户名 */
define('DB_USER', 'hdm721877525');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'Chenzhipeng0806');

/** MySQL主机 */
define('DB_HOST', 'hdm721877525.my3w.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fTsgKGX8T3|IHF8%gf`-Hz[%|XFFRWI=UZm4uBLTh^%pO-#z/|Yp=<#_V0%!-Ay&');
define('SECURE_AUTH_KEY',  'Z^No~]4+|;oOl5haX!=`ju+0G-Nn-Pp36x]mt62O6: Ji2hl@r~-|jub=L7x;/u0');
define('LOGGED_IN_KEY',    '0u|.c;R&PSiZ<?FXwD+Afq+^g[<<65,-drG4znmCmT&!h)t@mpDI/IhFSNT5SWA%');
define('NONCE_KEY',        '#yN(#+K3+K5|kGo,3p=z6/J_?zMFX+meTmwz 0!yYdMB6te:{|]E7F  ~.GH`urk');
define('AUTH_SALT',        'JN [.2}-%K:&?T~WK;J%H%rl2F(F=MQ`P2)D?X=jb2tEpN^=G.K.M~^SBw.v~{;V');
define('SECURE_AUTH_SALT', 'Bn_+Ph+-x;BbD-DlBFZK1z[Ru|`4b; u{kpoZ4@HI+zl4P|YvJ%-BRz?,,F!4[HN');
define('LOGGED_IN_SALT',   'cFa8|;r).F1A`[-PG)Ph)Q)znbr*a.0+bIdjIQ2o DFh$vP{GNy%m*(yIk0?e*ab');
define('NONCE_SALT',       'yt>qB)4&Q%K6 L<^dG*9t+h74efy-#U#R,Ri1^JE~((g)fV|TZa%Oi7ce!K}QG2+');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'dpux';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);