<?php
declare(strict_types=1);

namespace ProfitshareClient\Model;

class Paginator
{
    /**
     * @var int
     */
    public int $itemsPerPage;

    /**
     * @var int
     */
    public int $currentPage;

    /**
     * @var int
     */
    public int $totalPages;

    public function hasNextPage(): bool
    {
        return $this->currentPage < $this->totalPages;
    }

    public function getNextPage(): int
    {
        return ++$this->currentPage;
    }
}
