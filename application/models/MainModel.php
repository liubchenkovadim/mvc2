<?php
namespace application\models;

use application\core\Model;

class MainModel extends Model
{
    public function getNews()
    {
       $result =  $this->db->row('SElECT title, description FROM news');

       return $result;
    }

}