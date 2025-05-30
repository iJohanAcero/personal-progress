import os
import shutil

from tkinter import Tk, filedialog

#Ruta donde estan los archivos a ordenar


#Crear carpetas para cada tipo de archivo sino existen

ventana = Tk()
ventana.withdraw()

ruta = filedialog.askdirectory(title="Seleccione la carpeta a ordenar")


extensiones = {
    ".jpg":"imagenes",
    ".png":"imagenes",
    ".pdf":"PDFs",
    ".docx":"Words",
    ".doc":"Words",
    ".mp4":"Videos",
    ".mp3":"Audios",
    ".ogg":"Audios",
    ".rar":"WinRar",
    ".pptx":"PPT",
    ".sql":"SQLText",
}


# Crear carpetas por ruta - las une por el join 

for carpeta in set(extensiones.values()): #Sirve para usar el diccionario y me recupere los valores unicos
    ruta_carpeta = os.path.join(ruta,carpeta)
    
    if not os.path.exists(ruta_carpeta): #Si no existe la carpeta crerlas
        os.makedirs(ruta_carpeta)
        


for archivo in os.listdir(ruta): #Listar archivos en la ruta
    
    ruta_archivo=os.path.join(ruta,archivo)
    
    if os.path.isfile(ruta_archivo): #Si es archivo
        nombre,extension=os.path.splitext(archivo) #Obtener el nombre y la extension del archivo
        extension =extension.lower() #Convertir a minuscula
        
        if extension in extensiones: #Si la extension esta en el diccionario
            destino=os.path.join(ruta,extensiones[extension], archivo) #Crear la ruta destino
            shutil.move(ruta_archivo,destino)