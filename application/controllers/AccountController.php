<?php
namespace application\controllers;

use application\core\Controller;
use application\form\AccountForm;
use application\models\AccountModel;

class AccountController extends Controller
{



    public  function  loginAction()
    {
        $forms = new AccountForm();
        $form =   $forms->loginForm();
        $errors = '';
        if ((!empty($_POST['login']))AND(!empty($_POST['password']))){
            $_POST['login'] = mb_strtolower($_POST['login']);
            if($this->model->checkUser(mb_strtolower($_POST['login']))){
                if($this->model->checkRegisterUserDb($_POST['login'],$_POST['password']))
                return $this->view->redirect('/');
            } else {
                $errors = '<span style="background: red">Логин или пароль неправильной!</span>';
            }

        }

       return $this->view->render('Вход ',['form' =>$form,
                                                 'errors' => $errors]    );
    }

    public  function  registerAction()
    {
        $forms = new AccountForm();
        $errors ='';
        $form =   $forms->registerForm();
        if(!empty($_POST['register'])) {
            if (($_POST['pass']) == ($_POST['pass2'])) {
                $_POST['name'] = mb_strtolower($_POST['name']);
                $user = $this->model->checkUser($_POST['name']);
                if (empty($user)) {

                        $data = $this->model->writeUserDb($forms->validateUserName($_POST['name']),
                            $forms->validateUserEmail($_POST['email']),
                            $forms->validateUserPassword($_POST['pass']));
                    } else {
                        $errors = '<span style="color:red"> Пользователь с таким Ником уже зарегестрирован!</span>';
                        return $this->view->render('Регистрация не прошла!', ['register' => [],
                            'errors' => $errors]);
                    }
                    if ($data) {
                        $errors = '<span style="color:green"> Регистрация успешна!</span>';
                        return $this->view->render('Регистрация успешна!', ['register' => [],
                            'errors' => $errors]);
                    } else {
                        $errors = '<span style="color:red">Регистрация не удалась! Повторите попытку поже</span>';
                    }

            } else {
                    $errors = '<span style="color:red"> Пароли не совпадают!</span>';
                }


        }

      return   $this->view->render('Регистрация ',['register' => $form ,
                                                         'errors' => $errors]);
    }

    public function checkPostRegister()
    {

    }
}