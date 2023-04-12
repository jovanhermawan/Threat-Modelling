<div id="rf" class="border">
    <div>
        <form class="  p-3 " action="php/addscenario.php" method="post" style="width: 450px; ">
            <h1 class="text-center p-3">ADD RISK SCENARIO</h1>
            <?php if (isset($_GET['success1'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success1'] ?>
                </div>

            <?php } ?>
            <?php if (isset($_GET['error1'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error1'] ?>
                </div>

            <?php } ?>
            <div class="mb-3">
                <label for="Risk Scenario Name" class="form-label">Risk Scenario Name</label>
                <input type="text" class="form-control" name="rsn" id="Risk Scenario Name">
            </div>
            <div class="mb-3">
                <label for="Risk Scenario Description" class="form-label">Risk Scenario Description</label>
                <input type="text" class="form-control" name="rsd" id="Risk Scenario Description">
            </div>
            <div class="mb-3">
                <label for="Mitigation Strategy" class="form-label">Mitigation Strategy</label>
                <input type="text" class="form-control" name="ms" id="Mitigation Strategy">
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
    <div>
        <form class="  p-3 " action="php/deleteriskscenario.php" method="post" style="width: 450px; ">
            <h1 class="text-center p-3">DELETE RISK SCENARIO</h1>
            <?php if (isset($_GET['success3'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success3'] ?>
                </div>

            <?php } ?>
            <?php if (isset($_GET['error3'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error3'] ?>
                </div>

            <?php } ?>
            <div class="mb-3">
                <label for="Risk Scenario Name" class="form-label">Risk Scenario Name</label>
                <select class="form-select mb-3" name="rsi" aria-label="Default select example">
                    <?php include 'php/risks.php';;
                    while ($rows = mysqli_fetch_assoc($res)) { ?>
                        <tr>
                            <option value="<?php echo $rows['Risk Scenario ID']; ?>"><?= $rows['Risk Scenario Name'] ?></td>
                        </tr>
                    <?php
                    } ?>
                </select>
            </div>




            <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
    </div>
</div>