<?php

namespace Phpc\Utils\Security;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Phpc\Core\Structure\WebhookPayload;
use Phpc\Enum\Apps;
use Phpc\Enum\EventTypes;

final class WebhookSignatureHelper
{
    /**
     * @param string $jwt The JWT token.
     * @param string $publicKey The Public Key (PEM format).
     * @return WebhookPayload|false The decoded structured payload or false if signature is invalid.
     */
    public static function verify(string $jwt, string $publicKey): WebhookPayload|false
    {
        // Decode Webhook JWT using given public key
        $decoded = JWT::decode($jwt, new Key($publicKey, 'RS256'));

        // Cast decoded claims to array
        $claims = (array) $decoded;

        // Validate `iss` claim
        if (!Apps::tryFrom($claims['iss'])) {
            return false;
        }

        // Validate `eventType` claim
        if (!EventTypes::tryFrom($claims['eventType'])) {
            return false;
        }

        return WebhookPayload::fromArray($claims);
    }
}