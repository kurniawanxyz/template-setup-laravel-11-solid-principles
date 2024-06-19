<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface WithInterface
 *
 * Interface ini digunakan untuk mendefinisikan method with() yang akan
 * digunakan untuk melakukan eager loading pada sebuah model.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface WithInterface
{
    /**
     * Method with() digunakan untuk melakukan eager loading pada sebuah model.
     *
     * @param array|string $relations Array atau string nama relasi yang akan di eager load.
     * @return mixed Query builder instance atau model yang telah di eager load.
     */
    public function with( array|string $relations);
}

