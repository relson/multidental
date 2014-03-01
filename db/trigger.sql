DELIMITER $$

CREATE TRIGGER cria_anamnese AFTER INSERT ON paciente
 FOR EACH ROW BEGIN
INSERT INTO anamnese SET
idPaciente = NEW.idPaciente,
histMedica = NULL,
histFamiliar = NULL,
histPessoal = NULL,
histOdontologica = NULL;
END;

$$
DELIMITER ;