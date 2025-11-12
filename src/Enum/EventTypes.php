<?php

namespace Phpc\Enum;

/**
 * Webhook EventTypes Enumeration
 */
enum EventTypes : string
{
    case Create = 'postCreate';
    case Update = 'postUpdate';
    case Delete = 'postRemove';
}