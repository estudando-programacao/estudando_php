<?php

require_once 'http_api_tests.php';

if(isset($_GET['cid'])) {
    $campaign = $_GET['cid'];
}

// r($GLOBALS);

sendCampaign($campaign);