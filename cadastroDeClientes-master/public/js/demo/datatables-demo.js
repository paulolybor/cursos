
// Get db Objects

  var ent = [ 
    {
      "bairro": "123",
      "cep": "ansdmasd",
      "cidade": "3213",
      "cpf": "64",
      "email":"fedas",
      "n": "123",
      "nome": "alo teste",
      "obs": "gfsdfds",
      "rua": "3214",
      "tel": "124",
      "uf": "sp"
    }
  ];


$(document).ready( function () {

  db.collection("clientes").where("nome", "==", "abner persio")
  .onSnapshot(function(querySnapshot) {
    
      var clientes = [];

      querySnapshot.forEach(function(doc) {
          clientes.push(doc.data());
      });

      cli = clientes;
      console.log(cli);
      console.log(ent);


      // resolver problema que esse valor não está ficando global. não sei o que fazer de verdade

      // Call the dataTables jQuery plugin

      $('#dataTable').DataTable( {
        data: cli,
        columns: [
          { data: "nome"},
          { data: "cidade"},
          { data: "uf"},
          { data: "cep"},
          { data: "tel"},
          { data: "bairro"},
          { data: "rua"},
          { data: "email"},
          { data: "cpf"},
          
        ]
      });
  });
});




// $(document).ready( function () {

  // $('#dataTable').DataTable( {
  //   data: ent,
  //   columns: [
  //     { data: 'nome'},
  //     { data: 'cidade'},
  //     { data: 'uf'},
  //     { data: 'cep'},
  //     { data: 'telefone'},
  //     { data: 'bairro'},
  //     { data: 'endereco'},
  //     { data: 'email'},
  //     { data: 'cpf'}
  //   ]
  // } );
//  } );