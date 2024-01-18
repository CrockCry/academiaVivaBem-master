function showAlert(mensagem, targetElement, timeout = 3000){
    var mensagemDIv = document.getElementById(targetElement);
    mensagemDIv.innerHTML = mensagem;
    mensagemDIv.classList.remove('msgContato');

    setTimeout(function(){
        mensagemDIv.classList.add("msgContato");
    }, timeout);
}

document.getElementById('formContato').addEventListener('submit', function (e) {

    e.preventDefault(); //evita que o formulário seja enviado por um submit

    var data = {
        nomeContato: document.getElementById('name').value,
        emailContato: document.getElementById('email').value,
        foneContato: document.getElementById('foneContato').value,
        assuntoContato: document.getElementById('subject').value,
        mensContato: document.getElementById('contactForm').value
    }

    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            "Content-Type": "application/json",
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (!response.ok){
                throw new Error('Erro no Servidor!');
            }
            return response.json();
        })
        .then(data => {
            showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem')
            document.getElementById('fromContato').reset();
        })
        .catch(errorResponse => {
            errorResponse,json().then(erroData => {
                if(erroData.erros){
                    let errorMessages = Object.values(errorData.erros).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
                    showAlert(errorMessages)
                }
            });
        });

});


document.getElementById('formEmail').addEventListener('submit', function (e) {

    e.preventDefault(); //evita que o formulário seja enviado por um submit

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
            if (!response.ok){
                throw new Error('Erro no Servidor!');
            }
            return response.json();
        })
        .then(data => {
            showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem')
            document.getElementById('formEmail').reset();
        })
        .catch(errorResponse => {
            errorResponse,json().then(erroData => {
                if(erroData.erros){
                    let errorMessages = Object.values(errorData.erros).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
                    showAlert(errorMessages)
                }
            });
        });

});


// function showAlert(mensagem, targetElementId, timeout = 3000) {
//     var messageDiv = document.getElementById(targetElementId);
//     messageDiv.innerHTML = mensagem;
//     messageDiv.classList.remove('msgContato');

//     setTimeout(function() {
//         messageDiv.classList.add('msgContato');
//     }, timeout);
// }



// document.getElementById('formContato').addEventListener('submit', function(e) {
//     e.preventDefault();

//     var data = {
//         nomeContato: document.getElementById('name').value,
//         emailContato: document.getElementById('email').value,
//         foneContato: document.getElementById('foneContato').value,
//         assuntoContato: document.getElementById('subject').value,
//         mensContato: document.getElementById('contactForm').value
//     }


//     fetch('/contato/enviar', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//         },
//         body: JSON.stringify(data)
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Erro na resposta do servidor');
//         }
//         return response.json();
//     })
//     .then(data => {
//         showAlert(`<div class="alert alert-success">${data.success}</div>`, 'contatoMensagem');
//         document.getElementById('formContato').reset();
//     })
//     .catch(errorResponse => {
//         errorResponse.json().then(errorData => {
//             if (errorData.errors) {
//                 let errorMessages = Object.values(errorData.errors).map(error => `<div class="alert alert-danger">${error}</div>`).join('');
//                 showAlert(errorMessages, 'contatoMensagem');
//             }
//         });
//     });
// });
