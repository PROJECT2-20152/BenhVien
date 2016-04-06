<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 50;
                border-radius: 0;
            }
            .jumbotron {
                margin-bottom: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;} 
                .modal-header-primary {
                    color:#fff;
                    border-bottom:1px solid #eee;
                    background-color: #20b2aa;
                    -webkit-border-top-left-radius: 5px;
                    -webkit-border-top-right-radius: 5px;
                    -moz-border-radius-topleft: 5px;
                    -moz-border-radius-topright: 5px;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }
            }
        </style>
    </head>
    <body>
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Quản Lý Tài Khoản</h1>                 

            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>                    
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/views/Admin.html"><span class="glyphicon glyphicon-log-in"></span> Thoát</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">

                </div>
                <div class="col-sm-8 text-left"> 
                    <div class="container">
                        <div class="table-responsive">
                            <a class="btn btn-info btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Thêm mới</button></a>
                            <table  class="table table-bordered table-hover table-striped">
                                
                                <thead>
                                    <tr>
                                        <th width="200 px">Tài Khoản</th>
                                        <th>Mật Khẩu</th>
                                        <th>Quyền</th>
                                        <th with="50 px">Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($data_get == NULL) {
                                        ?>
                                    <div class="alert alert-info" role="alert"></div>
                                    <?php
                                } else {
                                    foreach ($data_get as $row) {
                                        ?>
                                        <tr>

                                            <td><?php echo $row->TaiKhoan; ?></td>
                                            <td><?php echo $row->MatKhau; ?></td>
                                            <td><?php echo $row->Quyen; ?></td>
                                            <td>
                                                <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal1" href="<?php echo site_url('TaiKhoan_Controller/edit/' . $row->idTaiKhoan); ?>" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Chỉnh sửa</button></a>
                                                <!-- Modal --> <div class="modal fade" id="myModal1" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title"></h4>
                                                            </div>
                                                            <div class="modal-body"> 



                                                            </div>
                                                            <div class="modal-footer">                                                   

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <a data-href="<?php echo site_url('TaiKhoan_Controller/delete/' . $row->idTaiKhoan); ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Xóa</button></a>
                                                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4>Xóa tài khoản</h4>   
                                                            </div>
                                                            <div class="modal-body">

                                                                <p>Bạn có chắc chắn muốn xóa không?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a  button type="button" class="btn btn-default btn-ok">Có</a>
                                                                <button type="button" class="btn btn-default " data-dismiss="modal">Không</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </td>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tr>        
                                </tbody>
                            </table>
                            

                            <!-- Modal --> <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header modal-header-primary">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h1>Thêm Tài Khoản</h1><hr/>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body modal-body-primary">                                

                                            <?php
                                            $attribute = array("id" => "form");
                                            echo form_open('TaiKhoan_Controller/add', $attribute);
                                            ?>
                                            <div class="form-group">
                                                <label for="tk">Tài Khoản</label>
                                                <input type="text" class="form-control" id="tk" name="tk" data-validetta="required">
                                            </div>
                                            <div class="form-group">
                                                <label for="mk">Mật Khẩu</label>
                                                <input type="text" class="form-control" id="mk" name="mk">
                                            </div>
                                            <div class="select">
                                                <label for="q">Quyền</label>
                                                <p>  

                                                    <?php
                                                    $data = array(
                                                        'admin' => 'admin',
                                                        'Bác sĩ' => 'Bác sĩ',
                                                        'Nhân viên' => 'Nhân viên'
                                                    );
                                                    echo form_dropdown('q', $data, 'admin', 'style="width: 120px;height: 30px; font-size: 17px;"');
                                                    ?>
                                                </p>
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" name="mit" class="btn btn-primary" id ="1" value="Thêm">
                                            <input button type="button" data-dismiss="modal" class="btn btn-success" value="Hủy bỏ">

                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-2 sidenav">


                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <p>Copyright @2016 Đại học Bách Khoa Hà Nội</p>
        </footer>

    </body>
    <script>
        $('#myModal2').on('show.bs.modal', function (e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
        $(document).ready(function () {
            $('#form').formValidation({
                framework: 'bootstrap',
                excluded: ':disabled',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    tk: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required'
                            }
                        }
                    },
                    mk: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
                        }
                    }
                }
            });
        });
        $('#myModal').on('hidden.bs.modal', function () {
            $('#form').formValidation('resetForm', true);
        });
    </script>
</html>
