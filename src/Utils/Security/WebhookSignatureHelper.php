<?php

namespace Phpc\Utils\Security;

use Firebase\JWT\BeforeValidException;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;
use Phpc\Core\Structure\WebhookPayload;
use Phpc\Enum\Apps;
use Phpc\Enum\EventTypes;

final class WebhookSignatureHelper
{

    /**
     * Verify a webhook JWT signature and return a structured WebhookPayload object on success,
     * or false if the JWT signature is invalid or the token is malformed.
     *
     * **Important:** This method validates only the signature and standard JWT integrity.
     * Validation of private claims such as `aud`, `tenant`, `jti`, or any application-specific claims
     * is the responsibility of the integrator.
     *
     * @param string $jwt The JWT token to verify.
     * @param string $publicKey The public key in PEM format used for signature verification.
     * @param bool   $throwOnInvalid If the verification should throw an exception on invalid JWT. (Default: false).
     * @return WebhookPayload|false Returns a WebhookPayload instance on successful verification,
     *                             or false if verification fails.
     * @throws \InvalidArgumentException    Provided key/key-array was empty or malformed
     * @throws \DomainException             Provided JWT is malformed
     * @throws \UnexpectedValueException    Provided JWT was invalid
     * @throws SignatureInvalidException    Provided JWT was invalid because the signature verification failed
     * @throws BeforeValidException         Provided JWT is trying to be used before it's eligible as defined by 'nbf'
     * @throws BeforeValidException         Provided JWT is trying to be used before it's been created as defined by 'iat'
     * @throws ExpiredException             Provided JWT has since expired, as defined by the 'exp' claim
     * @throws \Throwable
     */
    public static function verify(
        #[\SensitiveParameter] string $jwt,
        string $publicKey,
        bool $throwOnInvalid = false
    ): WebhookPayload|false
    {
        try {
            // Decode Webhook JWT using given public key
            $decoded = JWT::decode($jwt, new Key($publicKey, 'RS256'));

            // Cast decoded claims to array
            $claims = (array) $decoded;
        } catch (\Throwable $e) {
            if ($throwOnInvalid) {
                throw $e;
            }

            return false;
        }

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