<div class="border p-3" id="rt">
    <?php include 'php/riskscenarios.php';
    if (mysqli_num_rows($res) > 0) { ?>

        <h1 class="p3">RISK SCENARIO DATABASE</h1>
        <table class="table" style="width: 54rem;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Risk Scenario Name</th>
                    <th scope="col">Risk Scenario Description</th>
                    <th scope="col">Mitigation Strategy</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;

                while ($rows = mysqli_fetch_assoc($res)) { ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $rows['Risk Scenario Name'] ?></td>
                        <td><?= $rows['Risk Scenario Description'] ?></td>
                        <td><?= $rows['Mitigation Strategy'] ?></td>
                    </tr>
                <?php $i++;
                } ?>
            </tbody>
        </table>
    <?php } ?>
</div>