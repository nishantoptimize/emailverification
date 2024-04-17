<?php
    $post_title = "Login page";
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
                                <form action="">
                                
                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="Email" name="name" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Login Now</button>
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