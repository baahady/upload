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
            ->select('files.fileName,files.type,files.created_at')
            ->get()->getResultArray();
    }

    public function allUserFile()
    {
           return $this->db->table('files')
            ->join('users','files.owner = users.id')
            ->select('files.fileName,files.type,files.created_at,users.name,users.id')
            ->get()->getResultArray();
    }
}
