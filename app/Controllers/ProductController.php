<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{

    public $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'products'      => $this->productModel->asObject()->findAll()
        ];
        return view('product/index', $data);
    }

    public function create()
    {
        session();
        $data = [
            'validation'    => \Config\Services::validation(),
            'kodeproduk'    => ProductModel::kodeProduk()
        ];
        return view('product/create', $data);
    }

    public function insert()
    {
        $request = [
            'productName'   => $this->request->getVar('productName'),
            'productCode'   => $this->request->getVar('productCode'),
            'productStock'  => $this->request->getVar('productStock'),
            'productPrice'  => $this->request->getVar('productPrice')
        ];

        if (!$this->validate([
            'productName'   => 'required',
            'productCode'   => 'required',
            'productStock'  => 'required',
            'productPrice'  => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/product/create')->withInput()->with('validation', $validation);
        }

        $this->productModel->insert($request);
        return redirect()->to('/product')->with('success', "Data berhasil ditambahkan");
    }



    public function delete($id_product)
    {
        $this->productModel->where('id_product', $id_product)->delete();
        return redirect()->to('/product')->with('success', "Data berhasil dihapus");
    }

    public function edit($id_product)
    {
        session();
        $query = $this->productModel->where('id_product', $id_product)->asObject()->first();
        $data = [
            'product'   => $query,
            'validation' => \Config\Services::validation()
        ];
        return view('product/edit', $data);
    }

    public function update()
    {
        $id_product = $this->request->getVar('id_product');

        $data = [
            'productName'   => $this->request->getVar('productName'),
            'productCode'   => $this->request->getVar('productCode'),
            'productStock'  => $this->request->getVar('productStock'),
            'productPrice'  => $this->request->getVar('productPrice')
        ];
        if (!$this->validate([
            'productName'   => "required|is_unique[products.productName,id_product, $id_product]",
            'productCode'   => 'required',
            'productStock'  => 'required',
            'productPrice'  => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/product/' . $id_product . '/edit')->withInput()->with('validation', $validation);
        }
        $this->productModel->updateData($id_product, $data);
        return redirect()->to('/product')->with('success', "Data berhasil di update");
    }
}
