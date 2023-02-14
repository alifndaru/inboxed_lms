<?php
    use Illuminate\Support\Str;
    $verify_key = Str::random(100);
 if(isset($hasil)){
    $first_name = '';
    $last_name = '';
    $email = '';
    $password = '';
    $password_confirmation = '';
    $verify_key ='';
 }
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet" href="style/error.css"> -->
    <link rel="stylesheet" href="assets/css/frontend.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/ukuran.css">
    <link rel="stylesheet" href="assets/css/detailing.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

    <style>
        body {
            background-image: url(assets/img/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding-bottom: 20px;
            font-family: 'Lexend', sans-serif, serif;
        }
    </style>

</head>
   <script>
                        function country_code(){
                            var val = document.getElementById("country").value;
                            if (val === "select country"){
                                document.getElementById("output").value="";
                            }
                            else if (val === "id"){
                                document.getElementById("output").value="+62";
                            }
                            else if (val === "us"){
                                document.getElementById("output").value="+1";
                            }
                        }
                    </script>

{{-- <script>
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
</script> --}}
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
    <div class="logo-reg" style="margin-top: -40px;"></div>
    <div class="main-container container-kanan p-bawah-30" style="top: 20px;">
        <div class="logo-inbox"></div>
        <div class="head width-400 m-atas-4">
            <div class="font-32 center m-atas-25">Register</div>
            <div class="font-18 center ">Enter your detail to get sign in <br>to your account</div>

            <!-- =================LINGKARAN=============== -->
            <div class="margin-10">
                <div class="width-70 height-10 auto">
                    <a href="/newregis">
                    <div class="lingkaran wait-ling  abs"></div>
                </a>
                    <div class="lingkaran process-ling f-kanan"></div>
                </div>
            </div>

            <!-- =================INPUT=============== -->
            <div class="width-335 auto">
                <form action="newregis2" method="post">
                    @csrf
                    <input type="hidden" name="first_name" value="{{ $first_name }}">
                    <input type="hidden" name="last_name" value="{{ $last_name }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" name="password" value="{{ $password }}">
                    <input type="hidden" name="password_confirmation" value="{{ $password_confirmation }}">
                    <input type="hidden" name="verify_key" value="{{ $verify_key }}">

                    <label for="tgl-lahir">Tanggal Lahir</label>
                    <input class="width-335  p-kiri-35" type="date" name="tgl_lahir" id="" required>
                    <label for="tmp-lahir">Tempat Lahir</label>
                    <input class="width-335  p-kiri-35" type="text" name="tmp_lahir" onkeydown="return /[a-z]/i.test(event.key)" style="text-transform: capitalize;" placeholder="DKI Jakarta" required>
                    
                    {{-- <div class="f-kiri width-160">
                        <label for="kota red inline-block">Kota</label>
                        <input class="center width-160" type="text" name="kota" id="" placeholder="Kota" required>
                    </div>
                    <div class="f-kanan width-160">
                        <label for="negara red inline-block">Negara</label>
                        <input class="center width-160" type="text" name="negara" id="" placeholder="Negara" required>
                    </div> --}}

                    <div class="f-kiri width-160">
                        <label for="kota">Kota</label>
                        <input class="center width-160" type="text" onkeydown="return /[a-z]/i.test(event.key)" style="text-transform: capitalize;" name="kota" id="" placeholder="Kota" required>
                    </div>
                    <div class="f-kanan width-160">
                        <label for="negara">Negara</label>
                        <select class="width-160 center" name="" id="">
                            <option value="0">Pilih negara</option>
                            <option value="id">Indonesia &#x1F1EE;&#x1F1E9;</option>
                            <option value="us">United States &#x1F1FA;&#x1F1F8;</option>
                        </select>
                        <!-- <input class="center width-160" type="text" name="negara" id="" placeholder="Negara" required> -->
                    </div>
                    

                    <div class="phone">
                        <select class="width-120 center f-kiri abs" name="negara-phone" id="country" onchange="country_code()">
                            <option value="select country">Code</option>
                            <option value="id">&#x1F1EE;&#x1F1E9; ID</option>
                            <option value="us">&#x1F1FA;&#x1F1F8; US</option>
                        </select>
                        <input type="tel" class="width-210 p-kiri-20 " 
                        {{-- onkeydown="return /[0-9]/i.test(event.key)" --}}
                        style="font-family:'Lexend',sans-serif,serif;
                        margin-left: 125px; 
                        height: 40px;
                        border-radius: 12px;
                        background: #2D3260;
                        border: 1px solid #E7F6F2;
                        color: #E7F6F2;
                        margin-bottom: 19px;
                        font-size: 18px;" id="output" placeholder="Phone Number">
                    </div>

                 

                    <label for="gender">Gender : </label>
                    <div class="inline-block ">
                        <input id="Male" type="radio" name="gender" value="Male">
                        <label  for="Male"><span ><span></span></span>Male</label>
                    </div>
                    <div class="inline-block">
                        <input id="Female" type="radio" name="gender" value="Female">
                        <label for="Female"><span><span></span></span>Female</label>
                    </div>

                    {{-- <input class="width-335 m-bawah-3 btn-login font-18" style="border-radius: 14px; font-weight:bold; border: none; background-color: #E7F6F2; cursor: pointer;" type="button" data-toggle="modal" data-target="#exampleModal"
                        value="REGISTER"> --}}

                    <button class="width-335 height-30 m-bawah-3 btn-login font-18" style="border-radius: 14px; font-weight:bold; border: none; background-color: #E7F6F2; cursor: pointer; " data-toggle="modal" data-target="#exampleModal"  type="submit">Register</button>
                </form>
            </div>

            <!-- =================SUPPORT=============== -->
            <div class="support">
                <p class=" center wid-inp-1 m-atas-30">Need Help?<br>
                    <a href="mailto:support@inboxed.id" class="forgot" style="color: white;"> support@inboxed.id</a>
                </p>
            </div>
            </div>
        </div>


    </div> <!-- container -->

    <div class="foot">
        <div class="foot-part">Partnership with:</div>
        <a href="https://www.triples.co.id/">
            <div class="logo-triple-s"></div>
        </a>
        <a href="https://dpdikadindki.org/">
            <div class="logo-ikadin"></div>
        </a>

    </div>

    <?php if(isset($hasil)):?>
        <div class="main-container container-tengah p-20 p-bawah-20 head">
            <div class="head-container">
                <div class="width-48 auto m-bawah-20">
                    <img class="widht-48 height-48 m-atas-20" src="assets/img/ceklis.png" alt="">
                </div>
                <div class="font-24 m-bawah-20 sukses center">Registration Succesfully</div>
                <div class="center">We have sent confirmation to your email </div>
                <div class="center m-bawah-20">please check your email to confrim</div>
                <!-- <div class="modal-footer"> -->
                <div class="width-335 auto">
                    <a href="/newlogin"> <button onclick=window.location(login)
                            class="width-335 height-30" style="border-radius: 14px;">LOGIN</button></>
                    </a>
                </div>
            </div>
        </div>

    <?php exit; ?>
    
    <?php endif; ?>

    


{{-- 
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true"> 
        <div class="modal-dialog" role="document">
        <div class="main-container container-tengah p-20 p-bawah-20 head">
            <div class="head-container">
                <div class="width-48 auto m-bawah-20">
                    <img class="widht-48 height-48 m-atas-20" src="assets/img/ceklis.png" alt="">
                </div>
                <div class="font-24 m-bawah-20 sukses center">Registration Succesfully</div>
                <div class="center">Your account was created succesfully.</div>
                <div class="center m-bawah-20">please Login to access the website</div>
                <!-- <div class="modal-footer"> -->
                <div class="width-335 auto">
                    <a href="/new
login"> <button onclick=window.location(login)
                            class="width-335 height-30" style="border-radius: 14px;">LOGIN</button></>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}


  
</body>
</html>