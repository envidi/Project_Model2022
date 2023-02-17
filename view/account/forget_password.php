<?php
$email = isset($email ) ? $email : "";


?>

<div class="contain_product_sidebar w-100 d-f jf-b">
    <!-- ----contain product--- -->
    <div class="contain_product_main d-f jf-c al-t ">

        <form class="update_account" action="index.php?act=forget_password&&header=sign_in" method="post">
            <h2>Quên mật khẩu</h2>



            <div class="mt d-f f-d mb">
                <label for="email">Email</label>
                <input type="email" placeholder="Please enter your email" id="email" class="email" name="email" value="<?= $email ?>" />
            </div>

            <?php if (isset($sendPass)  && $sendPass !== "") {

            ?>
                <div style="color:green;font-weight:700" class="mt d-f f-d mb">
                    <?= $sendPass ?>

                </div>
            <?php
            } else {

            ?>
                <div style="color:red;font-weight:700" class="mt d-f f-d mb">
                    <?php echo $blank; ?>

                </div>
            <?php

            }
            ?>


            <div class="d-f">
                <div class="sign-in mr">
                    <input class="btn_submit_edit" type="submit" name="sendEmail" value="Send" />
                </div>
                <div class="sign-in">
                    <button class="btn_submit_edit backEdit">
                        <a style="text-decoration : none;" href="index.php?header=sign_in&&id=<?= $id ?>">
                            Back
                        </a>
                    </button>
                </div>
            </div>

        </form>









    </div>
    <!-- ---side_bar--- -->
    <?php
    include "./view/box_right.php";
    ?>
</div>