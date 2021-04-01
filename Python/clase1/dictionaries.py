#permite definir datos a partir de datos y valores

product =   {
    "name": "book",
    "quantity": 3,
    "price": 4.99
}

persona =   {
    "first_name": "ryan",
    "last_name": "ray"
}

# print(type(product))
# print(type(persona))

# print(persona.keys())               #obteniendo los valores de las llaves
# print(persona.items())              #obteniendo los items o valores dentro de las llaves

# del persona                         #eliminando persona
# print(persona)

persona.clear()                     #elimina los datos o items
print(persona)                      

products = [
    {"name": "book", "price": 10.99},
    {"name": "laptop", "price": 1000}
]
print(products)





