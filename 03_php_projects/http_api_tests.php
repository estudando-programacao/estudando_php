<?php

header('Content-Type: text/html; charset=utf-8');

require 'testando_composer/vendor/autoload.php';
require 'mailchimp.php';

use \DrewM\MailChimp\MailChimp;

$mailChimpApiKey = '784be5e75fdc27ef9a175465072244dc-us15';

$MailChimp = new MailChimp('784be5e75fdc27ef9a175465072244dc-us15');

// default values fpr functions
$cid = getLastCampaignId();
// $cid = 'f205f15bb3';
$defaultList = getDefaultList();

// echo $cid;
r($cid);

// example of subscribe an user
// subscribeClient('webmaster@stealthelook.com.br', 'subscribed');

echo "<hr>";

$content = "The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.";

// putNewsContent($content, $cid);
// sendCampaign($cid);
// listCampaigns();
// createCampaign('HEADER TAG');


echo "<hr>";

// getDefaultMembersList();
// debug functions
// debugLists();
// debugCampaigns();
listCampaigns();

// gambiarra for use less global variables 
function myMail() {
    global $MailChimp;
    return $MailChimp;
}

function putNewsContent($content, $cid) {
    global $MailChimp;
    $a = $MailChimp->put("campaigns/{$cid}/content", ['html' => $content]);
    if($MailChimp->success()) {
        echo "<pre>";
            print_r($a);
        echo "</pre>";
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

function listLists() {
    global $MailChimp;
    $a = $MailChimp->get('lists');
    if ($MailChimp->success()) {
        echo "<pre>";
            print_r($a);
        echo "</pre>";
    }
}

// debug campaign
function debugCampaigns() {
    global $MailChimp;
    $a = $MailChimp->get('campaigns');
    if ($MailChimp->success()) {
        echo "<pre>";
            print_r($a);
        echo "</pre>";
    }
}

// debug lists
function debugLists() {
    global $MailChimp;
    $a = $MailChimp->get('lists');
    if ($MailChimp->success()) {
        echo "<pre>";
            print_r($a);
        echo "</pre>";
    }
}


// return default list
function getDefaultList() {
    global $MailChimp;
    $a = $MailChimp->get('lists');
    if($MailChimp->success()) {
        $listID = $a['lists'][0]['id'];
        return $listID;
    }
}

// return members of default list
function getDefaultMembersList() {
    global $MailChimp;
    global $defaultList;
    echo "lists/{$defaultList}/members";
    $a = $MailChimp->get("lists/{$defaultList}/members");
    if($MailChimp->success()) {
        echo "<pre>";
            print_r($a);
        echo "</pre>";
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

// list all campaigns
function listCampaigns() {
    global $MailChimp;
    $a = $MailChimp->get('campaigns');
    if ($MailChimp->success()) {
        foreach($a['campaigns'] as $b) {
            echo "id: {$b['id']}<br>";
            echo "status: {$b['status']}<br>";
            echo "title: {$b['settings']['subject_line']}<br>";
            echo "preview email: <a href='{$b['long_archive_url']}' target='_blank'>{$b['long_archive_url']}</a><br>";
            echo "<br><br>";
        } 
    }
}

// send email
function sendCampaign($campaign) {
    global $MailChimp;
    $a = $MailChimp->post("/campaigns/{$campaign}/actions/send");
    if($MailChimp->success()) {
        echo "<pre>";
            print_r($a);
        echo "</pre>";
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

// get last campaign id
function getLastCampaignId() {
    global $MailChimp;
    $a = $MailChimp->get('campaigns');
    if ($MailChimp->success()) {
        $b = $a['campaigns'][0]['id'];
        echo $a['campaigns'][0]['status'] . '<br>';
        return $b;
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

// subscribe a new user
function subscribeClient($email, $status, $list) {
    global $MailChimp;
    $a = $MailChimp->post("lists/{$list}/members/", [
                            'email_address' => $email,
                            'status' => $status
                         ]);
    if ($MailChimp->success()) {
        echo "Usuário <b>{$email}</b> inserido na lista {$list}.";
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

// create a campaign
function createCampaign($name) {
    global $MailChimp;
    $a = $MailChimp->post("campaigns", ['type' => 'regular',
                            'recipients' => ['list_id' => '7ed246ebf1'],
                            'settings'   => ['subject_line' => $name,
                                'from_name' => 'thierry',
                                'reply_to' => 'ola@thierryrenewebdev.com']
                            ]);
    if ($MailChimp->success()) {
        echo "campanha criada";
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }                     
}

echo "<hr>";