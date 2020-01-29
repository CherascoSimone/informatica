USE 5ainf1920;

CREATE TABLE persona (
    				 id INTEGER NOT NULL PRIMARY KEY,
                     marcaTastiera VARCHAR(50),
                     marcaVideo VARCHAR(50),
					 marcaCase VARCHAR(50)
                     );
					 
INSERT INTO persona( id , marcaTastiera , marcaVideo, marcaCase ) VALUES (1,'tastiera1','video1','case1'),(2,'tastiera2','video2','case2'),(3,'tastiera3','video3','case3');
												  

CREATE USER 'admin5ainf'@'localhost' IDENTIFIED BY 'admin5ainf',												  
GRANT ALL PRIVILEGES ON 5ainf1920.persona TO 'admin'@'localhost';					 
					 

-- DROP TABLE 5ainf1920; cancella la tabella
-- DROP Database 5ainf1920; cancella il database