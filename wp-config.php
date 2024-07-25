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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'giramundoteste' );

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
define( 'AUTH_KEY',         'LIXD1UW&mt]X/a>E$GaNNr>,<KS#a NjKl7TsU)7eeI~<v7YCSp1[L?/r5n~8XvI' );
define( 'SECURE_AUTH_KEY',  '52@#/#=w7l)e@L1vtP}k~?C^9A;b_@>5cJH2?wxrguu/:LAjQMV!>e{ 8.5JFf*9' );
define( 'LOGGED_IN_KEY',    'x=Fe;wJ#G=^cD!$aAHTM)<@ng7Aw6Nx7IV`,ybm%)Fq6nZY]kIt^FjTA$q,(C89Z' );
define( 'NONCE_KEY',        '<@a4@xJ:l<#3*Lcl)2G0e#xJDcw}qp%NkJM!ZH:cw)jVpx1zlc]]T7/$]Df3cggf' );
define( 'AUTH_SALT',        '%1e~@*gH8f=_Duiz5w/eo~e*ZBf]-LD3*CNLjRKlheP d;TENoI}M;OAxqM7^V3m' );
define( 'SECURE_AUTH_SALT', '>dM5tO7 3r+P4%]lx5net@f84:oc1m)x[D$~{KB|zOtv3Etvt$$8$!@,m<O1 91w' );
define( 'LOGGED_IN_SALT',   'FB2je9aqCsMBbh]r,?7a`/S=|sx%dd^:-!JVWdJk]#Z5uWN5Rbd[AtAPSGwMje!X' );
define( 'NONCE_SALT',       ';:Vf#,tr3A1,>P.Tag9g[jGt!!n7-f@xZviG:,$R=48f]>C=a;n|lyV5Ak<p^Z[.' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'allanwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
