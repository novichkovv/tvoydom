<?php
/**
 * Created by PhpStorm.
 * User: enovichkov
 * Date: 28.08.2015
 * Time: 17:20
 */
class index_controller extends controller
{
    public function index()
    {
        $this->render('bestsellers', $this->model('products')->getCategoryBestsellers(null, 4));
        $this->addScript('libs/isotope.min');
        $this->view('index' . DS . 'index');
    }

    public function index_na()
    {
        $this->index();
    }
}