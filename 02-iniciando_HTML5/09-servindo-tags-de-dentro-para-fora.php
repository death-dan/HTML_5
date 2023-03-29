<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="#">
            <img src="" alt="" title="">
        </a>
        <nav>
            <ul>
                <li>Home</li>
                <li>Contato</li>
            </ul>
        </nav>
    </header>

    <section>
        <header>
            <h1>Titulo da Sessao</h1>
        </header>

        <?php
            for ($i = 1; $i < 3; $i++) {
        ?>
                <article>
                    <header>
                        <h2>Titulo <?php echo $i; ?> do blog</h2>
                    </header> 
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Ea praesentium quos, eum quibusdam fugiat ducimus magni.</p>
                    <img src="midias/imagem.jpg" alt="imagem blogs" width="200">
                </article>
        <?php
            }
        ?>
    </section>
</body>
</html>