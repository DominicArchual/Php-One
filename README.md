Php-One MVC Framework
=======

Check out the [Php One Wiki](https://github.com/DominicArchual/Php-One/wiki/Hello-World)!

### Why?

- To maintain a consistent design as I write both .NET and PHP code
- As a learning tool to introduce PHP developers to the .NET flavored MVC paradigm
- As a learning tool to introduce ASP.NET developers to PHP syntax in a familiar way

### What's with the SLN file?

- I am using a VisualStudio extension called PHPTools (http://www.devsense.com/products/php-tools) since it makes PHP development in VisualStudio almost trivial; however, you don't have you use it if you don't want to.  If you download the source, simply ignore the .sln, .suo, .phpproj, and .phpproj.user files and you'll be fine.

![Php-One Filesystem](http://i.imgur.com/XPeYnv0.gif "PHP-One Filesystem")

### Example:

In this example, we are pulling data from a repository and converting it to a view model in our controller, which then gets passed to our view.

#### Define your view model:

```
require_once('bin/System.php');

class MovieViewModel
{
	public $Id = 0;
	public $Title = "";
	public $Rating = '';
	public $ReleaseDate = '';
    
    public function __construct($id, $title, $rating, $releaseDate)
    {
        $this->Id = $id;
        $this->Title = $title;
        $this->Rating = $rating;
        $this->ReleaseDate = $releaseDate;
    }
}
```

#### Define your controller:

> Here we are creating a view model based on data retrieved from our repository.  To view the repository code, navigate to [/repositories/MovieRepository.php](https://github.com/DominicArchual/Php-One/blob/master/Php-One/repositories/MovieRepository.php)

```
require_once('/repositories/MovieRepository.php');
require_once('/models/MovieViewModel.php');

class HomeController
{
	public $MovieRepo;
	
	public function __construct()
	{
		$this->MovieRepo = new MovieRepository(); // create an instance of our repo
	}
	
	public function Index()
	{
        $movies = $this->MovieRepo->GetMovies(); // get data from our repo

        // do some transformations and populate our view model
        foreach ($movies as $movie)
        {
            $model[] = new MovieViewModel(
                $movie->Id,
                $movie->Title,
                $movie->IsRRated ? 'R' : 'PG',
                $movie->ReleaseDate->format('F jS, Y')
            );
        }

		View::Render('views/home/index.php', null, $model); // call our view and send the model
	}
}
```

#### Define your view:

> The model gets passed to the view and we are using PHP's HEREDOC syntax to display the values in HTML.

```
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
```

#### Result:

> Here it is!  And, it looks good thanks to bootstrap!

![Result](http://i.imgur.com/UzFZShT.gif Result)

... more examples coming soon
