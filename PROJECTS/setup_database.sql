-- Database setup for Trivia Quiz
CREATE DATABASE IF NOT EXISTS trivia_quiz;

USE trivia_quiz;

-- Create questions table
CREATE TABLE IF NOT EXISTS questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    option_a VARCHAR(255) NOT NULL,
    option_b VARCHAR(255) NOT NULL,
    option_c VARCHAR(255) NOT NULL,
    option_d VARCHAR(255) NOT NULL,
    correct_option CHAR(1) NOT NULL
);

-- Insert sample questions
INSERT INTO questions (question, option_a, option_b, option_c, option_d, correct_option) VALUES
('What is the capital of France?', 'London', 'Berlin', 'Paris', 'Madrid', 'C'),
('What is 2 + 2?', '3', '4', '5', '6', 'B'),
('Which planet is known as the Red Planet?', 'Earth', 'Mars', 'Jupiter', 'Venus', 'B'),
('What is the largest ocean on Earth?', 'Atlantic', 'Indian', 'Arctic', 'Pacific', 'D'),
('Who painted the Mona Lisa?', 'Picasso', 'Van Gogh', 'Da Vinci', 'Rembrandt', 'C'),
('What is the chemical symbol for water?', 'H2O', 'CO2', 'O2', 'NaCl', 'A'),
('What year did World War II end?', '1944', '1945', '1946', '1947', 'B'),
('Which element has the atomic number 1?', 'Helium', 'Hydrogen', 'Oxygen', 'Carbon', 'B'),
('What is the tallest mountain in the world?', 'K2', 'Kilimanjaro', 'Everest', 'Denali', 'C'),
('How many continents are there?', '5', '6', '7', '8', 'C');