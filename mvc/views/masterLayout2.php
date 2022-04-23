<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterLayout1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/partial.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/home_page.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/masterLayout1.css">
    <link rel="stylesheet" href="http://localhost/WatchWebPro/public/css/product_detail.css">
</head>
<body>
    <header>
    <nav class="nav bg-dark position-static">  
            <?php require_once "./partial/header.php"?>  
        </nav>    
    </header>
    <main>
        <div class="container__custom">
            <div class="row">
                <div class="sideBar col-lg-3 col-md-3">
                        <?php 
                        require_once "./partial/sideBar.php"
                        ?>
                </div>
                <div class="mainContent col-sm-12 col-lg-9 col-md-9">
                    <div class="row">
                        <?php require_once "./mvc/views/Pages/".$data['Page'].".php"?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
    <footer class="footer text-white p-5 bg-dark">
        <?php require_once "./partial/footer.php" ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="http://localhost/WatchWebPro/public/js/tabs.js">//Xử lí các tabs</script>
</html>