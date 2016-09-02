SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `conex`.`service_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`service_type` (
  `id_service_type` INT NOT NULL AUTO_INCREMENT ,
  `service_type` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_service_type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`student_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`student_type` (
  `id_student_type` INT NOT NULL ,
  `student_type` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_student_type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`users` (
  `id_users` INT NOT NULL AUTO_INCREMENT ,
  `id_student_type` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `identify` VARCHAR(45) NULL ,
  `mobile_phone` VARCHAR(45) NULL ,
  `address` VARCHAR(45) NULL ,
  `avatar` VARCHAR(45) NULL ,
  `country` VARCHAR(45) NULL ,
  `city` VARCHAR(45) NULL ,
  `birthday` DATE NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_users`) ,
  INDEX `fk_users_student_type1_idx` (`id_student_type` ASC) ,
  CONSTRAINT `fk_users_student_type1`
    FOREIGN KEY (`id_student_type` )
    REFERENCES `conex`.`student_type` (`id_student_type` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`service` (
  `id_service` INT NOT NULL AUTO_INCREMENT ,
  `id_service_type` INT NOT NULL ,
  `id_users` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `info_json` TEXT NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_service`) ,
  INDEX `fk_service_service_type_idx` (`id_service_type` ASC) ,
  INDEX `fk_service_users1_idx` (`id_users` ASC) ,
  CONSTRAINT `fk_service_service_type`
    FOREIGN KEY (`id_service_type` )
    REFERENCES `conex`.`service_type` (`id_service_type` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_service_users1`
    FOREIGN KEY (`id_users` )
    REFERENCES `conex`.`users` (`id_users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`product_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`product_type` (
  `id_product_type` INT NOT NULL AUTO_INCREMENT ,
  `product_type` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_product_type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`product_capacity`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`product_capacity` (
  `id_product_capacity` INT NOT NULL AUTO_INCREMENT ,
  `product_capacity` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_product_capacity`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`products`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`products` (
  `id_products` INT NOT NULL AUTO_INCREMENT ,
  `id_product_type` INT NOT NULL ,
  `id_users` INT NOT NULL ,
  `id_product_capacity` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `slogan` VARCHAR(45) NULL ,
  `description` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_products`) ,
  INDEX `fk_products_product_type1_idx` (`id_product_type` ASC) ,
  INDEX `fk_products_users1_idx` (`id_users` ASC) ,
  INDEX `fk_products_product_capacity1_idx` (`id_product_capacity` ASC) ,
  CONSTRAINT `fk_products_product_type1`
    FOREIGN KEY (`id_product_type` )
    REFERENCES `conex`.`product_type` (`id_product_type` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_users1`
    FOREIGN KEY (`id_users` )
    REFERENCES `conex`.`users` (`id_users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_product_capacity1`
    FOREIGN KEY (`id_product_capacity` )
    REFERENCES `conex`.`product_capacity` (`id_product_capacity` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`event_type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`event_type` (
  `id_event_type` INT NOT NULL AUTO_INCREMENT ,
  `event_type` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_event_type`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`events` (
  `id_events` INT NOT NULL ,
  `id_event_type` INT NOT NULL ,
  `id_users` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `address` VARCHAR(45) NULL ,
  `description` VARCHAR(45) NULL ,
  `details` VARCHAR(45) NULL ,
  `slogan` VARCHAR(45) NULL ,
  `start_date` DATETIME NULL ,
  `finish_date` DATETIME NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_events`) ,
  INDEX `fk_events_event_type1_idx` (`id_event_type` ASC) ,
  INDEX `fk_events_users1_idx` (`id_users` ASC) )
ENGINE = MEMORY;


-- -----------------------------------------------------
-- Table `conex`.`advertisement_characteristics`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`advertisement_characteristics` (
  `id_advertisement_characteristics` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_advertisement_characteristics`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`advertisement`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`advertisement` (
  `id_advertisement` INT NOT NULL AUTO_INCREMENT ,
  `id_advertisement_characteristics` INT NOT NULL ,
  `id_users` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `publish_date` DATETIME NULL ,
  `address` VARCHAR(45) NULL ,
  `description` VARCHAR(45) NULL ,
  `value` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_advertisement`) ,
  INDEX `fk_advertisement_users1_idx` (`id_users` ASC) ,
  INDEX `fk_advertisement_advertisement_characteristics1_idx` (`id_advertisement_characteristics` ASC) ,
  CONSTRAINT `fk_advertisement_users1`
    FOREIGN KEY (`id_users` )
    REFERENCES `conex`.`users` (`id_users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_advertisement_advertisement_characteristics1`
    FOREIGN KEY (`id_advertisement_characteristics` )
    REFERENCES `conex`.`advertisement_characteristics` (`id_advertisement_characteristics` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`legal_constitution`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`legal_constitution` (
  `id_legal_constitution` INT NOT NULL AUTO_INCREMENT ,
  `legal_constitution` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_legal_constitution`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`size_company`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`size_company` (
  `id_size_company` INT NOT NULL AUTO_INCREMENT ,
  `size_company` VARCHAR(45) NULL ,
  `created_at` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_size_company`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`company_assets`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`company_assets` (
  `id_company_assets` INT NOT NULL AUTO_INCREMENT ,
  `company_assets` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_company_assets`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`employee_number`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`employee_number` (
  `id_employee_number` INT NOT NULL ,
  `employee_number` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_employee_number`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`company_sector`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`company_sector` (
  `id_company_sector` INT NOT NULL ,
  `company_sector` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_company_sector`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`coverage`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`coverage` (
  `id_coverage` INT NOT NULL ,
  `coverage` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_coverage`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`company`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`company` (
  `id_company` INT NOT NULL AUTO_INCREMENT ,
  `id_users` INT NOT NULL ,
  `id_legal_constitution` INT NOT NULL ,
  `id_size_company` INT NOT NULL ,
  `id_company_assets` INT NOT NULL ,
  `id_employee_number` INT NOT NULL ,
  `id_company_sector` INT NOT NULL ,
  `id_coverage` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `slogan` VARCHAR(45) NULL ,
  `logo` VARCHAR(45) NULL ,
  `address` VARCHAR(45) NULL ,
  `ceo` VARCHAR(45) NULL ,
  `webpage` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_company`) ,
  INDEX `fk_company_legal_constitution1_idx` (`id_legal_constitution` ASC) ,
  INDEX `fk_company_size_company1_idx` (`id_size_company` ASC) ,
  INDEX `fk_company_company_assets1_idx` (`id_company_assets` ASC) ,
  INDEX `fk_company_employee_number1_idx` (`id_employee_number` ASC) ,
  INDEX `fk_company_company_sector1_idx` (`id_company_sector` ASC) ,
  INDEX `fk_company_coverage1_idx` (`id_coverage` ASC) ,
  INDEX `fk_company_users1_idx` (`id_users` ASC) ,
  CONSTRAINT `fk_company_legal_constitution1`
    FOREIGN KEY (`id_legal_constitution` )
    REFERENCES `conex`.`legal_constitution` (`id_legal_constitution` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_size_company1`
    FOREIGN KEY (`id_size_company` )
    REFERENCES `conex`.`size_company` (`id_size_company` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_company_assets1`
    FOREIGN KEY (`id_company_assets` )
    REFERENCES `conex`.`company_assets` (`id_company_assets` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_employee_number1`
    FOREIGN KEY (`id_employee_number` )
    REFERENCES `conex`.`employee_number` (`id_employee_number` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_company_sector1`
    FOREIGN KEY (`id_company_sector` )
    REFERENCES `conex`.`company_sector` (`id_company_sector` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_coverage1`
    FOREIGN KEY (`id_coverage` )
    REFERENCES `conex`.`coverage` (`id_coverage` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_company_users1`
    FOREIGN KEY (`id_users` )
    REFERENCES `conex`.`users` (`id_users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`event_gallery`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`event_gallery` (
  `id_events_gallery` INT NOT NULL AUTO_INCREMENT ,
  `id_events` INT NOT NULL ,
  `image` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_events_gallery`) ,
  INDEX `fk_table1_events1_idx` (`id_events` ASC) ,
  CONSTRAINT `fk_table1_events1`
    FOREIGN KEY (`id_events` )
    REFERENCES `conex`.`events` (`id_events` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`user_email`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`user_email` (
  `id_user_email` INT NOT NULL AUTO_INCREMENT ,
  `id_users` INT NOT NULL ,
  `email` VARCHAR(45) NULL ,
  `domain` VARCHAR(45) NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_user_email`) ,
  INDEX `fk_user_email_users1_idx` (`id_users` ASC) ,
  CONSTRAINT `fk_user_email_users1`
    FOREIGN KEY (`id_users` )
    REFERENCES `conex`.`users` (`id_users` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`event_guest`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`event_guest` (
  `id_event_guest` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `details` TEXT NULL ,
  `speaker_time` DATETIME NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_event_guest`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`event_topic`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`event_topic` (
  `id_event_topic` INT NOT NULL AUTO_INCREMENT ,
  `id_event_guest` INT NOT NULL ,
  `id_events` INT NOT NULL ,
  `event_topic` TEXT NULL ,
  `date` DATETIME NULL ,
  `created_at` TIMESTAMP NULL ,
  PRIMARY KEY (`id_event_topic`) ,
  INDEX `fk_event_topic_event_guest1_idx` (`id_event_guest` ASC) ,
  INDEX `fk_event_topic_events1_idx` (`id_events` ASC) ,
  CONSTRAINT `fk_event_topic_event_guest1`
    FOREIGN KEY (`id_event_guest` )
    REFERENCES `conex`.`event_guest` (`id_event_guest` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_event_topic_events1`
    FOREIGN KEY (`id_events` )
    REFERENCES `conex`.`events` (`id_events` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`products_gallery`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`products_gallery` (
  `id_products_gallery` INT NOT NULL AUTO_INCREMENT ,
  `products_id_products` INT NOT NULL ,
  `image` TEXT NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_products_gallery`) ,
  INDEX `fk_products_gallery_products1_idx` (`products_id_products` ASC) ,
  CONSTRAINT `fk_products_gallery_products1`
    FOREIGN KEY (`products_id_products` )
    REFERENCES `conex`.`products` (`id_products` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `conex`.`service_gallery`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `conex`.`service_gallery` (
  `id_service_gallery` INT NOT NULL AUTO_INCREMENT ,
  `id_service` INT NOT NULL ,
  `image` TEXT NULL ,
  `created_at` TIMESTAMP NOT NULL ,
  PRIMARY KEY (`id_service_gallery`) ,
  INDEX `fk_service_gallery_service1_idx` (`id_service` ASC) ,
  CONSTRAINT `fk_service_gallery_service1`
    FOREIGN KEY (`id_service` )
    REFERENCES `conex`.`service` (`id_service` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
