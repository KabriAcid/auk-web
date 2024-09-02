-- Create Colleges Table
CREATE TABLE Colleges (
    college_id INT PRIMARY KEY,
    college_name VARCHAR(255)
);

-- Create Departments Table
CREATE TABLE Departments (
    department_id INT PRIMARY KEY,
    department_name VARCHAR(255),
    college_id INT -- This will be a foreign key
);

-- Create Courses Table
CREATE TABLE Courses (
    id INT PRIMARY KEY,
    course_code VARCHAR(255),
    title VARCHAR(255),
    semester VARCHAR(255),
    department_id INT, -- This will be a foreign key
    unit INT
);

-- Create Students Table
CREATE TABLE Students (
    student_id INT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    level INT,
    department_id INT, -- This will be a foreign key
    course_id INT -- This will be a foreign key
);

-- Create Staff Table
CREATE TABLE Staff (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    rank VARCHAR(255)
);

-- Create Course Management Table
CREATE TABLE Course_Management (
    course_management_id INT PRIMARY KEY,
    student_id INT, -- This will be a foreign key
    course_id INT, -- This will be a foreign key
    enrollment_date DATE
);

-- Create Course Registration Table
CREATE TABLE Course_Registration (
    registration_id INT PRIMARY KEY,
    student_id INT, -- This will be a foreign key
    course_id INT, -- This will be a foreign key
    session VARCHAR(255),
    semester VARCHAR(255)
);

-- Create Results Table
CREATE TABLE Results (
    student_id INT, -- This will be a foreign key
    department_id INT, -- This will be a foreign key
    course_title VARCHAR(255),
    session VARCHAR(255),
    semester VARCHAR(255)
);

-- Create Payments Table
CREATE TABLE Payments (
    id INT PRIMARY KEY,
    status VARCHAR(255),
    timestamp TIMESTAMP,
    amount DECIMAL(10, 2),
    student_id INT, -- This will be a foreign key
    session VARCHAR(255),
    semester VARCHAR(255)
);
