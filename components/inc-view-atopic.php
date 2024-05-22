<div class="card">
    <div class="card-header align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Atopic Dermatis</h4>
        <a href="atopic-dermatis.php?pid=<?php $pid = intval($_GET['pid']);
        echo $pid; ?>" style="float:right" class="btn btn-primary btn-sm">Add Follow
            Up</a>
        <div class="flex-shrink-0">
        </div>
    </div>
    <div class="card-body">
        <div class="live-preview">
            <div class="table-responsive">
                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>symptoms</th>
                            <th>centerCode</th>
                            <th>centerName</th>
                            <th>patient_id</th>
                            <th>updatedBy</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $gid = intval($_GET['pid']);
                        $myquery = mysqli_query($conn, "Select * from tbl_atopic where patient_id = '$gid'");
                        while ($row = mysqli_fetch_array($myquery)) {
                            ?>
                        <tr>
                            <td>
                                <?php echo htmlentities($row['createdAt']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['symptoms']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['centerCode']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['centerName']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['patient_id']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['updatedBy']) ?>
                            </td>
                            <td>
                                <a href="atopic-edit.php?pid=<?php echo $gid; ?>&&sid=<?php echo $row['id']; ?>"
                                    class="btn btn-primary btn-sm">View</a> <a
                                    href="atopic-edit.php?pid=<?php echo $gid; ?>&&sid=<?php echo $row['id']; ?>"
                                    class="btn btn-danger btn-sm">Edit</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>