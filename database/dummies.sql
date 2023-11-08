
-- 1 User
INSERT INTO user (first_name, last_name, gender, date_of_birth, email, password) VALUES
('John', 'Doe', 'Male', '1990-05-15', 'john.doe@example.com', 'password123'),
('Jane', 'Smith', 'Female', '1985-11-20', 'jane.smith@example.com', 'securepass'),
('Michael', 'Johnson', 'Male', '1995-03-10', 'michael.j@example.com', 'mike123'),
('Emily', 'Brown', 'Female', '1988-07-02', 'emily.b@example.com', 'pass1234'),
('David', 'Williams', 'Male', '1992-09-30', 'david.w@example.com', 'davidpass'),
('Sarah', 'Miller', 'Female', '1991-12-25', 'sarah.m@example.com', 'sarah123'),
('Daniel', 'Anderson', 'Male', '1993-04-05', 'daniel.a@example.com', 'danielpass'),
('Olivia', 'Davis', 'Female', '1987-08-12', 'olivia.d@example.com', 'oliviapass'),
('William', 'Wilson', 'Male', '1994-06-18', 'william.w@example.com', 'will123'),
('Ava', 'Moore', 'Female', '1996-01-08', 'ava.m@example.com', 'avapass');

INSERT INTO user (first_name, last_name, gender, date_of_birth, email, passwd) VALUES
    ('Rick', 'Sanchez', 'Male', '1958-05-16', 'rick@example.com', 'WubbaLubbaDubDub'),
    ('Morty', 'Smith', 'Male', '2002-03-12', 'morty@example.com', 'OhGeez'),
    ('Walter', 'White', 'Male', '1965-07-30', 'walter@example.com', 'Heisenberg'),
    ('Jesse', 'Pinkman', 'Male', '1984-01-21', 'jesse@example.com', 'YoBitch'),
    ('Gus', 'Fring', 'Male', '1956-11-23', 'gus@example.com', 'LosPollosHermanos'),
    ('Skyler', 'White', 'Female', '1970-09-18', 'skyler@example.com', 'MoneyLaundering'),
    ('Hank', 'Schrader', 'Male', '1969-03-15', 'hank@example.com', 'Minerals'),
    ('Hector', 'Salamanca', 'Male', '1940-02-21', 'hector@example.com', 'DingDing'),
    ('Peter', 'Griffin', 'Male', '1970-06-06', 'peter@example.com', 'FreakinSweet'),
    ('Lois', 'Griffin', 'Female', '1974-12-22', 'lois@example.com', 'FamilyGuy123'),
    ('Stewie', 'Griffin', 'Male', '2001-04-03', 'stewie@example.com', 'VictoryIsMine'),
    ('Brian', 'Griffin', 'Male', '1996-08-08', 'brian@example.com', 'GentlemanAndScholar'),
    ('Rick', 'Sanchez', 'Male', '1958-05-16', 'rick2@example.com', 'WubbaLubbaDubDub2'),
    ('Morty', 'Smith', 'Male', '2002-03-12', 'morty2@example.com', 'OhGeez2'),
    ('Meg', 'Griffin', 'Female', '1995-01-13', 'meg@example.com', 'Megatron'),
    ('Glenn', 'Quagmire', 'Male', '1959-12-08', 'quagmire@example.com', 'Giggity'),
    ('Jesse', 'Pinkman', 'Male', '1984-01-21', 'jesse2@example.com', 'YoBitch2'),
    ('Saul', 'Goodman', 'Male', '1964-02-26', 'saul@example.com', 'BetterCallSaul'),
    ('Tyrus', 'Kitt', 'Male', '1963-07-15', 'tyrus@example.com', 'SilentAssassin'),
    ('Ernie', 'Hudson', 'Male', '1955-12-17', 'ernie@example.com', 'Ghostbuster');

-- 2 Patient
INSERT INTO patient (user_id, addiction_level, avg_hours_week, avg_hours_month, insomnia_score, sleepiness_score, anxiety_score, depression_score)
VALUES
    (1, 3, 20, 80, 2, 3, 1, 4),
    (2, 2, 15, 70, 1, 2, 3, 2),
    (3, 4, 25, 100, 4, 5, 2, 1),
    (4, 5, 35, 150, 5, 4, 5, 5),
    (5, 1, 10, 40, 3, 1, 4, 3);

-- 3 Doctor
INSERT INTO doctor (user_id, specialty, scheduled_sessions, work_years) VALUES
    (6, 'Cardiologist', 10, 15),
    (7, 'Pediatrician', 8, 20),
    (8, 'Dermatologist', 12, 10),
    (9, 'Psychiatrist', 6, 18),
    (10, 'Orthopedic Surgeon', 15, 25);

-- 4 Admin
INSERT INTO admin (user_id, role, permissions) VALUES
    (11, 'Superadmin', 15), -- Binary: 1111
    (12, 'Administrator', 7), -- Binary: 0111
    (13, 'Moderator', 3); -- Binary: 0011

-- 8  Alert 
INSERT INTO alert (patient_id, alert_date, alert_type) VALUES
    (1, '2023-11-06 08:15:00', 'Critical'),
    (2, '2023-11-06 10:30:00', 'High'),
    (3, '2023-11-06 12:45:00', 'Medium'),
    (4, '2023-11-06 14:20:00', 'Low'),
    (5, '2023-11-06 16:55:00', 'Critical');

-- 9  Message
INSERT INTO message (sender_id, receiver_id, content, message_date)VALUES
    (1, 2, 'Hello, how are you?', '2023-11-06 09:30:00'),
    (2, 1, 'Im doing well, thanks!', '2023-11-06 09:35:00'),
    (3, 1, 'Can you help me with a task?', '2023-11-06 10:15:00'),
    (1, 3, 'Sure, what do you need?', '2023-11-06 10:20:00'),
    (4, 2, 'Meeting tomorrow at 3 PM.', '2023-11-06 12:45:00');

-- 10 Usage Statistics
INSERT INTO usage_statistic (user_id, stats_date)VALUES
    (1, '2023-01-10'),
    (2, '2023-01-12'),
    (3, '2023-01-15'),
    (4, '2023-01-20'),
    (5, '2023-01-25');
