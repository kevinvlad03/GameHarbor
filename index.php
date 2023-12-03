<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GameHarbor</title>
    <link href="css/index_style.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/searchbar.css" rel="stylesheet">

    <?php include_once "Components/navbar.php" ?>
</head>
<body>
    <p>GameHarbor</p>
    <p>this is a test</p>
<div id="cover">
    <form method="get" action="">
        <div class="tb">
            <div class="td"><input type="text" placeholder="Search" required></div>
            <div class="td" id="s-cover">
                <button class="searchbtn" type="submit">
                    <div id="s-circle"></div>
                    <span></span>
                </button>
            </div>
        </div>
    </form>
</div>

</body>
</html>