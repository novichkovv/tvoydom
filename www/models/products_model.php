<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 27.09.2015
 * Time: 16:45
 */
class products_model extends model
{
    public function getProduct($product_id)
    {
        $stm = $this->pdo->prepare('
        SELECT
            p.*,
            pi.id image_id,
            pi.image_name,
            pi.main,
            pi.small,
            pi.usual
        FROM
            products p
              LEFT JOIN
            product_images pi ON pi.product_id = p.id
        WHERE
            p.id = :product_id
        ORDER BY pi.main DESC, pi.small DESC, pi.usual DESC
        ');
        $tmp = $this->get_all($stm, array('product_id' => $product_id));
        $res = [];
        foreach ($tmp as $v) {
            foreach ($v as $key => $val) {
                if(in_array($key, array('main', 'small'))) {
                    if($v[$key]) {
                        $res['images'][$key] = $v['image_name'];
                    }
                } elseif($key == 'usual' && $v[$key]) {
                    $res['images'][$key][$v['image_id']] = $v['image_name'];
                } elseif($key == 'image_name' && !$v['usual'] && !$v['small'] && !$v['main'] && $val) {
                    $res['images']['inactive'][$v['image_id']] = $v['image_name'];
                } else {
                    $res[$key] = $val;
                }
            }
        }
        return $res;
    }

    public function getCategoryProducts($category_id) {
        $stm = $this->pdo->prepare('
        SELECT
            p.id,
            p.product_name,
            p.product_key,
            p.short_description,
            p.price,
            p.special_price,
            i.image_name
        FROM
            products p
               JOIN
            products_categories_relations c ON c.product_id = p.id
               LEFT JOIN
            product_images i ON i.product_id = p.id AND i.main = "1"
        WHERE
            c.category_id = :category_id
              AND
            p.active = 1
        ');
        return $this->get_all($stm, array('category_id' => $category_id));
    }

    public function getProductCopies($copy_id)
    {
        $stm = $this->pdo->prepare('
            SELECT
                p.*,
                i.image_name
            FROM
                products_copies c
                    JOIN
                products p ON p.copy_id = c.id
                    LEFT JOIN
                product_images i ON i.product_id = p.id AND i.main = "1"
            WHERE
                c.id = :copy_id
        ');
        $this->writeLog('test', $stm->getQuery(array('copy_id' => $copy_id)));
        return $this->get_all($stm, array('copy_id' => $copy_id));
    }
}