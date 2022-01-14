<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Niagahoster">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">KPTI</h1>
        <h3 class="desc">Koperasi Property Today Indonesia</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=input">input</a></li>
                <li><a href="index.php?page=edit">edit</a></li>
                <li><a href="index.php?page=detail">detail</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'input':
                include "input.php";
                break;
                case 'edit':
                include "edit.php";
                break;
                case 'detail':
                include "detail.php";
                break;          
            }
        }
else{
            include "input.php";
        }
        ?>
 
    </div>

</body>
</html>