<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return redirect('http://www.schoolenglishonthego.com/public/index');

});*/
Route::get('/', function () {
    return view('index');
});
Route::get('/index','indexcontroller@index');
Route::get('/about','indexcontroller@about');
Route::get('/blog','indexcontroller@blog');
Route::get('/blogsingle','indexcontroller@blogsingle');
Route::get('/contact','indexcontroller@contact');
//INICIO_Vista CURSOS
    Route::get('/courses','indexcontroller@courses');
    Route::get('/curso_pr_mx','indexcontroller@curso_pr_mx')->name('curso_pr_mx');
    Route::get('/curso_pr_us','indexcontroller@curso_pr_us')->name('curso_pr_us');
    Route::get('/basico','indexcontroller@basico')->name('basico');
    Route::get('/intermedio','indexcontroller@intermedio')->name('intermedio');
    Route::get('/avanzado','indexcontroller@avanzado')->name('avanzado');
//FIN_Vista CURSOS

Route::get('/teacher','indexcontroller@teacher');
Route::get('/principal','curso@principal')->name('principal');
//Route::get('/login', 'indexcontroller@login');
//Proceso de Alta alumnos
Route::get('/altaalumno','curso@altaalumno')->name('altaalumno');
Route::POST('/guardaalumno','curso@guardaalumno')->name('guardaalumno');
Route::get('/reportealumnos','curso@reportealumnos')->name('reportealumnos');
//Proceso de Modificacion de Alumnos
Route::any('edita/{id}',['uses'=>'curso@edita'])->name('edita');
Route::any('modificaalumnos/{id}',['uses'=>'curso@update'])->name('modificaalumnos');
Route::POST('/malumno','cursor@malumno')->name('malumno');

//Proceso de Eliminacion y Restauracion de alumnos
Route::get('/borraalumno/{idalum}','curso@borraalumno')->name('borraalumno');
Route::get('/restauraralumno/{idalum}','curso@restauraralumno')->name('restauraralumno');

///Comienza codigo de Alta tutores 
Route::get('/altatutores','tutorescontroller@altatutores')->name('altatutores');
Route::POST('/guardatutor','tutorescontroller@guardatutor')->name('guardatutor');
Route::get('/reportetutor','tutorescontroller@reportetutor')->name('reportetutor');
//Modifica Tutor..
Route::any('editt/{id}',['uses'=>'tutorescontroller@editt'])->name('editt');
Route::any('modificatutor/{id}',['uses'=>'tutorescontroller@update'])->name('modificatutor');

//Proceso de Eliminacion y Restauracion de tutor
Route::get('/borratutor/{idtut}','tutorescontroller@borratutor')->name('borratutor');
Route::get('/activartutor/{idtut}','tutorescontroller@activartutor')->name('activartutor');

//Proceso Alta de Profesores.
Route::get('/altaprofesor','profesorescontroller@altaprofesor')->name('altaprofesor');
Route::POST('/guardaprofesor','profesorescontroller@guardaprofesor')->name('guardaprofesor');
Route::get('/reporteprofesor','profesorescontroller@reporteprofesor')->name('reporteprofesor');


//Proceso de Modifica Profesores.
Route::any('editp/{id}',['uses'=>'profesorescontroller@editp'])->name('editp');
Route::any('modificaprofesor/{id}',['uses'=>'profesorescontroller@update'])->name('modificaprofesor');

//Eliminacion y Restauracion profesores
Route::get('/borraprofesor/{idprof}','profesorescontroller@borraprofesor')->name('borraprofesor');
Route::get('/activarprofesor/{idprof}','profesorescontroller@activarprofesor')->name('activarprofesor');
//OPERACIONES PARA LUGARES. 
//Proceso de Alta alumnos
Route::get('/altalugar','lugarescontroller@altalugares')->name('altalugar');
Route::POST('/guardalugar','lugarescontroller@guardalugar')->name('guardalugar');
Route::get('/reportelugares','lugarescontroller@reportelugares')->name('reportelugares');
//Proceso de Modificacion de Alumnos
Route::any('edit/{id}',['uses'=>'lugarescontroller@edit'])->name('edit');
Route::any('modificalugar/{id}',['uses'=>'lugarescontroller@update'])->name('modificalugar');
//Proceso de Eliminacion y Restauracion de alumnos
Route::get('/borralugar/{idlu}','lugarescontroller@borralugar')->name('borralugar');
Route::get('/activarlugar/{idlu}','lugarescontroller@activarlugar')->name('activarlugar');

//Proceso de Altas Niveles.
Route::get('/altanivel','nivelescontroller@altaniveles')->name('altanivel');
Route::POST('/guardanivel','nivelescontroller@guardanivel')->name('guardanivel');
Route::get('/reporteniveles','nivelescontroller@reporteniveles')->name('reporteniveles');
//Proceso de Modificacion Nivel. 
Route::any('editn/{id}',['uses'=>'nivelescontroller@editn'])->name('editn');
Route::any('modificanivel/{id}',['uses'=>'nivelescontroller@update'])->name('modificanivel');
//Borrado logico de nivel.
Route::get('/borranivel/{id_niv}','nivelescontroller@borranivel')->name('borranivel');
Route::get('/activarnivel/{id_niv}','nivelescontroller@activarnivel')->name('activarnivel');


