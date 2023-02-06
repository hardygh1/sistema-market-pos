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
}