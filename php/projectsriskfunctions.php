<div id="prf" class="border">
    <div>
        <form class=" p-3 " action="php/addprojectrisk.php" method="post" style="width: 450px;">
            <h1 class="text-center p-3">ADD PROJECT RISK</h1>
            <?php if (isset($_GET['success2'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success2'] ?>
                </div>

            <?php } ?>
            <?php if (isset($_GET['error2'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error2'] ?>
                </div>

            <?php } ?>
            <div class="mb-3">
                <label for="Risk Scenario Name" class="form-label">Project Name</label>
                <select class="form-select mb-3" name="pn" aria-label="Default select example">
                    <?php include 'php/projects.php';;
                    while ($rows = mysqli_fetch_assoc($res)) { ?>
                        <tr>
                            <option value="<?php echo $rows['id']; ?>"><?= $rows['Project Name'] ?></td>
                        </tr>
                    <?php
                    } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="Risk Scenario Description" class="form-label">Risk Scenario Name</label>
                <select class="form-select mb-3" name="rn" aria-label="Default select example">
                    <?php include 'php/risks.php';;
                    while ($rows = mysqli_fetch_assoc($res)) { ?>
                        <tr>
                            <option value="<?php echo $rows['Risk Scenario ID']; ?>"><?= $rows['Risk Scenario Name'] ?></td>
                        </tr>
                    <?php
                    } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="Mitigation Level" class="form-label">Mitigation Level</label>
                <select name="ml">
                    <option value="1">1</td>
                    <option value="2">2</td>
                    <option value="3">3</td>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
    <div>
        <form class=" p-3" action="php/deleteprojectrisk.php" method="post" style="width: 450px;">
            <h1 class="text-center p-3">DELETE PROJECT RISK</h1>
            <?php if (isset($_GET['success4'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success4'] ?>
                </div>

            <?php } ?>
            <?php if (isset($_GET['error4'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error4'] ?>
                </div>

            <?php } ?>
            <div class="mb-3">
                <label for="Risk Scenario Name" class="form-label">Project Name</label>
                <select class="form-select mb-3" name="pn" aria-label="Default select example">
                    <?php include 'php/projects.php';;
                    while ($rows = mysqli_fetch_assoc($res)) { ?>
                        <tr>
                            <option value="<?php echo $rows['id']; ?>"><?= $rows['Project Name'] ?></td>
                        </tr>
                    <?php
                    } ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="Risk Scenario Description" class="form-label">Risk Scenario Name</label>
                <select class="form-select mb-3" name="rn" aria-label="Default select example">
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