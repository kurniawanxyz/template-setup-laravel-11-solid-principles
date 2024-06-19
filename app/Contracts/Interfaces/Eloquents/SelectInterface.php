<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface SelectInterface
 *
 * Interface ini digunakan untuk mendefinisikan method select() yang akan
 * digunakan untuk membuat query select() pada sebuah model.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface SelectInterface
{
    /**
     * Method select() digunakan untuk membuat query select() pada sebuah model.
     *
     * @param array $columns Array kolom yang akan diambil dari tabel model.
     * @return mixed Query builder instance atau model yang telah di query.
     */
    public function select(array $columns = ["*"]);
}

