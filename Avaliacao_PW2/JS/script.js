function mostrarSenha(){
    let senha = document.getElementById("senha").innerText;
    if(senha === "******"){
        document.getElementById("senha").innerText = "abcdef"
    }
    else{
        document.getElementById("senha").innerText = "******"
    }
}