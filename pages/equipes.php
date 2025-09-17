<?php
include('../includes/db.php');
?>
<?php include('../includes/layout_head.php'); ?>
<?php include('../includes/layout_nav.php'); ?>

<div class="container mt-5">
    <h1 class="mb-4">Equipes</h1>
    <div class="row">
        <?php
        $sql = "SELECT * FROM Equipes";
        $res = $conn->query($sql);

        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <img src='".$row['logo_url']."' class='card-img-top' alt='Logo da equipe'>
                            <div class='card-body'>
                                <h5 class='card-title'>".$row['nome']."</h5>
                                <p><b>País:</b> ".$row['pais']."</p>
                                <p><b>Chefe:</b> ".$row['chefe']."</p>
                            </div>
                        </div>
                      </div>";
            }
        } else {
            echo "<p>Nenhuma equipe cadastrada.</p>";
        }
        ?>
    </div>
</div>

<?php include('../includes/layout_footer.php'); ?>
