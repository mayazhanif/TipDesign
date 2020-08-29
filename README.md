# TipDesign
Emoji (Table having 5 Columns)

		EmojiID (Primary key Auto increament Unique For Each Video (DOUBLE) )
		StreamID (Video ID Stream ID of Playing Video It CAN ALSO be a Foreign Key (DOUBLE))
		Fire ( type(DOUBLE) )
		Heart ( type(DOUBLE) )
		Laugh ( type(DOUBLE) )
		CLAP ( type(DOUBLE) )
MUST BE Declared On Each creation of Video		
	QUERY	
CREATE TABLE `Emoji` ( `EmojiID` DOUBLE NOT NULL AUTO_INCREMENT , `StreamID` DOUBLE NOT NULL , `Fire` DOUBLE NOT NULL , `Heart` DOUBLE NOT NULL , `Laugh` DOUBLE NOT NULL , `CLAP` DOUBLE NOT NULL , PRIMARY KEY (`EmojiID`), UNIQUE (`StreamID`)) ENGINE = InnoDB;
INSERTING NEW row Against Every VIDEO ID (DECLARING)
INSERT INTO `Emoji` (`EmojiID`, `StreamID`, `Fire`, `Heart`, `Laugh`, `CLAP`) VALUES (NULL, '456223', '0', '0', '0', '0');		
TO UPDATE EMOJI INTO DB
UPDATE Emoji SET Heart = Heart + 1 WHERE StreamID = $videoID

Tip Design (Animation With MySQL+PHP +JS)
