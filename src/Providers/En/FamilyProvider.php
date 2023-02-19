<?php

namespace Fafaker\Providers\En;

use Fafaker\Providers\Contracts\Generatable;
use Fafaker\Providers\Contracts\GenerateTrait;

class FamilyProvider implements Generatable{

    use GenerateTrait;

    protected array $storage = [
        'darbandi','mohammadi','moradi','momeni','karimi','askari','saedi','khalighi','karegar','mostafaye',
        'safari','shahmari','kord','kordi','khezri','khezr pur','nader pur','naderi','mahmudi','ghanbari',
        'ghaderi','saberi','sadeghi','jaberi','jabari','abdulahi','nosrati','narimani','zeyghami','khodadad',
        'khodadadi','khodamoradi','derakhshan','derakhshani','daraye','yari','shafiye','nokhasi','azimi','ezati',
        'salehi','besharati','zangeneh','rejali','mardani','rostami','weysi','azimi','ebrahimi','esmaeli','salimi',
        'kamrani','kamrava','esfehani','tehrani','kalantari','lashkari','rezaye','ali mohammadi','ahmadi','sufi',
        'sabagh','karim nezhad','karami khah','saburi','mehdi pur','irani','iran nezhad','nazeri','yusefi',
        'jamali','jamalzadeh','kamali','kamalzadeh','yasini','lohrasbi','hushangi','walizadeh','tawakoli',
        'tawasoli','bayat','taremi','shojaye','karim zadeh'
    ];
}