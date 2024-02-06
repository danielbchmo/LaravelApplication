<!doctype html>
<html lang="en">

<head>
  <title>Aplicación con Laravel</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <br>

  <main class="container">
    <div class="card">
      <div class="card-header">Tareas:</div>
      <div class="card-body">

        <form action="{{ url('/') }}" method="post">
          @csrf
          Tarea:
          <input class="form-control" type="text" name="task" id="task" placeholder="Agregar tarea">
          <br>
          <input class="btn btn-primary" type="submit" value="Agregar tarea">
        </form>

        <br>

        <!------------------------------------TABLE------------------------------------------->
        <div class="table-responsive-sm table-bordered">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Acción</th>
                <th scope="col">Nombre de la Tarea</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tasks as $task)
              <tr class="">
                <td>
                  <form action="{{ route('task.destroy',$task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" value="Hecho">
                  </form>
                </td>
                <td>{{$task->task}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>


        </div>
      </div>
    </div>

    <br>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>