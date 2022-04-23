<!-- giong masterLayout nhung header nền đen -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/partial.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/home_page.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/gioiThieu_page.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/lienHe_page.css">
</head>
<body>   
    <header >
        <nav class="nav bg-dark position-static">  
            <?php require_once "./partial/header.php"?>  
        </nav>
    </header>
    <?php require_once "./mvc/views/Pages/".$data['Page'].".php"?>

    <footer class="footer text-white p-5 bg-dark">
        <?php require_once "./partial/footer.php" ?>
    </footer>
</body>   
</html>