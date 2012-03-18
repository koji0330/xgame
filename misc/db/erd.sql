

/* Create Tables */

CREATE TABLE category
(
	id integer NOT NULL UNIQUE PRIMARY KEY AUTOINCREMENT,
	name text,
	created integer,
	modified integer
);


CREATE TABLE motions
(
	id integer NOT NULL UNIQUE PRIMARY KEY AUTOINCREMENT,
	name text NOT NULL,
	category_id integer,
	created integer,
	modified integer,
	FOREIGN KEY (category_id)
	REFERENCES category (id)
);


CREATE TABLE scenes
(
	id integer NOT NULL UNIQUE PRIMARY KEY AUTOINCREMENT,
	name text NOT NULL,
	created integer,
	modified integer
);


CREATE TABLE motions_scenes
(
	id integer NOT NULL UNIQUE PRIMARY KEY AUTOINCREMENT,
	motion_id integer,
	scene_id integer,
	FOREIGN KEY (scene_id)
	REFERENCES scenes (id),
	FOREIGN KEY (motion_id)
	REFERENCES motions (id)
);



