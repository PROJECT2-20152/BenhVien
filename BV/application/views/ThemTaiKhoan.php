<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Students Example</title>
    </head>
    <body>

        <h1>Thêm Tài Khoản</h1><hr/>
        <div class="form-group">
            <label for="fn">Tài Khoản</label>
            <input type="text" class="form-control" id="fn" name="fn">
        </div>
        <div class="form-group">
            <label for="fn">Mật Khẩu</label>
            <input type="text" class="form-control" id="ln" name="ln">
        </div>
        <div class="select">
            <label for="ag">Quyền</label>
            <p>  

                <?php
                $data = array(
                    'admin' => 'admin',
                    'Bác sĩ' => 'Bác sĩ',
                    'Nhân viên' => 'Nhân viên'
                );
                echo form_dropdown('ag', $data, 'admin', 'style="width: 120px;height: 30px; font-size: 17px;"');
                ?>
            </p>
        </div>  
        <?php echo form_open('TaiKhoan/save', 'role="form"'); ?>

    </body>
</html>