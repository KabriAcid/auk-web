-- Create Colleges Table
CREATE TABLE Colleges (
    college_id INT AUTO_INCREMENT PRIMARY KEY,
    college_name VARCHAR(255),
    dean_name VARCHAR(255) DEFAULT NULL,
    dean_welcome_message TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
-- Create Departments Table
CREATE TABLE Departments (
    department_id INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(255),
    college_id INT,
    hod_name VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_college FOREIGN KEY (college_id) REFERENCES Colleges(college_id) ON DELETE CASCADE
);

-- craete program Tables
CREATE TABLE `programs` (
    `program_id` INT AUTO_INCREMENT PRIMARY KEY,  -- Primary key, auto-incrementing INT
    `program_name` VARCHAR(255) NOT NULL,         -- Name of the program
    `department_id` INT UNSIGNED NOT NULL,        -- Foreign key to the departments table
    `created_at` TIMESTAMP NULL DEFAULT NULL,     -- Created at timestamp
    `updated_at` TIMESTAMP NULL DEFAULT NULL,     -- Updated at timestamp
    FOREIGN KEY (`department_id`) REFERENCES `departments`(`department_id`) 
        ON DELETE CASCADE  -- Foreign key constraint with cascading delete
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- create Staff Table 
CREATE TABLE `staff` (
    `staff_id` INT AUTO_INCREMENT PRIMARY KEY,       -- Unique identifier for the staff member
    `first_name` VARCHAR(100) NOT NULL,              -- Staff member's first name
    `last_name` VARCHAR(100) NOT NULL,               -- Staff member's last name
    `rank` VARCHAR(50) NOT NULL,                     -- Staff member's rank or title
    `responsibility` VARCHAR(255),                   -- Staff member's responsibilities
    `image` VARCHAR(255) NULL,                       -- URL or path to the staff member's profile image
    `email` VARCHAR(255) UNIQUE NOT NULL,            -- Contact email address
    `phone` VARCHAR(20) NULL,                        -- Contact phone number
    `biography` TEXT NULL,                           -- Brief biography
    `gender` VARCHAR(10) NULL,                       -- Gender of the staff member
    `department_id` INT UNSIGNED NOT NULL,           -- Foreign key to departments table
    `created_at` TIMESTAMP NULL DEFAULT NULL,        -- Created at timestamp
    `updated_at` TIMESTAMP NULL DEFAULT NULL,        -- Updated at timestamp
    FOREIGN KEY (`department_id`) REFERENCES `departments`(`department_id`) 
        ON DELETE CASCADE                            -- Foreign key constraint with action on delete
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
