<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface PluckInterface
 *
 * Interface ini digunakan untuk mendefinisikan method pluck() yang akan
 * digunakan untuk mengambil kolom pada sebuah model.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface PluckInterface
{
   /**
    * Method pluck() digunakan untuk mengambil kolom pada sebuah model.
    *
    * @return mixed Data yang diambil dari sebuah kolom pada model.
    */
   public function pluck(): mixed;
}
