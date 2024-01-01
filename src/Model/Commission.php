<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

use DateTime;

class Commission
{
    /**
     * @var int
     */
    public int $order_id;

    /**
     * @var string
     */
    public string $order_ref;

    /**
     * @var string
     */
    public string $order_status;

    /**
     * @var int
     */
    public int $advertiser_id;

    /**
     * @var string
     */
    public string $hash;

    /**
     * @var \DateTimeInterface
     */
    public \DateTimeInterface $order_date;

    /**
     * @var \DateTimeInterface
     */
    public \DateTimeInterface $order_updated;

    /**
     * @var string
     */
    public string $items_status;

    /**
     * @var string
     */
    public string $items_commision;

    /**
     * @var string
     */
    public string $items_commision_value;
}
