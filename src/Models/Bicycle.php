<?php
namespace chain_gang\Models;
class Bicycle extends \chain_gang\Core\Model
{
    protected $id;
    protected $brand;
    protected $model;
    protected $year;
    protected $category;
    protected $gender;
    protected $color;
    protected $weight;
    protected $condition_id;
    protected $price;
    protected const CATEGORIES = [
        'Road', 
        'Mountant', 
        'Hybrid', 
        'Cruiser', 
        'City', 
        'BMX'
    ];
    protected const GENDERS = [1 => 'Mens', 2 => 'Womens', 3 => 'Unisex'];
    protected const CONDITION = [
        1 => 'Beat up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like New',
    ];
    public function getWeight_lbs() {
        return number_format(floatval($this->weight*2.2046226218),3,'.', ',');
    }
    public function setWeight_kg($weight_lbs) {
        $this->weight = floatval($weight_lbs/2.2046226218);
    }
    public function stringCondition() {
        return self::CONDITION[$this->condition_id] ?? 'Unknown';
    }
    public function stringGender() {
        return self::GENDERS[$this->gender] ?? 'Unknown';
    }
    public function setBicycle($args = []) {
        $this->setId($args['id']);
        $this->setBrand($args['brand']);
        $this->setModel($args['model']);
        $this->setYear($args['year']);
        $this->setCategory($args['category']);
        $this->setGender($args['gender']);
        $this->setColor($args['color']);
        $this->setPrice($args['price']);
        $this->setWeight($args['weight_type'], $args['weight_type']);
        $this->setCondition_id($args['condition_id']);
    }
    public function getBicycle() {
        $args = [
            'id' => $this->getId(),
            'brand' => $this->getBrand(), 
            'model' => $this->getModel(), 
            'year' => $this->getYear(), 
            'category' => $this->getCategory(), 
            'gender' => $this->getGender(), 
            'color' => $this->getColor(),
            'price' => $this->getPrice(), 
            'weight' => $this->getWeight(),
            'condition_id' => $this->getCondition_id()
        ];
        return $args;
    }
    public function getBicycleShow() {
        $args = [
            'id' => $this->getId(),
            'brand' => $this->getBrand(), 
            'model' => $this->getModel(), 
            'year' => $this->getYear(), 
            'category' => $this->getCategory(), 
            'gender' => $this->stringGender(), 
            'color' => $this->getColor(),
            'price' => number_format($this->getPrice(),2,'.', ',').'$', 
            'weight' => number_format($this->getWeight_lbs(),2,'.', ',').' lbs/'.number_format($this->getWeight(),2,'.', ',').' kg',
            'condition_id' => $this->stringCondition()
        ];
        return $args;
    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand ?? '';

        return $this;
    }

    /**
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model ?? '';

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = ((is_numeric($year) && $year <= '9999') ? $year + 0 : 0) ?? 0;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category  ?? '';

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender + 0 ?? 3;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color  ?? '';

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight, $weight_type)
    {
        $this->weight = (($weight_type == '1') ? $weight + 0 : $this->setWeight_kg($weight)) ?? 0;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = (is_numeric($price ) ? $price  + 0 : 0) ?? 0;

        return $this;
    }

    /**
     * Get the value of condition_id
     */ 
    public function getCondition_id()
    {
        return $this->condition_id;
    }

    /**
     * Set the value of condition_id
     *
     * @return  self
     */ 
    public function setCondition_id($condition_id)
    {
        $this->condition_id = $condition_id + 0 ?? 3;

        return $this;
    }
}
?>