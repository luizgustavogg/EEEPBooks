//console.log("teste");

const form = document.querySelector(".login-page form"),
  continueBtn = form.querySelector(".login-page button"),
  errorText = form.querySelector(".errortxt");
  correctText = form.querySelector(".correctText");

form.onsubmit = (e) => {
  e.preventDefault(); //impedindo a forma de submit

}

continueBtn.onclick = () => {
  //console.log("continueBtn");

  // Vamos começar

  let xhr = new XMLHttpRequest(); //criando XML objeto
  xhr.open("POST", "action/register.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        if (data == "Pedido de Cadastro realizado com sucesso, Por favor esperar a aceitação do administrador") {
          correctText.textContent = data;
          errorText.style.display = "none";
          correctText.style.display = "block";
        } else {
          errorText.textContent = data;
          correctText.style.display = "none";
          errorText.style.display = "block";
        }
      }
    }
  }
  /* temos que enviar os dados de formulário através ajax para php */
  let formData = new FormData(form); //criando novas formasDeta Object
  xhr.send(formData); //enviando os dados do formulário para php
}
