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
            /* Remove the navbar's default rounded borders and increase the bottom margin */ 
            .navbar {
                margin-bottom: 50px;
                border-radius: 0;
            }

            /* Remove the jumbotron's default bottom margin */ 
            .jumbotron {
                margin-bottom: 0;
            }

            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }
        </style>
    </head>
    <body>

        <div class="jumbotron">
            <div class="container text-center">
                <img src="Admin.png" width="800" height="236"> <h1>Welcome to Admin page</h1>


            </div>
        </div>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">    
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Quản lý tài khoản</div>
                        <div class="panel-body"> <a href="TaiKhoan_Controller"> <img src="User.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
                        <div class="panel-footer"> </div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-danger">
                        <div class="panel-heading">Quản lý bác sĩ</div>
                        <div class="panel-body"><img src="Doctor.png" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-success">
                        <div class="panel-heading">Quản lý nhân viên</div>
                        <div class="panel-body"><img src="nvtn.png" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="container">    
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Quản lý dịch vụ</div>
                        <div class="panel-body"><img src="dv.png" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-default">
                        <div class="panel-heading">Quản lý khoa điều trị</div>
                        <div class="panel-body"><img src="khoa.png" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <div class="col-sm-4"> 
                    <div class="panel panel-primary">
                        <div class="panel-heading">BLACK FRIDAY DEAL</div>
                        <div class="panel-body"><img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div><br><br>

        <footer class="container-fluid text-center">
            <p>Copyright @2016 Đại học Bách Khoa Hà Nội</p>  
            <form class="form-inline">Get deals:
                <input type="email" class="form-control" size="50" placeholder="Email Address">
                <button type="button" class="btn btn-danger">Sign Up</button>
            </form>
        </footer>

    </body>
</html>