Php-One
=======

I am calling it Php One because it is my "go to" design when building a new PHP app.  I usually code in .NET/C#/MVC; but sometimes I need something quick that will run on a LAMP stack so I write it in PHP.  I wanted to maintain a consistent design so as not to confuse myself as I write both .NET and PHP code.  The .NET MVC is a very simplistic and idealistic design which I enjoy.  Since I saw the PHP landscape as lacking in this area, I wanted to see if I could quickly create a framework the way I wanted based on my experience with .NET.

### Why?

- To introduce PHP developers to the .NET flavored MVC paradigm
- To introduce ASP.NET developers to PHP syntax in a familiar way
- Because I don't much like the existing PHP frameworks
- I like working with .NET's MVC framework; and I have always appreciated the simplicity of PHP, so why not marry the two?
- Barebones MVC is great for building a new app where the scope is uncertain; plus it's just vanilla PHP code so you can change whatever you like!

### How?

- I am using PHPTools from Devsense (http://www.devsense.com/products/php-tools) since it makes PHP development in VisualStudio almost trivial; however, you don't have you use it if you don't want to.  If you download the source, simply ignore the .sln, .suo, .phpproj, and .phpproj.user files and you'll be fine.

![Php-One Filesystem](http://i.imgur.com/XPeYnv0.gif "PHP-One Filesystem")

### Examples:

#### Define your controller:

```
class HomeController
{
	public function Index()
	{
		View::Render('views/home/index.php');
	}
}
```
... more examples coming soon
