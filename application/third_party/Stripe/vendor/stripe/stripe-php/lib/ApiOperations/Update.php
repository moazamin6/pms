<?php

namespace Stripe\ApiOperations;

/**
 * Trait for updatable resources. Adds an `update()` static method and a
 * `save()` method to the class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Update
{
    /**
     * @param string $id the ID of the resource to update
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return static the updated resource
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public static function update($id, $params = NULL, $opts = NULL)
    {
        self::_validateParams($params);
        $url = static::resourceUrl($id);

        [$response, $opts] = static::_staticRequest('post', $url, $params, $opts);
        $obj = \Stripe\Util\Util::convertToStripeObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }

    /**
     * @param null|array|string $opts
     *
     * @return static the saved resource
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function save($opts = NULL)
    {
        $params = $this->serializeParameters();
        if(\count($params) > 0)
        {
            $url = $this->instanceUrl();
            [$response, $opts] = $this->_request('post', $url, $params, $opts);
            $this->refreshFrom($response, $opts);
        }

        return $this;
    }
}
