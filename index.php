<?php
/*
	Arpeggiate is a straight forward Content Management System written
	in PHP. It's designed purpose is for publishing musical chords and
	lyrics onto the web.
	
	Copyright (C) 2016 konnorb @ github

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/
require 'app/start.php';

$songs = $db->query("
	SELECT id, title, artist, slug, views
	FROM songs
	")->fetchAll(PDO::FETCH_ASSOC);
//ORDER BY views DESC
require VIEW_ROOT . '/home.php';
?>