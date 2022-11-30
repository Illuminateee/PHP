<?php

    // require_once 'trs_header.php';
    namespace OOP\App;

    class TrxHeaderController{
        public $header;

        public function __construct(){
            $this -> header = new trxHeader();
        }
        
        public function index(){
            print_r($this -> header->index());
        }

        

        public function show($id){
            print_r($this -> header->find($id));
        }

        public function add($id){
            $insert = [
                'id' => 3,
                'branch_id' => 1,
                'cashier_id' => 2,
                'transaction_at' => Null,
                'discount' => 0,
                'total_price' => 20000,
                'total' => 30000,
                'changed' => 10000,
                'created_at' => Null
            ];
            print_r($this -> header-> insert($insert));
        }

        public function updated($id){
            $update = [
                'branch_id' => 1,
                'cashier_id' => 2,
                'transaction_at' => Null,
                'discount' => 0,
                'total_price' => 1,
                'total' => 100,
                'changed' => 7000,
                'created_at' => Null,
                'id' => 2
            ];

            print_r($this -> header -> updated($update));
        }

        public function delete($id){
            print_r($this -> header -> delete($id));
        }

    }
?>