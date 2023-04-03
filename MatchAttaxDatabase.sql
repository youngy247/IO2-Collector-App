CREATE TABLE players (
                           id INT(11) NOT NULL AUTO_INCREMENT,
                           name VARCHAR(255) NOT NULL,
                           dob DATE NOT NULL,
                           country VARCHAR(255) NOT NULL,
                           PRIMARY KEY (id)
  );

CREATE TABLE player_stats (
                                     id INT(11) NOT NULL AUTO_INCREMENT,
                                     player_id INT(11) NOT NULL,
                                     attack INT(11) NOT NULL,
                                     defense INT(11) NOT NULL,
                                     position VARCHAR(255) NOT NULL,
                                     star_rating INT(11) NOT NULL,
                                     rarity VARCHAR(255) NOT NULL,
                                     PRIMARY KEY (id),
                                     FOREIGN KEY (player_id) REFERENCES players(id)
  );

CREATE TABLE clubs (
                              id INT(11) NOT NULL AUTO_INCREMENT,
                              name VARCHAR(255) NOT NULL,
                              PRIMARY KEY (id)
  );

ALTER TABLE players ADD COLUMN club_id INT(11) NOT NULL;
ALTER TABLE players ADD FOREIGN KEY (club_id) REFERENCES clubs(id);