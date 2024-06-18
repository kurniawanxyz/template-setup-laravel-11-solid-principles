<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface DeleteInterface
 *
 * Interface ini digunakan untuk mendefinisikan method delete() yang akan
 * digunakan untuk menghapus data dari sebuah model berdasarkan ID atau kunci.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface DeleteInterface
{
    /**
     * Method delete() digunakan untuk menghapus data dari sebuah model berdasarkan ID atau kunci.
     *
     * @param string|int $id ID atau kunci yang akan digunakan untuk menghapus model.
     * @return mixed Hasil dari method delete(), biasanya true jika berhasil, atau false jika gagal.
     */
    public function delete(string|int $id): mixed;
}
