<html>
    <body>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"> 
                
                <div class="form-group">
                    <h1>Thông Tin Tài Khoản</h1><hr/>
                    <label for="id">Mã Tài Khoản: <?php echo $id ?> </label>                    
                </div>
                 <div class="form-group">
                    <label for="tk">Tài Khoản: <?php echo $tk ?> </label>  
                    
                </div>
                <div class="form-group">
                    <label for="mk" >Mật Khẩu: <?php echo $mk ?></label>
                    
                </div>
                <div class="form-group">
                    <label for="q">Quyền: <?php echo $q ?></label>
                   
                </div>  
                <div class="modal-footer">
                    
                    <input button type="button" onclick="location.href = '<?php echo site_url('TaiKhoan_Controller') ?>'" data-dismiss="modal" class="btn btn-default" value="OK">
                    
                    </form>
                    <?php echo form_close(); ?>
                </div>
                </body>
                </html>

