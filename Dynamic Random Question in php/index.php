<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Dynamic Question</title>
</head>
<body>
<!--     
Question 01:

		Let’s make an exam question set (add at list 10 dummy question) like that

	$questionSet = [

    [

        'question' => 'What is loream ipsum?',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ],



    [

        'question' => 'What is loream ipsum?',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ],



    [

        'question' => 'What is loream ipsum?',

        'options' => [

            'ans1', 'ans2', 'ans3', 'ans4'

        ]

    ]

];

Make a simple exam design using html css

Then make a exam by using these questions

Your questions must be come randomize order -->

    <?php
        $questionSet = [
        [

            'question' => 'সঞ্চয়িতা- কোন কবির কাব্য সংকলন ?',

            'options' => [

                'সত্যেন্দ্রনাথ দত্ত', ' রবীন্দ্রনাথ ঠাকুর', 'জসীম উদদীন', 'কাজী নজরুল ইসলাম'

            ]

        ],
        [

            'question' => '‘কবর’ নাটক কার রচনা ?',

            'options' => [

                'জহির রায়হান', 'মুনীর চৌধুরী', 'শহীদুল্লাহ কায়সার', 'রবিন্দ্রনাথ ঠাকুর'

            ]

        ],
        [

            'question' => 'বাংলাদেশের বৃহত্তর জেলা কতটি?',

            'options' => [

                '১৭টি', '২০টি', '১৬টি', '১৯টি'

            ]

        ],

        [

            'question' => 'কোন জেলা ভারতের সীমান্তের সাথে নয়?',

            'options' => [

                'ঠাকুরগাঁও', 'রংপুর', 'নওয়াবগঞ্জ', 'বাগেরহাট'

            ]

        ],
        [

            'question' => 'বাংলাদেশের কোন জেলা দুই দেশের সীমানা দ্বারা বেষ্টিত ?',

            'options' => [

                'খাগড়াছড়ি', 'বান্দরবান', 'কুমিল্লা', 'রাঙ্গামাটি'

            ]

        ],
        [

            'question' => 'কুতুবদিয়া বাতিঘর নির্মাণ করা হয় কখন?',

            'options' => [

                '১৮৫৫ সালে', '১৮৪০ সালে', '১৮৪৬ সালে', '১৮৪৮ সালে'

            ]

        ],
        [

            'question' => 'কর্ণফুলী নদীর তলদেশে দেশের একমাত্র টানেল নির্মাণ করবে কোন দেশ?',

            'options' => [

                'চীন', 'রাশিয়া', 'ভারত', 'জাপান'

            ]

        ],
        [

            'question' => 'বাংলাদেশের কুয়েত সিটি বলা হয় কোন অঞ্চল কে?',

            'options' => [

                'বরিশাল', 'চট্টগ্রাম', 'খুলনা', 'সিলেট'

            ]

        ]


    ];
    ?>

    <!-- ======================================================= -->

<div>
              

    <?php 

        shuffle ($questionSet);  //এখাণে প্রথমেই সাফল এর মাধ্যমে প্রত্যেকটি এরেকে ঘুরিয়ে এর ভিতরের এরেকে রেন্ডমলি দেখাতে  এটি ব্যবহার করা হয়েছে ।

        foreach($questionSet as $index => $qun){

        
        echo ++$index ." . ".  $qun['question'];      //এখানে একটি করে প্রশ্ন দেখানোর জন্য এরের মধ্যে থেকে  question নামের এরেকে বের করে নেয়া হয়েছে , কারণ  questionSet এই এরের মধ্যে যেহেতু ২ টা এরে আছে তার জন্য এর থেকে ১ টি এরে নিয়ে তার সাথে ডিফল্ট ইনডেক্স নাম্বার যুক্ত করে ++ করা হয়েছে যাতে করে প্রশ্নের প্রথমে প্রশ্নের নাম্বার দেখা যায় । 

        foreach($qun ['options'] as $key1 => $mcq){         //এখানে একাধিক এরের মধ্যে থেকে একটি ডেটা দেখানোর জন্য এই foreach এর ব্যবহার করা হয়েছে ।
    

    ?>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault -<?php echo $index; ?>" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            <?php echo $mcq ?>       <!-- এখানে প্রত্যেকটি mcq array প্রিন্ট করতে এটি ব্যবহার করা হয়েছে ।    -->
            </label>
        </div>
        

        <?php }  echo "<br>" ?> 
   
        
    <?php } ?>
   
 </div>

   



            

             <!-- =========================== Thank You ============================ -->


</body>
</html>