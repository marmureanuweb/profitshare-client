<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

class Campaigns
{
    /**
     * @var Paginator
     */
    public Paginator $paginator;

    /**
     * @var Campaign[]
     */
    public array $campaigns;
}
