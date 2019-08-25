# Simple Time Field for Craft CMS 3.x

![Icon](resources/timefield.png)

A simple time field type.

## Background

Sometimes you need a field in the control panel that allows you to enter time without a selector and store it as a simple text into the database. No time zone conversion, no datetime column, no backend validation. Just a valid time as text for later use. 

## Requirements

 * Craft CMS >= 3.0.0

## Installation

Open your terminal and go to your Craft project:

``` shell
cd /path/to/project
composer require codemonauts/craft-time-field
./craft install/plugin timefield
```

## Usage

After installation, the control panel can be used to create fields for time. 

With ❤ by [codemonauts](https://codemonauts.com)
