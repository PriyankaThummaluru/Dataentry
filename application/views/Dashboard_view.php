
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>
        <!-- Font Awesome -->
        <!--http://172.17.12.129/Dataentry/assets/layout page assests/main dashboard Pannel.min.css-->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/css/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/layout page assests/main dashboard Pannel.min.css">
        <link rel="stylesheet" href="<?php echo site_url ?>Login.css">
        <!-- Animations -->
        <link rel="stylesheet" href="<?php echo site_url ?>assets/css/my pages/animations.css">

        <style>
            #dismissAlert {
                display: none;
            }
        </style>
    </head>

    <body>
        <input type="hidden" id="cookieid" value="<?php echo get_cookie('myfirstcookie'); ?>" >
        <!--<input type="hidden" id="tabledate" value="<?php // echo get_cookie('tablenamecheck'); ?>" >-->


        <section class="login-form">

            <div class="container">
                <div class="row justify-content-center">
                    <div class=" ">
                        <div class="row loginbox">
                            <div class="col-sm-12  col-md-12 col-lg-7 col-xs-7 p-0 shadow-lg card1">
                                <img src="<?php echo site_url ?>assets/images/work1233.jpg"alt="login form" class="img-fluid imgg" />

                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-5 col-xs-5 bg-white shadow-lg  p-3 card2 ">
                                <div class="">
                                    <form method="post" id="loginform">

                                        <div class="alert alert-danger alert-dismissible" id="dismissAlert">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                            <p id="errorMsg"></p>
                                        </div>
                                        <h3 class="text-center text-primary"><u>Login</u></h3>

                                        <div class="col-sm-12">

                                            <div class="form-group row ">
                                                <label for="newName" class="col-md-4 mylabel">User Name:</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control " name="user" id="user" placeholder="Enter User Name" required>
                                                    <input type="hidden" class="form-control " name="<?php echo $this->security->get_csrf_token_name(); ?>"  value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="newName" class="col-md-4 mylabel">Password:</label>
                                                <div class="col-md-10">
                                                    <input type="password"  class="form-control" name="pwd" id="pwd" placeholder="Enter Password" required>
                                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="myFunction()"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <!-- Checkbox -->
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input me-2 checkbox-lg" type="checkbox" value="" id="form2Example3" />
                                                    <label class="form-check-label mylabel pl-1 " for="form2Example3"> Remember me </label>
                                                </div>
                                                <a href="#" class=" mylabel">Forgot password?</a>
                                            </div>
                                        </div>
                                        <?php
                                        $todaydate = date('Y');
                                        $tabledate = date('Ym');
                                         set_cookie('tablenamecheck', $tabledate, '3600');
                                        
                                        
                                        ?>



                                        <div class="col-sm-12 text-center text-lg-start mt-4 pt-2">
                                            <!--<a class="btn btn-primary btn-lg" href="display" id="login">Login</a>-->
                                            <!--<button type="submit" name ="login" formaction="<?php echo base_url(); ?>Entrydata/display" id="login" class="btn btn-primary btn-block">Login</button>-->
                                            <button type="button" name ="login"  id="login" class="btn btn-primary btn-block">Login</button>
                                            <p class=" mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger mylabel">Register</a></p>

                                            <div class="d-flex justify-content-center mt-3">
                                                <?php 
