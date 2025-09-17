<?php
include('../includes/db.php');
include('../includes/funcoes.php');
?>
<?php include('../includes/layout_head.php'); ?>
<?php include('../includes/layout_nav.php'); ?>

<div class="container mt-5">
    <h1 class="mb-4">Corridas da Temporada</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Grande Prêmio</th>
                <th>Circuito</th>
                <th>Data</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT c.id, c.nome_gp, circ.NOME as circuito, c.data, c.status
                    FROM Corrida c
                    JOIN Circuito circ ON circ.ID = c.circuito_id
                    ORDER BY c.data ASC";
            $resultado = $conn->query($sql);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td><a href='corrida_detalhe.php?id=".$row['id']."'>".$row['nome_gp']."</a></td>
                            <td>".$row['circuito']."</td>
                            <td>".date("d/m/Y", strtotime($row['data']))."</td>
                            <td>".$row['status']."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhuma corrida cadastrada.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include('../includes/layout_footer.php'); ?>
