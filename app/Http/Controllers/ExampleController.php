<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ExampleInterface;
use Exception;
use Illuminate\Http\Request;


/**
 * ExampleController class.
 *
 * Controller ini digunakan untuk melakukan CRUD (Create, Read, Update, Delete)
 * pada model Example.
 */
class ExampleController extends Controller
{
    /**
     * Constructor.
     *
     * @param  App\Contracts\Interfaces\ExampleInterface  $example
     * @return void
     */
    public function __construct(
        private ExampleInterface $example
    ) {
    }

    /**
     * Fungsi untuk mendapatkan semua data dari model Example.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = $this->example->get();
        return $this->successResponse('Success get data', $data);
    }

    /**
     * Fungsi untuk menyimpan data baru ke dalam model Example.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try{
            $data = $this->example->store($request->name);
            return $this->successResponse('Success store data', $data);
        }catch(Exception $ex)
        {
            return $this->errorResponse( $ex->getMessage(), 500);
        }
    }

    /**
     * Fungsi untuk mengupdate data pada model Example berdasarkan ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try{
            $data = $this->example->update($id,$request->name);
            return $this->successResponse('Success update data', $data);
        }catch(Exception $ex)
        {
            return $this->errorResponse( $ex->getMessage(), 500);
        }
    }

    /**
     * Fungsi untuk menghapus data pada model Example berdasarkan ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try{
            $data = $this->example->delete($id);
            return $this->successResponse('Success delete data', $data);
        }catch(Exception $ex)
        {
            return $this->errorResponse( $ex->getMessage(), 500);
        }
    }
}
