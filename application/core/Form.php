<?php


namespace application\core;


class Form
{


    public function createForm($action = ' ', $method = 'post')
    {

        return $start_form = '<form action="'.$action.' "  method="'. $method.'">';


    }

    public function createInput($attr = [])
    {
        $start_tag = '<input ';
        foreach ($attr as $name => $val) {
            $start_tag .= ' ' . $name . '=' . $val;
        }
        $start_tag .= '><br>';

        return $start_tag;
    }

    public function endForm()
    {
        return $end_form = '</form>';
    }

    public function p($name)
    {
       $p = '<p>'.ucfirst($name).'</p>';
        return $p;
    }


    public function validateUserName($name)
    {

        $name = $this->clean($name);

        return $name;
    }

    public function validateUserEmail($email)
    {
        $email = $this->clean($email);
        $email_validate = filter_var($email, FILTER_VALIDATE_EMAIL);

        return $email_validate;
    }

    public function validateUserPassword($pass)
    {
        $pass = $this->clean($pass);
        $hash = password_hash($pass, PASSWORD_DEFAULT);

        return $hash;
    }

    function clean($value = "") {
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }
}