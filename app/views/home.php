<section id="">

<?php
// read the contents of the README.md file
$markdown = file_get_contents('README.md');

// convert the Markdown to HTML
$html = \Michelf\Markdown::defaultTransform($markdown);

// display the HTML
echo $html;
?>

</section>
