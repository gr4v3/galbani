<?php
define('ga_email','gr4v3m4n@gmail.com');
define('ga_password','Lafasolrelami123');
define('ga_profile_id','97567393');

require 'gapi.class.php';


$ga = new gapi(ga_email,ga_password);

/**
 * Note: OR || operators are calculated first, before AND &&.
 * There are no brackets () for precedence and no quotes are
 * required around parameters.
 * 
 * Do not use brackets () for precedence, these are only valid for 
 * use in regular expressions operators!
 * 
 * The below filter represented in normal PHP logic would be:
 * country == 'United States' && ( browser == 'Firefox || browser == 'Chrome')
 */

$filter = 'country == United States && browser == Firefox || browser == Chrome';

$ga->requestReportData(ga_profile_id,array('browser','browserVersion'),array('pageviews','visits'),'-visits',$filter);




?>
<table>
<tr>
  <th>Browser &amp; Browser Version</th>
  <th>Pageviews</th>
  <th>Visits</th>
</tr>
<?php
foreach($ga->getResults() as $result):
?>
<tr>
  <td><?php echo $result ?></td>
  <td><?php echo $result->getPageviews() ?></td>
  <td><?php echo $result->getVisits() ?></td>
</tr>
<?php
endforeach
?>
</table>