//Proceso de Altas horarios.
Route::get('/altahorario','horarioscontroller@altahorario')->name('altahorario');
Route::POST('/guardahorario','horarioscontroller@guardahorario')->name('guardahorario');
Route::get('/reportehorario','horarioscontroller@reportehorario')->name('reportehorario');
//Proceso de Modificacion Nivel. 
Route::any('edith/{id}',['uses'=>'horarioscontroller@edith'])->name('edith');
Route::any('modificahorario/{id}',['uses'=>'horarioscontroller@update'])->name('modificahorario');
//Borrado logico de nivel.
Route::get('/borrahorario/{idh}','horarioscontroller@borrahorario')->name('borrahorario');
Route::get('/activarhorario/{idh}','horarioscontroller@activarhorario')->name('activarhorario');
//login 
Route::any('/login','Auth\LoginController@ShowLoginForm')->name('login');
Route::any('validate','Auth\LoginController@login');
Route::any('logout','Auth\LoginController@logout')->name('logout');

Route::get('/contact','SendEmailController@contact');
Route::post('/contact','SendEmailController@send');



//grupo

Route::get('/profesor','controladorgrupo@profesor')->name('profesor');
Route::get('/obtieneDatosEmpresaEscuela','controladorgrupo@obtieneDatosEmpresaEscuela')->name('obtieneDatosEmpresaEscuela');
Route::get('/obtieneDatosGrupo','controladorgrupo@obtieneDatosGrupo')->name('obtieneDatosGrupo');
Route::get('/guardar','controladorgrupo@guardar')->name('guardar');
Route::get('/obtieneEmpresaEscuela','controladorgrupo@obtieneEmpresaEscuela')->name('obtieneEmpresaEscuela');
Route::get('/obtienedatosprofesor','controladorgrupo@obtienedatosprofesor')->name('obtienedatosprofesor');
Route::get('/reporteprof','controladorgrupo@reporteprof')->name('reporteprof');
Route::get('/filtro','controladorgrupo@filtro')->name('filtro');

Route::get('/borraregistroprofesor','controladorgrupo@borraregistroprofesor')->name('borraregistroprofesor');
//Route::get('/reporteprof','controladorgrupo@reporteprof'); 



//alumno

Route::get('/alumno','controladoralumno@alumno')->name('alumno');
Route::get('/obtieneDatosEmpresaEscuela','controladoralumno@obtieneDatosEmpresaEscuela')->name('obtieneDatosEmpresaEscuela');
Route::get('/obtieneDatosGrupo','controladoralumno@obtieneDatosGrupo')->name('obtieneDatosGrupo');
Route::get('/guardarasignaciongrupo','controladoralumno@guardarasignaciongrupo')->name('guardarasignaciongrupo');
Route::get('/obtieneEmpresaEscuela','controladoralumno@obtieneEmpresaEscuela')->name('obtieneEmpresaEscuela');
Route::get('/obtienedatosalumno','controladoralumno@obtienedatosalumno')->name('obtienedatosalumno');
Route::get('/reportegrupo','controladoralumno@reportegrupo')->name('reportegrupo');
Route::get('/filtrogrupo','controladoralumno@filtrogrupo')->name('filtrogrupo');

Route::get('/borraregistroalumno','controladoralumno@borraregistroalumno')->name('borraregistroalumno');
//Route::get('/reporteprof','controladorgrupo@reporteprof'); 

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});


//Alta documentos. 
//Proceso de Altas Niveles.
Route::any('/altadocumento','documentoscontroller@altadocumento')->name('altadocumento');
Route::any('/guardadocumento','documentoscontroller@guardadocumento')->name('guardadocumento');
Route::get('/reportedocumentos','documentoscontroller@reportedocumentos')->name('reportedocumentos');
Route::any('/informacion','documentoscontroller@informacion')->name('informacion');
//Borrado logico de documentos.
Route::get('/borradocumento/{idd}','documentoscontroller@borradocumento')->name('borradocumento');
Route::get('/activardocumento/{idd}','documentoscontroller@activardocumento')->name('activardocumento');
Route::get('/eliminadocumento/{idd}','documentoscontroller@eliminadocumento')->name('eliminadocumento');
//Descarga de archivos prueba.
Route::any('/download/{$documento}','documentoscontroller@download')->name('download');

//funcion de descarga

//PDF

Route::any('alumnos','curso@exportpdf')->name('alumnos');
Route::any('tutores','tutorescontroller@exporttutores')->name('tutores');
Route::any('profesores','profesorescontroller@exportp')->name('profesores');
Route::any('horarios','horarioscontroller@exporth')->name('horarios');
Route::any('lugares','lugarescontroller@exportl')->name('lugares');
Route::any('detalle_claves','controladorgrupo@exportdg')->name('detalle_claves');
Route::any('detalle_grupos','controladoralumno@exporta')->name('detalle_grupos');
Route::any('exportbasico','controladoralumno@exportbasico')->name('exportbasico');
Route::any('exportados','controladoralumno@exportados')->name('exportados');
Route::any('exportatres','controladoralumno@exportatres')->name('exportatres');
Route::any('profesoruno','controladorgrupo@profesoruno')->name('profesoruno');
Route::any('profesordos','controladorgrupo@profesordos')->name('profesordos');




