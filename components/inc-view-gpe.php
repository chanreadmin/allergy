<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">GPE</h5>
        <a href="add-gpe.php?pid=<?php $pid = intval($_GET['pid']);
        echo $pid; ?>" style=" float:right" class="btn btn-primary btn-sm">Add Follow
            Up</a>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Age</th>
                        <th>Center Code</th>
                        <th>Contact</th>
                        <th>Updated date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sid = intval($_GET['pid']);
                    $users = $_SESSION['adminName'];
                    $myquery = mysqli_query($conn, "SELECT *
                                                    FROM patients INNER JOIN tbl_gpe ON patients.patient_id = tbl_gpe.patient_id Where tbl_gpe.updatedBy = '$users' AND tbl_gpe.patient_id = '$sid'");
                    while ($row = mysqli_fetch_array($myquery)) {

                        ?>
                        <tr>
                            <td>
                                <?php echo htmlentities($row['patient_name']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['age']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['centerCode']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['mobile']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['createdAt']) ?>
                            </td>
                            <td>
                                <a href="view-gpe.php?pid=<?php echo $sid; ?>&&sid=<?php echo $row['id']; ?>"
                                    class=" btn btn-primary btn-sm">view</a>
                                |
                                <a class="btn btn-danger btn-sm"
                                    href="edit-gpe.php?pid=<?php echo $sid; ?>&&sid=<?php echo $row['id']; ?>">
                                    Edit</a>

                            </td>

                        </tr>
                    <?php } ?>
            </table>
        </div>
    </div>
</div>