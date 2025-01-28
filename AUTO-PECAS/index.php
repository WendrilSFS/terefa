<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./Public/css/index.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Tourney:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>
<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: white;
}
h1{
    font-size: 80px;
    margin-bottom: 10px;
    font-family: "Tourney", serif;
    font-optical-sizing: auto;
    font-weight: weight;
    font-style: normal;
    font-variation-settings:
    "wdth" 100;
}
h2{
    font-size: 34px;
    margin-bottom: 5px;
    font-family: "Tourney", serif;
    font-optical-sizing: auto;
    font-weight: 900;
    font-style: normal;
    font-variation-settings:
    "wdth" 100;

}
p{
    font-size: 23px;
}
.banner{
    width: 100%;
    height: 300px;
    background-image: url(./Public/imagens/Avaliacao-Mecanica-de-Carros-Usados-O-Passo-Essencial-para-uma-Compra-Consciente-1-jpg.webp);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}
.box-text{
    display: flex;
    /* background-color: antiquewhite; */
    width: 100%;
    height: 200px;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
}
.box-text i{
    font-size: 80px;
}
.box{
    margin-top: 40px;
    border: 1px solid black;
    background-color: whitesmoke;
    backdrop-filter: Blur(80px);
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: top;
    align-items: center;
    width: 90%;
    height: 600px;
    padding: 20px;
    gap: 50px;
    margin-bottom: 30px;
}

.area_escolha {
    display: flex;
    flex-direction: column;
    gap: 100px; 
    /* margin: 20px auto; */
    /* background-color: orange;  */
    width: 100%;
    height: 100%; 
    justify-content: center;
    text-align: center;
    align-items: center; 
}

.area_botao {
    width: 80%;
    /* background-color: blue; */
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 80px;
}


.botao {
    width: 400px;
    height: 60px;
    border: 2px solid black;
    border-radius: 8px;
    background: linear-gradient(135deg, #9d9d9d,#828282, #9d9d9d); 
    color: white;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center; 
    /* line-height: 60px; */
    transition: transform 0.2s, box-shadow 0.2s; 
}


.botao:hover {
    transform: scale(1.01); 
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    background: linear-gradient(135deg, #9d9d9d,#828282, #9d9d9d);
    color: #fff;
    /* background: linear-gradient(135deg, #636363,black, #636363); */
}

.botao:active {
    /* transform: scale(0.95);  */
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); 
}

@media (max-width: 600px) {
    .area_botao {
        flex-direction: column; 
        gap: 15px;
    }
    .botao {
        width: 100%; 
    }
}


</style>
<body>
    <h1>AUTO-PEÇAS</h1>
    <h2>Quebra e Arruma</h2>
    <header class="banner">

    </header>
    <div class="box-text">
        <h1>GERENCIAMENTO</h1>
        <i class="fa-solid fa-arrow-down"></i>  
    </div>
    <div class="box">
        <div class="area_escolha">
            <div class="area_botao">
                <a href="./App/View/CadastrarCliente.php" class="botao">
                    Cadastrar Clientes
                </a>
                <a href="./App/View/ListarClientes.php" class="botao">
                    Listar, editar ou excluir Clientes
                </a>
            </div>
            <div class="area_botao">
                <a href="./App/View/CadastrarProduto.php" class="botao">
                    Cadastrar Produtos e peças
                </a>
                <a href="./App/View/ListarProdutos.php" class="botao">
                Listar, editar ou excluir Produtos e peças
                </a>
            </div>
            <div class="area_botao">
                <a href="./App/View/CadastrarServico.php" class="botao">
                    Cadastrar Serviços
                </a>
                <a href="./App/View/ListarServicos.php" class="botao">
                    Lista de Serviços
                </a>
            </div>
        </div>        
    </div>
</body>
</html>