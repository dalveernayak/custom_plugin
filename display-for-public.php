<div class="wrap">

  <h1>Write your code</h1>  
<h1>This is front end Company Login Page.....<h1>
<?php Hello('This is messages'); ?> 
 <?php    echo "<h2>" . __( 'Site Listing' ) . "</h2>"; ?>  
<table class="widefat page fixed" cellspacing="0">
  <tbody>
<?php
global $wpdb;
$sql = "SELECT *FROM ".COMP_TABLE_PREFIX."tutorial where  1";
$results = $wpdb->get_results($sql);
if(count($results) > 0)
{
	foreach($results as $result)
	{
	echo "<tr>
	<td>".$result-> name."</td><td>".$result->website."</td><td>".$result->description."</td>
	</tr>";
	}				
}
?>
  </tbody>
</table>
 </div>