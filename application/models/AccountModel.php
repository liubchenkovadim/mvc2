<?php


namespace application\models;


use application\core\Model;

class AccountModel extends Model
{
    public function checkUser($name)
    {
        $result =$this->db->row('SELECT name, pass FROM mvc2.users WHERE name = :user',['user' => $name]);

        return $result;
    }

    public function checkRegisterUserDb($name,$pass)
    {
        $result = $this->checkUser($name);
        if($result){
            if (($result[0]['name'] == $name)AND(password_verify ($pass,$result[0]['pass'] ))){
                return true;
            }
        }
        return false;
    }

    public function writeUserDb($name, $email, $pass)
    {

            $sql = 'INSERT INTO users( name, pass, email) VALUES (:user, :pass, :email)';
            $vars = ['user' => $name, 'pass' => $pass, 'email' => $email];
            $result = $this->db->insert($sql, $vars);



        return $result;

    }

}