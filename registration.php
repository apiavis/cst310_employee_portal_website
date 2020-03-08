<?php
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Registration Page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php include 'master.php';?>

    <div class="container text-center">
        <h1>Welcome to the Registration Page</h1>
    </div>
    <
    <div class="container">
        <form class="padding-top">
            <div class="form-row">
                <div class="form-group col-md-6" id="no-padding-left">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" autocomplete="off">
                </div>
                <div class="form-group col-md-6" id="no-padding-right">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" autocomplete="off">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" id="no-padding-left">
                    <label for="inputFirstName4">First Name</label>
                    <input type="firstName" class="form-control" id="inputFirstName4" placeholder="First Name" autocomplete="off">
                </div>
                <div class="form-group col-md-6" id="no-padding-right">
                    <label for="inputLastName4">Last Name</label>
                    <input type="lastName" class="form-control" id="inputLastName4" placeholder="Last Name" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" id="no-padding-left">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <?php
                        $states = ["AK", "AL", "AR", "AZ", "CA", "CO", "CT", "DE", "FL", "GA", "HI", "IA", "ID", "IL", "IN", "KS", "KY", "LA", "MA", "MD", "ME", "MI", "MN", "MO", "MS", "MT", "NC", "ND", "NE", "NH", "NJ", "NM", "NV", "NY", "OH", "OK", "OR", "PA", "RI", "SC", "SD", "TN", "TX", "UT", "VA", "VT", "WA", "WI", "WV", "WY"];
                        $stateLength = count($states);
                        for ($i=0; $i<$stateLength; $i++) {
                            echo "<option>$states[$i]</option>";
                        }
                        ?>
                        <!-- <option>...</option> -->
                    </select>
                </div>
                <div class="form-group col-md-2" id="no-padding-right">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" id="no-padding-left">
                    <label for="inputPhone">Phone</label>
                    <input type="text" class="form-control" id="inputPhone">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputSalary">Salary</label>
                    <input type="text" class="form-control" id="inputSalary">
                </div>
                <div class="form-group col-md-3" id="no-padding-right">
                    <label for="inputSSN">SSN</label>
                    <input type="text" class="form-control" id="inputSSN">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
<?php include 'footer.php';?>
</body>
</html>