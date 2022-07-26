<?php

namespace App\Repositories;
use App\Interfaces\CarRepositoryInterface;
use App\Models\Car;

class CarRepository implements CarRepositoryInterface
{
    public function getAll()
    {
        return Car::all();
    }

    public function getById($id)
    {
        return Car::find($id);
    }

    public function create(array $data)
    {
        return Car::create($data);
    }

    public function update(array $data, $id)
    {
        $Car = Car::find($id);

        $Car->color = $data['color'];
        $Car->brand = $data['brand'];

        $Car->save();

        return $Car;
    }

    public function delete($id)
    {
        $Car = Car::find($id);
        $Car->delete();
        return $Car;
    }
}
