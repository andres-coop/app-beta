create table users (
id SERIAL PRIMARY KEY UNIQUE NOT NULL, 
firstname varchar(50) NOT NULL, 
lastname varchar(50) NOT NULL, 
email varchar(100) NOT NULL UNIQUE, 
password text NOT NULL, 
mobile_phone varchar(20) NOT NULL UNIQUE, 
address varchar(100) NULL, 
gender integer NULL, 
birthdate date NULL, 
status boolean NOT NULL DEFAULT TRUE,
created_at timestamp with time zone NOT NULL DEFAULT NOW(), 
updated_at timestamp NOT NULL DEFAULT NOW(), 
deleted_at timestamp NULL);


SELECT u.firstname ||' '|| u.lastname as fullname,
		u.email,
		u.mobile_phone,
		CASE when u.status = true then 'Active' else 'Inactive' END as Status,
		u.profile_photo
		FROM users u;

UPDATE users SET profile_photo='profile_photos/user_default.png';

ALTER table users add column profile_photo TEXT;