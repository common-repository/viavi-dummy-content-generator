<?php

//Installation function
function viavi_dummy_content_install()
{
	global $wpdb;
	
	$table= "CREATE TABLE viavi_dummy_content (
                      id tinyint(2) NOT NULL,
                      words varchar(10) NOT NULL,
                      PRIMARY KEY id(id));";
    $insert= "INSERT INTO viavi_dummy_content(id,words) VALUES('1','150');";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($table);
    dbDelta($insert);
}

// Un-installation function
function viavi_dummy_content_uninstall()
{
    global $wpdb;
    $drop= "DROP TABLE viavi_dummy_content";
        $wpdb->query($drop);
    
}

?>