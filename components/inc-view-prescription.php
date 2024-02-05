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
                        $myquery = mysqli_query($conn, "SELECT
    MAX(drug_name) AS drug_name,
    MAX(dose) AS dose,
    MAX(duration) AS duration,
    MAX(instruction) AS instruction,
    MAX(centerCode) AS centerCode,
    MAX(centerName) AS centerName,
    MAX(patient_id) AS patient_id,
    MAX(updatedBy) AS updatedBy,
    visit,
    MAX(createdAt) AS createdAt
FROM
    tbl_prescription
WHERE
    patient_id = '$gid'
GROUP BY
    visit ORDER BY visit DESC;");
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