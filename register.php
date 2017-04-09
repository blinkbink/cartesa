<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="login/style.css">
    <link rel="stylesheet" type="text/css" href="semantic-ui/semantic.min.css">

    <script src="semantic-ui/semantic.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="jquery-1.12.4.js"></script>
    <script src="jquery-ui.js"></script>

    <script>
        $( function() {
            $( "#datepicker" ).datepicker(
                {
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1950:2017'
                }
            );
        } );
    </script>

</head>

<body id="home">


<div class="ui recent-works vertical segment">
    <div class="ui very relaxed stackable centered page grid">
        <div class="sixteen wide column">
            <div class="ui one column aligned stackable divided grid">



                <div class="ui middle aligned center aligned grid">
                    <div class="column">
                        <h2 class="ui teal image header">
                            <div class="content">Register</div>
                        </h2>
                        <form class="ui large form" action="sqlinsert.php" method="post">
                            <div class="ui stacked segment">

                                <div class="field">
                                    <input type="text" name="Username" placeholder="Username" required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>

                                <div class="field">
                                    <input type="text" name="Email" placeholder="Email" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>

                                <div class="field">
                                    <input type="text" name="Nama" placeholder="Nama" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>

                                <div class="field">
                                    <input type="password" name="Password" placeholder="Password" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>

                                <div class="field">
                                    <input type="text" name="Tanggal" placeholder="Tanggal Lahir" id="datepicker" required oninvalid="this.setCustomValidity('Tanggal Lahir Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>

                                <div class="field">
                                    <input type="text" name="Hp" placeholder="Nomor Handphone" required oninvalid="this.setCustomValidity('Nomor Handphone Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>

                                <div class="field">
                                    <input type="radio" name="Jenis" value="Laki - Laki" required oninvalid="this.setCustomValidity('')" oninput="setCustomValidity('')">Laki - Laki ||
                                    <input type="radio" name="Jenis" value="Perempuan" required oninvalid="this.setCustomValidity('')" oninput="setCustomValidity('')">Perempuan
                                </div>


                                <input type="submit" class="ui large purple submit button" name="register" value="Sign Up">

                            </div>

                            <div class="ui error message"></div>
                        </form>


                        <div class="ui message">
                            <a href="index.php">Back</a> or <a href="login.php">Login</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
