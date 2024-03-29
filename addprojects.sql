CREATE DATABASE project_database;

USE project_database;

CREATE TABLE personal_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author_name VARCHAR(255),
    year_studying INT,
    college_name VARCHAR(255),
    university_roll_number VARCHAR(255),
    phone_number VARCHAR(15),
    email VARCHAR(255),
    university_reg_number VARCHAR(255),
    aadhar_number VARCHAR(12),
    worked_with_team BOOLEAN,
    team_name VARCHAR(255),
    team_members TEXT
);

CREATE TABLE project_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_type VARCHAR(50),
    project_name VARCHAR(255),
    problem_statement TEXT,
    tag_line VARCHAR(255),
    technologies_used TEXT,
    challenges TEXT,
    problem_solution TEXT,
    live_site_link VARCHAR(255),
    video_demo_link VARCHAR(255),
    images TEXT,
    logo VARCHAR(255)
);
