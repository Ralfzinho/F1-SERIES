<?php
include('../includes/db.php');
?>
<?php include('../includes/layout_head.php'); ?>
<?php include('../includes/layout_nav.php'); ?>

<div class="container mt-5">
    <h1>Classificação de Pilotos</h1>
    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th>Posição</th>
                <th>Piloto</th>
                <th>Equipe</th>
                <th>Pontos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT p.nome as piloto, e.nome as equipe, SUM(r.pontos) as pontos
                    FROM Resultados r
                    JOIN Pilotos p ON p.id = r.piloto_id
                    JOIN Equipes e ON e.id = r.equipe_id
                    GROUP BY p.id, e.id
                    ORDER BY pontos DESC";
            $res = $conn->query($sql);

            $pos = 1;
            while ($row = $res->fetch_assoc()) {
                echo "<tr>
                        <td>".$pos++."</td>
                        <td>".$row['piloto']."</td>
                        <td>".$row['equipe']."</td>
                        <td>".$row['pontos']."</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

    <h1>Classificação de Equipes</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Posição</th>
                <th>Equipe</th>
                <th>Pontos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT e.nome as equipe, SUM(r.pontos) as pontos
                    FROM Resultados r
                    JOIN Equipes e ON e.id = r.equipe_id
                    GROUP BY e.id
                    ORDER BY pontos DESC";
            $res = $conn->query($sql);

            $pos = 1;
            while ($row = $res->fetch_assoc()) {
                echo "<tr>
                        <td>".$pos++."</td>
                        <td>".$row['equipe']."</td>
                        <td>".$row['pontos']."</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include('../includes/layout_footer.php'); ?>
