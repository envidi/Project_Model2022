<?php
 ob_start();
session_start();
include "../../model/pdo.php";
include "../../model/comment.php";
include "../../model/account.php";
$id_pro = $_REQUEST['id_pro'];
$comment = select_comment_all($id_pro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/editAccount.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/productDetail.css">
</head>

<body>


    <div class="product_category contain_comment">
        <ul>
            <li>Comment</li>
            <table>
                <?php 
                $count ;
                for ($i = 0; $i < count($comment); $i++) {
                    $user_id = $comment[$i]['customer_id'];
                    $content = $comment[$i]['content'];
                    $date = $comment[$i]['date'];
                    $userAccount = checkUserId($user_id);
                    $userName = $userAccount['user'];
                   $count = $i;
                ?>
                    <tr class="d-f f-d mt mb1" style="padding-left: 10px;">                        
                        <td style="font-size: 18px;font-weight:700"><?= $userName ?></td>
                        <td><?= $content ?></td>
                        <td><?= $date ?></td>                                               
                    </tr>

                <?php }  ?>

            </table>
            <!--  -->
            <li style="position:<?php if($count > 2){echo "sticky";}else{echo "absolute";}?>;bottom:0px;box-sizing:border-box;width:100%">
                <form action="<?= $_SERVER['PHP_SELF'];  ?>" class="d-f " method="POST">
                    <input hidden type="text" id="search_product" name="id_pro" value="<?= $id_pro ?>">
                    <textarea class="comment_textarea" name="comment" id="" cols="50" rows="4" placeholder="Nhập phần bình luận của bạn ở đây"></textarea>
                    <button class="comment_product_btn">
                        <div class="btn_send_comment">
                            <input type="submit" value="Send" name="sendComment">
                        </div>
                    </button>
                </form>
            </li>
            
        </ul>        
    </div>
    <?php   
    if (isset($_POST['sendComment']) && $_POST['sendComment']) {
        $id_product = isset($_POST['id_pro']) ? $_POST['id_pro'] : 0;
        $user_id = $_SESSION['userId']['id'];
        $content = isset($_POST['comment']) ? $_POST['comment'] : 0;
        $date_comment = date('H:i:sa d/m/Y');
        insert_comment($content, $user_id, $id_product, $date_comment);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    // ob_end_flush();
    ?>
</body>
</html>
