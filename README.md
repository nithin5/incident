1)copy the file to webroot folder                                                                                     

2)change the db in .env file                                                           

3)run the command :  php artisan migrate                                                         

4)use postman application and run post method .for eg: url will be like http://127.0.0.1:8000/incidents/       

5)used the json as                                        
{
      "id": 0,
      "location": {
        "latitude": 12.9231501,
        "longitude": 74.7818517
      },
      "title": "gggg",
      "category": 1,
      "people": [
        {
          "name": "Name of person",
          "type": "staff"
        },
        {
          "name": "Name of person",
          "type": "witness"
        },
        {
          "name": "Name of person",
          "type": "staff"
        }
      ],
      "comments": "This is a string of comments",
      "incidentDate": "2020-09-01T13:26:00+00:00",
      "createDate": "2020-09-01T13:32:59+01:00",
      "modifyDate": "2020-09-01T13:32:59+01:00"
    }
    
    6)simularly run get comman from postman
