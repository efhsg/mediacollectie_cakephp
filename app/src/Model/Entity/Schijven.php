<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schijven Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 * @property string $naam
 * @property int|null $capaciteit
 * @property int|null $beschikbaar
 * @property \Cake\I18n\FrozenDate|null $scandatum
 */
class Schijven extends Entity
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
        'capaciteit' => true,
        'beschikbaar' => true,
        'scandatum' => true
    ];
}
