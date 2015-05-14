FORMAT: 1A

# CMW SmartNinja API
Enostaven API za pridobivanje podatkov o avtomobilih, časovnih terminih in možnost rezervacij. API je namenjen SmartNinja tečajnikom.

# Group Avtomobili

Navodila za pridobivanja podatkov o avtomobilih.

# /api/CMW/cars

## Pridobi seznam avtomobilov [GET] 

+ Response 200 (application/json)

    [
		{
			id: 1,
			name: "Kellen",
			brand: "CMW",
			type: "Hatchback",
			color: "OrangeRed",
			image: "http://lorempixel.com/400/200/transport/1",
			description: "Accusamus nihil repellat vero omnis voluptates id amet et. Suscipit qui recusandae totam nulla quam ipsam. Cupiditate sed natus debitis voluptas aut. Sit repudiandae esse perspiciatis dignissimos error. Itaque quibusdam tempora velit porro ut velit soluta. Eligendi occaecati debitis et saepe."
		},
		{
			id: 2,
			name: "Rico",
			brand: "CMW",
			type: "Jeep",
			color: "DarkGoldenRod",
			image: "http://lorempixel.com/400/200/transport/2",
			description: "Ipsum inventore sed libero et. Qui suscipit a deserunt laudantium quibusdam. Nostrum soluta qui ipsam non ipsum. Reiciendis aperiam et fuga doloribus nisi. Cumque est ducimus temporibus modi saepe architecto unde. Dicta eveniet exercitationem aut porro sed magni."
		},
		{
			id: 3,
			name: "Joan",
			brand: "CMW",
			type: "Hatchback",
			color: "Brown",
			image: "http://lorempixel.com/400/200/transport/3",
			description: "Non voluptates ut optio quos qui illo error nihil. Vero a officia id corporis incidunt saepe. Esse hic eligendi quos culpa ut ab. Sed a nam et sint autem inventore aut."
		}
	]
        
# /api/CMW/cars/{id}

## Pridobi podatke o avtomobilu [GET] 

+ Response 200 (application/json)

		{
			id: 1,
			name: "Kellen",
			brand: "CMW",
			type: "Hatchback",
			color: "OrangeRed",
			image: "http://lorempixel.com/400/200/transport/1",
			description: "Accusamus nihil repellat vero omnis voluptates id amet et. Suscipit qui recusandae totam nulla quam ipsam. Cupiditate sed natus debitis voluptas aut. Sit repudiandae esse perspiciatis dignissimos error. Itaque quibusdam tempora velit porro ut velit soluta. Eligendi occaecati debitis et saepe."
		}

# Group Termini

Navodila za pridobivanja podatkov o terminih.

# /api/CMW/timeslots

## Pridobi seznam terminov [GET] 

+ Response 200 (application/json)

	[
		{
			id: 1,
			carId: 6,
			duration: 15,
			date: "04.05.15",
			time: "04:00",
			location: "999 Ruecker Union Suite 186 Ernabury, WA 84631",
			reserved: false,
			contactEmail: "Joan.Doyle@Lynch.net"
		},
		{
			id: 2,
			carId: 8,
			duration: 60,
			date: "03.05.15",
			time: "13:00",
			location: "4436 Streich Views Fadelville, OK 19956-1054",
			reserved: false,
			contactEmail: "Pouros.Serena@Streich.net"
		},
		{
			id: 3,
			carId: 9,
			duration: 60,
			date: "02.05.15",
			time: "03:00",
			location: "11856 Ullrich Lake Vernerstad, MN 31068-7134",
			reserved: false,
			contactEmail: "Ephraim21@Cummings.com"
		}
	]

# /api/CMW/timeslots/{id}


## Pridobi podatke o terminu [GET] 

+ Response 200 (application/json)
	
	{
		id: 1,
		carId: 6,
		duration: 15,
		date: "04.05.15",
		time: "04:00",
		location: "999 Ruecker Union Suite 186 Ernabury, WA 84631",
		reserved: false,
		contactEmail: "Joan.Doyle@Lynch.net"
	}

# Group Rezervacije
# /api/CMW/reservations

Pri rezervaciji termina morate podati id od termina ter veljaven (uporabnikov) email.

## Ustvari novo rezervacijo [POST] 


+ Request JSON message

	+ Body
	{
		"timeslotId": 1,
		"email": "john@example.com"
	}

+ Response 200

	{
		"status" : "success"
	}

+ Response 400
	
	{	
    	"errors": 
	    [
	        {
	            "type": "email",
	            "message": "A valid email is required."
	        },
	        {
	            "type": "timeslotId",
	            "message": "A valid timeslotId is required."
	        }
	    ]
}