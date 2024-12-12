<?php

namespace App\Repositories;

use App\DTO\CreateDriverUserDTO;
use App\DTO\UpdateDriverUserDTO;
use stdClass;

interface DriverUserRepositoryInterface {

    public function paginate(int $page = 1, int $perPage = 10, string $filter = null): DriverPaginationInterface;
    public function find(string $filter = null): array;
    public function findById(string $id): stdClass|null;
    public function create(CreateDriverUserDTO $dto): stdClass|null;
    public function update(UpdateDriverUserDTO $dto): stdClass|null;
    public function delete(string $id): void;
}
