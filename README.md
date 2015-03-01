# Ctable
A html table generator

## About

A very light and simple class that genrate a html table from an array with values.

    PHP 5 >= 5.3.0

## Introduction

Just create an object $ctable = new \phpe\HTMLTable\CTable();

Then, if you want to change the table headers, write the following(if you dont want to, skip it):

$table = $ctable->setTableHeading('array with names', 'css class name');

To get the html table:

$table = $ctable->getTable('array with values', 'css class name');

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phphille/Ctable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/phphille/Ctable/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/phphille/Ctable/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/phphille/Ctable/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/phphille/Ctable/badges/build.png?b=master)](https://scrutinizer-ci.com/g/phphille/Ctable/build-status/master)
