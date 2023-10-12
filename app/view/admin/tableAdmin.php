<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $title ?></h6>

            <button class="btn-new">
                Add new
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Create Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Create Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $STT = 0;
                        foreach ($customers as $customer) {
                            extract($customer);
                            $STT++;
                            echo '
                                    <tr>
                                        <td>'.$STT.'</td>
                                        <td>'.$fullname.'</td>
                                        <td>'.$username.'</td>
                                        <td>'.$password.'</td>
                                        <td>'.$age.'</td>
                                        <td>'.$gender.'</td>
                                        <td>'.$phone.'</td>
                                        <td>'.$address.'</td>
                                        <td>'.$create_date.'</td>
                                    </tr>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>