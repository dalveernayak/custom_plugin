<?php 
/*
Plugin Name: Custom Plugin
Plugin URI: http://www.a2zmp.com
Description: You can create any type plugin after look these files, custom plugin wordpress tutorial for beginners, beginners can learn to create custom plugin with easy code and understand, wordpress plugin creation for beginners 
Author: Dalveer Nayak
Version: 4.0.1
Author URI: http://www.a2zmp.com
*/



$siteurl = get_option('siteurl');
define('COMP_FOLDER', dirname(plugin_basename(__FILE__)));
define('COMP_URL', $siteurl.'/wp-content/plugins/' . PRO_FOLDER);
define('COMP_FILE_PATH', dirname(__FILE__));
define('COMP_DIR_NAME', basename(PRO_FILE_PATH));
// this is the table prefix
global $wpdb;
$pro_table_prefix=$wpdb->prefix.'comp_';
define('COMP_TABLE_PREFIX', $pro_table_prefix);

register_activation_hook(__FILE__,'comp_install');
register_deactivation_hook(__FILE__ , 'comp_uninstall' );

function comp_install()
{
    global $wpdb;
    $table = COMP_TABLE_PREFIX."company";
    $structure ="CREATE TABLE $table (
    CompanyID int(11) NOT NULL AUTO_INCREMENT,
    CompanyName varchar(255) NOT NULL,
    CompanyLogo varchar(255) NOT NULL,
    CompanyContents text NOT NULL,
    Country varchar(255) NOT NULL,
    StateProvince varchar(255) NOT NULL,
    City_Area varchar(255) NOT NULL,
    StreetColony varchar (255) NOT NULL,
    ContctNo varchar(12) NOT NULL,
    CompanyWebsite varchar(500) NOT NULL,
    Createdate  date NOT NULL, PRIMARY KEY (CompanyID)
    );";
    $wpdb->query($structure);
	  // Populate table
    $wpdb->query("INSERT INTO wp_company(CompanyName, CompanyLogo, CompanyContents,Country,StateProvince,City_Area,StreetColony,ContctNo,CompanyWebsite,Createdate)
        VALUES('Adani Power Limited', '','','','','','','','',''))");
		
    $table = COMP_TABLE_PREFIX."visits";
    $structure = "CREATE TABLE $table (
    VisitsID int(11) NOT NULL AUTO_INCREMENT,
    Visits int(11) NOT NULL,
    CompanyID int(11) NOT NULL,
    PRIMARY KEY (VisitsID)
    );";
    $wpdb->query($structure);
	  // Populate table
    $wpdb->query("INSERT INTO $table(Visits, CompanyID)
        VALUES('1', '1')");
		
	$table = COMP_TABLE_PREFIX."supports";
    $structure = "CREATE TABLE $table (
    SupportsID int(11) NOT NULL AUTO_INCREMENT,
    Supports int(11) NOT NULL,
    CompanyID int(11) NOT NULL,
    PRIMARY KEY (SupportsID)
    );";
    $wpdb->query($structure);
	  // Populate table
    $wpdb->query("INSERT INTO $table(Supports, CompanyID)
        VALUES('1', '1')");	
		
	$table = COMP_TABLE_PREFIX."reviews";
    $structure = "CREATE TABLE $table (
    ReviewsID int(11) NOT NULL AUTO_INCREMENT,
    Reviews int(11) NOT NULL,
    CompanyID int(11) NOT NULL,
    PRIMARY KEY (ReviewsID)
    );";
    $wpdb->query($structure);
	  // Populate table
    $wpdb->query("INSERT INTO $table(Reviews, CompanyID)
        VALUES('1', '1')");	
}
function comp_uninstall()
{
    global $wpdb;
    $table = COMP_TABLE_PREFIX."company";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);  
	
	$table = COMP_TABLE_PREFIX."visits";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);  
	
	$table = COMP_TABLE_PREFIX."supports";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);  
	
	$table = COMP_TABLE_PREFIX."reviews";
    $structure = "drop table if exists $table";
    $wpdb->query($structure);  
}


add_action('admin_menu','comp_admin_menu');

function comp_admin_menu() { 
	add_menu_page("Company Plugin","Custom menu name",8,__FILE__,"comp_admin_menu_list",PRO_URL."/images/menu.gif"); 
	add_submenu_page(__FILE__,'Custom list','View All custom Listing','8','list-site','comp_admin_list_site');
	add_submenu_page(__FILE__,'Custom Site list','Add New custom Listing','8','add-new','comp_admin_list_site_one');
}

function comp_admin_menu_list()
{
	echo "Now i know how to create a plugin in wordpress!";
}
// function for the site listing
function comp_admin_list_site()
{
	 include 'admin-list-site.php';
}
function comp_admin_list_site_one()
{
	 include 'admin-add-new.php';
}


//Add ShortCode for "front end listing"
add_shortcode("comp_site_listing","comp_site_listing_shortcode");

function comp_site_listing_shortcode($atts) 
{ 
	  include 'display-for-public.php';
}
add_shortcode("comp_create_company","comp_create_company_shortcode");
function comp_create_company_shortcode($atts) 
{ 
	  include 'createcompany.php';
}
add_shortcode("comp_company_login","comp_company_login_shortcode");
function comp_company_login_shortcode($atts) 
{ 
	  include 'logincompany.php';
}

add_shortcode("comp_company_listing","comp_company_listing_shortcode");
function comp_company_listing_shortcode($atts) 
{ 
	  include 'companylisting.php';
}
function Hello($msg)
{
	echo $msg;
}
?>