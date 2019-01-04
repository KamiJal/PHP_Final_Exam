<?php

class SiteManager
{
    private static $navBar =
        "<header><nav class=\"navbar navbar-dark bg-dark justify-content-end pr-5 fixed-top\">
         <a class=\"navbar-brand text-uppercase\" href=\"http://localhost:8080/EXAM\">главная</a>
         </nav></header>";

    private static $footer =
        "<footer class=\"text-center bg-dark p-5 mt-5\">
         <a class=\"text-muted\" href=\"https://kamijal.portfoliobox.net/\" target=\"_blank\">&copy; 2018 Kamil Ushurbakiyev</a>
         </footer>";

    private static $styles =
        " <link rel=\"stylesheet\" href=\"../css/bootstrap.min.css\" charset=\"UTF-8\">
          <link rel=\"stylesheet\" href=\"../css/styles.css\" charset=\"UTF-8\">";

    private static $basePath = __DIR__ . DIRECTORY_SEPARATOR;

    public static function NavBar()
    {
        return self::$navBar;
    }

    public static function Footer()
    {
        return self::$footer;
    }

    public static function Styles()
    {
        return self::$styles;
    }

    public static function Url(string $taskName)
    {
        return $taskName . DIRECTORY_SEPARATOR . "index.php";
    }
}