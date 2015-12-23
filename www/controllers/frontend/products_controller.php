<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 24.12.2015
 * Time: 1:14
 */
class products_controller extends controller
{
    public function index()
    {
        $this->view('common' . DS . '404');
    }

    public function index_na()
    {
        $this->index();
    }

    public function catcher($product_key)
    {
        if($product_id = $this->model('products')->getByField('product_key', $product_key)['id']) {
            $this->render('categories', $this->model('categories')->getCategories());
            $this->render('product', $this->model('products')->getProduct($product_id));
            $this->render('bestsellers', $this->model('products')->getCategoryBestsellers(null, 3));
            $this->view('products' . DS . 'index');
        } else {
            $this->view('common' . DS . '404');
        }

    }
}