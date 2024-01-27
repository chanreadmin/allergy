<div class="live-preview">
    <div class="table-responsive">
        <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>CBC</th>
                    <th>hb</th>
                    <th>tc</th>
                    <th>dc</th>
                    <th>N</th>
                    <th>E</th>
                    <th>L</th>
                    <th>M</th>
                    <th>Platelets</th>
                    <th>ESR</th>
                    <th>Serum Creatinine</th>
                    <th>Serum IgE Levels</th>
                    <th>C3, C4 Levels</th>
                    <th>ANA</th>
                    <th>Urine Routine</th>
                    <th>Allergy Panel</th>

                </tr>
            </thead>
            <?php
            $gid = intval($_GET['pid']);
            $myquery = mysqli_query($conn, "Select * from tbl_investigation where patient_id = '$gid'");
            while ($row = mysqli_fetch_array($myquery)) {

                ?>
            <tr>
                <td>
                    <?php echo htmlentities($row['createdAt']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['cbc']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['hb']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['tc']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['dc']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['neutrophils']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['eosinophil']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['lymphocytes']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['monocytes']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['platelets']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['esr']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['serum_creatinine']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['serumig']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['clevel']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['ana']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['urine_routine']) ?>
                </td>
                <td>
                    <?php echo htmlentities($row['allergy_panel']) ?>
                </td>

            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>