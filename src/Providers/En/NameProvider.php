<?php

namespace Fafaker\Providers\En;

use Fafaker\Providers\Contracts\Generatable;
use Fafaker\Providers\Contracts\GenerateTrait;

class NameProvider implements Generatable
{

    use GenerateTrait;

    /*
     * database of provider
    */
    protected static array $storage = [
        'male' => [
            'mohammad','ali','hosein','hasan','reza','sajad','javad','ehsan','ebrahim','esmael','mazyar','mani',
            'nima','sina','ashkan','amir hosein','amir ali','amir','abbas','loghman','amir mohammad','amir reza',
            'alireza','akbar','ali akbar','morad','alimorad','abdulah','khalil','jalil','matin','saed','armin',
            'mehram','ahmad','mahmud','farshid','jasem','ghasem','jasim','saeed','karim','shafea','joneyd','jabbar',
            'bardya','arad','artin','sahand','babak','behzad','behnam','arta','parsa','pedram','dara','borhan',
            'javid','pedram','parham','piruz','rashed','rashid','behnam','ramin','ramtin','ramsin',
            'hamed','sasan','saman','saber','shervin','dana','danyal','shahin','shayan','aref','mahan','shahab',
            'ghader','ghanbar','farzad','farid','daryush','wahab','farshad','erfan','farbod','fateh','mardin',
            'mohsen','aras','aslan','salar','rostam','esfanfyar' ,'ghazanfar'
        ]
        ,
        'female' => [
            'atena','atusa','ayda','ashti','afagh','aftab','elena','elnaz','bita','maryam','nazanin','fatemeh',
            'apadana','baran','avizheh','elika','taraneh','boshra','banafshe','bahar','bahareh','elika','batul',
            'elaheh','soraya','afsaneh','hosna','homeyra','harir','khatun','jeyran','tina','mina','delaram',
            'delvin','jamileh','raha','khadijeh','zahra','zohreh','elham','asma','hana','khatun','ahu',
            'fereshteh','farzaneh','sheyda','shadi','rezvan','soheyla','sara','tara','telma','helma','shahnaz',
            'mahsa','sahar','shohreh','shabnam','sharareh','shima','shila','mobina','tina',
            'marjan','hanyeh','nafas','setareh','dina','sana','sedna','ziba','zeynab','asal','merila',
            'melodi','ladan','laleh','helen','vishka'
        ]
    ];
}