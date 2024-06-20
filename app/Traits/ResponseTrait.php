<?php
namespace App\Traits;

trait ResponseTrait
{
    /**
     * Membuat response sukses dalam bentuk JSON.
     *
     * @param string $message pesan yang ingin dikirimkan.
     * @param mixed|null $data datanya, jika ada.
     * @return \Illuminate\Http\JsonResponse response JSON.
     */
    public function successResponse(string $message ,mixed $data = null): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * Membuat response error dalam bentuk JSON.
     *
     * @param string $message pesan yang ingin dikirimkan.
     * @param int $error_code kode error yang ingin dikirimkan.
     * @param mixed|null $data datanya, jika ada.
     * @return \Illuminate\Http\JsonResponse response JSON.
     */
    public function errorResponse(string $message ,int $error_code,mixed $data = null): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'error_code' => $error_code,
            'data' => $data
        ]);
    }
}
