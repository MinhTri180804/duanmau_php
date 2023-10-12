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
                            <th>Action</th>
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
                            <th>Action</th>
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
                            ($gender == 0) ? $gender = 'Nữ' : $gender = 'Nam';
                            $STT++;
                            echo '
                                    <tr>
                                        <td><input type="checkbox" value="' . $id . '" class="check_action"></td>
                                        <td>' . $STT . '</td>
                                        <td>' . $fullname . '</td>
                                        <td>' . $username . '</td>
                                        <td>' . $password . '</td>
                                        <td>' . $age . '</td>
                                        <td>' . $gender . '</td>
                                        <td>' . $phone . '</td>
                                        <td>' . $address . '</td>
                                        <td>' . $create_date . '</td>
                                    </tr>
                                ';
                        }
                        ?>
                    </tbody>
                </table>
                <ul class="list_action">
                    <li class="action_delete"><a href="">Delete</a></li>
                    <li class="action_edit"><a href="">Edit</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    const actionDelete = document.querySelector('.action_delete');
    actionDelete.addEventListener('click', (e) => {
        e.preventDefault();
        let listId = getChecked();
        if (listId.length == 0) {
            alert('Vui lòng chọn ít nhất 1 bản ghi để xóa');
        } else {
            let listIdFormat = '';
            if (listId.length > 1) {
                listIdFormat = listId.join('-');
            } else {
                listIdFormat = listId.toString();
            }
            window.location.href = 'deleteUser?listId=' + listIdFormat;
        }
    })

    const actionEdit = document.querySelector('.action_edit');
    actionEdit.addEventListener('click', (e) => {
        e.preventDefault();
        let id = getChecked();
        if (id.length > 1) {
            alert('Vui lòng chỉ chọn 1 bản ghi để sửa');
        } else {
            console.log(id[0]);
        }
    })

    function getChecked() {
        let listCheckbox = document.querySelectorAll('.check_action');
        let listId = [];
        listCheckbox.forEach((checkbox) => {
            if (checkbox.checked) {
                listId.push(checkbox.value);
            }
        })

        return listId;
    }
</script>