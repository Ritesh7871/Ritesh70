<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system Registration page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"rel="stylesheet">

</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto"name="username"placeholder="Enter your username" required="required">
                </div>
                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto"name="mobile"placeholder="Enter your mobile number" required="required">
                </div>
                <div class="mb-3">
                    <input type="password"class="form-control w-50 m-auto"name="password"placeholder="Enter your password" required="required">
                </div>
                <div class="mb-3">
                    <input type="cpassword"class="form-control w-50 m-auto"name="cpassword"placeholder="Enter your confirm password" required="required">
                </div>
                <div class="mb-3">
                    <input type="file"class="form-control w-50 m-auto"name="photo">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                    </select>
                </div>
                <!-- my means margin top & bottom -->
                <button type="submit"class="btn btn-dark my-4">Register</button>
                <p>Already have an account? <a href="../" class="text-white">Login here</a></p>
            </form>
        </div>
    </div>
    
</body>
</html>