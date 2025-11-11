<!DOCTYPE html>
<html lang="en">
<style>
    .container-fluid.fs-6 {
        font-size: 0.8rem;
    }

    h4 {
        font-size: 1.2rem !important;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ColSec5097 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/864f0bd592.js" crossorigin="anonymous"></script>
</head>



<body>
    <div class="container-fluid fs-6">
        <div class="row">
            <form class="col-12 col-md-10 mx-auto">
                <h3 class="text-danger" style="text-align: center;">Registro del Personal</h3>

               <h4 class="text-danger  mb-3">Ingrese el nombre del agente</h4>
                <div class="row">
                    <form class="col-12 cob-0">
                        <form class="d-flex" role="search">
                            <input
                                class="form-control me-2 mb-3"
                                type="search"
                                placeholder="Buscar..."
                                aria-label="Buscar">
                            <button class="btn btn-primary mt-0 mb-3" name="btnegistar" value="Ok">Registrar</button>
                        </form>
                    </form>
                </div>


                <h4 class="text-danger mb-3">Datos Laborales</h4>
                <div class="row">
                    <div class="col-3 mb-0">
                        <label for="selectfuncion" class="form-label fw-bold py-0 my-0">Función</label>
                        <select
                            class="form-select py-0 text-center"
                            id="selectfuncion"
                            name="funcion"
                            required>
                            <option value="" disabled selected>Seleccione Funcion</option>
                            <option value="DIRECTOR">Director</option>
                            <option value="VICEDIRECTOR">Vicedirector</option>
                            <option value="SECRETARIO">Secretario</option>
                            <option value="PROSECRETARIO">Prosecretario</option>
                            <option value="PROFESOR">Profesor</option>
                            <option value="PRECEPTOR">Preceptor</option>
                            <option value="ADMINISTRATIVO">Administrativo</option>
                            <option value="BIBLIOTECARIO">Bibliotecario</option>
                            <option value="AYUDANTE">Ayudante Práctico</option>
                            <option value="RTI">R.T.I</option>
                            <option value="MANTENIMIENTO">Servicios Generales</option>
                        </select>
                    </div>
                    <div class="col-3 mb-0">
                        <label for="selectTurno" class="form-label fw-bold py-0 my-0">Turno</label>
                        <select
                            class="form-select py-0 text-center"
                            id="selectturno"
                            name="turno"
                            required>
                            <option value="" disabled selected>Seleccione turno</option>
                            <option value="MAÑANA">Mañana</option>
                            <option value="TARDE">Tarde</option>
                            <option value="VESPERTINO">Vespertino</option>
                        </select>
                    </div>
                    <div class="col-3 mb-0">
                        <label for="selectEstado" class="form-label fw-bold py-0 my-0">Estado Laboral</label>
                        <select
                            class="form-select py-0 text-center"
                            id="selectEstado"
                            name="Estado"
                            required>
                            <option value="" disabled selected>Seleccione Estado Laboral</option>
                            <option value="ACTIVO">Activo</option>
                            <option value="SINACTIVIDAD">Sin Actividad</option>
                            <option value="JUBILADO">Jubilado</option>
                        </select>
                    </div>
                    <div class="col-3 mb-0">
                        <label for="selectTitulo" class="form-label fw-bold py-0 my-0">Título</label>
                        <select
                            class="form-select py-0 text-center"
                            id="selectTitulo"
                            name="Titulo"
                            required>
                            <option value="" disabled selected>Seleccione título</option>
                            <option value="">Profesor de Matemática</option>
                            <option value="">Profesor de Física</option>
                            <option value="">Profesor de Lengua y Literatura</option>
                            <option value="">Profesor de Química</option>
                            <option value="">Profesor de Historia</option>
                            <option value="">Profesor de Geografía</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 mb-0">
                        <label for="inputHsTitular" class="form-label fw-bold py-0 my-0">Hs. Titular</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputHsTitular"
                            name="HsTitular"
                            maxlength="2"
                            pattern="\d{2}"
                            inputmode="numeric"
                            title="Ingrese exactamente 2 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-3 mb-0">
                        <label for="inputHsSuplente" class="form-label fw-bold py-0 my-0">Hs. Suplente</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputHsSuplente"
                            name="HsSuplente"
                            maxlength="2"
                            pattern="\d{2}"
                            inputmode="numeric"
                            title="Ingrese exactamente 2 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-3 mb-0">
                        <label for="inputHsInterinas" class="form-label fw-bold py-0 my-0">Hs. Interinas</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputHsInterinas"
                            name="HsInterinas"
                            maxlength="2"
                            pattern="\d{2}"
                            inputmode="numeric"
                            title="Ingrese exactamente 2 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-3 mb-0">
                        <label for="inputHsTtotales" class="form-label fw-bold py-0 my-0">Hs. Totales</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputHsTotales"
                            name="HsTotales"
                            maxlength="2"
                            pattern="\d{2}"
                            inputmode="numeric"
                            title="Ingrese exactamente 2 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mb-0">
                        <label for="inputFecIng" class="form-label fw-bold py-0 my-0">Fecha de Ingreso</label>
                        <input
                            type="date"
                            class="form-control py-0"
                            id="inputFecIng"
                            name="fecIng"
                            required>
                    </div>
                    <div class="col-2 mb-0">
                        <label for="inputAntiguedad" class="form-label fw-bold py-0 my-0">Antiguedad</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputAntiguedad"
                            name="Antiguedad"
                            maxlength="2"
                            pattern="\d{2}"
                            inputmode="numeric"
                            title="Ingrese exactamente 2 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-8 mb-0">
                        <label for="inputObs" class="form-label fw-bold py-0 my-0 mb-3">Observación</label>
                        <input
                            type="text"
                            class="form-control py-0"
                            id="inputObs"
                            name="Obs"
                            required>
                    </div>
                </div>
        </div>

        <div class="col-12 col-md-12 p-2">
            <h4 class="text-danger  mb-3">Tabla de Agentes - Datos Laborales - Colegio Secundario Nº 5.097</h4>
            <table class="table table-striped small">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Funcion</th>
                        <th scope="col">Turno</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fec. Ing.</th>
                        <th scope="col">Antiguedad</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Hs Tit.</th>
                        <th scope="col">Hs Sup.</th>
                        <th scope="col">Hs Int.</th>
                        <th scope="col">Hs Tot.</th>
                        <th scope="col">Obs.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>25602651</td>
                        <td>RTI</td>
                        <td>Tarde</td>
                        <td>Activo</td>
                        <td>11-11-2011</td>
                        <td>15</td>
                        <td>Ing. en Sistemas</td>
                        <td>15</td>
                        <td>10</td>
                        <td>2</td>
                        <td>27</td>
                        <td>Todo re bien</td>
                        <td>
                            <a href="#" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>