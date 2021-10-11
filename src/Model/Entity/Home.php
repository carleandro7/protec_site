<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Home Entity
 *
 * @property int $id
 * @property string $cidade
 * @property string $curso
 * @property string $tipo
 * @property string $mensagembtn
 * @property string $valor
 * @property string|null $desconto
 * @property string $status
 * @property string $ordem
 * @property int $cidades_id
 * @property string $linkbtn
 */
class Home extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'curso' => true,
        'tipo' => true,
        'mensagembtn' => true,
        'valor' => true,
        'desconto' => true,
        'status' => true,
        'ordem' => true,
        'cidades_id' => true,
        'linkbtn' => true,
    ];
}
