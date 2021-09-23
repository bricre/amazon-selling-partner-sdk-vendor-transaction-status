<?php

namespace Amz\VendorTransactionStatus\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The transaction status.
 */
class Transaction extends AbstractModel
{
    /**
     * The unique identifier returned in the 'transactionId' field in response to the
     * post request of a specific transaction.
     *
     * @var string
     */
    public $transactionId = null;

    /**
     * Current processing status of the transaction.
     *
     * @var string
     */
    public $status = null;

    /**
     * @var \Amz\VendorTransactionStatus\Model\ErrorList
     */
    public $errors = null;
}
