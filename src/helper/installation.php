<?php

global $db;

$table_product = "
CREATE TABLE IF NOT EXISTS `product` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `NR` VARCHAR(255) NULL DEFAULT NULL ,
    `Name` VARCHAR(255) NULL DEFAULT NULL ,
    `Product_URL` VARCHAR(500) NULL DEFAULT NULL ,
    `Search_Keywords` VARCHAR(255) NULL DEFAULT NULL , 
    `Description` TEXT NULL DEFAULT NULL ,
    `Category` VARCHAR(255) NULL DEFAULT NULL ,
    `Category_ID` INT NOT NULL DEFAULT '0' ,
    `SubCategory` VARCHAR(255) NULL DEFAULT NULL ,
    `SubCategory_ID` INT NOT NULL DEFAULT '0' ,
    `Brand` VARCHAR(255) NULL DEFAULT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;";

$db->query($table_product);

$table_product_item = "
CREATE TABLE IF NOT EXISTS `product_item` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    `Product_ID` INT UNSIGNED NOT NULL ,
    `SKU` VARCHAR(255) NULL DEFAULT NULL ,
    `Price` DECIMAL(15,2) NOT NULL DEFAULT '0' ,
    `Retail_Price` DECIMAL(15,2) NOT NULL DEFAULT '0' ,
    `Thumbnail_URL` INT NULL DEFAULT NULL ,
    `Color` VARCHAR(255) NULL DEFAULT NULL ,
    `Color_Family` VARCHAR(255) NULL DEFAULT NULL ,
    `Size` VARCHAR(255) NULL DEFAULT NULL ,
    `Size_Family` VARCHAR(255) NULL DEFAULT NULL ,
    `Occassion` VARCHAR(255) NULL DEFAULT '[]' ,
    `Season` VARCHAR(255) NULL DEFAULT '[]' ,
    `Rating_Avg` DECIMAL(15,2) NOT NULL DEFAULT '0' ,
    `Rating_Count` INT UNSIGNED NOT NULL DEFAULT '0' ,
    `Warehouse` VARCHAR(500) NULL DEFAULT NULL ,
    `Active` BOOLEAN NOT NULL DEFAULT TRUE ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;";

$db->query($table_product_item);