<?php require_once __DIR__ . '/bootstrap/app.php';
require_once header_file(); ?>

<form method="POST" action="">
    <input type="hidden" value="register" name="action">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row bg-dark">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhwy2nXeL6dSHgFyG6YRSLrz8NiU_NcPKlLnCI4VF6Dls6s3yrVQVuHhvxxYopPRXVzTE&usqp=CAU">
                <span class="font-weight-bold" style="color: white;">Alan</span><span class="text-red-50" style="color: white;">Add your profile picture!</span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" style="color: white;">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels" style="color: white;">Name</label>
                        <input type="text" class="form-control" placeholder="first name" name="name">
                    </div>
                    <div class="col-md-6"><label class="labels" style="color: white;">Surname</label>
                        <input type="text" class="form-control" placeholder="surname" name="lastname">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels" style="color: white;">PhoneNumber</label>
                        <input type="text" class="form-control" placeholder="enter phone number" name="phone">
                    </div>
                    <div class="col-md-12"><label class="labels" style="color: white;">Address</label>
                        <input type="text" class="form-control" placeholder="enter address" name="add">
                    </div>
                    <div class="col-md-12"><label class="labels" style="color: white;">Email ID</label>
                        <input type="text" class="form-control" placeholder="enter email id" name="email">
                    </div>
                    <div class="col-md-12"><label class="labels" style="color: white;">Education</label>
                        <input type="text" class="form-control" placeholder="education" name="edu">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels" style="color: white;">Country</label>
                        <input type="text" class="form-control" placeholder="country" name="count">
                    </div>
                    <div class="col-md-6"><label class="labels" style="color: white;">State/Region</label>
                        <input type="text" class="form-control" placeholder="state" name="state">
                    </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="hidden" name="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span style="color: white;">Edit Experience</span>
                    <span class="border px-3 p-1 add-experience" style="color: red;"><i class="fa fa-plus"></i>&nbsp;Experience</span>
                </div><br>
                <div class="col-md-12"><label class="labels" style="color: white;">Experience in Designing/Developing</label>
                    <input type="text" class="form-control" placeholder="experience" name="exp">
                </div> <br>
                <div class="col-md-12"><label class="labels" style="color: white;">Additional Details</label>
                    <input type="text" class="form-control" placeholder="additional details" name="detail">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</form>

<?php require_once footer_file(); ?>