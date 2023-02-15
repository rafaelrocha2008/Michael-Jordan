<!DOCTYPE html>
<html>
 <?php 
  
//Define as informações de conexão com o banco de dados
$host = 'us-cdbr-east-06.cleardb.net';
$dbname = 'heroku_9e4fecbb6fbe6ff';
$username = 'bcba7a0545e3bd';
$password = '123b2b59';
$pogramador = 'Rafael Santos da Rocha';
date_default_timezone_set('America/Sao_Paulo');
//Tenta se conectar ao banco de dados

   /*$conn = new PDO("us-cdbr-east-06.cleardb.net;heroku_9e4fecbb6fbe6ff", $username, $password);
    //Define o modo de erro como exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Prepara a consulta SQL
    $query = "INSERT INTO `Jordan` (`ip`, `res`, `date`) VALUES (:value_1, :value_2, :value_3);";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':value_1', $_SERVER['REMOTE_ADDR']);
    $stmt->bindParam(':value_2', $_SERVER['HTTP_USER_AGENT']);
    $stmt->bindParam(':value_3', date('Y-m-d H:i:s'));
    $stmt->execute();
    $conn = null;*/
 /*
    $conn = mysqli_connect($host, $username, $password, $dbname);
    $sql = "INSERT INTO `Jordan` (`ip`, `res`, `date`) VALUES ('".$_SERVER['REMOTE_ADDR']."', '".$_SERVER['HTTP_USER_AGENT']."', '".date('Y-m-d H:i:s')."');";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    */
    $ser = $_SERVER['REMOTE_ADDR']?:($_SERVER['HTTP_X_FORWARDED_FOR']?:$_SERVER['HTTP_CLIENT_IP']);
  try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `jordan` (`ip`, `res`, `date`) VALUES ('".$er."', '".$_SERVER['HTTP_USER_AGENT']."', '".date('Y-m-d H:i:s')."');";
    $r = $pdo->prepare($sql);
    $r->execute();

  }catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
  }

   ?>
  
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rafael Santos da Rocha">
    <meta name="description" content="Michael Jordan - A Lenda do Basquete">
    <meta name="keywords" content="Michael Jordan, Basquete, NBA, Chicago Bulls, Jordan, NBA, Rafael, Santos, da Rocha, Rafael Santos da Rocha, MVP, All-Star, Jumpman, Air Jordan">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="google" content="notranslate">
    <meta name="google-site-verification" content="N6SNBLltKtWx16MFViuLkLR6SVAQ0xWG49n_nZVyGSI" />

    <title>Michael Jordan - A Lenda do Basquete</title>
    <link rel="stylesheet" type="text/css" href="./stylesheets/style.css">
  </head>
  <body>
    <header class="header" style="background-color: red">
      <div class="header-content">

        <h1 class="title">Michael Jordan - A Lenda do Basquete</h1>
                      <center><h1>23</h1></center>
      </div>
      <nav class="nav">
        <ul class="nav-list">
          <li class="nav-item"><a href="#biografia">Biografia</a></li>
          <li class="nav-item"><a href="#career">Carreira</a></li>
          <li class="nav-item"><a href="#achievements">Conquistas</a></li>
        </ul>
      </nav>
    </header>
    <main class="main">
      <section class="biografia" id="biografia">
    <h2 class="section-title">Biografia</h2>
    <p>Michael Jeffrey Jordan nasceu em 17 de fevereiro de 1963, em Nova Iorque. Filho de James e Deloris Jordan, ele cresceu na Carolina do Norte. Desde jovem, Jordan se destacou no basquete, e jogou na Universidade da Carolina do Norte antes de ser escolhido pelos Chicago Bulls na primeira escolha do draft da NBA de 1984.</p>
    <p>Durante sua carreira na NBA, Jordan venceu seis campeonatos e conquistou cinco vezes o título de melhor jogador da liga (MVP). Além disso, ele fez parte da Dream Team dos Estados Unidos que venceu o ouro olímpico em 1992. Jordan aposentou-se pela primeira vez em 1993, mas retornou à NBA em 1995 para liderar novamente os Chicago Bulls a três campeonatos consecutivos de 1996 a 1998.</p>
    <p>Após sua aposentadoria definitiva em 2003, Jordan tornou-se um empresário bem-sucedido, com sua marca Jordan, propriedade da Nike, sendo uma das mais famosas do mundo. Além disso, ele é proprietário da equipe da NASCAR 23XI Racing e do time da NBA Charlotte Hornets.</p>
