<html>
    <body>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"> 
                <?php echo form_open('TaiKhoan_Controller/update', 'role="form"'); ?>
                <div class="form-group">
                    <h1>Cập Nhật Tài Khoản</h1><hr/>
                    <label for="tk">Tài Khoản </label>
                    <input type="text" class="form-control" id="tk" name="tk" value="<?php echo $tk ?>">
                </div>
                <div class="form-group">
                    <label for="mk" >Mật Khẩu</label>
                    <input type="text" class="form-control" id="mk" name="mk" value="<?php echo $mk ?>">
                </div>
                <div class="form-group">
                    <label for="q">Quyền</label>
                    <p>
                        <?php
                        $data = array(
                            'admin' => 'admin',
                            'Bác sĩ' => 'Bác sĩ',
                            'Nhân viên' => 'Nhân viên'
                        );
                        echo form_dropdown('q', $data, 'q', 'style="width: 120px;height: 30px; font-size: 17px;"');
                        ?>
                    </p>
                </div>  
                <div class="modal-footer">
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <input type="submit" name="mit" class="btn btn-primary" value="Cập nhật">
                    <input button type="button" onclick="location.href = '<?php echo site_url('TaiKhoan_Controller') ?>'" data-dismiss="modal" class="btn btn-success" value="Hủy bỏ">
                    </form>
                    <?php echo form_close(); ?>
                </div>
                </body>
                </html>
