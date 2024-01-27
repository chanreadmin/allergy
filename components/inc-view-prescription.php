<div class="card">
    <div class="card-header align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Prescription</h4>
        <div class="flex-shrink-0">
            <a href="add-prescription.php?pid=<?php $tid = intval($_GET['pid']);
            echo $tid; ?>" class="btn btn-danger">Add
                Drugs</a>
            <a href="components/pdf-prescription.php?pid=<?php $tid = intval($_GET['pid']);
            echo $tid; ?>" class="btn btn-primary">PDF</a>
        </div>
    </div>
    <div class="card-body">
        <div class="live-preview">
            <div class="table-responsive">
                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Drug Name</th>
                            <th>Dose</th>
                            <th>Duration</th>
                            <th>Instruction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $gid = intval($_GET['pid']);
                        $myquery = mysqli_query($conn, "Select * from tbl_prescription where patient_id = '$gid' AND isActive = '1' ORDER BY id Desc");
                        while ($row = mysqli_fetch_array($myquery)) {
                            $datetimeString = $row['createdAt'];
                            // Convert the string to a DateTime object
                            $dateTime = new DateTime($datetimeString);
                            // Format and display only the date
                            $dates = $dateTime->format('d-m-Y');
                            ?>
                        <tr>
                            <td>
                                <?php echo $dates; ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['drug_name']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['dose']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['duration']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['instruction']) ?>
                            </td>
                            <td>
                                <a href="patient-profile.php?pid=<?php echo htmlentities($row['patient_id']); ?>&&sid=<?php echo htmlentities($row['id']); ?>&&action=del"
                                    onclick="return confirm('Do you realy want to delete ?')"
                                    class="btn btn-danger">Archive</a>
                            </td>

                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Old Prescription</h4>
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
                            <th>Drug Name</th>
                            <th>Dose</th>
                            <th>Duration</th>
                            <th>Insctruction</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $gid = intval($_GET['pid']);
                        $myquery = mysqli_query($conn, "Select * from tbl_prescription where patient_id = '$gid' AND isActive = '0' ");
                        while ($row = mysqli_fetch_array($myquery)) {
                            $dt = $row['createdAt'];
                            // Convert the string to a DateTime object
                            $dts = new DateTime($dt);
                            // Format and display only the date
                            $odates = $dts->format('d-m-Y');
                            ?>
                        <tr>
                            <td>
                                <?php echo $odates; ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['drug_name']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['dose']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['duration']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['instruction']) ?>
                            </td>
                            <!-- <td>
                                    <a href="view-medication.php?pid=<?php echo htmlentities($row['patient_id']); ?>&&sid=<?php echo htmlentities($row['id']); ?>&&action=del"
                                        onclick="return confirm('Do you reaaly want to delete ?')"
                                        class="btn btn-danger">Delete</a>
                                </td> -->

                        </tr>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>