<?php

namespace Stripe\Exception\OAuth;

/**
 * Implements properties and methods common to all (non-SPL) Stripe OAuth
 * exceptions.
 */
abstract class OAuthErrorException extends \Stripe\Exception\ApiErrorException
{
    protected function constructErrorObject()
    {
        if(NULL === $this->jsonBody)
        {
            return NULL;
        }

        return \Stripe\OAuthErrorObject::constructFrom($this->jsonBody);
    }
}
