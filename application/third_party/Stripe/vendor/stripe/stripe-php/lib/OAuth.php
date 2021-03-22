<?php

namespace Stripe;

abstract class OAuth
{
    /**
     * Generates a URL to Stripe's OAuth form.
     *
     * @param null|array $params
     * @param null|array $opts
     *
     * @return string the URL to Stripe's OAuth form
     */
    public static function authorizeUrl($params = NULL, $opts = NULL)
    {
        $params = $params ?: [];

        $base = ($opts && \array_key_exists('connect_base', $opts)) ? $opts['connect_base'] : Stripe::$connectBase;

        $params['client_id'] = self::_getClientId($params);
        if(!\array_key_exists('response_type', $params))
        {
            $params['response_type'] = 'code';
        }
        $query = Util\Util::encodeParameters($params);

        return $base . '/oauth/authorize?' . $query;
    }

    /**
     * Use an authoriztion code to connect an account to your platform and
     * fetch the user's credentials.
     *
     * @param null|array $params
     * @param null|array $opts
     *
     * @return StripeObject object containing the response from the API
     * @throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
     *
     */
    public static function token($params = NULL, $opts = NULL)
    {
        $base = ($opts && \array_key_exists('connect_base', $opts)) ? $opts['connect_base'] : Stripe::$connectBase;
        $requestor = new ApiRequestor(NULL, $base);
        [$response, $apiKey] = $requestor->request(
            'post',
            '/oauth/token',
            $params,
            NULL
        );

        return Util\Util::convertToStripeObject($response->json, $opts);
    }

    /**
     * Disconnects an account from your platform.
     *
     * @param null|array $params
     * @param null|array $opts
     *
     * @return StripeObject object containing the response from the API
     * @throws \Stripe\Exception\OAuth\OAuthErrorException if the request fails
     *
     */
    public static function deauthorize($params = NULL, $opts = NULL)
    {
        $params = $params ?: [];
        $base = ($opts && \array_key_exists('connect_base', $opts)) ? $opts['connect_base'] : Stripe::$connectBase;
        $requestor = new ApiRequestor(NULL, $base);
        $params['client_id'] = self::_getClientId($params);
        [$response, $apiKey] = $requestor->request(
            'post',
            '/oauth/deauthorize',
            $params,
            NULL
        );

        return Util\Util::convertToStripeObject($response->json, $opts);
    }

    private static function _getClientId($params = NULL)
    {
        $clientId = ($params && \array_key_exists('client_id', $params)) ? $params['client_id'] : NULL;
        if(NULL === $clientId)
        {
            $clientId = Stripe::getClientId();
        }
        if(NULL === $clientId)
        {
            $msg = 'No client_id provided.  (HINT: set your client_id using '
                . '"Stripe::setClientId(<CLIENT-ID>)".  You can find your client_ids '
                . 'in your Stripe dashboard at '
                . 'https://dashboard.stripe.com/account/applications/settings, '
                . 'after registering your account as a platform. See '
                . 'https://stripe.com/docs/connect/standard-accounts for details, '
                . 'or email support@stripe.com if you have any questions.';

            throw new Exception\AuthenticationException($msg);
        }

        return $clientId;
    }
}
