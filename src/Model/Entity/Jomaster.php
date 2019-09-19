<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jomaster Entity
 *
 * @property int $id
 * @property string $jobtype
 * @property string $status
 * @property string $title
 * @property string $natureofproject
 * @property \Cake\I18n\FrozenDate $startdate
 * @property string $preferredcountry
 * @property string $employer
 * @property string $agencies
 * @property string $candidates
 * @property string $documents
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Jomaster extends Entity
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
        'jobtype' => true,
        'status' => true,
        'title' => true,
        'natureofproject' => true,
        'startdate' => true,
        'preferredcountry' => true,
        'employer' => true,
        'agencies' => true,
        'candidates' => true,
        'documents' => true,
        'created' => true,
        'modified' => true
    ];
}
