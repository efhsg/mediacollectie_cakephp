<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bestanden Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property string $naam
 * @property string|null $bestandstype
 * @property int|null $map
 * @property string|null $schijf
 * @property int|null $grootte
 */
class Bestanden extends Entity
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
        'created_at' => true,
        'updated_at' => true,
        'naam' => true,
        'bestandstype' => true,
        'map' => true,
        'schijf' => true,
        'grootte' => true
    ];
}
