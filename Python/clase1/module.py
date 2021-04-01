# own modules - modulo propio
# thirdy party modules - modulos de terceros https://pypi.org/
# python modules - modulos de python https://docs.python.org/3/py-modindex.html

# import datetime                               #solo traigo uno
from datetime import timedelta, date            #traigo directamente el timedelta

# print(datetime.timedelta(minutes=64))
# print(timedelta(minutes=64))
# print(date.today())

#TRAYENDO MODULO PERSONAL DE fmath.py
from fmath import add, substract

# fmath.add(1,2)
# fmath.substract(5,2)

# add(5,6)
# substract(10,4)

#INSTALANDO MODULOS "python.exe -m pip install --upgrade pip"

from colorama import Fore, Style, init

init(convert=True)
print(Fore.RED +"Hello World")

# FLASK , DJANGO , TKINTER , MODULOS , CLASES ORIENTACION A OBJETOS , 

