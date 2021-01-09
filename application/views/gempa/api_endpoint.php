<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>API Endpoint</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/adminLTE/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Gempa</a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="" class="brand-link">
                <img src="<?= base_url('assets/image/globe-icon.png'); ?>" alt="Gempa" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">GEMPA</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Menu Utama</li>
                        <li class="nav-item">
                            <a href="<?= base_url("gempa"); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Gempa M 5.0+ Terkini
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url("gempa/tsunami-terkini"); ?>" class="nav-link">
                                <i class="nav-icon fas fa-swimmer"></i>
                                <p>
                                    Gempa & Tsunami Terkini
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url("gempa/m-5"); ?>" class="nav-link">
                                <i class="nav-icon fas fa-wave-square"></i>
                                <p>
                                    60 Gempa M 5.0+
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url("gempa/dirasakan"); ?>" class="nav-link">
                                <i class="nav-icon fas fa-water"></i>
                                <p>
                                    30 Gempa Dirasakan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url("gempa/api-endpoint"); ?>" class="nav-link active">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    API Endpoint
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Informasi</li>
                        <li class="nav-item">
                            <a target="_blank" href="https://github.com/muhammadhanif/codeigniter-bmkg-gempa-geojson" class="nav-link">
                                <i class="nav-icon fab fa-github-alt"></i>
                                <p>
                                    Kode Sumber
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a target="_blank" href="https://hanifmu.com" class="nav-link">
                                <i class="nav-icon fas fa-globe-asia"></i>
                                <p>
                                    hanifmu.com
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>API Endpoint</h1>
                        </div>

                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    GeoJSON v1
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Data</th>
                                                    <th>Endpoint</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</th>
                                                    <td>Gempa M 5.0+ Terkini</td>
                                                    <td><a target="_blank" href="<?= base_url('api/' . $api_version  . '/geojson/gempa/m-5-terkini'); ?>"><?= base_url('api/' . $api_version  . '/geojson/gempa/m-5-terkini'); ?></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</th>
                                                    <td>60 Gempa M 5.0+</td>
                                                    <td><a target="_blank" href="<?= base_url('api/' . $api_version  . '/geojson/gempa/m-5'); ?>"><?= base_url('api/' . $api_version  . '/geojson/gempa/m-5'); ?></a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</th>
                                                    <td>30 Gempa Dirasakan</td>
                                                    <td><a target="_blank" href="<?= base_url('api/' . $api_version  . '/geojson/gempa/dirasakan'); ?>"><?= base_url('api/' . $api_version  . '/geojson/gempa/dirasakan'); ?></a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</th>
                                                    <td>Gempa Berpotensi Tsunami Terkini</td>
                                                    <td><a target="_blank" href="<?= base_url('api/' . $api_version  . '/geojson/gempa/tsunami-terkini'); ?>"><?= base_url('api/' . $api_version  . '/geojson/gempa/tsunami-terkini'); ?></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-footer text-center">
                                    Sumber Data: <a target="_blank" href="https://bmkg.go.id/">BMKG (Badan
                                        Meteorologi, Klimatologi, dan Geofisika)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer text-center">
            <strong>
                DEVELOPED BY <a target="_blank" href="https://hanifmu.com">MUHAMMAD HANIF</a>
            </strong>
        </footer>
    </div>
    <script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminLTE/js/adminlte.min.js'); ?>"></script>
</body>

</html>