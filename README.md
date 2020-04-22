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
