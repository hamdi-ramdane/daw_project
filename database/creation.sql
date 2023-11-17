
-- 1 USER ✓
CREATE TABLE `user` (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL ,
    last_name VARCHAR(50) NOT NULL ,
    username VARCHAR(50) NOT NULL UNIQUE ,
    gender ENUM('Male', 'Female'),
    date_of_birth DATE ,
    email VARCHAR(255) UNIQUE NOT NULL,
    `password` VARCHAR(255) NOT NULL
);

-- 2 Patient ✓
CREATE TABLE patient(
    patient_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    addiction_score INT CHECK (addiction_score >= 1 AND addiction_score <= 100),
    depression_score INT CHECK (depression_score >= 1 AND depression_score <= 100),
    adhd_score INT CHECK (adhd_score >= 1 AND adhd_score <= 100),
    insomnia_score INT CHECK (insomnia_score >= 1 AND insomnia_score <= 100),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);
-- 3 Doctor ✓
CREATE TABLE doctor(
    doctor_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    specialty VARCHAR(50),
    schedualed_sessions INT,
    years_of_exp INT, -- extra
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);
-- 4 Admin ✓
CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    admin_role ENUM('Superadmin', 'Administrator', 'Moderator'),
    permissions INT CHECK (permissions >= 0 AND permissions <= 15) , -- binary 1111
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);

-- 5 Quiz
CREATE TABLE quiz(
    quiz_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    quiz_date DATE,
    quiz_score INT, -- between 0 and 100
    FOREIGN KEY (patient_id) REFERENCES patient(patient_id)
);
-- 6 Alerts ✓
CREATE TABLE alert (
    alert_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    alert_date TIMESTAMP,
    alert_type ENUM('Critical', 'High', 'Medium', 'Low'),
    FOREIGN KEY (patient_id) REFERENCES patient(patient_id)
);
-- 7 Messages ✓
CREATE TABLE message (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    sender_id INT,
    receiver_id INT,
    content TEXT,
    message_date DATETIME,
    FOREIGN KEY (sender_id) REFERENCES user(user_id),
    FOREIGN KEY (receiver_id) REFERENCES user(user_id)
);
-- 8 Usage_Statistics ✓
CREATE TABLE usage_stats(
    stats_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    stats_date DATE,
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);
