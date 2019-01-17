<p>Главная страница</p>


    <?php foreach ($news as $val) : ?>
         <h4><?php echo $val['title']?></h4>
        <p>  <?php echo  $val['description']?> </p>
    <hr>

  <?php endforeach; ?>
