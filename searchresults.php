<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fullname = $_POST["fullname"];

    if(!$fullname){
        header("Location: search.php");
    }
    try {
        require_once "includes/dbh.inc.php";
        $query = "SELECT * FROM users WHERE fullname = :fullname;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":fullname", $fullname);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
        
    } catch (PDOException $error) {
        die("Something went wrong: " . $error->getMessage());
    }
}else{
    header("Location: search.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="signup">
        <h3>Search results:</h3>

        <?php
            if(empty($results)) {
                echo "Array is empty";
            }else{
                foreach ($results as $result) {
                    echo $result["email"];
                }
            }
        ?>
    </div>
</body>
</html>