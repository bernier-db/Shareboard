<div>
   <?php if(isset($_SESSION['isLoggedIn'])) : ?>
    <a class="btn btn-success share" href="<?php echo ROOT_PATH ?>shares/add">Partage avec le monde!</a><br>
    <?php endif ?>
    
    <?php foreach($viewmodel as $item) : ?>
        <div class="well">
            <h3><?php echo $item['title'] ?></h3>
            <small><?php echo $item['createDate'] ?> par <?php echo $item['Name'] ?></small>
            <hr>
            <p><?php echo $item['body'] ?></p>
            <br>
            <a class="btn btn-default" href="<?php echo $item['link'] ?>" target="_blank">Visit website</a>
            
        </div>
    <?php endforeach; ?>
</div>