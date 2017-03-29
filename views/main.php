<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ShareBoard</title>
    
    <link rel="stylesheet" href="/phpcourse/project2/assets/css/bootstrap.min.css">  
    <link rel="stylesheet" href="/phpcourse/project2/assets/css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Shareboard</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo ROOT_URL; ?>">Accueil</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>shares">Posts</a></li>
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                   <?php if(isset($_SESSION['isLoggedIn'])) : ?>
                       <li><a href="<?php echo ROOT_URL; ?>">Bienvenue <?php echo $_SESSION['userData']['name']; ?> </a></li>
                        <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
                   <?php else : ?>
                    <li><a href="<?php echo ROOT_URL; ?>users/login">Connexion</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>users/register">Inscription</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">

        <div class="row">
           <?php Message::display();?>
            <?php require($view); ?>
        </div>

    </div>
    <!-- /.container -->


</body>

</html>