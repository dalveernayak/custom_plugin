<div class="wrap"> 

  <h1>Write your code</h1> 
 <?php    echo "<h2>" . __( 'Site Listing' ) . "</h2>"; ?>  
<table class="widefat page fixed" cellspacing="0">
  <tbody>
<?php
global $wpdb;
//$wpdb->insert(ORDERS_TABLE, $data);
$sql = "SELECT *FROM ".COMP_TABLE_PREFIX."tutorial where  1";
$results = $wpdb->get_results($sql);
//$results = $wpdb->insert($sql); THIS IS SIMPLE INSERTION METHODS IN WORDPRESS
//$results = $wpdb->update($sql); THIS IS SIMPLE UPDATION METHODS IN WORDPRESS
/*$wpdb->query("
	DELETE FROM $wpdb->postmeta WHERE post_id = '13'
	AND meta_key = 'gargle'");
$wpdb->query("
	UPDATE $wpdb->posts SET post_parent = 7
	WHERE ID = 15 AND post_status = 'static'");
	
	$mylink = $wpdb->get_row("SELECT * FROM $wpdb->links WHERE link_id = 10", ARRAY_A);
	
	<?php
$fivesdrafts = $wpdb->get_results("SELECT * FROM $wpdb->posts
	WHERE post_status = 'draft' AND post_author = 5");
if ($fivesdrafts) :
	foreach ($fivesdrafts as $post) :
		setup_postdata($post);
?>
	<h2><a href="<?php the_permalink(); ?>" rel="bookmark"
		title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php
	endforeach;
else :
?>
    <h2> Not Found</h2>
<?php endif; ?>


 <?php $wpdb->insert( $table, $data, $format ); ?> 
	
	*/
?>
<tr>
	<td>This is simple add page for your add new items....</td>
	<td></td>
	<td></td>
</tr>
</tbody>
</table>
 </div>