
// ADD, EDIT, SEARCH & REMOVE FUNCTIONS

var clientesRef = db.collection('clientes');    // clientes collection ref. Used to make easly to code

// ADD FUNCTION  working 

var client;

function readInputs(){              // read the inputs values and send it to object properties. 

    client = {
        nome : document.querySelector('#input-nome').value,
        tel : document.querySelector('#input-telefone').value,
        email : document.querySelector('#input-email').value,
        cep : document.querySelector('#input-cep').value,
        cidade : document.querySelector('#input-cidade').value, 
        uf : document.querySelector('#input-uf').value,
        bairro : document.querySelector('#input-bairro').value,
        rua : document.querySelector('#input-rua').value,
        n : document.querySelector('#input-n').value,
        cpf : document.querySelector('#input-cpf').value,
        obs : document.querySelector('#input-obs').value
    }

    return client;
}

function addClient(){               // get readInputs() and send the object returned to the database

    readInputs();

    clientesRef.doc()
    .set(client)
    .then(alert('SUCESSO! Adicionado a lista'));

} 

// ADD FUNCTION   //  

// REMOVE FUNCTION  working

function removeClient(client){

    clientesRef.doc(client)
    .delete()
    .then(function() {
        console.log("Deletado com sucesso!");
    }).catch(function(error) {
        console.error("Error removing document: ", error);
    });
    
}


//  REMOVE FUNCTION     //

//    EDIT FUNCTION     working

function editClient(id){

    const client = {

        nome : document.querySelector('#input-nome').value,
        tel : document.querySelector('#input-telefone').value,
        email : document.querySelector('#input-email').value,
        cep : document.querySelector('#input-cep').value,
        cidade : document.querySelector('#input-cidade').value, 
        uf : document.querySelector('#input-uf').value,
        bairro : document.querySelector('#input-bairro').value,
        rua : document.querySelector('#input-rua').value,
        n : document.querySelector('#input-n').value,
        cpf : document.querySelector('#input-cpf').value,
        obs : document.querySelector('#input-obs').value
    }

    clientesRef.doc(id).set(client , { merge: true });

}




//    EDIT FUNCTION    //

//    BROWSE FUNCTION 

var cli

function printTabela(){

    db.collection("clientes").where("nome", "==", "alo teste")
        .onSnapshot(function(querySnapshot) {
            var clientes = [];
            querySnapshot.forEach(function(doc) {
                clientes.push(doc.data());
            });

            cli = JSON.stringify(clientes);
            console.log(cli);    

        });
}
