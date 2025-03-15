<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">.
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <nav class="navbar nav_expand-lg navbar-dark ">
        <div class="navbar-container container-fluid d=flex justify content-between align-item_center ">
            <div class="home"><strong>Home</strong></div>
            <div class="login">
                <button type=button class="btn" id="top-btn" data-bs-toggle="ofcanvas"
                    data-bs-target="#offcanvasdarknavbar" aria-control="offcanvasdarknavbar">
                    Login</button>
            </div>
        </div>
    </nav>
    <div class="main-container">
        <div class="offfcanvas offcanvas-bottom" tobindesk="-1" id="offcanvasDarkCanvas">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkCanvasLogin">Login Here</h5>
                <button type="button" class="btn btn-close-white" data-bs-dismiss="offcanvas" aria-level="close">

                </button>
            </div>
            <div class="offcanvas-body">
                <div class="offcanvas-body-left">

                </div>
                <div class="offcanvas-body-right">
                    <div class="form-section">
                        <form action="" id="login-form">
                            <div class="login-part">
                                <label for="user-email" class="text-white col-12 input-fileds">Email Address</label>
                                <input type="text" id="user-email" placeholder="enter your email-id">
                            </div>
                            <div class="login-part">
                                <label for="use-password" class="text-white col-12 input-fileds">Password</label>
                                <input type="password" id="user-password" placeholder="enter your password">
                            </div>
                            <div class="login-part form-buttom">
                                <button type="submit" class="btn text-success h-100 w-100">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <form action="" id="formForUserId" method="post">
        <input type="hidden" name="userid" id="forUserId">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('.home').on("click", function() {
            window.location.href = "../index.php";
        });

        $(document).ready(function() {
                    $('#login-form').on("submit", function(e) {
                        e.preventDefault();
                        let Email = $('#user-email').val();
                        let Password = $('#user-password').val();
                        $.ajax({
                            type: 'post',
                            url: 'login.php',
                            data: {
                                user_email: Email,
                                user_password: Password
                            },
                            success: function(response) {
                                let answer = JSON.parse(response);
                                //console.log(answer.success);
                                // console.log(response);
                                if (answer.success != true) {
                                    alert("you have entered a wrong email or password");
                                }else{
                                    if(answer.user_type_id==1){
                                        $('.btn').html('loading...');
                                        $('#forUserId').val(answer.id);
                                        $('#formForUserId').prop('action','../ADMIN/index.php');
                                        $('#formForUserId').submit();

                                    }
                                }
                            }
                        });


                    });
        });
        
    </script>
</body>

</html>