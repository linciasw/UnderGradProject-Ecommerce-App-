<?php


class Product
{

    protected $pdo = null;

    /**
     * Constructor that takes pdo connection
     */
    public function __construct(Database $pdo)
    {
        if (!isset($pdo->pdo)) return null;
        $this->pdo = $pdo->pdo;
    }



    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    public function getAllCategories() {
        $sql = "SELECT DISTINCT product_category FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    
    public function getProductDetails($product_id) {
        $sql = "SELECT * FROM products WHERE product_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$product_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    //search, sort and filter
    public function filterProducts($inputs) {

        $sql = "SELECT * FROM products WHERE product_id > 0";


        foreach ($inputs as $key => $value) {

            if(empty($value)) {
                continue;
            }

            switch ($key) {
                case 'category':
                    $sql .= " AND product_category = '$value'";
                    break;
                case 'search':
                    $sql .= " AND product_title LIKE '%$value%'";
                    break;
                case 'min_price':
                    $sql .= " AND product_price >= '$value'";
                    break;
                case 'max_price':
                    $sql .= " AND product_price <= '$value'";
                    break;
                case 'order':
                    $sql .= $this->orderBy($value);
                    break;
                
                default:
                    # code...
                    break;
            }


        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    public function orderBy($value){
        switch ($value) {
            case 'order-title':
                return " ORDER BY product_title ASC";
                break;
            case 'order-title-desc':
                return " ORDER BY product_title DESC";
                break;
            case 'order-price':
                return " ORDER BY product_price ASC";
                break;
            case 'order-price-desc':
                return " ORDER BY product_price ASC";
                break;
            default:
                # code...
                break;
        }

    }




    
    public function getRandomProducts() {
        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 3";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    


    public function getLatestProducts() {
        $sql = "SELECT * FROM products ORDER BY product_created DESC LIMIT 3";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    
    public function getBestsellingProducts() {
        $sql = "SELECT *, COUNT(order_details.product_id) times_sold 
        FROM order_details, products
        WHERE order_details.product_id = products.product_id
        GROUP BY order_details.product_id
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    
    public function getBestWeeklySellingProducts() {
        $sql = "SELECT *, COUNT(order_details.product_id) times_sold 
        FROM order_details, products
        WHERE order_details.product_id = products.product_id
        AND order_details_created >= '2022-05-1 00:00:00'
        AND order_details_created <= '2022-05-8 23:59:00'
        GROUP BY order_details.product_id"
        ;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    

    public function getRecommendedProducts($product_id) {
        $sql = "SELECT * 
        FROM products
        WHERE product_id in
        (select distinct product_id from order_details where order_id in
        (select distinct order_id from order_details where product_id = ?)
        and product_id != ?)"
        ;
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$product_id, $product_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}