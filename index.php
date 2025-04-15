<!DOCTYPE html><!---->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="block1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
</head>
<body>
    <div id="popUpOptions">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>        
        <section class="optionButtons">        
            <button type="button" class="optionButtons" id="createGroup"><i class="bi bi-plus-circle-fill"></i></button>
            novo grupo
        </section>
        <section class="optionButtons">        
            <button type="button" class="optionButtons" id="conectAccount"><i class="bi bi-people-fill"></i></button>
            sair
        </section>
    </div>
    <div id="NotificationsConfig">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>    
    </div>
    <div id="accountConfig">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
    </div>
    <div id="help">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
    </div>
    <div id="shortCutConfig">
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
    </div>
    <div id="popUpNotifications"> <!--para o usuário criar uma notificação contendo informações sobre a tarefa a ser realizada, e posteriormente enviar para outro usuário-->
        <button class="close"><i class="bi bi-x-circle-fill"></i></button>
        <form action="processing_notification.php" id="notification" method="POST">
            <div id="notificationMessage">
                <textarea name="" id="messageAutor" rows="2"></textarea><!--aqui ficará a mensagem do autor da notificação para o remetente-->
            </div>
            <div id="informations" class="block">
                <section id="urgency" class="item">
                    <h4>Urgência</h4>
                    <div id="urgencyLevel" class="informationsProperty" name="urgencyLevel"><!--essa div deverá assumir alguma cor de acordo com o nivel de urgencia da tarefa-->
                        <h4>breve</h4><!--essa string deverá assumir o valor referente à cor escolhida pra div-->
                    </div>
                    <select name="chooseColor" id="chooseColor"><!--as options definirão a cor e o valor da div acima, será definido pelo autor, e o elemento deverá desaparecer para o destinatário-->
                        <option value="red">urgente</option>
                        <option value="orange">pouco urgente</option>
                        <option value="yellow">sem urgência</option>
                    </select>
                </section>
                <section id="solved" class="item"> <!--essa seção é para abortar o pedido, caso ja tenha sido realizado com antecedencia-->
                    <h4>Concluido?</h4>
                    <button id="solvedButton" class="informationsProperty">sim</button>
                </section>
                <section id="term" class="item">
                    <h4>Solucionar até</h4>
                    <input type="time" style="height: 40%;" class="informationsProperty" name="Time"><!--para o remetente definir um prazo para a atidivade ser realizada-->
                </section>
            </div>
            <div id="toPostpone" class="block"><!--essa seção será invisivel para o remetente. sua função é permitir que o destinatário redefina o horário em que o alarme da notificação deverá tocar novamente-->
                <h4>Reagendar alarmes para quando?</h4>
                <div style="width: 100%; height: 50%; display: flex; align-items: center; justify-content: space-evenly;">
                    <h4>Dia:</h4>
                    <input type="date">
                    <h4>Horário:</h4>
                    <input type="time">
                </div>
                <input type="submit"><!--apenas para redefinir o horário, se for melhor, pode ser um button-->
            </div>
            <div id="response" class="block"></div><!--para o remetente responder quando concluir a tarefa, se quiser-->
            <input type="submit">
        </form>
    </div>
    <div id="principalBody">
        <div id="block1">
            <button id="back" class="back"><i class="bi bi-arrow-left"></i></button>
            <section id="buttonsConfig">
                <button id="config" class="config" onclick="alternateConfigContacts()"><i class="bi bi-gear-fill"></i></button>
                <button id="user" class="config"><i class="bi bi-person-fill"></i></button>
            </section>
        </div>
        <div id="block2">
            <section id="topBar">
                <div id="search-options">
                    <section id="searchButton">
                        <input type="search" id="searchBar" placeholder="Pesquisar conversa">
                    </section>
                    <section id="buttonOptions">
                        <button id="option" class="option" onclick="openOptions()"><i class="bi bi-three-dots-vertical"></i></button>
                    </section>
                </div>     
            </section>
            <section id="contacts">
                <section id="people">
                    <section id="contact1" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Grupo Adm</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact2" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Narcisa</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact3" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Rafaela</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact4" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Leo</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact5" class="contact">
                        <section class="photoContact"></section>
                        <section class="name">Renan</section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact6" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact7" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact8" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact9" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact10" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact11" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact12" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact13" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact14" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                    <section id="contact15" class="contact">
                        <section class="photoContact"></section>
                        <section class="name"></section>
                        <section class="messageNumber">0</section>
                    </section>
                </section>
                <section id="groups"></section>
            </section>
            <section id="simpleConfiguration">
                <section class="configs" id="photoName">
                    <div id="photo"></div>
                    <h3></h3>
                </section>
                <section class="configs" id="notifiations">
                    <h3>Notificações</h3>
                    <i class="bi bi-bell"></i>
                </section>
                <section class="configs" id="account">
                    <h3>Conta</h3>
                    <i class="bi bi-person-fill"></i>
                </section>
                <section class="configs" id="theme">
                    <h3>Tema</h3>
                    <i class="bi bi-droplet-half"></i>
                </section>
                <section class="configs" id="help">
                    <h3>Ajuda</h3>
                    <i class="bi bi-question-lg"></i>
                </section>
                <section class="configs" id="shortCut">
                    <h3>Atalhos do teclado</h3>
                    <i class="bi bi-card-text"></i>
                </section>
            </section>
        </div>
        <div id="block3">
            <section id="contactInformations"></section>
            <section id="conversation">
                <div id="messageOut">
                    <div id="messageInformations">
                        <section id="photoAutor"></section>
                        <section id="setor">Secretaria</section>
                        <section id="dateTime">10/05/2025</section>
                    </div>
                    <section id="textMessage">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum similique dolores reprehenderit? Repudiandae, cumque laudantium iusto accusamus ducimus, sit reiciendis prodivent ipsa incidunt quidem, voluptatum officiis esse maiores tempora consequatur.</section>
                </div>
                <section id="chatEvents"></section>
                <div id="messageMe">
                    <div id="messageInformations">
                        <section id="dateTime">10/05/2025</section>
                        <section id="setor">Informática</section>
                        <section id="read" style="color: rgb(0, 255, 170);">lida</section>
                    </div>
                    <section id="textMessage">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum similique dolores reprehenderit?</section>
                </div>
            </section>
            <section id="messageWrite">
                <form action="processing_message.php" method="POST" enctype="multipart/form-data" id="formMessage">
                    <button type="button" id="openFile" onclick="openFiles()"><i class="bi bi-file-earmark-plus-fill"></i></button>
                    <div id="hiddenButtonFiles">
                        <input type="file" class="writeMessage" id="chooseFiles"></input>
                    </div>
                    <textarea class="writeMessage" id="textSpace" rows="1"></textarea>
                    <input type="submit" value="Enviar" class="writeMessage" id="Send"></input>
                </form>
            </section>
        </div>
    </div>
    <script src="conversas.js"></script>
</body>
</html>
