<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

class Campaign
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $commissionType;

    /**
     * @var \DateTimeInterface
     */
    public \DateTimeInterface $startDate;

    /**
     * @var \DateTimeInterface
     */
    public \DateTimeInterface $endDate;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var int
     */
    public int $advertiser_id;

    /**
     * @var array
     */
    public array $banners;
}
