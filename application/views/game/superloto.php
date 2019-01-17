<div class="row">
    <div class="col-1">
    </div>
    <div class="col-8">

<h3> СуперЛото генератор комбинаций</h3>
</div>
    <div class="col-1">
    </div>
</div>
<div class="row">
    <div class="col-1">
    </div>
        <div class="col-3">

        <?php
echo $errors;
 foreach ($form as $key ){
     echo $key;
 }
 ?>
    </div>
    <div class="col-4">
        <table class="table">

            <?php foreach ($result as $arr){
                echo '<tr>';
                for ($i =0; $i < count($arr); $i++ ){
                    echo '<td>'.$arr[$i].'</td>';
                }
                echo '</tr>';
            }?>

        </table>
    </div>
        <div class="col-1">

        </div>
    </div>