<form class="row" action="">
    {{ csrf_field() }}

    <div class="col-12 col-sm-6 form-group">
        <label for="subject">Seleccione la materia</label>
        <select class="form-control" id="subject">
            <option selected disabled>Seleccione:</option>
            <option>Base de datos</option>
            <option>Redes</option>
            <option>Programacion SQL</option>
        </select>
    </div>{{-- Materia --}}

    <div class="col-12 col-sm-6 form-group">
        <label for="subject">Tipo de reactivo</label>
        <select class="form-control" id="subject">
            <option selected disabled>Seleccione:</option>
            <option>Opción múltiple</option>
            <option>Selección múltiple</option>
            <option>Correspondencia</option>
        </select>
    </div>{{-- Tipo de reactivo --}}

    <div class="col-12 col-xl-6 form-group">
        <label>Nivel Taxonómico</label>
        <div class="row">
            <div class="col-12 col-sm-4 form-check">
                <label class="form-check-label" for="knowledge">
                    <input type="radio" class="form-check-input" name="taxonomic_level" id="knowledge" value="knowledge">
                    Conocimiento
                </label>
            </div>
            <div class="col-12 col-sm-4 form-check">
                <label class="form-check-label" for="understanding">
                    <input type="radio" class="form-check-input" name="taxonomic_level" id="understanding" value="understanding">
                    Comprensión
                </label>
            </div>
            <div class="col-12 col-sm-4 form-check">
                <label class="form-check-label" for="application">
                    <input type="radio" class="form-check-input" name="taxonomic_level" id="application" value="application">
                    Aplicación
                </label>
            </div>
        </div>
    </div>{{-- Nivel Taxonómico --}}

    <div class="col-12 col-xl-6 form-group">
        <label>Nivel de dificultad</label>
        <div class="row">
            <div class="col-12 col-sm-4 form-check">
                <label class="form-check-label" for="low">
                    <input type="radio" class="form-check-input" name="difficulty level" id="low" value="low">
                    Bajo
                </label>
            </div>
            <div class="col-12 col-sm-4 form-check">
                <label class="form-check-label" for="medium">
                    <input type="radio" class="form-check-input" name="difficulty level" id="medium" value="medium">
                    Medio
                </label>
            </div>
            <div class="col-12 col-sm-4 form-check">
                <label class="form-check-label" for="high">
                    <input type="radio" class="form-check-input" name="difficulty level" id="high" value="high">
                    Alto
                </label>
            </div>
        </div>
    </div>{{-- Nivel de dificultad --}}

    <div class="col-12 form-group">
        <label for="question">Pregunta</label>
        <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
    </div>{{-- Pregunta --}}

    <div class="col-12">
        <p>Opciones de respuesta</p>
        <div class="row">
            <div class="col-12 col-md-6">
                <label class="input-group" for="">
                    <div class="input-group-addon">a.-</div>
                    <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                    <div class="input-group-addon">-</div>
                </label>
            </div>
            <div class="col-12 col-md-6">
                <label class="input-group" for="">
                    <div class="input-group-addon">b.-</div>
                    <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                    <div class="input-group-addon">-</div>
                </label>
            </div>
            <div class="col-12 col-md-6">
                <label class="input-group" for="">
                    <div class="input-group-addon">c.-</div>
                    <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                    <div class="input-group-addon">-</div>
                </label>
            </div>
            <div class="col-12 col-md-6">
                <label class="input-group" for="">
                    <div class="input-group-addon">d.-</div>
                    <input class="form-control" type="text" id="question" name="question" placeholder="Ingrese la base de la pregunta." value="{{ old('question') }}">
                    <div class="input-group-addon">-</div>
                </label>
            </div>
        </div>
    </div>{{-- Opciones de respuesta --}}

    <div class="col-12 form-group">
        <label for="response">Respuesta correcta</label>
        <input class="form-control" type="text" disabled>
    </div>

    <div class="col-12 form-group">
        <label for="justification">Justificación</label>
        <textarea class="form-control" id="justification" rows="4" name="justification"></textarea>
    </div>

    <div class="col-12 text-center form-group">
        <button class="btn btn-primary">Guardar</button>
        <button class="btn btn-primary">Guardar y enviar</button>
    </div>

</form>{{-- Formulario para el registro de reactivos --}}


@if(empty($dataSubjects))
    <div class="col">
        <table class="table table-striped table-responsive">
            <thead>
            <tr>
                <th class="hidden-md-down">Slug</th>
                <th>Asignatura</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dataSubjects as $item)
                <tr>
                    <th class="hidden-md-down" scope="row">
                        <div class="col-auto p-2 hidden-sm-down container-reagents-img">
                            <h1 class="text-first">B</h1>
                            <h1 class="text-end">D</h1>
                        </div>
                    </th>
                    <td>
                        Base de datos
                    </td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-info">Editar</button>
                            <button type="button" class="btn btn-info">Eliminar</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $dataSubjects->render() }}
    </div>
@else
    <div class="col">
        <h1>No hay asignaturas registradas.</h1>
    </div>
@endif

<div class="row">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="http://lorempixel.com/400/200/" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Base de datos</h4>
                <p class="card-text">Al acceder podra crear nuevos reactivos bajo este materia.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">grupos de reactivos <span class="badge badge-pill badge-info ml-2">10</span> </li>
                    <li class="list-group-item">preguntas formuladas <span class="badge badge-pill badge-info ml-2">129</span></li>
                    <li class="list-group-item">preguntas por correguir <span class="badge badge-pill badge-info ml-2">49</span></li>
                </ul>
                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <a href="#" class="btn btn-primary">Crear reactivo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- Contenedor para la materia --}}
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="http://lorempixel.com/400/200/" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">Redes</h4>
                <p class="card-text">Al acceder podra crear nuevos reactivos bajo este materia.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">grupos de reactivos <span class="badge badge-pill badge-info ml-2">10</span> </li>
                    <li class="list-group-item">preguntas formuladas <span class="badge badge-pill badge-info ml-2">129</span></li>
                    <li class="list-group-item">preguntas por correguir <span class="badge badge-pill badge-info ml-2">49</span></li>
                </ul>
                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <a href="#" class="btn btn-primary">Crear reactivo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center p-4">
        <a href="{{ route('subjects') }}">
                                            <span class="btn btn-primary">
                                                <i class="fa fa-plus pl-3 pr-3" aria-hidden="true"></i>
                                            </span>
        </a>
    </div>
</div>