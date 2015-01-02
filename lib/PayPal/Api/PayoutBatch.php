<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class PayoutBatch
 *
 * The batch status as generated by PayPal.
 *
 * @package PayPal\Api
 *
 * @property \PayPal\Api\PayoutBatchHeader batch_header
 * @property \PayPal\Api\PayoutItemDetails[] items
 * @property \PayPal\Api\Links[] links
 */
class PayoutBatch extends PayPalModel
{
    /**
     * A batch header that includes the generated batch status.
     *
     * @param \PayPal\Api\PayoutBatchHeader $batch_header
     * 
     * @return $this
     */
    public function setBatchHeader($batch_header)
    {
        $this->batch_header = $batch_header;
        return $this;
    }

    /**
     * A batch header that includes the generated batch status.
     *
     * @return \PayPal\Api\PayoutBatchHeader
     */
    public function getBatchHeader()
    {
        return $this->batch_header;
    }

    /**
     * A batch header that includes the generated batch status.
     *
     * @deprecated Instead use setBatchHeader
     *
     * @param \PayPal\Api\PayoutBatchHeader $batch_header
     * @return $this
     */
    public function setBatch_header($batch_header)
    {
        $this->batch_header = $batch_header;
        return $this;
    }

    /**
     * A batch header that includes the generated batch status.
     * @deprecated Instead use getBatchHeader
     *
     * @return \PayPal\Api\PayoutBatchHeader
     */
    public function getBatch_header()
    {
        return $this->batch_header;
    }

    /**
     * Array of the items in a batch payout.
     *
     * @param \PayPal\Api\PayoutItemDetails[] $items
     * 
     * @return $this
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * Array of the items in a batch payout.
     *
     * @return \PayPal\Api\PayoutItemDetails[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Append Items to the list.
     *
     * @param \PayPal\Api\PayoutItemDetails $payoutItemDetails
     * @return $this
     */
    public function addItem($payoutItemDetails)
    {
        if (!$this->getItems()) {
            return $this->setItems(array($payoutItemDetails));
        } else {
            return $this->setItems(
                array_merge($this->getItems(), array($payoutItemDetails))
            );
        }
    }

    /**
     * Remove Items from the list.
     *
     * @param \PayPal\Api\PayoutItemDetails $payoutItemDetails
     * @return $this
     */
    public function removeItem($payoutItemDetails)
    {
        return $this->setItems(
            array_diff($this->getItems(), array($payoutItemDetails))
        );
    }


    /**
     * Sets Links
     *
     * @param \PayPal\Api\Links[] $links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->links = $links;
        return $this;
    }

    /**
     * Gets Links
     *
     * @return \PayPal\Api\Links[]
     */
    public function getLinks()
    {
        return $this->links;
    }

}