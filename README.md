# Everest - Rapid Development PHP Framework
 Hooks is a rapid development PHP MVC framework. It encompasses the MVC with partials and view components. It has in-built Database Helpers that help you develop apps in PHP rapidly.

# The idea
I was a very big fan of the MVC-framework implemented by ASP.Net. This framework implements very similar pattern and should be familiar to ASP.Net developers.

# Installation
- Using composer: `composer create-project everest-php/everest`
- Using git: `git clone https://github.com/everest-php/everest.git`
- Or simply, download this repositoy as zip.


# Docs
Docs are not being created. If you would like to contribute, please email to tika.pahadi@selu.edu or create a pull request.

# Debug Notes
If you get the "Permission Denied Error" with razr Engine. The '.cache' folder should have read/write permissions by the web-server. `sudo` may not be necessary.
- Give ownership to www-data (In macOS, replace `www:data` with `_www`)

    `sudo chown -R .cache www-data:www-data`
    
- Set permissions to read/write

    `sudo chmod -R 0755 .cache`
