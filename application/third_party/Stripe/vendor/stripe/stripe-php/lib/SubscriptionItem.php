<?php

namespace Stripe;

/**
 * Subscription items allow you to create customer subscriptions with more than one
 * plan, making it easy to represent complex billing relationships.
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property null|\Stripe\StripeObject $billing_thresholds Define thresholds at which an invoice will be sent, and the related subscription advanced to a new billing period
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property \Stripe\StripeObject $metadata Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property \Stripe\Plan $plan <p>Plans define the base price, currency, and billing cycle for subscriptions. For example, you might have a $5/month plan that provides limited access to your products, and a $15/month plan that allows full access.</p><p>Related guides: <a href="https://stripe.com/docs/billing/subscriptions/set-up-subscription">Set up a subscription</a> and more about <a href="https://stripe.com/docs/billing/subscriptions/products-and-plans">products and plans</a>.</p>
 * @property int $quantity The <a href="https://stripe.com/docs/subscriptions/quantities">quantity</a> of the plan to which the customer should be subscribed.
 * @property string $subscription The <code>subscription</code> this <code>subscription_item</code> belongs to.
 * @property null|\Stripe\TaxRate[] $tax_rates The tax rates which apply to this <code>subscription_item</code>. When set, the <code>default_tax_rates</code> on the subscription do not apply to this <code>subscription_item</code>.
 */
class SubscriptionItem extends ApiResource
{
    const OBJECT_NAME = 'subscription_item';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Delete;
    use ApiOperations\NestedResource;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    const PATH_USAGE_RECORDS = '/usage_records';

    /**
     * @param null|string $id the ID of the subscription item on which to create the usage record
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \Stripe\UsageRecord
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public static function createUsageRecord($id, $params = NULL, $opts = NULL)
    {
        return self::_createNestedResource($id, static::PATH_USAGE_RECORDS, $params, $opts);
    }

    /**
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \Stripe\Collection the list of usage record summaries
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     * @deprecated usageRecordSummaries is deprecated. Please use SubscriptionItem::allUsageRecordSummaries instead.
     *
     */
    public function usageRecordSummaries($params = NULL, $opts = NULL)
    {
        $url = $this->instanceUrl() . '/usage_record_summaries';
        [$response, $opts] = $this->_request('get', $url, $params, $opts);
        $obj = \Stripe\Util\Util::convertToStripeObject($response, $opts);
        $obj->setLastResponse($response);

        return $obj;
    }

    const PATH_USAGE_RECORD_SUMMARIES = '/usage_record_summaries';

    /**
     * @param string $id the ID of the subscription item on which to retrieve the usage record summaries
     * @param null|array $params
     * @param null|array|string $opts
     *
     * @return \Stripe\Collection the list of usage record summaries
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public static function allUsageRecordSummaries($id, $params = NULL, $opts = NULL)
    {
        return self::_allNestedResources($id, static::PATH_USAGE_RECORD_SUMMARIES, $params, $opts);
    }
}
