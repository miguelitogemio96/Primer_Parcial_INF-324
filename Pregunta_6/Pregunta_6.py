# -*- coding: utf-8 -*-
"""
Created on Sat Oct  2 21:56:35 2021

@author: migue
"""
import pymysql
import tkinter

def agregar_2_estudiantes():
    miConexion = pymysql.connect( host='localhost', user= 'root', passwd='mysql', db='miguelbd' )
    cur = miConexion.cursor()
    e1 = ['89898989','Carla','89898989','carla2020', '1994-01-17', '03']
    e2 = ['79797979','alberto75','79797979','Alberto Mamani', '1999-05-12', '07']
    sql = "INSERT INTO usuarios (ci, usuario, password, tipo) VALUES ('"+e1[0]+"','"+e1[1]+"','"+e1[2]+"','e')"
    cur.execute(sql)
    sql = "INSERT INTO personas (ci, nombre, fnacimiento, departamento) VALUES ('"+e1[0]+"','"+e1[3]+"','"+e1[4]+"','"+e1[5]+"')"
    cur.execute(sql)
    sql = "INSERT INTO usuarios (ci, usuario, password, tipo) VALUES ('"+e2[0]+"','"+e2[1]+"','"+e2[2]+"','e')"
    cur.execute(sql)
    sql = "INSERT INTO personas (ci, nombre, fnacimiento, departamento) VALUES ('"+e2[0]+"','"+e2[3]+"','"+e2[4]+"','"+e2[5]+"')"
    cur.execute(sql)
    miConexion.commit()

def agregar():
    ci = marco2.get().strip()
    usuario = marco3.get().strip()
    password = marco4.get().strip()
    nombre = marco5.get().strip()
    fnacimiento = marco6.get().strip()
    departamento = marco7.get().strip()
    marco2.delete(0,"end")
    marco3.delete(0,"end")
    marco4.delete(0,"end")
    marco5.delete(0,"end")
    marco6.delete(0,"end")
    marco7.delete(0,"end")
    miConexion = pymysql.connect( host='localhost', user= 'root', passwd='mysql', db='miguelbd' )
    cur = miConexion.cursor()
    sql = "INSERT INTO usuarios (ci, usuario, password, tipo) VALUES ('"+ci+"','"+usuario+"','"+password+"','e')"
    cur.execute(sql)
    sql = "INSERT INTO personas (ci, nombre, fnacimiento, departamento) VALUES ('"+ci+"','"+nombre+"','"+fnacimiento+"','"+departamento+"')"
    cur.execute(sql)
    miConexion.commit()
    
    
#  agregar_2_estudiantes()

principal = tkinter.Tk()
principal.title('Nuevo Estudiante')
etiqueta1 = tkinter.Label(principal, text="FORMULARIO DE REGISTRO")
marco1 = tkinter.Frame(principal, bd=8, relief="groove")
etiqueta2 = tkinter.Label(marco1, text="Ci:")
marco2 = tkinter.Entry(marco1, width=18)
etiqueta3 = tkinter.Label(marco1, text="Usuario:")
marco3 = tkinter.Entry(marco1, width=18)
etiqueta4 = tkinter.Label(marco1, text="Contraseña:")
marco4 = tkinter.Entry(marco1, width=18)
etiqueta5 = tkinter.Label(marco1, text="Nombres:")
marco5 = tkinter.Entry(marco1, width=18)
etiqueta6 = tkinter.Label(marco1, text="F-Nacimiento:")
marco6 = tkinter.Entry(marco1, width=18)
etiqueta7 = tkinter.Label(marco1, text="Cod Departamento")
marco7 = tkinter.Entry(marco1, width=18)
enviar=tkinter.Button(marco1, text="Agregar", command=agregar)
salir=tkinter.Button(marco1, text="Salir")
etiqueta1.grid(row=0, column=1, pady=10)
marco1.grid(padx=10, pady=10, row=1, column=1)
etiqueta2.grid(row=0, column=0)
marco2.grid(row=0, column=1, padx=10)
etiqueta3.grid(row=1, column=0)
marco3.grid(row=1, column=1, padx=10 )
etiqueta4.grid(row=2, column=0)
marco4.grid(row=2, column=1, padx=10)
etiqueta5.grid(row=3, column=0)
marco5.grid(row=3, column=1, padx=10)
etiqueta6.grid(row=4, column=0)
marco6.grid(row=4, column=1, padx=10)
etiqueta7.grid(row=5, column=0)
marco7.grid(row=5, column=1, padx=10)
enviar.grid(row=7,column=2)
salir.grid(row=7, column=3)
principal.mainloop() 

