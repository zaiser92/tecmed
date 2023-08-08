<?php

namespace App\Models;

use CodeIgniter\Model;

class MNnoticias extends Model
{
    protected $table      = 'noticias';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id_administrador',
        'codigo',
        'id_mencion',
        'archivo',
        'estado',
        'titulo',
        'referencia'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'fecha_edit';
    protected $deletedField  = '';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function listarActivos($activo)
    {
        $this->select('noticias.*, m.mencion AS mencion');
        $this->join('mencion AS m', 'noticias.id_mencion = m.id'); //INNER JOIN
        $this->where('noticias.estado', $activo);
        $this->orderBy('noticias.id', 'ASC');
        $datos = $this->findAll();
        return $datos;
    }

    public function listarAdministrador($id)
    {
        $this->select('noticias.*, m.mencion AS mencion');
        $this->join('mencion AS m', 'noticias.id_mencion = m.id');
        $this->where('noticias.id_administrador', $id);
        $this->orderBy('noticias.id', 'ASC');
        $datos = $this->findAll();
        return $datos;
    }

    public function listaProfesionales($mencion, $estado)
    {
        $this->select('noticias.*, m.mencion AS mencion');
        $this->join('mencion AS m', 'noticias.id_mencion = m.id');
        $this->where('noticias.estado', $estado);
        if (!empty($mencion)) {
            $this->whereIn('noticias.id_mencion', $mencion);
        } else {
            return []; // Retorna un array vacío si $mencion está vacía
        }
        $this->orderBy('noticias.id', 'ASC');
        $datos = $this->findAll();
        return $datos;
    }
}
