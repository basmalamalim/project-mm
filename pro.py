from tkinter import *
from gtts import gTTS
import os
from playsound import playsound

root=Tk()
root.title("Text to Speech")
label=Label(root,text="Text to speech",font="Times 20",fg="brown")
label.pack(pady=10)

labe2=Label(root,text="Enter your text :-",font="Times 20",fg="brown")
labe2.pack(padx=20,pady=20,ipady=5,expand=True,anchor="w")

entry=Entry(root,width=30)
entry.pack(padx=20,pady=10,fill=X,ipady=5,expand=True,anchor="center")

def playaudio():
    mytext=entry.get()
    myjob=gTTS(text=mytext)
    if os.path.exists("audio.mp3") :
        os.remove("audio.mp3")
    myjob.save('audio.mp3')
    playsound('audio.mp3')

button1= Button(root ,text="Play" ,font="bold" ,bg="pink" ,fg="brown" ,width=18 ,command=playaudio)
button1.pack(side=LEFT ,padx=20 ,pady=40 ,ipady=5 ,anchor="sw")

def exitfun() :
    root.quit()

button2= Button(root ,text="Exit" ,font="bold" ,bg="red" ,fg="black" ,width=18 ,command=exitfun)
button2.pack(side=LEFT ,padx=20 ,pady=40 ,ipady=5 ,anchor="s")

def deletefun() :
    entry.delete(0,END)

button3= Button(root ,text="Set" ,font="bold" ,bg="cornflowerblue" ,fg="blue" ,width=18 ,command=deletefun)
button3.pack(side=LEFT ,padx=20 ,pady=40 ,ipady=5 , anchor="se")   
root.mainloop()
