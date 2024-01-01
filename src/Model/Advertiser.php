<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

class Advertiser
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
    public string $logo;

    /**
     * @var string
     */
    public string $category;

    /**
     * @var string
     */
    public string $url;
}
