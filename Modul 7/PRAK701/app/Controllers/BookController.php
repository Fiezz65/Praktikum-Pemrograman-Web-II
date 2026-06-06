<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class BookController extends Controller
{
    public function index()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();
        return view('books/index', $data);
    }

    public function create()
    {
        return view('books/create');
    }

    public function store()
    {
        $rules = [
            'judul' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'string' => 'Judul harus berupa teks.',
                ]
            ],
            'penulis' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penulis harus diisi.',
                    'string' => 'Penulis harus berupa teks.',
                ]
            ],
            'penerbit' => [
                'rules' => 'required|string',
                'errors' => [
                    'required' => 'Penerbit harus diisi.',
                    'string' => 'Penerbit harus berupa teks.',
                ]
            ],
            'tahun_terbit' => [
                'rules' => 'required|numeric|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'numeric' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                    'less_than' => 'Tahun terbit harus kurang dari 2024.',
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $bookModel = new BookModel();
        $bookModel->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        session()->setFlashdata('message', 'Buku baru berhasil ditambahkan.');
        session()->setFlashdata('message_type', 'success');
        return redirect()->to('/books');
    }

    public function edit($id)
    {
        $bookModel = new BookModel();
        $data['book'] = $bookModel->find($id);
        return view('books/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'penerbit' => 'required|string',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]',
        ];

        if (!$this->validate($rules)) {
             return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $bookModel = new BookModel();
        $bookModel->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        session()->setFlashdata('message', 'Data buku berhasil diperbarui.');
        session()->setFlashdata('message_type', 'success');
        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $bookModel = new BookModel();
        $bookModel->delete($id);

        session()->setFlashdata('message', 'Buku berhasil dihapus dari daftar.');
        session()->setFlashdata('message_type', 'success');
        return redirect()->to('/books');
    }
}