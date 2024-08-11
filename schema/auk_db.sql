-- The following sql tables are SQL tables for a secondary school in Nigeria. Change all the instances of a secondary school and refer to a university, follow the guides below:
-- - Rename the table names where necessary
-- - Use `id` for all primary keys and add auto increment for the primary keys
-- - Add more tables where a university is needed (e.g faculty, department, and more)
-- - Remove all default values and assign appropriate varchar values each column
-- - 


CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL DEFAULT 'UNKNOWN',
  `birth_date` date NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `lga` varchar(100) NOT NULL DEFAULT 'Jalingo',
  `index_no` varchar(10) NOT NULL DEFAULT 'NIA',
  `graduation_year` int(11) NOT NULL,
  `position_held` varchar(100) NOT NULL DEFAULT 'NIL',
  `photo` varchar(50) NOT NULL DEFAULT 'uploads/default.png',
  `nin_number` varchar(20) NOT NULL DEFAULT 'UNAVAILABLE'
) 

CREATE TABLE `applicants` (
  `applicant_id` int(11) NOT NULL,
  `enrolling_class` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `parent_first_name` varchar(50) NOT NULL,
  `parent_last_name` varchar(50) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `parent_address` varchar(50) NOT NULL,
  `parent_phone_number` varchar(50) NOT NULL,
  `admission_status` int(2) NOT NULL,
  `application_code` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `registration_id` varchar(50) NOT NULL
) 

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `section_id` int(11) NOT NULL,
  `general_section_id` int(11) NOT NULL,
  `general_class_id` int(11) NOT NULL
) 

CREATE TABLE `newsletters` (
  `newsletter_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) 

CREATE TABLE `school_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(50) NOT NULL,
  `position_number` int(11) NOT NULL
) 


CREATE TABLE `school_sessions` (
  `session_id` int(11) NOT NULL,
  `session_year` varchar(11) NOT NULL
) 

CREATE TABLE `school_terms` (
  `term_id` int(11) NOT NULL,
  `term_name` varchar(10) NOT NULL
) 


CREATE TABLE `sections` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `general_section_id` int(11) NOT NULL
) 

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `qualification` varchar(11) NOT NULL,
  `discipline` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'uploads/default.png',
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) 

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `admission_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `state` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `parent_first_name` varchar(50) NOT NULL,
  `parent_last_name` varchar(50) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `parent_address` varchar(50) NOT NULL,
  `parent_phone_number` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) 

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) 

CREATE TABLE `university_disciplines` (
  `discipline_id` int(11) NOT NULL,
  `discipline_name` varchar(100) NOT NULL
) 
