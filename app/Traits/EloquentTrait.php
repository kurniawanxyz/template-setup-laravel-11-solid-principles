<?php
namespace App\Traits;

trait EloquentTrait
{
     /**
     * Method get() digunakan untuk mengambil data dari sebuah model.
     *
     * @param int|string|null $id ID dari model.
     * @return \Illuminate\Database\Eloquent\Model|Collection|\Illuminate\Support\Collection
     */
    public function get()
    {
        return $this->model->query()->get();
    }

    /**
     * Method show() digunakan untuk mendapatkan model berdasarkan ID atau kunci.
     *
     * @param int|string $id ID atau kunci yang akan digunakan untuk mendapatkan model.
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function show(int|string $id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Method store() digunakan untuk menyimpan data ke dalam sebuah model.
     *
     * @param array $data Data yang akan disimpan.
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Method update() digunakan untuk mengupdate data dari sebuah model berdasarkan ID atau kunci.
     *
     * @param int|string $id   ID atau kunci yang akan digunakan untuk mengupdate model.
     * @param array      $data Data yang akan diupdate.
     * @return \Illuminate\Database\Eloquent\Model|bool
     */
    public function update(int|string $id, array $data)
    {
        $model = $this->model->findOrFail($id);
        return $model->update($data);
    }

    /**
     * Method delete() digunakan untuk menghapus data dari sebuah model berdasarkan ID atau kunci.
     *
     * @param int|string $id ID atau kunci yang akan digunakan untuk menghapus model.
     * @return bool
     */
    public function delete(int|string $id)
    {
        $model = $this->model->findOrFail($id);
        return $model->delete();
    }

    /**
     * Method pluck() digunakan untuk mengambil kolom pada sebuah model.
     *
     * @return mixed Data yang diambil dari sebuah kolom pada model.
     */
    public function pluck( array $columns)
    {
        return $this->model->pluck($columns);
    }

    /**
     * Method with() digunakan untuk melakukan eager loading pada sebuah model.
     *
     * @param array|string $relations Array atau string nama relasi yang akan di eager load.
     * @return mixed Query builder instance atau model yang telah di eager load.
     */
    public function with(array|string $relations)
    {
        return $this->model->with($relations);
    }

    /**
     * Method select() digunakan untuk membuat query select() pada sebuah model.
     *
     * @param array $columns Array kolom yang akan diambil dari tabel model.
     * @return mixed Query builder instance atau model yang telah di query.
     */
    public function select(array $columns = ["*"])
    {
        return $this->model->select($columns);
    }

    /**
     * Method where() digunakan untuk membuat query where() pada sebuah model.
     *
     * @param string $column Nama kolom yang akan di where.
     * @param mixed  $value  Nilai yang akan di where.
     * @return mixed Query builder instance atau model yang telah di query.
     */
    public function where(array $column)
    {
        return $this->model->where($column);
    }

    /**
     * Method whereIn() digunakan untuk membuat query whereIn() pada sebuah model.
     *
     * @param string $column Nama kolom yang akan di whereIn.
     * @param array  $values Array nilai yang akan di whereIn.
     * @return mixed Query builder instance atau model yang telah di query.
     */
    public function whereIn(string $column, array $values)
    {
        return $this->model->whereIn($column, $values);
    }

    /**
     * Method search() digunakan untuk melakukan pencarian data pada sebuah model.
     *
     * @param array $columns Array kolom yang akan di cari.
     * @param string $value  Nilai yang akan di cari.
     * @return mixed Query builder instance atau model yang telah di query.
     */
    public function search(array $columns,  $value): mixed
    {
        return $this->model->where(function ($query) use ($columns, $value) {
            foreach ($columns as $column) {
                $query->orWhere($column, 'like', "%{$value}%");
            }
        })->get();
    }
}
