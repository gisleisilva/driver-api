<?php

namespace App\Services;

use App\DTO\CreateDriverUserDTO;
use App\DTO\UpdateDriverUserDTO;
use App\Repositories\DriverUserRepositoryInterface;
use App\Repositories\DriverPaginationPresenter;
use stdClass;

class DriverUserService {

    public function __construct(protected DriverUserRepositoryInterface $repository){}

    /**
     * @param string|null $filter
     * @return array|null
     */
    public function find(string $filter = null): array|null
    {
        return $this->repository->find($filter);
    }

    /**
     * @param int $page
     * @param int $perPage
     * @param string|null $filter
     * @return DriverPaginationPresenter
     */
    public function paginate(int $page = 1, int $perPage = 10, string $filter = null): DriverPaginationPresenter
    {
      return $this->repository->paginate($page, $perPage, $filter);
    }

    /**
     * @param string $id
     * @return stdClass|null
     */
    public function findById(string $id): stdClass|null
    {
        return $this->repository->findById($id);
    }

    /**
     * @param CreateDriverUserDTO $dto
     * @return stdClass|null
     */
    public function create(CreateDriverUserDTO $dto): stdClass|null
    {
        return $this->repository->create($dto);
    }

    /**
     * @param UpdateDriverUserDTO $dto
     * @return stdClass|null
     */
    public function update(UpdateDriverUserDTO $dto): stdClass|null
    {
        return $this->repository->update($dto);
    }

    /**
     * @param string $id
     * @return void
     */
    public function delete(string $id): void
    {
        $this->repository->delete($id);
    }

}
