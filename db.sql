-- Create database
CREATE DATABASE resume_db;
USE resume_db;

-- About section
CREATE TABLE about (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content TEXT
);
INSERT INTO about (content) VALUES ('Hello! I\'m Avril, based in Cavite, Philippines, and I am ready to transition into a Junior Developer role. My academic background has equipped me with robust skills across several key areas, including programming, web development, networking, and database management. I am driven to utilize this technical foundation in a professional setting, ensuring effective contribution to team goals while continuously expanding my practical knowledge within the industry.');

-- Personal details
CREATE TABLE personal_details (
    id INT PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(255),
    value VARCHAR(255)
);
INSERT INTO personal_details (label, value) VALUES
('Birthday', '5 April 2003'),
('Website', 'https://github.com/aluraavril'),
('Phone', '+63 928 027 3759'),
('City', 'Cavite, Philippines'),
('Age', '22'),
('Degree', 'BS in Computer Science'),
('Email', 'balington.avril@gmail.com'),
('MBTI', 'ENFP');

-- Technical skills
CREATE TABLE technical_skills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(255),
    skills TEXT
);
INSERT INTO technical_skills (category, skills) VALUES
('Web Development', 'HTML, CSS, JavaScript, PHP'),
('Programming Languages', 'Python, Java, C++'),
('Database Management', 'MySQL'),
('Networking', 'Cisco Packet Tracer'),
('Graphic Design', 'Adobe Photoshop, Canva'),
('Productivity Tools', 'Microsoft Office, Google Workspace');

-- Projects
CREATE TABLE projects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description TEXT,
    image VARCHAR(255),
    category VARCHAR(255)
);
INSERT INTO projects (title, description, image, category) VALUES
('Restaurant POS Machine', 'A POS for Mithi+Bistro Cafe made with html and css.', 'Resto POS.png', 'Websites'),
('Aircon Company Website', 'A Company website for Airconditioning Services made using html, css, and js.', 'Aircon.png', 'Data Reports'),
('DVD Shop Report', 'Data report for a DVD Rental Shop using Lookerstudio.', 'dvd report.png', 'Data Reports'),
('Restaurant Kiosk', 'A kiosk for Mithi+Bistro Cafe made with html and css.', 'Resto Kiosk.png', 'Websites'),
('Gym Data Report', 'Data report for a gym business, made using Lookerstudio.', 'gym report.png', 'Data Reports'),
('Course Management System', 'A course management system made using php, mysql, html, css, and js.', 'Course management.png', 'Systems'),
('Meatshop Data Report', 'Data report for a meatshop business, made using Tableau Public.', 'meatshop.png', 'Data Reports'),
('School Newspaper System', 'A school newspaper system for literature club of the school. Made using php, mysql, html, css, and js.', 'school newspaper.png', 'Systems'),
('Attendance Management System', 'An system made to manage student attendance, made using php, mysql, html, css, and js.', 'attendance management.png', 'Systems');

-- Education
CREATE TABLE education (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    dates VARCHAR(255),
    institution VARCHAR(255),
    description TEXT
);
INSERT INTO education (title, dates, institution, description) VALUES
('Senior High School Graduate, STEM Program', '2020 - 2022', 'Emilio Aguinaldo College - Cavite', 'Completed the STEM (Science, Technology, Engineering, and Mathematics) program with a strong foundation in analytical and problem-solving skills.'),
('Bachelor of Science in Computer Science', '2022 - 2026', 'Emilio Aguinaldo College - Cavite', 'Developed a strong foundation in programming, algorithms, web development, and database management, gaining hands-on experience in building software solutions and preparing for roles in software development and technology-driven projects.');

-- Certifications
CREATE TABLE certifications (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255),
    description TEXT
);
INSERT INTO certifications (title, description) VALUES
('Consecutive Dean\'s List', 'Awarded from 1st year to current semester for consistent academic excellence.'),
('GSIS Scholar', 'Recipient of the GSIS Scholarship since 1st year, maintaining academic performance and eligibility.'),
('High Honors – Senior High School', 'Achieved high honors during Senior High School (2020-2022) for outstanding academic performance.');


-- update

ALTER TABLE about ADD COLUMN additional_content TEXT;

UPDATE about SET additional_content = 'Whether I’m perfecting a pattern while crocheting, meticulously following a recipe while cooking, or strategizing in a video game, I\'m always looking for creative ways to solve problems and build something awesome. I believe this blend of meticulous focus and creative flair is exactly what I can offer. I am a fast and diligent learner, eager to absorb new technologies and contribute proactively to projects.' WHERE id = 1;

