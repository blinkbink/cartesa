<?php
include "connection/db.php";
session_start();

if($_SESSION == null)
{
    header("location:login.php");
}

if(isset($_POST['id']) == null)
{
    echo "<h1 align='center'>Page Not Found</h1>";
}
else {
    ?>

    <!DOCTYPE html>
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- Site Properities -->
        <title>Play & Enjoy</title>

        <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
        <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="semantic-ui/paging.css">


        <script src="semantic-ui/semantic.min.js"></script>
        <script src="semantic-ui/semantic.js"></script>
        <script src="semantic-ui/paging.js"></script>
        <script src="homepage.js"></script>
        <script>
            $(function () {
                $('.ui.card').popup();
            });

            $(function () {
                $("#test").click(function () {
                    $(".test").modal('show');
                });
                $(".test").modal({
                    closable: true
                });
            });
        </script>
    </head>

    <body id="home">
    <div class="ui inverted masthead centered segment">
        <div class="ui page grid">
            <div class="column">
                <div class="ui secondary pointing menu">

                    <a href="index.php" class="item"><i class="flaticon-home"></i> Home</a>

                    <?php
                    if ($_SESSION == null) {
                        ?>
                        <a href="login.php" class="item" id="test"><i class="flaticon-home"></i> Login / Register</a>
                        <?php
                    }
                    ?>

                    <?php
                    if ($_SESSION != null) {
                        ?>
                        <a href="profile.php" class="item" id="test"></i>
                            Welcome, <?php echo $_SESSION['username'] ?></a>
                        <?php
                    }
                    ?>


                    <div class="right menu">
                        <div class="item">

                        </div>

                        <?php
                        if ($_SESSION != null) {
                            ?>
                            <a href="logout.php" class="ui item">Logout</a>
                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <h2 align="center">Your Order</h2>


            <div class="column" align="center">
                <div class="ui card"
                     data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></i></div></div>">
                    <div class="image">
                        <img src="images/<?php echo $_POST['image'] ?>">
                    </div>
                    <div class="content">
                        <div class="header" align="center"><?php echo $_POST['name'] ?></div>
                        <div class="description">
                            <p1><?php echo $_POST['desk'] ?></p1>
                        </div>
                    </div>


                    <table class="ui celled table">
                        <thead>
                        <tr><th>Harga</th>
                            <th>Fee</th>
                        </tr></thead>
                        <tbody>
                        <tr>
                            <td><?php echo $_POST['harga'] ?></td>
                            <td><?php echo $fee = 0 ?></td>
                        </tr>
                        <tr>

                            <td><b>Total</b></td>
                            <td><?php echo $total = $_POST['harga'] + $fee ?></td>

                            <form action="pay.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
                                <input type="hidden" name="total" value="<?php echo $total ?>">
                                <input type="hidden" name="fee" value="<?php echo $fee ?>">
                                <button class="ui pink button" type="submit" name="submit">
                                    Purchase Now
                                </button>
                            </form>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
<br>
            <div class="column" align="center">
                Note *<p>- Pesanan akan expire dalam waktu 60 Menit dari saat pesanan anda masuk sistem. Voucher akan dikirim melalui akun anda Maksimal 1 jam</p>
            </div>

    </body>
    </html>

    <?php
}
?>