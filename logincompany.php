<div class="wrap">  

  <h1>Write your code</h1>
<?php /*?><table class="widefat page fixed" cellspacing="0">
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
</table><?php */?>
<form action="" method="post">
<table class="widefat page fixed" cellspacing="0">
<thead>
<tr>
<th></th>
<th></th>
<th></th>
<th></th>
</tr>
</thead>
<tfoot><tr>
<th></th>
<th></th>
<th></th>
<th></th>
</tr></tfoot>
<tbody>
<tr>

<td>Company Login ID </td>
<td>:</td>
<td><input type="text" name="loginID" /></td>
<td>*</td>
</tr>

<tr>

<td>Password </td>
<td>:</td>
<td><input type="password" name="Password" /></td>
<td>*</td>
</tr>

<tr>

<td> </td>
<td></td>
<td><input type="submit" name="submit" value="Login"/> &nbsp;<input type="reset" name="reset" value="reset"/></td>
<td></td>
</tr>
</tbody>
</table>
</form>
 </div>