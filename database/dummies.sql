
-- 1 User
INSERT INTO user (first_name, last_name, username, gender, date_of_birth, email, `password`) VALUES
    ('Rick', 'Sanchez', 'sanchezrick', 'Male', '1958-05-16', 'rick@example.com', 'WubbaLubbaDubDub'),
    ('Morty', 'Smith', 'smithmorty', 'Male', '2002-03-12', 'morty@example.com', 'OhGeez'),
    ('Walter', 'White', 'whitewalter', 'Male', '1965-07-30', 'walter@example.com', 'Heisenberg'),
    ('Jesse', 'Pinkman', 'pinkmanjesse', 'Male', '1984-01-21', 'jesse@example.com', 'YoBitch'),
    ('Gus', 'Fring', 'fringgus', 'Male', '1956-11-23', 'gus@example.com', 'LosPollosHermanos'),
    ('Skyler', 'White', 'whiteskyler', 'Female', '1970-09-18', 'skyler@example.com', 'MoneyLaundering'),
    ('Hank', 'Schrader', 'schraderhank', 'Male', '1969-03-15', 'hank@example.com', 'Minerals'),
    ('Hector', 'Salamanca', 'salamancahector', 'Male', '1940-02-21', 'hector@example.com', 'DingDing'),
    ('Peter', 'Griffin', 'griffinpeter', 'Male', '1970-06-06', 'peter@example.com', 'FreakinSweet'),
    ('Lois', 'Griffin', 'griffinlois', 'Female', '1974-12-22', 'lois@example.com', 'FamilyGuy123'),
    ('Stewie', 'Griffin', 'griffinstewie', 'Male', '2001-04-03', 'stewie@example.com', 'VictoryIsMine'),
    ('Brian', 'Griffin', 'griffinbrian', 'Male', '1996-08-08', 'brian@example.com', 'GentlemanAndScholar'),
    ('Rick', 'Sanchez', 'sanchezrick2', 'Male', '1958-05-16', 'rick2@example.com', 'WubbaLubbaDubDub2'),
    ('Morty', 'Smith', 'smithmorty2', 'Male', '2002-03-12', 'morty2@example.com', 'OhGeez2'),
    ('Meg', 'Griffin', 'griffinmeg', 'Female', '1995-01-13', 'meg@example.com', 'Megatron'),
    ('Glenn', 'Quagmire', 'quagmireglenn', 'Male', '1959-12-08', 'quagmire@example.com', 'Giggity'),
    ('Jesse', 'Pinkman', 'pinkmanjesse2', 'Male', '1984-01-21', 'jesse2@example.com', 'YoBitch2'),
    ('Saul', 'Goodman', 'goodmansaul', 'Male', '1964-02-26', 'saul@example.com', 'BetterCallSaul'),
    ('Tyrus', 'Kitt', 'kitttyrus', 'Male', '1963-07-15', 'tyrus@example.com', 'SilentAssassin'),
    ('Ernie', 'Hudson', 'hudsonernie', 'Male', '1955-12-17', 'ernie@example.com', 'Ghostbuster');


-- 2 Patient
INSERT INTO patient (user_id, addiction_score,depression_score , adhd_score ,insomnia_score )
VALUES
    (1, 32, 20, 80, 21),
    (2, 21, 15, 70, 18),
    (3, 45, 25, 100, 43),
    (4, 52, 35, 150, 55),
    (5, 11, 10, 40, 39);

-- 3 Doctor
INSERT INTO doctor (user_id, specialty, schedualed_sessions, years_of_exp) VALUES
    (6, 'Cardiologist', 10, 15),
    (7, 'Pediatrician', 8, 20),
    (8, 'Dermatologist', 12, 10),
    (9, 'Psychiatrist', 6, 18),
    (10, 'Orthopedic Surgeon', 15, 25);

-- 4 Admin
INSERT INTO admin (user_id, admin_role, permissions) VALUES
    (11, 'Superadmin', 15), -- Binary: 1111
    (12, 'Administrator', 7), -- Binary: 0111
    (13, 'Moderator', 3); -- Binary: 0011

-- 5 Quiz
INSERT INTO quiz (patient_id, quiz_date, quiz_score) VALUES
    (1, '2023-11-01', 75),
    (2, '2023-11-02', 92),
    (3, '2023-11-03', 60),
    (4, '2023-11-04', 85),
    (5, '2023-11-05', 78);


-- 6  Alert 
INSERT INTO alert (patient_id, alert_date, alert_type) VALUES
    (1, '2023-11-06 08:15:00', 'Critical'),
    (2, '2023-11-06 10:30:00', 'High'),
    (3, '2023-11-06 12:45:00', 'Medium'),
    (4, '2023-11-06 14:20:00', 'Low'),
    (5, '2023-11-06 16:55:00', 'Critical');

-- 7  Message
INSERT INTO message (sender_id, receiver_id, content, message_date)VALUES
    (1, 2, 'Hello, how are you?', '2023-11-06 09:30:00'),
    (2, 1, 'Im doing well, thanks!', '2023-11-06 09:35:00'),
    (3, 1, 'Can you help me with a task?', '2023-11-06 10:15:00'),
    (1, 3, 'Sure, what do you need?', '2023-11-06 10:20:00'),
    (4, 2, 'Meeting tomorrow at 3 PM.', '2023-11-06 12:45:00');

-- 8 Usage Statistics
INSERT INTO usage_stats(user_id, stats_date)VALUES
    (1, '2023-01-10'),
    (2, '2023-01-12'),
    (3, '2023-01-15'),
    (4, '2023-01-20'),
    (5, '2023-01-25');
