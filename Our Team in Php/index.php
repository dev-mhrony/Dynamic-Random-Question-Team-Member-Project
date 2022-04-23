
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
   <link rel="stylesheet" href="style.css">
   <title>Creative Our Team Section Using HTML & CSS | CSS Neumorphism</title>

   <!-- Created by S-Tech04 -->

</head>
<body>


<!-- Question 02:

Let’s make a website which only contains our teams section.

Now create an array of our teams at least three elements and make the our team section dynamic using php.

Make an array of our teams including image

Make a section of our team by using html css

And dynamic the section by php -->





    <!-- Multiple Array Start  -->



<?php


    $teams = [
        [
            'name' => "MH RONY",
            'surname' => "Web Devloper",
            'fb_link' => "https://www.facebook.com/mh.rony.dhanvi",
            'ins_link' => "#",
            'twe_link' => "#",
            'img' => "./img/3.jpg",


        ],

        [
            'name' => "Dhanvi",
            'surname' => "Graphic Designer",
            'fb_link' => "https://www.facebook.com/mh.rony.dhanvi",
            'ins_link' => "#",
            'twe_link' => "#",
            'img' => "./img/2.jpg",


        ],

        [
            'name' => "Sruti",
            'surname' => "UI/UX Designer",
            'fb_link' => "https://www.facebook.com/mh.rony.dhanvi",
            'ins_link' => "#",
            'twe_link' => "#",
            'img' => "./img/1.jpg",


        ]

    ]




    ?>

     <!-- Multiple Array Stop  -->



        <!-- foreach Looping Start  -->

        <?php


            shuffle ($teams );

            foreach ($teams as $key=> $sname){

        ?>


        <div class="container">
            <div class="card">
                <div class="content">
                    <div class="imgBx">
                        <img src="<?php echo $sname ['img']; ?>" alt="">
                    </div>
                    <div class="contentBx">
                        <h4> <?php echo $sname ['name']; ?> </h4>
                        <h5> <?php echo $sname ['surname']; ?></h5>
                    </div>
                    <div class="sci">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        

        </div>


    <?php } ?>
    
                    <!-- foreach Looping Stop  -->



                    <!-- ============================= Thank You ============================== -->

</body>
</html>
