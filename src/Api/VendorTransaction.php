<?php

namespace Amz\VendorTransactionStatus\Api;

use Amz\VendorTransactionStatus\Model\GetTransactionResponse as GetTransactionResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorTransaction extends AbstractAPI
{
    /**
     * Returns the status of the transaction that you specify.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $transactionId The GUID provided by Amazon in the 'transactionId' field
     * in response to the post request of a specific transaction
     *
     * @return GetTransactionResponse
     */
    public function getTransaction($transactionId): GetTransactionResponse
    {
        return $this->client->request('getTransaction', 'GET', "vendor/transactions/v1/transactions/{$transactionId}",
            [
            ]
        );
    }
}
