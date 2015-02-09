<?php
define('ga_email','app.analytics.2.excel@gmail.com');
define('ga_password','6yhn7ujm8ik,');
define('ga_profile_id','86189059');

require 'gapi.class.php';

$ga = new gapi(ga_email,ga_password);

$ga->requestReportData(ga_profile_id,array('browser','browserVersion'),array('pageviews','visits','newUsers'));
?>
<table>
<tr>
  <th>Browser &amp; Browser Version</th>
  <th>Pageviews</th>
  <th>Visits</th>
  <th>NewUsers</th>
</tr>
<?php
foreach($ga->getResults() as $result):
?>
<tr>
  <td><?php echo $result ?></td>
  <td><?php echo $result->getPageviews() ?></td>
  <td><?php echo $result->getVisits() ?></td>
  <td><?php echo $result->getNewUsers() ?></td>
</tr>
<?php
endforeach
?>
</table>

<table>
<tr>
  <th>Total Pageviews</th>
  <td><?php echo $ga->getPageviews() ?>
</tr>
<tr>
  <th>Total Visits</th>
  <td><?php echo $ga->getVisits() ?></td>
</tr>
<tr>
  <th>Results Updated</th>
  <td><?php echo $ga->getUpdated() ?></td>
</tr>
</table>