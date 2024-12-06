<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel & Mysql</title>
</head>
<body>
    <div>
        <?php
            try {
                if(DB::connection()->getPdo()){
                    echo "Successfully connected to the Database. \nAnd the name of the Database is ".DB::connection()->getDatabaseName();
                }
            } catch (\Exception $e) {
                echo "Failed to connect to the Database: ".$e->getMessage();
            }            
        ?>
    </div>
</body>
</html>