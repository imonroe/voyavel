## Voyavel
### A quick website starter kit

This is a very simple web site starter kit.

It has Laravel 5.6, Voyager 1.1.2, and just enough front-end stuff to get you started.

Which is to say, a home page, a contact page, and enough scaffolding such that pages created in the admin screen will route to sane page templates based on their slugs.

If you start here, you may save yourself a couple hours of work getting to a basic functional site.

### Installation
You're going to need a Laravel-capable setup somewhere, which means php7.1+, MySQL/MariaDB, etc (though I don't know why this wouldn't work with Sqlite dbs too.)
And you'll need to configure your webserver, naturally.  Oh, and Composer.  You'll need that too.

```bash
$ cd /wherever/you/want/to/install
$ git clone https://github.com/imonroe/voyavel.git .
$ composer update
$ cp .env.example .env
$ php artisan key:generate
$ php artisan storage:link

```

If the `php artisan storage:link` command throws an error, you are probably on a Windows VM.  Restart your VM as an Administrator, and try again.

At this point, you should take a minute and edit your `.env` file to give it proper database credentials.  You will also want to set the `APP_URL` variable to the proper website address.  Oh, and while you're at it, change the `MAIL_SITE_OWNER_EMAIL` variable to your email address.  If you have mail server settings to add, this is a good time too. Personally, I prefer Mailgun.

```bash
$ php artisan voyager:install --with-dummy
```

That will run migrations for you, and generate dummy data.

At that point, you should be all set!  Visit your new website, and, as they say, make something awesome!