//                                                echo $tabledate;
                                                ?>
                                                <p class="small ">Powered By Margadarsi Computers © <?php echo $todaydate; ?> All Rights Reserved </p>
                                            </div>


                                        </div>
                                        <div class="col-sm-10">
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- jQuery -->
        <!--src="http://172.17.12.129/Dataentry/assets/jquery/animationOnScroll.js"-->
        <script src="<?php echo site_url ?>assets/jquery/jquery.min.js"></script>
        <script src="<?php echo site_url ?>assets/jquery/jquery_ajax.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo site_url ?>assets/css/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo site_url ?>assets/css/bootstrap/bootstrap.bundle.min.js"></script>
        <!-- Dashboard Pannel js -->
        <script src="<?php echo site_url ?>assets/layout page assests/main dashboard pannel.js"></script>
        <!-- animations -->
        <script src="<?php echo site_url ?>assets/jquery/animationOnScroll.js"></script>



        <script>
                                                        function myFunction() {
//                                                            $('#dismissAlert').hide();
//                                                            $("#dismissAlert").style.display = "none";
//                                                            $('#dismissAlert').text('');
                                                            //              $('#dismissAlert').hide();
                                                            var x = document.getElementById("pwd");
                                                            if (x.type === "password") {
                                                                x.type = "text";
                                                            } else {
                                                                x.type = "password";
                                                            }
                                                        }
        </script>
        <script>
//            $(document).on("pagecontainerbeforechange", function (e, data) {
//    if (typeof data.toPage == "string" && data.options.direction == "back" && data.prevPage[0].id == "aboutPage") {
//        data.toPage = "#mainScreen"; /* redirect to main page */
//        data.options.transition = "flip"; /* optional */
//    }
//});


            $(function () {

                $('#login').on('click', function () {
                    passwordcheck();

                });
//              $('#user')on('change', function ()){
//                  userinfor();
//              }

//                 var usernamee = $('#user').val();
//                    var passwordd = $('#pwd').val();
//                   $inforuser=""

//                function userinfor(){
//                     var username = $('#user').val();
//                      $.ajax({
//                        type: 'POST',
//                        url: '<?php echo base_url(); ?>Entrydata/ajaxpwdcheck/',
//                        data: $("#loginform").serialize(),
////                            data: {'username': username, 'password': password},
//                        success: function (data) {
//                            var userdata = jQuery.parseJSON(data);
//                            if (userdata) {
//                                alert(userdata);
////                                event.preventDefault();
////                                location.href = "http://172.17.12.129/Dataentry/index.php/Entrydata/display";
//                            } 
//
//                        }
//                    });
//                }

//function getCookie(cookieName) {
//  let cookie = {};
//  document.cookie.split(';').forEach(function(el) {
//    let [key,value] = el.split('=');
//    cookie[key.trim()] = value;
//  })
////  alert(cookie);
//  return cookie[cookieName];
//}

//window.getCookie = function(name) {
//  var match = document.cookie. + name ;
//  
//  if (match) return match[2];
//}
//   function getCookie(key) {
//        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
//        return keyValue ? keyValue[2] : null;
//    }
                function passwordcheck() {
                    var username = $('#user').val();
                    var password = $('#pwd').val();
                    var userdata=username+'~'+password;
                    document.cookie = "usernamepwd="+userdata;
//                    Cookies.set('username', userdata);
//             let userdetails = getCookie('usernamepwd');
//                    let userdetails = document.cookie.username;
//                    alert(userdetails);
                    var url = new URL("http://172.17.12.129/Dataentry/Dashboard");
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>Entrydata/ajaxpwdcheck/',
                        data: $("#loginform").serialize(),
//                            data: {'username': username, 'password': password},
                        success: function (data) {
//                            var arr=[];
                            var checkval = jQuery.parseJSON(data);
//                            alert(data);
//                            arr = Array.from(data);
//                            arr =  Object.assign([], data);;
//                           var $typeofval = typeof data;
//                            alert($typeofval);
                            if (checkval == 0) {
                                $('#dismissAlert').show();
                                $("#errorMsg").text('Incorrect password..');
                            } else {
//                                 alert(checkval);
//                                event.preventDefault();
//                                url.searchParams.set(username, password);
//                                location.href = "http://172.17.12.129/Dataentry/index.php/Entrydata/display?" + username + "," + password;
                                location.href = url;
                            }

                        }
                    });

                }



            });


        </script>




        <!--</script>-->



    </body>

</html>