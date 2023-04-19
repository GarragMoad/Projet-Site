<?php

require_once('model/modelBDD.php');
require_once('model/cours.php');

class ControlleurCours
{
 
    private $model;

    function __construct()
    {
        $this->model = new ModelBDD();
    }

    function recupCours()
    {
        $req = $this->model->execute_query("SELECT * FROM cours");
        $arrayCoursesTest = array();
        if($req->rowCount()>0)
        {
            while ($row = $req->fetch(PDO::FETCH_ASSOC)) 
            {
                array_push($arrayCoursesTest, $row);
            }
        }
        return $arrayCoursesTest;
    }

    function recup4Cours()
    {
        $arrayCourses = $this->recupCours();
        shuffle($arrayCourses);
        $GLOBALS['course0'] = new Cours($arrayCourses[0]['id'], $arrayCourses[0]['titre'], $arrayCourses[0]['categorie'], $arrayCourses[0]['image'], $arrayCourses[0]['prix'], $arrayCourses[0]['note']);
        $GLOBALS['course1'] = new Cours($arrayCourses[1]['id'], $arrayCourses[1]['titre'], $arrayCourses[1]['categorie'], $arrayCourses[1]['image'], $arrayCourses[1]['prix'], $arrayCourses[1]['note']);
        $GLOBALS['course2'] = new Cours($arrayCourses[2]['id'], $arrayCourses[2]['titre'], $arrayCourses[2]['categorie'], $arrayCourses[2]['image'], $arrayCourses[2]['prix'], $arrayCourses[2]['note']);
        $GLOBALS['course3'] = new Cours($arrayCourses[3]['id'], $arrayCourses[3]['titre'], $arrayCourses[3]['categorie'], $arrayCourses[3]['image'], $arrayCourses[3]['prix'], $arrayCourses[3]['note']);
    }

    /* function recupCoursDev()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE");
    }

    function recupCoursLang()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE");
    }

    function recupCoursDes()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE");
    }

    function recupCoursFit()
    {
        $req = $this->model->execute_query("SELECT * FROM cours WHERE");
    } */
    
}

?>