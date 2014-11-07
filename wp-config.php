<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'diiario');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'diiario');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'diiario14');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r|WP,uxl(+~Y+9W<}_ibfII9f.p!1iUSh?!Jf2lhiBNP8732m,P[aX[+HVRY^V)K');
define('SECURE_AUTH_KEY',  'BC_z}ec2OTB>)ONl[4XK%r||A_-,7dR:;su~>mN0)iY-}Q|f ~E^j7y}Kk=m=l -');
define('LOGGED_IN_KEY',    'B*?p-UKv|G(dh76]`(cdV z`E|m+DSKJ2tJC7j~5+}/=g7.<q;<KIJn;F#>In+-%');
define('NONCE_KEY',        '<,6ACXBxeERS$MupJ};MhZ~!.nvZCN~GV#M<sA+HU(jV=zk4O?}n/)Gy=$l+6@#}');
define('AUTH_SALT',        'jWbQ;#txNyFomZQk-Oq8)_9Hr@y(~42TD@3cupb#W<$j:&PJ3O:kK3sbbm1!<46y');
define('SECURE_AUTH_SALT', '}G}rGIdb,U OMX-Vj+:17gOT]~5+JZ-[@*p1s)qquzEcN8C-F^iAvyMVb [U<|zE');
define('LOGGED_IN_SALT',   '4A;cNCh1J.fk^%{)D}xfw-g9s%/}Qgtx}e0@am9zUC1.S[5B,j)y7Ym^+k>2Gor.');
define('NONCE_SALT',       '3 V|v-n{V;KBspc]TU:b{zv,B/-0C3!u#Oo3:Q]}*QKo:5p=OdwK_2`mNLC4! DU');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'dii_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
