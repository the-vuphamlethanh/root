<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $contacts = array( 
        array (
            "name"=> "Peter Parker",
            "email"=>"Peterparker@gmail.com"
        ),
        array(
            "name"=> "Clark Kent",
            "email"=>"Clarkkent@gmail.com"
        ),
        array (
            "name"=>"Harry Potter",
            "email"=> "harrypotter@gmail.com"
        )
        );
        echo "Peter Parker's Email-id is:" .$contacts[0]["email"];
    ?>
    
</body>
</html>