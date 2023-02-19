# fafaker
### farsi/persian fake data generator.

first create instance of Factory:
```
// you can set english by 'en' argumant
$faker = new Factory('fa');
```

set language:
```
$faker->lang = 'fa' or 'en'
```

then 
```
$faker->name;
$faker->family;
$faker->fullName;

or

$faker->name();
$faker->family();
$faker->fullName();
```