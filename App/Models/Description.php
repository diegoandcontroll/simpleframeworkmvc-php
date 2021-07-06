<?php
  namespace App\Models;
  use MF\Model\Model;
  class Description extends Model{
    public function getDescriptions(){
      $query = 'select titulo, descricao from tb_info';
      return $this->db->query($query)->fetchAll();
    }
  }
?>