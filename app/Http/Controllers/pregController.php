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
                'num' => '3 weeks: Implantation',
                'description' => 'Now nestled in the nutrient-rich lining of your uterus is a microscopic ball of hundreds of rapidly multiplying cells that will develop into your baby. This ball of cells, called a blastocyst, has begun to produce the pregnancy hormone hCG, which tells your ovaries to stop releasing eggs.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-3-blastocycst_4x3.jpg?width=702'
            ],
            [
                'num' => '4 weeks',
                'description' => 'Your ball of cells is now officially an embryo. You are now about 4 weeks from the beginning of your last period. It is around this time – when your next period would normally be due – that you might be able to get a positive result on a home pregnancy test.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-4-yolk-sac_4x3.jpg?width=702'
            ],
            [
                'num' => '5 weeks',
                'description' => 'Your baby resembles a tadpole more than a human, but is growing fast. The circulatory system is beginning to form, and cells in the tiny "heart" will start to flicker this week.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-5-amniotic-sac_4x3.jpg?width=702'
            ],
            [
                'num' => '6 weeks',
                'description' => 'Your baby is nose, mouth and ears are starting to take shape, and their intestines and brain are beginning to develop. Your baby is the size of a lentil.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-6-webbed-hands_4x3.jpg?width=702'
            ],
            [
                'num' => '7 weeks',
                'description' => 'Your baby has doubled in size since last week, but still has a tail, which will soon disappear. Little hands and feet that look more like paddles are emerging from the developing arms and legs.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-7-tailbone_4x3.jpg?width=702'
            ],
            [
                'num' => '8 weeks',
                'description' => 'Your baby has started moving around, though you will not feel your baby move yet. Nerve cells are branching out, forming primitive neural pathways. Breathing tubes now extend from their throat to their developing lungs. Your baby is the size of a kidney bean.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-8-brain-nerve-cells_4x3.jpg?width=702'
            ],
            [
                'num' => '9 weeks',
                'description' => 'Your baby is basic anatomy is developing (they even have tiny earlobes now), but there is much more to come. Their embryonic tail has disappeared and they weigh just a fraction of an ounce but are about to start gaining weight fast. Your baby is the size of a grape.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-9-finger-touch-pads.jpg?width=702'
            ],
            [
                'num' => '10 weeks',
                'description' => 'Your embryo has completed the most critical portion of development. Their skin is still translucent, but their tiny limbs can bend and fine details like nails are starting to form.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-10-fingernails_4x3.jpg?width=702'
            ],
            [
                'num' => '11 weeks',
                'description' => 'Your baby is almost fully formed. They are kicking, stretching, and even hiccupping as their diaphragm develops, although you can not feel any activity yet. Your baby is the size of a fig.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-11-tooth-buds_4x3.jpg?width=702'
            ],
            [
                'num' => '12 weeks',
                'description' => 'This week your baby is reflexes kick in: Their fingers will soon begin to open and close, toes will curl, and their mouth will make sucking movements.Your baby is the size of a lime.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-12-eyelids_4x3.jpg?width=702'
            ],
            [
                'num' => '13 weeks',
                'description' => 'This is the last week of your first trimester. Your baby is tiny fingers now have fingerprints, and their veins and organs are clearly visible through their skin. If you are having a girl, her ovaries contain more than 2 million eggs.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-13-fingerprints_4x3.jpg?width=702'
            ],
            [
                'num' => '14 weeks',
                'description' => 'Your baby is brain impulses have begun to fire and they are using their facial muscles. Their kidneys are working now, too. If you have an ultrasound, you may even see them sucking their thumb.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-14-face-muscles_4x3.jpg?width=702'
            ],
            [
                'num' => '15 weeks',
                'description' => 'Your baby is eyelids are still fused shut, but they can sense light. If you shine a flashlight on your tummy, they all move away from the beam. Ultrasounds done this week may reveal your baby is sex.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-15-lung-development_4x3.jpg?width=702'
            ],
            [
                'num' => '16 weeks',
                'description' => 'The patterning on your baby is scalp has begun, though their hair is not visible yet. Their legs are more developed, their head is more upright, and their ears are close to their final position. Your baby is the size of an avocado.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-16-heart-development_4x3.jpg?width=702'
            ],
            [
                'num' => '17 weeks',
                'description' => 'Your baby can move their joints, and their skeleton – formerly soft cartilage – is now hardening to bone. The umbilical cord is growing stronger and thicker. Your baby is the size of a turnip.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-17-skeleton_4x3.jpg?width=702'
            ],
            [
                'num' => '18 weeks',
                'description' => 'Your baby is flexing their arms and legs, and you may be able to feel those movements. Internally, a protective coating of myelin is forming around their nerves. Your baby is the size of a bell pepper.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-18-ears_4x3.jpg?width=702'
            ],
            [
                'num' => '19 weeks',
                'description' => 'Your baby is senses – smell, vision, touch, taste and hearing – are developing and they may be able to hear your voice. Talk, sing or read out loud to them, if you feel like it.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-19-hair_4x3.jpg?width=702'
            ],
            [
                'num' => '20 weeks',
                'description' => 'Your baby can swallow now and their digestive system is producing meconium, the dark, sticky goo that they all pass in their first poop – either in their diaper or in the womb during delivery.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-20-fetal-movement_4x3.jpg?width=702'
            ],
            [
                'num' => '21 weeks',
                'description' => 'Your baby is movements have gone from flutters to full-on kicks and jabs against the walls of your womb. You may start to notice patterns as you become more familiar with their activity. Your baby is the size of a carrot.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-21-eyelid_4x3.jpg?width=702'
            ],
            [
                'num' => '22 weeks',
                'description' => 'Your baby now looks almost like a miniature newborn. Features such as lips and eyebrows are more distinct, but the pigment that will color their eyes is not present yet. Your baby is the size of a spaghetti squash.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-22-eyes_4x3.jpg?width=702'
            ],
            [
                'num' => '23 weeks',
                'description' => 'Your baby is ears are getting better at picking up sounds. After birth, they may recognize some noises outside the womb that they are hearing inside now. Your baby is the size of a large mango.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-23-hearing_4x3.jpg?width=702'
            ],
            [
                'num' => '24 weeks',
                'description' => 'Your baby cuts a pretty long and lean figure, but chubbier times are coming. Their skin is still thin and translucent, but that will begin to change soon too. Your baby is the size of an ear of corn.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-24-lung-development_4x3.jpg?width=702'
            ],
            [
                'num' => '25 weeks',
                'description' => 'Your baby is wrinkled skin is starting to fill out with baby fat, making them look more like a newborn. Their hair is beginning to come in, and it has color and texture. Your baby is now the same weight as an average rutabaga.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-25-baby-fat_4x3.jpg?width=702'
            ],
            [
                'num' => '26 weeks',
                'description' => 'Your baby is now inhaling and exhaling amniotic fluid, which helps develop their lungs. These breathing movements are good practice for that first breath of air at birth. Your baby is the size of a bunch of scallions.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-26-ear-nerves_4x3.jpg?width=702'
            ],
            [
                'num' => '27 weeks',
                'description' => 'This is the last week of your second trimester. Your baby now sleeps and wakes on a regular schedule, and their brain is very active. Their lungs are not fully formed, but they could function outside the womb with medical help.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-27-sleep.jpg?width=702'
            ],
            [
                'num' => '28 weeks',
                'description' => 'Your baby is eyesight is developing, which may enable them to sense light filtering in from the outside. They can blink, and their eyelashes have grown in. Your baby is the size of a large eggplant.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-28-eyelashes_4x3.jpg?width=702'
            ],
            [
                'num' => '29 weeks',
                'description' => 'Your baby is muscles and lungs are busy getting ready to function in the outside world, and their head is growing to make room for their developing brain. Your baby is the size of a butternut squash.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-29-brain-development_4x3.jpg?width=702'
            ],
            [
                'num' => '30 weeks',
                'description' => 'Your baby is surrounded by a pint and a half of amniotic fluid, although there will be less of it as they grow and claim more space inside your uterus. Your baby is the size of a large cabbage.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-30-amniotic-fluid_4x3.jpg?width=702'
            ],
            [
                'num' => '31 weeks',
                'description' => 'Your baby can now turn their head from side to side. A protective layer of fat is accumulating under their skin, filling out their arms and legs. Your baby is the size of a coconut.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-31-taste-buds_4x3.jpg?width=702'
            ],
            [
                'num' => '32 weeks',
                'description' => 'You are probably gaining about a pound a week now. Half of that goes straight to your baby, who will gain one-third to half their birth weight in the next seven weeks in preparation for life outside the womb. Your baby is the size of a large jicama.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-32-fingernails_4x3.jpg?width=702'
            ],
            [
                'num' => '33 weeks',
                'description' => 'The bones in your baby is skull are not fused yet. That allows them to shift as their head squeezes through the birth canal. They will not fully fuse until adulthood. Your baby is the size of a pineapple.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-33-skull_4x3.jpg?width=702'
            ],
            [
                'num' => '34 weeks',
                'description' => 'Your baby is central nervous system is maturing, as are their lungs. Babies born between 34 and 37 weeks who have no other health problems usually do well in the long run.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-34-lung-development_4x3.jpg?width=702'
            ],

            [
                'num' => '35 weeks',
                'description' => 'It is getting snug inside your womb – but you should still feel your baby moving as much as ever. Your baby is kidneys are fully developed, and their liver can process some waste products.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-35-fetal-weight_4x3.jpg?width=702'
            ],
            [
                'num' => '36 weeks',
                'description' => 'Your baby is gaining about an ounce a day. They are also losing most of their lanugo hair that covered their body, along with the vernix caseosa, a waxy substance that was protecting their skin until now.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-36-vernix-caseosa_4x3.jpg?width=702'
            ],
            [
                'num' => '37 weeks',
                'description' => 'Your due date is very close, and though your baby looks like a newborn, they are not considered full-term until 39 weeks. Over the next two weeks, their lungs and brain will continue to mature.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-37-hair-growth_4x3.jpg?width=702'
            ],
            [
                'num' => '38 weeks',
                'description' => 'Are you curious about your baby is eye color? Their irises are not fully pigmented at birth, so their eyes could change color up until they are about a year old. Your baby is the size of a leek.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-38-eye-color_4x3.jpg?width=702'
            ],

            [
                'num' => '39 weeks',
                'description' => 'Your baby is physical development is complete, but they are still busy putting on fat and growing bigger. Your baby is the size of a mini watermelon.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-39-mature-lungs_4x3.jpg?width=702'
            ],
            [
                'num' => '40 weeks',
                'description' => 'If you are past your due date, you may not be as late as you think, especially if you calculated it solely based on the day of your last period. Sometimes women ovulate later than expected. Your provider will continuously assess your pregnancy to make sure you can safely continue your pregnancy.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-40-soft-spots.jpg?width=702'
            ],
            [
                'num' => '41 weeks',
                'description' => 'Your baby is now considered late-term. Going more than two weeks past your due date can put you and your baby at risk for complications, so your provider will probably talk to you about inducing labor. They may perform a non-stress test (NST) to monitor your babyis fetal heart rate and your contractions to make sure your baby is not in any distress.',
                'img' => 'https://assets.babycenter.com/ims/2015/01/pregnancy-week-41-amniotic-fluid_4x3.jpg?width=702'
            ],
        ];
        return view('pregnancy-components.weeks', [
            'weeksInfo' => $weeksInfo
        ]);
    }
}
