# API for converting numbers or currencies to words

## API

/number?locale=:locale&number=:number

/currency?locale=:locale&number=:number&currency=:currency

### Available locale

Language             | Identifier | Number | Currency | Angle | Temperature 
---------------------|------------|--------|----------|-------|-------------
Belgian French       | fr_BE      | +      | -        | -     | -
Brazilian Portuguese | pt_BR      | +      | +        | -     | -
Bulgarian            | bg         | +      | -        | -     | -
Czech                | cs         | +      | -        | -     | -
Danish               | dk         | +      | +        | -     | -
Dutch                | nl         | +      | -        | -     | -
English              | en         | +      | +        | -     | -
Estonian             | et         | +      | -        | -     | -
German               | de         | +      | -        | -     | -
French               | fr         | +      | +        | -     | -
Hungarian            | hu         | +      | +        | -     | -
Indonesian           | id         | +      | -        | -     | -
Italian              | it         | +      | -        | -     | -
Lithuanian           | lt         | +      | -        | -     | -
Latvian              | lv         | +      | -        | -     | -
Polish               | pl         | +      | +        | -     | -
Romanian             | ro         | +      | +        | -     | -
Spanish              | es         | +      | +        | -     | - 
Russian              | ru         | +      | +        | -     | -
Swedish              | sv         | +      | -        | -     | -
Turkish              | tr         | +      | -        | -     | -
Ukrainian            | uk         | +      | +        | -     | -

Angle and temperature not supported yet

### Available currency identifiers
All ISO 4217 currency identifiers are supported

This application depends on https://github.com/kwn/number-to-words

## Install

### Using Docker
This repository is accessible on Dockerhub
```sh
docker run -p 80:80 --name="bitweb_number_to_words_api" bitweb/number-to-words-api
```