</section>
      <section class="career" id="career">
        <h2 class="section-title">Carreira</h2>
        <p>Michael Jordan iniciou sua carreira na Universidade da Carolina do Norte, onde conquistou o título da NCAA em 1982. Em seguida, ele foi escolhido pelo Chicago Bulls na primeira escolha do draft de 1984, tornando-se uma das maiores estrelas da NBA. </p>
        <p>Desde o início, Jordan mostrou a todos seu talento e habilidade, levando o Chicago Bulls a muitas vitórias e títulos, incluindo seu primeiro título da NBA em 1991. Ao longo de sua carreira, ele foi eleito para 14 All-Star Games, venceu cinco prêmios MVP da temporada regular da NBA, e é o principal artilheiro da franquia de Chicago Bulls.</p>
        <p>Em 1993, Jordan decidiu se aposentar temporariamente para seguir seu sonho de jogar beisebol, mas retornou ao basquete em 1995 com a mesma determinação de antes. Ele liderou o Chicago Bulls a mais três títulos consecutivos entre 1996 e 1998, solidificando ainda mais sua posição como um dos melhores jogadores da NBA de todos os tempos.</p>
        <p>Após se aposentar pela segunda vez em 2003, Jordan tornou-se proprietário da equipe da NASCAR 23XI Racing e do time da NBA Charlotte Hornets. Mesmo após seu encerramento da carreira, sua influência no esporte e sua marca pessoal continuam a ser sentidas.</p>
      </section>
<style>
.section-title {
  text-align: center;
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
}

section .biografia {
  padding: 50px;
  background-color: #F2F2F2;
  text-align: justify;
}

.career {
  padding: 50px;
  background-color: #F2F2F2;
  text-align: justify;
}
</style>
      <section class="achievements" id="achievements">
        <h2 class="section-title">Conquistas</h2>
        <p>Jordan foi eleito o melhor jogador da temporada regular por cinco vezes, melhor jogador das finais em todos os seus seis títulos, 10 vezes incluído entre All-NBA Team e nove vezes para o NBA All-Defensive Team. Ele participou de 13 NBA All-Star Game e foi melhor jogador do All-Star Game em três oportunidades. Ele é um dos maiores marcadores do basquete de todos os tempos, tendo uma média de pontos durante toda a carreira de 30,1
pontos em quinze temporadas.</p>
<ul class="achievement-list">
<li>5 vezes eleito o melhor jogador da temporada regular</li>
<li>Melhor jogador das finais em todos os seus seis títulos</li>
<li>10 vezes incluído no All-NBA Team</li>
<li>9 vezes incluído no NBA All-Defensive Team</li>
<li>13 vezes participou do NBA All-Star Game</li>
<li>Melhor jogador do All-Star Game em três oportunidades</li>
<li>Média de pontos durante toda a carreira de 30,1 pontos em quinze temporadas</li>
</ul>
</section>
<section class="career-highlights" id="career-highlights">
<h2 class="section-title">Principais Momentos da Carreira</h2>
<p>Jordan teve uma carreira lendária, com muitos momentos marcantes. Aqui estão alguns dos seus principais momentos da carreira:</p>
<ul class="career-highlight-list">
<li>69 pontos contra os Cleveland Cavaliers em 28 de março de 1990</li>
<li>Bicampeão dos Jogos Olímpicos com a Seleção Estadunidense</li>
<li>Enterradas icônicas na linha do lance livre</li>
<li>Seis títulos da NBA e melhor jogador das finais em todos eles</li>
<li>Introdução no Basketball Hall of Fame em 2009</li>
<li>Proprietário do Charlotte Hornets e da equipe de corrida 23XI Racing</li>
</ul>
</section>
<section class="trivia" id="trivia">
  <h2 class="section-title">Curiosidades</h2>
  <ul class="trivia-list">
    <li>Antes de se tornar um jogador de basquete profissional, Jordan tentou jogar baseball profissionalmente.</li>
    <li>Jordan tem seu próprio tênis de basquete, a linha Air Jordan, que é produzida pela Nike.</li>
    <li>Ele é um dos atletas mais bem pagos de todos os tempos, tendo ganho mais de 1 bilhão de dólares ao longo de sua carreira.</li>
    <li>Ele é dono da equipe da NBA, Charlotte Hornets.</li>
    <li>Jordan é conhecido por sua competitividade extremamente alta e por nunca desistir de um jogo.</li>
    <li>Ele é considerado por muitos como o melhor jogador de basquete de todos os tempos.</li>
  </ul>
</section>
<section class="legacy" id="legacy">
        <h2 class="section-title">Legado</h2>
        <p>O legado de Michael Jordan na NBA é inegável. Ele é considerado por muitos como o maior jogador de basquete de todos os tempos, tendo definido a era dourada da NBA nos anos 90. Além de suas habilidades incríveis no court, Jordan é conhecido por sua determinação e competitividade feroz, tornando-o um dos atletas mais bem sucedidos e influentes de todos os tempos.</p>
        <p>Hoje, Jordan ainda é um dos maiores embaixadores da NBA, com a marca "Jumpman" sendo uma das mais reconhecidas no mundo do esporte e do estilo de vida. Seu impacto no basquete é sentido até hoje, com muitos jogadores da atualidade tentando emular seu sucesso e sua habilidade única.</p>
</section>
<section class="footer" id="footer">
        <p class="copyright"> <?/*php echo date('Y ') */?>&copy;  Todos os direitos reservados</p>
        <!-- Feito por Rafael Santos da Rocha !-->
        <script >
          console.log("Feito por Rafael Santos da Rocha");
        </script>
</section>
    </main>
   
  </body>
</html>
