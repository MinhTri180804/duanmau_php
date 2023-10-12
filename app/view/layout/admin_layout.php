<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo _VENDER_ROOT ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo _CSS_ROOT ?>sb-admin-2.min.css" rel="stylesheet">
    <style>

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        button.btn-new {
            border: none;
            background-color: green;
            color: #fff;
        }

        .list_action {
            list-style: none;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 0;
            gap: 20px;
        }

        .list_action li {
            padding: 10px ;
            width: 120px;
            text-align: center;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s;
        }

        .list_action li:hover {
            opacity: 1;
        }

        .list_action li a {
            color: #fff;
            text-decoration: none;
        }

        .action_delete {
            background-color: red;
        }

        .action_edit {
            background-color: blue;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once 'app/view/admin/template/sidebar.php' ?>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once 'app/view/admin/template/topbar.php' ?>
                <!-- End Topbar -->

                <!-- Begin Page Content -->
                <?php $this->render($content, $sub_content) ?>
                <!-- End Begin Page Content -->
            </div>
            <!-- End Main Content -->

            <!-- Footer -->
            <?php require_once 'app/view/admin/template/footer.php' ?>
            <!-- End Footer -->
        </div>
        <!-- End Content Wrapper -->
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo _VENDER_ROOT ?>jquery/jquery.min.js"></script>
    <script src="<?php echo _VENDER_ROOT ?>bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo _VENDER_ROOT ?>jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo _JS_ROOT ?>sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo _VENDER_ROOT ?>chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo _JS_ROOT ?>chart-area-demo.js"></script>
    <script src="<?php echo _JS_ROOT ?>chart-pie-demo.js"></script>

</body>

</html>