<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Result</title>
</head>
<body>
    <main>
        <pre>
            <?php
                ini_set("display_errors", 1);
                ini_set("display_startup_errors", 1);
                error_reporting(E_ALL);

                function show()
                {
                    echo "Hi " . htmlspecialchars($_POST['name']) . ".";
                    echo "You are " . (int) $_POST['age'] . " years old.";
                }

                if (isset($_POST["action"])) {
                    print_r($_POST);
                    //clicked();
                    $_POST["action"]();
                }
            ?>
        </pre>
    </main>
</body>
</html>
