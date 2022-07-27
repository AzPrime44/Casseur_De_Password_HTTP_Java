<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="ml-5 mt-5">
        <form action="traitement.php" method="post">


            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Motdepasse" class="form-control w-50 mb-2 form-control-lg input" />
            </div>

            <button type="submit" class="btn btn-primary">
                SignUp
            </button>
        </form>
    </div>

</body>

</html>