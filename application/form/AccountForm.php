<?php
namespace application\form;

use application\core\Form;

class AccountForm extends Form
{

    public function loginForm()
    {


        $form[] = $this->createForm();
        $form[] = $this->p('Логин:');
        $form[] = $this->createInput(['type' => 'text',
                                    'name' => 'login']);
        $form[] = $this->p('Пароль:');

        $form[] = $this->createInput(['type' => 'password',
                                    'name' => 'password']);
        $form[] = $this->p('');

        $form[] = $this->createInput(['type' => 'submit',
                                     'name' => 'enter',
                                     'value' => 'Вход']);


        $form[] = $this->endForm();
        return $form;
    }

    public function registerForm()
    {
        $form[] = $this->createForm();
        $form[] = $this->p('Логин:');
        $form[] = $this->createInput(['type' => 'text',
            'name' => 'name']);
        $form[] = $this->p('email:');
        $form[] = $this->createInput(['type' => 'email',
            'name' => 'email']);
        $form[] = $this->p('Пароль:');
        $form[] = $this->createInput(['type' => 'password',
            'name' => 'pass']);
        $form[] = $this->p('Подтвержение пароля:');
        $form[] = $this->createInput(['type' => 'password',
            'name' => 'pass2']);

        $form[] = $this->p('');
        $form[] = $this->createInput(['type' => 'submit',
            'name' => 'register',
            'value' => 'Регистрация']);


        $form[] = $this->endForm();
        return $form;
    }



}