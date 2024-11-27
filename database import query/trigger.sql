-- CREATE TRIGGER fill_schedules
-- AFTER INSERT ON schedules
-- FOR EACH ROW
-- BEGIN
--     DECLARE @match_no INT;
--     DECLARE @date DATE;
--     DECLARE @team1 INT;
--     DECLARE @team2 INT;
--     DECLARE @stadium INT;
--     SET @match_no = FLOOR(RAND() * 9999);
--     SET @date = DATEADD(day, FLOOR(RAND() * 365), '2022-01-01');
--     SET @team1 = (SELECT name FROM team ORDER BY RAND() LIMIT 1);
--     SET @team2 = (SELECT name FROM team ORDER BY RAND() LIMIT 1);
--     SET @stadium = (SELECT stadium_name FROM stadium ORDER BY RAND() LIMIT 1);
--     WHILE EXISTS (SELECT 1 FROM schedules WHERE match_no = @match_no)
--     BEGIN
--         SET @match_no = FLOOR(RAND() * 9999);
--     END;
--     UPDATE schedules SET match_no = @match_no, date = @date, team1 = @team1, team2 = @team2, stadium_name = @stadium WHERE match_no IS NULL;
-- END;


DELIMITER $$
CREATE TRIGGER fill_schedules
AFTER INSERT ON schedules
FOR EACH ROW
BEGIN
    DECLARE match_no INT;
    DECLARE date_ DATE;
    DECLARE team1 varchar;
    DECLARE team2 varchar;
    DECLARE @stadium varchar;
    SET match_no = FLOOR(RAND() * 9999);
    SET date_ = DATE_ADD('2023-10-01', INTERVAL FLOOR(RAND()*31) DAY);
     SET team1 = (SELECT name FROM team ORDER BY RAND() LIMIT 1);
    SET team2 = (SELECT name FROM team ORDER BY RAND() LIMIT 1);
    SET stadium = (SELECT stadium_name FROM stadium ORDER BY RAND() LIMIT 1);
    WHILE EXISTS (SELECT 1 FROM schedules WHERE match_no = @match_no)
    BEGIN
        SET @match_no = FLOOR(RAND() * 9999);
    END;
    UPDATE schedules SET match_no = match_no, date = date, team1 = team1, team2 = team2, stadium_name = stadium WHERE match_no IS NULL;
DELIMITER ;
