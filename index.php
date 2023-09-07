    <!DOCTYPE html>
    <html>
    <head>
        <title>Login and Registration</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-lg-4 col-md-6">
                    <div id="login-form" class="mb-4">
                        <h2 class="text-light">Login</h2>
                        <form id="login">
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-primary ">Login</button>
                        </form>
                        <p class="mt-2 text-light">Don't have an account? <a href="#" id="show-register" style="text-decoration: none;">Register</a></p>
                    </div>
            
                    <div id="register-form" class="mb-4">
                        <h2 class="text-light">Register</h2>
                        <form id="register">
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password"id="regPassword">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password"id="confirmPassword">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                        <p class="mt-2 text-light">Already have an account? <a href="#" id="show-login">Login</a></p>
                    </div>
                </div>
            </div>
        </div>



        <div id="passwordMismatchPopup" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Error</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                New password and confirm password do not match.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>

    </html>
