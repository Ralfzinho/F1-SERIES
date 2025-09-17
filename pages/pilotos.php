<?php
include('../includes/db.php');
?>
<?php include('../includes/layout_head.php'); ?>
<?php include('../includes/layout_nav.php'); ?>

<div class="container mt-5">
    <h1 class="mb-4">Pilotos</h1>
    <div class="row">
        <?php
        $sql = "SELECT p.nome, p.numero, p.foto_url, e.nome as equipe
                FROM Pilotos p
                LEFT JOIN Pilotos_Temporadas pt ON pt.piloto_id = p.id
                LEFT JOIN Equipes e ON e.id = pt.equipe_id";
        $res = $conn->query($sql);

        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo "<div class='col-md-3 mb-4'>
                        <div class='card'>
                            <img src='".$row['foto_url']."' class='card-img-top' alt='Foto do piloto'>
                            <div class='card-body'>
                                <h5 class='card-title'>#".$row['numero']." ".$row['nome']."</h5>
                                <p class='card-text'><b>Equipe:</b> ".$row['equipe']."</p>
                            </div>
                        </div>
                      </div>";
            }
        } else {
            echo "<p>Nenhum piloto cadastrado.</p>";
        }
        ?>
    </div>
</div>

<?php include('../includes/layout_footer.php'); ?>
