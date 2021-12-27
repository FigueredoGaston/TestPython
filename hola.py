#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
    Creado por Gastón Figueredo el 23-12-2021
    Función encargada de tomar dato pasado como argumeto
    y devolver una cadena de texto.
"""

import sys

def main():
    n = (lambda name: f"Hola {' '.join(sys.argv[1:])}")(sys.argv[1])
    print(n)

if __name__ == '__main__':
    main()