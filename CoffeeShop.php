<?php

class CoffeeShop
{
   protected $products = [];

   public function addProducts($product = [])
   {
      $this->products = $product;
   }

   public function getProducts()
   {
      return $this->products;
   }

   public function removeProducts()
   {
      //Logica para borrar un producto
   }
 
}

?>