<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Estoque extends ResourceController
{
    private $estoqueModel;

    public function __construct(){
        $this->estoqueModel = new \App\Models\EstoqueModel();
    }
     
    public function listar()
    {
        $data = $this->estoqueModel->findAll();
        return $this->response->setJson($data);
    }

    public function estoque($id)
    {
        $data = $this->estoqueModel->getEstoque($id);
        return $this->response->setJson($data);
    }

    public function primeiros()
    {
        $data = $this->estoqueModel->findAll(3);
        return $this->response->setJson($data);
    }

    public function gravarProduto(){
        $this->estoqueModel->save([
            'nome' => $this->request->getPost('nome'),
            'Autor' => $this->request->getPost('Autor'),
            'Editora' => $this->request->getPost('Editora'),
            'valor' => $this->request->getPost('valor')
        ]);
    }

    public function deletar($id){
        $this->estoqueModel->delete($id);
    }

    public function atualizar($id){
        $data =  $this->request->getJSON();
        $this->estoqueModel->update($id, $data);
    }
}