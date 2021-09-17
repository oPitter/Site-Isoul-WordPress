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
define( 'DB_NAME', 'isoul' );

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
define( 'AUTH_KEY',         ' |uvPBCS;aXOA4q)-VUE86nWWH:fPd<-}{u~P2+)UJIxHiJEi<+I4f&CyTKtn|l9' );
define( 'SECURE_AUTH_KEY',  '6*HJA,O<p*ap)oz`_z(6SQgfs3;Fj@:*[+q9I{S.%`}=*jrK#)da._Trf)VzrxpK' );
define( 'LOGGED_IN_KEY',    'SgJS^&X^]Mu2XS$L2=/hGn9$RiGsR`/,n.)84#IY1:`8|k&Myb]mS&T8*!W{9HP&' );
define( 'NONCE_KEY',        'n^L(XZU=89vm<1%q$u5Ca{9Eun[o($GrgB^W)U#xCJ?YG,OdE?,~S35r=JHp7O6=' );
define( 'AUTH_SALT',        'oN`B<SAX:)Gn k7OmY2IHXGRGw^gDl?&|k$;OZ#*V)I4BL=2||Fm~NCi!Uov~);>' );
define( 'SECURE_AUTH_SALT', '@<8SC$Q_sdh{.7,c95@/*v`/;gl+(n-1qZ45;GpgJeLv@|}kI+}Qp1C*A %i>vqb' );
define( 'LOGGED_IN_SALT',   'vD7;q?j@9~f>e%@C#u( u5gI*p:pD@Ekm:!zcdgnqjZ+uqF]ke%#bsQZamXf+oqW' );
define( 'NONCE_SALT',       'J[YkabpDyHG }mN3*iD%#@^m!ge5j@}:M?Rlen{`B&+xP,-y-OG(sOQeYgW?XQ_h' );

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
