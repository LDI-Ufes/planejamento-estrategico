<!-- Insira as informações do Livro aqui -->
<?php
$tituloLivro = "Planejamento Estratégico SEAD 2021-2030";
$autorLivro = "Mauro Pantoja";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $tituloLivro; ?></title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <?php include 'components/preload.php' ?>

  <link rel="stylesheet" href="css/index.min.css">

  <meta name="theme-color" content="#fff" />
  <!-- <link rel="manifest" crossorigin="use-credentials" href="manifest.json"> -->
  <link rel="apple-touch-icon" href="img/icon-192.png">
</head>

<body id="index">
  <a href="#cover" id="ir-para-conteudo" title="Pular para o conteúdo" class="navegacao-teclado">Pular para o conteúdo</a>
  <nav class="navbar">
    <div class="container">
      <div class="nav-title"><?php echo $tituloLivro; ?></div>

      <button id="nav-ajustes" class="btn-terciary" data-modal="#modal-ajustes"><span>Ajustes de leitura</span></button>
      <a class="nav-logo" href="https://sead.ufes.br/" target="_blank" title="Abrir site da Sead em nova aba">
        <span>Sead</span><?php include('svg/sead.svg'); ?>
      </a>
    </div>
  </nav>

  <?php include 'components/modal.php' ?>

  <main>
    <section id="cover">
      <div class="container">
        <div class="cover-img"></div>
        <header class="cover-header">

          <span>Livro Digital</span>
          <span>2023 (Versão Revisada)</span>
          <h1 class="cover-title"><?php echo $tituloLivro; ?></h1>
          <p class="cover-author"><?php echo $autorLivro; ?></p>

          <p class="cover-info">Essa página é um livro digital publicado pela Superintendência de Educação à Distância.</p>

          <a class="btn-primary" id="iniciar-leitura" href="apresentacao.php">Iniciar leitura</a>
        </header>
      </div>
    </section>

    <section id="info">
      <div class="container container-content">
        <h2>Como usar esse livro?</h2>

        <!-- <div class="info-item">
          <p class="info-text">Disponibilizamos esse livro também em um formato adequado para <strong>impressão</strong>.</p>
          <a id="link-download" class="info-btn btn-secondary" href="" target="_blank">Baixar PDF</a>
        </div> -->

        <div class="info-item" id="app-install" hidden>
          <p class="info-text">Adicione esse livro ao seu celular como um <strong>aplicativo</strong> para acessá-lo offline.</p>
          <button id="btn-app-install" class="info-btn btn-secondary">Instalar App</button>
        </div>

        <div class="info-item">
          <p class="info-text">A Sead também disponibiliza outros <strong>materiais didáticos</strong> em seu acervo digital.</p>
          <a id="link-acervo" class="info-btn btn-secondary" href="https://acervo.sead.ufes.br/" target="_blank">Visitar acervo</a>
        </div>
      </div>
    </section>


    <section id="toc">
      <div class="container container-content">
        <div id="barra-de-busca"></div>
        <p id="erro">Erro: digite, no mínimo, três caracteres para fazer a pesquisa.</p>

        <h2>Sumário</h2>
        <?php include 'components/sumario.php' ?>
      </div>
    </section>


    <section id="authors">
      <div class="container container-content">
        <h2>Quem escreveu:</h2>

        <ul>

          <li class="author">
            <div class="author-bio">
              <h3 tabindex="0"><?php echo $autorLivro; ?></h3>
              <p>[Texto] Descrição do autor do Livro</p>


              <div class="author-links">
                <a href="http://lattes.cnpq.br/" class="link-lattes" rel="noreferrer" target="_blank"><span>Currículo Lattes</span></a>
                <a href="https://ldi.ufes.br/" target="_blank"><span>Laboratório de Design Instrucional - Sead-Ufes</span></a>
              </div>
            </div>
          </li>


        </ul>
      </div>
    </section>

   

    <section id="credits">
      <div class="container container-content">
        <h2>Créditos</h2>

        <div class="credits-licence">
          <img src="img/licenca.png" alt="Licença CC BY-NC-SA">
          <p>Esta licença permite que outros remixem, adaptem e criem a partir do seu trabalho para fins não comerciais, desde que atribuam o devido crédito e que licenciem as novas criações sob termos idênticos.</p>
          <p>A reprodução de imagens nesta obra tem caráter pedagógico e científico, amparada pelos limites do direito de autor, de acordo com a lei nº 9.610/1998, art. 46, III (citação em livros, jornais, revistas ou qualquer outro meio de comunicação, de passagens de qualquer obra, para fins de estudo, crítica ou polêmica, na medida justificada para o fim a atingir, indicando-se o nome do autor e a origem da obra). Toda reprodução foi realizada com amparo legal do regime geral de direito de autor no Brasil.</p>
        </div>

        <div class="credits-gov">
          <p><strong>Presidente da República</strong><br>Luiz Inácio Lula da Silva</p>
          <p><strong>Ministro da Educação</strong><br>Camilo Santana</p>
          <p><strong>Diretoria de Educação a Distância DED/CAPES/MEC</strong><br>Carlos Cézar Modernel Lenuzza</p>
        </div>

        <div class="credits-team">
          <div class="team-ufes">
            <span>Universidade Federal do Espírito Santo</span>

            <p><strong>Reitor</strong><br>Paulo Sérgio de Paula Vargas</p>
            <p><strong>Superintendente de Educação a Distância – SEAD</strong><br>Maria Auxiliadora de Carvalho Corassa</p>
            <p><strong>Diretora Acadêmico – SEAD</strong><br>Andréia Chiari Lins</p>
            <p><strong>Coordenadora UAB da UFES</strong><br>Maria Auxiliadora de Carvalho Corassa</p>
            <p><strong>Coordenadora Adjunta UAB da UFES</strong><br>Andréia Chiari Lins</p>

          </div>

          <div id="team-ldi">
            <span>Laboratório de Design Instrucional</span>

            <p>
              <strong>Gerência</strong><br>
              <em>Coordenação:</em><br>
              Lorena Zanette<br>
              <em>Equipe:</em><br>
              Lissandra Stéphane
            </p>

            <p>
              <strong>Diagramação e Ilustração</strong><br>
              <em>Coordenação:</em><br>
              Arí Souza<br>
              <em>Equipe:</em><br>
              Leonardo Cezana
            </p>

            
            <p>
              <strong>Desenvolvimento</strong><br>
              Paulo Serpa
            </p>
          </div>

        </div>
      </div>
    </section>

  </main>

  <a id="voltar-topo" title="Voltar ao topo" href="#topo"><span>Voltar ao topo</span></a>

  <footer>
    <span>2023 Sead Ufes. Todos os direitos reservados.</span>
    <a href="https://ldi.ufes.br/" target="_blank" title="Abrir site do LDI em nova aba">Desenvolvido por LDI</a>
  </footer>

  <!-- <?php include 'components/lgpd-container.php'; ?> -->
  <script src="js/focus-visible.min.js"></script>
  <script type="text/javascript" src="js/app.min.js"></script>
  <script type="text/javascript" src="js/index.min.js"></script>

</body>

</html>