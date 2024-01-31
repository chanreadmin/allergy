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
                            <th>visit</th>
                            <th>Duration</th>
                            <th>Updated By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                                    $gid = intval($_GET['pid']);
                                                    // $myquery = mysqli_query($conn, "Select createdAt, visit, duration, instruction from tbl_prescription GROUP BY visit ORDER BY visit DESC where patient_id = '$gid' ");
                                                    $myquery = mysqli_query($conn, "SELECT drug_name,
  dose,
  duration,
  instruction,
  centerCode,
  centerName,
  patient_id,
  updatedBy,
  visit,
  createdAt
FROM (
  SELECT
    drug_name,
    dose,
    duration,
    instruction,
    centerCode,
    centerName,
    patient_id,
    updatedBy,
    visit,
    createdAt,
    ROW_NUMBER() OVER (PARTITION BY visit ORDER BY createdAt) AS row_num
  FROM tbl_prescription
) AS ranked
WHERE row_num = 1 && patient_id = '$gid'");

                                                    while ($row = mysqli_fetch_array($myquery)) {

                                                        ?>
                        <tr>
                            <td>
                                <?php echo htmlentities($row['createdAt']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['visit']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['patient_id']) ?>
                            </td>
                            <td>
                                <?php echo htmlentities($row['updatedBy']) ?>
                            </td>
                            <td>
                                <a
                                    href="view-prescription.php?pid=<?php echo $gid; ?>&&sid=<?php echo htmlentities($row['visit']); ?>">
                                    View</a>
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