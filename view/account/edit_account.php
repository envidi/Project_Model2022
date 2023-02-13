<div class="contain_product_sidebar w-100 d-f jf-b">
    <!-- ----contain product--- -->
    <div class="contain_product_main d-f jf-c al-t ">

        <form class="update_account" action="index.php?act=update_account&&header=sign_in" method="post">
            <h2>Cập nhật tài khoản</h2>
                         
            <input type="text" name="id" hidden value="<?= $id ?>" />
       
            <div class="mt d-f f-d">
                <label for="email">Email</label>
                <input type="email" placeholder="Please enter your email" id="email" class="email" name="email" value="<?= $email ?>" />
            </div>
            <div class="mt d-f f-d">
                <label for="name">Name</label>
                <input type="text" placeholder="Please enter your name" id="name" class="name" name="name" value="<?= $userName ?>" />
            </div>


            <div class="mt mb d-f f-d">
                <label for="pwd">Password </label>
                <input type="password" placeholder="Please enter your password" id="pwd" class="pwd" name="password" value="<?= "" ?>" />
                <div class="d-f mt1">
                    <label class="mr" for="">Show Password</label>
                    <input type="checkbox" onclick="myFunction()" />
                </div>

            </div>
            <div class="mt d-f f-d">
                <label for="name">Số điện thoại</label>
                <input type="text" placeholder="Nhập số điện thoại của bạn" id="name" class="tele" name="tele" value="<?= $tele ?>" />
            </div>
            <div class="mt d-f f-d">
                <label for="name">Địa chỉ</label>
                <input type="text" placeholder="Nhập địa chỉ của bạn" id="name" class="address" name="address" value="<?= $address ?>" />
            </div>
            <div style="color: green" class=" d-f f-d mb">
              <?php
                if(isset($_GET['notify'])){
                    echo $_GET['notify'];
                }
              ?>
            </div>

            <div class="d-f">
                <div class="sign-in mr">
                    <input class="btn_submit_edit" type="submit" name="update" value="Update" />
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