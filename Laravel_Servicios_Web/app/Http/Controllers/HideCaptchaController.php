<?php

require_once "vendor/autoload.php";

$siteKey = 'sitekey';
$secretKey = 'secretkey';
// optional
$options = [
    'hideBadge' => false,
    'dataBadge' => 'bottomright',
    'timeout' => 5,
    'debug' => false
];
$captcha = new \AlbertCht\InvisibleReCaptcha\InvisibleReCaptcha($siteKey, $secretKey, $options);

// you can override single option config like this
$captcha->setOption('debug', true);

if (!empty($_POST)) {
    var_dump($captcha->verifyResponse($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']));
    exit();
}

?>