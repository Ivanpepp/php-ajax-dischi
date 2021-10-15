<!DOCTYPE html>
<?php require_once __DIR__ . '/db/dataBase.php' ; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>PHP AJAX DISCHI</title>
</head>
<body>
    <header>
        <div class="heading">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="Spotify main logo">
        </div>
    </header>
    <main>
        <div class="my_container">
            <div class="my_super-row">
            <?php foreach($dischi as $disco){ ?>
                
                        <div class="card">
                            <img src="<?php echo $disco['poster']; ?>" alt="<?php echo $disco['title']; ?>">
                            <h1><?php echo $disco['title']; ?></h1>
                            <h2><?php echo $disco['author']; ?></h2>
                            <h3><?php echo $disco['genre']; ?></h3>
                            <h4><?php echo $disco['year']; ?></h4>
                        </div>
                
            <?php }; ?>
            
            </div>
        </div>

    </main>
</body>
</html>