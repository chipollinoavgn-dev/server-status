<?php
include_once "classes/incident.php";
define(REMOTEHOST,"https://www.theskyfallen.com");
define(REMOTEHOSTSERVICEID,"1");
$rhc = file_get_contents(REMOTEHOST);
if($rhc == ""){
    Incident::addFromPing("1","Server Unreachable","Server is unreachable. We are trying to identify the problem.",REMOTEHOSTSERVICEID);
}