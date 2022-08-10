<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Estoque extends Seeder
{
    public function run()
    {
    $name = ['Conectadas','Mentirosos','A culpa é das estrelas','O homem de giz','Todo esse tempo','Por lugares incriveis'];
    $aut = ['Clara Alves','E. Lockhart', 'John Green', 'C.J. Tudor', 'Rachael and Mikki', 'Jeniffer Niven'];
    $edit = ['Seguinte','Seguinte','Intrínseca','Intrínseca','Alt','Seguinte'];
    $valor = [20,21,39,49,27,25];
        for($x = 0; $x < 6; $x++){
        $data = [
            'Nome' => $name[$x],
            'Autor'    => $aut[$x],
            'Editora'    => $edit[$x],
            'valor' => $valor[$x],
        ];

        // Using Query Builder
        $this->db->table('estoque')->insert($data);
         }
    }
}