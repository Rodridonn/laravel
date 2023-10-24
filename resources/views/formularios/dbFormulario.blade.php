<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src='build/pdfmake.min.js'></script>
 	  <script src='build/vfs_fonts.js'></script>
    

    <title>Base de datos Expediente Personal Aeronáutico</title>
</head>
<body>

<div class="container mt-5">

    <div class="table-responsive">
              <!-- Projects table -->
              <table id="myTable" >
            <thead class="thead-light">
              <tr>
                  <th scope="col">id</th>
                  <th scope="col">imagenInputs</th>
                  <th scope="col">nombre</th>
                  <th scope="col">apellido_paterno</th>
                  <th scope="col">apellido_materno</th>
                  <th scope="col">lugar_de_nacimiento</th>
                  <th scope="col">fecha_de_nacimiento</th>
                  <th scope="col">nacionalidad</th>
                  <th scope="col">cedula_de_identidad</th>
                  <th scope="col">profesion</th>
                  <th scope="col">whatsApp</th>
                  <th scope="col">email</th>
                  <th scope="col">laboral</th>
                  <th scope="col">licencias1</th>
                  <th scope="col">habilitaciones1</th>
                  <th scope="col">fecha1</th>
                  <th scope="col">licencias2</th>
                  <th scope="col">habilitaciones2</th>
                  <th scope="col">fecha2</th>
                  <th scope="col">licencias3</th>
                  <th scope="col">habilitaciones3</th>
                  <th scope="col">fecha3</th>
                  <th scope="col">instruccion1</th>
                  <th scope="col">universidad1</th>
                  <th scope="col">instruccion2</th>
                  <th scope="col">universidad2</th>
                  <th scope="col">instruccion3</th>
                  <th scope="col">universidad3</th>
                  <th scope="col">cargos1</th>
                  <th scope="col">institucion1</th>
                  <th scope="col">ffinicial1</th>
                  <th scope="col">ffinal1</th>
                  <th scope="col">cargos2</th>
                  <th scope="col">institucion2</th>
                  <th scope="col">ffinicial2</th>
                  <th scope="col">ffinal2</th>
                  <th scope="col">cargos3</th>
                  <th scope="col">institucion3</th>
                  <th scope="col">ffinicial3</th>
                  <th scope="col">ffinal3</th>
                  <th scope="col">reuniones1</th>
                  <th scope="col">lugar1</th>
                  <th scope="col">reuniones2</th>
                  <th scope="col">lugar2</th>
                  <th scope="col">reuniones3</th>
                  <th scope="col">lugar3</th>
                  <th scope="col">reentrenamiento1</th>
                  <th scope="col">fecha_reentrenamiento1</th>
                  <th scope="col">reentrenamiento2</th>
                  <th scope="col">fecha_reentrenamiento2</th>
                  <th scope="col">reentrenamiento3</th>
                  <th scope="col">fecha_reentrenamiento3</th>
                  <th scope="col">recurrentes1</th>
                  <th scope="col">fecha_recurrentes1</th>
                  <th scope="col">recurrentes2</th>
                  <th scope="col">fecha_recurrentes2</th>
                  <th scope="col">recurrentes3</th>
                  <th scope="col">fecha_recurrentes3</th>
                  <th scope="col">Acciones</th>
              </tr>
            </thead>

            <tbody>

            @if(isset($formularios))
            @foreach ($formularios as $formulario)
                      <tr>
                          <td>{{ $formulario->id }}</td>
                          <td>
                            <img src="{{ asset($formulario->imagenInputs) }}" width= '50' height='50' class="img img-responsive" />
                          </td>
                          <td>{{ $formulario->nombre }}</td>
                          <td>{{ $formulario->apellido_paterno }}</td>
                          <td>{{ $formulario->apellido_materno }}</td>
                          <td>{{ $formulario->lugar_de_nacimiento }}</td>
                          <td>{{ $formulario->fecha_de_nacimiento }}</td>
                          <td>{{ $formulario->nacionalidad }}</td>
                          <td>{{ $formulario->cedula_de_identidad }}</td>
                          <td>{{ $formulario->profesion }}</td>
                          <td>{{ $formulario->whatsApp }}</td>
                          <td>{{ $formulario->email }}</td>
                          <td>{{ $formulario->laboral }}</td>
                          <td>{{ $formulario->licencias1 }}</td>
                          <td>{{ $formulario->habilitaciones1 }}</td>
                          <td>{{ $formulario->fecha1 }}</td>
                          <td>{{ $formulario->licencias2 }}</td>
                          <td>{{ $formulario->habilitaciones2 }}</td>
                          <td>{{ $formulario->fecha2 }}</td>
                          <td>{{ $formulario->licencias3 }}</td>
                          <td>{{ $formulario->habilitaciones3 }}</td>
                          <td>{{ $formulario->fecha3 }}</td>
                          <td>{{ $formulario->instruccion1 }}</td>
                          <td>{{ $formulario->universidad1 }}</td>
                          <td>{{ $formulario->instruccion2 }}</td>
                          <td>{{ $formulario->universidad2 }}</td>
                          <td>{{ $formulario->instruccion3 }}</td>
                          <td>{{ $formulario->universidad3 }}</td>
                          <td>{{ $formulario->cargos1 }}</td>
                          <td>{{ $formulario->institucion1 }}</td>
                          <td>{{ $formulario->ffinicial1 }}</td>
                          <td>{{ $formulario->ffinal1 }}</td>
                          <td>{{ $formulario->cargos2 }}</td>
                          <td>{{ $formulario->institucion2 }}</td>
                          <td>{{ $formulario->ffinicial2 }}</td>
                          <td>{{ $formulario->ffinal2 }}</td>
                          <td>{{ $formulario->cargos3 }}</td>
                          <td>{{ $formulario->institucion3 }}</td>
                          <td>{{ $formulario->ffinicial3 }}</td>
                          <td>{{ $formulario->ffinal3 }}</td>
                          <td>{{ $formulario->reuniones1 }}</td>
                          <td>{{ $formulario->lugar1 }}</td>
                          <td>{{ $formulario->reuniones2 }}</td>
                          <td>{{ $formulario->lugar2 }}</td>
                          <td>{{ $formulario->reuniones3 }}</td>
                          <td>{{ $formulario->lugar3 }}</td>
                          <td>{{ $formulario->reentrenamiento1 }}</td>
                          <td>{{ $formulario->fecha_reentrenamiento1 }}</td>
                          <td>{{ $formulario->reentrenamiento2 }}</td>
                          <td>{{ $formulario->fecha_reentrenamiento2 }}</td>
                          <td>{{ $formulario->reentrenamiento3 }}</td>
                          <td>{{ $formulario->fecha_reentrenamiento3 }}</td>
                          <td>{{ $formulario->recurrentes1 }}</td>
                          <td>{{ $formulario->fecha_recurrentes1 }}</td>
                          <td>{{ $formulario->recurrentes2 }}</td>
                          <td>{{ $formulario->fecha_recurrentes2 }}</td>
                          <td>{{ $formulario->recurrentes3 }}</td>
                          <td>{{ $formulario->fecha_recurrentes3 }}</td>
                          <td>Acciones</td>
                        </tr>
                      </tr>
                  @endforeach
            @else
                  
            @endif
                  
    
            </tbody>

              </table>
    </div>

</div>          
          
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
      <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
      <script>
          $(document).ready(function() {
            $('#myTable').DataTable( {
                buttons: [
                    {
                        extend: 'pdf',
                        text: 'Save current page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }
                ]
            } );
          });
      </script>

        
</body>
</html>