-- MySQL Script generated by MySQL Workbench
-- 09/20/14 08:05:17
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema nudge
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `nudge` ;
CREATE SCHEMA IF NOT EXISTS `nudge` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `nudge` ;

-- -----------------------------------------------------
-- Table `nudge`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nudge`.`users` ;

CREATE TABLE IF NOT EXISTS `nudge`.`users` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `email` VARCHAR(2000) NULL,
  `password` VARCHAR(255) NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nudge`.`requests`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nudge`.`requests` ;

CREATE TABLE IF NOT EXISTS `nudge`.`requests` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `category_id` INT NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nudge`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nudge`.`categories` ;

CREATE TABLE IF NOT EXISTS `nudge`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nudge`.`questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nudge`.`questions` ;

CREATE TABLE IF NOT EXISTS `nudge`.`questions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(2000) NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nudge`.`requests_questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nudge`.`requests_questions` ;

CREATE TABLE IF NOT EXISTS `nudge`.`requests_questions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `request_id` INT NULL,
  `question_id` INT NULL,
  `answer` VARCHAR(255) NULL,
  `liked` ENUM('none', 'yes', 'no') NULL DEFAULT 'none',
  `purchased` TINYINT(1) NULL DEFAULT 0,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nudge`.`suggestions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nudge`.`suggestions` ;

CREATE TABLE IF NOT EXISTS `nudge`.`suggestions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NULL,
  `product_id` INT NULL,
  `request_id` INT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `nudge`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `nudge`.`products` ;

CREATE TABLE IF NOT EXISTS `nudge`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;