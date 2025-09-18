<?php
// Inclui a conexão com o banco de dados
include('../includes/db.php');
include('../includes/funcoes.php');

// Código para exibir as corridas
?>

<?php include('../includes/layout_head.php'); ?>
<?php include('../includes/layout_nav.php'); ?>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Corridas da Temporada</h1>
    
    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-100 text-left text-sm font-semibold text-gray-700">
                    <th class="py-3 px-4">Grande Prêmio</th>
                    <th class="py-3 px-4">Circuito</th>
                    <th class="py-3 px-4">Data</th>
                    <th class="py-3 px-4">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Consulta ao banco de dados usando PDO
                $sql = "SELECT c.id, c.nome_gp, circ.NOME as circuito, c.data, c.status
                        FROM corridas c
                        JOIN circuitos circ ON circ.ID = c.circuito_id
                        ORDER BY c.data ASC";
                
                // Preparando e executando a consulta
                $stmt = $pdo->query($sql);

                // Verifica se há resultados e exibe-os
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch()) {
                        echo "
                        <tr class='border-b'>
                            <td class='py-3 px-4'><a href='../pages/corrida_detalhe.php?id=".$row['id']."' class='text-blue-600 hover:underline'>".$row['nome_gp']."</a></td>
                            <td class='py-3 px-4'>".$row['circuito']."</td>
                            <td class='py-3 px-4'>".date("d/m/Y", strtotime($row['data']))."</td>
                            <td class='py-3 px-4'>
                                <span class='px-2 py-1 text-xs font-medium leading-tight uppercase rounded-full 
                                ".($row['status'] == 'agendada' ? 'bg-yellow-200 text-yellow-800' : 'bg-green-200 text-green-800')."'>
                                    ".$row['status']."
                                </span>
                            </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='py-3 px-4 text-center text-gray-500'>Nenhuma corrida cadastrada.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../includes/layout_footer.php'); ?>
