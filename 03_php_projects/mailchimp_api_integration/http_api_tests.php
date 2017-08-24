<?php

header('Content-Type: text/html; charset=utf-8');

require_once '../testando_composer/vendor/autoload.php';
require_once 'mailchimp.php';

use \DrewM\MailChimp\MailChimp;

$MailChimp = new MailChimp('98e487719c927f0ada5ecaecc77530a5-us15');

// default values for functions
$cid = getLastCampaignId();
$defaultList = getDefaultList();
$testEmails = [ 'contato@thierryrenewebdev.com',
                'td_matos@terra.com.br',
                'thierry.matos@steathelook.com.br' ];
              
// putNewsContent($content, $cid);
// sendCampaign($cid);
// listCampaigns();
// createCampaign('HEADER TAG');
// debugDefaultMembersList();
// debugLists();
// debugCampaigns();
// listCampaigns();
// listCampaignsName();
// sendTestCampaign($cid);

// gambiarra for use less global variables 
function myMail() {
    global $MailChimp;  
    return $MailChimp;
}

function showAlert($msg) {
    echo "<script>
            alert('{$msg}');
          </script>";
}

function putNewsContent($content, $cid) {
    global $MailChimp;
    $a = $MailChimp->put("campaigns/{$cid}/content", ['html' => $content]);
    if ($MailChimp->success()) {
        showAlert("content inserted into campaign {$cid}");
        header('location:index.php');
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

// function listMembers() {
//     global $MailChimp;
//     $a = $MailChimp->get()
// }

// list Lists
function listLists() {
    global $MailChimp;
    $a = $MailChimp->get('lists');
    if ($MailChimp->success()) {
        echo "<ul>";
            foreach($a as $b) {
                print_r($b);
            }
        echo "</ul>";
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
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
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
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

// return default list
function getDefaultList() {
    global $MailChimp;
    $a = $MailChimp->get('lists');
    if($MailChimp->success()) {
        $listID = $a['lists'][0]['id'];
        return $listID;
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

// function getDefaultListName($listID) {
//     global $MailChimp;
//     $a = $MailChimp->get("lists/{$listID}");
//     if($MailChimp->success()) {
//         $listID = $a['lists'][0]['name'];
//         return $listID;
//     }
// }

// debug members of default list
function debugDefaultMembersList() {
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

// return members of default list
function listDefaultMembersList($list) {
    global $MailChimp;
    $a = $MailChimp->get("lists/{$list}/members");
    if($MailChimp->success()) {
        foreach($a['members'] as $b) {
            echo "<tr>";
                echo "<td>{$b['id']}</td>";
                echo "<td>{$b['merge_fields']['FNAME']}</td>";
                echo "<td>{$b['merge_fields']['LNAME']}</td>";
                echo "<td>{$b['email_address']}</td>";
                if ($b['status'] == 'subscribed') {
                    echo "<td><span class='badge badge-success'>{$b['status']}</span></td>";
                } else {
                    echo "<td><span class='badge badge-danger'>{$b['status']}</span></td>";
                }
                if($b['status'] == 'subscribed') {
                    echo '<td>
                            <div class="btn-group btn-group-sm">
                              <button type="button" class="btn btn-default"><a href="" target="_blank">update</a></button>
                              <button type="button" class="btn btn-danger">delete</button>
                            </div>
                          </td>
                         ';
                } else {
                    echo '<td>
                            <div class="btn-group btn-group-sm">
                              <button type="button" class="btn btn-success"><a href="" class="button">renew</a></button>
                              <button type="button" class="btn btn-danger">delete</button>
                            </div>
                          </td>';
                }
            echo "</tr>";
        }
    } else {
        echo 'erro: ' . $MailChimp->getLastError();
    }
}

function listCampaignsName() {
    global $MailChimp;
    $a = $MailChimp->get('campaigns');
    if ($MailChimp->success()) {
        foreach($a['campaigns'] as $b) {
            echo "<option value='{$b['id']}'>{$b['settings']['subject_line']}</option>";
        }
    }
}

// list all campaigns
function listCampaigns() {
    global $MailChimp;
    $a = $MailChimp->get('campaigns/?count=50');
    if ($MailChimp->success()) {        // r($a);
        
        $now = new DateTime();
        
        foreach($a['campaigns'] as $b) {
            
        $sendDate = $now->createFromFormat('D-m-Y', $b['send_time']);
        $createDate = $now->createFromFormat('D-m-Y', $b['create_time']);
        
        echo "<tr>";
        
            echo "<td><a href='{$b['long_archive_url']}' target='_blank'>{$b['id']}</a></td>";
            
            if($b['status'] == 'sent') {
                echo "<td><span class='badge badge-success'>{$b['status']}</span></td>";
            } else {
                echo "<td><span class='badge badge-warning'>{$b['status']}</span></td>";
            }
            
            echo "<td>{$b['settings']['subject_line']}</td>";
            echo "<td>{$b['recipients']['list_id']}</td>";
            echo "<td><span class=''>{$sendDate}</span></td>";
            echo "<td><span class=''>{$createDate}</span></td>";
            
            if($b['status'] == 'sent') {
                echo "<td>
                        <div class='btn-group btn-group-sm'>
                          <button type='button' class='btn btn-default'><a href='{$b['long_archive_url']}' target='_blank' style='color:#424242;'>preview</a></button>
                          <button type='button' class='btn btn-danger'>cancel</button>
                        </div>
                      </td>
                     ";
            } else {
                echo "<td>
                        <div class='btn-group btn-group-sm'>
                          <button type='button' class='btn btn-success'><a href='send_campaign.php?cid={$b['id']}' class='button' style='color:white;'>send!</a></button>
                          <button type='button' class='btn btn-success'><a href='send_test_email.php?cid={$b['id']}' class='button' style='color:white;'>send test</a></button>
                          <button type='button' class='btn btn-default'><a href='{$b['long_archive_url']}' target='_blank' style='color:#424242;'>preview</a></button>
                          <button type='button' class='btn btn-danger'>delete</button>
                        </div>
                      </td>";
            }
            
        echo "</tr>";
        
        } 
    }
    unset($now);
}

// send email
function sendCampaign($campaign) {
    global $MailChimp;
    $a = $MailChimp->post("/campaigns/{$campaign}/actions/send");
    if($MailChimp->success()) {
        showAlert("campanha enviada!");
        header('location: index.php');
    } else {
        showAlert("ERRO! {$MailChimp->getLastError()}");
        r($a);
    }
}

function sendTestCampaign($campaign) {
    global $MailChimp;
    global $testEmails;
    $a = $MailChimp->post("/campaigns/{$campaign}/actions/test", [
                            'test_emails' => $testEmails,
                            'send_type' => 'html'
                         ]);
    if ($MailChimp->success()) {
        showAlert('Email de teste enviado com sucesso!');
        header('location:index.php');
    } else {
        r($a);
        showAlert("ERRO! ERRO! ERRO!");
        echo '<b>ERRO:</b> ' . $MailChimp->getLastError();
    }
}

function cancelSendCampaign () {
    
}

// get last campaign id
function getLastCampaignId() {
    global $MailChimp;
    $a = $MailChimp->get('campaigns');
    if ($MailChimp->success()) {
        $b = $a['campaigns'][0]['id'];
        return $b;
    } else {
        r($a);
        showAlert("ERRO! ERRO! ERRO!");
        echo '<b>ERRO:</b> ' . $MailChimp->getLastError();
    }
}

// subscribe a new user
function subscribeClient($email, $status, $list, $first, $last) {
    global $MailChimp;
    $a = $MailChimp->post("lists/{$list}/members/", [
                            'email_address' => $email,
                            'status' => $status,
                            'merge_fields' => [
                                'FNAME' => $first,
                                'LNAME' => $last
                            ]
                         ]);
    if ($MailChimp->success()) {
         showAlert("Usuário <b>{$email}</b> inserido na lista {$list}.</alert>");
        header('location:index.php');
    } else {
        showAlert("ERRO: {$MailChimp->getLastError()}");
        die();
    }
}

// create a campaign
function createCampaign($name, $type, $list, $fromName, $replyTo, $label) {
    global $MailChimp;
    $campaignName = $label . ' ' . $name;
    $a = $MailChimp->post("campaigns", ['type' => $type,
                            'recipients' => ['list_id' => $list],
                            'settings'   => ['subject_line' => $campaignName,
                                'from_name' => $fromName,
                                'reply_to' => $replyTo]
                            ]);
    if ($MailChimp->success()) {
        echo "<alert>campanha criada</alert>";
        header('location:index.php');
    } else {
        r($a);
        showAlert("ERRO! ERRO! ERRO!");
        echo '<b>ERRO:</b> ' . $MailChimp->getLastError();
    }                     
}

echo "<p class='text-center'>degub area</p>";

echo "<hr>";