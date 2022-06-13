<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;        
    }

    body {
        height: 100vh;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 3vw;
        font-family: consolas;
        animation: Girar 3s infinite alternate ease-in-out;
    }

    main{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    
    section{
        height: 30vh;
        min-width: 10vw;
    }

    form {
        display: flex;
        justify-content: center;
        align-item: center;
        flex-direction: column;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatos</title>
</head>
<body>
    <main>
    <section>
        <h2>Adicionar Produto:</h2>
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
        <h2>Alterar Produto:</h2>
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
        <h2>Deletar Produto:</h2>
        <form action="del.php" method="post">
            <label for="id">ID:</label>
            <input id="id" name="id" type="text">
    
            <button type="submmit">Enviar</button>
        </form>
    </section>
    </main>
</body>
</html>