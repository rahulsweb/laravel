<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    public $items=null;
    
    public $totalQty=0;
    public $totalPrice=0;
    public function __construct($oldCart)
    {
        if($oldCart){
            
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
        }
        else
        {
            $this->items=null;
        }
    }



    public function addProduct($item,$id)
    {
        if(session()->has('coupon_used'))
        session()->forget('coupon_used');
        if(session()->has('discount_amount'))
        session()->forget('discount_amount');
    
        $store=['qty'=>0,'price'=>$item->rate,'item'=>$item];
        if($this->items)
        {
           
            if(isset($this->items[$id]))
            {
                   $store= $this->items[$id];
            }
          
        }
     
        $store['qty']++;
        $store['price']=$item->rate * $store['qty']; 
        $this->items[$id]=$store;
        $this->totalQty++;
        $this->totalPrice+=$item->rate;
        
    }

            public function removeProduct($product,$id)
        {
            if(session()->has('coupon_used'))
            session()->forget('coupon_used');
            if(session()->has('discount_amount'))
            session()->forget('discount_amount');
            if($this->items)
            {
 
             
                if(isset($this->items[$id]))
                {
                 
              
                       $removeProduct= $this->items[$id];
                     
                       $this->totalQty=$this->totalQty-1;
                       $this->totalPrice=$this->totalPrice-$removeProduct['price'];
                   
                       array_forget($this->items,$id);
                      
                }
            
            }

        }

        public function addCart($item,$id)
        {
  
            if(session()->has('coupon_used'))
            session()->forget('coupon_used');
            if(session()->has('discount_amount'))
            session()->forget('discount_amount');
            $store=['qty'=>0,'price'=>$item->rate,'item'=>$item];
            if($this->items)
            {
               
                if(isset($this->items[$id]))
                {
                       $store= $this->items[$id];
                }
              
            }

            if($store['qty'] >= $item->qty_left )
            {
                $store['qty'];
         
                $store['price']=$item->rate * $store['qty']; 
                $this->items[$id]=$store;
                $this->totalQty;
                $this->totalPrice;
            }
            else
            {
                $store['qty']++;
                $store['price']=$item->rate * $store['qty']; 
                $this->items[$id]=$store;
                $this->totalQty;
                $this->totalPrice+=$item->rate;
            }
       

        
        }
        public function minusCart($item,$id)
        {
            if(session()->has('coupon_used'))
            session()->forget('coupon_used');
            if(session()->has('discount_amount'))
            session()->forget('discount_amount');
            $store=['qty'=>0,'price'=>$item->rate,'item'=>$item];
        
            if($this->items)
            {
               
                if(isset($this->items[$id]))
                {
                       $store= $this->items[$id];
                }
              
            }
            $store['qty']--;
            if($store['qty'] >= 1)
            {
            $store['price']=$item->rate * $store['qty']; 
            $this->items[$id]=$store;
            $this->totalQty;
            
            $this->totalPrice-=$item->rate;
            }
            else
            {
                $store['qty']=1;
            }
        }

}
