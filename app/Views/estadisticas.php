<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <br>
            <div class="col-sm-12 card-header" style="background-color: midnightblue;">
                <center>
                    <h4 style="color: white;"><?php echo $titulo; ?></h4>
                </center>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por Género CARRERA</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="generoCarrera" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por Género MENCIÓN</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="generoMencion" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por Residencia CARRERA</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="residenciaCarrera" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por Residencia MENCIÓN</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="residenciaMencion" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por años de permanencia CARRERA</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="permanenciaCarrera" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por años de permanencia MENCIÓN</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="permanenciaMencion" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por edad CARRERA</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="edadCarrera" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Titulados por edad MENCIÓN</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="edadMencion" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-sm-12 card-header" style="background-color: midnightblue;">
                <center>
                    <h4 style="color: white;">Estadísticas por Género</h4>
                </center>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #BBD6B8;">
                                <td>Carrera</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroC; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>Hombres</td>
                                <td><span class="badge bg-primary" style="width: 100%;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroCM * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroCM; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>Mujeres</td>
                                <td><span class="badge bg-danger" style="width: 100%;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroCF * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroCF; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #CCD5AE;">
                                <td>Bioimagenología</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroB; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>Hombres</td>
                                <td><span class="badge bg-primary" style="width: 100%;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroBM * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroBM; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>Mujeres</td>
                                <td><span class="badge bg-danger" style="width: 100%;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroBF * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroBF; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #F7DDA4;">
                                <td>Fisioterapia</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroF; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>Hombres</td>
                                <td><span class="badge bg-primary" style="width: 100%;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroFM * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroFM; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>Mujeres</td>
                                <td><span class="badge bg-danger" style="width: 100%;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroFF * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroFF; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #D3D4D8;">
                                <td>Laboratorio Clínico</td>
                                <td><span class="badge bg-success   " style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroL; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>Hombres</td>
                                <td><span class="badge bg-primary" style="width: 100%;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroLM * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroLM; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>Mujeres</td>
                                <td><span class="badge bg-danger" style="width: 100%;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tgeneroLF * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tgeneroLF; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 card-header" style="background-color: midnightblue;">
                <center>
                    <h4 style="color: white;">Estadísticas por Residencia</h4>
                </center>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #BBD6B8;">
                                <td>Carrera</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroC ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>La Paz</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tresidenciaCL * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tresidenciaCL ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>El Alto</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tresidenciaCEA * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tresidenciaCEA ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>Nacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tresidenciaCN * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tresidenciaCN ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>Internacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($tresidenciaCI * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $tresidenciaCI ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #CCD5AE;">
                                <td>Bioimagenología</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroB ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>La Paz</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totallapazb * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totallapazb ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>El Alto</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalelaltob * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalelaltob ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>Nacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalnacionalb * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalnacionalb ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>Internacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalinternacionalesb * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalinternacionalesb ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #F7DDA4;">
                                <td>Fisioterapia</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>

                                <td><?php echo $tgeneroF ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>La Paz</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totallapazf * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totallapazf ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>El Alto</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalelaltof * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalelaltof ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>Nacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalnacionalf * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalnacionalf ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>Internacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalinternacionalesf * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalinternacionalesf ?></td>
                            </tr>                            
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #D3D4D8;">
                                <td>Laboratorio Clínico</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroL ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>La Paz</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totallapazl * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totallapazl ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>El Alto</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalelaltol * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalelaltol ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>Nacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalnacionall * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalnacionall ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>Internacionales</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($totalinternacionalesl * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $totalinternacionalesl ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 card-header" style="background-color: midnightblue;">
                <center>
                    <h4 style="color: white;">Estadísticas por Años de Permanencia</h4>
                </center>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #BBD6B8;">
                                <td>Carrera</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroC ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>3 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia3 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia3 ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>4 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia4 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia4 ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>5 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia5 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia5 ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>6 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia6 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia6 ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>7 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia7 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia7 ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>8 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia8 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia8 ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>9 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia9 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia9 ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>>=10 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #475762; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia10 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia10 ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #CCD5AE;">
                                <td>Bioimagenología</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroB ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>3 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia3b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia3b ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>4 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia4b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia4b ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>5 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia5b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia5b ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>6 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia6b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia6b ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>7 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia7b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia7b ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>8 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia8b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia8b ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>9 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia9b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia9b ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>>=10 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #475762; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia10b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia10b ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #F7DDA4;">
                                <td>Fisioterapia</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>

                                <td><?php echo $tgeneroF ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>3 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia3f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia3f ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>4 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia4f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia4f ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>5 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia5f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia5f ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>6 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia6f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia6f ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>7 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia7f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia7f ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>8 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia8f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia8f ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>9 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia9f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia9f ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>>=10 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #475762; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia10f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia10f ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #D3D4D8;">
                                <td>Laboratorio Clínico</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroL ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>3 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia3l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia3l ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>4 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia4l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia4l ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>5 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia5l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia5l ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>6 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia6l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia6l ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>7 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia7l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia7l ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>8 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia8l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia8l ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>9 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia9l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia9l ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>>=10 años</td>
                                <td><span class="badge" style="width: 100%; background-color: #475762; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($permanencia10l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $permanencia10l ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 card-header" style="background-color: midnightblue;">
                <center>
                    <h4 style="color: white;">Estadísticas por Edad</h4>
                </center>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #BBD6B8;">
                                <td>Carrera</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroC; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>20 a 22</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p20a22 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p20a22; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>23 a 26</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p23a26 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p23a26; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>27 a 32</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p27a32 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p27a32; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>33 a 39</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p33a39 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p33a39; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>40 a 46</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p40a46 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p40a46; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>47 a 55</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p47a55 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p47a55; ?></td>
                            </tr>
                            <tr style="background-color: #BBD6B8;">
                                <td>>55</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                        <?php
                                        if ($tgeneroC == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($pmaya55 * 100) / $tgeneroC), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $pmaya55; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #CCD5AE;">
                                <td>Bioimagenología</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroB; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>20 a 22</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p20a22b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p20a22b; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>23 a 26</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p23a26b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p23a26b; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>27 a 32</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p27a32b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p27a32b; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>33 a 39</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p33a39b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p33a39b; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>40 a 46</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p40a46b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p40a46b; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>47 a 55</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p47a55b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p47a55b; ?></td>
                            </tr>
                            <tr style="background-color: #CCD5AE;">
                                <td>>55</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                        <?php
                                        if ($tgeneroB == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($pmaya55b * 100) / $tgeneroB), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $pmaya55b; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #F7DDA4;">
                                <td>Fisioterapia</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroF; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>20 a 22</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p20a22f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p20a22f; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>23 a 26</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p23a26f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p23a26f; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>27 a 32</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p27a32f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p27a32f; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>33 a 39</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p33a39f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p33a39f; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>40 a 46</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p40a46f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p40a46f; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>47 a 55</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p47a55f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p47a55f; ?></td>
                            </tr>
                            <tr style="background-color: #F7DDA4;">
                                <td>>55</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                        <?php
                                        if ($tgeneroF == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($pmaya55f * 100) / $tgeneroF), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $pmaya55f; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-3">
                    <table class="table table-striped">
                        <thead>
                            <tr style="background-color: #2C3333; color: white;">
                                <th>Profesionales</th>
                                <th>%</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #D3D4D8;">
                                <td>Laboratorio Clínico</td>
                                <td><span class="badge bg-success" style="width: 100%;">100%</span></td>
                                <td><?php echo $tgeneroL; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>20 a 22</td>
                                <td><span class="badge" style="width: 100%; background-color: #114E60; color: white;">
                                        <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p20a22l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p20a22l; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>23 a 26</td>
                                <td><span class="badge" style="width: 100%; background-color: #A83C54; color: white;">
                                <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p23a26l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p23a26l; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>27 a 32</td>
                                <td><span class="badge" style="width: 100%; background-color: #9D8221; color: white;">
                                <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p27a32l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p27a32l; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>33 a 39</td>
                                <td><span class="badge" style="width: 100%; background-color: #1F441E; color: white;">
                                <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p33a39l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p33a39l; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>40 a 46</td>
                                <td><span class="badge" style="width: 100%; background-color: #530C0C; color: white;">
                                <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p40a46l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p40a46l; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>47 a 55</td>
                                <td><span class="badge" style="width: 100%; background-color: #5639A6; color: white;">
                                <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($p47a55l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $p47a55l; ?></td>
                            </tr>
                            <tr style="background-color: #D3D4D8;">
                                <td>>55</td>
                                <td><span class="badge" style="width: 100%; background-color: #61481C; color: white;">
                                <?php
                                        if ($tgeneroL == 0) {
                                            echo "0%";
                                        } else {
                                            echo number_format((($pmaya55l * 100) / $tgeneroL), 0) . '%';
                                        }
                                        ?>
                                    </span></td>
                                <td><?php echo $pmaya55l; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById('generoCarrera').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($data['generoCarrera']); ?>,
            datasets: [{
                label: 'Ejemplo de gráfica',
                data: <?php echo json_encode($data['cantgeneroCarrera']); ?>,
                backgroundColor: ['#216583', '#F76262'],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
        }
    });

    var ctx = document.getElementById('generoMencion').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($data['generoMencion']); ?>,
            datasets: [{
                    label: 'Masculino',
                    backgroundColor: '#216583',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo json_encode($data['cantGeneroMasculino']); ?>
                },
                {
                    label: 'Femenino',
                    backgroundColor: '#F76262',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['cantGeneroFemenino']); ?>
                },
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById('residenciaCarrera').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($data['residenciaCarrera']); ?>,
            datasets: [{
                label: 'Ejemplo de gráfica',
                data: <?php echo json_encode($data['cantresidenciaCarrera']); ?>,
                backgroundColor: ['#5C469C', '#CE5959', '#F97B22', '#7AA874'],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
        }
    });

    var ctx = document.getElementById('residenciaMencion').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($data['residenciaMencion']); ?>,
            datasets: [{
                    label: 'La paz',
                    backgroundColor: '#114E60',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo json_encode($data['cantlapazMencion']); ?>
                },
                {
                    label: 'El Alto',
                    backgroundColor: '#A83C54',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['cantelaltoMencion']); ?>
                },
                {
                    label: 'Nacionales',
                    backgroundColor: '#9D8221',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['cantnacionalesMencion']); ?>
                },
                {
                    label: 'Internacionales',
                    backgroundColor: '#1F441E',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['cantinternacionalesMencion']); ?>
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById('permanenciaCarrera').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($data['permanenciaCarrera']); ?>,
            datasets: [{
                label: 'Ejemplo de gráfica',
                data: <?php echo json_encode($data['cantpermanenciaCarrera']); ?>,
                backgroundColor: ['#114E60', '#A83C54', '#9D8221', '#1F441E', '#530C0C', '#5639A6', '#61481C', '#475762'],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
        }
    });

    var ctx = document.getElementById('permanenciaMencion').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($data['generoMencion']); ?>,
            datasets: [{
                    label: '3',
                    backgroundColor: '#114E60',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo json_encode($data['permanencia3']); ?>
                },
                {
                    label: '4',
                    backgroundColor: '#A83C54',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['permanencia4']); ?>
                },
                {
                    label: '5',
                    backgroundColor: '#9D8221',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['permanencia5']); ?>
                },
                {
                    label: '6',
                    backgroundColor: '#1F441E',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['permanencia6']); ?>
                },
                {
                    label: '7',
                    backgroundColor: '#530C0C',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['permanencia7']); ?>
                },
                {
                    label: '8',
                    backgroundColor: '#5639A6',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['permanencia8']); ?>
                },
                {
                    label: '9',
                    backgroundColor: '#61481C',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['permanencia9']); ?>
                },
                {
                    label: '>=10',
                    backgroundColor: '#475762',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['permanencia10']); ?>
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById('edadCarrera').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php echo json_encode($data['edadCarrera']); ?>,
            datasets: [{
                label: 'Ejemplo de gráfica',
                data: <?php echo json_encode($data['cantedadCarrera']); ?>,
                backgroundColor: ['#114E60', '#A83C54', '#9D8221', '#1F441E', '#530C0C', '#5639A6', '#61481C'],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
        }
    });

    var ctx = document.getElementById('edadMencion').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($data['edadMencion']); ?>,
            datasets: [{
                    label: '20 a 22',
                    backgroundColor: '#114E60',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo json_encode($data['edad1']); ?>
                },
                {
                    label: '23 a 26',
                    backgroundColor: '#A83C54',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['edad2']); ?>
                },
                {
                    label: '27 a 32',
                    backgroundColor: '#9D8221',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['edad3']); ?>
                },
                {
                    label: '33 a 39',
                    backgroundColor: '#1F441E',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['edad4']); ?>
                },
                {
                    label: '40 a 46',
                    backgroundColor: '#530C0C',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['edad5']); ?>
                },
                {
                    label: '47 a 55',
                    backgroundColor: '#5639A6',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['edad6']); ?>
                },
                {
                    label: '>55',
                    backgroundColor: '#61481C',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: <?php echo json_encode($data['edad7']); ?>
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>