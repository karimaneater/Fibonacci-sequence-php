<?php include('fibonacci.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <form action="" method="POST">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="number" id="floatingInput" min="1" max="20" placeholder="Enter a number between 1 and 20">
                    <label for="floatingInput">Enter a number between 1 and 20</label>
                </div>
                <button class="btn btn-primary" type="submit">Get Answer!</button>
            </form>
            <?php if (isset($fibonacciSequence)): ?>
                <h3>Fibonacci Sequence:</h3>
                <p><?php echo implode(', ', $fibonacciSequence); ?></p>
            <?php endif; ?>
        </div>
    </div>
   
</body>
</html>