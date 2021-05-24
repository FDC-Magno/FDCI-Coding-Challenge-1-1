<?php
    require 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">PigLatin Word Converter</h1>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="mb-3">
                                <label for="word" class="form-label">Words</label>
                                <input type="text" name="word" class="form-control" id="word" value="<?php echo $word; ?>" aria-describedby="wordHelpBlock">
                                <div id="wordHelpBlock" class="form-text" style="color: gray; font-size: 14px;">
                                    Enter words that are separated by spaces.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-md-4 col-sm-12">
                <?php
                    if(!empty($converted_word)) { ?>
                        <div class="alert alert-success" role="alert">
                            <b>Generated Word:</b></br><?php echo $converted_word ?>
                        </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>