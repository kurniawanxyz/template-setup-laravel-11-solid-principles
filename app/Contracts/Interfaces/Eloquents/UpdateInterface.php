<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface UpdateInterface
 *
 * Interface ini digunakan untuk mendefinisikan method update() yang akan
 * digunakan untuk mengupdate data dari sebuah model berdasarkan ID atau kunci.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface UpdateInterface
{
    /**
     * Method update() digunakan untuk mengupdate data dari sebuah model berdasarkan ID atau kunci.
     *
     * @param string|int $id   ID atau kunci yang akan digunakan untuk mengupdate model.
     * @param array      $data Data yang akan diupdate.
     *
     * @return mixed Hasil dari method update(), biasanya instance dari model yang diupdate.
     */
    public function update(string|int $id, array $data): mixed;
}
