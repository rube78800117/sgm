<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            ["Menor", "Inspección Diaria", "D"],
            ["Menor", "Inspeccion Mensual", "M"],
            ["Menor", "Inspeccion Bimensual", "2M"],
            ["Menor", "Inspeccion Trimestal", "T"],
            ["Menor", "Lubricacion Motor Principal", "A"],
            ["Menor", "Inspeccion Anual", "A"],
            ["Menor", "Cambio grasa Motor", "40000"],
            ["Menor", "END Cardan", "40000"],
            ["Menor", "Inspeccion Semanal", "S"],
            ["Menor", "Filtrado aceite Reductor", "1000"],
            ["Menor", "Cambio aceite reductor", "6000"],
            ["Menor", "Analisis vibraciones", "4M"],
            ["Menor", "Inspeccion Radiador", "2A"],
            ["Overhaul", "OVH bomba", "2A"],
            ["Menor", "Inspecciones Semestrales", "SE"],
            ["Overhaul", "END 4Años", "4A"],
            ["Overhaul", "END acoplamiento volante", "22500"],
            ["Overhaul", "Inspeccion acoplamiento retorno", "5A"],
            ["Menor", "Lubricacion Rodamientos auxiliares", "A"],
            ["Overhaul", "Cambio de aceite generadores", "2A"],
            ["Overhaul", "Inspeccion bianual", "2A"],
            ["Overhaul", "Cambio refrigerante", "4A"],
            ["Overhaul", "OVH Motor Termico", "10A"],
            ["Menor", "Lubricacion piñon", "A"],
            ["Overhaul", "Inspeccion quinquenal", "5A"],
            ["Overhaul", "Cambio de aceite Hidraulica", "8A"],
            ["Overhaul", "Inspeccion Acumuladores Hidraulica retorno", "5A"],
            ["Overhaul", "OVH Freno Servicio", "5A"],
            ["Overhaul", "OVH Freno Emergencia R0", "2A"],
            ["Menor", "Alineacion Correas", "A"],
            ["Menor", "Verificacion Correas", "M"],
            ["Menor", "Manto Transmisión tren de ruedas", "1.5A"],
            ["Menor", "Lubricacion Apoyos par", "2A"],
            ["Menor", "OVH Transporadores", "10A"],
            ["Overhaul", "OVH Estructura", "2A"],
            ["Menor", "Lubricacion Plataforma", "A"],
            ["Menor", "Lubricar dispositivos de seguridad", "A"],
            ["Menor", "Inspección Cable", "MC"],
            ["Menor", "Lubricacion horquillas", "A"],
            ["Menor", "Desplazamiento linea aerea", "4A"],
            ["Menor", "Inspeccion LInea Aerea Especialista", "6A"],
            ["Overhaul", "OVH balancines", "4A"],
            ["Overhaul", "Manto. Pinza", "4M"],
            ["Menor", "END Pinzas", "1.5A"],
            ["Overhaul", "OVH Suspensiones", "A"],
            ["Menor", "END Suspensiones", "4A"],
            ["Menor", "Manto. gral. Cabina", "8M"],
            ["Overhaul", "Cambio de baterias", "3A"],
            ["Menor", "Toma muestra aceites", "1.5A"],
            ["Overhaul", "Cambio de aceite grupos electrogenos", "4A"],
            ["Overhaul", "Dreanado sedimentos generadores", "5A"],
            ["Menor", "Verificacion neumaticos", "M"],
            ["Menor", "Manto. gral. Cabina", "M"],
            ["Overhaul", "10% Suspensiones de Cabinas", "A"],
            ["Menor", "Poleas de Impulso-Dinamo tacométrica", "M"],
            ["Menor", "Verificacion de Poleas Palpadoras", "M"],
            ["Menor", "Verificacion de poleas de estacion", "M"],
            ["Menor", "Verificacion de Poleas de torre", "M"],
            ["Menor", "Sistema de seg. Apertura/Cierre de puertas", "M"],
            ["Menor", "Sistema RPD", "T"]
        ];

        foreach ($tasks as $task) {
            Task::create([
                'type' => $task[0],
                'name' => $task[1],
                'frequency' => $task[2],
            ]);
        }
    }
}
