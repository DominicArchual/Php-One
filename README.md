Php-One
=======

### Why?

There are many reasons I created this project.  They are as follows:

- To introduce PHP developers to the ASP.NET flavored MVC paradigm
- To introduce ASP.NET developers to PHP syntax
- Because I have always been dissatisfied with the existing PHP frameworks
- I have always loved ASP.NET's MVC framework; and I have always loved the simplicity of PHP, so why not marry the two?
- Barebones MVC is great for building a new app where the scope is uncertain; plus it's just vanilla PHP code...

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
