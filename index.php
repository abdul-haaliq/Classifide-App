<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>HOME</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">


            <header class="header bg-primary">
                <nav>
                    <div class="logo">
                        <a href="index.html">FinalProject</a>
                    </div>
                    <input type="checkbox" id="menu-toggle">
                    <label for="menu-toggle" class="menu-icon">&#9776;</label>
                    <ul class="menu">
                        <li><a href="#">All Ads</a></li>
                        <li><a onclick="showLogInModal()" href="#">Log In</a></li>
                        <li><a href="#">Post Your Ads</a></li>

                    </ul>
                </nav>
            </header>




            <div class="modal fade" id="login-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold " id="staticBackdropLabel" >Log in</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="login-email" class="forn-lable fw-bold">Email</label>
                                    <input id="login-email" type="email" class="form-control ">
                                </div>
                                <div class="col-12">
                                    <label for="login-password" class="forn-lable fw-bold" >Password</label>
                                    <input id="login-password" type="Password" class="form-control">
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="logIn();" >Log In</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>