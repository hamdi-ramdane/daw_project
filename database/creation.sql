

-- 1 USER ✓
CREATE TABLE user{
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL ,
    last_name VARCHAR(50) NOT NULL ,
    gender ENUM('Male', 'Female'),
    date_of_birth DATE ,
    email VARCHAR(255) UNIQUE NOT NULL,
    passwd VARCHAR(255) NOT NULL
};

-- 2 Patient ✓
CREATE TABLE patient{
    patient_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    addiction_level INT CHECK (addiction_level >= 1 AND addiction_level <= 5),
    avg_hours_week INT CHECK (avg_hours_week <= 168),
    avg_hours_month INT CHECK (avg_hours_month <= 730),
    insomnia_score INT CHECK (insomnia_score >= 1 AND insomnia_score <= 5),
    sleepiness_score INT CHECK (sleepiness_score >= 1 AND spleepiness_score <= 5),
    anxiety_score INT CHECK (anxiety_score >= 1 AND anxiety_score <= 5),
    depression_score INT CHECK (depression_score >= 1 AND depression_score <= 5),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
};
-- 3 Doctor ✓
CREATE TABLE doctor{
    doctor_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    specialty VARCHAR(50),
    schedualed_sessions INT,
    work_years INT, -- extra
    FOREIGN KEY (user_id) REFERENCES user(user_id)
};
-- 4 Admin ✓
CREATE TABLE admin {
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    admin_role ENUM('Superadmin', 'Administrator', 'Moderator'),
    permissions INT CHECK (presmissions >= 0 AND premissions <= 15) , -- binary 1111
    FOREIGN KEY (user_id) REFERENCES user(user_id)
};

-- 5 Quiz
CREATE TABLE quiz{
    quiz_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    quiz_date DATE,
    quiz_score INT, -- between 0 and 100
    FOREIGN KEY (patient_id) REFERENCES patient(patient_id)
};
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
CREATE TABLE usage_Statistic(
    statistic_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    stats_date DATE,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
);