-- Create table for bucket list items
CREATE TABLE bucket_list (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

-- Insert initial items
INSERT INTO bucket_list (title, description) VALUES
('Travel the World', 'Visit Japan, South Korea, Italy, and Iceland—immersing myself in new cultures, food, and landscapes.'),
('Go on a Food Adventure', 'Explore global cuisines and experience food the way Anthony Bourdain did—authentic, local, and unforgettable.'),
('Compete in Call of Duty', 'Join an official COD tournament, test my skills, and experience competitive gaming firsthand.'),
('Build My Own Full-Stack App', 'Develop and publish a fully functional app—from concept to deployment—to challenge myself as a developer.'),
('Experience Solo Travel', 'Explore a new country alone to gain confidence, independence, and unforgettable memories.'),
('Join COD Leaderboards', 'Get to be part of the top 10 Philippines in Battle Royal Rank.');

-- Create table for section meta (title and description)
CREATE TABLE bucket_list_meta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

-- Insert initial meta
INSERT INTO bucket_list_meta (title, description) VALUES
('Bucket List', 'A collection of personal goals and experiences I want to achieve, ranging from travel and food exploration to gaming milestones and personal growth.');


-- Create table for personal stats
CREATE TABLE personal_stats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    icon VARCHAR(50) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

-- Insert initial items
INSERT INTO personal_stats (icon, title, description) VALUES
('bi bi-heart', 'Creative Interests', 'Crocheting, cooking, design, and gaming'),
('bi bi-lightbulb', 'Life Motto', '“Keep learning. Keep building. Keep improving.”'),
('bi bi-graph-up', 'Strengths', 'Detail-oriented, fast learner, adaptable, team-oriented'),
('bi bi-exclamation-triangle', 'Greatest Fear', 'Not reaching my full potential and missing out on opportunities to learn and grow');

-- Create table for section meta
CREATE TABLE transferable_skills_meta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

-- Insert initial meta
INSERT INTO transferable_skills_meta (title, description) VALUES
('Transferable Skills', 'Valuable skills gained from my internship experience that seamlessly apply to a junior developer.');

-- Create table for skills
CREATE TABLE transferable_skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    skill_name VARCHAR(255) NOT NULL,
    percentage INT NOT NULL
);

-- Insert initial skills
INSERT INTO transferable_skills (skill_name, percentage) VALUES
('Multitasking', 85),
('Organization', 100),
('Communication', 95),
('Tech Proficiency', 100),
('Problem Solving', 75),
('Time Management', 80);


-- Create table for Summary
CREATE TABLE summary (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    location VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- Insert initial data (matches your hardcoded values)
INSERT INTO summary (name, description, location, phone, email) VALUES
('Avril Jayzel R. Balington', 'Dedicated and motivated Computer Science student with a solid foundation in programming, web development, and database management, leveraging problem-solving, analytical, and collaborative skills to transition seamlessly into a Junior Developer role.', 'Dasmariñas, Cavite, PH', '+63 928 027 3759', 'balington.avril@gmail.com');

-- Create table for Professional Experience
CREATE TABLE professional_experience (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    dates VARCHAR(255) NOT NULL,
    company VARCHAR(255) NOT NULL,
    description TEXT NOT NULL  -- This can store bullet points as a single text block (e.g., separated by newlines)
);

-- Insert initial data (matches your hardcoded values)
INSERT INTO professional_experience (title, dates, company, description) VALUES
('Internship – Junior Developer', 'June 2025 - August 2025', 'Tourism Infrastructure and Enterprise Zone Authority', 'Developed a system to generate reports, streamlining data collection and improving reporting efficiency for management.\nCreated a compilation system integrating multiple web-based applications, enhancing accessibility and workflow for staff.\nPerformed inventory management of digital assets and system resources to ensure organized and up-to-date records.\nAssisted colleagues with technical tasks, troubleshooting issues, and providing support for system-related operations.\nProvided general administrative assistance, including organizing project documents, preparing reports, and conducting research to support ongoing projects.');


CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL  -- Store hashed passwords
);
INSERT INTO users (username, password) VALUES ('midoofy', '$2y$10$examplehashedpassword');  -- Use password_hash() in PHP to hash 'turon'
















