<html>
    <body>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"> 
                <p>Bạn phải nhập đầy đủ thông tin</p>               
                <div class="modal-footer">                    
                    <input type="submit" name="mit" class="btn btn-primary" value="OK">
                    <input button type="button" onclick="location.href = '<?php echo site_url('TaiKhoan_Controller/add') ?>'" data-dismiss="modal" class="btn btn-success" value="Hủy bỏ">
                    </form>
                    <?php echo form_close(); ?>
                </div>
                </body>
                </html>
