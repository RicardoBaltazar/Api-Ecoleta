<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="responsive.css">
    <title>Professora Ribeiro</title>
</head>


<body>
    <div class="home-page">
        <header class="menu">
            <p>Professora Ribeiro</p>
            <nav>
                <ul>
                    <li><a href="">Página inicial</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Método</a></li>
                    <li><a href="">Recomendações</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="section-presentation">
                <div>
                    <h2>Matemática com a Ribeiro</h2>
                    <p>Conta a Conta</p>
                    <p>O caminho do conhecimento</p>
                    <button>Contate-me</button>
                </div>

                <div>
                    <img src="./assets/undraw_studying_s3l7.svg" alt="">
                </div>
            </section>

            <section class="section-about">
                <h2>Sobre Mim</h2>

                <div>
                    <img src="./assets/img-about.png" alt="">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Fugiat, molestias. Vero provident asperiores molestiae, velit
                        quibusdam incidunt architecto esse pariatur dignissimos, nulla
                        aperiam eos autem cumque ipsum, officia ratione amet?
                        <br>
                        <br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Porro commodi officiis et neque, doloremque voluptatibus harum sequi!
                        Quasi praesentium placeat odit esse ab perspiciatis, numquam beatae
                        obcaecati hic nesciunt molestiae! Vero provident asperiores molestiae, velit
                        quibusdam incidunt architecto esse pariatur dignissimos, nulla
                        aperiam eos autem cumque ipsum, officia ratione amet?
                    </p>
                </div>
            </section>

            <section class="section-method">
                <h2>Como Eu Faço</h2>
                <div class="div-methods">
                    <div>
                        <h3>Matérias</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tempore deleniti.
                            Atque nobis, eaque ut quis dolor reprehenderit tempora cupiditate voluptatibus optio.
                        </p>
                    </div>

                    <div>
                        <h3>Localização</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis autem possimus temporibus nam tempora.
                        </p>
                    </div>

                    <div>
                        <h3>Opções de Ensino</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tempore deleniti.
                            Atque nobis.
                            <br>
                            <br>
                            Preço: R$60,00/hora
                        </p>

                        <p>
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, tempore deleniti.
                            Atque nobis.
                            <br>
                            <br>
                            Rate: R$50,00/hora
                        </p>
                    </div>

                    <div>

                    </div>
                </div>
                <button>Saiba Mais</button>
            </section>

            <section class="section-depoiments">
                <h3>O que os clientes felizes dizem por ai</h3>
                <p>
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Debitis, saepe molestiae placeat eaque hic laboriosam, labore quidem aliquam fugiat.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit porro voluptatibus."
                </p>
            </section>

            <section class="section-contact">
                <h3>Contate-me</h3>
                <p>Eu ensino na capital de São Paulo e nas cidades do llitoral.</p>
                <p>Tel: (11) 3456-7890 / Email: info@meusite.com</p>

                <form action="" method="POST">
                    <div class="input-form">
                        <div>
                            <input type="text" name="name" placeholder='Nome'>
                            <input type="text" name="last-name" placeholder='Sobrenome'>
                        </div>
                        <div>
                            <input type="text" name="email" placeholder='Email'>
                            <input type="text" name="phone" placeholder='Telefone'>
                        </div>
                        <input type="text" name="message" placeholder="Menssagem" class="input-message">
                    </div>

                    <div class="div-checkbox">
                        <p>Nível de Estudo</p>

                        <div class="div-input-checkbox">
                            <input type="checkbox" name="fundamental" id="fundamental" class="checkbox">
                            <label for="fundamental">Ensino Fundamental</label>
                        </div>
                        
                        <div class="div-input-checkbox">
                            <input type="checkbox" name="medio" id="medio" class="checkbox">
                            <label for="medio">Ensino Médio</label>
                        </div>

                        <div class="div-input-checkbox">
                            <input type="checkbox" name="vestibular" id="vestibular" class="checkbox">
                            <label for="vestibular">Vestibuláres</label>
                        </div>

                        <button type="submit">Enviar</button>
                    </div>

                </form>
            </section>
        </main>

    </div>


</body>

</html>