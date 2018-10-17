<?php

namespace ionpan\WistiaUploader;

use GuzzleHttp\Client,
    GuzzleHttp\Exception\TransferException;

class Uploader {

    const EXPIRING_TOKEN_ENDPOINT = 'https://api.wistia.com/v2/expiring_token';

    private $expiringTokenEndpointUrl = '';

    function __construct($projectId, $permanentToken) {
        $this->expiringTokenEndpointUrl = self::EXPIRING_TOKEN_ENDPOINT . '?api_password=' . $permanentToken . '&required_params%5Bproject_id%5D=' . $projectId;
    }

    public function getExpiringToken() {
        $httpClient = new Client();

        try {
            $response = $httpClient->post($this->expiringTokenEndpointUrl);
        } catch (TransferException $e) {
            return null;
        }

        $responseJson = json_decode($response->getBody());
        return $responseJson->data->id;
    }

}
