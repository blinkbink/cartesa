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
</head>

<body id="home">
<div class="ui inverted masthead centered segment">
    <div class="ui page grid">
        <div class="column">
            <div class="ui secondary pointing menu">
                <a href="index.php" class=" item"><i class="flaticon-home"></i> Home</a>
                <a href="login.php" class="active item" id="test"><i class="flaticon-home"></i> Login / Register</a>
            </div>
        </div>
    </div>
</div>

<div class="ui recent-works vertical segment">
    <div class="ui very relaxed stackable centered page grid">
        <div class="sixteen wide column">
            <div class="ui one column aligned stackable divided grid">

                <script>
                    $(document)
                        .ready(function() {
                            $('.ui.form')
                                .form({
                                    fields: {
                                        email: {
                                            identifier  : 'email',
                                            rules: [
                                                {
                                                    type   : 'empty',
                                                    prompt : 'Please enter your e-mail'
                                                },
                                                {
                                                    type   : 'email',
                                                    prompt : 'Please enter a valid e-mail'
                                                }
                                            ]
                                        },
                                        password: {
                                            identifier  : 'password',
                                            rules: [
                                                {
                                                    type   : 'empty',
                                                    prompt : 'Please enter your password'
                                                },
                                                {
                                                    type   : 'length[6]',
                                                    prompt : 'Your password must be at least 6 characters'
                                                }
                                            ]
                                        }
                                    }
                                })
                            ;
                        })
                    ;
                </script>



                <div class="ui middle aligned center aligned grid">
                    <div class="column">
                        <div class="ui icon warning message">
                            <div class="content">
                                <div class="header">
                                    Login Gagal
                                </div>
                                <p>Username atau Password Yang anda masukan salah</p>
                            </div>
                        </div>
                        <h2 class="ui teal image header">
                            <div class="content">Log-in to your account</div>
                        </h2>
                        <form class="ui large form" action="verify.php" method="post">
                            <div class="ui stacked segment">
                                <div class="field">
                                    <div class="ui left icon input">
                                        <input type="text" name="username" placeholder="Username"
                                               required oninvalid="this.setCustomValidity('Username / Email Tidak Boleh kosong')"
                                               oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui left icon input">
                                        <input type="password" name="password" placeholder="Password"
                                               required oninvalid="this.setCustomValidity('Password Harus Diisi')"
                                               oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <input type="submit" class="ui large purple submit button" value="Login">

                            </div>

                            <div class="ui error message"></div>
                        </form>

                        <div class="ui message">
                            New to us? <a href="register.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
