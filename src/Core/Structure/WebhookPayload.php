<?php

namespace Phpc\Core\Structure;

/**
 * Webhook payload structure.
 */
final class WebhookPayload
{
    public function __construct(
        private readonly string $app,
        private readonly string $aud,
        private readonly string $class,
        private readonly string $shortname,
        private readonly string $eventType,
        private readonly int $resourceId,
        private readonly string $resourceIri,
        private readonly int $eventSubscriberId,
        private readonly string $eventSubscriberIri,
        private readonly int $timestamp,
        private readonly string $jti,
        private readonly ?string $tenant = null,
    ) {}

    public static function fromArray(array $payload): self
    {
        return new self(
            app: $payload['iss'],
            aud: $payload['aud'],
            class: $payload['sub'],
            shortname: $payload['shortname'],
            eventType: $payload['eventType'],
            resourceId: $payload['resourceId'],
            resourceIri: $payload['resourceIri'],
            eventSubscriberId: $payload['eventSubscriberId'],
            eventSubscriberIri: $payload['eventSubscriberIri'],
            timestamp: $payload['iat'],
            jti: $payload['jti'],
            tenant: $payload['tenant'] ?? null,
        );
    }

    /**
     * The application (issuer) name.
     *
     * Validated to be part of the Apps Enumeration.
     *
     * @return string
     */
    public function getApp(): string
    {
        return $this->app;
    }

    /**
     * Audience claim.
     *
     * @return string
     */
    public function getAud(): string
    {
        return $this->aud;
    }

    /**
     * Resource class (sub).
     *
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * API resource shortname.
     *
     * @return string
     */
    public function getShortname(): string
    {
        return $this->shortname;
    }

    /**
     * Event type.
     *
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * Resource ID.
     *
     * @return string
     */
    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    /**
     * Resource API IRI.
     *
     * @return string
     */
    public function getResourceIri(): string
    {
        return $this->resourceIri;
    }

    /**
     * Event subscriber ID.
     *
     * @return string
     */
    public function getEventSubscriberId(): string
    {
        return $this->eventSubscriberId;
    }

    /**
     * Event subscriber API IRI.
     *
     * @return string
     */
    public function getEventSubscriberIri(): string
    {
        return $this->eventSubscriberIri;
    }

    /**
     * Webhook issued at timestamp.
     *
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * Webhook JWT ID. Can be used to prevent replays.
     *
     * @return string
     */
    public function getJti(): string
    {
        return $this->jti;
    }

    /**
     * Application tenant.
     *
     * @return string|null
     */
    public function getTenant(): ?string
    {
        return $this->tenant;
    }
}