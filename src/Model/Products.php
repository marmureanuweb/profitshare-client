<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

class Products
{
    /**
     * @var int
     */
    public int $current_page;

    /**
     * @var int
     */
    public int $total_pages;

    /**
     * @var int
     */
    public int $records_per_page;

    /**
     * @var Product[]
     */
    public array $products;
}
