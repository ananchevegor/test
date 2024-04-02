CREATE TABLE `chatlist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `companion_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom1_6` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom3_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom7_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom7_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom7_3` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom7_4` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom7_5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `chatroom7_7` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `user_id_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `surname` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `country_id` int NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastmessage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `clientId` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO chatlist VALUES ('1', '7', '1');
INSERT INTO chatlist VALUES ('2', '7', '3');
INSERT INTO chatlist VALUES ('3', '7', '5');
INSERT INTO chatlist VALUES ('4', '7', '6');
INSERT INTO chatlist VALUES ('5', '4', '7');
INSERT INTO chatlist VALUES ('6', '1', '7');
INSERT INTO chatlist VALUES ('7', '6', '1');
INSERT INTO chatlist VALUES ('16', '5', '7');



INSERT INTO chatroom7_1 VALUES ('1', '7', 'John, you are the last one', '2024-01-18 16:38:03');

INSERT INTO chatroom7_2 VALUES ('1', '7', 'Hi', '2024-01-18 16:21:53');

INSERT INTO chatroom7_3 VALUES ('1', '7', 'Hello from Database', '2024-01-16 16:43:22');
INSERT INTO chatroom7_3 VALUES ('2', '3', 'Same', '2024-01-16 16:43:34');
INSERT INTO chatroom7_3 VALUES ('3', '7', 'hi', '2024-01-17 15:59:12');
INSERT INTO chatroom7_3 VALUES ('4', '7', 'Hi from Application', '2024-01-17 16:01:20');
INSERT INTO chatroom7_3 VALUES ('5', '7', 'I changed the order', '2024-01-17 16:02:18');
INSERT INTO chatroom7_3 VALUES ('6', '7', 'I add list in the function and he is show all everytime if i do some action', '2024-01-17 16:10:01');
INSERT INTO chatroom7_3 VALUES ('7', '7', 'now it will work!', '2024-01-17 16:14:33');
INSERT INTO chatroom7_3 VALUES ('8', '7', 'NOW', '2024-01-17 16:31:39');
INSERT INTO chatroom7_3 VALUES ('9', '7', 'Ahahahaha Really?', '2024-01-17 16:31:56');
INSERT INTO chatroom7_3 VALUES ('24', '7', 'comp', '2024-04-02 11:56:12');
INSERT INTO chatroom7_3 VALUES ('26', '3', 'its from browser', '2024-04-02 11:59:10');
INSERT INTO chatroom7_3 VALUES ('27', '3', 'message from website ', '2024-04-02 13:00:20');
INSERT INTO chatroom7_3 VALUES ('28', '3', 'i can write anything what i want', '2024-04-02 13:00:35');
INSERT INTO chatroom7_3 VALUES ('29', '3', 'try one more time', '2024-04-02 13:01:51');
INSERT INTO chatroom7_3 VALUES ('30', '7', 'very interesting', '2024-04-02 13:02:28');
INSERT INTO chatroom7_3 VALUES ('31', '3', 'i will there the chat make', '2024-04-02 13:50:32');

INSERT INTO chatroom7_4 VALUES ('1', '7', 'Hi, Kathrin!', '2024-01-18 16:36:15');


INSERT INTO chatroom7_7 VALUES ('1', '7', 'fdd', '2024-03-28 15:36:38');
INSERT INTO chatroom7_7 VALUES ('2', '7', 'cds', '2024-03-28 15:37:10');

INSERT INTO users VALUES ('1', 'John', 'Sallazar', '0', '+4936215236986', 'Hi', '');
INSERT INTO users VALUES ('2', 'Jessica', 'Klopp', '0', '+4985265439657', 'good bye!', '');
INSERT INTO users VALUES ('3', 'Felix', 'Ditrix', '0', '+4985265439657', 'Thnx', '660437bbe21a7');
INSERT INTO users VALUES ('4', 'Barth', 'Samsos', '0', '+4985265439657', 'Thnx', '');
INSERT INTO users VALUES ('5', 'Jan', 'Begreg', '0', '+4985265439657', 'Next Time', '');
INSERT INTO users VALUES ('6', 'Kathrin', 'Liss', '0', '+4985265439657', 'It was last time', '');
INSERT INTO users VALUES ('7', 'Egor', 'Ananchev', '1', '+4917658095166', 'Hello', '660bf0ed48e1c');
INSERT INTO users VALUES ('29', 'name', 'surname', '0', '+4917658095166', '***', '');
INSERT INTO users VALUES ('30', 'name', 'surname', '0', '+4917658095166', '***', '');
INSERT INTO users VALUES ('31', 'name', 'surname', '0', '+4917658095166', '***', '');
INSERT INTO users VALUES ('32', 'name', 'surname', '0', '+4917658095166', '***', '');
INSERT INTO users VALUES ('33', 'name', 'surname', '0', '+4917658095166', '***', '');

