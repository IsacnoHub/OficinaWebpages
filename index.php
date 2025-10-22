<!DOCTYPE html>
<html lang="en">
	<?php
    $jsonData = file_get_contents('dados.json');
    $data = json_decode($jsonData, true);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site</title>
    <link rel="stylesheet" href="bitnami.css">
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap);
        @import url(https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+CU:wght@100..400&display=swap);
    </style>
</head>
<body>

    <main>

        <h1>Oficina de Pacote web</h1>
        <p>coizas escritas</p>
        <table>

            <!-- Tag de cabeçalho da tabela -->
            <thead>
                <!-- Tag de linha da tabela -->
                <tr>
                    <!-- Tag para o cabeçalho da tabela -->
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Altura</th>
                </tr>
            </thead>

            <!-- Tag de corpo da tabela -->
            <tbody>
                <?php
                    // Usando um foreach, que itera sobre cada aluno
                    foreach ($data['alunos'] as $aluno){
                        // O echo faz aparecer na tela e o "." concatena os elementos 
                        echo "<tr>";
                        // Acessando os dados de cada aluno por meio das chaves/keys
                        echo "<td>" . $aluno['nome'] . "</td>";
                        echo "<td>" . $aluno['idade'] . " anos" . "</td>";
                        echo "<td>" . $aluno['altura'] . "m" . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
		<section>
			<label for="opcao">Selecione uma opção</label>
				<form action="processamento.php">
					<select name="opcao_escolhida">
						<option value="opcao1">Nome</option>
						<option value="opcao2">Idade</option>
						<option value="opcao3">Altura</option>
					</select>
					<input type="submit" value="Enviar">
				</form>
		</section>
    </main>
    <footer>
         <p>Desenvolvido por <b>**ISAC AZEVEDO PINHEIRO**<b> e Ryan Ferreira Costa: </p>
        <div>
            <a href="https://www.instagram.com/oisacazevedo">oisacazevedo</a>
        </div>
    </footer>
</body>
</html>