<?php
    class Plantilla
    {
        static public function ctrlPlantilla()
        {
            include "vista/plantilla.php";
        }

        static public function ctrlRuta()
        {
            return "http://localhost:3000/vista/recursos";
        }
    }
?>