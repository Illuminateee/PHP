<?php

// require_once 'Database.php';
namespace OOP\App;
class TrxHeader extends Database{

    // public function __construct(){
    //     Database::setConnection();
    // }

    public function index(){
        $statement = self::$conn -> prepare('select * from trx_header');
        $statement->execute();

        return $statement->fetch();
    }

    public function insert($data){
        $statement = self::$conn->prepare("insert into trx_header(id, branch_id, cashier_id, transaction_at, discount, total_price, total, changed, created_at) values(:id, :branch_id, :cashier_id, :transaction_at, :discount, :total_price, :total, :changed, :created_at)");

        return $statement -> execute($data);
    }

    public function updated($data){
        $statement = self::$conn -> prepare("UPDATE trx_header SET branch_id = :branch_id, cashier_id = :cashier_id, transaction_at = :transaction_at, discount = :discount, total_price = :total_price, total = :total, changed = :changed, created_at = :created_at where id = :id");
        
        return $statement -> execute($data);

    }

    public function delete($id){
        $statement = self:: $conn -> prepare("DELETE from trx_header where id= :id");

        return $statement -> execute(['id'=>$id]);
    }

    public function find($id){
        $statement = self::$conn -> prepare("SELECT * from `trx_header` where id= :id");

        return $statement -> execute(['id'=> $id]);
    }


}

try{
    $trxHeader = new TrxHeader();
    // $data = $trxHeader-> find(1);
    var_dump($trxHeader); 
    
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

    $trxHeader -> updated($update);
    // $trxHeader -> delete(1);

    // $trxHeader -> insert($insert);
    
    print_r($trxHeader->index());
}catch(\Throwable $th){
    throw $th;
}