# RecipeBook


Make sure you update $username, $password, $ and $database to your Codd username.


Add this to your codd database to get the search function working:

CREATE TABLE recipe(
name varchar(100) not null,
paleo tinyint(1) default false,
vegan tinyint(1) default false,
vegetarian tinyint(1) default false,
meal char(10),
minutes int not null,
Primary key(name)
);

INSERT INTO recipe (name,paleo,vegan,vegetarian,meal,minutes)
VALUES
('CHICKEN PARMESANA',0,0,0,'DINNER',30),
('CREAMY PUMPKIN SOUP',0,0,1,'DINNER',70),
('PALEO SALMON',1,0,0,'DINNER', 100),
('PALEO ROASTED YAM AND KALE',1,1,1,'DINNER',30),
('VEGAN MACARONI AND CHEESE',0,1,1,'DINNER',45),
('SAVORY MEATLOAF',0,0,0,'DINNER',100),
('JICAMA SNACK STICKS',0,1,1,'SNACK',10),
('ABC AVACADO, BANANA, CHOCOLATE PUDDING',1,1,1,'BREAKFAST',15)
;

ALTER TABLE recipe ADD COLUMN image varchar(255) AFTER time;

update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/chickenparm.jpeg' where name = 'CHICKEN PARMESANA';

update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/jicama_sticks.jpg' where name = 'JICAMA SNACK STICKS';

update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/paleo_roasted_yam.jpg' where name = 'PALEO ROASTED YAM AND KALE';

update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/paleo_salmon.jpg' where name = 'PALEO SALMON';

update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/savory_meatloaf.jpeg' where name = 'SAVORY MEATLOAF';

update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/vegan_mac_cheese.jpeg' where name = 'VEGAN MACARONI AND CHEESE';

/* Changed */
update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/vegan_mac_and_cheese.jpeg' where name = 'VEGAN MACARONI AND CHEESE';

update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/pumpkinsoup.png' where name = 'CREAMY PUMPKIN SOUP';

/* Changed */
update recipe set image = 'http://codd.cs.gsu.edu/~wlyons2/Projects/RecipeBook/images/ABCPudding.jpg' where name = 'ABC AVACADO, BANANA, CHOCOLATE PUDDING';

/* Changes for searchResults.php links */

ALTER TABLE recipe ADD COLUMN link varchar(255) AFTER image;

update recipe set link = 'recipes/ChickenParm.php' where name = 'CHICKEN PARMESANA';

update recipe set link = 'recipes/abc_pudding.php' where name = 'ABC AVACADO, BANANA, CHOCOLATE PUDDING';

update recipe set link = 'recipes/pumpkin-soup.php' where name = 'CREAMY PUMPKIN SOUP';

update recipe set link = 'recipes/jicama_sticks.php' where name = 'JICAMA SNACK STICKS';

update recipe set link = 'recipes/paleo_yam.php' where name = 'PALEO ROASTED YAM AND KALE';

update recipe set link = 'recipes/paleo_salmon.php' where name = 'PALEO SALMON';

update recipe set link = 'recipes/savory_meatloaf.php' where name = 'SAVORY MEATLOAF';

update recipe set link = 'recipes/vegan_mac_and_cheese.php' where name = 'VEGAN MACARONI AND CHEESE';
