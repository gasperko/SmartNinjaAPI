FORMAT: 1A

# Eshop SmartNinja API
A simple API for retrieving data about products. This API is meant for SmartNinja students.

# Group Categories

Instructions for using the API to retrieve information about categories.

# /api/eshop/categories

## Get a list of categories [GET] 

+ Response 200 (application/json)

    [
        {
            id: 1,
            category: "Big toys"
        },
        {
            id: 2,
            category: "Medium toys"
        },
        {
            id: 3,
            category: "Small toys"
        },
        {
            id: 4,
            category: "Games"
        }
    ] 
    
# /api/eshop/categories/{id}/products{?query, onlyStocked}

## Get a list of products for a category [GET] 

+ query (string, optional) - filter by name
+ onlyStocked (boolean, optional) - filter by stocked products
    + default: false
+ onlyOnSale (boolean, optional) - filter by products on sale
    + default: false
    
+ Response 200 (application/json)

    [
        {
            id: 1,
            categoryId: 3,
            name: "Monty",
            color: "aqua",
            tagline: "Accusamus nihil repellat vero omnis voluptates id amet et et.",
            description: "Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit.",
            brand: "Barton, Flatley and Muller",
            price: 49.99,
            stock: 2,
            availableOn: null,
            image: "http://lorempixel.com/300/300/people/1",
            onSale: false
        },
        {
            id: 2,
            categoryId: 3,
            name: "Jackeline",
            color: "yellow",
            tagline: "Saepe architecto unde non dicta eveniet.",
            description: "Porro sed magni cupiditate sit. Voluptas sint non voluptates. Optio quos qui illo error. Laborum vero a officia id corporis. Saepe provident esse hic eligendi. Culpa ut ab voluptas sed a. Et sint autem inventore aut officia aut.",
            brand: "Kling Ltd",
            price: 19.99,
            stock: 0,
            availableOn: "16.05.2015",
            image: "http://lorempixel.com/300/300/transport/2",
            onSale: true
        },
        {
            id: 5,
            categoryId: 3,
            name: "Kamryn",
            color: "blue",
            tagline: "Laudantium perferendis eveniet quam vero fuga.",
            description: "Temporibus maxime sint suscipit laudantium quod magni. Voluptas fuga non autem non non explicabo et neque. Ex quaerat ut aut at consequatur non rerum in. Voluptas molestiae fuga quod cum non qui. Cupiditate incidunt id sunt dolorem. Voluptatem perferendis molestiae est. Iure possimus ab in hic. Odio sed vitae maiores ex beatae reprehenderit exercitationem corrupti.",
            brand: "Hudson Ltd",
            price: 19.99,
            stock: 3,
            availableOn: null,
            image: "http://lorempixel.com/300/300/technics/5",
            onSale: false
        }
    ]

# Group Products

Instructions for retrieving information about products.

# /api/eshop/products{?query, onlyStocked}

## Get a list of products [GET] 

+ query (string, optional) - filter by name
+ onlyStocked (boolean, optional) - filter by stocked products
    + default: false
+ onlyOnSale (boolean, optional) - filter by products on sale
    + default: false

+ Response 200 (application/json)

    [
        {
            id: 1,
            categoryId: 3,
            name: "Monty",
            color: "aqua",
            tagline: "Accusamus nihil repellat vero omnis voluptates id amet et et.",
            description: "Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit.",
            brand: "Barton, Flatley and Muller",
            price: 49.99,
            stock: 2,
            image: "http://lorempixel.com/300/300/people/1",
            onSale: false,
            availableOn: null
        },
        {
            id: 2,
            categoryId: 3,
            name: "Jackeline",
            color: "yellow",
            tagline: "Saepe architecto unde non dicta eveniet.",
            description: "Porro sed magni cupiditate sit. Voluptas sint non voluptates. Optio quos qui illo error. Laborum vero a officia id corporis. Saepe provident esse hic eligendi. Culpa ut ab voluptas sed a. Et sint autem inventore aut officia aut.",
            brand: "Kling Ltd",
            price: 19.99,
            stock: 0,
            image: "http://lorempixel.com/300/300/transport/2",
            onSale: true,
            availableOn: "2015-05-16"
        },
        {
            id: 3,
            categoryId: 1,
            name: "Lina",
            color: "blue",
            tagline: "Nisi molestiae quidem ut sunt et quidem est accusamus.",
            description: "Fuga est placeat rerum ut et. Ex eveniet facere sunt quia. Aut nam et eum architecto fugit repellendus illo veritatis. Ex esse veritatis voluptate vel possimus. Aut incidunt sunt cumque asperiores incidunt iure sequi. Culpa rem aut rerum exercitationem est rem. Voluptas fuga totam reiciendis. Architecto fugiat nemo omnis consequatur recusandae qui cupiditate. Quod veritatis vel optio provident. Incidunt magnam molestias et quibusdam et ab quo voluptatum. Ipsum voluptatibus est accusantium eveniet.",
            brand: "Kub, Roob and Brakus",
            price: 9.99,
            stock: 2,
            image: "http://lorempixel.com/300/300/animals/3",
            onSale: false,
            availableOn: null
        }
    ]
    
# /api/eshop/products/{id}

## Get information about a specific product [GET] 

+ Response 200 (application/json)

    {
        id: 1,
        categoryId: 3,
        name: "Monty",
        color: "aqua",
        tagline: "Accusamus nihil repellat vero omnis voluptates id amet et et.",
        description: "Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit.",
        brand: "Barton, Flatley and Muller",
        price: 49.99,
        stock: 2,
        image: "http://lorempixel.com/300/300/people/1",
        onSale: false,
        availableOn: null
    }
    
# Group Orders
# /api/eshop/orders

When creating a new order you have to supply cart and user information.

## Create a new order [POST] 


+ Request JSON message

	+ Body
	
        {
            "firstName" : "John",
            "lastName" : "Example",
            "email": "john@example.com",
            "address": "One way 123",
            "country" : "Freelandia",
            "city" : "York",
            "zip" : 43533,
            "products":
            [
                {
                    "id": 1, 
                    "quantity": 1
                }
            ]
         }

+ Response 200

	{
		"status" : "success"
	}

+ Response 400
	
	{
        "errors": [
            {
                "type": "email",
                "message": "A valid email is required."
            },
            {
                "type": "products",
                "message": "You need at least one product."
            },
            {
                "type": "firstName",
                "message": "A valid first name is required."
            },
            {
                "type": "lastName",
                "message": "A valid last name is required."
            },
            {
                "type": "address",
                "message": "A valid address is required."
            },
            {
                "type": "country",
                "message": "A valid country is required."
            },
            {
                "type": "city",
                "message": "A valid city is required."
            },
            {
                "type": "zip",
                "message": "A valid zip is required."
            }
        ]
    }