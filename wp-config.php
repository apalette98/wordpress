if(file_exists( dirname( _FILE_ ) . '/live-config.php' ) ) {
	define('WP_LOCAL_DEV', false);
	define( 'DBI_STAGING_SITE', false );
	include dirname( _FILE_ ) . 'live-config.php';
}
elseif ( file_exists( dirname( _FILE_ ) . '/staging-config.php')) {
	define('WP_LOCAL_DEV', false);
        define( 'DBI_STAGING_SITE', true );
        include dirname( _FILE_ ) . 'staging-config.php';
}
else {
	define('WP_LOCAL_DEV', true);
        define( 'DBI_STAGING_SITE', false );
        include dirname( _FILE_ ) . 'local-config.php';
define( 'DISALLOW_FILE_EDIT', true );
define( 'AUTOMATIC_UPDATED_DISABLED', true );
