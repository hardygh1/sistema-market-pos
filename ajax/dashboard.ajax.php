<?php
require_once "../controladores/dashboard.controlador.php";
require_once "../modelos/dashboard.modelo.php";

class AjaxDashboard{
    public function getDatosDashboard(){
        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }

    public function getVentasMesActual(){
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getProductosMasVendidos(){
        $productosMasVendidos = DashboardControlador::ctrProductosMasVendidos();
        echo json_encode($productosMasVendidos);
    }

    public function getProductosPocoStock(){
        $productosPocoStock = DashboardControlador::ctrProductosPocoStock();
        echo json_encode($productosPocoStock);
    }
}

//Instancias

if(isset($_POST['accion']) && $_POST['accion'] == 1){//Ejectuar Funcion ventas del Mes(Grafico de Barras)
    
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual -> getVentasMesActual();

}else if(isset($_POST['accion']) && $_POST['accion'] == 2){// Listar 10 Productos más vendidos

    $productosMasVendidos = new AjaxDashboard();
    $productosMasVendidos -> getProductosMasVendidos();

}else if(isset($_POST['accion']) && $_POST['accion'] == 3){// Ejecutar Productos poco Stock

    $productosPocoStock = new AjaxDashboard();
    $productosPocoStock -> getProductosPocoStock();

} else {
    $datos = new AjaxDashboard();
    $datos -> getDatosDashboard();
}
