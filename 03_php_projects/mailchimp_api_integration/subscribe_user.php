<?php

require_once 'http_api_tests.php';

if (isset($_POST['mailchimp_us_first'])) {
    $mailchimp_us_first = $_POST['mailchimp_us_first'];
}

if (isset($_POST['mailchimp_us_last'])) {
    $mailchimp_us_last = $_POST['mailchimp_us_last'];
}

if (isset($_POST['mailchimp_us_email'])) {
    $mailchimp_us_email = $_POST['mailchimp_us_email'];
}

if (isset($_POST['mailchimp_us_status'])) {
    $mailchimp_us_status = $_POST['mailchimp_us_status'];
}

if (isset($_POST['mailchimp_us_list'])) {
    $mailchimp_us_list = $_POST['mailchimp_us_list'];
}

subscribeClient($mailchimp_us_email, $mailchimp_us_status, $mailchimp_us_list, $mailchimp_us_first, $mailchimp_us_last);
