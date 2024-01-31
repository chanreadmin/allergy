<div class="card">
    <div class="card-header align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Prescription</h4>
        <div class="flex-shrink-0">
            <a href="add-prescription.php?pid=<?php $tid = intval($_GET['pid']);
            echo $tid; ?>" class="btn btn-danger">Add
                Prescription</a>
            <!-- <a href="components/pdf-prescription.php?pid=<?php $tid = intval($_GET['pid']);
            echo $tid; ?>" class="btn btn-primary">PDF</a> -->
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
                            <th>Patient Id</th>
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
WHERE row_num = 1 && patient_id = '$gid' ORDER BY visit DESC");

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