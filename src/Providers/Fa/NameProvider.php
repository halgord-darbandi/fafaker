<?php

namespace Fafaker\Providers\Fa;

use Fafaker\Providers\Contracts\Generatable;
use Fafaker\Providers\Contracts\GenerateTrait;

class NameProvider implements Generatable{

    use GenerateTrait;

    /*
     * database of provider
    */
    protected static array $storage = [
        'محمد' ,'علی' ,'حسین' ,'حسن' ,'رضا' ,'سجاد' ,'جواد' ,'احسان' ,'ابراهیم' ,'مازیار' ,'مانی' ,
        'نیما' ,'سینا' ,'اشکان' ,'امیرحسین' ,'امیرعلی' ,'امیر' ,'عباس' ,'لقمان' ,'امیرمحمد' ,'امیررضا' ,
        'علیرضا' ,'اکبر' ,'علی اکبر' ,'مراد' ,'علیمراد' ,'عبداالله' ,'خلیل' ,'جلیل' ,'اسماعیل' ,'متین','سعید',
        'آرمین' ,'مهران' ,'احمد' ,'محمود' ,'فرشید' ,'جاسم' ,'جسیم' ,'سعید' ,'کریم' ,'شفیع' ,'جنید' ,'جبار' ,
        'قباد' ,'قادر' ,'جابر' ,'قاسم' ,'آرتا' ,'آبتین' ,'آرش' ,'آریا' ,'ارشیا' ,'اسامه' ,'ارمیا' ,'بردیا' ,
        'ایلیا' ,'بابک' ,'بهداد' ,'بهزاد' ,'باربد' ,'بهنام' ,'پارسا' ,'پدرام' ,'پرهام' ,'برهان' ,'توحید' ,
        'تیام' ,'جاوید' ,'حافظ' ,'حامد' ,'خسرو' ,'مهرداد' ,'دارا' ,'داریوش' ,'دانا' ,'دانیال' ,'رامبد' ,
        'رامتین' ,'رامسین' ,'راشد' ,'رشید' ,'رامین' ,'رایان' ,'روزبه' ,'زاهد' ,'ذکریا' ,'سروش' ,'ساتیار' ,
        'سوشا' ,'سامان' ,'ساسان' ,'ماکان' ,'ماهان' ,'سبحان' ,'سپهر' ,'سورنا' ,'شادمهر' ,'شاهین' ,'شایان' ,
        'شروین' ,'شهاب' ,'شهریار' ,'صابر' ,'صبور' ,'منصور' ,'طاها' ,'طاهر' ,'عادل' ,'عارف' ,'عرفان' ,'عماد' ,
        'عیسی' ,'فاتح' ,'فتاح' ,'فربد' ,'فرید' ,'فرحان' ,'فرزاد' ,'فرداد' ,'فرشاد' ,'فرهام' ,'فواد' ,'قدیر' ,
        'قنبر' ,'قادر' ,'عبدالقادر' ,'کامران' ,'کامیار' ,'کاوه' ,'کسری' ,'کوروش' ,'کوشا' ,'کیارش' ,'کارن' ,
        'کیانوش' ,'کیوان' ,'کیهان' ,'کیان' ,'گلمحمد' ,'لاوان' ,'مهیار' ,'مهداد' ,'مهراب' ,'مزدک' ,'میثاق' ,
        'مهرشاد' ,'میکائیل' ,'محسن' ,'محسون' ,'ماردین' ,'نامی' ,'نصیر' ,'نوید' ,'نبکان' ,'هابیل' ,'هارون' ,
        'هامون' ,'همایون' ,'هومن' ,'حسام' ,'یاسر' ,'یاسین' ,'یزدان' ,'یاشار' ,'یعقوب' ,'یونس' ,'یوسف' ,'ارسلان',
        'اتابک' ,'اصلان' ,'اهورا' ,'صدرا' ,'مسیحا' ,'ماجد' ,'مجید' ,'هیراد' ,'آرین' ,'آریان' ,'آرمان' ,'آرام' ,
        'سام' ,'برسام' ,'آرسین' ,'شایان' ,'سهند' ,'اشکان' ,'شاهرخ' ,'سردار' ,'امید' ,'شریف' ,'نصیر' ,'ناصر' ,
        'پیمان' ,'پیام' ,'پوریا' ,'آزاد' ,'آراد' ,'آرمان' ,'غضنفر' ,'فاضل' ,'فضل الله' ,'افشین' ,'اسفندیار' ,
        'رستم' ,'رهام' ,'کیکاووس' ,'رستم' ,'شهروز' ,'فیروز' ,'پیروز' ,'نامدار' ,'سیامک' ,'سالار' ,'بهنام' ,
        'فردین' ,'بنیامین' ,'انوشیروان' ,'محمدرضا' ,'شاپور' ,'شهباز' ,'فرمند' ,'کاووس' ,'کوشا' ,'هرمز' ,
        'هوشیار' ,'هاشم' ,'ابوذر' ,'حشمت' ,'سلمان' ,'سلیمان' ,'سلیم' ,'عزیز' ,'عزت' ,'عبید' ,'عابد' ,'افشار' ,
        'خاتم' ,'بامداد' ,'رامک' ,'مسعود' ,'عبدالباسط' ,'عبدالعلی' ,'عبدالرحمن' ,'عبدالرحیم' ,'عبدالسمیع' ,
        'عبدالشفیع' ,'قهار' ,'عبدالقهار' ,'مجتبی' ,'مصطفی' ,'محمدامین' ,'امین' ,'کیا' ,'خشایار' ,'حشمت' ,'آراان' ,
        'آراس' ,'آریاس' ,'ماهیار'
    ];
}