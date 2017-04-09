<?php
include "connection/db.php";
session_start();


?>

<!DOCTYPE html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properities -->
    <title>Play & Enjoy</title>

    <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
    <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="semantic-ui/paging.css">

    <script src="jquery-1.12.4.js"></script>
    <script src="semantic-ui/semantic.min.js"></script>
    <script src="semantic-ui/semantic.js"></script>
    <script src="semantic-ui/paging.js"></script>
    <script src="homepage.js"></script>
    <script>
        $(function()
        {
            $('.ui.card').popup();
        });
    </script>

    <?php
    if($_SESSION == null) {
        ?>
        <script>
            function sweet (){
                alert("Silahkan Login Terlebih Dahulu")
            }
        </script>
        <?php
    }
    ?>

</head>

<body id="home">
<div class="ui inverted masthead centered segment">
    <div class="ui page grid">
        <div class="column">
            <div class="ui secondary pointing menu">

                <a href="index.php" class="active item"><i class="flaticon-home"></i> Home</a>

                <?php
                if ($_SESSION == null)
                {
                    ?>
                    <a href="login.php" class="item" id="test"><i class="flaticon-home"></i> Login / Register</a>
                    <?php
                }
                ?>

                <?php
                if ($_SESSION != null)
                {
                    ?>
                    <a href="profile.php" class="item" id="test"></i> Welcome, <?php echo $_SESSION['username']?></a>
                    <?php
                }
                ?>

                <div class="right menu">
                    <div class="item">
                        <div class="ui icon input">
                            <input placeholder="Search..." type="text">
                            <i class="flaticon-search link icon"></i>
                        </div>
                    </div>

                    <?php
                    if($_SESSION != null)
                    {
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

<div class="ui recent-works vertical segment">
    <div class="ui very relaxed stackable centered page grid">
        <div class="row">
            <div class="eight wide centered column">
                <h1 class="center aligned ui inverted header">Gaming Support <Voucher></Voucher></h1>
                <div class="ui horizontal divider"><i class="white flaticon-home icon"></i></div>
            </div>
        </div>

        <div class="ui secondary pointing menu">
            <a class="active item"></i> Steam Voucher</a>
            <a class="item"></i> Garena</a>
            <a class="item"></i> Gemscool</a>
            <a class="item"></i> Google</a>
        </div>

        <div class="fourteen wide column">
            <div class="ui four column aligned stackable divided grid">

                <?php
                $query = mysqli_query($conn,"SELECT * FROM steam");

                while($data = mysqli_fetch_array($query))
                {
                    ?>

                    <div class="column">
                        <div class="ui card"
                             data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></i></div></div>">

                            <div class="image">
                                <img src="images/<?php echo $data['image'] ?>">
                            </div>
                            <div class="content">
                                <div class="header" align="center"><?php echo $data['nama'] ?></div>
                            </div>
                            <div class="ui two bottom attached buttons">



                                <form action="transaction.php" method="POST" >


                                    <input type="hidden" name="id" value="<?php echo $data['ID'] ?>" >
                                    <input type="hidden" name="name" value="<?php echo $data['nama'] ?>" >
                                    <input type="hidden" name="harga" value="<?php echo $data['harga'] ?>" >
                                    <input type="hidden" name="image" value="<?php echo $data['image'] ?>" >
                                    <input type="hidden" name="desk" value="<?php echo $data['Deskripsi'] ?>" >
                                    <button class="ui pink button" type="submit" name="submit" onclick="sweet()">

                                        Rp. <?php echo $data['harga'] ?>

                                    </button>

                                </form>



                            </div>

                        </div>
                    </div>

                    <?php
                }
                ?>


            </div>
        </div>
    </div>
</div>

        <div class="ui vertical feature segment">
            <div class="ui centered page grid">
                <div class="fourteen wide column">
                    <h2 align="center">How To Order</h2>
                    <div class="ui four column center aligned stackable divided grid">

                        <div class="column column-feature">
                            <div class="ui icon header">
                                Step 1
                            </div>
                            <p>Login/Register your account</p>
                        </div>

                        <div class="column column-feature">
                            <div class="ui icon header">
                                Step 2
                            </div>
                            <p>Choise Your Game / Voucher Game</p>
                        </div>

                        <div class="column column-feature">
                            <div class="ui icon header">
                                Step 3
                            </div>
                            <p>Fill The Form Required & Checkout</p>
                        </div>

                        <div class="column column-feature">
                            <div class="ui icon header">
                                Step 4
                            </div>
                            <p>Check your item & Pay with method provide</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

<div class="ui recent-works vertical segment">
    <div class="ui very relaxed stackable centered page grid">
        <div class="row">
            <div class="eight wide centered column">
                <h1 class="center aligned ui inverted header">Steam Game</h1>
                <div class="ui horizontal divider"><i class="white flaticon-home icon"></i></div>
            </div>
        </div>
    </div>
    <h1>
        Coming Soon
    </h1>

</div>


        <div class="ui inverted footer vertical segment center">

            <div class="ui centered page grid">
                <h3 class="subscribe-header">Subscribe for Information</h3>
                <div class="ui form eight wide subscribe column">
                    <div class="field">
                        <div class="ui fluid action input">
                            <input placeholder="Susbcribe..." type="text">
                            <div class="ui button">Susbcribe</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui stackable center aligned page grid">
                <div class="four column row">
                    <div class="column">
                        <h5 class="ui inverted header">About</h5>
                        <div class="ui inverted link list">
                            <a href="#">Site</a>
                        </div>
                    </div>

                    <div class="column">
                        <h5 class="ui inverted header">Social Media</h5>
                        <div class="ui inverted link list">
                            <a href="#"><img src="images/line.png" height="40" width="40"></a>
                            <a href="#"><img src="images/facebook.png" height="35" width="35"></a>
                            <a href="#"><img src="images/instagram.png" height="35" width="35"></a>
                        </div>
                    </div>

                    <div class="column">
                        <h5 class="ui inverted header">Phone</h5>
                        <div class="ui inverted link list">
                            +62856 2144 666
                        </div>
                    </div>

                    <div class="column">
                        <h5 class="ui inverted header">Designed By</h5>
                        <addr>
                            <a class="item" href="http://scripteden.com"><img src="images/scripteden-logo-g.png" alt="Logo" style="height:20px" /></a>  <br/>
                        </addr>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>