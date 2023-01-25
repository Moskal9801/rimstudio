<?php
// Template Name: Projects, admins

// Template Post Type: post, pages
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_field('title');?></title>

    <link type="image/x-icon" href="<?php the_field('Favicon');?>" rel="shortcut icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <?php wp_head();?>
</head>
<body class="projectsPage">
<div class="projectsHeader">
    <div class="nameProject">
        <?php the_field('title');?>
    </div>
    <div>
        <a href="<?php echo get_home_url(); ?>">
            <svg class="closedProjects" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 25L24.9999 1.00009" stroke="black" stroke-width="1.5"/>
                <path d="M25 25L1.00009 1.00009" stroke="black" stroke-width="1.5"/>
            </svg>
        </a>
    </div>
</div>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <?php
        $images = get_field('projects_image');
        $count = 0;
        $class = ' active';
        foreach ( $images as $image) {
            if ($count == 1) {
                $class = '';
            }
            $count++;
            ?>
            <div class="carousel-item<?=$class?>">
                <div class="projectsDiv">
                    <img src="<?=$image?>" class="projectsImages d-block" alt="...">
                </div>
            </div>
            <?
        }
        ?>
    </div>
    <button class="leftArrow carousel-control-prev" data-bs-target="#carouselExample" data-bs-slide="prev">
        <svg class="leftArrowSvg" width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle fill="var(--color-circle1)" r="38.25" transform="matrix(-1 0 0 1 39 39)" stroke="black" stroke-width="1.5"/>
            <path fill="var(--color-path1)" d="M45.7236 53.1982C46.0921 52.7916 46.0921 52.1309 45.7236 51.7243L33.9541 38.7643L45.7236 25.7788C46.0921 25.3722 46.0921 24.7115 45.7236 24.3049C45.3551 23.8984 44.7563 23.8984 44.3877 24.3049L31.9734 38.0019C31.7891 38.2052 31.697 38.4593 31.697 38.7388C31.697 38.993 31.7891 39.2725 31.9734 39.4758L44.3877 53.1727C44.7563 53.6047 45.3551 53.6047 45.7236 53.1982Z"/>
        </svg>
    </button>
    <button class="rightArrow carousel-control-next" data-bs-target="#carouselExample" data-bs-slide="next">
        <svg class="rightArrowSvg" width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle fill="var(--color-circle1)" cx="39" cy="39" r="38.25" stroke="black" stroke-width="1.5"/>
            <path fill="var(--color-path1)" d="M34.2764 53.1982C33.9079 52.7916 33.9079 52.1309 34.2764 51.7243L46.0459 38.7643L34.2764 25.7788C33.9079 25.3722 33.9079 24.7115 34.2764 24.3049C34.6449 23.8984 35.2437 23.8984 35.6123 24.3049L48.0266 38.0019C48.2109 38.2052 48.303 38.4593 48.303 38.7388C48.303 38.993 48.2109 39.2725 48.0266 39.4758L35.6123 53.1727C35.2437 53.6047 34.6449 53.6047 34.2764 53.1982Z"/>
        </svg>
    </button>
</div>

<div class="aboutProject">
    <?php the_field('Description');?>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
