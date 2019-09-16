create table cat_telephone
(
	id varchar(36) not null,
	name varchar(15) not null,
	code varchar(7) not null,
    primary key(id)
);

create table cat_digital_contact
(
    id varchar(36) not null,
        primary key(id),
    code varchar(8) not null,
    name varchar(15) not null
);

create table digital_contact
(
    id varchar(36) not null,
    contact_id varchar(36),
    user_id varchar(36),
    value varchar(140),
    primary key(id),
    constraint digital_contact_cat_fk foreign key(contact_id)
    references cat_digital_contact(id),
    constraint user_contact_fk foreign key(user_id)
        references user(id)
);

create table order
(
    id varchar(36),
            primary key(id)
);

create table product
(
    id varchar(36),
            primary key(id)
);

create table company
(
    id varchar(36) not null,
            primary key(id),
    name varchar(25)
);

create table country
(
    id varchar(36) not null,
            primary key(id),
    code varchar(4) not null,
    name varchar(35)
);

create table address
(
    id varchar(36) not null,
            primary key(id),
    user_id varchar(36),
    foreign key (user_id)
        references user(id),
    country_id varchar(36),
    foreign key (country_id)
        references country(id),
    street varchar(30),
    street_number varchar(9),
    suburb varchar(15),
    township varchar(15),
    state varchar(15),
    cp varchar(5)
);
create table telephone
(
	id varchar(36) not null,
			primary key(id),
	phone_id varchar(36),
	foreign key (phone_id)
			references cat_telephone (id),
	user_id varchar(36),
	foreign key (user_id)
	        references user(id),
	number varchar(15) not null
);

create table cat_bank_account
(
	id varchar(36) not null,
			primary key(id),
	code varchar(10),
	name varchar(15)
);

create table cat_type_card
(
	id varchar(36) not null,
			primary key(id),
	code varchar(10),
	name varchar(15)
);


create table credit_card
(
	id varchar(36) not null,
			primary key(id),
	user_id varchar(36),
	foreign key (user_id)
	        references user(id),
    bank_account_id varchar(36),
    foreign key (bank_account_id)
            references cat_bank_account(id),
	number TEXT,
	cvt text,
	expiration_month text,
	expiration_year text,
	last_digit varchar(4)
);

create table cat_pago_facil_methods
(
    id varchar(36) not null,
    primary key(id),
    method varchar(15),
    description varchar(30)
);


create table transfer
(
    id varchar(36) not null,
    primary key(id),
    user_id varchar(36),
    foreign key (user_id)
            references user(id),
    company_id varchar(36),
    foreign key (company_id)
            references company(id),
    order_id varchar(36),
    foreign key (order_id)
            references order(id),
    authorization int,
    authorized int,
    message varchar(50),
    description varchar(140),
    error varchar(140),
    init_date datetime,
    end_date datetime
);

insert into cat_pago_facil_methods(id, method, description)
values ('2932d84f-5aae-4d9d-a91f-89551d4f1807', 'transaccion', '');
insert into cat_pago_facil_methods(id, method, description)
values ('24bc00a6-b508-4a06-bd29-0b8b1010490d', 'verificar', '');

insert into cat_type_card(id, code, name)
values('b74530fb-fa20-431d-8584-75f50edd1f55', 'mastercard', 'Master Card');
insert into cat_type_card(id, code, name)
values('ec2d9c7d-31b8-40cd-92e3-204578bd855b', 'visa', 'Visa');
insert into cat_type_card(id, code, name)
values ('deb2f37e-da49-4fee-9537-52f07ffefc38', 'AMEX', 'American Express');

insert into cat_telephone(id, name, code)
values('fb3c70fb-1bca-49ae-b7a1-60ea93c04123', 'movil', '');
insert into cat_telephone(id, name, code)
values('6479f325-1994-4320-9dfa-1ae66ff64b5d', 'home', '');
insert into cat_telephone(id, name, code)
values('332b1d91-dfe6-4c0d-a8de-5f2059fdc37a', 'work', '');

insert into cat_digital_contact(id, name, code)
values ('93786f29-f62d-4f49-baf7-ecbc2633a747', 'correo electronico', 'email');
insert into cat_digital_contact(id, name, code)
values ('e575f5a9-c947-41c0-9c7a-56850d9b79f3', 'twitter', 'twitter');
insert into cat_digital_contact(id, name, code)
values ('19b263db-0769-48ee-bb96-7c13b538f975', 'facebook', 'fb');
insert into cat_digital_contact(id, name, code)
values ('1918b2cd-443a-479d-bc85-5ff95f750ca5', 'instagram', 'insta');

insert into country(id, name, code)
values('e26d5a95-c5f7-4914-996e-43a43ce1465e', 'México', 'MX');

