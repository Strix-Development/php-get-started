<?php
  //include bootstrap for header and call header function
  require_once __DIR__. "/bootstrap/app.php";
  include file_header();
?>

<form method="post" action="">
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px;" src=""><span class="font-weight-bold">Kirti</span><span class="text-black-50">Kirti12@bbb.com</span><span> </span></div>
        </div>
        
        <input type="hidden" value="profile" name="action">
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile </h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="" name ="Name"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" name="Surname" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value="" name="PhoneNumber" ></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=" " name="Address"></div>
                    <div class="col-md-12"><label class="labels">EmailID</label><input type="email" class="form-control" placeholder="enter EmailID" value=" " name="EmailID"></div>
                    <div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control" placeholder="Password" value="" name="Password"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value="" name="Education"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value="" name="Country"></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" name="State" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" name="submit" value="submit" ></div>
                
                
            </div>
        </div>
       
        </div>
    </div>
</div>
</div>
</div>
</form>

<?php
 //call footer fumction for footer
include file_footer();
?>