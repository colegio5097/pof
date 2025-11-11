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
            <form class="col-12 col-md-8 mx-auto">
                <h3 class="text-danger" style="text-align: center;">Registro del Personal</h3>
                <h4 class="text-danger" style="text-align: center;">Datos Personales</h4>
                <div class="row">
                    <div class="col-3 mb-0">
                        <label for="inputApellido" class="form-label fw-bold py-0 my-0">Apellido</label>
                        <input
                            type="text"
                            class="form-control py-0 text-center text-uppercase"
                            id="inputApellido"
                            name="apellido"
                            required
                            oninput="this.value = this.value.toUpperCase()"
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-3 mb-0">
                        <label for="inputNombre" class="form-label fw-bold py-0 my-0">Nombre</label>
                        <input
                            type="text"
                            class="form-control py-0 text-center text-uppercase"
                            id="inputNombre"
                            name="nombre"
                            required
                            oninput="this.value = this.value.toUpperCase()"
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-3 mb-0">
                        <label for="inputDNI" class="form-label fw-bold py-0 my-0">D.N.I</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputDNI"
                            name="dni"
                            maxlength="8"
                            pattern="\d{8}"
                            inputmode="numeric"
                            title="Ingrese exactamente 8 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-3 mb-0">
                        <label for="inputCUIL" class="form-label fw-bold py-0 my-0">C.U.I.L</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputCUIL"
                            name="cuil"
                            maxlength="11"
                            pattern="\d{11}"
                            inputmode="numeric"
                            title="Ingrese exactamente 11 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                </div>
                <div class="row">

                    <div class="col-3 mb-0">
                        <label for="inputFecNac" class="form-label fw-bold py-0 my-0">Fecha de Nacimiento</label>
                        <input
                            type="date"
                            class="form-control py-0"
                            id="inputFecNac"
                            name="fecnac"
                            required>
                    </div>
                    <div class="col-3 mb-0">
                        <label for="inputedad" class="form-label fw-bold py-0 my-0">Edad</label>
                        <input
                            type="tel"
                            class="form-control py-0 text-center"
                            id="inputedad"
                            name="edad"
                            maxlength="2"
                            pattern="\d{2}"
                            inputmode="numeric"
                            title="Ingrese exactamente 2 dígitos sin puntos ni espacios."
                            required
                            onblur="this.value = this.value.trim()">
                    </div>
                    <div class="col-3 mb-0">
                        <label for="selectestadocivil" class="form-label fw-bold py-0 my-0">Estado Civil</label>
                        <select
                            class="form-select py-0 text-center"
                            id="selectsexo"
                            name="sexo"
                            required>
                            <option value="" disabled selected>Seleccione sexo</option>
                            <option value="SOLTERO">Soltero</option>
                            <option value="CASADO">Casado</option>
                            <option value="UNION">Unión de hecho</option>
                            <option value="DIVORCIADO">Divorciado</option>
                            <option value="VIUDO">Viudo</option>
                        </select>
                    </div>
                    <div class="col-3 mb-0">
                        <label for="selectSexo" class="form-label fw-bold py-0 my-0">Sexo</label>
                        <select
                            class="form-select py-0 text-center"
                            id="selectsexo"
                            name="sexo"
                            required>
                            <option value="" disabled selected>Seleccione sexo</option>
                            <option value="MASCULINO">Masculino</option>
                            <option value="FEMENINO">Femenino</option>
                            <option value="NODEFINIDO">No Definido</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-0">
                            <label for="inputDomicilio" class="form-label  fw-bold py-0 my-0">Domicilio</label>
                            <input
                                type="text"
                                class="form-control py-0 text-center text-uppercase"
                                id="inputDomicilio"
                                name="domicilio"
                                required
                                oninput="this.value = this.value.toUpperCase()"
                                onblur="this.value = this.value.trim()">
                        </div>
                        <div class="col-4 mb-0">
                            <label for="selectLocalidad" class="form-label fw-bold py-0 my-0">Localidad</label>
                            <select
                                class="form-select py-0 text-center"
                                id="selectLocalidad"
                                name="localidad"
                                required>
                                <option value="" disabled selected>Seleccione una localidad</option>
                                <option value="GENERAL GUEMES">GENERAL GUEMES</option>
                                <option value="EL_JARDIN">EL JARDIN</option>
                                <option value="CANDELARIA">LA CANDELARIA</option>
                                <option value="SALTA_CAPITAL">SALTA </option>
                                <option value="METAN">SAN JOSE DE METAN</option>
                                <option value="TUCUMAN">SAN MIGUEL DE TUCUMAN</option>
                                <option value="ROSARIO_FRONTERA">ROSARIO DE LA FRONTERA</option>
                            </select>
                        </div>

                        <div class="col-4 mb-0">
                            <label for="inputcodigopostal" class="form-label fw-bold py-0 my-0">Código Postal</label>
                            <input
                                type="tel"
                                class="form-control py-0 text-center"
                                id="inputcodigopostal"
                                name="codigopostal"
                                maxlength="4"
                                pattern="\d{4}"
                                inputmode="numeric"
                                title="Ingrese exactamente 4 dígitos sin puntos ni espacios."
                                required
                                onblur="this.value = this.value.trim()">
                        </div>


                        <div class="row">

                            <div class="col-4 mb-0">
                                <label for="inputTelefono" class="form-label fw-bold py-0 my-0">Telefono</label>
                                <input
                                    type="tel"
                                    class="form-control py-0 text-center"
                                    id="inpuTelefono"
                                    name="telefono"
                                    maxlength="10"
                                    pattern="\d{10}"
                                    title="Ingrese exactamente 10 dígitos sin puntos ni espacios."
                                    inputmode="numeric"
                                    required
                                    onblur="this.value = this.value.trim()">
                            </div>

                            <div class="col-4 mb-0">
                                <label for="inputCelular" class="form-label fw-bold py-0 my-0">Celular</label>
                                <input
                                    type="tel"
                                    class="form-control py-0 text-center"
                                    id="inputCelular"
                                    name="celular"
                                    maxlength="10"
                                    pattern="\d{10}"
                                    title="Ingrese exactamente 10 dígitos sin puntos ni espacios."
                                    inputmode="numeric"
                                    required
                                    onblur="this.value = this.value.trim()">
                            </div>
                            <div class="col-4 mb-0">
                                <label for="inputEmail" class="form-label fw-bold py-0 my-0">E-mail</label>
                                <input
                                    type="email"
                                    class="form-control py-0 text-center text-lowercase"
                                    id="inputEmail"
                                    name="email"
                                    required
                                    oninput="this.value = this.value.toLowerCase()"
                                    onblur="this.value = this.value.trim()">
                            </div>
                        </div>
                        <p style="text-align: center;">________________________________________</p>
                        <button type="submit" class="btn btn-primary mt-0" name="btnegistar" value="Ok">Registrar</button>
            </form>
        </div>

        <div class="col-12 col-md-12 p-2">
            <h4 class="text-danger" style="text-align: center;">Tabla de Agentes - Datos Personales - Colegio Secundario Nº 5.097</h4>
            <table class="table table-striped small">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">CUIL</th>
                        <th scope="col">Fec.Nac.</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">Localidad</th>
                        <th scope="col">Celular</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Albornoz</td>
                        <td>Diego Ernesto</td>
                        <td>2025602651</td>
                        <td>20/12/76</td>
                        <td>PAso de los libres 330 - Belgrano</td>
                        <td>Rosario de la FRontera</td>
                        <td>3876479221</td>
                        <td>ingdiegoalbornoz@gmail.com</td>
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