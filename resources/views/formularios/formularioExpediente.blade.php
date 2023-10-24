<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario NAABOL</title>

    <link rel="stylesheet" href="style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600;700&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

    <div class="page">
        <header>
            <h1>CIAC - NAABOL</h1>
            <p>NAABOL - UNIDAD NACIONAL DE GESTIÓN DE INSTRUCCIÓN</p>
            <p>Expediente Personal Aeronáutico</p>
            <p>NAABOL-FORM-PI-01</p>
        </header>
    </div>
        
    <form id="my-form" method="POST" action="/formulario-expediente" enctype="multipart/form-data">
    @csrf
        <div class="page">      
        <div class="page">
                <fieldset>
                    <div class="fieldset-wrapper">
                        <legend></legend>
                        <form method="POST" enctype="multipart/form-data">
                            <!-- Otros campos del formulario -->
                            <div class="input-wrapper">
                                <label for="imagenInput">Cargue una foto frontal con un fondo de color celeste</label>
                                <input class="form-control" type="file" id="imagenInput" name="imagenInput" onchange="mostrarImagenPreview(event)">
                            </div>
                            <div class="imagen-preview">
                                <img id="imagenPreview" src="#" alt="Vista previa de la imagen" style="max-width: 300px; max-height: 300px; display: none;">
                            </div>
                        </form>
                        

                        <style>
                            .imagen-preview {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 300px; /* Altura deseada para el contenedor */
                                border: 1px solid #ccc; /* Borde para mayor claridad */
                            }
                        
                            #imagenPreview {
                                max-width: 100%;
                                max-height: 100%;
                            }
                        </style>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                // Capturar el evento de cambio del input de tipo "file"
                                $('#imagenInput').on('change', function() {
                                    // Obtener el archivo seleccionado
                                    var file = $(this).prop('files')[0];
                                
                                    // Crear un objeto URL para la previsualización de la imagen
                                    var imageURL = URL.createObjectURL(file);
                                
                                    // Mostrar la imagen previsualizada
                                    $('#imagenPreview').attr('src', imageURL).show();
                                });
                            });
                        </script>


                    </div>
                </fieldset>
    
        </div>
            <fieldset>
                <div class="fieldset-wrapper">
                    <p>La información que nos proporcione en este formulario es de gran importancia para el 
                    registro de su expediente personal. Le rogamos que verifique y asegure la exactitud de sus datos. 
                    </p>
                    <p>"Le recordamos que utilizaremos su correo electrónico o número personal para futuras comunicaciones"</p>
                    <legend>DATOS GENERALES</legend>

                    <div class="input-wrapper">
                        <label for="">Nombre(s) <span></span></label>
                        <input type="text" id="nombre" name="nombre" >
                    </div>

                    <div class="input-wrapper">
                        <label for="">Apellido Paterno<span></span></label>
                        <input type="text" id="apellido_paterno" name="apellido_paterno">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Apellido Materno<span></span></label>
                        <input type="text" id="apellido_materno" name="apellido_materno">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Lugar de Nacimiento<span>(Solo el Nombre del Departamento)</span></label>
                        <input type="text" id="lugar_de_nacimiento" name="lugar_de_nacimiento">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Fecha de Nacimiento<span></span></label>
                        <input type="date" id="fecha_de_nacimiento" name="fecha_de_nacimiento">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Nacionalidad<span></span></label>
                        <input type="text" id="nacionalidad" name="nacionalidad">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Número de Cedula de Identidad<span>(solamente números)</span></label>
                        <input type="number" id="cedula_de_identidad" name="cedula_de_identidad">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-whatsapp">Profesión<span></span></label>
                        <input type="text" id="profesion" name="profesion">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-whatsapp">Número de WhatsApp para contacto<span>(solamente números)</span></label>
                        <input type="number" id="whatsApp" name="whatsApp">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-email">Correo electrónico de contacto<span>(le sugerimos utilizar una cuenta de Gmail)</span></label>
                        <input type="email" id="email" name="email">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-category">Área laboral</label>
                        <select name="laboral" id="laboral" name="laboral">
                            <option value="ATC">CONTROL DE TRANSITO AEREO (ATC)</option>
                            <option value="CNS">COMUNICACION, NAVEGACION Y VIGILANCIA (CNS)</option>
                            <option value="MET">METEOROLOGIA (MET)</option>
                            <option value="COMUNICACION ">COMUNICACION</option>
                            <option value="MAP">CARTOGRAFIA AERONAUTICA (MAP)</option>
                            <option value="PANS/OPS">PANS/OPS</option>
                            <option value="AIS">SERVICIO DE INFORMACION AERONAUTICA (AIS)</option>
                            <option value="OPS">OPERACIONES - JEFE DE AEROPUERTO</option>
                            <option value="OPS">OPERACIONES - JEFE DE OPERACIONES</option>
                            <option value="SMS">SISTEMA DE GESTION DE LA SEGURIDAD OPERACIONAL (SMS)</option>
                            <option value="SAT">SERVICIO DE ASISTENCIA EN TIERRA (SAT)</option>
                            <option value="SSEI">SALVAMENTO Y SERVICIO DE EXTINCION DE INCENDIOS (SSEI)</option>
                            <option value="MNT">MANTENIMIENTO INFRAESTRUCTURA (MNT)</option>
                            <option value="AVI">AYUDAS VISUALES (AVI)</option>
                            <option value="AVSEC">AVSEC</option>
                            <option value="FAL">FAL</option>
                            <option value="OTROS">OTROS</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>LICENCIAS AERONAUTICAS</legend>
                    
                    <p>En caso de tener más de una licencia o habilitación, por favor, complete los campos segundo y tercero</p>
                    <p>Primer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar Licencias/Numero de licencia<span></span></label>
                        <input type="text" id="licencias1" name="licencias1">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Enunciar Habilitaciones<span></span></label>
                        <input type="text" id="habilitaciones1" name="habilitaciones1">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Fecha de expedición<span></span></label>
                        <input type="date" id="fecha1" name="fecha1">
                    </div>

                    <p>Segundo campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar Licencias/Numero de licencia<span></span></label>
                        <input type="text" id="licencias2" name="licencias2">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-email">Enunciar Habilitaciones<span></span></label>
                        <input type="text" id="habilitaciones2" name="habilitaciones2">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha de expedición<span></span></label>
                        <input type="date" id="fecha2" name="fecha2">
                    </div>

                    <p>Tercer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar Licencias/Numero de licencia<span></span></label>
                        <input type="text" id="licencias3" name="licencias3">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Enunciar Habilitaciones<span></span></label>
                        <input type="text" id="habilitaciones3" name="habilitaciones3">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha de expedición<span></span></label>
                        <input type="date" id="fecha3" name="fecha3" >
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>ESTUDIOS REALIZADOS</legend>

                    <p>Estudios Universitarios</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar tipo de instrucción (Universitaria, Tecnica, Secundaria)<span></span></label>
                        <input type="text" id="instruccion1" name="instruccion1">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Nombre de la Universidad, Instituto, Colegio<span></span></label>
                        <input type="text" id="universidad1" name="universidad1">
                    </div>

                    <p>Formación Técnica</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar tipo de instrucción (Universitaria, Tecnica, Secundaria)<span></span></label>
                        <input type="text" id="instruccion2" name="instruccion2">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Nombre de la Universidad, Instituto, Colegio<span></span></label>
                        <input type="text" id="universidad2" name="universidad2">
                    </div>

                    <p>Estudios Varios</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar tipo de instrucción (Universitaria, Tecnica, Secundaria)<span></span></label>
                        <input type="text" id="instruccion3" name="instruccion3">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Nombre de la Universidad, Instituto, Colegio<span></span></label>
                        <input type="text" id="universidad3" name="universidad3">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>CARGOS DESEMPEÑADOS</legend>

                    <p>Primer campo</p>
                    <div class="input-wrapper">
                        <label for="event-email">Enunciar cargos desempeñados<span>(Cargo Actual)</span></label>
                        <input type="text" id="cargos1" name="cargos1">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-email">Nombre de la institución<span></span></label>
                        <input type="text" id="institucion1" name="institucion1">
                    </div>

                    <div class="col-2">
                        <div class="input-wrapper">
                            <label for="event-date">Fecha de inicio</label>
                            <input type="date" id="ffinicial1" name="ffinicial1">
                        </div>

                        <div class="input-wrapper">
                            <label for="event-begin">Fecha de finalización</label>
                            <input type="date" id="ffinal1" name="ffinal1">
                        </div>
                    </div>


                    <p>Segundo campo</p>
                    <div class="input-wrapper">
                        <label for="event-email">Enunciar cargos desempeñados<span>(Otros cargos)</span></label>
                        <input type="text" id="cargos2" name="cargos2">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-email">Nombre de la institución<span></span></label>
                        <input type="text" id="institucion2" name="institucion2">
                    </div>

                    <div class="col-2">
                        <div class="input-wrapper">
                            <label for="event-date">Fecha de inicio</label>
                            <input type="date" id="ffinicial2" name="ffinicial2">
                        </div>

                        <div class="input-wrapper">
                            <label for="event-begin">Fecha de finalización</label>
                            <input type="date" id="ffinal2" name="ffinal2">
                        </div>
                    </div>


                    <p>Tercer campo</p>
                    <div class="input-wrapper">
                        <label for="event-email">Enunciar cargos desempeñados<span>(Otros cargos)</span></label>
                        <input type="text" id="cargos3" name="cargos3">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-email">Nombre de la institución<span></span></label>
                        <input type="text" id="institucion3" name="institucion3">
                    </div>

                    <div class="col-2">
                        <div class="input-wrapper">
                            <label for="event-date">Fecha de inicio</label>
                            <input type="date" id="ffinicial3" name="ffinicial3">
                        </div>

                        <div class="input-wrapper">
                            <label for="event-begin">Fecha de finalización</label>
                            <input type="date" id="ffinal3" name="ffinal3">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>ASISTENCIA A REUNIONES Y SEMINARIOS</legend>

                    <p>Primer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar reuniones y/o seminarios<span></span></label>
                        <input type="text" id="reuniones1" name="reuniones1">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Lugar - Institución<span></span></label>
                        <input type="text" id="lugar1" name="lugar1">
                    </div>


                    <p>Segundo campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar reuniones y/o seminarios<span></span></label>
                        <input type="text" id="reuniones2" name="reuniones2">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Lugar - Institución<span></span></label>
                        <input type="text" id="lugar2" name="lugar2">
                    </div>

                    <p>Tercer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar reuniones y/o seminarios<span></span></label>
                        <input type="text" id="reuniones3" name="reuniones3">
                    </div>

                    <div class="input-wrapper">
                        <label for="">Lugar - Institución<span></span></label>
                        <input type="text" id="lugar3" name="lugar3">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>TABLA DE CONTROL DE REENTRENAMIENTO EXTRAORDINARIO </legend>

                    <p>Primer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar el tipo de reentrenamiento<span></span></label>
                        <input type="text" id="reentrenamiento1" name="reentrenamiento1">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha></span></label>
                        <input type="date" id="fecha_reentrenamiento1" name="fecha_reentrenamiento1">
                    </div>


                    <p>Segundo campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar el tipo de reentrenamiento<span></span></label>
                        <input type="text" id="reentrenamiento2" name="reentrenamiento2">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha></span></label>
                        <input type="date" id="fecha_reentrenamiento2" name="fecha_reentrenamiento2">
                    </div>

                    <p>Tercer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar el tipo de reentrenamiento<span></span></label>
                        <input type="text" id="reentrenamiento3" name="reentrenamiento3">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha></span></label>
                        <input type="date" id="fecha_reentrenamiento3" name="fecha_reentrenamiento3">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="fieldset-wrapper">
                    <legend>CONTROL DE ACTUALIZACIONES PERIODICAS</legend>

                    <p>Primer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar las materias recurrentes<span></span></label>
                        <input type="text" id="recurrentes1" name="recurrentes1">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha></span></label>
                        <input type="date" id="fecha_recurrentes1" name="fecha_recurrentes1">
                    </div>


                    <p>Segundo campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar las materias recurrentes<span></span></label>
                        <input type="text" id="recurrentes2" name="recurrentes2" >
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha></span></label>
                        <input type="date" id="fecha_recurrentes2" name="fecha_recurrentes2">
                    </div>

                    <p>Tercer campo</p>
                    <div class="input-wrapper">
                        <label for="">Enunciar las materias recurrentes<span></span></label>
                        <input type="text" id="recurrentes3" name="recurrentes3">
                    </div>

                    <div class="input-wrapper">
                        <label for="event-date">Fecha></span></label>
                        <input type="date" id="fecha_recurrentes3" name="fecha_recurrentes3">
                    </div>
                </div>
            </fieldset>
            <footer>
                    <button class="button" type="submit">ENVIAR</button>
            </footer>
        </div>
    </form>

</body>
</html>
