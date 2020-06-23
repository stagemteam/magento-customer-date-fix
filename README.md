# Fix wrong Customer creation date

## Installation

### With Composer
Add next config to your `composer.json`
```json
  "require": {
    ...
    "stagem/magento-customer-date-fix": "dev-master"
  },
  "repositories": [
    ...
    {
      "type": "vcs",
      "url": "https://github.com/stagemteam/magento-customer-date-fix.git"
    }
  ],
```

After that, don't forget to run
```bash
composer update
```

## Prerequisites
You should reset wrong value in `created_at` field which is equal to "0000-00-00 00:00:00".

Run next SQL from your favorite MySQL client:
```sql
UPDATE `customer_entity`
    SET created_at = "2019-01-01 09:00:00"
    WHERE created_at =  "0000-00-00 00:00:00"
``` 

After that all new customers will be created with correct value in `created_at` field.
