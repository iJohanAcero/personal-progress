import os
import shutil

#Ruta donde estan los archivos a ordenar
ruta = "H:\SENA\CURSOS_PERSONALES\AUTOMATION\ordenar"

#Crear carpetas para cada tipo de archivo sino existen

tipo = ["Imagenes", "Videos", "Words", "PDFs", "Audios","WinRar","PPT","SQLText"]


# Crear carpetas por ruta - las une por el join 

for carpeta in tipo:
    ruta_carpeta = os.path.join(ruta,carpeta)
    
    if not os.path.exists(ruta_carpeta): #Si no existe la carpeta crerlas
        os.makedirs(ruta_carpeta)
        


for archivo in os.listdir(ruta): #Listar archivos en la ruta
    
    if archivo.endswith(".jpg") or archivo.endswith(".png"): #Si el archivo es una imagen (termina en jpg o en png)
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"Imagenes",archivo))
        #    Se mueve de aqui ----------------------------- Hasta aqui
    
    elif archivo.endswith(".mp4"):
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"Videos",archivo))
    
    elif archivo.endswith(".docx") or archivo.endswith(".doc"):
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"Words",archivo))
        
    elif archivo.endswith(".pdf"):
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"PDFs",archivo))
        
    elif archivo.endswith(".ogg"):
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"Audios",archivo))
        
    elif archivo.endswith(".rar"):
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"WinRar",archivo))
    
    elif archivo.endswith(".pptx") or archivo.endswith(".ppt"):
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"PPT",archivo))
    
    elif archivo.endswith(".sql"):
        shutil.move(os.path.join(ruta,archivo), os.path.join(ruta,"SQLText",archivo))