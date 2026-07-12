<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <?php include '../includes/cabecalho.php'; ?>

    <main class="container-exercicio">
        <section class="enunciado">
            <h2>
                Criar um formulario-area que receba o nome do usuario e que receba as preferencias do usuario por um "checkbox"
            </h2>
        </section>

        <div class="flex-container">
            <section class="formulario-area">
                <form method="POST" action="">
                    <label>Digite seu nome</label>
                    <input type="text" name="nome" required>
                    <label>Escolha as linguagens que gosta</label>
                    <fieldset id="linguagens">
                        <p>
                        <input type="checkbox" name="pref[]" value="PHP" id="idPHP"><label for="idPHP"> PHP</label><br/>
                        <input type="checkbox" name="pref[]" value="JavaScript" id="idJS"><label for="idJS"> Java Script</label><br/>
                        <input type="checkbox" name="pref[]" value="C#" id="idCs"><label for="idCs"> C#</label><br/>
                        <input type="checkbox" name="pref[]" value="Python" id="idPy"><label for="idPy"> Python</label><br/>
                        <input type="checkbox" name="pref[]" value="Java" id="idJ"><label for="idJ"> Java</label><br/>
                        <input type="checkbox" name="pref[]" value="Kotlin" id="idKot"><label for="idKot"> Kotlin</label><br/>
                        <input type="checkbox" name="pref[]" value="TypeScript" id="idTy"><label for="idTy"> Type Script</label><br/>
                        <input type="checkbox" name="pref[]" value="Rust" id="idR"><label for="idR"> Rust</label><br/>
                        <input type="checkbox" name="pref[]" value="SQL" id="idSQ"><label for="idSQ"> SQL</label><br/>
                        <input type="checkbox" name="pref[]" value="Pascal" id="idPc"><label for="idPc"> Pascal</label><br/>
                        <input type="checkbox" name="pref[]" value="Golang" id="idGo"><label for="idGo"> Golang</label><br/>
                        </p>
                    </fieldset>
                    <button type="submit" name="enviar">Enviar</button>
                </form>
            </section>
            
            <?php include 'resp9.php'; ?>
        </div>
    </main>

    <?php include '../includes/rodape.php'; ?>
</body>
</html>