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
    department_id INT,           
    course_id INT,               
    first_name VARCHAR(255),     
    last_name VARCHAR(255),      
    level INT,                   
    email VARCHAR(255) UNIQUE,   
    phone_number VARCHAR(255),   
    date_of_birth DATE,          
    gender VARCHAR(50),          
    status VARCHAR(50) DEFAULT '1',
    address TEXT,                
    enrollment_date DATE,
);

-- Create Staff Table
CREATE TABLE Staff (
    staff_id INT PRIMARY KEY, 
    department_id INT,        
    first_name VARCHAR(255),  
    last_name VARCHAR(255),   
    email VARCHAR(255) UNIQUE,
    phone_number VARCHAR(255),
    job_title VARCHAR(255),   
    status VARCHAR(50) DEFAULT '1',
    address TEXT,             
    gender VARCHAR(50),       
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

-- Add Foreign Keys for Departments Table
ALTER TABLE Departments
ADD FOREIGN KEY (college_id) REFERENCES Colleges(college_id);

-- Add Foreign Keys for Courses Table
ALTER TABLE Courses
ADD FOREIGN KEY (department_id) REFERENCES Departments(department_id);

-- Add Foreign Keys for Students Table
ALTER TABLE Students
ADD FOREIGN KEY (department_id) REFERENCES Departments(department_id),
ADD FOREIGN KEY (course_id) REFERENCES Courses(id);

-- Add Foreign Keys for Course Management Table
ALTER TABLE Course_Management
ADD FOREIGN KEY (student_id) REFERENCES Students(student_id),
ADD FOREIGN KEY (course_id) REFERENCES Courses(id);

-- Add Foreign Keys for Course Registration Table
ALTER TABLE Course_Registration
ADD FOREIGN KEY (student_id) REFERENCES Students(student_id),
ADD FOREIGN KEY (course_id) REFERENCES Courses(id);

-- Add Foreign Keys for Results Table
ALTER TABLE Results
ADD FOREIGN KEY (student_id) REFERENCES Students(student_id),
ADD FOREIGN KEY (department_id) REFERENCES Departments(department_id);

-- Add Foreign Keys for Payments Table
ALTER TABLE Payments
ADD FOREIGN KEY (student_id) REFERENCES Students(student_id);
