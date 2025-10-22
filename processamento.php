<!DOCTYPE html>
<html lang="en">
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
    <?php
        $locale_str = setlocale(LC_COLLATE, "pt_BR.UTF-8");
        $jsonData = file_get_contents('dados.json');
        $data = json_decode($jsonData, true);
    ?>
    <main>
        <?php
            if($_SERVER["REQUEST_METHOD"] == POST){
                $opcao_escolhida = $_POST["opcao_escolhida"];
                
                echo"<table>";
                echo"<thead>";
                    echo"<tr>";
                        echo"<th>Nome</th>";
                        echo"<th>Idade</th>";
                        echo"<th>Altura</th>";
                    echo"</tr>";
                echo"</thead>";
                echo"<tbody>";
                    if($opcao_escolhida == "opcao1)"){
                        usort($dados['alunos'], function($a , $b){
                            return strcoll($a['nome'], $b['nome']);
                        });
                        
                        echo"<h2> Dados dispostos em ordem alfabética de nome: </h2>";
                        foreach($dados['alunos'] as $aluno){
                            echo "<tr>";
                                echo "<td>".$aluno['nome']."</td>";
                                echo "<td>".$aluno['idade']."anos </td>";
                                echo "<td>".$aluno['altura']."m </td>";
                            echo "</tr>";
                        }
                    }
                    else if($opcao_escolhida == "opcao2"){
                        usort($dados['alunos'], function($a , $b){
                            if($a['idade'] < $b['idade']) return 1;
                            else if($a['idade'] > $b['idade']) return -1;
                            return 0;
                        });
                        echo"<h2> Dados dispostos em ordem crescente da idade: </h2>";
                        foreach($dados['alunos'] as $aluno){
                            echo "<tr>";
                                echo "<td>".$aluno['nome']."</td>";
                                echo "<td>".$aluno['idade']."anos </td>";
                                echo "<td>".$aluno['altura']."m </td>";
                            echo "</tr>";
                        }
                    }
                    else if($opcao_escolhida == "opcao3"){
                        usort($dados['alunos'], function($a , $b){
                            return $a['altura'] <=> $b['altura'];
                        });
                        echo"<h2> Dados dispostos em ordem crescente da altura: </h2>";
                        foreach($dados['alunos'] as $aluno){
                            echo "<tr>";
                                echo "<td>".$aluno['nome']."</td>";
                                echo "<td>".$aluno['idade']."anos </td>";
                                echo "<td>".$aluno['altura']."m </td>";
                            echo "</tr>";
                        }
                    }

                echo"</tbody>";                   
                echo"</table>";
                echo"<p> Tabela gerada dinamicamente.<br>";
                
            } 
        ?>
        <div>
            <a href="index1.php">
                <input type="button" id="botao-voltar" value="Voltar">

            </a>
        </div>
    </main>
    <footer>
         <p>Desenvolvido por <b>**ISAC AZEVEDO PINHEIRO**<b> e Ryan Ferreira Costa: </p>
        <div>
            <a href="https://www.instagram.com/oisacazevedo">oisacazevedo</a>
        </div>
    </footer>
</body>
</html>