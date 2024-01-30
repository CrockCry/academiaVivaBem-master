function showAlert(mensagem, targetElement, timeout = 3000) {
    var mensagemDIv = document.getElementById(targetElement);
    mensagemDIv.innerHTML = mensagem;
    mensagemDIv.classList.remove('msgContato');

    setTimeout(function () {
        mensagemDIv.classList.add("msgContato");
    }, timeout);
}

function displayError(erros) {
    let todosOsErros = "";

    for (const [key, value] of Object.entries(erros)) {
        todosOsErros += `<div class="alert alert-danger">${value.join(", ")}</div>`;
    }

    if (todosOsErros) {
        showAlert(todosOsErros, "contatoMensagem");
    }
}



function contatoForm (e) {
    e.preventDefault();
    e.stopPropagation();

    var data = {
        nomeContato: document.getElementById('name').value,
        emailContato: document.getElementById('email').value,
        foneContato: document.getElementById('foneContato').value,
        assuntoContato: document.getElementById('subject').value,
        mensContato: document.getElementById('contactForm').value
   };


    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw errorData;
                });
            }
            return response.json();
        })
        .then((data) => {
            if (data.success) {
                showAlert(
                    `<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem'
                );
                document.getElementById('formContato').reset();
            } else {
                showAlert(
                    `<div class="alert alert-danger">Erro ao enviar email.</div>`,
                    "contatoMensagem"
                );
            }
        })

        .catch(error => {
            if (error.errors) {
                displayError(error.errors);
            } else {
                console.log("Erro desconhecido", error);
            }
        });
};



function newsForm (e) {

    e.preventDefault(); //evita que o formulário seja enviado por um submit
    e.stopPropagation();


    var data = {
        emailNews: document.getElementById('emailNews').value,
    }

    fetch('/contato/enviarnew', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw errorData;
                });
            }
            return response.json();
        })
        .then((data) => {
            if (data.success) {
                showAlert(
                    `<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem'
                );
                document.getElementById('formEmail').reset();
            } else {
                showAlert(
                    `<div class="alert alert-danger">Erro ao enviar email.</div>`,
                    "contatoMensagem"
                );
            }
        })
        .catch(error => {
            let errorMessage = "Erro desconhecido";

            if (error.errors) {
                // Se houver erros de validação, exiba cada mensagem de erro
                errorMessage = Object.values(error.errors).flat().join('<br>');
            } else if (error.message) {
                // Se houver uma mensagem de erro geral, exiba essa mensagem
                errorMessage = error.message;
            }

            showAlert(
                `<div class="alert alert-danger">${errorMessage}</div>`,
                "contatoMensagem"
            );
        });


};



