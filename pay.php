<?php
include "connection/db.php";
session_start();

if($_SESSION == null)
{
    header("location:login.php");
}

if(isset($_POST['submit']))
{
    $status = "Process";
    $pay = "INSERT INTO invoice(idsteam, total, fee, status, guess) VALUE('".$_POST['id']."', '".$_POST['total']."', '".$_POST['fee']."', '$status', '".$_SESSION['username']."')";

    mysqli_query($conn, $pay);
}

if(isset($_POST['pay']))
{
    $pic = rand(1000,100000)."-".$_FILES['file']['name'];
    $pic_loc = $_FILES['file']['tmp_name'];
    $folder="uploads/";
    if(move_uploaded_file($pic_loc,$folder.$pic))
    {
        ?><script>alert('successfully uploaded');</script><?php
    }
    else
    {
        ?><script>alert('error while uploading file');</script><?php
    }


    $cek = "SELECT idinvoice FROM invoice ORDER BY idinvoice DESC limit 1";

    $q = mysqli_query($conn, $cek);
    while($data = mysqli_fetch_array($q))
        $string =  $data['idinvoice'];

    $pay = "INSERT INTO konfirmasi(idinvoice, status, nominal, metode, file) VALUE('$string', 'Pending', '".$_POST['jumlah']."', '".$_POST['metode']."', '$file')";
    mysqli_query($conn, $pay);

}
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
<br>
    <div class="fourteen wide column">
        <div class="ui two column aligned stackable divided grid">

            <div class="column" align="center">
                <?php
                for($i = 0 ; $i <= 2 ; $i++)
                {
                    echo "<br>";
                }

                ?>
                <div class="ui card"
                     data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></i></div></div>">
                    <div class="image">
                        <img src="images/mandiri.png">
                    </div>
                    <div class="content">
                        <div class="description">
                            <p1>Nomor Rekening : 1340010459872 A/N Moh Iqbal Pratama</p1>
                        </div>
                    </div>
                </div>
                <div class="ui card"
                     data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></i></div></div>">
                    <div class="image">
                        <img src="images/bni.png">
                    </div>
                    <div class="content">
                        <div class="description">
                            <p1>Nomor Rekening : 0323954235 A/N Moh Iqbal Pratama</p1>

                        </div>
                    </div>

                </div>
            </div>

            <div class="column" align="center">
                <?php
                for($i = 0 ; $i <= 4 ; $i++)
                {
                    echo "<br>";
                }

                ?>
                <div class="ui card"data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></i></div></div>">

                    <form class="ui large form" action="pay.php" method="post">
                        <div class="ui stacked segment">
                            <div class="field">
                                <input type="text" name="jumlah" placeholder="Masukan Jumlah Transfer" required oninvalid="this.setCustomValidity('Input nominal Transfer')" oninput="setCustomValidity('')">
                            </div>

                            <div class="field">
                                <select name="metode" >
                                    <option value="Mandiri - 1340010459872">Mandiri - 1340010459872</option>
                                    <option value="BNI - 0323954235">BNI - 0323954235</option>
                                </select>
                            </div>

                            <div class="field">
                                <input type="file" name="file" required oninvalid="this.setCustomValidity('Input File Gambar')" oninput="setCustomValidity('')">
                            </div>

                            <button class="ui pink button" type="submit" name="pay">
                                Konfirmasi
                            </button>

                        </div>

                    </form>
                </div>

            </div>

    </body>
    </html>