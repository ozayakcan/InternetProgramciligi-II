<!DOCTYPE html>
<html lang="tr">

<?php $this->load->view("includes/header.php"); ?>

<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>İsim</th>
                        <th>Eposta</th>
                        <th>Hizmet</th>
                        <th>Maaş</th>
                        <th>Mesaj</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        echo "
                        <tr>
                            <td>" . $item->name . "</td>
                            <td>" . $item->email . "</td>
                            <td>" . $item->service . "</td>
                            <td>" . $item->budget . "</td>
                            <td>" . $item->message . "</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



    <div id="dropDownSelect1"></div>


    <?php $this->load->view("includes/footer.php"); ?>

</body>

</html>