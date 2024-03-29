<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cdc' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6&4]?~ilZGrw(B!F2@*n>OvD%@gASz?xU8U ;~L/289>zJ|2#ak&h>Fx&Rtb)5hj' );
define( 'SECURE_AUTH_KEY',  'Q[b,NXug[f%U_D{,>ToSk3 tZ38=O,{lm Ef/]HMEBY Ak3P+Vx`RDxw?ci_C)o;' );
define( 'LOGGED_IN_KEY',    'b ss=FkNxJ&5 @,2Fx(9D~FOEKbFC4Nd-=9$NBG-py<3Y4H$qAPO<id?,/4/[e5+' );
define( 'NONCE_KEY',        ' me:+n1|icO[z| pXYxih{{PIr{Od!1p<[_x@Dn, LJv()PtvPgXZZjEEiQ1;59Y' );
define( 'AUTH_SALT',        'm(i%i|-WV%BHgw1$oxU;l?i]3qg343`(j:+bmu#3.<34{0AW-;D^Uf.H^H|}|$]%' );
define( 'SECURE_AUTH_SALT', '4/%&mjVIv.-z#x;Z%PaeMt=?8Sf0BRkq0wdmg[3Jfs/&ZuF<3tomlhUMBZ;aoU>,' );
define( 'LOGGED_IN_SALT',   ',M<ufCRl! )#Xh|U${| +.ZxE(y%BVySD[M(u*_Wo5P;:9<(O?}wlCjW>`Uwyf^&' );
define( 'NONCE_SALT',       '}#`^dX#SL0T+L9)_p=8HI+B}#T]g<G3<}E@_$+T,b9kO`)lHN#dmjCaAez(;P(fP' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
