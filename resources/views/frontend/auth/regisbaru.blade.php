<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/ukuran.css" class="style">
    <link rel="stylesheet" href="assets/css/detailing.css">
    <style>
        body {
            background-image: url(assets/img/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding-bottom: 20px;
            font-family: 'Lexend', sans-serif;
        }
        .merah {
            color: red;
        }
        .warnaplaceholder::-webkit-input-placeholder {
            color: red;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- =================JUDUL=============== -->
    <div class="garis"></div>
    <div class="head abs pos1">
        <div class="font-45 ">Enhance Your Career with</div>
        <div class="font-70">InboxED</div>
    </div> <!-- header - header -->

    <!-- =================REGISTRASI=============== -->
    <div class="logo-reg " style="top: -10px;"></div>
    <div class="main-container p-bawah-20 container-kanan" style="top: 25px;">
        <div class="head-container p-bawah-20 m-atas-4">
            <h3 class="center p-bawah-5 p-atas-30 font-30">Register Your Account</h3>
            <div class="m-bawah-4">
                <h4 class="center wid-inp-1 ">Enter your detail to get sign in <br>to your account</h4>
            </div>

            <!-- =================LINGKARAN=============== -->

            <div class="width-70 height-10 auto pos-l1">
                <div class="lingkaran process-ling  abs"></div>
                <div class="lingkaran wait-ling f-kanan"></div>
            </div>

            <!-- =================INPUT=============== -->

            <?php
            //    if($errors->has('password')){
            //     $password = 'ini salah';
            //    }
            ?>

            <div class="input">
                <form action="/newregis" method="post">
                    @csrf
                    <label class="m-bawah-10 inline-block" for="firstname">Firstname</label>
                    <input class="wid-inp p-kiri-35 {{ ($errors->has('first_name'))?'warnaplaceholder':'' }}" onkeydown="return /[a-z]/i.test(event.key)" style="text-transform: capitalize;" type="text" placeholder="Input your first name" name="first_name" required value="{{ old('first_name') }}">
                    <div class="merah">{{ ($errors->has('first_name'))?$errors->first('first_name'):'' }}</div>

                    <label class="m-bawah-5 inline-block" for="lastname">Lastname</label>
                    <input class="wid-inp p-kiri-35 {{ ($errors->has('last_name'))?'warnaplaceholder':'' }}" onkeydown="return /[a-z]/i.test(event.key)" style="text-transform: capitalize;" type="text" placeholder="Input your last name" name="last_name" required value="{{ old('last_name') }}">
                    <div class="merah">{{ ($errors->has('last_name'))?$errors->first('last_name'):'' }}</div>

                    <label class="m-bawah-5 inline-block" for="email">Email</label>
                    <input class="wid-inp p-kiri-35 {{ ($errors->has('email'))?'warnaplaceholder':'' }}" type="email" placeholder="Email" name="email" required value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <style>
                        input::placeholder {
                            color: red;
                        }
                        
                        input::-ms-value {
                            color: red;
                        }
                        </style>
                    <div style="color:red" class="message">
                        <p class="message rlt" style="top: -15px;">{{ $errors->first('email') }}</p>
                    </div>
                    @endif
                    {{-- <div class="merah">{{ ($errors->has('email'))?$errors->first('email'):'' }}
            </div> --}}

            <label class="m-bawah-5 inline-block" for="password">Password</label>
            <input class="wid-inp p-kiri-35 {{ ($errors->has('password'))?'warnaplaceholder':'' }}" type="password" placeholder="Password" name="password" required> 
<p class="font-12" style="margin-top: -10px;">Use 8 or more characters with a mix of letters, numbers & symbols</p> <br>
            
            @if ($errors->has('password'))
            <style>
                input::placeholder {
                    color: red;
                }
                input::-ms-value {
                    color: red;
                }
            </style>
            <div style="color:red" class="message font-12">
                <p class="message rlt" style="top: -15px;">{{ $errors->first('password') }}</p>
            </div>
            @endif
            {{-- <div class="merah">{{ ($errors->has('password'))?$errors->first('password'):'' }}
        </div> --}}

        <label class="m-bawah-5 inline-block" for="confirmed_password">Confirmed Password</label>
        <input class="wid-inp p-kiri-35 {{ ($errors->has('password'))?'warnaplaceholder':'' }}" type="password" placeholder="Password Confirmation" name="password_confirmation" required>
        @if ($errors->has('password_confirmation'))
        <style>
            input::placeholder {
                color: red;
            }
            input::-ms-value {
                color: red;
            }
        </style>
        <div style="color: red" class="message">
            <p class="message rlt" style="top: -15px;">{{ $errors->first('password_confirmation') }}</p>
        </div>
        @endif
        {{-- <div class="merah">{{ ($errors->has('password_confirmation'))?$errors->first('password_confirmation'):'' }}
    </div> --}}
    <button type="submit" class="wid-inp-6 height-30 font-18">NEXT</button>
    </form>
    </div>

    <div class="support">
        <p class=" center wid-inp-1" style="margin-top: 20px;">Need Help?<br>
            <a href="mailto:support@inboxed.id" class="forgot"> support@inboxed.id</a>
        </p>
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
    <script>
        function alphaOnly(event) {
            alert(event);
            var key;
            if (window.event) {
                key = window.event.key;
            } else if (e) {
                key = e.which;
            }
            //var key = window.event.key || event.key;
            alert(key.value);
            return ((key >= 65 && key <= 90) || (key >= 95 && key <= 122));
        }
    </script>
</body>

</html>