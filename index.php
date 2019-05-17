
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="">
<title>BUTP | HALL BOOKING</title>
<meta name="description" content="">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>
<body>
    <div class="main">
        <div class="header">
            <h1 class="h1">HALL BOOKING FORM</h1>
        </div>
        <div class="container">
            <div class="main-box">
                <form>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Applicant Name</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Designation</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="designation">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Booking For</label>
                        </div>
                        <div class="col-sm-9">
                            <input class="form-check-input" type="radio" name="booking" value="Convacation Hall"> <label> Convacation Hall </label>
                            <input class="form-check-input" type="radio" name="booking" value="Auditoriam"> <label> Auditoriam </label>
                            <input class="form-check-input" type="radio" name="booking" value="Multipurpose Hall"> <label> Multipurpose Hall </label>
                        </div>
                        <div class="col-sm-3">
                            <label>Date</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' class="form-control" placeholder="From date"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' class="form-control" placeholder="To date"/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>E-mail Id</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Mobile Number</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Admin Approval</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <select name="admin_approval" class="form-control" id="adminApproval" onchange="adminApproveal(this)">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3" id="admin-approval-label">
                            <label>Referal Number</label>
                        </div>
                        <div class="col-sm-9" id="admin-approval-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="ref_no">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label>Maintanance Expensive Waived</label>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <select name="maintanance" class="form-control" id="maintanaceCheck">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3 maintanance">
                            <label>Amount</label>
                        </div>
                        <div class="col-sm-9 maintanance">
                            <div class="form-group">
                                <input type="text" class="form-control" name="amount">
                            </div>
                        </div>
                        <div class="col-sm-3 maintanance">
                            <label>DD Number</label>
                        </div>
                        <div class="col-sm-9 maintanance">
                            <div class="form-group">
                                <input type="text" class="form-control" name="dd_num">
                            </div>
                        </div>
                        <div class="col-sm-3 maintanance">
                            <label>MR Number</label>
                        </div>
                        <div class="col-sm-9 maintanance">
                            <div class="form-group">
                                <input type="text" class="form-control" name="mr_num">
                            </div>
                        </div>
                        <div class="col-sm-3 maintanance">
                            <label>Cheque Number</label>
                        </div>
                        <div class="col-sm-9 maintanance">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cheque_num">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        &copy BDU
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="js/main.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
