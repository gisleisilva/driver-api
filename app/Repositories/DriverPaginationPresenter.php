<?php

namespace App\Repositories;

use App\Repositories\DriverPaginationInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use stdClass;

class DriverPaginationPresenter implements DriverPaginationInterface
{
    /**
     * @var stdClass[]
     */
    private array $items;
    public function __construct(protected LengthAwarePaginator $paginator) {
        $this->items = $this->paginator->items();
    }

    public function items(): array
    {
        return $this->items;
    }

    public function total(): int
    {
        return $this->paginator->total() ?? 0;
    }

    public function isFirstPage(): bool
    {
        return $this->paginator->onFirstPage();
    }

    public function isLastPage(): bool
    {
        return $this->paginator->currentPage() === $this->paginator->lastPage();
    }

    public function currentPage(): int
    {
        return $this->paginator->currentPage() ?? 1;
    }

    public function getNumberNextPage(): int
    {
        return $this->paginator->currentPage() + 1;
    }

    public function getNumberPreviousPage(): int
    {
        return $this->paginator->currentPage() - 1;
    }
}
