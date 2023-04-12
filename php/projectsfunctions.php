<div class="border" id="pf">
    <div>
        <form class=" p-3" action="php/addproject.php" method="post" style="width: 450px;">
            <h1 class="text-center p-3">ADD PROJECT</h1>
            <?php if (isset($_GET['success5'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success5'] ?>
                </div>

            <?php } ?>
            <?php if (isset($_GET['error5'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error5'] ?>
                </div>

            <?php } ?>
            <div class="mb-3">
                <label for="Risk Scenario Name" class="form-label">Project Name</label>
                <input type="text" class="form-control" name="pn" id="pn">
            </div>

            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
    <div>
        <form class=" p-3" action="php/deleteproject.php" method="post" style="width: 450px;">
            <h1 class="text-center p-3">DELETE PROJECT</h1>
            <?php if (isset($_GET['success6'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success6'] ?>
                </div>

            <?php } ?>
            <?php if (isset($_GET['error6'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error6'] ?>
                </div>

            <?php } ?>
            <div class="mb-3">
                <label for="Risk Scenario Name" class="form-label">ProjectName</label>
                <select class="form-select mb-3" name="pi" aria-label="Default select example">
                    <?php include 'php/projects.php';;
                    while ($rows = mysqli_fetch_assoc($res)) { ?>
                        <tr>
                            <option value="<?php echo $rows['id']; ?>"><?= $rows['Project Name'] ?></td>
                        </tr>
                    <?php
                    } ?>
                </select>
            </div>




            <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
    </div>
</div>