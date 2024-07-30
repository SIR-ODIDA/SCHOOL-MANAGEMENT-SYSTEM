<?php
include('inc/top.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-2">
            <?php include('inc/navbar.php'); ?>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-4">
            <h2 class="text-secondary">Register</h2>
            <hr>
            <form action="" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" style="border:1px solid black; padding-left:5px"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Your Email" name="email" style="border:1px solid black; padding-left:5px"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">Phone No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone_no" style="border:1px solid black; padding-left:5px"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Your Address" name="address" style="border:1px solid black; padding-left:5px"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-dark">Class</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="qualification" style="border:1px solid black; padding-left:5px">
                            <option value="1">Select</option>
                            <option value="2">Electrical Engineering</option>
                            <option value="3">Information Technology</option>
                            <option value="4">Mechanical Engineering</option>
                            <option value="5">Catering</option>
                            <option value="6">Science Lab</option>
                            <option value="7">Agriculture</option>
                            <option value="8">Tourism</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button class="btn btn-danger" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <td>S.NO</td>
                        <td>Class</td>
                        <td>Subject</td>
                        <td>Course</td>
                        <td>Batch Starts</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Class/Semi/All</td>
                        <td>1 year</td>
                        <td>70000</td>
                        <td>1/04/2024</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Class/Semi/All</td>
                        <td>1 year</td>
                        <td>70000</td>
                        <td>1/04/2024</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Class/Semi/All</td>
                        <td>1 year</td>
                        <td>70000</td>
                        <td>1/04/2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <h4>Address</h4>
            <address>
                Pekee College <br>
                Nkubu <br>
                Phone:+254745873481 <br>
                Email:odidadominic@gmail.com
            </address>
            <img src="images/1.jpg" class="img-fluid">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bg-dark mt-2">
            <?php include('inc/footer.php'); ?>
        </div>
    </div>
</div>
</body>
</html>
