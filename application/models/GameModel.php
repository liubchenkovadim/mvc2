<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 06.01.19
 * Time: 18:38
 */

namespace application\models;


use application\core\Model;

class GameModel extends Model
{
    public function generation($num)
    {
        for ($i = 0;$i < $num; $i++) {
           $arr[] = $this->creatComb();

        }
     return $this->searshComb($arr);


    }

    private function random()
    {
        return mt_rand(1, 52);
    }


    private function check($arr)
    {
        for ($i = 0; $i < 6; $i++) {
            for ($j = 0; $j < 6; $j++) {
                if ($i != $j) {
                    while ($arr[$i] == $arr[$j]) {
                        $arr[$j] = $this->random();
                    }
                }
            }
        }
        return $arr;
    }

    private function creatComb()
    {
        for ($i = 0; $i < 6; $i++) {
            $arr[$i] = $this->random();

        }
        sort($arr);
        $arr = $this->check($arr);

        return $arr;

    }

    private function searshComb($arr)
    {
        set_time_limit(1000);
        $result = [];

        foreach ($arr as $key => $item) {
            $i = 0;
            foreach ($arr as $keys => $val) {
                if($key != $keys){
                    if($item == $val){
                        $i++;

                    }
                }
            }
            if($i > 0){
                $result[] = $item;
            }
        }

        return $result;

    }


}