<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/favicon.svg"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/css/style.css">
    <title>Rafael Silva</title>
    
</head>
<body>
  <header id="home" class="pb-5">
      <nav class="navbar navbar-expand-lg fixed-top" data-anime="nav-bar">
                <div class="container-fluid">
                  <a class="navbar-brand fw-bold" href="#">Rafael Silva<span class="align-text-bottom registro">&#174;</span></a>
                  <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#galeria">Galeria</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#precos">Preço</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                      </li>
                    </ul>
                  </div>
                </div>
      </nav>
  </header>
  <section class="hero container-fluid py-5  d-flex align-items-center justify-content-center">
    <div class="row pt-5 d-flex align-items-center justify-content-center">
      <div class="col-lg-12 py-5 w-75 text-center text-uppercase  mt-5">
        <h1 class="fw-bolder">A mais de 20 anos congelando momentos.</h1>
        <p class="fw-bold">A fotografia é a linguagem universal que atravessa corações e preserva a memória de uma geração</p>     
        <div class="col-lg-12 d-flex align-items-center justify-content-center mt-5">
         <a href="#sobre"><img src="../static/icon/ScrownDown-2.png" class="pt-5 mt-5 hero-icon-animation" style="max-width: 20px;" alt=""></a>           
        </div>
      </div> 
    </div>          
  </section>
  <main id="sobre" class="container-fluid d-flex justify-content-center align-items-center">
    <div class="container px-5 pt-5 d-flex justify-content-center align-items-center">
      <div class="row px-md-5 py-5  d-flex justify-content-center align-items-center">
        <article class="col-md-12  col-lg-6 px-sm-5 mt-5">
          <h2 class="pb-1 display-4 lh-1 fw-bolder text-uppercase">Rafael <br>Silva</h2>
          <h3 class="lh-1 pt-3  text-uppercase">Contanto Histórias</h3>
          <p class="p-sobre pb-3">Descubra a essência da vida através das lentes de Rafael Silva - 
            o fotógrafo que revela histórias autênticas, captura emoções poderosas e exibe sua arte
             em renomadas galerias de arte. Com inspiração no icônico Sebastião Salgado, Rafael 
             transcende fronteiras, compartilhando a beleza e a complexidade da condição humana. 
             Sua visão única e talento excepcional irão transportá-lo para um mundo onde cada imagem
              conta uma história profunda. Deixe-se cativar pela autenticidade e pela magia de suas 
              fotografias.</p>
        </article>
        <div class="col-md-12  pb-3 col-lg-6 px-2 px-sm-5 d-flex justify-content-center align-items-center">
          <img src="../static/img/rafael/Foto-Rafael.png" class="img-fluid" alt="">
        </div>
        <div class="row mx-5 px-5 my-2">
          <div class="col-md-4 fw-bold ">
            <div class="row dados-numericos d-flex justify-content-center align-items-center">7.186</div>
            <div class="row dados-numericos-p d-flex justify-content-center align-items-center">Eventos</div>
          </div>
          <div class="col-md-4 fw-bold">
            <div class="row dados-numericos d-flex justify-content-center align-items-center">14.468</div>
            <div class="row dados-numericos-p d-flex justify-content-center align-items-center">Projetos</div>
          </div>
          <div class="col-md-4 fw-bold">
            <div class="row dados-numericos d-flex justify-content-center align-items-center">62</div>
            <div class="row dados-numericos-p d-flex justify-content-center align-items-center">Exposições</div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <section id="section-3" class="container-fluid d-flex justify-content-center align-items-center">
    <div class="container  px-md-5">
    <div class="row container px-md-5">
      <div class="col-lg-6  pb-3 d-flex justify-content-center align-items-center pt-5">
        <img src="../static/img/rafael/Rafael-preto-branco.png" class="img-fluid" alt="" style="max-height: 90vh;">
      </div>
      <aside class="col-lg-6">
        <header class="">
          <p class="fw-bolder headline text-uppercase pb-3">Portfólio<br>Fotográfico</p>
        </header>
        <article class="">
          <h5 class="subheadline text-uppercase">1. O que você faz ?</h5>
          <p class="text-section-3">Através das minhas lentes, mergulho na dança sutil da existência, 
            capturando os instantes efêmeros que ecoam em memórias eternas. Crio arte a 
            partir do invisível, revelando a poesia escondida nos detalhes, testemunhando
            a magia das histórias que se desdobram diante dos meus olhos.
            
          </p>
        </article>
        <article class="lh-1">
          <h5 class="subheadline text-uppercase">2. Quem você é ?</h5>
          <p class="text-section-3">Sou um espectador inquieto, buscando 
            desvendar as camadas da alma humana. Minhas fotografias são espelhos silenciosos
             que refletem a diversidade e a complexidade de cada indivíduo. Convido-o a 
             contemplar sua própria essência, a descobrir os mistérios que residem em seu ser.

          </p>
        </article>
        <article class="">
          <h5 class=" subheadline text-uppercase">3. Porque não ?</h5>
          <p class="pb-5 text-section-3">Liberte-se das amarras da conformidade e adentre o território do 
            desconhecido. Ousar é expandir horizontes, é desafiar o senso comum. Por que não se 
            permitir mergulhar na correnteza da imaginação? Permita-me conduzi-lo por trilhas não 
            percorridas, onde a magia habita e as possibilidades são infinitas.  Arrisque-se a 
            descobrir novos olhares, a enxergar além do óbvio.
          </p>
        </article>
      </aside>
    </div></div>
  </section>
  <section id="galeria" class="container-fluid">
    <div class="row justify-content-center">
      <p class="pt-4 headline text-center text-uppercase">A galeria esta em constante obras.</p>
      <p class="text-center w-75">A seção "Portfólio" exibe uma seleção cuidadosamente escolhida de ensaios 
        fotográficos de Rafael Silva. Os visitantes podem explorar uma galeria de imagens impressionantes, 
        organizadas por temas ou categorias, que mostram a habilidade de Rafael em contar histórias e 
        capturar momentos únicos. Cada imagem é uma janela para a alma humana, revelando a essência, a beleza
         e a complexidade do mundo que nos cerca.
      </p>
    </div>
    <div class="container-fluid p-0 pt-5">
      <div class="row p-0 no-gutters"> 
        <div data-bs-toggle="modal" data-bs-target="#ModalStreat" class=" pointer p-0 col-lg-3 card open-popup-streat col-md-6 text-white d-flex justify-content-center align-items-center p-0 m-0">
          <img src="../static/img/street/2streat 2.png" alt="" class="img-fluid w-100 h-100">
          <div class="card-img-overlay d-flex flex-column justify-content-end open-popup-streat">
            <div class="row"><h5 class="headline-card text-white">Streat</h5></div>
            <div class="row p-0"><p class="subheadline-card text-white mb-0">Explora a essência das ruas com nossa coleção de fotos, capturando a autenticidade e o espírito das cidades.</p>
            </div>
        
          </div>
        </div>
        <div  data-bs-toggle="modal" data-bs-target="#ModalNature" class=" pointer  p-0 col-lg-3 card col-md-6 text-white d-flex justify-content-center align-items-center p-0 m-0">
        <img src="../static/img/nature/Nature.png" alt="" class="img-fluid w-100 h-100">
          <div class="card-img-overlay d-flex flex-column justify-content-end">
            <div class="row"><h5 class="headline-card text-white">Nature</h5></div>
            <div class="row p-0"><p class="subheadline-card text-white mb-0">Explore a serenidade e a majestade da natureza por meio de nossas fotos, onde cada imagem é uma ode à vida.</p>
            </div>
          
          </div>
        </div>
        <div class=" p-0 col-lg-3 card col-md-6 text-white d-flex justify-content-center align-items-center p-0 m-0">
          <img src="../static/img/frame-1.png" alt="" class="img-fluid w-100 h-100">
          <div class="card-img-overlay d-flex flex-column justify-content-end">
            <h5 class="frame-card text-dark w-75">Através das lentes, a realidade se transforma em poesia visual.</h5>
          </div>
        </div>
        <div class=" d-none d-sm-block p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
          <img src="../static/img/frame-2.png" alt="" class="img-fluid w-100 h-100">
        </div>
      </div>
      <div class="row p-0 no-gutters">            
        <div  data-bs-toggle="modal" data-bs-target="#ModalCasamento"  class=" pointer  p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
        <img src="../static/img/casamento/casamento.png" alt="" class="img-fluid w-100 h-100">
          <div class="card-img-overlay d-flex flex-column justify-content-end">
            <div class="row"><h5 class="headline-card text-white">Casamento</h5></div>
            <div class="row p-0"><p class="subheadline-card text-white mb-0">Testemunhe a união de almas através de nossas imagens, onde cada foto é um testemunho do amor eterno.</p>
            </div>
        
          </div>
        </div>
        <div class=" p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
          <img src="../static/img/frame-1.png" alt="" class="img-fluid w-100 h-100">
          <div class="card-img-overlay d-flex flex-column justify-content-end">
            <h5 class="frame-card text-dark w-75">A fotografia eterniza instantes, revelando a alma do tempo.</h5>       
          </div>
        </div>
        <div class="d-none d-sm-block p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
          <img src="../static/img/frame-3.png" alt="" class="img-fluid w-100 h-100">        
        </div>
        <div class=" p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
          <img src="../static/img/exposicoes/child.png" alt="" class="img-fluid w-100 h-100">      
        </div>
      </div>
      <div class="row p-0 no-gutters">
        <div  data-bs-toggle="modal" data-bs-target="#ModalPortroit"  class="  pointer p-0 col-lg-3 card col-md-6 text-white  m-0 d-flex justify-content-center align-items-center p-0">
          
          <img src="../static/img/portroit/portroit.png" alt="" class="img-fluid w-100 h-100">
          <div class="card-img-overlay d-flex flex-column justify-content-end">
            <div class="row"><h5 class="headline-card text-white">Portroit</h5></div>
            <div class="row p-0"><p class="subheadline-card text-white mb-0">Descubra a beleza de ser você mesmo com nossas imagens de ensaios pessoais, mostrando sua verdadeira essência.</p>
            </div>
          </div>
          </div>
        
        <div class=" p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
          <img src="../static/img/frame-4.png" alt="" class="img-fluid w-100 h-100">
          <div class="card-img-overlay d-flex flex-column justify-content-end">
            <h5 class="frame-card text-dark w-75">Congelar o efêmero e despertar emoções.</h5>  
          </div>
        </div>
        <div class=" d-sm-block d-none  p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
          <img src="../static/img/frame-5.png" alt="" class="img-fluid w-100 h-100">      
        </div>
          <div   data-bs-toggle="modal" data-bs-target="#ModalBebes" class="  pointer p-0 col-lg-3 card col-md-6 text-white m-0 d-flex justify-content-center align-items-center p-0">
          <img src="../static/img/bebes/baby.png" alt="" class="img-fluid w-100 h-100">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
              <div class="row"><h5 class="headline-card text-white">Bebês</h5></div>
              <div class="row p-0"><p class="subheadline-card text-white mb-0">Deixe-nos transformar os momentos efêmeros da primeira infância em memórias duradouras através de nossas fotos de ensaios.</p>
              </div>
           
            </div>
          </div>
      </div>
    </div>
  </section>
  <section id="exposicoes" class="container-fluid">
    <div class="row justify-content-center pt-5">
      <p class="pt-4 headline text-center text-uppercase">Esposições</p>
      <p class="text-center w-75">Esta exposição é uma ode à imaginação, ao talento e à visão extraordinária de um fotógrafo que deixou sua marca indelével na história da arte visual. Adentre um universo de imagens extraordinárias e experiencie a genialidade do ato de fotografar, cujas obras transcendem o tempo.</p>
    </div>
    <div class="container-fluid pt-5">
      <div class="row no-gutters"> 
        <div  data-bs-toggle="modal" data-bs-target="#ModalExposicao1" class=" pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 30.png" alt=""></div>
            <div class="row">
              <p>São Paulo
              <br>
              2006
              <br>
              Arte Divina
              </p>
            </div>
          </div>
        
        </div>
        <div   data-bs-toggle="modal" data-bs-target="#ModalExposicao2" class="pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 31.png" alt=""></div>
            <div class="row">
              <p>Amapá
              <br>
              2011
              <br>
              Despreparado
              </p>
            </div>
          </div>
        
        </div>
        <div   data-bs-toggle="modal" data-bs-target="#ModalExposicao3" class="pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 32.png" alt=""></div>
            <div class="row">
              <p>Canoas
              <br>
              2012
              <br>
              Aurora Negra
              </p>
            </div>
          </div>
        
        </div>
        <div   data-bs-toggle="modal" data-bs-target="#ModalExposicao4" class="pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 33.png" alt=""></div>
            <div class="row">
              <p>Lisboa
              <br>
              2017
              <br>
              Cotidiano
              </p>
            </div>
          </div>
       
        </div>
        <div   data-bs-toggle="modal" data-bs-target="#ModalExposicao5" class="pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 34.png" alt=""></div>
            <div class="row">
              <p>Amsterdam
              <br>
              2017
              <br>
              Ruas Paralelas
              </p>
            </div>
          </div>
       
        </div>
        <div   data-bs-toggle="modal" data-bs-target="#ModalExposicao6" class="pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 35.png" alt=""></div>
            <div class="row">
              <p>Colonia Del Sacramento
              <br>
              2018
              <br>
              ?
              </p>
            </div>
          </div>
        
        </div>
        <div   data-bs-toggle="modal" data-bs-target="#ModalExposicao7" class="pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 36.png" alt=""></div>
            <div class="row">
              <p>Bariloche
              <br>
              2018
              <br>
              Corbata Apretada
              </p>
            </div>
          </div>
        
        </div>
        <div   data-bs-toggle="modal" data-bs-target="#ModalExposicao8" class="pointer col-lg-3  col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2">
          <div class="row pb-5"><img src="../static/img/exposicoes/Rectangle 37.png" alt=""></div>
            <div class="row">
              <p>Mendoza
              <br>
              2018
              <br>
              Miserable
              </p>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </section>
  <section id="depoimentos" class="container-fluid px-md-5 pt-1">
    <div class="row justify-content-center pt-5">
      <p class="pt-4 headline text-center text-uppercase">Depoimentos</p>
      <p class="text-center w-75 mb-5">Esses depoimentos são um testemunho do nosso compromisso em oferecer serviços fotográficos excepcionais, deixando um legado de clientes felizes e satisfeitos  cujas histórias ilustram o valor e a qualidade dos nossos serviços.</p>
    </div>
    <div class="container-fluid pt-5 mt-5">
      <div class="row d-flex justify-content-center align-items-center "> 
        <div class="col-lg-3 p-3 col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2 bg-linear-d ">
            <div class="row "><img src="../static/img/depoimentos/Mask group (3).png" class="img-fluid depoimento-img" alt=""></div>
            <div class="row pt-4  depoimento-img lh-1">
              <p class="nome mb-2 fw-bold">Ana</p>
              <p class="ensaio mb-2">Ensaio Pessoal</p>
              <p class="ano">Dez-2022</p>
              <p class="depoimento">Estou encantada com as fotos capturadas pelo Rafael. 
                Seu olhar artístico e atenção aos detalhes resultaram em imagens verdadeiramente memoráveis. 
                Além disso, sua abordagem profissional e amigável tornaram a sessão fotográfica uma experiência 
                prazerosa. Recomendo seus serviços a todos que desejam registros autênticos e de alta qualidade.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3  p-3 col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2 bg-linear-d">
            <div class="row"><img src="../static/img/depoimentos/Mask group (2).png" class="img-fluid depoimento-img" alt=""></div>
            <div class="row depoimento-img pt-4 lh-1">
              <p class="nome mb-2 fw-bold">Carlos</p>
              <p class="ensaio mb-2">Ensaio de Casamento</p>
              <p class="ano">Fev-2023</p>
              <p class="depoimento">Nosso ensaio pré-casamento foi uma experiência incrível! Rafael capturou a essência da nossa história de amor de forma única. Cada foto transmite a emoção que sentimos um pelo outro. Sua abordagem profissional e gentil nos deixou confortáveis durante todo o processo. Essas fotos serão sempre uma lembrança preciosa do início da nossa jornada juntos.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3  p-3 col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2 bg-linear-d">
            <div class="row"><img src="../static/img/depoimentos/Mask group (1).png" class="img-fluid depoimento-img" alt=""></div>
            <div class="row pt-4 lh-1 depoimento-img">
              <p class="nome mb-2 fw-bold">Marta</p>
              <p class="ensaio mb-2">Ensaio de Gestação</p>
              <p class="ano">Mar-2023</p>
              <p class="depoimento">O ensaio de gravidez foi uma experiência emocionante! Rafael conseguiu retratar de forma delicada e autêntica toda a conexão que sentimos com nosso bebê. Cada foto transmite a serenidade, a felicidade e a ansiedade que vivenciamos nessa fase tão especial. Agradecemos ao fotógrafo por eternizar esses momentos de uma maneira tão bela.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3  p-3 col-md-6 d-flex justify-content-center align-items-center p-0 m-0">
          <div class="col text-center p-4 lh-2 bg-linear-d">
            <div class="row"><img src="../static/img/depoimentos/Mask group (4).png" class="img-fluid depoimento-img" alt=""></div>
            <div class="row pt-4 lh-1 depoimento-img">
              <p class="nome mb-2 fw-bold">Sofia</p>
              <p class="ensaio mb-2">Ensaio Editorial</p>
              <p class="ano">Jun-2023</p>
              <p class="depoimento">O ensaio fotográfico editorial foi um divisor de águas para a imagem visual do meu negócio. As fotos capturaram a essência e o profissionalismo que desejava transmitir, agregando valor à minha marca. Agora, posso mostrar aos meus clientes o cuidado e a dedicação por trás dos meus produtos. Estou extremamente satisfeito com o resultado.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="precos" class="container-fluid">
    <div class="row px-lg-5 text-orangered align-items-center justify-content-center">
      <div class="row justify-content-center pt-5">
        <p class="pt-4 headline text-center text-uppercase">Preços</p>
        <div class="container py-5">
          <div class="row justify-content-center pb-5">
            <div class="col-md-4 px-lg-5 table-responsive-sm  table-responsive-md">
              <table class="table caption-top">
                <caption class="fw-bold subheadline d-flex justify-content-end text-center">Ensaio Pessoal <br> $300</caption>
                <tbody class="text-white">
                  <tr class="">
                    <td class="td-p">Duração</td>
                    <td class="d-flex justify-content-end td-p">2 Horas</td>
                  </tr>
                  <tr>
                    <td class="td-p">Número de fotos</td>
                    <td class="d-flex justify-content-end td-p">20 fotos</td>
                  </tr>
                  <tr>
                    <td class="td-p">Tempo de edição</td>
                    <td class="d-flex justify-content-end td-p">7 dias</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-4  px-lg-5 table-responsive-sm table-responsive-md">
              <table class="table caption-top">
                <caption class="fw-bold subheadline d-flex justify-content-end text-center">Ensaio de Casal <br> $480</caption>          
                <tbody class="text-white">
                  <tr class="">                
                    <td  class="td-p">Duração</td>
                    <td class="d-flex justify-content-end td-p">3 Horas</td>
                  </tr>
                  <tr>
                    <td class="td-p">Número de fotos</td>       
                    <td class="d-flex justify-content-end td-p">30 fotos</td>
                  </tr>
                  <tr>                
                    <td class="td-p">Tempo de edição</td>      
                    <td class="d-flex justify-content-end td-p">10 dias</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row  justify-content-center pb-3">
            <div class="col-md-4  px-lg-5 table-responsive-sm table-responsive-md">
              <table class="table caption-top">
                <caption class="fw-bold subheadline d-flex justify-content-end text-center">Ensaio Familiar <br> $600</caption>
                <tbody class="text-white">
                  <tr class="">
                    <td class="">Duração</td>
                    <td class="d-flex justify-content-end">4 Horas</td>
                  </tr>
                  <tr>
                    <td>Número de fotos</td>
                    <td class="d-flex justify-content-end">40 fotos</td>
                  </tr>
                  <tr>
                    <td>Tempo de edição</td>
                    <td class="d-flex justify-content-end">15 dias</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-4  px-lg-5 table-responsive-sm table-responsive-md">
              <table class="table caption-top">
                <caption class="fw-bold subheadline d-flex justify-content-end text-center">Eventos <br> + $1.750</caption>             
                <tbody class="text-white">
                  <tr class="">               
                    <td class="">Duração</td>
                    <td class="d-flex justify-content-end">a consultar</td>
                  </tr>
                  <tr>          
                    <td>Número de fotos</td>                
                    <td class="d-flex justify-content-end">a consultar</td>
                  </tr>
                  <tr>            
                    <td>Tempo de edição</td>               
                    <td class="d-flex justify-content-end">a consultar</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <p class="text-center w-75 pb-5 mb-4">*Os preços podem variar de acordo com as necessidades específicas do cliente. Entre em contato através do formulário para solicitar um orçamento personalizado.</p>
      </div>
    </div>
  </section>
  <section id="contato" href="#contato" class="container-fluid p-5 d-flex align-items-center">
    <div class="row ps-lg-5 pt-md-5">
      <div class="col-lg-12 ps-lg-5 ">
        <p class="text-uppercase text-white headline-contato p-0 m-0">Contato</p>
        <p class="text-white subheadline-contato">Para uma conversa mais profunda!</p>
        <form action="rafaelsilva-db.php" method="POST">
          <div class="mb-2 text-white  pt-3">
            <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" placeholder="José Abreu De Lima" required>
          </div>
          <div class="mb-2 text-white">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="seuemail@example.com" required>
          </div>
          <div class="mb-2">
            <label for="message" class=" text-white form-label">Deixe sua mensagem</label>
            <textarea class="form-control" name="mensagem" id="message" placeholder="Gostaria de mais informações para orçamentos!" rows="3" required></textarea>
          </div>
          
          
        
          <div>
            <button type="submit" class="btn btn-light fw-bold">Enviar</button>
          </div>
        </form>
         
          <div class="col-lg-12 mt-2">
            <?php
            if (isset($_SESSION['mensagem'])) {
                if (strpos($_SESSION['mensagem'], 'sucesso') !== false) {
                    // Exibir a div de alert-success
                    echo '<div class="alert alert-success" role="alert">' . $_SESSION['mensagem'] . '</div>';
                } else {
                    // Exibir a div de alert-danger
                    echo '<div class="alert alert-danger" role="alert">' . $_SESSION['mensagem'] . '</div>';
                }

                // Limpar a variável de sessão após exibição
                unset($_SESSION['mensagem']);
            }
            ?>
        </div>






      
    </div>
  </section>
  <footer class="container-fluid">
    <div class="row pt-5">
      <div class="col-lg-4 col-md-4 d-flex align-items-center justify-content-center">
        <a class="navbar-brand fw-bold text-uppercase" href="#">Rafael Silva<span class="align-text-bottom registro">&#174;</span></a>
      </div>
      <div class="col-lg-4  col-md-4 pb-2 text-white  d-flex align-items-center justify-content-center">
        <a class="btn btn-outline-secondary btn-sm mx-1" href="#" role="button"><img src="../static/icon/whatsapp.png" class="" alt=""></a>
        <a class="btn btn-outline-secondary btn-sm mx-1" href="https://www.instagram.com/estersouza99/" role="button"><img src="../static/icon/instagram.png" class="" alt=""></a>
        <a class="btn btn-outline-secondary btn-sm mx-1" href="#" role="button"><img src="../static/icon/twitter.png" class="" alt=""></a>
      </div>
      <div class="col-lg-4  col-md-4 text-white  d-flex align-items-center justify-content-center "><a href="#">Política de privacidade</a></div>
    </div>
    <div class="row">
      <div class="col-lg-12 d-flex align-items-center justify-content-center "><img src="../static/img/Line 28.png" class="img-fluid" alt=""></div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="text-white pt-2  d-flex align-items-center justify-content-center"><a href="https://github.com/Ester-Farias">Desenvolvido por Ester Souza</a></p>
      </div>
    </div>
  </footer>
   
