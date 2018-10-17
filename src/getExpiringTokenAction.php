<?php

header('Content-Type: application/json');
require(__DIR__ . '/getExpiringToken.php');

echo json_encode($expiringToken);
