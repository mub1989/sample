<?php
namespace App\Repositories;
interface RepositoryInterface
{
    /**
     * Return all records
     *
     * @return mixed
     */
    public function all();

    /**
     * Create a new record
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * Find record by id
     *
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Update data with id
     *
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function update(array $data,$id);

    /**
     * Delete data with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete($id);
}