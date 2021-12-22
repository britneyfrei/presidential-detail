DROP DATABASE IF EXISTS `catalog`;
CREATE DATABASE IF NOT EXISTS `catalog`;
USE `catalog`;

DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `Name` VARCHAR(50), 
  `PhotoID` INTEGER,
  `Description` LONGTEXT,
  `Price` VARCHAR(10), 
  INDEX (`PhotoID`), 
  INDEX (`Name`), 
  PRIMARY KEY (`PhotoID`)
) ENGINE=innodb DEFAULT CHARSET=utf8;

SET autocommit=1;

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Interior Detail', 1, 'Headliner cleaned, Carpets extracted, Carpet and upholstery shampooed,
  Vents cracks and crevices cleaned, Dashboard center console and door panels cleaned,
  Vinyl or leather protector applied to dash, seats, and door panels, Door jambs cleaned, Windows cleaned', 
  '$150-$175');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Exterior Detail', 2, 'Chemical wash to remove road tar contaminents bugs etc., 
  Paint compounded and polished to remove surface imperfections and restore gloss, Rims and tires cleaned, Hand wash, 
  Tire shine applied, Wax applied', '$150-$175');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('The Presidential Package', 3, 'Includes full interior and exterior detail.', '$225-$275');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('The Vice Presidential Package', 4, 'Carpets extracted, Carpet and upholstery shampooed, 
  Dashboard center console and door panels cleaned, Windows cleaned, Chemical wash to remove road tar contaminents bugs etc., 
  Rims and tires cleaned, Hand wash', '$150-$175');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Fabric and Carpet Protector Application', 5, 'Thorough cleaning of carpet and upholstery 
  followed by aerosal application of fabric protector to reduce the chance of future stains.', '$60-$100');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Fallout Removal', 6, 'Use of clay bar to remove break dust, rail dust, and other surface contaminents 
  from vehicle\'s exterior.', '$75-$175');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Headlamp Restoration', 7, 'Wet sanding and buffing with special compounds and polishes to restore 
  clarity of headlamp lense.', '$35-$75');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Paint Correction', 8, 'Removal of minor scuffs, door dings, imperfections, and paint blemishes.', '$25-$100');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Paint Restoration', 9, 'Buffing and polishing to restore vehicle\'s appearance.', '$100-$400');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Paint Sealant and Wax Application', 10, 'Ceramic, Teflon polimers, pure carnub, 
  and various wax blends available.', '$60-$250');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Paint Touch Up', 11, 'Touch up of minor paint chips, stratches, and blemishes.', 
  '$25-$125');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Scratch Removal', 12, 'Wet sanding and buffing to remove or minimize stratches.', 
  '$40-$100');

INSERT INTO `services` (`Name`, `PhotoID`, `Description`, `Price`) 
VALUES ('Tree Sap and Acid Rain Removal', 13, 'Application of various acids and thinners to 
  minimize enviromental damage to paint.', '$50-$150');