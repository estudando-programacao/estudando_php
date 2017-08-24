<?php

require_once 'http_api_tests.php';

if (isset($_POST['mailchimp_cp_put_path'])) {
    $mailchimp_cp_put_path = $_POST['mailchimp_cp_put_path'];
}

if (isset($_POST['mailchimp_cp_put_name'])) {
    $mailchimp_cp_put_name = $_POST['mailchimp_cp_put_name'];
}

putNewsContent($mailchimp_cp_put_path, $mailchimp_cp_put_name);