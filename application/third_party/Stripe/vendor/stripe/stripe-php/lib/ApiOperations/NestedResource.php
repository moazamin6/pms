<?php

namespace Stripe\ApiOperations;

/**
 * Trait for resources that have nested resources.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait NestedResource
{
    /**
     * @param string $method
     * @param string $url
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return \Stripe\StripeObject
     */
    protected static function _nestedResourceOperation($method, $url, $params = NULL, $options = NULL)
    {
        self::_validateParams($params);

        [$response, $opts] = static::_staticRequest($method, $url, $params, $options);
        $obj = \Stripe\Util\Util::convertToStripeObject($response->json, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }

    /**
     * @param string $id
     * @param string $nestedPath
     * @param null|string $nestedId
     *
     * @return string
     */
    protected static function _nestedResourceUrl($id, $nestedPath, $nestedId = NULL)
    {
        $url = static::resourceUrl($id) . $nestedPath;
        if(NULL !== $nestedId)
        {
            $url .= "/{$nestedId}";
        }

        return $url;
    }

    /**
     * @param string $id
     * @param string $nestedPath
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return \Stripe\StripeObject
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    protected static function _createNestedResource($id, $nestedPath, $params = NULL, $options = NULL)
    {
        $url = static::_nestedResourceUrl($id, $nestedPath);

        return self::_nestedResourceOperation('post', $url, $params, $options);
    }

    /**
     * @param string $id
     * @param string $nestedPath
     * @param null|string $nestedId
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return \Stripe\StripeObject
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    protected static function _retrieveNestedResource($id, $nestedPath, $nestedId, $params = NULL, $options = NULL)
    {
        $url = static::_nestedResourceUrl($id, $nestedPath, $nestedId);

        return self::_nestedResourceOperation('get', $url, $params, $options);
    }

    /**
     * @param string $id
     * @param string $nestedPath
     * @param null|string $nestedId
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return \Stripe\StripeObject
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    protected static function _updateNestedResource($id, $nestedPath, $nestedId, $params = NULL, $options = NULL)
    {
        $url = static::_nestedResourceUrl($id, $nestedPath, $nestedId);

        return self::_nestedResourceOperation('post', $url, $params, $options);
    }

    /**
     * @param string $id
     * @param string $nestedPath
     * @param null|string $nestedId
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return \Stripe\StripeObject
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    protected static function _deleteNestedResource($id, $nestedPath, $nestedId, $params = NULL, $options = NULL)
    {
        $url = static::_nestedResourceUrl($id, $nestedPath, $nestedId);

        return self::_nestedResourceOperation('delete', $url, $params, $options);
    }

    /**
     * @param string $id
     * @param string $nestedPath
     * @param null|array $params
     * @param null|array|string $options
     *
     * @return \Stripe\StripeObject
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    protected static function _allNestedResources($id, $nestedPath, $params = NULL, $options = NULL)
    {
        $url = static::_nestedResourceUrl($id, $nestedPath);

        return self::_nestedResourceOperation('get', $url, $params, $options);
    }
}
