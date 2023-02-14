<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="/assets/css/frontend.css">
    <link rel="stylesheet" href="/assets/css/ukuran.css">
    <link rel="stylesheet" href="/assets/css/size.css">
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
            // $("#modalemail").modal('show');
 

            // $("#modalreset").click(function(){
            //     $("#modalreset").modal('hide');
            // }); 

            // Close modal on button click

            $("#modalreset").click(function(){
                $("#modalreset").modal('hide');
            }); 

        });
    </script>
    <style>
        body{
            background-image: url('/assets/img/bg.jpg');
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


    {{-- <section id="about-page" class="about-page-section pb-0">
        <div class="row justify-content-center align-items-center">
            <div class="col col-sm-6 align-self-center">
                <div class="card border-0">
                    <div class="card-body">


                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                    {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                                    {{ html()->password('password_confirmation')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    <button class="btn btn-info" type="submit">{{__('labels.frontend.passwords.reset_password_button')}}</button>
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                        {{ html()->form()->close() }}
                    </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-6 -->
        </div><!-- row -->
    </section> --}}

<!-- {{-- ------MODALL RESET TO PASSWORD------- --}} -->
    <div class="main-container pad1 container-tengah">
        <div class="logo-kunci"></div>
    
            <div class="head-container p-atas-50">
                <h3 class="center wid-inp-1 m-atas-20 m-bawah-20" style="color: aliceblue;"><b>Set new password</b></h3>
                <div class="m-bawah-4 m-atas-3">
                    <h4 class="center wid-inp-1 m-bawah-20" style="color: aliceblue; font-size:18px">Your new password must be different to
                        previously used passwords.</h4>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-inline list-style-none">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="input font-18">
    {{ html()->form('POST', route('frontend.auth.password.reset'))->open() }}
    {{ html()->hidden('token', $token) }}
    {{-- {{ html()->form('GET', route('frontend.auth.password.reset.form'))->open() }} --}}
    {{-- {{ html()->hidden('email', $user) }} --}}

                    <label for="input" >Email*</label>
                    <input name="email" class="wid-inp-6 p-kiri-35" type="email">
                    <label for="input" >Password*</label>
                    <input name="password" class="wid-inp-6 p-kiri-35" type="password" placeholder="Password">
                    <label for="input" >Password Confirmation*</label>
                    <input name="password_confirmation" class="wid-inp-6 p-kiri-35" type="password" placeholder="Confirmed Password">
                    <button type="submit" value="Submit" name="submit" class="button-reset wid-inp-6  m-bawah-10" id="closeModalemail" data-toggle="modal" data-target="#modalsukses" >Continue</button>
    {{ html()->form()->close() }}

                    <label for="input" class="wid-inp-6 font-15 p-bawah-10">* Your password need include lower, uppercase, 
                    number or symbol and  8 char long</label>
                </div> 
            </div>
        </div> <!-- container -->

<!-- ---MODAL SUKSES --- -->
<div class="modal fade" id="modalsukses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <!-- <div class="modal-dialog" role="document"> -->
        <div class="main-container container-tengah p-20 p-bawah-20 head">

            <div class="head-container p-atas-30">
                <div class="width-48 auto m-bawah-10">
                    <img class="widht-48 height-48 m-atas-5" src="/assets/img/ceklis.png" alt="">
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