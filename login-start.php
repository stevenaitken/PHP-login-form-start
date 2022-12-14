<?php include('includes/error-reporting.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .container {
        width: 50%;
        margin: 0 auto;
    }
    </style>


</head>


<body>

    <div class="container">
        <h2>Login form #1</h2>
        <form method="POST" name="login_form" action=""> <!-- can post to itself or another web page -->
            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" id="username" name="username" class="form-control" required value="">
                <label class="form-label" for="username">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control" required value="" />
                <label class="form-label" for="password">Password</label>
            </div>

                <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign in</button>


        </form>

        <p>Using this file you will:</p>

        <ul>

            <li>Initialise  PHP variables.</li>
            <li>Check form data has been POSTED.</li>
            <li>Gather form data.</li>
            <li>Check the values from form data and compare.</li>
            <li>Output messages.</li>

        </ul>


<p>This task is to refamiliarise you with PHP. As you will know, within coding there can be many ways to achieve similar results. You should look to find ways which best suit your own style.</p>

    </div>

</body>

</html>