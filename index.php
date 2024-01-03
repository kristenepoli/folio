<!DOCTYPE html>
<html>
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Styles -->
    <link href="assets/css/main.css" rel="stylesheet">
    
    <!-- Favicons -->
    <title>Manu - I code</title>


</head>
<body>
    
    <header>
        <h1>Manuel Moreale<br><em>Developer and Designer</em></h1>
        <div class="intro">
            <p>Over the past 10+ years I tried to lend my skills to bridge the gap between the traditional <em>graphic design</em> world and the <em>world wide web</em>.</p>
            <p>As a designer who codes and a developer with an eye for good design, I have a passion for <em>digital typography</em>, a love for <em>minimalism</em>, and a deep appreciation of <em>lightweight and simple websites</em>.</p>
            <p>If you're looking for a developer to help you with your next project or you simply want to have a chat about everything design related <a href="mailto:work@manuelmoreale.com">get in touch</a>.</p>
        </div>
    </header>
    <section class="portfolio">
    <?php

    $projects = [
        [
            'image' => 'image.jpg', // The file used for this project
            'url'   => 'https://unsplash.com/s/photos/puppy', // Url linked to the project
            'title' => 'Cute Puppy', // Project Title
            'credit' => 'Love', // Project Credits. Can be set to false
        ]
    ];

    shuffle($projects);
    foreach ($projects as $project) :

        $title  = $project['title'];
        $image  = "images/projects/{$project['image']}";
        $url    = $project['url'];
        $credit = $project['credit'];

        ?>
        <a class="project" href="<?= $url ?>" target="_blank">
            <figure class="project-content">
                <img class="project-image" src="<?= $image ?>" alt="Screenshot of the <?= $title ?> homepage">
                <figcaption class="project-caption">
                    <?= $title ?>
                    <?php if ($credit) : ?><small class="credits">with <?= $credit ?></small><?php endif; ?>
                </figcaption>
            </figure>
        </a>
    <?php endforeach; ?>

    </section>
    <footer>
        <small>PIVA IT02707470304</small>
        <small>© 2011 - <?= date('Y') ?></small>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
</body>
</html>
