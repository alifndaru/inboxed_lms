<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css" class="style">
    <link rel="stylesheet" href="assets/css/detailing.css"> <link rel="stylesheet" href="assets/css/ukuran.css" class="style">

    <style>
        body{
            background-image: url('assets/img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            padding-bottom: 20px;
        }

        
    </style>
</head>
<body>
<!-- =================JUDUL=============== -->
    <div class="garis"></div>
    <div class="head abs pos1">
        <div class="font-45 ">Enhance Your Career with</div>
        <div class="font-70">InboxED</div> 
    </div> <!-- header -->

<!-- =================REGISTRASI=============== -->
<div class="logo-reg"></div>
    <div class="main-container p-bawah-20 container-kanan">
        <div class="head-container p-bawah-20 m-atas-4">
            <h3 class="center p-bawah-20 p-atas-20">Login</h3>
            <div class="m-bawah-4 m-atas-3">
                <h4 class="center wid-inp-1 p-bawah-30">Enter your detail to get sign in <br>to your account</h4>
            </div>

<!-- =================INPUT=============== -->
            <div class="input">

<!-- LOGIN -->  {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                    <input class="wid-inp-6 p-kiri-35" type="email" placeholder="Email" name="email">
                    <input class="wid-inp-6 p-kiri-35" type="password" placeholder="Password" name="password">
                    @if ($errors->has('salah'))
                        <style>
                            input::placeholder {
                                color:red;
                            }
                        </style>
                        <div style="color:red" class="message">
                            <p class="message">{{ $errors->first('salah') }}</p>
                        </div>
                    @endif
                    <input type="submit" class="wid-inp-6 btn-submit" value="LOGIN">
                {{ html()->form()->close() }}

                
                

                <p class="center wid-inp-6" style="margin-bottom: 10px; margin-top:10px;">or</p>


                <form action="/newregis">
                    <input type="submit" style="border: solid #fff; background: none; color: #fff;" class="wid-inp-6" value="REGISTER">
                </form>
            </div> 
            
            <div class="wid-inp-1 m-kiri-2 p-kiri-35">
                <div class="forgot-pass m-atas-20 hover-link">
                    <div class="forgot-pass m-atas-20">
                        <a href="/forgot" style="text-decoration: none;" class="forgot "> Forgot Your Password? </a> <br> <br>
                    </div>
                </div>
                <div class="teacher m-bawah-50 ">
                    <p>Are you Teacher? <a href="/" style="color: white" class="forgot">CLICK HERE</a></p>
                </div>
            </div>
            <div class="support">
                <p class=" center wid-inp-1 p-atas-30" style="margin-top: 100px;">Need Help?<br>support@inboxed.id</p>
                
            </div>
        </div>
    </div> <!-- container -->

<!-- =================PARTNER=============== -->
    <div class="foot">
        <div class="foot-part">Partnership with:</div>
        <a href="https://www.triples.co.id/">
        <div class="logo-triple-s"></div></a>

        <a href="https://dpdikadindki.org">
        <div class="logo-ikadin"></div> </a>
    </div>
</body>
</html>

<!--  --> 