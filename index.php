<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;        
    }

    body {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: consolas;
    }

    main{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    h2 {
        border-bottom: 1px black solid;
        margin: 10px;
        text-align: center;
    }

    section{
        width: 30vw;
        height: 50vh;
        margin: 2vw;
        border: 1px solid gray;
        box-shadow: 2px 2px 2px;
        border-radius: 10px;
    }

    label {
        margin: 5px;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    button {
        margin: 5%;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<body>
    <main>
    <section>
        <h2>Adicionar Produto</h2>
        <form action="add.php" method="post">
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text">
            <label for="descr">Decrição:</label>
            <input id="descr" name="descr" type="text">
            <label for="price">Preço:</label>
            <input id="price" name="price" type="text">
            
    
            <button type="submmit">Enviar</button>
        </form>
    </section>

    <section>
        <h2>Alterar Produto</h2>
        <form action="alt.php" method="post">
            <label for="id">ID:</label>
            <input id="id" name="id" type="text">
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text">
            <label for="descr">Decrição:</label>
            <input id="descr" name="descr" type="text">
            <label for="price">Preço:</label>
            <input id="price" name="price" type="text">
            
    
            <button type="submmit">Enviar</button>
        </form>
    </section>

    <section>
        <h2>Deletar Produto</h2>
        <form action="del.php" method="post">
            <label for="id">ID:</label>
            <input id="id" name="id" type="text">
    
            <button type="submmit">Enviar</button>
        </form>
    </section>
    </main>
</body>
</html>