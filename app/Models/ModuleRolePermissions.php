<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuleRolePermissions extends Model
{
    protected $table      = 'module_role_permissions';
    protected $primaryKey = 'Module_role_permissions_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'Module_role_fk', 
        'Permissions_fk'
    ];

    protected $useTimestamps = true;
    protected $createdField   = 'created_at';
    protected $updatedField   = 'updated_at';
    protected $deletedField   = 'deleted_at';

    protected $validationRules = [
        'Module_role_fk'   => 'required|integer',
        'Permissions_fk'   => 'required|integer',
    ];

    protected $validationMessages = [
        'Module_role_fk' => [
            'required'   => 'The module role foreign key is required.',
            'integer'    => 'The module role foreign key must be an integer.'
        ],
        'Permissions_fk' => [
            'required'   => 'The permissions foreign key is required.',
            'integer'    => 'The permissions foreign key must be an integer.'
        ],
    ];

    protected $skipValidation = false;
}
