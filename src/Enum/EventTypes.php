<?php

namespace PhpCreation\Enum;

/**
 * Webhook EventTypes Enumeration
 */
enum EventTypes : string
{
    case Create = 'postPersist';
    case Update = 'postUpdate';
    case Delete = 'postRemove';
}
