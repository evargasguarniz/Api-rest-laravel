<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function getAllProjects(){
        $projects = Project::all();
        return $projects;
    }

    public function getAllProjectsQueryBuilder(){
        $projects = Project::where('is_active', 1)
                ->orderBy('name', 'asc')
                ->take(10)
                ->get();
        return $projects;

        // Va recuperando de la base de datos en bloques de 200 y luego los va procesando
        /*Project::chunk(200, function ($projects) {
            foreach ($projects as $project) {
                //Aquí escribimos lo que haremos con los datos (operar, modificar, etc)
            }
        });*/

        // trae el resultado pero no se rompe en caso no exista
         //$project = Project::findOrFail(1);

        // Metodo de consulta retorna el error en caso no exista restro pero no se rompe
        //$project = Project::where('is_active', '=', 1)->firstOrFail();

        // Actualizar un registro
        /*Project::where('is_active', 1)
        ->where('city_id', 4)
        ->update(['execution_date' => '2020-02-03']);*/

        //Elimina un registro de la tabla
        /*$project = Project::find(1);
        $project->delete();*/

        /*Project::destroy(1);
        Project::destroy(1, 2, 3);
        Project::destroy([1, 2, 3]);*/

        /*Project::where('is_active', 0)->delete();*/
    }


}
