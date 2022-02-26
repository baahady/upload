<?php

namespace App\Models;

use CodeIgniter\Model;

class UserFileModel extends Model
{
    public function userFile()
    {
            $id = session()->get('id');
           return $this->db->table('files')
            ->join('users','files.owner = users.id')
            ->where('files.owner',$id)
            ->select('files.name,files.type,files.created_at')
            ->get()->getResultArray();
    }
}
