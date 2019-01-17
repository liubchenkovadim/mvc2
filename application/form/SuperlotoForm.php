<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 06.01.19
 * Time: 18:21
 */

namespace application\form;


use application\core\Form;

class SuperlotoForm extends Form
{
    public function lotoForm()
    {
        $form[] = $this->createForm();
        $form[] = $this->p('Введите количество нужных комбинации! ');
        $form[] = $this->createInput(['type' => 'number',
            'name' => 'number', 'min' => 1, 'max' => 100000, 'value' => 1]);
        $form[] = $this->p('');
        $form[] = $this->createInput(['type'=> 'submit','value' => 'Генерировать',
            'name' => 'go']);
        $form[] = $this->endForm();

        return $form;
    }

}