

<?php
    include 'connect.php';

    if( isset($_POST['item']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['quality'])
        isset($_POST['img_upload'])) {

        $conn = db2_connect($database, $dbusername, $dbpassword);

        if($conn){
            
            $item = $_POST['item'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quality = $_POST['quality'];
            $img = $_POST['img_upload'];

            
            $insertsql = "";
            $stmt = db2_prepare($conn, $insertsql);

            if($stmt){
                $result = db2_execute($stmt);

                if($result){
                    echo "success";
                    db2_close($conn);
                }
                else {
                    db2_stmt_errormsg($stmt);
                    db2_close($conn);
                }
            }
        }
    }
?>
