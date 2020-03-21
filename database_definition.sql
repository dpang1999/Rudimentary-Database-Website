Create table organization
	(
	Name varchar(30) not null,
    Street varchar(20),
    City varchar(20),
    Province char(2),
    primary key (name)
    );
Create table branch
    (
    Name varchar(30) not null,
    Telephone_number numeric(11),
    Foreign key (name) references organization (name),
    Primary key (name)
    );
Create table rescue
	(
	Name varchar(30) not null,
    Owner varchar(20),
    Foreign key (name) references organization (name),
    Primary key (name)
    );
Create table shelter
	(
	Name varchar(30) not null,
    Telephone_number numeric(11),
    Website_url varchar(100),
    Foreign key (name) references organization (name),
    Primary key (name)
    );
Create table adopter
	(
	Family_Name varchar(20) not null,
	Street varchar(20),
    City varchar(20),
    Province char(2),
    Telephone_number numeric(11),
    Primary key (family_name)
    );
Create table animal
	(
	ID char(7) not null,
	Species varchar(15),
	Arrival_date date,
	Departure_date date,
	Price_paid decimal(9,2),
	Branch varchar(30),
	Shelter varchar(30),
	Adopter varchar(20),
	Foreign key (branch) references branch(name),
	Foreign key (shelter) references shelter(name),
	Foreign key (adopter) references adopter(family_name),
    Primary key (id)
	);
Create table employee
	(
	name varchar(20) not null,
	Street varchar(20),
    City varchar(20),
    Province char(2),
    Telephone_number numeric(11),
    isOwner bit,
    Organization varchar(30),
    Foreign key (organization) references organization(name),
    Primary key (name)
    );
Create table driver
	(
	License_plate varchar(8),
	License_number char(15),
	Name varchar(20) not null,
	Primary key (license_plate),
	Organization varchar(30),
	Foreign key (name) references employee(name)
		On delete cascade,
	Foreign key (organization) references rescue(name)
	);
Create table donations
	(
	Date date not null,
	Donor varchar(20) not null,
	Amount decimal(9,2),
	Organization varchar(30) not null,
	Foreign key (organization) references organization (name),
	Primary key (date, donor, organization)
	);
Create table transport
	(
	Origin varchar(30) not null,
	Destination varchar(30) not null,
	Animal char(7) not null,
	Driver varchar(20) not null,
	Transaction_Fee decimal(9,2),
	Foreign key (origin) references branch(name),
	Foreign key (destination) references shelter(name),
	Foreign key (animal) references animal(id),
	Foreign key (driver) references driver(name),
	Primary key(origin, destination, animal, driver)
	);
Create table vet_visit
	(
	Date date not null, 
	Name varchar(30),
	cond varchar(50),
	Weight int,
	Animal char(7) not null,
	Foreign key (animal) references animal(id),
	Primary key (date, animal)
	);
Create table capacity
	(
	Shelter varchar(30) not null,
	Species varchar(15) not null,
	Capacity int,
	Foreign key (shelter) references shelter(name),
    Primary key (shelter, species)
    );	
