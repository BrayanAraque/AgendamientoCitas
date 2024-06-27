<?php require_once __DIR__ . '/../header.php'; ?>

<div class="container">
    <div id="after-nav">
        <div id="after-nav-col-1">
            <div class="row">
                <a href="#">
                    <h2>Gestion de citas</h2>
                </a>
            </div>
        </div>
        <div id="after-nav-col-3">
            <div id="chek">
                <div class="chekin">
                    <label>
                        <h2>Estado:</h2>
                    </label>
                    <select id="myselect">
                        <option value="">Seleccionar Estado</option>
                        <option value="pending">Ingreso</option>
                        <option value="approved">Proceso</option>
                        <option value="rejected">Finalizado</option>
                    </select>
                    <label>
                        <h2>Estilista:</h2>
                    </label>
                    <select id="mydoctor">
                        <option value="">Seleccionar Estilista</option>
                        <option value="felipe">Est. Felipe A.</option>
                        <option value="brayan">Est. Brayan M.</option>
                        <option value="david">Est. David</option>
                        <option value="andres">Est. Andres R.</option>
                    </select>
                </div>
                <table id="customers">
                    <thead>
                        <tr>
                            <th scope="col">Id Cita</th>
                            <th scope="col">Nombre Mascota</th>
                            <th scope="col">Raza</th>
                            <th scope="col">Fecha Ingreso</th>
                            <th scope="col">Edad Mascota</th>
                            <th scope="col">Cuidado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="appointment">
                        <?php foreach ($citas as $cita) : ?>
                            <tr>
                                <td><?php echo $cita['id']; ?></td>
                                <td><?php echo $cita['nombre_mascota']; ?></td>
                                <td><?php echo $cita['raza']; ?></td>
                                <td><?php echo $cita['fecha_ingreso']; ?></td>
                                <td><?php echo $cita['edad_mascota']; ?></td>
                                <td><?php echo $cita['cuidado']; ?></td>
                                <td>
                                    <a href="index.php?action=edit&id=<?php echo $cita['id']; ?>" class="btn btn-primary">Editar</a>
                                    <a href="index.php?action=delete&id=<?php echo $cita['id']; ?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>    
                </table>
            </div>
        </div>
    </div>
</div>

