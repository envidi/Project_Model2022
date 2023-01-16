<main class="w-100">
            <div class="add_new w-100">
                Thêm mới loại hàng hóa
            </div>
            <label style="font-weight: 500;margin: 10px 0px;display: block;" for="">Mã loại</label>
            <div class="id_category">
                auto number
            </div>
            <form action="index.php?act=add_category" class="d-f f-d" method="POST">
                <label for="name_category">Tên loại</label>
                <input type="text" id="name_category" autofocus name="name_category">
                <div class="button_form">
                    <input type="submit"  class="btn_name_category" name="add_new" value="Them moi"  />
                                            
                    <input type="reset" class="btn_name_category" value="reset" />
                                                                
                       <a href="index.php?act=list_category"><input type="button" type="text" value=" Danh sách"></a>
                    
                </div>
                <?php
                    if(isset($notify) && ($notify != "")){
                        echo $notify;
                    }
                ?>
            </form>
        </main>
    </div>