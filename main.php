<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> site </title>
    <link rel ="shortcut icon" type="image/x-icom" href="icon-logo.png">
    <link rel="stylesheet" type="text/css" href="test.css">
</head>
<body>
<?php
require_once 'dataBase.php';
require_once 'function.php';

$category_id = $_GET['cat'];
$category = get_category();

$title = get_category_id($category_id);
123


?>
<div class="main">

    <header>
        <div  class="title"><img src="icon-logo.png" alt="логотип" title="логотип" class="logo">Вся информация о рыбах</div>
    </header>
    <div class="left">
        <div class="razdel">

        <div class="razdelglav" align="center">Название рыб</div>

            <?php foreach ($category as $cat) : ?>

               <a href="?cat=<?=$cat['id']?>"> <?=$cat['title']?></a> <br>

            <?php endforeach; ?>

        </div>


    </div>

    <div class="right">
            <div class="content">
                <div class="contentnazv" align="center">


                         <?=$title['title']?>


                     </div>
                           <div> <?=$title['content']?></div>
                </form>
    </div>
    </div>


</div>
<footer>
    <div class="footer">Все права защищены &copy;2020   </div>
</footer>

</body>

</body>

</html>