CREATE DATABASE BTPM;
USE BTPM;

CREATE TABLE USER_INFO(
USER_ID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
USER_NAME TINYTEXT,
USER_PASS TINYTEXT,
USER_EMAIL TINYTEXT,
IS_ADMIN    INT
);

CREATE TABLE CATEGORIES(
    CAT_ID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    CAT_NAME TINYTEXT,
    CAT_IMG TINYTEXT,
    CAT_CONTENT TINYTEXT
);

CREATE TABLE LESSON(
    LESSON_ID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    INTRO_IMG TINYTEXT,
    LESSON_CONTENT TINYTEXT,
    LINK TINYTEXT,
    CAT_ID INTEGER,
    CONSTRAINT FK_CAT FOREIGN KEY (CAT_ID) REFERENCES CATEGORIES (CAT_ID)
);

CREATE TABLE COMMENT(
    COMMENT_ID INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    COMMENT_CONTENT LONGTEXT,
    CREATE_TIME DATETIME,
    USER_ID INTEGER,
    CONSTRAINT FK_USER FOREIGN KEY (USER_ID) REFERENCES USER_INFO (USER_ID)
);

CREATE TABLE USER_LIKE(
    COMMENT_ID INTEGER,
    CONSTRAINT CMT_2 FOREIGN KEY (COMMENT_ID) REFERENCES COMMENT (COMMENT_ID),
    USER_ID INTEGER,
    CONSTRAINT FK_USER_2 FOREIGN KEY (USER_ID) REFERENCES USER_INFO (USER_ID),
    USER_ID_LIKED_CMT INTEGER
);

CREATE TABLE PROGRESS(
    USER_ID INTEGER,
    CONSTRAINT FK_USER_3 FOREIGN KEY (USER_ID) REFERENCES USER_INFO (USER_ID),
    LESSON_ID INTEGER,
    CONSTRAINT FK_LESSON FOREIGN KEY (LESSON_ID) REFERENCES LESSON (LESSON_ID),
    DAY_FINISHED DATETIME
);

INSERT INTO USER_INFO(USER_ID, USER_NAME,USER_PASS,USER_EMAIL,IS_ADMIN) VALUES (1,'Antran','123qwe','123QWE@gmail.com',1);

INSERT INTO CATEGORIES(CAT_NAME,CAT_IMG,CAT_CONTENT) VALUES ('listen & watch','Banner/watch_listen.jpg','Do you like listening to songs and watching stories and videos in English? In this section you can learn to sing songs in English and watch fun stories and videos.' );
INSERT INTO CATEGORIES(CAT_NAME,CAT_IMG,CAT_CONTENT) VALUES ('read & write','Banner/read_write.png', 'Do you want to practise your reading and writing in English? In this section you can read and write about interesting topics.');
INSERT INTO CATEGORIES(CAT_NAME,CAT_IMG,CAT_CONTENT) VALUES ('speak & spell','Banner/speak_spell.jpg','Do you want to improve your spelling and pronunciation in English? In this section you can learn how to say and spell English words with Sam and Pam, the super space spies. This section is based on the UK literacy programme, Letters and Sounds. Play games and watch songs and stories.' );
INSERT INTO CATEGORIES(CAT_NAME,CAT_IMG,CAT_CONTENT) VALUES ('gramma & vocabulary','Banner/gramma_vocabulary.jpg', 'Do you want to practise your English grammar and learn new words? In this section you can learn about grammar rules, play word games and watch fun videos. Watch the grammar videos, play the grammar games and print the grammar worksheets.');


INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Gramma/Gramma1.jpg','Present Simple Tense','Video/GrammarVid1.mp4',4);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Gramma/Gramma2.jpg','Present Continuous Tense','Video/GrammarVid2.mp4',4);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Gramma/Gramma3.jpg','Nouns Countable And Uncountable','Video/GrammarVid3.mp4',4);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Listen/ListenIcon1.jpg','Animal House','Video/animal_house.mp4',1);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Listen/ListenIcon2.jpg','Baby Shark','Video/Baby_Shark.mp4',1);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Listen/ListenIcon3.jpg','The alphabet song','Video/The_alphabet_song.mp4',1);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Listen/ListenIcon4.jpg','Wheels on the bus','Video/Wheels_on_the_Bus .mp4',1);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Read/Read1.jpg','Helping others','Read/Reading1.png',2);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Read/Read2.jpg','Say no to bullying','Read/Reading2.png',2);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Read/Read3.jpg','Superheroes','Read/Reading3.png',2);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Read/Read4.jpg','Seasons','Read/Reading4.png',2);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Write/Write1.jpg','Problem page','Write/Writing1.png',2);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Write/Write2.jpg','Penpal letter','Write/Writing2.png',2);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Write/Write3.jpg','Book review','Write/Writing3.png',2);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Vocabulary/Vocab1.jpg','Sea Animals','Video/VocabVid1.mp4',4);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Vocabulary/Vocab2.jpg','Baby Animals','Video/VocabVid2.mp4',4);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Banner/speak_spell.jpg','The television','Video/SpeakVid1.mp4',3);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Banner/speak_spell.jpg','The camping adventure','Video/SpeakVid2.mp4',3);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Banner/speak_spell.jpg','The spelling sports day','Video/SpellVid1.mp4',3);
INSERT INTO LESSON(INTRO_IMG,LESSON_CONTENT,LINK,CAT_ID) VALUES('Banner/speak_spell.jpg','The boat adventure','Video/SpellVid2.mp4',3);


