<?php

// remove extra spaces from variables inside post
$_name = isset($_POST['_name']) ? trim($_POST['_name']) : '';
$_email = isset($_POST['_email']) ? trim($_POST['_email']) : '';

// simple captcha validation
if(count($_POST)>0 && $_POST['_captcha'] == CAPTCHA && $_name && $_email){

    // prepare message content
    $msg = '<b>' . __('Name') . ":</b> " . htmlspecialchars($_POST['_name']) . '<br>';
    $msg .= '<b>' . __('Email') . ":</b> " . htmlspecialchars($_POST['_email']) . '<br>';
    $msg .= '<b>' . __('Subject') . ":</b> " . htmlspecialchars($_POST['_subject']) . '<br>';
    $msg .= '<b>' . __('Message') . ":</b> " . htmlspecialchars($_POST['_message']) . '<br>';
    $msg .= '------------------------------------ <br>';

    // prepare headers
    $subject = __('Contact') . ' - ' . $_POST['_subject'];
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $headers[] = 'Reply-To: ' . $_POST['_name'] . ' <' . $_POST['_email'] . '>';


    // prepare data
    if(LIVE_SITE) {
        $contact_email = 'sibillafilm@gmail.com';
        $contact_email = 'blakmetall@gmail.com';
    }else {
        $contact_email = 'blakmetall@gmail.com';
    }

    // send email
    wp_mail( $contact_email, $subject, $msg, $headers );

    // return json success
    echo json_encode(array('success'=>true));
    exit;
}