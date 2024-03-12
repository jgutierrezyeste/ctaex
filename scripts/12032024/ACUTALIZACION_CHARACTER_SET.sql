
SET @alter_statement = '';

DROP PROCEDURE IF EXISTS cambiocharacterset;
DELIMITER ;;
CREATE PROCEDURE cambiocharacterset()
BEGIN
    DECLARE done INT DEFAULT FALSE;
    DECLARE nom_tabla VARCHAR(255);

    DECLARE cur CURSOR FOR SELECT table_name FROM information_schema.tables WHERE table_schema = 'prueba_ctaex';
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

    OPEN cur;

    table_loop: LOOP
        FETCH cur INTO nom_tabla;

        IF done THEN
            LEAVE table_loop;
        END IF;

        SET @alter_statement = CONCAT('ALTER TABLE `', nom_tabla, '` CHARACTER SET = utf8;');


        PREPARE stmt FROM @alter_statement;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;

    END LOOP;

    CLOSE cur;
END ;;
DELIMITER ;

CALL cambiocharacterset();

