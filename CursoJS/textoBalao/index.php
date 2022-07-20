<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste JS 2</title>

  <style>

.custom-popover {
  background-color: #fafafa;
  border: solid 1px rgba(250, 160, 45);
  padding: 5px 8px 8px 8px;
  font-size: 12px;
  color: #999;
}
.pointer {
  cursor: pointer;
  padding-top: 2px;
    padding-bottom: 10px;
}

  </style>

</head>
<body>
<img src="help.png" class="pointer" width="20" alt="" data-bs-toggle="popover" data-bs-placement="right"
        data-bs-custom-class="custom-popover"
        data-bs-content="Texto explicativo.">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script>

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
const popover = new bootstrap.Popover('.example-popover', {
  container: 'body'
})



</script>



</body>
<script>

</script>

</html>