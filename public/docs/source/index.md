---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
#Devices

## api/devices (GET)

> Example response:

```json
{
    "data": [
        {
            "id": 1,
            "name": "updated",
            "battery_status": "this is a battery status",
            "longitude": "5151215",
            "latitude": "44848",
            "created_at": "2018-07-04 20:13:37",
            "updated_at": "2018-07-04 20:46:56"
        },
        {
            "id": 2,
            "name": "Dr. Sheldon Hettinger I",
            "battery_status": "pIK5H",
            "longitude": "-85.859926",
            "latitude": "9.119757",
            "created_at": "2018-07-04 20:13:37",
            "updated_at": "2018-07-04 20:13:37"
        }
    ],
    "links": {
        "first": "http://localhost:8000/api/devices?page=1",
        "last": "http://localhost:8000/api/devices?page=6",
        "prev": null,
        "next": "http://localhost:8000/api/devices?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 6,
        "path": "http://localhost:8000/api/devices",
        "per_page": 2,
        "to": 2,
        "total": 11
    }
}
```

### HTTP Request
`GET api/devices`

## api/devices/{id} (GET)

> Example response:

```json
{
    "data": {
        "id": 1,
        "name": "updated",
        "battery_status": "this is a battery status",
        "longitude": "5151215",
        "latitude": "44848",
        "created_at": "2018-07-04 20:13:37",
        "updated_at": "2018-07-04 20:46:56"
    }
}
```

### HTTP Request
`GET api/devices/{id}`

## api/devices (STORE)

### HTTP Request
`POST api/devices`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
name | string | required & minimum 3 chars
battery_status | string | required 
longitude | string | required 
latitude | string | required

## api/devices/{id} (PUT)

### HTTP Request
`PUT api/devices/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
name | string | required & minimum 3 chars
battery_status | string | required 
longitude | string | required 
latitude | string | required

## api/devices/{id}  (DELETE)

### HTTP Request
`DELETE api/devices/{id}`