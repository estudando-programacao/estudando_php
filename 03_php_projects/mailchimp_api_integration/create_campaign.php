<?php

require_once 'http_api_tests.php';

if (isset($_POST['mailchimp_cp_name'])) {
    $mailchimp_cp_name = $_POST['mailchimp_cp_name'];
} else {
    $mailchimp_cp_name = 'NEWS CRIADA SEM NOME';
}

if (isset($_POST['mailchimp_cp_type'])) {
    $mailchimp_cp_type = $_POST['mailchimp_cp_type'];
} else {
    $mailchimp_cp_type = 'regular';
}

if (isset($_POST['mailchimp_cp_list'])) {
    $mailchimp_cp_list = $_POST['mailchimp_cp_list'];
}

if (isset($_POST['mailchimp_cp_from'])) {
    $mailchimp_cp_from = $_POST['mailchimp_cp_from'];
} else {
    $mailchimp_cp_from = 'STEAL THE LOOK';
}

if (isset($_POST['mailchimp_cp_replyto'])) {
    $mailchimp_cp_replyto = $_POST['mailchimp_cp_replyto'];
} else {
    $mailchimp_cp_replyto = 'test@thierryrenewebdev.com';
}

if (isset($_POST['mailchimp_cp_label'])) {
    $mailchimp_cp_label = $_POST['mailchimp_cp_label'];
} else {
    $mailchimp_cp_label = '[ STL ]';
}

createCampaign($mailchimp_cp_name, $mailchimp_cp_type, $mailchimp_cp_list, $mailchimp_cp_from, $mailchimp_cp_replyto, $mailchimp_cp_label);