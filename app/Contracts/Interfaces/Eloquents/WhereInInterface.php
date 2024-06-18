<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface WhereInInterface
 *
 * Interface ini digunakan untuk mendefinisikan method whereIn() yang akan
 * digunakan untuk membuat query whereIn() pada sebuah model.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface WhereInInterface
{
    /**
     * Method whereIn() digunakan untuk membuat query whereIn() pada sebuah model.
     *
     * @param string $column Nama kolom pada tabel model.
     * @param array $values Nilai yang akan dijadikan parameter whereIn().
     * @return mixed Query builder instance atau model yang telah di query.
     */
    public function whereIn(string $column, array $values): mixed;
}

