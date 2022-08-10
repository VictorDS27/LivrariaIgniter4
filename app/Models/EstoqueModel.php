<?php

namespace App\Models;

use CodeIgniter\Model;

class EstoqueModel extends Model
{
    protected $table = 'estoque';
    protected $primarykey = 'id';
    protected $allowedFields = ['nome', 'Autor','Editora','valor'];

    public function getEstoque($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
    }