<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pregController extends Controller
{
    //
    public function weeks()
    {
        $weeksInfo = [
            [
                'num' => '3 حەفتیا',
                'description' => ' زارۆکێ تە نوکە وەک تەپەکا بچەووکە بلەز خانێت وی دابەشدبن ل داهاتی دێ بیتە زارۆک،  ئەڤ تەپە  ناڤێ وی (بلاستۆسست)  و دەستپێدکت ب دروستکرنا هۆرمۆنێ (hcg) ناهێلیت تۆخمێن نی بهین' ,
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-3-blastocycst_4x3.jpg?width=702'
            ],
            [
                'num' => '4 حەفتیا',
                'description' => 'نوکە تۆپا ژ گەلەک خانەیان پێکهاتی بوویە کۆرپەلە. تۆ نوکە نێزیکی 4 حەفتیا  تۆ دووگیانی. دڤی وەختیدا - چێدبت بشێی ئەنجامێ ئەرێنی د تاقیکردنا دووگیانیا مالێ بینی .',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-4-yolk-sac_4x3.jpg?width=702'
            ],
            [
                'num' => '5 حەفتیا',
                'description' => 'زارۆکێ تە دڤان حەفتیاندا شێوێ مرۆڤا نادت، بەس ب لەز گەشێ دکەت. سیستەمێ خۆینێ  دەست ب پەرەسەندێ دکەت و خانێت "دلی"  ڤێ حەفتیێ دەست ب لەرزینێ دکەت.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-5-amniotic-sac_4x3.jpg?width=702'
            ],
            [
                'num' => '6 حەفتیا',
                'description' => 'دفن و دەڤ و گۆهێن زارۆکی دەست ب درووستکرنا خۆ دکەن و ریڤیک و مێشک دەست ب گەشەکرنێ دکەن. زاروکێ تە ب قەبارەیێ نیسکەکێ یە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-6-webbed-hands_4x3.jpg?width=702'
            ],
            [
                'num' => '7 حەفتیا', 
                 'description' => 'زارۆک ب بەراورد دگەل حەفتیا چوی  قەبارەیێ وی دوو هێندە زێدەبوویە ، دەست و پێی وی شنی ژ مل و پێت وی دەردکەڤن ۆ گەشێ دکن .',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-7-tailbone_4x3.jpg?width=702'
            ],
            [
                'num' => '8 حەفتیا',
                'description' => 'زارۆک دەست ب لڤینێ دکەت، هەرچەندە هێشتا هەست بە لڤینا وی ناکەی. خانەیێت دەماری دەست بە  پێکهێنان لقان دکەن،  دەمارێن سەرەتایی دروست دکەن. لولەیێن هەناسەدانێ نوکە لە حەفکێ بۆ سیهان درێژدبن.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-8-brain-nerve-cells_4x3.jpg?width=702'
            ],
            [
                'num' => '9 حەفتیا', 
                'description' => 'پێکهاتەیێن سەرەتایی زارۆکی گەشە دکەن (هەتا گوهێن بچووک هەیە)، بەس زۆر تشت  ماینە. لڤان نێزیکان دێ کێشا وی زێدەبیت، .',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-9-finger-touch-pads.jpg?width=702'
            ],
            [
                'num' => '10 حەفتیا',
                'description' => 'زارۆکی گرنگترین بەشێ گەشێ یێ تەمامکری. پێستێ وی هێشتا ڕووناهی ژێ دەربازدبیت  و نینۆک دەست ب پێکهاتنێ دکەن.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-10-fingernails_4x3.jpg?width=702'
            ],
            [
                'num' => '11 حەفتیا',
                'description' => 'زارۆکی تە ب نێزیکی تەمام پێکهاتییە. ئەو دەست ب لێدانێ دکەن. هەرچەندە هێشتا نەشێی هەست ب هیچ چالاکییەکێ  بکەی. زارۆکێ تە ب قەبارەیا هژیرەکێ یە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-11-tooth-buds_4x3.jpg?width=702'
            ],
            [
                'num' => '12 حەفتیا',
                'description' => 'ل ڤێ حەفتیێ ڕەفتارێن سروشتی  دەست پێدکەن: تبلێن وان ل نێزیک دەست ب ڤەکرن و گرتنێ دکەن، و دەڤێ وان لینا مژینێ دروست دکەن  .',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-12-eyelids_4x3.jpg?width=702'
            ],
            [
                'num' => '13 حەفتیا',
                'description' => 'ئەڤە دوماهیک حەفتیا سێ هەیڤێن دەستپێکێ یە. پەنجە بچووکەکانی منداڵەکەت ئێستا پەنجە نوسانیان هەیە. ئەگەر کچ بیت، هێلکەدانا وێ زێدەتر  ژ 2 ملیۆن هێلکان بخۆڤە دگریت.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-13-fingerprints_4x3.jpg?width=702'
            ],
            [
                'num' => '14 حەفتیا',
                 'description' => ' گولچیسک نۆکە کار دکەن  تبلێن خۆ دمێژن.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-14-face-muscles_4x3.jpg?width=702'
            ],
            [
                'num' => '15 حەفتیا',    
                'description' => 'چاڤێن زارۆکی دگرتیینە بەلێ دشێت هەست ب روناهیێ بکەت، دەستپێکا  ڤێ حەفتیێ چێدبیت ڕەگەزێ زارۆکی ئاشکرا ببیت.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-15-lung-development_4x3.jpg?width=702'
            ],
            [
                'num' => '16 حەفتیا',
                'description' => 'شێوازی سەرێ  زارۆکی یا دەست پێکری،  هێشتا پرچا وان دیار نینە. پیێن وان زێدەتر گەشە کرییە، و گۆهێن وان ژی نزیکە بدوماهی بهێن. زارۆک ب قەبارەیێ ئەڤۆکادۆیەکێ یە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-16-heart-development_4x3.jpg?width=702'
            ],
            [
                'num' => '17 حەفتیا',
                'description' => 'زارۆک دشێت بربرێن خۆ بلڤینیت ، و ئێسکە پەیکەرێن وی - بەری نوکە نەرم بوو - نوکە بۆ  ڕەق بوویە. .',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-17-skeleton_4x3.jpg?width=702'
            ],
            [
                'num' => '18 حەفتیا',
                'description' => 'زارۆک مل ۆ پێت خۆ دلڤینیت و چێدبت بشێی هەست ب لڤینان  بکەی. پەڕەیەکا پارێزەر مایەلین دەوری دەماران دروست دکەت. زارۆک ب قەبارەیێ فلفلەکێ یە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-18-ears_4x3.jpg?width=702'
            ],
            [
                'num' => '19 حەفتیا',
                'description' => 'هەستێت زارۆکی - بهێن، دیتن،  دەست لێدان، تام و گۆهلێبوون - گەشە دکەن. دشین گوهل تە ببن ئەگەر حەزا تە لێ هەبت.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-19-hair_4x3.jpg?width=702'
            ],
            [
                'num' => '20 حەفتیا',
                'description' => ' سیستەمێ هەرسێ میکۆنیۆم بەرهەم دهێت .  ماددەیەکێ تاریە-.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-20-fetal-movement_4x3.jpg?width=702'
            ],
            [
                'num' => '21 حەفتیا', 
                'description' => 'لڤینێت زارۆکی لێدان و پەنجە لێدان ل دیواری مالبچویکی.  دەست ب تێبینی کرنێ کەی دگەل چالاکیێن زاروکی .',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-21-eyelid_4x3.jpg?width=702'
            ],
            [
                'num' => '22 حەفتیا',
                 'description' => 'زارۆک  نوکە زۆر ل زاروکەکێ شنوی ژدایکبوو دچیت. سیفەتێن وەک لێڤ و بری زێدەتر جیاوازن، بەس ڕەنگێ چاڤان هێشتا دیار نینە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-22-eyes_4x3.jpg?width=702'
            ],
            [
                'num' => '23 حەفتیا',
                 'description' => 'گوهێت زاروکی باشتر دبن بو گۆهلیبونا دەنگی.  تبلان دمێژن.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-23-hearing_4x3.jpg?width=702'
            ],
            [
                'num' => '24 حەفتیا',
                'description' => 'زارۆک شێوەیەکێ درێژ و تەنکە. پیستێ وی هێشتا تەنکە و رووناهی تێرا دەرباز دبت بەس  لنێزیک دێ هێتە گهورین.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-24-lung-development_4x3.jpg?width=702'
            ],
            [
                'num' => '25 حەفتیا',
                'description' => 'پێستێ وی چین چین  دەست ب پڕبوونێ دکەت تژی چەوری دبیت، وەلێ دهێت زێدەتر ل زارۆکەکێ شنوی ژ دایکبوو بچیت. پرچ دەست ب گەشەکرنێ دکەت و ڕەنگ و شێواز هەیە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-25-baby-fat_4x3.jpg?width=702'
            ],
            [
                'num' => '26 حەفتیا',
                'description' => 'زارۆک نوکە هەناسێ ددەت، ئەڤ لڤینە هەناسەدانە باشن بۆ  هەناسەدانێ لە دەمێ ژ دایکبوونێ.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-26-ear-nerves_4x3.jpg?width=702'
            ],
            [
                'num' => '27 حەفتیا',
                'description' => 'ئەڤە دوماهیک حەفتیا سێ هەیڤێت دووێ. زارۆک نوکە ب شێوازەکێ ڕێک دنڤیت و رادبیت. و مێشکێ زاروکی گەلەک چالاکە. سیهێت وی تەمام نینن.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-27-sleep.jpg?width=702'
            ],
            [
                'num' => '28 حەفتیا',
                'description' => ' زاروک گەشێ دکەت  ڕەنگە بشێت روناهی ژ دەرڤە هەست پێ بکەت .و زاروکێ تە ب قەبارەیێ باجانەکا مەزنە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-28-eyelashes_4x3.jpg?width=702'
            ],
            [
                'num' => '29 حەفتیا',
                'description' => 'ماسولکە و سیهێت زاروکێ تە سەرقاڵن ب ئامادەبوون و کارکرنێ کو ژ دەرڤەی مالبچویکی و سەرێ وان مەزن دبیت بۆ ڕێگەپێدانێ ب گەشەکرنا مێشکی.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-29-brain-development_4x3.jpg?width=702'
            ],
            [
                'num' => '30 حەفتیا',
                'description' => 'زاروک ب نێزیکی نیڤ لتر ئاڤا منداڵدانێ دەوردراوە، هەرچەندە کێمتر دبیت دەمێ مەزن دبن.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-30-amniotic-fluid_4x3.jpg?width=702'
            ],
            [
                'num' => '31 حەفتیا',
                'description' => 'زاروک نوکە دشێت سەرێ خو ژ لایەکێ بۆ لایەکێ دی بلڤینیت. چینەکا پارێزەرا چەوری ل ژێر پیستێ وان کومدبن، مل و پێت وی پڕ دکەت. منداڵەکەت .',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-31-taste-buds_4x3.jpg?width=702'
            ],
            [
                'num' => '32 حەفتیا',
                'description' => 'نوکە ب نێزیکی ١ پاوەند د حەفتیەکێ دا کێشا دایکێ زێدەدبت. نیڤی دچت ڕاستەوخۆ بو زاروکی.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-32-fingernails_4x3.jpg?width=702'
            ],
            [
                'num' => '33 حەفتیا',
                'description' => 'ئێسکێت کەلەسەرێ زاروکی هێشتا ئێک نەگرتییە. ئەڤە ڕێکێ ددەتێ دەمێ ژ دایک دبن ل رێرەوێ مالبچویکی دا دشێت سەرێ خو بلڤینن . زاروک ب قەبارەیێ ئەنەناسەکێ یە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-33-skull_4x3.jpg?width=702'
            ],
            [
                'num' => '34 حەفتیا',
                'description' => 'سیستەمێ دەماری  یێ ناڤەندیێ زاروکی گەشە دکەت هەروەسا سیهێت وی. زاروکێت د ناڤبەرا 34 و 37 حەفتی ژدایکدبن چ کێشەیێن تەندروستی نینە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-34-lung-development_4x3.jpg?width=702'
            ],

            [
                'num' => '35 حەفتیا',
                 'description' => ' گولچیسکێت زاروکی تەمام گەشە کریە و مێلاک دشێط هندەک ژ پاشماوان راکەت.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-35-fetal-weight_4x3.jpg?width=702'
            ],
            [
                'num' => '36 حەفتیا',
                 'description' => 'زاروک روژانە کێشا خۆ زێدە دکەت. هەروەسا زۆربەیا پرچا لانۆگۆی ژدەست ددەت کو جەستەیێ زاروکی هاتبوو داپۆشین، دگەل ڤێرنیکس کاسێسا، ماددەیەکێ مۆمی کو پیستێ وی پاراستییە تا نوکە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-36-vernix-caseosa_4x3.jpg?width=702'
            ],
            [
                'num' => '37 حەفتیا',
                'description' => 'دەمێ چاڤەرێکری  زۆر نێزیکە و هەرچەندە زاروک ل زاروکەکێ شنوی ژ دایک بووی دچیت ، بەس هەتا 39 حەفتیا پێناسە نابیت. ل دوو حەفتیێت داهاتیدا، سیهێت وان و مێشک بەردەوام دبن ژ گەشەکرنێ.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-37-hair-growth_4x3.jpg?width=702'
            ],
            [
                'num' => '38 حەفتیا',
                'description' => 'حەز دکەی بزانی ڕەنگیێ چاڤێت زاروکی چییە؟ ڕەنگێ چاڤی ل دەمێ ژ دایکبوونێ دا تەمام نینە،   هەتا نێزیکی ١ ساڵی دهێت گهورین. زاروک ب قەبارەیێ پیڤازەکا مەزنە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-38-eye-color_4x3.jpg?width=702'
            ],

            [
                'num' => '39 حەفتیا',
                'description' => 'گەشەیا جەستەیێ زاروکی یا تەمام بووی، بەس هێشتا   چەوری زێدەدبیت. زاروک ب قەبارەیێ سێڤەکێ یە .',

                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-39-mature-lungs_4x3.jpg?width=702'
            ],
            [
                'num' => '40 حەفتیا',
                'description' => 'ئەگەر ل دەمێ چاڤەرێکری تۆ دووگیانی. هندەک جاران ئافرەت ل دەمێ چاڤەرێکری پتر دمینن. پزیشک بەردەوام  دووگیانیا تە پشکنین دکەت بۆ پشتراستبوون ژ هندێ کو بشێ ب سلامەتی دووگیانیا خۆ ببورینی.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-40-soft-spots.jpg?width=702'
            ],
            [
                'num' => '41 حەفتیا',
                'description' => ' چوونا سەر دوو حەفتاندا ل دەمێ چاڤەرێ دشێت تە و زاروکی بێختە مەترسیێ  ژبەر هندێ پزیشک ڕەنگە دگەل تە بەحسێ دەستپێکردنا زاروکبونێ بکەت  ،بۆ چاڤدێریا  لێدانا دڵێ کۆرپەلەی و پەستانا تە بۆ پشتراستبوون ژ هندێ کو زاروک دبن هیچ فشارەکێ دا  نینە.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-41-amniotic-fluid_4x3.jpg?width=702'
            ],
        ];
        return view('pregnancy-components.weeks', [
            'weeksInfo' => $weeksInfo
        ]);
    }
 }


