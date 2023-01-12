
-- Table `ited_virtual`.`nota`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nota` ;

CREATE TABLE IF NOT EXISTS `nota` (
  `id_nota` INT NOT NULL AUTO_INCREMENT,
  `nota_final` INT NULL,
  PRIMARY KEY (`id_nota`))
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `ited_virtual`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `usuario` ;

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `apellido` VARCHAR(30) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `tipo_telef` VARCHAR(30) NULL DEFAULT NULL,
  `#_telef` INT NULL DEFAULT NULL,
  `img` VARCHAR(250) NULL DEFAULT NULL,
  `cuidad` VARCHAR(250) NOT NULL,
  `pais` VARCHAR(25) NOT NULL,
  `nivel_escolaridad` VARCHAR(15) NULL DEFAULT NULL,
  `#_ced` VARCHAR(20) NULL,
  `foto_ced` BLOB NULL DEFAULT NULL,
  `password` VARCHAR(250) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- -----------------------------------------------------
-- Table `ited_virtual`.`categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `categoria` ;

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombreCategoria` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ited_virtual`.`curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `curso` ;

CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` INT NOT NULL,
  `nombre` VARCHAR(30) NULL DEFAULT NULL,
  `horas_academicas` TIME NULL DEFAULT NULL,
  `fecha_inicio` DATE NULL DEFAULT NULL,
  `categoria_id` INT NOT NULL,
  PRIMARY KEY (`id_curso`),
  CONSTRAINT `fk_curso_categoria1`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- -----------------------------------------------------
-- Table `ited_virtual`.`matricula`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `matricula` ;

CREATE TABLE IF NOT EXISTS `matricula` (
  `id_matricula` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL DEFAULT NULL,
  `nota_id_nota` INT NOT NULL,
  `voucher` VARCHAR(150) NULL,
  `matricula_aceptada` TINYINT NULL,
  `usuario_id` INT NOT NULL,
  `curso_id_curso1` INT NOT NULL,
  PRIMARY KEY (`id_matricula`),
  CONSTRAINT `fk_matricula_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_matricula_curso1`
    FOREIGN KEY (`curso_id_curso1`)
    REFERENCES `curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Table `ited_virtual`.`certificado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `certificado` ;

CREATE TABLE IF NOT EXISTS `certificado` (
  `id_certificado` INT NOT NULL AUTO_INCREMENT,
  `matricula_id_matricula` INT NOT NULL,
  `img` VARCHAR(250) NULL,
  `certificadocol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_certificado`),
  CONSTRAINT `fk_certificado_matricula1`
    FOREIGN KEY (`matricula_id_matricula`)
    REFERENCES `matricula` (`id_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- -----------------------------------------------------
-- Table `ited_virtual`.`factura`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `factura` ;

CREATE TABLE IF NOT EXISTS `factura` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL DEFAULT NULL,
  `concepto` VARCHAR(250) NULL DEFAULT NULL,
  `monto` FLOAT NULL DEFAULT NULL,
  `matricula_id_matricula` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_factura_matricula1`
    FOREIGN KEY (`matricula_id_matricula`)
    REFERENCES `matricula` (`id_matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;