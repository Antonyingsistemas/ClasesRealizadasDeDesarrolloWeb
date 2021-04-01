#listas con []
demo = [1, "hello", 1.34, True, [1, 2, 3]]
colors = ['red','green','blue']

#constructor
numers_list = list((1, 2, 3, 4))        #pasamos a supla para poder imprimir, lo juntamos en uno solo en ves de 4 datos
# print(numers_list)

#rangos
# r = list(range(1, 100))                    #del 1 hasta n
# print(r)

#elementos que tiene la lista :D
# print(len(colors))
# print(len(demo))

# print(colors[0])
# print(colors[-1])

# print('green' in colors)        #si green esta en colors(lista)
# print('violet' in colors)       #si violet esta en colors(lista)

# print(colors)
# colors[1] = 'yellow'
# print(colors)

# print(dir(colors))

#AGREGANDO colores
# colors.append('violet')
# colors.append(('violet','yellow'))  #dupla

# colors.extend(('violet','yellow'))  #extend ,agregar mas valores
# colors.extend(('pink','black'))  #extend ,agregar mas valores

colors.insert(1, 'violet')          #agregar elemento en una posicion
colors.insert(-1, 'orange')          #agregar elemento en una posicion
colors.insert(len(colors), 'pink')    #agrega al final (ultimo elemento, valor para agregar)

# print(colors)

#ELIMINANDO colores
# colors.pop()                        #quita el ultimo valor
# colors.pop(1)                       #quitar el indice segun el numero
# colors.remove('green')              #quitar el valor green
# colors.clear()                      #quita todos los valores

# colors.sort()                          #ordena
# colors.sort(reverse=True)            #ordena de manera inversa

#reconociendo el indice del valor
# print(colors.index('green'))

#contando el valor
print(colors.count('green'))

print(colors)


