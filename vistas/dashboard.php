<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tablero Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Tablero Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- Row Tarjetas Informativas -->
        <div class="row">
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProductos">125</h4>

                        <p>Productos Registrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>
                    <a style="cursor:pointer" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TOTAL COMPRAS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalCompras">S./ 1,000.00</h4>

                        <p>Total Compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a style="cursor:pointer" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TOTAL VENTAS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalVentas">S/ 1,200.00</h4>

                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a style="cursor:pointer" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TOTAL GANANCIAS -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalGanancias">S./ 470.00</h4>

                        <p>Total Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-pie"></i>
                    </div>
                    <a style="cursor:pointer" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TOTAL Productos min stock -->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4 id="totalProductosMinStock">15</h4>

                        <p>Productos poco Stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-remove-circle"></i>
                    </div>
                    <a style="cursor:pointer" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- TOTAL VENTAS  DIA ACTUAL-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy">S./ 250.00</h4>

                        <p>Ventas del día</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-calendar"></i>
                    </div>
                    <a style="cursor:pointer" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div><!-- Row Tarjetas Informativas -->

        <!-- Row Grafico de Barras -->
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title" id="title-header">Ventas del Mes:</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 205px; height: 300px; max-height: 350px; width:100%;">

                            </canvas>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- Row Grafico de Barras -->

        <!-- Row  -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Los 10 productos más vendidos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_productos_mas_vendidos">
                                <thead>
                                    <tr>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Ventas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Productos con poco Stock</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                </button>
                            </div> <!-- ./ end card-tools -->
                        </div> <!-- ./ end card-header -->
                    <div class="card-body">
                    <div class="table-responsive">
                            <table class="table" id="tbl_productos_poco_stock">
                                <thead>
                                    <tr>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
                                        <th>Stock Actual</th>
                                        <th>Mín. Stock</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div> <!-- ./ end card-body -->
                </div>
            </div>
        </div>




    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    $(document).ready(function() {

        /*SOLICITUD AJAX TARJETAS INFORMATIVAS*/

        $.ajax({
            url: 'ajax/dashboard.ajax.php',
            method: 'POST',
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuesta", respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html('S./' + respuesta[0]['totalCompras'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                $("#totalVentas").html('S./' + respuesta[0]['totalVentas'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                $("#totalGanancias").html('S./' + respuesta[0]['ganancias'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
                $("#totalVentasHoy").html('S./' + respuesta[0]['ventasHoy'].replace(/\d(?=(\{3})+\.)/g, "$%,"));

            }

        });

        /*ACTUALIZACION CONCURRENTE DE TARJETAS INFORMATIVAS*/
        setInterval(() => {
            $.ajax({
                url: 'ajax/dashboard.ajax.php',
                method: 'POST',
                dataType: 'json',
                success: function(respuesta) {
                    //console.log("respuesta", respuesta);
                    $("#totalProductos").html(respuesta[0]['totalProductos']);
                    $("#totalCompras").html('S./' + respuesta[0]['totalCompras'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                    $("#totalVentas").html('S./' + respuesta[0]['totalVentas'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                    $("#totalGanancias").html('S./' + respuesta[0]['ganancias'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                    $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
                    $("#totalVentasHoy").html('S./' + respuesta[0]['ventasHoy'].replace(/\d(?=(\{3})+\.)/g, "$%,"));

                }
            });
        }, 10000);

        /*SOLICITUD AJAX GRAFICO DE BARRAS DE VENTAS DEL MES*/
        $.ajax({
            url: 'ajax/dashboard.ajax.php',
            method: 'POST',
            data: {
                'accion': 1 //Parametro para Obtener Ventas del Mes
            },
            dataType: 'json',
            success: function(respuesta) {
                console.log("respuestaVentasDelMes", respuesta);

                var fecha_venta = [];
                var total_venta = [];
                var total_ventas_mes = 0;

                for (let i = 0; i < respuesta.length; i++) {

                    fecha_venta.push(respuesta[i]['fecha_venta']);
                    total_venta.push(respuesta[i]['total_venta']);
                    total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[i]['total_venta']);
                }

                $('#title-header').html('Ventas del Mes: S./ ' + total_ventas_mes.toString().replace(/\d(?=(\{3})+\.)/g, "$%,"));

                //Grafico de Barras
                var barChartCanvas = $("#barChart").get(0).getContext('2d');

                var areaChartData = {
                    labels: fecha_venta,
                    datasets: [{
                        label: 'Ventas del Mes',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        data: total_venta
                    }]
                }
                var barChartData = $.extend(true, {}, areaChartData);

                var temp0 = areaChartData.datasets[0];

                barChartData.datasets[0] = temp0;

                //Personalizacion de las Barras

                var barChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    events: false,
                    legend: {
                        display: true
                    },
                    animation: {
                        duration: 500,
                        easing: "easeOutQuart",
                        onComplete: function() {
                            var ctx = this.chart.ctx;
                            ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                            ctx.textAlign = 'center';
                            ctx.textBaseline = 'bottom';

                            this.data.datasets.forEach(function(dataset) {
                                for (var i = 0; i < dataset.data.length; i++) {
                                    var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                                        scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                                    ctx.fillStyle = '#444';

                                    var y_pos = model.y - 5;

                                    // Make sure data value does not get overFlow and hidden
                                    // When the bar's value is too clase to max value of scale
                                    // Note: The y value is reverse, it counts from top down

                                    if ((scale_max - model.y) / scale_max >= 0.93) {
                                        y_pos = model.y + 20;
                                    }

                                    ctx.fillText(dataset.data[i], model.x, y_pos);
                                }
                            });
                        }
                    }
                }

                //Visualizar el Grafico

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })


            }

        });

        /* SOLICITUD AJAX LISTADO DE PRODUCOS MAS VENDIDOS*/
        $.ajax({
            url: "ajax/dashboard.ajax.php",
            type: "POST",
            data: {
                'accion': 2 // Listar 10 Productos más vendidos
            },
            dataType: 'json',
            success:function(respuesta){
                console.log("RespuestaMasVendidos", respuesta);

                for (let i = 0; i < respuesta.length; i++) {
                    filas = '<tr>'+
                            '<td>'+ respuesta[i]["codigo_producto"] +'</td>'+
                            '<td>'+ respuesta[i]["descripcion_producto"] +'</td>'+
                            '<td>'+ respuesta[i]["cantidad"] +'</td>'+
                            '<td>S./ '+ respuesta[i]["total_venta"] +'</td>'+
                        '</tr>'
                    $("#tbl_productos_mas_vendidos tbody").append(filas);
                    
                }

                
            }

        });

        $.ajax({
            url: "ajax/dashboard.ajax.php",
            type: "POST",
            data: {
                'accion': 3 // Listar  Productos con poco Stcok
            },
            dataType: 'json',
            success:function(respuesta){
                console.log("RespuestaMasVendidos", respuesta);

                for (let i = 0; i < respuesta.length; i++) {
                    filas = '<tr>'+
                            '<td>'+ respuesta[i]["codigo_producto"] +'</td>'+
                            '<td>'+ respuesta[i]["descripcion_producto"] +'</td>'+
                            '<td>'+ respuesta[i]["stock_producto"] +'</td>'+
                            '<td>'+ respuesta[i]["minimo_stock_producto"] +'</td>'+
                        '</tr>'
                    $("#tbl_productos_poco_stock tbody").append(filas);
                    
                }

                
            }

        });
    })
</script>