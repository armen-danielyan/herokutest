<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>This is my first Heroku website</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href="style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <h1><?php echo "HEADER"; ?></h1>
        </header>
        <nav class="row">
            <h1><?php echo "MENU"; ?></h1>
        </nav>
        <section class="row">
            <div class="col-md-8">
                <div class="row">
                    <h1><?php echo "BODY"; ?></h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <h1><?php echo "SIDEBAR"; ?></h1>
                </div>
            </div>
        </section>
        <footer class="row">
            <h1><?php echo "FOOTER"; ?></h1>
        </footer>
    </div>
</body>
</html>
