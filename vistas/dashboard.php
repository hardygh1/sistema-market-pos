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
        <!-- Creamos una fila -->
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
           
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<script>
    $(document).ready(function(){
        $.ajax({
            url: 'ajax/dashboard.ajax.php',
            method: 'POST',
            dataType: 'json',
            success:function(respuesta){
                console.log("respuesta",respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos']);
                $("#totalCompras").html('S./' + respuesta[0]['totalCompras'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                $("#totalVentas").html('S./' + respuesta[0]['totalVentas'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                $("#totalGanancias").html('S./' + respuesta[0]['ganancias'].replace(/\d(?=(\{3})+\.)/g, "$%,"));
                $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock']);
                $("#totalVentasHoy").html('S./' + respuesta[0]['ventasHoy'].replace(/\d(?=(\{3})+\.)/g, "$%,"));

            }
            
       });
    })
</script>