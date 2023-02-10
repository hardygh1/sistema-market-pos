<?php

class DashboardControlador{
    static public function ctrGetDatosDashboard(){

        $datos = DashboardModelo::mldGetDatosDashboard();

        return $datos;
    }

    static public function ctrGetVentasMesActual(){

        $ventasMesActual = DashboardModelo::mldGetVentasMesActual();

        return $ventasMesActual;
    }

    static public function ctrProductosMasVendidos(){

        $productosMasVendidos = DashboardModelo::mldProductosMasVendidos();

        return $productosMasVendidos;
    }

    static public function ctrProductosPocoStock(){

        $productosPocoStock = DashboardModelo::mldProductosPocoStock();

        return $productosPocoStock;
    }
}