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

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"</script>
    <script src="semantic-ui/semantic.min.js"></script>
    <script src="semantic-ui/semantic.js"></script>
    <script src="semantic-ui/paging.js"></script>
    <script src="homepage.js"></script>
    <script>
        $(function()
        {
            $('.ui.card').popup();
        });

        $(function()
        {
            $("#test").click(function()
            {
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
            <a class="active item"></i> Action</a>
            <a class="item"></i> Adventure</a>
            <a class="item"></i> Casual</a>
            <a class="item"></i> Indie</a>
            <a class="item"></i> Racing</a>
            <a class="item"></i> FPS</a>
            <a class="item"></i> Sport</a>
            <a class="item"></i> Strategy</a>
            <a class="item"></i> More..</a>
        </div>

        <div class="fourteen wide column">
            <div class="ui three column aligned stackable divided grid">

                <div class="column">
                    <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i></i></div></div>">
                        <div class="image">
                            <img src="images/re7.jpg">
                        </div>
                        <div class="content">
                            <div class="header">Resident Evil 7 : Biohazard</div>
                            <div class="description">
                                Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                            </div>
                        </div>
                        <div class="ui two bottom attached buttons">
                            <div class="ui button">
                                Rp.700.000
                            </div>
                            <div class="ui pink button">
                                Trailer
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                        <div class="image">
                            <img src="images/no.jpg">
                        </div>
                        <div class="content">
                            <div class="header">No Man Sky</div>
                            <div class="description">
                                Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                            </div>
                        </div>
                        <div class="ui two bottom attached buttons">
                            <div class="ui button">
                                Rp.699.000
                            </div>
                            <div class="ui pink button">
                                <i class="flaticon-play icon"></i>
                                Trailer
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                        <div class="image">
                            <img src="images/cs.jpg">
                        </div>
                        <div class="content">
                            <div class="header">Counter Strike : Global Offensive</div>
                            <div class="description">
                                Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                            </div>
                        </div>
                        <div class="ui two bottom attached buttons">
                            <div class="ui button">
                                Rp. 99.000
                            </div>
                            <div class="ui pink button">
                                <i class="flaticon-play icon"></i>
                                Trailer
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                        <div class="image">
                            <img src="images/rs.jpg">
                        </div>
                        <div class="content">
                            <div class="header">Rainbow Six Siege</div>
                            <div class="description">
                                Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                            </div>
                        </div>
                        <div class="ui two bottom attached buttons">
                            <div class="ui button">
                                Rp. 549.000
                            </div>
                            <div class="ui pink button">
                                <i class="flaticon-play icon"></i>
                                Trailer
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                        <div class="image">
                            <img src="images/dg.jpg">
                        </div>
                        <div class="content">
                            <div class="header">Dragonball : Xenoverse 2</div>
                            <div class="description">
                                Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                            </div>
                        </div>
                        <div class="ui two bottom attached buttons">
                            <div class="ui button">
                                Rp. 599.000
                            </div>
                            <div class="ui pink button">
                                <i class="flaticon-play icon"></i>
                                Trailer
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="ui card" data-html="<div class='header'>User Rating</div><div class='content'><div class='ui star rating'><i class='active icon'></i><i class='active icon'></i><i class='active icon'></i><i class='icon'></i><i class='icon'></i></div></div>">
                        <div class="image">
                            <img src="images/nba.jpg">
                        </div>
                        <div class="content">
                            <div class="header">NBA 2K 17</div>
                            <div class="description">
                                Two sisters move to the country with their father in order to be closer to their hospitalized mother, and discover the surrounding trees are inhabited by magical spirits.
                            </div>
                        </div>
                        <div class="ui two bottom attached buttons">
                            <div class="ui button">
                                Rp. 800.000
                            </div>
                            <div class="ui pink button">
                                <i class="flaticon-play icon"></i>
                                Trailer
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <center>
                    <div id="pagination"></div>

                </center>

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