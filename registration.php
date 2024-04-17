<?php
    $post_title = "Registration page";
    include('includes\header.php');
    include('includes\navbar.php');
?>
    <div class="py-5">
        <di class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-shadow">
                            <div class="card-header">
                                <h5>Registration Form</h5>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="post">
                                    <div class="form-group mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">phone number</label>
                                        <input type="phone" name="phone" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="Email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">confirm Password</label>
                                        <input type="text" name="confirm Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </di>
    </div>


<?php include('includes\foter.php') ?>