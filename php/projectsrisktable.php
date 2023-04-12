<div class="border p-3" id="prt">
    <?php include 'php/risktables.php';
    if (mysqli_num_rows($res) > 0) { ?>

        <h1 class="p3">PROJECT-RISK TABLE</h1>
        <table class="table" style="width: 32rem;">
            <thead>
                <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">Risk Scenario Name</th>
                    <th scope="col">Mitigation Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($rows = mysqli_fetch_assoc($res)) { ?>
                    <tr>
                        <td><?= $rows['Project Name'] ?></td>
                        <td><?= $rows['Risk Scenario Name'] ?></td>
                        <td><?= $rows['Mitigation Level'] ?></td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    <?php } ?>
</div>