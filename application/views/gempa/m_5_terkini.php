<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Gempa M 5.0+ Terkini</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/adminLTE/css/adminlte.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/leaflet/leaflet.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/json-viewer/jquery.json-viewer.css'); ?>" />
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
                            <a href="<?= base_url("gempa"); ?>" class="nav-link active">
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
                                    Gempa M 5.0+
                                </p>
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a href="<?= base_url("gempa/dirasakan"); ?>" class="nav-link">
                                <i class="nav-icon fas fa-water"></i>
                                <p>
                                    Gempa Dirasakan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a href="<?= base_url("gempa/api-endpoint"); ?>" class="nav-link">
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
                            <h1>Gempa M 5.0+ Terkini</h1>
                        </div>

                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-outline card-danger">
                                <div class="card-header">
                                    <strong>Episentrum Gempa</strong>

                                    <a href="<?= base_url('api/' . $api_version  . '/geojson/gempa/m-5-terkini'); ?>" target="_blank">
                                        <button type="button" class="btn btn-success btn-sm float-right">GeoJSON</button>
                                    </a>
                                </div>
                                <div class="card-body p-0">
                                    <div id="mapid" style="width: 100%; height: 400px;"></div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <th>Tanggal</th>
                                                    <td id="tanggal"><small>Loading data</small></td>
                                                </tr>
                                                <tr>
                                                    <th>Magnitude</th>
                                                    <td id="magnitude"><small>Loading data</small></td>
                                                </tr>
                                                <tr>
                                                    <th>Kedalaman</th>
                                                    <td id="kedalaman"><small>Loading data</small></td>
                                                </tr>
                                                <tr>
                                                    <th>Koordinat</th>
                                                    <td id="koordinat"><small>Loading data</small></td>
                                                </tr>
                                                <tr>
                                                    <th>Wilayah</th>
                                                    <td>
                                                        <ul>
                                                            <li id="wilayah1"><small>Loading data</small></li>
                                                            <li id="wilayah2"><small>Loading data</small></li>
                                                            <li id="wilayah3"><small>Loading data</small></li>
                                                            <li id="wilayah4"><small>Loading data</small></li>
                                                            <li id="wilayah5"><small>Loading data</small></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Potensi</th>
                                                    <td id="potensi"><small>Loading data</small></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>GeoJSON View</strong>

                                    <a href="<?= base_url('api/' . $api_version  . '/geojson/gempa/m-5-terkini'); ?>" target="_blank">
                                        <button type="button" class="btn btn-success btn-sm float-right">GeoJSON</button>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="geojson">
                                        <pre id="json-renderer"></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer text-center">
            <small>Sumber data: BMKG (Badan Meteorologi, Klimatologi, dan Geofisika)</small>
        </footer>
    </div>
    <script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminLTE/js/adminlte.min.js'); ?>"></script>
    <script src="<?= base_url('assets/leaflet/leaflet.js'); ?>"></script>
    <script src="<?= base_url('assets/json-viewer/jquery.json-viewer.js'); ?>"></script>

    <script>
        var url = "<?= base_url('api/' . $api_version  . '/geojson/gempa/m-5-terkini'); ?>";

        var geojson = jQuery.ajax({
            type: "GET",
            url: url,
            dataType: "json",
            success: function(response) {
                console.log("Lancar, bos!");
                console.log(response);
            },
            error: function(response) {
                console.log("Galat, bos!");
                console.log(response);
            },
        });

        var mbAttr =
            'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            mbUrl =
            "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
            maxZoom = 18,
            minZoom = 2,
            tileSize = 512,
            zoomOffset = -1;

        var dark = L.tileLayer(mbUrl, {
                id: "mapbox/dark-v10",
                maxZoom: maxZoom,
                minZoom: minZoom,
                tileSize: tileSize,
                zoomOffset: zoomOffset,
                attribution: mbAttr,
            }),
            light = L.tileLayer(mbUrl, {
                id: "mapbox/light-v9",
                maxZoom: maxZoom,
                minZoom: minZoom,
                tileSize: tileSize,
                zoomOffset: zoomOffset,
                attribution: mbAttr,
            }),
            satellite = L.tileLayer(mbUrl, {
                id: "mapbox/satellite-v9",
                maxZoom: maxZoom,
                minZoom: minZoom,
                tileSize: tileSize,
                zoomOffset: zoomOffset,
                attribution: mbAttr,
            }),
            street = L.tileLayer(mbUrl, {
                id: "mapbox/streets-v11",
                maxZoom: maxZoom,
                minZoom: minZoom,
                tileSize: tileSize,
                zoomOffset: zoomOffset,
                attribution: mbAttr,
            });

        // map
        $.when(geojson).done(function() {
            // data
            if (geojson.responseJSON.success) {
                $('#tanggal').text(geojson.responseJSON.features[0].properties.tanggal + ' ' + geojson.responseJSON.features[0].properties.jam);
                $('#magnitude').text(geojson.responseJSON.features[0].properties.magnitude);
                $('#kedalaman').text(geojson.responseJSON.features[0].properties.kedalaman);
                $('#koordinat').text(geojson.responseJSON.features[0].properties.bujur + ' ' + geojson.responseJSON.features[0].properties.lintang);
                $('#potensi').text(geojson.responseJSON.features[0].properties.potensi);
                $('#wilayah1').text(geojson.responseJSON.features[0].properties.wilayah1);
                $('#wilayah2').text(geojson.responseJSON.features[0].properties.wilayah2);
                $('#wilayah3').text(geojson.responseJSON.features[0].properties.wilayah3);
                $('#wilayah4').text(geojson.responseJSON.features[0].properties.wilayah4);
                $('#wilayah5').text(geojson.responseJSON.features[0].properties.wilayah5);
                $("#eqmap").attr('src', geojson.responseJSON.features[0].properties.peta);

                $setView = [geojson.responseJSON.features[0].geometry.coordinates[1], geojson.responseJSON.features[0].geometry.coordinates[0]]
                $zoom = 7;
            } else {
                $setView = [-1.263325, 118.606436];
                $zoom = 4;
            }

            // geojson view
            $('#json-renderer').jsonViewer(geojson.responseJSON);

            // mymap
            var mymap = L.map("mapid", {
                fullscreenControl: true,
                worldCopyJump: true,
                preferCanvas: true,
                maxBoundsViscosity: 1.0,
                layers: [light],
            }).setView($setView, $zoom);

            // base layers
            var baseLayers = {
                Dark: dark,
                Light: light,
                Satellite: satellite,
                Street: street,
            };

            // control
            L.control.layers(baseLayers).addTo(mymap);


            // point
            var earthquake = L.geoJSON(geojson.responseJSON.features, {
                pointToLayer: function(feature, latlng) {
                    return L.circleMarker(latlng, {
                        title: '',
                        radius: 7,
                        color: 'red'
                    }).bindTooltip('<b>Episentrum Gempa</b>');
                }
            }).addTo(mymap);
        });
    </script>
</body>

</html>