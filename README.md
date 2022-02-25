# API Sorteios Monetizze

<li><b>Linguagem de Programação:</b> PHP </li>
<li><b>Outros:</b> HMLT e JQUERY</li>
<li><b>Design:</b> Materialize CSS -> https://materializecss.com
<li><b>Autor:</b> Rogério Rodrigues
  
#  COMO SUBIR O APP?

  É necessário ter o php instalado em sua maquina, caso esteja no Windows você pode instalar algum pacote como: Xaamp, Wampserver.
  Após ter o php em sua maquina, basta roda o seguinte comando dentro da pasta do projeto:
  
  <code>php -S localhost:8000</code>
  
  Abra seu navegador e acesse:
  
  <code>http://localhost:8000/</code>
  
  #  COMO EXECUTAR?
  
  A tela incial irá exibir um formulário para entrada de quantidade de:
  <li>Dezenas</li>
  <li>Bilhetes</li>
  <br>
  Após preencher, basta clicar em enviar.
  <br>
  O sistema irá fazer algumas validações para atender as seguintes regras:
  
  <li>Um tripulante pode solicitar até 50 bilhetes;</li>
  <li>A quantidade de dezenas deve ser informada pelo tripulante e pode variar de 6 a 10
dezenas;</li>
<br>

Caso alguma das regras não seja contemplada o sistema irá redirecionar para tela inicial e exibir o aviso.

Em caso de sucesso, o sistema SIMULA VISUALMENTE um sorteio em tempo real, exibindo texto de cada etapa do sorteio e bilhetes.
Após concluir, os dados são exibido gradativamente na tela mas em poucos segundo, BILHETE DO SORTEIO em primeiro, depois cada bilhete do usuário com os devidos numeros marcados.

Ao final há um botão reiniciar um novo sorteio.

# O QUE FAZ E O QUE NÃO FAZ:
<br>
<li>Permite usuário digitar dezenas e bilhetes.</li>
<li>Executa Sorteio e identifica número que foram contemplatos.</li>
<li>Valida dados de entrada e redireciona usuário para garantir preenchimento correto.</li>
<li>Faz aviso de campo incorrentos.</li>
<li>Possui botão para reeniciar sorteio.</li>
<li>Exibição de bilhete soteado.</li>
<li>Exibição dos bilhetes separados.</li>
<br><br>
<li>Não faz uso de frameworks.</li>
<li>Não faz inserção de dados.</li>
