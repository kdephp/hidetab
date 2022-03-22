<?php

// Arrays for example

$infoHeaderTab = array('Treatment', 'Rest', 'Nature', 'Yoga');

$infoTab = array(
    'Healthy spine' => 'Yoga, massages and swimming in the sea will help your tired back! 
    Indian yogis believed that a person\'s health can be determined by how healthy and flexible his spine is.
    I wonder what the ancient yogis would say, looking at a modern person who has been suffering from back pain since school age, 
    works for a long time in uncomfortable sitting positions and does not know how to relax, 
    has a curvature that will eventually lead to diseases of other organs? 
    Yogis would say - take care of yourself and urgently!',

    'Antistress' => 'Ayurveda and yoga say that the main source of health of our body is a healthy mind. 
    The Antistress program first removes the effects of stress on the physical level, 
    then helps to get rid of negative and obsessive thoughts, then increases the overall level of energy.
    You will finally remember the feeling of a "free head", feel a surge of physical strength and remember what happiness is.',

    'Recovery' => 'Stress, life in the city, poor ecology, contaminated food and water, intense rhythm of life - 
    all this takes away our youth and good health from day to day.
    One face cream does not solve the problem of body rejuvenation when you are over 40. Do you agree?',

    'Yoga and Ayurveda' => 'A few years ago, we developed special yoga and Ayurveda programs - 
    and we realized that they work great - based on the experience of our 530 tourists! 
    In each of these programs there is one goal, to achieve which asanas, and breathing practices, 
    and meditations, and Ayurvedic procedures will be directed, lectures will be given on this topic.
    Yoga and Ayurveda are two strong wars that will fight problems and diseases together.'
);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
	<meta charset="UTF-8">
	<title>Hide tab</title>
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <!-- Bootstrap min CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Start content -->
	<div class="content">
        <!-- Start container -->
		<div class="container" id="about">
            <!-- Start info -->
			<div class="info" >
                <!-- Start info header -->
				<div class="info-header">
                    <!-- Start foreach header tab-->
                    <?php foreach ($infoHeaderTab as $tab) { ?>
                        <div class="info-header-tab"><?php echo $tab ?></div>
                    <!-- End foreach header tab-->
                    <?php } ?>
                <!-- End info header -->
				</div>
                    <!-- Start foreach tabcontent-->
                    <?php foreach ($infoTab as $tab => $key) { ?>
				<div class="info-tabcontent fade">
					<div class="description">
                        <!-- Echo description title -->
						<div class="description-title"><?php echo $tab ?></div>
                        <!-- Echo description text -->
                        <div class="description-text"><?php echo $key ?></div>
						<div class="description-btn">Learn more</div>
					</div>
					<div class="photo">
                        <!-- Image on the right -->
						<img src="img/<?php echo str_replace(' ', '_', $tab); ?>.jpg" alt="Massage">
					</div>
				</div>
                    <!-- End foreach tabcontent-->
                    <?php } ?>
                <!-- End info -->
				</div>
            <!-- End container -->
			</div>
    <!-- End content -->
    </div>
    <!-- script js -->
	<script src="js/script.js"></script>
</body>
</html>