<?php

namespace App\Models;

use CodeIgniter\Model;

class UserFileModel extends Model
{
    public function userFile()
    {
           return $this->db->table('files')
            ->join('users','files.owner = users.id')
            ->select('*')
            ->get()->getResultArray();
    }
}
