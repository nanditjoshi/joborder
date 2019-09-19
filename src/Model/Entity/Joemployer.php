<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Joemployer Entity
 *
 * @property int $id
 * @property int $jomasterid
 * @property \Cake\I18n\FrozenDate $startdate
 * @property string $notes
 * @property string $attachments
 * @property string $jobpositions
 * @property int $nostaff
 * @property int $description
 * @property int $workingdays
 * @property int $workingweek
 * @property int $holidayentitlement
 * @property float $salaryaftertax
 * @property string $foodallowance
 * @property string $accommodation
 * @property string $transportcosts
 * @property string $lengthofcontract
 * @property string $medicalInsurance
 * @property string $airticket
 * @property string $otherdetails
 * @property string $candidate
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Joemployer extends Entity
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
        'jomasterid' => true,
        'startdate' => true,
        'notes' => true,
        'attachments' => true,
        'jobpositions' => true,
        'nostaff' => true,
        'description' => true,
        'workingdays' => true,
        'workingweek' => true,
        'holidayentitlement' => true,
        'salaryaftertax' => true,
        'foodallowance' => true,
        'accommodation' => true,
        'transportcosts' => true,
        'lengthofcontract' => true,
        'medicalInsurance' => true,
        'airticket' => true,
        'otherdetails' => true,
        'candidate' => true,
        'created' => true,
        'modified' => true
    ];
}
