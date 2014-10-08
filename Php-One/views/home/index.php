<div class="alert alert-success" role="alert">
    <strong>Congratulations! </strong> You've successfully installed PHP One.
</div>

<ul class="list-group">
<?php
foreach($Model as $movie)
{
    echo <<<HTML
        <li class="list-group-item">
            <strong>{$movie->Title}</strong> ({$movie->Rating}) - {$movie->ReleaseDate}
        </li>
HTML;
}
?>
</ul>

<?php /*
<h3><i class="fa fa-lightbulb-o"></i>More things to try...</h3>
*/?>