<!-- Modal Streat -->
<div class="modal fade" id="ModalStreat" tabindex="-1" aria-labelledby="ModalStreat" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselStreatCaptions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="5" aria-label="Slide 6" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="6" aria-label="Slide 7" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="7" aria-label="Slide 8" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="8" aria-label="Slide 9" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="9" aria-label="Slide 10" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="10" aria-label="Slide 11" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="11" aria-label="Slide 12" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="12" aria-label="Slide 13" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="13" aria-label="Slide 14" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide-to="14" aria-label="Slide 15" class="button-radius-carousel"></button>
                
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/street/streat1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/street/streat2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat5.png" class="d-block w-100" alt="...">
                
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat6.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat7.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat8.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat9.png" class="d-block w-100" alt="...">
                 
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat10.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat11.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat12.png" class="d-block w-100" alt="...">
               
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat13.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat14.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/street/streat15.png" class="d-block w-100" alt="...">
                  
                </div>
      
              
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="carousel-caption w-100 d-none d-md-block d-flex justify-content-start pe-5">
                <h4 class="fw-bold">Streat</h4>
                <p class="w-50">Sob olhares das ruas pedindo silêncio através do seus gritos barulhentos!</p>
                <p class="fw-bold">2004</p>
              </div>
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselStreatCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Nature -->
<div class="modal fade" id="ModalNature" tabindex="-1" aria-labelledby="ModalNature" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselNatureCaptions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="5" aria-label="Slide 6" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="6" aria-label="Slide 7" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="7" aria-label="Slide 8" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="8" aria-label="Slide 9" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="9" aria-label="Slide 10" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide-to="10" aria-label="Slide 11" class="button-radius-carousel"></button>
                
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/nature/nature1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/nature/nature2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature5.png" class="d-block w-100" alt="...">
                
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature6.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature7.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature8.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature9.jpg" class="d-block w-100" alt="...">
                 
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature10.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/nature/nature11.png" class="d-block w-100" alt="...">
                  
                </div>   
              
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="carousel-caption w-100 d-none d-md-block d-flex justify-content-start pe-5">
                <h4 class="fw-bold">Nature</h4>
                <p class="w-50">As montanhas erguem-se altivas, majestosas testemunhas do tempo.</p>
                <p class="fw-bold">2009</p>
              </div>
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselNatureCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Casamento -->
<div class="modal fade" id="ModalCasamento" tabindex="-1" aria-labelledby="ModalCasamento" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselCasamentoCaptions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="5" aria-label="Slide 6" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="6" aria-label="Slide 7" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="7" aria-label="Slide 8" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="8" aria-label="Slide 9" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide-to="9" aria-label="Slide 10" class="button-radius-carousel"></button>
                
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/casamento/casamento1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/casamento/casamento2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento5.png" class="d-block w-100" alt="...">
                
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento6.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento7.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento8.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento9.png" class="d-block w-100" alt="...">
                 
                </div>
                <div class="carousel-item">
                  <img src="../static/img/casamento/casamento10.png" class="d-block w-100" alt="...">
                  
                </div>
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="carousel-caption w-100 d-none d-md-block d-flex justify-content-start pe-5">
                <h4 class="fw-bold">Casamento</h4>
                <p class="w-50">No altar sagrado, duas almas se unem, laços de amor eterno!</p>
                <p class="fw-bold">20017</p>
              </div>
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselCasamentoCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Portroit -->
<div class="modal fade" id="ModalPortroit" tabindex="-1" aria-labelledby="ModalPortroit" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselPortroitCaptions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="5" aria-label="Slide 6" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="6" aria-label="Slide 7" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="7" aria-label="Slide 8" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="8" aria-label="Slide 9" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="9" aria-label="Slide 10" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="10" aria-label="Slide 11" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide-to="11" aria-label="Slide 12" class="button-radius-carousel"></button>
                
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/portroit/portrait1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/portroit/portrait2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait5.png" class="d-block w-100" alt="...">
                
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait6.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait7.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait8.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait9.png" class="d-block w-100" alt="...">
                 
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait10.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait11.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/portroit/portrait12.png" class="d-block w-100" alt="...">
               
                </div>
                
      
              
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="carousel-caption w-100 d-none d-md-block d-flex justify-content-start pe-5">
                <h4 class="fw-bold">Portrait</h4>
                <p class="w-50">Na teia dos encontros, almas se entrelaçam, histórias se entremeiam.</p>
                <p class="fw-bold">2020</p>
              </div>
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselPortroitCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Bebes -->
<div class="modal fade" id="ModalBebes" tabindex="-1" aria-labelledby="ModalBebes" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselBebesCaptions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="5" aria-label="Slide 6" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="6" aria-label="Slide 7" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="7" aria-label="Slide 8" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="8" aria-label="Slide 9" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="9" aria-label="Slide 10" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="10" aria-label="Slide 11" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="11" aria-label="Slide 12" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="12" aria-label="Slide 13" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide-to="13" aria-label="Slide 14" class="button-radius-carousel"></button>
                
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/bebes/bebes1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/bebes/bebes2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes5.png" class="d-block w-100" alt="...">
                
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes6.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes7.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes8.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes9.png" class="d-block w-100" alt="...">
                 
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes10.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes11.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes12.png" class="d-block w-100" alt="...">
               
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes13.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/bebes/bebes14.png" class="d-block w-100" alt="...">
                  
                </div>
               
      
              
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="carousel-caption w-100 d-none d-md-block d-flex justify-content-start pe-5">
                <h4 class="fw-bold">Bebês</h4>
                <p class="w-50">Pequenos milagres, sorrisos inocentes, encanto que preenche nossos dias.</p>
                <p class="fw-bold">2023</p>
              </div>
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselBebesCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>



