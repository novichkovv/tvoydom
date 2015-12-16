<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 27.09.2015
 * Time: 16:17
 */
class product_controller extends controller
{
    public function index()
    {

    }

    public function index_na()
    {
        $this->index();
    }

    public function view_product($product_id)
    {
        $product = $this->model('products')->getProduct($product_id);
        $this->log($product);

        $this->render('product', $product);
        $this->view('product' . DS . 'product_view');
    }

    public function view_product_na($product_id)
    {
        $this->view_product($product_id);
    }
}