Php-One MVC Framework
=======

I am calling it Php One because it is my "go to" design when building a new PHP app.  I usually code in .NET/C#/MVC; but sometimes I need something quick that will run on a LAMP stack so I write it in PHP.  I wanted to maintain a consistent design so as not to confuse myself as I write both .NET and PHP code.  The .NET MVC is a very simplistic and idealistic design which I enjoy.  Since I saw the PHP landscape as lacking in this area, I wanted to see if I could quickly create a framework the way I wanted based on my experience with .NET.

### Why?

- To introduce PHP developers to the .NET flavored MVC paradigm
- To introduce ASP.NET developers to PHP syntax in a familiar way
- Because I don't much like the existing PHP frameworks
- I like working with .NET's MVC framework; and I have always appreciated the simplicity of PHP, so why not marry the two?
- Barebones MVC is great for building a new app where the scope is uncertain; plus it's just vanilla PHP code so you can change whatever you like!

### What's with the SLN files?

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

> Here we are creating a view model based on data retrieved from our repository.  To view the repository code, navigate to /repositories/MovieRepository.php

```
require_once('/repositories/MovieRepository.php');
require_once('/models/MovieViewModel.php');

class HomeController
{
	public $MovieRepo;
	
	public function __construct()
	{
		$this->MovieRepo = new MovieRepository();
	}
	
	public function Index()
	{
		$GLOBALS['ActivePage'] = "Home";
        
        $model = [];
        
        $movies = $this->MovieRepo->GetMovies();

        foreach ($movies as $movie)
        {
            $model[] = new MovieViewModel(
                $movie->Id,
                $movie->Title,
                $movie->IsRRated ? 'R' : 'PG',
                $movie->ReleaseDate->format('F jS, Y')
            );
        }

		View::Render('views/home/index.php', null, $model);
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

![Result](http://i.imgur.com/UzFZShT.gif Result)

... more examples coming soon
