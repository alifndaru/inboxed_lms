<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link rel="stylesheet" href="assets/css/size.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>

    <script>
        

        // $(document).ready(function(){
        // // Open modal on page load
        // $("#modalreset").modal('show');
 
        // // Close modal on button click
        // $("#modalemail").click(function(){
        //     $("#modalemail").modal('hide');
        // });

        $(document).click(function(){
             // Open modal on page load
            // $("#modalreset").modal('hide');
 

            // $("#modalreset").click(function(){
            //     $("#modalreset").modal('hide');
            // }); 

            // Close modal on button click
            $("#modalemail").click(function(){
                $("#modalemail").modal('hide');
            }); 

            $("#modalreset").click(function(){
                $("#modalreset").modal('hide');
            }); 

        });
    </script>
    <style>
        body{
            background-image: url('assets/img/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            padding-bottom: 20px;
            font-family: 'Lexend', sans-serif,serif;
        }
    </style> 
   
</head>
<body>
    
<!-- =================JUDUL=============== -->
<div class="garis-1"></div>
<div class="width-650 head abs pos1">
    <div class="font-45 ">Enhance Your Career with</div>
</div>
<div class="width-650 pos1 abs head m-atas-45">    
    <div class="font-70">InboxED</div> 
</div> <!-- header -->

<!-- =================REGISTRASI=============== -->
<!-- Button trigger modal -->

    <div class="main-container pad1 container-tengah" style="height: 350px;">
    <div class="logo-kunci"></div>

        <div class="head-container p-atas-50">
            <h3 class="center wid-inp-1 m-atas-20 m-bawah-20" style="color: aliceblue;"><b>Forgot Password ?</b></h3>
            <div class="m-bawah-4 m-atas-3">
                <h4 class="center wid-inp-1 m-bawah-20" style="color: aliceblue; font-size:18px">We send a password reset link 
                    to your email</h4>
                <!-- {{-- <div class="h4">No Worries, we'll send you reset password to your email</div> --}} -->
            </div>

<!-- =================INPUT=============== -->
            <div class="input">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-inline list-style-none mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
            @endif

<!-- FORGOT-->
{{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                    <input name="email" id="email" class="wid-inp-0 center" type="email" placeholder="Enter your Email">
                    <button type="submit" value="Submit" class="button-reset wid-inp-6 m-bawah-50"  data-toggle="modal" data-target="#modalreset">RESET PASSWORD</button>
                {{ html()->form()->close() }}
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

<!-- {{-- ------MODALL RESET TO EMAIL------- --}} -->
<div class="modal fade" id="modalreset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="main-container pad1 container-tengah" style="height: 335px;">
        <div class="logo-email"></div>
    
            <div class="head-container p-atas-50">
                <h3 class="center wid-inp-1 m-atas-20 m-bawah-20" style="color: aliceblue;"><b>Check your email</b></h3>
                <div class="m-bawah-4 m-atas-3">
                    <h4 class="center wid-inp-1 m-bawah-20" style="color: aliceblue; font-size:18px">No Worries, we'll send you reset password to your email.</h4>
                    <!-- {{-- <div class="h4">No Worries, we'll send you reset password to your email</div> --}} -->
                </div>

                <div class="input">
                
                    <button class="button-reset wid-inp-6 m-bawah-50" ><a href="https://mail.google.com/mail/u/0/">CHECK EMAIL</a></button>
                </div> 
            </div>
        </div> <!-- container -->
</div>

<!-- {{-- ------MODALL RESET TO PASSWORD------- --}} -->
<div class="modal hidden" id="modalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="main-container pad1 container-tengah">
        <div class="logo-kunci"></div>
    
            <div class="head-container p-atas-50" style="height: 335px;">
                <h3 class="center wid-inp-1 m-atas-20 m-bawah-20" style="color: aliceblue;"><b>Set new password</b></h3>
                <div class="m-bawah-4 m-atas-3">
                    <h4 class="center wid-inp-1 m-bawah-20" style="color: aliceblue; font-size:18px">Your new password must be different to
                        previously used passwords.</h4>
                </div>

                <div class="input font-18">
                <form>
                    <label for="email">Email*</label>
                    <input class="wid-inp-6 p-kiri-35" type="password" placeholder="Email">
                    <label for="input">Password*</label>
                    <input class="wid-inp-6 p-kiri-35" type="password" placeholder="Password">
                    <label for="input">Password Confirmation*</label>
                    <input class="wid-inp-6 p-kiri-35" type="password" placeholder="Confirmed Password">
            
                </form>
                    <button class="button-reset wid-inp-6  m-bawah-10" id="closeModalemail" data-toggle="modal" data-target="#modalsukses" >CHECK EMAIL</button>
                    <label for="input" class="wid-inp-6 font-15 p-bawah-10">* Your password need include lower, uppercase, 
                    number or symbol and  8 char long</label>
                </div> 
            </div>
        </div> <!-- container -->
</div>

<!-- ---MODAL SUKSES --- -->
<div class="modal fade" id="modalsukses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <!-- <div class="modal-dialog" role="document"> -->
        <div class="main-container container-tengah p-20 p-bawah-20 head" style="height: 335px;">

            <div class="head-container p-atas-30">
                <div class="width-48 auto m-bawah-10">
                    <img class="widht-48 height-48 m-atas-5" src="assets/img/ceklis.png" alt="">
                </div>
                <div class="font-24 m-bawah-20 sukses center"><b>You password has been successfully reset</b></div>
                <div class="center font-18 p-bawah-20">click below to login InboxEd.</div>
                <!-- <div class="modal-footer"> -->
                <div class="width-335 auto">
                    <a href="/newlogin"> <button onclick=window.location(login)
                            class="width-335 height-30 m-bawah-20" style="border-radius: 14px;">LOGIN</button></>
                    </a>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>