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

<form action="" method="post" enctype="multipart/form-data">
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

<td>Company Name </td>
<td>:</td>
<td><input type="text" name="companyName" /></td>
<td>*</td>
</tr>

<tr>

<td>Street / Colony</td>
<td>:</td>
<td><input type="text" name="StreetColony" /></td>
<td>*</td>
</tr>


<tr>

<td>City / Area</td>
<td>:</td>
<td><input type="text" name="CityArea" /></td>
<td>*</td>
</tr>


<tr>

<td>State / Province </td>
<td>:</td>
<td><input type="text" name="StateProvince" /></td>
<td>*</td>
</tr>

<tr>

<td>Country </td>
<td>:</td>
<td><input type="text" name="Country" /></td>
<td>*</td>
</tr>

<tr>
<td>ContctNo </td>
<td>:</td>
<td><input type="text" name="ContctNo" /></td>
<td>*</td>
</tr>

<tr>
<td>Company Website </td>
<td>:</td>
<td><input type="text" name="CompanyWebsite" /></td>
<td>*</td>
</tr>

<tr>
<td colspan="3" style="vertical-align:top;">Company Page Contents :
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
  <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
  <textarea name="CompanyPageContents " style="width: 100%;height:350px;"> </textarea>  <br /></td>
<td style="vertical-align:top;">*</td>
</tr>

<tr>
<td>Company Logo </td>
<td>:</td>
<td><input type="file"  name="file"/></td>
<td>*</td>
</tr>
<tr>

<td> </td>
<td></td>
<td><input type="submit" name="submit" value="Create Company"/> &nbsp;<input type="reset" name="reset" value="Reset"/></td>
<td></td>
</tr>
</tbody>
</table>
</form>
 </div>