<?php
    include_once ('premision.php');

    include_once('../includes/header.php'); 
    include_once('../includes/navbar.php'); 
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>



<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" 
role="dialog" 
aria-labelledby="exampleModalLabel" 
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">New Course</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">

    <div class="form-group">
        <label for="completename">Name</label>
        <input type="text" class="form-control" 
        id="completename"
        placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="completeemail">Email</label>
        <input type="email" class="form-control" 
        id="completeemail"
        placeholder="Enter Email">
    </div>

    <div class="form-group">
        <label for="completephone">Phone</label>
        <input type="number" class="form-control" 
        id="completephone"
        placeholder="Enter Phone">
    </div>

    <div class="form-group">
        <label for="completecourse">Course</label>
        <input type="text" class="form-control" 
        id="completecourse"
        placeholder="Enter Course">
    </div>
</div>


    <div class="modal-footer">
    <button type="button" 
    class="btn btn-danger" 
    data-dismiss="modal">Close</button>
    <button type="button" 
    class="btn btn-dark" 
    onclick="addcourse()">Submit</button>
    </div>
</div>
</div>
</div>


<!--update modal -->
<div class="modal fade" id="updateModal" 
tabindex="-1" 
role="dialog" 
aria-labelledby="exampleModalLabel" 
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Update Course</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">

    <div class="form-group">
        <label for="updatename">Name</label>
        <input type="text" class="form-control" 
        id="updatename"
        placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="updateemail">Email</label>
        <input type="email" class="form-control" 
        id="updateemail"
        placeholder="Enter Email">
    </div>

    <div class="form-group">
        <label for="updatephone">Phone</label>
        <input type="number" class="form-control" 
        id="updatephone"
        placeholder="Enter Phone">
    </div>

    <div class="form-group">
        <label for="updatecourse">Course</label>
        <input type="text" class="form-control" 
        id="updatecourse"
        placeholder="Enter Course">
    </div>
</div>


    <div class="modal-footer">
    <button type="button" 
    class="btn btn-danger" 
    data-dismiss="modal">Close</button>
    <button type="button" 
    class="btn btn-dark" onclick="updatedetails()" >Update</button>
    <input type="hidden" id="hiddendata">
    </div>
</div>
</div>
</div>



    <div class="container my-3">
        <h1 class="text-center">Insert && Update And Delete Row without reload Page</h1>
        <!-- Button trigger modal -->
        <button type="button" 
        class="btn btn-dark my-3" 
        data-toggle="modal" 
        data-target="#completeModal">
        Add New Course
        </button>
        <div id="displayDataTable"></div>
    </div>







<!-- Ajax code -->
<script>

    $(document).ready(function(){
        displayData();
    });
                
function displayData() {
    var displayData = "true";
    $.ajax({
        url:"display.php",
        type: 'post',
        data: {
            displaySend:displayData
        },
        success:function(data,status) {
            $('#displayDataTable').html(data);
        }
    })
}

    function addcourse() {
        var nameAdd =$('#completename').val();
        var emailAdd =$('#completeemail').val();
        var phoneAdd =$('#completephone').val();
        var courseAdd =$('#completecourse').val();

        $.ajax({
            url:"insertAjax.php",
            type: 'post',
            data:{
                nameSend:nameAdd,
                emailSend:emailAdd,
                phoneSend:phoneAdd,
                courseSend:courseAdd
            },
            success:function(data,status) {
                // console.log(status);
                $('#completeModal').modal('hide');
                displayData();
            }
        });
    }


// ==========DELETE=====================//
function DeleteCourse(deleteid){
    $.ajax({
        url:'deleteAjax.php',
        type:'POST',
        data:{
            deleteSend:deleteid
        },
        success:function(data,status){
            displayData();
        }
    });
}

// =============update========================//
function UpdateCourses(updateid){
    $('#hiddendata').val(updateid);

    $.post("updateAjax.php",
        {updateid:updateid},
        function(data,status)
        {

        var userid=JSON.parse(data);
        $('#updatename').val(userid.name);
        $('#updateemail').val(userid.email);
        $('#updatephone').val(userid.phone);
        $('#updatecourse').val(userid.course);
    });
    $('#updateModal').modal("show");
}


// ===onclick update==============//
function updatedetails(){
    var updatename =$('#updatename').val();
    var updateemail =$('#updateemail').val();
    var updatephone =$('#updatephone').val();
    var updatecourse =$('#updatecourse').val();
    var hiddendata =$('#hiddendata').val();
    
    $.post("updateAjax.php",{
        updatename:updatename,
        updateemail:updateemail,
        updatephone:updatephone,
        updatecourse:updatecourse,
        hiddendata:hiddendata
    },function(data,status){
        $('#updateModal').modal("hide");
        displayData();
    });
}

</script>



    
</body>
</html>













<?php include_once('includes/script.php') ?>
<?php include_once('includes/footer.php')?>