<!-- Modal Exposição 1 -->
<div class="modal fade" id="ModalExposicao1" tabindex="-1" aria-labelledby="ModalExposicao1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao1Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="5" aria-label="Slide 6" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="6" aria-label="Slide 7" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="7" aria-label="Slide 8" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide-to="8" aria-label="Slide 9" class="button-radius-carousel"></button>
               
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao1/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao1/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao1/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao1/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao1/foto5.png" class="d-block w-100" alt="...">
                
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao1/foto6.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao1/foto7.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao1/foto8.png" class="d-block w-100" alt="...">
                  
                </div>
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao1Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Exposição 2 -->
<div class="modal fade" id="ModalExposicao2" tabindex="-1" aria-labelledby="ModalExposicao2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao2Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao2Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao2Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao2Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao2Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
               
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao2/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao2/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao2/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao2/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
               
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao2Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao2Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Exposição 3 -->
<div class="modal fade" id="ModalExposicao3" tabindex="-1" aria-labelledby="ModalExposicao3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao3Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao3Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao3Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao3Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao3Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
               
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao3/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao3/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao3/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao3/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
               
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao3Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao3Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Exposição 4 -->
<div class="modal fade" id="ModalExposicao4" tabindex="-1" aria-labelledby="ModalExposicao4" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao4Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao4Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao4Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao4Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao4Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
               
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao4/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao4/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao4/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao4/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
               
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao4Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao4Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Exposição 5 -->
<div class="modal fade" id="ModalExposicao5" tabindex="-1" aria-labelledby="ModalExposicao5" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao5Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao5Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao5Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao5Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao5Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
               
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao5/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao5/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao5/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao5/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
               
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
             
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao5Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao5Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Exposição 6 -->
<div class="modal fade" id="ModalExposicao6" tabindex="-1" aria-labelledby="ModalExposicao6" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao6Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao6Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao6Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao6Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao6Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao6Captions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
               
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao6/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao6/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao6/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao6/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao6/foto5.png" class="d-block w-100" alt="...">
                  
                </div>
               
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao6Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao6Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Exposição 7 -->
<div class="modal fade" id="ModalExposicao7" tabindex="-1" aria-labelledby="ModalExposicao7" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao7Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide-to="5" aria-label="Slide 6" class="button-radius-carousel"></button>
               
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao7/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao7/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao7/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao7/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao7/foto5.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao7/foto6.png" class="d-block w-100" alt="...">
                  
                </div>
               
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao7Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!-- Modal Exposição 8 -->
<div class="modal fade" id="ModalExposicao8" tabindex="-1" aria-labelledby="ModalExposicao8" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
        <div class=" container-fluid d-flex justify-content-center align-items-center popup-container">
    
          <div class="">
            <div id="carouselExposicao8Captions" class="carousel slide" data-bs-ride="carousel">
              
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExposicao8Captions" data-bs-slide-to="0" class="active button-radius-carousel" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExposicao8Captions" data-bs-slide-to="1" aria-label="Slide 2" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao8Captions" data-bs-slide-to="2" aria-label="Slide 3" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao8Captions" data-bs-slide-to="3" aria-label="Slide 4" class="button-radius-carousel"></button>
                <button type="button" data-bs-target="#carouselExposicao8Captions" data-bs-slide-to="4" aria-label="Slide 5" class="button-radius-carousel"></button>
                
              </div>
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  
                  <img src="../static/img/exposicoes/exposicao8/foto1.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  
                  <img src="../static/img/exposicoes/exposicao8/foto2.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao8/foto3.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao8/foto4.png" class="d-block w-100" alt="...">
                  
                </div>
                <div class="carousel-item">
                  <img src="../static/img/exposicoes/exposicao8/foto5.png" class="d-block w-100" alt="...">
                  
                </div>
                              
             
               <div class="container-button d-flex justify-content-end p-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
            </div>
              
              
               
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExposicao8Captions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExposicao8Captions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
              
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>


  


  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/js.js"></script>
</body>
</html>



            