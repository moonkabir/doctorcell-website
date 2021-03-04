<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ঢাকা মহানগর দক্ষিণ আওয়ামী লীগ</title>
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu-external.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>
<body>
<div class="container">
    <div class="row top-header">
        <div class="col-12 d-flex pad-0">
            <div class="col-8 pad-0">
                <div class="d-lg-flex">
                    <div class="heading">
                        <a href="#">ঢাকা মহানগর দক্ষিণ আওয়ামী লীগ</a>
                    </div>
                    <div class="thana">
                        <select class="chzn-select" title="থানা নির্বাচন করতে এখানে ক্লিক করুন">
                            <option value='-'>থানা নির্বাচন করুন</option><option value="http://www.narsingdi.gov.bd">নরসিংদী  </option><option value="http://www.gazipur.gov.bd">গাজীপুর </option><option value="http://www.shariatpur.gov.bd">শরীয়তপুর  </option><option value="http://www.narayanganj.gov.bd">নারায়ণগঞ্জ  </option><option value="http://www.tangail.gov.bd">টাঙ্গাইল </option><option value="http://www.kishoreganj.gov.bd">কিশোরগঞ্জ </option><option value="http://www.manikganj.gov.bd">মানিকগঞ্জ </option><option value="http://www.dhaka.gov.bd">ঢাকা </option><option value="http://www.munshiganj.gov.bd">মুন্সিগঞ্জ </option><option value="http://www.rajbari.gov.bd">রাজবাড়ী </option><option value="http://www.madaripur.gov.bd">মাদারীপুর </option><option value="http://www.gopalganj.gov.bd">গোপালগঞ্জ </option><option value="http://www.faridpur.gov.bd">ফরিদপুর </option>
                        </select>
                    </div>
                    <div class="union">
                        <select class="chzn-select" title="ওয়ার্ড/ইউনিয়ন নির্বাচন করতে এখানে ক্লিক করুন">
                            <option value='-'>ওয়ার্ড/ইউনিয়ন নির্বাচন করুন</option><option value="http://savar.dhaka.gov.bd">সাভার </option><option value="http://dhamrai.dhaka.gov.bd">ধামরাই </option><option value="http://keraniganj.dhaka.gov.bd">কেরাণীগঞ্জ </option><option value="http://nawabganj.dhaka.gov.bd">নবাবগঞ্জ </option><option value="http://dohar.dhaka.gov.bd">দোহার </option><option value="http://tejgaoncircle.dhaka.gov.bd">তেজগাঁও উন্নয়ন সার্কেল</option>
                        </select>
                    </div>
                    <div class="search">
                        <form action="">
                            <button type="submit" class="search-btn">অনুসন্ধান</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                class ShowBanglaDateTime{
                    public function bangla_date_time($str){
                        $eng = array('January','February','March','April','May','June','July','August','September','October','November','December',
                        'Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec',
                        'Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday',
                        'Sat','Sun','Mon','Tue','Wed','Thu','Fri',
                        '1','2','3','4','5','6','7','8','9','0');
                        $bng = array('জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর',
                        'জানু','ফেব্রু','মার্চ','এপ্রি','মে','জুন','জুলা','আগ','সেপ্টে','অক্টো','নভে','ডিসে',
                        'শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার',
                        'শনি','রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র',
                        '১','২','৩','৪','৫','৬','৭','৮','৯','০');
                    return str_ireplace($eng, $bng, $str);
                    }
                }
            ?>
            <div class="col-4">
                <div class="date">
                    <p><?php
                        date_default_timezone_set('Asia/Dhaka');
                        $BanglaDate=new ShowBanglaDateTime();
                        echo $BanglaDate->bangla_date_time(date('d M Y'));
                        ?></p>
                </div>
                <div class="mujib">
                    <img src="{{asset('/')}}frontend/images/Mujib-Borsho.png" alt="Mujib-Borsho">   
                </div>
            </div>
        </div>
    </div>
    <div class="row header">
        <div class="col-12 d-lg-flex pad-0">
            <div class="col-lg-7 col-12  pad-0">
                <div class="logo">
                    <img src="{{asset('/')}}frontend/images/logo.png" alt="logo">
                </div>
            </div>
            <div class="col-lg-5 col-12 pad-0">        
                <div class="information-row">
                    <div class="col-12 d-flex justify-content-end pad-0">
                        <div class="col-lg-3 col-4 pad-0">  
                            <div class="infographic-menu infographic-menu-first">
                                <a href="#" class="infogra-menu-item">
                                    <span class="infogra-num">২৪<sup>থানা</sup></span>
                                </a>
                            </div>
                        </div> 
                        <div class="col-lg-3 col-4 pad-0"> 
                            <div class="infographic-menu">
                                <a href="#" class="infogra-menu-item">
                                    <span class="infogra-num">৭৫<sup>ওয়ার্ড</sup></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-4 pad-0"> 
                            <div class="infographic-menu">
                                <a href="#" class="infogra-menu-item">
                                    <span class="infogra-num">৩<sup>ইউনিয়ন</sup></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation">
                    <div class="col-12 pad-0">
                        <form class="srs-form d-flex">
                            <input type="text" id="search" name="key" class="srs-field" placeholder="খুঁজুন ">
                            <input type="submit" value="অনুসন্ধান " class="srs-icon">
                        </form>
                    </div>
                    
                    <img src="{{asset('/')}}frontend/images/Mujib-Borsho.png" alt="Mujib-Borsho">
                </div>
            </div>
        </div>
    </div>
    <div class="menu-2">
        <div class="row">
            <div class="col-12 pad-0">
                <nav id="primary_nav_wrap">
                    <p class="navbar-brand">মেনু নির্বাচন করুন</a>
                    <ul>
                        <li class="nav-item active"><a class="nav-link color-black" href="main.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        
                        <li class="nav-item mega-menu-li"><a class="nav-link dropdown-toggle color-green" href="{{url('/dhaka-south-city')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ঢাকা মহানগর দক্ষিণ</a>
                            <ul class="color-green mega-menu">
                                <li><a class="dropdown-item color-green" href="{{url('/karjonirbahi-songsod')}}">কার্যনির্বাহী সংসদ</a></li>
                                <li><a class="dropdown-item color-green" href="{{url('/karjonirbahi-songsod-sodossho')}}">কার্যনির্বাহী সংসদ সদস্য</a></li>
                                <li><a class="dropdown-item color-green" href="{{url('/upodeshta-porishod-sodosso')}}">উপদেষ্টা পরিষদ সদস্য</a></li>
                                <li><a class="dropdown-item color-green dropdown-toggle">সভাপতি/সাধারণ সম্পাদক</a>
                                    <ul class="color-green mega-sub-menu" style="width: 100%;">
                                        <li><a class="dropdown-item color-green" href="{{url('/thana')}}">থানা</a></li>
                                        <li><a class="dropdown-item color-green" href="{{url('/word')}}">ওয়ার্ড</a></li>
                                        <li><a class="dropdown-item color-green" href="{{url('/union')}}">ইউনিয়ন</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link color-magenta" href="{{url('/thotto-batayan')}}">তথ্য বাতায়ন</a></li>
                        <li class="nav-item"><a class="nav-link color-cyan" href="{{url('/press-realise')}}">প্রেস রিলিজ</a></li>
                        <li class="nav-item"><a class="nav-link color-purple" href="{{url('/gallery')}}">গ্যালারি</a></li>
                        <li class="nav-item mega-menu-li"><a class="nav-link dropdown-toggle color-green" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ই-সেবাসমূহ</a>
                            <ul class="color-green mega-menu e-sheba">
                                <li class="dir"><a class="dropdown-item dropdown-toggle">মোবাইল অ্যাপ</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.landcalculation">উরররাধিকার ক্যালকুলেটোর (এন্ড্রয়েড)</a></li>
                                        <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.tappware.ned&amp;hl=en">বাংলাদেশ ডিরেক্টরি (এন্ড্রয়েড)</a></li>
                                        <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.tappware.bts&amp;hl=en">বাংলাদেশ পর্যটন</a></li>
                                        <li><a class="dropdown-item" href="http://www.nothi.gov.bd/users/sslLogin">নথি  (এন্ড্রয়েড ফোন)</a></li>
                                        <li><a class="dropdown-item" href="https://itunes.apple.com/us/app/nothi/id1187955540?mt=8">নথি (অ্যাপেল ফোন)</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">জাতীয় ই-সেবা</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://land.gov.bd/">জাতীয় ভূমি সেবা</a></li>
                                        <li><a class="dropdown-item" href="http://services.portal.gov.bd/">সেবাকুঞ্জ</a></li>
                                        <li><a class="dropdown-item" href="http://ecourt.gov.bd/">ই-মোবাইল কোর্ট</a></li>
                                        <li><a class="dropdown-item" href="http://www.forms.gov.bd/">সরকারি ফরম ডাউনলোড</a></li>
                                        <li><a class="dropdown-item" href="http://www.ais.gov.bd">কৃষি তথ্য সার্ভিস</a></li>
                                        <li><a class="dropdown-item" href="/site/page/807e8bba-2013-11e7-8f57-286ed488c766/ই-তথ্য কোষ">ই-তথ্য কোষ</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">জেলা ই-সেবা কেন্দ্র</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://ecourt.gov.bd/citizen_public_view/new">অপরাধের তথ্য দিন</a></li>
                                        <li><a class="dropdown-item" href="/site/page/12ae9564-2013-11e7-8f57-286ed488c766/নাগরিক আবেদন">নাগরিক আবেদন</a></li>
                                        <li><a class="dropdown-item" href="/site/page/efd920bd-2012-11e7-8f57-286ed488c766/নকলের আবেদন">নকলের আবেদন</a></li>
                                        <li><a class="dropdown-item" href="/site/page/12ae9788-2013-11e7-8f57-286ed488c766/সর্বশেষ অবস্থা জানুন">সর্বশেষ অবস্থা জানুন</a></li>
                                        <li><a class="dropdown-item" href="/site/officer_list/965e7155-2010-11e7-8f57-286ed488c766/পোর্টাল সম্পর্কিত যোগাযোগ">পোর্টাল সম্পর্কিত যোগাযোগ</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">ইউনিয়ন ডিজিটাল সেন্টার</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="/site/page/74cf80e4-2013-11e7-8f57-286ed488c766/এক নজরে ইউডিসি">এক নজরে ইউডিসি</a></li>
                                        <li><a class="dropdown-item" href="/site/page/74cf7ce5-2013-11e7-8f57-286ed488c766/ইউআইএসসি এর সেবাসমূহ">ইউআইএসসি এর সেবাসমূহ</a></li>
                                        <li><a class="dropdown-item" href="/site/page/6a126eab-2013-11e7-8f57-286ed488c766/উদ্যোক্তা ব্লগ">উদ্যোক্তা ব্লগ</a></li>
                                        <li><a class="dropdown-item" href="http://uams.e-service.gov.bd/modules/home/home.php">UAMS</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mega-menu-li"><a class="nav-link dropdown-toggle color-red" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">সরকারি অফিস</a>
                            <ul class="color-red mega-menu govt-office">
                                <li class="dir"><a class="dropdown-item dropdown-toggle">আইন-শৃঙ্খলা ও নিরাপত্তা বিষয়ক</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://police.dhaka.gov.bd/">পুলিশ সুপারের কার্যালয়,ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://fireservice.dhaka.gov.bd/">ফায়ার সাভিস ও সিভিল ডিফেন্স, ঢাকা।</a></li>
                                        <li><a class="dropdown-item" href="http://ansarvdp.dhaka.gov.bd/">জেলা আনসার ও ভিডিপি কার্যালয়, ঢাকা</a</li>
                                        <li><a class="dropdown-item" href="http://dncdhakametro.dhaka.gov.bd/">মাদকদ্রব্য নিয়ন্ত্রণ অধিদপ্তর,ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://rab.dhaka.gov.bd/">র&zwnj;্যাব</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">শিক্ষা ও সংস্কৃতি</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://deo.dhaka.gov.bd/">জেলা শিক্ষা অফিস</a></li>
                                        <li><a class="dropdown-item" href="http://dpe.dhaka.gov.bd/">জেলা প্রাথমিক শিক্ষা অফিস, ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://shilpakala.dhaka.gov.bd/">জেলা শিল্পকলা একাডেমী, ঢাকা</a</li>
                                        <li><a class="dropdown-item" href="http://sports.dhaka.gov.bd/">জেলা ক্রীড়া অফিস,ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://shishuacademy.dhaka.gov.bd/">বাংলাদেশ শিশু একাডেমী, ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://ttc.dhaka.gov.bd">সরকারি টিচার্স ট্রেনিং কলেজ</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">কৃষি ও খাদ্য বিষয়ক</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://cdb.dhaka.gov.bd/">তুলা উন্নয়ন বোর্ড, ঢাকা জোন</a></li>
                                        <li><a class="dropdown-item" href="http://badc.dhaka.gov.bd/">নির্বাহী প্রকৌশলীর (সওকা) কার্যালয়, বিএডিসি</a></li>
                                        <li><a class="dropdown-item" href="http://smbadc.dhaka.gov.bd/">উপ পরিচালক (বীজ বিপণন), বিএডিসি</a></li>
                                        <li><a class="dropdown-item" href="http://food.dhaka.gov.bd/">জেলা খাদ্য নিয়ন্ত্রকের কার্যালয়</a></li>
                                        <li><a class="dropdown-item" href="http://doj.dhaka.gov.bd/">পাট অধিদপ্তর, ঢাকা</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">স্বাস্থ্য বিষয়ক</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://fpo.dhaka.gov.bd/">পরিবার পরিকল্পনা কার্যালয়, আজিমপুর, ঢাকা।</a></li>
                                        <li><a class="dropdown-item" href="http://cs.dhaka.gov.bd/">সিভিল সার্জনের কার্যালয়</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">প্রকৌশল ও যোগাযোগ</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://lged.dhaka.gov.bd/">এল জি ই ডি</a></li>
                                        <li><a class="dropdown-item" href="http://pwd.dhaka.gov.bd/">গণপূর্ত ই/এম বিভাগ-১, ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://pbs3.dhaka.gov.bd/">ঢাকা পল্লী বিদ্যুৎ সমিতি -৩</a></li>
                                        <li><a class="dropdown-item" href="http://irbadc.dhaka.gov.bd/">নির্বাহী প্রকৌশলীর অফিস ,বিএডিসি সেচ</a></li>
                                        <li><a class="dropdown-item" href="http://dphe.dhaka.gov.bd/">জনস্বাস্থ্য প্রকৌশল অধিদপ্তর</a></li>
                                        <li><a class="dropdown-item" href="http://bwdb.dhaka.gov.bd/">পানি উন্নয়ন বোর্ড</a></li>
                                        <li><a class="dropdown-item" href="http://post.dhaka.gov.bd/">ডাক বিভাগ</a></li>
                                        <li><a class="dropdown-item" href="http://doict.dhaka.gov.bd/">তথ্য ও যোগাযোগ প্রযুক্তি(আইসিটি) অধিদপ্তর</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">মানব সম্পদ উন্নয়ন বিষয়ক</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://dwa.dhaka.gov.bd/">মহিলা বিষয়ক কর্মকর্তার কার্যালয়, ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://forest.dhaka.gov.bd/">ঢাকা সামাজিক বন বিভাগ</a></li>
                                        <li><a class="dropdown-item" href="http://dss.dhaka.gov.bd/">জেলা সমাজসেবা কার্যালয়, ঢাকা।</a></li>
                                        <li><a class="dropdown-item" href="http://brdb.dhaka.gov.bd/">বিআরডিবি</a></li>
                                        <li><a class="dropdown-item" href="http://bmet.dhaka.gov.bd/">কর্মসংস্থান ও জনশক্তি</a></li>
                                    </ul>
                                </li>
                                <li class="dir"><a class="dropdown-item dropdown-toggle">অন্যান্য অফিসসমূহ</a>
                                    <ul class="mega-sub-menu">
                                        <li><a class="dropdown-item" href="http://passport.dhaka.gov.bd/">পাসপোর্ট অফিস</a></li>
                                        <li><a class="dropdown-item" href="http://dr.dhaka.gov.bd/">জেলা রেজিস্ট্রারের কার্যালয়</a></li>
                                        <li><a class="dropdown-item" href="http://dao.dhaka.gov.bd/">জেলা হিসাব রক্ষণ অফিস</a></li>
                                        <li><a class="dropdown-item" href="http://tax.dhaka.gov.bd/">জেলা কর অফিস, ঢাকা</a></li>
                                        <li><a class="dropdown-item" href="http://customs.dhaka.gov.bd/">শুল্ক ও আবগারী</a></li>
                                        <li><a class="dropdown-item" href="http://ocie.dhaka.gov.bd/">আমদানি ও রপ্তানি দপ্তর</a></li>
                                        <li><a class="dropdown-item" href="http://info.dhaka.gov.bd/">জেলা তথ্য অফিস</a></li>
                                        <li><a class="dropdown-item" href="http://dforest.dhaka.gov.bd/">বন বিভাগ</a</li>
                                        <li><a class="dropdown-item" href="http://www.railway.gov.bd/">রেলওয়ে</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>