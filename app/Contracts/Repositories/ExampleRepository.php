<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ExampleInterface;
use App\Models\Example;
use App\Traits\EloquentTrait;

class ExampleRepository extends BaseRepository implements ExampleInterface
{

    use EloquentTrait;
    public function __construct(Example $model) {
        $this->model = $model;
    }


}
