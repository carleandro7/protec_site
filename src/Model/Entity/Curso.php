<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity
 *
 * @property int $id
 * @property string $tituloprincipal
 * @property string $subtituloprincipal
 * @property string $curso
 * @property string $turno
 * @property string $valorintegral
 * @property string $valordesconto
 * @property string $duracao
 * @property string $icone
 * @property string $titulo
 * @property string $subtitulo
 * @property string $texto
 * @property string $imagem
 * @property string $tituloinstituicao
 * @property string $textoinstituicao
 */
class Curso extends Entity
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
        'tituloprincipal' => true,
        'subtituloprincipal' => true,
        'curso' => true,
        'turno' => true,
        'valorintegral' => true,
        'valordesconto' => true,
        'duracao' => true,
        'icone' => true,
        'titulo' => true,
        'subtitulo' => true,
        'texto' => true,
        'imagem' => true,
        'tituloinstituicao' => true,
        'textoinstituicao' => true,
    ];
}
