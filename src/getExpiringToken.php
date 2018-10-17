<?php

use ionpan\WistiaUploader\Uploader as Uploader;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
$secrets = require(__DIR__ . '/secrets.php');

$projectId = $secrets['projectId'];
$uploader = new Uploader($projectId, $secrets['wistiaToken']);

$expiringToken = $uploader->getExpiringToken();
