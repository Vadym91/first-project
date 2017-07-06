<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="ready contact-page">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                
                <h2>Вход на сайт</h2>
                
                <form class="forms" action="#" method="post">
                    

                    <label>
                        <span>Логин:</span>
                        <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                    </label>
                    <label>
                        <span>Пароль:</span>
                        <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                    </label>
   

                    <div class="button-wrap"> 
                        <?php if (isset($hidden)): ?>
                            <input type="submit" name="submit" class="buttons <?php echo $hidden; ?>" value="Вход" />
                            <h3>Попробуйте еще раз через 5 минут.</h3>
                        <?php else: ?>
                            <input type="submit" name="submit" class="buttons" value="Вход" />
                        <?php endif; ?>
                            
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>