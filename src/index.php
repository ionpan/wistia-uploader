<?php require(__DIR__ . '/getExpiringToken.php'); ?>
<!DOCTYPE html>
<html>
    <head data-locale="en">
        <meta http-equiv="content-type">
        <meta content="text/html">
        <meta charset="UTF-8">
        <script src="//fast.wistia.com/assets/external/api.js" async></script>
        <link rel="stylesheet" href="//fast.wistia.com/assets/external/uploader.css" />
        <title>Wistia Uploader</title>
    </head>
    <body>
        <?php if ($expiringToken) { ?>
            <div id="wistia-uploader" style="height:360px;width:640px;" data-project-id="<?= $projectId ?>" data-access-token="<?= $expiringToken ?>" data-get-expiring-token-url="/wistia-uploader/src/getExpiringTokenAction.php"></div>
        <?php } else { ?>
            Access token not found.
        <?php } ?>
    </body>
    <script src="/wistia-uploader/src/js/uploader.js"></script>
</html>
