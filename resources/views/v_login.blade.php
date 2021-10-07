@if (session('logged')){
    {!! redirect('home') !!}
    }
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Justice League Base</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <table class="table table-bordered table-dark" style="margin-top:200px">
                    <tr>
                        <td>
                            <img src="../images/logo.png" width="30%" style="display:block; margin-left:auto; margin-right:auto">
                            <h2>
                                <center>Justice League HQ</center>
                            </h2>
                            <h5>
                                <center>Sign In</center>
                            </h5>
                            <form action="log" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" class="form-control" placeholder="Enter Title" name="title">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input type="password" class="form-control" placeholder="Enter password"
                                        name="pwd">
                                </div>
                                <button type="submit" class="btn btn-primary">Log In</button>

                                <p style="font-size:10px; float: right;"><br>Copyright © 2021 DC | All Rights Reserved.</p>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4"></div>
        </div>


    </div>

</body>

</html>
