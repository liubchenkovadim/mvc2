<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 06.01.19
 * Time: 18:14
 */

namespace application\controllers;


use application\core\Controller;
use application\form\SuperlotoForm;
use application\models\GameModel;

class GameController extends Controller
{
    public function superlotoAction()
    {
        $errors = '';
        $result = [];
        $forms = new SuperlotoForm();
        $form = $forms->lotoForm();

        if(!empty($_POST['go'])) {
            if (!empty($_POST['number'])) {
                $num = $_POST['number'];
                $arr = new GameModel();
                $result = $arr->generation($num);
            } else {
                $errors = '<p style="color: red"> Введите число!</p>';
            }
        }
        return $this->view->render('СуперЛото',['form' => $form,
                                                    'result' => $result,
                                                     'errors' => $errors   ]);
    }



}