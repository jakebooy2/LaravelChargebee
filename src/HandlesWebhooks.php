<?php
namespace Jakebooy2\LaravelChargebee;


use Carbon\Carbon;

/**
 * This trait handles webhooks coming from Chargebee
 *
 * Class HandlesWebhooks
 * @package Jakebooy2\LaravelChargebee
 */
trait HandlesWebhooks
{
    /**
     * Cancel a subscription instantly.
     *
     * Compatible with the following webhooks:
     * subscription_cancelled
     *
     * @return $this
     */
    public function updateCancellationDate($date = null)
    {
        $this->ends_at = ($date) ?: Carbon::now();
        $this->save();

        return $this;
    }
}