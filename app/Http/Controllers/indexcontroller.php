<?php

namespace documentoscontroller\Http\Controllers;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index()
    {
    return view ("index");
    }
    
    public function blog()
    {
    return view ("blog");
    }
    public function about()
    {
    return view ("about");
    }
    public function blogsingle()
    {
    return view ("blogsingle");
    }
    
    public function contact()
    {
    return view ("contact");
    }
    //INICIO_Vista CURSOS
    public function courses(){
        return view ("courses");
    }
    public function curso_pr_mx(){
        return view ("traduccion_pr_mt_mx");
    }
    public function curso_pr_us(){
        return view ("traduccion_pr_mt_us");
    }
    public function basico(){
        return view ("inglesbasico");
    }
    public function intermedio(){
        return view ("inglesintermedio");
    }
    public function avanzado(){
        return view ("inglesavanzado");
    }
    //FIN_Vista CURSOS
    public function teacher()
    {
    return view ("teacher");
    }
    public function login()
    {
    return view ("login");
    }
    public function usuarios()
    {
    return view ("usuarios");
    }
}
