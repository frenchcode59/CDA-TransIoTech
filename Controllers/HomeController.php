<?php

namespace Controller;


class HomeController
{

  public function __construct()
  {
  }

  public function getIndex()
  {

    require_once '../Bonnefete/src/App/Views/homepages/home.php';
  }
}