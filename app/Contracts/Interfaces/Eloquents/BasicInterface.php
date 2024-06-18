<?php
namespace App\Contracts\Interfaces\Eloquents;

/**
 * Interface BasicInterface
 *
 * Interface ini merupakan implementasi dari GetInterface, ShowInterface, StoreInterface,
 * UpdateInterface, dan DeleteInterface. Interface ini digunakan untuk mendefinisikan
 * method yang umum digunakan pada sebuah model Eloquent dengan menambahkan sebuah
 * abstraksi yang lebih baik.
 *
 * @package App\Contracts\Interfaces\Eloquents
 */
interface BasicInterface extends GetInterface, ShowInterface, StoreInterface, UpdateInterface, DeleteInterface
{

}

