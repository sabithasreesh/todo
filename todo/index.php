<?php
require_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Todo</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/4-col-portfolio.css" rel="stylesheet">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            var base_url = "<?php echo $base_url; ?>";
        </script>
    </head>
    <body>
        <!-- Form Modal- Add Todos -->
        <div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="popupLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="popupLabel">Form</h3>
                    </div>
                    <div class="modal-body">

                        <form role="form" name="todo_form" id="todo_form" action=""  method="post" >
                            <h2>Add Todo</h2>

                            <div class="form-group">
                                <label for="betreff">Betreff*</label>
                                <input type="text" class="form-control" name="betreff" id="betreff" placeholder="" required>
                                <div id="validation_div" class="hide"> Please enter Betreff </div>
                            </div>

                            <div class="form-group">
                                <label for="beschreibung">Beschreibung</label>
                                <textarea name="beschreibung" id="beschreibung" class="form-control" rows="5"></textarea>
                                <input type="hidden" name = "hiddenid_form" id  ="hiddenid_form"  />
                            </div>                            
                            <br>
                            <input type="button" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary btn-lg btn-block" >
                            <input type="button"  name="btnupdate" id="btnupdate" value="Update" class="btn btn-primary btn-lg btn-block hide" >
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <!-- Delete Modal Todos -->

        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="popupLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title" id="popupLabel">Form</h3>
                    </div>
                    <div class="modal-body">

                        <form role="form" name="delete_form" id="delete_form" action="" method="post" >

                            <div class="form-group">
                                Do you want to delete the record ?
                            </div>

                            <input type="hidden" name = "delete_id" id  ="delete_id"  />                      
                            <br>
                            <input type="button" name="confirm_btn" id="confirm_btn" value="Yes" class="btn btn-primary btn-lg btn-block" >
                            <input type="button"  name="not_confirm" id="not_confirm" value="No" class="btn btn-primary btn-lg btn-block" >
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Todo</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Todo's                     
                    </h1>
                </div>
            </div>
            <!-- /.row -->
           <div id="todolist" class="panel panel-default">

            </div>
            <hr>
            <hr>
            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2016</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>
        </div>
        <!-- /.container -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript -->
        <script src="js/script.js"></script>
    </body>
</html>
