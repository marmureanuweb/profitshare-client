<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

class Product
{
    /**
     * @var int
     */
    public int $advertiser_id;

    /**
     * @var string
     */
    public string $advertiser_name;

    /**
     * @var string
     */
    public string $category_name;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $link;

    /**
     * @var string
     */
    public string $image;

    /**
     * @var float
     */
    public float $price;

    /**
     * @var float
     */
    public float $price_vat;

    /**
     * @var float
     */
    public float $price_discounted;

    /**
     * @var string
     */
    public string $affiliate_link;
}
