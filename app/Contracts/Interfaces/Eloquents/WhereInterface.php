<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface WhereInterface
 *
 * Interface ini digunakan untuk mendefinisikan method where() yang akan
 * digunakan untuk membuat query where() pada sebuah model.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface WhereInterface
{
    /**
     * Method where() digunakan untuk membuat query where() pada sebuah model.
     *
     * @param string $column Nama kolom pada tabel model.
     * @param string $operator Operator yang akan digunakan dalam query.
     * @param mixed $value Nilai yang akan dijadikan parameter where().
     * @return mixed Query builder instance atau model yang telah di query.
     */
    public function where(array $condition): mixed;
}

