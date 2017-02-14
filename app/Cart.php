<?php

namespace App;



class Cart{

    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){

        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function addToCart($id,$item){

        $storedItem = ['item'=>$item, 'quantity'=>0, 'price'=>$item->price];

        if($this->items){
            if(array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['quantity']++;
        $storedItem['price'] = $storedItem['quantity'] * $item->price;
        $this->items[$id] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice+=$item->price;
    }

    public function reduceByOne($id){
        $this->items[$id]['quantity']--;
        $this->items[$id]['price']-=$this->items[$id]['item']['price'];
        $this->totalQuantity--;
        $this->totalPrice-= $this->items[$id]['item']['price'];

        if($this->items[$id]['quantity']<=0){
            unset($this->items[$id]);
        }
    }

    public function reduceAll($id){
        $this->totalQuantity -= $this->items[$id]['quantity'];
        $this->totalPrice -= $this->items[$id]['price'];

        unset($this->items[$id]);
    }


}
