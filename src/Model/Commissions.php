<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

class Commissions
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
     * @var Commission[]
     */
    public array $commissions;
}
