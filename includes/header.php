
<header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1>Блог IT_Минималиста</h1>
          </div>
          <nav class="header__top__menu">
            <ul>
              <li><a href="/01">Главная</a></li>
              <li><a href="/01/pages/about.php">Обо мне</a></li>
              <li><a href="<?php echo $config['vk_url']?>">Я Вконтакте</a></li>
            </ul>
          </nav>
        </div>
      </div>
<?php
   $categories = mysqli_query($connection, "SELECT * FROM `articles_categories`");
?> 
      <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
                <?php
                while( $cat = mysqli_fetch_assoc($categories) ) 
                {
                    ?>
                     <li><a href="/category.php?id=<?php echo $cat['id'] ?>"><?php echo $cat['title'] ?></a></li>
                    <?php
                }
                ?>
            
            </ul>
          </nav>
        </div>
      </div>
    </header>