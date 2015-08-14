//Trigger Cuando hay  un insert


DROP TRIGGER IF EXISTS trigger1
DELIMITER $$
CREATE TRIGGER trigger1 
    BEFORE INSERT
    ON usuarios
    FOR EACH ROW 
BEGIN
    INSERT INTO logs
    VALUES
    (CURDATE(),CURTIME(),CURRENT_USER(), "insertando usuario",New.Nombre);
END;


DROP TRIGGER IF EXISTS trigger1
DELIMITER $$
CREATE TRIGGER trigger1 
    BEFORE INSERT
    ON usuarios
    FOR EACH ROW 
BEGIN
    INSERT INTO logs
    VALUES
    (CURDATE(),CURTIME(),CURRENT_USER(), :new.NombreUsuario, :New.ApellidoUsu);
END;
