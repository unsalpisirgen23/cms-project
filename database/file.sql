DELIMITER $$
CREATE TRIGGER post_to_delete BEFORE DELETE
    ON posts
    FOR EACH ROW
BEGIN
    delete from post_categories where post_categories.post_id = OLD.id;
END$$
DELIMITER ;
