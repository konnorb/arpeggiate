# Arpeggiate
A CMS written in PHP for Chords &amp; Lyrics

![alt tag](http://i.imgur.com/vhWV3so.png)

## Database structure:
```SQL
  `CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(11) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

  ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
```

Access the admin panel by going to the `/admin` directory/url.

The default login details are simply admin and password. 

Generating a new `.htpasswd` is reccomended.
