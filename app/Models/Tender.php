<?php

namespace App\Models;


use App\Base\Database;
use App\Base\Model;
use Override;

class Tender extends Model
{
    protected $table = "tenders";
    protected $db;
    protected $fillable = [
        'title',
        'description',
        'deadline',
    ];
    
    public function __construct()
    {
        $this->db = new Database() ;
    }
    public function all_tender() : array{
        return $this->db->select($this->table);
    }
    public function tender_by_id($id) : array{
        return $this->db->find($this->table, ['id'=> $id]);
    }
}