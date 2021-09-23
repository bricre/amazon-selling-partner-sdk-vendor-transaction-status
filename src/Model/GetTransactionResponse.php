<?php

namespace Amz\VendorTransactionStatus\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getTransaction operation.
 */
class GetTransactionResponse extends AbstractModel
{
    /**
     * The response payload for the getTransaction operation.
     *
     * @var \Amz\VendorTransactionStatus\Model\TransactionStatus
     */
    public $payload = null;

    /**
     * @var \Amz\VendorTransactionStatus\Model\ErrorList
     */
    public $errors = null;
}
