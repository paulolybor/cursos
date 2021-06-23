<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Comparação</title>
</head>
<body>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-dark">
          <tr>
            <td>Valor Inicial</td>
            <td><?=$_GET['valor_base']?></td>
          </tr>
            <tr>
            <td>Valor com Desconto</td>
            <td><?=$_GET['valor']?></td>
          </tr>
          <tr>
            <td>Valor Final</td>
            <td><?=$resultados[0]['valor_final']?></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-outline-success">Finalizar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>