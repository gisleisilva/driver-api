<?php

namespace App\Repositories;

use App\DTO\CreateDriverUserDTO;
use App\DTO\UpdateDriverUserDTO;
use App\Models\DriverUser;
use stdClass;

class DriverUserRepository implements DriverUserRepositoryInterface {

    public function __construct(protected DriverUser $driverUser) {}

    /**
     * @param string|null $filter
     * @return array
     */
    public function find(string $filter = null): array
    {
        return $this->driverUser->query()->where(function ($query) use ($filter) {
            if($filter){
                $query->where('email', 'LIKE', "%{$filter}%");
            }
        })
            ->get()
            ->toArray();
    }

    /**
     * @param int $page
     * @param int $perPage
     * @param string|null $filter
     * @return DriverPaginationInterface
     */
    public function paginate(int $page = 1, int $perPage = 10, string $filter = null): DriverPaginationInterface
    {
        $result = $this->driverUser->query()->where(function ($query) use ($filter) {
            if($filter){
                $query->where('email', 'LIKE', "%{$filter}%");
            }
        })
            ->paginate($perPage, ['*'], 'page', $page);
        return new DriverPaginationPresenter($result);
    }

    /**
     * @param string $id
     * @return stdClass|null
     */
    public function findById(string $id): stdClass|null
    {
        $result = $this->driverUser->query()->find($id);
        return $result ? (object) $result->toArray() : null;
    }

    /**
     * @param CreateDriverUserDTO $dto
     * @return stdClass|null
     */
    public function create(CreateDriverUserDTO $dto): stdClass|null
    {
        return (object) $this->driverUser->query()->create((array)$dto)->toArray();
    }

    /**
     * @param UpdateDriverUserDTO $dto
     * @return stdClass|null
     */
    public function update(UpdateDriverUserDTO $dto): stdClass|null
    {
        if(!$driver = $this->driverUser->query()->find($dto->id)){
            return null;
        }

        $driver->update((array)$dto);

        return (object) $driver->toArray();
    }

    /**
     * @param string $id
     * @return void
     */
    public function delete(string $id): void
    {
        $this->driverUser->query()->findOrFail($id)->delete();
    }
}
