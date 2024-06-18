<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface ShowInterface
 *
 * Interface ini digunakan untuk mendefinisikan method show() yang akan
 * digunakan untuk mendapatkan model berdasarkan ID atau kunci.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface ShowInterface
{
    /**
     * Method show() digunakan untuk mendapatkan model berdasarkan ID atau kunci.
     *
     * @param string|int $id ID atau kunci yang akan digunakan untuk mendapatkan model.
     * @return mixed Model yang sesuai dengan ID atau kunci yang diberikan.
     */
    public function show(string|int $id): mixed;
}

