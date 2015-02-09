<?php
define('ga_email','gr4v3m4n@gmail.com');
define('ga_password','Lafasolrelami123');

require 'gapi.class.php';

$ga = new gapi(ga_email,ga_password);

$ga->requestAccountData();

foreach($ga->getResults() as $result)
{
  echo $result . ' (' . $result->getProfileId() . ")<br />";
}