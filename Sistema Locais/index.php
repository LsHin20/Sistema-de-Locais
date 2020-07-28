<!DOCYTPE HTML>
<?php include("conexao.php");
$consulta="SELECT * FROM locais";
$con = $conexao->query($consulta) or die ($conexao->error);

?> 
<?php 
	
?>

<html>

    <head>
        <title>Bem vindo</title>
        <meta charset="utf-8">


        <style>
            .principal {
                width: 50%;
                margin: 0 auto;
                background-color: rgb(102, 226, 210);
                border: 1px solid #e3e3e3;

            }
        </style>
    </head>


    <body>
        <h1>Bem visto Ao Sistema de Locais</h1>
        <table border="1px solid">
            <tr>
                <td>Nome</td>
                <td>data</td>
            </tr>
            <?php while($dado=$con->fetch_array()){?>
                <tr>
                    <td> <?php echo $dado ["nome"];?></td>
                    <td><?php echo $dado ["data_"];?> </td>
                    <td><a href="index.php?=<?php echo $row['id'];?>" class="edit_btn">Editar</a></td>
                    <td><a href="index.php?=<?php echo $row['id'];?>" class="del_btn">Apagar</a></td>
                   
                </tr>

            <?php }?>



           
        </table>

                    <a href="cadastro_locais.php"><button>Novo local</button></a>

                


    </body>


    </html>