<?php

namespace App\Controllers;

use App\Models\RestModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Rest extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        $model = new RestModel();
        $data['tes'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $model = new RestModel();
        $data = [
            'id_user' => $this->request->getVar('id_user'),
            'jawaban' => $this->request->getVar('jawaban'),
            'kunci'  => $this->request->getVar('kunci'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data produk berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($id = null)
    {
        $model = new RestModel();
        $data = $model->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        //update data
        $bm = new RestModel();
        $ipt = $this->request->getRawInput(); //untuk update menggunakan (getRawInput)
        $dt = [
            'id_user' => $ipt['id_user'],
            'jawaban' => $ipt['jawaban'],
            'kunci' => $ipt['kunci']
        ];
        $bm->update($id, $dt);
        $res = [
            'status' => 200,
            'error' => null,
            'messages' => "Data terupdate.."
        ];
        return $this->respond($res);
    }

    public function delete($id = null)
    {
        $model = new RestModel();
        $data = $model->where('id', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data produk berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}