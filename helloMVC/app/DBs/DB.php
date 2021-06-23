<?php
//建立一個通用的 DB 模組
namespace App\DBs;

use config\DBconnect;
use PDOStatement;

class DB extends DBconnect {

    protected $table;
    protected $primary = 'id';
    private $filter = '';
    private $param = array();

    public function __construct($table){
        $this->table = $table;
        //$this->filter = $filter;
    }

    // 條件查詢 where ! 
    // 輸入格式 where(['id = :id'], [':id' => $id]])
    public function where($where = array(), $param = array()){
        if (isset($where)) {
            $this->fileter .= ' WHERE ';
            $this->filter .= \implode(' ', $where);
            $this->param = $param;
        }

        return $this;
    }

    // 排序方式，由使用者自行輸入
    // 例: order(['id DESC', 'name ASC',...])
    public function order($order = array()){
        if (isset($order)){
            $this->filter .= ' ORDER BY ';
            $this->filter .= \implode(',', $order);
        }

        return $this;
    }
    //新增資料
    public function add($data){
        $sql = \sprintf("insert into `%s` %s",$this->table, $this->formatInsert($data));
        $sth = DBconnect::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $data);
        $sth = $this->formatParam($sth, $this->param);
        $th->execute();

        return $sth->rowCount();
    }
    //修改資料
    public function update($data){
        $sql = \sprintf("update `%s` set %s %s", $this->table, $this->formatUpdate($data), $this->filter);
        $sth = DBconnect::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $data);
        $sth = $this->formatParam($sth, $this->param);
        $th->execute();

        return $sth->rowCount();
    }

    //一次取回所有資料
    public function fetchAll(){
        $sql = \sprintf("select * from `%s` %s", $this->table, $this->filter);
        $sth = DBconnect::pdo()->prepare($sql);
        //var_dump(($sth));
        $sth = $this->formatParam($sth, $this->param);
        $sth->execute();

        return $sth->fetchAll();
    }

    //一次只取回一筆資料
    public function fetch(){
        $sql = \sprintf("select * from `%s` %s", $this->table, $this->filter);
        $sth = DBconnect::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $this->param);
        $sth->execute();

        return $sth->fetch();
    }

    //刪除資料，以 id 欄位為主要刪除方式，較為方便
    public function delete($id){
        $sql = \sprintf("delete from `%s` where `%s` = :%s", $this->table, $this->primary, $this->primary);
        $sth = DBconnect::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [$this->primary => $id]);
        $sth->execute();

        return $sth->rowCount();
    }
    //格式化資料
    private function formatParam(PDOStatement $sth, $params = array()){
        foreach ($params as $param => &$value) {
            $param = is_int($param) ? $param + 1 : ':' . ltrim($param, ':');
            $sth->bindParam($param, $value);
        }

        return $sth;
    }

    //轉換成INSERT SQL 語法
    private function formatInsert($data){
        $fields = array();
        $names = array();
        foreach ($data as $key => $value) {
            $fields[] = \sprintf("`%s`", $key);
            $names[] = \sprintf(":%s", $key);
        }

        $field = implode(',' ,$fields);
        $name = implode(',', $names);

        return \sprintf("(%s) values (%s)", $field, $name);
    }

    //轉換成UPDATE SQL 語法
    private function formatUpdate($data){
        $fields = array();
        foreach ($data as $key => $value) {
            $fields[] = \sprintf("`%s` = :%s", $key, $key);
        }
        return implode(',', $fields);
    }
}