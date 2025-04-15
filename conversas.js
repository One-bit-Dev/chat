const hiddenButtonFiles = document.getElementById('hiddenButtonFiles');
const boxConfig = document.getElementById("simpleConfiguration");
const boxOptions = document.getElementById("popUpOptions")

function openFiles() {
    if (hiddenButtonFiles.style.visibility === "hidden") {
        hiddenButtonFiles.style.visibility = "visible";
    } else {
        hiddenButtonFiles.style.visibility = 'hidden';
    }
}

function alternateConfigContacts() {
    if (boxConfig.style.display === "none") {
        boxConfig.style.display = "flex";
        if (boxConfig.style.display === "flex") {
            boxOptions.style.display = "none"; 
        }
    } else {
        boxConfig.style.display = "none";
    }
}

function openOptions() {

    if (boxOptions.style.display === "none" || boxOptions.style.display === "") {
        boxOptions.style.display = "flex";
        if (boxConfig.style.display === "flex") {
            boxOptions.style.display = "none"; 
        }
    } else {
        boxOptions.style.display = "none";
    }
}

// hover da scrollbar
const targetElement = document.getElementById("contacts");

targetElement.addEventListener("mouseenter", () => {
    document.documentElement.style.setProperty("--scrollbar-color", "#000000"); 
});
targetElement.addEventListener("mouseleave", () => {
    document.documentElement.style.setProperty("--scrollbar-color", "gray"); 
});

document.addEventListener('DOMContentLoaded', function() {
    openFiles();
    alternateConfigContacts();
});

//div arrastável
const dragPopUp = document.getElementById("popUpNotifications");

let offsetX, offsetY, isDragging = false;

dragPopUp.addEventListener("mousedown", (e) => {
    if (e.target !== dragPopUp) return; // Impede arrastar ao clicar em filhos

    isDragging = true;
    offsetX = e.clientX - dragPopUp.getBoundingClientRect().left;
    offsetY = e.clientY - dragPopUp.getBoundingClientRect().top;
    dragPopUp.style.cursor = "grabbing";
});

document.addEventListener("mousemove", (e) => {
    if (isDragging) {
        dragPopUp.style.left = `${e.clientX - offsetX}px`;
        dragPopUp.style.top = `${e.clientY - offsetY}px`;
        dragPopUp.style.position = "absolute";
    }
});

document.addEventListener("mouseup", () => {
    isDragging = false;
    dragPopUp.style.cursor = "grab";
});

const PopUpbox = document.getElementById("popUpNotifications");
const message = document.getElementById("messageAutor");

message.addEventListener("input", function() {
    this.style.height = "auto";
    this.style.height = Math.min(this.scrollHeight, 200) + "px";

});

message.addEventListener("mouseenter", function() { 
    document.documentElement.style.setProperty("--scrollbar-color", "#000000");
    PopUpbox.style.transition = "0.5s";
    PopUpbox.style.width = "80vw";
});

message.addEventListener("mouseleave", function() {
    document.documentElement.style.setProperty("--scrollbar-color", "gray");  
    PopUpbox.style.width = "30vw";
    message.style.height = Math.min(message.scrollHeight, 200) + "px";
    PopUpbox.style.transition = "0s";
});

const urgencyColor = document.getElementById("chooseColor").value
let cardNotification = new Object(
)
const messageAutor = document.getElementById("messageAutor").innerText
const urgencyMessage = document.getElementById("urgencyLevel")
urgencyMessage.style.backgroundColor = urgencyColor;
document.getElementById("chooseColor").addEventListener("change", function () {
    const urgencyColor = this.value; // Obtém o novo valor selecionado
    urgencyMessage.style.backgroundColor = urgencyColor; // Atualiza a cor
});

function registrarAcao(usuarioId, acao) {
    fetch("registrar_acao.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `usuario_id=${usuarioId}&acao=${encodeURIComponent(acao)}`
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error("Erro:", error));
}

// Exemplo: Usuário 5 realizou uma ação "Clicou no botão"
registrarAcao(5, "Clicou no botão");

const messageWrite = document.getElementById("textSpace");
const messageBox = document.getElementById("messageWrite");

messageWrite.addEventListener("input", function() {
    this.style.height = "auto";
    this.style.height = Math.min(this.scrollHeight, 200) + "px";
    mesageBox.style.height = Math.min(this.scrollHeight, 200) + "px";
});