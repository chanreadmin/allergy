<table id="buttons-datatables" class="display table table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Drug Name</th>
            <th>Dose</th>
            <th>Duration</th>
            <th>Adverse Effect</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $gid = intval($_GET['pid']);
        $myquery = mysqli_query($conn, "Select * from tbl_medication where patient_id = '$gid'");
        while ($row = mysqli_fetch_array($myquery)) {

            ?>
            <tr>
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
                    <?php echo htmlentities($row['adverse']) ?>
                </td>

            </tr>
        <?php } ?>
</table>